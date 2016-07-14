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
        $__internal_7867bef47cdeb7d06c449e00b11b9e67c2415a4ea7f690088ca746e1162452c3 = $this->env->getExtension("native_profiler");
        $__internal_7867bef47cdeb7d06c449e00b11b9e67c2415a4ea7f690088ca746e1162452c3->enter($__internal_7867bef47cdeb7d06c449e00b11b9e67c2415a4ea7f690088ca746e1162452c3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle::layout.html.twig"));

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
            <li class=\"dropdown\">
              <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\" role=\"button\" aria-haspopup=\"true\" aria-expanded=\"false\">Rencontre<span class=\"caret\"></span></a>
                <ul class=\"dropdown-menu\">
                ";
        // line 32
        if ($this->env->getExtension('security')->isGranted("IS_AUTHENTICATED_REMEMBERED")) {
            // line 33
            echo "                <li><a class=\"nav-link\" href=\"";
            echo $this->env->getExtension('routing')->getPath("RencontrePublic_new");
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Créer une rencontre", array(), "FOSUserBundle"), "html", null, true);
            echo "</a></li>
                ";
        }
        // line 35
        echo "                <li><a class=\"nav-link\" href=\"";
        echo $this->env->getExtension('routing')->getPath("RencontrePublic_show");
        echo "\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Participer à une rencontre", array(), "FOSUserBundle"), "html", null, true);
        echo "</a></li>
              </ul>
              </li>
            </ul>



          </div>
        </div>
        <!-- Brand and toggle get grouped for better mobile display -->



        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class=\"collapse navbar-collapse\" id=\"bs-example-navbar-collapse-1\">


          <ul class=\"nav navbar-nav navbar-right\" >

            <li class=\"nav-item\">
              ";
        // line 55
        if ($this->env->getExtension('security')->isGranted("IS_AUTHENTICATED_REMEMBERED")) {
            // line 56
            echo "


            ";
        } else {
            // line 60
            echo "            <!--
            <a class=\"nav-link\"
            href=\"";
            // line 62
            echo $this->env->getExtension('routing')->getPath("fos_user_registration_register");
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Inscription", array(), "FOSUserBundle"), "html", null, true);
            echo "</a>
          -->
          ";
        }
        // line 65
        echo "        </li>

        <li class=\"nav-item\">
          ";
        // line 68
        if ($this->env->getExtension('security')->isGranted("IS_AUTHENTICATED_REMEMBERED")) {
            // line 69
            echo "          <a class=\"nav-link\" href=\"";
            echo $this->env->getExtension('routing')->getPath("fos_user_profile_show");
            echo "\">
          Connecté en tant que: ";
            // line 70
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "username", array()), "html", null, true);
            echo "</a>



            ";
        } else {
            // line 75
            echo "            <a class=\"nav-link\"
            href=\"";
            // line 76
            echo $this->env->getExtension('routing')->getPath("fos_user_security_login");
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Connexion", array(), "FOSUserBundle"), "html", null, true);
            echo "</a>
            ";
        }
        // line 78
        echo "          </li>
          <li class=\"nav-item\">

            ";
        // line 81
        if ($this->env->getExtension('security')->isGranted("IS_AUTHENTICATED_REMEMBERED")) {
            // line 82
            echo "            <a class=\"nav-link\"
            href=\"";
            // line 83
            echo $this->env->getExtension('routing')->getPath("fos_user_security_logout");
            echo "\">
            ";
            // line 84
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Se deconnecter", array(), "FOSUserBundle"), "html", null, true);
            echo "
          </a>
          ";
        } else {
            // line 87
            echo "          <!--
          <a class=\"nav-link\"
          href=\"";
            // line 89
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
        // line 95
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
        // line 141
        $this->displayBlock('fos_user_content', $context, $blocks);
        // line 143
        echo "  </div>
  ";
        // line 144
        $this->displayBlock('javascript', $context, $blocks);
        // line 153
        echo "

</body>
</html>
";
        
        $__internal_7867bef47cdeb7d06c449e00b11b9e67c2415a4ea7f690088ca746e1162452c3->leave($__internal_7867bef47cdeb7d06c449e00b11b9e67c2415a4ea7f690088ca746e1162452c3_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_2fbd29ae2c9c4442e480d195eb831ac00604b7aa57f0ae5303bd0d4419f85a67 = $this->env->getExtension("native_profiler");
        $__internal_2fbd29ae2c9c4442e480d195eb831ac00604b7aa57f0ae5303bd0d4419f85a67->enter($__internal_2fbd29ae2c9c4442e480d195eb831ac00604b7aa57f0ae5303bd0d4419f85a67_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_2fbd29ae2c9c4442e480d195eb831ac00604b7aa57f0ae5303bd0d4419f85a67->leave($__internal_2fbd29ae2c9c4442e480d195eb831ac00604b7aa57f0ae5303bd0d4419f85a67_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_1381ceca8fc133ffedfe3c9d13baa046289278205c452452e6a67643adc6329c = $this->env->getExtension("native_profiler");
        $__internal_1381ceca8fc133ffedfe3c9d13baa046289278205c452452e6a67643adc6329c->enter($__internal_1381ceca8fc133ffedfe3c9d13baa046289278205c452452e6a67643adc6329c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

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
        
        $__internal_1381ceca8fc133ffedfe3c9d13baa046289278205c452452e6a67643adc6329c->leave($__internal_1381ceca8fc133ffedfe3c9d13baa046289278205c452452e6a67643adc6329c_prof);

    }

    // line 141
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_14649851db739c9de8e4ede473c639163405f7867d7e2a53bbdf6c3e86d62e7d = $this->env->getExtension("native_profiler");
        $__internal_14649851db739c9de8e4ede473c639163405f7867d7e2a53bbdf6c3e86d62e7d->enter($__internal_14649851db739c9de8e4ede473c639163405f7867d7e2a53bbdf6c3e86d62e7d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 142
        echo "    ";
        
        $__internal_14649851db739c9de8e4ede473c639163405f7867d7e2a53bbdf6c3e86d62e7d->leave($__internal_14649851db739c9de8e4ede473c639163405f7867d7e2a53bbdf6c3e86d62e7d_prof);

    }

    // line 144
    public function block_javascript($context, array $blocks = array())
    {
        $__internal_56571739ea2778eb07f5fe429a7a9a99d3b87933b3c49f3e31bb746690934ec2 = $this->env->getExtension("native_profiler");
        $__internal_56571739ea2778eb07f5fe429a7a9a99d3b87933b3c49f3e31bb746690934ec2->enter($__internal_56571739ea2778eb07f5fe429a7a9a99d3b87933b3c49f3e31bb746690934ec2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascript"));

        // line 145
        echo "  <script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bootstrap/js/bootstrap.min.js"), "html", null, true);
        echo "\" charset=\"utf-8\"></script>
  <script src=\"";
        // line 146
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bootstrap/js/jquery-2.1.4.js"), "html", null, true);
        echo "\" charset=\"utf-8\"></script>
  <script src=\"";
        // line 147
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bootstrap/js/jquery.js"), "html", null, true);
        echo "\" charset=\"utf-8\"></script>
  <script src=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js\"></script>
  <script src=\"";
        // line 149
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/script.js"), "html", null, true);
        echo "\"></script>
  <script src=\"//code.jquery.com/jquery.min.js\"></script>
  <script src=\"";
        // line 151
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
  ";
        
        $__internal_56571739ea2778eb07f5fe429a7a9a99d3b87933b3c49f3e31bb746690934ec2->leave($__internal_56571739ea2778eb07f5fe429a7a9a99d3b87933b3c49f3e31bb746690934ec2_prof);

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
        return array (  330 => 151,  325 => 149,  320 => 147,  316 => 146,  311 => 145,  305 => 144,  298 => 142,  292 => 141,  283 => 10,  279 => 9,  275 => 8,  270 => 7,  264 => 6,  252 => 5,  241 => 153,  239 => 144,  236 => 143,  234 => 141,  186 => 95,  175 => 89,  171 => 87,  165 => 84,  161 => 83,  158 => 82,  156 => 81,  151 => 78,  144 => 76,  141 => 75,  133 => 70,  128 => 69,  126 => 68,  121 => 65,  113 => 62,  109 => 60,  103 => 56,  101 => 55,  75 => 35,  67 => 33,  65 => 32,  58 => 28,  38 => 12,  36 => 6,  32 => 5,  26 => 1,);
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
/*             <li class="dropdown">*/
/*               <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Rencontre<span class="caret"></span></a>*/
/*                 <ul class="dropdown-menu">*/
/*                 {% if is_granted("IS_AUTHENTICATED_REMEMBERED") %}*/
/*                 <li><a class="nav-link" href="{{ path('RencontrePublic_new') }}">{{ 'Créer une rencontre'|trans({}, 'FOSUserBundle') }}</a></li>*/
/*                 {% endif %}*/
/*                 <li><a class="nav-link" href="{{ path('RencontrePublic_show') }}">{{ 'Participer à une rencontre'|trans({}, 'FOSUserBundle') }}</a></li>*/
/*               </ul>*/
/*               </li>*/
/*             </ul>*/
/* */
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
