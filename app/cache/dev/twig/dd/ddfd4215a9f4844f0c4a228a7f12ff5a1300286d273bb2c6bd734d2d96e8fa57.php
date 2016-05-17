<?php

/* FOSUserBundle:Registration:register_content.html.twig */
class __TwigTemplate_26e8430fdb5ccfd3f4ca17f29b7f92e0b334905f7502d074460ea219c637d719 extends Twig_Template
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
        // line 2
        echo "<br/><br/><br/><br/><br/><br/><br/>
<div class=\"jumbotron  \">
    <div class=\"container text-center \">
        <h1>INSCRIPTION</h1>
    </div>
    <div class=\"container center-block  \">
        ";
        // line 8
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start', array("method" => "post", "action" => $this->env->getExtension('routing')->getPath("fos_user_registration_register"), "attr" => array("class" => "fos_user_registration_register")));
        echo "
        <br/>
        ";
        // line 10
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        echo "  
        <div>
            <input type=\"submit\" class=\"btn btn-primary \" value=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("registration.submit", array(), "FOSUserBundle"), "html", null, true);
        echo "\" />
        </div>
        ";
        // line 14
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "
    </div>
</div>";
    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:register_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  42 => 14,  37 => 12,  32 => 10,  27 => 8,  19 => 2,);
    }
}
/* {% trans_default_domain 'FOSUserBundle' %}*/
/* <br/><br/><br/><br/><br/><br/><br/>*/
/* <div class="jumbotron  ">*/
/*     <div class="container text-center ">*/
/*         <h1>INSCRIPTION</h1>*/
/*     </div>*/
/*     <div class="container center-block  ">*/
/*         {{ form_start(form, {'method': 'post', 'action': path('fos_user_registration_register'), 'attr': {'class': 'fos_user_registration_register'}}) }}*/
/*         <br/>*/
/*         {{ form_widget(form) }}  */
/*         <div>*/
/*             <input type="submit" class="btn btn-primary " value="{{ 'registration.submit'|trans }}" />*/
/*         </div>*/
/*         {{ form_end(form) }}*/
/*     </div>*/
/* </div>*/
