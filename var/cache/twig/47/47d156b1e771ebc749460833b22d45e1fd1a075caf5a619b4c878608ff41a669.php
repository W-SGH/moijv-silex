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
        $__internal_850f71a187ffa0e19971376128579dbc67846fa4b2fd5cc73331bc0799ec7ec2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_850f71a187ffa0e19971376128579dbc67846fa4b2fd5cc73331bc0799ec7ec2->enter($__internal_850f71a187ffa0e19971376128579dbc67846fa4b2fd5cc73331bc0799ec7ec2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $__internal_365c23c1447b3e3499385751e2550a5b4c6c9f5234d1d8441c01e4b18e0e4162 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_365c23c1447b3e3499385751e2550a5b4c6c9f5234d1d8441c01e4b18e0e4162->enter($__internal_365c23c1447b3e3499385751e2550a5b4c6c9f5234d1d8441c01e4b18e0e4162_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_850f71a187ffa0e19971376128579dbc67846fa4b2fd5cc73331bc0799ec7ec2->leave($__internal_850f71a187ffa0e19971376128579dbc67846fa4b2fd5cc73331bc0799ec7ec2_prof);

        
        $__internal_365c23c1447b3e3499385751e2550a5b4c6c9f5234d1d8441c01e4b18e0e4162->leave($__internal_365c23c1447b3e3499385751e2550a5b4c6c9f5234d1d8441c01e4b18e0e4162_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_b3fdd4f1b2e8cbac7e198bed14e53f0ef899501dbbf2df7ace11ecb5d7ccc6ad = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b3fdd4f1b2e8cbac7e198bed14e53f0ef899501dbbf2df7ace11ecb5d7ccc6ad->enter($__internal_b3fdd4f1b2e8cbac7e198bed14e53f0ef899501dbbf2df7ace11ecb5d7ccc6ad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_8130d01520946ec65d5d59d85db94625ad372829f2d78a94ad62d637ddd3ccbf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8130d01520946ec65d5d59d85db94625ad372829f2d78a94ad62d637ddd3ccbf->enter($__internal_8130d01520946ec65d5d59d85db94625ad372829f2d78a94ad62d637ddd3ccbf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_8130d01520946ec65d5d59d85db94625ad372829f2d78a94ad62d637ddd3ccbf->leave($__internal_8130d01520946ec65d5d59d85db94625ad372829f2d78a94ad62d637ddd3ccbf_prof);

        
        $__internal_b3fdd4f1b2e8cbac7e198bed14e53f0ef899501dbbf2df7ace11ecb5d7ccc6ad->leave($__internal_b3fdd4f1b2e8cbac7e198bed14e53f0ef899501dbbf2df7ace11ecb5d7ccc6ad_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_16169f2e0a8a2827501a54bff332600e52c6b32f84b4ec82d03815964797f078 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_16169f2e0a8a2827501a54bff332600e52c6b32f84b4ec82d03815964797f078->enter($__internal_16169f2e0a8a2827501a54bff332600e52c6b32f84b4ec82d03815964797f078_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_b96370b8cce3bff879d104993cbd63949a2c55dac073012af6db6ccca9c6b2c0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b96370b8cce3bff879d104993cbd63949a2c55dac073012af6db6ccca9c6b2c0->enter($__internal_b96370b8cce3bff879d104993cbd63949a2c55dac073012af6db6ccca9c6b2c0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

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
        
        $__internal_b96370b8cce3bff879d104993cbd63949a2c55dac073012af6db6ccca9c6b2c0->leave($__internal_b96370b8cce3bff879d104993cbd63949a2c55dac073012af6db6ccca9c6b2c0_prof);

        
        $__internal_16169f2e0a8a2827501a54bff332600e52c6b32f84b4ec82d03815964797f078->leave($__internal_16169f2e0a8a2827501a54bff332600e52c6b32f84b4ec82d03815964797f078_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_c0cbc17e21e16c45eae0914db2f4f96126ae59978e7b1e9a353ddefb05a2e9a8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c0cbc17e21e16c45eae0914db2f4f96126ae59978e7b1e9a353ddefb05a2e9a8->enter($__internal_c0cbc17e21e16c45eae0914db2f4f96126ae59978e7b1e9a353ddefb05a2e9a8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_cab9cc35ec0afb79d1aebd8f6fde2b3b65ba293e6de67c8ceca6872f93333d16 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cab9cc35ec0afb79d1aebd8f6fde2b3b65ba293e6de67c8ceca6872f93333d16->enter($__internal_cab9cc35ec0afb79d1aebd8f6fde2b3b65ba293e6de67c8ceca6872f93333d16_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

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
        
        $__internal_cab9cc35ec0afb79d1aebd8f6fde2b3b65ba293e6de67c8ceca6872f93333d16->leave($__internal_cab9cc35ec0afb79d1aebd8f6fde2b3b65ba293e6de67c8ceca6872f93333d16_prof);

        
        $__internal_c0cbc17e21e16c45eae0914db2f4f96126ae59978e7b1e9a353ddefb05a2e9a8->leave($__internal_c0cbc17e21e16c45eae0914db2f4f96126ae59978e7b1e9a353ddefb05a2e9a8_prof);

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
