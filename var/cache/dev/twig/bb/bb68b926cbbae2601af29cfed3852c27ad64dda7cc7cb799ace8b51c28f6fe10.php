<?php

/* FOSUserBundle::layout.html.twig */
class __TwigTemplate_1a186487034b3187a376330cfd7c6fbb8a05e66d49d3029d2d37fa583600722b extends Twig_Template
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
        $__internal_b4b0a7837edf3d875524c8306345a269d61f0306d51342d76502ca6dbe4a5b32 = $this->env->getExtension("native_profiler");
        $__internal_b4b0a7837edf3d875524c8306345a269d61f0306d51342d76502ca6dbe4a5b32->enter($__internal_b4b0a7837edf3d875524c8306345a269d61f0306d51342d76502ca6dbe4a5b32_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle::layout.html.twig"));

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
            <li class=\"active\"><a href=\"";
        // line 28
        echo $this->env->getExtension('routing')->getPath("accueil");
        echo "\">SPORTOGETHER <span class=\"sr-only\">(current)</span></a></li>
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


            ";
        } else {
            // line 58
            echo "            <!--
            <a class=\"nav-link\"
            href=\"";
            // line 60
            echo $this->env->getExtension('routing')->getPath("fos_user_registration_register");
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Inscription", array(), "FOSUserBundle"), "html", null, true);
            echo "</a>
          -->
          <li class=\"nav-item\">
            <a href=\"";
            // line 63
            echo $this->env->getExtension('routing')->getPath("RencontrePublic_show");
            echo "\" role=\"button\"><i class=\"fa fa-edit\" aria-hidden=\"true\"></i> Participer à une rencontre </a>
          </li>
          ";
        }
        // line 66
        echo "        </li>

        <li class=\"nav-item\">
          ";
        // line 69
        if ($this->env->getExtension('security')->isGranted("IS_AUTHENTICATED_REMEMBERED")) {
            // line 70
            echo "          <a class=\"nav-link\" href=\"";
            echo $this->env->getExtension('routing')->getPath("fos_user_profile_show");
            echo "\">
          Connecté en tant que: ";
            // line 71
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "username", array()), "html", null, true);
            echo "</a>



            ";
        } else {
            // line 76
            echo "            <a class=\"nav-link\"
            href=\"";
            // line 77
            echo $this->env->getExtension('routing')->getPath("fos_user_security_login");
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Connexion", array(), "FOSUserBundle"), "html", null, true);
            echo "</a>
            ";
        }
        // line 79
        echo "          </li>
          <li class=\"nav-item\">

            ";
        // line 82
        if ($this->env->getExtension('security')->isGranted("IS_AUTHENTICATED_REMEMBERED")) {
            // line 83
            echo "            <a class=\"nav-link\"
            href=\"";
            // line 84
            echo $this->env->getExtension('routing')->getPath("fos_user_security_logout");
            echo "\">
            ";
            // line 85
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Se deconnecter", array(), "FOSUserBundle"), "html", null, true);
            echo "
          </a>
          ";
        } else {
            // line 88
            echo "          <!--
          <a class=\"nav-link\"
          href=\"";
            // line 90
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
        // line 96
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
        // line 142
        $this->displayBlock('fos_user_content', $context, $blocks);
        // line 144
        echo "  </div>
  ";
        // line 145
        $this->displayBlock('javascript', $context, $blocks);
        // line 154
        echo "

</body>
</html>
";
        
        $__internal_b4b0a7837edf3d875524c8306345a269d61f0306d51342d76502ca6dbe4a5b32->leave($__internal_b4b0a7837edf3d875524c8306345a269d61f0306d51342d76502ca6dbe4a5b32_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_03a2d99ebb5e109eeccf5110edc552300fcb777ffe126d3881dfd39242e01654 = $this->env->getExtension("native_profiler");
        $__internal_03a2d99ebb5e109eeccf5110edc552300fcb777ffe126d3881dfd39242e01654->enter($__internal_03a2d99ebb5e109eeccf5110edc552300fcb777ffe126d3881dfd39242e01654_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_03a2d99ebb5e109eeccf5110edc552300fcb777ffe126d3881dfd39242e01654->leave($__internal_03a2d99ebb5e109eeccf5110edc552300fcb777ffe126d3881dfd39242e01654_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_bb5af3756e925515039cfe976e609b19491b03a24f0a5d998246af3ab4fb8947 = $this->env->getExtension("native_profiler");
        $__internal_bb5af3756e925515039cfe976e609b19491b03a24f0a5d998246af3ab4fb8947->enter($__internal_bb5af3756e925515039cfe976e609b19491b03a24f0a5d998246af3ab4fb8947_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

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
        
        $__internal_bb5af3756e925515039cfe976e609b19491b03a24f0a5d998246af3ab4fb8947->leave($__internal_bb5af3756e925515039cfe976e609b19491b03a24f0a5d998246af3ab4fb8947_prof);

    }

    // line 142
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_45184e1c3c3eefba9bbaedc1b84a34cdaefbad31566d088e0f59f4f97d252c76 = $this->env->getExtension("native_profiler");
        $__internal_45184e1c3c3eefba9bbaedc1b84a34cdaefbad31566d088e0f59f4f97d252c76->enter($__internal_45184e1c3c3eefba9bbaedc1b84a34cdaefbad31566d088e0f59f4f97d252c76_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 143
        echo "    ";
        
        $__internal_45184e1c3c3eefba9bbaedc1b84a34cdaefbad31566d088e0f59f4f97d252c76->leave($__internal_45184e1c3c3eefba9bbaedc1b84a34cdaefbad31566d088e0f59f4f97d252c76_prof);

    }

    // line 145
    public function block_javascript($context, array $blocks = array())
    {
        $__internal_c27145e6d0b31ec2a20be57a0ac63fb75a467d631401dc90384b65fe4632bf0a = $this->env->getExtension("native_profiler");
        $__internal_c27145e6d0b31ec2a20be57a0ac63fb75a467d631401dc90384b65fe4632bf0a->enter($__internal_c27145e6d0b31ec2a20be57a0ac63fb75a467d631401dc90384b65fe4632bf0a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascript"));

        // line 146
        echo "  <script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bootstrap/js/bootstrap.min.js"), "html", null, true);
        echo "\" charset=\"utf-8\"></script>
  <script src=\"";
        // line 147
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bootstrap/js/jquery-2.1.4.js"), "html", null, true);
        echo "\" charset=\"utf-8\"></script>
  <script src=\"";
        // line 148
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bootstrap/js/jquery.js"), "html", null, true);
        echo "\" charset=\"utf-8\"></script>
  <script src=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js\"></script>
  <script src=\"";
        // line 150
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/script.js"), "html", null, true);
        echo "\"></script>
  <script src=\"//code.jquery.com/jquery.min.js\"></script>
  <script src=\"";
        // line 152
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
  ";
        
        $__internal_c27145e6d0b31ec2a20be57a0ac63fb75a467d631401dc90384b65fe4632bf0a->leave($__internal_c27145e6d0b31ec2a20be57a0ac63fb75a467d631401dc90384b65fe4632bf0a_prof);

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
        return array (  341 => 152,  336 => 150,  331 => 148,  327 => 147,  322 => 146,  316 => 145,  309 => 143,  303 => 142,  294 => 10,  290 => 9,  286 => 8,  281 => 7,  275 => 6,  263 => 5,  252 => 154,  250 => 145,  247 => 144,  245 => 142,  197 => 96,  186 => 90,  182 => 88,  176 => 85,  172 => 84,  169 => 83,  167 => 82,  162 => 79,  155 => 77,  152 => 76,  144 => 71,  139 => 70,  137 => 69,  132 => 66,  126 => 63,  118 => 60,  114 => 58,  108 => 54,  106 => 53,  88 => 37,  80 => 35,  73 => 33,  66 => 32,  64 => 31,  58 => 28,  38 => 12,  36 => 6,  32 => 5,  26 => 1,);
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
/*             <li class="active"><a href="{{ path('accueil') }}">SPORTOGETHER <span class="sr-only">(current)</span></a></li>*/
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
/* */
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
