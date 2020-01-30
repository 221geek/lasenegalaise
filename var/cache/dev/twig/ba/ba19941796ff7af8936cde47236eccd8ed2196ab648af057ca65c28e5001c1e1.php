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

/* base.html.twig */
class __TwigTemplate_2042296afb62413e4f5b11d84973dcb233243910551b93f50352a0accb42d899 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html lang=\"fr\">
    <head>
        <meta charset=\"UTF-8\">
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        <link rel=\"stylesheet\" href=\"fontawesome/css/all.min.css\" class=\"rel\">
        <link rel=\"stylesheet\" href=\"bootstrap/dist/css/bootstrap.min.css\" class=\"rel\">
        <link rel=\"stylesheet\" href=\"animate.css/animate.min.css\" class=\"rel\">
        <link rel=\"stylesheet\" href=\"assets/css/main.css\">
        ";
        // line 10
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 11
        echo "    </head>
    <body>

        <div id=\"slidesearch\" class=\"search hide d-flex justify-content-center\">
            <input type=\"search\" placeholder=\"rechercher ...\">
            <button class=\"submitsearch\"><em class=\"fa fa-search\"></em></button>
            <button id=\"closebtn\" class=\"closebtn\"><em class=\"fa fa-times\"></em></button>
        </div>

        <div id=\"head\">
            <div class=\"container d-flex justify-content-between\">
                <p>Bienvenue chez la senegalaise</p>
                <ul class=\"list-inline d-flex\">
                    <li><em class=\"fab fa-instagram\"></em></li>
                    <li><em class=\"fab fa-youtube\"></em></li>
                    <li><em class=\"fab fa-linkedin\"></em></li>
                    <li><em class=\"fab fa-facebook\"></em></li>
                </ul>
            </div>
        </div>

        <nav class=\"navbar navbar-expand-lg mt-4\">
            <div class=\"container\">
                <a class=\"navbar-brand\" href=\"";
        // line 34
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("home");
        echo "\">
                    <img class=\"logo\" src=\"assets/img/logoblack.png\" alt=\"logo\">
                </a>

                <button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarNavDropdown\" aria-controls=\"navbarNavDropdown\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
                    <em class=\"fa fa-hamburger\"></em>
                </button>

                <div class=\"collapse navbar-collapse\" id=\"navbarNavDropdown\">
                    <ul class=\"navbar-nav m-auto\">

                        <li class=\"nav-item ";
        // line 45
        if (((isset($context["currentRoute"]) || array_key_exists("currentRoute", $context) ? $context["currentRoute"] : (function () { throw new RuntimeError('Variable "currentRoute" does not exist.', 45, $this->source); })()) == "home")) {
            echo "active";
        }
        echo "\">
                            <a class=\"nav-link\" href=\"";
        // line 46
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("home");
        echo "\">ACCUEIL</a>
                        </li>

                        <li class=\"nav-item ";
        // line 49
        if (((isset($context["currentRoute"]) || array_key_exists("currentRoute", $context) ? $context["currentRoute"] : (function () { throw new RuntimeError('Variable "currentRoute" does not exist.', 49, $this->source); })()) == "reservation")) {
            echo "active";
        }
        echo "\">
                            <a href=\"#\" class=\"nav-link\">RESERVER UNE TABLE</a>
                        </li>

                        <li class=\"nav-item ";
        // line 53
        if (((isset($context["currentRoute"]) || array_key_exists("currentRoute", $context) ? $context["currentRoute"] : (function () { throw new RuntimeError('Variable "currentRoute" does not exist.', 53, $this->source); })()) == "culin")) {
            echo "active";
        }
        echo "\">
                            <a href=\"";
        // line 54
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("culin");
        echo "\" class=\"nav-link\">RECETTES <em class=\"fa fa-caret-down\"></em></a>
                        </li>

                        <li class=\"nav-item ";
        // line 57
        if (((isset($context["currentRoute"]) || array_key_exists("currentRoute", $context) ? $context["currentRoute"] : (function () { throw new RuntimeError('Variable "currentRoute" does not exist.', 57, $this->source); })()) == "events")) {
            echo "active";
        }
        echo "\">
                            <a class=\"nav-link\" href=\"#\">EVENEMENTS</a>
                        </li>


                        <li class=\"nav-item ";
        // line 62
        if (((isset($context["currentRoute"]) || array_key_exists("currentRoute", $context) ? $context["currentRoute"] : (function () { throw new RuntimeError('Variable "currentRoute" does not exist.', 62, $this->source); })()) == "contact")) {
            echo "active";
        }
        echo "\">
                            <a href=\"";
        // line 63
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("contact");
        echo "\" class=\"nav-link\">CONTACT</a>
                        </li>
                    </ul>

                    <div class=\"navbar-nav ml-auto\">
                        <em id=\"btnsearch\" class=\"fa fa-search\"></em>
                    </div>

                </div>
            </div>
        </nav>

        <div class=\"container-fluid mt-5\">
            ";
        // line 76
        $this->displayBlock('body', $context, $blocks);
        // line 77
        echo "        </div>

        <footer>
            <div class=\"container d-flex justify-content-between\">

                <img class=\"logo\" src=\"assets/img/logoblack.png\" alt=\"logo\">

                <ul class=\"list-inline d-flex\">
                    <li><em class=\"fab fa-instagram\"></em></li>
                    <li><em class=\"fab fa-youtube\"></em></li>
                    <li><em class=\"fab fa-linkedin\"></em></li>
                    <li><em class=\"fab fa-facebook\"></em></li>
                </ul>

                <div>
                    Copyright <em class=\"fa fa-copyright\"></em> 2019
                </div>

            </div>
        </footer>

        <script src=\"jquery/dist/jquery.min.js\"></script>
        <script src=\"jquery/dist/jquery.slim.min.js\"></script>
        <script src=\"bootstrap/dist/js/bootstrap.min.js\"></script>
        <script src=\"assets/js/app.js\"></script>
        ";
        // line 102
        $this->displayBlock('javascripts', $context, $blocks);
        // line 103
        echo "    </body>
</html>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 5
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 10
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 76
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 102
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  264 => 102,  246 => 76,  228 => 10,  210 => 5,  198 => 103,  196 => 102,  169 => 77,  167 => 76,  151 => 63,  145 => 62,  135 => 57,  129 => 54,  123 => 53,  114 => 49,  108 => 46,  102 => 45,  88 => 34,  63 => 11,  61 => 10,  53 => 5,  47 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html lang=\"fr\">
    <head>
        <meta charset=\"UTF-8\">
        <title>{% block title %}{% endblock %}</title>
        <link rel=\"stylesheet\" href=\"fontawesome/css/all.min.css\" class=\"rel\">
        <link rel=\"stylesheet\" href=\"bootstrap/dist/css/bootstrap.min.css\" class=\"rel\">
        <link rel=\"stylesheet\" href=\"animate.css/animate.min.css\" class=\"rel\">
        <link rel=\"stylesheet\" href=\"assets/css/main.css\">
        {% block stylesheets %}{% endblock %}
    </head>
    <body>

        <div id=\"slidesearch\" class=\"search hide d-flex justify-content-center\">
            <input type=\"search\" placeholder=\"rechercher ...\">
            <button class=\"submitsearch\"><em class=\"fa fa-search\"></em></button>
            <button id=\"closebtn\" class=\"closebtn\"><em class=\"fa fa-times\"></em></button>
        </div>

        <div id=\"head\">
            <div class=\"container d-flex justify-content-between\">
                <p>Bienvenue chez la senegalaise</p>
                <ul class=\"list-inline d-flex\">
                    <li><em class=\"fab fa-instagram\"></em></li>
                    <li><em class=\"fab fa-youtube\"></em></li>
                    <li><em class=\"fab fa-linkedin\"></em></li>
                    <li><em class=\"fab fa-facebook\"></em></li>
                </ul>
            </div>
        </div>

        <nav class=\"navbar navbar-expand-lg mt-4\">
            <div class=\"container\">
                <a class=\"navbar-brand\" href=\"{{ path('home') }}\">
                    <img class=\"logo\" src=\"assets/img/logoblack.png\" alt=\"logo\">
                </a>

                <button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarNavDropdown\" aria-controls=\"navbarNavDropdown\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
                    <em class=\"fa fa-hamburger\"></em>
                </button>

                <div class=\"collapse navbar-collapse\" id=\"navbarNavDropdown\">
                    <ul class=\"navbar-nav m-auto\">

                        <li class=\"nav-item {% if currentRoute == 'home' %}active{% endif %}\">
                            <a class=\"nav-link\" href=\"{{ path('home') }}\">ACCUEIL</a>
                        </li>

                        <li class=\"nav-item {% if currentRoute == 'reservation' %}active{% endif %}\">
                            <a href=\"#\" class=\"nav-link\">RESERVER UNE TABLE</a>
                        </li>

                        <li class=\"nav-item {% if currentRoute == 'culin' %}active{% endif %}\">
                            <a href=\"{{ path('culin') }}\" class=\"nav-link\">RECETTES <em class=\"fa fa-caret-down\"></em></a>
                        </li>

                        <li class=\"nav-item {% if currentRoute == 'events' %}active{% endif %}\">
                            <a class=\"nav-link\" href=\"#\">EVENEMENTS</a>
                        </li>


                        <li class=\"nav-item {% if currentRoute == 'contact' %}active{% endif %}\">
                            <a href=\"{{ path('contact') }}\" class=\"nav-link\">CONTACT</a>
                        </li>
                    </ul>

                    <div class=\"navbar-nav ml-auto\">
                        <em id=\"btnsearch\" class=\"fa fa-search\"></em>
                    </div>

                </div>
            </div>
        </nav>

        <div class=\"container-fluid mt-5\">
            {% block body %}{% endblock %}
        </div>

        <footer>
            <div class=\"container d-flex justify-content-between\">

                <img class=\"logo\" src=\"assets/img/logoblack.png\" alt=\"logo\">

                <ul class=\"list-inline d-flex\">
                    <li><em class=\"fab fa-instagram\"></em></li>
                    <li><em class=\"fab fa-youtube\"></em></li>
                    <li><em class=\"fab fa-linkedin\"></em></li>
                    <li><em class=\"fab fa-facebook\"></em></li>
                </ul>

                <div>
                    Copyright <em class=\"fa fa-copyright\"></em> 2019
                </div>

            </div>
        </footer>

        <script src=\"jquery/dist/jquery.min.js\"></script>
        <script src=\"jquery/dist/jquery.slim.min.js\"></script>
        <script src=\"bootstrap/dist/js/bootstrap.min.js\"></script>
        <script src=\"assets/js/app.js\"></script>
        {% block javascripts %}{% endblock %}
    </body>
</html>
", "base.html.twig", "/var/www/html/resto/templates/base.html.twig");
    }
}
