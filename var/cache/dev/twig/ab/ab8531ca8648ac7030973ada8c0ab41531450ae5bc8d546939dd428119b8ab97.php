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
        $__internal_95fd2f4589a4bb22fe4b5520bfb7d9d5b929e8a07d8ca1f8a86d6972def09925 = $this->env->getExtension("native_profiler");
        $__internal_95fd2f4589a4bb22fe4b5520bfb7d9d5b929e8a07d8ca1f8a86d6972def09925->enter($__internal_95fd2f4589a4bb22fe4b5520bfb7d9d5b929e8a07d8ca1f8a86d6972def09925_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:show_content.html.twig"));

        // line 2
        echo "
<div class=\"fos_user_user_show\">
    <p>";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("profile.show.username", array(), "FOSUserBundle"), "html", null, true);
        echo ": ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "html", null, true);
        echo "</p>
    <p>";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("profile.show.email", array(), "FOSUserBundle"), "html", null, true);
        echo ": ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "email", array()), "html", null, true);
        echo "</p>
</div>
";
        
        $__internal_95fd2f4589a4bb22fe4b5520bfb7d9d5b929e8a07d8ca1f8a86d6972def09925->leave($__internal_95fd2f4589a4bb22fe4b5520bfb7d9d5b929e8a07d8ca1f8a86d6972def09925_prof);

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
        return array (  32 => 5,  26 => 4,  22 => 2,);
    }
}
/* {% trans_default_domain 'FOSUserBundle' %}*/
/* */
/* <div class="fos_user_user_show">*/
/*     <p>{{ 'profile.show.username'|trans }}: {{ user.username }}</p>*/
/*     <p>{{ 'profile.show.email'|trans }}: {{ user.email }}</p>*/
/* </div>*/
/* */
