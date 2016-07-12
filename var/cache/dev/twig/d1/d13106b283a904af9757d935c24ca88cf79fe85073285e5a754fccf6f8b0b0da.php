<?php

/* FOSUserBundle:Registration:register.html.twig */
class __TwigTemplate_08c080568b42e6bbd4b32c39850c1b5e4db836c55d68ccc3a38c7da89d4706d8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Registration:register.html.twig", 1);
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
        $__internal_f1ab76b7911310ba40dde3e4c3816dacb6155ca74cf34e87c8ccf09493ea79e6 = $this->env->getExtension("native_profiler");
        $__internal_f1ab76b7911310ba40dde3e4c3816dacb6155ca74cf34e87c8ccf09493ea79e6->enter($__internal_f1ab76b7911310ba40dde3e4c3816dacb6155ca74cf34e87c8ccf09493ea79e6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:register.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f1ab76b7911310ba40dde3e4c3816dacb6155ca74cf34e87c8ccf09493ea79e6->leave($__internal_f1ab76b7911310ba40dde3e4c3816dacb6155ca74cf34e87c8ccf09493ea79e6_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_92deea7d328406fc3e9c2445744064c04376a86de0034d62dad83369bbf60102 = $this->env->getExtension("native_profiler");
        $__internal_92deea7d328406fc3e9c2445744064c04376a86de0034d62dad83369bbf60102->enter($__internal_92deea7d328406fc3e9c2445744064c04376a86de0034d62dad83369bbf60102_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Registration:register_content.html.twig", "FOSUserBundle:Registration:register.html.twig", 4)->display($context);
        
        $__internal_92deea7d328406fc3e9c2445744064c04376a86de0034d62dad83369bbf60102->leave($__internal_92deea7d328406fc3e9c2445744064c04376a86de0034d62dad83369bbf60102_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:register.html.twig";
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
/* {% include "FOSUserBundle:Registration:register_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
