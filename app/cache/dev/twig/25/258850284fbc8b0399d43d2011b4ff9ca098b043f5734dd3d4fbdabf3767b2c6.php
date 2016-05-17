<?php

/* PidevMailBundle:Default:formMail.html.twig */
class __TwigTemplate_6abc2c12ae33faa59a134ed6d605bef13d74c4660c11f41c41c87026f74557ec extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 2
        $this->parent = $this->loadTemplate("PIDEVCrowdRiseBundle::layout.html.twig", "PidevMailBundle:Default:formMail.html.twig", 2);
        $this->blocks = array(
            'footer' => array($this, 'block_footer'),
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
    public function block_footer($context, array $blocks = array())
    {
        // line 4
        echo "
    <!--Utilisable -->
    <!-- Begin contact section -->
    <section id=\"contact-section\" class=\"page text-white parallax\" data-stellar-background-ratio=\"0.5\" 
             style=\"background-image: url(";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("img/map-bg.jpg"), "html", null, true);
        echo ");\">

        <div class=\"cover\"></div>

        <!-- Begin page header-->
        <div class=\"page-header-wrapper\">
            <br>
            <br>
            <br>
            <div class=\"container\">
                <div class=\"page-header text-center wow fadeInDown\" data-wow-delay=\"0.4s\">
                    <h2>Contactez-nous</h2>
                    <div class=\"devider\"></div>
                    <p class=\"subtitle\">A l'écoute de vos réclamations</p><br><br><br><br>
                    ";
        // line 22
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "flashbag", array()), "get", array(0 => "notice"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flashMessage"]) {
            // line 23
            echo "
                    <div class=\"alert alert-success  fade in\">
                    <a href=\"#\" class=\"close\" data-dismiss=\"alert\" aria-label=\"close\">&times;</a>
                        ";
            // line 26
            echo twig_escape_filter($this->env, $context["flashMessage"], "html", null, true);
            echo "
                    </div>

                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flashMessage'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 30
        echo "                </div>
                
            </div>
        </div>  

        <!-- End page header-->

        <div class=\"contact wow bounceInRight\" data-wow-delay=\"0.4s\">
            <div class=\"container\">
                <div class=\"row\">

                    <div class=\"col-sm-6\">
                        <div class=\"contact-info\">
                            <br><h4>Notre Adresse</h4>
                            <ul class=\"contact-address\">
                                <li><i class=\"fa fa-map-marker fa-lg\"></i>&nbsp;
                                    Z.I. Chotrana II - B.P. 160  ,<br><br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                    2083 Pôle Technologique - Cité El Ghazala ,<br><br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Ariana, Tunisie, 2080</li>

                                <li><i class=\"fa fa-phone\"></i>&nbsp; 00-216-70-685-685 </li>
                                <li><i class=\"fa fa-print\"></i>&nbsp; 00-216-70-685-685</li>
                                <li><i class=\"fa fa-envelope\"></i>  <a href=\"mailto:CrowdRise1516@gmail.com\">CrowdRise1516@gmail.com</a></li>
                                <li><i class=\"fa fa-skype\"></i> Crowd-Rise</li>
                            </ul>

                        </div>

                        ";
        // line 58
        echo "                        <script src=\"http://maps.googleapis.com/maps/api/js\"></script>

                        <script>
                            var myCenter = new google.maps.LatLng(36.8984821, 10.189761900000008);

                            function initialize()
                            {
                                var mapProperties = {
                                    center: myCenter,
                                    zoom: 10,
                                    mapTypeId: google.maps.MapTypeId.ROADMAP
                                };

                                var map = new google.maps.Map(document.getElementById(\"googleMap\"), mapProperties);

                            ";
        // line 74
        echo "                                    var marker = new google.maps.Marker({
                                        position: myCenter,
                                        animation: google.maps.Animation.BOUNCE,";
        // line 77
        echo "                                        title: 'Click to zoom'
                                    });

                                    marker.setMap(map);

                            ";
        // line 83
        echo "                                    var infoFenetre = new google.maps.InfoWindow({
                                        content: 'Welcome To ESPRIT!'
                                    });

                                    infoFenetre.open(map, marker);

                            ";
        // line 90
        echo "                                    google.maps.event.addListener(marker, 'click', function () {
                                        map.setZoom(16);
                                        map.setCenter(marker.getPosition());
                                    });

                                }
                                google.maps.event.addDomListener(window, 'load', initialize);

                        </script>   
                        <br><br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        <div id=\"googleMap\" style=\"width:530px;height:240px;\"></div>

                    </div>

                    <div class=\"col-sm-6\">
                        <div class=\"contact-form\">
                            <br> <h4>Contactez-nous</h4> 
                            <form role=\"form\" action =\"";
        // line 107
        echo $this->env->getExtension('routing')->getPath("pidev_mail_sendmail");
        echo "\" method=\"POST\">
                                <div class=\"form-group\">
                                    <input type=\"text\" name=\"nom\" class=\"form-control input-lg\" placeholder=\"Votre Nom\" required>
                                </div>
                                <div class=\"form-group\">
                                    <input type=\"text\" name=\"prenom\" class=\"form-control input-lg\" placeholder=\"Votre Prénom\" required>
                                </div>
                                <div class=\"form-group\">
                                    <input type=\"integer\" name=\"tel\" class=\"form-control input-lg\" placeholder=\"Votre Téléphone\" required>
                                </div>
                                <div class=\"form-group\">
                                    <input type=\"email\"  name=\"email\" class=\"form-control input-lg\" placeholder=\"Votre Adresse Electronique\" required>
                                </div>
                                <div class=\"form-group\">
                                    <input type=\"text\" name=\"sujet\" class=\"form-control input-lg\" placeholder=\"Sujet\" required>
                                </div>
                                <div class=\"form-group\">
                                    <textarea name=\"message\" class=\"form-control input-lg\" rows=\"5\" placeholder=\"Message\" required></textarea>
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

    <!-- End Utilisable -->
";
    }

    public function getTemplateName()
    {
        return "PidevMailBundle:Default:formMail.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  157 => 107,  138 => 90,  130 => 83,  123 => 77,  119 => 74,  102 => 58,  73 => 30,  63 => 26,  58 => 23,  54 => 22,  37 => 8,  31 => 4,  28 => 3,  11 => 2,);
    }
}
/* */
/* {% extends 'PIDEVCrowdRiseBundle::layout.html.twig' %}*/
/* {% block footer %}*/
/* */
/*     <!--Utilisable -->*/
/*     <!-- Begin contact section -->*/
/*     <section id="contact-section" class="page text-white parallax" data-stellar-background-ratio="0.5" */
/*              style="background-image: url({{ asset('img/map-bg.jpg') }});">*/
/* */
/*         <div class="cover"></div>*/
/* */
/*         <!-- Begin page header-->*/
/*         <div class="page-header-wrapper">*/
/*             <br>*/
/*             <br>*/
/*             <br>*/
/*             <div class="container">*/
/*                 <div class="page-header text-center wow fadeInDown" data-wow-delay="0.4s">*/
/*                     <h2>Contactez-nous</h2>*/
/*                     <div class="devider"></div>*/
/*                     <p class="subtitle">A l'écoute de vos réclamations</p><br><br><br><br>*/
/*                     {% for flashMessage in app.session.flashbag.get('notice') %}*/
/* */
/*                     <div class="alert alert-success  fade in">*/
/*                     <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>*/
/*                         {{ flashMessage }}*/
/*                     </div>*/
/* */
/*                 {% endfor %}*/
/*                 </div>*/
/*                 */
/*             </div>*/
/*         </div>  */
/* */
/*         <!-- End page header-->*/
/* */
/*         <div class="contact wow bounceInRight" data-wow-delay="0.4s">*/
/*             <div class="container">*/
/*                 <div class="row">*/
/* */
/*                     <div class="col-sm-6">*/
/*                         <div class="contact-info">*/
/*                             <br><h4>Notre Adresse</h4>*/
/*                             <ul class="contact-address">*/
/*                                 <li><i class="fa fa-map-marker fa-lg"></i>&nbsp;*/
/*                                     Z.I. Chotrana II - B.P. 160  ,<br><br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;*/
/*                                     2083 Pôle Technologique - Cité El Ghazala ,<br><br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Ariana, Tunisie, 2080</li>*/
/* */
/*                                 <li><i class="fa fa-phone"></i>&nbsp; 00-216-70-685-685 </li>*/
/*                                 <li><i class="fa fa-print"></i>&nbsp; 00-216-70-685-685</li>*/
/*                                 <li><i class="fa fa-envelope"></i>  <a href="mailto:CrowdRise1516@gmail.com">CrowdRise1516@gmail.com</a></li>*/
/*                                 <li><i class="fa fa-skype"></i> Crowd-Rise</li>*/
/*                             </ul>*/
/* */
/*                         </div>*/
/* */
/*                         {# ***********importation de l'API Map : bibliothèque JAVASCRIPT********* #}*/
/*                         <script src="http://maps.googleapis.com/maps/api/js"></script>*/
/* */
/*                         <script>*/
/*                             var myCenter = new google.maps.LatLng(36.8984821, 10.189761900000008);*/
/* */
/*                             function initialize()*/
/*                             {*/
/*                                 var mapProperties = {*/
/*                                     center: myCenter,*/
/*                                     zoom: 10,*/
/*                                     mapTypeId: google.maps.MapTypeId.ROADMAP*/
/*                                 };*/
/* */
/*                                 var map = new google.maps.Map(document.getElementById("googleMap"), mapProperties);*/
/* */
/*                             {#ajout du Marker #}*/
/*                                     var marker = new google.maps.Marker({*/
/*                                         position: myCenter,*/
/*                                         animation: google.maps.Animation.BOUNCE,{#animation du Marker#}*/
/*                                         title: 'Click to zoom'*/
/*                                     });*/
/* */
/*                                     marker.setMap(map);*/
/* */
/*                             {#fenetre dinfo#}*/
/*                                     var infoFenetre = new google.maps.InfoWindow({*/
/*                                         content: 'Welcome To ESPRIT!'*/
/*                                     });*/
/* */
/*                                     infoFenetre.open(map, marker);*/
/* */
/*                             {#Zoummer lors du clique sur le marker#}*/
/*                                     google.maps.event.addListener(marker, 'click', function () {*/
/*                                         map.setZoom(16);*/
/*                                         map.setCenter(marker.getPosition());*/
/*                                     });*/
/* */
/*                                 }*/
/*                                 google.maps.event.addDomListener(window, 'load', initialize);*/
/* */
/*                         </script>   */
/*                         <br><br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;*/
/*                         <div id="googleMap" style="width:530px;height:240px;"></div>*/
/* */
/*                     </div>*/
/* */
/*                     <div class="col-sm-6">*/
/*                         <div class="contact-form">*/
/*                             <br> <h4>Contactez-nous</h4> */
/*                             <form role="form" action ="{{path('pidev_mail_sendmail')}}" method="POST">*/
/*                                 <div class="form-group">*/
/*                                     <input type="text" name="nom" class="form-control input-lg" placeholder="Votre Nom" required>*/
/*                                 </div>*/
/*                                 <div class="form-group">*/
/*                                     <input type="text" name="prenom" class="form-control input-lg" placeholder="Votre Prénom" required>*/
/*                                 </div>*/
/*                                 <div class="form-group">*/
/*                                     <input type="integer" name="tel" class="form-control input-lg" placeholder="Votre Téléphone" required>*/
/*                                 </div>*/
/*                                 <div class="form-group">*/
/*                                     <input type="email"  name="email" class="form-control input-lg" placeholder="Votre Adresse Electronique" required>*/
/*                                 </div>*/
/*                                 <div class="form-group">*/
/*                                     <input type="text" name="sujet" class="form-control input-lg" placeholder="Sujet" required>*/
/*                                 </div>*/
/*                                 <div class="form-group">*/
/*                                     <textarea name="message" class="form-control input-lg" rows="5" placeholder="Message" required></textarea>*/
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
/*     <!-- End Utilisable -->*/
/* {% endblock %}*/
