<?php

/* PIDEVCrowdRiseBundle:Default:index.html.twig */
class __TwigTemplate_fc86cbff029a7cf13a47fc6b88989a068154133adb28bb1e6e6340783b54f1fd extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 3
        $this->parent = $this->loadTemplate("PIDEVCrowdRiseBundle::layout.html.twig", "PIDEVCrowdRiseBundle:Default:index.html.twig", 3);
        $this->blocks = array(
            'test' => array($this, 'block_test'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "PIDEVCrowdRiseBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 4
    public function block_test($context, array $blocks = array())
    {
        // line 5
        echo "    Hello ";
        echo twig_escape_filter($this->env, (isset($context["name"]) ? $context["name"] : $this->getContext($context, "name")), "html", null, true);
        echo "!
";
    }

    public function getTemplateName()
    {
        return "PIDEVCrowdRiseBundle:Default:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  31 => 5,  28 => 4,  11 => 3,);
    }
}
/* */
/* */
/* {% extends 'PIDEVCrowdRiseBundle::layout.html.twig' %}*/
/* {% block test %}*/
/*     Hello {{ name }}!*/
/* {% endblock %}*/
/* */
/* */
