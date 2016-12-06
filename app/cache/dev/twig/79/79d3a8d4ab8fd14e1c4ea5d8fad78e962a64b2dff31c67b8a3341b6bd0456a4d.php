<?php

/* FOSUserBundle:Registration:register.html.twig */
class __TwigTemplate_ee6a94c67f97e275576b2766782dd89be85a04198074815ed65bd7b9506bb1f1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Registration:register.html.twig", 1);
        $this->blocks = array(
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "FOSUserBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_091bf05cbd136fb90083471638c57e1214073282768b86da401ea86baea43145 = $this->env->getExtension("native_profiler");
        $__internal_091bf05cbd136fb90083471638c57e1214073282768b86da401ea86baea43145->enter($__internal_091bf05cbd136fb90083471638c57e1214073282768b86da401ea86baea43145_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:register.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_091bf05cbd136fb90083471638c57e1214073282768b86da401ea86baea43145->leave($__internal_091bf05cbd136fb90083471638c57e1214073282768b86da401ea86baea43145_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_596306645d70f4d883598898f94b0dcae907a578af208557b66789ce027121ff = $this->env->getExtension("native_profiler");
        $__internal_596306645d70f4d883598898f94b0dcae907a578af208557b66789ce027121ff->enter($__internal_596306645d70f4d883598898f94b0dcae907a578af208557b66789ce027121ff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Registration:register_content.html.twig", "FOSUserBundle:Registration:register.html.twig", 4)->display($context);
        
        $__internal_596306645d70f4d883598898f94b0dcae907a578af208557b66789ce027121ff->leave($__internal_596306645d70f4d883598898f94b0dcae907a578af208557b66789ce027121ff_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:register.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends "FOSUserBundle::layout.html.twig" %}*/
/* */
/* {% block fos_user_content %}*/
/* {% include "FOSUserBundle:Registration:register_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
