<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_91c2e1cc7c2f9f62fd0795c08d0bbf2ba5699c3937b303fdade99e36bcf3e219 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@Twig/Exception/exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_7a6444080c9af86dfb5546353a1df231181bf21a925cb6d8311bf2208d21cdf5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7a6444080c9af86dfb5546353a1df231181bf21a925cb6d8311bf2208d21cdf5->enter($__internal_7a6444080c9af86dfb5546353a1df231181bf21a925cb6d8311bf2208d21cdf5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7a6444080c9af86dfb5546353a1df231181bf21a925cb6d8311bf2208d21cdf5->leave($__internal_7a6444080c9af86dfb5546353a1df231181bf21a925cb6d8311bf2208d21cdf5_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_fc785007d919611c055a2b2ddcfd55e269fd37134e5b4de463353b0d97af7d04 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fc785007d919611c055a2b2ddcfd55e269fd37134e5b4de463353b0d97af7d04->enter($__internal_fc785007d919611c055a2b2ddcfd55e269fd37134e5b4de463353b0d97af7d04_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpFoundationExtension')->generateAbsoluteUrl($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_fc785007d919611c055a2b2ddcfd55e269fd37134e5b4de463353b0d97af7d04->leave($__internal_fc785007d919611c055a2b2ddcfd55e269fd37134e5b4de463353b0d97af7d04_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_3a52087503211df78b0c03f98e6e387d4c8e2c52d55a15e712c6b933c2ab17a8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3a52087503211df78b0c03f98e6e387d4c8e2c52d55a15e712c6b933c2ab17a8->enter($__internal_3a52087503211df78b0c03f98e6e387d4c8e2c52d55a15e712c6b933c2ab17a8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_3a52087503211df78b0c03f98e6e387d4c8e2c52d55a15e712c6b933c2ab17a8->leave($__internal_3a52087503211df78b0c03f98e6e387d4c8e2c52d55a15e712c6b933c2ab17a8_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_8f4f2ae4f6b78fadb5afc987f9b89ed7f1abfd08e5a602f2ab4b1d67281b3875 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8f4f2ae4f6b78fadb5afc987f9b89ed7f1abfd08e5a602f2ab4b1d67281b3875->enter($__internal_8f4f2ae4f6b78fadb5afc987f9b89ed7f1abfd08e5a602f2ab4b1d67281b3875_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_8f4f2ae4f6b78fadb5afc987f9b89ed7f1abfd08e5a602f2ab4b1d67281b3875->leave($__internal_8f4f2ae4f6b78fadb5afc987f9b89ed7f1abfd08e5a602f2ab4b1d67281b3875_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception_full.html.twig";
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
        return new Twig_Source("{% extends '@Twig/layout.html.twig' %}

{% block head %}
    <link href=\"{{ absolute_url(asset('bundles/framework/css/exception.css')) }}\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
{% endblock %}

{% block title %}
    {{ exception.message }} ({{ status_code }} {{ status_text }})
{% endblock %}

{% block body %}
    {% include '@Twig/Exception/exception.html.twig' %}
{% endblock %}
", "@Twig/Exception/exception_full.html.twig", "/Users/abrham/symfony/cms/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception_full.html.twig");
    }
}
