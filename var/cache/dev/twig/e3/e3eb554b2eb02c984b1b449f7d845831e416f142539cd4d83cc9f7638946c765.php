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
        $__internal_e2aa56a5c3376096de0b36e50bd40b506b61ae7ed72bc969e81995ed09a6e30c = $this->env->getExtension("native_profiler");
        $__internal_e2aa56a5c3376096de0b36e50bd40b506b61ae7ed72bc969e81995ed09a6e30c->enter($__internal_e2aa56a5c3376096de0b36e50bd40b506b61ae7ed72bc969e81995ed09a6e30c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e2aa56a5c3376096de0b36e50bd40b506b61ae7ed72bc969e81995ed09a6e30c->leave($__internal_e2aa56a5c3376096de0b36e50bd40b506b61ae7ed72bc969e81995ed09a6e30c_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_842e636a296619690d22b8787635d83b0c692972f861215d853bc2571d1ac25d = $this->env->getExtension("native_profiler");
        $__internal_842e636a296619690d22b8787635d83b0c692972f861215d853bc2571d1ac25d->enter($__internal_842e636a296619690d22b8787635d83b0c692972f861215d853bc2571d1ac25d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_842e636a296619690d22b8787635d83b0c692972f861215d853bc2571d1ac25d->leave($__internal_842e636a296619690d22b8787635d83b0c692972f861215d853bc2571d1ac25d_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_c85ff3228b3df65e41f32abf27a0c571e5c3341f63b4653471266efa132b70d0 = $this->env->getExtension("native_profiler");
        $__internal_c85ff3228b3df65e41f32abf27a0c571e5c3341f63b4653471266efa132b70d0->enter($__internal_c85ff3228b3df65e41f32abf27a0c571e5c3341f63b4653471266efa132b70d0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_c85ff3228b3df65e41f32abf27a0c571e5c3341f63b4653471266efa132b70d0->leave($__internal_c85ff3228b3df65e41f32abf27a0c571e5c3341f63b4653471266efa132b70d0_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_15ef01872486df7e09bcce51fc33fba80af7ef1963246a43e23bd7a979fad77d = $this->env->getExtension("native_profiler");
        $__internal_15ef01872486df7e09bcce51fc33fba80af7ef1963246a43e23bd7a979fad77d->enter($__internal_15ef01872486df7e09bcce51fc33fba80af7ef1963246a43e23bd7a979fad77d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_15ef01872486df7e09bcce51fc33fba80af7ef1963246a43e23bd7a979fad77d->leave($__internal_15ef01872486df7e09bcce51fc33fba80af7ef1963246a43e23bd7a979fad77d_prof);

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
