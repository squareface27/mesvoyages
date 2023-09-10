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

/* pages/accueil/accueil.html.twig */
class __TwigTemplate_3427886398f210ca7937803d003820a543c1dc9b83c31fbf394ac4900a66c54d extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "pages/accueil/accueil.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "pages/accueil/accueil.html.twig"));

        $this->parent = $this->loadTemplate("basefront.html.twig", "pages/accueil/accueil.html.twig", 1);
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
        echo " <p class=\"mt-3\">
        <h3>Bienvenue sur mon site personnel de présentation de mes voyages.</h3>
 </p>
 <p class=\"mt-3\">
        Dans la partie <a href=\"";
        // line 8
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("voyages");
        echo "\">Voyages</a>, vous pouvez voir la liste des visites que j'ai faites dans différentes villes.<br/>
        A chaque fois j'ai précisé la ville visitée, le pays, j'ai mis une note (entre 0 et 20) et il y a aussi la date de la visite.<br/>
        Vous pouvez trier la liste en fonction des villes, des pays, des notes et des dates, 
        aussi bien dans l'ordre croissant que décroissant.<br/>
        Vous pouvez aussi filtrer les visites par rapport à une ville ou un pays.<br/>
        En cliquant sur la ville de la visite, vous pourrez avoir plus d'informations dessus :<br/>
        températures min et max, une description de la visite, les environnements (montagne, mer, désert...) et une photo.<br/>
        Enfin, vous pouvez me contacter avec le formulaire de <a href=\"";
        // line 15
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("contact");
        echo "\">Contact</a>.
    </p>
    <br>
    <p>Voici mes 2 derniers voyages : </p>
    <div clss=\"container\">
        <div class=\"row\">
            ";
        // line 21
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["visites"]) || array_key_exists("visites", $context) ? $context["visites"] : (function () { throw new RuntimeError('Variable "visites" does not exist.', 21, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["visite"]) {
            // line 22
            echo "                <div class=\"col\">
                    <div class=\"row\">
                        <div class=\"col\">
                            <!-- emplacement photo -->
                            ";
            // line 26
            if (twig_get_attribute($this->env, $this->source, $context["visite"], "imagename", [], "any", false, false, false, 26)) {
                // line 27
                echo "                                <img src=\"";
                echo twig_escape_filter($this->env, (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 27, $this->source); })()), "request", [], "any", false, false, false, 27), "getBasePath", [], "method", false, false, false, 27) . $this->extensions['Vich\UploaderBundle\Twig\Extension\UploaderExtension']->asset($context["visite"], "imageFile")), "html", null, true);
                echo "\" 
                                     class=\"card-img-top\" style=\"width:100%;height:auto;\" alt=\"image de la visite\">
                            ";
            }
            // line 30
            echo "                        </div>
                        <div class=\"col\">
                            <p>";
            // line 32
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["visite"], "datecreationstring", [], "any", false, false, false, 32), "html", null, true);
            echo "</p>
                            <h5 class=\"text-primary\">
                                <a href=\"";
            // line 34
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("voyages.showone", ["id" => twig_get_attribute($this->env, $this->source, $context["visite"], "id", [], "any", false, false, false, 34)]), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["visite"], "ville", [], "any", false, false, false, 34), "html", null, true);
            echo "</a>
                            </h5>
                            <p>";
            // line 36
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["visite"], "pays", [], "any", false, false, false, 36), "html", null, true);
            echo "</p>
                            ";
            // line 37
            if ((twig_get_attribute($this->env, $this->source, $context["visite"], "note", [], "any", false, false, false, 37) >= 10)) {
                // line 38
                echo "                                <div class=\"text-success\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["visite"], "note", [], "any", false, false, false, 38), "html", null, true);
                echo "/20</div>
                            ";
            } else {
                // line 40
                echo "                                <div class=\"text-danger\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["visite"], "note", [], "any", false, false, false, 40), "html", null, true);
                echo "/20</div>
                            ";
            }
            // line 42
            echo "                            t° entre ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["visite"], "tempmin", [], "any", false, false, false, 42), "html", null, true);
            echo "° et ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["visite"], "tempmax", [], "any", false, false, false, 42), "html", null, true);
            echo "°<br />
                            <strong>Environnements :</strong><br/>
                            ";
            // line 44
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["visite"], "environnements", [], "any", false, false, false, 44));
            foreach ($context['_seq'] as $context["_key"] => $context["environnement"]) {
                // line 45
                echo "                                ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["environnement"], "nom", [], "any", false, false, false, 45), "html", null, true);
                echo "
                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['environnement'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 47
            echo "                        </div>    
                    </div>                    
                </div>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['visite'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 50
        echo "    
        </div>
    </div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "pages/accueil/accueil.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  176 => 50,  167 => 47,  158 => 45,  154 => 44,  146 => 42,  140 => 40,  134 => 38,  132 => 37,  128 => 36,  121 => 34,  116 => 32,  112 => 30,  105 => 27,  103 => 26,  97 => 22,  93 => 21,  84 => 15,  74 => 8,  68 => 4,  58 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'basefront.html.twig' %}

{% block body %}
 <p class=\"mt-3\">
        <h3>Bienvenue sur mon site personnel de présentation de mes voyages.</h3>
 </p>
 <p class=\"mt-3\">
        Dans la partie <a href=\"{{ path('voyages') }}\">Voyages</a>, vous pouvez voir la liste des visites que j'ai faites dans différentes villes.<br/>
        A chaque fois j'ai précisé la ville visitée, le pays, j'ai mis une note (entre 0 et 20) et il y a aussi la date de la visite.<br/>
        Vous pouvez trier la liste en fonction des villes, des pays, des notes et des dates, 
        aussi bien dans l'ordre croissant que décroissant.<br/>
        Vous pouvez aussi filtrer les visites par rapport à une ville ou un pays.<br/>
        En cliquant sur la ville de la visite, vous pourrez avoir plus d'informations dessus :<br/>
        températures min et max, une description de la visite, les environnements (montagne, mer, désert...) et une photo.<br/>
        Enfin, vous pouvez me contacter avec le formulaire de <a href=\"{{ path('contact') }}\">Contact</a>.
    </p>
    <br>
    <p>Voici mes 2 derniers voyages : </p>
    <div clss=\"container\">
        <div class=\"row\">
            {% for visite in visites %}
                <div class=\"col\">
                    <div class=\"row\">
                        <div class=\"col\">
                            <!-- emplacement photo -->
                            {% if visite.imagename %}
                                <img src=\"{{ app.request.getBasePath()~vich_uploader_asset(visite, 'imageFile') }}\" 
                                     class=\"card-img-top\" style=\"width:100%;height:auto;\" alt=\"image de la visite\">
                            {% endif %}
                        </div>
                        <div class=\"col\">
                            <p>{{ visite.datecreationstring }}</p>
                            <h5 class=\"text-primary\">
                                <a href=\"{{ path('voyages.showone', {id:visite.id}) }}\">{{ visite.ville }}</a>
                            </h5>
                            <p>{{ visite.pays }}</p>
                            {% if visite.note>=10 %}
                                <div class=\"text-success\">{{ visite.note }}/20</div>
                            {% else %}
                                <div class=\"text-danger\">{{ visite.note }}/20</div>
                            {% endif %}
                            t° entre {{ visite.tempmin }}° et {{ visite.tempmax }}°<br />
                            <strong>Environnements :</strong><br/>
                            {% for environnement in visite.environnements %}
                                {{ environnement.nom }}
                            {% endfor %}
                        </div>    
                    </div>                    
                </div>
            {% endfor %}    
        </div>
    </div>
{% endblock %}
", "pages/accueil/accueil.html.twig", "C:\\wamp64\\www\\mesvoyages\\templates\\pages\\accueil\\accueil.html.twig");
    }
}
