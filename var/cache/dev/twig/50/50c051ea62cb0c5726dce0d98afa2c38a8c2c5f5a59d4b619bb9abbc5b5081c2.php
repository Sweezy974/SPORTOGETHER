<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_6ff33191ae6748011328dd0c02c29d187141dd3147f278b96953ee19aefb3e5e extends Twig_Template
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
        $__internal_c2055a2c80b32ddf4e9044039e6d25a049e7b19c36ba54973758e4b7db9a603a = $this->env->getExtension("native_profiler");
        $__internal_c2055a2c80b32ddf4e9044039e6d25a049e7b19c36ba54973758e4b7db9a603a->enter($__internal_c2055a2c80b32ddf4e9044039e6d25a049e7b19c36ba54973758e4b7db9a603a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c2055a2c80b32ddf4e9044039e6d25a049e7b19c36ba54973758e4b7db9a603a->leave($__internal_c2055a2c80b32ddf4e9044039e6d25a049e7b19c36ba54973758e4b7db9a603a_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_6d6312a19858d6a3b927c004a58958a70c246dad38383048b3c871bc0201b1bb = $this->env->getExtension("native_profiler");
        $__internal_6d6312a19858d6a3b927c004a58958a70c246dad38383048b3c871bc0201b1bb->enter($__internal_6d6312a19858d6a3b927c004a58958a70c246dad38383048b3c871bc0201b1bb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_6d6312a19858d6a3b927c004a58958a70c246dad38383048b3c871bc0201b1bb->leave($__internal_6d6312a19858d6a3b927c004a58958a70c246dad38383048b3c871bc0201b1bb_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_ab34b6d9105f8d7d215c86857b70c8f3514e847c8932b24faf986a47dc8f5367 = $this->env->getExtension("native_profiler");
        $__internal_ab34b6d9105f8d7d215c86857b70c8f3514e847c8932b24faf986a47dc8f5367->enter($__internal_ab34b6d9105f8d7d215c86857b70c8f3514e847c8932b24faf986a47dc8f5367_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_ab34b6d9105f8d7d215c86857b70c8f3514e847c8932b24faf986a47dc8f5367->leave($__internal_ab34b6d9105f8d7d215c86857b70c8f3514e847c8932b24faf986a47dc8f5367_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_9a8fe17fb706a59007f198351ca45f38afe03f86c4fe65d45863aa593b7ff67b = $this->env->getExtension("native_profiler");
        $__internal_9a8fe17fb706a59007f198351ca45f38afe03f86c4fe65d45863aa593b7ff67b->enter($__internal_9a8fe17fb706a59007f198351ca45f38afe03f86c4fe65d45863aa593b7ff67b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_9a8fe17fb706a59007f198351ca45f38afe03f86c4fe65d45863aa593b7ff67b->leave($__internal_9a8fe17fb706a59007f198351ca45f38afe03f86c4fe65d45863aa593b7ff67b_prof);

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
