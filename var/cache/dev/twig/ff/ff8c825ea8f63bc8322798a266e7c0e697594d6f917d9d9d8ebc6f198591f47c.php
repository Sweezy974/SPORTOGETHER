<?php

/* sportogetherBundle:Default:index.html.twig */
class __TwigTemplate_67992dcaf2191e4249471fc1ec8c761b7b8678c952852a63540604f53a4a61fe extends Twig_Template
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
        $__internal_cd050bdb6dd5e1b6fd320a4f24dddbcbba0f1d682f8d05930e32efbbd0c7204e = $this->env->getExtension("native_profiler");
        $__internal_cd050bdb6dd5e1b6fd320a4f24dddbcbba0f1d682f8d05930e32efbbd0c7204e->enter($__internal_cd050bdb6dd5e1b6fd320a4f24dddbcbba0f1d682f8d05930e32efbbd0c7204e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "sportogetherBundle:Default:index.html.twig"));

        // line 1
        $this->loadTemplate("FOSUserBundle::layout.html.twig", "sportogetherBundle:Default:index.html.twig", 1)->display($context);
        // line 2
        echo "

<form class=\"container\" >
  <div class=\"container\">
    <div class=\"row\">
      <div class=\"col-md-8 col-md-offset-2\">
        <h1 class=\"text-center\">Ils sont inscrits</h1>
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
        
        $__internal_cd050bdb6dd5e1b6fd320a4f24dddbcbba0f1d682f8d05930e32efbbd0c7204e->leave($__internal_cd050bdb6dd5e1b6fd320a4f24dddbcbba0f1d682f8d05930e32efbbd0c7204e_prof);

    }

    public function getTemplateName()
    {
        return "sportogetherBundle:Default:index.html.twig";
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
/*         <h1 class="text-center">Ils sont inscrits</h1>*/
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
