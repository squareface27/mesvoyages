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

/* _admin.voyage.form.html.twig */
class __TwigTemplate_a5025b3f1714acd4b7562e1414540c2d7ea10aab0c88f55574ed2273b83117a9 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "_admin.voyage.form.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "_admin.voyage.form.html.twig"));

        // line 1
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["formvisite"]) || array_key_exists("formvisite", $context) ? $context["formvisite"] : (function () { throw new RuntimeError('Variable "formvisite" does not exist.', 1, $this->source); })()), 'form_start');
        echo "
        <div class=\"row\">
            <div class=\"col\">             
                <div class=\"row\">
                    <div class=\"col-auto\">
                        ";
        // line 6
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formvisite"]) || array_key_exists("formvisite", $context) ? $context["formvisite"] : (function () { throw new RuntimeError('Variable "formvisite" does not exist.', 6, $this->source); })()), "datecreation", [], "any", false, false, false, 6), 'row');
        echo "                                                  
                    </div>
                    <div class=\"col\">
                        ";
        // line 9
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formvisite"]) || array_key_exists("formvisite", $context) ? $context["formvisite"] : (function () { throw new RuntimeError('Variable "formvisite" does not exist.', 9, $this->source); })()), "note", [], "any", false, false, false, 9), 'row');
        echo "
                    </div>
                    <div class=\"col\">
                        ";
        // line 12
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formvisite"]) || array_key_exists("formvisite", $context) ? $context["formvisite"] : (function () { throw new RuntimeError('Variable "formvisite" does not exist.', 12, $this->source); })()), "tempmin", [], "any", false, false, false, 12), 'row');
        echo "
                    </div>
                    <div class=\"col\">
                        ";
        // line 15
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formvisite"]) || array_key_exists("formvisite", $context) ? $context["formvisite"] : (function () { throw new RuntimeError('Variable "formvisite" does not exist.', 15, $this->source); })()), "tempmax", [], "any", false, false, false, 15), 'row');
        echo "
                    </div>
                </div>
                ";
        // line 18
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formvisite"]) || array_key_exists("formvisite", $context) ? $context["formvisite"] : (function () { throw new RuntimeError('Variable "formvisite" does not exist.', 18, $this->source); })()), "ville", [], "any", false, false, false, 18), 'row');
        echo "
                ";
        // line 19
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formvisite"]) || array_key_exists("formvisite", $context) ? $context["formvisite"] : (function () { throw new RuntimeError('Variable "formvisite" does not exist.', 19, $this->source); })()), "pays", [], "any", false, false, false, 19), 'row');
        echo "
                ";
        // line 20
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formvisite"]) || array_key_exists("formvisite", $context) ? $context["formvisite"] : (function () { throw new RuntimeError('Variable "formvisite" does not exist.', 20, $this->source); })()), "environnements", [], "any", false, false, false, 20), 'row');
        echo "
            </div>
            <div class=\"col\">
                <!-- emplacement image -->
                <div>
                    ";
        // line 25
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formvisite"]) || array_key_exists("formvisite", $context) ? $context["formvisite"] : (function () { throw new RuntimeError('Variable "formvisite" does not exist.', 25, $this->source); })()), "imageFile", [], "any", false, false, false, 25), 'row');
        echo "
                </div>
                <div>
                    image actuelle
                    ";
        // line 29
        if (twig_get_attribute($this->env, $this->source, (isset($context["visite"]) || array_key_exists("visite", $context) ? $context["visite"] : (function () { throw new RuntimeError('Variable "visite" does not exist.', 29, $this->source); })()), "imagename", [], "any", false, false, false, 29)) {
            // line 30
            echo "                        <img src=\"";
            echo twig_escape_filter($this->env, (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 30, $this->source); })()), "request", [], "any", false, false, false, 30), "getBasePath", [], "method", false, false, false, 30) . $this->extensions['Vich\UploaderBundle\Twig\Extension\UploaderExtension']->asset((isset($context["visite"]) || array_key_exists("visite", $context) ? $context["visite"] : (function () { throw new RuntimeError('Variable "visite" does not exist.', 30, $this->source); })()), "imageFile")), "html", null, true);
            echo "\"
                            class=\"card-img-top\" style=\"width:100%;height:auto;\">
                    ";
        } else {
            // line 33
            echo "                        <p>(aucune image)</p>
                    ";
        }
        // line 35
        echo "                </div>

            </div>
        </div>
        <div class=\"row\">
            <div class=\"col\">
                ";
        // line 41
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formvisite"]) || array_key_exists("formvisite", $context) ? $context["formvisite"] : (function () { throw new RuntimeError('Variable "formvisite" does not exist.', 41, $this->source); })()), "avis", [], "any", false, false, false, 41), 'row');
        echo "
            </div>
        </div>
    ";
        // line 44
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["formvisite"]) || array_key_exists("formvisite", $context) ? $context["formvisite"] : (function () { throw new RuntimeError('Variable "formvisite" does not exist.', 44, $this->source); })()), 'form_end');
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "_admin.voyage.form.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  125 => 44,  119 => 41,  111 => 35,  107 => 33,  100 => 30,  98 => 29,  91 => 25,  83 => 20,  79 => 19,  75 => 18,  69 => 15,  63 => 12,  57 => 9,  51 => 6,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{{ form_start(formvisite) }}
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
                {{ form_row(formvisite.environnements) }}
            </div>
            <div class=\"col\">
                <!-- emplacement image -->
                <div>
                    {{ form_row(formvisite.imageFile) }}
                </div>
                <div>
                    image actuelle
                    {% if visite.imagename %}
                        <img src=\"{{ app.request.getBasePath()~vich_uploader_asset(visite, 'imageFile') }}\"
                            class=\"card-img-top\" style=\"width:100%;height:auto;\">
                    {% else %}
                        <p>(aucune image)</p>
                    {% endif %}
                </div>

            </div>
        </div>
        <div class=\"row\">
            <div class=\"col\">
                {{ form_row(formvisite.avis) }}
            </div>
        </div>
    {{ form_end(formvisite) }}", "_admin.voyage.form.html.twig", "C:\\wamp64\\www\\mesvoyages\\templates\\_admin.voyage.form.html.twig");
    }
}
