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
class __TwigTemplate_9f8a0566cdde3001ef1d6fcd0f0d9da89476a74263caa4fbe8bb50e76b00a4b9 extends \Twig\Template
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
                            <a href=\"#\" class=\"myculindropdown nav-link dropdown-toggle\" id=\"navbarDropdown1\" role=\"button\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
                                RECETTES
                            </a>
                            <div class=\"dropdown-menu\" aria-labelledby=\"navbarDropdown1\">
                                <div class=\"container d-flex justify-content-between\">
                                    <div class=\"category\">
                                        <h5 class=\"font-weight-bold text-dark m-3\">CATEGORIES</h5>
                                        <ul class=\"list-unstyled\">
                                            <li>
                                                <img src=\"assets/img/svg/stew.svg\" alt=\"senegalais\">
                                                <a href\"#\">Plats sénégalais</a>
                                            </li>
                                            <li>
                                            <img src=\"assets/img/svg/salad.svg\" alt=\"entree\">
                                                <a href\"#\">Entées</a>
                                            </li>
                                            <li>
                                                <img src=\"assets/img/svg/food.svg\" alt=\"entree\">
                                                <a href\"#\">Plat principal</a>
                                            </li>
                                            <li>
                                                <img src=\"assets/img/svg/glass.svg\" alt=\"entree\">
                                                <a href\"#\">Desserts</a>
                                            </li>
                                            <li>
                                                <img src=\"assets/img/svg/glass.svg\" alt=\"entree\">
                                                <a href\"#\">Amuses bouches</a>
                                            </li>
                                            <li>
                                                <img src=\"assets/img/svg/glass.svg\" alt=\"entree\">
                                                <a href\"#\">Sauces</a>
                                            </li>
                                            <li>
                                                <img src=\"assets/img/svg/glass.svg\" alt=\"entree\">
                                                <a href\"#\">Apéritif et buffet</a>
                                            </li>
                                            <li>
                                                <img src=\"assets/img/svg/glass.svg\" alt=\"entree\">
                                                <a href\"#\">Patisserie</a>
                                            </li>
                                            <li>
                                                <img src=\"assets/img/svg/glass.svg\" alt=\"entree\">
                                                <a href\"#\">Cocktails</a>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class=\"ingredient\">
                                        <h5 class=\"font-weight-bold text-dark m-3\">INGREDIENTS</h5>
                                        <ul class=\"list-unstyled\">
                                            <li>
                                                <img src=\"assets/img/svg/steak.svg\" alt=\"viande\">
                                                <a href=\"\">Viande</a>
                                            </li>
                                            <li>
                                                <img src=\"assets/img/svg/meat.svg\" alt=\"volailles\">
                                                <a href=\"\">Volailles</a>
                                            </li>
                                            <li>
                                                <img src=\"assets/img/svg/fish.svg\" alt=\"poisson\">
                                                <a href=\"\">Poissons</a>
                                            </li>
                                            <li>
                                                <img src=\"assets/img/svg/boiled-egg.svg\" alt=\"oeufs\">
                                                <a href=\"\">Oeufs</a>
                                            </li>
                                            <li>
                                                <img src=\"assets/img/svg/salad.svg\" alt=\"legumes\">
                                                <a href=\"\">Legumes</a>
                                            </li>
                                            <li>
                                                <img src=\"assets/img/svg/banana.svg\" alt=\"legumes\">
                                                <a href=\"\">Fruits</a>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class=\"diet\">
                                        <h5 class=\"font-weight-bold text-dark m-3\">DIET</h5>
                                        <ul class=\"list-unstyled\">
                                            <li>
                                                <a href=\"\">Vegetarien</a>
                                            </li>
                                            <li>
                                                <a href=\"\">Diabetique</a>
                                            </li>
                                            <li>
                                                <a href=\"\">Minceur</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </li>

                        <li class=\"nav-item ";
        // line 147
        if (((isset($context["currentRoute"]) || array_key_exists("currentRoute", $context) ? $context["currentRoute"] : (function () { throw new RuntimeError('Variable "currentRoute" does not exist.', 147, $this->source); })()) == "events")) {
            echo "active";
        }
        echo "\">
                            <a class=\"nav-link\" href=\"#\">EVENEMENTS</a>
                        </li>


                        <li class=\"nav-item ";
        // line 152
        if (((isset($context["currentRoute"]) || array_key_exists("currentRoute", $context) ? $context["currentRoute"] : (function () { throw new RuntimeError('Variable "currentRoute" does not exist.', 152, $this->source); })()) == "contact")) {
            echo "active";
        }
        echo "\">
                            <a href=\"";
        // line 153
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
        // line 166
        $this->displayBlock('body', $context, $blocks);
        // line 167
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
        // line 192
        $this->displayBlock('javascripts', $context, $blocks);
        // line 193
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

    // line 166
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

    // line 192
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
        return array (  351 => 192,  333 => 166,  315 => 10,  297 => 5,  285 => 193,  283 => 192,  256 => 167,  254 => 166,  238 => 153,  232 => 152,  222 => 147,  123 => 53,  114 => 49,  108 => 46,  102 => 45,  88 => 34,  63 => 11,  61 => 10,  53 => 5,  47 => 1,);
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
                            <a href=\"#\" class=\"myculindropdown nav-link dropdown-toggle\" id=\"navbarDropdown1\" role=\"button\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
                                RECETTES
                            </a>
                            <div class=\"dropdown-menu\" aria-labelledby=\"navbarDropdown1\">
                                <div class=\"container d-flex justify-content-between\">
                                    <div class=\"category\">
                                        <h5 class=\"font-weight-bold text-dark m-3\">CATEGORIES</h5>
                                        <ul class=\"list-unstyled\">
                                            <li>
                                                <img src=\"assets/img/svg/stew.svg\" alt=\"senegalais\">
                                                <a href\"#\">Plats sénégalais</a>
                                            </li>
                                            <li>
                                            <img src=\"assets/img/svg/salad.svg\" alt=\"entree\">
                                                <a href\"#\">Entées</a>
                                            </li>
                                            <li>
                                                <img src=\"assets/img/svg/food.svg\" alt=\"entree\">
                                                <a href\"#\">Plat principal</a>
                                            </li>
                                            <li>
                                                <img src=\"assets/img/svg/glass.svg\" alt=\"entree\">
                                                <a href\"#\">Desserts</a>
                                            </li>
                                            <li>
                                                <img src=\"assets/img/svg/glass.svg\" alt=\"entree\">
                                                <a href\"#\">Amuses bouches</a>
                                            </li>
                                            <li>
                                                <img src=\"assets/img/svg/glass.svg\" alt=\"entree\">
                                                <a href\"#\">Sauces</a>
                                            </li>
                                            <li>
                                                <img src=\"assets/img/svg/glass.svg\" alt=\"entree\">
                                                <a href\"#\">Apéritif et buffet</a>
                                            </li>
                                            <li>
                                                <img src=\"assets/img/svg/glass.svg\" alt=\"entree\">
                                                <a href\"#\">Patisserie</a>
                                            </li>
                                            <li>
                                                <img src=\"assets/img/svg/glass.svg\" alt=\"entree\">
                                                <a href\"#\">Cocktails</a>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class=\"ingredient\">
                                        <h5 class=\"font-weight-bold text-dark m-3\">INGREDIENTS</h5>
                                        <ul class=\"list-unstyled\">
                                            <li>
                                                <img src=\"assets/img/svg/steak.svg\" alt=\"viande\">
                                                <a href=\"\">Viande</a>
                                            </li>
                                            <li>
                                                <img src=\"assets/img/svg/meat.svg\" alt=\"volailles\">
                                                <a href=\"\">Volailles</a>
                                            </li>
                                            <li>
                                                <img src=\"assets/img/svg/fish.svg\" alt=\"poisson\">
                                                <a href=\"\">Poissons</a>
                                            </li>
                                            <li>
                                                <img src=\"assets/img/svg/boiled-egg.svg\" alt=\"oeufs\">
                                                <a href=\"\">Oeufs</a>
                                            </li>
                                            <li>
                                                <img src=\"assets/img/svg/salad.svg\" alt=\"legumes\">
                                                <a href=\"\">Legumes</a>
                                            </li>
                                            <li>
                                                <img src=\"assets/img/svg/banana.svg\" alt=\"legumes\">
                                                <a href=\"\">Fruits</a>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class=\"diet\">
                                        <h5 class=\"font-weight-bold text-dark m-3\">DIET</h5>
                                        <ul class=\"list-unstyled\">
                                            <li>
                                                <a href=\"\">Vegetarien</a>
                                            </li>
                                            <li>
                                                <a href=\"\">Diabetique</a>
                                            </li>
                                            <li>
                                                <a href=\"\">Minceur</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
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
