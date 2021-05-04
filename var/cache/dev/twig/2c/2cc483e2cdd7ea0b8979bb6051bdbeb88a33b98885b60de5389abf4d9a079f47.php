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

/* visiteur/consulterFiches.html.twig */
class __TwigTemplate_0be564cfcd4b16f3d58644c2875d9c5b8ed48faf59cd673aa4f1ec672e12720b extends Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "visiteur/consulterFiches.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "visiteur/consulterFiches.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Consulter Fiche";
        
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
        $this->loadTemplate("visiteur/enteteVisiteur.html.twig", "visiteur/consulterFiches.html.twig", 8)->display($context);
        // line 9
        echo "<div class=\"corp\">
    ";
        // line 10
        echo twig_escape_filter($this->env, (isset($context["mois"]) || array_key_exists("mois", $context) ? $context["mois"] : (function () { throw new RuntimeError('Variable "mois" does not exist.', 10, $this->source); })()), "html", null, true);
        echo "
    ";
        // line 11
        echo twig_escape_filter($this->env, (isset($context["annee"]) || array_key_exists("annee", $context) ? $context["annee"] : (function () { throw new RuntimeError('Variable "annee" does not exist.', 11, $this->source); })()), "html", null, true);
        echo "
    <h1>Fiches de frais forfait</h1>
    <table>
        <tr>
            <td></td>
            <td>Quantite</td>
            <td>Libelle</td>
            <td>Montant</td>
        </tr>
        ";
        // line 20
        if ((1 === twig_compare((isset($context["taille1"]) || array_key_exists("taille1", $context) ? $context["taille1"] : (function () { throw new RuntimeError('Variable "taille1" does not exist.', 20, $this->source); })()), 1))) {
            // line 21
            echo "        ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(range(0, ((isset($context["taille1"]) || array_key_exists("taille1", $context) ? $context["taille1"] : (function () { throw new RuntimeError('Variable "taille1" does not exist.', 21, $this->source); })()) - 1)));
            foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                // line 22
                echo "        <tr>
            <td>";
                // line 23
                echo twig_escape_filter($this->env, ($context["i"] + 1), "html", null, true);
                echo "</td>
            <td>";
                // line 24
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["tab1"]) || array_key_exists("tab1", $context) ? $context["tab1"] : (function () { throw new RuntimeError('Variable "tab1" does not exist.', 24, $this->source); })()), $context["i"], [], "array", false, false, false, 24), "quantite", [], "array", false, false, false, 24), "html", null, true);
                echo "</td>
            <td>";
                // line 25
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["tab1"]) || array_key_exists("tab1", $context) ? $context["tab1"] : (function () { throw new RuntimeError('Variable "tab1" does not exist.', 25, $this->source); })()), $context["i"], [], "array", false, false, false, 25), "libelle", [], "array", false, false, false, 25), "html", null, true);
                echo "</td>
            <td>";
                // line 26
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["tab1"]) || array_key_exists("tab1", $context) ? $context["tab1"] : (function () { throw new RuntimeError('Variable "tab1" does not exist.', 26, $this->source); })()), $context["i"], [], "array", false, false, false, 26), "montant", [], "array", false, false, false, 26), "html", null, true);
                echo "</td>
        </tr>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 29
            echo "        ";
        }
        // line 30
        echo "    </table>
    <h1>Fiches de frais hors forfait</h1>
    <table>
        <tr>
            <td></td>
            <td>date</td>
            <td>Montant</td>
            <td>Libelle</td>
        </tr>
        

        ";
        // line 41
        if ((1 === twig_compare((isset($context["taille"]) || array_key_exists("taille", $context) ? $context["taille"] : (function () { throw new RuntimeError('Variable "taille" does not exist.', 41, $this->source); })()), 1))) {
            // line 42
            echo "        ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(range(0, ((isset($context["taille"]) || array_key_exists("taille", $context) ? $context["taille"] : (function () { throw new RuntimeError('Variable "taille" does not exist.', 42, $this->source); })()) - 1)));
            foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                // line 43
                echo "        <tr>
            <td>";
                // line 44
                echo twig_escape_filter($this->env, ($context["i"] + 1), "html", null, true);
                echo "</td>
            <td>";
                // line 45
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["tab"]) || array_key_exists("tab", $context) ? $context["tab"] : (function () { throw new RuntimeError('Variable "tab" does not exist.', 45, $this->source); })()), $context["i"], [], "array", false, false, false, 45), "date", [], "array", false, false, false, 45), "html", null, true);
                echo "</td>
            <td>";
                // line 46
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["tab"]) || array_key_exists("tab", $context) ? $context["tab"] : (function () { throw new RuntimeError('Variable "tab" does not exist.', 46, $this->source); })()), $context["i"], [], "array", false, false, false, 46), "montant", [], "array", false, false, false, 46), "html", null, true);
                echo "</td>
            <td>";
                // line 47
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["tab"]) || array_key_exists("tab", $context) ? $context["tab"] : (function () { throw new RuntimeError('Variable "tab" does not exist.', 47, $this->source); })()), $context["i"], [], "array", false, false, false, 47), "libelle", [], "array", false, false, false, 47), "html", null, true);
                echo "</td>
        </tr>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 50
            echo "        ";
        }
        // line 51
        echo "    </table>
</div>



";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "visiteur/consulterFiches.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  193 => 51,  190 => 50,  181 => 47,  177 => 46,  173 => 45,  169 => 44,  166 => 43,  161 => 42,  159 => 41,  146 => 30,  143 => 29,  134 => 26,  130 => 25,  126 => 24,  122 => 23,  119 => 22,  114 => 21,  112 => 20,  100 => 11,  96 => 10,  93 => 9,  91 => 8,  84 => 7,  74 => 5,  67 => 4,  54 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Consulter Fiche{% endblock %}
{% block stylesheets %}
    <link rel=\"stylesheet\" href=\"{{ asset('css/styles.css') }}\" type=\"text/css\" />
{% endblock %}
{% block body %}
{%include 'visiteur/enteteVisiteur.html.twig'%}
<div class=\"corp\">
    {{mois}}
    {{annee}}
    <h1>Fiches de frais forfait</h1>
    <table>
        <tr>
            <td></td>
            <td>Quantite</td>
            <td>Libelle</td>
            <td>Montant</td>
        </tr>
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
    </table>
    <h1>Fiches de frais hors forfait</h1>
    <table>
        <tr>
            <td></td>
            <td>date</td>
            <td>Montant</td>
            <td>Libelle</td>
        </tr>
        

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
    </table>
</div>



{% endblock %}", "visiteur/consulterFiches.html.twig", "/var/www/html/GSB-FRAISv2/templates/visiteur/consulterFiches.html.twig");
    }
}
