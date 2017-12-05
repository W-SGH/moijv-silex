<?php

/* register.html.twig */
class __TwigTemplate_951b18f7f194f98c9e9e261bdae8029cb543fb2a1ea50119e21b8900fcdbf65e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 2
        $this->parent = $this->loadTemplate("layout.html.twig", "register.html.twig", 2);
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
        $__internal_387627ac0a10f6d7544a1ceed9ce2a6e72981c56f8678774b6e498773461f9d5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_387627ac0a10f6d7544a1ceed9ce2a6e72981c56f8678774b6e498773461f9d5->enter($__internal_387627ac0a10f6d7544a1ceed9ce2a6e72981c56f8678774b6e498773461f9d5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "register.html.twig"));

        $__internal_42be462d41bff3d6ee2af2329a0f14962ea1096caca759ce9e9ef80c26dccb8b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_42be462d41bff3d6ee2af2329a0f14962ea1096caca759ce9e9ef80c26dccb8b->enter($__internal_42be462d41bff3d6ee2af2329a0f14962ea1096caca759ce9e9ef80c26dccb8b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "register.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_387627ac0a10f6d7544a1ceed9ce2a6e72981c56f8678774b6e498773461f9d5->leave($__internal_387627ac0a10f6d7544a1ceed9ce2a6e72981c56f8678774b6e498773461f9d5_prof);

        
        $__internal_42be462d41bff3d6ee2af2329a0f14962ea1096caca759ce9e9ef80c26dccb8b->leave($__internal_42be462d41bff3d6ee2af2329a0f14962ea1096caca759ce9e9ef80c26dccb8b_prof);

    }

    // line 4
    public function block_content($context, array $blocks = array())
    {
        $__internal_9dfb2da2d0f4fc3767bfa85ae9af931f99f56424993f6f7170236df867d9f5b7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9dfb2da2d0f4fc3767bfa85ae9af931f99f56424993f6f7170236df867d9f5b7->enter($__internal_9dfb2da2d0f4fc3767bfa85ae9af931f99f56424993f6f7170236df867d9f5b7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_cac0fd2d561bf823c4214835024ced8a7771eba3e8ddae984e1e8f967b7dca9c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cac0fd2d561bf823c4214835024ced8a7771eba3e8ddae984e1e8f967b7dca9c->enter($__internal_cac0fd2d561bf823c4214835024ced8a7771eba3e8ddae984e1e8f967b7dca9c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 5
        echo "    ";
        $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->setTheme((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 5, $this->getSourceContext()); })()), array(0 => "bootstrap_3_layout.html.twig"));
        // line 6
        echo "    <div class=\"section section-full-screen section-signup\" style=\"background-image: url('";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/city.jpg"), "html", null, true);
        echo "'); background-size: cover; background-position: top center; min-height: 700px;\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-md-6 col-md-offset-3\">
                    <div class=\"card card-signup\">
                        ";
        // line 11
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 11, $this->getSourceContext()); })()), 'form');
        echo "
                    </div>
                </div>
            </div>
        </div>
    </div>

                        
";
        
        $__internal_cac0fd2d561bf823c4214835024ced8a7771eba3e8ddae984e1e8f967b7dca9c->leave($__internal_cac0fd2d561bf823c4214835024ced8a7771eba3e8ddae984e1e8f967b7dca9c_prof);

        
        $__internal_9dfb2da2d0f4fc3767bfa85ae9af931f99f56424993f6f7170236df867d9f5b7->leave($__internal_9dfb2da2d0f4fc3767bfa85ae9af931f99f56424993f6f7170236df867d9f5b7_prof);

    }

    public function getTemplateName()
    {
        return "register.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  61 => 11,  52 => 6,  49 => 5,  40 => 4,  11 => 2,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{# empty Twig template #}
{% extends \"layout.html.twig\" %}

{% block content %}
    {% form_theme form \"bootstrap_3_layout.html.twig\" %}
    <div class=\"section section-full-screen section-signup\" style=\"background-image: url('{{asset('img/city.jpg')}}'); background-size: cover; background-position: top center; min-height: 700px;\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-md-6 col-md-offset-3\">
                    <div class=\"card card-signup\">
                        {{form(form) }}
                    </div>
                </div>
            </div>
        </div>
    </div>

                        
{% endblock %}", "register.html.twig", "C:\\xampp\\htdocs\\objet\\moijvtest\\templates\\register.html.twig");
    }
}
