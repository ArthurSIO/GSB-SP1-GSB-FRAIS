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

/* visiteur/enteteVisiteur.html.twig */
class __TwigTemplate_38237f8e3be89b000658a2fe01f254fae9d66b3a49b2e147f531b250ef6bc753 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "visiteur/enteteVisiteur.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "visiteur/enteteVisiteur.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "<nav>
  <ul class=\"menu\">
    <li>";
        // line 6
        echo twig_escape_filter($this->env, (isset($context["login"]) || array_key_exists("login", $context) ? $context["login"] : (function () { throw new RuntimeError('Variable "login" does not exist.', 6, $this->source); })()), "html", null, true);
        echo "</li>
  </ul>
  <ul class=\"form\">
    <li><a href=\"";
        // line 9
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("donnerDate");
        echo "\">Consulter Frais</a></li>
    <li class=\"pageV\">Menu</li>
    <li><a href=\"";
        // line 11
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("accueil");
        echo "\">D??connexion</a></li>   
  </ul>
</nav>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "visiteur/enteteVisiteur.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  74 => 11,  69 => 9,  63 => 6,  59 => 4,  52 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block body %}
<nav>
  <ul class=\"menu\">
    <li>{{login}}</li>
  </ul>
  <ul class=\"form\">
    <li><a href=\"{{path( 'donnerDate')}}\">Consulter Frais</a></li>
    <li class=\"pageV\">Menu</li>
    <li><a href=\"{{path( 'accueil')}}\">D??connexion</a></li>   
  </ul>
</nav>
{% endblock %}", "visiteur/enteteVisiteur.html.twig", "/var/www/html/GSB-FRAISv2/templates/visiteur/enteteVisiteur.html.twig");
    }
}
