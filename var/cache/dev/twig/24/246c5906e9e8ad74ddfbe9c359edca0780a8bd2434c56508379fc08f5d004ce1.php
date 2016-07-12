<?php

/* rencontrePublic-show.html.twig */
class __TwigTemplate_e1625609ce8f4cf5c13a4d95020c77b2afcf1e822eaf3443dcdcb6f41edbc086 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_149a0a4b212a74657db553efd43852478fad65b8c15dcf60d4e3f372d5b6da88 = $this->env->getExtension("native_profiler");
        $__internal_149a0a4b212a74657db553efd43852478fad65b8c15dcf60d4e3f372d5b6da88->enter($__internal_149a0a4b212a74657db553efd43852478fad65b8c15dcf60d4e3f372d5b6da88_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "rencontrePublic-show.html.twig"));

        // line 1
        $this->loadTemplate("FOSUserBundle::layout.html.twig", "rencontrePublic-show.html.twig", 1)->display($context);
        // line 2
        echo "

<form class=\"container\" >
  <div class=\"container\">
    <div class=\"row\">
      <div class=\"col-md-8 col-md-offset-2\">
        <h1 class=\"text-center\">Liste des rencontres Publics</h1>
      </div>
    </div>
    <div class=\"col-md-12 text-center\">
      <h4 class=\"col-md-2\">Nom du groupe </h4>
      <h4 class=\"col-md-2\">description </h4>
      <h4 class=\"col-md-2\">Lieu </h4>
      <h4 class=\"col-md-2\">Date </h4>
      <h4 class=\"col-md-2\">Heure </h4>
      <h4 class=\"col-md-1\"><i class=\"fa fa-users\"></i></h4>
      <h4 class=\"col-md-1\"><i class=\"fa fa-child\"></i></h4>




      ";
        // line 23
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($context["rencontrePublic"]);
        foreach ($context['_seq'] as $context["_key"] => $context["rencontrePublic"]) {
            // line 24
            echo "
      <div class=\"col-md-2\">";
            // line 25
            echo twig_escape_filter($this->env, $this->getAttribute($context["rencontrePublic"], "nomGroupe", array()), "html", null, true);
            echo "</div>
      <div class=\"col-md-2\">";
            // line 26
            echo twig_escape_filter($this->env, $this->getAttribute($context["rencontrePublic"], "description", array()), "html", null, true);
            echo "</div>
      <div class=\"col-md-2\">";
            // line 27
            echo twig_escape_filter($this->env, $this->getAttribute($context["rencontrePublic"], "lieu", array()), "html", null, true);
            echo "</div>
      <div class=\"col-md-2\">";
            // line 28
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["rencontrePublic"], "date", array()), "d/m/Y"), "html", null, true);
            echo "</div>
      <div class=\"col-md-2\">";
            // line 29
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["rencontrePublic"], "heure", array()), "h:m:s"), "html", null, true);
            echo "</div>
      <div class=\"col-md-1\"><a href=\"#\">MEMBRES</a></div>
      <div class=\"col-md-1\"><a href=\"#\">PARTICIPER</a></div>

      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['rencontrePublic'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 34
        echo "    </div>
  </div>
</form>
";
        
        $__internal_149a0a4b212a74657db553efd43852478fad65b8c15dcf60d4e3f372d5b6da88->leave($__internal_149a0a4b212a74657db553efd43852478fad65b8c15dcf60d4e3f372d5b6da88_prof);

    }

    public function getTemplateName()
    {
        return "rencontrePublic-show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  81 => 34,  70 => 29,  66 => 28,  62 => 27,  58 => 26,  54 => 25,  51 => 24,  47 => 23,  24 => 2,  22 => 1,);
    }
}
/* {% include 'FOSUserBundle::layout.html.twig' %}*/
/* */
/* */
/* <form class="container" >*/
/*   <div class="container">*/
/*     <div class="row">*/
/*       <div class="col-md-8 col-md-offset-2">*/
/*         <h1 class="text-center">Liste des rencontres Publics</h1>*/
/*       </div>*/
/*     </div>*/
/*     <div class="col-md-12 text-center">*/
/*       <h4 class="col-md-2">Nom du groupe </h4>*/
/*       <h4 class="col-md-2">description </h4>*/
/*       <h4 class="col-md-2">Lieu </h4>*/
/*       <h4 class="col-md-2">Date </h4>*/
/*       <h4 class="col-md-2">Heure </h4>*/
/*       <h4 class="col-md-1"><i class="fa fa-users"></i></h4>*/
/*       <h4 class="col-md-1"><i class="fa fa-child"></i></h4>*/
/* */
/* */
/* */
/* */
/*       {% for rencontrePublic in rencontrePublic %}*/
/* */
/*       <div class="col-md-2">{{ rencontrePublic.nomGroupe }}</div>*/
/*       <div class="col-md-2">{{ rencontrePublic.description }}</div>*/
/*       <div class="col-md-2">{{ rencontrePublic.lieu }}</div>*/
/*       <div class="col-md-2">{{ rencontrePublic.date|date("d/m/Y")}}</div>*/
/*       <div class="col-md-2">{{ rencontrePublic.heure|date("h:m:s")}}</div>*/
/*       <div class="col-md-1"><a href="#">MEMBRES</a></div>*/
/*       <div class="col-md-1"><a href="#">PARTICIPER</a></div>*/
/* */
/*       {% endfor %}*/
/*     </div>*/
/*   </div>*/
/* </form>*/
/* */
