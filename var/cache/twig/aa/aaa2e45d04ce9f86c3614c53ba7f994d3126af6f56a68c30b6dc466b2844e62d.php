<?php

/* @WebProfiler/Profiler/header.html.twig */
class __TwigTemplate_1ddedd11f853d5c76c7b186173bfd90881a1d09873e74cc177a5d87c4fc68f54 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_95d0551cba95ddeb1a80690ab27cb4bcb98f5cad7717b7d2dd14524b033f5c33 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_95d0551cba95ddeb1a80690ab27cb4bcb98f5cad7717b7d2dd14524b033f5c33->enter($__internal_95d0551cba95ddeb1a80690ab27cb4bcb98f5cad7717b7d2dd14524b033f5c33_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/header.html.twig"));

        $__internal_1c05f7b047b89cbc32d6e7d0d90c509a73ac6ab7a9fa8783ed77e04af3ce74e3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1c05f7b047b89cbc32d6e7d0d90c509a73ac6ab7a9fa8783ed77e04af3ce74e3->enter($__internal_1c05f7b047b89cbc32d6e7d0d90c509a73ac6ab7a9fa8783ed77e04af3ce74e3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/header.html.twig"));

        // line 1
        echo "<div id=\"header\">
    <div class=\"container\">
        <h1>";
        // line 3
        echo twig_include($this->env, $context, "@WebProfiler/Icon/symfony.svg");
        echo " Symfony <span>Profiler</span></h1>

        <div class=\"search\">
            <form method=\"get\" action=\"https://symfony.com/search\" target=\"_blank\">
                <div class=\"form-row\">
                    <input name=\"q\" id=\"search-id\" type=\"search\" placeholder=\"search on symfony.com\">
                    <button type=\"submit\" class=\"btn\">Search</button>
                </div>
           </form>
        </div>
    </div>
</div>
";
        
        $__internal_95d0551cba95ddeb1a80690ab27cb4bcb98f5cad7717b7d2dd14524b033f5c33->leave($__internal_95d0551cba95ddeb1a80690ab27cb4bcb98f5cad7717b7d2dd14524b033f5c33_prof);

        
        $__internal_1c05f7b047b89cbc32d6e7d0d90c509a73ac6ab7a9fa8783ed77e04af3ce74e3->leave($__internal_1c05f7b047b89cbc32d6e7d0d90c509a73ac6ab7a9fa8783ed77e04af3ce74e3_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/header.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  29 => 3,  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div id=\"header\">
    <div class=\"container\">
        <h1>{{ include('@WebProfiler/Icon/symfony.svg') }} Symfony <span>Profiler</span></h1>

        <div class=\"search\">
            <form method=\"get\" action=\"https://symfony.com/search\" target=\"_blank\">
                <div class=\"form-row\">
                    <input name=\"q\" id=\"search-id\" type=\"search\" placeholder=\"search on symfony.com\">
                    <button type=\"submit\" class=\"btn\">Search</button>
                </div>
           </form>
        </div>
    </div>
</div>
", "@WebProfiler/Profiler/header.html.twig", "C:\\xampp\\htdocs\\objet\\moijvtest\\vendor\\symfony\\web-profiler-bundle\\Resources\\views\\Profiler\\header.html.twig");
    }
}
