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
        $__internal_52795a53fd302a8dc7bcb3ae92f758c79ff217dd44f6915ec6ac9789fcce2ded = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_52795a53fd302a8dc7bcb3ae92f758c79ff217dd44f6915ec6ac9789fcce2ded->enter($__internal_52795a53fd302a8dc7bcb3ae92f758c79ff217dd44f6915ec6ac9789fcce2ded_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $__internal_4e4670d3118b2372175387db059a3d7555cdfbcb8d59baab4761a9183c2701d7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4e4670d3118b2372175387db059a3d7555cdfbcb8d59baab4761a9183c2701d7->enter($__internal_4e4670d3118b2372175387db059a3d7555cdfbcb8d59baab4761a9183c2701d7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_52795a53fd302a8dc7bcb3ae92f758c79ff217dd44f6915ec6ac9789fcce2ded->leave($__internal_52795a53fd302a8dc7bcb3ae92f758c79ff217dd44f6915ec6ac9789fcce2ded_prof);

        
        $__internal_4e4670d3118b2372175387db059a3d7555cdfbcb8d59baab4761a9183c2701d7->leave($__internal_4e4670d3118b2372175387db059a3d7555cdfbcb8d59baab4761a9183c2701d7_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_dcb023245fd85f4faccf213b81360729b2d30d564799a5cad66cab446ece3d12 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dcb023245fd85f4faccf213b81360729b2d30d564799a5cad66cab446ece3d12->enter($__internal_dcb023245fd85f4faccf213b81360729b2d30d564799a5cad66cab446ece3d12_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_cbc5968386598f577629f757e6b9ad5512d0b9c1cfa8697f5380f39728b9aab0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cbc5968386598f577629f757e6b9ad5512d0b9c1cfa8697f5380f39728b9aab0->enter($__internal_cbc5968386598f577629f757e6b9ad5512d0b9c1cfa8697f5380f39728b9aab0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

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
        
        $__internal_cbc5968386598f577629f757e6b9ad5512d0b9c1cfa8697f5380f39728b9aab0->leave($__internal_cbc5968386598f577629f757e6b9ad5512d0b9c1cfa8697f5380f39728b9aab0_prof);

        
        $__internal_dcb023245fd85f4faccf213b81360729b2d30d564799a5cad66cab446ece3d12->leave($__internal_dcb023245fd85f4faccf213b81360729b2d30d564799a5cad66cab446ece3d12_prof);

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
