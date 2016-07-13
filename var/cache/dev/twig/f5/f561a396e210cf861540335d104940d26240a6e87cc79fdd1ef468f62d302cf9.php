<?php

/* FOSUserBundle:Profile:edit.html.twig */
class __TwigTemplate_1050eb719f503f7a65792e15029ec76dfe7393490537827553bf11e49cc057eb extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Profile:edit.html.twig", 1);
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
        $__internal_03c16035930b98f316054df49956fe07211362b5d4159f2a901746e61c51af09 = $this->env->getExtension("native_profiler");
        $__internal_03c16035930b98f316054df49956fe07211362b5d4159f2a901746e61c51af09->enter($__internal_03c16035930b98f316054df49956fe07211362b5d4159f2a901746e61c51af09_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_03c16035930b98f316054df49956fe07211362b5d4159f2a901746e61c51af09->leave($__internal_03c16035930b98f316054df49956fe07211362b5d4159f2a901746e61c51af09_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_36e3bc62ecef1311ecf04eda5d44bae73df43d2bbadf8c29b35475516e642bdc = $this->env->getExtension("native_profiler");
        $__internal_36e3bc62ecef1311ecf04eda5d44bae73df43d2bbadf8c29b35475516e642bdc->enter($__internal_36e3bc62ecef1311ecf04eda5d44bae73df43d2bbadf8c29b35475516e642bdc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Profile:edit_content.html.twig", "FOSUserBundle:Profile:edit.html.twig", 4)->display($context);
        
        $__internal_36e3bc62ecef1311ecf04eda5d44bae73df43d2bbadf8c29b35475516e642bdc->leave($__internal_36e3bc62ecef1311ecf04eda5d44bae73df43d2bbadf8c29b35475516e642bdc_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Profile:edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends "FOSUserBundle::layout.html.twig" %}*/
/* */
/* {% block fos_user_content %}*/
/* {% include "FOSUserBundle:Profile:edit_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
