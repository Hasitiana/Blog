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

/* auteur/index.html.twig */
class __TwigTemplate_83e21a1c95b03e4f26a3a69021626374026872236885a7dbacec37d27fbde742 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "auteur/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "auteur/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "auteur/index.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Les Auteurs";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <div class=\"d-flex justify-content-center\">
        <h1>";
        // line 7
        echo twig_escape_filter($this->env, (isset($context["title"]) || array_key_exists("title", $context) ? $context["title"] : (function () { throw new RuntimeError('Variable "title" does not exist.', 7, $this->source); })()), "html", null, true);
        echo "</h1>
    </div>
    <button class=\"btn btn-primary bouton_ajout\"><i class=\"fa fa-user\"></i>&nbsp;<a href=\"";
        // line 9
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("ajout_auteur");
        echo "\" style=\"text-decoration: none; color: white\">Ajouter un auteur</a></button>
    ";
        // line 19
        echo "    <br><br>
    <table class=\"table table-striped\">
        <thead>
            <tr>
                <th scope=\"col\">nom</th>
            </tr>
        </thead>
        <tbody>
            ";
        // line 27
        if (twig_test_empty((isset($context["auteurs"]) || array_key_exists("auteurs", $context) ? $context["auteurs"] : (function () { throw new RuntimeError('Variable "auteurs" does not exist.', 27, $this->source); })()))) {
            // line 28
            echo "                <tr><td colspan=\"2\" align=\"center\">Aucun auteur</td></tr>
            ";
        } else {
            // line 30
            echo "                ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["auteurs"]) || array_key_exists("auteurs", $context) ? $context["auteurs"] : (function () { throw new RuntimeError('Variable "auteurs" does not exist.', 30, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["auteur"]) {
                // line 31
                echo "                    <tr>
                        <td>";
                // line 32
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["auteur"], "nom", [], "any", false, false, false, 32), "html", null, true);
                echo "</td>
                        ";
                // line 34
                echo "                    </tr>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['auteur'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 36
            echo "            ";
        }
        // line 37
        echo "        </tbody>
    </table>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "auteur/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  138 => 37,  135 => 36,  128 => 34,  124 => 32,  121 => 31,  116 => 30,  112 => 28,  110 => 27,  100 => 19,  96 => 9,  91 => 7,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Les Auteurs{% endblock %}

{% block body %}
    <div class=\"d-flex justify-content-center\">
        <h1>{{ title }}</h1>
    </div>
    <button class=\"btn btn-primary bouton_ajout\"><i class=\"fa fa-user\"></i>&nbsp;<a href=\"{{ path('ajout_auteur') }}\" style=\"text-decoration: none; color: white\">Ajouter un auteur</a></button>
    {# {% if app.request.session.get('nom') == null %} 
    <button class=\"btn btn-primary bouton_ajout\"><i class=\"fa fa-newspaper-o\"></i>&nbsp;<a href=\"{{ path('ajout_article') }}\" style=\"text-decoration: none; color: white\">Ajouter un article</a></button>
    <button class=\"btn btn-primary bouton_ajout\"><i class=\"fa fa-user\"></i>&nbsp;<a href=\"{{ path('ajout_auteur') }}\" style=\"text-decoration: none; color: white\">Ajouter un auteur</a></button>
    <br><br>
    {% else %} 
    <button class=\"btn btn-primary bouton_ajout\"><i class=\"fa fa-newspaper-o\"></i>&nbsp;<a href=\"{{ path('ajout_article') }}\" style=\"text-decoration: none; color: white\">Ajouter un article</a></button>
    
    <br><br>
    {% endif %}#}
    <br><br>
    <table class=\"table table-striped\">
        <thead>
            <tr>
                <th scope=\"col\">nom</th>
            </tr>
        </thead>
        <tbody>
            {% if auteurs is empty %}
                <tr><td colspan=\"2\" align=\"center\">Aucun auteur</td></tr>
            {% else %}
                {% for auteur in auteurs %}
                    <tr>
                        <td>{{ auteur.nom }}</td>
                        {# <td><button class=\"btn btn-success\"><a href=\"{{ path('article', {'id': article.id}) }}\" style=\"color: white\"><i class=\"fa fa-eye\"></i></a></button></td> #}
                    </tr>
                {% endfor %}
            {% endif %}
        </tbody>
    </table>
{% endblock %}
", "auteur/index.html.twig", "C:\\Users\\tsiresy\\Desktop\\test symfony\\Blog\\templates\\auteur\\index.html.twig");
    }
}
