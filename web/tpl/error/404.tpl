{# erreur/404 #}

{% extends 'layout.tpl' %}

{% block content %}
<article id="page404" class="page">
	<header>
		<h1>Oups ! Page introuvable</h1>
	</header>
	<p>
		Désolé, cette page est introuvable !
		<br />
		Vous trouverez peut-être votre bonheur à l'aide du <a href="sitemap.html">plan du site</a>.
	</p> 
</article>
{% endblock %}