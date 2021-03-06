<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_fbf9d05abbe9160a32800eca6835c5ae4c4309b6714c644f2aae314117a4c63b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_0477f0c8bc7ec6dbe7fb129f2b81afcdff8e3689f9545a59e4003c0987d3c883 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0477f0c8bc7ec6dbe7fb129f2b81afcdff8e3689f9545a59e4003c0987d3c883->enter($__internal_0477f0c8bc7ec6dbe7fb129f2b81afcdff8e3689f9545a59e4003c0987d3c883_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0477f0c8bc7ec6dbe7fb129f2b81afcdff8e3689f9545a59e4003c0987d3c883->leave($__internal_0477f0c8bc7ec6dbe7fb129f2b81afcdff8e3689f9545a59e4003c0987d3c883_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_6cf329741a5383b956b876d5493378540d446cc613d49b43453f83cd9890a778 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6cf329741a5383b956b876d5493378540d446cc613d49b43453f83cd9890a778->enter($__internal_6cf329741a5383b956b876d5493378540d446cc613d49b43453f83cd9890a778_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_6cf329741a5383b956b876d5493378540d446cc613d49b43453f83cd9890a778->leave($__internal_6cf329741a5383b956b876d5493378540d446cc613d49b43453f83cd9890a778_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_da613f0ec337b64a00a557c72063e7ec263bbdf0ecd8d57deb3c6e9aed530a6e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_da613f0ec337b64a00a557c72063e7ec263bbdf0ecd8d57deb3c6e9aed530a6e->enter($__internal_da613f0ec337b64a00a557c72063e7ec263bbdf0ecd8d57deb3c6e9aed530a6e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_da613f0ec337b64a00a557c72063e7ec263bbdf0ecd8d57deb3c6e9aed530a6e->leave($__internal_da613f0ec337b64a00a557c72063e7ec263bbdf0ecd8d57deb3c6e9aed530a6e_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_d5727996d3b4c2ca478ec50c96ddf3fb61e1c25fa46d45571341484e9e3ce892 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d5727996d3b4c2ca478ec50c96ddf3fb61e1c25fa46d45571341484e9e3ce892->enter($__internal_d5727996d3b4c2ca478ec50c96ddf3fb61e1c25fa46d45571341484e9e3ce892_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_d5727996d3b4c2ca478ec50c96ddf3fb61e1c25fa46d45571341484e9e3ce892->leave($__internal_d5727996d3b4c2ca478ec50c96ddf3fb61e1c25fa46d45571341484e9e3ce892_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 13,  67 => 12,  56 => 7,  53 => 6,  47 => 5,  36 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block toolbar %}{% endblock %}

{% block menu %}
<span class=\"label\">
    <span class=\"icon\">{{ include('@WebProfiler/Icon/router.svg') }}</span>
    <strong>Routing</strong>
</span>
{% endblock %}

{% block panel %}
    {{ render(path('_profiler_router', { token: token })) }}
{% endblock %}
", "@WebProfiler/Collector/router.html.twig", "/Users/abrham/symfony/cms/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/router.html.twig");
    }
}
