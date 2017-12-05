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
        $__internal_dbca47d988202c20ce6ed88d704395e094d20411651d8cfe88681b3f904cc1df = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dbca47d988202c20ce6ed88d704395e094d20411651d8cfe88681b3f904cc1df->enter($__internal_dbca47d988202c20ce6ed88d704395e094d20411651d8cfe88681b3f904cc1df_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "admin/layout_admin.html.twig"));

        $__internal_a3798eba2d9bac188c2699be3957ae11f6693f91b2aeb5918b4f139dc4ffe599 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a3798eba2d9bac188c2699be3957ae11f6693f91b2aeb5918b4f139dc4ffe599->enter($__internal_a3798eba2d9bac188c2699be3957ae11f6693f91b2aeb5918b4f139dc4ffe599_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "admin/layout_admin.html.twig"));

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
        <div class=\"content\">
            ";
        // line 8
        $this->displayBlock('content', $context, $blocks);
        // line 9
        echo "    </body>
</html>
";
        
        $__internal_dbca47d988202c20ce6ed88d704395e094d20411651d8cfe88681b3f904cc1df->leave($__internal_dbca47d988202c20ce6ed88d704395e094d20411651d8cfe88681b3f904cc1df_prof);

        
        $__internal_a3798eba2d9bac188c2699be3957ae11f6693f91b2aeb5918b4f139dc4ffe599->leave($__internal_a3798eba2d9bac188c2699be3957ae11f6693f91b2aeb5918b4f139dc4ffe599_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_04c30eb9116fdd82993f0a6ab85ff99156cff5971bf9d1180309e7922ef0533a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_04c30eb9116fdd82993f0a6ab85ff99156cff5971bf9d1180309e7922ef0533a->enter($__internal_04c30eb9116fdd82993f0a6ab85ff99156cff5971bf9d1180309e7922ef0533a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_9c51cd8e501af8bee3934b025ce21e8329eb7407805affb99fd0ab74fe4c5f9e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9c51cd8e501af8bee3934b025ce21e8329eb7407805affb99fd0ab74fe4c5f9e->enter($__internal_9c51cd8e501af8bee3934b025ce21e8329eb7407805affb99fd0ab74fe4c5f9e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Admin";
        
        $__internal_9c51cd8e501af8bee3934b025ce21e8329eb7407805affb99fd0ab74fe4c5f9e->leave($__internal_9c51cd8e501af8bee3934b025ce21e8329eb7407805affb99fd0ab74fe4c5f9e_prof);

        
        $__internal_04c30eb9116fdd82993f0a6ab85ff99156cff5971bf9d1180309e7922ef0533a->leave($__internal_04c30eb9116fdd82993f0a6ab85ff99156cff5971bf9d1180309e7922ef0533a_prof);

    }

    // line 8
    public function block_content($context, array $blocks = array())
    {
        $__internal_fa4a1136a25ce4395438eaddbfa7cef44acf9e8ec299eb914497504425bafbfd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fa4a1136a25ce4395438eaddbfa7cef44acf9e8ec299eb914497504425bafbfd->enter($__internal_fa4a1136a25ce4395438eaddbfa7cef44acf9e8ec299eb914497504425bafbfd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_dd7d7391bd2a1568514ef69e396de370498006d8bed6def4821cc7acfa1333e2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dd7d7391bd2a1568514ef69e396de370498006d8bed6def4821cc7acfa1333e2->enter($__internal_dd7d7391bd2a1568514ef69e396de370498006d8bed6def4821cc7acfa1333e2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        echo " ";
        
        $__internal_dd7d7391bd2a1568514ef69e396de370498006d8bed6def4821cc7acfa1333e2->leave($__internal_dd7d7391bd2a1568514ef69e396de370498006d8bed6def4821cc7acfa1333e2_prof);

        
        $__internal_fa4a1136a25ce4395438eaddbfa7cef44acf9e8ec299eb914497504425bafbfd->leave($__internal_fa4a1136a25ce4395438eaddbfa7cef44acf9e8ec299eb914497504425bafbfd_prof);

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
        return array (  75 => 8,  57 => 3,  45 => 9,  43 => 8,  38 => 6,  34 => 4,  31 => 3,  27 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<html>
    <head>
        <title>{% block title 'Admin' %}</title> {# équivalent à  {%block title %}Admin{% endbloc %} #}
    </head>
    <body>
        <h1>{{ block('title') }}</h1>
        <div class=\"content\">
            {% block content %} {% endblock%}
    </body>
</html>
", "admin/layout_admin.html.twig", "C:\\xampp\\htdocs\\objet\\moijvtest\\templates\\admin\\layout_admin.html.twig");
    }
}
