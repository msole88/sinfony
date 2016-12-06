<?php

/* base.html.twig */
class __TwigTemplate_f2e0ddaab2fec9f5d47019b0ff2f2657a227b06cf94262196204690465227480 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_a08d5debeb027b4999775bb1bbf87490680c259ae48db649cf014d9bf83eacdf = $this->env->getExtension("native_profiler");
        $__internal_a08d5debeb027b4999775bb1bbf87490680c259ae48db649cf014d9bf83eacdf->enter($__internal_a08d5debeb027b4999775bb1bbf87490680c259ae48db649cf014d9bf83eacdf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 7
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
        ";
        // line 10
        $this->displayBlock('body', $context, $blocks);
        // line 11
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 12
        echo "    </body>
</html>
";
        
        $__internal_a08d5debeb027b4999775bb1bbf87490680c259ae48db649cf014d9bf83eacdf->leave($__internal_a08d5debeb027b4999775bb1bbf87490680c259ae48db649cf014d9bf83eacdf_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_3511a204cbeac95ad6964e4b37ed74910629c3b9046ce28fe469ef5ca5e56984 = $this->env->getExtension("native_profiler");
        $__internal_3511a204cbeac95ad6964e4b37ed74910629c3b9046ce28fe469ef5ca5e56984->enter($__internal_3511a204cbeac95ad6964e4b37ed74910629c3b9046ce28fe469ef5ca5e56984_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_3511a204cbeac95ad6964e4b37ed74910629c3b9046ce28fe469ef5ca5e56984->leave($__internal_3511a204cbeac95ad6964e4b37ed74910629c3b9046ce28fe469ef5ca5e56984_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_370cdcc4d3d81f3b6c26967d0d43b286cc9defd6e55d12ec35b36c5628c76f6d = $this->env->getExtension("native_profiler");
        $__internal_370cdcc4d3d81f3b6c26967d0d43b286cc9defd6e55d12ec35b36c5628c76f6d->enter($__internal_370cdcc4d3d81f3b6c26967d0d43b286cc9defd6e55d12ec35b36c5628c76f6d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_370cdcc4d3d81f3b6c26967d0d43b286cc9defd6e55d12ec35b36c5628c76f6d->leave($__internal_370cdcc4d3d81f3b6c26967d0d43b286cc9defd6e55d12ec35b36c5628c76f6d_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_ff947d6c79702d29ff9942dcaf6f0d18bde345faffa62ffa11ab1298d75c71dc = $this->env->getExtension("native_profiler");
        $__internal_ff947d6c79702d29ff9942dcaf6f0d18bde345faffa62ffa11ab1298d75c71dc->enter($__internal_ff947d6c79702d29ff9942dcaf6f0d18bde345faffa62ffa11ab1298d75c71dc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_ff947d6c79702d29ff9942dcaf6f0d18bde345faffa62ffa11ab1298d75c71dc->leave($__internal_ff947d6c79702d29ff9942dcaf6f0d18bde345faffa62ffa11ab1298d75c71dc_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_4148c8e06ba2c1b164d14ba88a646640413f10687577a75401f5452f7ce12a13 = $this->env->getExtension("native_profiler");
        $__internal_4148c8e06ba2c1b164d14ba88a646640413f10687577a75401f5452f7ce12a13->enter($__internal_4148c8e06ba2c1b164d14ba88a646640413f10687577a75401f5452f7ce12a13_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_4148c8e06ba2c1b164d14ba88a646640413f10687577a75401f5452f7ce12a13->leave($__internal_4148c8e06ba2c1b164d14ba88a646640413f10687577a75401f5452f7ce12a13_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  93 => 11,  82 => 10,  71 => 6,  59 => 5,  50 => 12,  47 => 11,  45 => 10,  38 => 7,  36 => 6,  32 => 5,  26 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html>*/
/*     <head>*/
/*         <meta charset="UTF-8" />*/
/*         <title>{% block title %}Welcome!{% endblock %}</title>*/
/*         {% block stylesheets %}{% endblock %}*/
/*         <link rel="icon" type="image/x-icon" href="{{ asset('favicon.ico') }}" />*/
/*     </head>*/
/*     <body>*/
/*         {% block body %}{% endblock %}*/
/*         {% block javascripts %}{% endblock %}*/
/*     </body>*/
/* </html>*/
/* */
