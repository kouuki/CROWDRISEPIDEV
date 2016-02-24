<?php

/* @WebProfiler/Collector/exception.html.twig */
class __TwigTemplate_60a778fe1a7f3017b57a08758c30a7d17cc754b606446b7e7f3bc37c6e738385 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/exception.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
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
        $__internal_9711139dbb446869fc1cc206c3ef139e318494fced2c4f8117a2d60ce3793800 = $this->env->getExtension("native_profiler");
        $__internal_9711139dbb446869fc1cc206c3ef139e318494fced2c4f8117a2d60ce3793800->enter($__internal_9711139dbb446869fc1cc206c3ef139e318494fced2c4f8117a2d60ce3793800_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9711139dbb446869fc1cc206c3ef139e318494fced2c4f8117a2d60ce3793800->leave($__internal_9711139dbb446869fc1cc206c3ef139e318494fced2c4f8117a2d60ce3793800_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_9d942632d12c20382dca269f28d49d499b53afb7565c3045df88624b37153f13 = $this->env->getExtension("native_profiler");
        $__internal_9d942632d12c20382dca269f28d49d499b53afb7565c3045df88624b37153f13->enter($__internal_9d942632d12c20382dca269f28d49d499b53afb7565c3045df88624b37153f13_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    ";
        if ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 5
            echo "        <style>
            ";
            // line 6
            echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_exception_css", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
            echo "
        </style>
    ";
        }
        // line 9
        echo "    ";
        $this->displayParentBlock("head", $context, $blocks);
        echo "
";
        
        $__internal_9d942632d12c20382dca269f28d49d499b53afb7565c3045df88624b37153f13->leave($__internal_9d942632d12c20382dca269f28d49d499b53afb7565c3045df88624b37153f13_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_9b744bed761f5fd8b9e44d0db00da3a65665d205ee7f68a4ebcb1079c6bd4ae4 = $this->env->getExtension("native_profiler");
        $__internal_9b744bed761f5fd8b9e44d0db00da3a65665d205ee7f68a4ebcb1079c6bd4ae4->enter($__internal_9b744bed761f5fd8b9e44d0db00da3a65665d205ee7f68a4ebcb1079c6bd4ae4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 13
        echo "    <span class=\"label ";
        echo (($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) ? ("label-status-error") : ("disabled"));
        echo "\">
        <span class=\"icon\">";
        // line 14
        echo twig_include($this->env, $context, "@WebProfiler/Icon/exception.svg");
        echo "</span>
        <strong>Exception</strong>
        ";
        // line 16
        if ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 17
            echo "            <span class=\"count\">
                <span>1</span>
            </span>
        ";
        }
        // line 21
        echo "    </span>
";
        
        $__internal_9b744bed761f5fd8b9e44d0db00da3a65665d205ee7f68a4ebcb1079c6bd4ae4->leave($__internal_9b744bed761f5fd8b9e44d0db00da3a65665d205ee7f68a4ebcb1079c6bd4ae4_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_734f7ca75e2f777d896b77966b41e4a8d8a96cb3b8b523c1a2d168c8811067dc = $this->env->getExtension("native_profiler");
        $__internal_734f7ca75e2f777d896b77966b41e4a8d8a96cb3b8b523c1a2d168c8811067dc->enter($__internal_734f7ca75e2f777d896b77966b41e4a8d8a96cb3b8b523c1a2d168c8811067dc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 25
        echo "    <h2>Exceptions</h2>

    ";
        // line 27
        if ( !$this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 28
            echo "        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    ";
        } else {
            // line 32
            echo "        <div class=\"sf-reset\">
            ";
            // line 33
            echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_exception", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
            echo "
        </div>
    ";
        }
        
        $__internal_734f7ca75e2f777d896b77966b41e4a8d8a96cb3b8b523c1a2d168c8811067dc->leave($__internal_734f7ca75e2f777d896b77966b41e4a8d8a96cb3b8b523c1a2d168c8811067dc_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/exception.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  117 => 33,  114 => 32,  108 => 28,  106 => 27,  102 => 25,  96 => 24,  88 => 21,  82 => 17,  80 => 16,  75 => 14,  70 => 13,  64 => 12,  54 => 9,  48 => 6,  45 => 5,  42 => 4,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@WebProfiler/Profiler/layout.html.twig' %}*/
/* */
/* {% block head %}*/
/*     {% if collector.hasexception %}*/
/*         <style>*/
/*             {{ render(path('_profiler_exception_css', { token: token })) }}*/
/*         </style>*/
/*     {% endif %}*/
/*     {{ parent() }}*/
/* {% endblock %}*/
/* */
/* {% block menu %}*/
/*     <span class="label {{ collector.hasexception ? 'label-status-error' : 'disabled' }}">*/
/*         <span class="icon">{{ include('@WebProfiler/Icon/exception.svg') }}</span>*/
/*         <strong>Exception</strong>*/
/*         {% if collector.hasexception %}*/
/*             <span class="count">*/
/*                 <span>1</span>*/
/*             </span>*/
/*         {% endif %}*/
/*     </span>*/
/* {% endblock %}*/
/* */
/* {% block panel %}*/
/*     <h2>Exceptions</h2>*/
/* */
/*     {% if not collector.hasexception %}*/
/*         <div class="empty">*/
/*             <p>No exception was thrown and caught during the request.</p>*/
/*         </div>*/
/*     {% else %}*/
/*         <div class="sf-reset">*/
/*             {{ render(path('_profiler_exception', { token: token })) }}*/
/*         </div>*/
/*     {% endif %}*/
/* {% endblock %}*/
/* */
