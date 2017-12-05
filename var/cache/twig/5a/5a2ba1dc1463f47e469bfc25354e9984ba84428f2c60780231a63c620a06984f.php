<?php

/* admin/layout_admin.html.twig */
class __TwigTemplate_8106eb08ff3d5cb9ce8f67e067ed83cdd55e7e5b7d3058b0843806ee10d84faa extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_875043df27ffd60d0fe10081e8f7409541ece5adcf35d3ce0e8a742b352fb22f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_875043df27ffd60d0fe10081e8f7409541ece5adcf35d3ce0e8a742b352fb22f->enter($__internal_875043df27ffd60d0fe10081e8f7409541ece5adcf35d3ce0e8a742b352fb22f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "admin/layout_admin.html.twig"));

        $__internal_b09be89fd129726aa9943c681c3d7ce91dd405c90aa6b4a87a942fc7df6c1d62 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b09be89fd129726aa9943c681c3d7ce91dd405c90aa6b4a87a942fc7df6c1d62->enter($__internal_b09be89fd129726aa9943c681c3d7ce91dd405c90aa6b4a87a942fc7df6c1d62_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "admin/layout_admin.html.twig"));

        // line 1
        echo "<html>
    <head>
        <title>";
        // line 3
        $this->displayBlock('title', $context, $blocks);
        echo "</title> ";
        // line 4
        echo "    </head>
    <body>
        <h1>";
        // line 6
        $this->displayBlock("title", $context, $blocks);
        echo "</h1>
        <div>
            <a href=\"";
        // line 8
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_logoutadmin");
        echo "\">Déconnexion</a>
            <a href=\"";
        // line 9
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_userlist");
        echo "\">Liste d'utilisateur</a>
        </div>
        <div class=\"content\">
            ";
        // line 12
        $this->displayBlock('content', $context, $blocks);
        // line 13
        echo "    </body>
</html>
";
        
        $__internal_875043df27ffd60d0fe10081e8f7409541ece5adcf35d3ce0e8a742b352fb22f->leave($__internal_875043df27ffd60d0fe10081e8f7409541ece5adcf35d3ce0e8a742b352fb22f_prof);

        
        $__internal_b09be89fd129726aa9943c681c3d7ce91dd405c90aa6b4a87a942fc7df6c1d62->leave($__internal_b09be89fd129726aa9943c681c3d7ce91dd405c90aa6b4a87a942fc7df6c1d62_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_3a94d97e2ac07cc6bfc18c58b157bd0ac316c8472571586e965ef7de1fec5e02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3a94d97e2ac07cc6bfc18c58b157bd0ac316c8472571586e965ef7de1fec5e02->enter($__internal_3a94d97e2ac07cc6bfc18c58b157bd0ac316c8472571586e965ef7de1fec5e02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_5d46e2f5955996c3912a1cdbc66bd6a8582781c4c7c4f9074d761a670c95390e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5d46e2f5955996c3912a1cdbc66bd6a8582781c4c7c4f9074d761a670c95390e->enter($__internal_5d46e2f5955996c3912a1cdbc66bd6a8582781c4c7c4f9074d761a670c95390e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Admin";
        
        $__internal_5d46e2f5955996c3912a1cdbc66bd6a8582781c4c7c4f9074d761a670c95390e->leave($__internal_5d46e2f5955996c3912a1cdbc66bd6a8582781c4c7c4f9074d761a670c95390e_prof);

        
        $__internal_3a94d97e2ac07cc6bfc18c58b157bd0ac316c8472571586e965ef7de1fec5e02->leave($__internal_3a94d97e2ac07cc6bfc18c58b157bd0ac316c8472571586e965ef7de1fec5e02_prof);

    }

    // line 12
    public function block_content($context, array $blocks = array())
    {
        $__internal_5fabe0267332627bf1b097e46d1c03923e5037dd84159135e35ce5eb377d340b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5fabe0267332627bf1b097e46d1c03923e5037dd84159135e35ce5eb377d340b->enter($__internal_5fabe0267332627bf1b097e46d1c03923e5037dd84159135e35ce5eb377d340b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_711ec453a9e4360c5b144b2f4f6fca7c82a1b75c9474df894536d40866815ee2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_711ec453a9e4360c5b144b2f4f6fca7c82a1b75c9474df894536d40866815ee2->enter($__internal_711ec453a9e4360c5b144b2f4f6fca7c82a1b75c9474df894536d40866815ee2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        echo " ";
        
        $__internal_711ec453a9e4360c5b144b2f4f6fca7c82a1b75c9474df894536d40866815ee2->leave($__internal_711ec453a9e4360c5b144b2f4f6fca7c82a1b75c9474df894536d40866815ee2_prof);

        
        $__internal_5fabe0267332627bf1b097e46d1c03923e5037dd84159135e35ce5eb377d340b->leave($__internal_5fabe0267332627bf1b097e46d1c03923e5037dd84159135e35ce5eb377d340b_prof);

    }

    public function getTemplateName()
    {
        return "admin/layout_admin.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  85 => 12,  67 => 3,  55 => 13,  53 => 12,  47 => 9,  43 => 8,  38 => 6,  34 => 4,  31 => 3,  27 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<html>
    <head>
        <title>{% block title 'Admin' %}</title> {# équivalent à  {%block title %}Admin{% endbloc %} #}
    </head>
    <body>
        <h1>{{ block('title') }}</h1>
        <div>
            <a href=\"{{ path ('admin_logoutadmin') }}\">Déconnexion</a>
            <a href=\"{{ path ('admin_userlist') }}\">Liste d'utilisateur</a>
        </div>
        <div class=\"content\">
            {% block content %} {% endblock%}
    </body>
</html>
", "admin/layout_admin.html.twig", "C:\\xampp\\htdocs\\objet\\moijvtest\\templates\\admin\\layout_admin.html.twig");
    }
}
