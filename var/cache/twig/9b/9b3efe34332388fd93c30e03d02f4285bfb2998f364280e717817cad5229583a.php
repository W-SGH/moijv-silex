<?php

/* admin/userlist.html.twig */
class __TwigTemplate_88e01dc4d0eef06c6976e162f44bc49acdb0e16327b4fa8bfba6395b1d429687 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("admin/layout_admin.html.twig", "admin/userlist.html.twig", 1);
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
        $__internal_284abf2e53c1bc5fa7ae7136b477c90425387748926e182d61f3d125b5ec983e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_284abf2e53c1bc5fa7ae7136b477c90425387748926e182d61f3d125b5ec983e->enter($__internal_284abf2e53c1bc5fa7ae7136b477c90425387748926e182d61f3d125b5ec983e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "admin/userlist.html.twig"));

        $__internal_c259f49e5227b0c53f922621a4cf0fbb4e90a0681898df72ba6731d3d00630ec = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c259f49e5227b0c53f922621a4cf0fbb4e90a0681898df72ba6731d3d00630ec->enter($__internal_c259f49e5227b0c53f922621a4cf0fbb4e90a0681898df72ba6731d3d00630ec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "admin/userlist.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_284abf2e53c1bc5fa7ae7136b477c90425387748926e182d61f3d125b5ec983e->leave($__internal_284abf2e53c1bc5fa7ae7136b477c90425387748926e182d61f3d125b5ec983e_prof);

        
        $__internal_c259f49e5227b0c53f922621a4cf0fbb4e90a0681898df72ba6731d3d00630ec->leave($__internal_c259f49e5227b0c53f922621a4cf0fbb4e90a0681898df72ba6731d3d00630ec_prof);

    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        $__internal_e3155e9de455d26859f3cbc9cd419670211e9fafc4c72ab24207f9ba36f3a9a0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e3155e9de455d26859f3cbc9cd419670211e9fafc4c72ab24207f9ba36f3a9a0->enter($__internal_e3155e9de455d26859f3cbc9cd419670211e9fafc4c72ab24207f9ba36f3a9a0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_e3f7ec64e4041f1ba7ee67cb02096a2752b8c1f99bf49de9f0918d41637ebbaf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e3f7ec64e4041f1ba7ee67cb02096a2752b8c1f99bf49de9f0918d41637ebbaf->enter($__internal_e3f7ec64e4041f1ba7ee67cb02096a2752b8c1f99bf49de9f0918d41637ebbaf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 4
        echo "    <table>
        <thead>
            <tr>
                <th>
                   Nom
                </th>
                <th>
                   Prénom
                </th>
                <th>
                   Email
                </th>
                <th>
                   Actions
                </th>
            </tr>
        </thead>
        <tbody>
            ";
        // line 22
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["users"]) || array_key_exists("users", $context) ? $context["users"] : (function () { throw new Twig_Error_Runtime('Variable "users" does not exist.', 22, $this->getSourceContext()); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["user"]) {
            // line 23
            echo "                <tr>
                    <td>";
            // line 24
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["user"], "lastname", array()), "html", null, true);
            echo "</td>
                    <td>";
            // line 25
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["user"], "firstname", array()), "html", null, true);
            echo "</td>
                    <td>";
            // line 26
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["user"], "email", array()), "html", null, true);
            echo "</td>
                    <td><a href=\"";
            // line 27
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_userdelete", array("id" => twig_get_attribute($this->env, $this->getSourceContext(), $context["user"], "id", array()))), "html", null, true);
            echo "\">&Cross;</a></td>
                    <td><a href=\"";
            // line 28
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_useredit", array("id" => twig_get_attribute($this->env, $this->getSourceContext(), $context["user"], "id", array()))), "html", null, true);
            echo "\">Modifier</a></td>
                </tr>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['user'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 31
        echo "        </tbody>
    </table>
";
        
        $__internal_e3f7ec64e4041f1ba7ee67cb02096a2752b8c1f99bf49de9f0918d41637ebbaf->leave($__internal_e3f7ec64e4041f1ba7ee67cb02096a2752b8c1f99bf49de9f0918d41637ebbaf_prof);

        
        $__internal_e3155e9de455d26859f3cbc9cd419670211e9fafc4c72ab24207f9ba36f3a9a0->leave($__internal_e3155e9de455d26859f3cbc9cd419670211e9fafc4c72ab24207f9ba36f3a9a0_prof);

    }

    public function getTemplateName()
    {
        return "admin/userlist.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  101 => 31,  92 => 28,  88 => 27,  84 => 26,  80 => 25,  76 => 24,  73 => 23,  69 => 22,  49 => 4,  40 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"admin/layout_admin.html.twig\" %}

{% block content %}
    <table>
        <thead>
            <tr>
                <th>
                   Nom
                </th>
                <th>
                   Prénom
                </th>
                <th>
                   Email
                </th>
                <th>
                   Actions
                </th>
            </tr>
        </thead>
        <tbody>
            {% for user in users%}
                <tr>
                    <td>{{ user.lastname}}</td>
                    <td>{{ user.firstname }}</td>
                    <td>{{ user.email }}</td>
                    <td><a href=\"{{ path('admin_userdelete', {id : user.id }) }}\">&Cross;</a></td>
                    <td><a href=\"{{ path('admin_useredit', {id : user.id }) }}\">Modifier</a></td>
                </tr>
            {% endfor %}
        </tbody>
    </table>
{% endblock %}", "admin/userlist.html.twig", "C:\\xampp\\htdocs\\objet\\moijvtest\\templates\\admin\\userlist.html.twig");
    }
}
