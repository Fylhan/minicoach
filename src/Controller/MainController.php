<?php
namespace Controller;

use Utils\Tools;
use Http\Request;
use Http\Response;

class MainController
{
	private $request;

	private $response;

	private $tplEngine;

	private static $instance = null;
	
	// --- Constructor
	private function __construct()
	{
		$this->request = Request::getInstance();
		$this->response = Response::getInstance();
		
		// Préparation du moteur de template
		$loader = new \Twig_Loader_Filesystem(array(
			TPL_PATH,
			CSS_PATH,
			JS_PATH,
		));
		$this->tplEngine = new \Twig_Environment($loader, array(
			'cache' => CACHE_PATH . '/twig',
			'debug' => DEBUG,
			'charset' => CHARSET
		));
	}

	public static function getInstance()
	{
		if (is_null(self::$instance)) {
			self::$instance = new self();
		}
		return self::$instance;
	}
	
	public function dispatch($defaults = null)
	{
		try {
			$this->render('layout.twig.html');
			$this->response->printOut();
		}
		catch (Exception $e) {
			$this->_launchException($e)->printOut();
		}
	}

	public function render($tplPath, $params = array())
	{
	global $app;
		// -- Ajout des params par défaut
		$globalParams = array(
			'JS_PATH' => JS_PATH,
			'CSS_PATH' => CSS_PATH,
			'IMG_PATH' => IMG_PATH,
			'app' => $app,
			'page' => $this->response->getPage(),
			'flash' => $this->response->getFlash()
		);
		// -- Préparation des paramêtres
		$this->response->addVars($globalParams);
		$this->response->addVars($params);
		
		// -- Minify CSS and JS (TODO: move somewhere else)
		if (DEBUG) {
			$cssFiles = array(
				'ie',
				'style',
			);
			foreach ($cssFiles as $cssFile) {
				if (DEBUG || ! is_file(CSS_PATH . '/' . $cssFile . '.min.css')) {
					file_put_contents(CSS_PATH . '/' . $cssFile . '.min.css', Tools::minifyCss(file_get_contents(CSS_PATH . '/' . $cssFile . '.css')));
				}
			}
			$jsFiles = array(
				'html5',
			);
			foreach ($jsFiles as $jsFile) {
				if (DEBUG || ! is_file(JS_PATH . '/' . $jsFile . '.min.js')) {
					file_put_contents(JS_PATH . '/' . $jsFile . '.min.js', Tools::minifyJs(file_get_contents(JS_PATH . '/' . $jsFile . '.js')));
				}
			}
		}
		
		// -- Création du template
		$tpl = $this->tplEngine->loadTemplate($tplPath);
		$body = $tpl->render($this->response->getVars());
		// -- Ajout du body
		$this->response->setBody($body);
	}

	private function _launchException($e)
	{
		$error = $e->__toString();
		$this->response->addVar('error', $error);
		if ($e instanceof MVCException) {
			$this->response->addVar('metaTitle', 'Erreur - Page introuvable');
			$this->response->addVar('page', $e->getPage());
			$this->render('error/404.tpl');
		}
		else {
			$this->response->addVar('metaTitle', 'Erreur critique');
			$this->render('error/500.tpl');
		}
		logThatException($e);
		return $this->response;
	}
	
	// --- Set/Get
	public function getResponse()
	{
		return $this->response;
	}

	public function getRequest()
	{
		return $this->request;
	}
}
?>