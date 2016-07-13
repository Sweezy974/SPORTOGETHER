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
        $__internal_ec05386859985f30ef0aebd9708895d312f3378dbd35dc365980f381b467fd2b = $this->env->getExtension("native_profiler");
        $__internal_ec05386859985f30ef0aebd9708895d312f3378dbd35dc365980f381b467fd2b->enter($__internal_ec05386859985f30ef0aebd9708895d312f3378dbd35dc365980f381b467fd2b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ec05386859985f30ef0aebd9708895d312f3378dbd35dc365980f381b467fd2b->leave($__internal_ec05386859985f30ef0aebd9708895d312f3378dbd35dc365980f381b467fd2b_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_8f16d6df4e94056c9ee00d41da74540af7b5c100d66c68cbd98d9ea5ce78d300 = $this->env->getExtension("native_profiler");
        $__internal_8f16d6df4e94056c9ee00d41da74540af7b5c100d66c68cbd98d9ea5ce78d300->enter($__internal_8f16d6df4e94056c9ee00d41da74540af7b5c100d66c68cbd98d9ea5ce78d300_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_8f16d6df4e94056c9ee00d41da74540af7b5c100d66c68cbd98d9ea5ce78d300->leave($__internal_8f16d6df4e94056c9ee00d41da74540af7b5c100d66c68cbd98d9ea5ce78d300_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_40acf6590ba4b4ab9dbbddcb6675b3fe342bf3b6d2fa143b15b96f2d8962ded8 = $this->env->getExtension("native_profiler");
        $__internal_40acf6590ba4b4ab9dbbddcb6675b3fe342bf3b6d2fa143b15b96f2d8962ded8->enter($__internal_40acf6590ba4b4ab9dbbddcb6675b3fe342bf3b6d2fa143b15b96f2d8962ded8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_40acf6590ba4b4ab9dbbddcb6675b3fe342bf3b6d2fa143b15b96f2d8962ded8->leave($__internal_40acf6590ba4b4ab9dbbddcb6675b3fe342bf3b6d2fa143b15b96f2d8962ded8_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_eb8184ed211d29418fa34541c9b2814ce5019444aa9bf7085525368aec2ea704 = $this->env->getExtension("native_profiler");
        $__internal_eb8184ed211d29418fa34541c9b2814ce5019444aa9bf7085525368aec2ea704->enter($__internal_eb8184ed211d29418fa34541c9b2814ce5019444aa9bf7085525368aec2ea704_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_eb8184ed211d29418fa34541c9b2814ce5019444aa9bf7085525368aec2ea704->leave($__internal_eb8184ed211d29418fa34541c9b2814ce5019444aa9bf7085525368aec2ea704_prof);

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
