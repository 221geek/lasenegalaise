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

/* contact/contact.html.twig */
class __TwigTemplate_58b625ac9bf45b1c3f5377d7ff8e3bf7c980c62b3dcbb7a5c9b003ebd336cba1 extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "contact/contact.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "contact/contact.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "contact/contact.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Contactez nous";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "
    <div class=\"bannercontact d-flex flex-column align-items-center\">
        <h2 class=\"font-weight-bold text-white mt-4\">Contact</h2>
    </div>

    <div class=\"container mb-5\">
        <div id=\"maps\">
            <div id=\"contact\" class=\"d-flex justify-content-between text-center flex-wrap\">
                <div>
                    <em class=\"fa fa-phone\"></em>
                    <h5 class=\"text-dark font-weight-bold m-3\">Téléphone</h5>
                    <p>+221 77 155 49 53</p>
                </div>
                <div>
                    <em class=\"fa fa-envelope\"></em>
                    <h5 class=\"text-dark font-weight-bold m-3\">Email</h5>
                    <p>lasenegalaise@contact.com</p>
                </div>
                <div>
                    <em class=\"fa fa-map-marker-alt\"></em>
                    <h5 class=\"text-dark font-weight-bold m-3\">Adresse</h5>
                    <p>xxxxxxx xxx xxxxxx</p>
                </div>
                <div>
                    <em class=\"fa fa-clock\"></em>
                    <h5 class=\"text-dark font-weight-bold m-3\">Horaire</h5>
                    <p>Ouvert de 8h00 a 00h00</p>
                </div>
            </div>
            <div class=\"mt-4\">
                <iframe src=\"https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d3807.8988522043!2d-17.43663454881465!3d14.660926900700009!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2ssn!4v1574377731196!5m2!1sen!2ssn\" width=\"100%\" height=\"550px\" frameborder=\"0\" style=\"border:0;\" allowfullscreen=\"\"></iframe>
            </div>
        </div>
        <div id=\"contactform\">
            <h2 class=\"text-center font-weight-bold text-dark mt-5 mb-5\">Nous contacter</h2>
            ";
        // line 41
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 41, $this->source); })()), "flashes", [0 => "success"], "method", false, false, false, 41));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 42
            echo "                <div class=\"alert alert-success\">
                    ";
            // line 43
            echo twig_escape_filter($this->env, $context["message"], "html", null, true);
            echo "
                </div>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 46
        echo "
            ";
        // line 47
        if ( !twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 47, $this->source); })()), "vars", [], "any", false, false, false, 47), "valid", [], "any", false, false, false, 47)) {
            // line 48
            echo "                <div class=\"alert alert-danger\">
                    Les informations saisient ne ont pas correctes. Veillez reverifier
                </div>
            ";
        }
        // line 52
        echo "            
            
            ";
        // line 54
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 54, $this->source); })()), 'form_start');
        echo "
                <div class=\"form-row\">
                    <div class=\"col form-group\">";
        // line 56
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 56, $this->source); })()), "firstname", [], "any", false, false, false, 56), 'row', ["label" => "Prenom", "attr" => ["class" => "form-control"]]);
        echo "</div>
                    <div class=\"col form-group\">";
        // line 57
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 57, $this->source); })()), "lastname", [], "any", false, false, false, 57), 'row', ["label" => "Nom", "attr" => ["class" => "form-control"]]);
        echo "</div>
                </div>
                <div class=\"form-row\">
                    <div class=\"col form-group\">";
        // line 60
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 60, $this->source); })()), "telephone", [], "any", false, false, false, 60), 'row', ["label" => "Numero de telephone", "attr" => ["class" => "form-control"]]);
        echo "</div>
                    <div class=\"col form-group\">";
        // line 61
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 61, $this->source); })()), "email", [], "any", false, false, false, 61), 'row', ["label" => "Adresse email", "attr" => ["class" => "form-control"]]);
        echo "</div>
                </div>
                <div class=\"row\">
                    <div class=\"col form-group\">";
        // line 64
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 64, $this->source); })()), "message", [], "any", false, false, false, 64), 'row', ["label" => "Votre message", "attr" => ["class" => "form-control"]]);
        echo "</div>
                </div>
                <div class=\"form-group\">
                    <button class=\"btn btn-outline-primary\">Envoyer</button>
                </div>
            ";
        // line 69
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 69, $this->source); })()), 'form_end');
        echo "
        </div>
    </div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "contact/contact.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  189 => 69,  181 => 64,  175 => 61,  171 => 60,  165 => 57,  161 => 56,  156 => 54,  152 => 52,  146 => 48,  144 => 47,  141 => 46,  132 => 43,  129 => 42,  125 => 41,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Contactez nous{% endblock %}

{% block body %}

    <div class=\"bannercontact d-flex flex-column align-items-center\">
        <h2 class=\"font-weight-bold text-white mt-4\">Contact</h2>
    </div>

    <div class=\"container mb-5\">
        <div id=\"maps\">
            <div id=\"contact\" class=\"d-flex justify-content-between text-center flex-wrap\">
                <div>
                    <em class=\"fa fa-phone\"></em>
                    <h5 class=\"text-dark font-weight-bold m-3\">Téléphone</h5>
                    <p>+221 77 155 49 53</p>
                </div>
                <div>
                    <em class=\"fa fa-envelope\"></em>
                    <h5 class=\"text-dark font-weight-bold m-3\">Email</h5>
                    <p>lasenegalaise@contact.com</p>
                </div>
                <div>
                    <em class=\"fa fa-map-marker-alt\"></em>
                    <h5 class=\"text-dark font-weight-bold m-3\">Adresse</h5>
                    <p>xxxxxxx xxx xxxxxx</p>
                </div>
                <div>
                    <em class=\"fa fa-clock\"></em>
                    <h5 class=\"text-dark font-weight-bold m-3\">Horaire</h5>
                    <p>Ouvert de 8h00 a 00h00</p>
                </div>
            </div>
            <div class=\"mt-4\">
                <iframe src=\"https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d3807.8988522043!2d-17.43663454881465!3d14.660926900700009!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2ssn!4v1574377731196!5m2!1sen!2ssn\" width=\"100%\" height=\"550px\" frameborder=\"0\" style=\"border:0;\" allowfullscreen=\"\"></iframe>
            </div>
        </div>
        <div id=\"contactform\">
            <h2 class=\"text-center font-weight-bold text-dark mt-5 mb-5\">Nous contacter</h2>
            {% for message in app.flashes('success') %}
                <div class=\"alert alert-success\">
                    {{ message }}
                </div>
            {% endfor %}

            {% if not form.vars.valid %}
                <div class=\"alert alert-danger\">
                    Les informations saisient ne ont pas correctes. Veillez reverifier
                </div>
            {% endif %}
            
            
            {{ form_start(form) }}
                <div class=\"form-row\">
                    <div class=\"col form-group\">{{ form_row(form.firstname, {'label': 'Prenom', 'attr': {'class': 'form-control'}}) }}</div>
                    <div class=\"col form-group\">{{ form_row(form.lastname, {'label': 'Nom', 'attr': {'class': 'form-control'}}) }}</div>
                </div>
                <div class=\"form-row\">
                    <div class=\"col form-group\">{{ form_row(form.telephone, {'label': 'Numero de telephone', 'attr': {'class': 'form-control'}}) }}</div>
                    <div class=\"col form-group\">{{ form_row(form.email, {'label': 'Adresse email', 'attr': {'class': 'form-control'}}) }}</div>
                </div>
                <div class=\"row\">
                    <div class=\"col form-group\">{{ form_row(form.message, {'label': 'Votre message', 'attr': {'class': 'form-control'}}) }}</div>
                </div>
                <div class=\"form-group\">
                    <button class=\"btn btn-outline-primary\">Envoyer</button>
                </div>
            {{ form_end(form) }}
        </div>
    </div>
{% endblock %}
", "contact/contact.html.twig", "/var/www/html/resto/templates/contact/contact.html.twig");
    }
}
