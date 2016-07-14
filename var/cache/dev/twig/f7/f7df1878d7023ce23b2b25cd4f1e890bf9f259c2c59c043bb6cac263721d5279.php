<?php

/* FOSUserBundle:Profile:show.html.twig */
class __TwigTemplate_72d6f73a2888bb697d01d624229393edf28af470918ac48c77eff92310b3cbbe extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Profile:show.html.twig", 1);
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
        $__internal_392991c475f0fd5f9c9d615b685e746d321a84e154ff711c033eba2b8eea7db5 = $this->env->getExtension("native_profiler");
        $__internal_392991c475f0fd5f9c9d615b685e746d321a84e154ff711c033eba2b8eea7db5->enter($__internal_392991c475f0fd5f9c9d615b685e746d321a84e154ff711c033eba2b8eea7db5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_392991c475f0fd5f9c9d615b685e746d321a84e154ff711c033eba2b8eea7db5->leave($__internal_392991c475f0fd5f9c9d615b685e746d321a84e154ff711c033eba2b8eea7db5_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_bbbe9e17afb2abaa99df50ab25a200d2b928f948fe3ac0dcfc810aa72d36e9bd = $this->env->getExtension("native_profiler");
        $__internal_bbbe9e17afb2abaa99df50ab25a200d2b928f948fe3ac0dcfc810aa72d36e9bd->enter($__internal_bbbe9e17afb2abaa99df50ab25a200d2b928f948fe3ac0dcfc810aa72d36e9bd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Profile:show_content.html.twig", "FOSUserBundle:Profile:show.html.twig", 4)->display($context);
        
        $__internal_bbbe9e17afb2abaa99df50ab25a200d2b928f948fe3ac0dcfc810aa72d36e9bd->leave($__internal_bbbe9e17afb2abaa99df50ab25a200d2b928f948fe3ac0dcfc810aa72d36e9bd_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Profile:show.html.twig";
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
/* {% include "FOSUserBundle:Profile:show_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
