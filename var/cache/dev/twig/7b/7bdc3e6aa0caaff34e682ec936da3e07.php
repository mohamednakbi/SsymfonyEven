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

/* base-back.html.twig */
class __TwigTemplate_7cc846c87766c677f160a84242e8abfa extends Template
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
            'css' => [$this, 'block_css'],
            'body' => [$this, 'block_body'],
            'footer' => [$this, 'block_footer'],
            'js' => [$this, 'block_js'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base-back.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base-back.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html lang=\"en\">

<head>
    <meta charset=\"utf-8\">
    <meta content=\"width=device-width, initial-scale=1.0\" name=\"viewport\">

    <title>";
        // line 8
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
    <meta content=\"\" name=\"description\">
    <meta content=\"\" name=\"keywords\">

    <!-- Favicons -->
    <link href=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("back/assets/img/favicon.png"), "html", null, true);
        echo "\" rel=\"icon\">
    <link href=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("back/assets/img/apple-touch-icon.png"), "html", null, true);
        echo "\" rel=\"apple-touch-icon\">

    <!-- Google Fonts -->
    <link href=\"https://fonts.gstatic.com\" rel=\"preconnect\">
    <link href=\"https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i\" rel=\"stylesheet\">

    ";
        // line 20
        $this->displayBlock('css', $context, $blocks);
        // line 34
        echo "
</head>

<body>

<!-- ======= Header ======= -->
<header id=\"header\" class=\"header fixed-top d-flex align-items-center\">

    <div class=\"d-flex align-items-center justify-content-between\">
        <a href=\"index.html\" class=\"logo d-flex align-items-center\">
            <img src=\" ";
        // line 44
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("back/assets/img/logo.png"), "html", null, true);
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
        // line 160
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("back/assets/img/messages-1.jpg"), "html", null, true);
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
        // line 174
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("back/assets/img/messages-2.jpg"), "html", null, true);
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
        // line 189
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("back/assets/img/messages-3.jpg"), "html", null, true);
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
                    <img src=\"  ";
        // line 212
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("back/assets/img/profile-img.jpg"), "html", null, true);
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
            <a class=\"nav-link collapsed\" href=\"index.html\">
                <i class=\"bi bi-grid\"></i>
                <span>Dashboard</span>
            </a>
        </li><!-- End Dashboard Nav -->

        <li class=\"nav-item\">
            <a class=\"nav-link \" data-bs-target=\"#components-nav\" data-bs-toggle=\"collapse\" href=\"#\">
                <i class=\"bi bi-menu-button-wide\"></i><span>Components</span><i class=\"bi bi-chevron-down ms-auto\"></i>
            </a>
            <ul id=\"components-nav\" class=\"nav-content collapse show\" data-bs-parent=\"#sidebar-nav\">
                <li>
                    <a href=\"components-alerts.html\">
                        <i class=\"bi bi-circle\"></i><span>Alerts</span>
                    </a>
                </li>
                <li>
                    <a href=\"components-accordion.html\">
                        <i class=\"bi bi-circle\"></i><span>Accordion</span>
                    </a>
                </li>
                <li>
                    <a href=\"components-badges.html\">
                        <i class=\"bi bi-circle\"></i><span>Badges</span>
                    </a>
                </li>
                <li>
                    <a href=\"components-breadcrumbs.html\">
                        <i class=\"bi bi-circle\"></i><span>Breadcrumbs</span>
                    </a>
                </li>
                <li>
                    <a href=\"components-buttons.html\">
                        <i class=\"bi bi-circle\"></i><span>Buttons</span>
                    </a>
                </li>
                <li>
                    <a href=\"components-cards.html\">
                        <i class=\"bi bi-circle\"></i><span>Cards</span>
                    </a>
                </li>
                <li>
                    <a href=\"components-carousel.html\" class=\"active\">
                        <i class=\"bi bi-circle\"></i><span>Carousel</span>
                    </a>
                </li>
                <li>
                    <a href=\"components-list-group.html\">
                        <i class=\"bi bi-circle\"></i><span>List group</span>
                    </a>
                </li>
                <li>
                    <a href=\"components-modal.html\">
                        <i class=\"bi bi-circle\"></i><span>Modal</span>
                    </a>
                </li>
                <li>
                    <a href=\"components-tabs.html\">
                        <i class=\"bi bi-circle\"></i><span>Tabs</span>
                    </a>
                </li>
                <li>
                    <a href=\"components-pagination.html\">
                        <i class=\"bi bi-circle\"></i><span>Pagination</span>
                    </a>
                </li>
                <li>
                    <a href=\"components-progress.html\">
                        <i class=\"bi bi-circle\"></i><span>Progress</span>
                    </a>
                </li>
                <li>
                    <a href=\"components-spinners.html\">
                        <i class=\"bi bi-circle\"></i><span>Spinners</span>
                    </a>
                </li>
                <li>
                    <a href=\"components-tooltips.html\">
                        <i class=\"bi bi-circle\"></i><span>Tooltips</span>
                    </a>
                </li>
            </ul>
        </li><!-- End Components Nav -->

        <li class=\"nav-item\">
            <a class=\"nav-link collapsed\" data-bs-target=\"#forms-nav\" data-bs-toggle=\"collapse\" href=\"#\">
                <i class=\"bi bi-journal-text\"></i><span>Forms</span><i class=\"bi bi-chevron-down ms-auto\"></i>
            </a>
            <ul id=\"forms-nav\" class=\"nav-content collapse \" data-bs-parent=\"#sidebar-nav\">
                <li>
                    <a href=\"forms-elements.html\">
                        <i class=\"bi bi-circle\"></i><span>Form Elements</span>
                    </a>
                </li>
                <li>
                    <a href=\"forms-layouts.html\">
                        <i class=\"bi bi-circle\"></i><span>Form Layouts</span>
                    </a>
                </li>
                <li>
                    <a href=\"forms-editors.html\">
                        <i class=\"bi bi-circle\"></i><span>Form Editors</span>
                    </a>
                </li>
                <li>
                    <a href=\"forms-validation.html\">
                        <i class=\"bi bi-circle\"></i><span>Form Validation</span>
                    </a>
                </li>
            </ul>
        </li><!-- End Forms Nav -->

        <li class=\"nav-item\">
            <a class=\"nav-link collapsed\" data-bs-target=\"#tables-nav\" data-bs-toggle=\"collapse\" href=\"#\">
                <i class=\"bi bi-layout-text-window-reverse\"></i><span>Tables</span><i class=\"bi bi-chevron-down ms-auto\"></i>
            </a>
            <ul id=\"tables-nav\" class=\"nav-content collapse \" data-bs-parent=\"#sidebar-nav\">
                <li>
                    <a href=\"tables-general.html\">
                        <i class=\"bi bi-circle\"></i><span>General Tables</span>
                    </a>
                </li>
                <li>
                    <a href=\"tables-data.html\">
                        <i class=\"bi bi-circle\"></i><span>Data Tables</span>
                    </a>
                </li>
            </ul>
        </li><!-- End Tables Nav -->

        <li class=\"nav-item\">
            <a class=\"nav-link collapsed\" data-bs-target=\"#charts-nav\" data-bs-toggle=\"collapse\" href=\"#\">
                <i class=\"bi bi-bar-chart\"></i><span>Charts</span><i class=\"bi bi-chevron-down ms-auto\"></i>
            </a>
            <ul id=\"charts-nav\" class=\"nav-content collapse \" data-bs-parent=\"#sidebar-nav\">
                <li>
                    <a href=\"charts-chartjs.html\">
                        <i class=\"bi bi-circle\"></i><span>Chart.js</span>
                    </a>
                </li>
                <li>
                    <a href=\"charts-apexcharts.html\">
                        <i class=\"bi bi-circle\"></i><span>ApexCharts</span>
                    </a>
                </li>
                <li>
                    <a href=\"charts-echarts.html\">
                        <i class=\"bi bi-circle\"></i><span>ECharts</span>
                    </a>
                </li>
            </ul>
        </li><!-- End Charts Nav -->

        <li class=\"nav-item\">
            <a class=\"nav-link collapsed\" data-bs-target=\"#icons-nav\" data-bs-toggle=\"collapse\" href=\"#\">
                <i class=\"bi bi-gem\"></i><span>Icons</span><i class=\"bi bi-chevron-down ms-auto\"></i>
            </a>
            <ul id=\"icons-nav\" class=\"nav-content collapse \" data-bs-parent=\"#sidebar-nav\">
                <li>
                    <a href=\"icons-bootstrap.html\">
                        <i class=\"bi bi-circle\"></i><span>Bootstrap Icons</span>
                    </a>
                </li>
                <li>
                    <a href=\"icons-remix.html\">
                        <i class=\"bi bi-circle\"></i><span>Remix Icons</span>
                    </a>
                </li>
                <li>
                    <a href=\"icons-boxicons.html\">
                        <i class=\"bi bi-circle\"></i><span>Boxicons</span>
                    </a>
                </li>
            </ul>
        </li><!-- End Icons Nav -->

        <li class=\"nav-heading\">Pages</li>

        <li class=\"nav-item\">
            <a class=\"nav-link collapsed\" href=\"users-profile.html\">
                <i class=\"bi bi-person\"></i>
                <span>Profile</span>
            </a>
        </li><!-- End Profile Page Nav -->

        <li class=\"nav-item\">
            <a class=\"nav-link collapsed\" href=\"pages-faq.html\">
                <i class=\"bi bi-question-circle\"></i>
                <span>F.A.Q</span>
            </a>
        </li><!-- End F.A.Q Page Nav -->

        <li class=\"nav-item\">
            <a class=\"nav-link collapsed\" href=\"pages-contact.html\">
                <i class=\"bi bi-envelope\"></i>
                <span>Contact</span>
            </a>
        </li><!-- End Contact Page Nav -->

        <li class=\"nav-item\">
            <a class=\"nav-link collapsed\" href=\"pages-register.html\">
                <i class=\"bi bi-card-list\"></i>
                <span>Register</span>
            </a>
        </li><!-- End Register Page Nav -->

        <li class=\"nav-item\">
            <a class=\"nav-link collapsed\" href=\"pages-login.html\">
                <i class=\"bi bi-box-arrow-in-right\"></i>
                <span>Login</span>
            </a>
        </li><!-- End Login Page Nav -->

        <li class=\"nav-item\">
            <a class=\"nav-link collapsed\" href=\"pages-error-404.html\">
                <i class=\"bi bi-dash-circle\"></i>
                <span>Error 404</span>
            </a>
        </li><!-- End Error 404 Page Nav -->

        <li class=\"nav-item\">
            <a class=\"nav-link collapsed\" href=\"pages-blank.html\">
                <i class=\"bi bi-file-earmark\"></i>
                <span>Blank</span>
            </a>
        </li><!-- End Blank Page Nav -->

    </ul>

</aside><!-- End Sidebar-->

<main id=\"main\" class=\"main\">

    ";
        // line 509
        $this->displayBlock('body', $context, $blocks);
        // line 711
        echo "</main><!-- End #main -->

";
        // line 713
        $this->displayBlock('footer', $context, $blocks);
        // line 727
        echo "
<a href=\"#\" class=\"back-to-top d-flex align-items-center justify-content-center\"><i class=\"bi bi-arrow-up-short\"></i></a>

";
        // line 730
        $this->displayBlock('js', $context, $blocks);
        // line 745
        echo "
</body>

</html>";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 8
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Edu School - Education Category  ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 20
    public function block_css($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "css"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "css"));

        // line 21
        echo "        <link href=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("back/assets/vendor/bootstrap/css/bootstrap.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
        <link href=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("back/assets/vendor/bootstrap-icons/bootstrap-icons.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
        <link href=\"";
        // line 23
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("back/assets/vendor/boxicons/css/boxicons.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
        <link href=\"";
        // line 24
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("back/assets/vendor/quill/quill.snow.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
        <link href=\"";
        // line 25
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("back/assets/vendor/quill/quill.bubble.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
        <link href=\"";
        // line 26
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("back/assets/vendor/remixicon/remixicon.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
        <link href=\"";
        // line 27
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("back/assets/vendor/simple-datatables/style.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">

        <!-- Template Main CSS File -->
        <link href=\"";
        // line 30
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("back/assets/css/style.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">


    ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 509
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 510
        echo "        <div class=\"pagetitle\">
            <h1>Carousel</h1>
            <nav>
                <ol class=\"breadcrumb\">
                    <li class=\"breadcrumb-item\"><a href=\"index.html\">Home</a></li>
                    <li class=\"breadcrumb-item\">Components</li>
                    <li class=\"breadcrumb-item active\">Carousel</li>
                </ol>
            </nav>
        </div><!-- End Page Title -->

        <section class=\"section\">
            <div class=\"row\">
                <div class=\"col-lg-6\">

                    <div class=\"card\">
                        <div class=\"card-body\">
                            <h5 class=\"card-title\">Slides only</h5>

                            <!-- Slides only carousel -->
                            <div id=\"carouselExampleSlidesOnly\" class=\"carousel slide\" data-bs-ride=\"carousel\">
                                <div class=\"carousel-inner\">
                                    <div class=\"carousel-item active\">

                                        <img src=\"";
        // line 534
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/slides-1.jpg"), "html", null, true);
        echo "\" class=\"d-block w-100\" alt=\"...\">
                                    </div>
                                    <div class=\"carousel-item\">
                                        <img src=\"";
        // line 537
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/slides-2.jpg"), "html", null, true);
        echo "\" class=\"d-block w-100\" alt=\"...\">
                                    </div>
                                    <div class=\"carousel-item\">
                                        <img src=\"";
        // line 540
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/slides-3.jpg"), "html", null, true);
        echo "\" class=\"d-block w-100\" alt=\"...\">
                                    </div>
                                </div>
                            </div><!-- End Slides only carousel-->

                        </div>
                    </div>

                    <div class=\"card\">
                        <div class=\"card-body\">
                            <h5 class=\"card-title\">With indicators</h5>

                            <!-- Slides with indicators -->
                            <div id=\"carouselExampleIndicators\" class=\"carousel slide\" data-bs-ride=\"carousel\">
                                <div class=\"carousel-indicators\">
                                    <button type=\"button\" data-bs-target=\"#carouselExampleIndicators\" data-bs-slide-to=\"0\" class=\"active\" aria-current=\"true\" aria-label=\"Slide 1\"></button>
                                    <button type=\"button\" data-bs-target=\"#carouselExampleIndicators\" data-bs-slide-to=\"1\" aria-label=\"Slide 2\"></button>
                                    <button type=\"button\" data-bs-target=\"#carouselExampleIndicators\" data-bs-slide-to=\"2\" aria-label=\"Slide 3\"></button>
                                </div>
                                <div class=\"carousel-inner\">
                                    <div class=\"carousel-item active\">

                                        <img src=\"";
        // line 562
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/slides-1.jpg"), "html", null, true);
        echo "\" class=\"d-block w-100\" alt=\"...\">
                                    </div>
                                    <div class=\"carousel-item\">
                                        <img src=\"";
        // line 565
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/slides-2.jpg"), "html", null, true);
        echo "\" class=\"d-block w-100\" alt=\"...\">
                                    </div>
                                    <div class=\"carousel-item\">
                                        <img src=\"";
        // line 568
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/slides-3.jpg"), "html", null, true);
        echo "\" class=\"d-block w-100\" alt=\"...\">
                                    </div>
                                </div>

                                <button class=\"carousel-control-prev\" type=\"button\" data-bs-target=\"#carouselExampleIndicators\" data-bs-slide=\"prev\">
                                    <span class=\"carousel-control-prev-icon\" aria-hidden=\"true\"></span>
                                    <span class=\"visually-hidden\">Previous</span>
                                </button>
                                <button class=\"carousel-control-next\" type=\"button\" data-bs-target=\"#carouselExampleIndicators\" data-bs-slide=\"next\">
                                    <span class=\"carousel-control-next-icon\" aria-hidden=\"true\"></span>
                                    <span class=\"visually-hidden\">Next</span>
                                </button>

                            </div><!-- End Slides with indicators -->

                        </div>
                    </div>

                    <div class=\"card\">
                        <div class=\"card-body\">
                            <h5 class=\"card-title\">Carousel with fade transition</h5>
                            <p>Add <code>.carousel-fade</code> to your carousel to animate slides with a fade transition instead of a slide.</p>

                            <!-- Slides with fade transition -->
                            <div id=\"carouselExampleFade\" class=\"carousel slide carousel-fade\" data-bs-ride=\"carousel\">
                                <div class=\"carousel-inner\">
                                    <div class=\"carousel-item active\">

                                        <img src=\"";
        // line 596
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(" img/slides-1.jpg"), "html", null, true);
        echo "\" class=\"d-block w-100\" alt=\"...\">
                                    </div>
                                    <div class=\"carousel-item\">
                                        <img src=\"";
        // line 599
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(" img/slides-2.jpg"), "html", null, true);
        echo "\" class=\"d-block w-100\" alt=\"...\">
                                    </div>
                                    <div class=\"carousel-item\">
                                        <img src=\"";
        // line 602
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(" img/slides-3.jpg"), "html", null, true);
        echo "\" class=\"d-block w-100\" alt=\"...\">
                                    </div>
                                </div>

                                <button class=\"carousel-control-prev\" type=\"button\" data-bs-target=\"#carouselExampleFade\" data-bs-slide=\"prev\">
                                    <span class=\"carousel-control-prev-icon\" aria-hidden=\"true\"></span>
                                    <span class=\"visually-hidden\">Previous</span>
                                </button>
                                <button class=\"carousel-control-next\" type=\"button\" data-bs-target=\"#carouselExampleFade\" data-bs-slide=\"next\">
                                    <span class=\"carousel-control-next-icon\" aria-hidden=\"true\"></span>
                                    <span class=\"visually-hidden\">Next</span>
                                </button>

                            </div><!-- End Slides with fade transition -->

                        </div>
                    </div>

                </div>

                <div class=\"col-lg-6\">

                    <div class=\"card\">
                        <div class=\"card-body\">
                            <h5 class=\"card-title\">With controls</h5>

                            <!-- Slides with controls -->
                            <div id=\"carouselExampleControls\" class=\"carousel slide\" data-bs-ride=\"carousel\">
                                <div class=\"carousel-inner\">
                                    <div class=\"carousel-item active\">

                                        <img src=\"";
        // line 633
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("back/assets/img/slides-1.jpg"), "html", null, true);
        echo "\" class=\"d-block w-100\" alt=\"...\">
                                    </div>
                                    <div class=\"carousel-item\">
                                        <img src=\"";
        // line 636
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("back/assets/img/slides-2.jpg"), "html", null, true);
        echo "\" class=\"d-block w-100\" alt=\"...\">
                                    </div>
                                    <div class=\"carousel-item\">
                                        <img src=\"";
        // line 639
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("back/assets/img/slides-3.jpg"), "html", null, true);
        echo "\" class=\"d-block w-100\" alt=\"...\">
                                    </div>
                                </div>

                                <button class=\"carousel-control-prev\" type=\"button\" data-bs-target=\"#carouselExampleControls\" data-bs-slide=\"prev\">
                                    <span class=\"carousel-control-prev-icon\" aria-hidden=\"true\"></span>
                                    <span class=\"visually-hidden\">Previous</span>
                                </button>
                                <button class=\"carousel-control-next\" type=\"button\" data-bs-target=\"#carouselExampleControls\" data-bs-slide=\"next\">
                                    <span class=\"carousel-control-next-icon\" aria-hidden=\"true\"></span>
                                    <span class=\"visually-hidden\">Next</span>
                                </button>

                            </div><!-- End Slides with controls -->

                        </div>
                    </div>

                    <div class=\"card\">
                        <div class=\"card-body\">
                            <h5 class=\"card-title\">With captions</h5>

                            <!-- Slides with captions -->
                            <div id=\"carouselExampleCaptions\" class=\"carousel slide\" data-bs-ride=\"carousel\">
                                <div class=\"carousel-indicators\">
                                    <button type=\"button\" data-bs-target=\"#carouselExampleCaptions\" data-bs-slide-to=\"0\" class=\"active\" aria-current=\"true\" aria-label=\"Slide 1\"></button>
                                    <button type=\"button\" data-bs-target=\"#carouselExampleCaptions\" data-bs-slide-to=\"1\" aria-label=\"Slide 2\"></button>
                                    <button type=\"button\" data-bs-target=\"#carouselExampleCaptions\" data-bs-slide-to=\"2\" aria-label=\"Slide 3\"></button>
                                </div>
                                <div class=\"carousel-inner\">
                                    <div class=\"carousel-item active\">

                                        <img src=\"";
        // line 671
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("back/assets/img/slides-1.jpg"), "html", null, true);
        echo "\" class=\"d-block w-100\" alt=\"...\">
                                        <div class=\"carousel-caption d-none d-md-block\">
                                            <h5>First slide label</h5>
                                            <p>Some representative placeholder content for the first slide.</p>
                                        </div>
                                    </div>
                                    <div class=\"carousel-item\">
                                        <img src=\"";
        // line 678
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("back/assets/img/slides-2.jpg"), "html", null, true);
        echo "\" class=\"d-block w-100\" alt=\"...\">
                                        <div class=\"carousel-caption d-none d-md-block\">
                                            <h5>Second slide label</h5>
                                            <p>Some representative placeholder content for the second slide.</p>
                                        </div>
                                    </div>
                                    <div class=\"carousel-item\">
                                        <img src=\"";
        // line 685
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("back/assets/img/slides-3.jpg"), "html", null, true);
        echo "\" class=\"d-block w-100\" alt=\"...\">
                                        <div class=\"carousel-caption d-none d-md-block\">
                                            <h5>Third slide label</h5>
                                            <p>Some representative placeholder content for the third slide.</p>
                                        </div>
                                    </div>
                                </div>

                                <button class=\"carousel-control-prev\" type=\"button\" data-bs-target=\"#carouselExampleCaptions\" data-bs-slide=\"prev\">
                                    <span class=\"carousel-control-prev-icon\" aria-hidden=\"true\"></span>
                                    <span class=\"visually-hidden\">Previous</span>
                                </button>
                                <button class=\"carousel-control-next\" type=\"button\" data-bs-target=\"#carouselExampleCaptions\" data-bs-slide=\"next\">
                                    <span class=\"carousel-control-next-icon\" aria-hidden=\"true\"></span>
                                    <span class=\"visually-hidden\">Next</span>
                                </button>

                            </div><!-- End Slides with captions -->

                        </div>
                    </div>

                </div>
            </div>
        </section>
    ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 713
    public function block_footer($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "footer"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "footer"));

        // line 714
        echo "    <!-- ======= Footer ======= -->
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
    </footer><!-- End Footer --> ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 730
    public function block_js($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "js"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "js"));

        echo "   <!-- Vendor JS Files -->

    <script src=\"";
        // line 732
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("back/assets/vendor/apexcharts/apexcharts.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 733
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("back/assets/vendor/bootstrap/js/bootstrap.bundle.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 734
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("back/assets/vendor/chart.js/chart.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 735
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("back/assets/vendor/echarts/echarts.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 736
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("back/assets/vendor/quill/quill.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 737
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("back/assets/vendor/simple-datatables/simple-datatables.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 738
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("back/assets/vendor/tinymce/tinymce.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 739
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("back/assets/vendor/php-email-form/validate.js"), "html", null, true);
        echo "\"></script>

    <!-- Template Main JS File -->
    <script src=\"";
        // line 742
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("back/assets/js/main.js"), "html", null, true);
        echo "\"></script>

";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "base-back.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  1018 => 742,  1012 => 739,  1008 => 738,  1004 => 737,  1000 => 736,  996 => 735,  992 => 734,  988 => 733,  984 => 732,  971 => 730,  949 => 714,  939 => 713,  903 => 685,  893 => 678,  883 => 671,  848 => 639,  842 => 636,  836 => 633,  802 => 602,  796 => 599,  790 => 596,  759 => 568,  753 => 565,  747 => 562,  722 => 540,  716 => 537,  710 => 534,  684 => 510,  674 => 509,  660 => 30,  654 => 27,  650 => 26,  646 => 25,  642 => 24,  638 => 23,  634 => 22,  629 => 21,  619 => 20,  600 => 8,  587 => 745,  585 => 730,  580 => 727,  578 => 713,  574 => 711,  572 => 509,  272 => 212,  246 => 189,  228 => 174,  211 => 160,  92 => 44,  80 => 34,  78 => 20,  69 => 14,  65 => 13,  57 => 8,  48 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html lang=\"en\">

<head>
    <meta charset=\"utf-8\">
    <meta content=\"width=device-width, initial-scale=1.0\" name=\"viewport\">

    <title>{% block title %}Edu School - Education Category  {% endblock %}</title>
    <meta content=\"\" name=\"description\">
    <meta content=\"\" name=\"keywords\">

    <!-- Favicons -->
    <link href=\"{{ asset('back/assets/img/favicon.png')}}\" rel=\"icon\">
    <link href=\"{{ asset('back/assets/img/apple-touch-icon.png')}}\" rel=\"apple-touch-icon\">

    <!-- Google Fonts -->
    <link href=\"https://fonts.gstatic.com\" rel=\"preconnect\">
    <link href=\"https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i\" rel=\"stylesheet\">

    {% block css%}
        <link href=\"{{ asset('back/assets/vendor/bootstrap/css/bootstrap.min.css')}}\" rel=\"stylesheet\">
        <link href=\"{{ asset('back/assets/vendor/bootstrap-icons/bootstrap-icons.css')}}\" rel=\"stylesheet\">
        <link href=\"{{ asset('back/assets/vendor/boxicons/css/boxicons.min.css')}}\" rel=\"stylesheet\">
        <link href=\"{{ asset('back/assets/vendor/quill/quill.snow.css')}}\" rel=\"stylesheet\">
        <link href=\"{{ asset('back/assets/vendor/quill/quill.bubble.css')}}\" rel=\"stylesheet\">
        <link href=\"{{ asset('back/assets/vendor/remixicon/remixicon.css')}}\" rel=\"stylesheet\">
        <link href=\"{{ asset('back/assets/vendor/simple-datatables/style.css')}}\" rel=\"stylesheet\">

        <!-- Template Main CSS File -->
        <link href=\"{{ asset('back/assets/css/style.css')}}\" rel=\"stylesheet\">


    {% endblock %}

</head>

<body>

<!-- ======= Header ======= -->
<header id=\"header\" class=\"header fixed-top d-flex align-items-center\">

    <div class=\"d-flex align-items-center justify-content-between\">
        <a href=\"index.html\" class=\"logo d-flex align-items-center\">
            <img src=\" {{ asset('back/assets/img/logo.png')}}\" alt=\"\">
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

                            <img src=\"{{ asset('back/assets/img/messages-1.jpg')}}\" alt=\"\" class=\"rounded-circle\">
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
                            <img src=\"{{ asset('back/assets/img/messages-2.jpg')}}\" alt=\"\" class=\"rounded-circle\">
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

                            <img src=\"{{ asset('back/assets/img/messages-3.jpg')}}\" alt=\"\" class=\"rounded-circle\">
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
                    <img src=\"  {{ asset('back/assets/img/profile-img.jpg')}}\" alt=\"Profile\" class=\"rounded-circle\">
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
            <a class=\"nav-link collapsed\" href=\"index.html\">
                <i class=\"bi bi-grid\"></i>
                <span>Dashboard</span>
            </a>
        </li><!-- End Dashboard Nav -->

        <li class=\"nav-item\">
            <a class=\"nav-link \" data-bs-target=\"#components-nav\" data-bs-toggle=\"collapse\" href=\"#\">
                <i class=\"bi bi-menu-button-wide\"></i><span>Components</span><i class=\"bi bi-chevron-down ms-auto\"></i>
            </a>
            <ul id=\"components-nav\" class=\"nav-content collapse show\" data-bs-parent=\"#sidebar-nav\">
                <li>
                    <a href=\"components-alerts.html\">
                        <i class=\"bi bi-circle\"></i><span>Alerts</span>
                    </a>
                </li>
                <li>
                    <a href=\"components-accordion.html\">
                        <i class=\"bi bi-circle\"></i><span>Accordion</span>
                    </a>
                </li>
                <li>
                    <a href=\"components-badges.html\">
                        <i class=\"bi bi-circle\"></i><span>Badges</span>
                    </a>
                </li>
                <li>
                    <a href=\"components-breadcrumbs.html\">
                        <i class=\"bi bi-circle\"></i><span>Breadcrumbs</span>
                    </a>
                </li>
                <li>
                    <a href=\"components-buttons.html\">
                        <i class=\"bi bi-circle\"></i><span>Buttons</span>
                    </a>
                </li>
                <li>
                    <a href=\"components-cards.html\">
                        <i class=\"bi bi-circle\"></i><span>Cards</span>
                    </a>
                </li>
                <li>
                    <a href=\"components-carousel.html\" class=\"active\">
                        <i class=\"bi bi-circle\"></i><span>Carousel</span>
                    </a>
                </li>
                <li>
                    <a href=\"components-list-group.html\">
                        <i class=\"bi bi-circle\"></i><span>List group</span>
                    </a>
                </li>
                <li>
                    <a href=\"components-modal.html\">
                        <i class=\"bi bi-circle\"></i><span>Modal</span>
                    </a>
                </li>
                <li>
                    <a href=\"components-tabs.html\">
                        <i class=\"bi bi-circle\"></i><span>Tabs</span>
                    </a>
                </li>
                <li>
                    <a href=\"components-pagination.html\">
                        <i class=\"bi bi-circle\"></i><span>Pagination</span>
                    </a>
                </li>
                <li>
                    <a href=\"components-progress.html\">
                        <i class=\"bi bi-circle\"></i><span>Progress</span>
                    </a>
                </li>
                <li>
                    <a href=\"components-spinners.html\">
                        <i class=\"bi bi-circle\"></i><span>Spinners</span>
                    </a>
                </li>
                <li>
                    <a href=\"components-tooltips.html\">
                        <i class=\"bi bi-circle\"></i><span>Tooltips</span>
                    </a>
                </li>
            </ul>
        </li><!-- End Components Nav -->

        <li class=\"nav-item\">
            <a class=\"nav-link collapsed\" data-bs-target=\"#forms-nav\" data-bs-toggle=\"collapse\" href=\"#\">
                <i class=\"bi bi-journal-text\"></i><span>Forms</span><i class=\"bi bi-chevron-down ms-auto\"></i>
            </a>
            <ul id=\"forms-nav\" class=\"nav-content collapse \" data-bs-parent=\"#sidebar-nav\">
                <li>
                    <a href=\"forms-elements.html\">
                        <i class=\"bi bi-circle\"></i><span>Form Elements</span>
                    </a>
                </li>
                <li>
                    <a href=\"forms-layouts.html\">
                        <i class=\"bi bi-circle\"></i><span>Form Layouts</span>
                    </a>
                </li>
                <li>
                    <a href=\"forms-editors.html\">
                        <i class=\"bi bi-circle\"></i><span>Form Editors</span>
                    </a>
                </li>
                <li>
                    <a href=\"forms-validation.html\">
                        <i class=\"bi bi-circle\"></i><span>Form Validation</span>
                    </a>
                </li>
            </ul>
        </li><!-- End Forms Nav -->

        <li class=\"nav-item\">
            <a class=\"nav-link collapsed\" data-bs-target=\"#tables-nav\" data-bs-toggle=\"collapse\" href=\"#\">
                <i class=\"bi bi-layout-text-window-reverse\"></i><span>Tables</span><i class=\"bi bi-chevron-down ms-auto\"></i>
            </a>
            <ul id=\"tables-nav\" class=\"nav-content collapse \" data-bs-parent=\"#sidebar-nav\">
                <li>
                    <a href=\"tables-general.html\">
                        <i class=\"bi bi-circle\"></i><span>General Tables</span>
                    </a>
                </li>
                <li>
                    <a href=\"tables-data.html\">
                        <i class=\"bi bi-circle\"></i><span>Data Tables</span>
                    </a>
                </li>
            </ul>
        </li><!-- End Tables Nav -->

        <li class=\"nav-item\">
            <a class=\"nav-link collapsed\" data-bs-target=\"#charts-nav\" data-bs-toggle=\"collapse\" href=\"#\">
                <i class=\"bi bi-bar-chart\"></i><span>Charts</span><i class=\"bi bi-chevron-down ms-auto\"></i>
            </a>
            <ul id=\"charts-nav\" class=\"nav-content collapse \" data-bs-parent=\"#sidebar-nav\">
                <li>
                    <a href=\"charts-chartjs.html\">
                        <i class=\"bi bi-circle\"></i><span>Chart.js</span>
                    </a>
                </li>
                <li>
                    <a href=\"charts-apexcharts.html\">
                        <i class=\"bi bi-circle\"></i><span>ApexCharts</span>
                    </a>
                </li>
                <li>
                    <a href=\"charts-echarts.html\">
                        <i class=\"bi bi-circle\"></i><span>ECharts</span>
                    </a>
                </li>
            </ul>
        </li><!-- End Charts Nav -->

        <li class=\"nav-item\">
            <a class=\"nav-link collapsed\" data-bs-target=\"#icons-nav\" data-bs-toggle=\"collapse\" href=\"#\">
                <i class=\"bi bi-gem\"></i><span>Icons</span><i class=\"bi bi-chevron-down ms-auto\"></i>
            </a>
            <ul id=\"icons-nav\" class=\"nav-content collapse \" data-bs-parent=\"#sidebar-nav\">
                <li>
                    <a href=\"icons-bootstrap.html\">
                        <i class=\"bi bi-circle\"></i><span>Bootstrap Icons</span>
                    </a>
                </li>
                <li>
                    <a href=\"icons-remix.html\">
                        <i class=\"bi bi-circle\"></i><span>Remix Icons</span>
                    </a>
                </li>
                <li>
                    <a href=\"icons-boxicons.html\">
                        <i class=\"bi bi-circle\"></i><span>Boxicons</span>
                    </a>
                </li>
            </ul>
        </li><!-- End Icons Nav -->

        <li class=\"nav-heading\">Pages</li>

        <li class=\"nav-item\">
            <a class=\"nav-link collapsed\" href=\"users-profile.html\">
                <i class=\"bi bi-person\"></i>
                <span>Profile</span>
            </a>
        </li><!-- End Profile Page Nav -->

        <li class=\"nav-item\">
            <a class=\"nav-link collapsed\" href=\"pages-faq.html\">
                <i class=\"bi bi-question-circle\"></i>
                <span>F.A.Q</span>
            </a>
        </li><!-- End F.A.Q Page Nav -->

        <li class=\"nav-item\">
            <a class=\"nav-link collapsed\" href=\"pages-contact.html\">
                <i class=\"bi bi-envelope\"></i>
                <span>Contact</span>
            </a>
        </li><!-- End Contact Page Nav -->

        <li class=\"nav-item\">
            <a class=\"nav-link collapsed\" href=\"pages-register.html\">
                <i class=\"bi bi-card-list\"></i>
                <span>Register</span>
            </a>
        </li><!-- End Register Page Nav -->

        <li class=\"nav-item\">
            <a class=\"nav-link collapsed\" href=\"pages-login.html\">
                <i class=\"bi bi-box-arrow-in-right\"></i>
                <span>Login</span>
            </a>
        </li><!-- End Login Page Nav -->

        <li class=\"nav-item\">
            <a class=\"nav-link collapsed\" href=\"pages-error-404.html\">
                <i class=\"bi bi-dash-circle\"></i>
                <span>Error 404</span>
            </a>
        </li><!-- End Error 404 Page Nav -->

        <li class=\"nav-item\">
            <a class=\"nav-link collapsed\" href=\"pages-blank.html\">
                <i class=\"bi bi-file-earmark\"></i>
                <span>Blank</span>
            </a>
        </li><!-- End Blank Page Nav -->

    </ul>

</aside><!-- End Sidebar-->

<main id=\"main\" class=\"main\">

    {% block body %}
        <div class=\"pagetitle\">
            <h1>Carousel</h1>
            <nav>
                <ol class=\"breadcrumb\">
                    <li class=\"breadcrumb-item\"><a href=\"index.html\">Home</a></li>
                    <li class=\"breadcrumb-item\">Components</li>
                    <li class=\"breadcrumb-item active\">Carousel</li>
                </ol>
            </nav>
        </div><!-- End Page Title -->

        <section class=\"section\">
            <div class=\"row\">
                <div class=\"col-lg-6\">

                    <div class=\"card\">
                        <div class=\"card-body\">
                            <h5 class=\"card-title\">Slides only</h5>

                            <!-- Slides only carousel -->
                            <div id=\"carouselExampleSlidesOnly\" class=\"carousel slide\" data-bs-ride=\"carousel\">
                                <div class=\"carousel-inner\">
                                    <div class=\"carousel-item active\">

                                        <img src=\"{{ asset('img/slides-1.jpg')}}\" class=\"d-block w-100\" alt=\"...\">
                                    </div>
                                    <div class=\"carousel-item\">
                                        <img src=\"{{ asset('img/slides-2.jpg')}}\" class=\"d-block w-100\" alt=\"...\">
                                    </div>
                                    <div class=\"carousel-item\">
                                        <img src=\"{{ asset('img/slides-3.jpg')}}\" class=\"d-block w-100\" alt=\"...\">
                                    </div>
                                </div>
                            </div><!-- End Slides only carousel-->

                        </div>
                    </div>

                    <div class=\"card\">
                        <div class=\"card-body\">
                            <h5 class=\"card-title\">With indicators</h5>

                            <!-- Slides with indicators -->
                            <div id=\"carouselExampleIndicators\" class=\"carousel slide\" data-bs-ride=\"carousel\">
                                <div class=\"carousel-indicators\">
                                    <button type=\"button\" data-bs-target=\"#carouselExampleIndicators\" data-bs-slide-to=\"0\" class=\"active\" aria-current=\"true\" aria-label=\"Slide 1\"></button>
                                    <button type=\"button\" data-bs-target=\"#carouselExampleIndicators\" data-bs-slide-to=\"1\" aria-label=\"Slide 2\"></button>
                                    <button type=\"button\" data-bs-target=\"#carouselExampleIndicators\" data-bs-slide-to=\"2\" aria-label=\"Slide 3\"></button>
                                </div>
                                <div class=\"carousel-inner\">
                                    <div class=\"carousel-item active\">

                                        <img src=\"{{ asset('img/slides-1.jpg')}}\" class=\"d-block w-100\" alt=\"...\">
                                    </div>
                                    <div class=\"carousel-item\">
                                        <img src=\"{{ asset('img/slides-2.jpg')}}\" class=\"d-block w-100\" alt=\"...\">
                                    </div>
                                    <div class=\"carousel-item\">
                                        <img src=\"{{ asset('img/slides-3.jpg')}}\" class=\"d-block w-100\" alt=\"...\">
                                    </div>
                                </div>

                                <button class=\"carousel-control-prev\" type=\"button\" data-bs-target=\"#carouselExampleIndicators\" data-bs-slide=\"prev\">
                                    <span class=\"carousel-control-prev-icon\" aria-hidden=\"true\"></span>
                                    <span class=\"visually-hidden\">Previous</span>
                                </button>
                                <button class=\"carousel-control-next\" type=\"button\" data-bs-target=\"#carouselExampleIndicators\" data-bs-slide=\"next\">
                                    <span class=\"carousel-control-next-icon\" aria-hidden=\"true\"></span>
                                    <span class=\"visually-hidden\">Next</span>
                                </button>

                            </div><!-- End Slides with indicators -->

                        </div>
                    </div>

                    <div class=\"card\">
                        <div class=\"card-body\">
                            <h5 class=\"card-title\">Carousel with fade transition</h5>
                            <p>Add <code>.carousel-fade</code> to your carousel to animate slides with a fade transition instead of a slide.</p>

                            <!-- Slides with fade transition -->
                            <div id=\"carouselExampleFade\" class=\"carousel slide carousel-fade\" data-bs-ride=\"carousel\">
                                <div class=\"carousel-inner\">
                                    <div class=\"carousel-item active\">

                                        <img src=\"{{ asset(' img/slides-1.jpg')}}\" class=\"d-block w-100\" alt=\"...\">
                                    </div>
                                    <div class=\"carousel-item\">
                                        <img src=\"{{ asset(' img/slides-2.jpg')}}\" class=\"d-block w-100\" alt=\"...\">
                                    </div>
                                    <div class=\"carousel-item\">
                                        <img src=\"{{ asset(' img/slides-3.jpg')}}\" class=\"d-block w-100\" alt=\"...\">
                                    </div>
                                </div>

                                <button class=\"carousel-control-prev\" type=\"button\" data-bs-target=\"#carouselExampleFade\" data-bs-slide=\"prev\">
                                    <span class=\"carousel-control-prev-icon\" aria-hidden=\"true\"></span>
                                    <span class=\"visually-hidden\">Previous</span>
                                </button>
                                <button class=\"carousel-control-next\" type=\"button\" data-bs-target=\"#carouselExampleFade\" data-bs-slide=\"next\">
                                    <span class=\"carousel-control-next-icon\" aria-hidden=\"true\"></span>
                                    <span class=\"visually-hidden\">Next</span>
                                </button>

                            </div><!-- End Slides with fade transition -->

                        </div>
                    </div>

                </div>

                <div class=\"col-lg-6\">

                    <div class=\"card\">
                        <div class=\"card-body\">
                            <h5 class=\"card-title\">With controls</h5>

                            <!-- Slides with controls -->
                            <div id=\"carouselExampleControls\" class=\"carousel slide\" data-bs-ride=\"carousel\">
                                <div class=\"carousel-inner\">
                                    <div class=\"carousel-item active\">

                                        <img src=\"{{ asset('back/assets/img/slides-1.jpg')}}\" class=\"d-block w-100\" alt=\"...\">
                                    </div>
                                    <div class=\"carousel-item\">
                                        <img src=\"{{ asset('back/assets/img/slides-2.jpg')}}\" class=\"d-block w-100\" alt=\"...\">
                                    </div>
                                    <div class=\"carousel-item\">
                                        <img src=\"{{ asset('back/assets/img/slides-3.jpg')}}\" class=\"d-block w-100\" alt=\"...\">
                                    </div>
                                </div>

                                <button class=\"carousel-control-prev\" type=\"button\" data-bs-target=\"#carouselExampleControls\" data-bs-slide=\"prev\">
                                    <span class=\"carousel-control-prev-icon\" aria-hidden=\"true\"></span>
                                    <span class=\"visually-hidden\">Previous</span>
                                </button>
                                <button class=\"carousel-control-next\" type=\"button\" data-bs-target=\"#carouselExampleControls\" data-bs-slide=\"next\">
                                    <span class=\"carousel-control-next-icon\" aria-hidden=\"true\"></span>
                                    <span class=\"visually-hidden\">Next</span>
                                </button>

                            </div><!-- End Slides with controls -->

                        </div>
                    </div>

                    <div class=\"card\">
                        <div class=\"card-body\">
                            <h5 class=\"card-title\">With captions</h5>

                            <!-- Slides with captions -->
                            <div id=\"carouselExampleCaptions\" class=\"carousel slide\" data-bs-ride=\"carousel\">
                                <div class=\"carousel-indicators\">
                                    <button type=\"button\" data-bs-target=\"#carouselExampleCaptions\" data-bs-slide-to=\"0\" class=\"active\" aria-current=\"true\" aria-label=\"Slide 1\"></button>
                                    <button type=\"button\" data-bs-target=\"#carouselExampleCaptions\" data-bs-slide-to=\"1\" aria-label=\"Slide 2\"></button>
                                    <button type=\"button\" data-bs-target=\"#carouselExampleCaptions\" data-bs-slide-to=\"2\" aria-label=\"Slide 3\"></button>
                                </div>
                                <div class=\"carousel-inner\">
                                    <div class=\"carousel-item active\">

                                        <img src=\"{{ asset('back/assets/img/slides-1.jpg')}}\" class=\"d-block w-100\" alt=\"...\">
                                        <div class=\"carousel-caption d-none d-md-block\">
                                            <h5>First slide label</h5>
                                            <p>Some representative placeholder content for the first slide.</p>
                                        </div>
                                    </div>
                                    <div class=\"carousel-item\">
                                        <img src=\"{{ asset('back/assets/img/slides-2.jpg')}}\" class=\"d-block w-100\" alt=\"...\">
                                        <div class=\"carousel-caption d-none d-md-block\">
                                            <h5>Second slide label</h5>
                                            <p>Some representative placeholder content for the second slide.</p>
                                        </div>
                                    </div>
                                    <div class=\"carousel-item\">
                                        <img src=\"{{ asset('back/assets/img/slides-3.jpg')}}\" class=\"d-block w-100\" alt=\"...\">
                                        <div class=\"carousel-caption d-none d-md-block\">
                                            <h5>Third slide label</h5>
                                            <p>Some representative placeholder content for the third slide.</p>
                                        </div>
                                    </div>
                                </div>

                                <button class=\"carousel-control-prev\" type=\"button\" data-bs-target=\"#carouselExampleCaptions\" data-bs-slide=\"prev\">
                                    <span class=\"carousel-control-prev-icon\" aria-hidden=\"true\"></span>
                                    <span class=\"visually-hidden\">Previous</span>
                                </button>
                                <button class=\"carousel-control-next\" type=\"button\" data-bs-target=\"#carouselExampleCaptions\" data-bs-slide=\"next\">
                                    <span class=\"carousel-control-next-icon\" aria-hidden=\"true\"></span>
                                    <span class=\"visually-hidden\">Next</span>
                                </button>

                            </div><!-- End Slides with captions -->

                        </div>
                    </div>

                </div>
            </div>
        </section>
    {% endblock %}
</main><!-- End #main -->

{% block footer %}
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
    </footer><!-- End Footer --> {% endblock %}

<a href=\"#\" class=\"back-to-top d-flex align-items-center justify-content-center\"><i class=\"bi bi-arrow-up-short\"></i></a>

{% block js %}   <!-- Vendor JS Files -->

    <script src=\"{{ asset('back/assets/vendor/apexcharts/apexcharts.min.js')}}\"></script>
    <script src=\"{{ asset('back/assets/vendor/bootstrap/js/bootstrap.bundle.min.js')}}\"></script>
    <script src=\"{{ asset('back/assets/vendor/chart.js/chart.min.js')}}\"></script>
    <script src=\"{{ asset('back/assets/vendor/echarts/echarts.min.js')}}\"></script>
    <script src=\"{{ asset('back/assets/vendor/quill/quill.min.js')}}\"></script>
    <script src=\"{{ asset('back/assets/vendor/simple-datatables/simple-datatables.js')}}\"></script>
    <script src=\"{{ asset('back/assets/vendor/tinymce/tinymce.min.js')}}\"></script>
    <script src=\"{{ asset('back/assets/vendor/php-email-form/validate.js')}}\"></script>

    <!-- Template Main JS File -->
    <script src=\"{{ asset('back/assets/js/main.js')}}\"></script>

{% endblock %}

</body>

</html>", "base-back.html.twig", "C:\\Users\\Asus\\Desktop\\eya-lakhdher-master\\templates\\base-back.html.twig");
    }
}
