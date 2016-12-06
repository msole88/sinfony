<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_e1594890686ecc90418dd113884fbaf7e5ab079f3c47a18614c8ddf9498b4722 extends Twig_Template
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
        $__internal_5b8656970b45e69a813a15633cf49bf9ca39688918f1bba6911255d85746bc14 = $this->env->getExtension("native_profiler");
        $__internal_5b8656970b45e69a813a15633cf49bf9ca39688918f1bba6911255d85746bc14->enter($__internal_5b8656970b45e69a813a15633cf49bf9ca39688918f1bba6911255d85746bc14_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5b8656970b45e69a813a15633cf49bf9ca39688918f1bba6911255d85746bc14->leave($__internal_5b8656970b45e69a813a15633cf49bf9ca39688918f1bba6911255d85746bc14_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_7b29679a8e45c2f91d0f8d506fc13fc49eebb9bb496ceede1168230f82d2a728 = $this->env->getExtension("native_profiler");
        $__internal_7b29679a8e45c2f91d0f8d506fc13fc49eebb9bb496ceede1168230f82d2a728->enter($__internal_7b29679a8e45c2f91d0f8d506fc13fc49eebb9bb496ceede1168230f82d2a728_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_7b29679a8e45c2f91d0f8d506fc13fc49eebb9bb496ceede1168230f82d2a728->leave($__internal_7b29679a8e45c2f91d0f8d506fc13fc49eebb9bb496ceede1168230f82d2a728_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_706dd6806d73d64178601661fb5a52920a1f46c09ebbe15c78a15197b8678933 = $this->env->getExtension("native_profiler");
        $__internal_706dd6806d73d64178601661fb5a52920a1f46c09ebbe15c78a15197b8678933->enter($__internal_706dd6806d73d64178601661fb5a52920a1f46c09ebbe15c78a15197b8678933_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_706dd6806d73d64178601661fb5a52920a1f46c09ebbe15c78a15197b8678933->leave($__internal_706dd6806d73d64178601661fb5a52920a1f46c09ebbe15c78a15197b8678933_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_2f6f501d70a2fc5bd778c4feb5c722d49b91d20ca0bf82ce9ef8465dfa08ac2e = $this->env->getExtension("native_profiler");
        $__internal_2f6f501d70a2fc5bd778c4feb5c722d49b91d20ca0bf82ce9ef8465dfa08ac2e->enter($__internal_2f6f501d70a2fc5bd778c4feb5c722d49b91d20ca0bf82ce9ef8465dfa08ac2e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_2f6f501d70a2fc5bd778c4feb5c722d49b91d20ca0bf82ce9ef8465dfa08ac2e->leave($__internal_2f6f501d70a2fc5bd778c4feb5c722d49b91d20ca0bf82ce9ef8465dfa08ac2e_prof);

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
