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

/* pages/contact/contact.html.twig */
class __TwigTemplate_34093449a5270f4ecd3d1545be1e055f3f4715be500341bd636e1f09ca2dfd78 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "pages/contact/contact.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "pages/contact/contact.html.twig"));

        $this->parent = $this->loadTemplate("basefront.html.twig", "pages/contact/contact.html.twig", 1);
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

        echo "    

    ";
        // line 5
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 5, $this->source); })()), "flashes", ["succes"], "method", false, false, false, 5));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 6
            echo "        <div class=\"mt-3 alert alert-success\">
            ";
            // line 7
            echo twig_escape_filter($this->env, $context["message"], "html", null, true);
            echo "
        </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 9
        echo "  

    ";
        // line 11
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["formcontact"]) || array_key_exists("formcontact", $context) ? $context["formcontact"] : (function () { throw new RuntimeError('Variable "formcontact" does not exist.', 11, $this->source); })()), 'form_start');
        echo "
        <div class=\"row mt-3\">
            <div class=\"col\">
                ";
        // line 14
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formcontact"]) || array_key_exists("formcontact", $context) ? $context["formcontact"] : (function () { throw new RuntimeError('Variable "formcontact" does not exist.', 14, $this->source); })()), "nom", [], "any", false, false, false, 14), 'row');
        echo "
            </div>
            <div class=\"col\">
                ";
        // line 17
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formcontact"]) || array_key_exists("formcontact", $context) ? $context["formcontact"] : (function () { throw new RuntimeError('Variable "formcontact" does not exist.', 17, $this->source); })()), "email", [], "any", false, false, false, 17), 'row');
        echo "
            </div>
        </div>
        <div class=\"row\">
            <div class=\"col\">
                ";
        // line 22
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formcontact"]) || array_key_exists("formcontact", $context) ? $context["formcontact"] : (function () { throw new RuntimeError('Variable "formcontact" does not exist.', 22, $this->source); })()), "message", [], "any", false, false, false, 22), 'row');
        echo "
            </div>
        </div>
    ";
        // line 25
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["formcontact"]) || array_key_exists("formcontact", $context) ? $context["formcontact"] : (function () { throw new RuntimeError('Variable "formcontact" does not exist.', 25, $this->source); })()), 'form_end');
        echo "    

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "pages/contact/contact.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  117 => 25,  111 => 22,  103 => 17,  97 => 14,  91 => 11,  87 => 9,  78 => 7,  75 => 6,  71 => 5,  58 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"basefront.html.twig\" %}

{% block body %}    

    {% for message in app.flashes('succes') %}
        <div class=\"mt-3 alert alert-success\">
            {{ message }}
        </div>
    {% endfor %}  

    {{ form_start(formcontact) }}
        <div class=\"row mt-3\">
            <div class=\"col\">
                {{ form_row(formcontact.nom) }}
            </div>
            <div class=\"col\">
                {{ form_row(formcontact.email) }}
            </div>
        </div>
        <div class=\"row\">
            <div class=\"col\">
                {{ form_row(formcontact.message) }}
            </div>
        </div>
    {{ form_end(formcontact) }}    

{% endblock %}", "pages/contact/contact.html.twig", "C:\\wamp64\\www\\mesvoyages\\templates\\pages\\contact\\contact.html.twig");
    }
}
