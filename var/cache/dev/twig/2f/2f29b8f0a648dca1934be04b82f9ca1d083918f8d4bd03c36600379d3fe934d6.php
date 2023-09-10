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

/* admin/admin.environnements.html.twig */
class __TwigTemplate_d12d80bc617f472e0f2f705b1845a2d5c95c07e348bb26f7f286abb22f3815aa extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/admin.environnements.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/admin.environnements.html.twig"));

        $this->parent = $this->loadTemplate("baseadmin.html.twig", "admin/admin.environnements.html.twig", 1);
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
    <form class=\"form-inline mt-1\" method=\"POST\" action=\"";
        // line 5
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin.environnement.ajout");
        echo "\">
        <div class=\"form-group mr-1 mb-2\">
            <input type=\"text\" class=\"sm\" name=\"nom\">
            <button type=\"submit\" class=\"btn btn-primary mb-2 btn-sm\">Ajouter</button>
        </div>
    </form>       
    <table class=\"table table-striped\">
        <thead>
            <tr>
                <th>
                    Nom
                </th>
                <th>
                    Actions
                </th>
            </tr>
        </thead>
        <tbody>
            ";
        // line 23
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["environnements"]) || array_key_exists("environnements", $context) ? $context["environnements"] : (function () { throw new RuntimeError('Variable "environnements" does not exist.', 23, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["environnement"]) {
            // line 24
            echo "                <tr>
                    <td>
                        ";
            // line 26
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["environnement"], "nom", [], "any", false, false, false, 26), "html", null, true);
            echo "
                    </td>
                    <td>
                        <a href=\"";
            // line 29
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin.environnement.suppr", ["id" => twig_get_attribute($this->env, $this->source, $context["environnement"], "id", [], "any", false, false, false, 29)]), "html", null, true);
            echo "\" 
                           class=\"btn btn-danger\" 
                           onclick=\"return confirm('Etes-vous sûr de vouloir supprimer ";
            // line 31
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["environnement"], "nom", [], "any", false, false, false, 31), "html", null, true);
            echo " ?')\">
                            Supprimer
                        </a>
                    </td>
                </tr>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['environnement'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 37
        echo "        </tbody>
    </table>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "admin/admin.environnements.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  123 => 37,  111 => 31,  106 => 29,  100 => 26,  96 => 24,  92 => 23,  71 => 5,  68 => 4,  58 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"baseadmin.html.twig\" %}

{% block body %}

    <form class=\"form-inline mt-1\" method=\"POST\" action=\"{{ path('admin.environnement.ajout') }}\">
        <div class=\"form-group mr-1 mb-2\">
            <input type=\"text\" class=\"sm\" name=\"nom\">
            <button type=\"submit\" class=\"btn btn-primary mb-2 btn-sm\">Ajouter</button>
        </div>
    </form>       
    <table class=\"table table-striped\">
        <thead>
            <tr>
                <th>
                    Nom
                </th>
                <th>
                    Actions
                </th>
            </tr>
        </thead>
        <tbody>
            {% for environnement in environnements %}
                <tr>
                    <td>
                        {{ environnement.nom }}
                    </td>
                    <td>
                        <a href=\"{{ path('admin.environnement.suppr', {id:environnement.id}) }}\" 
                           class=\"btn btn-danger\" 
                           onclick=\"return confirm('Etes-vous sûr de vouloir supprimer {{ environnement.nom }} ?')\">
                            Supprimer
                        </a>
                    </td>
                </tr>
            {% endfor %}
        </tbody>
    </table>

{% endblock %}", "admin/admin.environnements.html.twig", "C:\\wamp64\\www\\mesvoyages\\templates\\admin\\admin.environnements.html.twig");
    }
}
