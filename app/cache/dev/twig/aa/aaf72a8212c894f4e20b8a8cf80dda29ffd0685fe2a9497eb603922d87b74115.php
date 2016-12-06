<?php

/* FOSUserBundle:Registration:confirmed.html.twig */
class __TwigTemplate_db95b4729d47a972cd835c00421fbcd2f0f7324f96a71b618342324803a11807 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Registration:confirmed.html.twig", 1);
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
        $__internal_c255ae7a2619834dbc5773cb9a4e0b11c3b9498d518b081ef8b719376ee594e1 = $this->env->getExtension("native_profiler");
        $__internal_c255ae7a2619834dbc5773cb9a4e0b11c3b9498d518b081ef8b719376ee594e1->enter($__internal_c255ae7a2619834dbc5773cb9a4e0b11c3b9498d518b081ef8b719376ee594e1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:confirmed.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c255ae7a2619834dbc5773cb9a4e0b11c3b9498d518b081ef8b719376ee594e1->leave($__internal_c255ae7a2619834dbc5773cb9a4e0b11c3b9498d518b081ef8b719376ee594e1_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_96de129893d4f4bc6183137d34d54256aa2a2c77b24f8e872a93dc7216346cbf = $this->env->getExtension("native_profiler");
        $__internal_96de129893d4f4bc6183137d34d54256aa2a2c77b24f8e872a93dc7216346cbf->enter($__internal_96de129893d4f4bc6183137d34d54256aa2a2c77b24f8e872a93dc7216346cbf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "    <p>";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("registration.confirmed", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array())), "FOSUserBundle"), "html", null, true);
        echo "</p>
    ";
        // line 7
        if ((isset($context["targetUrl"]) ? $context["targetUrl"] : $this->getContext($context, "targetUrl"))) {
            // line 8
            echo "    <p><a href=\"";
            echo twig_escape_filter($this->env, (isset($context["targetUrl"]) ? $context["targetUrl"] : $this->getContext($context, "targetUrl")), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("registration.back", array(), "FOSUserBundle"), "html", null, true);
            echo "</a></p>
    ";
        }
        
        $__internal_96de129893d4f4bc6183137d34d54256aa2a2c77b24f8e872a93dc7216346cbf->leave($__internal_96de129893d4f4bc6183137d34d54256aa2a2c77b24f8e872a93dc7216346cbf_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:confirmed.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  47 => 8,  45 => 7,  40 => 6,  34 => 5,  11 => 1,);
    }
}
/* {% extends "FOSUserBundle::layout.html.twig" %}*/
/* */
/* {% trans_default_domain 'FOSUserBundle' %}*/
/* */
/* {% block fos_user_content %}*/
/*     <p>{{ 'registration.confirmed'|trans({'%username%': user.username}) }}</p>*/
/*     {% if targetUrl %}*/
/*     <p><a href="{{ targetUrl }}">{{ 'registration.back'|trans }}</a></p>*/
/*     {% endif %}*/
/* {% endblock fos_user_content %}*/
/* */
