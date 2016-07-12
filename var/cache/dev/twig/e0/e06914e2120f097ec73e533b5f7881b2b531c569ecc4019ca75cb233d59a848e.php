<?php

/* FOSUserBundle:Profile:edit_content.html.twig */
class __TwigTemplate_4459798976eee9d30445bdb8d21ca874e8bf75f7e6f4ddf531bf0a8e9d4ff4d4 extends Twig_Template
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
        $__internal_399d1ce4367b1f5e7b491fae4ed8c8581e3ec6d237222e11df4bae4d78a7d0cb = $this->env->getExtension("native_profiler");
        $__internal_399d1ce4367b1f5e7b491fae4ed8c8581e3ec6d237222e11df4bae4d78a7d0cb->enter($__internal_399d1ce4367b1f5e7b491fae4ed8c8581e3ec6d237222e11df4bae4d78a7d0cb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:edit_content.html.twig"));

        // line 2
        echo "

<div class=\"col-md-offset-4 col-md-4\">
  <div class=\"col-md-12\">

    ";
        // line 7
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start', array("action" => $this->env->getExtension('routing')->getPath("fos_user_profile_edit"), "attr" => array("class" => "fos_user_profile_edit")));
        echo "
    ";
        // line 8
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        echo "
    ";
        // line 9
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "
  </div>
  <div class=\"col-md-12\">
    <input type=\"submit\" value=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("profile.edit.submit", array(), "FOSUserBundle"), "html", null, true);
        echo "\" />
  </div>
</div>
";
        
        $__internal_399d1ce4367b1f5e7b491fae4ed8c8581e3ec6d237222e11df4bae4d78a7d0cb->leave($__internal_399d1ce4367b1f5e7b491fae4ed8c8581e3ec6d237222e11df4bae4d78a7d0cb_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Profile:edit_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  43 => 12,  37 => 9,  33 => 8,  29 => 7,  22 => 2,);
    }
}
/* {% trans_default_domain 'FOSUserBundle' %}*/
/* */
/* */
/* <div class="col-md-offset-4 col-md-4">*/
/*   <div class="col-md-12">*/
/* */
/*     {{ form_start(form, { 'action': path('fos_user_profile_edit'), 'attr': { 'class': 'fos_user_profile_edit' } }) }}*/
/*     {{ form_widget(form) }}*/
/*     {{ form_end(form) }}*/
/*   </div>*/
/*   <div class="col-md-12">*/
/*     <input type="submit" value="{{ 'profile.edit.submit'|trans }}" />*/
/*   </div>*/
/* </div>*/
/* */
