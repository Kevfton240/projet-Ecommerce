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

/* carte/index.html.twig */
class __TwigTemplate_7da0885d47e16dbe11d5631b17456631 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "carte/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "carte/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "carte/index.html.twig", 1);
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

        echo "Mon panier";
        
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
        echo "<h1>Mon panier</h1>

    Retrouvez l'ensemble des produits que vous desirer ajouté dans votre panier


    ";
        // line 11
        if ((twig_length_filter($this->env, (isset($context["cart"]) || array_key_exists("cart", $context) ? $context["cart"] : (function () { throw new RuntimeError('Variable "cart" does not exist.', 11, $this->source); })())) > 0)) {
            // line 12
            echo "

    <hr>
    <table class=\"table mt-3 table-dark\">
        <thead>
        <tr>

            <th scope=\"col\">Produit</th>
            <th scope=\"col\"></th>
            <th scope=\"col\">Quantité</th>
            <th scope=\"col\">Prix</th>
            <th scope=\"col\">Total</th>
            <th scope=\"col\"></th>
        </tr>
        </thead>
        <tbody>
        ";
            // line 28
            $context["total"] = null;
            // line 29
            echo "        ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["cart"]) || array_key_exists("cart", $context) ? $context["cart"] : (function () { throw new RuntimeError('Variable "cart" does not exist.', 29, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
                // line 30
                echo "
        <tr>
            <td>
                <img src=\"/uploads/illustration/photos/";
                // line 33
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["product"], "product", [], "any", false, false, false, 33), "illustration", [], "any", false, false, false, 33), "html", null, true);
                echo "\" alt=\" ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["product"], "product", [], "any", false, false, false, 33), "name", [], "any", false, false, false, 33), "html", null, true);
                echo "\" height=\"90px\">
            </td>
            <td> ";
                // line 35
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["product"], "product", [], "any", false, false, false, 35), "name", [], "any", false, false, false, 35), "html", null, true);
                echo "<br>
                <smal>";
                // line 36
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["product"], "product", [], "any", false, false, false, 36), "subtitle", [], "any", false, false, false, 36), "html", null, true);
                echo "</smal>
            </td>

            <td>
                <a href=\"";
                // line 40
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_carte", ["id" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["product"], "product", [], "any", false, false, false, 40), "id", [], "any", false, false, false, 40)]), "html", null, true);
                echo "\">
                    <img src=\"";
                // line 41
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/plus.png"), "html", null, true);
                echo "\" height=\"13px\" alt=\"Rajouter un l'article\">
                </a>
                ";
                // line 43
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "quantity", [], "any", false, false, false, 43), "html", null, true);
                echo "
                <a href=\"";
                // line 44
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("decreases_carte", ["id" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["product"], "product", [], "any", false, false, false, 44), "id", [], "any", false, false, false, 44)]), "html", null, true);
                echo "\">
                    <img src=\"";
                // line 45
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/moins.png"), "html", null, true);
                echo "\" height=\"13px\" alt=\"Dimunier l'article\">
                </a>
            </td>
            <td>";
                // line 48
                echo twig_escape_filter($this->env, (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["product"], "product", [], "any", false, false, false, 48), "price", [], "any", false, false, false, 48) / 100), "html", null, true);
                echo "€</td>
            <td>";
                // line 49
                echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["product"], "product", [], "any", false, false, false, 49), "price", [], "any", false, false, false, 49) * twig_get_attribute($this->env, $this->source, $context["product"], "quantity", [], "any", false, false, false, 49)) / 100), "html", null, true);
                echo "€</td>
            <td>
                <a href=\"";
                // line 51
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("delete_carte", ["id" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["product"], "product", [], "any", false, false, false, 51), "id", [], "any", false, false, false, 51)]), "html", null, true);
                echo "\">
                    <img src=\"";
                // line 52
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/recycler.png"), "html", null, true);
                echo "\" height=\"20px\" alt=\"Supprimer l'article\">
                </a>
            </td>


        </tr>

        </tbody>
        ";
                // line 60
                $context["total"] = ((isset($context["total"]) || array_key_exists("total", $context) ? $context["total"] : (function () { throw new RuntimeError('Variable "total" does not exist.', 60, $this->source); })()) + (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["product"], "product", [], "any", false, false, false, 60), "price", [], "any", false, false, false, 60) * twig_get_attribute($this->env, $this->source, $context["product"], "quantity", [], "any", false, false, false, 60)));
                // line 61
                echo "        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 62
            echo "    </table>
    <div class=\"text-right mb-5\" >
        <b>Nombre de produit:</b> ";
            // line 64
            echo twig_escape_filter($this->env, twig_length_filter($this->env, (isset($context["cart"]) || array_key_exists("cart", $context) ? $context["cart"] : (function () { throw new RuntimeError('Variable "cart" does not exist.', 64, $this->source); })())), "html", null, true);
            echo "<br>
        <b>Total de mon panier:</b> ";
            // line 65
            echo twig_escape_filter($this->env, ((isset($context["total"]) || array_key_exists("total", $context) ? $context["total"] : (function () { throw new RuntimeError('Variable "total" does not exist.', 65, $this->source); })()) / 100), "html", null, true);
            echo "€
        <a href=\"";
            // line 66
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_order");
            echo "\" class=\"btn btn-success btn-block\">Valider mon panier</a>
        <br>
        <br>

    </div>

    ";
        } else {
            // line 73
            echo "<hr>
        <p><b>Votre panier est vide</b></p>
    ";
        }
        // line 76
        echo "
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "carte/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  227 => 76,  222 => 73,  212 => 66,  208 => 65,  204 => 64,  200 => 62,  194 => 61,  192 => 60,  181 => 52,  177 => 51,  172 => 49,  168 => 48,  162 => 45,  158 => 44,  154 => 43,  149 => 41,  145 => 40,  138 => 36,  134 => 35,  127 => 33,  122 => 30,  117 => 29,  115 => 28,  97 => 12,  95 => 11,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Mon panier{% endblock %}

{% block content %}
<h1>Mon panier</h1>

    Retrouvez l'ensemble des produits que vous desirer ajouté dans votre panier


    {% if cart |length > 0 %}


    <hr>
    <table class=\"table mt-3 table-dark\">
        <thead>
        <tr>

            <th scope=\"col\">Produit</th>
            <th scope=\"col\"></th>
            <th scope=\"col\">Quantité</th>
            <th scope=\"col\">Prix</th>
            <th scope=\"col\">Total</th>
            <th scope=\"col\"></th>
        </tr>
        </thead>
        <tbody>
        {% set total = null %}
        {% for product in cart %}

        <tr>
            <td>
                <img src=\"/uploads/illustration/photos/{{ product.product.illustration }}\" alt=\" {{ product.product.name }}\" height=\"90px\">
            </td>
            <td> {{ product.product.name }}<br>
                <smal>{{ product.product.subtitle }}</smal>
            </td>

            <td>
                <a href=\"{{ path('app_carte', {'id' :product.product.id }) }}\">
                    <img src=\"{{ asset('assets/img/plus.png') }}\" height=\"13px\" alt=\"Rajouter un l'article\">
                </a>
                {{ product.quantity }}
                <a href=\"{{ path('decreases_carte', {'id' :product.product.id}) }}\">
                    <img src=\"{{ asset('assets/img/moins.png') }}\" height=\"13px\" alt=\"Dimunier l'article\">
                </a>
            </td>
            <td>{{ product.product.price / 100 }}€</td>
            <td>{{ product.product.price * product.quantity/ 100 }}€</td>
            <td>
                <a href=\"{{ path('delete_carte', {'id': product.product.id}) }}\">
                    <img src=\"{{ asset('assets/img/recycler.png') }}\" height=\"20px\" alt=\"Supprimer l'article\">
                </a>
            </td>


        </tr>

        </tbody>
        {% set total = total +(product.product.price * product.quantity) %}
        {% endfor %}
    </table>
    <div class=\"text-right mb-5\" >
        <b>Nombre de produit:</b> {{ cart|length }}<br>
        <b>Total de mon panier:</b> {{ (total / 100 ) }}€
        <a href=\"{{ path('app_order') }}\" class=\"btn btn-success btn-block\">Valider mon panier</a>
        <br>
        <br>

    </div>

    {% else %}
<hr>
        <p><b>Votre panier est vide</b></p>
    {% endif %}

{% endblock %}
", "carte/index.html.twig", "/Users/kevin/PhpstormProjects/La boutique/E-shop/templates/carte/index.html.twig");
    }
}
