<?php

/* PIDEVCrowdRiseBundle:Projet:show.html.twig */
class __TwigTemplate_8ee154ff9341276ce18c1432891f39af78434cfef55c444e7339005c0a97ff23 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "PIDEVCrowdRiseBundle:Projet:show.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        // line 4
        echo "<h1>Projet</h1>

    <table class=\"record_properties\">
        <tbody>
            <tr>
                <th>Idprojet</th>
                <td>";
        // line 10
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "idProjet", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Titre</th>
                <td>";
        // line 14
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "titre", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Description</th>
                <td>";
        // line 18
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "description", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Typefinancement</th>
                <td>";
        // line 22
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "typeFinancement", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Dateprojet</th>
                <td>";
        // line 26
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "dateProjet", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Deadlineprojet</th>
                <td>";
        // line 30
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "deadlineProjet", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Fichierprojet</th>
                <td>";
        // line 34
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "fichierProjet", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Imageprojet</th>
                <td>";
        // line 38
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "imageProjet", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Videoprojet</th>
                <td>";
        // line 42
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "videoProjet", array()), "html", null, true);
        echo "</td>
            </tr>
        </tbody>
    </table>

        <ul class=\"record_actions\">
    <li>
        <a href=\"";
        // line 49
        echo $this->env->getExtension('routing')->getPath("projet");
        echo "\">
            Back to the list
        </a>
    </li>
</ul>
";
    }

    public function getTemplateName()
    {
        return "PIDEVCrowdRiseBundle:Projet:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  105 => 49,  95 => 42,  88 => 38,  81 => 34,  74 => 30,  67 => 26,  60 => 22,  53 => 18,  46 => 14,  39 => 10,  31 => 4,  28 => 3,  11 => 1,);
    }
}
/* {% extends '::base.html.twig' %}*/
/* */
/* {% block body -%}*/
/*     <h1>Projet</h1>*/
/* */
/*     <table class="record_properties">*/
/*         <tbody>*/
/*             <tr>*/
/*                 <th>Idprojet</th>*/
/*                 <td>{{ entity.idProjet }}</td>*/
/*             </tr>*/
/*             <tr>*/
/*                 <th>Titre</th>*/
/*                 <td>{{ entity.titre }}</td>*/
/*             </tr>*/
/*             <tr>*/
/*                 <th>Description</th>*/
/*                 <td>{{ entity.description }}</td>*/
/*             </tr>*/
/*             <tr>*/
/*                 <th>Typefinancement</th>*/
/*                 <td>{{ entity.typeFinancement }}</td>*/
/*             </tr>*/
/*             <tr>*/
/*                 <th>Dateprojet</th>*/
/*                 <td>{{ entity.dateProjet }}</td>*/
/*             </tr>*/
/*             <tr>*/
/*                 <th>Deadlineprojet</th>*/
/*                 <td>{{ entity.deadlineProjet }}</td>*/
/*             </tr>*/
/*             <tr>*/
/*                 <th>Fichierprojet</th>*/
/*                 <td>{{ entity.fichierProjet }}</td>*/
/*             </tr>*/
/*             <tr>*/
/*                 <th>Imageprojet</th>*/
/*                 <td>{{ entity.imageProjet }}</td>*/
/*             </tr>*/
/*             <tr>*/
/*                 <th>Videoprojet</th>*/
/*                 <td>{{ entity.videoProjet }}</td>*/
/*             </tr>*/
/*         </tbody>*/
/*     </table>*/
/* */
/*         <ul class="record_actions">*/
/*     <li>*/
/*         <a href="{{ path('projet') }}">*/
/*             Back to the list*/
/*         </a>*/
/*     </li>*/
/* </ul>*/
/* {% endblock %}*/
/* */
