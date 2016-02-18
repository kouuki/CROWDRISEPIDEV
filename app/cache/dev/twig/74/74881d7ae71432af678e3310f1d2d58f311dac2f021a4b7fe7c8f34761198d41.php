<?php

/* PIDEVCrowdRiseBundle:Accueil:utilisable.html.twig */
class __TwigTemplate_37aa61478f883edab9720ee236973043c1e89b4ce575cec78adda6a74a318d72 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 2
        $this->parent = $this->loadTemplate("PIDEVCrowdRiseBundle::layout.html.twig", "PIDEVCrowdRiseBundle:Accueil:utilisable.html.twig", 2);
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
    <!--Utilisable -->
    <!-- Begin contact section -->
    <section id=\"contact-section\" class=\"page text-white parallax\" data-stellar-background-ratio=\"0.5\" style=\"background-image: url(";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("img/map-bg.jpg"), "html", null, true);
        echo ");\">
        <div class=\"cover\"></div>

        <!-- Begin page header-->
        <div class=\"page-header-wrapper\">
            <div class=\"container\">
                <div class=\"page-header text-center wow fadeInDown\" data-wow-delay=\"0.4s\">
                    <h2>Contactez-nous</h2>
                    <div class=\"devider\"></div>
                    <p class=\"subtitle\">Tout Pour Nous Contacter</p>
                </div>
            </div>
        </div>
        <!-- End page header-->

        <div class=\"contact wow bounceInRight\" data-wow-delay=\"0.4s\">
            <div class=\"container\">
                <div class=\"row\">

                    <div class=\"col-sm-6\">
                        <div class=\"contact-info\">
                            <h4>Notre Adresse</h4>
                            <ul class=\"contact-address\">
                                <li><i class=\"fa fa-map-marker fa-lg\"></i>&nbsp; 100 Limpbiscayne Blvd. (North) 17st Floor ,<br><br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; New World Tower New York ,<br><br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; New York, USA, 33148</li>
                                <li><i class=\"fa fa-phone\"></i>&nbsp; 1 -234 -456 -7890</li>
                                <li><i class=\"fa fa-print\"></i>&nbsp; 1 -234 -456 -7890</li>
                                <li><i class=\"fa fa-envelope\"></i> info@yourdomain.com</li>
                                <li><i class=\"fa fa-skype\"></i> Unika-Design</li>
                            </ul>
                        </div>
                    </div>

                    <div class=\"col-sm-6\">
                        <div class=\"contact-form\">
                            <h4>Contactez-nous</h4>
                            <form role=\"form\">
                                <div class=\"form-group\">
                                    <input type=\"text\" class=\"form-control input-lg\" placeholder=\"Votre Nom\" required>
                                </div>
                                <div class=\"form-group\">
                                    <input type=\"email\" class=\"form-control input-lg\" placeholder=\"Votre Adresse Electronique\" required>
                                </div>
                                <div class=\"form-group\">
                                    <input type=\"text\" class=\"form-control input-lg\" placeholder=\"Sujet\" required>
                                </div>
                                <div class=\"form-group\">
                                    <textarea class=\"form-control input-lg\" rows=\"5\" placeholder=\"Message\" required></textarea>
                                </div>
                                <button type=\"submit\" class=\"btn wow bounceInRight\" data-wow-delay=\"0.8s\">Envoyer</button>
                            </form>
                        </div>\t
                    </div>

                </div> <!-- /.row -->
            </div> <!-- /.container -->
        </div>
    </section>
    <!-- End contact section -->

    <!-- Begin Icon -->
    <section id=\"services-section\" class=\"page text-center\">
        <!-- Begin page header-->
        <div class=\"page-header-wrapper\">
            <div class=\"container\">
                <div class=\"page-header text-center wow fadeInDown\" data-wow-delay=\"0.4s\">
                    <h2>Icon</h2>
                    <div class=\"devider\"></div>
                    <p class=\"subtitle\">what we really know how</p>
                </div>
            </div>
        </div>
        <!-- End page header-->

        <!-- Begin roatet box-2 -->
        <div class=\"rotate-box-2-wrapper\">
            <div class=\"container\">
                <div class=\"row\">
                    <div class=\"col-md-3 col-sm-6\">
                        <a href=\"#\" class=\"rotate-box-2 square-icon text-center wow zoomIn\" data-wow-delay=\"0\">
                            <span class=\"rotate-box-icon\"><i class=\"fa fa-mobile\"></i></span>
                            <div class=\"rotate-box-info\">
                                <h4>App Development</h4>
                                <p>Lorem ipsum dolor sit amet set, consectetur utes anet adipisicing elit, sed do eiusmod tempor incidist.</p>
                            </div>
                        </a>
                    </div>

                    <div class=\"col-md-3 col-sm-6\">
                        <a href=\"#\" class=\"rotate-box-2 square-icon text-center wow zoomIn\" data-wow-delay=\"0.2s\">
                            <span class=\"rotate-box-icon\"><i class=\"fa fa-pie-chart\"></i></span>
                            <div class=\"rotate-box-info\">
                                <h4>Ui Design</h4>
                                <p>Lorem ipsum dolor sit amet set, consectetur utes anet adipisicing elit, sed do eiusmod tempor incidist.</p>
                            </div>
                        </a>
                    </div>

                    <div class=\"col-md-3 col-sm-6\">
                        <a href=\"#\" class=\"rotate-box-2 square-icon text-center wow zoomIn\" data-wow-delay=\"0.4s\">
                            <span class=\"rotate-box-icon\"><i class=\"fa fa-cloud\"></i></span>
                            <div class=\"rotate-box-info\">
                                <h4>Cloud Hosting</h4>
                                <p>Lorem ipsum dolor sit amet set, consectetur utes anet adipisicing elit, sed do eiusmod tempor incidist.</p>
                            </div>
                        </a>
                    </div>

                    <div class=\"col-md-3 col-sm-6\">
                        <a href=\"#\" class=\"rotate-box-2 square-icon text-center wow zoomIn\" data-wow-delay=\"0.6s\">
                            <span class=\"rotate-box-icon\"><i class=\"fa fa-pencil\"></i></span>
                            <div class=\"rotate-box-info\">
                                <h4>Coding Pen</h4>
                                <p>Lorem ipsum dolor sit amet set, consectetur utes anet adipisicing elit, sed do eiusmod tempor incidist.</p>
                            </div>
                        </a>
                    </div>

                </div> <!-- /.row -->
            </div> <!-- /.container -->

            <div class=\"container\">
                <!-- Cta Button -->
                <div class=\"extra-space-l\"></div>
                <div class=\"text-center\">
                    <a class=\"btn btn-default btn-lg-xl\" href=\"http://www.imransdesign.com/\" target=\"_blank\" role=\"button\">Large Button</a>
                </div>
            </div> <!-- /.container -->                       
        </div>
        <!-- End rotate-box-2 -->
    </section>
    <!-- End Icon -->




    <!-- Begin testimonials -->
    <section id=\"testimonial-section\">
        <div id=\"testimonial-trigger\" class=\"testimonial text-white parallax\" data-stellar-background-ratio=\"0.5\" style=\"background-image: url(";
        // line 144
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("img/testimonial-bg.jpg"), "html", null, true);
        echo ");\">
            <div class=\"cover\"></div>
            <!-- Begin page header-->
            <div class=\"page-header-wrapper\">
                <div class=\"container\">
                    <div class=\"page-header text-center wow fadeInDown\" data-wow-delay=\"0.4s\">
                        <h2>Reviews</h2>
                        <div class=\"devider\"></div>
                        <p class=\"subtitle\">What people say about us</p>
                    </div>
                </div>
            </div>
            <!-- End page header-->
            <div class=\"container\">
                <div class=\"testimonial-inner center-block text-center\">
                    <div id=\"owl-testimonial\" class=\"owl-carousel\">
                        <div class=\"item\">
                            <blockquote>
                                <p>\"This was my first experience with that team and outperformed my expectation! They know there stuff and I highly recommend them! A+++\".</p>
                                <footer><cite title=\"Source Title\">Daryl Hodgeman</cite></footer>
                            </blockquote>
                        </div>
                        <div class=\"item\">
                            <blockquote>
                                <p>\"Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                    tempor incididunt ut labore et dolore magna aliqua.\"</p>
                                <footer><cite title=\"Source Title\">John Doe</cite></footer>
                            </blockquote>
                        </div>
                        <div class=\"item\">
                            <blockquote>
                                <p>\"Quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                                    consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                                    cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                                    proident, sunt in culpa qui officia deserunt mollit\".</p>
                                <footer><cite title=\"Source Title\">John Doe</cite></footer>
                            </blockquote>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End testimonials -->



    <!-- Begin team-->
    <section id=\"team-section\" class=\"page\">
        <!-- Begin page header-->
        <div class=\"page-header-wrapper\">
            <div class=\"container\">
                <div class=\"page-header text-center wow fadeInDown\" data-wow-delay=\"0.4s\">
                    <h2>Our Team</h2>
                    <div class=\"devider\"></div>
                    <p class=\"subtitle\">Meat our experts</p>
                </div>
            </div>
        </div>
        <!-- End page header-->
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"team-items\">
                    <div class=\"col-md-2\">
                        <div class=\"team-container wow bounceIn\" data-wow-delay=\"0.2s\">
                            <div class=\"team-item\">
                                <div class=\"team-triangle\">
                                    <div class=\"content\">
                                        <img src=";
        // line 212
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("img/team/1.jpg"), "html", null, true);
        echo " alt=\"title\"/>
                                        <div class=\"team-hover text-center\"> 
                                            <i class=\"fa fa-male\"></i>
                                            <p>John Doe</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class=\"col-md-2\">
                        <div class=\"team-container wow bounceIn\" data-wow-delay=\"0.3s\">
                            <div class=\"team-item\">
                                <div class=\"team-triangle\">
                                    <div class=\"content\">
                                        <img src=";
        // line 227
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("img/team/1.jpg"), "html", null, true);
        echo " alt=\"title\"/>
                                        <div class=\"team-hover text-center\">
                                            <i class=\"fa fa-female\"></i>
                                            <p>Jane Doe</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class=\"col-md-2\">
                        <div class=\"team-container wow bounceIn\" data-wow-delay=\"0.4s\">
                            <div class=\"team-item\">
                                <div class=\"team-triangle\">
                                    <div class=\"content\">
                                        <img src=";
        // line 242
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("img/team/1.jpg"), "html", null, true);
        echo " alt=\"title\"/>
                                        <div class=\"team-hover text-center\">
                                            <i class=\"fa fa-male\"></i>
                                            <p>John Doe</p>
                                        </div>
                                    </div>  
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class=\"col-md-2\">
                        <div class=\"team-container wow bounceIn\" data-wow-delay=\"0.5s\">
                            <div class=\"team-item\">
                                <div class=\"team-triangle\">
                                    <div class=\"content\">
                                        <img src=";
        // line 258
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("img/team/1.jpg"), "html", null, true);
        echo "  alt=\"title\"/>
                                        <div class=\"team-hover text-center\">
                                            <i class=\"fa fa-male\"></i>
                                            <p>John Doe</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class=\"col-md-2\">
                        <div class=\"team-container wow bounceIn\" data-wow-delay=\"0.6s\">
                            <div class=\"team-item\">
                                <div class=\"team-triangle\">
                                    <div class=\"content\">
                                        <img src=";
        // line 273
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("img/team/1.jpg"), "html", null, true);
        echo "  alt=\"title\"/>
                                        <div class=\"team-hover text-center\">
                                            <i class=\"fa fa-male\"></i>
                                            <p>John Doe</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class=\"col-md-2\">
                        <div class=\"team-container wow bounceIn\" data-wow-delay=\"0.7s\">
                            <div class=\"team-item\">
                                <div class=\"team-triangle\">
                                    <div class=\"content\">
                                        <img src=";
        // line 288
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("img/team/1.jpg"), "html", null, true);
        echo "  alt=\"title\"/>
                                        <div class=\"team-hover text-center\">
                                            <i class=\"fa fa-male\"></i>
                                            <p>John Doe</p>
                                        </div>
                                    </div>  
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class=\"col-md-2\">
                        <div class=\"team-container wow bounceIn\" data-wow-delay=\"0.8s\">
                            <div class=\"team-item\">
                                <div class=\"team-triangle\">
                                    <div class=\"content\">
                                        <img src=";
        // line 303
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("img/team/1.jpg"), "html", null, true);
        echo " alt=\"title\"/>
                                        <div class=\"team-hover text-center\">
                                            <i class=\"fa fa-female\"></i>
                                            <p>Jane Doe</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class=\"clearfix\"></div>
                </div>  
            </div>
        </div>

    </section>
    <!-- End team-->




    <!-- Begin partners -->
    <section id=\"partners-section\">
        <!-- Begin page header-->
        <div class=\"page-header-wrapper\">
            <div class=\"container\">
                <div class=\"page-header text-center wow fadeInDown\" data-wow-delay=\"0.4s\">
                    <h2>Our Partners</h2>
                    <div class=\"devider\"></div>
                    <p class=\"subtitle\">Those who trust us</p>
                </div>
            </div>
        </div>
        <!-- End page header-->
        <div class=\"container\">
            <div id=\"owl-partners\" class=\"owl-carousel\">
                <img src=";
        // line 339
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("img/partners/1.png"), "html", null, true);
        echo " alt=\"img\">
                <img src=";
        // line 340
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("img/partners/2.png"), "html", null, true);
        echo " alt=\"img\">
                <img src=";
        // line 341
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("img/partners/3.png"), "html", null, true);
        echo " alt=\"img\">
                <img src=";
        // line 342
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("img/partners/4.png"), "html", null, true);
        echo " alt=\"img\">
                <img src=";
        // line 343
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("img/partners/5.png"), "html", null, true);
        echo " alt=\"img\">
                <img src=";
        // line 344
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("img/partners/6.png"), "html", null, true);
        echo " alt=\"img\">
                <img src=";
        // line 345
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("img/partners/7.png"), "html", null, true);
        echo " alt=\"img\">
            </div>
        </div>
    </section>
    <!-- End partners -->

    <!-- Begin cta -->
    <section id=\"cta-section\">
        <div class=\"cta\">
            <div class=\"container\">
                <div class=\"row\">

                    <div class=\"col-md-9\">
                        <h1>Download Our Pdf</h1>
                        <p>Inspired by nature, follow technology, appreciate the classics. You can build modern & professional websites with Unika. The possibilities are just endless.</p>
                    </div>

                    <div class=\"col-md-3\">
                        <div class=\"cta-btn wow bounceInRight\" data-wow-delay=\"0.4s\">
                            <a class=\"btn btn-default btn-lg\" href=\"http://www.imransdesign.com/\" target=\"_blank\" role=\"button\">Download</a>
                        </div>
                    </div>

                </div> <!-- /.row -->
            </div> <!-- /.container -->
        </div>
    </section>
    <!-- End cta -->

    <div class=\"extra-space-l\"></div>
    <!-- Begin page header--> 
    <div class=\"page-header-wrapper\">
        <div class=\"container\">
            <div class=\"page-header text-center wow fadeInUp\" data-wow-delay=\"0.3s\">
                <h4>Our Skills</h4>
            </div>
        </div>
    </div>
    <!-- End page header--> 
    <!-- Begin Our Skills -->
    <div class=\"our-skills\">
        <div class=\"container\">
            <div class=\"row\">

                <div class=\"col-sm-6\">
                    <div class=\"skill-bar wow slideInLeft\" data-wow-delay=\"0.2s\">
                        <div class=\"progress-lebel\">
                            <h6>Photoshop & Illustrator</h6>
                        </div>
                        <div class=\"progress\">
                            <div class=\"progress-bar\" role=\"progressbar\" aria-valuenow=\"75\" aria-valuemin=\"0\" aria-valuemax=\"100\" style=\"width: 75%;\">
                            </div>
                        </div>
                    </div>
                </div>

                <div class=\"col-sm-6\">
                    <div class=\"skill-bar wow slideInRight\" data-wow-delay=\"0.2s\">
                        <div class=\"progress-lebel\">
                            <h6>Catégorie</h6>
                        </div>
                        <div class=\"progress\">
                            <div class=\"progress-bar\" role=\"progressbar\" aria-valuenow=\"85\" aria-valuemin=\"0\" aria-valuemax=\"100\" style=\"width: 85%;\">
                            </div>
                        </div>
                    </div>
                </div>

                <div class=\"col-sm-6\">
                    <div class=\"skill-bar wow slideInLeft\" data-wow-delay=\"0.4s\">
                        <div class=\"progress-lebel\">
                            <h6>Html & Css</h6>
                        </div>
                        <div class=\"progress\">
                            <div class=\"progress-bar\" role=\"progressbar\" aria-valuenow=\"95\" aria-valuemin=\"0\" aria-valuemax=\"100\" style=\"width: 95%;\">
                            </div>
                        </div>
                    </div>
                </div>

                <div class=\"col-sm-6\">
                    <div class=\"skill-bar wow slideInRight\" data-wow-delay=\"0.4s\">
                        <div class=\"progress-lebel\">
                            <h6>Javascript</h6>
                        </div>
                        <div class=\"progress\">
                            <div class=\"progress-bar\" role=\"progressbar\" aria-valuenow=\"70\" aria-valuemin=\"0\" aria-valuemax=\"100\" style=\"width: 70%;\">
                            </div>
                        </div>
                    </div>
                </div>

            </div> <!-- /.row -->
        </div> <!-- /.container -->
    </div>
    <!-- End Our Skill -->

    <!-- End Utilisable -->
";
    }

    public function getTemplateName()
    {
        return "PIDEVCrowdRiseBundle:Accueil:utilisable.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  419 => 345,  415 => 344,  411 => 343,  407 => 342,  403 => 341,  399 => 340,  395 => 339,  356 => 303,  338 => 288,  320 => 273,  302 => 258,  283 => 242,  265 => 227,  247 => 212,  176 => 144,  36 => 7,  31 => 4,  28 => 3,  11 => 2,);
    }
}
/* {# empty Twig template #}*/
/* {% extends 'PIDEVCrowdRiseBundle::layout.html.twig' %}*/
/* {% block content %}*/
/* */
/*     <!--Utilisable -->*/
/*     <!-- Begin contact section -->*/
/*     <section id="contact-section" class="page text-white parallax" data-stellar-background-ratio="0.5" style="background-image: url({{ asset('img/map-bg.jpg') }});">*/
/*         <div class="cover"></div>*/
/* */
/*         <!-- Begin page header-->*/
/*         <div class="page-header-wrapper">*/
/*             <div class="container">*/
/*                 <div class="page-header text-center wow fadeInDown" data-wow-delay="0.4s">*/
/*                     <h2>Contactez-nous</h2>*/
/*                     <div class="devider"></div>*/
/*                     <p class="subtitle">Tout Pour Nous Contacter</p>*/
/*                 </div>*/
/*             </div>*/
/*         </div>*/
/*         <!-- End page header-->*/
/* */
/*         <div class="contact wow bounceInRight" data-wow-delay="0.4s">*/
/*             <div class="container">*/
/*                 <div class="row">*/
/* */
/*                     <div class="col-sm-6">*/
/*                         <div class="contact-info">*/
/*                             <h4>Notre Adresse</h4>*/
/*                             <ul class="contact-address">*/
/*                                 <li><i class="fa fa-map-marker fa-lg"></i>&nbsp; 100 Limpbiscayne Blvd. (North) 17st Floor ,<br><br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; New World Tower New York ,<br><br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; New York, USA, 33148</li>*/
/*                                 <li><i class="fa fa-phone"></i>&nbsp; 1 -234 -456 -7890</li>*/
/*                                 <li><i class="fa fa-print"></i>&nbsp; 1 -234 -456 -7890</li>*/
/*                                 <li><i class="fa fa-envelope"></i> info@yourdomain.com</li>*/
/*                                 <li><i class="fa fa-skype"></i> Unika-Design</li>*/
/*                             </ul>*/
/*                         </div>*/
/*                     </div>*/
/* */
/*                     <div class="col-sm-6">*/
/*                         <div class="contact-form">*/
/*                             <h4>Contactez-nous</h4>*/
/*                             <form role="form">*/
/*                                 <div class="form-group">*/
/*                                     <input type="text" class="form-control input-lg" placeholder="Votre Nom" required>*/
/*                                 </div>*/
/*                                 <div class="form-group">*/
/*                                     <input type="email" class="form-control input-lg" placeholder="Votre Adresse Electronique" required>*/
/*                                 </div>*/
/*                                 <div class="form-group">*/
/*                                     <input type="text" class="form-control input-lg" placeholder="Sujet" required>*/
/*                                 </div>*/
/*                                 <div class="form-group">*/
/*                                     <textarea class="form-control input-lg" rows="5" placeholder="Message" required></textarea>*/
/*                                 </div>*/
/*                                 <button type="submit" class="btn wow bounceInRight" data-wow-delay="0.8s">Envoyer</button>*/
/*                             </form>*/
/*                         </div>	*/
/*                     </div>*/
/* */
/*                 </div> <!-- /.row -->*/
/*             </div> <!-- /.container -->*/
/*         </div>*/
/*     </section>*/
/*     <!-- End contact section -->*/
/* */
/*     <!-- Begin Icon -->*/
/*     <section id="services-section" class="page text-center">*/
/*         <!-- Begin page header-->*/
/*         <div class="page-header-wrapper">*/
/*             <div class="container">*/
/*                 <div class="page-header text-center wow fadeInDown" data-wow-delay="0.4s">*/
/*                     <h2>Icon</h2>*/
/*                     <div class="devider"></div>*/
/*                     <p class="subtitle">what we really know how</p>*/
/*                 </div>*/
/*             </div>*/
/*         </div>*/
/*         <!-- End page header-->*/
/* */
/*         <!-- Begin roatet box-2 -->*/
/*         <div class="rotate-box-2-wrapper">*/
/*             <div class="container">*/
/*                 <div class="row">*/
/*                     <div class="col-md-3 col-sm-6">*/
/*                         <a href="#" class="rotate-box-2 square-icon text-center wow zoomIn" data-wow-delay="0">*/
/*                             <span class="rotate-box-icon"><i class="fa fa-mobile"></i></span>*/
/*                             <div class="rotate-box-info">*/
/*                                 <h4>App Development</h4>*/
/*                                 <p>Lorem ipsum dolor sit amet set, consectetur utes anet adipisicing elit, sed do eiusmod tempor incidist.</p>*/
/*                             </div>*/
/*                         </a>*/
/*                     </div>*/
/* */
/*                     <div class="col-md-3 col-sm-6">*/
/*                         <a href="#" class="rotate-box-2 square-icon text-center wow zoomIn" data-wow-delay="0.2s">*/
/*                             <span class="rotate-box-icon"><i class="fa fa-pie-chart"></i></span>*/
/*                             <div class="rotate-box-info">*/
/*                                 <h4>Ui Design</h4>*/
/*                                 <p>Lorem ipsum dolor sit amet set, consectetur utes anet adipisicing elit, sed do eiusmod tempor incidist.</p>*/
/*                             </div>*/
/*                         </a>*/
/*                     </div>*/
/* */
/*                     <div class="col-md-3 col-sm-6">*/
/*                         <a href="#" class="rotate-box-2 square-icon text-center wow zoomIn" data-wow-delay="0.4s">*/
/*                             <span class="rotate-box-icon"><i class="fa fa-cloud"></i></span>*/
/*                             <div class="rotate-box-info">*/
/*                                 <h4>Cloud Hosting</h4>*/
/*                                 <p>Lorem ipsum dolor sit amet set, consectetur utes anet adipisicing elit, sed do eiusmod tempor incidist.</p>*/
/*                             </div>*/
/*                         </a>*/
/*                     </div>*/
/* */
/*                     <div class="col-md-3 col-sm-6">*/
/*                         <a href="#" class="rotate-box-2 square-icon text-center wow zoomIn" data-wow-delay="0.6s">*/
/*                             <span class="rotate-box-icon"><i class="fa fa-pencil"></i></span>*/
/*                             <div class="rotate-box-info">*/
/*                                 <h4>Coding Pen</h4>*/
/*                                 <p>Lorem ipsum dolor sit amet set, consectetur utes anet adipisicing elit, sed do eiusmod tempor incidist.</p>*/
/*                             </div>*/
/*                         </a>*/
/*                     </div>*/
/* */
/*                 </div> <!-- /.row -->*/
/*             </div> <!-- /.container -->*/
/* */
/*             <div class="container">*/
/*                 <!-- Cta Button -->*/
/*                 <div class="extra-space-l"></div>*/
/*                 <div class="text-center">*/
/*                     <a class="btn btn-default btn-lg-xl" href="http://www.imransdesign.com/" target="_blank" role="button">Large Button</a>*/
/*                 </div>*/
/*             </div> <!-- /.container -->                       */
/*         </div>*/
/*         <!-- End rotate-box-2 -->*/
/*     </section>*/
/*     <!-- End Icon -->*/
/* */
/* */
/* */
/* */
/*     <!-- Begin testimonials -->*/
/*     <section id="testimonial-section">*/
/*         <div id="testimonial-trigger" class="testimonial text-white parallax" data-stellar-background-ratio="0.5" style="background-image: url({{ asset('img/testimonial-bg.jpg') }});">*/
/*             <div class="cover"></div>*/
/*             <!-- Begin page header-->*/
/*             <div class="page-header-wrapper">*/
/*                 <div class="container">*/
/*                     <div class="page-header text-center wow fadeInDown" data-wow-delay="0.4s">*/
/*                         <h2>Reviews</h2>*/
/*                         <div class="devider"></div>*/
/*                         <p class="subtitle">What people say about us</p>*/
/*                     </div>*/
/*                 </div>*/
/*             </div>*/
/*             <!-- End page header-->*/
/*             <div class="container">*/
/*                 <div class="testimonial-inner center-block text-center">*/
/*                     <div id="owl-testimonial" class="owl-carousel">*/
/*                         <div class="item">*/
/*                             <blockquote>*/
/*                                 <p>"This was my first experience with that team and outperformed my expectation! They know there stuff and I highly recommend them! A+++".</p>*/
/*                                 <footer><cite title="Source Title">Daryl Hodgeman</cite></footer>*/
/*                             </blockquote>*/
/*                         </div>*/
/*                         <div class="item">*/
/*                             <blockquote>*/
/*                                 <p>"Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod*/
/*                                     tempor incididunt ut labore et dolore magna aliqua."</p>*/
/*                                 <footer><cite title="Source Title">John Doe</cite></footer>*/
/*                             </blockquote>*/
/*                         </div>*/
/*                         <div class="item">*/
/*                             <blockquote>*/
/*                                 <p>"Quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo*/
/*                                     consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse*/
/*                                     cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non*/
/*                                     proident, sunt in culpa qui officia deserunt mollit".</p>*/
/*                                 <footer><cite title="Source Title">John Doe</cite></footer>*/
/*                             </blockquote>*/
/*                         </div>*/
/*                     </div>*/
/*                 </div>*/
/*             </div>*/
/*         </div>*/
/*     </section>*/
/*     <!-- End testimonials -->*/
/* */
/* */
/* */
/*     <!-- Begin team-->*/
/*     <section id="team-section" class="page">*/
/*         <!-- Begin page header-->*/
/*         <div class="page-header-wrapper">*/
/*             <div class="container">*/
/*                 <div class="page-header text-center wow fadeInDown" data-wow-delay="0.4s">*/
/*                     <h2>Our Team</h2>*/
/*                     <div class="devider"></div>*/
/*                     <p class="subtitle">Meat our experts</p>*/
/*                 </div>*/
/*             </div>*/
/*         </div>*/
/*         <!-- End page header-->*/
/*         <div class="container">*/
/*             <div class="row">*/
/*                 <div class="team-items">*/
/*                     <div class="col-md-2">*/
/*                         <div class="team-container wow bounceIn" data-wow-delay="0.2s">*/
/*                             <div class="team-item">*/
/*                                 <div class="team-triangle">*/
/*                                     <div class="content">*/
/*                                         <img src={{ asset('img/team/1.jpg') }} alt="title"/>*/
/*                                         <div class="team-hover text-center"> */
/*                                             <i class="fa fa-male"></i>*/
/*                                             <p>John Doe</p>*/
/*                                         </div>*/
/*                                     </div>*/
/*                                 </div>*/
/*                             </div>*/
/*                         </div>*/
/*                     </div>*/
/*                     <div class="col-md-2">*/
/*                         <div class="team-container wow bounceIn" data-wow-delay="0.3s">*/
/*                             <div class="team-item">*/
/*                                 <div class="team-triangle">*/
/*                                     <div class="content">*/
/*                                         <img src={{ asset('img/team/1.jpg') }} alt="title"/>*/
/*                                         <div class="team-hover text-center">*/
/*                                             <i class="fa fa-female"></i>*/
/*                                             <p>Jane Doe</p>*/
/*                                         </div>*/
/*                                     </div>*/
/*                                 </div>*/
/*                             </div>*/
/*                         </div>*/
/*                     </div>*/
/*                     <div class="col-md-2">*/
/*                         <div class="team-container wow bounceIn" data-wow-delay="0.4s">*/
/*                             <div class="team-item">*/
/*                                 <div class="team-triangle">*/
/*                                     <div class="content">*/
/*                                         <img src={{ asset('img/team/1.jpg') }} alt="title"/>*/
/*                                         <div class="team-hover text-center">*/
/*                                             <i class="fa fa-male"></i>*/
/*                                             <p>John Doe</p>*/
/*                                         </div>*/
/*                                     </div>  */
/*                                 </div>*/
/*                             </div>*/
/*                         </div>*/
/*                     </div>*/
/* */
/*                     <div class="col-md-2">*/
/*                         <div class="team-container wow bounceIn" data-wow-delay="0.5s">*/
/*                             <div class="team-item">*/
/*                                 <div class="team-triangle">*/
/*                                     <div class="content">*/
/*                                         <img src={{ asset('img/team/1.jpg') }}  alt="title"/>*/
/*                                         <div class="team-hover text-center">*/
/*                                             <i class="fa fa-male"></i>*/
/*                                             <p>John Doe</p>*/
/*                                         </div>*/
/*                                     </div>*/
/*                                 </div>*/
/*                             </div>*/
/*                         </div>*/
/*                     </div>*/
/*                     <div class="col-md-2">*/
/*                         <div class="team-container wow bounceIn" data-wow-delay="0.6s">*/
/*                             <div class="team-item">*/
/*                                 <div class="team-triangle">*/
/*                                     <div class="content">*/
/*                                         <img src={{ asset('img/team/1.jpg') }}  alt="title"/>*/
/*                                         <div class="team-hover text-center">*/
/*                                             <i class="fa fa-male"></i>*/
/*                                             <p>John Doe</p>*/
/*                                         </div>*/
/*                                     </div>*/
/*                                 </div>*/
/*                             </div>*/
/*                         </div>*/
/*                     </div>*/
/*                     <div class="col-md-2">*/
/*                         <div class="team-container wow bounceIn" data-wow-delay="0.7s">*/
/*                             <div class="team-item">*/
/*                                 <div class="team-triangle">*/
/*                                     <div class="content">*/
/*                                         <img src={{ asset('img/team/1.jpg') }}  alt="title"/>*/
/*                                         <div class="team-hover text-center">*/
/*                                             <i class="fa fa-male"></i>*/
/*                                             <p>John Doe</p>*/
/*                                         </div>*/
/*                                     </div>  */
/*                                 </div>*/
/*                             </div>*/
/*                         </div>*/
/*                     </div>*/
/*                     <div class="col-md-2">*/
/*                         <div class="team-container wow bounceIn" data-wow-delay="0.8s">*/
/*                             <div class="team-item">*/
/*                                 <div class="team-triangle">*/
/*                                     <div class="content">*/
/*                                         <img src={{ asset('img/team/1.jpg') }} alt="title"/>*/
/*                                         <div class="team-hover text-center">*/
/*                                             <i class="fa fa-female"></i>*/
/*                                             <p>Jane Doe</p>*/
/*                                         </div>*/
/*                                     </div>*/
/*                                 </div>*/
/*                             </div>*/
/*                         </div>*/
/*                     </div>*/
/*                     <div class="clearfix"></div>*/
/*                 </div>  */
/*             </div>*/
/*         </div>*/
/* */
/*     </section>*/
/*     <!-- End team-->*/
/* */
/* */
/* */
/* */
/*     <!-- Begin partners -->*/
/*     <section id="partners-section">*/
/*         <!-- Begin page header-->*/
/*         <div class="page-header-wrapper">*/
/*             <div class="container">*/
/*                 <div class="page-header text-center wow fadeInDown" data-wow-delay="0.4s">*/
/*                     <h2>Our Partners</h2>*/
/*                     <div class="devider"></div>*/
/*                     <p class="subtitle">Those who trust us</p>*/
/*                 </div>*/
/*             </div>*/
/*         </div>*/
/*         <!-- End page header-->*/
/*         <div class="container">*/
/*             <div id="owl-partners" class="owl-carousel">*/
/*                 <img src={{ asset('img/partners/1.png') }} alt="img">*/
/*                 <img src={{ asset('img/partners/2.png') }} alt="img">*/
/*                 <img src={{ asset('img/partners/3.png') }} alt="img">*/
/*                 <img src={{ asset('img/partners/4.png') }} alt="img">*/
/*                 <img src={{ asset('img/partners/5.png') }} alt="img">*/
/*                 <img src={{ asset('img/partners/6.png') }} alt="img">*/
/*                 <img src={{ asset('img/partners/7.png') }} alt="img">*/
/*             </div>*/
/*         </div>*/
/*     </section>*/
/*     <!-- End partners -->*/
/* */
/*     <!-- Begin cta -->*/
/*     <section id="cta-section">*/
/*         <div class="cta">*/
/*             <div class="container">*/
/*                 <div class="row">*/
/* */
/*                     <div class="col-md-9">*/
/*                         <h1>Download Our Pdf</h1>*/
/*                         <p>Inspired by nature, follow technology, appreciate the classics. You can build modern & professional websites with Unika. The possibilities are just endless.</p>*/
/*                     </div>*/
/* */
/*                     <div class="col-md-3">*/
/*                         <div class="cta-btn wow bounceInRight" data-wow-delay="0.4s">*/
/*                             <a class="btn btn-default btn-lg" href="http://www.imransdesign.com/" target="_blank" role="button">Download</a>*/
/*                         </div>*/
/*                     </div>*/
/* */
/*                 </div> <!-- /.row -->*/
/*             </div> <!-- /.container -->*/
/*         </div>*/
/*     </section>*/
/*     <!-- End cta -->*/
/* */
/*     <div class="extra-space-l"></div>*/
/*     <!-- Begin page header--> */
/*     <div class="page-header-wrapper">*/
/*         <div class="container">*/
/*             <div class="page-header text-center wow fadeInUp" data-wow-delay="0.3s">*/
/*                 <h4>Our Skills</h4>*/
/*             </div>*/
/*         </div>*/
/*     </div>*/
/*     <!-- End page header--> */
/*     <!-- Begin Our Skills -->*/
/*     <div class="our-skills">*/
/*         <div class="container">*/
/*             <div class="row">*/
/* */
/*                 <div class="col-sm-6">*/
/*                     <div class="skill-bar wow slideInLeft" data-wow-delay="0.2s">*/
/*                         <div class="progress-lebel">*/
/*                             <h6>Photoshop & Illustrator</h6>*/
/*                         </div>*/
/*                         <div class="progress">*/
/*                             <div class="progress-bar" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100" style="width: 75%;">*/
/*                             </div>*/
/*                         </div>*/
/*                     </div>*/
/*                 </div>*/
/* */
/*                 <div class="col-sm-6">*/
/*                     <div class="skill-bar wow slideInRight" data-wow-delay="0.2s">*/
/*                         <div class="progress-lebel">*/
/*                             <h6>Catégorie</h6>*/
/*                         </div>*/
/*                         <div class="progress">*/
/*                             <div class="progress-bar" role="progressbar" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100" style="width: 85%;">*/
/*                             </div>*/
/*                         </div>*/
/*                     </div>*/
/*                 </div>*/
/* */
/*                 <div class="col-sm-6">*/
/*                     <div class="skill-bar wow slideInLeft" data-wow-delay="0.4s">*/
/*                         <div class="progress-lebel">*/
/*                             <h6>Html & Css</h6>*/
/*                         </div>*/
/*                         <div class="progress">*/
/*                             <div class="progress-bar" role="progressbar" aria-valuenow="95" aria-valuemin="0" aria-valuemax="100" style="width: 95%;">*/
/*                             </div>*/
/*                         </div>*/
/*                     </div>*/
/*                 </div>*/
/* */
/*                 <div class="col-sm-6">*/
/*                     <div class="skill-bar wow slideInRight" data-wow-delay="0.4s">*/
/*                         <div class="progress-lebel">*/
/*                             <h6>Javascript</h6>*/
/*                         </div>*/
/*                         <div class="progress">*/
/*                             <div class="progress-bar" role="progressbar" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100" style="width: 70%;">*/
/*                             </div>*/
/*                         </div>*/
/*                     </div>*/
/*                 </div>*/
/* */
/*             </div> <!-- /.row -->*/
/*         </div> <!-- /.container -->*/
/*     </div>*/
/*     <!-- End Our Skill -->*/
/* */
/*     <!-- End Utilisable -->*/
/* {% endblock %}*/
