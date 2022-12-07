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

/* reclamation/edit.html.twig */
class __TwigTemplate_2d85ea14b3d1e7076dc1f81e856b57cb extends Template
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
        return "base/base_admin.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "reclamation/edit.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "reclamation/edit.html.twig"));

        $this->parent = $this->loadTemplate("base/base_admin.html.twig", "reclamation/edit.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 2
        echo "<h1></h1>

<div class=\"card\">
  <div class=\"card-body\">
    <h5 class=\"card-title\">Edit Reservation</h5>

    <!-- General Form Elements -->
    ";
        // line 9
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 9, $this->source); })()), 'form_start');
        echo "
    ";
        // line 10
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 10, $this->source); })()), "_token", [], "any", false, false, false, 10), 'row');
        echo "
    <div class=\"row mb-3\">
      <label for=\"inputEmail\" class=\"col-sm-2 col-form-label\">Réservation</label>
      <div class=\"col-sm-10\">
        ";
        // line 14
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 14, $this->source); })()), "reservation", [], "any", false, false, false, 14), 'widget', ["attr" => ["Placeholder" => "Réservation", "class" => "form-control"]]);
        // line 15
        echo "
        <span style=\"color: red\">
          ";
        // line 17
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["errors"]) || array_key_exists("errors", $context) ? $context["errors"] : (function () { throw new RuntimeError('Variable "errors" does not exist.', 17, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
            echo " ";
            if ((twig_get_attribute($this->env, $this->source, $context["error"], "propertyPath", [], "any", false, false, false, 17) == "reservation")) {
                echo " *
          ";
                // line 18
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["error"], "message", [], "any", false, false, false, 18), "html", null, true);
                echo " ";
            }
            echo " ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['error'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        echo "</span
        >
      </div>
    </div>
    <div class=\"row mb-3\">
      <label for=\"inputPassword\" class=\"col-sm-2 col-form-label\"
        >Evaluation</label
      >
      <div class=\"col-sm-10\">
        ";
        // line 27
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 27, $this->source); })()), "evaluation", [], "any", false, false, false, 27), 'widget', ["attr" => ["Placeholder" => "Evaluation", "class" => "form-control"]]);
        // line 28
        echo "
        <span style=\"color: red\">
          ";
        // line 30
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["errors"]) || array_key_exists("errors", $context) ? $context["errors"] : (function () { throw new RuntimeError('Variable "errors" does not exist.', 30, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
            echo " ";
            if ((twig_get_attribute($this->env, $this->source, $context["error"], "propertyPath", [], "any", false, false, false, 30) == "evaluation")) {
                // line 31
                echo "          * ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["error"], "message", [], "any", false, false, false, 31), "html", null, true);
                echo " ";
            }
            echo " ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['error'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        echo "</span
        >
      </div>
    </div>
    <div class=\"row mb-3\">
      <label for=\"inputNumber\" class=\"col-sm-2 col-form-label\">Commentaire</label>
      <div class=\"col-sm-10\">
        ";
        // line 38
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 38, $this->source); })()), "commentaire", [], "any", false, false, false, 38), 'widget', ["attr" => ["class" => "form-select", "aria-label" => "Default select example"]]);
        // line 39
        echo "
        <span style=\"color: red\">
          ";
        // line 41
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["errors"]) || array_key_exists("errors", $context) ? $context["errors"] : (function () { throw new RuntimeError('Variable "errors" does not exist.', 41, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
            echo " ";
            if ((twig_get_attribute($this->env, $this->source, $context["error"], "propertyPath", [], "any", false, false, false, 41) == "commentaire")) {
                echo " *
          ";
                // line 42
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["error"], "message", [], "any", false, false, false, 42), "html", null, true);
                echo " ";
            }
            echo " ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['error'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        echo "</span
        >
      </div>
    </div>

    <div class=\"row mb-3\">
      <div class=\"col-sm-10\">
        <button type=\"submit\" class=\"btn btn-primary\">Modifier</button>
      </div>
    </div>

    ";
        // line 53
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 53, $this->source); })()), 'form_end', ["render_rest" => false]);
        echo "
  </div>
</div>

<a href=\"";
        // line 57
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_reservation_index");
        echo "\">back to list</a>

";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "reclamation/edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  192 => 57,  185 => 53,  164 => 42,  156 => 41,  152 => 39,  150 => 38,  132 => 31,  126 => 30,  122 => 28,  120 => 27,  101 => 18,  93 => 17,  89 => 15,  87 => 14,  80 => 10,  76 => 9,  67 => 2,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"base/base_admin.html.twig\" %} {% block body %}
<h1></h1>

<div class=\"card\">
  <div class=\"card-body\">
    <h5 class=\"card-title\">Edit Reservation</h5>

    <!-- General Form Elements -->
    {{ form_start(form) }}
    {{ form_row(form._token) }}
    <div class=\"row mb-3\">
      <label for=\"inputEmail\" class=\"col-sm-2 col-form-label\">Réservation</label>
      <div class=\"col-sm-10\">
        {{ form_widget(form.reservation,{\"attr\" : {'Placeholder' : \"Réservation\" ,  \"class\" : 'form-control'
        }}) }}
        <span style=\"color: red\">
          {% for error in errors %} {% if error.propertyPath == \"reservation\" %} *
          {{ error.message }} {% endif %} {% endfor %}</span
        >
      </div>
    </div>
    <div class=\"row mb-3\">
      <label for=\"inputPassword\" class=\"col-sm-2 col-form-label\"
        >Evaluation</label
      >
      <div class=\"col-sm-10\">
        {{ form_widget(form.evaluation,{\"attr\" : {'Placeholder' : \"Evaluation\" ,  \"class\" : 'form-control'
        }}) }}
        <span style=\"color: red\">
          {% for error in errors %} {% if error.propertyPath == \"evaluation\" %}
          * {{ error.message }} {% endif %} {% endfor %}</span
        >
      </div>
    </div>
    <div class=\"row mb-3\">
      <label for=\"inputNumber\" class=\"col-sm-2 col-form-label\">Commentaire</label>
      <div class=\"col-sm-10\">
        {{ form_widget(form.commentaire , {\"attr\" : {\"class\" : 'form-select' , \"aria-label\" : \"Default select example\"
        }}) }}
        <span style=\"color: red\">
          {% for error in errors %} {% if error.propertyPath == \"commentaire\" %} *
          {{ error.message }} {% endif %} {% endfor %}</span
        >
      </div>
    </div>

    <div class=\"row mb-3\">
      <div class=\"col-sm-10\">
        <button type=\"submit\" class=\"btn btn-primary\">Modifier</button>
      </div>
    </div>

    {{ form_end(form, { render_rest: false }) }}
  </div>
</div>

<a href=\"{{ path('app_reservation_index') }}\">back to list</a>

{% endblock %}
", "reclamation/edit.html.twig", "C:\\Users\\Asus\\Desktop\\eya-lakhdher-master\\templates\\reclamation\\edit.html.twig");
    }
}
