<?php

/* FOSUserBundle:Security:login.html.twig */
class __TwigTemplate_bba1baabe75b582969289d9369dd8210c242aa16ea5f014d23da9bea94f35f1c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Security:login.html.twig", 1);
        $this->blocks = array(
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "FOSUserBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_617248f71251b26ba918747ae14b0bbef5ab0359ba0b1e6f2364c0eddb42be04 = $this->env->getExtension("native_profiler");
        $__internal_617248f71251b26ba918747ae14b0bbef5ab0359ba0b1e6f2364c0eddb42be04->enter($__internal_617248f71251b26ba918747ae14b0bbef5ab0359ba0b1e6f2364c0eddb42be04_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Security:login.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_617248f71251b26ba918747ae14b0bbef5ab0359ba0b1e6f2364c0eddb42be04->leave($__internal_617248f71251b26ba918747ae14b0bbef5ab0359ba0b1e6f2364c0eddb42be04_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_b2b45526353b3cf957403f615927a7e03185cdf832bce74e4b0f73ba3f363389 = $this->env->getExtension("native_profiler");
        $__internal_b2b45526353b3cf957403f615927a7e03185cdf832bce74e4b0f73ba3f363389->enter($__internal_b2b45526353b3cf957403f615927a7e03185cdf832bce74e4b0f73ba3f363389_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        if ((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error"))) {
            // line 7
            echo "    <div>";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($this->getAttribute((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error")), "messageKey", array()), $this->getAttribute((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error")), "messageData", array()), "security"), "html", null, true);
            echo "</div>
";
        }
        // line 9
        echo "
<form class=\"col-md-offset-4 col-md-4\" action=\"";
        // line 10
        echo $this->env->getExtension('routing')->getPath("fos_user_security_check");
        echo "\" method=\"post\">
  <div class=\"col-md-12 text-center\">
    <input type=\"hidden\" name=\"_csrf_token\" value=\"";
        // line 12
        echo twig_escape_filter($this->env, (isset($context["csrf_token"]) ? $context["csrf_token"] : $this->getContext($context, "csrf_token")), "html", null, true);
        echo "\" />

    <label for=\"username\">";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("security.login.username", array(), "FOSUserBundle"), "html", null, true);
        echo "</label>
    <input class=\"form-control\" type=\"text\" id=\"username\" name=\"_username\" value=\"";
        // line 15
        echo twig_escape_filter($this->env, (isset($context["last_username"]) ? $context["last_username"] : $this->getContext($context, "last_username")), "html", null, true);
        echo "\" required=\"required\" />

  </div>
<div class=\"col-md-12 text-center\">
  <label for=\"password\">";
        // line 19
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("security.login.password", array(), "FOSUserBundle"), "html", null, true);
        echo "</label>
  <input class=\"form-control\" type=\"password\" id=\"password\" name=\"_password\" required=\"required\" />

  <input type=\"checkbox\" id=\"remember_me\" name=\"_remember_me\" value=\"on\" />
  <label  for=\"remember_me\">";
        // line 23
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("security.login.remember_me", array(), "FOSUserBundle"), "html", null, true);
        echo "</label>

</div>

<div class=\"col-md-12 text-center\">

  <input class=\"btn-primary\" type=\"submit\"  name=\"_submit\" value=\"";
        // line 29
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("security.login.submit", array(), "FOSUserBundle"), "html", null, true);
        echo "\" />
</div>
</form>
";
        
        $__internal_b2b45526353b3cf957403f615927a7e03185cdf832bce74e4b0f73ba3f363389->leave($__internal_b2b45526353b3cf957403f615927a7e03185cdf832bce74e4b0f73ba3f363389_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Security:login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  88 => 29,  79 => 23,  72 => 19,  65 => 15,  61 => 14,  56 => 12,  51 => 10,  48 => 9,  42 => 7,  40 => 6,  34 => 5,  11 => 1,);
    }
}
/* {% extends "FOSUserBundle::layout.html.twig" %}*/
/* */
/* {% trans_default_domain 'FOSUserBundle' %}*/
/* */
/* {% block fos_user_content %}*/
/* {% if error %}*/
/*     <div>{{ error.messageKey|trans(error.messageData, 'security') }}</div>*/
/* {% endif %}*/
/* */
/* <form class="col-md-offset-4 col-md-4" action="{{ path("fos_user_security_check") }}" method="post">*/
/*   <div class="col-md-12 text-center">*/
/*     <input type="hidden" name="_csrf_token" value="{{ csrf_token }}" />*/
/* */
/*     <label for="username">{{ 'security.login.username'|trans }}</label>*/
/*     <input class="form-control" type="text" id="username" name="_username" value="{{ last_username }}" required="required" />*/
/* */
/*   </div>*/
/* <div class="col-md-12 text-center">*/
/*   <label for="password">{{ 'security.login.password'|trans }}</label>*/
/*   <input class="form-control" type="password" id="password" name="_password" required="required" />*/
/* */
/*   <input type="checkbox" id="remember_me" name="_remember_me" value="on" />*/
/*   <label  for="remember_me">{{ 'security.login.remember_me'|trans }}</label>*/
/* */
/* </div>*/
/* */
/* <div class="col-md-12 text-center">*/
/* */
/*   <input class="btn-primary" type="submit"  name="_submit" value="{{ 'security.login.submit'|trans }}" />*/
/* </div>*/
/* </form>*/
/* {% endblock fos_user_content %}*/
/* */
