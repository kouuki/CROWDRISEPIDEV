<?php

/* PIDEVCrowdRiseBundle:Projet:index.html.twig */
class __TwigTemplate_1d12931c7058f81798800c3b682ea1470ad5f8c0112a82eeb5994642e8d84edc extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "PIDEVCrowdRiseBundle:Projet:index.html.twig", 1);
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
        echo "<h1>Projet list</h1>

    <table class=\"records_list\">
        <thead>
            <tr>
                <th>Idprojet</th>
                <th>Titre</th>
                <th>Description</th>
                <th>Typefinancement</th>
                <th>Dateprojet</th>
                <th>Deadlineprojet</th>
                <th>Fichierprojet</th>
                <th>Imageprojet</th>
                <th>Videoprojet</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        ";
        // line 22
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["entities"]) ? $context["entities"] : $this->getContext($context, "entities")));
        foreach ($context['_seq'] as $context["_key"] => $context["entity"]) {
            // line 23
            echo "            <tr>
                <td><a href=\"";
            // line 24
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("projet_show", array("id" => $this->getAttribute($context["entity"], "idProjet", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "idProjet", array()), "html", null, true);
            echo "</a></td>
                <td>";
            // line 25
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "titre", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 26
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "description", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 27
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "typeFinancement", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 28
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "dateProjet", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 29
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "deadlineProjet", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 30
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "fichierProjet", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 31
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "imageProjet", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 32
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "videoProjet", array()), "html", null, true);
            echo "</td>
                <td>
                <ul>
                    <li>
                        <a href=\"";
            // line 36
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("projet_show", array("id" => $this->getAttribute($context["entity"], "idProjet", array()))), "html", null, true);
            echo "\">show</a>
                    </li>
                </ul>
                </td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entity'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 42
        echo "        </tbody>
    </table>

    ";
    }

    public function getTemplateName()
    {
        return "PIDEVCrowdRiseBundle:Projet:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  111 => 42,  99 => 36,  92 => 32,  88 => 31,  84 => 30,  80 => 29,  76 => 28,  72 => 27,  68 => 26,  64 => 25,  58 => 24,  55 => 23,  51 => 22,  31 => 4,  28 => 3,  11 => 1,);
    }
}
/* {% extends '::base.html.twig' %}*/
/* */
/* {% block body -%}*/
/*     <h1>Projet list</h1>*/
/* */
/*     <table class="records_list">*/
/*         <thead>*/
/*             <tr>*/
/*                 <th>Idprojet</th>*/
/*                 <th>Titre</th>*/
/*                 <th>Description</th>*/
/*                 <th>Typefinancement</th>*/
/*                 <th>Dateprojet</th>*/
/*                 <th>Deadlineprojet</th>*/
/*                 <th>Fichierprojet</th>*/
/*                 <th>Imageprojet</th>*/
/*                 <th>Videoprojet</th>*/
/*                 <th>Actions</th>*/
/*             </tr>*/
/*         </thead>*/
/*         <tbody>*/
/*         {% for entity in entities %}*/
/*             <tr>*/
/*                 <td><a href="{{ path('projet_show', { 'id': entity.idProjet }) }}">{{ entity.idProjet }}</a></td>*/
/*                 <td>{{ entity.titre }}</td>*/
/*                 <td>{{ entity.description }}</td>*/
/*                 <td>{{ entity.typeFinancement }}</td>*/
/*                 <td>{{ entity.dateProjet }}</td>*/
/*                 <td>{{ entity.deadlineProjet }}</td>*/
/*                 <td>{{ entity.fichierProjet }}</td>*/
/*                 <td>{{ entity.imageProjet }}</td>*/
/*                 <td>{{ entity.videoProjet }}</td>*/
/*                 <td>*/
/*                 <ul>*/
/*                     <li>*/
/*                         <a href="{{ path('projet_show', { 'id': entity.idProjet }) }}">show</a>*/
/*                     </li>*/
/*                 </ul>*/
/*                 </td>*/
/*             </tr>*/
/*         {% endfor %}*/
/*         </tbody>*/
/*     </table>*/
/* */
/*     {% endblock %}*/
/* */
