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

/* visiteur/renseignerFiche/renseignerFiche.html.twig */
class __TwigTemplate_f7984550df260aee8f4faf1ed5bafab976d8a1693ee55efcc39b64bfebb465c2 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'stylesheets' => [$this, 'block_stylesheets'],
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "visiteur/renseignerFiche/renseignerFiche.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "visiteur/renseignerFiche/renseignerFiche.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Renseigner Fiche";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 4
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 5
        echo "    <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/styles.css"), "html", null, true);
        echo "\" type=\"text/css\" />
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 7
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 8
        $this->loadTemplate("visiteur/enteteVisiteur.html.twig", "visiteur/renseignerFiche/renseignerFiche.html.twig", 8)->display($context);
        // line 9
        echo "<div class=\"corp\">
    renseigne fiche 
    <h1>";
        // line 11
        echo twig_escape_filter($this->env, (isset($context["msg"]) || array_key_exists("msg", $context) ? $context["msg"] : (function () { throw new RuntimeError('Variable "msg" does not exist.', 11, $this->source); })()), "html", null, true);
        echo "</h1>
    <h1>Fiches de frais forfait</h1>
    <table class=\"container\">
        <thead>
            <tr>
                <th><h1></h1></th>
                <th><h1>Quantite</h1></th>
                <th><h1>Libelle</h1></th>
                <th><h1>Montant</h1></th>
            </tr>
        </thead>
        <tbody>
            ";
        // line 23
        if ((1 === twig_compare((isset($context["taille1"]) || array_key_exists("taille1", $context) ? $context["taille1"] : (function () { throw new RuntimeError('Variable "taille1" does not exist.', 23, $this->source); })()), 1))) {
            // line 24
            echo "                ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(range(0, ((isset($context["taille1"]) || array_key_exists("taille1", $context) ? $context["taille1"] : (function () { throw new RuntimeError('Variable "taille1" does not exist.', 24, $this->source); })()) - 1)));
            foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                // line 25
                echo "                    <tr>
                        <td>";
                // line 26
                echo twig_escape_filter($this->env, ($context["i"] + 1), "html", null, true);
                echo "</td>
                        <td>";
                // line 27
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["tab1"]) || array_key_exists("tab1", $context) ? $context["tab1"] : (function () { throw new RuntimeError('Variable "tab1" does not exist.', 27, $this->source); })()), $context["i"], [], "array", false, false, false, 27), "quantite", [], "array", false, false, false, 27), "html", null, true);
                echo "</td>
                        <td>";
                // line 28
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["tab1"]) || array_key_exists("tab1", $context) ? $context["tab1"] : (function () { throw new RuntimeError('Variable "tab1" does not exist.', 28, $this->source); })()), $context["i"], [], "array", false, false, false, 28), "libelle", [], "array", false, false, false, 28), "html", null, true);
                echo "</td>
                        <td>";
                // line 29
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["tab1"]) || array_key_exists("tab1", $context) ? $context["tab1"] : (function () { throw new RuntimeError('Variable "tab1" does not exist.', 29, $this->source); })()), $context["i"], [], "array", false, false, false, 29), "montant", [], "array", false, false, false, 29), "html", null, true);
                echo "</td>
                    </tr>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 32
            echo "            ";
        }
        // line 33
        echo "            
        </tbody>
    </table>
    <h1>Fiches de frais hors forfait</h1>
    <table class=\"container\">
        <thead>
            <tr>
                <th><h1></h1></th>
                <th><h1>date</h1></th>
                <th><h1>Montant</h1></th>
                <th><h1>Libelle</h1></th>
            </tr>
        </thead>
        <tbody>
            ";
        // line 47
        if ((1 === twig_compare((isset($context["taille"]) || array_key_exists("taille", $context) ? $context["taille"] : (function () { throw new RuntimeError('Variable "taille" does not exist.', 47, $this->source); })()), 1))) {
            // line 48
            echo "                ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(range(0, ((isset($context["taille"]) || array_key_exists("taille", $context) ? $context["taille"] : (function () { throw new RuntimeError('Variable "taille" does not exist.', 48, $this->source); })()) - 1)));
            foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                // line 49
                echo "                <tr>
                    <td>";
                // line 50
                echo twig_escape_filter($this->env, ($context["i"] + 1), "html", null, true);
                echo "</td>
                    <td>";
                // line 51
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["tab"]) || array_key_exists("tab", $context) ? $context["tab"] : (function () { throw new RuntimeError('Variable "tab" does not exist.', 51, $this->source); })()), $context["i"], [], "array", false, false, false, 51), "date", [], "array", false, false, false, 51), "html", null, true);
                echo "</td>
                    <td>";
                // line 52
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["tab"]) || array_key_exists("tab", $context) ? $context["tab"] : (function () { throw new RuntimeError('Variable "tab" does not exist.', 52, $this->source); })()), $context["i"], [], "array", false, false, false, 52), "montant", [], "array", false, false, false, 52), "html", null, true);
                echo "</td>
                    <td>";
                // line 53
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["tab"]) || array_key_exists("tab", $context) ? $context["tab"] : (function () { throw new RuntimeError('Variable "tab" does not exist.', 53, $this->source); })()), $context["i"], [], "array", false, false, false, 53), "libelle", [], "array", false, false, false, 53), "html", null, true);
                echo "</td>
                </tr>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 56
            echo "            ";
        }
        // line 57
        echo "        </tbody>
    </table>
    <a href=\"";
        // line 59
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("creerHF");
        echo "\"><img src=\"/images/btnAdd.png\" class=\"btnAdd\"/></a>
</div>



";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "visiteur/renseignerFiche/renseignerFiche.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  200 => 59,  196 => 57,  193 => 56,  184 => 53,  180 => 52,  176 => 51,  172 => 50,  169 => 49,  164 => 48,  162 => 47,  146 => 33,  143 => 32,  134 => 29,  130 => 28,  126 => 27,  122 => 26,  119 => 25,  114 => 24,  112 => 23,  97 => 11,  93 => 9,  91 => 8,  84 => 7,  74 => 5,  67 => 4,  54 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Renseigner Fiche{% endblock %}
{% block stylesheets %}
    <link rel=\"stylesheet\" href=\"{{ asset('css/styles.css') }}\" type=\"text/css\" />
{% endblock %}
{% block body %}
{%include 'visiteur/enteteVisiteur.html.twig'%}
<div class=\"corp\">
    renseigne fiche 
    <h1>{{msg}}</h1>
    <h1>Fiches de frais forfait</h1>
    <table class=\"container\">
        <thead>
            <tr>
                <th><h1></h1></th>
                <th><h1>Quantite</h1></th>
                <th><h1>Libelle</h1></th>
                <th><h1>Montant</h1></th>
            </tr>
        </thead>
        <tbody>
            {% if taille1 > 1%}
                {% for i in 0..taille1 - 1  %}
                    <tr>
                        <td>{{i + 1}}</td>
                        <td>{{tab1[i][\"quantite\"]}}</td>
                        <td>{{tab1[i][\"libelle\"]}}</td>
                        <td>{{tab1[i][\"montant\"]}}</td>
                    </tr>
                {% endfor %}
            {%endif%}
            
        </tbody>
    </table>
    <h1>Fiches de frais hors forfait</h1>
    <table class=\"container\">
        <thead>
            <tr>
                <th><h1></h1></th>
                <th><h1>date</h1></th>
                <th><h1>Montant</h1></th>
                <th><h1>Libelle</h1></th>
            </tr>
        </thead>
        <tbody>
            {% if taille > 1%}
                {% for i in 0..taille - 1  %}
                <tr>
                    <td>{{i + 1}}</td>
                    <td>{{tab[i][\"date\"]}}</td>
                    <td>{{tab[i][\"montant\"]}}</td>
                    <td>{{tab[i][\"libelle\"]}}</td>
                </tr>
                {% endfor %}
            {%endif%}
        </tbody>
    </table>
    <a href=\"{{path( 'creerHF')}}\"><img src=\"/images/btnAdd.png\" class=\"btnAdd\"/></a>
</div>



{% endblock %}", "visiteur/renseignerFiche/renseignerFiche.html.twig", "/var/www/html/GSB-FRAISv2/templates/visiteur/renseignerFiche/renseignerFiche.html.twig");
    }
}
