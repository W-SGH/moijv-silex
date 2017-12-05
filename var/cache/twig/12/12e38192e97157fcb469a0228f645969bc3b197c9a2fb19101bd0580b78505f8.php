<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_1404b5aa7be6ab51bae0a6a22c7e08c6eac1d7d9903db3492ee3d95efb621b7c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_6be767ff291413a54a3fdf136cb97a5109246a06567dff37e54e6622bd1d32d7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6be767ff291413a54a3fdf136cb97a5109246a06567dff37e54e6622bd1d32d7->enter($__internal_6be767ff291413a54a3fdf136cb97a5109246a06567dff37e54e6622bd1d32d7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_45d79b89ff90c257b5b5c921cf929a70fc33058d9e85a5decd624520946b41ad = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_45d79b89ff90c257b5b5c921cf929a70fc33058d9e85a5decd624520946b41ad->enter($__internal_45d79b89ff90c257b5b5c921cf929a70fc33058d9e85a5decd624520946b41ad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6be767ff291413a54a3fdf136cb97a5109246a06567dff37e54e6622bd1d32d7->leave($__internal_6be767ff291413a54a3fdf136cb97a5109246a06567dff37e54e6622bd1d32d7_prof);

        
        $__internal_45d79b89ff90c257b5b5c921cf929a70fc33058d9e85a5decd624520946b41ad->leave($__internal_45d79b89ff90c257b5b5c921cf929a70fc33058d9e85a5decd624520946b41ad_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_474196a1753172cd8a17e5b742df7600bef887f39e2e88bb1f65d8ca7844fa1f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_474196a1753172cd8a17e5b742df7600bef887f39e2e88bb1f65d8ca7844fa1f->enter($__internal_474196a1753172cd8a17e5b742df7600bef887f39e2e88bb1f65d8ca7844fa1f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_ab6974c79815a50e3c4d003a486b2b32291d9205c48656bc0940169e3e8158b9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ab6974c79815a50e3c4d003a486b2b32291d9205c48656bc0940169e3e8158b9->enter($__internal_ab6974c79815a50e3c4d003a486b2b32291d9205c48656bc0940169e3e8158b9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_ab6974c79815a50e3c4d003a486b2b32291d9205c48656bc0940169e3e8158b9->leave($__internal_ab6974c79815a50e3c4d003a486b2b32291d9205c48656bc0940169e3e8158b9_prof);

        
        $__internal_474196a1753172cd8a17e5b742df7600bef887f39e2e88bb1f65d8ca7844fa1f->leave($__internal_474196a1753172cd8a17e5b742df7600bef887f39e2e88bb1f65d8ca7844fa1f_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_6aeeb4844eceb76a20b887019293b30f66a9a83ea5ecc3f983dc6ae39679c2b1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6aeeb4844eceb76a20b887019293b30f66a9a83ea5ecc3f983dc6ae39679c2b1->enter($__internal_6aeeb4844eceb76a20b887019293b30f66a9a83ea5ecc3f983dc6ae39679c2b1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_8fab75ddcd93789cf2715b9cdfe04e53ea7bf1ce5e1b1bcc6fd7800429178baf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8fab75ddcd93789cf2715b9cdfe04e53ea7bf1ce5e1b1bcc6fd7800429178baf->enter($__internal_8fab75ddcd93789cf2715b9cdfe04e53ea7bf1ce5e1b1bcc6fd7800429178baf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_8fab75ddcd93789cf2715b9cdfe04e53ea7bf1ce5e1b1bcc6fd7800429178baf->leave($__internal_8fab75ddcd93789cf2715b9cdfe04e53ea7bf1ce5e1b1bcc6fd7800429178baf_prof);

        
        $__internal_6aeeb4844eceb76a20b887019293b30f66a9a83ea5ecc3f983dc6ae39679c2b1->leave($__internal_6aeeb4844eceb76a20b887019293b30f66a9a83ea5ecc3f983dc6ae39679c2b1_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_c0300d2f3296e078ad517c8af525889c978b2c99c4b12cb9fc1c72641069c42f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c0300d2f3296e078ad517c8af525889c978b2c99c4b12cb9fc1c72641069c42f->enter($__internal_c0300d2f3296e078ad517c8af525889c978b2c99c4b12cb9fc1c72641069c42f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_d5797b8b2b4c90c8e2a661343f41aac264773d65233c12a370d3e267996c83a8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d5797b8b2b4c90c8e2a661343f41aac264773d65233c12a370d3e267996c83a8->enter($__internal_d5797b8b2b4c90c8e2a661343f41aac264773d65233c12a370d3e267996c83a8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) || array_key_exists("token", $context) ? $context["token"] : (function () { throw new Twig_Error_Runtime('Variable "token" does not exist.', 13, $this->getSourceContext()); })()))));
        echo "
";
        
        $__internal_d5797b8b2b4c90c8e2a661343f41aac264773d65233c12a370d3e267996c83a8->leave($__internal_d5797b8b2b4c90c8e2a661343f41aac264773d65233c12a370d3e267996c83a8_prof);

        
        $__internal_c0300d2f3296e078ad517c8af525889c978b2c99c4b12cb9fc1c72641069c42f->leave($__internal_c0300d2f3296e078ad517c8af525889c978b2c99c4b12cb9fc1c72641069c42f_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  94 => 13,  85 => 12,  71 => 7,  68 => 6,  59 => 5,  42 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block toolbar %}{% endblock %}

{% block menu %}
<span class=\"label\">
    <span class=\"icon\">{{ include('@WebProfiler/Icon/router.svg') }}</span>
    <strong>Routing</strong>
</span>
{% endblock %}

{% block panel %}
    {{ render(path('_profiler_router', { token: token })) }}
{% endblock %}
", "@WebProfiler/Collector/router.html.twig", "C:\\xampp\\htdocs\\objet\\moijvtest\\vendor\\symfony\\web-profiler-bundle\\Resources\\views\\Collector\\router.html.twig");
    }
}
