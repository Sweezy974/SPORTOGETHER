<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_560d28eac57fef90b043203c14fac61096f18588c6a6f1721ccd3bf2ff2d09d9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@Twig/Exception/exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_e27dbea5d138dd806218f70c2a178821ab2b818a8652f8739d27fdc21c994b99 = $this->env->getExtension("native_profiler");
        $__internal_e27dbea5d138dd806218f70c2a178821ab2b818a8652f8739d27fdc21c994b99->enter($__internal_e27dbea5d138dd806218f70c2a178821ab2b818a8652f8739d27fdc21c994b99_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e27dbea5d138dd806218f70c2a178821ab2b818a8652f8739d27fdc21c994b99->leave($__internal_e27dbea5d138dd806218f70c2a178821ab2b818a8652f8739d27fdc21c994b99_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_eac669887a7c2192e7ddeabae9cd2056540d28d81bb6cbe96723c31ad3bd1b3b = $this->env->getExtension("native_profiler");
        $__internal_eac669887a7c2192e7ddeabae9cd2056540d28d81bb6cbe96723c31ad3bd1b3b->enter($__internal_eac669887a7c2192e7ddeabae9cd2056540d28d81bb6cbe96723c31ad3bd1b3b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_eac669887a7c2192e7ddeabae9cd2056540d28d81bb6cbe96723c31ad3bd1b3b->leave($__internal_eac669887a7c2192e7ddeabae9cd2056540d28d81bb6cbe96723c31ad3bd1b3b_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_a03287a6831699a7308afec101bf7c1b773583591606c474236fd95240131f8f = $this->env->getExtension("native_profiler");
        $__internal_a03287a6831699a7308afec101bf7c1b773583591606c474236fd95240131f8f->enter($__internal_a03287a6831699a7308afec101bf7c1b773583591606c474236fd95240131f8f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_a03287a6831699a7308afec101bf7c1b773583591606c474236fd95240131f8f->leave($__internal_a03287a6831699a7308afec101bf7c1b773583591606c474236fd95240131f8f_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_28f771e523891779c3b61eceb16f2b84356c43779c07288df2206db970a901a4 = $this->env->getExtension("native_profiler");
        $__internal_28f771e523891779c3b61eceb16f2b84356c43779c07288df2206db970a901a4->enter($__internal_28f771e523891779c3b61eceb16f2b84356c43779c07288df2206db970a901a4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_28f771e523891779c3b61eceb16f2b84356c43779c07288df2206db970a901a4->leave($__internal_28f771e523891779c3b61eceb16f2b84356c43779c07288df2206db970a901a4_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 12,  72 => 11,  58 => 8,  52 => 7,  42 => 4,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@Twig/layout.html.twig' %}*/
/* */
/* {% block head %}*/
/*     <link href="{{ absolute_url(asset('bundles/framework/css/exception.css')) }}" rel="stylesheet" type="text/css" media="all" />*/
/* {% endblock %}*/
/* */
/* {% block title %}*/
/*     {{ exception.message }} ({{ status_code }} {{ status_text }})*/
/* {% endblock %}*/
/* */
/* {% block body %}*/
/*     {% include '@Twig/Exception/exception.html.twig' %}*/
/* {% endblock %}*/
/* */
