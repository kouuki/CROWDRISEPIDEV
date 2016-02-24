<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_5072a24f5e102f651a1392e61876f9c4acca5c8928181ece07d196bb3e985f97 extends Twig_Template
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
        $__internal_abba334f5f415fb8b38cf82c8a125689bbc8513cb79aaccb6ececcb1fc3fd0a6 = $this->env->getExtension("native_profiler");
        $__internal_abba334f5f415fb8b38cf82c8a125689bbc8513cb79aaccb6ececcb1fc3fd0a6->enter($__internal_abba334f5f415fb8b38cf82c8a125689bbc8513cb79aaccb6ececcb1fc3fd0a6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_abba334f5f415fb8b38cf82c8a125689bbc8513cb79aaccb6ececcb1fc3fd0a6->leave($__internal_abba334f5f415fb8b38cf82c8a125689bbc8513cb79aaccb6ececcb1fc3fd0a6_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_7290a861af7c74c727d3fc1f925bc3300c3b4bd81185b5d0a96969edb1ac798f = $this->env->getExtension("native_profiler");
        $__internal_7290a861af7c74c727d3fc1f925bc3300c3b4bd81185b5d0a96969edb1ac798f->enter($__internal_7290a861af7c74c727d3fc1f925bc3300c3b4bd81185b5d0a96969edb1ac798f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_7290a861af7c74c727d3fc1f925bc3300c3b4bd81185b5d0a96969edb1ac798f->leave($__internal_7290a861af7c74c727d3fc1f925bc3300c3b4bd81185b5d0a96969edb1ac798f_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_74fe5f3382f2d21e208834ec5f1f14c59c437a374d96b2afb739d01352e2cfb4 = $this->env->getExtension("native_profiler");
        $__internal_74fe5f3382f2d21e208834ec5f1f14c59c437a374d96b2afb739d01352e2cfb4->enter($__internal_74fe5f3382f2d21e208834ec5f1f14c59c437a374d96b2afb739d01352e2cfb4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_74fe5f3382f2d21e208834ec5f1f14c59c437a374d96b2afb739d01352e2cfb4->leave($__internal_74fe5f3382f2d21e208834ec5f1f14c59c437a374d96b2afb739d01352e2cfb4_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_b9d57dec8ee911a08115bd6d07e1aeeadff76d5ac89e16317a44128fb2386d11 = $this->env->getExtension("native_profiler");
        $__internal_b9d57dec8ee911a08115bd6d07e1aeeadff76d5ac89e16317a44128fb2386d11->enter($__internal_b9d57dec8ee911a08115bd6d07e1aeeadff76d5ac89e16317a44128fb2386d11_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_b9d57dec8ee911a08115bd6d07e1aeeadff76d5ac89e16317a44128fb2386d11->leave($__internal_b9d57dec8ee911a08115bd6d07e1aeeadff76d5ac89e16317a44128fb2386d11_prof);

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
