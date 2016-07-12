<?php

/* FOSUserBundle:Profile:show.html.twig */
class __TwigTemplate_b45893e164628f841d5f3ee5cdba133c4cae3e450f7fe501007d7fa142c6d2aa extends Twig_Template
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
        $__internal_9e6dcb28a40baa6de80df17ec401709abee54fdd6d4936694f27dcf33312f294 = $this->env->getExtension("native_profiler");
        $__internal_9e6dcb28a40baa6de80df17ec401709abee54fdd6d4936694f27dcf33312f294->enter($__internal_9e6dcb28a40baa6de80df17ec401709abee54fdd6d4936694f27dcf33312f294_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9e6dcb28a40baa6de80df17ec401709abee54fdd6d4936694f27dcf33312f294->leave($__internal_9e6dcb28a40baa6de80df17ec401709abee54fdd6d4936694f27dcf33312f294_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_9e794fd41dac3f883975bba3056552c0805361609c0953c72ab97ce44b810b9d = $this->env->getExtension("native_profiler");
        $__internal_9e794fd41dac3f883975bba3056552c0805361609c0953c72ab97ce44b810b9d->enter($__internal_9e794fd41dac3f883975bba3056552c0805361609c0953c72ab97ce44b810b9d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Profile:show_content.html.twig", "FOSUserBundle:Profile:show.html.twig", 4)->display($context);
        
        $__internal_9e794fd41dac3f883975bba3056552c0805361609c0953c72ab97ce44b810b9d->leave($__internal_9e794fd41dac3f883975bba3056552c0805361609c0953c72ab97ce44b810b9d_prof);

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
