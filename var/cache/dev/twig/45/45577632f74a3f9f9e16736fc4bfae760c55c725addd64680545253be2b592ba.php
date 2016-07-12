<?php

/* rencontrePublic-new.html.twig */
class __TwigTemplate_66418d6c749b550234b8c0921a67bb50c8ee59f47bdf8aa27bf15b56c710a05d extends Twig_Template
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
        $__internal_63b8d07c06b213c0b5e47f47abdda93bc836fbd8491cb3cb29dae31fa85ba4d8 = $this->env->getExtension("native_profiler");
        $__internal_63b8d07c06b213c0b5e47f47abdda93bc836fbd8491cb3cb29dae31fa85ba4d8->enter($__internal_63b8d07c06b213c0b5e47f47abdda93bc836fbd8491cb3cb29dae31fa85ba4d8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "rencontrePublic-new.html.twig"));

        // line 1
        $this->loadTemplate("FOSUserBundle::layout.html.twig", "rencontrePublic-new.html.twig", 1)->display($context);
        // line 2
        echo "
";
        // line 3
        $this->displayBlock('body', $context, $blocks);
        // line 50
        echo "
";
        // line 51
        $this->displayBlock('footer', $context, $blocks);
        
        $__internal_63b8d07c06b213c0b5e47f47abdda93bc836fbd8491cb3cb29dae31fa85ba4d8->leave($__internal_63b8d07c06b213c0b5e47f47abdda93bc836fbd8491cb3cb29dae31fa85ba4d8_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_00d688a511158d0b196519dd75517eb47f6070068a84a5758cffcafd7ed76d9c = $this->env->getExtension("native_profiler");
        $__internal_00d688a511158d0b196519dd75517eb47f6070068a84a5758cffcafd7ed76d9c->enter($__internal_00d688a511158d0b196519dd75517eb47f6070068a84a5758cffcafd7ed76d9c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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

";
        
        $__internal_00d688a511158d0b196519dd75517eb47f6070068a84a5758cffcafd7ed76d9c->leave($__internal_00d688a511158d0b196519dd75517eb47f6070068a84a5758cffcafd7ed76d9c_prof);

    }

    // line 51
    public function block_footer($context, array $blocks = array())
    {
        $__internal_4d53fc37545f652ae69c295d463f5357f14ae0c9a335598d84531ec4b1210e39 = $this->env->getExtension("native_profiler");
        $__internal_4d53fc37545f652ae69c295d463f5357f14ae0c9a335598d84531ec4b1210e39->enter($__internal_4d53fc37545f652ae69c295d463f5357f14ae0c9a335598d84531ec4b1210e39_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        
        $__internal_4d53fc37545f652ae69c295d463f5357f14ae0c9a335598d84531ec4b1210e39->leave($__internal_4d53fc37545f652ae69c295d463f5357f14ae0c9a335598d84531ec4b1210e39_prof);

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
        return array (  144 => 51,  131 => 44,  121 => 37,  117 => 36,  108 => 30,  104 => 29,  96 => 24,  92 => 23,  88 => 22,  81 => 18,  77 => 17,  73 => 16,  66 => 12,  62 => 11,  58 => 10,  53 => 8,  47 => 4,  41 => 3,  34 => 51,  31 => 50,  29 => 3,  26 => 2,  24 => 1,);
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
/* {% endblock %}*/
/* */
/* {% block footer %}*/
/* {% endblock %}*/
/* */
