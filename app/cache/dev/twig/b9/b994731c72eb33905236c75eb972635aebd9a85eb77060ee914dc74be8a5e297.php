<?php

/* ApPlatformBundle:Animals:delete.html.twig */
class __TwigTemplate_ca94493a3a34a1a3d149039043c5650caa6c8b4495d64bccfb1eff5997878145 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("ApPlatformBundle::layout.html.twig", "ApPlatformBundle:Animals:delete.html.twig", 1);
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
        $__internal_f9d21c52481eaf78dcb1ccc04591eed620323c6c7c9c86c1dd9494238fd1028d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f9d21c52481eaf78dcb1ccc04591eed620323c6c7c9c86c1dd9494238fd1028d->enter($__internal_f9d21c52481eaf78dcb1ccc04591eed620323c6c7c9c86c1dd9494238fd1028d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ApPlatformBundle:Animals:delete.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f9d21c52481eaf78dcb1ccc04591eed620323c6c7c9c86c1dd9494238fd1028d->leave($__internal_f9d21c52481eaf78dcb1ccc04591eed620323c6c7c9c86c1dd9494238fd1028d_prof);

    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        $__internal_377249cc1acafa88f6350bc76db53d32fb8f624a0057ec4dbc239f8fa51c80ad = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_377249cc1acafa88f6350bc76db53d32fb8f624a0057ec4dbc239f8fa51c80ad->enter($__internal_377249cc1acafa88f6350bc76db53d32fb8f624a0057ec4dbc239f8fa51c80ad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 3
        echo "  Supprimer une annonce - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_377249cc1acafa88f6350bc76db53d32fb8f624a0057ec4dbc239f8fa51c80ad->leave($__internal_377249cc1acafa88f6350bc76db53d32fb8f624a0057ec4dbc239f8fa51c80ad_prof);

    }

    // line 5
    public function block_applatform_body($context, array $blocks = array())
    {
        $__internal_62e9a411df12110914523e86fc7f0bd701b2d91d9136515228c6034483b7ff15 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_62e9a411df12110914523e86fc7f0bd701b2d91d9136515228c6034483b7ff15->enter($__internal_62e9a411df12110914523e86fc7f0bd701b2d91d9136515228c6034483b7ff15_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "applatform_body"));

        // line 6
        echo "  <h2>Supprimer une annonce</h2>
  <p>
    Etes-vous certain de vouloir supprimer l'animal \"";
        // line 8
        echo twig_escape_filter($this->env, $this->getAttribute(($context["animal"] ?? $this->getContext($context, "animal")), "name", array()), "html", null, true);
        echo "\" ?
  </p>
  ";
        // line 11
        echo "  <form action=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("ap_platform_delete", array("id" => $this->getAttribute(($context["animal"] ?? $this->getContext($context, "animal")), "id", array()))), "html", null, true);
        echo "\" method=\"post\">
    <a href=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("ap_platform_view", array("id" => $this->getAttribute(($context["animal"] ?? $this->getContext($context, "animal")), "id", array()))), "html", null, true);
        echo "\" class=\"btn btn-default\">
      <i class=\"glyphicon glyphicon-chevron-left\"></i>
      Retour à l'animal
    </a>
    ";
        // line 17
        echo "    <input type=\"submit\" value=\"Supprimer\" class=\"btn btn-danger\" />
    ";
        // line 19
        echo "    ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'rest');
        echo "
  </form>
";
        
        $__internal_62e9a411df12110914523e86fc7f0bd701b2d91d9136515228c6034483b7ff15->leave($__internal_62e9a411df12110914523e86fc7f0bd701b2d91d9136515228c6034483b7ff15_prof);

    }

    public function getTemplateName()
    {
        return "ApPlatformBundle:Animals:delete.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  81 => 19,  78 => 17,  71 => 12,  66 => 11,  61 => 8,  57 => 6,  51 => 5,  41 => 3,  35 => 2,  11 => 1,);
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
  Supprimer une annonce - {{ parent() }}
{% endblock %}
{% block applatform_body %}
  <h2>Supprimer une annonce</h2>
  <p>
    Etes-vous certain de vouloir supprimer l'animal \"{{ animal.name }}\" ?
  </p>
  {# On met l'id de l'animal dans la route de l'action du formulaire #}
  <form action=\"{{ path('ap_platform_delete', {'id': animal.id}) }}\" method=\"post\">
    <a href=\"{{ path('ap_platform_view', {'id': animal.id}) }}\" class=\"btn btn-default\">
      <i class=\"glyphicon glyphicon-chevron-left\"></i>
      Retour à l'animal
    </a>
    {# Ici j'ai écrit le bouton de soumission à la main #}
    <input type=\"submit\" value=\"Supprimer\" class=\"btn btn-danger\" />
    {# Ceci va générer le champ CSRF #}
    {{ form_rest(form) }}
  </form>
{% endblock %}
", "ApPlatformBundle:Animals:delete.html.twig", "/var/www/ApiticTest/src/Ap/PlatformBundle/Resources/views/Animals/delete.html.twig");
    }
}
