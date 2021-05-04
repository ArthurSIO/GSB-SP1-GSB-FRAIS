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

/* comptable/validerFiche/validerFiche.html.twig */
class __TwigTemplate_9bd44e69b1923a1cebfba79f924b39da5be70b3683d38c9def3c333441f8d482 extends Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "comptable/validerFiche/validerFiche.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "comptable/validerFiche/validerFiche.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Menu Visiteur";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 5
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 6
        echo "    <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/styles.css"), "html", null, true);
        echo "\" type=\"text/css\" />
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 9
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 10
        echo "
";
        // line 11
        $this->loadTemplate("comptable/enteteComptable.html.twig", "comptable/validerFiche/validerFiche.html.twig", 11)->display($context);
        // line 12
        echo "<div class=\"corp\">
\t <h1>Fiches de frais forfait</h1>
    <table>
        <tr>
            <td></td>
            <td>Quantite</td>
            <td>Libelle</td>
            <td>Montant</td>
        </tr>
        ";
        // line 21
        if ((1 === twig_compare((isset($context["taille1"]) || array_key_exists("taille1", $context) ? $context["taille1"] : (function () { throw new RuntimeError('Variable "taille1" does not exist.', 21, $this->source); })()), 1))) {
            // line 22
            echo "        ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(range(0, ((isset($context["taille1"]) || array_key_exists("taille1", $context) ? $context["taille1"] : (function () { throw new RuntimeError('Variable "taille1" does not exist.', 22, $this->source); })()) - 1)));
            foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                // line 23
                echo "        <tr>
            <td><a href=\"";
                // line 24
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("actualiseFrais", ["idFraisForfait" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["tab1"]) || array_key_exists("tab1", $context) ? $context["tab1"] : (function () { throw new RuntimeError('Variable "tab1" does not exist.', 24, $this->source); })()), $context["i"], [], "array", false, false, false, 24), "idFraisForfait", [], "array", false, false, false, 24), "tab" => twig_get_attribute($this->env, $this->source, (isset($context["tab1"]) || array_key_exists("tab1", $context) ? $context["tab1"] : (function () { throw new RuntimeError('Variable "tab1" does not exist.', 24, $this->source); })()), $context["i"], [], "array", false, false, false, 24)]), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, ($context["i"] + 1), "html", null, true);
                echo "</a></td>
            <td>";
                // line 25
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["tab1"]) || array_key_exists("tab1", $context) ? $context["tab1"] : (function () { throw new RuntimeError('Variable "tab1" does not exist.', 25, $this->source); })()), $context["i"], [], "array", false, false, false, 25), "quantite", [], "array", false, false, false, 25), "html", null, true);
                echo "</td>
            <td>";
                // line 26
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["tab1"]) || array_key_exists("tab1", $context) ? $context["tab1"] : (function () { throw new RuntimeError('Variable "tab1" does not exist.', 26, $this->source); })()), $context["i"], [], "array", false, false, false, 26), "libelle", [], "array", false, false, false, 26), "html", null, true);
                echo "</td>
            <td>";
                // line 27
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["tab1"]) || array_key_exists("tab1", $context) ? $context["tab1"] : (function () { throw new RuntimeError('Variable "tab1" does not exist.', 27, $this->source); })()), $context["i"], [], "array", false, false, false, 27), "montant", [], "array", false, false, false, 27), "html", null, true);
                echo "</td>
        </tr>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 30
            echo "        ";
        }
        // line 31
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
        // line 42
        if ((1 === twig_compare((isset($context["taille"]) || array_key_exists("taille", $context) ? $context["taille"] : (function () { throw new RuntimeError('Variable "taille" does not exist.', 42, $this->source); })()), 1))) {
            // line 43
            echo "        ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(range(0, ((isset($context["taille"]) || array_key_exists("taille", $context) ? $context["taille"] : (function () { throw new RuntimeError('Variable "taille" does not exist.', 43, $this->source); })()) - 1)));
            foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                // line 44
                echo "        <tr>
            <td>";
                // line 45
                echo twig_escape_filter($this->env, ($context["i"] + 1), "html", null, true);
                echo "</td>
            <td>";
                // line 46
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["tab"]) || array_key_exists("tab", $context) ? $context["tab"] : (function () { throw new RuntimeError('Variable "tab" does not exist.', 46, $this->source); })()), $context["i"], [], "array", false, false, false, 46), "date", [], "array", false, false, false, 46), "html", null, true);
                echo "</td>
            <td>";
                // line 47
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["tab"]) || array_key_exists("tab", $context) ? $context["tab"] : (function () { throw new RuntimeError('Variable "tab" does not exist.', 47, $this->source); })()), $context["i"], [], "array", false, false, false, 47), "montant", [], "array", false, false, false, 47), "html", null, true);
                echo "</td>
            <td>";
                // line 48
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["tab"]) || array_key_exists("tab", $context) ? $context["tab"] : (function () { throw new RuntimeError('Variable "tab" does not exist.', 48, $this->source); })()), $context["i"], [], "array", false, false, false, 48), "libelle", [], "array", false, false, false, 48), "html", null, true);
                echo "</td>
        </tr>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 51
            echo "        ";
        }
        // line 52
        echo "</div>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "comptable/validerFiche/validerFiche.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  190 => 52,  187 => 51,  178 => 48,  174 => 47,  170 => 46,  166 => 45,  163 => 44,  158 => 43,  156 => 42,  143 => 31,  140 => 30,  131 => 27,  127 => 26,  123 => 25,  117 => 24,  114 => 23,  109 => 22,  107 => 21,  96 => 12,  94 => 11,  91 => 10,  84 => 9,  74 => 6,  67 => 5,  54 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Menu Visiteur{% endblock %}

{% block stylesheets %}
    <link rel=\"stylesheet\" href=\"{{ asset('css/styles.css') }}\" type=\"text/css\" />
{% endblock %}

{% block body %}

{%include 'comptable/enteteComptable.html.twig'%}
<div class=\"corp\">
\t <h1>Fiches de frais forfait</h1>
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
            <td><a href=\"{{path('actualiseFrais', {'idFraisForfait' : tab1[i][\"idFraisForfait\"], 'tab' : tab1[i]})}}\">{{i + 1}}</a></td>
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
</div>

{% endblock %}", "comptable/validerFiche/validerFiche.html.twig", "/var/www/html/GSB-FRAISv2/templates/comptable/validerFiche/validerFiche.html.twig");
    }
}
