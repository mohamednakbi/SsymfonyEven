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

/* reclamation/_form.html.twig */
class __TwigTemplate_731023eb117a8360af50b070f4304e83 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "reclamation/_form.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "reclamation/_form.html.twig"));

        // line 1
        echo "<link rel=\"stylesheet\" href=\"https://maxst.icons8.com/vue-static/landings/line-awesome/line-awesome/1.3.0/css/line-awesome.min.css\">
<section
  class=\"section section-bg\"
  id=\"call-to-action\"
  style=\"background-image: url(assets/images/banner-image-1-1920x500.jpg)\"
>
  <div class=\"container\">
    <div class=\"row\">
      <div class=\"col-lg-10 offset-lg-1\">
        <div class=\"cta-content\">
          <br />
          <br />
          <h2>Feel free to <em>Contact Us</em></h2>
          <p>
            Ut consectetur, metus sit amet aliquet placerat, enim est ultricies
            ligula
          </p>
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
          <iframe
            src=\"https://maps.google.com/maps?q=Av.+L%C3%BAcio+Costa,+Rio+de+Janeiro+-+RJ,+Brazil&amp;t=&amp;z=13&amp;ie=UTF8&amp;iwloc=&amp;output=embed\"
            width=\"100%\"
            height=\"400px\"
            frameborder=\"0\"
            style=\"border: 0\"
            allowfullscreen=\"\"
          ></iframe>
        </div>
      </div>
      <div class=\"col-lg-6 col-md-6 col-xs-12\">
        <div
          class=\"contact-form section-bg\"
          style=\"background-image: url(assets/images/contact-1-720x480.jpg)\"
        >
          ";
        // line 44
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 44, $this->source); })()), 'form_start');
        echo "
          ";
        // line 45
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 45, $this->source); })()), "_token", [], "any", false, false, false, 45), 'row');
        echo "
          <div class=\"row\">
              <div class=\"col-md-12\" id=\"qr\" >
                <img src=\"";
        // line 48
        echo twig_escape_filter($this->env, $this->env->getRuntime('Endroid\QrCodeBundle\Twig\QrCodeRuntime')->qrCodeUrlFunction("Votre réclamation"), "html", null, true);
        echo "\" />

              </div>
          </div>
          <br>
          <div class=\"row\">
            <div class=\"col-md-12 col-sm-12\">
              <fieldset>
                ";
        // line 56
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 56, $this->source); })()), "reservation", [], "any", false, false, false, 56), 'widget', ["attr" => ["Placeholder" => "Réservation", "class" => "form-control"]]);
        // line 58
        echo "
                <span style=\"color: red\">
                  ";
        // line 60
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["errors"]) || array_key_exists("errors", $context) ? $context["errors"] : (function () { throw new RuntimeError('Variable "errors" does not exist.', 60, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
            echo " ";
            if ((twig_get_attribute($this->env, $this->source, $context["error"], "propertyPath", [], "any", false, false, false, 60) == "reservation")) {
                // line 61
                echo " * ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["error"], "message", [], "any", false, false, false, 61), "html", null, true);
                echo " ";
            }
            echo " ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['error'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 62
        echo "</span
                >
              </fieldset>
            </div>
            <br />
            <br>
            <br>
            <br>
            
            <h3>Evaluation</h3>
            <div class=\"col-md-12 col-sm-12\">
              <fieldset>
                <br>
                <div class=\"stars\" style=\"font-size:larger\">
                  <i class=\"lar la-star\" data-value=\"1\"></i
                  ><i class=\"lar la-star\" data-value=\"2\"></i
                  ><i class=\"lar la-star\" data-value=\"3\"></i
                  ><i class=\"lar la-star\" data-value=\"4\"></i
                  ><i class=\"lar la-star\" data-value=\"5\"></i>
                </div>
                ";
        // line 82
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 82, $this->source); })()), "evaluation", [], "any", false, false, false, 82), 'widget', ["attr" => ["Placeholder" => "Evaluation", "class" => "form-control", "hidden" => true]]);
        // line 84
        echo "
                <span style=\"color: red\">
                  ";
        // line 86
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["errors"]) || array_key_exists("errors", $context) ? $context["errors"] : (function () { throw new RuntimeError('Variable "errors" does not exist.', 86, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
            echo " ";
            if ((twig_get_attribute($this->env, $this->source, $context["error"], "propertyPath", [], "any", false, false, false, 86) == "evaluation")) {
                // line 87
                echo " * ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["error"], "message", [], "any", false, false, false, 87), "html", null, true);
                echo " ";
            }
            echo " ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['error'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 88
        echo "</span
                >
              </fieldset>
              <br>
            <br>
            </div>
            
            <div class=\"col-lg-12\">
              <fieldset>
                ";
        // line 97
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 97, $this->source); })()), "commentaire", [], "any", false, false, false, 97), 'widget', ["attr" => ["class" => "form-control", "placeholder" => "Commentaire"]]);
        // line 99
        echo "
                <span style=\"color: red\">
                  ";
        // line 101
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["errors"]) || array_key_exists("errors", $context) ? $context["errors"] : (function () { throw new RuntimeError('Variable "errors" does not exist.', 101, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
            echo " ";
            if ((twig_get_attribute($this->env, $this->source, $context["error"], "propertyPath", [], "any", false, false, false, 101) == "commentaire")) {
                // line 102
                echo " * ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["error"], "message", [], "any", false, false, false, 102), "html", null, true);
                echo " ";
            }
            echo " ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['error'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 103
        echo "</span
                >
              </fieldset>
            </div>
            <br />
            <div class=\"col-lg-12\" style=\"margin-top: 50px\">
              <fieldset>
                <button
                  type=\"submit\"
                  id=\"form-submit\"
                  class=\"main-button\"
                  formnovalidate
                >
                  Réclamer
                </button>
              </fieldset>
            </div>
          </div>
          ";
        // line 121
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 121, $this->source); })()), 'form_end', ["render_rest" => false]);
        echo "
        </div>
      </div>
    </div>
  </div>
</section>

<script>\t
  window.onload = () => {
    // On va chercher toutes les étoiles
    const stars = document.querySelectorAll(\".la-star\");
    
    // On va chercher l'input
    const note = document.querySelector(\"#reclamation_evaluation\");

    // On boucle sur les étoiles pour le ajouter des écouteurs d'évènements
    for(star of stars){
        // On écoute le survol
        star.addEventListener(\"mouseover\", function(){
            resetStars();
            this.style.color = \"red\";
            this.classList.add(\"las\");
            this.classList.remove(\"lar\");
            // L'élément précédent dans le DOM (de même niveau, balise soeur)
            let previousStar = this.previousElementSibling;

            while(previousStar){
                // On passe l'étoile qui précède en rouge
                previousStar.style.color = \"red\";
                previousStar.classList.add(\"las\");
                previousStar.classList.remove(\"lar\");
                // On récupère l'étoile qui la précède
                previousStar = previousStar.previousElementSibling;
            }
        });

        // On écoute le clic
        star.addEventListener(\"click\", function(){
            note.value = this.dataset.value;
        });

        star.addEventListener(\"mouseout\", function(){
            resetStars(note.value);
        });
    }

    /**
     * Reset des étoiles en vérifiant la note dans l'input caché
     * @param {number} note 
     */
    function resetStars(note = 0){
        for(star of stars){
            if(star.dataset.value > note){
                star.style.color = \"black\";
                star.classList.add(\"lar\");
                star.classList.remove(\"las\");
            }else{
                star.style.color = \"red\";
                star.classList.add(\"las\");
                star.classList.remove(\"lar\");
            }
        }
    }
}
</script>
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "reclamation/_form.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  228 => 121,  208 => 103,  198 => 102,  192 => 101,  188 => 99,  186 => 97,  175 => 88,  165 => 87,  159 => 86,  155 => 84,  153 => 82,  131 => 62,  121 => 61,  115 => 60,  111 => 58,  109 => 56,  98 => 48,  92 => 45,  88 => 44,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<link rel=\"stylesheet\" href=\"https://maxst.icons8.com/vue-static/landings/line-awesome/line-awesome/1.3.0/css/line-awesome.min.css\">
<section
  class=\"section section-bg\"
  id=\"call-to-action\"
  style=\"background-image: url(assets/images/banner-image-1-1920x500.jpg)\"
>
  <div class=\"container\">
    <div class=\"row\">
      <div class=\"col-lg-10 offset-lg-1\">
        <div class=\"cta-content\">
          <br />
          <br />
          <h2>Feel free to <em>Contact Us</em></h2>
          <p>
            Ut consectetur, metus sit amet aliquet placerat, enim est ultricies
            ligula
          </p>
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
          <iframe
            src=\"https://maps.google.com/maps?q=Av.+L%C3%BAcio+Costa,+Rio+de+Janeiro+-+RJ,+Brazil&amp;t=&amp;z=13&amp;ie=UTF8&amp;iwloc=&amp;output=embed\"
            width=\"100%\"
            height=\"400px\"
            frameborder=\"0\"
            style=\"border: 0\"
            allowfullscreen=\"\"
          ></iframe>
        </div>
      </div>
      <div class=\"col-lg-6 col-md-6 col-xs-12\">
        <div
          class=\"contact-form section-bg\"
          style=\"background-image: url(assets/images/contact-1-720x480.jpg)\"
        >
          {{ form_start(form) }}
          {{ form_row(form._token) }}
          <div class=\"row\">
              <div class=\"col-md-12\" id=\"qr\" >
                <img src=\"{{ qr_code_url('Votre réclamation') }}\" />

              </div>
          </div>
          <br>
          <div class=\"row\">
            <div class=\"col-md-12 col-sm-12\">
              <fieldset>
                {{ form_widget(form.reservation,{\"attr\" : {'Placeholder' : \"Réservation\" ,  \"class\" : 'form-control'

                }}) }}
                <span style=\"color: red\">
                  {% for error in errors %} {% if error.propertyPath ==
                  \"reservation\" %} * {{ error.message }} {% endif %} {% endfor
                  %}</span
                >
              </fieldset>
            </div>
            <br />
            <br>
            <br>
            <br>
            
            <h3>Evaluation</h3>
            <div class=\"col-md-12 col-sm-12\">
              <fieldset>
                <br>
                <div class=\"stars\" style=\"font-size:larger\">
                  <i class=\"lar la-star\" data-value=\"1\"></i
                  ><i class=\"lar la-star\" data-value=\"2\"></i
                  ><i class=\"lar la-star\" data-value=\"3\"></i
                  ><i class=\"lar la-star\" data-value=\"4\"></i
                  ><i class=\"lar la-star\" data-value=\"5\"></i>
                </div>
                {{ form_widget(form.evaluation,{\"attr\" : {'Placeholder' : \"Evaluation\" ,  \"class\" : 'form-control' , 'hidden' : true

                }}) }}
                <span style=\"color: red\">
                  {% for error in errors %} {% if error.propertyPath ==
                  \"evaluation\" %} * {{ error.message }} {% endif %} {% endfor
                  %}</span
                >
              </fieldset>
              <br>
            <br>
            </div>
            
            <div class=\"col-lg-12\">
              <fieldset>
                {{ form_widget(form.commentaire , {\"attr\" : {\"class\" : 'form-control' , 'placeholder' : 'Commentaire'

                }}) }}
                <span style=\"color: red\">
                  {% for error in errors %} {% if error.propertyPath ==
                  \"commentaire\" %} * {{ error.message }} {% endif %} {% endfor
                  %}</span
                >
              </fieldset>
            </div>
            <br />
            <div class=\"col-lg-12\" style=\"margin-top: 50px\">
              <fieldset>
                <button
                  type=\"submit\"
                  id=\"form-submit\"
                  class=\"main-button\"
                  formnovalidate
                >
                  Réclamer
                </button>
              </fieldset>
            </div>
          </div>
          {{ form_end(form, { render_rest: false }) }}
        </div>
      </div>
    </div>
  </div>
</section>

<script>\t
  window.onload = () => {
    // On va chercher toutes les étoiles
    const stars = document.querySelectorAll(\".la-star\");
    
    // On va chercher l'input
    const note = document.querySelector(\"#reclamation_evaluation\");

    // On boucle sur les étoiles pour le ajouter des écouteurs d'évènements
    for(star of stars){
        // On écoute le survol
        star.addEventListener(\"mouseover\", function(){
            resetStars();
            this.style.color = \"red\";
            this.classList.add(\"las\");
            this.classList.remove(\"lar\");
            // L'élément précédent dans le DOM (de même niveau, balise soeur)
            let previousStar = this.previousElementSibling;

            while(previousStar){
                // On passe l'étoile qui précède en rouge
                previousStar.style.color = \"red\";
                previousStar.classList.add(\"las\");
                previousStar.classList.remove(\"lar\");
                // On récupère l'étoile qui la précède
                previousStar = previousStar.previousElementSibling;
            }
        });

        // On écoute le clic
        star.addEventListener(\"click\", function(){
            note.value = this.dataset.value;
        });

        star.addEventListener(\"mouseout\", function(){
            resetStars(note.value);
        });
    }

    /**
     * Reset des étoiles en vérifiant la note dans l'input caché
     * @param {number} note 
     */
    function resetStars(note = 0){
        for(star of stars){
            if(star.dataset.value > note){
                star.style.color = \"black\";
                star.classList.add(\"lar\");
                star.classList.remove(\"las\");
            }else{
                star.style.color = \"red\";
                star.classList.add(\"las\");
                star.classList.remove(\"lar\");
            }
        }
    }
}
</script>
", "reclamation/_form.html.twig", "C:\\Users\\Asus\\Desktop\\eya-lakhdher-master\\templates\\reclamation\\_form.html.twig");
    }
}
