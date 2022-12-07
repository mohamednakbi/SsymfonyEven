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

/* evenement/pdf.html.twig */
class __TwigTemplate_a527884b7967c2953ab86722eef83a99 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "evenement/pdf.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "evenement/pdf.html.twig"));

        // line 1
        echo "
";
        // line 2
        $this->displayBlock('body', $context, $blocks);
        // line 75
        echo "
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 2
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 3
        echo "

<h1 style=\"text-align: center\"> Liste des Evenement </h1>
<br>



<!DOCTYPE html>
<html>
<head>
    <style>
        #customers {
            font-family: Arial, Helvetica, sans-serif;
            border-collapse: collapse;
            width: 50%;
        }

        #customers td, #customers th {
            border: 1px solid #ddd;
            padding: 2px;
        }

        #customers tr:nth-child(even){background-color: #f2f2f2;}

        #customers tr:hover {background-color: #ddd;}

        #customers th {
            padding-top: 12px;
            padding-bottom: 12px;
            text-align: center;
            background-color: #4c7aaf;
            color: yellow;
        }
    </style>
</head>



<table border =\"1\" id=\"customers\" width=\"60%\" height=\"120\" >
    <tr>

                <th>Id</th>
                <th>Titre</th>
                <th>Description</th>
                <th>Lieux</th>
                <th>DateDebut</th>
                <th>DateFin</th>
                <th>GatName</th>


    </tr>
    <tbody id=\"all\">
    ";
        // line 55
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($context["evenement"]);
        foreach ($context['_seq'] as $context["_key"] => $context["evenement"]) {
            // line 56
            echo "        <tr>

              <td>";
            // line 58
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["evenement"], "id", [], "any", false, false, false, 58), "html", null, true);
            echo "</td>
                <td>";
            // line 59
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["evenement"], "titre", [], "any", false, false, false, 59), "html", null, true);
            echo "</td>
                <td>";
            // line 60
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["evenement"], "description", [], "any", false, false, false, 60), "html", null, true);
            echo "</td>
                <td>";
            // line 61
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["evenement"], "lieux", [], "any", false, false, false, 61), "html", null, true);
            echo "</td>
                <td>";
            // line 62
            ((twig_get_attribute($this->env, $this->source, $context["evenement"], "dateDebut", [], "any", false, false, false, 62)) ? (print (twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["evenement"], "dateDebut", [], "any", false, false, false, 62), "Y-m-d"), "html", null, true))) : (print ("")));
            echo "</td>
                <td>";
            // line 63
            ((twig_get_attribute($this->env, $this->source, $context["evenement"], "dateFin", [], "any", false, false, false, 63)) ? (print (twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["evenement"], "dateFin", [], "any", false, false, false, 63), "Y-m-d"), "html", null, true))) : (print ("")));
            echo "</td>
                <td>";
            // line 64
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["evenement"], "gatName", [], "any", false, false, false, 64), "html", null, true);
            echo "</td>

        </tr>


    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['evenement'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 70
        echo "



    ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "evenement/pdf.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  168 => 70,  156 => 64,  152 => 63,  148 => 62,  144 => 61,  140 => 60,  136 => 59,  132 => 58,  128 => 56,  124 => 55,  70 => 3,  60 => 2,  49 => 75,  47 => 2,  44 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("
{% block body %}


<h1 style=\"text-align: center\"> Liste des Evenement </h1>
<br>



<!DOCTYPE html>
<html>
<head>
    <style>
        #customers {
            font-family: Arial, Helvetica, sans-serif;
            border-collapse: collapse;
            width: 50%;
        }

        #customers td, #customers th {
            border: 1px solid #ddd;
            padding: 2px;
        }

        #customers tr:nth-child(even){background-color: #f2f2f2;}

        #customers tr:hover {background-color: #ddd;}

        #customers th {
            padding-top: 12px;
            padding-bottom: 12px;
            text-align: center;
            background-color: #4c7aaf;
            color: yellow;
        }
    </style>
</head>



<table border =\"1\" id=\"customers\" width=\"60%\" height=\"120\" >
    <tr>

                <th>Id</th>
                <th>Titre</th>
                <th>Description</th>
                <th>Lieux</th>
                <th>DateDebut</th>
                <th>DateFin</th>
                <th>GatName</th>


    </tr>
    <tbody id=\"all\">
    {% for evenement in evenement %}
        <tr>

              <td>{{ evenement.id }}</td>
                <td>{{ evenement.titre }}</td>
                <td>{{ evenement.description }}</td>
                <td>{{ evenement.lieux }}</td>
                <td>{{ evenement.dateDebut ? evenement.dateDebut|date('Y-m-d') : '' }}</td>
                <td>{{ evenement.dateFin ? evenement.dateFin|date('Y-m-d') : '' }}</td>
                <td>{{ evenement.gatName }}</td>

        </tr>


    {%endfor%}




    {% endblock %}

", "evenement/pdf.html.twig", "C:\\Users\\Asus\\Desktop\\eya-lakhdher-master\\templates\\evenement\\pdf.html.twig");
    }
}
