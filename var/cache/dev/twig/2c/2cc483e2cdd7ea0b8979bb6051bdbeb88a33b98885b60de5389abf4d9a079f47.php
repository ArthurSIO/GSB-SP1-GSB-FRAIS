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
        <tr>
            <td>1</td>
            <td>1</td>
            <td>1</td>
            <td>1</td>
        </tr>
    </table>
    <h1>Fiches de frais hors forfait</h1>
    <table>
        <tr>
            <td></td>
            <td>date</td>
            <td>Montant</td>
            <td>Libelle</td>
        </tr>
        

        ";
        // line 37
        if ((1 === twig_compare((isset($context["taille"]) || array_key_exists("taille", $context) ? $context["taille"] : (function () { throw new RuntimeError('Variable "taille" does not exist.', 37, $this->source); })()), 1))) {
            // line 38
            echo "        ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(range(0, ((isset($context["taille"]) || array_key_exists("taille", $context) ? $context["taille"] : (function () { throw new RuntimeError('Variable "taille" does not exist.', 38, $this->source); })()) - 1)));
            foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                // line 39
                echo "        <tr>
            <td>";
                // line 40
                echo twig_escape_filter($this->env, ($context["i"] + 1), "html", null, true);
                echo "</td>
            <td>";
                // line 41
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["tab"]) || array_key_exists("tab", $context) ? $context["tab"] : (function () { throw new RuntimeError('Variable "tab" does not exist.', 41, $this->source); })()), $context["i"], [], "array", false, false, false, 41), "date", [], "array", false, false, false, 41), "html", null, true);
                echo "</td>
            <td>";
                // line 42
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["tab"]) || array_key_exists("tab", $context) ? $context["tab"] : (function () { throw new RuntimeError('Variable "tab" does not exist.', 42, $this->source); })()), $context["i"], [], "array", false, false, false, 42), "montant", [], "array", false, false, false, 42), "html", null, true);
                echo "</td>
            <td>";
                // line 43
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["tab"]) || array_key_exists("tab", $context) ? $context["tab"] : (function () { throw new RuntimeError('Variable "tab" does not exist.', 43, $this->source); })()), $context["i"], [], "array", false, false, false, 43), "libelle", [], "array", false, false, false, 43), "html", null, true);
                echo "</td>
        </tr>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 46
            echo "        ";
        }
        // line 47
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
        return array (  163 => 47,  160 => 46,  151 => 43,  147 => 42,  143 => 41,  139 => 40,  136 => 39,  131 => 38,  129 => 37,  100 => 11,  96 => 10,  93 => 9,  91 => 8,  84 => 7,  74 => 5,  67 => 4,  54 => 3,  37 => 1,);
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
        <tr>
            <td>1</td>
            <td>1</td>
            <td>1</td>
            <td>1</td>
        </tr>
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
