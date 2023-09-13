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
class __TwigTemplate_a6531f091441deeaffd99c6413fed4db33368744b75d04a97f0d7db19be33f44 extends Template
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
        if ((0 <= twig_compare(twig_get_attribute($this->env, $this->source, (isset($context["visite"]) || array_key_exists("visite", $context) ? $context["visite"] : (function () { throw new RuntimeError('Variable "visite" does not exist.', 9, $this->source); })()), "note", [], "any", false, false, false, 9), 10))) {
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
            <p class=\"mt-5\"><strong>Environnements :</strong></p>
            ";
        // line 16
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["visite"]) || array_key_exists("visite", $context) ? $context["visite"] : (function () { throw new RuntimeError('Variable "visite" does not exist.', 16, $this->source); })()), "environnements", [], "any", false, false, false, 16));
        foreach ($context['_seq'] as $context["_key"] => $context["environnement"]) {
            // line 17
            echo "                ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["environnement"], "nom", [], "any", false, false, false, 17), "html", null, true);
            echo "
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['environnement'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 19
        echo "        </div>
        <div class=\"col\">
        <!-- emplacement photo -->   
            <div>
                ";
        // line 23
        if (twig_get_attribute($this->env, $this->source, (isset($context["visite"]) || array_key_exists("visite", $context) ? $context["visite"] : (function () { throw new RuntimeError('Variable "visite" does not exist.', 23, $this->source); })()), "imagename", [], "any", false, false, false, 23)) {
            // line 24
            echo "                    <img src=\"";
            echo twig_escape_filter($this->env, (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 24, $this->source); })()), "request", [], "any", false, false, false, 24), "getBasePath", [], "method", false, false, false, 24) . $this->extensions['Vich\UploaderBundle\Twig\Extension\UploaderExtension']->asset((isset($context["visite"]) || array_key_exists("visite", $context) ? $context["visite"] : (function () { throw new RuntimeError('Variable "visite" does not exist.', 24, $this->source); })()), "imageFile")), "html", null, true);
            echo "\"
                         class=\"card-img-top\" style=\"width:100%;height:auto;\">
                ";
        } else {
            // line 27
            echo "                    <p>(aucune image)</p>
                ";
        }
        // line 28
        echo "            
            </div  
    </div>
    <div class=\"row mt-5\">
        <div class=\"col md-12\">
            <p><strong>mon avis : </strong></p>
            <p>
            ";
        // line 35
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["visite"]) || array_key_exists("visite", $context) ? $context["visite"] : (function () { throw new RuntimeError('Variable "visite" does not exist.', 35, $this->source); })()), "avis", [], "any", false, false, false, 35), "html", null, true);
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
        return array (  147 => 35,  138 => 28,  134 => 27,  127 => 24,  125 => 23,  119 => 19,  110 => 17,  106 => 16,  98 => 14,  92 => 12,  86 => 10,  84 => 9,  80 => 8,  76 => 7,  72 => 6,  68 => 4,  58 => 3,  35 => 1,);
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
            <p class=\"mt-5\"><strong>Environnements :</strong></p>
            {% for environnement in visite.environnements %}
                {{ environnement.nom }}
            {% endfor %}
        </div>
        <div class=\"col\">
        <!-- emplacement photo -->   
            <div>
                {% if visite.imagename %}
                    <img src=\"{{ app.request.getBasePath()~vich_uploader_asset(visite, 'imageFile') }}\"
                         class=\"card-img-top\" style=\"width:100%;height:auto;\">
                {% else %}
                    <p>(aucune image)</p>
                {% endif %}            
            </div  
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
