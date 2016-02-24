<?php

/* DCSRatingBundle:Rating:star.html.twig */
class __TwigTemplate_0052dfb133dc87f986d6265435325dee7659fb0633941c12e6f9a0cfa91ef49b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_789ea31b68fe49fe6f7d9a92915b388257a2700c97c95d67968b256c715ec01c = $this->env->getExtension("native_profiler");
        $__internal_789ea31b68fe49fe6f7d9a92915b388257a2700c97c95d67968b256c715ec01c->enter($__internal_789ea31b68fe49fe6f7d9a92915b388257a2700c97c95d67968b256c715ec01c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "DCSRatingBundle:Rating:star.html.twig"));

        // line 1
        ob_start();
        // line 2
        echo "    <div class=\"dcs-rating-container\">
        ";
        // line 3
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range((isset($context["maxValue"]) ? $context["maxValue"] : $this->getContext($context, "maxValue")), 1));
        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
            // line 4
            echo "            ";
            $context["style"] = "";
            // line 5
            echo "            ";
            if (($context["i"] <= (isset($context["rate"]) ? $context["rate"] : $this->getContext($context, "rate")))) {
                // line 6
                echo "                ";
                $context["style"] = "full";
                // line 7
                echo "            ";
            } else {
                // line 8
                echo "                ";
                $context["style"] = (($this->env->getExtension('rating_extension')->isHalfStarFilter((isset($context["rate"]) ? $context["rate"] : $this->getContext($context, "rate")), $context["i"])) ? ("half") : (""));
                // line 9
                echo "            ";
            }
            // line 10
            echo "            <span class=\"star ";
            echo twig_escape_filter($this->env, (isset($context["style"]) ? $context["style"] : $this->getContext($context, "style")), "html", null, true);
            echo "\">☆</span>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 12
        echo "    </div>
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_789ea31b68fe49fe6f7d9a92915b388257a2700c97c95d67968b256c715ec01c->leave($__internal_789ea31b68fe49fe6f7d9a92915b388257a2700c97c95d67968b256c715ec01c_prof);

    }

    public function getTemplateName()
    {
        return "DCSRatingBundle:Rating:star.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  58 => 12,  49 => 10,  46 => 9,  43 => 8,  40 => 7,  37 => 6,  34 => 5,  31 => 4,  27 => 3,  24 => 2,  22 => 1,);
    }
}
/* {% spaceless %}*/
/*     <div class="dcs-rating-container">*/
/*         {% for i in maxValue..1 %}*/
/*             {% set style = '' %}*/
/*             {% if i <= rate %}*/
/*                 {% set style = 'full' %}*/
/*             {% else %}*/
/*                 {% set style = rate|isHalfStar(i) ? 'half' %}*/
/*             {% endif %}*/
/*             <span class="star {{ style }}">☆</span>*/
/*         {% endfor %}*/
/*     </div>*/
/* {% endspaceless %}*/
