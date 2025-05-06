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

/* user/user.html.twig */
class __TwigTemplate_467606268cfaaaeca198d1a8f0b7ac72 extends Template
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
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "user/user.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "user/user.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "user/user.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

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
        echo "   <div class=\"container\">
       <div class=\"row\">
           <div class=\"col-md-12\">
               <h1 class=\"page-header\">
                   hello ";
        // line 10
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 10, $this->source); })()), "user", [], "any", false, false, false, 10), "firstname", [], "any", false, false, false, 10), "html", null, true);
        echo "  ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 10, $this->source); })()), "user", [], "any", false, false, false, 10), "lastname", [], "any", false, false, false, 10), "html", null, true);
        echo "
               </h1>
           </div>
           <div class=\"col-md-12\">
               <h1  class=\"fs-6 page-header\">
                   your appointments:
               </h1>

           </div>

           <div class=\"col-md-12\">
               ";
        // line 21
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($context["appointments"]);
        foreach ($context['_seq'] as $context["_key"] => $context["appointments"]) {
            // line 22
            echo "               <div class=\"card\" style=\"width: 18rem;\">

                   <div class=\"card-body\">
                       <h5 class=\"card-title\">";
            // line 25
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["appointments"], "subject", [], "any", false, false, false, 25), "html", null, true);
            echo "</h5>
                       <p class=\"card-text\">";
            // line 26
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["appointments"], "problems", [], "any", false, false, false, 26), "html", null, true);
            echo ".</p>
                   </div>
                   <ul class=\"list-group list-group-flush\">
                       <li class=\"list-group-item\">Datum: ";
            // line 29
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["appointments"], "date", [], "any", false, false, false, 29), "html", null, true);
            echo "</li>
                       <li class=\"list-group-item\">Tijd: ";
            // line 30
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["appointments"], "time", [], "any", false, false, false, 30), "H:i"), "html", null, true);
            echo "</li>
                       <li class=\"list-group-item\">Besproken: ";
            // line 31
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["appointments"], "discussed", [], "any", false, false, false, 31), "html", null, true);
            echo "</li>
                   </ul>
               </div>
               ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['appointments'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 35
        echo "           </div>
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
        return "user/user.html.twig";
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
        return array (  127 => 35,  117 => 31,  113 => 30,  109 => 29,  103 => 26,  99 => 25,  94 => 22,  90 => 21,  74 => 10,  68 => 6,  58 => 5,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}



{% block body %}
   <div class=\"container\">
       <div class=\"row\">
           <div class=\"col-md-12\">
               <h1 class=\"page-header\">
                   hello {{ app.user.firstname}}  {{ app.user.lastname }}
               </h1>
           </div>
           <div class=\"col-md-12\">
               <h1  class=\"fs-6 page-header\">
                   your appointments:
               </h1>

           </div>

           <div class=\"col-md-12\">
               {% for appointments in appointments %}
               <div class=\"card\" style=\"width: 18rem;\">

                   <div class=\"card-body\">
                       <h5 class=\"card-title\">{{ appointments.subject }}</h5>
                       <p class=\"card-text\">{{ appointments.problems }}.</p>
                   </div>
                   <ul class=\"list-group list-group-flush\">
                       <li class=\"list-group-item\">Datum: {{ appointments.date }}</li>
                       <li class=\"list-group-item\">Tijd: {{ appointments.time|date('H:i')}}</li>
                       <li class=\"list-group-item\">Besproken: {{ appointments.discussed }}</li>
                   </ul>
               </div>
               {% endfor %}
           </div>
       </div>
   </div>
{% endblock %}
", "user/user.html.twig", "C:\\xampp\\htdocs\\examen-oefeningen\\templates\\user\\user.html.twig");
    }
}
