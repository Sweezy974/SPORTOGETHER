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
        $__internal_273f88381a482e1a78c4d77f990b52bf355ce496e6497996dce38fa5ee51db83 = $this->env->getExtension("native_profiler");
        $__internal_273f88381a482e1a78c4d77f990b52bf355ce496e6497996dce38fa5ee51db83->enter($__internal_273f88381a482e1a78c4d77f990b52bf355ce496e6497996dce38fa5ee51db83_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_273f88381a482e1a78c4d77f990b52bf355ce496e6497996dce38fa5ee51db83->leave($__internal_273f88381a482e1a78c4d77f990b52bf355ce496e6497996dce38fa5ee51db83_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_f0818d50c9e92fc3ab33c0681f0e74f80858ae9e6856bfede600171f5fe1db3a = $this->env->getExtension("native_profiler");
        $__internal_f0818d50c9e92fc3ab33c0681f0e74f80858ae9e6856bfede600171f5fe1db3a->enter($__internal_f0818d50c9e92fc3ab33c0681f0e74f80858ae9e6856bfede600171f5fe1db3a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Profile:edit_content.html.twig", "FOSUserBundle:Profile:edit.html.twig", 4)->display($context);
        
        $__internal_f0818d50c9e92fc3ab33c0681f0e74f80858ae9e6856bfede600171f5fe1db3a->leave($__internal_f0818d50c9e92fc3ab33c0681f0e74f80858ae9e6856bfede600171f5fe1db3a_prof);

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
