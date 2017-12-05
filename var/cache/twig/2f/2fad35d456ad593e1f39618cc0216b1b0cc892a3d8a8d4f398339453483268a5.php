<?php

/* admin/useredit.html.twig */
class __TwigTemplate_b896fc4edbd31bd2241117fb67564803b3278267fd42f91572f4f1e4e9059a33 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("admin/layout_admin.html.twig", "admin/useredit.html.twig", 1);
        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "admin/layout_admin.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_b02f1fd34495d87182882cfdd7af8460c6d9a30cfa123cff84f2e4e2a7809e50 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b02f1fd34495d87182882cfdd7af8460c6d9a30cfa123cff84f2e4e2a7809e50->enter($__internal_b02f1fd34495d87182882cfdd7af8460c6d9a30cfa123cff84f2e4e2a7809e50_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "admin/useredit.html.twig"));

        $__internal_50de6a46ba04f6e76914479dab127d164f7bd68ab4dceca93c54951fb8ba4c74 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_50de6a46ba04f6e76914479dab127d164f7bd68ab4dceca93c54951fb8ba4c74->enter($__internal_50de6a46ba04f6e76914479dab127d164f7bd68ab4dceca93c54951fb8ba4c74_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "admin/useredit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b02f1fd34495d87182882cfdd7af8460c6d9a30cfa123cff84f2e4e2a7809e50->leave($__internal_b02f1fd34495d87182882cfdd7af8460c6d9a30cfa123cff84f2e4e2a7809e50_prof);

        
        $__internal_50de6a46ba04f6e76914479dab127d164f7bd68ab4dceca93c54951fb8ba4c74->leave($__internal_50de6a46ba04f6e76914479dab127d164f7bd68ab4dceca93c54951fb8ba4c74_prof);

    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        $__internal_9d1c6602702d42a33c1ec18459ce6c3df7a3c1581273b38d6dd8078aa7897ea6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9d1c6602702d42a33c1ec18459ce6c3df7a3c1581273b38d6dd8078aa7897ea6->enter($__internal_9d1c6602702d42a33c1ec18459ce6c3df7a3c1581273b38d6dd8078aa7897ea6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_6fb9554f68a8b8d837255d8fddb5c019875ebb1c6dd106630575ccefd7bd5810 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6fb9554f68a8b8d837255d8fddb5c019875ebb1c6dd106630575ccefd7bd5810->enter($__internal_6fb9554f68a8b8d837255d8fddb5c019875ebb1c6dd106630575ccefd7bd5810_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 4
        echo " ";
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 4, $this->getSourceContext()); })()), 'form');
        echo "
";
        
        $__internal_6fb9554f68a8b8d837255d8fddb5c019875ebb1c6dd106630575ccefd7bd5810->leave($__internal_6fb9554f68a8b8d837255d8fddb5c019875ebb1c6dd106630575ccefd7bd5810_prof);

        
        $__internal_9d1c6602702d42a33c1ec18459ce6c3df7a3c1581273b38d6dd8078aa7897ea6->leave($__internal_9d1c6602702d42a33c1ec18459ce6c3df7a3c1581273b38d6dd8078aa7897ea6_prof);

    }

    public function getTemplateName()
    {
        return "admin/useredit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  49 => 4,  40 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"admin/layout_admin.html.twig\" %}

{% block content %}
 {{ form(form) }}
{% endblock %}", "admin/useredit.html.twig", "C:\\xampp\\htdocs\\objet\\moijvtest\\templates\\admin\\useredit.html.twig");
    }
}
