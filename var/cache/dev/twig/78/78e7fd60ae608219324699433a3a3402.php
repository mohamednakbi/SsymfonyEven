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

/* reservation/_form.html.twig */
class __TwigTemplate_be749dd9571d7a58a08c4a709a370785 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "reservation/_form.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "reservation/_form.html.twig"));

        // line 1
        echo "
<section class=\"section section-bg\" id=\"call-to-action\" style=\"background-image: url(assets/images/banner-image-1-1920x500.jpg)\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-lg-10 offset-lg-1\">
                <div class=\"cta-content\">
                    <br>
                    <br>
                    <h2>Feel free to <em>Contact Us</em></h2>
                    <p>Ut consectetur, metus sit amet aliquet placerat, enim est ultricies ligula</p>
                </div>
            </div>
        </div>
    </div>
</section>

<section class=\"section\" id=\"contact-us\" style=\"margin-top: 0\">
    <div class=\"container-fluid\">
        <div class=\"row\">
            <div class=\"col-lg-6 col-md-6 col-xs-12\">
                <div id=\"map\">
                  <iframe src=\"https://maps.google.com/maps?q=Av.+L%C3%BAcio+Costa,+Rio+de+Janeiro+-+RJ,+Brazil&amp;t=&amp;z=13&amp;ie=UTF8&amp;iwloc=&amp;output=embed\" width=\"100%\" height=\"400px\" frameborder=\"0\" style=\"border:0\" allowfullscreen=\"\"></iframe>
                </div>
            </div>
            <div class=\"col-lg-6 col-md-6 col-xs-12\">
                <div class=\"contact-form section-bg\" style=\"background-image: url(assets/images/contact-1-720x480.jpg)\">
                    ";
        // line 27
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 27, $this->source); })()), 'form_start');
        echo "
                    ";
        // line 28
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 28, $this->source); })()), "_token", [], "any", false, false, false, 28), 'row');
        echo "
                      <div class=\"row\">
                        <div class=\"col-md-6 col-sm-12\">
                          <fieldset>
                            <input name=\"name\" type=\"text\" id=\"name\" placeholder=\"Votre nom*\" class=\"form-control\" >
                            <span style=\"color:red;\"> ";
        // line 33
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["errors"]) || array_key_exists("errors", $context) ? $context["errors"] : (function () { throw new RuntimeError('Variable "errors" does not exist.', 33, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
            // line 34
            echo "                                ";
            if ((twig_get_attribute($this->env, $this->source, $context["error"], "propertyPath", [], "any", false, false, false, 34) == "client")) {
                // line 35
                echo "                                  * ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["error"], "message", [], "any", false, false, false, 35), "html", null, true);
                echo "
                                ";
            }
            // line 37
            echo "                              ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['error'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        echo "</span>
                          </fieldset>
                        </div>
                        <div class=\"col-md-6 col-sm-12\">
                          <fieldset>
                            <input name=\"prenom\" type=\"text\" id=\"name\" placeholder=\"Votre prénom*\" class=\"form-control\">
                            <span style=\"color:red;\"> ";
        // line 43
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["errors"]) || array_key_exists("errors", $context) ? $context["errors"] : (function () { throw new RuntimeError('Variable "errors" does not exist.', 43, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
            // line 44
            echo "                                ";
            if ((twig_get_attribute($this->env, $this->source, $context["error"], "propertyPath", [], "any", false, false, false, 44) == "client")) {
                // line 45
                echo "                                  * ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["error"], "message", [], "any", false, false, false, 45), "html", null, true);
                echo "
                                ";
            }
            // line 47
            echo "                              ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['error'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        echo "</span>
                          </fieldset>
                        </div>
                        <div class=\"col-md-12 col-sm-12\">
                          <fieldset>
                            ";
        // line 52
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 52, $this->source); })()), "description", [], "any", false, false, false, 52), 'widget', ["attr" => ["Placeholder" => "Description", "class" => "form-control"]]);
        echo "
                            <span style=\"color:red;\"> ";
        // line 53
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["errors"]) || array_key_exists("errors", $context) ? $context["errors"] : (function () { throw new RuntimeError('Variable "errors" does not exist.', 53, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
            // line 54
            echo "                                ";
            if ((twig_get_attribute($this->env, $this->source, $context["error"], "propertyPath", [], "any", false, false, false, 54) == "description")) {
                // line 55
                echo "                                  * ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["error"], "message", [], "any", false, false, false, 55), "html", null, true);
                echo "
                                ";
            }
            // line 57
            echo "                              ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['error'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        echo "</span>
                          </fieldset>
                        </div>
                        <div class=\"col-lg-12\">
                          <fieldset>
                            ";
        // line 62
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 62, $this->source); })()), "service", [], "any", false, false, false, 62), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
                            <span style=\"color:red;\"> ";
        // line 63
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["errors"]) || array_key_exists("errors", $context) ? $context["errors"] : (function () { throw new RuntimeError('Variable "errors" does not exist.', 63, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
            // line 64
            echo "                                ";
            if ((twig_get_attribute($this->env, $this->source, $context["error"], "propertyPath", [], "any", false, false, false, 64) == "service")) {
                // line 65
                echo "                                  * ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["error"], "message", [], "any", false, false, false, 65), "html", null, true);
                echo "
                                ";
            }
            // line 67
            echo "                              ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['error'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        echo "</span>
                          </fieldset>
                        </div>
                        <br>
                        <div class=\"col-lg-12\" style=\"margin-top:50px;\">
                          <fieldset>
                            <button type=\"submit\" id=\"form-submit\" class=\"main-button\" formnovalidate>Réserver</button>
                          </fieldset>
                        </div>
                      </div>
                      ";
        // line 77
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 77, $this->source); })()), 'form_end', ["render_rest" => false]);
        echo "
                </div>
            </div>
        </div>
    </div>
</section>

";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "reservation/_form.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  197 => 77,  180 => 67,  174 => 65,  171 => 64,  167 => 63,  163 => 62,  151 => 57,  145 => 55,  142 => 54,  138 => 53,  134 => 52,  122 => 47,  116 => 45,  113 => 44,  109 => 43,  96 => 37,  90 => 35,  87 => 34,  83 => 33,  75 => 28,  71 => 27,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("
<section class=\"section section-bg\" id=\"call-to-action\" style=\"background-image: url(assets/images/banner-image-1-1920x500.jpg)\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-lg-10 offset-lg-1\">
                <div class=\"cta-content\">
                    <br>
                    <br>
                    <h2>Feel free to <em>Contact Us</em></h2>
                    <p>Ut consectetur, metus sit amet aliquet placerat, enim est ultricies ligula</p>
                </div>
            </div>
        </div>
    </div>
</section>

<section class=\"section\" id=\"contact-us\" style=\"margin-top: 0\">
    <div class=\"container-fluid\">
        <div class=\"row\">
            <div class=\"col-lg-6 col-md-6 col-xs-12\">
                <div id=\"map\">
                  <iframe src=\"https://maps.google.com/maps?q=Av.+L%C3%BAcio+Costa,+Rio+de+Janeiro+-+RJ,+Brazil&amp;t=&amp;z=13&amp;ie=UTF8&amp;iwloc=&amp;output=embed\" width=\"100%\" height=\"400px\" frameborder=\"0\" style=\"border:0\" allowfullscreen=\"\"></iframe>
                </div>
            </div>
            <div class=\"col-lg-6 col-md-6 col-xs-12\">
                <div class=\"contact-form section-bg\" style=\"background-image: url(assets/images/contact-1-720x480.jpg)\">
                    {{ form_start(form) }}
                    {{ form_row(form._token) }}
                      <div class=\"row\">
                        <div class=\"col-md-6 col-sm-12\">
                          <fieldset>
                            <input name=\"name\" type=\"text\" id=\"name\" placeholder=\"Votre nom*\" class=\"form-control\" >
                            <span style=\"color:red;\"> {% for error in errors %}
                                {% if error.propertyPath == \"client\" %}
                                  * {{ error.message }}
                                {% endif %}
                              {% endfor %}</span>
                          </fieldset>
                        </div>
                        <div class=\"col-md-6 col-sm-12\">
                          <fieldset>
                            <input name=\"prenom\" type=\"text\" id=\"name\" placeholder=\"Votre prénom*\" class=\"form-control\">
                            <span style=\"color:red;\"> {% for error in errors %}
                                {% if error.propertyPath == \"client\" %}
                                  * {{ error.message }}
                                {% endif %}
                              {% endfor %}</span>
                          </fieldset>
                        </div>
                        <div class=\"col-md-12 col-sm-12\">
                          <fieldset>
                            {{ form_widget(form.description,{\"attr\" : {'Placeholder' : \"Description\" ,  \"class\" : 'form-control'}}) }}
                            <span style=\"color:red;\"> {% for error in errors %}
                                {% if error.propertyPath == \"description\" %}
                                  * {{ error.message }}
                                {% endif %}
                              {% endfor %}</span>
                          </fieldset>
                        </div>
                        <div class=\"col-lg-12\">
                          <fieldset>
                            {{ form_widget(form.service , {\"attr\" : {\"class\" : 'form-control'}}) }}
                            <span style=\"color:red;\"> {% for error in errors %}
                                {% if error.propertyPath == \"service\" %}
                                  * {{ error.message }}
                                {% endif %}
                              {% endfor %}</span>
                          </fieldset>
                        </div>
                        <br>
                        <div class=\"col-lg-12\" style=\"margin-top:50px;\">
                          <fieldset>
                            <button type=\"submit\" id=\"form-submit\" class=\"main-button\" formnovalidate>Réserver</button>
                          </fieldset>
                        </div>
                      </div>
                      {{ form_end(form , {'render_rest' : false}) }}
                </div>
            </div>
        </div>
    </div>
</section>

", "reservation/_form.html.twig", "C:\\Users\\Asus\\Desktop\\eya-lakhdher-master\\templates\\reservation\\_form.html.twig");
    }
}
