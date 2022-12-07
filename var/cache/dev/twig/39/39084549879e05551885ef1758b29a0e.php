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

/* base/base_admin.html.twig */
class __TwigTemplate_7f30b609c5f8f4452b388b8383fad7e8 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'stylesheets' => [$this, 'block_stylesheets'],
            'body' => [$this, 'block_body'],
            'javascripts' => [$this, 'block_javascripts'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base/base_admin.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base/base_admin.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html lang=\"en\">
  <head>
    <meta charset=\"UTF-8\" />
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\" />
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\" />
    <title>Document</title>
    ";
        // line 8
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 44
        echo "  </head>
  <body>
    <header id=\"header\" class=\"header fixed-top d-flex align-items-center\">
      <div class=\"d-flex align-items-center justify-content-between\">
        <a href=\"index.html\" class=\"logo d-flex align-items-center\">
          <img src=\"assets/img/logo.png\" alt=\"\" />
          <span class=\"d-none d-lg-block\">NiceAdmin</span>
        </a>
        <i class=\"bi bi-list toggle-sidebar-btn\"></i>
      </div>
      <!-- End Logo -->

      <div class=\"search-bar\">
        <form
          class=\"search-form d-flex align-items-center\"
          method=\"POST\"
          action=\"#\"
        >
          <input
            type=\"text\"
            name=\"query\"
            placeholder=\"Search\"
            title=\"Enter search keyword\"
          />
          <button type=\"submit\" title=\"Search\">
            <i class=\"bi bi-search\"></i>
          </button>
        </form>
      </div>
      <!-- End Search Bar -->

      <nav class=\"header-nav ms-auto\">
        <ul class=\"d-flex align-items-center\">
          <li class=\"nav-item d-block d-lg-none\">
            <a class=\"nav-link nav-icon search-bar-toggle\" href=\"#\">
              <i class=\"bi bi-search\"></i>
            </a>
          </li>
          <!-- End Search Icon-->

          <li class=\"nav-item dropdown\">
            <a class=\"nav-link nav-icon\" href=\"#\" data-bs-toggle=\"dropdown\">
              <i class=\"bi bi-bell\"></i>
              <span class=\"badge bg-primary badge-number\">4</span> </a
            ><!-- End Notification Icon -->

            <ul
              class=\"dropdown-menu dropdown-menu-end dropdown-menu-arrow notifications\"
            >
              <li class=\"dropdown-header\">
                You have 4 new notifications
                <a href=\"#\"
                  ><span class=\"badge rounded-pill bg-primary p-2 ms-2\"
                    >View all</span
                  ></a
                >
              </li>
              <li>
                <hr class=\"dropdown-divider\" />
              </li>

              <li class=\"notification-item\">
                <i class=\"bi bi-exclamation-circle text-warning\"></i>
                <div>
                  <h4>Lorem Ipsum</h4>
                  <p>Quae dolorem earum veritatis oditseno</p>
                  <p>30 min. ago</p>
                </div>
              </li>

              <li>
                <hr class=\"dropdown-divider\" />
              </li>

              <li class=\"notification-item\">
                <i class=\"bi bi-x-circle text-danger\"></i>
                <div>
                  <h4>Atque rerum nesciunt</h4>
                  <p>Quae dolorem earum veritatis oditseno</p>
                  <p>1 hr. ago</p>
                </div>
              </li>

              <li>
                <hr class=\"dropdown-divider\" />
              </li>

              <li class=\"notification-item\">
                <i class=\"bi bi-check-circle text-success\"></i>
                <div>
                  <h4>Sit rerum fuga</h4>
                  <p>Quae dolorem earum veritatis oditseno</p>
                  <p>2 hrs. ago</p>
                </div>
              </li>

              <li>
                <hr class=\"dropdown-divider\" />
              </li>

              <li class=\"notification-item\">
                <i class=\"bi bi-info-circle text-primary\"></i>
                <div>
                  <h4>Dicta reprehenderit</h4>
                  <p>Quae dolorem earum veritatis oditseno</p>
                  <p>4 hrs. ago</p>
                </div>
              </li>

              <li>
                <hr class=\"dropdown-divider\" />
              </li>
              <li class=\"dropdown-footer\">
                <a href=\"#\">Show all notifications</a>
              </li>
            </ul>
            <!-- End Notification Dropdown Items -->
          </li>
          <!-- End Notification Nav -->

          <li class=\"nav-item dropdown\">
            <a class=\"nav-link nav-icon\" href=\"#\" data-bs-toggle=\"dropdown\">
              <i class=\"bi bi-chat-left-text\"></i>
              <span class=\"badge bg-success badge-number\">3</span> </a
            ><!-- End Messages Icon -->

            <ul
              class=\"dropdown-menu dropdown-menu-end dropdown-menu-arrow messages\"
            >
              <li class=\"dropdown-header\">
                You have 3 new messages
                <a href=\"#\"
                  ><span class=\"badge rounded-pill bg-primary p-2 ms-2\"
                    >View all</span
                  ></a
                >
              </li>
              <li>
                <hr class=\"dropdown-divider\" />
              </li>

              <li class=\"message-item\">
                <a href=\"#\">
                  <img
                    src=\"assets/img/messages-1.jpg\"
                    alt=\"\"
                    class=\"rounded-circle\"
                  />
                  <div>
                    <h4>Maria Hudson</h4>
                    <p>
                      Velit asperiores et ducimus soluta repudiandae labore
                      officia est ut...
                    </p>
                    <p>4 hrs. ago</p>
                  </div>
                </a>
              </li>
              <li>
                <hr class=\"dropdown-divider\" />
              </li>

              <li class=\"message-item\">
                <a href=\"#\">
                  <img
                    src=\"assets/img/messages-2.jpg\"
                    alt=\"\"
                    class=\"rounded-circle\"
                  />
                  <div>
                    <h4>Anna Nelson</h4>
                    <p>
                      Velit asperiores et ducimus soluta repudiandae labore
                      officia est ut...
                    </p>
                    <p>6 hrs. ago</p>
                  </div>
                </a>
              </li>
              <li>
                <hr class=\"dropdown-divider\" />
              </li>

              <li class=\"message-item\">
                <a href=\"#\">
                  <img
                    src=\"assets/img/messages-3.jpg\"
                    alt=\"\"
                    class=\"rounded-circle\"
                  />
                  <div>
                    <h4>David Muldon</h4>
                    <p>
                      Velit asperiores et ducimus soluta repudiandae labore
                      officia est ut...
                    </p>
                    <p>8 hrs. ago</p>
                  </div>
                </a>
              </li>
              <li>
                <hr class=\"dropdown-divider\" />
              </li>

              <li class=\"dropdown-footer\">
                <a href=\"#\">Show all messages</a>
              </li>
            </ul>
            <!-- End Messages Dropdown Items -->
          </li>
          <!-- End Messages Nav -->

          <li class=\"nav-item dropdown pe-3\">
            <a
              class=\"nav-link nav-profile d-flex align-items-center pe-0\"
              href=\"#\"
              data-bs-toggle=\"dropdown\"
            >
              <img
                src=\"assets/img/profile-img.jpg\"
                alt=\"Profile\"
                class=\"rounded-circle\"
              />
              <span class=\"d-none d-md-block dropdown-toggle ps-2\"
                >K. Anderson</span
              > </a
            ><!-- End Profile Iamge Icon -->

            <ul
              class=\"dropdown-menu dropdown-menu-end dropdown-menu-arrow profile\"
            >
              <li class=\"dropdown-header\">
                <h6>Kevin Anderson</h6>
                <span>Web Designer</span>
              </li>
              <li>
                <hr class=\"dropdown-divider\" />
              </li>

              <li>
                <a
                  class=\"dropdown-item d-flex align-items-center\"
                  href=\"users-profile.html\"
                >
                  <i class=\"bi bi-person\"></i>
                  <span>My Profile</span>
                </a>
              </li>
              <li>
                <hr class=\"dropdown-divider\" />
              </li>

              <li>
                <a
                  class=\"dropdown-item d-flex align-items-center\"
                  href=\"users-profile.html\"
                >
                  <i class=\"bi bi-gear\"></i>
                  <span>Account Settings</span>
                </a>
              </li>
              <li>
                <hr class=\"dropdown-divider\" />
              </li>

              <li>
                <a
                  class=\"dropdown-item d-flex align-items-center\"
                  href=\"pages-faq.html\"
                >
                  <i class=\"bi bi-question-circle\"></i>
                  <span>Need Help?</span>
                </a>
              </li>
              <li>
                <hr class=\"dropdown-divider\" />
              </li>

              <li>
                <a class=\"dropdown-item d-flex align-items-center\" href=\"#\">
                  <i class=\"bi bi-box-arrow-right\"></i>
                  <span>Sign Out</span>
                </a>
              </li>
            </ul>
            <!-- End Profile Dropdown Items -->
          </li>
          <!-- End Profile Nav -->
        </ul>
      </nav>
      <!-- End Icons Navigation -->
    </header>
    <!-- End Header -->

    <!-- ======= Sidebar ======= -->
    <aside id=\"sidebar\" class=\"sidebar\">
      <ul class=\"sidebar-nav\" id=\"sidebar-nav\">
        <li class=\"nav-item\">
          <a class=\"nav-link\" href=\"";
        // line 342
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin");
        echo "\">
            <i class=\"bi bi-grid\"></i>
            <span>Dashboard</span>
          </a>
        </li>

        <li class=\"nav-item\">
            <a class=\"nav-link\" href=\"";
        // line 349
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_index");
        echo "\">
              <i class=\"bi bi-grid\"></i>
              <span>Revenir au site</span>
            </a>
          </li>

          <li class=\"nav-item\">
            <a class=\"nav-link\" href=\"";
        // line 356
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_reservation_index");
        echo "\">
              <i class=\"bi bi-grid\"></i>
              <span>Gestion reservation</span>
            </a>
          </li>
          <li class=\"nav-item\">
            <a class=\"nav-link\" href=\"";
        // line 362
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_reclamation_index");
        echo "\">
              <i class=\"bi bi-grid\"></i>
              <span>Gestion réclamation</span>
            </a>
          </li>


<li class=\"nav-item\">
            <a class=\"nav-link\" href=\"";
        // line 370
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("evenement_index");
        echo "\">
              <i class=\"bi bi-grid\"></i>
              <span>Gestion Evenenement</span>
            </a>
          </li>



          <li class=\"nav-item\">
            <a class=\"nav-link\" href=\"";
        // line 379
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("gategorie_evenement_index");
        echo "\">
              <i class=\"bi bi-grid\"></i>
              <span>Gestion Gategorie Evenement</span>
            </a>
          </li>

      </ul>
    </aside>

    <main id=\"main\" class=\"main\">
      <div class=\"pagetitle\">
        <h1>Dashboard</h1>
        <nav>
          <ol class=\"breadcrumb\">
            <li class=\"breadcrumb-item\"><a href=\"index.html\">Home</a></li>
            <li class=\"breadcrumb-item active\">Dashboard</li>
          </ol>
        </nav>
      </div>
      <!-- End Page Title -->

      <section class=\"section dashboard\">
        <div class=\"row\">";
        // line 401
        $this->displayBlock('body', $context, $blocks);
        echo "</div>
      </section>
    </main>

    <footer id=\"footer\" class=\"footer\">
      <div class=\"copyright\">
        &copy; Copyright <strong><span>NiceAdmin</span></strong
        >. All Rights Reserved
      </div>
      <div class=\"credits\">
        <!-- All the links in the footer should remain intact. -->
        <!-- You can delete the links only if you purchased the pro version. -->
        <!-- Licensing information: https://bootstrapmade.com/license/ -->
        <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/nice-admin-bootstrap-admin-html-template/ -->
        Designed by <a href=\"https://bootstrapmade.com/\">BootstrapMade</a>
      </div>
    </footer>
    <!-- End Footer -->

    ";
        // line 420
        $this->displayBlock('javascripts', $context, $blocks);
        // line 433
        echo "  </body>
</html>
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 8
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 9
        echo "    <!-- Favicons -->
    <link href=\"/assetsBack/img/favicon.png\" rel=\"icon\" />
    <link href=\"/assetsBack/img/apple-touch-icon.png\" rel=\"apple-touch-icon\" />

    <!-- Google Fonts -->
    <link href=\"https://fonts.gstatic.com\" rel=\"preconnect\" />
    <link
      href=\"https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i\"
      rel=\"stylesheet\"
    />

    <!-- Vendor CSS Files -->
    <link
      href=\"/assetsBack/vendor/bootstrap/css/bootstrap.min.css\"
      rel=\"stylesheet\"
    />
    <link
      href=\"/assetsBack/vendor/bootstrap-icons/bootstrap-icons.css\"
      rel=\"stylesheet\"
    />
    <link
      href=\"/assetsBack/vendor/boxicons/css/boxicons.min.css\"
      rel=\"stylesheet\"
    />
    <link href=\"/assetsBack/vendor/quill/quill.snow.css\" rel=\"stylesheet\" />
    <link href=\"/assetsBack/vendor/quill/quill.bubble.css\" rel=\"stylesheet\" />
    <link href=\"/assetsBack/vendor/remixicon/remixicon.css\" rel=\"stylesheet\" />
    <link
      href=\"/assetsBack/vendor/simple-datatables/style.css\"
      rel=\"stylesheet\"
    />

    <!-- Template Main CSS File -->
    <link href=\"/assetsBack/css/style.css\" rel=\"stylesheet\" />
    ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 401
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        echo " ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 420
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 421
        echo "    <script src=\"assets/vendor/apexcharts/apexcharts.min.js\"></script>
    <script src=\"assets/vendor/bootstrap/js/bootstrap.bundle.min.js\"></script>
    <script src=\"assets/vendor/chart.js/chart.min.js\"></script>
    <script src=\"assets/vendor/echarts/echarts.min.js\"></script>
    <script src=\"assets/vendor/quill/quill.min.js\"></script>
    <script src=\"assets/vendor/simple-datatables/simple-datatables.js\"></script>
    <script src=\"assets/vendor/tinymce/tinymce.min.js\"></script>
    <script src=\"assets/vendor/php-email-form/validate.js\"></script>

    <!-- Template Main JS File -->
    <script src=\"assets/js/main.js\"></script>
    ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "base/base_admin.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  553 => 421,  543 => 420,  524 => 401,  480 => 9,  470 => 8,  458 => 433,  456 => 420,  434 => 401,  409 => 379,  397 => 370,  386 => 362,  377 => 356,  367 => 349,  357 => 342,  57 => 44,  55 => 8,  46 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html lang=\"en\">
  <head>
    <meta charset=\"UTF-8\" />
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\" />
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\" />
    <title>Document</title>
    {% block stylesheets %}
    <!-- Favicons -->
    <link href=\"/assetsBack/img/favicon.png\" rel=\"icon\" />
    <link href=\"/assetsBack/img/apple-touch-icon.png\" rel=\"apple-touch-icon\" />

    <!-- Google Fonts -->
    <link href=\"https://fonts.gstatic.com\" rel=\"preconnect\" />
    <link
      href=\"https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i\"
      rel=\"stylesheet\"
    />

    <!-- Vendor CSS Files -->
    <link
      href=\"/assetsBack/vendor/bootstrap/css/bootstrap.min.css\"
      rel=\"stylesheet\"
    />
    <link
      href=\"/assetsBack/vendor/bootstrap-icons/bootstrap-icons.css\"
      rel=\"stylesheet\"
    />
    <link
      href=\"/assetsBack/vendor/boxicons/css/boxicons.min.css\"
      rel=\"stylesheet\"
    />
    <link href=\"/assetsBack/vendor/quill/quill.snow.css\" rel=\"stylesheet\" />
    <link href=\"/assetsBack/vendor/quill/quill.bubble.css\" rel=\"stylesheet\" />
    <link href=\"/assetsBack/vendor/remixicon/remixicon.css\" rel=\"stylesheet\" />
    <link
      href=\"/assetsBack/vendor/simple-datatables/style.css\"
      rel=\"stylesheet\"
    />

    <!-- Template Main CSS File -->
    <link href=\"/assetsBack/css/style.css\" rel=\"stylesheet\" />
    {% endblock stylesheets %}
  </head>
  <body>
    <header id=\"header\" class=\"header fixed-top d-flex align-items-center\">
      <div class=\"d-flex align-items-center justify-content-between\">
        <a href=\"index.html\" class=\"logo d-flex align-items-center\">
          <img src=\"assets/img/logo.png\" alt=\"\" />
          <span class=\"d-none d-lg-block\">NiceAdmin</span>
        </a>
        <i class=\"bi bi-list toggle-sidebar-btn\"></i>
      </div>
      <!-- End Logo -->

      <div class=\"search-bar\">
        <form
          class=\"search-form d-flex align-items-center\"
          method=\"POST\"
          action=\"#\"
        >
          <input
            type=\"text\"
            name=\"query\"
            placeholder=\"Search\"
            title=\"Enter search keyword\"
          />
          <button type=\"submit\" title=\"Search\">
            <i class=\"bi bi-search\"></i>
          </button>
        </form>
      </div>
      <!-- End Search Bar -->

      <nav class=\"header-nav ms-auto\">
        <ul class=\"d-flex align-items-center\">
          <li class=\"nav-item d-block d-lg-none\">
            <a class=\"nav-link nav-icon search-bar-toggle\" href=\"#\">
              <i class=\"bi bi-search\"></i>
            </a>
          </li>
          <!-- End Search Icon-->

          <li class=\"nav-item dropdown\">
            <a class=\"nav-link nav-icon\" href=\"#\" data-bs-toggle=\"dropdown\">
              <i class=\"bi bi-bell\"></i>
              <span class=\"badge bg-primary badge-number\">4</span> </a
            ><!-- End Notification Icon -->

            <ul
              class=\"dropdown-menu dropdown-menu-end dropdown-menu-arrow notifications\"
            >
              <li class=\"dropdown-header\">
                You have 4 new notifications
                <a href=\"#\"
                  ><span class=\"badge rounded-pill bg-primary p-2 ms-2\"
                    >View all</span
                  ></a
                >
              </li>
              <li>
                <hr class=\"dropdown-divider\" />
              </li>

              <li class=\"notification-item\">
                <i class=\"bi bi-exclamation-circle text-warning\"></i>
                <div>
                  <h4>Lorem Ipsum</h4>
                  <p>Quae dolorem earum veritatis oditseno</p>
                  <p>30 min. ago</p>
                </div>
              </li>

              <li>
                <hr class=\"dropdown-divider\" />
              </li>

              <li class=\"notification-item\">
                <i class=\"bi bi-x-circle text-danger\"></i>
                <div>
                  <h4>Atque rerum nesciunt</h4>
                  <p>Quae dolorem earum veritatis oditseno</p>
                  <p>1 hr. ago</p>
                </div>
              </li>

              <li>
                <hr class=\"dropdown-divider\" />
              </li>

              <li class=\"notification-item\">
                <i class=\"bi bi-check-circle text-success\"></i>
                <div>
                  <h4>Sit rerum fuga</h4>
                  <p>Quae dolorem earum veritatis oditseno</p>
                  <p>2 hrs. ago</p>
                </div>
              </li>

              <li>
                <hr class=\"dropdown-divider\" />
              </li>

              <li class=\"notification-item\">
                <i class=\"bi bi-info-circle text-primary\"></i>
                <div>
                  <h4>Dicta reprehenderit</h4>
                  <p>Quae dolorem earum veritatis oditseno</p>
                  <p>4 hrs. ago</p>
                </div>
              </li>

              <li>
                <hr class=\"dropdown-divider\" />
              </li>
              <li class=\"dropdown-footer\">
                <a href=\"#\">Show all notifications</a>
              </li>
            </ul>
            <!-- End Notification Dropdown Items -->
          </li>
          <!-- End Notification Nav -->

          <li class=\"nav-item dropdown\">
            <a class=\"nav-link nav-icon\" href=\"#\" data-bs-toggle=\"dropdown\">
              <i class=\"bi bi-chat-left-text\"></i>
              <span class=\"badge bg-success badge-number\">3</span> </a
            ><!-- End Messages Icon -->

            <ul
              class=\"dropdown-menu dropdown-menu-end dropdown-menu-arrow messages\"
            >
              <li class=\"dropdown-header\">
                You have 3 new messages
                <a href=\"#\"
                  ><span class=\"badge rounded-pill bg-primary p-2 ms-2\"
                    >View all</span
                  ></a
                >
              </li>
              <li>
                <hr class=\"dropdown-divider\" />
              </li>

              <li class=\"message-item\">
                <a href=\"#\">
                  <img
                    src=\"assets/img/messages-1.jpg\"
                    alt=\"\"
                    class=\"rounded-circle\"
                  />
                  <div>
                    <h4>Maria Hudson</h4>
                    <p>
                      Velit asperiores et ducimus soluta repudiandae labore
                      officia est ut...
                    </p>
                    <p>4 hrs. ago</p>
                  </div>
                </a>
              </li>
              <li>
                <hr class=\"dropdown-divider\" />
              </li>

              <li class=\"message-item\">
                <a href=\"#\">
                  <img
                    src=\"assets/img/messages-2.jpg\"
                    alt=\"\"
                    class=\"rounded-circle\"
                  />
                  <div>
                    <h4>Anna Nelson</h4>
                    <p>
                      Velit asperiores et ducimus soluta repudiandae labore
                      officia est ut...
                    </p>
                    <p>6 hrs. ago</p>
                  </div>
                </a>
              </li>
              <li>
                <hr class=\"dropdown-divider\" />
              </li>

              <li class=\"message-item\">
                <a href=\"#\">
                  <img
                    src=\"assets/img/messages-3.jpg\"
                    alt=\"\"
                    class=\"rounded-circle\"
                  />
                  <div>
                    <h4>David Muldon</h4>
                    <p>
                      Velit asperiores et ducimus soluta repudiandae labore
                      officia est ut...
                    </p>
                    <p>8 hrs. ago</p>
                  </div>
                </a>
              </li>
              <li>
                <hr class=\"dropdown-divider\" />
              </li>

              <li class=\"dropdown-footer\">
                <a href=\"#\">Show all messages</a>
              </li>
            </ul>
            <!-- End Messages Dropdown Items -->
          </li>
          <!-- End Messages Nav -->

          <li class=\"nav-item dropdown pe-3\">
            <a
              class=\"nav-link nav-profile d-flex align-items-center pe-0\"
              href=\"#\"
              data-bs-toggle=\"dropdown\"
            >
              <img
                src=\"assets/img/profile-img.jpg\"
                alt=\"Profile\"
                class=\"rounded-circle\"
              />
              <span class=\"d-none d-md-block dropdown-toggle ps-2\"
                >K. Anderson</span
              > </a
            ><!-- End Profile Iamge Icon -->

            <ul
              class=\"dropdown-menu dropdown-menu-end dropdown-menu-arrow profile\"
            >
              <li class=\"dropdown-header\">
                <h6>Kevin Anderson</h6>
                <span>Web Designer</span>
              </li>
              <li>
                <hr class=\"dropdown-divider\" />
              </li>

              <li>
                <a
                  class=\"dropdown-item d-flex align-items-center\"
                  href=\"users-profile.html\"
                >
                  <i class=\"bi bi-person\"></i>
                  <span>My Profile</span>
                </a>
              </li>
              <li>
                <hr class=\"dropdown-divider\" />
              </li>

              <li>
                <a
                  class=\"dropdown-item d-flex align-items-center\"
                  href=\"users-profile.html\"
                >
                  <i class=\"bi bi-gear\"></i>
                  <span>Account Settings</span>
                </a>
              </li>
              <li>
                <hr class=\"dropdown-divider\" />
              </li>

              <li>
                <a
                  class=\"dropdown-item d-flex align-items-center\"
                  href=\"pages-faq.html\"
                >
                  <i class=\"bi bi-question-circle\"></i>
                  <span>Need Help?</span>
                </a>
              </li>
              <li>
                <hr class=\"dropdown-divider\" />
              </li>

              <li>
                <a class=\"dropdown-item d-flex align-items-center\" href=\"#\">
                  <i class=\"bi bi-box-arrow-right\"></i>
                  <span>Sign Out</span>
                </a>
              </li>
            </ul>
            <!-- End Profile Dropdown Items -->
          </li>
          <!-- End Profile Nav -->
        </ul>
      </nav>
      <!-- End Icons Navigation -->
    </header>
    <!-- End Header -->

    <!-- ======= Sidebar ======= -->
    <aside id=\"sidebar\" class=\"sidebar\">
      <ul class=\"sidebar-nav\" id=\"sidebar-nav\">
        <li class=\"nav-item\">
          <a class=\"nav-link\" href=\"{{ path('app_admin') }}\">
            <i class=\"bi bi-grid\"></i>
            <span>Dashboard</span>
          </a>
        </li>

        <li class=\"nav-item\">
            <a class=\"nav-link\" href=\"{{ path('app_index') }}\">
              <i class=\"bi bi-grid\"></i>
              <span>Revenir au site</span>
            </a>
          </li>

          <li class=\"nav-item\">
            <a class=\"nav-link\" href=\"{{ path('app_reservation_index') }}\">
              <i class=\"bi bi-grid\"></i>
              <span>Gestion reservation</span>
            </a>
          </li>
          <li class=\"nav-item\">
            <a class=\"nav-link\" href=\"{{ path('app_reclamation_index') }}\">
              <i class=\"bi bi-grid\"></i>
              <span>Gestion réclamation</span>
            </a>
          </li>


<li class=\"nav-item\">
            <a class=\"nav-link\" href=\"{{ path('evenement_index') }}\">
              <i class=\"bi bi-grid\"></i>
              <span>Gestion Evenenement</span>
            </a>
          </li>



          <li class=\"nav-item\">
            <a class=\"nav-link\" href=\"{{ path('gategorie_evenement_index') }}\">
              <i class=\"bi bi-grid\"></i>
              <span>Gestion Gategorie Evenement</span>
            </a>
          </li>

      </ul>
    </aside>

    <main id=\"main\" class=\"main\">
      <div class=\"pagetitle\">
        <h1>Dashboard</h1>
        <nav>
          <ol class=\"breadcrumb\">
            <li class=\"breadcrumb-item\"><a href=\"index.html\">Home</a></li>
            <li class=\"breadcrumb-item active\">Dashboard</li>
          </ol>
        </nav>
      </div>
      <!-- End Page Title -->

      <section class=\"section dashboard\">
        <div class=\"row\">{% block body %} {% endblock body %}</div>
      </section>
    </main>

    <footer id=\"footer\" class=\"footer\">
      <div class=\"copyright\">
        &copy; Copyright <strong><span>NiceAdmin</span></strong
        >. All Rights Reserved
      </div>
      <div class=\"credits\">
        <!-- All the links in the footer should remain intact. -->
        <!-- You can delete the links only if you purchased the pro version. -->
        <!-- Licensing information: https://bootstrapmade.com/license/ -->
        <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/nice-admin-bootstrap-admin-html-template/ -->
        Designed by <a href=\"https://bootstrapmade.com/\">BootstrapMade</a>
      </div>
    </footer>
    <!-- End Footer -->

    {% block javascripts %}
    <script src=\"assets/vendor/apexcharts/apexcharts.min.js\"></script>
    <script src=\"assets/vendor/bootstrap/js/bootstrap.bundle.min.js\"></script>
    <script src=\"assets/vendor/chart.js/chart.min.js\"></script>
    <script src=\"assets/vendor/echarts/echarts.min.js\"></script>
    <script src=\"assets/vendor/quill/quill.min.js\"></script>
    <script src=\"assets/vendor/simple-datatables/simple-datatables.js\"></script>
    <script src=\"assets/vendor/tinymce/tinymce.min.js\"></script>
    <script src=\"assets/vendor/php-email-form/validate.js\"></script>

    <!-- Template Main JS File -->
    <script src=\"assets/js/main.js\"></script>
    {% endblock javascripts %}
  </body>
</html>
", "base/base_admin.html.twig", "C:\\Users\\Asus\\Desktop\\eya-lakhdher-master\\templates\\base\\base_admin.html.twig");
    }
}