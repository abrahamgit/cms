<?php

/* CustomCMSBundle:Default:index.html.twig */
class __TwigTemplate_d588946b12d35f670c667aa7a3bdec0d9de72f372b82b0045ae6d0692d73e4fa extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "CustomCMSBundle:Default:index.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_85dd83335ad8a0a44b647cb3c08910c2f789e0bc7dcb16cef662f71e339935af = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_85dd83335ad8a0a44b647cb3c08910c2f789e0bc7dcb16cef662f71e339935af->enter($__internal_85dd83335ad8a0a44b647cb3c08910c2f789e0bc7dcb16cef662f71e339935af_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "CustomCMSBundle:Default:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_85dd83335ad8a0a44b647cb3c08910c2f789e0bc7dcb16cef662f71e339935af->leave($__internal_85dd83335ad8a0a44b647cb3c08910c2f789e0bc7dcb16cef662f71e339935af_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_7bb312ef4f0842f66d7ea2b2d3e952964dfcb47d495b4f6ea5094b4fba8ef4f1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7bb312ef4f0842f66d7ea2b2d3e952964dfcb47d495b4f6ea5094b4fba8ef4f1->enter($__internal_7bb312ef4f0842f66d7ea2b2d3e952964dfcb47d495b4f6ea5094b4fba8ef4f1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "      <p>Custom CMS Home Page</p>

      ";
        
        $__internal_7bb312ef4f0842f66d7ea2b2d3e952964dfcb47d495b4f6ea5094b4fba8ef4f1->leave($__internal_7bb312ef4f0842f66d7ea2b2d3e952964dfcb47d495b4f6ea5094b4fba8ef4f1_prof);

    }

    public function getTemplateName()
    {
        return "CustomCMSBundle:Default:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 4,  34 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("     {% extends '::base.html.twig' %}

     {% block body %}
      <p>Custom CMS Home Page</p>

      {% endblock %}
", "CustomCMSBundle:Default:index.html.twig", "/Users/abrham/symfony/cms/src/Custom/CMSBundle/Resources/views/Default/index.html.twig");
    }
}
