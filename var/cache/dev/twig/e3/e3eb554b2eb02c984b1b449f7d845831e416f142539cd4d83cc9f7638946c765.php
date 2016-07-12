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
        $__internal_38071ba7a8242cef3873a5911a6d27ebde2424d967da0ef8ede4f8666ae2d580 = $this->env->getExtension("native_profiler");
        $__internal_38071ba7a8242cef3873a5911a6d27ebde2424d967da0ef8ede4f8666ae2d580->enter($__internal_38071ba7a8242cef3873a5911a6d27ebde2424d967da0ef8ede4f8666ae2d580_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_38071ba7a8242cef3873a5911a6d27ebde2424d967da0ef8ede4f8666ae2d580->leave($__internal_38071ba7a8242cef3873a5911a6d27ebde2424d967da0ef8ede4f8666ae2d580_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_f689c49c28cf3a88c61826c16d4a628e52dfb416fd1dd62a88e8d8d10e3a6d9c = $this->env->getExtension("native_profiler");
        $__internal_f689c49c28cf3a88c61826c16d4a628e52dfb416fd1dd62a88e8d8d10e3a6d9c->enter($__internal_f689c49c28cf3a88c61826c16d4a628e52dfb416fd1dd62a88e8d8d10e3a6d9c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_f689c49c28cf3a88c61826c16d4a628e52dfb416fd1dd62a88e8d8d10e3a6d9c->leave($__internal_f689c49c28cf3a88c61826c16d4a628e52dfb416fd1dd62a88e8d8d10e3a6d9c_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_9e5dc68728169a03f48fe418eb36fcd7e214b6a435e29f8bfda432bd5499718d = $this->env->getExtension("native_profiler");
        $__internal_9e5dc68728169a03f48fe418eb36fcd7e214b6a435e29f8bfda432bd5499718d->enter($__internal_9e5dc68728169a03f48fe418eb36fcd7e214b6a435e29f8bfda432bd5499718d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_9e5dc68728169a03f48fe418eb36fcd7e214b6a435e29f8bfda432bd5499718d->leave($__internal_9e5dc68728169a03f48fe418eb36fcd7e214b6a435e29f8bfda432bd5499718d_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_cdd001500538e451fa5dfd113ab7660de22ea3ff4dc83b3971c3870ff1ec4c61 = $this->env->getExtension("native_profiler");
        $__internal_cdd001500538e451fa5dfd113ab7660de22ea3ff4dc83b3971c3870ff1ec4c61->enter($__internal_cdd001500538e451fa5dfd113ab7660de22ea3ff4dc83b3971c3870ff1ec4c61_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_cdd001500538e451fa5dfd113ab7660de22ea3ff4dc83b3971c3870ff1ec4c61->leave($__internal_cdd001500538e451fa5dfd113ab7660de22ea3ff4dc83b3971c3870ff1ec4c61_prof);

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
