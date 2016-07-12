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
        $__internal_40fbc624cee33f90ad9764ee541dec086c5b64bcf41710fd8fe749750f66bb8c = $this->env->getExtension("native_profiler");
        $__internal_40fbc624cee33f90ad9764ee541dec086c5b64bcf41710fd8fe749750f66bb8c->enter($__internal_40fbc624cee33f90ad9764ee541dec086c5b64bcf41710fd8fe749750f66bb8c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_40fbc624cee33f90ad9764ee541dec086c5b64bcf41710fd8fe749750f66bb8c->leave($__internal_40fbc624cee33f90ad9764ee541dec086c5b64bcf41710fd8fe749750f66bb8c_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_2ae1ea52a125db86018a5b25c0e011e68fa981568f80bae5dc1aa645bcf83894 = $this->env->getExtension("native_profiler");
        $__internal_2ae1ea52a125db86018a5b25c0e011e68fa981568f80bae5dc1aa645bcf83894->enter($__internal_2ae1ea52a125db86018a5b25c0e011e68fa981568f80bae5dc1aa645bcf83894_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Profile:show_content.html.twig", "FOSUserBundle:Profile:show.html.twig", 4)->display($context);
        
        $__internal_2ae1ea52a125db86018a5b25c0e011e68fa981568f80bae5dc1aa645bcf83894->leave($__internal_2ae1ea52a125db86018a5b25c0e011e68fa981568f80bae5dc1aa645bcf83894_prof);

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
