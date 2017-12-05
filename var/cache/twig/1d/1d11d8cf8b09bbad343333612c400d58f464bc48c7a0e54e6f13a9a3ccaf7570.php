<?php

/* login.html.twig */
class __TwigTemplate_4174bdcc162bc5f573271fe2476381adbdcf192d795571274f9bf1052174ffdd extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layout.html.twig", "login.html.twig", 1);
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
        $__internal_8f7b099f481477213ea098bea041ec6cd18a2e05b8616af15657cf8c87399fbd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8f7b099f481477213ea098bea041ec6cd18a2e05b8616af15657cf8c87399fbd->enter($__internal_8f7b099f481477213ea098bea041ec6cd18a2e05b8616af15657cf8c87399fbd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "login.html.twig"));

        $__internal_7ff14aa8dc3a0e0a0df07a83b68444c09f708286ea0cb846cbe6583453854fb4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7ff14aa8dc3a0e0a0df07a83b68444c09f708286ea0cb846cbe6583453854fb4->enter($__internal_7ff14aa8dc3a0e0a0df07a83b68444c09f708286ea0cb846cbe6583453854fb4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "login.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8f7b099f481477213ea098bea041ec6cd18a2e05b8616af15657cf8c87399fbd->leave($__internal_8f7b099f481477213ea098bea041ec6cd18a2e05b8616af15657cf8c87399fbd_prof);

        
        $__internal_7ff14aa8dc3a0e0a0df07a83b68444c09f708286ea0cb846cbe6583453854fb4->leave($__internal_7ff14aa8dc3a0e0a0df07a83b68444c09f708286ea0cb846cbe6583453854fb4_prof);

    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        $__internal_ea98e918fa912c406c15c8d6242f88a82210dd3f62f21fdd50d4a81400371f78 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ea98e918fa912c406c15c8d6242f88a82210dd3f62f21fdd50d4a81400371f78->enter($__internal_ea98e918fa912c406c15c8d6242f88a82210dd3f62f21fdd50d4a81400371f78_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_7896bd87a77b445583d56249710f97ce11338f86682f2dffd90706afb3add2be = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7896bd87a77b445583d56249710f97ce11338f86682f2dffd90706afb3add2be->enter($__internal_7896bd87a77b445583d56249710f97ce11338f86682f2dffd90706afb3add2be_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 4
        echo "
    <div class=\"section section-full-screen section-signup\" style=\"background-image: url('";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/city.jpg"), "html", null, true);
        echo "'); background-size: cover; background-position: top center; min-height: 700px;\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-md-4 col-md-offset-4\">
                    <div class=\"card card-signup\">
                        <form class=\"form\" method=\"post\" action=\"";
        // line 10
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("login_check");
        echo "\">
                            <div class=\"header header-primary text-center\">
                                <h4>Sign In</h4>
                                
                            </div>
                            
                            <div class=\"content\">
                                  
                                <div class=\"input-group\">
                                    <span class=\"input-group-addon\">
                                        <i class=\"material-icons\">face</i>
                                    </span>
                                    <div class=\"form-group is-empty\"><input class=\"form-control\" placeholder=\"Nom d'utilisateur...\" type=\"text\" name=\"_username\" value=\"";
        // line 22
        echo twig_escape_filter($this->env, (isset($context["last_username"]) || array_key_exists("last_username", $context) ? $context["last_username"] : (function () { throw new Twig_Error_Runtime('Variable "last_username" does not exist.', 22, $this->getSourceContext()); })()), "html", null, true);
        echo "\"><span class=\"material-input\"></span></div>
                                </div>

                                <div class=\"input-group\">
                                    <span class=\"input-group-addon\">
                                        <i class=\"material-icons\">lock_outline</i>
                                    </span>
                                    <div class=\"form-group is-empty\"><input placeholder=\"Password...\" class=\"form-control\" type=\"password\" name=\"_password\" value=\"\"><span class=\"material-input\"></span></div>
                                </div>
                                ";
        // line 31
        if ((isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new Twig_Error_Runtime('Variable "error" does not exist.', 31, $this->getSourceContext()); })())) {
            // line 32
            echo "                                    <div class=\"alert alert-danger text-center \">
                                        ";
            // line 33
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans((isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new Twig_Error_Runtime('Variable "error" does not exist.', 33, $this->getSourceContext()); })())), "html", null, true);
            echo " ";
            echo " 
                                    </div>
                                    
                                 ";
        }
        // line 36
        echo " 

                                <!-- If you want to add a checkbox to this form, uncomment this code

                                <div class=\"checkbox\">
                                        <label>
                                                <input type=\"checkbox\" name=\"optionsCheckboxes\" checked>
                                                Subscribe to newsletter
                                        </label>
                                </div> -->
                            </div>
                            <div class=\"footer text-center\">
                                <button type=\"submit\" class=\"btn btn-simple btn-primary btn-lg\">Connexion</button>
                            </div>
                        </form>
                    </div>

                </div>
            </div>
        </div>
    </div>
    

";
        
        $__internal_7896bd87a77b445583d56249710f97ce11338f86682f2dffd90706afb3add2be->leave($__internal_7896bd87a77b445583d56249710f97ce11338f86682f2dffd90706afb3add2be_prof);

        
        $__internal_ea98e918fa912c406c15c8d6242f88a82210dd3f62f21fdd50d4a81400371f78->leave($__internal_ea98e918fa912c406c15c8d6242f88a82210dd3f62f21fdd50d4a81400371f78_prof);

    }

    public function getTemplateName()
    {
        return "login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  100 => 36,  92 => 33,  89 => 32,  87 => 31,  75 => 22,  60 => 10,  52 => 5,  49 => 4,  40 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"layout.html.twig\" %}

{% block content %}

    <div class=\"section section-full-screen section-signup\" style=\"background-image: url('{{asset('img/city.jpg')}}'); background-size: cover; background-position: top center; min-height: 700px;\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-md-4 col-md-offset-4\">
                    <div class=\"card card-signup\">
                        <form class=\"form\" method=\"post\" action=\"{{ path('login_check') }}\">
                            <div class=\"header header-primary text-center\">
                                <h4>Sign In</h4>
                                
                            </div>
                            
                            <div class=\"content\">
                                  
                                <div class=\"input-group\">
                                    <span class=\"input-group-addon\">
                                        <i class=\"material-icons\">face</i>
                                    </span>
                                    <div class=\"form-group is-empty\"><input class=\"form-control\" placeholder=\"Nom d'utilisateur...\" type=\"text\" name=\"_username\" value=\"{{ last_username }}\"><span class=\"material-input\"></span></div>
                                </div>

                                <div class=\"input-group\">
                                    <span class=\"input-group-addon\">
                                        <i class=\"material-icons\">lock_outline</i>
                                    </span>
                                    <div class=\"form-group is-empty\"><input placeholder=\"Password...\" class=\"form-control\" type=\"password\" name=\"_password\" value=\"\"><span class=\"material-input\"></span></div>
                                </div>
                                {% if error %}
                                    <div class=\"alert alert-danger text-center \">
                                        {{ error | trans }} {# <?php echo trans(\$error) ?> #} 
                                    </div>
                                    
                                 {% endif %} 

                                <!-- If you want to add a checkbox to this form, uncomment this code

                                <div class=\"checkbox\">
                                        <label>
                                                <input type=\"checkbox\" name=\"optionsCheckboxes\" checked>
                                                Subscribe to newsletter
                                        </label>
                                </div> -->
                            </div>
                            <div class=\"footer text-center\">
                                <button type=\"submit\" class=\"btn btn-simple btn-primary btn-lg\">Connexion</button>
                            </div>
                        </form>
                    </div>

                </div>
            </div>
        </div>
    </div>
    

{% endblock %}", "login.html.twig", "C:\\xampp\\htdocs\\objet\\moijvtest\\templates\\login.html.twig");
    }
}
