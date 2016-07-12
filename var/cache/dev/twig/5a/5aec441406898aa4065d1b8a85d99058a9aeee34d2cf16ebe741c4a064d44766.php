<?php

/* FOSUserBundle:Profile:edit.html.twig */
class __TwigTemplate_a1850ad755dac26826aaf87e903a6a1003b786e6f9778fd05e09a84ccc83d52d extends Twig_Template
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
        $__internal_3fb6a959317d09bc5faef3345d9940afa6a5e3551f22dfead0507a742457abe5 = $this->env->getExtension("native_profiler");
        $__internal_3fb6a959317d09bc5faef3345d9940afa6a5e3551f22dfead0507a742457abe5->enter($__internal_3fb6a959317d09bc5faef3345d9940afa6a5e3551f22dfead0507a742457abe5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3fb6a959317d09bc5faef3345d9940afa6a5e3551f22dfead0507a742457abe5->leave($__internal_3fb6a959317d09bc5faef3345d9940afa6a5e3551f22dfead0507a742457abe5_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_55bd60f86ed5294ad680c461c01d476f675f1a2009218a51bd5c8c5ad98d7a0b = $this->env->getExtension("native_profiler");
        $__internal_55bd60f86ed5294ad680c461c01d476f675f1a2009218a51bd5c8c5ad98d7a0b->enter($__internal_55bd60f86ed5294ad680c461c01d476f675f1a2009218a51bd5c8c5ad98d7a0b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Profile:edit_content.html.twig", "FOSUserBundle:Profile:edit.html.twig", 4)->display($context);
        
        $__internal_55bd60f86ed5294ad680c461c01d476f675f1a2009218a51bd5c8c5ad98d7a0b->leave($__internal_55bd60f86ed5294ad680c461c01d476f675f1a2009218a51bd5c8c5ad98d7a0b_prof);

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
