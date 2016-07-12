<?php

/* @WebProfiler/Collector/exception.html.twig */
class __TwigTemplate_5b1bc2ecf4cafbae8177bda06e49d99da3e68a648beb3345dd70f1cf7ae25525 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/exception.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_85c5bf0dc5b8b6c4e8f95121313239fafb72bec5b8544b0991f8bdc5c6fd2628 = $this->env->getExtension("native_profiler");
        $__internal_85c5bf0dc5b8b6c4e8f95121313239fafb72bec5b8544b0991f8bdc5c6fd2628->enter($__internal_85c5bf0dc5b8b6c4e8f95121313239fafb72bec5b8544b0991f8bdc5c6fd2628_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_85c5bf0dc5b8b6c4e8f95121313239fafb72bec5b8544b0991f8bdc5c6fd2628->leave($__internal_85c5bf0dc5b8b6c4e8f95121313239fafb72bec5b8544b0991f8bdc5c6fd2628_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_2ec44a7112ac122508b28909ff4067eee26d6d7800f858e7bf2af614417679f3 = $this->env->getExtension("native_profiler");
        $__internal_2ec44a7112ac122508b28909ff4067eee26d6d7800f858e7bf2af614417679f3->enter($__internal_2ec44a7112ac122508b28909ff4067eee26d6d7800f858e7bf2af614417679f3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    ";
        if ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 5
            echo "        <style>
            ";
            // line 6
            echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_exception_css", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
            echo "
        </style>
    ";
        }
        // line 9
        echo "    ";
        $this->displayParentBlock("head", $context, $blocks);
        echo "
";
        
        $__internal_2ec44a7112ac122508b28909ff4067eee26d6d7800f858e7bf2af614417679f3->leave($__internal_2ec44a7112ac122508b28909ff4067eee26d6d7800f858e7bf2af614417679f3_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_3840f4106b69a502157b445a76216632df2baad0aaeb01e5979758782aef6237 = $this->env->getExtension("native_profiler");
        $__internal_3840f4106b69a502157b445a76216632df2baad0aaeb01e5979758782aef6237->enter($__internal_3840f4106b69a502157b445a76216632df2baad0aaeb01e5979758782aef6237_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 13
        echo "    <span class=\"label ";
        echo (($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) ? ("label-status-error") : ("disabled"));
        echo "\">
        <span class=\"icon\">";
        // line 14
        echo twig_include($this->env, $context, "@WebProfiler/Icon/exception.svg");
        echo "</span>
        <strong>Exception</strong>
        ";
        // line 16
        if ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 17
            echo "            <span class=\"count\">
                <span>1</span>
            </span>
        ";
        }
        // line 21
        echo "    </span>
";
        
        $__internal_3840f4106b69a502157b445a76216632df2baad0aaeb01e5979758782aef6237->leave($__internal_3840f4106b69a502157b445a76216632df2baad0aaeb01e5979758782aef6237_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_74bd8379b59a37822e5566e17b1de0c998fabb5e60a4cd9cc46bb72f2244964b = $this->env->getExtension("native_profiler");
        $__internal_74bd8379b59a37822e5566e17b1de0c998fabb5e60a4cd9cc46bb72f2244964b->enter($__internal_74bd8379b59a37822e5566e17b1de0c998fabb5e60a4cd9cc46bb72f2244964b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 25
        echo "    <h2>Exceptions</h2>

    ";
        // line 27
        if ( !$this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 28
            echo "        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    ";
        } else {
            // line 32
            echo "        <div class=\"sf-reset\">
            ";
            // line 33
            echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_exception", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
            echo "
        </div>
    ";
        }
        
        $__internal_74bd8379b59a37822e5566e17b1de0c998fabb5e60a4cd9cc46bb72f2244964b->leave($__internal_74bd8379b59a37822e5566e17b1de0c998fabb5e60a4cd9cc46bb72f2244964b_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/exception.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  117 => 33,  114 => 32,  108 => 28,  106 => 27,  102 => 25,  96 => 24,  88 => 21,  82 => 17,  80 => 16,  75 => 14,  70 => 13,  64 => 12,  54 => 9,  48 => 6,  45 => 5,  42 => 4,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@WebProfiler/Profiler/layout.html.twig' %}*/
/* */
/* {% block head %}*/
/*     {% if collector.hasexception %}*/
/*         <style>*/
/*             {{ render(path('_profiler_exception_css', { token: token })) }}*/
/*         </style>*/
/*     {% endif %}*/
/*     {{ parent() }}*/
/* {% endblock %}*/
/* */
/* {% block menu %}*/
/*     <span class="label {{ collector.hasexception ? 'label-status-error' : 'disabled' }}">*/
/*         <span class="icon">{{ include('@WebProfiler/Icon/exception.svg') }}</span>*/
/*         <strong>Exception</strong>*/
/*         {% if collector.hasexception %}*/
/*             <span class="count">*/
/*                 <span>1</span>*/
/*             </span>*/
/*         {% endif %}*/
/*     </span>*/
/* {% endblock %}*/
/* */
/* {% block panel %}*/
/*     <h2>Exceptions</h2>*/
/* */
/*     {% if not collector.hasexception %}*/
/*         <div class="empty">*/
/*             <p>No exception was thrown and caught during the request.</p>*/
/*         </div>*/
/*     {% else %}*/
/*         <div class="sf-reset">*/
/*             {{ render(path('_profiler_exception', { token: token })) }}*/
/*         </div>*/
/*     {% endif %}*/
/* {% endblock %}*/
/* */
