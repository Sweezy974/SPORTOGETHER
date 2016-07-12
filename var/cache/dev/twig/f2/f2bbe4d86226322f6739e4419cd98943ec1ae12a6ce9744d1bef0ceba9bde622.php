<?php

/* ::base.html.twig */
class __TwigTemplate_f65d69bd0ccf83febc1d220f6a13cf99e46c7998cb0408f93093be497fc75e87 extends Twig_Template
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
        $__internal_47528a3c5a90bf16fd5f106cc85893c0ed0f201353eb439d5c9bf5bed9f1f930 = $this->env->getExtension("native_profiler");
        $__internal_47528a3c5a90bf16fd5f106cc85893c0ed0f201353eb439d5c9bf5bed9f1f930->enter($__internal_47528a3c5a90bf16fd5f106cc85893c0ed0f201353eb439d5c9bf5bed9f1f930_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

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
        // line 21
        echo "    </body>
</html>
";
        
        $__internal_47528a3c5a90bf16fd5f106cc85893c0ed0f201353eb439d5c9bf5bed9f1f930->leave($__internal_47528a3c5a90bf16fd5f106cc85893c0ed0f201353eb439d5c9bf5bed9f1f930_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_acf999f23adb8f51fc8fec9d48faf43e208f72d1d625e4da931b672536ab557d = $this->env->getExtension("native_profiler");
        $__internal_acf999f23adb8f51fc8fec9d48faf43e208f72d1d625e4da931b672536ab557d->enter($__internal_acf999f23adb8f51fc8fec9d48faf43e208f72d1d625e4da931b672536ab557d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_acf999f23adb8f51fc8fec9d48faf43e208f72d1d625e4da931b672536ab557d->leave($__internal_acf999f23adb8f51fc8fec9d48faf43e208f72d1d625e4da931b672536ab557d_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_e6b69998b49cda912c30bb6dd98f250a40ae80478c488833972af8ca1cec3710 = $this->env->getExtension("native_profiler");
        $__internal_e6b69998b49cda912c30bb6dd98f250a40ae80478c488833972af8ca1cec3710->enter($__internal_e6b69998b49cda912c30bb6dd98f250a40ae80478c488833972af8ca1cec3710_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

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
        
        $__internal_e6b69998b49cda912c30bb6dd98f250a40ae80478c488833972af8ca1cec3710->leave($__internal_e6b69998b49cda912c30bb6dd98f250a40ae80478c488833972af8ca1cec3710_prof);

    }

    // line 14
    public function block_body($context, array $blocks = array())
    {
        $__internal_a5c4ecaae4af59aa5dffc0f7904918d34b754a617268b0a49b10a0005735bfe0 = $this->env->getExtension("native_profiler");
        $__internal_a5c4ecaae4af59aa5dffc0f7904918d34b754a617268b0a49b10a0005735bfe0->enter($__internal_a5c4ecaae4af59aa5dffc0f7904918d34b754a617268b0a49b10a0005735bfe0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 15
        echo "        

        ";
        
        $__internal_a5c4ecaae4af59aa5dffc0f7904918d34b754a617268b0a49b10a0005735bfe0->leave($__internal_a5c4ecaae4af59aa5dffc0f7904918d34b754a617268b0a49b10a0005735bfe0_prof);

    }

    // line 18
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_548232f782eb18ca592f09b388aabffe296323640659afef561560dc34ccf721 = $this->env->getExtension("native_profiler");
        $__internal_548232f782eb18ca592f09b388aabffe296323640659afef561560dc34ccf721->enter($__internal_548232f782eb18ca592f09b388aabffe296323640659afef561560dc34ccf721_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 19
        echo "        <script src=\"//code.jquery.com/jquery.min.js\"></script>
<script src=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bootstrap/js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>";
        
        $__internal_548232f782eb18ca592f09b388aabffe296323640659afef561560dc34ccf721->leave($__internal_548232f782eb18ca592f09b388aabffe296323640659afef561560dc34ccf721_prof);

    }

    public function getTemplateName()
    {
        return "::base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  119 => 20,  116 => 19,  110 => 18,  101 => 15,  95 => 14,  86 => 9,  82 => 8,  77 => 7,  71 => 6,  59 => 5,  50 => 21,  47 => 18,  45 => 14,  38 => 11,  36 => 6,  32 => 5,  26 => 1,);
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
/*   {% endblock %}*/
/*         <link rel="icon" type="image/x-icon" href="{{ asset('favicon.ico') }}" />*/
/*     </head>*/
/*     <body>*/
/*         {% block body %}*/
/*         */
/* */
/*         {% endblock %}*/
/*         {% block javascripts %}*/
/*         <script src="//code.jquery.com/jquery.min.js"></script>*/
/* <script src="{{asset('bootstrap/js/bootstrap.min.js')}}"></script>{% endblock %}*/
/*     </body>*/
/* </html>*/
/* */
