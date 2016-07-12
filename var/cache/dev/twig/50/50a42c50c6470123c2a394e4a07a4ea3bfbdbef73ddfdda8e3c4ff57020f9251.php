<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_b0e3a24bba492204b4288499d0672cdc3e5f6866f5f9a233a8cd565dd8185200 extends Twig_Template
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
        $__internal_c03544192fc9621232818ae70abb1a6ccd16db42efcc56d81a75053d7da799ba = $this->env->getExtension("native_profiler");
        $__internal_c03544192fc9621232818ae70abb1a6ccd16db42efcc56d81a75053d7da799ba->enter($__internal_c03544192fc9621232818ae70abb1a6ccd16db42efcc56d81a75053d7da799ba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c03544192fc9621232818ae70abb1a6ccd16db42efcc56d81a75053d7da799ba->leave($__internal_c03544192fc9621232818ae70abb1a6ccd16db42efcc56d81a75053d7da799ba_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_5a2d1b11d203947471f7567ab1eab12350c8c5b2ef74b602abe1e91305a65bfb = $this->env->getExtension("native_profiler");
        $__internal_5a2d1b11d203947471f7567ab1eab12350c8c5b2ef74b602abe1e91305a65bfb->enter($__internal_5a2d1b11d203947471f7567ab1eab12350c8c5b2ef74b602abe1e91305a65bfb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_5a2d1b11d203947471f7567ab1eab12350c8c5b2ef74b602abe1e91305a65bfb->leave($__internal_5a2d1b11d203947471f7567ab1eab12350c8c5b2ef74b602abe1e91305a65bfb_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_dacf4120e575f3c58e6ba21c7dba3c5c3c50c06f9e88a610071f4f25edc04ee5 = $this->env->getExtension("native_profiler");
        $__internal_dacf4120e575f3c58e6ba21c7dba3c5c3c50c06f9e88a610071f4f25edc04ee5->enter($__internal_dacf4120e575f3c58e6ba21c7dba3c5c3c50c06f9e88a610071f4f25edc04ee5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_dacf4120e575f3c58e6ba21c7dba3c5c3c50c06f9e88a610071f4f25edc04ee5->leave($__internal_dacf4120e575f3c58e6ba21c7dba3c5c3c50c06f9e88a610071f4f25edc04ee5_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_4b95fde1dc430de78fbf8aadfbdf3f82ac1f50e1c4d795eb90cbb69e9c80bfbe = $this->env->getExtension("native_profiler");
        $__internal_4b95fde1dc430de78fbf8aadfbdf3f82ac1f50e1c4d795eb90cbb69e9c80bfbe->enter($__internal_4b95fde1dc430de78fbf8aadfbdf3f82ac1f50e1c4d795eb90cbb69e9c80bfbe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_4b95fde1dc430de78fbf8aadfbdf3f82ac1f50e1c4d795eb90cbb69e9c80bfbe->leave($__internal_4b95fde1dc430de78fbf8aadfbdf3f82ac1f50e1c4d795eb90cbb69e9c80bfbe_prof);

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
