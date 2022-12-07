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

/* reservation/index.html.twig */
class __TwigTemplate_7141eeea7fdb1c8a38777d1ade2f6ee1 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "reservation/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "reservation/index.html.twig"));

        $this->parent = $this->loadTemplate("base/base_admin.html.twig", "reservation/index.html.twig", 1);
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
        echo "<h1>Liste des réservation</h1>

<div class=\"card\">
  <div class=\"card-body\">
    <div class=\"row\">
      <div class=\"col-md-12\">
        <center>
          <input
            type=\"search\"
            class=\"form-control\"
            id=\"searchE\"
            placeholder=\"Rechercher...\"
          />
        </center>
      </div>
    </div>
    <br>
    <table class=\"table\">
      <thead>
        <tr>
          <th>Id</th>
          <th>Service</th>
          <th>Date</th>
          <th>Description</th>
          <th>Client</th>
          <th>Etat</th>
          <th>actions</th>
        </tr>
      </thead>
      <tbody>
        ";
        // line 32
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["reservations"]) || array_key_exists("reservations", $context) ? $context["reservations"] : (function () { throw new RuntimeError('Variable "reservations" does not exist.', 32, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["reservation"]) {
            // line 33
            echo "        <tr class=\"item id";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["reservation"], "id", [], "any", false, false, false, 33), "html", null, true);
            echo "\">
          <td>";
            // line 34
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["reservation"], "id", [], "any", false, false, false, 34), "html", null, true);
            echo "</td>
          <td>";
            // line 35
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["reservation"], "service", [], "any", false, false, false, 35), "html", null, true);
            echo "</td>
          <td>
            ";
            // line 37
            ((twig_get_attribute($this->env, $this->source, $context["reservation"], "date", [], "any", false, false, false, 37)) ? (print (twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["reservation"], "date", [], "any", false, false, false, 37), "Y-m-d H:i:s"), "html", null, true))) : (print ("")));
            echo "
          </td>
          <td>";
            // line 39
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["reservation"], "description", [], "any", false, false, false, 39), "html", null, true);
            echo "</td>
          <td>";
            // line 40
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["reservation"], "client", [], "any", false, false, false, 40), "html", null, true);
            echo "</td>
          <td>";
            // line 41
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["reservation"], "etat", [], "any", false, false, false, 41), "html", null, true);
            echo "</td>
          <td>
            <a
              href=\"";
            // line 44
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_reservation_delete", ["id" => twig_get_attribute($this->env, $this->source,             // line 45
$context["reservation"], "id", [], "any", false, false, false, 45)]), "html", null, true);
            // line 46
            echo "\"
              >delete</a
            >
            <a href=\"";
            // line 49
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_reservation_edit", ["id" => twig_get_attribute($this->env, $this->source, $context["reservation"], "id", [], "any", false, false, false, 49)]), "html", null, true);
            echo "\"
              >edit</a
            >
          </td>
        </tr>
        ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 55
            echo "        <tr>
          <td colspan=\"6\">no records found</td>
        </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['reservation'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 59
        echo "      </tbody>
    </table>
  </div>
</div>
<script src=\"https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.1/jquery.min.js\" integrity=\"sha512-aVKKRRi/Q/YV+4mjoKBsE4x3H+BkegoM/em46NNlCqNTmUYADjBbeNefNxYV7giUp0VxICtqdrbqU7iVaeZNXA==\" crossorigin=\"anonymous\" referrerpolicy=\"no-referrer\"></script>
<script>
    const search = document.querySelector('#searchE')
    const events = document.querySelectorAll(\".item\");
  
    search.addEventListener('keyup' , (e) => {
      \$.ajax({
        url: '";
        // line 70
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_reservation_search");
        echo "',
        type: \"GET\",
        data: { query: e.target.value },
        success: function (data) {
          events.forEach(e=>{
            e.hidden = true
          })
          JSON.parse(data).forEach((elem) => {
            document.querySelector(`.id\${elem.id}`).hidden = false
          });
          
        },
        error: function () {
          
        },
      });
    })
  </script>
";
        // line 92
        echo " ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "reservation/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  199 => 92,  178 => 70,  165 => 59,  156 => 55,  145 => 49,  140 => 46,  138 => 45,  137 => 44,  131 => 41,  127 => 40,  123 => 39,  118 => 37,  113 => 35,  109 => 34,  104 => 33,  99 => 32,  67 => 2,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"base/base_admin.html.twig\" %} {% block body %}
<h1>Liste des réservation</h1>

<div class=\"card\">
  <div class=\"card-body\">
    <div class=\"row\">
      <div class=\"col-md-12\">
        <center>
          <input
            type=\"search\"
            class=\"form-control\"
            id=\"searchE\"
            placeholder=\"Rechercher...\"
          />
        </center>
      </div>
    </div>
    <br>
    <table class=\"table\">
      <thead>
        <tr>
          <th>Id</th>
          <th>Service</th>
          <th>Date</th>
          <th>Description</th>
          <th>Client</th>
          <th>Etat</th>
          <th>actions</th>
        </tr>
      </thead>
      <tbody>
        {% for reservation in reservations %}
        <tr class=\"item id{{ reservation.id }}\">
          <td>{{ reservation.id }}</td>
          <td>{{ reservation.service }}</td>
          <td>
            {{ reservation.date ? reservation.date|date('Y-m-d H:i:s') : '' }}
          </td>
          <td>{{ reservation.description }}</td>
          <td>{{ reservation.client }}</td>
          <td>{{ reservation.etat }}</td>
          <td>
            <a
              href=\"{{
                path('app_reservation_delete', { id: reservation.id })
              }}\"
              >delete</a
            >
            <a href=\"{{ path('app_reservation_edit', { id: reservation.id }) }}\"
              >edit</a
            >
          </td>
        </tr>
        {% else %}
        <tr>
          <td colspan=\"6\">no records found</td>
        </tr>
        {% endfor %}
      </tbody>
    </table>
  </div>
</div>
<script src=\"https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.1/jquery.min.js\" integrity=\"sha512-aVKKRRi/Q/YV+4mjoKBsE4x3H+BkegoM/em46NNlCqNTmUYADjBbeNefNxYV7giUp0VxICtqdrbqU7iVaeZNXA==\" crossorigin=\"anonymous\" referrerpolicy=\"no-referrer\"></script>
<script>
    const search = document.querySelector('#searchE')
    const events = document.querySelectorAll(\".item\");
  
    search.addEventListener('keyup' , (e) => {
      \$.ajax({
        url: '{{ path(\"app_reservation_search\") }}',
        type: \"GET\",
        data: { query: e.target.value },
        success: function (data) {
          events.forEach(e=>{
            e.hidden = true
          })
          JSON.parse(data).forEach((elem) => {
            document.querySelector(`.id\${elem.id}`).hidden = false
          });
          
        },
        error: function () {
          
        },
      });
    })
  </script>
{#
<a href=\"{{ path('app_reservation_new') }}\" class=\"btn btn-primary\"
  >Create new</a
>
#} {% endblock %}
", "reservation/index.html.twig", "C:\\Users\\Asus\\Desktop\\eya-lakhdher-master\\templates\\reservation\\index.html.twig");
    }
}
