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
        echo "



   <div class=\"container\">
       <div class=\"row\">
           <div class=\"col-md-12\">
               <h1 class=\"page-header\">
                   hello ";
        // line 14
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 14, $this->source); })()), "user", [], "any", false, false, false, 14), "firstname", [], "any", false, false, false, 14), "html", null, true);
        echo "  ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 14, $this->source); })()), "user", [], "any", false, false, false, 14), "lastname", [], "any", false, false, false, 14), "html", null, true);
        echo "
               </h1>
           </div>
           <div class=\"col-md-12\">
               <h1  class=\"fs-6 page-header\">
                   your appointments:
               </h1>

           </div>


           <div class=\"container\">
               <div class=\"row\">
                   ";
        // line 27
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($context["appointmentSpecialists"]);
        foreach ($context['_seq'] as $context["_key"] => $context["appointmentSpecialists"]) {
            // line 28
            echo "                       <div class=\"col-md-4\">

                           <div class=\"card\" style=\"width: 18rem;\">

                               <div class=\"card-body\">
                                   <h5 class=\"card-title\">";
            // line 33
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["appointmentSpecialists"], "user", [], "any", false, false, false, 33), "firstname", [], "any", false, false, false, 33), "html", null, true);
            echo "</h5>
                                   <h5 class=\"card-title\">";
            // line 34
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["appointmentSpecialists"], "subject", [], "any", false, false, false, 34), "html", null, true);
            echo "</h5>
                                   <p class=\"card-text\">";
            // line 35
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["appointmentSpecialists"], "problems", [], "any", false, false, false, 35), "html", null, true);
            echo ".</p>
                               </div>
                               <ul class=\"list-group list-group-flush\">
                                   <li class=\"list-group-item\">Datum: ";
            // line 38
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["appointmentSpecialists"], "date", [], "any", false, false, false, 38), "html", null, true);
            echo "</li>
                                   <li class=\"list-group-item\">Tijd: ";
            // line 39
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["appointmentSpecialists"], "time", [], "any", false, false, false, 39), "H:i"), "html", null, true);
            echo "</li>
                                   <li class=\"list-group-item\">Besproken: ";
            // line 40
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["appointmentSpecialists"], "discussed", [], "any", false, false, false, 40), "html", null, true);
            echo "</li>
                                   <li class=\"list-group-item\">Specialist: ";
            // line 41
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["appointmentSpecialists"], "specialist", [], "any", false, false, false, 41), "firstname", [], "any", false, false, false, 41), "html", null, true);
            echo "</li>
                                   <li class=\"list-group-item text-success btn\">aanpassen</li>
                                   <li class=\"list-group-item btn text-danger\"><a class=\"text-decoration-none text-danger\" href=\"";
            // line 43
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_appointment_delete", ["id" => twig_get_attribute($this->env, $this->source, $context["appointmentSpecialists"], "id", [], "any", false, false, false, 43)]), "html", null, true);
            echo "\">verwijder afspraak</a></li>
                               </ul>
                           </div>

                       </div>
                   ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['appointmentSpecialists'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 49
        echo "               </div>
           </div>


           <div class=\"col-md-12\">
               ";
        // line 54
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($context["appointments"]);
        foreach ($context['_seq'] as $context["_key"] => $context["appointments"]) {
            // line 55
            echo "               <div class=\"card\" style=\"width: 18rem;\">

                   <div class=\"card-body\">
                       <h5 class=\"card-title\">";
            // line 58
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["appointments"], "user", [], "any", false, false, false, 58), "firstname", [], "any", false, false, false, 58), "html", null, true);
            echo "</h5>
                       <h5 class=\"card-title\">";
            // line 59
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["appointments"], "subject", [], "any", false, false, false, 59), "html", null, true);
            echo "</h5>
                       <p class=\"card-text\">";
            // line 60
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["appointments"], "problems", [], "any", false, false, false, 60), "html", null, true);
            echo ".</p>
                   </div>
                   <ul class=\"list-group list-group-flush\">
                       <li class=\"list-group-item\">Datum: ";
            // line 63
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["appointments"], "date", [], "any", false, false, false, 63), "html", null, true);
            echo "</li>
                       <li class=\"list-group-item\">Tijd: ";
            // line 64
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["appointments"], "time", [], "any", false, false, false, 64), "H:i"), "html", null, true);
            echo "</li>
                       <li class=\"list-group-item\">Besproken: ";
            // line 65
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["appointments"], "discussed", [], "any", false, false, false, 65), "html", null, true);
            echo "</li>
                       <li class=\"list-group-item\">Specialist: ";
            // line 66
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["appointments"], "specialist", [], "any", false, false, false, 66), "firstname", [], "any", false, false, false, 66), "html", null, true);
            echo "</li>
                   </ul>
               </div>
               ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['appointments'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 70
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
        return array (  202 => 70,  192 => 66,  188 => 65,  184 => 64,  180 => 63,  174 => 60,  170 => 59,  166 => 58,  161 => 55,  157 => 54,  150 => 49,  138 => 43,  133 => 41,  129 => 40,  125 => 39,  121 => 38,  115 => 35,  111 => 34,  107 => 33,  100 => 28,  96 => 27,  78 => 14,  68 => 6,  58 => 5,  35 => 1,);
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


           <div class=\"container\">
               <div class=\"row\">
                   {% for appointmentSpecialists in appointmentSpecialists %}
                       <div class=\"col-md-4\">

                           <div class=\"card\" style=\"width: 18rem;\">

                               <div class=\"card-body\">
                                   <h5 class=\"card-title\">{{ appointmentSpecialists.user.firstname }}</h5>
                                   <h5 class=\"card-title\">{{ appointmentSpecialists.subject }}</h5>
                                   <p class=\"card-text\">{{ appointmentSpecialists.problems }}.</p>
                               </div>
                               <ul class=\"list-group list-group-flush\">
                                   <li class=\"list-group-item\">Datum: {{ appointmentSpecialists.date }}</li>
                                   <li class=\"list-group-item\">Tijd: {{ appointmentSpecialists.time|date('H:i')}}</li>
                                   <li class=\"list-group-item\">Besproken: {{ appointmentSpecialists.discussed }}</li>
                                   <li class=\"list-group-item\">Specialist: {{ appointmentSpecialists.specialist.firstname }}</li>
                                   <li class=\"list-group-item text-success btn\">aanpassen</li>
                                   <li class=\"list-group-item btn text-danger\"><a class=\"text-decoration-none text-danger\" href=\"{{ path('app_appointment_delete', {id: appointmentSpecialists.id}) }}\">verwijder afspraak</a></li>
                               </ul>
                           </div>

                       </div>
                   {% endfor %}
               </div>
           </div>


           <div class=\"col-md-12\">
               {% for appointments in appointments %}
               <div class=\"card\" style=\"width: 18rem;\">

                   <div class=\"card-body\">
                       <h5 class=\"card-title\">{{ appointments.user.firstname }}</h5>
                       <h5 class=\"card-title\">{{ appointments.subject }}</h5>
                       <p class=\"card-text\">{{ appointments.problems }}.</p>
                   </div>
                   <ul class=\"list-group list-group-flush\">
                       <li class=\"list-group-item\">Datum: {{ appointments.date }}</li>
                       <li class=\"list-group-item\">Tijd: {{ appointments.time|date('H:i')}}</li>
                       <li class=\"list-group-item\">Besproken: {{ appointments.discussed }}</li>
                       <li class=\"list-group-item\">Specialist: {{ appointments.specialist.firstname }}</li>
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
