<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_1f53af8e2f776ae5c13c44a6c2f2c9c55b821b23736c491cc7f018e4cca6ea2e extends Twig_Template
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
        $__internal_adc57cfef5e9fe138c6c5c05b206f2b3495a663f17a3c03b5900ba95edc99cbc = $this->env->getExtension("native_profiler");
        $__internal_adc57cfef5e9fe138c6c5c05b206f2b3495a663f17a3c03b5900ba95edc99cbc->enter($__internal_adc57cfef5e9fe138c6c5c05b206f2b3495a663f17a3c03b5900ba95edc99cbc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_adc57cfef5e9fe138c6c5c05b206f2b3495a663f17a3c03b5900ba95edc99cbc->leave($__internal_adc57cfef5e9fe138c6c5c05b206f2b3495a663f17a3c03b5900ba95edc99cbc_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_03a8a4ef859334ca133d4a8097e2563dffc9a815eaa68d9c0e09232e057771dc = $this->env->getExtension("native_profiler");
        $__internal_03a8a4ef859334ca133d4a8097e2563dffc9a815eaa68d9c0e09232e057771dc->enter($__internal_03a8a4ef859334ca133d4a8097e2563dffc9a815eaa68d9c0e09232e057771dc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_03a8a4ef859334ca133d4a8097e2563dffc9a815eaa68d9c0e09232e057771dc->leave($__internal_03a8a4ef859334ca133d4a8097e2563dffc9a815eaa68d9c0e09232e057771dc_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_a28174922661dd8bf5ae70daa73d8ce0e1792cb6f3e68887365e78dac43a2e18 = $this->env->getExtension("native_profiler");
        $__internal_a28174922661dd8bf5ae70daa73d8ce0e1792cb6f3e68887365e78dac43a2e18->enter($__internal_a28174922661dd8bf5ae70daa73d8ce0e1792cb6f3e68887365e78dac43a2e18_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_a28174922661dd8bf5ae70daa73d8ce0e1792cb6f3e68887365e78dac43a2e18->leave($__internal_a28174922661dd8bf5ae70daa73d8ce0e1792cb6f3e68887365e78dac43a2e18_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_3c3f63bee9b0ce0bb8e9af96ab4ff7204be8b97398621cc4512b3a7e15274f5f = $this->env->getExtension("native_profiler");
        $__internal_3c3f63bee9b0ce0bb8e9af96ab4ff7204be8b97398621cc4512b3a7e15274f5f->enter($__internal_3c3f63bee9b0ce0bb8e9af96ab4ff7204be8b97398621cc4512b3a7e15274f5f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_3c3f63bee9b0ce0bb8e9af96ab4ff7204be8b97398621cc4512b3a7e15274f5f->leave($__internal_3c3f63bee9b0ce0bb8e9af96ab4ff7204be8b97398621cc4512b3a7e15274f5f_prof);

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
}
/* {% extends '@Twig/layout.html.twig' %}*/
/* */
/* {% block head %}*/
/*     <link href="{{ absolute_url(asset('bundles/framework/css/exception.css')) }}" rel="stylesheet" type="text/css" media="all" />*/
/* {% endblock %}*/
/* */
/* {% block title %}*/
/*     {{ exception.message }} ({{ status_code }} {{ status_text }})*/
/* {% endblock %}*/
/* */
/* {% block body %}*/
/*     {% include '@Twig/Exception/exception.html.twig' %}*/
/* {% endblock %}*/
/* */
