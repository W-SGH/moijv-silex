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
        $__internal_1722894048a0f441bcb53a592c92ae44f96a04bcdec62f62d72d273e5aa63b29 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1722894048a0f441bcb53a592c92ae44f96a04bcdec62f62d72d273e5aa63b29->enter($__internal_1722894048a0f441bcb53a592c92ae44f96a04bcdec62f62d72d273e5aa63b29_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "register.html.twig"));

        $__internal_a536dc4ba6dcb5001e31d819b5dbad0b41c0888b9bc5eab563dca415a4a05ca0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a536dc4ba6dcb5001e31d819b5dbad0b41c0888b9bc5eab563dca415a4a05ca0->enter($__internal_a536dc4ba6dcb5001e31d819b5dbad0b41c0888b9bc5eab563dca415a4a05ca0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "register.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1722894048a0f441bcb53a592c92ae44f96a04bcdec62f62d72d273e5aa63b29->leave($__internal_1722894048a0f441bcb53a592c92ae44f96a04bcdec62f62d72d273e5aa63b29_prof);

        
        $__internal_a536dc4ba6dcb5001e31d819b5dbad0b41c0888b9bc5eab563dca415a4a05ca0->leave($__internal_a536dc4ba6dcb5001e31d819b5dbad0b41c0888b9bc5eab563dca415a4a05ca0_prof);

    }

    // line 4
    public function block_content($context, array $blocks = array())
    {
        $__internal_a10d7753359bca712554168c766fa36bb6076d5a3109a62c292f06e457875423 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a10d7753359bca712554168c766fa36bb6076d5a3109a62c292f06e457875423->enter($__internal_a10d7753359bca712554168c766fa36bb6076d5a3109a62c292f06e457875423_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_f71e258362159d70d0d859d00d286a0791d98911989115949fbd86dc76f92d95 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f71e258362159d70d0d859d00d286a0791d98911989115949fbd86dc76f92d95->enter($__internal_f71e258362159d70d0d859d00d286a0791d98911989115949fbd86dc76f92d95_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

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
        
        $__internal_f71e258362159d70d0d859d00d286a0791d98911989115949fbd86dc76f92d95->leave($__internal_f71e258362159d70d0d859d00d286a0791d98911989115949fbd86dc76f92d95_prof);

        
        $__internal_a10d7753359bca712554168c766fa36bb6076d5a3109a62c292f06e457875423->leave($__internal_a10d7753359bca712554168c766fa36bb6076d5a3109a62c292f06e457875423_prof);

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
