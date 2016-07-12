<?php

/* FOSUserBundle:Registration:register.html.twig */
class __TwigTemplate_e04e58cc9c5eaa9dabbd4fb66dc11377409d3006565cc4d37704c244d134c16b extends Twig_Template
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
        $__internal_26f7fa2acbe82eda2a22754dba3622f55dd3213cd6a7c6397dd4fbe9511d1a5a = $this->env->getExtension("native_profiler");
        $__internal_26f7fa2acbe82eda2a22754dba3622f55dd3213cd6a7c6397dd4fbe9511d1a5a->enter($__internal_26f7fa2acbe82eda2a22754dba3622f55dd3213cd6a7c6397dd4fbe9511d1a5a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:register.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_26f7fa2acbe82eda2a22754dba3622f55dd3213cd6a7c6397dd4fbe9511d1a5a->leave($__internal_26f7fa2acbe82eda2a22754dba3622f55dd3213cd6a7c6397dd4fbe9511d1a5a_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_09fe2751b72c2b989347602438406dbbcf3268f3867153efcfea070b6f8afd09 = $this->env->getExtension("native_profiler");
        $__internal_09fe2751b72c2b989347602438406dbbcf3268f3867153efcfea070b6f8afd09->enter($__internal_09fe2751b72c2b989347602438406dbbcf3268f3867153efcfea070b6f8afd09_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Registration:register_content.html.twig", "FOSUserBundle:Registration:register.html.twig", 4)->display($context);
        
        $__internal_09fe2751b72c2b989347602438406dbbcf3268f3867153efcfea070b6f8afd09->leave($__internal_09fe2751b72c2b989347602438406dbbcf3268f3867153efcfea070b6f8afd09_prof);

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
