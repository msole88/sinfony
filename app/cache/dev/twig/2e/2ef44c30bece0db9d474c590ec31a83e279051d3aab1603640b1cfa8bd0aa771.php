<?php

/* FOSUserBundle:Security:login.html.twig */
class __TwigTemplate_b9bbf99dd936f84a8e2fa3b49c0ea21777142d10f2df03f1d24290eecf488aa9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Security:login.html.twig", 1);
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
        $__internal_37519e9799c3f65843631e44c56915b1cedface2e0f8bf96716038e2267a0c61 = $this->env->getExtension("native_profiler");
        $__internal_37519e9799c3f65843631e44c56915b1cedface2e0f8bf96716038e2267a0c61->enter($__internal_37519e9799c3f65843631e44c56915b1cedface2e0f8bf96716038e2267a0c61_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Security:login.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_37519e9799c3f65843631e44c56915b1cedface2e0f8bf96716038e2267a0c61->leave($__internal_37519e9799c3f65843631e44c56915b1cedface2e0f8bf96716038e2267a0c61_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_20dea244993d6f9ebfd369c483bda71c1686f908fca6182c42668adf9c61c31b = $this->env->getExtension("native_profiler");
        $__internal_20dea244993d6f9ebfd369c483bda71c1686f908fca6182c42668adf9c61c31b->enter($__internal_20dea244993d6f9ebfd369c483bda71c1686f908fca6182c42668adf9c61c31b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        echo "    ";
        echo twig_include($this->env, $context, "FOSUserBundle:Security:login_content.html.twig");
        echo "
";
        
        $__internal_20dea244993d6f9ebfd369c483bda71c1686f908fca6182c42668adf9c61c31b->leave($__internal_20dea244993d6f9ebfd369c483bda71c1686f908fca6182c42668adf9c61c31b_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Security:login.html.twig";
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
/*     {{ include('FOSUserBundle:Security:login_content.html.twig') }}*/
/* {% endblock fos_user_content %}*/
/* */
