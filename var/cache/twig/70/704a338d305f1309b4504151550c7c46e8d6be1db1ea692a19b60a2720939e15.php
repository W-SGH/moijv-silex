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
        $__internal_0325c47e79104f2f458a0c9f1128c497fdc8c8c8d24d7b2da2596a8e60d6ac67 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0325c47e79104f2f458a0c9f1128c497fdc8c8c8d24d7b2da2596a8e60d6ac67->enter($__internal_0325c47e79104f2f458a0c9f1128c497fdc8c8c8d24d7b2da2596a8e60d6ac67_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "index.html.twig"));

        $__internal_f1ba0d01d0d615940a54abd4a8af4d11acb3602da3c8606c3a739d37776ebffa = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f1ba0d01d0d615940a54abd4a8af4d11acb3602da3c8606c3a739d37776ebffa->enter($__internal_f1ba0d01d0d615940a54abd4a8af4d11acb3602da3c8606c3a739d37776ebffa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0325c47e79104f2f458a0c9f1128c497fdc8c8c8d24d7b2da2596a8e60d6ac67->leave($__internal_0325c47e79104f2f458a0c9f1128c497fdc8c8c8d24d7b2da2596a8e60d6ac67_prof);

        
        $__internal_f1ba0d01d0d615940a54abd4a8af4d11acb3602da3c8606c3a739d37776ebffa->leave($__internal_f1ba0d01d0d615940a54abd4a8af4d11acb3602da3c8606c3a739d37776ebffa_prof);

    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        $__internal_7150737b7ef8e8b6e6c76a5f63faec7541365637ff8bfe15ae301234229d1bd7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7150737b7ef8e8b6e6c76a5f63faec7541365637ff8bfe15ae301234229d1bd7->enter($__internal_7150737b7ef8e8b6e6c76a5f63faec7541365637ff8bfe15ae301234229d1bd7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_f41e64742b8341769f81071b0561aa10d8c3211bfe8a1809961de6fa859b07ec = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f41e64742b8341769f81071b0561aa10d8c3211bfe8a1809961de6fa859b07ec->enter($__internal_f41e64742b8341769f81071b0561aa10d8c3211bfe8a1809961de6fa859b07ec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 4
        echo "    Welcome to your new Silex Application!
";
        
        $__internal_f41e64742b8341769f81071b0561aa10d8c3211bfe8a1809961de6fa859b07ec->leave($__internal_f41e64742b8341769f81071b0561aa10d8c3211bfe8a1809961de6fa859b07ec_prof);

        
        $__internal_7150737b7ef8e8b6e6c76a5f63faec7541365637ff8bfe15ae301234229d1bd7->leave($__internal_7150737b7ef8e8b6e6c76a5f63faec7541365637ff8bfe15ae301234229d1bd7_prof);

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
