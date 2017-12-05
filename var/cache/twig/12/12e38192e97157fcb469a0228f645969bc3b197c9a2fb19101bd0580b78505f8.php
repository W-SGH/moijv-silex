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
        $__internal_1c9d63884617fb343edef44197e1c56300f2d84dd0da9d9b7aa2995c2e50c9de = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1c9d63884617fb343edef44197e1c56300f2d84dd0da9d9b7aa2995c2e50c9de->enter($__internal_1c9d63884617fb343edef44197e1c56300f2d84dd0da9d9b7aa2995c2e50c9de_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_6ab2e94eaea65b60793f8a7002fbb5764d20f87fca060e3153c502389b452722 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6ab2e94eaea65b60793f8a7002fbb5764d20f87fca060e3153c502389b452722->enter($__internal_6ab2e94eaea65b60793f8a7002fbb5764d20f87fca060e3153c502389b452722_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1c9d63884617fb343edef44197e1c56300f2d84dd0da9d9b7aa2995c2e50c9de->leave($__internal_1c9d63884617fb343edef44197e1c56300f2d84dd0da9d9b7aa2995c2e50c9de_prof);

        
        $__internal_6ab2e94eaea65b60793f8a7002fbb5764d20f87fca060e3153c502389b452722->leave($__internal_6ab2e94eaea65b60793f8a7002fbb5764d20f87fca060e3153c502389b452722_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_14714d1f5544c3101729e0a3f93a7f5aaadecd71e737e1042437622b1f946dac = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_14714d1f5544c3101729e0a3f93a7f5aaadecd71e737e1042437622b1f946dac->enter($__internal_14714d1f5544c3101729e0a3f93a7f5aaadecd71e737e1042437622b1f946dac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_6021921116627ad8c7275d8497bf15d1280087a6345b6767b3cbaf797a4481d6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6021921116627ad8c7275d8497bf15d1280087a6345b6767b3cbaf797a4481d6->enter($__internal_6021921116627ad8c7275d8497bf15d1280087a6345b6767b3cbaf797a4481d6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_6021921116627ad8c7275d8497bf15d1280087a6345b6767b3cbaf797a4481d6->leave($__internal_6021921116627ad8c7275d8497bf15d1280087a6345b6767b3cbaf797a4481d6_prof);

        
        $__internal_14714d1f5544c3101729e0a3f93a7f5aaadecd71e737e1042437622b1f946dac->leave($__internal_14714d1f5544c3101729e0a3f93a7f5aaadecd71e737e1042437622b1f946dac_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_82c54b759b08411f9e36060b658222c94b7d0ba72e2685a44e214206d8660cba = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_82c54b759b08411f9e36060b658222c94b7d0ba72e2685a44e214206d8660cba->enter($__internal_82c54b759b08411f9e36060b658222c94b7d0ba72e2685a44e214206d8660cba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_daf4826ed64841fd7a4a0fbbd68e3cbbfe8abaf9818169d7b6eb18e28b004ffd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_daf4826ed64841fd7a4a0fbbd68e3cbbfe8abaf9818169d7b6eb18e28b004ffd->enter($__internal_daf4826ed64841fd7a4a0fbbd68e3cbbfe8abaf9818169d7b6eb18e28b004ffd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_daf4826ed64841fd7a4a0fbbd68e3cbbfe8abaf9818169d7b6eb18e28b004ffd->leave($__internal_daf4826ed64841fd7a4a0fbbd68e3cbbfe8abaf9818169d7b6eb18e28b004ffd_prof);

        
        $__internal_82c54b759b08411f9e36060b658222c94b7d0ba72e2685a44e214206d8660cba->leave($__internal_82c54b759b08411f9e36060b658222c94b7d0ba72e2685a44e214206d8660cba_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_c4968d37d8bb7ac792939b1b0e4a1254f04a795c1fab212e22209cb7f1c49500 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c4968d37d8bb7ac792939b1b0e4a1254f04a795c1fab212e22209cb7f1c49500->enter($__internal_c4968d37d8bb7ac792939b1b0e4a1254f04a795c1fab212e22209cb7f1c49500_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_c2682845b7bb5e4815a7c183738b0508b83d3c19411f4df0dd90c312336d240f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c2682845b7bb5e4815a7c183738b0508b83d3c19411f4df0dd90c312336d240f->enter($__internal_c2682845b7bb5e4815a7c183738b0508b83d3c19411f4df0dd90c312336d240f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) || array_key_exists("token", $context) ? $context["token"] : (function () { throw new Twig_Error_Runtime('Variable "token" does not exist.', 13, $this->getSourceContext()); })()))));
        echo "
";
        
        $__internal_c2682845b7bb5e4815a7c183738b0508b83d3c19411f4df0dd90c312336d240f->leave($__internal_c2682845b7bb5e4815a7c183738b0508b83d3c19411f4df0dd90c312336d240f_prof);

        
        $__internal_c4968d37d8bb7ac792939b1b0e4a1254f04a795c1fab212e22209cb7f1c49500->leave($__internal_c4968d37d8bb7ac792939b1b0e4a1254f04a795c1fab212e22209cb7f1c49500_prof);

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
