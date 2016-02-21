<?php

/* PIDEVCrowdRiseBundle:Solution:consultersolution.html.twig */
class __TwigTemplate_4417e5daa54bab49ab0c92a5aa8781775b28e5ec1914ae0fa064fa379c655184 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 2
        $this->parent = $this->loadTemplate("PIDEVCrowdRiseBundle::layout.html.twig", "PIDEVCrowdRiseBundle:Solution:consultersolution.html.twig", 2);
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
        echo "
    <div class=\"extra-space-xxl\" style=\"background-color: whitesmoke\"></div>
    <div class=\"extra-space-xxl\" style=\"background-color: whitesmoke\"></div>


    <section id=\"text-carousel-intro-section\" class=\"parallax\" data-stellar-background-ratio=\"0.5\" style=\"background-color: whitesmoke\">
        <div class = \"container slider-content\">
            <div class=\"row\">
                <div class=\"col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1 col-sm-12\">
                    <h2>Consulter les solutions</h2>
                    <div class=\"panel panel-grey wow bounceInLeft\">
                        <div class=\"panel-heading\"></div>
                        <div class=\"panel-body pan\" style=\"background-color: white\">


                            <div class=\"input-group\"> <span class=\"input-group-addon\">Filter</span>

                                <input id=\"filter\" type=\"text\" class=\"form-control\" placeholder=\"Type here...\">
                            </div>

                            <table class=\"table table-striped col-lg-4\">
                                <thead>
                                    <tr>
                                        <th>Solution</th>
                                        <th>Problème</th> 
                                        <th>Modifier</th>
                                        <th>Supprimer</th>
                                        <th>Evaluer</th>

                                    </tr>
                                </thead>
                                <tbody class=\"searchable\">

                                    <tr>
                                        <td>
                                            <h4>  solution1</h4>
                                            <p>iuzahqlnv</p>
                                        </td>
                                        <td>
                                            <a href=\"#\">  problème3</a>
                                        </td>
                                        <td><a href=\"#\">Modifier</a></td>
                                        <td><a href=\"#\">Supprimer</a></td>
                                        <td>
                                            <div class=\"form-group\">
                                                <div class=\"rating\">
                                                    <label for=\"reliability-5\">
                                                                <i class=\"fa fa-star\"></i>
                                                            </label>
                                                            <label for=\"overall-5\">
                                                                <i class=\"fa fa-star\"></i>
                                                            </label>
                                                            <label for=\"quality-3\">
                                                                <i class=\"fa fa-star\"></i>
                                                            </label>
                                                            <label for=\"quality-2\">
                                                                <i class=\"fa fa-star text-yellow\"></i>
                                                            </label>
                                                            <label for=\"quality-1\">
                                                                <i class=\"fa fa-star text-yellow\"></i>
                                                            </label>

                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>

                                        <td>
                                            <h4>  solution2</h4>
                                            <p>iuzahqlnv</p>
                                        </td>
                                        <td>
                                            <a href=\"#\">  problème3</a>
                                        </td>

                                        <td><a href=\"#\">Modifier</a></td>
                                        <td><a href=\"#\">Supprimer</a></td>

                                        <td>
                                            <div class=\"form-group\">
                                                <div class=\"rating\">
                                                    <label for=\"quality-5\">
                                                                <i class=\"fa fa-star\"></i>
                                                            </label>
                                                            <label for=\"quality-4\">
                                                                <i class=\"fa fa-star\"></i>
                                                            </label>
                                                            <label for=\"quality-3\">
                                                                <i class=\"fa fa-star\"></i>
                                                            </label>
                                                            <label for=\"quality-2\">
                                                                <i class=\"fa fa-star text-yellow\"></i>
                                                            </label>
                                                            <label for=\"quality-1\">
                                                                <i class=\"fa fa-star text-yellow\"></i>
                                                            </label>

                                                </div>
                                            </div>
                                        </td>
                                    </tr>

                                    <tr>

                                        <td>
                                            <h4>  solution1</h4>
                                            <p>iuzahqlnv</p>
                                        </td>
                                        <td>
                                            <a href=\"#\">  problème3</a>
                                        </td>
                                        <td><a href=\"#\">Modifier</a></td>
                                        <td><a href=\"#\">Supprimer</a></td>

                                        <td>
                                            <div class=\"form-group\">
                                                <div class=\"rating\">
                                                   <label for=\"quality-5\">
                                                                <i class=\"fa fa-star\"></i>
                                                            </label>
                                                            <label for=\"quality-4\">
                                                                <i class=\"fa fa-star\"></i>
                                                            </label>
                                                            <label for=\"quality-3\">
                                                                <i class=\"fa fa-star\"></i>
                                                            </label>
                                                            <label for=\"quality-2\">
                                                                <i class=\"fa fa-star text-yellow\"></i>
                                                            </label>
                                                            <label for=\"quality-1\">
                                                                <i class=\"fa fa-star text-yellow\"></i>
                                                            </label>

                                                </div>
                                            </div>
                                        </td>
                                    </tr>


                                </tbody>
                            </table>


                            <nav>
                                <ul class=\"pager\">
                                    <li><a href=\"#\">Previous</a></li>
                                    <li><a href=\"#\">Next</a></li>
                                </ul>
                            </nav>

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
        return "PIDEVCrowdRiseBundle:Solution:consultersolution.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  31 => 4,  28 => 3,  11 => 2,);
    }
}
/* */
/* {% extends 'PIDEVCrowdRiseBundle::layout.html.twig' %}*/
/* {% block content %}*/
/* */
/*     <div class="extra-space-xxl" style="background-color: whitesmoke"></div>*/
/*     <div class="extra-space-xxl" style="background-color: whitesmoke"></div>*/
/* */
/* */
/*     <section id="text-carousel-intro-section" class="parallax" data-stellar-background-ratio="0.5" style="background-color: whitesmoke">*/
/*         <div class = "container slider-content">*/
/*             <div class="row">*/
/*                 <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1 col-sm-12">*/
/*                     <h2>Consulter les solutions</h2>*/
/*                     <div class="panel panel-grey wow bounceInLeft">*/
/*                         <div class="panel-heading"></div>*/
/*                         <div class="panel-body pan" style="background-color: white">*/
/* */
/* */
/*                             <div class="input-group"> <span class="input-group-addon">Filter</span>*/
/* */
/*                                 <input id="filter" type="text" class="form-control" placeholder="Type here...">*/
/*                             </div>*/
/* */
/*                             <table class="table table-striped col-lg-4">*/
/*                                 <thead>*/
/*                                     <tr>*/
/*                                         <th>Solution</th>*/
/*                                         <th>Problème</th> */
/*                                         <th>Modifier</th>*/
/*                                         <th>Supprimer</th>*/
/*                                         <th>Evaluer</th>*/
/* */
/*                                     </tr>*/
/*                                 </thead>*/
/*                                 <tbody class="searchable">*/
/* */
/*                                     <tr>*/
/*                                         <td>*/
/*                                             <h4>  solution1</h4>*/
/*                                             <p>iuzahqlnv</p>*/
/*                                         </td>*/
/*                                         <td>*/
/*                                             <a href="#">  problème3</a>*/
/*                                         </td>*/
/*                                         <td><a href="#">Modifier</a></td>*/
/*                                         <td><a href="#">Supprimer</a></td>*/
/*                                         <td>*/
/*                                             <div class="form-group">*/
/*                                                 <div class="rating">*/
/*                                                     <label for="reliability-5">*/
/*                                                                 <i class="fa fa-star"></i>*/
/*                                                             </label>*/
/*                                                             <label for="overall-5">*/
/*                                                                 <i class="fa fa-star"></i>*/
/*                                                             </label>*/
/*                                                             <label for="quality-3">*/
/*                                                                 <i class="fa fa-star"></i>*/
/*                                                             </label>*/
/*                                                             <label for="quality-2">*/
/*                                                                 <i class="fa fa-star text-yellow"></i>*/
/*                                                             </label>*/
/*                                                             <label for="quality-1">*/
/*                                                                 <i class="fa fa-star text-yellow"></i>*/
/*                                                             </label>*/
/* */
/*                                                 </div>*/
/*                                             </div>*/
/*                                         </td>*/
/*                                     </tr>*/
/*                                     <tr>*/
/* */
/*                                         <td>*/
/*                                             <h4>  solution2</h4>*/
/*                                             <p>iuzahqlnv</p>*/
/*                                         </td>*/
/*                                         <td>*/
/*                                             <a href="#">  problème3</a>*/
/*                                         </td>*/
/* */
/*                                         <td><a href="#">Modifier</a></td>*/
/*                                         <td><a href="#">Supprimer</a></td>*/
/* */
/*                                         <td>*/
/*                                             <div class="form-group">*/
/*                                                 <div class="rating">*/
/*                                                     <label for="quality-5">*/
/*                                                                 <i class="fa fa-star"></i>*/
/*                                                             </label>*/
/*                                                             <label for="quality-4">*/
/*                                                                 <i class="fa fa-star"></i>*/
/*                                                             </label>*/
/*                                                             <label for="quality-3">*/
/*                                                                 <i class="fa fa-star"></i>*/
/*                                                             </label>*/
/*                                                             <label for="quality-2">*/
/*                                                                 <i class="fa fa-star text-yellow"></i>*/
/*                                                             </label>*/
/*                                                             <label for="quality-1">*/
/*                                                                 <i class="fa fa-star text-yellow"></i>*/
/*                                                             </label>*/
/* */
/*                                                 </div>*/
/*                                             </div>*/
/*                                         </td>*/
/*                                     </tr>*/
/* */
/*                                     <tr>*/
/* */
/*                                         <td>*/
/*                                             <h4>  solution1</h4>*/
/*                                             <p>iuzahqlnv</p>*/
/*                                         </td>*/
/*                                         <td>*/
/*                                             <a href="#">  problème3</a>*/
/*                                         </td>*/
/*                                         <td><a href="#">Modifier</a></td>*/
/*                                         <td><a href="#">Supprimer</a></td>*/
/* */
/*                                         <td>*/
/*                                             <div class="form-group">*/
/*                                                 <div class="rating">*/
/*                                                    <label for="quality-5">*/
/*                                                                 <i class="fa fa-star"></i>*/
/*                                                             </label>*/
/*                                                             <label for="quality-4">*/
/*                                                                 <i class="fa fa-star"></i>*/
/*                                                             </label>*/
/*                                                             <label for="quality-3">*/
/*                                                                 <i class="fa fa-star"></i>*/
/*                                                             </label>*/
/*                                                             <label for="quality-2">*/
/*                                                                 <i class="fa fa-star text-yellow"></i>*/
/*                                                             </label>*/
/*                                                             <label for="quality-1">*/
/*                                                                 <i class="fa fa-star text-yellow"></i>*/
/*                                                             </label>*/
/* */
/*                                                 </div>*/
/*                                             </div>*/
/*                                         </td>*/
/*                                     </tr>*/
/* */
/* */
/*                                 </tbody>*/
/*                             </table>*/
/* */
/* */
/*                             <nav>*/
/*                                 <ul class="pager">*/
/*                                     <li><a href="#">Previous</a></li>*/
/*                                     <li><a href="#">Next</a></li>*/
/*                                 </ul>*/
/*                             </nav>*/
/* */
/*                         </div>*/
/*                     </div>*/
/*                 </div>*/
/*             </div>*/
/*         </div>*/
/*     </section>*/
/* */
/* {% endblock %}*/
/* */
/* */
