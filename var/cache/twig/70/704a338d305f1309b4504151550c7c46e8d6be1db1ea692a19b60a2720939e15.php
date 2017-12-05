<?php

/* index.html.twig */
class __TwigTemplate_aa7a5920277dc333999abec2efe6bed3af8b8f86f3da6e82318b9e4758f7a2ae extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layout.html.twig", "index.html.twig", 1);
        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_f3bdc7f47073a7aa09e24417d234caa527051636729ec1a2913a58d0929b5019 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f3bdc7f47073a7aa09e24417d234caa527051636729ec1a2913a58d0929b5019->enter($__internal_f3bdc7f47073a7aa09e24417d234caa527051636729ec1a2913a58d0929b5019_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "index.html.twig"));

        $__internal_a9e2275340093590f6c005fb3a6a34eee2bd4abca2097e89d5b5c36f9b18bfb6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a9e2275340093590f6c005fb3a6a34eee2bd4abca2097e89d5b5c36f9b18bfb6->enter($__internal_a9e2275340093590f6c005fb3a6a34eee2bd4abca2097e89d5b5c36f9b18bfb6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f3bdc7f47073a7aa09e24417d234caa527051636729ec1a2913a58d0929b5019->leave($__internal_f3bdc7f47073a7aa09e24417d234caa527051636729ec1a2913a58d0929b5019_prof);

        
        $__internal_a9e2275340093590f6c005fb3a6a34eee2bd4abca2097e89d5b5c36f9b18bfb6->leave($__internal_a9e2275340093590f6c005fb3a6a34eee2bd4abca2097e89d5b5c36f9b18bfb6_prof);

    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        $__internal_bc7f2c6b45158acd576f0ecabd85ca1005f022f3f347012cc74b5b1228f98b8d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bc7f2c6b45158acd576f0ecabd85ca1005f022f3f347012cc74b5b1228f98b8d->enter($__internal_bc7f2c6b45158acd576f0ecabd85ca1005f022f3f347012cc74b5b1228f98b8d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_8a21bba13372926c58e12a42067030d0dcc3695f8d9bd72494c6de457f5743b2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8a21bba13372926c58e12a42067030d0dcc3695f8d9bd72494c6de457f5743b2->enter($__internal_8a21bba13372926c58e12a42067030d0dcc3695f8d9bd72494c6de457f5743b2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 4
        echo "    Welcome to your new Silex Application!
";
        
        $__internal_8a21bba13372926c58e12a42067030d0dcc3695f8d9bd72494c6de457f5743b2->leave($__internal_8a21bba13372926c58e12a42067030d0dcc3695f8d9bd72494c6de457f5743b2_prof);

        
        $__internal_bc7f2c6b45158acd576f0ecabd85ca1005f022f3f347012cc74b5b1228f98b8d->leave($__internal_bc7f2c6b45158acd576f0ecabd85ca1005f022f3f347012cc74b5b1228f98b8d_prof);

    }

    public function getTemplateName()
    {
        return "index.html.twig";
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
        return new Twig_Source("{% extends \"layout.html.twig\" %}

{% block content %}
    Welcome to your new Silex Application!
{% endblock %}
", "index.html.twig", "C:\\xampp\\htdocs\\objet\\moijvtest\\templates\\index.html.twig");
    }
}
