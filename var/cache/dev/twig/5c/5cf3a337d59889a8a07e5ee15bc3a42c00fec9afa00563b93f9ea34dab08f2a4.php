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

/* comptable/connexion/connexionComptable.html.twig */
class __TwigTemplate_2a1f67f180a253971dfd7f037014c9d0845dfa1a4c2a6ab4f24524c217d94ded extends Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "comptable/connexion/connexionComptable.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "comptable/connexion/connexionComptable.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "    Connexion Comptable
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 7
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 8
        echo "    <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/styles.css"), "html", null, true);
        echo "\" type=\"text/css\" />
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 11
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "<div class=\"login-container\">
        
        
        <div class=\"div1\"><img src=\"/images/gsb1.png\" class=\"img2\"/></div>

        ";
        // line 17
        if ((isset($context["erreur"]) || array_key_exists("erreur", $context))) {
            // line 18
            echo "            ";
            if ((0 === twig_compare((isset($context["erreur"]) || array_key_exists("erreur", $context) ? $context["erreur"] : (function () { throw new RuntimeError('Variable "erreur" does not exist.', 18, $this->source); })()), 1))) {
                // line 19
                echo "                <p>Attention ! Login ou mot de passe incorrect.</p>
            ";
            }
            // line 21
            echo "        ";
        }
        echo " 
        
        ";
        // line 23
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["formulaire"]) || array_key_exists("formulaire", $context) ? $context["formulaire"] : (function () { throw new RuntimeError('Variable "formulaire" does not exist.', 23, $this->source); })()), 'form_start');
        echo "
            
            <label class=\"input-icon\" for=\"username\"><img src=\"/images/icone.png\" class=\"img1\" /></label>
            ";
        // line 26
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formulaire"]) || array_key_exists("formulaire", $context) ? $context["formulaire"] : (function () { throw new RuntimeError('Variable "formulaire" does not exist.', 26, $this->source); })()), "nom_utilisateur", [], "any", false, false, false, 26), 'widget');
        echo "
            
            <label class=\"input-icon\" for=\"password\"><img src=\"/images/lock.png\" class=\"img1\" /></label>
            ";
        // line 29
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formulaire"]) || array_key_exists("formulaire", $context) ? $context["formulaire"] : (function () { throw new RuntimeError('Variable "formulaire" does not exist.', 29, $this->source); })()), "mdp_utilisateur", [], "any", false, false, false, 29), 'widget');
        echo "   

            <input type=\"submit\"  value=\"Retour\" onclick=\"history.go(-1)\"/>
            
            <input type=\"submit\" for=\"valider\" value=\"Log In\" />
            

        ";
        // line 36
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["formulaire"]) || array_key_exists("formulaire", $context) ? $context["formulaire"] : (function () { throw new RuntimeError('Variable "formulaire" does not exist.', 36, $this->source); })()), 'form_end');
        echo "
    </div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "comptable/connexion/connexionComptable.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  137 => 36,  127 => 29,  121 => 26,  115 => 23,  109 => 21,  105 => 19,  102 => 18,  100 => 17,  93 => 12,  86 => 11,  76 => 8,  69 => 7,  61 => 4,  54 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}
    Connexion Comptable
{% endblock %}

{% block stylesheets %}
    <link rel=\"stylesheet\" href=\"{{ asset('css/styles.css') }}\" type=\"text/css\" />
{% endblock %}

{% block body %}
<div class=\"login-container\">
        
        
        <div class=\"div1\"><img src=\"/images/gsb1.png\" class=\"img2\"/></div>

        {% if erreur is defined %}
            {% if erreur == 1 %}
                <p>Attention ! Login ou mot de passe incorrect.</p>
            {% endif %}
        {% endif %} 
        
        {{form_start(formulaire)}}
            
            <label class=\"input-icon\" for=\"username\"><img src=\"/images/icone.png\" class=\"img1\" /></label>
            {{form_widget(formulaire.nom_utilisateur)}}
            
            <label class=\"input-icon\" for=\"password\"><img src=\"/images/lock.png\" class=\"img1\" /></label>
            {{form_widget(formulaire.mdp_utilisateur)}}   

            <input type=\"submit\"  value=\"Retour\" onclick=\"history.go(-1)\"/>
            
            <input type=\"submit\" for=\"valider\" value=\"Log In\" />
            

        {{form_end(formulaire)}}
    </div>
{% endblock %}", "comptable/connexion/connexionComptable.html.twig", "/var/www/html/GSB-FRAISv2/templates/comptable/connexion/connexionComptable.html.twig");
    }
}
