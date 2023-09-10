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

/* admin/admin.voyages.html.twig */
class __TwigTemplate_1e01a73b9c3ce73495f07811e63bf00c3a613341763b7f101b35a244c1c08e92 extends Template
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
        return "baseadmin.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/admin.voyages.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/admin.voyages.html.twig"));

        $this->parent = $this->loadTemplate("baseadmin.html.twig", "admin/admin.voyages.html.twig", 1);
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
        echo "
    <p class=\"text-end\">
        <a href=\"";
        // line 6
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin.voyage.ajout");
        echo "\" class=\"btn btn-primary\">
            Ajouter une nouvelle visite
        </a>
    </p>  

    <table class=\"table table-striped\">
        <thead>
            <tr>
                <th>
                    Ville
                </th>
                <th>
                    Pays
                </th>
                <th>
                    Date
                </th>
                <th>
                    Actions
                </th>
            </tr>
        </thead>
        <tbody>
            ";
        // line 29
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["visites"]) || array_key_exists("visites", $context) ? $context["visites"] : (function () { throw new RuntimeError('Variable "visites" does not exist.', 29, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["visite"]) {
            // line 30
            echo "                <tr>
                    <td>
                        <h5 class=\"text-primary\">
                            ";
            // line 33
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["visite"], "ville", [], "any", false, false, false, 33), "html", null, true);
            echo "
                        </h5>
                    </td>
                    <td>
                        ";
            // line 37
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["visite"], "pays", [], "any", false, false, false, 37), "html", null, true);
            echo "
                    </td>
                    <td>
                        ";
            // line 40
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["visite"], "datecreationstring", [], "any", false, false, false, 40), "html", null, true);
            echo "
                    </td>
                    <td>
                        <a href=\"";
            // line 43
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin.voyage.edit", ["id" => twig_get_attribute($this->env, $this->source, $context["visite"], "id", [], "any", false, false, false, 43)]), "html", null, true);
            echo "\" class=\"btn btn-secondary\">Editer</a>
                        <a href=\"";
            // line 44
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin.voyage.suppr", ["id" => twig_get_attribute($this->env, $this->source, $context["visite"], "id", [], "any", false, false, false, 44)]), "html", null, true);
            echo "\" class=\"btn btn-danger\" onclick=\"return confirm('Etes-vous sûr de vouloir supprimer ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["visite"], "ville", [], "any", false, false, false, 44), "html", null, true);
            echo " ?')\">Supprimer</a>
                    </td>
                </tr>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['visite'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 48
        echo "        </tbody>
    </table>


";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "admin/admin.voyages.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  142 => 48,  130 => 44,  126 => 43,  120 => 40,  114 => 37,  107 => 33,  102 => 30,  98 => 29,  72 => 6,  68 => 4,  58 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"baseadmin.html.twig\" %}

{% block body %}

    <p class=\"text-end\">
        <a href=\"{{ path('admin.voyage.ajout') }}\" class=\"btn btn-primary\">
            Ajouter une nouvelle visite
        </a>
    </p>  

    <table class=\"table table-striped\">
        <thead>
            <tr>
                <th>
                    Ville
                </th>
                <th>
                    Pays
                </th>
                <th>
                    Date
                </th>
                <th>
                    Actions
                </th>
            </tr>
        </thead>
        <tbody>
            {% for visite in visites %}
                <tr>
                    <td>
                        <h5 class=\"text-primary\">
                            {{ visite.ville }}
                        </h5>
                    </td>
                    <td>
                        {{ visite.pays }}
                    </td>
                    <td>
                        {{ visite.datecreationstring }}
                    </td>
                    <td>
                        <a href=\"{{ path('admin.voyage.edit', {id:visite.id}) }}\" class=\"btn btn-secondary\">Editer</a>
                        <a href=\"{{ path('admin.voyage.suppr', {id:visite.id}) }}\" class=\"btn btn-danger\" onclick=\"return confirm('Etes-vous sûr de vouloir supprimer {{ visite.ville }} ?')\">Supprimer</a>
                    </td>
                </tr>
            {% endfor %}
        </tbody>
    </table>


{% endblock %}", "admin/admin.voyages.html.twig", "C:\\wamp64\\www\\mesvoyages\\templates\\admin\\admin.voyages.html.twig");
    }
}
