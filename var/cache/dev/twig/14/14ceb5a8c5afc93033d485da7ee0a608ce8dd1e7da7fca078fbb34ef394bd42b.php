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
        $__internal_e7564cfeebdb87b10e806c5c94a5c174f63ec0d60ece7b85a843d8d0c918e9cf = $this->env->getExtension("native_profiler");
        $__internal_e7564cfeebdb87b10e806c5c94a5c174f63ec0d60ece7b85a843d8d0c918e9cf->enter($__internal_e7564cfeebdb87b10e806c5c94a5c174f63ec0d60ece7b85a843d8d0c918e9cf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e7564cfeebdb87b10e806c5c94a5c174f63ec0d60ece7b85a843d8d0c918e9cf->leave($__internal_e7564cfeebdb87b10e806c5c94a5c174f63ec0d60ece7b85a843d8d0c918e9cf_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_a0359af456d2f704383b194eb61d197b00da164acbb256108e1d49cb44c93bba = $this->env->getExtension("native_profiler");
        $__internal_a0359af456d2f704383b194eb61d197b00da164acbb256108e1d49cb44c93bba->enter($__internal_a0359af456d2f704383b194eb61d197b00da164acbb256108e1d49cb44c93bba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_a0359af456d2f704383b194eb61d197b00da164acbb256108e1d49cb44c93bba->leave($__internal_a0359af456d2f704383b194eb61d197b00da164acbb256108e1d49cb44c93bba_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_baa083fecb38ff1c8ab4f58fd9fe7a2739c5079f58141b0b998ed93872da5650 = $this->env->getExtension("native_profiler");
        $__internal_baa083fecb38ff1c8ab4f58fd9fe7a2739c5079f58141b0b998ed93872da5650->enter($__internal_baa083fecb38ff1c8ab4f58fd9fe7a2739c5079f58141b0b998ed93872da5650_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_baa083fecb38ff1c8ab4f58fd9fe7a2739c5079f58141b0b998ed93872da5650->leave($__internal_baa083fecb38ff1c8ab4f58fd9fe7a2739c5079f58141b0b998ed93872da5650_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_1d492a5a06e4dd089c3822f225b04036f92cd9635a8f7493991b2057a680055a = $this->env->getExtension("native_profiler");
        $__internal_1d492a5a06e4dd089c3822f225b04036f92cd9635a8f7493991b2057a680055a->enter($__internal_1d492a5a06e4dd089c3822f225b04036f92cd9635a8f7493991b2057a680055a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_1d492a5a06e4dd089c3822f225b04036f92cd9635a8f7493991b2057a680055a->leave($__internal_1d492a5a06e4dd089c3822f225b04036f92cd9635a8f7493991b2057a680055a_prof);

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
