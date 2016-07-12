<?php

/* FOSUserBundle:Registration:confirmed.html.twig */
class __TwigTemplate_eda54de72f255a059d5480d6a3dd43351f6f7682984f79b587f5911b4396fe99 extends Twig_Template
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
        $__internal_90f735c7942d2009321518b7f63e3690e000eee7a536c294ac5014602d248d6d = $this->env->getExtension("native_profiler");
        $__internal_90f735c7942d2009321518b7f63e3690e000eee7a536c294ac5014602d248d6d->enter($__internal_90f735c7942d2009321518b7f63e3690e000eee7a536c294ac5014602d248d6d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:confirmed.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_90f735c7942d2009321518b7f63e3690e000eee7a536c294ac5014602d248d6d->leave($__internal_90f735c7942d2009321518b7f63e3690e000eee7a536c294ac5014602d248d6d_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_f4b9d8a98b7c2878f770cfc79a3fb3d83b74591aa51e33ad91133045cd6e2384 = $this->env->getExtension("native_profiler");
        $__internal_f4b9d8a98b7c2878f770cfc79a3fb3d83b74591aa51e33ad91133045cd6e2384->enter($__internal_f4b9d8a98b7c2878f770cfc79a3fb3d83b74591aa51e33ad91133045cd6e2384_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

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
        
        $__internal_f4b9d8a98b7c2878f770cfc79a3fb3d83b74591aa51e33ad91133045cd6e2384->leave($__internal_f4b9d8a98b7c2878f770cfc79a3fb3d83b74591aa51e33ad91133045cd6e2384_prof);

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
