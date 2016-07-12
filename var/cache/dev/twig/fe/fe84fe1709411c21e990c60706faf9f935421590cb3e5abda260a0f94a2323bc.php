<?php

/* FOSUserBundle:Registration:confirmed.html.twig */
class __TwigTemplate_0f89b17225d3a764adcd0d4930fec1359aaacef3773eed067a8025e9ee2e057d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Registration:confirmed.html.twig", 1);
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
        $__internal_ed7e7561852c6bec8fd370566662851e839800af25c2967c2b407e4ef38409cb = $this->env->getExtension("native_profiler");
        $__internal_ed7e7561852c6bec8fd370566662851e839800af25c2967c2b407e4ef38409cb->enter($__internal_ed7e7561852c6bec8fd370566662851e839800af25c2967c2b407e4ef38409cb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:confirmed.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ed7e7561852c6bec8fd370566662851e839800af25c2967c2b407e4ef38409cb->leave($__internal_ed7e7561852c6bec8fd370566662851e839800af25c2967c2b407e4ef38409cb_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_eddad3f766f472844f1a4adb7a8bb74975fb9f6c7ea7e582e4011899d82922f3 = $this->env->getExtension("native_profiler");
        $__internal_eddad3f766f472844f1a4adb7a8bb74975fb9f6c7ea7e582e4011899d82922f3->enter($__internal_eddad3f766f472844f1a4adb7a8bb74975fb9f6c7ea7e582e4011899d82922f3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "    <p>";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("registration.confirmed", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array())), "FOSUserBundle"), "html", null, true);
        echo "</p>
    ";
        // line 7
        if ((isset($context["targetUrl"]) ? $context["targetUrl"] : $this->getContext($context, "targetUrl"))) {
            // line 8
            echo "    <p><a href=\"";
            echo twig_escape_filter($this->env, (isset($context["targetUrl"]) ? $context["targetUrl"] : $this->getContext($context, "targetUrl")), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("registration.back", array(), "FOSUserBundle"), "html", null, true);
            echo "</a></p>
    ";
        }
        
        $__internal_eddad3f766f472844f1a4adb7a8bb74975fb9f6c7ea7e582e4011899d82922f3->leave($__internal_eddad3f766f472844f1a4adb7a8bb74975fb9f6c7ea7e582e4011899d82922f3_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:confirmed.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  47 => 8,  45 => 7,  40 => 6,  34 => 5,  11 => 1,);
    }
}
/* {% extends "FOSUserBundle::layout.html.twig" %}*/
/* */
/* {% trans_default_domain 'FOSUserBundle' %}*/
/* */
/* {% block fos_user_content %}*/
/*     <p>{{ 'registration.confirmed'|trans({'%username%': user.username}) }}</p>*/
/*     {% if targetUrl %}*/
/*     <p><a href="{{ targetUrl }}">{{ 'registration.back'|trans }}</a></p>*/
/*     {% endif %}*/
/* {% endblock fos_user_content %}*/
/* */
