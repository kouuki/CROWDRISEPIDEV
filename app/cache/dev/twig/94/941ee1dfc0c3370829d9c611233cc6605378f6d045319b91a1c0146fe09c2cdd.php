<?php

/* PIDEVCrowdRiseBundle:Accueil:consultersolution.html.twig */
class __TwigTemplate_c3d27ecde45e2ecf8b40207a06f497ef3cf69358a05690496f15ce7640d0a9f0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("PIDEVCrowdRiseBundle::layout.html.twig", "PIDEVCrowdRiseBundle:Accueil:consultersolution.html.twig", 1);
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

    // line 2
    public function block_content($context, array $blocks = array())
    {
        // line 3
        echo "    <div class=\"extra-space-xxl\" style=\"background-color: whitesmoke\"></div>
    <div class=\"extra-space-xxl\" style=\"background-color: whitesmoke\"></div>


    <section id=\"text-carousel-intro-section\" class=\"parallax\" data-stellar-background-ratio=\"0.5\" style=\"background-color: whitesmoke\">

        <div class=\"page-content\">
            <div id=\"tab-general\">
                <div class=\"row mbl\">
                    <div class=\"col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1 col-sm-12\">

                        <div class=\"col-md-12\">
                            <div id=\"area-chart-spline\" style=\"width: 100%; height: 300px; display: none;\">
                            </div>
                        </div>

                    </div>

                    <div class=\"col-lg-12\">

                        <div class=\"page-content\">
                            <div class=\"row\">
                                <div class=\"col-lg-12\">
                                    <div class=\"panel\">
                                        <div class=\"panel-body\">
                                            <div id=\"grid-layout-table-1\" class=\"box jplist\">
                                                <div class=\"jplist-ios-button\"><i class=\"fa fa-sort\"></i>jPList Actions</div>
                                                <div class=\"jplist-panel box panel-top\">
                                                    <button type=\"button\" data-control-type=\"reset\" data-control-name=\"reset\" data-control-action=\"reset\" class=\"jplist-reset-btn btn btn-default\">Reset<i class=\"fa fa-share mls\"></i></button>
                                                    <div data-control-type=\"drop-down\" data-control-name=\"paging\" data-control-action=\"paging\" class=\"jplist-drop-down form-control\">
                                                        <ul class=\"dropdown-menu\">
                                                            <li><span data-number=\"3\"> 3 per page</span></li>
                                                            <li><span data-number=\"5\"> 5 per page</span></li>
                                                            <li><span data-number=\"10\" data-default=\"true\"> 10 per page</span></li>
                                                            <li><span data-number=\"all\"> view all</span></li>
                                                        </ul>
                                                    </div>
                                                    <div data-control-type=\"drop-down\" data-control-name=\"sort\" data-control-action=\"sort\" data-datetime-format=\"{month}/{day}/{year}\" class=\"jplist-drop-down form-control\">
                                                        <ul class=\"dropdown-menu\">
                                                            <li><span data-path=\"default\">Sort by</span></li>
                                                            <li><span data-path=\".title\" data-order=\"asc\" data-type=\"text\">Title A-Z</span></li>
                                                            <li><span data-path=\".title\" data-order=\"desc\" data-type=\"text\">Title Z-A</span></li>
                                                            <li><span data-path=\".desc\" data-order=\"asc\" data-type=\"text\">Description A-Z</span></li>
                                                            <li><span data-path=\".desc\" data-order=\"desc\" data-type=\"text\">Description Z-A</span></li>
                                                            <li><span data-path=\".like\" data-order=\"asc\" data-type=\"number\" data-default=\"true\">Likes asc</span></li>
                                                            <li><span data-path=\".like\" data-order=\"desc\" data-type=\"number\">Likes desc</span></li>
                                                            <li><span data-path=\".date\" data-order=\"asc\" data-type=\"datetime\">Date asc</span></li>
                                                            <li><span data-path=\".date\" data-order=\"desc\" data-type=\"datetime\">Date desc</span></li>
                                                        </ul>
                                                    </div>
                                                    <div class=\"text-filter-box\">
                                                        <div class=\"input-group\"><span class=\"input-group-addon\"><i class=\"fa fa-search\"></i></span><input data-path=\".title\" type=\"text\" value=\"\" placeholder=\"Filter by Title\" data-control-type=\"textbox\" data-control-name=\"title-filter\" data-control-action=\"filter\" class=\"form-control\"/></div>
                                                    </div>
                                                    <div class=\"text-filter-box\">
                                                        <div class=\"input-group\"><span class=\"input-group-addon\"><i class=\"fa fa-search\"></i></span><input data-path=\".desc\" type=\"text\" value=\"\" placeholder=\"Filter by Description\" data-control-type=\"textbox\" data-control-name=\"desc-filter\" data-control-action=\"filter\" class=\"form-control\"/></div>
                                                    </div>
                                                    <div data-type=\"Page {current} of {pages}\" data-control-type=\"pagination-info\" data-control-name=\"paging\" data-control-action=\"paging\" class=\"jplist-label btn btn-default\"></div>
                                                    <div data-control-type=\"pagination\" data-control-name=\"paging\" data-control-action=\"paging\" class=\"jplist-pagination\"></div>
                                                </div>
                                                <div class=\"box text-shadow\">
                                                    <table class=\"demo-tbl\"><!--<item>1</item>-->
                                                        <tr class=\"tbl-item\"><!--<img/>-->
                                                            <td class=\"img\"><img src=\"images/thumbs/arch-1.jpg\" alt=\"\" title=\"\"/></td>
                                                            <!--<data></data>-->
                                                            <td class=\"td-block\"><p class=\"date\">03/15/2012</p>

                                                                <p class=\"title\">Arch</p>

                                                                <p class=\"desc\">An arch is a structure that spans a space and supports a load. Arches appeared as early as the 2nd millennium BC in Mesopotamian brick architecture and their systematic use started with the Ancient Romans who were the first to apply the technique to a wide range of structures.</p>

                                                                <p class=\"like\">5 Likes</p></td>
                                                        </tr>
                                                        <!--<item>2</item>-->
                                                        <tr class=\"tbl-item\"><!--<img/>-->
                                                            <td class=\"img\"><img src=\"images/thumbs/arch-2.jpg\" alt=\"\" title=\"\"/></td>
                                                            <!--<data></data>-->
                                                            <td class=\"td-block\"><p class=\"date\">03/18/2012</p>

                                                                <p class=\"title\">Architecture</p>

                                                                <p class=\"desc\">Architecture is both the process and product of planning, designing and construction. Architectural works, in the material form of buildings, are often perceived as cultural symbols and as works of art. Historical civilizations are often identified with their surviving architectural achievements.</p>

                                                                <p class=\"like\">25 Likes</p></td>
                                                        </tr>
                                                        <!--<item>3</item>-->
                                                        <tr class=\"tbl-item\"><!--<img/>-->
                                                            <td class=\"img\"><img src=\"images/thumbs/autumn-1.jpg\" alt=\"\" title=\"\"/></td>
                                                            <!--<data></data>-->
                                                            <td class=\"td-block\"><p class=\"date\">01/16/2011</p>

                                                                <p class=\"title\">Autumn</p>

                                                                <p class=\"desc\">Autumn or Fall is one of the four temperate seasons. Autumn marks the transition from summer into winter, in September (Northern Hemisphere) or March (Southern Hemisphere) when the arrival of night becomes noticeably earlier. The equinoxes might be expected to be in the middle of their respective seasons, but temperature lag
                                                                    (caused by the thermal latency of the ground and sea) means that seasons appear later than dates calculated from a purely astronomical perspective.</p>

                                                                <p class=\"like\">12 Likes</p></td>
                                                        </tr>
                                                        <!--<item>4</item>-->
                                                      
                                                       
                                                    </table>
                                                </div>
                                                <div class=\"box jplist-no-results text-shadow align-center\"><p>No results found</p></div>
                                                <div class=\"jplist-ios-button\"><i class=\"fa fa-sort\"></i>jPList Actions</div>
                                                <div class=\"jplist-panel box panel-bottom\">
                                                    <div data-control-type=\"drop-down\" data-control-name=\"paging\" data-control-action=\"paging\" data-control-animate-to-top=\"true\" class=\"jplist-drop-down form-control\">
                                                        <ul class=\"dropdown-menu\">
                                                            <li><span data-number=\"3\"> 3 per page</span></li>
                                                            <li><span data-number=\"5\"> 5 per page</span></li>
                                                            <li><span data-number=\"10\" data-default=\"true\"> 10 per page</span></li>
                                                            <li><span data-number=\"all\"> view all</span></li>
                                                        </ul>
                                                    </div>
                                                    <div data-control-type=\"drop-down\" data-control-name=\"sort\" data-control-action=\"sort\" data-control-animate-to-top=\"true\" data-datetime-format=\"{month}/{day}/{year}\" class=\"jplist-drop-down form-control\">
                                                        <ul class=\"dropdown-menu\">
                                                            <li><span data-path=\"default\">Sort by</span></li>
                                                            <li><span data-path=\".title\" data-order=\"asc\" data-type=\"text\">Title A-Z</span></li>
                                                            <li><span data-path=\".title\" data-order=\"desc\" data-type=\"text\">Title Z-A</span></li>
                                                            <li><span data-path=\".desc\" data-order=\"asc\" data-type=\"text\">Description A-Z</span></li>
                                                            <li><span data-path=\".desc\" data-order=\"desc\" data-type=\"text\">Description Z-A</span></li>
                                                            <li><span data-path=\".like\" data-order=\"asc\" data-type=\"number\" data-default=\"true\">Likes asc</span></li>
                                                            <li><span data-path=\".like\" data-order=\"desc\" data-type=\"number\">Likes desc</span></li>
                                                            <li><span data-path=\".date\" data-order=\"asc\" data-type=\"datetime\">Date asc</span></li>
                                                            <li><span data-path=\".date\" data-order=\"desc\" data-type=\"datetime\">Date desc</span></li>
                                                        </ul>
                                                    </div>
                                                    <div data-type=\"{start} - {end} of {all}\" data-control-type=\"pagination-info\" data-control-name=\"paging\" data-control-action=\"paging\" class=\"jplist-label btn btn-default\"></div>
                                                    <div data-control-type=\"pagination\" data-control-name=\"paging\" data-control-action=\"paging\" data-control-animate-to-top=\"true\" class=\"jplist-pagination\"></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
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
        return "PIDEVCrowdRiseBundle:Accueil:consultersolution.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  31 => 3,  28 => 2,  11 => 1,);
    }
}
/* {% extends 'PIDEVCrowdRiseBundle::layout.html.twig' %}*/
/* {% block content %}*/
/*     <div class="extra-space-xxl" style="background-color: whitesmoke"></div>*/
/*     <div class="extra-space-xxl" style="background-color: whitesmoke"></div>*/
/* */
/* */
/*     <section id="text-carousel-intro-section" class="parallax" data-stellar-background-ratio="0.5" style="background-color: whitesmoke">*/
/* */
/*         <div class="page-content">*/
/*             <div id="tab-general">*/
/*                 <div class="row mbl">*/
/*                     <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1 col-sm-12">*/
/* */
/*                         <div class="col-md-12">*/
/*                             <div id="area-chart-spline" style="width: 100%; height: 300px; display: none;">*/
/*                             </div>*/
/*                         </div>*/
/* */
/*                     </div>*/
/* */
/*                     <div class="col-lg-12">*/
/* */
/*                         <div class="page-content">*/
/*                             <div class="row">*/
/*                                 <div class="col-lg-12">*/
/*                                     <div class="panel">*/
/*                                         <div class="panel-body">*/
/*                                             <div id="grid-layout-table-1" class="box jplist">*/
/*                                                 <div class="jplist-ios-button"><i class="fa fa-sort"></i>jPList Actions</div>*/
/*                                                 <div class="jplist-panel box panel-top">*/
/*                                                     <button type="button" data-control-type="reset" data-control-name="reset" data-control-action="reset" class="jplist-reset-btn btn btn-default">Reset<i class="fa fa-share mls"></i></button>*/
/*                                                     <div data-control-type="drop-down" data-control-name="paging" data-control-action="paging" class="jplist-drop-down form-control">*/
/*                                                         <ul class="dropdown-menu">*/
/*                                                             <li><span data-number="3"> 3 per page</span></li>*/
/*                                                             <li><span data-number="5"> 5 per page</span></li>*/
/*                                                             <li><span data-number="10" data-default="true"> 10 per page</span></li>*/
/*                                                             <li><span data-number="all"> view all</span></li>*/
/*                                                         </ul>*/
/*                                                     </div>*/
/*                                                     <div data-control-type="drop-down" data-control-name="sort" data-control-action="sort" data-datetime-format="{month}/{day}/{year}" class="jplist-drop-down form-control">*/
/*                                                         <ul class="dropdown-menu">*/
/*                                                             <li><span data-path="default">Sort by</span></li>*/
/*                                                             <li><span data-path=".title" data-order="asc" data-type="text">Title A-Z</span></li>*/
/*                                                             <li><span data-path=".title" data-order="desc" data-type="text">Title Z-A</span></li>*/
/*                                                             <li><span data-path=".desc" data-order="asc" data-type="text">Description A-Z</span></li>*/
/*                                                             <li><span data-path=".desc" data-order="desc" data-type="text">Description Z-A</span></li>*/
/*                                                             <li><span data-path=".like" data-order="asc" data-type="number" data-default="true">Likes asc</span></li>*/
/*                                                             <li><span data-path=".like" data-order="desc" data-type="number">Likes desc</span></li>*/
/*                                                             <li><span data-path=".date" data-order="asc" data-type="datetime">Date asc</span></li>*/
/*                                                             <li><span data-path=".date" data-order="desc" data-type="datetime">Date desc</span></li>*/
/*                                                         </ul>*/
/*                                                     </div>*/
/*                                                     <div class="text-filter-box">*/
/*                                                         <div class="input-group"><span class="input-group-addon"><i class="fa fa-search"></i></span><input data-path=".title" type="text" value="" placeholder="Filter by Title" data-control-type="textbox" data-control-name="title-filter" data-control-action="filter" class="form-control"/></div>*/
/*                                                     </div>*/
/*                                                     <div class="text-filter-box">*/
/*                                                         <div class="input-group"><span class="input-group-addon"><i class="fa fa-search"></i></span><input data-path=".desc" type="text" value="" placeholder="Filter by Description" data-control-type="textbox" data-control-name="desc-filter" data-control-action="filter" class="form-control"/></div>*/
/*                                                     </div>*/
/*                                                     <div data-type="Page {current} of {pages}" data-control-type="pagination-info" data-control-name="paging" data-control-action="paging" class="jplist-label btn btn-default"></div>*/
/*                                                     <div data-control-type="pagination" data-control-name="paging" data-control-action="paging" class="jplist-pagination"></div>*/
/*                                                 </div>*/
/*                                                 <div class="box text-shadow">*/
/*                                                     <table class="demo-tbl"><!--<item>1</item>-->*/
/*                                                         <tr class="tbl-item"><!--<img/>-->*/
/*                                                             <td class="img"><img src="images/thumbs/arch-1.jpg" alt="" title=""/></td>*/
/*                                                             <!--<data></data>-->*/
/*                                                             <td class="td-block"><p class="date">03/15/2012</p>*/
/* */
/*                                                                 <p class="title">Arch</p>*/
/* */
/*                                                                 <p class="desc">An arch is a structure that spans a space and supports a load. Arches appeared as early as the 2nd millennium BC in Mesopotamian brick architecture and their systematic use started with the Ancient Romans who were the first to apply the technique to a wide range of structures.</p>*/
/* */
/*                                                                 <p class="like">5 Likes</p></td>*/
/*                                                         </tr>*/
/*                                                         <!--<item>2</item>-->*/
/*                                                         <tr class="tbl-item"><!--<img/>-->*/
/*                                                             <td class="img"><img src="images/thumbs/arch-2.jpg" alt="" title=""/></td>*/
/*                                                             <!--<data></data>-->*/
/*                                                             <td class="td-block"><p class="date">03/18/2012</p>*/
/* */
/*                                                                 <p class="title">Architecture</p>*/
/* */
/*                                                                 <p class="desc">Architecture is both the process and product of planning, designing and construction. Architectural works, in the material form of buildings, are often perceived as cultural symbols and as works of art. Historical civilizations are often identified with their surviving architectural achievements.</p>*/
/* */
/*                                                                 <p class="like">25 Likes</p></td>*/
/*                                                         </tr>*/
/*                                                         <!--<item>3</item>-->*/
/*                                                         <tr class="tbl-item"><!--<img/>-->*/
/*                                                             <td class="img"><img src="images/thumbs/autumn-1.jpg" alt="" title=""/></td>*/
/*                                                             <!--<data></data>-->*/
/*                                                             <td class="td-block"><p class="date">01/16/2011</p>*/
/* */
/*                                                                 <p class="title">Autumn</p>*/
/* */
/*                                                                 <p class="desc">Autumn or Fall is one of the four temperate seasons. Autumn marks the transition from summer into winter, in September (Northern Hemisphere) or March (Southern Hemisphere) when the arrival of night becomes noticeably earlier. The equinoxes might be expected to be in the middle of their respective seasons, but temperature lag*/
/*                                                                     (caused by the thermal latency of the ground and sea) means that seasons appear later than dates calculated from a purely astronomical perspective.</p>*/
/* */
/*                                                                 <p class="like">12 Likes</p></td>*/
/*                                                         </tr>*/
/*                                                         <!--<item>4</item>-->*/
/*                                                       */
/*                                                        */
/*                                                     </table>*/
/*                                                 </div>*/
/*                                                 <div class="box jplist-no-results text-shadow align-center"><p>No results found</p></div>*/
/*                                                 <div class="jplist-ios-button"><i class="fa fa-sort"></i>jPList Actions</div>*/
/*                                                 <div class="jplist-panel box panel-bottom">*/
/*                                                     <div data-control-type="drop-down" data-control-name="paging" data-control-action="paging" data-control-animate-to-top="true" class="jplist-drop-down form-control">*/
/*                                                         <ul class="dropdown-menu">*/
/*                                                             <li><span data-number="3"> 3 per page</span></li>*/
/*                                                             <li><span data-number="5"> 5 per page</span></li>*/
/*                                                             <li><span data-number="10" data-default="true"> 10 per page</span></li>*/
/*                                                             <li><span data-number="all"> view all</span></li>*/
/*                                                         </ul>*/
/*                                                     </div>*/
/*                                                     <div data-control-type="drop-down" data-control-name="sort" data-control-action="sort" data-control-animate-to-top="true" data-datetime-format="{month}/{day}/{year}" class="jplist-drop-down form-control">*/
/*                                                         <ul class="dropdown-menu">*/
/*                                                             <li><span data-path="default">Sort by</span></li>*/
/*                                                             <li><span data-path=".title" data-order="asc" data-type="text">Title A-Z</span></li>*/
/*                                                             <li><span data-path=".title" data-order="desc" data-type="text">Title Z-A</span></li>*/
/*                                                             <li><span data-path=".desc" data-order="asc" data-type="text">Description A-Z</span></li>*/
/*                                                             <li><span data-path=".desc" data-order="desc" data-type="text">Description Z-A</span></li>*/
/*                                                             <li><span data-path=".like" data-order="asc" data-type="number" data-default="true">Likes asc</span></li>*/
/*                                                             <li><span data-path=".like" data-order="desc" data-type="number">Likes desc</span></li>*/
/*                                                             <li><span data-path=".date" data-order="asc" data-type="datetime">Date asc</span></li>*/
/*                                                             <li><span data-path=".date" data-order="desc" data-type="datetime">Date desc</span></li>*/
/*                                                         </ul>*/
/*                                                     </div>*/
/*                                                     <div data-type="{start} - {end} of {all}" data-control-type="pagination-info" data-control-name="paging" data-control-action="paging" class="jplist-label btn btn-default"></div>*/
/*                                                     <div data-control-type="pagination" data-control-name="paging" data-control-action="paging" data-control-animate-to-top="true" class="jplist-pagination"></div>*/
/*                                                 </div>*/
/*                                             </div>*/
/*                                         </div>*/
/*                                     </div>*/
/*                                 </div>*/
/*                             </div>*/
/*                         </div>*/
/* */
/*                     </div>*/
/* */
/*                 </div>*/
/*             </div>*/
/*         </div>*/
/*     </section>*/
/* {% endblock %}*/
/* */
/* */
