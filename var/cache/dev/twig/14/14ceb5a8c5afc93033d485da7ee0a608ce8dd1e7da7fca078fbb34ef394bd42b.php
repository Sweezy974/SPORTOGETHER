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
        $__internal_6052be4462ba59e24b06c700c3bb614333f697405720dda0f5a71c9e9024594e = $this->env->getExtension("native_profiler");
        $__internal_6052be4462ba59e24b06c700c3bb614333f697405720dda0f5a71c9e9024594e->enter($__internal_6052be4462ba59e24b06c700c3bb614333f697405720dda0f5a71c9e9024594e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6052be4462ba59e24b06c700c3bb614333f697405720dda0f5a71c9e9024594e->leave($__internal_6052be4462ba59e24b06c700c3bb614333f697405720dda0f5a71c9e9024594e_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_f6437601898d9a777f72d2032bf50908e1695f296aab6f5a7dae0f87ee6280e2 = $this->env->getExtension("native_profiler");
        $__internal_f6437601898d9a777f72d2032bf50908e1695f296aab6f5a7dae0f87ee6280e2->enter($__internal_f6437601898d9a777f72d2032bf50908e1695f296aab6f5a7dae0f87ee6280e2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_f6437601898d9a777f72d2032bf50908e1695f296aab6f5a7dae0f87ee6280e2->leave($__internal_f6437601898d9a777f72d2032bf50908e1695f296aab6f5a7dae0f87ee6280e2_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_bda7ce198267fce74dc2cba45b042357f457723fbfd86647d115379bd74fbba2 = $this->env->getExtension("native_profiler");
        $__internal_bda7ce198267fce74dc2cba45b042357f457723fbfd86647d115379bd74fbba2->enter($__internal_bda7ce198267fce74dc2cba45b042357f457723fbfd86647d115379bd74fbba2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_bda7ce198267fce74dc2cba45b042357f457723fbfd86647d115379bd74fbba2->leave($__internal_bda7ce198267fce74dc2cba45b042357f457723fbfd86647d115379bd74fbba2_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_72e319bbdaf067459df24f8529d66069fb43757e7a0ba6620d3d955ad40f0289 = $this->env->getExtension("native_profiler");
        $__internal_72e319bbdaf067459df24f8529d66069fb43757e7a0ba6620d3d955ad40f0289->enter($__internal_72e319bbdaf067459df24f8529d66069fb43757e7a0ba6620d3d955ad40f0289_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_72e319bbdaf067459df24f8529d66069fb43757e7a0ba6620d3d955ad40f0289->leave($__internal_72e319bbdaf067459df24f8529d66069fb43757e7a0ba6620d3d955ad40f0289_prof);

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
