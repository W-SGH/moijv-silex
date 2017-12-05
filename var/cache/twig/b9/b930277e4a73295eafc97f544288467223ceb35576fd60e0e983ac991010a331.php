<?php

/* admin/dashboard.html.twig */
class __TwigTemplate_756223de5917bc3446f57c57813e013d914aabdb1a7241950ae6d1e2e3d1bbd0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("admin/layout_admin.html.twig", "admin/dashboard.html.twig", 1);
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
        $__internal_6e689778399a3f8e83d5602eae33ea3202da672d8c4155093e4882236446be0a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6e689778399a3f8e83d5602eae33ea3202da672d8c4155093e4882236446be0a->enter($__internal_6e689778399a3f8e83d5602eae33ea3202da672d8c4155093e4882236446be0a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "admin/dashboard.html.twig"));

        $__internal_d7c1910243d9ae93cdb325a7e1b30f273e087d266d0441cffa31446135f7413b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d7c1910243d9ae93cdb325a7e1b30f273e087d266d0441cffa31446135f7413b->enter($__internal_d7c1910243d9ae93cdb325a7e1b30f273e087d266d0441cffa31446135f7413b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "admin/dashboard.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6e689778399a3f8e83d5602eae33ea3202da672d8c4155093e4882236446be0a->leave($__internal_6e689778399a3f8e83d5602eae33ea3202da672d8c4155093e4882236446be0a_prof);

        
        $__internal_d7c1910243d9ae93cdb325a7e1b30f273e087d266d0441cffa31446135f7413b->leave($__internal_d7c1910243d9ae93cdb325a7e1b30f273e087d266d0441cffa31446135f7413b_prof);

    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        $__internal_85b6b4ee03077d1065ab09dd4337fe3a74c854d208ad44f0a2cd112605e5c5b3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_85b6b4ee03077d1065ab09dd4337fe3a74c854d208ad44f0a2cd112605e5c5b3->enter($__internal_85b6b4ee03077d1065ab09dd4337fe3a74c854d208ad44f0a2cd112605e5c5b3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_87926737f1b3d5ca41a39f9a04bae852a06189b6ad7e00b800aa5adc566bfe5d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_87926737f1b3d5ca41a39f9a04bae852a06189b6ad7e00b800aa5adc566bfe5d->enter($__internal_87926737f1b3d5ca41a39f9a04bae852a06189b6ad7e00b800aa5adc566bfe5d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 4
        echo "    
<h2>Bienvenue sur le dashboard !</h2>

";
        
        $__internal_87926737f1b3d5ca41a39f9a04bae852a06189b6ad7e00b800aa5adc566bfe5d->leave($__internal_87926737f1b3d5ca41a39f9a04bae852a06189b6ad7e00b800aa5adc566bfe5d_prof);

        
        $__internal_85b6b4ee03077d1065ab09dd4337fe3a74c854d208ad44f0a2cd112605e5c5b3->leave($__internal_85b6b4ee03077d1065ab09dd4337fe3a74c854d208ad44f0a2cd112605e5c5b3_prof);

    }

    public function getTemplateName()
    {
        return "admin/dashboard.html.twig";
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
    
<h2>Bienvenue sur le dashboard !</h2>

{% endblock %}
", "admin/dashboard.html.twig", "C:\\xampp\\htdocs\\objet\\moijvtest\\templates\\admin\\dashboard.html.twig");
    }
}
