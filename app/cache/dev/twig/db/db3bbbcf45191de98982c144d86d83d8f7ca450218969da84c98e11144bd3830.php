<?php

/* TwigBundle:Exception:exception_full.html.twig */
class __TwigTemplate_ad2140943111a2edfd61123be9946f24133c182a85b2cd54dff605fe4031b441 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("TwigBundle::layout.html.twig", "TwigBundle:Exception:exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "TwigBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_9d1a4b701390657ac06fdd6418f94554ee461cbbd482cd2dc01b5dfc8b55992a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9d1a4b701390657ac06fdd6418f94554ee461cbbd482cd2dc01b5dfc8b55992a->enter($__internal_9d1a4b701390657ac06fdd6418f94554ee461cbbd482cd2dc01b5dfc8b55992a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9d1a4b701390657ac06fdd6418f94554ee461cbbd482cd2dc01b5dfc8b55992a->leave($__internal_9d1a4b701390657ac06fdd6418f94554ee461cbbd482cd2dc01b5dfc8b55992a_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_1fc62e779ad331e1a77da10a765a448de36044d9fad0cc5058f5fb3f0231c16d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1fc62e779ad331e1a77da10a765a448de36044d9fad0cc5058f5fb3f0231c16d->enter($__internal_1fc62e779ad331e1a77da10a765a448de36044d9fad0cc5058f5fb3f0231c16d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpFoundationExtension')->generateAbsoluteUrl($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_1fc62e779ad331e1a77da10a765a448de36044d9fad0cc5058f5fb3f0231c16d->leave($__internal_1fc62e779ad331e1a77da10a765a448de36044d9fad0cc5058f5fb3f0231c16d_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_bbadd2c2372b3d47fe12375736f71052bbbdb9b5f46fa24fcc2f607e54f51161 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bbadd2c2372b3d47fe12375736f71052bbbdb9b5f46fa24fcc2f607e54f51161->enter($__internal_bbadd2c2372b3d47fe12375736f71052bbbdb9b5f46fa24fcc2f607e54f51161_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["exception"] ?? $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, ($context["status_code"] ?? $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, ($context["status_text"] ?? $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_bbadd2c2372b3d47fe12375736f71052bbbdb9b5f46fa24fcc2f607e54f51161->leave($__internal_bbadd2c2372b3d47fe12375736f71052bbbdb9b5f46fa24fcc2f607e54f51161_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_9330f4deede4cc8e292e1225b48206ccb02b76204091355e3904dc58faa80b13 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9330f4deede4cc8e292e1225b48206ccb02b76204091355e3904dc58faa80b13->enter($__internal_9330f4deede4cc8e292e1225b48206ccb02b76204091355e3904dc58faa80b13_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("TwigBundle:Exception:exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 12)->display($context);
        
        $__internal_9330f4deede4cc8e292e1225b48206ccb02b76204091355e3904dc58faa80b13->leave($__internal_9330f4deede4cc8e292e1225b48206ccb02b76204091355e3904dc58faa80b13_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 12,  72 => 11,  58 => 8,  52 => 7,  42 => 4,  36 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'TwigBundle::layout.html.twig' %}

{% block head %}
    <link href=\"{{ absolute_url(asset('bundles/framework/css/exception.css')) }}\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
{% endblock %}

{% block title %}
    {{ exception.message }} ({{ status_code }} {{ status_text }})
{% endblock %}

{% block body %}
    {% include 'TwigBundle:Exception:exception.html.twig' %}
{% endblock %}
", "TwigBundle:Exception:exception_full.html.twig", "/var/www/ApiticTest/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception_full.html.twig");
    }
}
