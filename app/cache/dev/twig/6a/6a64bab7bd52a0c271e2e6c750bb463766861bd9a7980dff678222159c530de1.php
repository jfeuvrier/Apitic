<?php

/* ApPlatformBundle:Animals:edit.html.twig */
class __TwigTemplate_7493f5b32ae6d0321376438b1823839e7e411940c3b3a61d0ae4abbf8f097a8b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("ApPlatformBundle::layout.html.twig", "ApPlatformBundle:Animals:edit.html.twig", 1);
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
        $__internal_cfc18fc556a3a373f133d3f3135103494aedf1496d23635d69053bff6244eb66 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cfc18fc556a3a373f133d3f3135103494aedf1496d23635d69053bff6244eb66->enter($__internal_cfc18fc556a3a373f133d3f3135103494aedf1496d23635d69053bff6244eb66_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ApPlatformBundle:Animals:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_cfc18fc556a3a373f133d3f3135103494aedf1496d23635d69053bff6244eb66->leave($__internal_cfc18fc556a3a373f133d3f3135103494aedf1496d23635d69053bff6244eb66_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_7b70aeeccf62c21d0ec3de2e5e57862ce30d115fa6c6cccab428648e183ea588 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7b70aeeccf62c21d0ec3de2e5e57862ce30d115fa6c6cccab428648e183ea588->enter($__internal_7b70aeeccf62c21d0ec3de2e5e57862ce30d115fa6c6cccab428648e183ea588_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 3
        echo "  <h2>Editer une annonce</h2>
  ";
        // line 4
        echo twig_include($this->env, $context, "ApPlatformBundle:Animals:form.html.twig");
        echo "
";
        
        $__internal_7b70aeeccf62c21d0ec3de2e5e57862ce30d115fa6c6cccab428648e183ea588->leave($__internal_7b70aeeccf62c21d0ec3de2e5e57862ce30d115fa6c6cccab428648e183ea588_prof);

    }

    public function getTemplateName()
    {
        return "ApPlatformBundle:Animals:edit.html.twig";
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
  <h2>Editer une annonce</h2>
  {{ include(\"ApPlatformBundle:Animals:form.html.twig\") }}
{% endblock %}
", "ApPlatformBundle:Animals:edit.html.twig", "/var/www/ApiticTest/src/Ap/PlatformBundle/Resources/views/Animals/edit.html.twig");
    }
}
