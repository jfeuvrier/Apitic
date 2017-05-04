<?php

/* ::layout.html.twig */
class __TwigTemplate_144b015f338ba8ffe8daa018ad6c521fe99d518c64801483238f12a5afa04178 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_110c3c7e4bf856eac177eb1ea528ea8da7fd5c22fb359f9affa39d38b8eab219 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_110c3c7e4bf856eac177eb1ea528ea8da7fd5c22fb359f9affa39d38b8eab219->enter($__internal_110c3c7e4bf856eac177eb1ea528ea8da7fd5c22fb359f9affa39d38b8eab219_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::layout.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
<head>
  <meta charset=\"utf-8\">
  <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
  <title>";
        // line 6
        $this->displayBlock('title', $context, $blocks);
        echo "</title>

  ";
        // line 8
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 12
        echo "</head>

<body>
  <div class=\"container\">
    <div id=\"header\" class=\"jumbotron\">
      <h1>30 Millions d'amis</h1>
      <p>
        Enregistrez tout ce que vous souhaitez sur nos amis les bêtes.
      </p>
    </div>
         <div id=\"content\" class=\"col-md-9p\">
           ";
        // line 23
        $this->displayBlock('body', $context, $blocks);
        // line 25
        echo "         </div>
       </div>
       <hr>
     </div>

   ";
        // line 30
        $this->displayBlock('javascripts', $context, $blocks);
        // line 34
        echo "  </body>
</html>
";
        
        $__internal_110c3c7e4bf856eac177eb1ea528ea8da7fd5c22fb359f9affa39d38b8eab219->leave($__internal_110c3c7e4bf856eac177eb1ea528ea8da7fd5c22fb359f9affa39d38b8eab219_prof);

    }

    // line 6
    public function block_title($context, array $blocks = array())
    {
        $__internal_3a75dc35a07a3ff14ab83579e00f1e643a2054147ccc17843b54cab007ba0fbd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3a75dc35a07a3ff14ab83579e00f1e643a2054147ccc17843b54cab007ba0fbd->enter($__internal_3a75dc35a07a3ff14ab83579e00f1e643a2054147ccc17843b54cab007ba0fbd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "30 Millions d'amis";
        
        $__internal_3a75dc35a07a3ff14ab83579e00f1e643a2054147ccc17843b54cab007ba0fbd->leave($__internal_3a75dc35a07a3ff14ab83579e00f1e643a2054147ccc17843b54cab007ba0fbd_prof);

    }

    // line 8
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_8ba1f824510d5854ae0a2335279a88882b99116721b62b32ea264e3b7765da6a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8ba1f824510d5854ae0a2335279a88882b99116721b62b32ea264e3b7765da6a->enter($__internal_8ba1f824510d5854ae0a2335279a88882b99116721b62b32ea264e3b7765da6a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 9
        echo "    ";
        // line 10
        echo "    <link rel=\"stylesheet\" href=\"//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css\">
  ";
        
        $__internal_8ba1f824510d5854ae0a2335279a88882b99116721b62b32ea264e3b7765da6a->leave($__internal_8ba1f824510d5854ae0a2335279a88882b99116721b62b32ea264e3b7765da6a_prof);

    }

    // line 23
    public function block_body($context, array $blocks = array())
    {
        $__internal_b997c1e4ac8abb65651233bc8b4f170cb5554098164dee5ed69d20c215c60ab7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b997c1e4ac8abb65651233bc8b4f170cb5554098164dee5ed69d20c215c60ab7->enter($__internal_b997c1e4ac8abb65651233bc8b4f170cb5554098164dee5ed69d20c215c60ab7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 24
        echo "           ";
        
        $__internal_b997c1e4ac8abb65651233bc8b4f170cb5554098164dee5ed69d20c215c60ab7->leave($__internal_b997c1e4ac8abb65651233bc8b4f170cb5554098164dee5ed69d20c215c60ab7_prof);

    }

    // line 30
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_e624e5f7aed30d7bc4a266b7d7dd5aa9d82caae3de8b23b285880d376c830749 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e624e5f7aed30d7bc4a266b7d7dd5aa9d82caae3de8b23b285880d376c830749->enter($__internal_e624e5f7aed30d7bc4a266b7d7dd5aa9d82caae3de8b23b285880d376c830749_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 31
        echo "     <script src=\"//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js\"></script>
     <script src=\"//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js\"></script>
    ";
        
        $__internal_e624e5f7aed30d7bc4a266b7d7dd5aa9d82caae3de8b23b285880d376c830749->leave($__internal_e624e5f7aed30d7bc4a266b7d7dd5aa9d82caae3de8b23b285880d376c830749_prof);

    }

    public function getTemplateName()
    {
        return "::layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  120 => 31,  114 => 30,  107 => 24,  101 => 23,  93 => 10,  91 => 9,  85 => 8,  73 => 6,  64 => 34,  62 => 30,  55 => 25,  53 => 23,  40 => 12,  38 => 8,  33 => 6,  26 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html>
<head>
  <meta charset=\"utf-8\">
  <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
  <title>{% block title %}30 Millions d'amis{% endblock %}</title>

  {% block stylesheets %}
    {# On charge le CSS de Twitter #}
    <link rel=\"stylesheet\" href=\"//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css\">
  {% endblock %}
</head>

<body>
  <div class=\"container\">
    <div id=\"header\" class=\"jumbotron\">
      <h1>30 Millions d'amis</h1>
      <p>
        Enregistrez tout ce que vous souhaitez sur nos amis les bêtes.
      </p>
    </div>
         <div id=\"content\" class=\"col-md-9p\">
           {% block body %}
           {% endblock %}
         </div>
       </div>
       <hr>
     </div>

   {% block javascripts %}
     <script src=\"//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js\"></script>
     <script src=\"//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js\"></script>
    {% endblock %}
  </body>
</html>
", "::layout.html.twig", "/var/www/ApiticTest/app/Resources/views/layout.html.twig");
    }
}
