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

/* visiteur/donnerDate.html.twig */
class __TwigTemplate_b81d4d25e53d7c315f28322e5da670edcbc26bc7526555669ce8f2ea0779e83f extends Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "visiteur/donnerDate.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "visiteur/donnerDate.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Hello ConsulterController!";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 6
        $this->loadTemplate("visiteur/enteteVisiteur.html.twig", "visiteur/donnerDate.html.twig", 6)->display($context);
        // line 7
        echo "<div class=\"corp\">
    <h1></h1>
\t<form>
\t\t<select type=\"Select\" id=\"login\">
\t\t\t";
        // line 11
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(0, 11));
        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
            echo " 
\t\t\t<option ";
            // line 12
            if ((0 === twig_compare((isset($context["dateC"]) || array_key_exists("dateC", $context) ? $context["dateC"] : (function () { throw new RuntimeError('Variable "dateC" does not exist.', 12, $this->source); })()), ($context["i"] + 1)))) {
                echo " selected ";
            }
            echo ">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["moisA"]) || array_key_exists("moisA", $context) ? $context["moisA"] : (function () { throw new RuntimeError('Variable "moisA" does not exist.', 12, $this->source); })()), $context["i"], [], "array", false, false, false, 12), "html", null, true);
            echo "</option>
\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 14
        echo "\t\t</select>
\t\t
\t\t<select type=\"Select\" id=\"login\">
                    <option>20";
        // line 17
        echo twig_escape_filter($this->env, (isset($context["dateA"]) || array_key_exists("dateA", $context) ? $context["dateA"] : (function () { throw new RuntimeError('Variable "dateA" does not exist.', 17, $this->source); })()), "html", null, true);
        echo "</option>\t\t\t
\t\t</select>\t
\t</form>
\t
</div>



";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "visiteur/donnerDate.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  104 => 17,  99 => 14,  87 => 12,  81 => 11,  75 => 7,  73 => 6,  66 => 5,  53 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Hello ConsulterController!{% endblock %}

{% block body %}
{%include 'visiteur/enteteVisiteur.html.twig'%}
<div class=\"corp\">
    <h1></h1>
\t<form>
\t\t<select type=\"Select\" id=\"login\">
\t\t\t{% for i in 0..11 %} 
\t\t\t<option {% if dateC == i + 1 %} selected {%endif%}>{{ moisA[i] }}</option>
\t\t\t{% endfor %}
\t\t</select>
\t\t
\t\t<select type=\"Select\" id=\"login\">
                    <option>20{{ dateA }}</option>\t\t\t
\t\t</select>\t
\t</form>
\t
</div>



{% endblock %}", "visiteur/donnerDate.html.twig", "/var/www/html/GSB-FRAISv2/templates/visiteur/donnerDate.html.twig");
    }
}
