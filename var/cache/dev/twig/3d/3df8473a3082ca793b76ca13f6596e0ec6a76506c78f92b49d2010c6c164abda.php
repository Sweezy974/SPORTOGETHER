<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_7f183db11f2c306d478497b41a9de272c40a346a1d3cb4ca119b6abaf13f598a extends Twig_Template
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
        $__internal_2af8cbfc0a90ad377cb40e1bcf1eb65264ad3cbd6490c49c6da4ad0933b2d9d1 = $this->env->getExtension("native_profiler");
        $__internal_2af8cbfc0a90ad377cb40e1bcf1eb65264ad3cbd6490c49c6da4ad0933b2d9d1->enter($__internal_2af8cbfc0a90ad377cb40e1bcf1eb65264ad3cbd6490c49c6da4ad0933b2d9d1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2af8cbfc0a90ad377cb40e1bcf1eb65264ad3cbd6490c49c6da4ad0933b2d9d1->leave($__internal_2af8cbfc0a90ad377cb40e1bcf1eb65264ad3cbd6490c49c6da4ad0933b2d9d1_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_885be865bd06807129b65fc495f619972b4480fe6c172ff4da0d933fa0edfc21 = $this->env->getExtension("native_profiler");
        $__internal_885be865bd06807129b65fc495f619972b4480fe6c172ff4da0d933fa0edfc21->enter($__internal_885be865bd06807129b65fc495f619972b4480fe6c172ff4da0d933fa0edfc21_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_885be865bd06807129b65fc495f619972b4480fe6c172ff4da0d933fa0edfc21->leave($__internal_885be865bd06807129b65fc495f619972b4480fe6c172ff4da0d933fa0edfc21_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_9852d1348db4392047e2603811aead0b4da9712713f25c97e1d9ce4cf19de9d1 = $this->env->getExtension("native_profiler");
        $__internal_9852d1348db4392047e2603811aead0b4da9712713f25c97e1d9ce4cf19de9d1->enter($__internal_9852d1348db4392047e2603811aead0b4da9712713f25c97e1d9ce4cf19de9d1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_9852d1348db4392047e2603811aead0b4da9712713f25c97e1d9ce4cf19de9d1->leave($__internal_9852d1348db4392047e2603811aead0b4da9712713f25c97e1d9ce4cf19de9d1_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_756147d62edb2f8dde815de41a388731aedb8b5941d642186d37f41842f2cff8 = $this->env->getExtension("native_profiler");
        $__internal_756147d62edb2f8dde815de41a388731aedb8b5941d642186d37f41842f2cff8->enter($__internal_756147d62edb2f8dde815de41a388731aedb8b5941d642186d37f41842f2cff8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_756147d62edb2f8dde815de41a388731aedb8b5941d642186d37f41842f2cff8->leave($__internal_756147d62edb2f8dde815de41a388731aedb8b5941d642186d37f41842f2cff8_prof);

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
