<?php

/* ApPlatformBundle:Animals:form.html.twig */
class __TwigTemplate_462bbdccade24590b0758413aa4e58500f47d7f16909c3462fa6ee67efe4ed4a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_019bc8567a294bda8b1e8796a983135c8cfd2b61d3c028c4f1b0654e74f8faaf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_019bc8567a294bda8b1e8796a983135c8cfd2b61d3c028c4f1b0654e74f8faaf->enter($__internal_019bc8567a294bda8b1e8796a983135c8cfd2b61d3c028c4f1b0654e74f8faaf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ApPlatformBundle:Animals:form.html.twig"));

        // line 1
        echo "<h3>Formulaire d'annonce</h3>


<div class=\"well\">

  ";
        // line 6
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form');
        echo "

</div>
";
        
        $__internal_019bc8567a294bda8b1e8796a983135c8cfd2b61d3c028c4f1b0654e74f8faaf->leave($__internal_019bc8567a294bda8b1e8796a983135c8cfd2b61d3c028c4f1b0654e74f8faaf_prof);

    }

    public function getTemplateName()
    {
        return "ApPlatformBundle:Animals:form.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  29 => 6,  22 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<h3>Formulaire d'annonce</h3>


<div class=\"well\">

  {{ form(form) }}

</div>
", "ApPlatformBundle:Animals:form.html.twig", "/var/www/ApiticTest/src/Ap/PlatformBundle/Resources/views/Animals/form.html.twig");
    }
}
