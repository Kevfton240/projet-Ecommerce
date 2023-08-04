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

/* account/address.html.twig */
class __TwigTemplate_d8665480da79bdc2df77b46273278d88 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'content' => [$this, 'block_content'],
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "account/address.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "account/address.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "account/address.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Mes adresses - La Boutique Française";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 5
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        // line 6
        echo "    <a href=\"";
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_adress_add");
        echo "\" class=\"btn btn-info btn-sm float-right\">Ajouter une adresse</a>
    <h1>Mes adresses</h1>
    C'est dans cette espace que vous allez pouvoir gérer vos adresses. <br>
    <a href=\"";
        // line 9
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_account");
        echo "\">Retour</a>
    <hr>
   VUE DE MES ADRESSES
    <hr>
   ";
        // line 13
        if ((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 13, $this->source); })()), "user", [], "any", false, false, false, 13), "adresses", [], "any", false, false, false, 13)) == 0)) {
            // line 14
            echo "       <p class=\"text-center\">
       Vous n'avez pas encore ajouter d'adresse dans votre compte. Pour ajouter une adresse veuillez cliquer ici <a href=\"\">Cliquer ici</a>
       </p>
    ";
        } else {
            // line 18
            echo "        <div class=\"row\">
        ";
            // line 19
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 19, $this->source); })()), "user", [], "any", false, false, false, 19), "adresses", [], "any", false, false, false, 19));
            foreach ($context['_seq'] as $context["_key"] => $context["adresses"]) {
                // line 20
                echo "            <div class=\"col-md-4\">
                <div class=\"card\" style=\"width: 18rem;\">
                    <div class=\"card-body\">
                        <h5 class=\"card-title\">";
                // line 23
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["adresses"], "name", [], "any", false, false, false, 23), "html", null, true);
                echo "</h5>
                        <p class=\"card-text\">
                            ";
                // line 25
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["adresses"], "adress", [], "any", false, false, false, 25), "html", null, true);
                echo "<br>
                            ";
                // line 26
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["adresses"], "postal", [], "any", false, false, false, 26), "html", null, true);
                echo " -";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["adresses"], "city", [], "any", false, false, false, 26), "html", null, true);
                echo "
                        </p>
                        <a href=\"";
                // line 28
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_adress_edit", ["id" => twig_get_attribute($this->env, $this->source, $context["adresses"], "id", [], "any", false, false, false, 28)]), "html", null, true);
                echo "\">Modifier</a> | <a href=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_adress_delete", ["id" => twig_get_attribute($this->env, $this->source, $context["adresses"], "id", [], "any", false, false, false, 28)]), "html", null, true);
                echo "\">Supprimer</a>
                    </div>
                </div>

            </div>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['adresses'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 34
            echo "
        </div>



        ";
        }
        // line 40
        echo "

";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "account/address.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  160 => 40,  152 => 34,  138 => 28,  131 => 26,  127 => 25,  122 => 23,  117 => 20,  113 => 19,  110 => 18,  104 => 14,  102 => 13,  95 => 9,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Mes adresses - La Boutique Française{% endblock %}

{% block content %}
    <a href=\"{{ path('app_adress_add') }}\" class=\"btn btn-info btn-sm float-right\">Ajouter une adresse</a>
    <h1>Mes adresses</h1>
    C'est dans cette espace que vous allez pouvoir gérer vos adresses. <br>
    <a href=\"{{ path('app_account') }}\">Retour</a>
    <hr>
   VUE DE MES ADRESSES
    <hr>
   {% if app.user.adresses|length == 0 %}
       <p class=\"text-center\">
       Vous n'avez pas encore ajouter d'adresse dans votre compte. Pour ajouter une adresse veuillez cliquer ici <a href=\"\">Cliquer ici</a>
       </p>
    {% else %}
        <div class=\"row\">
        {% for adresses in app.user.adresses %}
            <div class=\"col-md-4\">
                <div class=\"card\" style=\"width: 18rem;\">
                    <div class=\"card-body\">
                        <h5 class=\"card-title\">{{ adresses.name }}</h5>
                        <p class=\"card-text\">
                            {{  adresses.adress }}<br>
                            {{ adresses.postal }} -{{ adresses.city}}
                        </p>
                        <a href=\"{{ path('app_adress_edit', {'id':adresses.id}) }}\">Modifier</a> | <a href=\"{{ path('app_adress_delete', {'id': adresses.id}) }}\">Supprimer</a>
                    </div>
                </div>

            </div>
        {% endfor %}

        </div>



        {% endif %}


{% endblock %}
", "account/address.html.twig", "/Users/kevin/PhpstormProjects/La boutique/E-shop/templates/account/address.html.twig");
    }
}
