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

/* user/index.html.twig */
class __TwigTemplate_aecc1f698786b91fa1c0e7a7b54e7e2d extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "user/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "user/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "user/index.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Hello UserController!";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "

";
        // line 8
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($context["posts"]);
        foreach ($context['_seq'] as $context["_key"] => $context["posts"]) {
            // line 9
            echo "
    <div class=\"col-md-4\">

        <div class=\"card\" style=\"width: 18rem;\">

            <div class=\"card-body\">
                <h5 class=\"card-title\">";
            // line 15
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["posts"], "title", [], "any", false, false, false, 15), "html", null, true);
            echo "</h5>
            </div>
            <ul class=\"list-group list-group-flush\">
                <li class=\"list-group-item\"> ";
            // line 18
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["posts"], "description", [], "any", false, false, false, 18), "html", null, true);
            echo "</li>
                ";
            // line 19
            if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) {
                // line 20
                echo "                <li class=\"list-group-item text-success btn\">aanpassen</li>
                <li class=\"list-group-item btn text-danger\"><a class=\"text-decoration-none text-danger\" href=\"#\">verwijder afspraak</a></li>
                ";
            }
            // line 23
            echo "            </ul>
        </div>

    </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['posts'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 28
        echo "
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-md-6\">
                ";
        // line 32
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_SPECIALIST")) {
            // line 33
            echo "                    <btn class=\"btn btn-primary\" ><a class=\"text-white text-decoration-none\" href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_make_appointment");
            echo "\"> maak een afspraak lil bro </a></btn>
                ";
        }
        // line 35
        echo "                ";
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) {
            // line 36
            echo "                    <btn class=\"btn mt-5 btn-primary\" ><a class=\"text-white text-decoration-none\" href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_make_appointment");
            echo "\"> maak een afspraak lil bro </a></btn>
                ";
        }
        // line 38
        echo "            </div>
        </div>
    </div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "user/index.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function isTraitable()
    {
        return false;
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo()
    {
        return array (  154 => 38,  148 => 36,  145 => 35,  139 => 33,  137 => 32,  131 => 28,  121 => 23,  116 => 20,  114 => 19,  110 => 18,  104 => 15,  96 => 9,  92 => 8,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Hello UserController!{% endblock %}

{% block body %}


{% for posts in posts %}

    <div class=\"col-md-4\">

        <div class=\"card\" style=\"width: 18rem;\">

            <div class=\"card-body\">
                <h5 class=\"card-title\">{{ posts.title }}</h5>
            </div>
            <ul class=\"list-group list-group-flush\">
                <li class=\"list-group-item\"> {{ posts.description }}</li>
                {% if is_granted(\"ROLE_ADMIN\") %}
                <li class=\"list-group-item text-success btn\">aanpassen</li>
                <li class=\"list-group-item btn text-danger\"><a class=\"text-decoration-none text-danger\" href=\"#\">verwijder afspraak</a></li>
                {% endif %}
            </ul>
        </div>

    </div>
    {% endfor %}

    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-md-6\">
                {% if is_granted(\"ROLE_SPECIALIST\") %}
                    <btn class=\"btn btn-primary\" ><a class=\"text-white text-decoration-none\" href=\"{{path('app_make_appointment')}}\"> maak een afspraak lil bro </a></btn>
                {% endif %}
                {% if is_granted(\"ROLE_ADMIN\") %}
                    <btn class=\"btn mt-5 btn-primary\" ><a class=\"text-white text-decoration-none\" href=\"{{path('app_make_appointment')}}\"> maak een afspraak lil bro </a></btn>
                {% endif %}
            </div>
        </div>
    </div>
{% endblock %}


", "user/index.html.twig", "C:\\xampp\\htdocs\\examen-oefeningen\\templates\\user\\index.html.twig");
    }
}
