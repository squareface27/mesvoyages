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

/* pages/voyages/voyage.html.twig */
class __TwigTemplate_2ec827d8af34b437cf1a948b718e8e519f60fd702cb197eb7efff1e7cca51d94 extends Template
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
        return "basefront.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "pages/voyages/voyage.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "pages/voyages/voyage.html.twig"));

        $this->parent = $this->loadTemplate("basefront.html.twig", "pages/voyages/voyage.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <div class=\"row mt-3\">
        <div class=\"col\">
            <h5>";
        // line 6
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["visite"]) || array_key_exists("visite", $context) ? $context["visite"] : (function () { throw new RuntimeError('Variable "visite" does not exist.', 6, $this->source); })()), "datecreationstring", [], "any", false, false, false, 6), "html", null, true);
        echo "</h5>
            <h1 class=\"text-primary mt-5\">";
        // line 7
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["visite"]) || array_key_exists("visite", $context) ? $context["visite"] : (function () { throw new RuntimeError('Variable "visite" does not exist.', 7, $this->source); })()), "ville", [], "any", false, false, false, 7), "html", null, true);
        echo "</h1>
            <h3>";
        // line 8
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["visite"]) || array_key_exists("visite", $context) ? $context["visite"] : (function () { throw new RuntimeError('Variable "visite" does not exist.', 8, $this->source); })()), "pays", [], "any", false, false, false, 8), "html", null, true);
        echo "</h3>
            ";
        // line 9
        if ((twig_get_attribute($this->env, $this->source, (isset($context["visite"]) || array_key_exists("visite", $context) ? $context["visite"] : (function () { throw new RuntimeError('Variable "visite" does not exist.', 9, $this->source); })()), "note", [], "any", false, false, false, 9) >= 10)) {
            // line 10
            echo "                <h2 class=\"text-success mt-5\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["visite"]) || array_key_exists("visite", $context) ? $context["visite"] : (function () { throw new RuntimeError('Variable "visite" does not exist.', 10, $this->source); })()), "note", [], "any", false, false, false, 10), "html", null, true);
            echo "/20</h2>
            ";
        } else {
            // line 12
            echo "                <h2 class=\"text-danger mt-5\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["visite"]) || array_key_exists("visite", $context) ? $context["visite"] : (function () { throw new RuntimeError('Variable "visite" does not exist.', 12, $this->source); })()), "note", [], "any", false, false, false, 12), "html", null, true);
            echo "/20</h2>
            ";
        }
        // line 14
        echo "            <h5 class=\"mt-5\">t° entre ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["visite"]) || array_key_exists("visite", $context) ? $context["visite"] : (function () { throw new RuntimeError('Variable "visite" does not exist.', 14, $this->source); })()), "tempmin", [], "any", false, false, false, 14), "html", null, true);
        echo " et ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["visite"]) || array_key_exists("visite", $context) ? $context["visite"] : (function () { throw new RuntimeError('Variable "visite" does not exist.', 14, $this->source); })()), "tempmax", [], "any", false, false, false, 14), "html", null, true);
        echo "°</h5>
        </div>
        <div class=\"col\">
        <!-- Emplacement photo -->
        </div>
    </div>
    <div class=\"row mt-5\">
        <div class=\"col md-12\">
            <p><strong>mon avis : </strong></p>
            <p>
            ";
        // line 24
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["visite"]) || array_key_exists("visite", $context) ? $context["visite"] : (function () { throw new RuntimeError('Variable "visite" does not exist.', 24, $this->source); })()), "avis", [], "any", false, false, false, 24), "html", null, true);
        echo "
            </p>
        </div>
    </div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "pages/voyages/voyage.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  114 => 24,  98 => 14,  92 => 12,  86 => 10,  84 => 9,  80 => 8,  76 => 7,  72 => 6,  68 => 4,  58 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"basefront.html.twig\" %}

{% block body %}
    <div class=\"row mt-3\">
        <div class=\"col\">
            <h5>{{ visite.datecreationstring }}</h5>
            <h1 class=\"text-primary mt-5\">{{ visite.ville }}</h1>
            <h3>{{ visite.pays }}</h3>
            {% if visite.note>=10 %}
                <h2 class=\"text-success mt-5\">{{ visite.note }}/20</h2>
            {% else %}
                <h2 class=\"text-danger mt-5\">{{ visite.note }}/20</h2>
            {% endif %}
            <h5 class=\"mt-5\">t° entre {{ visite.tempmin }} et {{ visite.tempmax }}°</h5>
        </div>
        <div class=\"col\">
        <!-- Emplacement photo -->
        </div>
    </div>
    <div class=\"row mt-5\">
        <div class=\"col md-12\">
            <p><strong>mon avis : </strong></p>
            <p>
            {{ visite.avis }}
            </p>
        </div>
    </div>
{% endblock %}", "pages/voyages/voyage.html.twig", "C:\\wamp64\\www\\mesvoyages\\templates\\pages\\voyages\\voyage.html.twig");
    }
}