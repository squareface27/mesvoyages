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

/* admin/admin.voyage.edit.html.twig */
class __TwigTemplate_534acc55b3b1bcf3971a49f4c689ae284aa3186dfd684a1cc3cd01f55994a3e5 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/admin.voyage.edit.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/admin.voyage.edit.html.twig"));

        $this->parent = $this->loadTemplate("baseadmin.html.twig", "admin/admin.voyage.edit.html.twig", 1);
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
        echo "    <h2>Détail visite : </h2>
    ";
        // line 5
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["formvisite"]) || array_key_exists("formvisite", $context) ? $context["formvisite"] : (function () { throw new RuntimeError('Variable "formvisite" does not exist.', 5, $this->source); })()), 'form_start');
        echo "
        <div class=\"row\">
            <div class=\"col\">             
                <div class=\"row\">
                    <div class=\"col-auto\">
                        ";
        // line 10
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formvisite"]) || array_key_exists("formvisite", $context) ? $context["formvisite"] : (function () { throw new RuntimeError('Variable "formvisite" does not exist.', 10, $this->source); })()), "datecreation", [], "any", false, false, false, 10), 'row');
        echo "                                                  
                    </div>
                    <div class=\"col\">
                        ";
        // line 13
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formvisite"]) || array_key_exists("formvisite", $context) ? $context["formvisite"] : (function () { throw new RuntimeError('Variable "formvisite" does not exist.', 13, $this->source); })()), "note", [], "any", false, false, false, 13), 'row');
        echo "
                    </div>
                    <div class=\"col\">
                        ";
        // line 16
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formvisite"]) || array_key_exists("formvisite", $context) ? $context["formvisite"] : (function () { throw new RuntimeError('Variable "formvisite" does not exist.', 16, $this->source); })()), "tempmin", [], "any", false, false, false, 16), 'row');
        echo "
                    </div>
                    <div class=\"col\">
                        ";
        // line 19
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formvisite"]) || array_key_exists("formvisite", $context) ? $context["formvisite"] : (function () { throw new RuntimeError('Variable "formvisite" does not exist.', 19, $this->source); })()), "tempmax", [], "any", false, false, false, 19), 'row');
        echo "
                    </div>
                </div>
                ";
        // line 22
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formvisite"]) || array_key_exists("formvisite", $context) ? $context["formvisite"] : (function () { throw new RuntimeError('Variable "formvisite" does not exist.', 22, $this->source); })()), "ville", [], "any", false, false, false, 22), 'row');
        echo "
                ";
        // line 23
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formvisite"]) || array_key_exists("formvisite", $context) ? $context["formvisite"] : (function () { throw new RuntimeError('Variable "formvisite" does not exist.', 23, $this->source); })()), "pays", [], "any", false, false, false, 23), 'row');
        echo "
            </div>
            <div class=\"col\">
                <!-- emplacement image -->
            </div>
        </div>
        <div class=\"row\">
            <div class=\"col\">
                ";
        // line 31
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formvisite"]) || array_key_exists("formvisite", $context) ? $context["formvisite"] : (function () { throw new RuntimeError('Variable "formvisite" does not exist.', 31, $this->source); })()), "avis", [], "any", false, false, false, 31), 'row');
        echo "
            </div>
        </div>
    ";
        // line 34
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["formvisite"]) || array_key_exists("formvisite", $context) ? $context["formvisite"] : (function () { throw new RuntimeError('Variable "formvisite" does not exist.', 34, $this->source); })()), 'form_end');
        echo "
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "admin/admin.voyage.edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  124 => 34,  118 => 31,  107 => 23,  103 => 22,  97 => 19,  91 => 16,  85 => 13,  79 => 10,  71 => 5,  68 => 4,  58 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"baseadmin.html.twig\" %}

{% block body %}
    <h2>Détail visite : </h2>
    {{ form_start(formvisite) }}
        <div class=\"row\">
            <div class=\"col\">             
                <div class=\"row\">
                    <div class=\"col-auto\">
                        {{ form_row(formvisite.datecreation) }}                                                  
                    </div>
                    <div class=\"col\">
                        {{ form_row(formvisite.note) }}
                    </div>
                    <div class=\"col\">
                        {{ form_row(formvisite.tempmin) }}
                    </div>
                    <div class=\"col\">
                        {{ form_row(formvisite.tempmax) }}
                    </div>
                </div>
                {{ form_row(formvisite.ville) }}
                {{ form_row(formvisite.pays) }}
            </div>
            <div class=\"col\">
                <!-- emplacement image -->
            </div>
        </div>
        <div class=\"row\">
            <div class=\"col\">
                {{ form_row(formvisite.avis) }}
            </div>
        </div>
    {{ form_end(formvisite) }}
{% endblock %}", "admin/admin.voyage.edit.html.twig", "C:\\wamp64\\www\\mesvoyages\\templates\\admin\\admin.voyage.edit.html.twig");
    }
}
