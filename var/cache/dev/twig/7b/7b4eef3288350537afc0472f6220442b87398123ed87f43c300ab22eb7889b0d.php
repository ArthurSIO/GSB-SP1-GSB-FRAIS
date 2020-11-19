<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* comptable/connexionComptable.html.twig */
class __TwigTemplate_903987ce57369fe1bdce697593f16b5279f7636495f066c489f98814eb346c3d extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "comptable/connexionComptable.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "comptable/connexionComptable.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Connexion Comptable";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "
<style>
section.login-container{
    display: flex;
    position: fixed;
    top:0;
    left: 0;
    bottom: 0;
    right: 0;
  
    background: #031321;
}
section.login-container > div{
    width: 450px;
  
    margin: auto;
  
    padding: 20px;

    text-align: center;

    background: #eee;
    border: 1px solid #ccc;

    border-radius: 5px;

}
section.login-container form{
    display: flex;
    flex-direction: column;
}
form input[type=\"password\"], 
form input[type=\"text\"], 
form button[type=\"submit\"] {
    width: 100%;
  
    margin-bottom: 32px;
    padding: 16px;
  
    color: #333;

    border: 1px solid #ccc;
    border-radius: 5px;

    outline: 0;
}
form input[type=\"text\"]:focus,
form input[type=\"text\"]:hover,
form input[type=\"password\"]:focus,
form input[type=\"password\"]:hover {
    background-color: #ccc;
}
form button[type=\"submit\"] {
    font-weight: bold;
    color: #eee;
    text-transform: uppercase;

    background-color: #2196f3;
}

form button[type=\"submit\"]:focus,
form button[type=\"submit\"]:hover {
    background-color: #255784;
}
html{
    box-sizing: border-box;
}

*,*:before,*:after{
    box-sizing: inherit;
}
body{
    background-color: white;
    font-family: Helvetica, sans-serif;
}
.wrapper{
    width: 800px;
    margin-left: auto;
    margin-right: auto;
}
</style>
<div class=\"wrapper\">
    <section class=\"login-container\">
        <div>
\t\t\t
            <header>
\t\t\t\t";
        // line 92
        if ((0 === twig_compare((isset($context["erreur"]) || array_key_exists("erreur", $context) ? $context["erreur"] : (function () { throw new RuntimeError('Variable "erreur" does not exist.', 92, $this->source); })()), 1))) {
            // line 93
            echo "\t\t\t\t<p>Attention ! Login ou mot de passe incorrect.</p>
\t\t\t\t";
        }
        // line 95
        echo "                <h2>Identification Comptable</h2>
            </header>

            <form action=\"";
        // line 98
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("menuVisiteur");
        echo "\" method=\"post\">
              
                <input type=\"text\" id=\"login\" name=\"nom_utilisateur\" placeholder=\"Nom d'utilisateur\" required=\"required\"/>
                <input type=\"password\" id=\"mdp\" name=\"mdp_utilisateur\" placeholder=\"Mot de passe\" required=\"required\"/>
                <button type=\"submit\">Connexion</button>

            </form>
        </div>
    </section>
</div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "comptable/connexionComptable.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  172 => 98,  167 => 95,  163 => 93,  161 => 92,  73 => 6,  66 => 5,  53 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Connexion Comptable{% endblock %}

{% block body %}

<style>
section.login-container{
    display: flex;
    position: fixed;
    top:0;
    left: 0;
    bottom: 0;
    right: 0;
  
    background: #031321;
}
section.login-container > div{
    width: 450px;
  
    margin: auto;
  
    padding: 20px;

    text-align: center;

    background: #eee;
    border: 1px solid #ccc;

    border-radius: 5px;

}
section.login-container form{
    display: flex;
    flex-direction: column;
}
form input[type=\"password\"], 
form input[type=\"text\"], 
form button[type=\"submit\"] {
    width: 100%;
  
    margin-bottom: 32px;
    padding: 16px;
  
    color: #333;

    border: 1px solid #ccc;
    border-radius: 5px;

    outline: 0;
}
form input[type=\"text\"]:focus,
form input[type=\"text\"]:hover,
form input[type=\"password\"]:focus,
form input[type=\"password\"]:hover {
    background-color: #ccc;
}
form button[type=\"submit\"] {
    font-weight: bold;
    color: #eee;
    text-transform: uppercase;

    background-color: #2196f3;
}

form button[type=\"submit\"]:focus,
form button[type=\"submit\"]:hover {
    background-color: #255784;
}
html{
    box-sizing: border-box;
}

*,*:before,*:after{
    box-sizing: inherit;
}
body{
    background-color: white;
    font-family: Helvetica, sans-serif;
}
.wrapper{
    width: 800px;
    margin-left: auto;
    margin-right: auto;
}
</style>
<div class=\"wrapper\">
    <section class=\"login-container\">
        <div>
\t\t\t
            <header>
\t\t\t\t{% if erreur == 1 %}
\t\t\t\t<p>Attention ! Login ou mot de passe incorrect.</p>
\t\t\t\t{% endif %}
                <h2>Identification Comptable</h2>
            </header>

            <form action=\"{{path( 'menuVisiteur')}}\" method=\"post\">
              
                <input type=\"text\" id=\"login\" name=\"nom_utilisateur\" placeholder=\"Nom d'utilisateur\" required=\"required\"/>
                <input type=\"password\" id=\"mdp\" name=\"mdp_utilisateur\" placeholder=\"Mot de passe\" required=\"required\"/>
                <button type=\"submit\">Connexion</button>

            </form>
        </div>
    </section>
</div>
{% endblock %}

", "comptable/connexionComptable.html.twig", "/var/www/html/GSB-FRAISv2/templates/comptable/connexionComptable.html.twig");
    }
}
