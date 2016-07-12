<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_dd1b9bbb2716b6381704ae7443c5b6176727ca234cf493a91086f5caa7e3de53 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
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
        $__internal_6969ce84bc01c4e3dc3de7a51c0eb634ab6ae28c5780b0dacc4448bbee14d45f = $this->env->getExtension("native_profiler");
        $__internal_6969ce84bc01c4e3dc3de7a51c0eb634ab6ae28c5780b0dacc4448bbee14d45f->enter($__internal_6969ce84bc01c4e3dc3de7a51c0eb634ab6ae28c5780b0dacc4448bbee14d45f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6969ce84bc01c4e3dc3de7a51c0eb634ab6ae28c5780b0dacc4448bbee14d45f->leave($__internal_6969ce84bc01c4e3dc3de7a51c0eb634ab6ae28c5780b0dacc4448bbee14d45f_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_1d365093c2f6d6399310e665a8171b8dea25f2b2e4a7d24f2a373601e658cde0 = $this->env->getExtension("native_profiler");
        $__internal_1d365093c2f6d6399310e665a8171b8dea25f2b2e4a7d24f2a373601e658cde0->enter($__internal_1d365093c2f6d6399310e665a8171b8dea25f2b2e4a7d24f2a373601e658cde0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_1d365093c2f6d6399310e665a8171b8dea25f2b2e4a7d24f2a373601e658cde0->leave($__internal_1d365093c2f6d6399310e665a8171b8dea25f2b2e4a7d24f2a373601e658cde0_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_788631bcec126fc4b3cea4030546dea923dc74c0d949b458b946dcfc23a3dd6c = $this->env->getExtension("native_profiler");
        $__internal_788631bcec126fc4b3cea4030546dea923dc74c0d949b458b946dcfc23a3dd6c->enter($__internal_788631bcec126fc4b3cea4030546dea923dc74c0d949b458b946dcfc23a3dd6c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_788631bcec126fc4b3cea4030546dea923dc74c0d949b458b946dcfc23a3dd6c->leave($__internal_788631bcec126fc4b3cea4030546dea923dc74c0d949b458b946dcfc23a3dd6c_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_c58fd101767b19aaf50cbb49d7e668121fe8c617d6ea6b8a7b6959d70c8a8772 = $this->env->getExtension("native_profiler");
        $__internal_c58fd101767b19aaf50cbb49d7e668121fe8c617d6ea6b8a7b6959d70c8a8772->enter($__internal_c58fd101767b19aaf50cbb49d7e668121fe8c617d6ea6b8a7b6959d70c8a8772_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_c58fd101767b19aaf50cbb49d7e668121fe8c617d6ea6b8a7b6959d70c8a8772->leave($__internal_c58fd101767b19aaf50cbb49d7e668121fe8c617d6ea6b8a7b6959d70c8a8772_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 13,  67 => 12,  56 => 7,  53 => 6,  47 => 5,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@WebProfiler/Profiler/layout.html.twig' %}*/
/* */
/* {% block toolbar %}{% endblock %}*/
/* */
/* {% block menu %}*/
/* <span class="label">*/
/*     <span class="icon">{{ include('@WebProfiler/Icon/router.svg') }}</span>*/
/*     <strong>Routing</strong>*/
/* </span>*/
/* {% endblock %}*/
/* */
/* {% block panel %}*/
/*     {{ render(path('_profiler_router', { token: token })) }}*/
/* {% endblock %}*/
/* */
