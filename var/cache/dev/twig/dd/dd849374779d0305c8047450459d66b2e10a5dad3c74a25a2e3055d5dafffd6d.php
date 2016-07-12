<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_9183a1cd798fac069a844c701ba2bf902d314c71422168d11cddbf9ebe71313a extends Twig_Template
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
        $__internal_91be8cc55ce69ef8c9c4caf0a8fe00f9c9c79a34e6c44985ed42c953a9367cad = $this->env->getExtension("native_profiler");
        $__internal_91be8cc55ce69ef8c9c4caf0a8fe00f9c9c79a34e6c44985ed42c953a9367cad->enter($__internal_91be8cc55ce69ef8c9c4caf0a8fe00f9c9c79a34e6c44985ed42c953a9367cad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_91be8cc55ce69ef8c9c4caf0a8fe00f9c9c79a34e6c44985ed42c953a9367cad->leave($__internal_91be8cc55ce69ef8c9c4caf0a8fe00f9c9c79a34e6c44985ed42c953a9367cad_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_d3225f469a37ed94a6665897493433fc2380806660a3e618f53f6ec2dfd4f6fa = $this->env->getExtension("native_profiler");
        $__internal_d3225f469a37ed94a6665897493433fc2380806660a3e618f53f6ec2dfd4f6fa->enter($__internal_d3225f469a37ed94a6665897493433fc2380806660a3e618f53f6ec2dfd4f6fa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_d3225f469a37ed94a6665897493433fc2380806660a3e618f53f6ec2dfd4f6fa->leave($__internal_d3225f469a37ed94a6665897493433fc2380806660a3e618f53f6ec2dfd4f6fa_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_b80c4a3ccf4f02a5d4fe59cbfe650ac21cef953c3b7e76504d912baac4144b8f = $this->env->getExtension("native_profiler");
        $__internal_b80c4a3ccf4f02a5d4fe59cbfe650ac21cef953c3b7e76504d912baac4144b8f->enter($__internal_b80c4a3ccf4f02a5d4fe59cbfe650ac21cef953c3b7e76504d912baac4144b8f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_b80c4a3ccf4f02a5d4fe59cbfe650ac21cef953c3b7e76504d912baac4144b8f->leave($__internal_b80c4a3ccf4f02a5d4fe59cbfe650ac21cef953c3b7e76504d912baac4144b8f_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_6c1462c6ba0b45f931b93ebdca2d1b368210c1ce2e95bd63d641ea9025cb0386 = $this->env->getExtension("native_profiler");
        $__internal_6c1462c6ba0b45f931b93ebdca2d1b368210c1ce2e95bd63d641ea9025cb0386->enter($__internal_6c1462c6ba0b45f931b93ebdca2d1b368210c1ce2e95bd63d641ea9025cb0386_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_6c1462c6ba0b45f931b93ebdca2d1b368210c1ce2e95bd63d641ea9025cb0386->leave($__internal_6c1462c6ba0b45f931b93ebdca2d1b368210c1ce2e95bd63d641ea9025cb0386_prof);

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
