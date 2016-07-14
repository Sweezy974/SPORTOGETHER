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
        $__internal_4039189646b841dbcbe1a9220b3bb3ecc3aad42a99aca1ba90e379a247a3df41 = $this->env->getExtension("native_profiler");
        $__internal_4039189646b841dbcbe1a9220b3bb3ecc3aad42a99aca1ba90e379a247a3df41->enter($__internal_4039189646b841dbcbe1a9220b3bb3ecc3aad42a99aca1ba90e379a247a3df41_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:register.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4039189646b841dbcbe1a9220b3bb3ecc3aad42a99aca1ba90e379a247a3df41->leave($__internal_4039189646b841dbcbe1a9220b3bb3ecc3aad42a99aca1ba90e379a247a3df41_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_aa12c515d8495e1489893e6e7c721ec86457bce9ba3f6bc503cc575caa82df0d = $this->env->getExtension("native_profiler");
        $__internal_aa12c515d8495e1489893e6e7c721ec86457bce9ba3f6bc503cc575caa82df0d->enter($__internal_aa12c515d8495e1489893e6e7c721ec86457bce9ba3f6bc503cc575caa82df0d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Registration:register_content.html.twig", "FOSUserBundle:Registration:register.html.twig", 4)->display($context);
        
        $__internal_aa12c515d8495e1489893e6e7c721ec86457bce9ba3f6bc503cc575caa82df0d->leave($__internal_aa12c515d8495e1489893e6e7c721ec86457bce9ba3f6bc503cc575caa82df0d_prof);

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
