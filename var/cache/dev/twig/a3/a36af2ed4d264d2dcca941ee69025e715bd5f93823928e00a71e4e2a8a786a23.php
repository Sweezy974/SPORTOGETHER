<?php

/* FOSUserBundle::layout.html.twig */
class __TwigTemplate_e14465e6abadc0f105ec50807329a787702794cddce76648b6122613ce83b644 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'fos_user_content' => array($this, 'block_fos_user_content'),
            'javascript' => array($this, 'block_javascript'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_6910f1be550f6dd699261dccc542394927c02a085080bddb2aa6471419fdb9a4 = $this->env->getExtension("native_profiler");
        $__internal_6910f1be550f6dd699261dccc542394927c02a085080bddb2aa6471419fdb9a4->enter($__internal_6910f1be550f6dd699261dccc542394927c02a085080bddb2aa6471419fdb9a4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle::layout.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
<head>
    <meta charset=\"UTF-8\" />
    <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
    ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 12
        echo "    <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
</head>
<body>
  <!-- NAVBAR -->
  <nav class=\"navbar navbar-default navbar-fixed-top \">
    <div class=\"container container-fluid\">
      <div class=\"navbar-header\">
        <button type=\"button\" class=\"navbar-toggle collapsed\" data-toggle=\"collapse\" data-target=\"#bs-example-navbar-collapse-1\" aria-expanded=\"false\">
          <span class=\"sr-only\">Toggle navigation</span>
          <span class=\"icon-bar\"></span>
          <span class=\"icon-bar\"></span>
          <span class=\"icon-bar\"></span>
        </button>

        <div class=\"row\">
          <ul class=\"nav navbar-nav\">
            <li class=\"active\"><a href=\"#\">SPORTOGETHER <span class=\"sr-only\">(current)</span></a></li>
            </ul>
            <ul class=\"nav navbar-nav\">
              ";
        // line 31
        if ($this->env->getExtension('security')->isGranted("IS_AUTHENTICATED_REMEMBERED")) {
            // line 32
            echo "              <li><a class=\"nav-link\" href=\"";
            echo $this->env->getExtension('routing')->getPath("RencontrePublic_new");
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Créer une rencontre", array(), "FOSUserBundle"), "html", null, true);
            echo "</a></li>
              <li><a class=\"nav-link\" href=\"";
            // line 33
            echo $this->env->getExtension('routing')->getPath("RencontrePublic_show");
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Participer à une rencontre", array(), "FOSUserBundle"), "html", null, true);
            echo "</a></li>
              ";
        } else {
            // line 35
            echo "              <li><a class=\"nav-link\" href=\"";
            echo $this->env->getExtension('routing')->getPath("RencontrePublic_show");
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Participer à une rencontre", array(), "FOSUserBundle"), "html", null, true);
            echo "</a></li>
              ";
        }
        // line 37
        echo "              </ul>


          </div>
        </div>
        <!-- Brand and toggle get grouped for better mobile display -->



        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class=\"collapse navbar-collapse\" id=\"bs-example-navbar-collapse-1\">


          <ul class=\"nav navbar-nav navbar-right\" >

            <li class=\"nav-item\">
              ";
        // line 53
        if ($this->env->getExtension('security')->isGranted("IS_AUTHENTICATED_REMEMBERED")) {
            // line 54
            echo "
              <a class=\"nav-link\"
              href=\"";
            // line 56
            echo $this->env->getExtension('routing')->getPath("RencontrePublic_new");
            echo "\">
              ";
            // line 57
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Liste des inscrits", array(), "FOSUserBundle"), "html", null, true);
            echo "
            </a>


            ";
        } else {
            // line 62
            echo "            <!--
            <a class=\"nav-link\"
            href=\"";
            // line 64
            echo $this->env->getExtension('routing')->getPath("fos_user_registration_register");
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Inscription", array(), "FOSUserBundle"), "html", null, true);
            echo "</a>
          -->
          <li class=\"nav-item\">
            <a href=\"";
            // line 67
            echo $this->env->getExtension('routing')->getPath("RencontrePublic_show");
            echo "\" role=\"button\"><i class=\"fa fa-edit\" aria-hidden=\"true\"></i> Participer à une rencontre </a>
          </li>
          ";
        }
        // line 70
        echo "        </li>

        <li class=\"nav-item\">
          ";
        // line 73
        if ($this->env->getExtension('security')->isGranted("IS_AUTHENTICATED_REMEMBERED")) {
            // line 74
            echo "          <a class=\"nav-link\" href=\"";
            echo $this->env->getExtension('routing')->getPath("fos_user_profile_show");
            echo "\">
          Connecté en tant que: ";
            // line 75
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "username", array()), "html", null, true);
            echo "</a>



            ";
        } else {
            // line 80
            echo "            <a class=\"nav-link\"
            href=\"";
            // line 81
            echo $this->env->getExtension('routing')->getPath("fos_user_security_login");
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Connexion", array(), "FOSUserBundle"), "html", null, true);
            echo "</a>
            ";
        }
        // line 83
        echo "          </li>
          <li class=\"nav-item\">
            ";
        // line 85
        if ($this->env->getExtension('security')->isGranted("IS_AUTHENTICATED_REMEMBERED")) {
            // line 86
            echo "            <a class=\"nav-link\"
            href=\"";
            // line 87
            echo $this->env->getExtension('routing')->getPath("fos_user_security_logout");
            echo "\">
            ";
            // line 88
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Se deconnecter", array(), "FOSUserBundle"), "html", null, true);
            echo "
          </a>
          ";
        } else {
            // line 91
            echo "          <!--
          <a class=\"nav-link\"
          href=\"";
            // line 93
            echo $this->env->getExtension('routing')->getPath("fos_user_registration_register");
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Inscription", array(), "FOSUserBundle"), "html", null, true);
            echo "</a>
        -->
        <li class=\"nav-item\">
          <a href=\"/register\" role=\"button\"><i class=\"fa fa-edit\" aria-hidden=\"true\"></i> Inscription</a>
        </li>
        ";
        }
        // line 99
        echo "      </li>




    </ul>
      </div><!-- /.navbar-collapse -->
    </div><!-- /.container-fluid -->
  </nav>
  <!-- FIN NAVBAR  -->
  <!--SLIDER  -->
  <div class=\"carousel slide carousel-fade\" data-ride=\"carousel\">

    <!-- Wrapper for slides -->
    <div class=\"carousel-inner\" role=\"listbox\">
        <div class=\"item active\">
        </div>
        <div class=\"item\">
        </div>
        <div class=\"item\">
        </div>
        <div class=\"item\">
        </div>
        <div class=\"item\">
        </div>
        <div class=\"item\">
        </div>
        <div class=\"item\">
        </div>
        <div class=\"item\">
        </div>
        <div class=\"item\">
        </div>
    </div>
</div>

<!-- Remeber to put all the content you want on top of the slider below the slider code -->

<div class=\"title\">
  <h1>SPORTOGETHER</h1>
</div>
  <!-- FIN SLIDER -->
  <div>


  <div>
    ";
        // line 145
        $this->displayBlock('fos_user_content', $context, $blocks);
        // line 147
        echo "  </div>
  ";
        // line 148
        $this->displayBlock('javascript', $context, $blocks);
        // line 157
        echo "

</body>
</html>
";
        
        $__internal_6910f1be550f6dd699261dccc542394927c02a085080bddb2aa6471419fdb9a4->leave($__internal_6910f1be550f6dd699261dccc542394927c02a085080bddb2aa6471419fdb9a4_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_088ca18ac10ed2281230ff82cc7d7e34b8097b49d08cdf16fecf70169899941b = $this->env->getExtension("native_profiler");
        $__internal_088ca18ac10ed2281230ff82cc7d7e34b8097b49d08cdf16fecf70169899941b->enter($__internal_088ca18ac10ed2281230ff82cc7d7e34b8097b49d08cdf16fecf70169899941b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_088ca18ac10ed2281230ff82cc7d7e34b8097b49d08cdf16fecf70169899941b->leave($__internal_088ca18ac10ed2281230ff82cc7d7e34b8097b49d08cdf16fecf70169899941b_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_206341e7a1c5b56f0f01489039f4a2167f5be3973f2b3ad59650a3b2f52b366a = $this->env->getExtension("native_profiler");
        $__internal_206341e7a1c5b56f0f01489039f4a2167f5be3973f2b3ad59650a3b2f52b366a->enter($__internal_206341e7a1c5b56f0f01489039f4a2167f5be3973f2b3ad59650a3b2f52b366a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 7
        echo "    <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("font-awesome/css/font-awesome.min.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bootstrap/css/bootstrap.min.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" href=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("main/css/main.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" href=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("css/main-style.css"), "html", null, true);
        echo "\">
    ";
        
        $__internal_206341e7a1c5b56f0f01489039f4a2167f5be3973f2b3ad59650a3b2f52b366a->leave($__internal_206341e7a1c5b56f0f01489039f4a2167f5be3973f2b3ad59650a3b2f52b366a_prof);

    }

    // line 145
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_a4bdfeaed34c98e24a40c88af9883c5130236d5d6907b2c4a2dd46334e2fb0a7 = $this->env->getExtension("native_profiler");
        $__internal_a4bdfeaed34c98e24a40c88af9883c5130236d5d6907b2c4a2dd46334e2fb0a7->enter($__internal_a4bdfeaed34c98e24a40c88af9883c5130236d5d6907b2c4a2dd46334e2fb0a7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 146
        echo "    ";
        
        $__internal_a4bdfeaed34c98e24a40c88af9883c5130236d5d6907b2c4a2dd46334e2fb0a7->leave($__internal_a4bdfeaed34c98e24a40c88af9883c5130236d5d6907b2c4a2dd46334e2fb0a7_prof);

    }

    // line 148
    public function block_javascript($context, array $blocks = array())
    {
        $__internal_7c81d52b2f56455ce64c3c13c0549e19cc5498d583a6140db8093a3c23a9e8f0 = $this->env->getExtension("native_profiler");
        $__internal_7c81d52b2f56455ce64c3c13c0549e19cc5498d583a6140db8093a3c23a9e8f0->enter($__internal_7c81d52b2f56455ce64c3c13c0549e19cc5498d583a6140db8093a3c23a9e8f0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascript"));

        // line 149
        echo "  <script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bootstrap/js/bootstrap.min.js"), "html", null, true);
        echo "\" charset=\"utf-8\"></script>
  <script src=\"";
        // line 150
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bootstrap/js/jquery-2.1.4.js"), "html", null, true);
        echo "\" charset=\"utf-8\"></script>
  <script src=\"";
        // line 151
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bootstrap/js/jquery.js"), "html", null, true);
        echo "\" charset=\"utf-8\"></script>
  <script src=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js\"></script>
  <script src=\"";
        // line 153
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/script.js"), "html", null, true);
        echo "\"></script>
  <script src=\"//code.jquery.com/jquery.min.js\"></script>
  <script src=\"";
        // line 155
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
  ";
        
        $__internal_7c81d52b2f56455ce64c3c13c0549e19cc5498d583a6140db8093a3c23a9e8f0->leave($__internal_7c81d52b2f56455ce64c3c13c0549e19cc5498d583a6140db8093a3c23a9e8f0_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle::layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  347 => 155,  342 => 153,  337 => 151,  333 => 150,  328 => 149,  322 => 148,  315 => 146,  309 => 145,  300 => 10,  296 => 9,  292 => 8,  287 => 7,  281 => 6,  269 => 5,  258 => 157,  256 => 148,  253 => 147,  251 => 145,  203 => 99,  192 => 93,  188 => 91,  182 => 88,  178 => 87,  175 => 86,  173 => 85,  169 => 83,  162 => 81,  159 => 80,  151 => 75,  146 => 74,  144 => 73,  139 => 70,  133 => 67,  125 => 64,  121 => 62,  113 => 57,  109 => 56,  105 => 54,  103 => 53,  85 => 37,  77 => 35,  70 => 33,  63 => 32,  61 => 31,  38 => 12,  36 => 6,  32 => 5,  26 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html>*/
/* <head>*/
/*     <meta charset="UTF-8" />*/
/*     <title>{% block title %}Welcome!{% endblock %}</title>*/
/*     {% block stylesheets %}*/
/*     <link rel="stylesheet" href="{{asset('font-awesome/css/font-awesome.min.css')}}">*/
/*     <link rel="stylesheet" href="{{asset('bootstrap/css/bootstrap.min.css')}}">*/
/*     <link rel="stylesheet" href="{{asset('main/css/main.css')}}">*/
/*     <link rel="stylesheet" href="{{asset('css/main-style.css')}}">*/
/*     {% endblock %}*/
/*     <link rel="icon" type="image/x-icon" href="{{ asset('favicon.ico') }}" />*/
/* </head>*/
/* <body>*/
/*   <!-- NAVBAR -->*/
/*   <nav class="navbar navbar-default navbar-fixed-top ">*/
/*     <div class="container container-fluid">*/
/*       <div class="navbar-header">*/
/*         <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">*/
/*           <span class="sr-only">Toggle navigation</span>*/
/*           <span class="icon-bar"></span>*/
/*           <span class="icon-bar"></span>*/
/*           <span class="icon-bar"></span>*/
/*         </button>*/
/* */
/*         <div class="row">*/
/*           <ul class="nav navbar-nav">*/
/*             <li class="active"><a href="#">SPORTOGETHER <span class="sr-only">(current)</span></a></li>*/
/*             </ul>*/
/*             <ul class="nav navbar-nav">*/
/*               {% if is_granted("IS_AUTHENTICATED_REMEMBERED") %}*/
/*               <li><a class="nav-link" href="{{ path('RencontrePublic_new') }}">{{ 'Créer une rencontre'|trans({}, 'FOSUserBundle') }}</a></li>*/
/*               <li><a class="nav-link" href="{{ path('RencontrePublic_show') }}">{{ 'Participer à une rencontre'|trans({}, 'FOSUserBundle') }}</a></li>*/
/*               {% else %}*/
/*               <li><a class="nav-link" href="{{ path('RencontrePublic_show') }}">{{ 'Participer à une rencontre'|trans({}, 'FOSUserBundle') }}</a></li>*/
/*               {% endif %}*/
/*               </ul>*/
/* */
/* */
/*           </div>*/
/*         </div>*/
/*         <!-- Brand and toggle get grouped for better mobile display -->*/
/* */
/* */
/* */
/*         <!-- Collect the nav links, forms, and other content for toggling -->*/
/*         <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">*/
/* */
/* */
/*           <ul class="nav navbar-nav navbar-right" >*/
/* */
/*             <li class="nav-item">*/
/*               {% if is_granted("IS_AUTHENTICATED_REMEMBERED") %}*/
/* */
/*               <a class="nav-link"*/
/*               href="{{ path('RencontrePublic_new') }}">*/
/*               {{ 'Liste des inscrits'|trans({}, 'FOSUserBundle') }}*/
/*             </a>*/
/* */
/* */
/*             {% else %}*/
/*             <!--*/
/*             <a class="nav-link"*/
/*             href="{{ path('fos_user_registration_register') }}">{{ 'Inscription'|trans({}, 'FOSUserBundle') }}</a>*/
/*           -->*/
/*           <li class="nav-item">*/
/*             <a href="{{ path('RencontrePublic_show') }}" role="button"><i class="fa fa-edit" aria-hidden="true"></i> Participer à une rencontre </a>*/
/*           </li>*/
/*           {% endif %}*/
/*         </li>*/
/* */
/*         <li class="nav-item">*/
/*           {% if is_granted("IS_AUTHENTICATED_REMEMBERED") %}*/
/*           <a class="nav-link" href="{{ path('fos_user_profile_show') }}">*/
/*           Connecté en tant que: {{ app.user.username }}</a>*/
/* */
/* */
/* */
/*             {% else %}*/
/*             <a class="nav-link"*/
/*             href="{{ path('fos_user_security_login') }}">{{ 'Connexion'|trans({}, 'FOSUserBundle') }}</a>*/
/*             {% endif %}*/
/*           </li>*/
/*           <li class="nav-item">*/
/*             {% if is_granted("IS_AUTHENTICATED_REMEMBERED") %}*/
/*             <a class="nav-link"*/
/*             href="{{ path('fos_user_security_logout') }}">*/
/*             {{ 'Se deconnecter'|trans({}, 'FOSUserBundle') }}*/
/*           </a>*/
/*           {% else %}*/
/*           <!--*/
/*           <a class="nav-link"*/
/*           href="{{ path('fos_user_registration_register') }}">{{ 'Inscription'|trans({}, 'FOSUserBundle') }}</a>*/
/*         -->*/
/*         <li class="nav-item">*/
/*           <a href="/register" role="button"><i class="fa fa-edit" aria-hidden="true"></i> Inscription</a>*/
/*         </li>*/
/*         {% endif %}*/
/*       </li>*/
/* */
/* */
/* */
/* */
/*     </ul>*/
/*       </div><!-- /.navbar-collapse -->*/
/*     </div><!-- /.container-fluid -->*/
/*   </nav>*/
/*   <!-- FIN NAVBAR  -->*/
/*   <!--SLIDER  -->*/
/*   <div class="carousel slide carousel-fade" data-ride="carousel">*/
/* */
/*     <!-- Wrapper for slides -->*/
/*     <div class="carousel-inner" role="listbox">*/
/*         <div class="item active">*/
/*         </div>*/
/*         <div class="item">*/
/*         </div>*/
/*         <div class="item">*/
/*         </div>*/
/*         <div class="item">*/
/*         </div>*/
/*         <div class="item">*/
/*         </div>*/
/*         <div class="item">*/
/*         </div>*/
/*         <div class="item">*/
/*         </div>*/
/*         <div class="item">*/
/*         </div>*/
/*         <div class="item">*/
/*         </div>*/
/*     </div>*/
/* </div>*/
/* */
/* <!-- Remeber to put all the content you want on top of the slider below the slider code -->*/
/* */
/* <div class="title">*/
/*   <h1>SPORTOGETHER</h1>*/
/* </div>*/
/*   <!-- FIN SLIDER -->*/
/*   <div>*/
/* */
/* */
/*   <div>*/
/*     {% block fos_user_content %}*/
/*     {% endblock fos_user_content %}*/
/*   </div>*/
/*   {% block javascript %}*/
/*   <script src="{{asset('bootstrap/js/bootstrap.min.js')}}" charset="utf-8"></script>*/
/*   <script src="{{asset('bootstrap/js/jquery-2.1.4.js')}}" charset="utf-8"></script>*/
/*   <script src="{{asset('bootstrap/js/jquery.js')}}" charset="utf-8"></script>*/
/*   <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>*/
/*   <script src="{{asset('js/script.js')}}"></script>*/
/*   <script src="//code.jquery.com/jquery.min.js"></script>*/
/*   <script src="{{asset('js/bootstrap.min.js')}}"></script>*/
/*   {% endblock %}*/
/* */
/* */
/* </body>*/
/* </html>*/
/* */