<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_8c54f550d70f53688a8dc4212494f020031dc427a530f319b951ae2d781c9a69 extends Twig_Template
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
        $__internal_a2b372f06b4f84ee01c56edf8b94daa871039fb72c9b4c8a9d814b1125d04ade = $this->env->getExtension("native_profiler");
        $__internal_a2b372f06b4f84ee01c56edf8b94daa871039fb72c9b4c8a9d814b1125d04ade->enter($__internal_a2b372f06b4f84ee01c56edf8b94daa871039fb72c9b4c8a9d814b1125d04ade_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a2b372f06b4f84ee01c56edf8b94daa871039fb72c9b4c8a9d814b1125d04ade->leave($__internal_a2b372f06b4f84ee01c56edf8b94daa871039fb72c9b4c8a9d814b1125d04ade_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_173083bbb8f6b624d50afd30a583b0f8af29437a8bf91fc72fe01fb6cf9a4de5 = $this->env->getExtension("native_profiler");
        $__internal_173083bbb8f6b624d50afd30a583b0f8af29437a8bf91fc72fe01fb6cf9a4de5->enter($__internal_173083bbb8f6b624d50afd30a583b0f8af29437a8bf91fc72fe01fb6cf9a4de5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_173083bbb8f6b624d50afd30a583b0f8af29437a8bf91fc72fe01fb6cf9a4de5->leave($__internal_173083bbb8f6b624d50afd30a583b0f8af29437a8bf91fc72fe01fb6cf9a4de5_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_975372079aa83461cf96a6533c60d60d846735c1fe67c4e44d69db24701afa44 = $this->env->getExtension("native_profiler");
        $__internal_975372079aa83461cf96a6533c60d60d846735c1fe67c4e44d69db24701afa44->enter($__internal_975372079aa83461cf96a6533c60d60d846735c1fe67c4e44d69db24701afa44_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_975372079aa83461cf96a6533c60d60d846735c1fe67c4e44d69db24701afa44->leave($__internal_975372079aa83461cf96a6533c60d60d846735c1fe67c4e44d69db24701afa44_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_9988c74cdf40bc0e79cf6a48a3c99ef1b657d49f335512c47105240f08af2493 = $this->env->getExtension("native_profiler");
        $__internal_9988c74cdf40bc0e79cf6a48a3c99ef1b657d49f335512c47105240f08af2493->enter($__internal_9988c74cdf40bc0e79cf6a48a3c99ef1b657d49f335512c47105240f08af2493_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_9988c74cdf40bc0e79cf6a48a3c99ef1b657d49f335512c47105240f08af2493->leave($__internal_9988c74cdf40bc0e79cf6a48a3c99ef1b657d49f335512c47105240f08af2493_prof);

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
}
/* {% extends '@WebProfiler/Profiler/layout.html.twig' %}*/
/* */
/* {% block toolbar %}{% endblock %}*/
/* */
/* {% block menu %}*/
/* <span class="label">*/
/*     <span class="icon">{{ include('@WebProfiler/Icon/router.svg') }}</span>*/
/*     <strong>Routing</strong>*/
/* </span>*/
/* {% endblock %}*/
/* */
/* {% block panel %}*/
/*     {{ render(path('_profiler_router', { token: token })) }}*/
/* {% endblock %}*/
/* */
