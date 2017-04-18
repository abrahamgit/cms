<?php

/* ::base.html.twig */
class __TwigTemplate_6e1e0b0aee2769bdb1d41328b390935c9de6e7e10cf455cd66be77606ff27994 extends Twig_Template
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
        $__internal_01507383911da1ced26682e5011038546f7daeefed313ad895cacde2097335d3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_01507383911da1ced26682e5011038546f7daeefed313ad895cacde2097335d3->enter($__internal_01507383911da1ced26682e5011038546f7daeefed313ad895cacde2097335d3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 9
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
      <div id=\"container\">
        <div id=\"header\">
          <p id=\"logo\">Custom CMS</p>
          <div id=\"nav\">
            <a href=\"";
        // line 16
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("custom_cms_homepage");
        echo "\">Home</a>
        </div>
        ";
        // line 18
        $this->displayBlock('body', $context, $blocks);
        // line 19
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 20
        echo "
      </div>
    </body>
</html>
";
        
        $__internal_01507383911da1ced26682e5011038546f7daeefed313ad895cacde2097335d3->leave($__internal_01507383911da1ced26682e5011038546f7daeefed313ad895cacde2097335d3_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_dd43c07aaa037a33364dec4fdf4fb7ba2f9e2380c3065c9f4a0036602094670d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dd43c07aaa037a33364dec4fdf4fb7ba2f9e2380c3065c9f4a0036602094670d->enter($__internal_dd43c07aaa037a33364dec4fdf4fb7ba2f9e2380c3065c9f4a0036602094670d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_dd43c07aaa037a33364dec4fdf4fb7ba2f9e2380c3065c9f4a0036602094670d->leave($__internal_dd43c07aaa037a33364dec4fdf4fb7ba2f9e2380c3065c9f4a0036602094670d_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_0b2e6f55a5847eb87fcac42b483ec716f501cfe2d8afd545e93e24722f719413 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0b2e6f55a5847eb87fcac42b483ec716f501cfe2d8afd545e93e24722f719413->enter($__internal_0b2e6f55a5847eb87fcac42b483ec716f501cfe2d8afd545e93e24722f719413_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 7
        echo "          <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("styles/main.css"), "html", null, true);
        echo "\" type=\"text/css\" rel=\"stylesheet\" />
        ";
        
        $__internal_0b2e6f55a5847eb87fcac42b483ec716f501cfe2d8afd545e93e24722f719413->leave($__internal_0b2e6f55a5847eb87fcac42b483ec716f501cfe2d8afd545e93e24722f719413_prof);

    }

    // line 18
    public function block_body($context, array $blocks = array())
    {
        $__internal_28a9dc27c72551d7d7aa92aa42f3b64cf8f23a1c8a0a7f3e1d5aa9fddac6553c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_28a9dc27c72551d7d7aa92aa42f3b64cf8f23a1c8a0a7f3e1d5aa9fddac6553c->enter($__internal_28a9dc27c72551d7d7aa92aa42f3b64cf8f23a1c8a0a7f3e1d5aa9fddac6553c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_28a9dc27c72551d7d7aa92aa42f3b64cf8f23a1c8a0a7f3e1d5aa9fddac6553c->leave($__internal_28a9dc27c72551d7d7aa92aa42f3b64cf8f23a1c8a0a7f3e1d5aa9fddac6553c_prof);

    }

    // line 19
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_4a1f7a311d5bc599e5c848c6880d8e481913e062db6c6dc68473406abc9311a5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4a1f7a311d5bc599e5c848c6880d8e481913e062db6c6dc68473406abc9311a5->enter($__internal_4a1f7a311d5bc599e5c848c6880d8e481913e062db6c6dc68473406abc9311a5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_4a1f7a311d5bc599e5c848c6880d8e481913e062db6c6dc68473406abc9311a5->leave($__internal_4a1f7a311d5bc599e5c848c6880d8e481913e062db6c6dc68473406abc9311a5_prof);

    }

    public function getTemplateName()
    {
        return "::base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  109 => 19,  98 => 18,  88 => 7,  82 => 6,  70 => 5,  59 => 20,  56 => 19,  54 => 18,  49 => 16,  38 => 9,  36 => 6,  32 => 5,  26 => 1,);
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
        <meta charset=\"UTF-8\" />
        <title>{% block title %}Welcome!{% endblock %}</title>
        {% block stylesheets %}
          <link href=\"{{ asset('styles/main.css') }}\" type=\"text/css\" rel=\"stylesheet\" />
        {% endblock %}
        <link rel=\"icon\" type=\"image/x-icon\" href=\"{{ asset('favicon.ico') }}\" />
    </head>
    <body>
      <div id=\"container\">
        <div id=\"header\">
          <p id=\"logo\">Custom CMS</p>
          <div id=\"nav\">
            <a href=\"{{ path('custom_cms_homepage') }}\">Home</a>
        </div>
        {% block body %}{% endblock %}
        {% block javascripts %}{% endblock %}

      </div>
    </body>
</html>
", "::base.html.twig", "/Users/abrham/symfony/cms/app/Resources/views/base.html.twig");
    }
}
