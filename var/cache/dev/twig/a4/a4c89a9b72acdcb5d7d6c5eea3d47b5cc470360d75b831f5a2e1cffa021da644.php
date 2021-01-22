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

/* base.html.twig */
class __TwigTemplate_ac6c426d9d4792de69d764b92914c39d119626e652cedaa866f3e576d0242aa1 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'stylesheets' => [$this, 'block_stylesheets'],
            'javascripts' => [$this, 'block_javascripts'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\">
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 11
        echo "
        ";
        // line 12
        $this->displayBlock('javascripts', $context, $blocks);
        // line 24
        echo "    </head>
    <body>
        <div class=\"d-flex\" id=\"wrapper\">

            <!-- Sidebar -->
            <div class=\"bg-dark border-right\" id=\"sidebar-wrapper\">
                <div class=\"sidebar-heading text-light\">Blog</div>
                <div class=\"list-group list-group-flush\">
                    <a href=\"";
        // line 32
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("articles");
        echo "\" class=\"list-group-item list-group-item-action bg-dark text-light\">Articles</a>
                    <a href=\"";
        // line 33
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("auteurs");
        echo "\" class=\"list-group-item list-group-item-action bg-dark text-light\">Auteurs</a>
                </div>
            </div>
            <!-- /#sidebar-wrapper -->

            <div id=\"page-content-wrapper\">
            <nav class=\"navbar navbar-expand-lg navbar-dark bg-dark border-bottom\">
                ";
        // line 41
        echo "
                <button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarSupportedContent\" aria-controls=\"navbarSupportedContent\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
                    <span class=\"navbar-toggler-icon\"></span>
                </button>

                <div class=\"collapse navbar-collapse\" id=\"navbarSupportedContent\">
                            <ul class=\"nav navbar-nav flex-row justify-content-between ml-auto\">
                                ";
        // line 48
        if ((0 === twig_compare(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 48, $this->source); })()), "request", [], "any", false, false, false, 48), "session", [], "any", false, false, false, 48), "get", [0 => "nom"], "method", false, false, false, 48), null))) {
            echo " 
                                <li class=\"dropdown order-1\">
                                    <button type=\"button\" id=\"dropdownMenu1\" class=\"btn btn-outline-secondary \"><a href=\"";
            // line 50
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("login");
            echo "\">Connexion </a><span class=\"caret\"></span></button>
                                </li>
                                ";
        } else {
            // line 53
            echo "                                    ";
            $context["nom"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 53, $this->source); })()), "session", [], "any", false, false, false, 53), "get", [0 => "nom"], "method", false, false, false, 53);
            // line 54
            echo "                                    <li class=\"dropdown order-1\">
                                        <button type=\"button\" id=\"dropdownMenu1\" class=\"btn btn-outline-secondary \">";
            // line 55
            echo twig_escape_filter($this->env, (isset($context["nom"]) || array_key_exists("nom", $context) ? $context["nom"] : (function () { throw new RuntimeError('Variable "nom" does not exist.', 55, $this->source); })()), "html", null, true);
            echo " <span class=\"caret\"></span></button>
                                        <button type=\"button\" id=\"dropdownMenu1\" class=\"btn btn-outline-secondary \"><a href=\"";
            // line 56
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("logout");
            echo "\">Déconnexion </a><span class=\"caret\"></span></button>
                                    </li>
                                ";
        }
        // line 59
        echo "                            </ul>
                </div>
            </nav>

                ";
        // line 70
        echo "                            ";
        // line 76
        echo "                            ";
        // line 92
        echo "
                <div class=\"container-fluid\">
                    ";
        // line 94
        $this->displayBlock('body', $context, $blocks);
        // line 95
        echo "                </div>
            </div>
        </div>

    </body>
</html>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 5
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 7
        echo "            <link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css\" integrity=\"sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm\" crossorigin=\"anonymous\">
            <link href=\"https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css\" rel=\"stylesheet\">
            <link href=\"/css/simple-sidebar.css\" rel=\"stylesheet\">
        ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 12
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 13
        echo "            <script src=\"https://code.jquery.com/jquery-3.2.1.slim.min.js\" integrity=\"sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN\" crossorigin=\"anonymous\"></script>
            <script src=\"https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js\" integrity=\"sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q\" crossorigin=\"anonymous\"></script>
            <script src=\"https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js\" integrity=\"sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl\" crossorigin=\"anonymous\"></script>
            <!-- Menu Toggle Script -->
            <script>
                \$(\"#menu-toggle\").click(function(e) {
                e.preventDefault();
                \$(\"#wrapper\").toggleClass(\"toggled\");
                });
            </script>
        ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 94
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  228 => 94,  208 => 13,  198 => 12,  185 => 7,  175 => 6,  156 => 5,  140 => 95,  138 => 94,  134 => 92,  132 => 76,  130 => 70,  124 => 59,  118 => 56,  114 => 55,  111 => 54,  108 => 53,  102 => 50,  97 => 48,  88 => 41,  78 => 33,  74 => 32,  64 => 24,  62 => 12,  59 => 11,  57 => 6,  53 => 5,  47 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\">
        <title>{% block title %}Welcome!{% endblock %}</title>
        {% block stylesheets %}
            <link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css\" integrity=\"sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm\" crossorigin=\"anonymous\">
            <link href=\"https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css\" rel=\"stylesheet\">
            <link href=\"/css/simple-sidebar.css\" rel=\"stylesheet\">
        {% endblock %}

        {% block javascripts %}
            <script src=\"https://code.jquery.com/jquery-3.2.1.slim.min.js\" integrity=\"sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN\" crossorigin=\"anonymous\"></script>
            <script src=\"https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js\" integrity=\"sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q\" crossorigin=\"anonymous\"></script>
            <script src=\"https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js\" integrity=\"sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl\" crossorigin=\"anonymous\"></script>
            <!-- Menu Toggle Script -->
            <script>
                \$(\"#menu-toggle\").click(function(e) {
                e.preventDefault();
                \$(\"#wrapper\").toggleClass(\"toggled\");
                });
            </script>
        {% endblock %}
    </head>
    <body>
        <div class=\"d-flex\" id=\"wrapper\">

            <!-- Sidebar -->
            <div class=\"bg-dark border-right\" id=\"sidebar-wrapper\">
                <div class=\"sidebar-heading text-light\">Blog</div>
                <div class=\"list-group list-group-flush\">
                    <a href=\"{{ path('articles') }}\" class=\"list-group-item list-group-item-action bg-dark text-light\">Articles</a>
                    <a href=\"{{ path('auteurs') }}\" class=\"list-group-item list-group-item-action bg-dark text-light\">Auteurs</a>
                </div>
            </div>
            <!-- /#sidebar-wrapper -->

            <div id=\"page-content-wrapper\">
            <nav class=\"navbar navbar-expand-lg navbar-dark bg-dark border-bottom\">
                {# <button class=\"btn btn-primary\" id=\"menu-toggle\">Toggle Menu</button> #}

                <button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarSupportedContent\" aria-controls=\"navbarSupportedContent\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
                    <span class=\"navbar-toggler-icon\"></span>
                </button>

                <div class=\"collapse navbar-collapse\" id=\"navbarSupportedContent\">
                            <ul class=\"nav navbar-nav flex-row justify-content-between ml-auto\">
                                {% if app.request.session.get('nom') == null %} 
                                <li class=\"dropdown order-1\">
                                    <button type=\"button\" id=\"dropdownMenu1\" class=\"btn btn-outline-secondary \"><a href=\"{{ path('login') }}\">Connexion </a><span class=\"caret\"></span></button>
                                </li>
                                {% else %}
                                    {% set nom = app.session.get('nom') %}
                                    <li class=\"dropdown order-1\">
                                        <button type=\"button\" id=\"dropdownMenu1\" class=\"btn btn-outline-secondary \">{{nom}} <span class=\"caret\"></span></button>
                                        <button type=\"button\" id=\"dropdownMenu1\" class=\"btn btn-outline-secondary \"><a href=\"{{ path('logout') }}\">Déconnexion </a><span class=\"caret\"></span></button>
                                    </li>
                                {% endif %}
                            </ul>
                </div>
            </nav>

                {# <nav class=\"navbar navbar-expand-lg navbar-dark bg-dark\" role=\"navigation\">
                    <div class=\"container\">
                        <a class=\"navbar-brand\" href=\"#\">Blog</a>
                        <button class=\"navbar-toggler border-0\" type=\"button\" data-toggle=\"collapse\" data-target=\"#exCollapsingNavbar\">
                            &#9776;
                        </button>
                        <div class=\"collapse navbar-collapse\" id=\"exCollapsingNavbar\"> #}
                            {# <ul class=\"nav navbar-nav\">
                                <li class=\"nav-item\"><a href=\"#\" class=\"nav-link\">About</a></li>
                                <li class=\"nav-item\"><a href=\"#\" class=\"nav-link\">Link</a></li>
                                <li class=\"nav-item\"><a href=\"#\" class=\"nav-link\">Service</a></li>
                                <li class=\"nav-item\"><a href=\"#\" class=\"nav-link\">More</a></li>
                            </ul> #}
                            {# <ul class=\"nav navbar-nav flex-row justify-content-between ml-auto\">
                                {% if app.request.session.get('nom') == null %} 
                                <li class=\"dropdown order-1\">
                                    <button type=\"button\" id=\"dropdownMenu1\" class=\"btn btn-outline-secondary \"><a href=\"{{ path('login') }}\">Connexion </a><span class=\"caret\"></span></button>
                                </li>
                                {% else %}
                                    {% set nom = app.session.get('nom') %}
                                    <li class=\"dropdown order-1\">
                                        <button type=\"button\" id=\"dropdownMenu1\" class=\"btn btn-outline-secondary \">{{nom}} <span class=\"caret\"></span></button>
                                        <button type=\"button\" id=\"dropdownMenu1\" class=\"btn btn-outline-secondary \"><a href=\"{{ path('logout') }}\">Déconnexion </a><span class=\"caret\"></span></button>
                                    </li>
                                {% endif %}
                            </ul>
                        </div>
                    </div>
                </nav> #}

                <div class=\"container-fluid\">
                    {% block body %}{% endblock %}
                </div>
            </div>
        </div>

    </body>
</html>
", "base.html.twig", "C:\\Users\\tsiresy\\Desktop\\test symfony\\Blog\\templates\\base.html.twig");
    }
}
