<?php

/* ApPlatformBundle:Animals:view.html.twig */
class __TwigTemplate_5a46900c7b442489af37767a15e4986efbbfcac9bf8aea9cab98e80281abafc8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("ApPlatformBundle::layout.html.twig", "ApPlatformBundle:Animals:view.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'applatform_body' => array($this, 'block_applatform_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "ApPlatformBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_c0e88d1bd3dfc5d5ef583790fef9f090edc17c3e8429bdfa58dce94a2ed8e17e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c0e88d1bd3dfc5d5ef583790fef9f090edc17c3e8429bdfa58dce94a2ed8e17e->enter($__internal_c0e88d1bd3dfc5d5ef583790fef9f090edc17c3e8429bdfa58dce94a2ed8e17e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ApPlatformBundle:Animals:view.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c0e88d1bd3dfc5d5ef583790fef9f090edc17c3e8429bdfa58dce94a2ed8e17e->leave($__internal_c0e88d1bd3dfc5d5ef583790fef9f090edc17c3e8429bdfa58dce94a2ed8e17e_prof);

    }

    // line 4
    public function block_title($context, array $blocks = array())
    {
        $__internal_39276f8cc2112de3edb83dd9db76c6f2046c1da4bf734d31eedac2846561423a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_39276f8cc2112de3edb83dd9db76c6f2046c1da4bf734d31eedac2846561423a->enter($__internal_39276f8cc2112de3edb83dd9db76c6f2046c1da4bf734d31eedac2846561423a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 5
        echo "  Liste - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_39276f8cc2112de3edb83dd9db76c6f2046c1da4bf734d31eedac2846561423a->leave($__internal_39276f8cc2112de3edb83dd9db76c6f2046c1da4bf734d31eedac2846561423a_prof);

    }

    // line 8
    public function block_applatform_body($context, array $blocks = array())
    {
        $__internal_c620b8f87d07ef9d6eb6939ae78da5a3b4c39b7f91f01630d42eee8af733edf7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c620b8f87d07ef9d6eb6939ae78da5a3b4c39b7f91f01630d42eee8af733edf7->enter($__internal_c620b8f87d07ef9d6eb6939ae78da5a3b4c39b7f91f01630d42eee8af733edf7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "applatform_body"));

        // line 9
        echo "  <h2>";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["animal"] ?? $this->getContext($context, "animal")), "name", array()), "html", null, true);
        echo "</h2>
  <li><b>Catégorie : </b> ";
        // line 10
        echo twig_escape_filter($this->env, $this->getAttribute(($context["animal"] ?? $this->getContext($context, "animal")), "category", array()), "html", null, true);
        echo "</li>
  <li><b> Espèce : </b> ";
        // line 11
        echo twig_escape_filter($this->env, twig_lower_filter($this->env, $this->getAttribute(($context["animal"] ?? $this->getContext($context, "animal")), "espece", array())), "html", null, true);
        echo "</li>
  <li><b> Caractéristique
  ";
        // line 13
        if (($this->getAttribute(($context["animal"] ?? $this->getContext($context, "animal")), "category", array()) == "reptile")) {
            // line 14
            echo "     des écailles :
  ";
        } elseif (($this->getAttribute(        // line 15
($context["animal"] ?? $this->getContext($context, "animal")), "category", array()) == "mammifère")) {
            // line 16
            echo "     de la fourrure :
  ";
        } elseif (($this->getAttribute(        // line 17
($context["animal"] ?? $this->getContext($context, "animal")), "category", array()) == "oiseau")) {
            // line 18
            echo "     du plumage :
  ";
        } else {
            // line 20
            echo "    du poil :
  ";
        }
        // line 22
        echo "   </b>";
        echo twig_escape_filter($this->env, twig_lower_filter($this->env, $this->getAttribute(($context["animal"] ?? $this->getContext($context, "animal")), "skinqualifier", array())), "html", null, true);
        echo "</li>

  <p>
    <a href=\"";
        // line 25
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("ap_platform_home");
        echo "\" class=\"btn btn-default\">
      <i class=\"glyphicon glyphicon-chevron-left\"></i>
      Retour à la liste
    </a>
    <a href=\"";
        // line 29
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("ap_platform_edit", array("id" => $this->getAttribute(($context["animal"] ?? $this->getContext($context, "animal")), "id", array()))), "html", null, true);
        echo "\" class=\"btn btn-default\">
      <i class=\"glyphicon glyphicon-edit\"></i>
      Modifier
    </a>
    <a href=\"";
        // line 33
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("ap_platform_delete", array("id" => $this->getAttribute(($context["animal"] ?? $this->getContext($context, "animal")), "id", array()))), "html", null, true);
        echo "\" class=\"btn btn-danger\">
      <i class=\"glyphicon glyphicon-trash\"></i>
      Supprimer
    </a>
  </p>

";
        
        $__internal_c620b8f87d07ef9d6eb6939ae78da5a3b4c39b7f91f01630d42eee8af733edf7->leave($__internal_c620b8f87d07ef9d6eb6939ae78da5a3b4c39b7f91f01630d42eee8af733edf7_prof);

    }

    public function getTemplateName()
    {
        return "ApPlatformBundle:Animals:view.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  112 => 33,  105 => 29,  98 => 25,  91 => 22,  87 => 20,  83 => 18,  81 => 17,  78 => 16,  76 => 15,  73 => 14,  71 => 13,  66 => 11,  62 => 10,  57 => 9,  51 => 8,  41 => 5,  35 => 4,  11 => 1,);
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


{% block title %}
  Liste - {{ parent() }}
{% endblock %}

{% block applatform_body %}
  <h2>{{ animal.name }}</h2>
  <li><b>Catégorie : </b> {{ animal.category }}</li>
  <li><b> Espèce : </b> {{ animal.espece|lower }}</li>
  <li><b> Caractéristique
  {% if animal.category == \"reptile\" %}
     des écailles :
  {% elseif animal.category == \"mammifère\" %}
     de la fourrure :
  {% elseif animal.category == \"oiseau\" %}
     du plumage :
  {% else %}
    du poil :
  {% endif %}
   </b>{{ animal.skinqualifier|lower }}</li>

  <p>
    <a href=\"{{ path('ap_platform_home') }}\" class=\"btn btn-default\">
      <i class=\"glyphicon glyphicon-chevron-left\"></i>
      Retour à la liste
    </a>
    <a href=\"{{ path('ap_platform_edit', {'id': animal.id}) }}\" class=\"btn btn-default\">
      <i class=\"glyphicon glyphicon-edit\"></i>
      Modifier
    </a>
    <a href=\"{{ path('ap_platform_delete', {'id': animal.id}) }}\" class=\"btn btn-danger\">
      <i class=\"glyphicon glyphicon-trash\"></i>
      Supprimer
    </a>
  </p>

{% endblock %}
", "ApPlatformBundle:Animals:view.html.twig", "/var/www/ApiticTest/src/Ap/PlatformBundle/Resources/views/Animals/view.html.twig");
    }
}
