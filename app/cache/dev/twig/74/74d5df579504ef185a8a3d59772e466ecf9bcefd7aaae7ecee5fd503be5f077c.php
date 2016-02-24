<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_6cca5c1c9ad19376914056a408931f6c44b7f2c767ff196e4bc90a71c1717fa0 extends Twig_Template
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
        $__internal_99777af820af75c68b4ef6a3a072a8f9383d2553df13f3fbbf47c8ab82c04c7a = $this->env->getExtension("native_profiler");
        $__internal_99777af820af75c68b4ef6a3a072a8f9383d2553df13f3fbbf47c8ab82c04c7a->enter($__internal_99777af820af75c68b4ef6a3a072a8f9383d2553df13f3fbbf47c8ab82c04c7a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_99777af820af75c68b4ef6a3a072a8f9383d2553df13f3fbbf47c8ab82c04c7a->leave($__internal_99777af820af75c68b4ef6a3a072a8f9383d2553df13f3fbbf47c8ab82c04c7a_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_227f89ad5b8c2edf46c150eefdc4950bf9402674334371ad877dc343b1415ea6 = $this->env->getExtension("native_profiler");
        $__internal_227f89ad5b8c2edf46c150eefdc4950bf9402674334371ad877dc343b1415ea6->enter($__internal_227f89ad5b8c2edf46c150eefdc4950bf9402674334371ad877dc343b1415ea6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_227f89ad5b8c2edf46c150eefdc4950bf9402674334371ad877dc343b1415ea6->leave($__internal_227f89ad5b8c2edf46c150eefdc4950bf9402674334371ad877dc343b1415ea6_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_bc640bc3b88253bdd89854b1d0786078b8e4a22807326a559a67b4b376bd5ca2 = $this->env->getExtension("native_profiler");
        $__internal_bc640bc3b88253bdd89854b1d0786078b8e4a22807326a559a67b4b376bd5ca2->enter($__internal_bc640bc3b88253bdd89854b1d0786078b8e4a22807326a559a67b4b376bd5ca2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_bc640bc3b88253bdd89854b1d0786078b8e4a22807326a559a67b4b376bd5ca2->leave($__internal_bc640bc3b88253bdd89854b1d0786078b8e4a22807326a559a67b4b376bd5ca2_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_6bf9815d1869b763e1df788b6e8630f75ccb933defcb173ace6e0802b82721b5 = $this->env->getExtension("native_profiler");
        $__internal_6bf9815d1869b763e1df788b6e8630f75ccb933defcb173ace6e0802b82721b5->enter($__internal_6bf9815d1869b763e1df788b6e8630f75ccb933defcb173ace6e0802b82721b5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_6bf9815d1869b763e1df788b6e8630f75ccb933defcb173ace6e0802b82721b5->leave($__internal_6bf9815d1869b763e1df788b6e8630f75ccb933defcb173ace6e0802b82721b5_prof);

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
