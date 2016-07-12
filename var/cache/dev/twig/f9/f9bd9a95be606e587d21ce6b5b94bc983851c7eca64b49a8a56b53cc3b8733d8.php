<?php

/* liste-membre.html.twig */
class __TwigTemplate_b83876ffdb181067d86e89986accec9e86c191bcd87a7fcd65cb73b182c3c8c6 extends Twig_Template
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
        $__internal_6326bb0b481e472076dadb6bbb38ff7289c3ea36865335ef80cbdb285d18c818 = $this->env->getExtension("native_profiler");
        $__internal_6326bb0b481e472076dadb6bbb38ff7289c3ea36865335ef80cbdb285d18c818->enter($__internal_6326bb0b481e472076dadb6bbb38ff7289c3ea36865335ef80cbdb285d18c818_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "liste-membre.html.twig"));

        // line 1
        $this->loadTemplate("FOSUserBundle::layout.html.twig", "liste-membre.html.twig", 1)->display($context);
        // line 2
        echo "

<form class=\"container\" >
  <div class=\"container\">
    <div class=\"row\">
      <div class=\"col-md-8 col-md-offset-2\">
        <h1 class=\"text-center\">Les inscrits</h1>
      </div>
    </div>
    <div class=\"col-md-12 text-center\">
      <h4 class=\"col-md-3\">Pseudo </h4>
      <h4 class=\"col-md-3\">Prenom </h4>
      <h4 class=\"col-md-3\">Sexe </h4>
      <h4 class=\"col-md-3\">Sport pratiqué </h4>





      ";
        // line 21
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($context["user"]);
        foreach ($context['_seq'] as $context["_key"] => $context["user"]) {
            // line 22
            echo "
      <div class=\"col-md-3\">";
            // line 23
            echo twig_escape_filter($this->env, $this->getAttribute($context["user"], "username", array()), "html", null, true);
            echo "</div>
      <div class=\"col-md-3\">";
            // line 24
            echo twig_escape_filter($this->env, $this->getAttribute($context["user"], "prenom", array()), "html", null, true);
            echo "</div>
      <div class=\"col-md-3\">";
            // line 25
            echo twig_escape_filter($this->env, $this->getAttribute($context["user"], "sexe", array()), "html", null, true);
            echo "</div>
      <div class=\"col-md-3\">";
            // line 26
            echo twig_escape_filter($this->env, $this->getAttribute($context["user"], "sport", array()), "html", null, true);
            echo "</div>


      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['user'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 30
        echo "    </div>
  </div>
</form>
";
        
        $__internal_6326bb0b481e472076dadb6bbb38ff7289c3ea36865335ef80cbdb285d18c818->leave($__internal_6326bb0b481e472076dadb6bbb38ff7289c3ea36865335ef80cbdb285d18c818_prof);

    }

    public function getTemplateName()
    {
        return "liste-membre.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  74 => 30,  64 => 26,  60 => 25,  56 => 24,  52 => 23,  49 => 22,  45 => 21,  24 => 2,  22 => 1,);
    }
}
/* {% include 'FOSUserBundle::layout.html.twig' %}*/
/* */
/* */
/* <form class="container" >*/
/*   <div class="container">*/
/*     <div class="row">*/
/*       <div class="col-md-8 col-md-offset-2">*/
/*         <h1 class="text-center">Les inscrits</h1>*/
/*       </div>*/
/*     </div>*/
/*     <div class="col-md-12 text-center">*/
/*       <h4 class="col-md-3">Pseudo </h4>*/
/*       <h4 class="col-md-3">Prenom </h4>*/
/*       <h4 class="col-md-3">Sexe </h4>*/
/*       <h4 class="col-md-3">Sport pratiqué </h4>*/
/* */
/* */
/* */
/* */
/* */
/*       {% for user in user %}*/
/* */
/*       <div class="col-md-3">{{ user.username }}</div>*/
/*       <div class="col-md-3">{{ user.prenom }}</div>*/
/*       <div class="col-md-3">{{ user.sexe}}</div>*/
/*       <div class="col-md-3">{{ user.sport}}</div>*/
/* */
/* */
/*       {% endfor %}*/
/*     </div>*/
/*   </div>*/
/* </form>*/
/* */
