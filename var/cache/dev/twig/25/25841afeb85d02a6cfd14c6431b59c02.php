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

/* user/allappointments.html.twig */
class __TwigTemplate_169891ca335b7e82e09bda1cc1e31971 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "user/allappointments.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "user/allappointments.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "user/allappointments.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "
<div><h1> alle afspraken</h1> </div>

    <div class=\"container\">

        <div class=\"row\">
            ";
        // line 10
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($context["appointments"]);
        foreach ($context['_seq'] as $context["_key"] => $context["appointments"]) {
            // line 11
            echo "            <div class=\"col-md-4\">

                    <div class=\"card\" style=\"width: 18rem;\">

                        <div class=\"card-body\">
                            <h5 class=\"card-title\">";
            // line 16
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["appointments"], "subject", [], "any", false, false, false, 16), "html", null, true);
            echo "</h5>
                            <p class=\"card-text\">";
            // line 17
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["appointments"], "problems", [], "any", false, false, false, 17), "html", null, true);
            echo ".</p>
                        </div>
                        <ul class=\"list-group list-group-flush\">
                            <li class=\"list-group-item\">Datum: ";
            // line 20
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["appointments"], "date", [], "any", false, false, false, 20), "html", null, true);
            echo "</li>
                            <li class=\"list-group-item\">Tijd: ";
            // line 21
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["appointments"], "time", [], "any", false, false, false, 21), "H:i"), "html", null, true);
            echo "</li>
                            <li class=\"list-group-item\">Besproken: ";
            // line 22
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["appointments"], "discussed", [], "any", false, false, false, 22), "html", null, true);
            echo "</li>
                            <li class=\"list-group-item text-success btn\">aanpassen</li>
                            <li class=\"list-group-item btn text-danger\"><a class=\"text-decoration-none text-danger\" href=\"";
            // line 24
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_appointment_delete", ["id" => twig_get_attribute($this->env, $this->source, $context["appointments"], "id", [], "any", false, false, false, 24)]), "html", null, true);
            echo "\">verwijder afspraak</a></li>
                        </ul>
                    </div>

            </div>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['appointments'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 30
        echo "        </div>

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
        return "user/allappointments.html.twig";
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
        return array (  122 => 30,  110 => 24,  105 => 22,  101 => 21,  97 => 20,  91 => 17,  87 => 16,  80 => 11,  76 => 10,  68 => 4,  58 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block body %}

<div><h1> alle afspraken</h1> </div>

    <div class=\"container\">

        <div class=\"row\">
            {% for appointments in appointments %}
            <div class=\"col-md-4\">

                    <div class=\"card\" style=\"width: 18rem;\">

                        <div class=\"card-body\">
                            <h5 class=\"card-title\">{{ appointments.subject }}</h5>
                            <p class=\"card-text\">{{ appointments.problems }}.</p>
                        </div>
                        <ul class=\"list-group list-group-flush\">
                            <li class=\"list-group-item\">Datum: {{ appointments.date }}</li>
                            <li class=\"list-group-item\">Tijd: {{ appointments.time|date('H:i')}}</li>
                            <li class=\"list-group-item\">Besproken: {{ appointments.discussed }}</li>
                            <li class=\"list-group-item text-success btn\">aanpassen</li>
                            <li class=\"list-group-item btn text-danger\"><a class=\"text-decoration-none text-danger\" href=\"{{ path('app_appointment_delete', {id: appointments.id}) }}\">verwijder afspraak</a></li>
                        </ul>
                    </div>

            </div>
            {% endfor %}
        </div>

    </div>


{% endblock %}", "user/allappointments.html.twig", "C:\\xampp\\htdocs\\examen-oefeningen\\templates\\user\\allappointments.html.twig");
    }
}
