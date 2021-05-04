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

/* visiteur/connexion/connexionVisiteur.html.twig */
class __TwigTemplate_c524389e3a7985836a473544705bcf2f96669058d70a6cee17c4c1c48b627b66 extends Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "visiteur/connexion/connexionVisiteur.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "visiteur/connexion/connexionVisiteur.html.twig", 1);
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
        echo "    Connexion Visiteur
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
        echo "    <div class=\"login-container\"> 
        <div class=\"div1\"><img src=\"/images/gsb1.png\" class=\"img2\"/></div>
        
        ";
        // line 15
        if ((isset($context["erreur"]) || array_key_exists("erreur", $context))) {
            // line 16
            echo "            ";
            if ((0 === twig_compare((isset($context["erreur"]) || array_key_exists("erreur", $context) ? $context["erreur"] : (function () { throw new RuntimeError('Variable "erreur" does not exist.', 16, $this->source); })()), 1))) {
                // line 17
                echo "                <p>Attention ! Login ou mot de passe incorrect.</p>
            ";
            }
            // line 19
            echo "        ";
        }
        // line 20
        echo "        
        ";
        // line 21
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["formulaire"]) || array_key_exists("formulaire", $context) ? $context["formulaire"] : (function () { throw new RuntimeError('Variable "formulaire" does not exist.', 21, $this->source); })()), 'form_start');
        echo "
            
            <label class=\"input-icon\" for=\"username\"><img src=\"/images/icone.png\" class=\"img1\" /></label>
            ";
        // line 24
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formulaire"]) || array_key_exists("formulaire", $context) ? $context["formulaire"] : (function () { throw new RuntimeError('Variable "formulaire" does not exist.', 24, $this->source); })()), "nom_utilisateur", [], "any", false, false, false, 24), 'widget');
        echo "
            
            <label class=\"input-icon\" for=\"password\"><img src=\"/images/lock.png\" class=\"img1\" /></label>
            ";
        // line 27
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formulaire"]) || array_key_exists("formulaire", $context) ? $context["formulaire"] : (function () { throw new RuntimeError('Variable "formulaire" does not exist.', 27, $this->source); })()), "mdp_utilisateur", [], "any", false, false, false, 27), 'widget');
        echo "   

            <input type=\"submit\"  value=\"Retour\" onclick=\"history.go(-1)\"/>
            
            <input type=\"submit\" for=\"valider\" value=\"Log In\" />
            

        ";
        // line 34
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["formulaire"]) || array_key_exists("formulaire", $context) ? $context["formulaire"] : (function () { throw new RuntimeError('Variable "formulaire" does not exist.', 34, $this->source); })()), 'form_end');
        echo "
    </div>\t
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "visiteur/connexion/connexionVisiteur.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  135 => 34,  125 => 27,  119 => 24,  113 => 21,  110 => 20,  107 => 19,  103 => 17,  100 => 16,  98 => 15,  93 => 12,  86 => 11,  76 => 8,  69 => 7,  61 => 4,  54 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}
    Connexion Visiteur
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
    </div>\t
{% endblock %}
", "visiteur/connexion/connexionVisiteur.html.twig", "/var/www/html/GSB-FRAISv2/templates/visiteur/connexion/connexionVisiteur.html.twig");
    }
}
