<?php

/* layout.twig.html */
class __TwigTemplate_e7d5e2baf520a9b0732e5f51926fc4f8d5c22aef7532fbf9bf88257c7629ca16 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'stylesheets' => array($this, 'block_stylesheets'),
            'properties' => array($this, 'block_properties'),
            'header' => array($this, 'block_header'),
            'nav' => array($this, 'block_nav'),
            'content' => array($this, 'block_content'),
            'footer' => array($this, 'block_footer'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html lang=\"";
        // line 2
        if (isset($context["app"])) { $_app_ = $context["app"]; } else { $_app_ = null; }
        echo twig_escape_filter($this->env, (($this->getAttribute($_app_, "locale", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($_app_, "locale"), "fr_FR")) : ("fr_FR")), "html", null, true);
        echo "\">
<head>
\t<meta charset=\"";
        // line 4
        if (isset($context["app"])) { $_app_ = $context["app"]; } else { $_app_ = null; }
        echo twig_escape_filter($this->env, (($this->getAttribute($_app_, "charset", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($_app_, "charset"), "UTF-8")) : ("UTF-8")), "html", null, true);
        echo "\" />
\t<title>";
        // line 5
        if (isset($context["page"])) { $_page_ = $context["page"]; } else { $_page_ = null; }
        if (isset($context["app"])) { $_app_ = $context["app"]; } else { $_app_ = null; }
        echo twig_escape_filter($this->env, (($this->getAttribute($_page_, "title", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($_page_, "title"), $this->getAttribute($_app_, "name"))) : ($this->getAttribute($_app_, "name"))), "html", null, true);
        echo "</title>
\t<meta name=\"viewport\" content=\"width=device-width, initial-scale=1\"/>
\t<meta name=\"author\" content=\"";
        // line 7
        if (isset($context["app"])) { $_app_ = $context["app"]; } else { $_app_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_app_, "authors"), "html", null, true);
        echo "\" />
\t<meta name=\"description\" content=\"";
        // line 8
        if (isset($context["page"])) { $_page_ = $context["page"]; } else { $_page_ = null; }
        if (isset($context["app"])) { $_app_ = $context["app"]; } else { $_app_ = null; }
        echo twig_escape_filter($this->env, (($this->getAttribute($_page_, "description", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($_page_, "description"), $this->getAttribute($_app_, "description"))) : ($this->getAttribute($_app_, "description"))), "html", null, true);
        echo "\" />
\t<meta name=\"keywords\" content=\"";
        // line 9
        if (isset($context["page"])) { $_page_ = $context["page"]; } else { $_page_ = null; }
        if (isset($context["app"])) { $_app_ = $context["app"]; } else { $_app_ = null; }
        echo twig_escape_filter($this->env, (($this->getAttribute($_page_, "keyword", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($_page_, "keyword"), $this->getAttribute($_app_, "keywords"))) : ($this->getAttribute($_app_, "keywords"))), "html", null, true);
        echo "\" />
\t";
        // line 10
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 17
        echo "\t";
        $this->displayBlock('properties', $context, $blocks);
        // line 23
        echo "</head>
<body>
<header id=\"header\" role=\"header\">
";
        // line 26
        $this->displayBlock('header', $context, $blocks);
        // line 30
        echo "</header>
\t
<section id=\"content\">
";
        // line 33
        $this->displayBlock('nav', $context, $blocks);
        // line 35
        echo "
";
        // line 36
        $this->displayBlock('content', $context, $blocks);
        // line 55
        echo "</section>

<footer id=\"footer\" role=\"footer\">
";
        // line 58
        $this->displayBlock('footer', $context, $blocks);
        // line 64
        echo "</footer>

";
        // line 66
        $this->displayBlock('javascripts', $context, $blocks);
        // line 69
        echo "</body>
</html>";
    }

    // line 10
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 11
        echo "\t<!--[if lte IE 9]> 
\t\t<script text=\"text/javascript\" src=\"";
        // line 12
        if (isset($context["JS_PATH"])) { $_JS_PATH_ = $context["JS_PATH"]; } else { $_JS_PATH_ = null; }
        echo twig_escape_filter($this->env, $_JS_PATH_, "html", null, true);
        echo "/html5.min.js\"></script>
\t\t<link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 13
        if (isset($context["CSS_PATH"])) { $_CSS_PATH_ = $context["CSS_PATH"]; } else { $_CSS_PATH_ = null; }
        echo twig_escape_filter($this->env, $_CSS_PATH_, "html", null, true);
        echo "/ie.min.css\" />
\t<![endif]-->
\t<link rel=\"stylesheet\" type=\"text/css\" title=\"";
        // line 15
        if (isset($context["app"])) { $_app_ = $context["app"]; } else { $_app_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_app_, "name"), "html", null, true);
        echo "\" href=\"";
        if (isset($context["CSS_PATH"])) { $_CSS_PATH_ = $context["CSS_PATH"]; } else { $_CSS_PATH_ = null; }
        echo twig_escape_filter($this->env, $_CSS_PATH_, "html", null, true);
        echo "/style.css\" />
\t";
    }

    // line 17
    public function block_properties($context, array $blocks = array())
    {
        // line 18
        echo "\t<link rel=\"start\" href=\"";
        if (isset($context["app"])) { $_app_ = $context["app"]; } else { $_app_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_app_, "url"), "html", null, true);
        echo "\" title=\"Accueil\" />
\t<link rel=\"help\" href=\"politique-accessibilite.html\" title=\"Accessibilité\" />
\t<link rel=\"accesskeys\" href=\"politique-accessibilite.html#accesskeys\" title=\"Raccourcis et Accesskeys\" />
\t<link rel=\"shortcut icon\" href=\"";
        // line 21
        if (isset($context["IMG_PATH"])) { $_IMG_PATH_ = $context["IMG_PATH"]; } else { $_IMG_PATH_ = null; }
        echo twig_escape_filter($this->env, $_IMG_PATH_, "html", null, true);
        echo "/favicon.ico\" type=\"image/ico\" />
\t";
    }

    // line 26
    public function block_header($context, array $blocks = array())
    {
        // line 27
        echo "\t<h1><a href=\"";
        if (isset($context["app"])) { $_app_ = $context["app"]; } else { $_app_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_app_, "url"), "html", null, true);
        echo "\">";
        if (isset($context["app"])) { $_app_ = $context["app"]; } else { $_app_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_app_, "name"), "html", null, true);
        echo "</a></h1>
\t<p>";
        // line 28
        if (isset($context["app"])) { $_app_ = $context["app"]; } else { $_app_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_app_, "desc"), "html", null, true);
        echo "</p>
";
    }

    // line 33
    public function block_nav($context, array $blocks = array())
    {
    }

    // line 36
    public function block_content($context, array $blocks = array())
    {
        // line 37
        echo "<aside id=\"configuration\">
\t<h2 id=\"configurationHandler\" onclick=\"showConfiguration();\">Configuration <span id=\"configurationArrow\"></span></h2>
\t<div id=\"configurationBox\">
\t\t<label for=\"workTime\">Working time</label> <input type=\"number\" name=\"workTime\" id=\"workTime\" value=\"30\" size=\"5\" maxlength=\"5\" /><br />
\t\t<label for=\"restTime\">Rest time</label> <input type=\"number\" name=\"restTime\" id=\"restTime\" value=\"10\" size=\"5\" maxlength=\"5\" /><br />
\t</div>
</aside>
<article role=\"main-content\">
\t<h2>Coach</h2>
\t<input type=\"button\" id=\"coutdownHandler\" value=\"Start\" onclick=\"start();\" />
\t<input type=\"button\" value=\"Stop\" onclick=\"stop();\" />
\t<span id=\"countdown\"></span>
\t<span id=\"action\"></span>
\t<figure id=\"steps\">
\t\t<img src=\"";
        // line 51
        if (isset($context["IMG_PATH"])) { $_IMG_PATH_ = $context["IMG_PATH"]; } else { $_IMG_PATH_ = null; }
        echo twig_escape_filter($this->env, $_IMG_PATH_, "html", null, true);
        echo "/fitness_12-exercices_30s-par-exercice_10s-entre-2.jpg\" alt=\"12 exercices de Fitness : 30s par exercice, 10s de pause entre 2\" />
\t</figure>
</article>
";
    }

    // line 58
    public function block_footer($context, array $blocks = array())
    {
        // line 59
        echo "<p>
\t© 2014 - ";
        // line 60
        if (isset($context["app"])) { $_app_ = $context["app"]; } else { $_app_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_app_, "name"), "html", null, true);
        echo "<br />
\tTous droits réservés
</p>
";
    }

    // line 66
    public function block_javascripts($context, array $blocks = array())
    {
        // line 67
        echo "<script type=\"text/javascript\" src=\"";
        if (isset($context["JS_PATH"])) { $_JS_PATH_ = $context["JS_PATH"]; } else { $_JS_PATH_ = null; }
        echo twig_escape_filter($this->env, $_JS_PATH_, "html", null, true);
        echo "/sporting.js\"></script>
";
    }

    public function getTemplateName()
    {
        return "layout.twig.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  221 => 67,  218 => 66,  209 => 60,  206 => 59,  203 => 58,  194 => 51,  178 => 37,  175 => 36,  170 => 33,  163 => 28,  154 => 27,  151 => 26,  144 => 21,  136 => 18,  133 => 17,  123 => 15,  117 => 13,  112 => 12,  109 => 11,  106 => 10,  101 => 69,  99 => 66,  95 => 64,  93 => 58,  88 => 55,  86 => 36,  83 => 35,  81 => 33,  76 => 30,  74 => 26,  69 => 23,  66 => 17,  64 => 10,  58 => 9,  52 => 8,  47 => 7,  40 => 5,  35 => 4,  29 => 2,  26 => 1,);
    }
}
