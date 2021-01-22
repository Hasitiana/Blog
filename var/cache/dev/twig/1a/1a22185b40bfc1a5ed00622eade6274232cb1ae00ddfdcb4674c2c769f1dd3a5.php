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

/* article/index.html.twig */
class __TwigTemplate_f31e426dd5853c078ab8c8e35df8dab2bb70119a0040f0321b3e7cf3fcb598b2 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "article/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "article/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "article/index.html.twig", 1);
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

        echo "Liste des 5 derniers articles";
        
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
    ";
        // line 9
        if ((0 === twig_compare(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 9, $this->source); })()), "request", [], "any", false, false, false, 9), "session", [], "any", false, false, false, 9), "get", [0 => "nom"], "method", false, false, false, 9), null))) {
            echo " 
    <button class=\"btn btn-primary bouton_ajout\"><i class=\"fa fa-newspaper-o\"></i>&nbsp;<a href=\"";
            // line 10
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("ajout_article");
            echo "\" style=\"text-decoration: none; color: white\">Ajouter un article</a></button>
    <button class=\"btn btn-primary bouton_ajout\"><i class=\"fa fa-user\"></i>&nbsp;<a href=\"";
            // line 11
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("ajout_auteur");
            echo "\" style=\"text-decoration: none; color: white\">Ajouter un auteur</a></button>
    <br><br>
    ";
        } else {
            // line 14
            echo "    <button class=\"btn btn-primary bouton_ajout\"><i class=\"fa fa-newspaper-o\"></i>&nbsp;<a href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("ajout_article");
            echo "\" style=\"text-decoration: none; color: white\">Ajouter un article</a></button>
    
    <br><br>
    ";
        }
        // line 18
        echo "    <table class=\"table table-striped\">
        <thead>
            <tr>
                <th scope=\"col\">Titre</th>
                <th scope=\"col\">Auteur</th>
                <th scope=\"col\">Actions</th>
            </tr>
        </thead>
        <tbody>
            ";
        // line 27
        if (twig_test_empty((isset($context["articles"]) || array_key_exists("articles", $context) ? $context["articles"] : (function () { throw new RuntimeError('Variable "articles" does not exist.', 27, $this->source); })()))) {
            // line 28
            echo "                <tr><td colspan=\"2\" align=\"center\">Aucune article</td></tr>
            ";
        } else {
            // line 30
            echo "                ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["articles"]) || array_key_exists("articles", $context) ? $context["articles"] : (function () { throw new RuntimeError('Variable "articles" does not exist.', 30, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["article"]) {
                // line 31
                echo "                    <tr>
                        <td>";
                // line 32
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["article"], "titre", [], "any", false, false, false, 32), "html", null, true);
                echo "</td>
                        <td>";
                // line 33
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["article"], "Auteur", [], "any", false, false, false, 33), "html", null, true);
                echo "</td>
                        <td><button class=\"btn btn-success\"><a href=\"";
                // line 34
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("article", ["id" => twig_get_attribute($this->env, $this->source, $context["article"], "id", [], "any", false, false, false, 34)]), "html", null, true);
                echo "\" style=\"color: white\"><i class=\"fa fa-eye\"></i></a></button></td>
                    </tr>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['article'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 37
            echo "            ";
        }
        // line 38
        echo "        </tbody>
    </table>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "article/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  163 => 38,  160 => 37,  151 => 34,  147 => 33,  143 => 32,  140 => 31,  135 => 30,  131 => 28,  129 => 27,  118 => 18,  110 => 14,  104 => 11,  100 => 10,  96 => 9,  91 => 7,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Liste des 5 derniers articles{% endblock %}

{% block body %}
    <div class=\"d-flex justify-content-center\">
        <h1>{{ title }}</h1>
    </div>
    {% if app.request.session.get('nom') == null %} 
    <button class=\"btn btn-primary bouton_ajout\"><i class=\"fa fa-newspaper-o\"></i>&nbsp;<a href=\"{{ path('ajout_article') }}\" style=\"text-decoration: none; color: white\">Ajouter un article</a></button>
    <button class=\"btn btn-primary bouton_ajout\"><i class=\"fa fa-user\"></i>&nbsp;<a href=\"{{ path('ajout_auteur') }}\" style=\"text-decoration: none; color: white\">Ajouter un auteur</a></button>
    <br><br>
    {% else %}
    <button class=\"btn btn-primary bouton_ajout\"><i class=\"fa fa-newspaper-o\"></i>&nbsp;<a href=\"{{ path('ajout_article') }}\" style=\"text-decoration: none; color: white\">Ajouter un article</a></button>
    
    <br><br>
    {% endif %}
    <table class=\"table table-striped\">
        <thead>
            <tr>
                <th scope=\"col\">Titre</th>
                <th scope=\"col\">Auteur</th>
                <th scope=\"col\">Actions</th>
            </tr>
        </thead>
        <tbody>
            {% if articles is empty %}
                <tr><td colspan=\"2\" align=\"center\">Aucune article</td></tr>
            {% else %}
                {% for article in articles %}
                    <tr>
                        <td>{{ article.titre }}</td>
                        <td>{{ article.Auteur }}</td>
                        <td><button class=\"btn btn-success\"><a href=\"{{ path('article', {'id': article.id}) }}\" style=\"color: white\"><i class=\"fa fa-eye\"></i></a></button></td>
                    </tr>
                {% endfor %}
            {% endif %}
        </tbody>
    </table>
{% endblock %}
", "article/index.html.twig", "C:\\Users\\tsiresy\\Desktop\\test symfony\\Blog\\templates\\article\\index.html.twig");
    }
}
