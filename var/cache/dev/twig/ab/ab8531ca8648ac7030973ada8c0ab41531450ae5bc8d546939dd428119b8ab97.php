<?php

/* FOSUserBundle:Profile:show_content.html.twig */
class __TwigTemplate_443d4f95e9ac495368b154284b1647720e2615acbbd596a94e5d352ab4e3dfec extends Twig_Template
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
        $__internal_a0f24003af5cb305f76b16da24ea3061ac55638be789c9a307e93fcf8bddf154 = $this->env->getExtension("native_profiler");
        $__internal_a0f24003af5cb305f76b16da24ea3061ac55638be789c9a307e93fcf8bddf154->enter($__internal_a0f24003af5cb305f76b16da24ea3061ac55638be789c9a307e93fcf8bddf154_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:show_content.html.twig"));

        // line 2
        echo "
<form class=\" col-md-offset-4 col-md-4 text-center\">

  <div class=\"col-md-12\">
    <h3>";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("profile.show.username", array(), "FOSUserBundle"), "html", null, true);
        echo ": ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "html", null, true);
        echo "</h3>
  </div>

  <div class=\"col-md-12\">
    <h3>";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("profile.show.email", array(), "FOSUserBundle"), "html", null, true);
        echo ": ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "email", array()), "html", null, true);
        echo "</h3>
  </div>

  <div class=\"col-md-12\">
    <a href=\"";
        // line 14
        echo $this->env->getExtension('routing')->getPath("fos_user_profile_edit");
        echo "\"><button class=\"btn-primary\" type=\"button\" name=\"button\">Modifier</button></a>
  </div>
</form>
";
        
        $__internal_a0f24003af5cb305f76b16da24ea3061ac55638be789c9a307e93fcf8bddf154->leave($__internal_a0f24003af5cb305f76b16da24ea3061ac55638be789c9a307e93fcf8bddf154_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Profile:show_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  46 => 14,  37 => 10,  28 => 6,  22 => 2,);
    }
}
/* {% trans_default_domain 'FOSUserBundle' %}*/
/* */
/* <form class=" col-md-offset-4 col-md-4 text-center">*/
/* */
/*   <div class="col-md-12">*/
/*     <h3>{{ 'profile.show.username'|trans }}: {{ user.username }}</h3>*/
/*   </div>*/
/* */
/*   <div class="col-md-12">*/
/*     <h3>{{ 'profile.show.email'|trans }}: {{ user.email }}</h3>*/
/*   </div>*/
/* */
/*   <div class="col-md-12">*/
/*     <a href="{{ path('fos_user_profile_edit') }}"><button class="btn-primary" type="button" name="button">Modifier</button></a>*/
/*   </div>*/
/* </form>*/
/* */
