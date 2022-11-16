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

/* evenement/_form.html.twig */
class __TwigTemplate_6faf5c4bbc366f07926a138b1a28af61 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "evenement/_form.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "evenement/_form.html.twig"));

        // line 1
        echo "



<style> .form-error {color:red;}
</style>
";
        // line 7
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 7, $this->source); })()), 'form_start', ["attr" => ["novalidate" => "novalidate"]]);
        echo "
<div class=\"card-body\">
<form>
<div class=\"row\">
        <div class=\"form-group\">
            <label class=\"bmd-label-floating\">    ";
        // line 12
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 12, $this->source); })()), "titre", [], "any", false, false, false, 12), 'label');
        echo "
            </label>
            <input placeholder=\"Titre de l'evenement\"  type=\"text\" class=\"form-control\" ";
        // line 14
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 14, $this->source); })()), "titre", [], "any", false, false, false, 14), 'widget');
        echo "
            <div class=\"form-error\">
                ";
        // line 16
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 16, $this->source); })()), "titre", [], "any", false, false, false, 16), 'errors');
        echo "
        </div>
    </div>
        <div class=\"form-group\">
            <label class=\"bmd-label-floating\">    ";
        // line 20
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 20, $this->source); })()), "description", [], "any", false, false, false, 20), 'label');
        echo "
            </label>
            <input placeholder=\"Description de l'evenement\"  type=\"text\" class=\"form-control\" ";
        // line 22
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 22, $this->source); })()), "description", [], "any", false, false, false, 22), 'widget');
        echo " 
            <div class=\"form-error\">
                ";
        // line 24
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 24, $this->source); })()), "description", [], "any", false, false, false, 24), 'errors');
        echo "
            </div>
    </div>
        <div class=\"form-group\">
            <label class=\"bmd-label-floating\">    ";
        // line 28
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 28, $this->source); })()), "lieux", [], "any", false, false, false, 28), 'label');
        echo "
            </label>
            <input placeholder=\"Lieux de l'evenement\" type=\"text\" class=\"form-control\" ";
        // line 30
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 30, $this->source); })()), "lieux", [], "any", false, false, false, 30), 'widget');
        echo "
            <div class=\"form-error\">
                ";
        // line 32
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 32, $this->source); })()), "lieux", [], "any", false, false, false, 32), 'errors');
        echo "
            </div>
    </div>
</div>
<div class=\"row\">


        <div class=\"form-group\">
            <label class=\"bmd-label-floating\">    ";
        // line 40
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 40, $this->source); })()), "dateDebut", [], "any", false, false, false, 40), 'label');
        echo "
            </label>
            <input type=\"date\" class=\"form-control\" ";
        // line 42
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 42, $this->source); })()), "dateDebut", [], "any", false, false, false, 42), 'widget');
        echo "
            <div class=\"form-error\">
                ";
        // line 44
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 44, $this->source); })()), "dateDebut", [], "any", false, false, false, 44), 'errors');
        echo "
            </div>
        </div>
    </div>




     <div class=\"form-group\">
            <label class=\"bmd-label-floating\">    ";
        // line 53
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 53, $this->source); })()), "dateFin", [], "any", false, false, false, 53), 'label');
        echo "
            </label>
            <input type=\"date\" class=\"form-control\" ";
        // line 55
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 55, $this->source); })()), "dateFin", [], "any", false, false, false, 55), 'widget');
        echo "
            <div class=\"form-error\">
                ";
        // line 57
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 57, $this->source); })()), "dateFin", [], "any", false, false, false, 57), 'errors');
        echo "
            </div>
        </div>

<br>
 <div class=\"form-group\">
\t\t\t<input type=\"text\" name=\"name\" id=\"name\" placeholder=\"Gategorie de l'evenement\" disabled required/>         
\t\t\t ";
        // line 64
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 64, $this->source); })()), "gatName", [], "any", false, false, false, 64), 'widget');
        echo " 
\t\t\t ";
        // line 65
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 65, $this->source); })()), "gatName", [], "any", false, false, false, 65), 'errors');
        echo " 
        </div>




        
     <div class=\"form-group\">
            <label class=\"bmd-label-floating\">    ";
        // line 73
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 73, $this->source); })()), "image", [], "any", false, false, false, 73), 'label');
        echo "
            </label>
            <input type=\"file\" class=\"form-control\" ";
        // line 75
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 75, $this->source); })()), "image", [], "any", false, false, false, 75), 'widget');
        echo "
            <div class=\"form-error\">
                ";
        // line 77
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 77, $this->source); })()), "image", [], "any", false, false, false, 77), 'errors');
        echo "
            </div>
        </div>




        

      </div>
    </div>

<br>



    </div>
<div class=\"col-md-3\">
</div>
    ";
        // line 96
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 96, $this->source); })()), 'widget');
        echo "
    <button class=\"btn btn-primary pull-right\">";
        // line 97
        echo twig_escape_filter($this->env, ((array_key_exists("button_label", $context)) ? (_twig_default_filter((isset($context["button_label"]) || array_key_exists("button_label", $context) ? $context["button_label"] : (function () { throw new RuntimeError('Variable "button_label" does not exist.', 97, $this->source); })()), "Save")) : ("Save")), "html", null, true);
        echo "</button>
</form>
";
        // line 99
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 99, $this->source); })()), 'form_end');
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "evenement/_form.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  212 => 99,  207 => 97,  203 => 96,  181 => 77,  176 => 75,  171 => 73,  160 => 65,  156 => 64,  146 => 57,  141 => 55,  136 => 53,  124 => 44,  119 => 42,  114 => 40,  103 => 32,  98 => 30,  93 => 28,  86 => 24,  81 => 22,  76 => 20,  69 => 16,  64 => 14,  59 => 12,  51 => 7,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("



<style> .form-error {color:red;}
</style>
{{ form_start(form,{'attr': {'novalidate': 'novalidate'}}) }}
<div class=\"card-body\">
<form>
<div class=\"row\">
        <div class=\"form-group\">
            <label class=\"bmd-label-floating\">    {{ form_label(form.titre) }}
            </label>
            <input placeholder=\"Titre de l'evenement\"  type=\"text\" class=\"form-control\" {{ form_widget(form.titre) }}
            <div class=\"form-error\">
                {{ form_errors(form.titre) }}
        </div>
    </div>
        <div class=\"form-group\">
            <label class=\"bmd-label-floating\">    {{ form_label(form.description) }}
            </label>
            <input placeholder=\"Description de l'evenement\"  type=\"text\" class=\"form-control\" {{ form_widget(form.description) }} 
            <div class=\"form-error\">
                {{ form_errors(form.description) }}
            </div>
    </div>
        <div class=\"form-group\">
            <label class=\"bmd-label-floating\">    {{ form_label(form.lieux) }}
            </label>
            <input placeholder=\"Lieux de l'evenement\" type=\"text\" class=\"form-control\" {{ form_widget(form.lieux) }}
            <div class=\"form-error\">
                {{ form_errors(form.lieux) }}
            </div>
    </div>
</div>
<div class=\"row\">


        <div class=\"form-group\">
            <label class=\"bmd-label-floating\">    {{ form_label(form.dateDebut) }}
            </label>
            <input type=\"date\" class=\"form-control\" {{ form_widget(form.dateDebut) }}
            <div class=\"form-error\">
                {{ form_errors(form.dateDebut) }}
            </div>
        </div>
    </div>




     <div class=\"form-group\">
            <label class=\"bmd-label-floating\">    {{ form_label(form.dateFin) }}
            </label>
            <input type=\"date\" class=\"form-control\" {{ form_widget(form.dateFin) }}
            <div class=\"form-error\">
                {{ form_errors(form.dateFin) }}
            </div>
        </div>

<br>
 <div class=\"form-group\">
\t\t\t<input type=\"text\" name=\"name\" id=\"name\" placeholder=\"Gategorie de l'evenement\" disabled required/>         
\t\t\t {{ form_widget(form.gatName)}} 
\t\t\t {{ form_errors(form.gatName)}} 
        </div>




        
     <div class=\"form-group\">
            <label class=\"bmd-label-floating\">    {{ form_label(form.image) }}
            </label>
            <input type=\"file\" class=\"form-control\" {{ form_widget(form.image) }}
            <div class=\"form-error\">
                {{ form_errors(form.image) }}
            </div>
        </div>




        

      </div>
    </div>

<br>



    </div>
<div class=\"col-md-3\">
</div>
    {{ form_widget(form) }}
    <button class=\"btn btn-primary pull-right\">{{ button_label|default('Save') }}</button>
</form>
{{ form_end(form) }}", "evenement/_form.html.twig", "D:\\Mohamed\\PIDEV\\templates\\evenement\\_form.html.twig");
    }
}
