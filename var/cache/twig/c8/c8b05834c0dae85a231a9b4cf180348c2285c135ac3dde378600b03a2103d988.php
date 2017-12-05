<?php

/* admin/login_admin.html.twig */
class __TwigTemplate_d259e88249f4439665e5cf405371f30ec37fd3932f8d61c0f8e9905894bc8d10 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("admin/layout_admin.html.twig", "admin/login_admin.html.twig", 1);
        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "admin/layout_admin.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_a0a32eae040432187a4f0bd1ef1e4c8081887bd7cdd054d23ed517984a5aa1f3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a0a32eae040432187a4f0bd1ef1e4c8081887bd7cdd054d23ed517984a5aa1f3->enter($__internal_a0a32eae040432187a4f0bd1ef1e4c8081887bd7cdd054d23ed517984a5aa1f3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "admin/login_admin.html.twig"));

        $__internal_2a3854685c36be5ac653a8ebc10083d03302a4955dfc3f6825c24ab7dfb9e525 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2a3854685c36be5ac653a8ebc10083d03302a4955dfc3f6825c24ab7dfb9e525->enter($__internal_2a3854685c36be5ac653a8ebc10083d03302a4955dfc3f6825c24ab7dfb9e525_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "admin/login_admin.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a0a32eae040432187a4f0bd1ef1e4c8081887bd7cdd054d23ed517984a5aa1f3->leave($__internal_a0a32eae040432187a4f0bd1ef1e4c8081887bd7cdd054d23ed517984a5aa1f3_prof);

        
        $__internal_2a3854685c36be5ac653a8ebc10083d03302a4955dfc3f6825c24ab7dfb9e525->leave($__internal_2a3854685c36be5ac653a8ebc10083d03302a4955dfc3f6825c24ab7dfb9e525_prof);

    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        $__internal_87920c7260f589fd35f0f9b74e90d19b6d84e6828ab775287360656d902b9dd9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_87920c7260f589fd35f0f9b74e90d19b6d84e6828ab775287360656d902b9dd9->enter($__internal_87920c7260f589fd35f0f9b74e90d19b6d84e6828ab775287360656d902b9dd9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_f13314e4504cd7e569c5e15f566a6a2f4fd3519224f71b70eb41a7e35a35f672 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f13314e4504cd7e569c5e15f566a6a2f4fd3519224f71b70eb41a7e35a35f672->enter($__internal_f13314e4504cd7e569c5e15f566a6a2f4fd3519224f71b70eb41a7e35a35f672_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 4
        echo "     <form class=\"form\" method=\"post\" action=\"";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_login_check");
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
        // line 16
        echo twig_escape_filter($this->env, (isset($context["last_username"]) || array_key_exists("last_username", $context) ? $context["last_username"] : (function () { throw new Twig_Error_Runtime('Variable "last_username" does not exist.', 16, $this->getSourceContext()); })()), "html", null, true);
        echo "\"><span class=\"material-input\"></span></div>
                                </div>

                                <div class=\"input-group\">
                                    <span class=\"input-group-addon\">
                                        <i class=\"material-icons\">lock_outline</i>
                                    </span>
                                    <div class=\"form-group is-empty\"><input placeholder=\"Password...\" class=\"form-control\" type=\"password\" name=\"_password\" value=\"\"><span class=\"material-input\"></span></div>
                                </div>
                                ";
        // line 25
        if ((isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new Twig_Error_Runtime('Variable "error" does not exist.', 25, $this->getSourceContext()); })())) {
            // line 26
            echo "                                    <div class=\"alert alert-danger text-center \">
                                        ";
            // line 27
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans((isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new Twig_Error_Runtime('Variable "error" does not exist.', 27, $this->getSourceContext()); })())), "html", null, true);
            echo " ";
            echo " 
                                    </div>
                                    
                                 ";
        }
        // line 30
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

";
        
        $__internal_f13314e4504cd7e569c5e15f566a6a2f4fd3519224f71b70eb41a7e35a35f672->leave($__internal_f13314e4504cd7e569c5e15f566a6a2f4fd3519224f71b70eb41a7e35a35f672_prof);

        
        $__internal_87920c7260f589fd35f0f9b74e90d19b6d84e6828ab775287360656d902b9dd9->leave($__internal_87920c7260f589fd35f0f9b74e90d19b6d84e6828ab775287360656d902b9dd9_prof);

    }

    public function getTemplateName()
    {
        return "admin/login_admin.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  90 => 30,  82 => 27,  79 => 26,  77 => 25,  65 => 16,  49 => 4,  40 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"admin/layout_admin.html.twig\" %}

{% block content %}
     <form class=\"form\" method=\"post\" action=\"{{ path('admin_login_check') }}\">
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

{% endblock %}", "admin/login_admin.html.twig", "C:\\xampp\\htdocs\\objet\\moijvtest\\templates\\admin\\login_admin.html.twig");
    }
}
