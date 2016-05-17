<?php

/* FOSUserBundle:Security:login.html.twig */
class __TwigTemplate_6729edbe58d9771576ba6bb543ed70f09bf442fcc1e254088004086554310413 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'formulaire' => array($this, 'block_formulaire'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "
";
        // line 3
        echo "

<div class=\"panel-footer col-sm-12 col-md-12 \">
    <div class=\"panel-footer text-center col-sm-12 col-md-12\">
        <p class=\"lead col-sm-12 col-md-12\"><strong>Se Connecter</strong></p>
    </div>
    ";
        // line 9
        if ((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error"))) {
            // line 10
            echo "

        <div class=\"alert alert-danger\">
            <p class=\"  lead\"><strong>";
            // line 13
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($this->getAttribute((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error")), "messageKey", array()), $this->getAttribute((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error")), "messageData", array()), "security"), "html", null, true);
            echo "</strong></p>
            <span class=\"close\"></span>
        </div>
        <form action=\"";
            // line 16
            echo $this->env->getExtension('routing')->getPath("fos_user_security_check");
            echo "\" method=\"post\">
            <input  type=\"hidden\" name=\"_csrf_token\" value=\"";
            // line 17
            echo twig_escape_filter($this->env, (isset($context["csrf_token"]) ? $context["csrf_token"] : $this->getContext($context, "csrf_token")), "html", null, true);
            echo "\" />

            <label class=\"col-sm-8 col-md-12 \" for=\"username\">";
            // line 19
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("security.login.username", array(), "FOSUserBundle"), "html", null, true);
            echo "</label>
            <input class=\"col-sm-6 col-md-12 \" type=\"text\" id=\"username\" name=\"_username\" value=\"";
            // line 20
            echo twig_escape_filter($this->env, (isset($context["last_username"]) ? $context["last_username"] : $this->getContext($context, "last_username")), "html", null, true);
            echo "\" required=\"required\" />


            <label class=\"col-sm-8 col-md-12 \" for=\"password\">";
            // line 23
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("security.login.password", array(), "FOSUserBundle"), "html", null, true);
            echo "</label>
            <input class=\"col-sm-6 col-md-12\" type=\"password\" id=\"password\" name=\"_password\" required=\"required\" />

            <input class=\" \" type=\"checkbox\" id=\"remember_me\" name=\"_remember_me\" value=\"on\" />
            <label class=\"\" for=\"remember_me\">";
            // line 27
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("security.login.remember_me", array(), "FOSUserBundle"), "html", null, true);
            echo "</label>

            <input type=\"submit\" class=\"btn btn-primary  col-md-12\" id=\"_submit\" name=\"_submit\" value=\"";
            // line 29
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("security.login.submit", array(), "FOSUserBundle"), "html", null, true);
            echo "\" />
            <li> <a class=\"col-sm-6 col-md-12 btn btn-link\" href=\"";
            // line 30
            echo $this->env->getExtension('routing')->getPath("fos_user_registration_register");
            echo "\">S'inscrire</a></li>

        </form>
   
        ";
            // line 34
            $this->loadTemplate("PIDEVCrowdRiseBundle:Security:login2.html.twig", "FOSUserBundle:Security:login.html.twig", 34)->display($context);
            // line 35
            echo "
    ";
        } else {
            // line 37
            echo "
        ";
            // line 38
            if (($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "headers", array()), "get", array(0 => "referer"), "method") != "http://localhost/PIDEV/web/app_dev.php/accueil")) {
                // line 39
                echo "            <div class=\"container text-center \">
               <h1>CONNEXION</h1>
            </div>
            <form action=\"";
                // line 42
                echo $this->env->getExtension('routing')->getPath("fos_user_security_check");
                echo "\" method=\"post\">
                <input  type=\"hidden\" name=\"_csrf_token\" value=\"";
                // line 43
                echo twig_escape_filter($this->env, (isset($context["csrf_token"]) ? $context["csrf_token"] : $this->getContext($context, "csrf_token")), "html", null, true);
                echo "\" />

                <label class=\"col-sm-8 col-md-12 \" for=\"username\">";
                // line 45
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("security.login.username", array(), "FOSUserBundle"), "html", null, true);
                echo "</label>
                <input class=\"col-sm-6 col-md-12 \" type=\"text\" id=\"username\" name=\"_username\" value=\"";
                // line 46
                echo twig_escape_filter($this->env, (isset($context["last_username"]) ? $context["last_username"] : $this->getContext($context, "last_username")), "html", null, true);
                echo "\" required=\"required\" />

                <label class=\"col-sm-8 col-md-12 \" for=\"password\">";
                // line 48
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("security.login.password", array(), "FOSUserBundle"), "html", null, true);
                echo "</label>
                <input class=\"col-sm-6 col-md-12\" type=\"password\" id=\"password\" name=\"_password\" required=\"required\" />

                <input class=\" \" type=\"checkbox\" id=\"remember_me\" name=\"_remember_me\" value=\"on\" />
                <label class=\"\" for=\"remember_me\">";
                // line 52
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("security.login.remember_me", array(), "FOSUserBundle"), "html", null, true);
                echo "</label>

                <input type=\"submit\" class=\"btn btn-primary  col-md-12\" id=\"_submit\" name=\"_submit\" value=\"";
                // line 54
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("security.login.submit", array(), "FOSUserBundle"), "html", null, true);
                echo "\" />
                <li> <a class=\"col-sm-6 col-md-12 btn btn-link\" href=\"";
                // line 55
                echo $this->env->getExtension('routing')->getPath("fos_user_registration_register");
                echo "\">S'inscrire</a></li>

            </form>
         
            ";
                // line 59
                $this->loadTemplate("PIDEVCrowdRiseBundle:Security:login2.html.twig", "FOSUserBundle:Security:login.html.twig", 59)->display($context);
                // line 60
                echo "        ";
            } else {
                // line 61
                echo "            ";
                $this->displayBlock('formulaire', $context, $blocks);
                // line 83
                echo "        ";
            }
            // line 84
            echo "    ";
        }
        // line 85
        echo "</div>";
    }

    // line 61
    public function block_formulaire($context, array $blocks = array())
    {
        // line 62
        echo "                <div class=\"container text-center \">
                    
                </div>
                <form action=\"";
        // line 65
        echo $this->env->getExtension('routing')->getPath("fos_user_security_check");
        echo "\" method=\"post\">
                    <input  type=\"hidden\" name=\"_csrf_token\" value=\"";
        // line 66
        echo twig_escape_filter($this->env, (isset($context["csrf_token"]) ? $context["csrf_token"] : $this->getContext($context, "csrf_token")), "html", null, true);
        echo "\" />

                    <label class=\"col-sm-8 col-md-12 \" for=\"username\">";
        // line 68
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("security.login.username", array(), "FOSUserBundle"), "html", null, true);
        echo "</label>
                    <input class=\"col-sm-6 col-md-12 \" type=\"text\" id=\"username\" name=\"_username\" value=\"";
        // line 69
        echo twig_escape_filter($this->env, (isset($context["last_username"]) ? $context["last_username"] : $this->getContext($context, "last_username")), "html", null, true);
        echo "\" required=\"required\" />

                    <label class=\"col-sm-8 col-md-12 \" for=\"password\">";
        // line 71
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("security.login.password", array(), "FOSUserBundle"), "html", null, true);
        echo "</label>
                    <input class=\"col-sm-6 col-md-12\" type=\"password\" id=\"password\" name=\"_password\" required=\"required\" />

                    <input class=\" \" type=\"checkbox\" id=\"remember_me\" name=\"_remember_me\" value=\"on\" />
                    <label class=\"\" for=\"remember_me\">";
        // line 75
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("security.login.remember_me", array(), "FOSUserBundle"), "html", null, true);
        echo "</label>

                    <input type=\"submit\" class=\"btn btn-primary  col-md-12\" id=\"_submit\" name=\"_submit\" value=\"";
        // line 77
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("security.login.submit", array(), "FOSUserBundle"), "html", null, true);
        echo "\" />
                    <li> <a class=\"col-sm-6 col-md-12 btn btn-link\" href=\"";
        // line 78
        echo $this->env->getExtension('routing')->getPath("fos_user_registration_register");
        echo "\">S'inscrire</a></li>

                </form>

            ";
    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Security:login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  203 => 78,  199 => 77,  194 => 75,  187 => 71,  182 => 69,  178 => 68,  173 => 66,  169 => 65,  164 => 62,  161 => 61,  157 => 85,  154 => 84,  151 => 83,  148 => 61,  145 => 60,  143 => 59,  136 => 55,  132 => 54,  127 => 52,  120 => 48,  115 => 46,  111 => 45,  106 => 43,  102 => 42,  97 => 39,  95 => 38,  92 => 37,  88 => 35,  86 => 34,  79 => 30,  75 => 29,  70 => 27,  63 => 23,  57 => 20,  53 => 19,  48 => 17,  44 => 16,  38 => 13,  33 => 10,  31 => 9,  23 => 3,  20 => 1,);
    }
}
/* */
/* {% trans_default_domain 'FOSUserBundle' %}*/
/* */
/* */
/* <div class="panel-footer col-sm-12 col-md-12 ">*/
/*     <div class="panel-footer text-center col-sm-12 col-md-12">*/
/*         <p class="lead col-sm-12 col-md-12"><strong>Se Connecter</strong></p>*/
/*     </div>*/
/*     {% if error %}*/
/* */
/* */
/*         <div class="alert alert-danger">*/
/*             <p class="  lead"><strong>{{ error.messageKey|trans(error.messageData, 'security') }}</strong></p>*/
/*             <span class="close"></span>*/
/*         </div>*/
/*         <form action="{{ path("fos_user_security_check") }}" method="post">*/
/*             <input  type="hidden" name="_csrf_token" value="{{ csrf_token }}" />*/
/* */
/*             <label class="col-sm-8 col-md-12 " for="username">{{ 'security.login.username'|trans }}</label>*/
/*             <input class="col-sm-6 col-md-12 " type="text" id="username" name="_username" value="{{ last_username }}" required="required" />*/
/* */
/* */
/*             <label class="col-sm-8 col-md-12 " for="password">{{ 'security.login.password'|trans }}</label>*/
/*             <input class="col-sm-6 col-md-12" type="password" id="password" name="_password" required="required" />*/
/* */
/*             <input class=" " type="checkbox" id="remember_me" name="_remember_me" value="on" />*/
/*             <label class="" for="remember_me">{{ 'security.login.remember_me'|trans }}</label>*/
/* */
/*             <input type="submit" class="btn btn-primary  col-md-12" id="_submit" name="_submit" value="{{ 'security.login.submit'|trans }}" />*/
/*             <li> <a class="col-sm-6 col-md-12 btn btn-link" href="{{ path("fos_user_registration_register") }}">S'inscrire</a></li>*/
/* */
/*         </form>*/
/*    */
/*         {% include 'PIDEVCrowdRiseBundle:Security:login2.html.twig' %}*/
/* */
/*     {% else %}*/
/* */
/*         {% if  app.request.headers.get('referer') != "http://localhost/PIDEV/web/app_dev.php/accueil"  %}*/
/*             <div class="container text-center ">*/
/*                <h1>CONNEXION</h1>*/
/*             </div>*/
/*             <form action="{{ path("fos_user_security_check") }}" method="post">*/
/*                 <input  type="hidden" name="_csrf_token" value="{{ csrf_token }}" />*/
/* */
/*                 <label class="col-sm-8 col-md-12 " for="username">{{ 'security.login.username'|trans }}</label>*/
/*                 <input class="col-sm-6 col-md-12 " type="text" id="username" name="_username" value="{{ last_username }}" required="required" />*/
/* */
/*                 <label class="col-sm-8 col-md-12 " for="password">{{ 'security.login.password'|trans }}</label>*/
/*                 <input class="col-sm-6 col-md-12" type="password" id="password" name="_password" required="required" />*/
/* */
/*                 <input class=" " type="checkbox" id="remember_me" name="_remember_me" value="on" />*/
/*                 <label class="" for="remember_me">{{ 'security.login.remember_me'|trans }}</label>*/
/* */
/*                 <input type="submit" class="btn btn-primary  col-md-12" id="_submit" name="_submit" value="{{ 'security.login.submit'|trans }}" />*/
/*                 <li> <a class="col-sm-6 col-md-12 btn btn-link" href="{{ path("fos_user_registration_register") }}">S'inscrire</a></li>*/
/* */
/*             </form>*/
/*          */
/*             {% include 'PIDEVCrowdRiseBundle:Security:login2.html.twig' %}*/
/*         {% else %}*/
/*             {% block formulaire %}*/
/*                 <div class="container text-center ">*/
/*                     */
/*                 </div>*/
/*                 <form action="{{ path("fos_user_security_check") }}" method="post">*/
/*                     <input  type="hidden" name="_csrf_token" value="{{ csrf_token }}" />*/
/* */
/*                     <label class="col-sm-8 col-md-12 " for="username">{{ 'security.login.username'|trans }}</label>*/
/*                     <input class="col-sm-6 col-md-12 " type="text" id="username" name="_username" value="{{ last_username }}" required="required" />*/
/* */
/*                     <label class="col-sm-8 col-md-12 " for="password">{{ 'security.login.password'|trans }}</label>*/
/*                     <input class="col-sm-6 col-md-12" type="password" id="password" name="_password" required="required" />*/
/* */
/*                     <input class=" " type="checkbox" id="remember_me" name="_remember_me" value="on" />*/
/*                     <label class="" for="remember_me">{{ 'security.login.remember_me'|trans }}</label>*/
/* */
/*                     <input type="submit" class="btn btn-primary  col-md-12" id="_submit" name="_submit" value="{{ 'security.login.submit'|trans }}" />*/
/*                     <li> <a class="col-sm-6 col-md-12 btn btn-link" href="{{ path("fos_user_registration_register") }}">S'inscrire</a></li>*/
/* */
/*                 </form>*/
/* */
/*             {% endblock formulaire %}*/
/*         {% endif %}*/
/*     {% endif %}*/
/* </div>*/
