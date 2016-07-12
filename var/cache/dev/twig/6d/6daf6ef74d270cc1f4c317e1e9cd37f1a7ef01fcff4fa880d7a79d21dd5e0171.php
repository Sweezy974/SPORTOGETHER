<?php

/* FOSUserBundle:Profile:show_content.html.twig */
class __TwigTemplate_f6d87ed227258f147a6691309ffa4d207c18358f7f0247bc1298142d8e489468 extends Twig_Template
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
        $__internal_a177c9b921f7861804840a4f6f1e9a3d684b4d6f8ecb7abf872d1912bd6e9321 = $this->env->getExtension("native_profiler");
        $__internal_a177c9b921f7861804840a4f6f1e9a3d684b4d6f8ecb7abf872d1912bd6e9321->enter($__internal_a177c9b921f7861804840a4f6f1e9a3d684b4d6f8ecb7abf872d1912bd6e9321_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:show_content.html.twig"));

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
        
        $__internal_a177c9b921f7861804840a4f6f1e9a3d684b4d6f8ecb7abf872d1912bd6e9321->leave($__internal_a177c9b921f7861804840a4f6f1e9a3d684b4d6f8ecb7abf872d1912bd6e9321_prof);

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
