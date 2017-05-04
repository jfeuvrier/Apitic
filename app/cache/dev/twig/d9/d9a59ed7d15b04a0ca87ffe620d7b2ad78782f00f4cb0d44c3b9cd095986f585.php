<?php

/* ApPlatformBundle::layout.html.twig */
class __TwigTemplate_9646f082d9f07af323a6f52dc30cfaefe20c66b7e28a7bab0af0af29a2a99666 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::layout.html.twig", "ApPlatformBundle::layout.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
            'applatform_body' => array($this, 'block_applatform_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_26ca4ca946b50e118fe86481f6b521f0f15d8629b01c614301135161f01ae68e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_26ca4ca946b50e118fe86481f6b521f0f15d8629b01c614301135161f01ae68e->enter($__internal_26ca4ca946b50e118fe86481f6b521f0f15d8629b01c614301135161f01ae68e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ApPlatformBundle::layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_26ca4ca946b50e118fe86481f6b521f0f15d8629b01c614301135161f01ae68e->leave($__internal_26ca4ca946b50e118fe86481f6b521f0f15d8629b01c614301135161f01ae68e_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_e98a734b2760038a5518066b5c1eb4815dc96257601189e8ae225b8d82d2c39e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e98a734b2760038a5518066b5c1eb4815dc96257601189e8ae225b8d82d2c39e->enter($__internal_e98a734b2760038a5518066b5c1eb4815dc96257601189e8ae225b8d82d2c39e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 5
        echo "  ";
        $this->displayBlock('applatform_body', $context, $blocks);
        
        $__internal_e98a734b2760038a5518066b5c1eb4815dc96257601189e8ae225b8d82d2c39e->leave($__internal_e98a734b2760038a5518066b5c1eb4815dc96257601189e8ae225b8d82d2c39e_prof);

    }

    public function block_applatform_body($context, array $blocks = array())
    {
        $__internal_6c3c181ada9d0d28707c33ee78090a9cba3383d5fbf0ebada13786310f5edbd1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6c3c181ada9d0d28707c33ee78090a9cba3383d5fbf0ebada13786310f5edbd1->enter($__internal_6c3c181ada9d0d28707c33ee78090a9cba3383d5fbf0ebada13786310f5edbd1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "applatform_body"));

        // line 6
        echo "  ";
        
        $__internal_6c3c181ada9d0d28707c33ee78090a9cba3383d5fbf0ebada13786310f5edbd1->leave($__internal_6c3c181ada9d0d28707c33ee78090a9cba3383d5fbf0ebada13786310f5edbd1_prof);

    }

    public function getTemplateName()
    {
        return "ApPlatformBundle::layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  54 => 6,  41 => 5,  35 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"::layout.html.twig\" %}

{% block body %}
{# Finalement vide, je l'ai laissé car ça peut toujours être utile et qu'ainsi, je n'ai pas à modifier tous les paths de mes vues suites à la suppression de celle ci #}
  {% block applatform_body %}
  {% endblock %}
{% endblock %}
", "ApPlatformBundle::layout.html.twig", "/var/www/ApiticTest/src/Ap/PlatformBundle/Resources/views/layout.html.twig");
    }
}
