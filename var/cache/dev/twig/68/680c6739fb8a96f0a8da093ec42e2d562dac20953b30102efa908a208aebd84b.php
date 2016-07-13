<?php

/* FOSUserBundle:Registration:register_content.html.twig */
class __TwigTemplate_d43875d5351e84eb6917666c0cac0b4fd8ed05045d075e7865aeb7c1fd16ffb4 extends Twig_Template
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
        $__internal_a09eda4370c2534018c956e1ea14d4c4b9f7cceffdce454ac5120cf832dbd9f8 = $this->env->getExtension("native_profiler");
        $__internal_a09eda4370c2534018c956e1ea14d4c4b9f7cceffdce454ac5120cf832dbd9f8->enter($__internal_a09eda4370c2534018c956e1ea14d4c4b9f7cceffdce454ac5120cf832dbd9f8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:register_content.html.twig"));

        // line 2
        echo "


<div class=\"container\">
  <div class=\"row\">
    <div class=\"col-md-offset-3 col-md-6\">

      ";
        // line 10
        echo "
      ";
        // line 11
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start', array("method" => "post", "attr" => array("class" => "fos_user_registration_register")));
        echo "

      <div class=\"form-group\">

            ";
        // line 15
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "nom", array()), 'label');
        echo "
            ";
        // line 16
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "nom", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
            ";
        // line 17
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "nom", array()), 'errors');
        echo "

          </div>

          <div class=\"form-group\">
            ";
        // line 22
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "prenom", array()), 'label');
        echo "
            ";
        // line 23
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "prenom", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
            ";
        // line 24
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "prenom", array()), 'errors');
        echo "
          </div>

        <div class=\"form-group\">
            ";
        // line 28
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "username", array()), 'label');
        echo "
            ";
        // line 29
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "username", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
          </div>

          <div class=\"form-group\">
            ";
        // line 33
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "age", array()), 'label');
        echo "
            ";
        // line 34
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "age", array()), 'widget', array("attr" => array("class" => "")));
        echo "
          </div>

          <div class=\"form-group\">
            ";
        // line 38
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "adresse", array()), 'label');
        echo "
            ";
        // line 39
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "adresse", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
          </div>

          <div class=\"form-group\">
            ";
        // line 43
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "email", array()), 'label');
        echo "
            ";
        // line 44
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "email", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
          </div>

          <div class=\"form-group\">
            ";
        // line 48
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "sexe", array()), 'label');
        echo "
            ";
        // line 49
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "sexe", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
          </div>

          <div class=\"form-group\">
            ";
        // line 53
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "recherche", array()), 'label');
        echo "
            ";
        // line 54
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "recherche", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
          </div>

          <div class=\"form-group\">
            ";
        // line 58
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "description", array()), 'label');
        echo "
            ";
        // line 59
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "description", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
          </div>

          <div class=\"form-group\">
            ";
        // line 63
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "sport", array()), 'label');
        echo "
            ";
        // line 64
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "sport", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
          </div>

          <div class=\"form-group\">
            ";
        // line 68
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "telephone", array()), 'label');
        echo "
            ";
        // line 69
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "telephone", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
          </div>

          <div class=\"form-group\">
            ";
        // line 73
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "plainPassword", array()), "first", array()), 'label');
        echo "
            ";
        // line 74
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "plainPassword", array()), "first", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
            ";
        // line 75
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "plainPassword", array()), "first", array()), 'errors');
        echo "
          </div>

          <div class=\"form-group\">
            ";
        // line 79
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "plainPassword", array()), "second", array()), 'label');
        echo "
            ";
        // line 80
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "plainPassword", array()), "second", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
            ";
        // line 81
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "plainPassword", array()), "second", array()), 'errors');
        echo "
          </div>

          <div class=\"text-center\">
            <button type=\"submit\" value=\"Confirmer\" class=\"btn-primary\" />Confirmer</button>
          </div>

      ";
        // line 88
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "

    </div>
  </div>
</div>


<script src=\"https://cdnjs.cloudflare.com/ajax/libs/jquery/3.0.0/jquery.js\"></script>
";
        
        $__internal_a09eda4370c2534018c956e1ea14d4c4b9f7cceffdce454ac5120cf832dbd9f8->leave($__internal_a09eda4370c2534018c956e1ea14d4c4b9f7cceffdce454ac5120cf832dbd9f8_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:register_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  204 => 88,  194 => 81,  190 => 80,  186 => 79,  179 => 75,  175 => 74,  171 => 73,  164 => 69,  160 => 68,  153 => 64,  149 => 63,  142 => 59,  138 => 58,  131 => 54,  127 => 53,  120 => 49,  116 => 48,  109 => 44,  105 => 43,  98 => 39,  94 => 38,  87 => 34,  83 => 33,  76 => 29,  72 => 28,  65 => 24,  61 => 23,  57 => 22,  49 => 17,  45 => 16,  41 => 15,  34 => 11,  31 => 10,  22 => 2,);
    }
}
/* {% trans_default_domain 'FOSUserBundle' %}*/
/* */
/* */
/* */
/* <div class="container">*/
/*   <div class="row">*/
/*     <div class="col-md-offset-3 col-md-6">*/
/* */
/*       {#{ form_start(form, {'method': 'post', 'action': path('fos_user_registration_register'), 'attr': {'class': 'fos_user_registration_register'}}) }#}*/
/* */
/*       {{ form_start(form, {'method': 'post', 'attr': {'class': 'fos_user_registration_register'}}) }}*/
/* */
/*       <div class="form-group">*/
/* */
/*             {{ form_label(form.nom) }}*/
/*             {{ form_widget(form.nom, {'attr': {'class':'form-control'}}) }}*/
/*             {{ form_errors(form.nom) }}*/
/* */
/*           </div>*/
/* */
/*           <div class="form-group">*/
/*             {{ form_label(form.prenom) }}*/
/*             {{ form_widget(form.prenom, {'attr': {'class':'form-control'}}) }}*/
/*             {{ form_errors(form.prenom) }}*/
/*           </div>*/
/* */
/*         <div class="form-group">*/
/*             {{ form_label(form.username) }}*/
/*             {{ form_widget(form.username, {'attr': {'class':'form-control'}}) }}*/
/*           </div>*/
/* */
/*           <div class="form-group">*/
/*             {{ form_label(form.age) }}*/
/*             {{ form_widget(form.age, {'attr': {'class':''}}) }}*/
/*           </div>*/
/* */
/*           <div class="form-group">*/
/*             {{ form_label(form.adresse) }}*/
/*             {{ form_widget(form.adresse, {'attr': {'class':'form-control'}}) }}*/
/*           </div>*/
/* */
/*           <div class="form-group">*/
/*             {{ form_label(form.email) }}*/
/*             {{ form_widget(form.email, {'attr': {'class':'form-control'}}) }}*/
/*           </div>*/
/* */
/*           <div class="form-group">*/
/*             {{ form_label(form.sexe) }}*/
/*             {{ form_widget(form.sexe, {'attr': {'class':'form-control'}}) }}*/
/*           </div>*/
/* */
/*           <div class="form-group">*/
/*             {{ form_label(form.recherche) }}*/
/*             {{ form_widget(form.recherche, {'attr': {'class':'form-control'}}) }}*/
/*           </div>*/
/* */
/*           <div class="form-group">*/
/*             {{ form_label(form.description) }}*/
/*             {{ form_widget(form.description, {'attr': {'class':'form-control'}}) }}*/
/*           </div>*/
/* */
/*           <div class="form-group">*/
/*             {{ form_label(form.sport) }}*/
/*             {{ form_widget(form.sport, {'attr': {'class':'form-control'}}) }}*/
/*           </div>*/
/* */
/*           <div class="form-group">*/
/*             {{ form_label(form.telephone) }}*/
/*             {{ form_widget(form.telephone, {'attr': {'class':'form-control'}}) }}*/
/*           </div>*/
/* */
/*           <div class="form-group">*/
/*             {{ form_label(form.plainPassword.first) }}*/
/*             {{ form_widget(form.plainPassword.first, {'attr': {'class':'form-control'}}) }}*/
/*             {{ form_errors(form.plainPassword.first) }}*/
/*           </div>*/
/* */
/*           <div class="form-group">*/
/*             {{ form_label(form.plainPassword.second) }}*/
/*             {{ form_widget(form.plainPassword.second, {'attr': {'class':'form-control'}}) }}*/
/*             {{ form_errors(form.plainPassword.second) }}*/
/*           </div>*/
/* */
/*           <div class="text-center">*/
/*             <button type="submit" value="Confirmer" class="btn-primary" />Confirmer</button>*/
/*           </div>*/
/* */
/*       {{ form_end(form) }}*/
/* */
/*     </div>*/
/*   </div>*/
/* </div>*/
/* */
/* */
/* <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.0.0/jquery.js"></script>*/
/* */
