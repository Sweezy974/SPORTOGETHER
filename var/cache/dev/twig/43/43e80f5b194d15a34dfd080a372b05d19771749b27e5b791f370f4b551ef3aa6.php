<?php

/* base.html.twig */
class __TwigTemplate_1879b3aa033f2b984b6530a677416ac70345ccec760a3898794863b7e538005d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_cf838683ef280ecf463b51eb1bf18da4244f80b17593956874701ad5d4c86550 = $this->env->getExtension("native_profiler");
        $__internal_cf838683ef280ecf463b51eb1bf18da4244f80b17593956874701ad5d4c86550->enter($__internal_cf838683ef280ecf463b51eb1bf18da4244f80b17593956874701ad5d4c86550_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 11
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
        ";
        // line 14
        $this->displayBlock('body', $context, $blocks);
        // line 18
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 22
        echo "    </body>
</html>
";
        
        $__internal_cf838683ef280ecf463b51eb1bf18da4244f80b17593956874701ad5d4c86550->leave($__internal_cf838683ef280ecf463b51eb1bf18da4244f80b17593956874701ad5d4c86550_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_10f4d52288333f18718abcb936c39902d995853f226598560a5c20bc7d11b71a = $this->env->getExtension("native_profiler");
        $__internal_10f4d52288333f18718abcb936c39902d995853f226598560a5c20bc7d11b71a->enter($__internal_10f4d52288333f18718abcb936c39902d995853f226598560a5c20bc7d11b71a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_10f4d52288333f18718abcb936c39902d995853f226598560a5c20bc7d11b71a->leave($__internal_10f4d52288333f18718abcb936c39902d995853f226598560a5c20bc7d11b71a_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_f3aa32f8fd941f17a8b73e87e1670569efd1586c8b55714222d692abd050e313 = $this->env->getExtension("native_profiler");
        $__internal_f3aa32f8fd941f17a8b73e87e1670569efd1586c8b55714222d692abd050e313->enter($__internal_f3aa32f8fd941f17a8b73e87e1670569efd1586c8b55714222d692abd050e313_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 7
        echo "        <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("font-awesome/css/font-awesome.min.css"), "html", null, true);
        echo "\">
        <link rel=\"stylesheet\" href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bootstrap/css/bootstrap.min.css"), "html", null, true);
        echo "\">
        <link rel=\"stylesheet\" href=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("main/css/main.css"), "html", null, true);
        echo "\">
        ";
        
        $__internal_f3aa32f8fd941f17a8b73e87e1670569efd1586c8b55714222d692abd050e313->leave($__internal_f3aa32f8fd941f17a8b73e87e1670569efd1586c8b55714222d692abd050e313_prof);

    }

    // line 14
    public function block_body($context, array $blocks = array())
    {
        $__internal_1e80c20c091bc5d0d4d9b1e8c7d8d8ed3fa8145e36b4d4cf29a26d03cc942d3a = $this->env->getExtension("native_profiler");
        $__internal_1e80c20c091bc5d0d4d9b1e8c7d8d8ed3fa8145e36b4d4cf29a26d03cc942d3a->enter($__internal_1e80c20c091bc5d0d4d9b1e8c7d8d8ed3fa8145e36b4d4cf29a26d03cc942d3a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 15
        echo "

        ";
        
        $__internal_1e80c20c091bc5d0d4d9b1e8c7d8d8ed3fa8145e36b4d4cf29a26d03cc942d3a->leave($__internal_1e80c20c091bc5d0d4d9b1e8c7d8d8ed3fa8145e36b4d4cf29a26d03cc942d3a_prof);

    }

    // line 18
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_cc776c0f2be9538e85a1fcea35d58304733787fc65207511cd9cfef8a5bd5848 = $this->env->getExtension("native_profiler");
        $__internal_cc776c0f2be9538e85a1fcea35d58304733787fc65207511cd9cfef8a5bd5848->enter($__internal_cc776c0f2be9538e85a1fcea35d58304733787fc65207511cd9cfef8a5bd5848_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 19
        echo "        <script src=\"//code.jquery.com/jquery.min.js\"></script>
        <script src=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bootstrap/js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
        ";
        
        $__internal_cc776c0f2be9538e85a1fcea35d58304733787fc65207511cd9cfef8a5bd5848->leave($__internal_cc776c0f2be9538e85a1fcea35d58304733787fc65207511cd9cfef8a5bd5848_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  119 => 20,  116 => 19,  110 => 18,  101 => 15,  95 => 14,  86 => 9,  82 => 8,  77 => 7,  71 => 6,  59 => 5,  50 => 22,  47 => 18,  45 => 14,  38 => 11,  36 => 6,  32 => 5,  26 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html>*/
/*     <head>*/
/*         <meta charset="UTF-8" />*/
/*         <title>{% block title %}Welcome!{% endblock %}</title>*/
/*         {% block stylesheets %}*/
/*         <link rel="stylesheet" href="{{asset('font-awesome/css/font-awesome.min.css')}}">*/
/*         <link rel="stylesheet" href="{{asset('bootstrap/css/bootstrap.min.css')}}">*/
/*         <link rel="stylesheet" href="{{asset('main/css/main.css')}}">*/
/*         {% endblock %}*/
/*         <link rel="icon" type="image/x-icon" href="{{ asset('favicon.ico') }}" />*/
/*     </head>*/
/*     <body>*/
/*         {% block body %}*/
/* */
/* */
/*         {% endblock %}*/
/*         {% block javascripts %}*/
/*         <script src="//code.jquery.com/jquery.min.js"></script>*/
/*         <script src="{{asset('bootstrap/js/bootstrap.min.js')}}"></script>*/
/*         {% endblock %}*/
/*     </body>*/
/* </html>*/
/* */
