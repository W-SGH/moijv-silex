<?php

/* @WebProfiler/Collector/ajax.html.twig */
class __TwigTemplate_d8352dcd3e39a9f7b15793c546b54775893e5c2ff4eb3dfc1a1734d674f70ede extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/ajax.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_26a2215cb457f162b949d3f537dde001f2776565747cb81055d143d92b1dd637 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_26a2215cb457f162b949d3f537dde001f2776565747cb81055d143d92b1dd637->enter($__internal_26a2215cb457f162b949d3f537dde001f2776565747cb81055d143d92b1dd637_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $__internal_06149b7337f29afec1be8b41fb0832ef848fac549f7d791575f553e40f74f6fb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_06149b7337f29afec1be8b41fb0832ef848fac549f7d791575f553e40f74f6fb->enter($__internal_06149b7337f29afec1be8b41fb0832ef848fac549f7d791575f553e40f74f6fb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_26a2215cb457f162b949d3f537dde001f2776565747cb81055d143d92b1dd637->leave($__internal_26a2215cb457f162b949d3f537dde001f2776565747cb81055d143d92b1dd637_prof);

        
        $__internal_06149b7337f29afec1be8b41fb0832ef848fac549f7d791575f553e40f74f6fb->leave($__internal_06149b7337f29afec1be8b41fb0832ef848fac549f7d791575f553e40f74f6fb_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_5eaffe84499b64fb37c50c2e9989c533f97c98e7156c39aa68a53b85e9e6f8e2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5eaffe84499b64fb37c50c2e9989c533f97c98e7156c39aa68a53b85e9e6f8e2->enter($__internal_5eaffe84499b64fb37c50c2e9989c533f97c98e7156c39aa68a53b85e9e6f8e2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_498bb06e75166f1b8924357fcd7466e0e346092f89f960c61f1c704dd794b3ec = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_498bb06e75166f1b8924357fcd7466e0e346092f89f960c61f1c704dd794b3ec->enter($__internal_498bb06e75166f1b8924357fcd7466e0e346092f89f960c61f1c704dd794b3ec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        // line 4
        echo "    ";
        ob_start();
        // line 5
        echo "        ";
        echo twig_include($this->env, $context, "@WebProfiler/Icon/ajax.svg");
        echo "
        <span class=\"sf-toolbar-value sf-toolbar-ajax-request-counter\">0</span>
    ";
        $context["icon"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 8
        echo "
    ";
        // line 9
        $context["text"] = ('' === $tmp = "        <div class=\"sf-toolbar-info-piece\">
            <b class=\"sf-toolbar-ajax-info\"></b>
        </div>
        <div class=\"sf-toolbar-info-piece\">
            <table class=\"sf-toolbar-ajax-requests\">
                <thead>
                    <tr>
                        <th>Method</th>
                        <th>Type</th>
                        <th>Status</th>
                        <th>URL</th>
                        <th>Time</th>
                        <th>Profile</th>
                    </tr>
                </thead>
                <tbody class=\"sf-toolbar-ajax-request-list\"></tbody>
            </table>
        </div>
    ") ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 29
        echo "
    ";
        // line 30
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/toolbar_item.html.twig", array("link" => false));
        echo "
";
        
        $__internal_498bb06e75166f1b8924357fcd7466e0e346092f89f960c61f1c704dd794b3ec->leave($__internal_498bb06e75166f1b8924357fcd7466e0e346092f89f960c61f1c704dd794b3ec_prof);

        
        $__internal_5eaffe84499b64fb37c50c2e9989c533f97c98e7156c39aa68a53b85e9e6f8e2->leave($__internal_5eaffe84499b64fb37c50c2e9989c533f97c98e7156c39aa68a53b85e9e6f8e2_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/ajax.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  85 => 30,  82 => 29,  62 => 9,  59 => 8,  52 => 5,  49 => 4,  40 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block toolbar %}
    {% set icon %}
        {{ include('@WebProfiler/Icon/ajax.svg') }}
        <span class=\"sf-toolbar-value sf-toolbar-ajax-request-counter\">0</span>
    {% endset %}

    {% set text %}
        <div class=\"sf-toolbar-info-piece\">
            <b class=\"sf-toolbar-ajax-info\"></b>
        </div>
        <div class=\"sf-toolbar-info-piece\">
            <table class=\"sf-toolbar-ajax-requests\">
                <thead>
                    <tr>
                        <th>Method</th>
                        <th>Type</th>
                        <th>Status</th>
                        <th>URL</th>
                        <th>Time</th>
                        <th>Profile</th>
                    </tr>
                </thead>
                <tbody class=\"sf-toolbar-ajax-request-list\"></tbody>
            </table>
        </div>
    {% endset %}

    {{ include('@WebProfiler/Profiler/toolbar_item.html.twig', { link: false }) }}
{% endblock %}
", "@WebProfiler/Collector/ajax.html.twig", "C:\\xampp\\htdocs\\objet\\moijvtest\\vendor\\symfony\\web-profiler-bundle\\Resources\\views\\Collector\\ajax.html.twig");
    }
}
