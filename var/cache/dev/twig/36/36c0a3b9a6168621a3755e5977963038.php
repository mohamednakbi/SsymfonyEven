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

/* base-front.html.twig */
class __TwigTemplate_96c7f63d14606ee817ae063672f85958 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base-front.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base-front.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html lang=\"en\">

  <head>
    <meta charset=\"utf-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\">
    <meta name=\"description\" content=\"\">
    <meta name=\"author\" content=\"\">
    <link href=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("https://fonts.googleapis.com/css?family=Poppins:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i&display=swap"), "html", null, true);
        echo "\" rel=\"stylesheet\">

    <title>  Services a Domicile</title>

    <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("asset/css/bootstrap.min.css"), "html", null, true);
        echo "\">

    <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("asset/css/font-awesome.css"), "html", null, true);
        echo "\">

    <link rel=\"stylesheet\" href=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("asset/css/style.css"), "html", null, true);
        echo "\">

    </head>
    
    <body>
    
    <!-- ***** Preloader Start ***** -->
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
                        <a href=\"";
        // line 44
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("index.html"), "html", null, true);
        echo "\" class=\"logo\">Service a <em> Domcile</em></a>
                        <!-- ***** Logo End ***** -->
                        <!-- ***** Menu Start ***** -->
                        <ul class=\"nav\">
                            <li><a href=\"";
        // line 48
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("index.html"), "html", null, true);
        echo "\" class=\"active\">Home</a></li>
                            <li><a href=\"";
        // line 49
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("packages.html"), "html", null, true);
        echo "\">Packages</a></li>
                            <li><a href=\"";
        // line 50
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("blog.html"), "html", null, true);
        echo "\">Blog</a></li>
                            <li class=\"dropdown\">
                                <a class=\"dropdown-toggle\" data-toggle=\"dropdown\" href=\"#\" role=\"button\" aria-haspopup=\"true\" aria-expanded=\"false\">About</a>
                              
                                <div class=\"dropdown-menu\">
                                    <a class=\"dropdown-item\" href=\"";
        // line 55
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("about.html"), "html", null, true);
        echo "\">About Us</a>
                                    <a class=\"dropdown-item\" href=\"";
        // line 56
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("testimonials.html"), "html", null, true);
        echo "\">Testimonials</a>
                                    <a class=\"dropdown-item\" href=\"";
        // line 57
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("terms.html"), "html", null, true);
        echo "\">Terms</a>
                                </div>
                            </li>
                            <li><a href=\"";
        // line 60
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("contact.html"), "html", null, true);
        echo "\">Contact</a></li> 

                      <li><a  href=\"";
        // line 62
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("evenement_index");
        echo "\" class=\"active\">Back End</a></li>
                        


                        </ul>        
                        <a class='menu-trigger'>
                            <span>Menu</span>
                        </a>
                        <!-- ***** Menu End ***** -->
                    </nav>
                </div>
            </div>
        </div>
    </header>
    <!-- ***** Header Area End ***** -->

    <!-- ***** Main Banner Area Start ***** -->
    <div class=\"main-banner\" id=\"top\">
        <video autoplay muted loop id=\"bg-video\">
            <source src=\"";
        // line 81
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("asset/images/acceuil.mp4"), "html", null, true);
        echo "\" type=\"video/mp4\" />
        </video>

        <div class=\"video-overlay header-text\">
            <div class=\"caption\">
                <h6>Lorem ipsum dolor sit amet</h6>
                <h2><em>House</em> Repair Services!</h2>
                <div class=\"main-button\">
                    <a href=\"";
        // line 89
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("contact.html"), "html", null, true);
        echo "\">Contact Us</a>
                </div>
            </div>
        </div>
    </div>
    <!-- ***** Main Banner Area End ***** -->

   <!-- ***** Cars Starts ***** -->
    <section class=\"section\" id=\"trainers\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-lg-6 offset-lg-3\">
                    <div class=\"section-heading\">
                        <h2>Nos <em>Evenement</em></h2>
                        <img src=\"";
        // line 103
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("asset/images/line-dec.png"), "html", null, true);
        echo "\" alt=\"\">
                        <p>Nunc urna sem, laoreet ut metus id, aliquet consequat magna. Sed viverra ipsum dolor, ultricies fermentum massa consequat eu.</p>
                    </div>
                </div>
            </div>
            
            <div class=\"row g-4\">


            


";
        // line 115
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["Event"]) || array_key_exists("Event", $context) ? $context["Event"] : (function () { throw new RuntimeError('Variable "Event" does not exist.', 115, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["e"]) {
            // line 116
            echo "

                <div class=\"col-lg-4\">
                    <div class=\"trainer-item\">
                        <div class=\"image-thumb\">
                            <img  src=\"";
            // line 121
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/images/" . twig_get_attribute($this->env, $this->source, $context["e"], "image", [], "any", false, false, false, 121))), "html", null, true);
            echo "\" alt=\"\">

                        </div>
                        <div class=\"down-content\">
                            <span>
                                <sup></sup> Nom de evenement: ";
            // line 126
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["e"], "titre", [], "any", false, false, false, 126), "html", null, true);
            echo "<sup>
                            </span>
                            <h4>Gategorie evenement: ";
            // line 128
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["e"], "gatName", [], "any", false, false, false, 128), "html", null, true);
            echo "</h4>
                            <h5>Description: ";
            // line 129
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["e"], "description", [], "any", false, false, false, 129), "html", null, true);
            echo "</h5>
                            <p>
                                Lieux:  ";
            // line 131
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["e"], "lieux", [], "any", false, false, false, 131), "html", null, true);
            echo " &nbsp;&nbsp;&nbsp;
                            </p>   
                              <p>
                                Date Debut:  ";
            // line 134
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["e"], "dateDebut", [], "any", false, false, false, 134), "Y-m-d"), "html", null, true);
            // line 135
            echo " &nbsp;&nbsp;&nbsp;
                            </p>

                               <p>
                                Date Fin:  ";
            // line 139
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["e"], "dateFin", [], "any", false, false, false, 139), "Y-m-d"), "html", null, true);
            // line 140
            echo " &nbsp;&nbsp;&nbsp;
                            </p>
                         

                        </div>
                    </div>
                </div>         
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['e'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 148
        echo "

            
      <!-- 

      affichage


      -->
     
    















            </div>

            <br>

            <div class=\"main-button text-center\">
                <a href=\"";
        // line 179
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("packages.html"), "html", null, true);
        echo "\">View Packages</a>
            </div>
        </div>
    </section>
    <!-- ***** Cars Ends ***** -->

    <section class=\"section section-bg\" id=\"schedule\" style=\"background-image: url(";
        // line 185
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("asset/images/about-fullscreen-1-1920x700.jpg"), "html", null, true);
        echo ")\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-lg-6 offset-lg-3\">
                    <div class=\"section-heading dark-bg\">
                        <h2>Read <em>About Us</em></h2>
                        <img src=\"assets/images/line-dec.png\" alt=\"\">
                        <p>Nunc urna sem, laoreet ut metus id, aliquet consequat magna. Sed viverra ipsum dolor, ultricies fermentum massa consequat eu.</p>
                    </div>
                </div>
            </div>
            <div class=\"row\">
                <div class=\"col-lg-12\">
                    <div class=\"cta-content text-center\">
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Labore deleniti voluptas enim! Provident consectetur id earum ducimus facilis, aspernatur hic, alias, harum rerum velit voluptas, voluptate enim! Eos, sunt, quidem.</p>

                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Iusto nulla quo cum officia laboriosam. Amet tempore, aliquid quia eius commodi, doloremque omnis delectus laudantium dolor reiciendis non nulla! Doloremque maxime quo eum in culpa mollitia similique eius doloribus voluptatem facilis! Voluptatibus, eligendi, illum. Distinctio, non!</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ***** Blog Start ***** -->
    <section class=\"section\" id=\"our-classes\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-lg-6 offset-lg-3\">
                    <div class=\"section-heading\">
                        <h2>Read our <em>Blog</em></h2>
                        <img src=\"";
        // line 215
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("asset/images/line-dec.png"), "html", null, true);
        echo "\" alt=\"\">
                        <p>Nunc urna sem, laoreet ut metus id, aliquet consequat magna. Sed viverra ipsum dolor, ultricies fermentum massa consequat eu.</p>
                    </div>
                </div>
            </div>
            <div class=\"row\" id=\"tabs\">
              <div class=\"col-lg-4\">
                <ul>
                  <li><a href='#tabs-1'>Lorem ipsum dolor sit amet, consectetur adipisicing.</a></li>
                  <li><a href='#tabs-2'>Aspernatur excepturi magni, placeat rerum nobis magnam libero! Soluta.</a></li>
                  <li><a href='#tabs-3'>Sunt hic recusandae vitae explicabo quidem laudantium corrupti non adipisci nihil.</a></li>
                  <div class=\"main-rounded-button\"><a href=\"";
        // line 226
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("blog.html"), "html", null, true);
        echo "\">Read More</a></div>
                </ul>
              </div>
              <div class=\"col-lg-8\">
                <section class='tabs-content'>
                  <article id='tabs-1'>
                    <img src=\"";
        // line 232
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("asset/images/blog-image-1-940x460.jpg"), "html", null, true);
        echo "\" alt=\"\">
                    <h4>Lorem ipsum dolor sit amet, consectetur adipisicing.</h4>

                    <p><i class=\"fa fa-user\"></i> John Doe &nbsp;|&nbsp; <i class=\"fa fa-calendar\"></i> 27.07.2020 10:10 &nbsp;|&nbsp; <i class=\"fa fa-comments\"></i>  15 comments</p>

                    <p>Phasellus convallis mauris sed elementum vulputate. Donec posuere leo sed dui eleifend hendrerit. Sed suscipit suscipit erat, sed vehicula ligula. Aliquam ut sem fermentum sem tincidunt lacinia gravida aliquam nunc. Morbi quis erat imperdiet, molestie nunc ut, accumsan diam.</p>
                    <div class=\"main-button\">
                        <a href=\"";
        // line 239
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("blog-details.html"), "html", null, true);
        echo "\">Continue Reading</a>
                    </div>
                  </article>
                  <article id='tabs-2'>
                    <img src=\"";
        // line 243
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("asset/images/blog-image-2-940x460.jpg"), "html", null, true);
        echo "\" alt=\"\">
                    <h4>Aspernatur excepturi magni, placeat rerum nobis magnam libero! Soluta.</h4>
                    <p><i class=\"fa fa-user\"></i> John Doe &nbsp;|&nbsp; <i class=\"fa fa-calendar\"></i> 27.07.2020 10:10 &nbsp;|&nbsp; <i class=\"fa fa-comments\"></i>  15 comments</p>
                    <p>Integer dapibus, est vel dapibus mattis, sem mauris luctus leo, ac pulvinar quam tortor a velit. Praesent ultrices erat ante, in ultricies augue ultricies faucibus. Nam tellus nibh, ullamcorper at mattis non, rhoncus sed massa. Cras quis pulvinar eros. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.</p>
                    <div class=\"main-button\">
                        <a href=\"";
        // line 248
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("blog-details.html"), "html", null, true);
        echo "\">Continue Reading</a>
                    </div>
                  </article>
                  <article id='tabs-3'>
                    <img src=\"";
        // line 252
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("asset/images/blog-image-3-940x460.jpg"), "html", null, true);
        echo "\" alt=\"\">
                    <h4>Sunt hic recusandae vitae explicabo quidem laudantium corrupti non adipisci nihil.</h4>
                    <p><i class=\"fa fa-user\"></i> John Doe &nbsp;|&nbsp; <i class=\"fa fa-calendar\"></i> 27.07.2020 10:10 &nbsp;|&nbsp; <i class=\"fa fa-comments\"></i>  15 comments</p>
                    <p>Fusce laoreet malesuada rhoncus. Donec ultricies diam tortor, id auctor neque posuere sit amet. Aliquam pharetra, augue vel cursus porta, nisi tortor vulputate sapien, id scelerisque felis magna id felis. Proin neque metus, pellentesque pharetra semper vel, accumsan a neque.</p>
                    <div class=\"main-button\">
                        <a href=\"";
        // line 257
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("blog-details.html"), "html", null, true);
        echo "\">Continue Reading</a>
                    </div>
                  </article>
                </section>
              </div>
            </div>
        </div>
    </section>
    <!-- ***** Blog End ***** -->

    <!-- ***** Call to Action Start ***** -->
    <section class=\"section section-bg\" id=\"call-to-action\" style=\"background-image: url(";
        // line 268
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("asset/images/banner-image-1-1920x500.jpg"), "html", null, true);
        echo ")\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-lg-10 offset-lg-1\">
                    <div class=\"cta-content\">
                        <h2>Send us a <em>message</em></h2>
                        <p>Ut consectetur, metus sit amet aliquet placerat, enim est ultricies ligula, sit amet dapibus odio augue eget libero. Morbi tempus mauris a nisi luctus imperdiet.</p>
                        <div class=\"main-button\">
                            <a href=\"";
        // line 276
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("contact.html"), "html", null, true);
        echo "\">Contact us</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ***** Call to Action End ***** -->

    <!-- ***** Testimonials Item Start ***** -->
    <section class=\"section\" id=\"features\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-lg-6 offset-lg-3\">
                    <div class=\"section-heading\">
                        <h2>Read our <em>Testimonials</em></h2>
                        <img src=\"";
        // line 292
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("asset/images/line-dec.png"), "html", null, true);
        echo "\" alt=\"waves\">
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatem incidunt alias minima tenetur nemo necessitatibus?</p>
                    </div>
                </div>









                <div class=\"col-lg-6\">
                    <ul class=\"features-items\">
                        <li class=\"feature-item\">
                            <div class=\"left-icon\">
                                <img src=\"";
        // line 309
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("asset/images/features-first-icon.png"), "html", null, true);
        echo "\" alt=\"First One\">
                            </div>
                            <div class=\"right-content\">
                                <h4>John Doe</h4>
                                <p><em>\"Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dicta numquam maxime voluptatibus, impedit sed! Necessitatibus repellendus sed deleniti id et!\"</em></p>
                            </div>
                        </li>
                        <li class=\"feature-item\">
                            <div class=\"left-icon\">
                                <img src=\"";
        // line 318
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("asset/images/features-first-icon.png"), "html", null, true);
        echo "\" alt=\"second one\">
                            </div>
                            <div class=\"right-content\">
                                <h4>John Doe</h4>
                                <p><em>\"Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dicta numquam maxime voluptatibus, impedit sed! Necessitatibus repellendus sed deleniti id et!\"</em></p>
                            </div>
                        </li>
                    </ul>
                </div>






                <div class=\"col-lg-6\">
                    <ul class=\"features-items\">
                        <li class=\"feature-item\">
                            <div class=\"left-icon\">
                                <img src=\"";
        // line 337
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("asset/images/features-first-icon.png"), "html", null, true);
        echo "\" alt=\"fourth muscle\">
                            </div>
                            <div class=\"right-content\">
                                <h4>John Doe</h4>
                                <p><em>\"Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dicta numquam maxime voluptatibus, impedit sed! Necessitatibus repellendus sed deleniti id et!\"</em></p>
                            </div>
                        </li>
                        <li class=\"feature-item\">
                            <div class=\"left-icon\">
                                <img src=\"";
        // line 346
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("asset/images/features-first-icon.png"), "html", null, true);
        echo "\" alt=\"training fifth\">
                            </div>
                            <div class=\"right-content\">
                                <h4>John Doe</h4>
                                <p><em>\"Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dicta numquam maxime voluptatibus, impedit sed! Necessitatibus repellendus sed deleniti id et!\"</em></p>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>






            <br>

            <div class=\"main-button text-center\">
                <a href=\"";
        // line 365
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("testimonials.html"), "html", null, true);
        echo "\">Read More</a>
            </div>
        </div>
    </section>
    <!-- ***** Testimonials Item End ***** -->
    
    <!-- ***** Footer Start ***** -->
    <footer>
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-lg-12\">
                    <p>
                        Copyright © 2020 Company Name
                        - Template by: <a href=\"";
        // line 378
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("https://www.phpjabbers.com/"), "html", null, true);
        echo "\">PHPJabbers.com</a>
                    </p>
                </div>
            </div>
        </div>
    </footer>

    <!-- jQuery -->
    <script src=\"";
        // line 386
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("asset/js/jquery-2.1.0.min.js"), "html", null, true);
        echo "\"></script>

    <!-- Bootstrap -->
    <script src=\"";
        // line 389
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("asset/js/popper.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 390
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("asset/js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>

    <!-- Plugins -->
    <script src=\"";
        // line 393
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("asset/js/scrollreveal.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 394
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("asset/js/waypoints.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 395
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("asset/js/jquery.counterup.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 396
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("asset/js/imgfix.min.js"), "html", null, true);
        echo "\"></script> 
    <script src=\"";
        // line 397
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("asset/js/mixitup.js"), "html", null, true);
        echo "\"></script> 
    <script src=\"";
        // line 398
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("asset/js/accordions.js"), "html", null, true);
        echo "\"></script>
    
    <!-- Global Init -->
    <script src=\"";
        // line 401
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("asset/js/custom.js"), "html", null, true);
        echo "\"></script>

  </body>
</html>";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "base-front.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  608 => 401,  602 => 398,  598 => 397,  594 => 396,  590 => 395,  586 => 394,  582 => 393,  576 => 390,  572 => 389,  566 => 386,  555 => 378,  539 => 365,  517 => 346,  505 => 337,  483 => 318,  471 => 309,  451 => 292,  432 => 276,  421 => 268,  407 => 257,  399 => 252,  392 => 248,  384 => 243,  377 => 239,  367 => 232,  358 => 226,  344 => 215,  311 => 185,  302 => 179,  269 => 148,  256 => 140,  254 => 139,  248 => 135,  246 => 134,  240 => 131,  235 => 129,  231 => 128,  226 => 126,  218 => 121,  211 => 116,  207 => 115,  192 => 103,  175 => 89,  164 => 81,  142 => 62,  137 => 60,  131 => 57,  127 => 56,  123 => 55,  115 => 50,  111 => 49,  107 => 48,  100 => 44,  70 => 17,  65 => 15,  60 => 13,  53 => 9,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html lang=\"en\">

  <head>
    <meta charset=\"utf-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\">
    <meta name=\"description\" content=\"\">
    <meta name=\"author\" content=\"\">
    <link href=\"{{asset('https://fonts.googleapis.com/css?family=Poppins:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i&display=swap')}}\" rel=\"stylesheet\">

    <title>  Services a Domicile</title>

    <link rel=\"stylesheet\" type=\"text/css\" href=\"{{asset('asset/css/bootstrap.min.css')}}\">

    <link rel=\"stylesheet\" type=\"text/css\" href=\"{{asset('asset/css/font-awesome.css')}}\">

    <link rel=\"stylesheet\" href=\"{{asset('asset/css/style.css')}}\">

    </head>
    
    <body>
    
    <!-- ***** Preloader Start ***** -->
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
                        <a href=\"{{asset('index.html')}}\" class=\"logo\">Service a <em> Domcile</em></a>
                        <!-- ***** Logo End ***** -->
                        <!-- ***** Menu Start ***** -->
                        <ul class=\"nav\">
                            <li><a href=\"{{asset('index.html')}}\" class=\"active\">Home</a></li>
                            <li><a href=\"{{asset('packages.html')}}\">Packages</a></li>
                            <li><a href=\"{{asset('blog.html')}}\">Blog</a></li>
                            <li class=\"dropdown\">
                                <a class=\"dropdown-toggle\" data-toggle=\"dropdown\" href=\"#\" role=\"button\" aria-haspopup=\"true\" aria-expanded=\"false\">About</a>
                              
                                <div class=\"dropdown-menu\">
                                    <a class=\"dropdown-item\" href=\"{{asset('about.html')}}\">About Us</a>
                                    <a class=\"dropdown-item\" href=\"{{asset('testimonials.html')}}\">Testimonials</a>
                                    <a class=\"dropdown-item\" href=\"{{asset('terms.html')}}\">Terms</a>
                                </div>
                            </li>
                            <li><a href=\"{{asset('contact.html')}}\">Contact</a></li> 

                      <li><a  href=\"{{ path('evenement_index') }}\" class=\"active\">Back End</a></li>
                        


                        </ul>        
                        <a class='menu-trigger'>
                            <span>Menu</span>
                        </a>
                        <!-- ***** Menu End ***** -->
                    </nav>
                </div>
            </div>
        </div>
    </header>
    <!-- ***** Header Area End ***** -->

    <!-- ***** Main Banner Area Start ***** -->
    <div class=\"main-banner\" id=\"top\">
        <video autoplay muted loop id=\"bg-video\">
            <source src=\"{{asset('asset/images/acceuil.mp4')}}\" type=\"video/mp4\" />
        </video>

        <div class=\"video-overlay header-text\">
            <div class=\"caption\">
                <h6>Lorem ipsum dolor sit amet</h6>
                <h2><em>House</em> Repair Services!</h2>
                <div class=\"main-button\">
                    <a href=\"{{asset('contact.html')}}\">Contact Us</a>
                </div>
            </div>
        </div>
    </div>
    <!-- ***** Main Banner Area End ***** -->

   <!-- ***** Cars Starts ***** -->
    <section class=\"section\" id=\"trainers\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-lg-6 offset-lg-3\">
                    <div class=\"section-heading\">
                        <h2>Nos <em>Evenement</em></h2>
                        <img src=\"{{asset('asset/images/line-dec.png')}}\" alt=\"\">
                        <p>Nunc urna sem, laoreet ut metus id, aliquet consequat magna. Sed viverra ipsum dolor, ultricies fermentum massa consequat eu.</p>
                    </div>
                </div>
            </div>
            
            <div class=\"row g-4\">


            


{% for e in Event %}


                <div class=\"col-lg-4\">
                    <div class=\"trainer-item\">
                        <div class=\"image-thumb\">
                            <img  src=\"{{ asset('uploads/images/' ~ e.image) }}\" alt=\"\">

                        </div>
                        <div class=\"down-content\">
                            <span>
                                <sup></sup> Nom de evenement: {{e.titre}}<sup>
                            </span>
                            <h4>Gategorie evenement: {{e.gatName}}</h4>
                            <h5>Description: {{ e.description }}</h5>
                            <p>
                                Lieux:  {{e.lieux}} &nbsp;&nbsp;&nbsp;
                            </p>   
                              <p>
                                Date Debut:  {{e.dateDebut|date('Y-m-d')
                                }} &nbsp;&nbsp;&nbsp;
                            </p>

                               <p>
                                Date Fin:  {{e.dateFin|date('Y-m-d')
                                }} &nbsp;&nbsp;&nbsp;
                            </p>
                         

                        </div>
                    </div>
                </div>         
{% endfor %}


            
      <!-- 

      affichage


      -->
     
    















            </div>

            <br>

            <div class=\"main-button text-center\">
                <a href=\"{{asset('packages.html')}}\">View Packages</a>
            </div>
        </div>
    </section>
    <!-- ***** Cars Ends ***** -->

    <section class=\"section section-bg\" id=\"schedule\" style=\"background-image: url({{asset('asset/images/about-fullscreen-1-1920x700.jpg')}})\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-lg-6 offset-lg-3\">
                    <div class=\"section-heading dark-bg\">
                        <h2>Read <em>About Us</em></h2>
                        <img src=\"assets/images/line-dec.png\" alt=\"\">
                        <p>Nunc urna sem, laoreet ut metus id, aliquet consequat magna. Sed viverra ipsum dolor, ultricies fermentum massa consequat eu.</p>
                    </div>
                </div>
            </div>
            <div class=\"row\">
                <div class=\"col-lg-12\">
                    <div class=\"cta-content text-center\">
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Labore deleniti voluptas enim! Provident consectetur id earum ducimus facilis, aspernatur hic, alias, harum rerum velit voluptas, voluptate enim! Eos, sunt, quidem.</p>

                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Iusto nulla quo cum officia laboriosam. Amet tempore, aliquid quia eius commodi, doloremque omnis delectus laudantium dolor reiciendis non nulla! Doloremque maxime quo eum in culpa mollitia similique eius doloribus voluptatem facilis! Voluptatibus, eligendi, illum. Distinctio, non!</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ***** Blog Start ***** -->
    <section class=\"section\" id=\"our-classes\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-lg-6 offset-lg-3\">
                    <div class=\"section-heading\">
                        <h2>Read our <em>Blog</em></h2>
                        <img src=\"{{asset('asset/images/line-dec.png')}}\" alt=\"\">
                        <p>Nunc urna sem, laoreet ut metus id, aliquet consequat magna. Sed viverra ipsum dolor, ultricies fermentum massa consequat eu.</p>
                    </div>
                </div>
            </div>
            <div class=\"row\" id=\"tabs\">
              <div class=\"col-lg-4\">
                <ul>
                  <li><a href='#tabs-1'>Lorem ipsum dolor sit amet, consectetur adipisicing.</a></li>
                  <li><a href='#tabs-2'>Aspernatur excepturi magni, placeat rerum nobis magnam libero! Soluta.</a></li>
                  <li><a href='#tabs-3'>Sunt hic recusandae vitae explicabo quidem laudantium corrupti non adipisci nihil.</a></li>
                  <div class=\"main-rounded-button\"><a href=\"{{asset('blog.html')}}\">Read More</a></div>
                </ul>
              </div>
              <div class=\"col-lg-8\">
                <section class='tabs-content'>
                  <article id='tabs-1'>
                    <img src=\"{{asset('asset/images/blog-image-1-940x460.jpg')}}\" alt=\"\">
                    <h4>Lorem ipsum dolor sit amet, consectetur adipisicing.</h4>

                    <p><i class=\"fa fa-user\"></i> John Doe &nbsp;|&nbsp; <i class=\"fa fa-calendar\"></i> 27.07.2020 10:10 &nbsp;|&nbsp; <i class=\"fa fa-comments\"></i>  15 comments</p>

                    <p>Phasellus convallis mauris sed elementum vulputate. Donec posuere leo sed dui eleifend hendrerit. Sed suscipit suscipit erat, sed vehicula ligula. Aliquam ut sem fermentum sem tincidunt lacinia gravida aliquam nunc. Morbi quis erat imperdiet, molestie nunc ut, accumsan diam.</p>
                    <div class=\"main-button\">
                        <a href=\"{{asset('blog-details.html')}}\">Continue Reading</a>
                    </div>
                  </article>
                  <article id='tabs-2'>
                    <img src=\"{{asset('asset/images/blog-image-2-940x460.jpg')}}\" alt=\"\">
                    <h4>Aspernatur excepturi magni, placeat rerum nobis magnam libero! Soluta.</h4>
                    <p><i class=\"fa fa-user\"></i> John Doe &nbsp;|&nbsp; <i class=\"fa fa-calendar\"></i> 27.07.2020 10:10 &nbsp;|&nbsp; <i class=\"fa fa-comments\"></i>  15 comments</p>
                    <p>Integer dapibus, est vel dapibus mattis, sem mauris luctus leo, ac pulvinar quam tortor a velit. Praesent ultrices erat ante, in ultricies augue ultricies faucibus. Nam tellus nibh, ullamcorper at mattis non, rhoncus sed massa. Cras quis pulvinar eros. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.</p>
                    <div class=\"main-button\">
                        <a href=\"{{asset('blog-details.html')}}\">Continue Reading</a>
                    </div>
                  </article>
                  <article id='tabs-3'>
                    <img src=\"{{asset('asset/images/blog-image-3-940x460.jpg')}}\" alt=\"\">
                    <h4>Sunt hic recusandae vitae explicabo quidem laudantium corrupti non adipisci nihil.</h4>
                    <p><i class=\"fa fa-user\"></i> John Doe &nbsp;|&nbsp; <i class=\"fa fa-calendar\"></i> 27.07.2020 10:10 &nbsp;|&nbsp; <i class=\"fa fa-comments\"></i>  15 comments</p>
                    <p>Fusce laoreet malesuada rhoncus. Donec ultricies diam tortor, id auctor neque posuere sit amet. Aliquam pharetra, augue vel cursus porta, nisi tortor vulputate sapien, id scelerisque felis magna id felis. Proin neque metus, pellentesque pharetra semper vel, accumsan a neque.</p>
                    <div class=\"main-button\">
                        <a href=\"{{asset('blog-details.html')}}\">Continue Reading</a>
                    </div>
                  </article>
                </section>
              </div>
            </div>
        </div>
    </section>
    <!-- ***** Blog End ***** -->

    <!-- ***** Call to Action Start ***** -->
    <section class=\"section section-bg\" id=\"call-to-action\" style=\"background-image: url({{asset('asset/images/banner-image-1-1920x500.jpg')}})\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-lg-10 offset-lg-1\">
                    <div class=\"cta-content\">
                        <h2>Send us a <em>message</em></h2>
                        <p>Ut consectetur, metus sit amet aliquet placerat, enim est ultricies ligula, sit amet dapibus odio augue eget libero. Morbi tempus mauris a nisi luctus imperdiet.</p>
                        <div class=\"main-button\">
                            <a href=\"{{asset('contact.html')}}\">Contact us</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ***** Call to Action End ***** -->

    <!-- ***** Testimonials Item Start ***** -->
    <section class=\"section\" id=\"features\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-lg-6 offset-lg-3\">
                    <div class=\"section-heading\">
                        <h2>Read our <em>Testimonials</em></h2>
                        <img src=\"{{asset('asset/images/line-dec.png')}}\" alt=\"waves\">
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatem incidunt alias minima tenetur nemo necessitatibus?</p>
                    </div>
                </div>









                <div class=\"col-lg-6\">
                    <ul class=\"features-items\">
                        <li class=\"feature-item\">
                            <div class=\"left-icon\">
                                <img src=\"{{asset('asset/images/features-first-icon.png')}}\" alt=\"First One\">
                            </div>
                            <div class=\"right-content\">
                                <h4>John Doe</h4>
                                <p><em>\"Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dicta numquam maxime voluptatibus, impedit sed! Necessitatibus repellendus sed deleniti id et!\"</em></p>
                            </div>
                        </li>
                        <li class=\"feature-item\">
                            <div class=\"left-icon\">
                                <img src=\"{{asset('asset/images/features-first-icon.png')}}\" alt=\"second one\">
                            </div>
                            <div class=\"right-content\">
                                <h4>John Doe</h4>
                                <p><em>\"Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dicta numquam maxime voluptatibus, impedit sed! Necessitatibus repellendus sed deleniti id et!\"</em></p>
                            </div>
                        </li>
                    </ul>
                </div>






                <div class=\"col-lg-6\">
                    <ul class=\"features-items\">
                        <li class=\"feature-item\">
                            <div class=\"left-icon\">
                                <img src=\"{{asset('asset/images/features-first-icon.png')}}\" alt=\"fourth muscle\">
                            </div>
                            <div class=\"right-content\">
                                <h4>John Doe</h4>
                                <p><em>\"Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dicta numquam maxime voluptatibus, impedit sed! Necessitatibus repellendus sed deleniti id et!\"</em></p>
                            </div>
                        </li>
                        <li class=\"feature-item\">
                            <div class=\"left-icon\">
                                <img src=\"{{asset('asset/images/features-first-icon.png')}}\" alt=\"training fifth\">
                            </div>
                            <div class=\"right-content\">
                                <h4>John Doe</h4>
                                <p><em>\"Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dicta numquam maxime voluptatibus, impedit sed! Necessitatibus repellendus sed deleniti id et!\"</em></p>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>






            <br>

            <div class=\"main-button text-center\">
                <a href=\"{{asset('testimonials.html')}}\">Read More</a>
            </div>
        </div>
    </section>
    <!-- ***** Testimonials Item End ***** -->
    
    <!-- ***** Footer Start ***** -->
    <footer>
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-lg-12\">
                    <p>
                        Copyright © 2020 Company Name
                        - Template by: <a href=\"{{asset('https://www.phpjabbers.com/')}}\">PHPJabbers.com</a>
                    </p>
                </div>
            </div>
        </div>
    </footer>

    <!-- jQuery -->
    <script src=\"{{asset('asset/js/jquery-2.1.0.min.js')}}\"></script>

    <!-- Bootstrap -->
    <script src=\"{{asset('asset/js/popper.js')}}\"></script>
    <script src=\"{{asset('asset/js/bootstrap.min.js')}}\"></script>

    <!-- Plugins -->
    <script src=\"{{asset('asset/js/scrollreveal.min.js')}}\"></script>
    <script src=\"{{asset('asset/js/waypoints.min.js')}}\"></script>
    <script src=\"{{asset('asset/js/jquery.counterup.min.js')}}\"></script>
    <script src=\"{{asset('asset/js/imgfix.min.js')}}\"></script> 
    <script src=\"{{asset('asset/js/mixitup.js')}}\"></script> 
    <script src=\"{{asset('asset/js/accordions.js')}}\"></script>
    
    <!-- Global Init -->
    <script src=\"{{asset('asset/js/custom.js')}}\"></script>

  </body>
</html>", "base-front.html.twig", "C:\\Users\\Dell\\Desktop\\Mohamed\\PIDEV\\templates\\base-front.html.twig");
    }
}
