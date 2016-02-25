<?php

/* PIDEVCrowdRiseBundle:Notification:listNotification.html.twig */
class __TwigTemplate_03af52ff33ba23efcf804db19f73baaeb4ebec8170528f2e3f3d00abd8f64314 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 2
        $this->parent = $this->loadTemplate("PIDEVCrowdRiseBundle::layout.html.twig", "PIDEVCrowdRiseBundle:Notification:listNotification.html.twig", 2);
        $this->blocks = array(
            'content' => array($this, 'block_content'),
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

    // line 3
    public function block_content($context, array $blocks = array())
    {
        // line 4
        echo "    <section id=\"portfolio-section\" class=\"page bg-style1\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-md-12\">
                    <div class=\"portfolio\">
                        <!-- Begin page header-->
                        <div class=\"page\">
                            <div class=\"container\">
                                <div class=\"page-header text-center wow fadeInDown\" data-wow-delay=\"0.4s\">
                                    <h2>Votre notification</h2>
                                </div>
                            </div>
                            <!-- End page header-->
                            <div>
                                <div class=\"portfolio_content\">
                                    <div class=\"row\" id=\"portfolio\">

                                        <div class=\"col-xs-12 col-sm-4  role\">
                                            <div class=\"portfolio_single_content\">
                                                <img src=";
        // line 23
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("img/portfolio/p7.jpg"), "html", null, true);
        echo " alt=\"title\"/>

                                                <div>
                                                    <a href=\"#\">Créateur</a>
                                                    <span>Créer des projets à financer</span>
                                                    <center><input type=\"radio\" name=\"role\" value=\"créateur\"></center>
                                                </div>
                                            </div>
                                        </div>
                                        <div class=\"col-xs-12 col-sm-4  role\">
                                            ";
        // line 33
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["notification"]) ? $context["notification"] : $this->getContext($context, "notification")));
        foreach ($context['_seq'] as $context["_key"] => $context["notifications"]) {
            // line 34
            echo "                                               <fieldset>
                                                <h3>Producer :
                                                    <small>";
            // line 36
            echo twig_escape_filter($this->env, $this->getAttribute($context["notifications"], "producer", array()), "html", null, true);
            echo "</small>
                                                </h3>
                                                <h3>Receiver :
                                                    <small>";
            // line 39
            echo twig_escape_filter($this->env, $this->getAttribute($context["notifications"], "receiver", array()), "html", null, true);
            echo "</small>
                                                </h3>
                                                <h3>Message :
                                                    <small> ";
            // line 42
            echo twig_escape_filter($this->env, $this->getAttribute($context["notifications"], "message", array()), "html", null, true);
            echo " </small>
                                                </h3>
                                               </fieldset>
                                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['notifications'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 46
        echo "                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
    </section>
";
    }

    public function getTemplateName()
    {
        return "PIDEVCrowdRiseBundle:Notification:listNotification.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  95 => 46,  85 => 42,  79 => 39,  73 => 36,  69 => 34,  65 => 33,  52 => 23,  31 => 4,  28 => 3,  11 => 2,);
    }
}
/* {# empty Twig template #}*/
/* {% extends 'PIDEVCrowdRiseBundle::layout.html.twig' %}*/
/* {% block content %}*/
/*     <section id="portfolio-section" class="page bg-style1">*/
/*         <div class="container">*/
/*             <div class="row">*/
/*                 <div class="col-md-12">*/
/*                     <div class="portfolio">*/
/*                         <!-- Begin page header-->*/
/*                         <div class="page">*/
/*                             <div class="container">*/
/*                                 <div class="page-header text-center wow fadeInDown" data-wow-delay="0.4s">*/
/*                                     <h2>Votre notification</h2>*/
/*                                 </div>*/
/*                             </div>*/
/*                             <!-- End page header-->*/
/*                             <div>*/
/*                                 <div class="portfolio_content">*/
/*                                     <div class="row" id="portfolio">*/
/* */
/*                                         <div class="col-xs-12 col-sm-4  role">*/
/*                                             <div class="portfolio_single_content">*/
/*                                                 <img src={{ asset('img/portfolio/p7.jpg') }} alt="title"/>*/
/* */
/*                                                 <div>*/
/*                                                     <a href="#">Créateur</a>*/
/*                                                     <span>Créer des projets à financer</span>*/
/*                                                     <center><input type="radio" name="role" value="créateur"></center>*/
/*                                                 </div>*/
/*                                             </div>*/
/*                                         </div>*/
/*                                         <div class="col-xs-12 col-sm-4  role">*/
/*                                             {% for notifications in notification %}*/
/*                                                <fieldset>*/
/*                                                 <h3>Producer :*/
/*                                                     <small>{{ notifications.producer }}</small>*/
/*                                                 </h3>*/
/*                                                 <h3>Receiver :*/
/*                                                     <small>{{ notifications.receiver }}</small>*/
/*                                                 </h3>*/
/*                                                 <h3>Message :*/
/*                                                     <small> {{ notifications.message }} </small>*/
/*                                                 </h3>*/
/*                                                </fieldset>*/
/*                                             {% endfor %}*/
/*                                         </div>*/
/*                                     </div>*/
/*                                 </div>*/
/*                             </div>*/
/* */
/*                         </div>*/
/*                     </div>*/
/*                 </div>*/
/*             </div>*/
/*     </section>*/
/* {% endblock %}*/
