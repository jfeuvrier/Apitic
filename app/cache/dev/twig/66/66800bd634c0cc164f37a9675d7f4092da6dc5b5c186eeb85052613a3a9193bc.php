<?php

/* ApPlatformBundle:Animals:menu.html.twig */
class __TwigTemplate_8dd6c54548ca10932da41e36d065beaeb5f377eb83295aee67f5ab46209e4860 extends Twig_Template
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
        $__internal_d2786cf5b2873ac6727724de6f563d032d32ef20a14387eafc73fec68976dbd9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d2786cf5b2873ac6727724de6f563d032d32ef20a14387eafc73fec68976dbd9->enter($__internal_d2786cf5b2873ac6727724de6f563d032d32ef20a14387eafc73fec68976dbd9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ApPlatformBundle:Animals:menu.html.twig"));

        // line 1
        echo "<ul class=\"nav nav-pills nav-stacked\">

  ";
        // line 3
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["listAnimals"] ?? $this->getContext($context, "listAnimals")));
        foreach ($context['_seq'] as $context["_key"] => $context["animal"]) {
            // line 4
            echo "
    <li>

      <a href=\"";
            // line 7
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("ap_platform_view", array("id" => $this->getAttribute($context["animal"], "id", array()))), "html", null, true);
            echo "\">

        ";
            // line 9
            echo twig_escape_filter($this->env, $this->getAttribute($context["animal"], "name", array()), "html", null, true);
            echo "

      </a>

    </li>

  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['animal'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 16
        echo "
</ul>
";
        
        $__internal_d2786cf5b2873ac6727724de6f563d032d32ef20a14387eafc73fec68976dbd9->leave($__internal_d2786cf5b2873ac6727724de6f563d032d32ef20a14387eafc73fec68976dbd9_prof);

    }

    public function getTemplateName()
    {
        return "ApPlatformBundle:Animals:menu.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  53 => 16,  40 => 9,  35 => 7,  30 => 4,  26 => 3,  22 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<ul class=\"nav nav-pills nav-stacked\">

  {% for animal in listAnimals %}

    <li>

      <a href=\"{{ path('ap_platform_view', {'id': animal.id}) }}\">

        {{ animal.name }}

      </a>

    </li>

  {% endfor %}

</ul>
", "ApPlatformBundle:Animals:menu.html.twig", "/var/www/ApiticTest/src/Ap/PlatformBundle/Resources/views/Animals/menu.html.twig");
    }
}
