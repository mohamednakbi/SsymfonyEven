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

/* evenement/showmap.html.twig */
class __TwigTemplate_0b9e017121091cbb92a96200340f65cf extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "evenement/showmap.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "evenement/showmap.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html lang=\"en\">

<head>
  <meta charset=\"utf-8\">
  <meta content=\"width=device-width, initial-scale=1.0\" name=\"viewport\">

  <title>Dashboard - NiceAdmin Bootstrap Template</title>
  <meta content=\"\" name=\"description\">
  <meta content=\"\" name=\"keywords\">

  <!-- Favicons -->
  <link href=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("backend/assets/img/favicon.png"), "html", null, true);
        echo "\" rel=\"icon\">
  <link href=\"assets/img/apple-touch-icon.png\" rel=\"apple-touch-icon\">

  <!-- Google Fonts -->
  <link href=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("https://fonts.gstatic.com"), "html", null, true);
        echo "\" rel=\"preconnect\">
  <link href=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"), "html", null, true);
        echo "\" rel=\"stylesheet\">

  <!-- Vendor CSS Files -->
  <link href=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("backend/assets/vendor/bootstrap/css/bootstrap.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
  <link href=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("backend/assets/vendor/bootstrap-icons/bootstrap-icons.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
  <link href=\"";
        // line 23
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("backend/assets/vendor/boxicons/css/boxicons.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
  <link href=\"";
        // line 24
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("backend/assets/vendor/quill/quill.snow.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
  <link href=\"";
        // line 25
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("backend/assets/vendor/quill/quill.bubble.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
  <link href=\"";
        // line 26
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("backend/assets/vendor/remixicon/remixicon.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
  <link href=\"";
        // line 27
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("backend/assets/vendor/simple-datatables/style.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">

  <!-- Template Main CSS File -->
  <link href=\"";
        // line 30
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("backend/assets/css/style.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">


</head>

<body>

  <!-- ======= Header ======= -->
  <header id=\"header\" class=\"header fixed-top d-flex align-items-center\">

    <div class=\"d-flex align-items-center justify-content-between\">
      <a href=\"";
        // line 41
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("backend/index.html"), "html", null, true);
        echo "\" class=\"logo d-flex align-items-center\">
        <img src=\"";
        // line 42
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("backend/assets/img/logo.png"), "html", null, true);
        echo "\" alt=\"\">
        <span class=\"d-none d-lg-block\">NiceAdmin</span>
      </a>
      <i class=\"bi bi-list toggle-sidebar-btn\"></i>
    </div><!-- End Logo -->

    <div class=\"search-bar\">
      <form class=\"search-form d-flex align-items-center\" method=\"POST\" action=\"#\">
        <input type=\"text\" name=\"query\" placeholder=\"Search\" title=\"Enter search keyword\">
        <button type=\"submit\" title=\"Search\"><i class=\"bi bi-search\"></i></button>
      </form>
    </div><!-- End Search Bar -->

    <nav class=\"header-nav ms-auto\">
      <ul class=\"d-flex align-items-center\">

        <li class=\"nav-item d-block d-lg-none\">
          <a class=\"nav-link nav-icon search-bar-toggle \" href=\"#\">
            <i class=\"bi bi-search\"></i>
          </a>
        </li><!-- End Search Icon-->

        <li class=\"nav-item dropdown\">

          <a class=\"nav-link nav-icon\" href=\"#\" data-bs-toggle=\"dropdown\">
            <i class=\"bi bi-bell\"></i>
            <span class=\"badge bg-primary badge-number\">4</span>
          </a><!-- End Notification Icon -->

          <ul class=\"dropdown-menu dropdown-menu-end dropdown-menu-arrow notifications\">
            <li class=\"dropdown-header\">
              You have 4 new notifications
              <a href=\"#\"><span class=\"badge rounded-pill bg-primary p-2 ms-2\">View all</span></a>
            </li>
            <li>
              <hr class=\"dropdown-divider\">
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
              <hr class=\"dropdown-divider\">
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
              <hr class=\"dropdown-divider\">
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
              <hr class=\"dropdown-divider\">
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
              <hr class=\"dropdown-divider\">
            </li>
            <li class=\"dropdown-footer\">
              <a href=\"#\">Show all notifications</a>
            </li>

          </ul><!-- End Notification Dropdown Items -->

        </li><!-- End Notification Nav -->

        <li class=\"nav-item dropdown\">

          <a class=\"nav-link nav-icon\" href=\"#\" data-bs-toggle=\"dropdown\">
            <i class=\"bi bi-chat-left-text\"></i>
            <span class=\"badge bg-success badge-number\">3</span>
          </a><!-- End Messages Icon -->

          <ul class=\"dropdown-menu dropdown-menu-end dropdown-menu-arrow messages\">
            <li class=\"dropdown-header\">
              You have 3 new messages
              <a href=\"#\"><span class=\"badge rounded-pill bg-primary p-2 ms-2\">View all</span></a>
            </li>
            <li>
              <hr class=\"dropdown-divider\">
            </li>

            <li class=\"message-item\">
              <a href=\"#\">
                <img src=\"";
        // line 157
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("backend/assets/img/messages-1.jpg"), "html", null, true);
        echo "\" alt=\"\" class=\"rounded-circle\">
                <div>
                  <h4>Maria Hudson</h4>
                  <p>Velit asperiores et ducimus soluta repudiandae labore officia est ut...</p>
                  <p>4 hrs. ago</p>
                </div>
              </a>
            </li>
            <li>
              <hr class=\"dropdown-divider\">
            </li>

            <li class=\"message-item\">
              <a href=\"#\">
                <img src=\"";
        // line 171
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("backend/assets/img/messages-2.jpg"), "html", null, true);
        echo "\" alt=\"\" class=\"rounded-circle\">
                <div>
                  <h4>Anna Nelson</h4>
                  <p>Velit asperiores et ducimus soluta repudiandae labore officia est ut...</p>
                  <p>6 hrs. ago</p>
                </div>
              </a>
            </li>
            <li>
              <hr class=\"dropdown-divider\">
            </li>

            <li class=\"message-item\">
              <a href=\"#\">
                <img src=\"";
        // line 185
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("backend/assets/img/messages-3.jpg"), "html", null, true);
        echo "\" alt=\"\" class=\"rounded-circle\">
                <div>
                  <h4>David Muldon</h4>
                  <p>Velit asperiores et ducimus soluta repudiandae labore officia est ut...</p>
                  <p>8 hrs. ago</p>
                </div>
              </a>
            </li>
            <li>
              <hr class=\"dropdown-divider\">
            </li>

            <li class=\"dropdown-footer\">
              <a href=\"#\">Show all messages</a>
            </li>

          </ul><!-- End Messages Dropdown Items -->

        </li><!-- End Messages Nav -->

        <li class=\"nav-item dropdown pe-3\">

          <a class=\"nav-link nav-profile d-flex align-items-center pe-0\" href=\"#\" data-bs-toggle=\"dropdown\">
            <img src=\"";
        // line 208
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("backend/assets/img/profile-img.jpg"), "html", null, true);
        echo "\" alt=\"Profile\" class=\"rounded-circle\">
            <span class=\"d-none d-md-block dropdown-toggle ps-2\">K. Anderson</span>
          </a><!-- End Profile Iamge Icon -->

          <ul class=\"dropdown-menu dropdown-menu-end dropdown-menu-arrow profile\">
            <li class=\"dropdown-header\">
              <h6>Kevin Anderson</h6>
              <span>Web Designer</span>
            </li>
            <li>
              <hr class=\"dropdown-divider\">
            </li>

            <li>
              <a class=\"dropdown-item d-flex align-items-center\" href=\"users-profile.html\">
                <i class=\"bi bi-person\"></i>
                <span>My Profile</span>
              </a>
            </li>
            <li>
              <hr class=\"dropdown-divider\">
            </li>

            <li>
              <a class=\"dropdown-item d-flex align-items-center\" href=\"users-profile.html\">
                <i class=\"bi bi-gear\"></i>
                <span>Account Settings</span>
              </a>
            </li>
            <li>
              <hr class=\"dropdown-divider\">
            </li>

            <li>
              <a class=\"dropdown-item d-flex align-items-center\" href=\"pages-faq.html\">
                <i class=\"bi bi-question-circle\"></i>
                <span>Need Help?</span>
              </a>
            </li>
            <li>
              <hr class=\"dropdown-divider\">
            </li>

            <li>
              <a class=\"dropdown-item d-flex align-items-center\" href=\"#\">
                <i class=\"bi bi-box-arrow-right\"></i>
                <span>Sign Out</span>
              </a>
            </li>

          </ul><!-- End Profile Dropdown Items -->
        </li><!-- End Profile Nav -->

      </ul>
    </nav><!-- End Icons Navigation -->

  </header><!-- End Header -->

  <!-- ======= Sidebar ======= -->
  <aside id=\"sidebar\" class=\"sidebar\">

    <ul class=\"sidebar-nav\" id=\"sidebar-nav\">

      <li class=\"nav-item\">
        <a class=\"nav-link \" href=\"";
        // line 272
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("evenement_index");
        echo "\">
          <i class=\"bi bi-grid\"></i>
          <span>Evenement</span>
        </a>
      </li><!-- End Dashboard Nav -->





       <li class=\"nav-item\">
        <a class=\"nav-link \" href=\"";
        // line 283
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("gategorie_evenement_index");
        echo "\">
          <i class=\"bi bi-grid\"></i>
          <span>Gategorie Evenement</span>
        </a>
      </li><!-- End Dashboard Nav -->



     

  <li class=\"nav-item\">
        <a class=\"nav-link \" href=\"";
        // line 294
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("templatefront");
        echo "\">
          <i class=\"bi bi-grid\"></i>
          <span>Front</span>
        </a>
      </li><!-- End Dashboard Nav -->
      

     



      

    </ul>

  </aside><!-- End Sidebar-->

  <main id=\"main\" class=\"main\">

    <div class=\"pagetitle\">
      <h1>Dashboard</h1>
      <nav>
        <ol class=\"breadcrumb\">
          <li class=\"breadcrumb-item\"><a href=\"";
        // line 317
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("backend/index.html"), "html", null, true);
        echo "\">Home</a></li>
          <li class=\"breadcrumb-item active\">Dashboard</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->












            <div class=\"tg-player-description tg-haslayout\">
                <div class=\"tg-description\">
                    <div class=\"earth3dmap-com\"><iframe id=\"iframemap\" src=\"https://maps.google.com/maps?q=";
        // line 336
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["evenement"]) || array_key_exists("evenement", $context) ? $context["evenement"] : (function () { throw new RuntimeError('Variable "evenement" does not exist.', 336, $this->source); })()), "lieux", [], "any", false, false, false, 336), "html", null, true);
        echo "&amp;ie=UTF8&amp;iwloc=&amp;output=embed\" width=\"100%\" height=\"500\" frameborder=\"0\" scrolling=\"no\"></iframe><div style=\"color: #333; font-size: 14px; font-family: Arial, Helvetica, sans-serif; text-align: right; padding: 10px;\"> <a style=\"color: #333; text-decoration: underline; font-size: 14px; font-family: Arial, Helvetica, sans-serif; text-align: right;\" href=\"http://earth3dmap.com/?from=embed\" target=\"_blank\" ></a></div>
                    </div>

</div>
</div>
</div>




























































<br><br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>

  <!-- ======= Footer ======= -->
  <footer id=\"footer\" class=\"footer\">
    <div class=\"copyright\">
      &copy; Copyright <strong><span>NiceAdmin</span></strong>. All Rights Reserved
    </div>
    <div class=\"credits\">
      <!-- All the links in the footer should remain intact. -->
      <!-- You can delete the links only if you purchased the pro version. -->
      <!-- Licensing information: https://bootstrapmade.com/license/ -->
      <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/nice-admin-bootstrap-admin-html-template/ -->
      Designed by <a href=\"https://bootstrapmade.com/\">BootstrapMade</a>
    </div>
  </footer><!-- End Footer -->

  <a href=\"#\" class=\"back-to-top d-flex align-items-center justify-content-center\"><i class=\"bi bi-arrow-up-short\"></i></a>

  <!-- Vendor JS Files -->
  <script src=\"";
        // line 429
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("backend/assets/vendor/apexcharts/apexcharts.min.js"), "html", null, true);
        echo "\"></script>
  <script src=\"";
        // line 430
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("backend/assets/vendor/bootstrap/js/bootstrap.bundle.min.js"), "html", null, true);
        echo "\"></script>
  <script src=\"";
        // line 431
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("backend/assets/vendor/chart.js/chart.min.js"), "html", null, true);
        echo "\"></script>
  <script src=\"";
        // line 432
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("backend/assets/vendor/echarts/echarts.min.js"), "html", null, true);
        echo "\"></script>
  <script src=\"";
        // line 433
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("backend/assets/vendor/quill/quill.min.js"), "html", null, true);
        echo "\"></script>
  <script src=\"";
        // line 434
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("backend/assets/vendor/simple-datatables/simple-datatables.js"), "html", null, true);
        echo "\"></script>
  <script src=\"";
        // line 435
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("backend/assets/vendor/tinymce/tinymce.min.js"), "html", null, true);
        echo "\"></script>
  <script src=\"";
        // line 436
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("backend/assets/vendor/php-email-form/validate.js"), "html", null, true);
        echo "\"></script>

  <!-- Template Main JS File -->
  <script src=\"";
        // line 439
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("backend/assets/js/main.js"), "html", null, true);
        echo "\"></script>


      <script src=\"//code.jquery.com/jquery.js\"></script>
    <!-- Load Flashy default JavaScript -->
    <script src=\"";
        // line 444
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("bundles/mercuryseriesflashy/js/flashy.js"), "html", null, true);
        echo "\"></script>
    <!-- Include Flashy default partial -->


</body>

</html>";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "evenement/showmap.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  581 => 444,  573 => 439,  567 => 436,  563 => 435,  559 => 434,  555 => 433,  551 => 432,  547 => 431,  543 => 430,  539 => 429,  443 => 336,  421 => 317,  395 => 294,  381 => 283,  367 => 272,  300 => 208,  274 => 185,  257 => 171,  240 => 157,  122 => 42,  118 => 41,  104 => 30,  98 => 27,  94 => 26,  90 => 25,  86 => 24,  82 => 23,  78 => 22,  74 => 21,  68 => 18,  64 => 17,  57 => 13,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html lang=\"en\">

<head>
  <meta charset=\"utf-8\">
  <meta content=\"width=device-width, initial-scale=1.0\" name=\"viewport\">

  <title>Dashboard - NiceAdmin Bootstrap Template</title>
  <meta content=\"\" name=\"description\">
  <meta content=\"\" name=\"keywords\">

  <!-- Favicons -->
  <link href=\"{{asset('backend/assets/img/favicon.png')}}\" rel=\"icon\">
  <link href=\"assets/img/apple-touch-icon.png\" rel=\"apple-touch-icon\">

  <!-- Google Fonts -->
  <link href=\"{{asset('https://fonts.gstatic.com')}}\" rel=\"preconnect\">
  <link href=\"{{asset('https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i')}}\" rel=\"stylesheet\">

  <!-- Vendor CSS Files -->
  <link href=\"{{asset('backend/assets/vendor/bootstrap/css/bootstrap.min.css')}}\" rel=\"stylesheet\">
  <link href=\"{{asset('backend/assets/vendor/bootstrap-icons/bootstrap-icons.css')}}\" rel=\"stylesheet\">
  <link href=\"{{asset('backend/assets/vendor/boxicons/css/boxicons.min.css')}}\" rel=\"stylesheet\">
  <link href=\"{{asset('backend/assets/vendor/quill/quill.snow.css')}}\" rel=\"stylesheet\">
  <link href=\"{{asset('backend/assets/vendor/quill/quill.bubble.css')}}\" rel=\"stylesheet\">
  <link href=\"{{asset('backend/assets/vendor/remixicon/remixicon.css')}}\" rel=\"stylesheet\">
  <link href=\"{{asset('backend/assets/vendor/simple-datatables/style.css')}}\" rel=\"stylesheet\">

  <!-- Template Main CSS File -->
  <link href=\"{{asset('backend/assets/css/style.css')}}\" rel=\"stylesheet\">


</head>

<body>

  <!-- ======= Header ======= -->
  <header id=\"header\" class=\"header fixed-top d-flex align-items-center\">

    <div class=\"d-flex align-items-center justify-content-between\">
      <a href=\"{{asset('backend/index.html')}}\" class=\"logo d-flex align-items-center\">
        <img src=\"{{asset('backend/assets/img/logo.png')}}\" alt=\"\">
        <span class=\"d-none d-lg-block\">NiceAdmin</span>
      </a>
      <i class=\"bi bi-list toggle-sidebar-btn\"></i>
    </div><!-- End Logo -->

    <div class=\"search-bar\">
      <form class=\"search-form d-flex align-items-center\" method=\"POST\" action=\"#\">
        <input type=\"text\" name=\"query\" placeholder=\"Search\" title=\"Enter search keyword\">
        <button type=\"submit\" title=\"Search\"><i class=\"bi bi-search\"></i></button>
      </form>
    </div><!-- End Search Bar -->

    <nav class=\"header-nav ms-auto\">
      <ul class=\"d-flex align-items-center\">

        <li class=\"nav-item d-block d-lg-none\">
          <a class=\"nav-link nav-icon search-bar-toggle \" href=\"#\">
            <i class=\"bi bi-search\"></i>
          </a>
        </li><!-- End Search Icon-->

        <li class=\"nav-item dropdown\">

          <a class=\"nav-link nav-icon\" href=\"#\" data-bs-toggle=\"dropdown\">
            <i class=\"bi bi-bell\"></i>
            <span class=\"badge bg-primary badge-number\">4</span>
          </a><!-- End Notification Icon -->

          <ul class=\"dropdown-menu dropdown-menu-end dropdown-menu-arrow notifications\">
            <li class=\"dropdown-header\">
              You have 4 new notifications
              <a href=\"#\"><span class=\"badge rounded-pill bg-primary p-2 ms-2\">View all</span></a>
            </li>
            <li>
              <hr class=\"dropdown-divider\">
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
              <hr class=\"dropdown-divider\">
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
              <hr class=\"dropdown-divider\">
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
              <hr class=\"dropdown-divider\">
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
              <hr class=\"dropdown-divider\">
            </li>
            <li class=\"dropdown-footer\">
              <a href=\"#\">Show all notifications</a>
            </li>

          </ul><!-- End Notification Dropdown Items -->

        </li><!-- End Notification Nav -->

        <li class=\"nav-item dropdown\">

          <a class=\"nav-link nav-icon\" href=\"#\" data-bs-toggle=\"dropdown\">
            <i class=\"bi bi-chat-left-text\"></i>
            <span class=\"badge bg-success badge-number\">3</span>
          </a><!-- End Messages Icon -->

          <ul class=\"dropdown-menu dropdown-menu-end dropdown-menu-arrow messages\">
            <li class=\"dropdown-header\">
              You have 3 new messages
              <a href=\"#\"><span class=\"badge rounded-pill bg-primary p-2 ms-2\">View all</span></a>
            </li>
            <li>
              <hr class=\"dropdown-divider\">
            </li>

            <li class=\"message-item\">
              <a href=\"#\">
                <img src=\"{{asset('backend/assets/img/messages-1.jpg')}}\" alt=\"\" class=\"rounded-circle\">
                <div>
                  <h4>Maria Hudson</h4>
                  <p>Velit asperiores et ducimus soluta repudiandae labore officia est ut...</p>
                  <p>4 hrs. ago</p>
                </div>
              </a>
            </li>
            <li>
              <hr class=\"dropdown-divider\">
            </li>

            <li class=\"message-item\">
              <a href=\"#\">
                <img src=\"{{asset('backend/assets/img/messages-2.jpg')}}\" alt=\"\" class=\"rounded-circle\">
                <div>
                  <h4>Anna Nelson</h4>
                  <p>Velit asperiores et ducimus soluta repudiandae labore officia est ut...</p>
                  <p>6 hrs. ago</p>
                </div>
              </a>
            </li>
            <li>
              <hr class=\"dropdown-divider\">
            </li>

            <li class=\"message-item\">
              <a href=\"#\">
                <img src=\"{{asset('backend/assets/img/messages-3.jpg')}}\" alt=\"\" class=\"rounded-circle\">
                <div>
                  <h4>David Muldon</h4>
                  <p>Velit asperiores et ducimus soluta repudiandae labore officia est ut...</p>
                  <p>8 hrs. ago</p>
                </div>
              </a>
            </li>
            <li>
              <hr class=\"dropdown-divider\">
            </li>

            <li class=\"dropdown-footer\">
              <a href=\"#\">Show all messages</a>
            </li>

          </ul><!-- End Messages Dropdown Items -->

        </li><!-- End Messages Nav -->

        <li class=\"nav-item dropdown pe-3\">

          <a class=\"nav-link nav-profile d-flex align-items-center pe-0\" href=\"#\" data-bs-toggle=\"dropdown\">
            <img src=\"{{asset('backend/assets/img/profile-img.jpg')}}\" alt=\"Profile\" class=\"rounded-circle\">
            <span class=\"d-none d-md-block dropdown-toggle ps-2\">K. Anderson</span>
          </a><!-- End Profile Iamge Icon -->

          <ul class=\"dropdown-menu dropdown-menu-end dropdown-menu-arrow profile\">
            <li class=\"dropdown-header\">
              <h6>Kevin Anderson</h6>
              <span>Web Designer</span>
            </li>
            <li>
              <hr class=\"dropdown-divider\">
            </li>

            <li>
              <a class=\"dropdown-item d-flex align-items-center\" href=\"users-profile.html\">
                <i class=\"bi bi-person\"></i>
                <span>My Profile</span>
              </a>
            </li>
            <li>
              <hr class=\"dropdown-divider\">
            </li>

            <li>
              <a class=\"dropdown-item d-flex align-items-center\" href=\"users-profile.html\">
                <i class=\"bi bi-gear\"></i>
                <span>Account Settings</span>
              </a>
            </li>
            <li>
              <hr class=\"dropdown-divider\">
            </li>

            <li>
              <a class=\"dropdown-item d-flex align-items-center\" href=\"pages-faq.html\">
                <i class=\"bi bi-question-circle\"></i>
                <span>Need Help?</span>
              </a>
            </li>
            <li>
              <hr class=\"dropdown-divider\">
            </li>

            <li>
              <a class=\"dropdown-item d-flex align-items-center\" href=\"#\">
                <i class=\"bi bi-box-arrow-right\"></i>
                <span>Sign Out</span>
              </a>
            </li>

          </ul><!-- End Profile Dropdown Items -->
        </li><!-- End Profile Nav -->

      </ul>
    </nav><!-- End Icons Navigation -->

  </header><!-- End Header -->

  <!-- ======= Sidebar ======= -->
  <aside id=\"sidebar\" class=\"sidebar\">

    <ul class=\"sidebar-nav\" id=\"sidebar-nav\">

      <li class=\"nav-item\">
        <a class=\"nav-link \" href=\"{{ path('evenement_index') }}\">
          <i class=\"bi bi-grid\"></i>
          <span>Evenement</span>
        </a>
      </li><!-- End Dashboard Nav -->





       <li class=\"nav-item\">
        <a class=\"nav-link \" href=\"{{ path('gategorie_evenement_index') }}\">
          <i class=\"bi bi-grid\"></i>
          <span>Gategorie Evenement</span>
        </a>
      </li><!-- End Dashboard Nav -->



     

  <li class=\"nav-item\">
        <a class=\"nav-link \" href=\"{{ path('templatefront') }}\">
          <i class=\"bi bi-grid\"></i>
          <span>Front</span>
        </a>
      </li><!-- End Dashboard Nav -->
      

     



      

    </ul>

  </aside><!-- End Sidebar-->

  <main id=\"main\" class=\"main\">

    <div class=\"pagetitle\">
      <h1>Dashboard</h1>
      <nav>
        <ol class=\"breadcrumb\">
          <li class=\"breadcrumb-item\"><a href=\"{{asset('backend/index.html')}}\">Home</a></li>
          <li class=\"breadcrumb-item active\">Dashboard</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->












            <div class=\"tg-player-description tg-haslayout\">
                <div class=\"tg-description\">
                    <div class=\"earth3dmap-com\"><iframe id=\"iframemap\" src=\"https://maps.google.com/maps?q={{ evenement.lieux }}&amp;ie=UTF8&amp;iwloc=&amp;output=embed\" width=\"100%\" height=\"500\" frameborder=\"0\" scrolling=\"no\"></iframe><div style=\"color: #333; font-size: 14px; font-family: Arial, Helvetica, sans-serif; text-align: right; padding: 10px;\"> <a style=\"color: #333; text-decoration: underline; font-size: 14px; font-family: Arial, Helvetica, sans-serif; text-align: right;\" href=\"http://earth3dmap.com/?from=embed\" target=\"_blank\" ></a></div>
                    </div>

</div>
</div>
</div>




























































<br><br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>

  <!-- ======= Footer ======= -->
  <footer id=\"footer\" class=\"footer\">
    <div class=\"copyright\">
      &copy; Copyright <strong><span>NiceAdmin</span></strong>. All Rights Reserved
    </div>
    <div class=\"credits\">
      <!-- All the links in the footer should remain intact. -->
      <!-- You can delete the links only if you purchased the pro version. -->
      <!-- Licensing information: https://bootstrapmade.com/license/ -->
      <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/nice-admin-bootstrap-admin-html-template/ -->
      Designed by <a href=\"https://bootstrapmade.com/\">BootstrapMade</a>
    </div>
  </footer><!-- End Footer -->

  <a href=\"#\" class=\"back-to-top d-flex align-items-center justify-content-center\"><i class=\"bi bi-arrow-up-short\"></i></a>

  <!-- Vendor JS Files -->
  <script src=\"{{asset('backend/assets/vendor/apexcharts/apexcharts.min.js')}}\"></script>
  <script src=\"{{asset('backend/assets/vendor/bootstrap/js/bootstrap.bundle.min.js')}}\"></script>
  <script src=\"{{asset('backend/assets/vendor/chart.js/chart.min.js')}}\"></script>
  <script src=\"{{asset('backend/assets/vendor/echarts/echarts.min.js')}}\"></script>
  <script src=\"{{asset('backend/assets/vendor/quill/quill.min.js')}}\"></script>
  <script src=\"{{asset('backend/assets/vendor/simple-datatables/simple-datatables.js')}}\"></script>
  <script src=\"{{asset('backend/assets/vendor/tinymce/tinymce.min.js')}}\"></script>
  <script src=\"{{asset('backend/assets/vendor/php-email-form/validate.js')}}\"></script>

  <!-- Template Main JS File -->
  <script src=\"{{asset('backend/assets/js/main.js')}}\"></script>


      <script src=\"//code.jquery.com/jquery.js\"></script>
    <!-- Load Flashy default JavaScript -->
    <script src=\"{{ asset('bundles/mercuryseriesflashy/js/flashy.js') }}\"></script>
    <!-- Include Flashy default partial -->


</body>

</html>", "evenement/showmap.html.twig", "C:\\Users\\Asus\\Desktop\\eya-lakhdher-master\\templates\\evenement\\showmap.html.twig");
    }
}
