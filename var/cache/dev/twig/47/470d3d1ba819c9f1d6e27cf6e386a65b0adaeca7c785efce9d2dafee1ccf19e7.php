<?php

/* @WebProfiler/Profiler/header.html.twig */
class __TwigTemplate_7f69abc4f364ab3dc85d659c1027ff0b721ec82a3c92d8e85c6146312a38750f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_365c68964c54a2c5ba4c42731a2e6d7beb6b71e0831bc1f16b68ad53acc5a427 = $this->env->getExtension("native_profiler");
        $__internal_365c68964c54a2c5ba4c42731a2e6d7beb6b71e0831bc1f16b68ad53acc5a427->enter($__internal_365c68964c54a2c5ba4c42731a2e6d7beb6b71e0831bc1f16b68ad53acc5a427_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/header.html.twig"));

        // line 1
        echo "<div id=\"header\">
    <div class=\"container\">
        <h1>";
        // line 3
        echo twig_include($this->env, $context, "@WebProfiler/Icon/symfony.svg");
        echo " Symfony <span>Profiler</span></h1>

        <div class=\"search\">
            <form method=\"get\" action=\"https://symfony.com/search\" target=\"_blank\">
                <div class=\"form-row\">
                    <input name=\"q\" id=\"search-id\" type=\"search\" placeholder=\"search on symfony.com\">
                    <button type=\"submit\" class=\"btn\">Search</button>
                </div>
           </form>
        </div>
    </div>
</div>
";
        
        $__internal_365c68964c54a2c5ba4c42731a2e6d7beb6b71e0831bc1f16b68ad53acc5a427->leave($__internal_365c68964c54a2c5ba4c42731a2e6d7beb6b71e0831bc1f16b68ad53acc5a427_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/header.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  26 => 3,  22 => 1,);
    }
}
/* <div id="header">*/
/*     <div class="container">*/
/*         <h1>{{ include('@WebProfiler/Icon/symfony.svg') }} Symfony <span>Profiler</span></h1>*/
/* */
/*         <div class="search">*/
/*             <form method="get" action="https://symfony.com/search" target="_blank">*/
/*                 <div class="form-row">*/
/*                     <input name="q" id="search-id" type="search" placeholder="search on symfony.com">*/
/*                     <button type="submit" class="btn">Search</button>*/
/*                 </div>*/
/*            </form>*/
/*         </div>*/
/*     </div>*/
/* </div>*/
/* */
