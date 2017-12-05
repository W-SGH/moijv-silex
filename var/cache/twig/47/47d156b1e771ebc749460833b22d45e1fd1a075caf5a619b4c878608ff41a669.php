<?php

/* @WebProfiler/Collector/exception.html.twig */
class __TwigTemplate_4c700e1efbb91f0e602ae16a6a269ebefaadfef8228a52a296ae2fadad6a98a1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/exception.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
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
        $__internal_f21dcb0952ecf563d5c779d643d6f89c5073129d0b1d98742be50f01c2ded3dc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f21dcb0952ecf563d5c779d643d6f89c5073129d0b1d98742be50f01c2ded3dc->enter($__internal_f21dcb0952ecf563d5c779d643d6f89c5073129d0b1d98742be50f01c2ded3dc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $__internal_6f9db7102bb6d19118bd72693e68f65df4c6ab6b9a5736ad94863467745cdfba = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6f9db7102bb6d19118bd72693e68f65df4c6ab6b9a5736ad94863467745cdfba->enter($__internal_6f9db7102bb6d19118bd72693e68f65df4c6ab6b9a5736ad94863467745cdfba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f21dcb0952ecf563d5c779d643d6f89c5073129d0b1d98742be50f01c2ded3dc->leave($__internal_f21dcb0952ecf563d5c779d643d6f89c5073129d0b1d98742be50f01c2ded3dc_prof);

        
        $__internal_6f9db7102bb6d19118bd72693e68f65df4c6ab6b9a5736ad94863467745cdfba->leave($__internal_6f9db7102bb6d19118bd72693e68f65df4c6ab6b9a5736ad94863467745cdfba_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_c13d3ee824ffa1ca627d91f5867c1d78f552881270e04cb6c38e03c058a60d77 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c13d3ee824ffa1ca627d91f5867c1d78f552881270e04cb6c38e03c058a60d77->enter($__internal_c13d3ee824ffa1ca627d91f5867c1d78f552881270e04cb6c38e03c058a60d77_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_5e656a3b22d658664b3c08708bb3eb6f4788773f636562ceb88fdf170813b4bd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5e656a3b22d658664b3c08708bb3eb6f4788773f636562ceb88fdf170813b4bd->enter($__internal_5e656a3b22d658664b3c08708bb3eb6f4788773f636562ceb88fdf170813b4bd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    ";
        if (twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 4, $this->getSourceContext()); })()), "hasexception", array())) {
            // line 5
            echo "        <style>
            ";
            // line 6
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception_css", array("token" => (isset($context["token"]) || array_key_exists("token", $context) ? $context["token"] : (function () { throw new Twig_Error_Runtime('Variable "token" does not exist.', 6, $this->getSourceContext()); })()))));
            echo "
        </style>
    ";
        }
        // line 9
        echo "    ";
        $this->displayParentBlock("head", $context, $blocks);
        echo "
";
        
        $__internal_5e656a3b22d658664b3c08708bb3eb6f4788773f636562ceb88fdf170813b4bd->leave($__internal_5e656a3b22d658664b3c08708bb3eb6f4788773f636562ceb88fdf170813b4bd_prof);

        
        $__internal_c13d3ee824ffa1ca627d91f5867c1d78f552881270e04cb6c38e03c058a60d77->leave($__internal_c13d3ee824ffa1ca627d91f5867c1d78f552881270e04cb6c38e03c058a60d77_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_d75484b4be305de67748b4ee1a284f890604c5fe0f3c831094c741642db06f27 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d75484b4be305de67748b4ee1a284f890604c5fe0f3c831094c741642db06f27->enter($__internal_d75484b4be305de67748b4ee1a284f890604c5fe0f3c831094c741642db06f27_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_34ca179f2911f6b10351969cb9e5d1023574af288fd9fc0d8a85aacdfc6791e2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_34ca179f2911f6b10351969cb9e5d1023574af288fd9fc0d8a85aacdfc6791e2->enter($__internal_34ca179f2911f6b10351969cb9e5d1023574af288fd9fc0d8a85aacdfc6791e2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 13
        echo "    <span class=\"label ";
        echo ((twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 13, $this->getSourceContext()); })()), "hasexception", array())) ? ("label-status-error") : ("disabled"));
        echo "\">
        <span class=\"icon\">";
        // line 14
        echo twig_include($this->env, $context, "@WebProfiler/Icon/exception.svg");
        echo "</span>
        <strong>Exception</strong>
        ";
        // line 16
        if (twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 16, $this->getSourceContext()); })()), "hasexception", array())) {
            // line 17
            echo "            <span class=\"count\">
                <span>1</span>
            </span>
        ";
        }
        // line 21
        echo "    </span>
";
        
        $__internal_34ca179f2911f6b10351969cb9e5d1023574af288fd9fc0d8a85aacdfc6791e2->leave($__internal_34ca179f2911f6b10351969cb9e5d1023574af288fd9fc0d8a85aacdfc6791e2_prof);

        
        $__internal_d75484b4be305de67748b4ee1a284f890604c5fe0f3c831094c741642db06f27->leave($__internal_d75484b4be305de67748b4ee1a284f890604c5fe0f3c831094c741642db06f27_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_88d52be61ddd259fc9067100556c76cf4cd254154b8d68dee1c04a150e21b08e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_88d52be61ddd259fc9067100556c76cf4cd254154b8d68dee1c04a150e21b08e->enter($__internal_88d52be61ddd259fc9067100556c76cf4cd254154b8d68dee1c04a150e21b08e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_2eb58969b9761ff777ba7765eba9fb89afe14aa54ead9185bce1fa88830b7557 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2eb58969b9761ff777ba7765eba9fb89afe14aa54ead9185bce1fa88830b7557->enter($__internal_2eb58969b9761ff777ba7765eba9fb89afe14aa54ead9185bce1fa88830b7557_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 25
        echo "    <h2>Exceptions</h2>

    ";
        // line 27
        if ( !twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 27, $this->getSourceContext()); })()), "hasexception", array())) {
            // line 28
            echo "        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    ";
        } else {
            // line 32
            echo "        <div class=\"sf-reset\">
            ";
            // line 33
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception", array("token" => (isset($context["token"]) || array_key_exists("token", $context) ? $context["token"] : (function () { throw new Twig_Error_Runtime('Variable "token" does not exist.', 33, $this->getSourceContext()); })()))));
            echo "
        </div>
    ";
        }
        
        $__internal_2eb58969b9761ff777ba7765eba9fb89afe14aa54ead9185bce1fa88830b7557->leave($__internal_2eb58969b9761ff777ba7765eba9fb89afe14aa54ead9185bce1fa88830b7557_prof);

        
        $__internal_88d52be61ddd259fc9067100556c76cf4cd254154b8d68dee1c04a150e21b08e->leave($__internal_88d52be61ddd259fc9067100556c76cf4cd254154b8d68dee1c04a150e21b08e_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/exception.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  138 => 33,  135 => 32,  129 => 28,  127 => 27,  123 => 25,  114 => 24,  103 => 21,  97 => 17,  95 => 16,  90 => 14,  85 => 13,  76 => 12,  63 => 9,  57 => 6,  54 => 5,  51 => 4,  42 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block head %}
    {% if collector.hasexception %}
        <style>
            {{ render(path('_profiler_exception_css', { token: token })) }}
        </style>
    {% endif %}
    {{ parent() }}
{% endblock %}

{% block menu %}
    <span class=\"label {{ collector.hasexception ? 'label-status-error' : 'disabled' }}\">
        <span class=\"icon\">{{ include('@WebProfiler/Icon/exception.svg') }}</span>
        <strong>Exception</strong>
        {% if collector.hasexception %}
            <span class=\"count\">
                <span>1</span>
            </span>
        {% endif %}
    </span>
{% endblock %}

{% block panel %}
    <h2>Exceptions</h2>

    {% if not collector.hasexception %}
        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    {% else %}
        <div class=\"sf-reset\">
            {{ render(path('_profiler_exception', { token: token })) }}
        </div>
    {% endif %}
{% endblock %}
", "@WebProfiler/Collector/exception.html.twig", "C:\\xampp\\htdocs\\objet\\moijvtest\\vendor\\symfony\\web-profiler-bundle\\Resources\\views\\Collector\\exception.html.twig");
    }
}
