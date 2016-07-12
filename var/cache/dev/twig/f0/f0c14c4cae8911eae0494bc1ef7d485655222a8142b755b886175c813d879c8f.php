<?php

/* FOSUserBundle:Profile:edit_content.html.twig */
class __TwigTemplate_19e3f99c69a072eeb395aecf4aa6039e8e9d4938d873a3ba553f8e3a181d5fad extends Twig_Template
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
        $__internal_9e948cde1f77d847bfb3d4e5a41308f63661187deb288eeb104ba2e65e29bb77 = $this->env->getExtension("native_profiler");
        $__internal_9e948cde1f77d847bfb3d4e5a41308f63661187deb288eeb104ba2e65e29bb77->enter($__internal_9e948cde1f77d847bfb3d4e5a41308f63661187deb288eeb104ba2e65e29bb77_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:edit_content.html.twig"));

        // line 2
        echo "

<div class=\"col-md-offset-4 col-md-4\">
";
        // line 5
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start', array("action" => $this->env->getExtension('routing')->getPath("fos_user_profile_edit"), "attr" => array("class" => "fos_user_profile_edit")));
        echo "
    ";
        // line 6
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        echo "
    <div>
        <input type=\"submit\" value=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("profile.edit.submit", array(), "FOSUserBundle"), "html", null, true);
        echo "\" />
    </div>
";
        // line 10
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "
</div>
";
        
        $__internal_9e948cde1f77d847bfb3d4e5a41308f63661187deb288eeb104ba2e65e29bb77->leave($__internal_9e948cde1f77d847bfb3d4e5a41308f63661187deb288eeb104ba2e65e29bb77_prof);

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
        return array (  41 => 10,  36 => 8,  31 => 6,  27 => 5,  22 => 2,);
    }
}
/* {% trans_default_domain 'FOSUserBundle' %}*/
/* */
/* */
/* <div class="col-md-offset-4 col-md-4">*/
/* {{ form_start(form, { 'action': path('fos_user_profile_edit'), 'attr': { 'class': 'fos_user_profile_edit' } }) }}*/
/*     {{ form_widget(form) }}*/
/*     <div>*/
/*         <input type="submit" value="{{ 'profile.edit.submit'|trans }}" />*/
/*     </div>*/
/* {{ form_end(form) }}*/
/* </div>*/
/* */
