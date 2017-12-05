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
        $__internal_2871cf167061fd90a0c84c4c0f50c47aae991fb1f8664e77e15b17d44f81be1f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2871cf167061fd90a0c84c4c0f50c47aae991fb1f8664e77e15b17d44f81be1f->enter($__internal_2871cf167061fd90a0c84c4c0f50c47aae991fb1f8664e77e15b17d44f81be1f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "login.html.twig"));

        $__internal_0bc46442af7718a73df1f1346b4dab124e34479931e1aa8c8fa865c53c152366 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0bc46442af7718a73df1f1346b4dab124e34479931e1aa8c8fa865c53c152366->enter($__internal_0bc46442af7718a73df1f1346b4dab124e34479931e1aa8c8fa865c53c152366_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "login.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2871cf167061fd90a0c84c4c0f50c47aae991fb1f8664e77e15b17d44f81be1f->leave($__internal_2871cf167061fd90a0c84c4c0f50c47aae991fb1f8664e77e15b17d44f81be1f_prof);

        
        $__internal_0bc46442af7718a73df1f1346b4dab124e34479931e1aa8c8fa865c53c152366->leave($__internal_0bc46442af7718a73df1f1346b4dab124e34479931e1aa8c8fa865c53c152366_prof);

    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        $__internal_a9ec036f8ff3342adc03316b4ed626bf67ba12993ece02eedd3ca5a6671cdaf9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a9ec036f8ff3342adc03316b4ed626bf67ba12993ece02eedd3ca5a6671cdaf9->enter($__internal_a9ec036f8ff3342adc03316b4ed626bf67ba12993ece02eedd3ca5a6671cdaf9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_eda1215a3ef52e0bb758c1f4b06adc8a2087df2359e3ac641e2251e9f93b21b9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_eda1215a3ef52e0bb758c1f4b06adc8a2087df2359e3ac641e2251e9f93b21b9->enter($__internal_eda1215a3ef52e0bb758c1f4b06adc8a2087df2359e3ac641e2251e9f93b21b9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

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
        
        $__internal_eda1215a3ef52e0bb758c1f4b06adc8a2087df2359e3ac641e2251e9f93b21b9->leave($__internal_eda1215a3ef52e0bb758c1f4b06adc8a2087df2359e3ac641e2251e9f93b21b9_prof);

        
        $__internal_a9ec036f8ff3342adc03316b4ed626bf67ba12993ece02eedd3ca5a6671cdaf9->leave($__internal_a9ec036f8ff3342adc03316b4ed626bf67ba12993ece02eedd3ca5a6671cdaf9_prof);

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
