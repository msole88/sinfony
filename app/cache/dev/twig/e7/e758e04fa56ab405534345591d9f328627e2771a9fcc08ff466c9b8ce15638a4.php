<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_6ad415af12e6f6398acf4f7bd0d4476ae63b01e757a9741e32fbcfbbb19401a4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@Twig/Exception/exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_89007bfee0eeb24617490f1055d678cf88e335696fefdf178ecd1b57d9680785 = $this->env->getExtension("native_profiler");
        $__internal_89007bfee0eeb24617490f1055d678cf88e335696fefdf178ecd1b57d9680785->enter($__internal_89007bfee0eeb24617490f1055d678cf88e335696fefdf178ecd1b57d9680785_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_89007bfee0eeb24617490f1055d678cf88e335696fefdf178ecd1b57d9680785->leave($__internal_89007bfee0eeb24617490f1055d678cf88e335696fefdf178ecd1b57d9680785_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_490bdf81f3463b4cab763d5c56a5abd07133b5d71c7ccfdb9e61ee5421564f9b = $this->env->getExtension("native_profiler");
        $__internal_490bdf81f3463b4cab763d5c56a5abd07133b5d71c7ccfdb9e61ee5421564f9b->enter($__internal_490bdf81f3463b4cab763d5c56a5abd07133b5d71c7ccfdb9e61ee5421564f9b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_490bdf81f3463b4cab763d5c56a5abd07133b5d71c7ccfdb9e61ee5421564f9b->leave($__internal_490bdf81f3463b4cab763d5c56a5abd07133b5d71c7ccfdb9e61ee5421564f9b_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_615edc5e4047ba613078c319b125ae4fada224d5936b883620f6debbd82dada6 = $this->env->getExtension("native_profiler");
        $__internal_615edc5e4047ba613078c319b125ae4fada224d5936b883620f6debbd82dada6->enter($__internal_615edc5e4047ba613078c319b125ae4fada224d5936b883620f6debbd82dada6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_615edc5e4047ba613078c319b125ae4fada224d5936b883620f6debbd82dada6->leave($__internal_615edc5e4047ba613078c319b125ae4fada224d5936b883620f6debbd82dada6_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_b026024838e60e8f6b052cfbde5d96ab7e2d9ceea94dc7273ea297ee7460e9da = $this->env->getExtension("native_profiler");
        $__internal_b026024838e60e8f6b052cfbde5d96ab7e2d9ceea94dc7273ea297ee7460e9da->enter($__internal_b026024838e60e8f6b052cfbde5d96ab7e2d9ceea94dc7273ea297ee7460e9da_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_b026024838e60e8f6b052cfbde5d96ab7e2d9ceea94dc7273ea297ee7460e9da->leave($__internal_b026024838e60e8f6b052cfbde5d96ab7e2d9ceea94dc7273ea297ee7460e9da_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 12,  72 => 11,  58 => 8,  52 => 7,  42 => 4,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@Twig/layout.html.twig' %}*/
/* */
/* {% block head %}*/
/*     <link href="{{ absolute_url(asset('bundles/framework/css/exception.css')) }}" rel="stylesheet" type="text/css" media="all" />*/
/* {% endblock %}*/
/* */
/* {% block title %}*/
/*     {{ exception.message }} ({{ status_code }} {{ status_text }})*/
/* {% endblock %}*/
/* */
/* {% block body %}*/
/*     {% include '@Twig/Exception/exception.html.twig' %}*/
/* {% endblock %}*/
/* */
