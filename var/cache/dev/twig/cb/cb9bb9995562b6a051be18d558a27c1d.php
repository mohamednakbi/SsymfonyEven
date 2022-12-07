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

/* index/index.html.twig */
class __TwigTemplate_537df3573af193804b4fb8d0068bbc59 extends Template
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
        return "base/base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "index/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "index/index.html.twig"));

        $this->parent = $this->loadTemplate("base/base.html.twig", "index/index.html.twig", 1);
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

        echo " 

<div class=\"main-banner\" id=\"top\">
  <video autoplay muted loop id=\"bg-video\">
    <source src=\"assets/images/video.mp4\" type=\"video/mp4\" />
  </video>

  <div class=\"video-overlay header-text\">
    <div class=\"caption\">
      <h6>Lorem ipsum dolor sit amet</h6>
      <h2><em>Blog</em> mollia amenda</h2>
      <div class=\"main-button\">
        <a href=\"";
        // line 13
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_reservation_new");
        echo "\">Réserver maintenant</a>
      </div>
    </div>
  </div>
</div>
<!-- ***** Main Banner Area End ***** -->

<!-- ***** Blog Start ***** -->
<section class=\"section\" id=\"our-classes\">
  <div class=\"container\">
    <div class=\"row\">
      <div class=\"col-lg-6 offset-lg-3\">
        <div class=\"section-heading\">
          <h2>Featured <em>Blog posts</em></h2>
          <img src=\"assets/images/line-dec.png\" alt=\"\" />
          <p>
            Nunc urna sem, laoreet ut metus id, aliquet consequat magna. Sed
            viverra ipsum dolor, ultricies fermentum massa consequat eu.
          </p>
        </div>
      </div>
    </div>
    <div class=\"row\" id=\"tabs\">
      <div class=\"col-lg-4\">
        <ul>
          <li>
            <a href=\"#tabs-1\"
              >Lorem ipsum dolor sit amet, consectetur adipisicing.</a
            >
          </li>
          <li>
            <a href=\"#tabs-2\"
              >Aspernatur excepturi magni, placeat rerum nobis magnam libero!
              Soluta.</a
            >
          </li>
          <li>
            <a href=\"#tabs-3\"
              >Sunt hic recusandae vitae explicabo quidem laudantium corrupti
              non adipisci nihil.</a
            >
          </li>
          <div class=\"main-rounded-button\">
            <a href=\"blog.html\">Read More</a>
          </div>
        </ul>
      </div>
      <div class=\"col-lg-8\">
        <section class=\"tabs-content\">
          <article id=\"tabs-1\">
            <img src=\"assets/images/blog-image-1-940x460.jpg\" alt=\"\" />
            <h4>Lorem ipsum dolor sit amet, consectetur adipisicing.</h4>

            <p>
              <i class=\"fa fa-user\"></i> John Doe &nbsp;|&nbsp;
              <i class=\"fa fa-calendar\"></i> 27.07.2020 10:10 &nbsp;|&nbsp;
              <i class=\"fa fa-comments\"></i> 15 comments
            </p>

            <p>
              Phasellus convallis mauris sed elementum vulputate. Donec posuere
              leo sed dui eleifend hendrerit. Sed suscipit suscipit erat, sed
              vehicula ligula. Aliquam ut sem fermentum sem tincidunt lacinia
              gravida aliquam nunc. Morbi quis erat imperdiet, molestie nunc ut,
              accumsan diam.
            </p>
            <div class=\"main-button\">
              <a href=\"blog-details.html\">Continue Reading</a>
            </div>
          </article>
          <article id=\"tabs-2\">
            <img src=\"assets/images/blog-image-2-940x460.jpg\" alt=\"\" />
            <h4>
              Aspernatur excepturi magni, placeat rerum nobis magnam libero!
              Soluta.
            </h4>
            <p>
              <i class=\"fa fa-user\"></i> John Doe &nbsp;|&nbsp;
              <i class=\"fa fa-calendar\"></i> 27.07.2020 10:10 &nbsp;|&nbsp;
              <i class=\"fa fa-comments\"></i> 15 comments
            </p>
            <p>
              Integer dapibus, est vel dapibus mattis, sem mauris luctus leo, ac
              pulvinar quam tortor a velit. Praesent ultrices erat ante, in
              ultricies augue ultricies faucibus. Nam tellus nibh, ullamcorper
              at mattis non, rhoncus sed massa. Cras quis pulvinar eros. Orci
              varius natoque penatibus et magnis dis parturient montes, nascetur
              ridiculus mus.
            </p>
            <div class=\"main-button\">
              <a href=\"blog-details.html\">Continue Reading</a>
            </div>
          </article>
          <article id=\"tabs-3\">
            <img src=\"assets/images/blog-image-3-940x460.jpg\" alt=\"\" />
            <h4>
              Sunt hic recusandae vitae explicabo quidem laudantium corrupti non
              adipisci nihil.
            </h4>
            <p>
              <i class=\"fa fa-user\"></i> John Doe &nbsp;|&nbsp;
              <i class=\"fa fa-calendar\"></i> 27.07.2020 10:10 &nbsp;|&nbsp;
              <i class=\"fa fa-comments\"></i> 15 comments
            </p>
            <p>
              Fusce laoreet malesuada rhoncus. Donec ultricies diam tortor, id
              auctor neque posuere sit amet. Aliquam pharetra, augue vel cursus
              porta, nisi tortor vulputate sapien, id scelerisque felis magna id
              felis. Proin neque metus, pellentesque pharetra semper vel,
              accumsan a neque.
            </p>
            <div class=\"main-button\">
              <a href=\"blog-details.html\">Continue Reading</a>
            </div>
          </article>
        </section>
      </div>
    </div>
  </div>
</section>
<!-- ***** Blog End ***** -->

<section
  class=\"section section-bg\"
  id=\"schedule\"
  style=\"background-image: url(assets/images/about-fullscreen-1-1920x700.jpg)\"
>
  <div class=\"container\">
    <div class=\"row\">
      <div class=\"col-lg-6 offset-lg-3\">
        <div class=\"section-heading dark-bg\">
          <h2>Read <em>About Us</em></h2>
          <img src=\"assets/images/line-dec.png\" alt=\"\" />
          <p>
            Si vous avez une réclamation , <div class=\"main-button\">
              <a href=\"";
        // line 148
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_reclamation_new");
        echo "\">Passer une réclamation maintenant</a>
            </div>
          </p>
        </div>
      </div>
    </div>
    <div class=\"row\">
      <div class=\"col-lg-12\">
        <div class=\"cta-content text-center\">
          <p>
            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Labore
            deleniti voluptas enim! Provident consectetur id earum ducimus
            facilis, aspernatur hic, alias, harum rerum velit voluptas,
            voluptate enim! Eos, sunt, quidem.
          </p>

          <p>
            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Iusto
            nulla quo cum officia laboriosam. Amet tempore, aliquid quia eius
            commodi, doloremque omnis delectus laudantium dolor reiciendis non
            nulla! Doloremque maxime quo eum in culpa mollitia similique eius
            doloribus voluptatem facilis! Voluptatibus, eligendi, illum.
            Distinctio, non!
          </p>
        </div>
      </div>
    </div>
  </div>
</section>

";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "index/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  218 => 148,  80 => 13,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"base/base.html.twig\" %} {% block body %} 

<div class=\"main-banner\" id=\"top\">
  <video autoplay muted loop id=\"bg-video\">
    <source src=\"assets/images/video.mp4\" type=\"video/mp4\" />
  </video>

  <div class=\"video-overlay header-text\">
    <div class=\"caption\">
      <h6>Lorem ipsum dolor sit amet</h6>
      <h2><em>Blog</em> mollia amenda</h2>
      <div class=\"main-button\">
        <a href=\"{{ path('app_reservation_new') }}\">Réserver maintenant</a>
      </div>
    </div>
  </div>
</div>
<!-- ***** Main Banner Area End ***** -->

<!-- ***** Blog Start ***** -->
<section class=\"section\" id=\"our-classes\">
  <div class=\"container\">
    <div class=\"row\">
      <div class=\"col-lg-6 offset-lg-3\">
        <div class=\"section-heading\">
          <h2>Featured <em>Blog posts</em></h2>
          <img src=\"assets/images/line-dec.png\" alt=\"\" />
          <p>
            Nunc urna sem, laoreet ut metus id, aliquet consequat magna. Sed
            viverra ipsum dolor, ultricies fermentum massa consequat eu.
          </p>
        </div>
      </div>
    </div>
    <div class=\"row\" id=\"tabs\">
      <div class=\"col-lg-4\">
        <ul>
          <li>
            <a href=\"#tabs-1\"
              >Lorem ipsum dolor sit amet, consectetur adipisicing.</a
            >
          </li>
          <li>
            <a href=\"#tabs-2\"
              >Aspernatur excepturi magni, placeat rerum nobis magnam libero!
              Soluta.</a
            >
          </li>
          <li>
            <a href=\"#tabs-3\"
              >Sunt hic recusandae vitae explicabo quidem laudantium corrupti
              non adipisci nihil.</a
            >
          </li>
          <div class=\"main-rounded-button\">
            <a href=\"blog.html\">Read More</a>
          </div>
        </ul>
      </div>
      <div class=\"col-lg-8\">
        <section class=\"tabs-content\">
          <article id=\"tabs-1\">
            <img src=\"assets/images/blog-image-1-940x460.jpg\" alt=\"\" />
            <h4>Lorem ipsum dolor sit amet, consectetur adipisicing.</h4>

            <p>
              <i class=\"fa fa-user\"></i> John Doe &nbsp;|&nbsp;
              <i class=\"fa fa-calendar\"></i> 27.07.2020 10:10 &nbsp;|&nbsp;
              <i class=\"fa fa-comments\"></i> 15 comments
            </p>

            <p>
              Phasellus convallis mauris sed elementum vulputate. Donec posuere
              leo sed dui eleifend hendrerit. Sed suscipit suscipit erat, sed
              vehicula ligula. Aliquam ut sem fermentum sem tincidunt lacinia
              gravida aliquam nunc. Morbi quis erat imperdiet, molestie nunc ut,
              accumsan diam.
            </p>
            <div class=\"main-button\">
              <a href=\"blog-details.html\">Continue Reading</a>
            </div>
          </article>
          <article id=\"tabs-2\">
            <img src=\"assets/images/blog-image-2-940x460.jpg\" alt=\"\" />
            <h4>
              Aspernatur excepturi magni, placeat rerum nobis magnam libero!
              Soluta.
            </h4>
            <p>
              <i class=\"fa fa-user\"></i> John Doe &nbsp;|&nbsp;
              <i class=\"fa fa-calendar\"></i> 27.07.2020 10:10 &nbsp;|&nbsp;
              <i class=\"fa fa-comments\"></i> 15 comments
            </p>
            <p>
              Integer dapibus, est vel dapibus mattis, sem mauris luctus leo, ac
              pulvinar quam tortor a velit. Praesent ultrices erat ante, in
              ultricies augue ultricies faucibus. Nam tellus nibh, ullamcorper
              at mattis non, rhoncus sed massa. Cras quis pulvinar eros. Orci
              varius natoque penatibus et magnis dis parturient montes, nascetur
              ridiculus mus.
            </p>
            <div class=\"main-button\">
              <a href=\"blog-details.html\">Continue Reading</a>
            </div>
          </article>
          <article id=\"tabs-3\">
            <img src=\"assets/images/blog-image-3-940x460.jpg\" alt=\"\" />
            <h4>
              Sunt hic recusandae vitae explicabo quidem laudantium corrupti non
              adipisci nihil.
            </h4>
            <p>
              <i class=\"fa fa-user\"></i> John Doe &nbsp;|&nbsp;
              <i class=\"fa fa-calendar\"></i> 27.07.2020 10:10 &nbsp;|&nbsp;
              <i class=\"fa fa-comments\"></i> 15 comments
            </p>
            <p>
              Fusce laoreet malesuada rhoncus. Donec ultricies diam tortor, id
              auctor neque posuere sit amet. Aliquam pharetra, augue vel cursus
              porta, nisi tortor vulputate sapien, id scelerisque felis magna id
              felis. Proin neque metus, pellentesque pharetra semper vel,
              accumsan a neque.
            </p>
            <div class=\"main-button\">
              <a href=\"blog-details.html\">Continue Reading</a>
            </div>
          </article>
        </section>
      </div>
    </div>
  </div>
</section>
<!-- ***** Blog End ***** -->

<section
  class=\"section section-bg\"
  id=\"schedule\"
  style=\"background-image: url(assets/images/about-fullscreen-1-1920x700.jpg)\"
>
  <div class=\"container\">
    <div class=\"row\">
      <div class=\"col-lg-6 offset-lg-3\">
        <div class=\"section-heading dark-bg\">
          <h2>Read <em>About Us</em></h2>
          <img src=\"assets/images/line-dec.png\" alt=\"\" />
          <p>
            Si vous avez une réclamation , <div class=\"main-button\">
              <a href=\"{{ path('app_reclamation_new') }}\">Passer une réclamation maintenant</a>
            </div>
          </p>
        </div>
      </div>
    </div>
    <div class=\"row\">
      <div class=\"col-lg-12\">
        <div class=\"cta-content text-center\">
          <p>
            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Labore
            deleniti voluptas enim! Provident consectetur id earum ducimus
            facilis, aspernatur hic, alias, harum rerum velit voluptas,
            voluptate enim! Eos, sunt, quidem.
          </p>

          <p>
            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Iusto
            nulla quo cum officia laboriosam. Amet tempore, aliquid quia eius
            commodi, doloremque omnis delectus laudantium dolor reiciendis non
            nulla! Doloremque maxime quo eum in culpa mollitia similique eius
            doloribus voluptatem facilis! Voluptatibus, eligendi, illum.
            Distinctio, non!
          </p>
        </div>
      </div>
    </div>
  </div>
</section>

{% endblock %}
", "index/index.html.twig", "C:\\Users\\Asus\\Desktop\\eya-lakhdher-master\\templates\\index\\index.html.twig");
    }
}
