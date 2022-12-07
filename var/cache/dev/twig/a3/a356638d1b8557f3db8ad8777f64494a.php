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

/* base/base.html.twig */
class __TwigTemplate_afb0b6ad804ea731d5cdf1672cf10bff extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'stylesheets' => [$this, 'block_stylesheets'],
            'body' => [$this, 'block_body'],
            'javascripts' => [$this, 'block_javascripts'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base/base.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base/base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
  <head>
    <meta charset=\"UTF-8\" />
    <meta
      name=\"viewport\"
      content=\"width=device-width, initial-scale=1, shrink-to-fit=no\"
    />
    <meta name=\"description\" content=\"\" />
    <meta name=\"author\" content=\"\" />
    <title>";
        // line 11
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
    ";
        // line 12
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 27
        echo "  </head>
  <body>
    <div id=\"js-preloader\" class=\"js-preloader\">
      <div class=\"preloader-inner\">
        <span class=\"dot\"></span>
        <div class=\"dots\">
          <span></span>
          <span></span>
          <span></span>
        </div>
      </div>
    </div>
    <!-- ***** Preloader End ***** -->

    <!-- ***** Header Area Start ***** -->
    <header class=\"header-area header-sticky\">
      <div class=\"container\">
        <div class=\"row\">
          <div class=\"col-12\">
            <nav class=\"main-nav\">
              <!-- ***** Logo Start ***** -->
              <a href=\"index.html\" class=\"logo\">Blog<em> Website</em></a>
              <!-- ***** Logo End ***** -->
              <!-- ***** Menu Start ***** -->
              <ul class=\"nav\">
                <li><a href=\"index.html\" class=\"active\">Home</a></li>
                <li><a href=\"";
        // line 53
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("templatefront");
        echo "\">Evenements</a></li>
                <li><a href=\"about.html\">About us</a></li>
                <li><a href=\"team.html\">Authors</a></li>
                <li><a href=\"contact.html\">Contact</a></li>
              </ul>
              <a class=\"menu-trigger\">
                <span>Menu</span>
              </a>
              <!-- ***** Menu End ***** -->
            </nav>
          </div>
        </div>
      </div>
    </header>
    ";
        // line 67
        $this->displayBlock('body', $context, $blocks);
        // line 68
        echo "    <footer>
      <div class=\"container\">
        <div class=\"row\">
          <div class=\"col-lg-12\">
            <p>
              Copyright © 2020 Company Name - Template by:
              <a href=\"https://www.phpjabbers.com/\">PHPJabbers.com</a>
            </p>
          </div>
        </div>
      </div>
    </footer>
    ";
        // line 80
        $this->displayBlock('javascripts', $context, $blocks);
        // line 98
        echo "  </body>
</html>
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 11
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 12
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 13
        echo "    <link
      href=\"https://fonts.googleapis.com/css?family=Poppins:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i&display=swap\"
      rel=\"stylesheet\"
    />
    <link
      rel=\"stylesheet\"
      type=\"text/css\"
      href=\"/assets/css/bootstrap.min.css\"
    />

    <link rel=\"stylesheet\" type=\"text/css\" href=\"/assets/css/font-awesome.css\" />

    <link rel=\"stylesheet\" href=\"/assets/css/style.css\" />
    ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 67
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        echo "  ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 80
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 81
        echo "    <script src=\"/assets/js/jquery-2.1.0.min.js\"></script>

    <!-- Bootstrap -->
    <script src=\"/assets/js/popper.js\"></script>
    <script src=\"/assets/js/bootstrap.min.js\"></script>

    <!-- Plugins -->
    <script src=\"/assets/js/scrollreveal.min.js\"></script>
    <script src=\"/assets/js/waypoints.min.js\"></script>
    <script src=\"/assets/js/jquery.counterup.min.js\"></script>
    <script src=\"/assets/js/imgfix.min.js\"></script> 
    <script src=\"/assets/js/mixitup.js\"></script> 
    <script src=\"/assets/js/accordions.js\"></script>
    
    <!-- Global Init -->
    <script src=\"/assets/js/custom.js\"></script>
    ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "base/base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  221 => 81,  211 => 80,  192 => 67,  169 => 13,  159 => 12,  140 => 11,  128 => 98,  126 => 80,  112 => 68,  110 => 67,  93 => 53,  65 => 27,  63 => 12,  59 => 11,  47 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html>
  <head>
    <meta charset=\"UTF-8\" />
    <meta
      name=\"viewport\"
      content=\"width=device-width, initial-scale=1, shrink-to-fit=no\"
    />
    <meta name=\"description\" content=\"\" />
    <meta name=\"author\" content=\"\" />
    <title>{% block title %}Welcome!{% endblock %}</title>
    {% block stylesheets %}
    <link
      href=\"https://fonts.googleapis.com/css?family=Poppins:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i&display=swap\"
      rel=\"stylesheet\"
    />
    <link
      rel=\"stylesheet\"
      type=\"text/css\"
      href=\"/assets/css/bootstrap.min.css\"
    />

    <link rel=\"stylesheet\" type=\"text/css\" href=\"/assets/css/font-awesome.css\" />

    <link rel=\"stylesheet\" href=\"/assets/css/style.css\" />
    {% endblock %}
  </head>
  <body>
    <div id=\"js-preloader\" class=\"js-preloader\">
      <div class=\"preloader-inner\">
        <span class=\"dot\"></span>
        <div class=\"dots\">
          <span></span>
          <span></span>
          <span></span>
        </div>
      </div>
    </div>
    <!-- ***** Preloader End ***** -->

    <!-- ***** Header Area Start ***** -->
    <header class=\"header-area header-sticky\">
      <div class=\"container\">
        <div class=\"row\">
          <div class=\"col-12\">
            <nav class=\"main-nav\">
              <!-- ***** Logo Start ***** -->
              <a href=\"index.html\" class=\"logo\">Blog<em> Website</em></a>
              <!-- ***** Logo End ***** -->
              <!-- ***** Menu Start ***** -->
              <ul class=\"nav\">
                <li><a href=\"index.html\" class=\"active\">Home</a></li>
                <li><a href=\"{{ path('templatefront') }}\">Evenements</a></li>
                <li><a href=\"about.html\">About us</a></li>
                <li><a href=\"team.html\">Authors</a></li>
                <li><a href=\"contact.html\">Contact</a></li>
              </ul>
              <a class=\"menu-trigger\">
                <span>Menu</span>
              </a>
              <!-- ***** Menu End ***** -->
            </nav>
          </div>
        </div>
      </div>
    </header>
    {% block body %}  {% endblock %}
    <footer>
      <div class=\"container\">
        <div class=\"row\">
          <div class=\"col-lg-12\">
            <p>
              Copyright © 2020 Company Name - Template by:
              <a href=\"https://www.phpjabbers.com/\">PHPJabbers.com</a>
            </p>
          </div>
        </div>
      </div>
    </footer>
    {% block javascripts %}
    <script src=\"/assets/js/jquery-2.1.0.min.js\"></script>

    <!-- Bootstrap -->
    <script src=\"/assets/js/popper.js\"></script>
    <script src=\"/assets/js/bootstrap.min.js\"></script>

    <!-- Plugins -->
    <script src=\"/assets/js/scrollreveal.min.js\"></script>
    <script src=\"/assets/js/waypoints.min.js\"></script>
    <script src=\"/assets/js/jquery.counterup.min.js\"></script>
    <script src=\"/assets/js/imgfix.min.js\"></script> 
    <script src=\"/assets/js/mixitup.js\"></script> 
    <script src=\"/assets/js/accordions.js\"></script>
    
    <!-- Global Init -->
    <script src=\"/assets/js/custom.js\"></script>
    {% endblock %}
  </body>
</html>
", "base/base.html.twig", "C:\\Users\\Asus\\Desktop\\eya-lakhdher-master\\templates\\base\\base.html.twig");
    }
}
