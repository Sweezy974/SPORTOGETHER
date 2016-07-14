<?php

/* rencontrePublic-new.html.twig */
class __TwigTemplate_e84356c2fb9ed2a4040e693742ee7dfd75c718cd8dd603f77464b5751bc3a9b5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'body' => array($this, 'block_body'),
            'footer' => array($this, 'block_footer'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_d03603adaa1c76726de97e2fd774081f9eb575f8ff4ea0df2c8d7fc295e8f953 = $this->env->getExtension("native_profiler");
        $__internal_d03603adaa1c76726de97e2fd774081f9eb575f8ff4ea0df2c8d7fc295e8f953->enter($__internal_d03603adaa1c76726de97e2fd774081f9eb575f8ff4ea0df2c8d7fc295e8f953_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "rencontrePublic-new.html.twig"));

        // line 1
        $this->loadTemplate("FOSUserBundle::layout.html.twig", "rencontrePublic-new.html.twig", 1)->display($context);
        // line 2
        echo "
";
        // line 3
        $this->displayBlock('body', $context, $blocks);
        // line 54
        echo "
";
        // line 55
        $this->displayBlock('footer', $context, $blocks);
        
        $__internal_d03603adaa1c76726de97e2fd774081f9eb575f8ff4ea0df2c8d7fc295e8f953->leave($__internal_d03603adaa1c76726de97e2fd774081f9eb575f8ff4ea0df2c8d7fc295e8f953_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_57ee19724cb0f823fdd4b05234356b663e2a507e432aaf7ba7932e3c0116b1b0 = $this->env->getExtension("native_profiler");
        $__internal_57ee19724cb0f823fdd4b05234356b663e2a507e432aaf7ba7932e3c0116b1b0->enter($__internal_57ee19724cb0f823fdd4b05234356b663e2a507e432aaf7ba7932e3c0116b1b0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo " <div class=\"container\">
   <div class=\"row\">
     <div class=\"col-md-offset-3 col-md-6\">

       ";
        // line 8
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start');
        echo "
       <div class=\"form-group\">
         ";
        // line 10
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "nomGroupe", array()), 'label');
        echo "
         ";
        // line 11
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "nomGroupe", array()), 'widget', array("attr" => array("class" => "form-control", "placeholder" => "Nom du Groupe")));
        echo "
         ";
        // line 12
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "nomGroupe", array()), 'errors');
        echo "
       </div>

       <div class=\"form-group\">
         ";
        // line 16
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "description", array()), 'label');
        echo "
         ";
        // line 17
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "description", array()), 'widget', array("attr" => array("class" => "form-control", "placeholder" => "Description du Groupe")));
        echo "
         ";
        // line 18
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "description", array()), 'errors');
        echo "
       </div>

       <div class=\"form-group\">
         ";
        // line 22
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "lieu", array()), 'label');
        echo "
         ";
        // line 23
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "lieu", array()), 'widget', array("attr" => array("class" => "form-control", "placeholder" => "lieu")));
        echo "
         ";
        // line 24
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "lieu", array()), 'errors');
        echo "
       </div>


       <div class=\"form-group\">
         ";
        // line 29
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "date", array()), 'label');
        echo "
         ";
        // line 30
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "date", array()), 'widget', array("attr" => array("class" => "")));
        echo "
       </div>



       <div class=\"form-group\">
         ";
        // line 36
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "heure", array()), 'label');
        echo "
         ";
        // line 37
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "heure", array()), 'widget', array("attr" => array("class" => "")));
        echo "
       </div>


       <div class=\"text-center\">
         <a href=\"/profile\"><input id=\"envoyer\" type=\"submit\" value=\"Créer\" /></a<
       </div>
       ";
        // line 44
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "
     </div>
   </div>
 </div>

 <script type=\"text/javascript\">
 <script   src=\"https://code.jquery.com/jquery-3.1.0.min.js\"   integrity=\"sha256-cCueBR6CsyA4/9szpPfrX3s49M9vUU5BgtiJj06wt/s=\"   crossorigin=\"anonymous\"></script>
 \$(\".datepicker\").datepicker({minDate: '0'});
 </script>
";
        
        $__internal_57ee19724cb0f823fdd4b05234356b663e2a507e432aaf7ba7932e3c0116b1b0->leave($__internal_57ee19724cb0f823fdd4b05234356b663e2a507e432aaf7ba7932e3c0116b1b0_prof);

    }

    // line 55
    public function block_footer($context, array $blocks = array())
    {
        $__internal_793ce13cdcc5a689fb74649424e17e3407dbb2fbc4b1c70ce56a4f8c318f1492 = $this->env->getExtension("native_profiler");
        $__internal_793ce13cdcc5a689fb74649424e17e3407dbb2fbc4b1c70ce56a4f8c318f1492->enter($__internal_793ce13cdcc5a689fb74649424e17e3407dbb2fbc4b1c70ce56a4f8c318f1492_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        
        $__internal_793ce13cdcc5a689fb74649424e17e3407dbb2fbc4b1c70ce56a4f8c318f1492->leave($__internal_793ce13cdcc5a689fb74649424e17e3407dbb2fbc4b1c70ce56a4f8c318f1492_prof);

    }

    public function getTemplateName()
    {
        return "rencontrePublic-new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  148 => 55,  131 => 44,  121 => 37,  117 => 36,  108 => 30,  104 => 29,  96 => 24,  92 => 23,  88 => 22,  81 => 18,  77 => 17,  73 => 16,  66 => 12,  62 => 11,  58 => 10,  53 => 8,  47 => 4,  41 => 3,  34 => 55,  31 => 54,  29 => 3,  26 => 2,  24 => 1,);
    }
}
/* {% include "FOSUserBundle::layout.html.twig" %}*/
/* */
/* {% block body %}*/
/*  <div class="container">*/
/*    <div class="row">*/
/*      <div class="col-md-offset-3 col-md-6">*/
/* */
/*        {{ form_start(form) }}*/
/*        <div class="form-group">*/
/*          {{ form_label(form.nomGroupe) }}*/
/*          {{ form_widget(form.nomGroupe, {'attr': {'class':'form-control' , 'placeholder':'Nom du Groupe'}}) }}*/
/*          {{ form_errors(form.nomGroupe) }}*/
/*        </div>*/
/* */
/*        <div class="form-group">*/
/*          {{ form_label(form.description) }}*/
/*          {{ form_widget(form.description, {'attr': {'class':'form-control', 'placeholder':'Description du Groupe'}}) }}*/
/*          {{ form_errors(form.description) }}*/
/*        </div>*/
/* */
/*        <div class="form-group">*/
/*          {{ form_label(form.lieu) }}*/
/*          {{ form_widget(form.lieu, {'attr': {'class':'form-control', 'placeholder':'lieu'}}) }}*/
/*          {{ form_errors(form.lieu) }}*/
/*        </div>*/
/* */
/* */
/*        <div class="form-group">*/
/*          {{ form_label(form.date) }}*/
/*          {{ form_widget(form.date, {'attr': {'class':''}}) }}*/
/*        </div>*/
/* */
/* */
/* */
/*        <div class="form-group">*/
/*          {{ form_label(form.heure) }}*/
/*          {{ form_widget(form.heure, {'attr': {'class':''}}) }}*/
/*        </div>*/
/* */
/* */
/*        <div class="text-center">*/
/*          <a href="/profile"><input id="envoyer" type="submit" value="Créer" /></a<*/
/*        </div>*/
/*        {{ form_end(form) }}*/
/*      </div>*/
/*    </div>*/
/*  </div>*/
/* */
/*  <script type="text/javascript">*/
/*  <script   src="https://code.jquery.com/jquery-3.1.0.min.js"   integrity="sha256-cCueBR6CsyA4/9szpPfrX3s49M9vUU5BgtiJj06wt/s="   crossorigin="anonymous"></script>*/
/*  $(".datepicker").datepicker({minDate: '0'});*/
/*  </script>*/
/* {% endblock %}*/
/* */
/* {% block footer %}*/
/* {% endblock %}*/
/* */
