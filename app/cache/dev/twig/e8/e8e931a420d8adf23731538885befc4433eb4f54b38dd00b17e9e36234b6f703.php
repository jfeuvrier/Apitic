<?php

/* ApPlatformBundle:Animals:add.html.twig */
class __TwigTemplate_98a1384ca1e9d2d89eb7ecb49566f6a84255b080d482d083b633263881cc0177 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("ApPlatformBundle::layout.html.twig", "ApPlatformBundle:Animals:add.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "ApPlatformBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_baaaa9a2c7a6393978aa7e943deb5d8b834a05709e606eebc22ca83155ce979d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_baaaa9a2c7a6393978aa7e943deb5d8b834a05709e606eebc22ca83155ce979d->enter($__internal_baaaa9a2c7a6393978aa7e943deb5d8b834a05709e606eebc22ca83155ce979d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ApPlatformBundle:Animals:add.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_baaaa9a2c7a6393978aa7e943deb5d8b834a05709e606eebc22ca83155ce979d->leave($__internal_baaaa9a2c7a6393978aa7e943deb5d8b834a05709e606eebc22ca83155ce979d_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_030ed157b7e310a9b75494293477891e0a1c16ba9964d766687715b8267ae32d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_030ed157b7e310a9b75494293477891e0a1c16ba9964d766687715b8267ae32d->enter($__internal_030ed157b7e310a9b75494293477891e0a1c16ba9964d766687715b8267ae32d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 3
        echo "  <h2>Ajouter une annonce</h2>
  ";
        // line 4
        echo twig_include($this->env, $context, "ApPlatformBundle:Animals:form.html.twig");
        echo "
";
        
        $__internal_030ed157b7e310a9b75494293477891e0a1c16ba9964d766687715b8267ae32d->leave($__internal_030ed157b7e310a9b75494293477891e0a1c16ba9964d766687715b8267ae32d_prof);

    }

    public function getTemplateName()
    {
        return "ApPlatformBundle:Animals:add.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  43 => 4,  40 => 3,  34 => 2,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"ApPlatformBundle::layout.html.twig\" %}
{% block body %}
  <h2>Ajouter une annonce</h2>
  {{ include(\"ApPlatformBundle:Animals:form.html.twig\") }}
{% endblock %}
", "ApPlatformBundle:Animals:add.html.twig", "/var/www/ApiticTest/src/Ap/PlatformBundle/Resources/views/Animals/add.html.twig");
    }
}
