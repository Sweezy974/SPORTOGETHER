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
        $__internal_5fc12fede841b88aa4986c75393f2986f6723fc5c65783a3f494c69c74bd58ce = $this->env->getExtension("native_profiler");
        $__internal_5fc12fede841b88aa4986c75393f2986f6723fc5c65783a3f494c69c74bd58ce->enter($__internal_5fc12fede841b88aa4986c75393f2986f6723fc5c65783a3f494c69c74bd58ce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5fc12fede841b88aa4986c75393f2986f6723fc5c65783a3f494c69c74bd58ce->leave($__internal_5fc12fede841b88aa4986c75393f2986f6723fc5c65783a3f494c69c74bd58ce_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_22f525a95229c0e5d57b9dac977cb45ab07a2f7064f3408cf0fb86feb8f26b08 = $this->env->getExtension("native_profiler");
        $__internal_22f525a95229c0e5d57b9dac977cb45ab07a2f7064f3408cf0fb86feb8f26b08->enter($__internal_22f525a95229c0e5d57b9dac977cb45ab07a2f7064f3408cf0fb86feb8f26b08_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_22f525a95229c0e5d57b9dac977cb45ab07a2f7064f3408cf0fb86feb8f26b08->leave($__internal_22f525a95229c0e5d57b9dac977cb45ab07a2f7064f3408cf0fb86feb8f26b08_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_d0ba6071eda88cc6bdf1ba64e32cc068692ca22c4e3922c0638dc2323e835d13 = $this->env->getExtension("native_profiler");
        $__internal_d0ba6071eda88cc6bdf1ba64e32cc068692ca22c4e3922c0638dc2323e835d13->enter($__internal_d0ba6071eda88cc6bdf1ba64e32cc068692ca22c4e3922c0638dc2323e835d13_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_d0ba6071eda88cc6bdf1ba64e32cc068692ca22c4e3922c0638dc2323e835d13->leave($__internal_d0ba6071eda88cc6bdf1ba64e32cc068692ca22c4e3922c0638dc2323e835d13_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_f4b7d7a6462c0c687c0c34b49f85d3e248e70d49166df21703e40231290c60ff = $this->env->getExtension("native_profiler");
        $__internal_f4b7d7a6462c0c687c0c34b49f85d3e248e70d49166df21703e40231290c60ff->enter($__internal_f4b7d7a6462c0c687c0c34b49f85d3e248e70d49166df21703e40231290c60ff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_f4b7d7a6462c0c687c0c34b49f85d3e248e70d49166df21703e40231290c60ff->leave($__internal_f4b7d7a6462c0c687c0c34b49f85d3e248e70d49166df21703e40231290c60ff_prof);

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
