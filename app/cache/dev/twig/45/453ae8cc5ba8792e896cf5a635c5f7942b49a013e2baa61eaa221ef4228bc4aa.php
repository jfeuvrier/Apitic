<?php

/* ApPlatformBundle:Animals:index.html.twig */
class __TwigTemplate_f10c81a5e6b0a6418eea577056d1d4d6c7f8ee63b51cb7f212617568a5aa4a6b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("ApPlatformBundle::layout.html.twig", "ApPlatformBundle:Animals:index.html.twig", 1);
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
        $__internal_8b1f0f191cd2ac042b45b2abce0ce899af635022a8a4feb2800048a768c1974c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8b1f0f191cd2ac042b45b2abce0ce899af635022a8a4feb2800048a768c1974c->enter($__internal_8b1f0f191cd2ac042b45b2abce0ce899af635022a8a4feb2800048a768c1974c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ApPlatformBundle:Animals:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8b1f0f191cd2ac042b45b2abce0ce899af635022a8a4feb2800048a768c1974c->leave($__internal_8b1f0f191cd2ac042b45b2abce0ce899af635022a8a4feb2800048a768c1974c_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_a086feb47137560452d44b3c04470bf4ea629557535ea4fadbf1f41724520f04 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a086feb47137560452d44b3c04470bf4ea629557535ea4fadbf1f41724520f04->enter($__internal_a086feb47137560452d44b3c04470bf4ea629557535ea4fadbf1f41724520f04_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "  ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_a086feb47137560452d44b3c04470bf4ea629557535ea4fadbf1f41724520f04->leave($__internal_a086feb47137560452d44b3c04470bf4ea629557535ea4fadbf1f41724520f04_prof);

    }

    // line 6
    public function block_applatform_body($context, array $blocks = array())
    {
        $__internal_bd7954fe04e87b12d1402bd691275aec1d09e62bad3b45bb821b0f1cabbdf11f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bd7954fe04e87b12d1402bd691275aec1d09e62bad3b45bb821b0f1cabbdf11f->enter($__internal_bd7954fe04e87b12d1402bd691275aec1d09e62bad3b45bb821b0f1cabbdf11f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "applatform_body"));

        // line 7
        echo "  <link href=";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("CSS/index.css"), "html", null, true);
        echo " rel=\"stylesheet\" type=\"text/css\" />
  <a class=\"btn btn-primary btn-lg\" href=";
        // line 8
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("ap_platform_add");
        echo ">
    Ajouter un animal
  </a>

  <h2>Liste des animaux</h2>

    <table><tr><th>Nom</th><th>Description</th><th>Edition</th></tr>
    ";
        // line 15
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["listAnimals"] ?? $this->getContext($context, "listAnimals")));
        foreach ($context['_seq'] as $context["_key"] => $context["animal"]) {
            // line 16
            echo "      ";
            // line 17
            echo "      <tr class=";
            echo twig_escape_filter($this->env, $this->getAttribute($context["animal"], "category", array()), "html", null, true);
            echo ">
        <td>
          <a href=\"";
            // line 19
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("ap_platform_view", array("id" => $this->getAttribute($context["animal"], "id", array()))), "html", null, true);
            echo "\">
            ";
            // line 20
            echo twig_escape_filter($this->env, $this->getAttribute($context["animal"], "name", array()), "html", null, true);
            echo "</a>
        </td>
        
        <td>
          ";
            // line 24
            echo twig_escape_filter($this->env, $this->getAttribute($context["animal"], "call", array()), "html", null, true);
            echo "
        </td>

        <td>
          <a href=\"";
            // line 28
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("ap_platform_edit", array("id" => $this->getAttribute($context["animal"], "id", array()))), "html", null, true);
            echo "\" class=\"btn btn-default\">
          <i class=\"glyphicon glyphicon-edit\"></i>Modifier</a>
          <a href=\"";
            // line 30
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("ap_platform_delete", array("id" => $this->getAttribute($context["animal"], "id", array()))), "html", null, true);
            echo "\" class=\"btn btn-danger\"><i class=\"glyphicon glyphicon-trash\"></i>Supprimer</a>
        </td>
      </tr>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['animal'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 34
        echo "    </table>

  <a class=\"btn btn-primary btn-lg\" href=";
        // line 36
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("ap_platform_add");
        echo ">
    Ajouter un animal
  </a>
";
        
        $__internal_bd7954fe04e87b12d1402bd691275aec1d09e62bad3b45bb821b0f1cabbdf11f->leave($__internal_bd7954fe04e87b12d1402bd691275aec1d09e62bad3b45bb821b0f1cabbdf11f_prof);

    }

    public function getTemplateName()
    {
        return "ApPlatformBundle:Animals:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  121 => 36,  117 => 34,  107 => 30,  102 => 28,  95 => 24,  88 => 20,  84 => 19,  78 => 17,  76 => 16,  72 => 15,  62 => 8,  57 => 7,  51 => 6,  41 => 4,  35 => 3,  11 => 1,);
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
  {{ parent() }}
{% endblock %}
{% block applatform_body %}
  <link href={{asset('CSS/index.css')}} rel=\"stylesheet\" type=\"text/css\" />
  <a class=\"btn btn-primary btn-lg\" href={{ path('ap_platform_add')}}>
    Ajouter un animal
  </a>

  <h2>Liste des animaux</h2>

    <table><tr><th>Nom</th><th>Description</th><th>Edition</th></tr>
    {% for animal in listAnimals %}
      {# On détermine la couleur du fond grâce au type d'animal #}
      <tr class={{animal.category}}>
        <td>
          <a href=\"{{ path('ap_platform_view', {'id': animal.id}) }}\">
            {{ animal.name }}</a>
        </td>
        
        <td>
          {{ animal.call }}
        </td>

        <td>
          <a href=\"{{ path('ap_platform_edit', {'id': animal.id}) }}\" class=\"btn btn-default\">
          <i class=\"glyphicon glyphicon-edit\"></i>Modifier</a>
          <a href=\"{{ path('ap_platform_delete', {'id': animal.id}) }}\" class=\"btn btn-danger\"><i class=\"glyphicon glyphicon-trash\"></i>Supprimer</a>
        </td>
      </tr>
    {% endfor %}
    </table>

  <a class=\"btn btn-primary btn-lg\" href={{ path('ap_platform_add')}}>
    Ajouter un animal
  </a>
{% endblock %}
", "ApPlatformBundle:Animals:index.html.twig", "/var/www/ApiticTest/src/Ap/PlatformBundle/Resources/views/Animals/index.html.twig");
    }
}
