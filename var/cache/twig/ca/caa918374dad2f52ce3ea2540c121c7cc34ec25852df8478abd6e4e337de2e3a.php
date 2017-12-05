<?php

/* layout.html.twig */
class __TwigTemplate_235d22440fac8b012697c5b5624229019680f016b9f7c1aff30ffbe00aa15c38 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_e6bf1e9de93cc0492154c0ccc0c3744336f6319829943e21df43a2741fdf6fc9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e6bf1e9de93cc0492154c0ccc0c3744336f6319829943e21df43a2741fdf6fc9->enter($__internal_e6bf1e9de93cc0492154c0ccc0c3744336f6319829943e21df43a2741fdf6fc9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "layout.html.twig"));

        $__internal_9aeca4baa28e2514728f5f2b07c64b109c9a6db3e8a30f0409937d1c985efc4b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9aeca4baa28e2514728f5f2b07c64b109c9a6db3e8a30f0409937d1c985efc4b->enter($__internal_9aeca4baa28e2514728f5f2b07c64b109c9a6db3e8a30f0409937d1c985efc4b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "layout.html.twig"));

        // line 1
        echo "<!doctype html>
<html lang=\"en\">
    <head>
        <meta charset=\"utf-8\" />
        <link rel=\"apple-touch-icon\" sizes=\"76x76\" href=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/apple-icon.png"), "html", null, true);
        echo "\">
        <link rel=\"icon\" type=\"image/png\" href=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/favicon.png"), "html", null, true);
        echo "\">
        <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge,chrome=1\" />

        <title>Material Kit by Creative Tim</title>

        <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />

        <!--     Fonts and icons     -->
        <link rel=\"stylesheet\" href=\"https://fonts.googleapis.com/icon?family=Material+Icons\" />
        <link rel=\"stylesheet\" type=\"text/css\" href=\"https://fonts.googleapis.com/css?family=Roboto:300,400,500,700\" />
        <link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css\" />

        <!-- CSS Files -->
        <link href=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/bootstrap.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" />
        <link href=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/material-kit.css"), "html", null, true);
        echo "\" rel=\"stylesheet\"/>

        <!-- CSS Just for demo purpose, don't include it in your project -->
        <link href=\"";
        // line 23
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/demo.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" />
        <link href=\"";
        // line 24
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/main.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" />


    </head>

    <body class=\"index-page\">
        <!-- Navbar -->
        <nav class=\"navbar navbar-transparent navbar-fixed-top navbar-color-on-scroll\">
            <div class=\"container\">
                <div class=\"navbar-header\">
                    <button type=\"button\" class=\"navbar-toggle\" data-toggle=\"collapse\" data-target=\"#navigation-index\">
                        <span class=\"sr-only\">Toggle navigation</span>
                        <span class=\"icon-bar\"></span>
                        <span class=\"icon-bar\"></span>
                        <span class=\"icon-bar\"></span>
                    </button>
                    <div class=\"logo-container\">
                        ";
        // line 41
        if (twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 41, $this->getSourceContext()); })()), "user", array())) {
            // line 42
            echo "                            <div class=\"logo\">
                                <img src=\"";
            // line 43
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/logo.png"), "html", null, true);
            echo "\" alt=\"Creative Tim Logo\" rel=\"tooltip\" title=\"<b>Material Kit</b> was Designed & Coded with care by the staff from <b>Creative Tim</b>\" data-placement=\"bottom\" data-html=\"true\">
                            </div>
                            <div class=\"brand\">
                                ";
            // line 46
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 46, $this->getSourceContext()); })()), "user", array()), "username", array()), "html", null, true);
            echo " <a class=\"material-icons\" href=\"";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("logout");
            echo "\" title=\"deconnexion\">exit_to_app</a>
                            </div>
                        ";
        } else {
            // line 49
            echo "                            <a href=\"";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("login");
            echo "\" title=\"connexion\">Connectez-vous !</a><br>
                            <a href=\"";
            // line 50
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("register");
            echo "\" title=\"inscription\">Inscrivez-vous !</a><br>
                        ";
        }
        // line 52
        echo "                    </div>
                </div>
            </div>
        </nav>
        <!-- End Navbar -->

        <div class=\"wrapper\">
            <div class=\"header header-filter\" style=\"background-image: url('";
        // line 59
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/bg2.jpeg"), "html", null, true);
        echo "');\">
                <div class=\"container\">
                    <div class=\"row\">
                        <div class=\"col-md-8 col-md-offset-2\">
                            <div class=\"brand\">
                                <h1>Material Kit.</h1>
                                <h3>A Badass Bootstrap UI Kit based on Material Design.</h3>
                            </div>
                        </div>
                    </div>

                </div>
            </div>

            <div class=\"main main-raised\">
                <div class=\"section section-basic\">
                    <div class=\"container\">
                        ";
        // line 76
        $this->displayBlock('content', $context, $blocks);
        // line 77
        echo "

                    </div>
                </div>
            </div>
            <footer class=\"footer\">
                <div class=\"container\">
                    <nav class=\"pull-left\">
                        <ul>
                            <li>
                                <a href=\"http://www.creative-tim.com\">
                                    Creative Tim
                                </a>
                            </li>
                            <li>
                                <a href=\"http://presentation.creative-tim.com\">
                                    About Us
                                </a>
                            </li>
                            <li>
                                <a href=\"http://blog.creative-tim.com\">
                                    Blog
                                </a>
                            </li>
                            <li>
                                <a href=\"http://www.creative-tim.com/license\">
                                    Licenses
                                </a>
                            </li>
                        </ul>
                    </nav>
                    <div class=\"copyright pull-right\">
                        &copy; 2016, made with <i class=\"material-icons\">favorite</i> by Creative Tim for a better web.
                    </div>
                </div>
            </footer>
        </div>

        <!-- Sart Modal -->
        <div class=\"modal fade\" id=\"myModal\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"myModalLabel\" aria-hidden=\"true\">
            <div class=\"modal-dialog\">
                <div class=\"modal-content\">
                    <div class=\"modal-header\">
                        <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-hidden=\"true\">
                            <i class=\"material-icons\">clear</i>
                        </button>
                        <h4 class=\"modal-title\">Modal title</h4>
                    </div>
                    <div class=\"modal-body\">
                        <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean. A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country, in which roasted parts of sentences fly into your mouth. Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic life One day however a small line of blind text by the name of Lorem Ipsum decided to leave for the far World of Grammar.
                        </p>
                    </div>
                    <div class=\"modal-footer\">
                        <button type=\"button\" class=\"btn btn-default btn-simple\">Nice Button</button>
                        <button type=\"button\" class=\"btn btn-danger btn-simple\" data-dismiss=\"modal\">Close</button>
                    </div>
                </div>
            </div>
        </div>
        <!--  End Modal -->


    </body>
    <!--   Core JS Files   -->
    <script src=\"";
        // line 141
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/jquery.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
    <script src=\"";
        // line 142
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/bootstrap.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
    <script src=\"";
        // line 143
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/material.min.js"), "html", null, true);
        echo "\"></script>

    <!--  Plugin for the Sliders, full documentation here: http://refreshless.com/nouislider/ -->
    <script src=\"";
        // line 146
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/nouislider.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>

    <!--  Plugin for the Datepicker, full documentation here: http://www.eyecon.ro/bootstrap-datepicker/ -->
    <script src=\"";
        // line 149
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/bootstrap-datepicker.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>

    <!-- Control Center for Material Kit: activating the ripples, parallax effects, scripts from the example pages etc -->
    <script src=\"";
        // line 152
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/material-kit.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>

    <script type=\"text/javascript\">

        \$().ready(function () {
            // the body of this function is in assets/material-kit.js
            materialKit.initSliders();
            window_width = \$(window).width();

            if (window_width >= 992) {
                big_image = \$('.wrapper > .header');

                \$(window).on('scroll', materialKitDemo.checkScrollForParallax);
            }

        });
    </script>
</html>
";
        
        $__internal_e6bf1e9de93cc0492154c0ccc0c3744336f6319829943e21df43a2741fdf6fc9->leave($__internal_e6bf1e9de93cc0492154c0ccc0c3744336f6319829943e21df43a2741fdf6fc9_prof);

        
        $__internal_9aeca4baa28e2514728f5f2b07c64b109c9a6db3e8a30f0409937d1c985efc4b->leave($__internal_9aeca4baa28e2514728f5f2b07c64b109c9a6db3e8a30f0409937d1c985efc4b_prof);

    }

    // line 76
    public function block_content($context, array $blocks = array())
    {
        $__internal_f938131ff97ad72424e363e8d6309395c94f402449498efd17367399f22f9559 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f938131ff97ad72424e363e8d6309395c94f402449498efd17367399f22f9559->enter($__internal_f938131ff97ad72424e363e8d6309395c94f402449498efd17367399f22f9559_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_5916eb9f39f44e25d9bde85c29183d4693c4b60a311b0848aed8a1858cd3b32d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5916eb9f39f44e25d9bde85c29183d4693c4b60a311b0848aed8a1858cd3b32d->enter($__internal_5916eb9f39f44e25d9bde85c29183d4693c4b60a311b0848aed8a1858cd3b32d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        echo " ";
        
        $__internal_5916eb9f39f44e25d9bde85c29183d4693c4b60a311b0848aed8a1858cd3b32d->leave($__internal_5916eb9f39f44e25d9bde85c29183d4693c4b60a311b0848aed8a1858cd3b32d_prof);

        
        $__internal_f938131ff97ad72424e363e8d6309395c94f402449498efd17367399f22f9559->leave($__internal_f938131ff97ad72424e363e8d6309395c94f402449498efd17367399f22f9559_prof);

    }

    public function getTemplateName()
    {
        return "layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  267 => 76,  238 => 152,  232 => 149,  226 => 146,  220 => 143,  216 => 142,  212 => 141,  146 => 77,  144 => 76,  124 => 59,  115 => 52,  110 => 50,  105 => 49,  97 => 46,  91 => 43,  88 => 42,  86 => 41,  66 => 24,  62 => 23,  56 => 20,  52 => 19,  36 => 6,  32 => 5,  26 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!doctype html>
<html lang=\"en\">
    <head>
        <meta charset=\"utf-8\" />
        <link rel=\"apple-touch-icon\" sizes=\"76x76\" href=\"{{asset('img/apple-icon.png')}}\">
        <link rel=\"icon\" type=\"image/png\" href=\"{{asset('img/favicon.png')}}\">
        <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge,chrome=1\" />

        <title>Material Kit by Creative Tim</title>

        <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />

        <!--     Fonts and icons     -->
        <link rel=\"stylesheet\" href=\"https://fonts.googleapis.com/icon?family=Material+Icons\" />
        <link rel=\"stylesheet\" type=\"text/css\" href=\"https://fonts.googleapis.com/css?family=Roboto:300,400,500,700\" />
        <link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css\" />

        <!-- CSS Files -->
        <link href=\"{{asset('css/bootstrap.min.css')}}\" rel=\"stylesheet\" />
        <link href=\"{{asset('css/material-kit.css')}}\" rel=\"stylesheet\"/>

        <!-- CSS Just for demo purpose, don't include it in your project -->
        <link href=\"{{asset('css/demo.css')}}\" rel=\"stylesheet\" />
        <link href=\"{{asset('css/main.css')}}\" rel=\"stylesheet\" />


    </head>

    <body class=\"index-page\">
        <!-- Navbar -->
        <nav class=\"navbar navbar-transparent navbar-fixed-top navbar-color-on-scroll\">
            <div class=\"container\">
                <div class=\"navbar-header\">
                    <button type=\"button\" class=\"navbar-toggle\" data-toggle=\"collapse\" data-target=\"#navigation-index\">
                        <span class=\"sr-only\">Toggle navigation</span>
                        <span class=\"icon-bar\"></span>
                        <span class=\"icon-bar\"></span>
                        <span class=\"icon-bar\"></span>
                    </button>
                    <div class=\"logo-container\">
                        {% if app.user %}
                            <div class=\"logo\">
                                <img src=\"{{asset('img/logo.png')}}\" alt=\"Creative Tim Logo\" rel=\"tooltip\" title=\"<b>Material Kit</b> was Designed & Coded with care by the staff from <b>Creative Tim</b>\" data-placement=\"bottom\" data-html=\"true\">
                            </div>
                            <div class=\"brand\">
                                {{ app.user.username }} <a class=\"material-icons\" href=\"{{path('logout' )}}\" title=\"deconnexion\">exit_to_app</a>
                            </div>
                        {% else %}
                            <a href=\"{{ path('login') }}\" title=\"connexion\">Connectez-vous !</a><br>
                            <a href=\"{{ path('register') }}\" title=\"inscription\">Inscrivez-vous !</a><br>
                        {% endif %}
                    </div>
                </div>
            </div>
        </nav>
        <!-- End Navbar -->

        <div class=\"wrapper\">
            <div class=\"header header-filter\" style=\"background-image: url('{{asset('img/bg2.jpeg')}}');\">
                <div class=\"container\">
                    <div class=\"row\">
                        <div class=\"col-md-8 col-md-offset-2\">
                            <div class=\"brand\">
                                <h1>Material Kit.</h1>
                                <h3>A Badass Bootstrap UI Kit based on Material Design.</h3>
                            </div>
                        </div>
                    </div>

                </div>
            </div>

            <div class=\"main main-raised\">
                <div class=\"section section-basic\">
                    <div class=\"container\">
                        {% block content %} {% endblock %}


                    </div>
                </div>
            </div>
            <footer class=\"footer\">
                <div class=\"container\">
                    <nav class=\"pull-left\">
                        <ul>
                            <li>
                                <a href=\"http://www.creative-tim.com\">
                                    Creative Tim
                                </a>
                            </li>
                            <li>
                                <a href=\"http://presentation.creative-tim.com\">
                                    About Us
                                </a>
                            </li>
                            <li>
                                <a href=\"http://blog.creative-tim.com\">
                                    Blog
                                </a>
                            </li>
                            <li>
                                <a href=\"http://www.creative-tim.com/license\">
                                    Licenses
                                </a>
                            </li>
                        </ul>
                    </nav>
                    <div class=\"copyright pull-right\">
                        &copy; 2016, made with <i class=\"material-icons\">favorite</i> by Creative Tim for a better web.
                    </div>
                </div>
            </footer>
        </div>

        <!-- Sart Modal -->
        <div class=\"modal fade\" id=\"myModal\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"myModalLabel\" aria-hidden=\"true\">
            <div class=\"modal-dialog\">
                <div class=\"modal-content\">
                    <div class=\"modal-header\">
                        <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-hidden=\"true\">
                            <i class=\"material-icons\">clear</i>
                        </button>
                        <h4 class=\"modal-title\">Modal title</h4>
                    </div>
                    <div class=\"modal-body\">
                        <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean. A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country, in which roasted parts of sentences fly into your mouth. Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic life One day however a small line of blind text by the name of Lorem Ipsum decided to leave for the far World of Grammar.
                        </p>
                    </div>
                    <div class=\"modal-footer\">
                        <button type=\"button\" class=\"btn btn-default btn-simple\">Nice Button</button>
                        <button type=\"button\" class=\"btn btn-danger btn-simple\" data-dismiss=\"modal\">Close</button>
                    </div>
                </div>
            </div>
        </div>
        <!--  End Modal -->


    </body>
    <!--   Core JS Files   -->
    <script src=\"{{asset('js/jquery.min.js')}}\" type=\"text/javascript\"></script>
    <script src=\"{{asset('js/bootstrap.min.js')}}\" type=\"text/javascript\"></script>
    <script src=\"{{asset('js/material.min.js')}}\"></script>

    <!--  Plugin for the Sliders, full documentation here: http://refreshless.com/nouislider/ -->
    <script src=\"{{asset('js/nouislider.min.js')}}\" type=\"text/javascript\"></script>

    <!--  Plugin for the Datepicker, full documentation here: http://www.eyecon.ro/bootstrap-datepicker/ -->
    <script src=\"{{asset('js/bootstrap-datepicker.js')}}\" type=\"text/javascript\"></script>

    <!-- Control Center for Material Kit: activating the ripples, parallax effects, scripts from the example pages etc -->
    <script src=\"{{asset('js/material-kit.js')}}\" type=\"text/javascript\"></script>

    <script type=\"text/javascript\">

        \$().ready(function () {
            // the body of this function is in assets/material-kit.js
            materialKit.initSliders();
            window_width = \$(window).width();

            if (window_width >= 992) {
                big_image = \$('.wrapper > .header');

                \$(window).on('scroll', materialKitDemo.checkScrollForParallax);
            }

        });
    </script>
</html>
", "layout.html.twig", "C:\\xampp\\htdocs\\objet\\moijvtest\\templates\\layout.html.twig");
    }
}
