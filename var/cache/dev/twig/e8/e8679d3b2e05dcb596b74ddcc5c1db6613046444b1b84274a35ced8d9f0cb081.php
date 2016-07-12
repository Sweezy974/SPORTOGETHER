<?php

/* FOSUserBundle:Registration:register.html.twig */
class __TwigTemplate_762a872de212c5b30ecccb3469c267daa954dab5acd8927bac6d5663c3e95075 extends Twig_Template
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
        $__internal_f73b5c2fc20dba869243f867734d64912dfd5e69edd90f7a36baac72cc0f4406 = $this->env->getExtension("native_profiler");
        $__internal_f73b5c2fc20dba869243f867734d64912dfd5e69edd90f7a36baac72cc0f4406->enter($__internal_f73b5c2fc20dba869243f867734d64912dfd5e69edd90f7a36baac72cc0f4406_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:register.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f73b5c2fc20dba869243f867734d64912dfd5e69edd90f7a36baac72cc0f4406->leave($__internal_f73b5c2fc20dba869243f867734d64912dfd5e69edd90f7a36baac72cc0f4406_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_8dab6de0837e60cfc621620a6bca418b78ce4d34b8096f667781c1006678d7c8 = $this->env->getExtension("native_profiler");
        $__internal_8dab6de0837e60cfc621620a6bca418b78ce4d34b8096f667781c1006678d7c8->enter($__internal_8dab6de0837e60cfc621620a6bca418b78ce4d34b8096f667781c1006678d7c8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Registration:register_content.html.twig", "FOSUserBundle:Registration:register.html.twig", 4)->display($context);
        
        $__internal_8dab6de0837e60cfc621620a6bca418b78ce4d34b8096f667781c1006678d7c8->leave($__internal_8dab6de0837e60cfc621620a6bca418b78ce4d34b8096f667781c1006678d7c8_prof);

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
