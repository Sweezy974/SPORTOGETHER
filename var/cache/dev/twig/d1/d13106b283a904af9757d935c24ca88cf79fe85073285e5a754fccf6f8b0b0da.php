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
        $__internal_fa6c39d53d1baaa61daae9d9f1dc167044a30609691d9d6eb0c6087fa6cf5a41 = $this->env->getExtension("native_profiler");
        $__internal_fa6c39d53d1baaa61daae9d9f1dc167044a30609691d9d6eb0c6087fa6cf5a41->enter($__internal_fa6c39d53d1baaa61daae9d9f1dc167044a30609691d9d6eb0c6087fa6cf5a41_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:register.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_fa6c39d53d1baaa61daae9d9f1dc167044a30609691d9d6eb0c6087fa6cf5a41->leave($__internal_fa6c39d53d1baaa61daae9d9f1dc167044a30609691d9d6eb0c6087fa6cf5a41_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_a55174bef7bf549547d3d394e4c962a3a5ef589316670da9926f51fde696bb34 = $this->env->getExtension("native_profiler");
        $__internal_a55174bef7bf549547d3d394e4c962a3a5ef589316670da9926f51fde696bb34->enter($__internal_a55174bef7bf549547d3d394e4c962a3a5ef589316670da9926f51fde696bb34_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Registration:register_content.html.twig", "FOSUserBundle:Registration:register.html.twig", 4)->display($context);
        
        $__internal_a55174bef7bf549547d3d394e4c962a3a5ef589316670da9926f51fde696bb34->leave($__internal_a55174bef7bf549547d3d394e4c962a3a5ef589316670da9926f51fde696bb34_prof);

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
