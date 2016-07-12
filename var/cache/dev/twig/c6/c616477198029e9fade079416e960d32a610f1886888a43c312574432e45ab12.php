<?php

/* @WebProfiler/Collector/exception.html.twig */
class __TwigTemplate_e7b5b55e9943228115d949fb28dbe08b4f36575336891bfbe1dc0e6da573dea6 extends Twig_Template
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
        $__internal_3878a605cb25159bbba2c4f414b6c21b8808a5ed1cb589aa90586f63dc353fc9 = $this->env->getExtension("native_profiler");
        $__internal_3878a605cb25159bbba2c4f414b6c21b8808a5ed1cb589aa90586f63dc353fc9->enter($__internal_3878a605cb25159bbba2c4f414b6c21b8808a5ed1cb589aa90586f63dc353fc9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3878a605cb25159bbba2c4f414b6c21b8808a5ed1cb589aa90586f63dc353fc9->leave($__internal_3878a605cb25159bbba2c4f414b6c21b8808a5ed1cb589aa90586f63dc353fc9_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_5e1045e6632499342196d48cb0d825c92e18bc22adb828dd48d073f81e86ba6b = $this->env->getExtension("native_profiler");
        $__internal_5e1045e6632499342196d48cb0d825c92e18bc22adb828dd48d073f81e86ba6b->enter($__internal_5e1045e6632499342196d48cb0d825c92e18bc22adb828dd48d073f81e86ba6b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_5e1045e6632499342196d48cb0d825c92e18bc22adb828dd48d073f81e86ba6b->leave($__internal_5e1045e6632499342196d48cb0d825c92e18bc22adb828dd48d073f81e86ba6b_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_0c53a719c26e7b7286fd8223705aaece61915c8c8ec2ac3c142aaae33096829d = $this->env->getExtension("native_profiler");
        $__internal_0c53a719c26e7b7286fd8223705aaece61915c8c8ec2ac3c142aaae33096829d->enter($__internal_0c53a719c26e7b7286fd8223705aaece61915c8c8ec2ac3c142aaae33096829d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

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
        
        $__internal_0c53a719c26e7b7286fd8223705aaece61915c8c8ec2ac3c142aaae33096829d->leave($__internal_0c53a719c26e7b7286fd8223705aaece61915c8c8ec2ac3c142aaae33096829d_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_b808ecfff19834713efda15d069b08e80171256efcf77b0496db160ce485a918 = $this->env->getExtension("native_profiler");
        $__internal_b808ecfff19834713efda15d069b08e80171256efcf77b0496db160ce485a918->enter($__internal_b808ecfff19834713efda15d069b08e80171256efcf77b0496db160ce485a918_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

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
        
        $__internal_b808ecfff19834713efda15d069b08e80171256efcf77b0496db160ce485a918->leave($__internal_b808ecfff19834713efda15d069b08e80171256efcf77b0496db160ce485a918_prof);

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
