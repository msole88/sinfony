<?php

/* @WebProfiler/Collector/ajax.html.twig */
class __TwigTemplate_233e0f245bdd4f41b1e14a82e2e2740392f22134cfae65d6de86236382dcfbb8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/ajax.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_89aca4f553f3e87baab632a5d45ad0329dd725060b3394dbabd992f8da117a3e = $this->env->getExtension("native_profiler");
        $__internal_89aca4f553f3e87baab632a5d45ad0329dd725060b3394dbabd992f8da117a3e->enter($__internal_89aca4f553f3e87baab632a5d45ad0329dd725060b3394dbabd992f8da117a3e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_89aca4f553f3e87baab632a5d45ad0329dd725060b3394dbabd992f8da117a3e->leave($__internal_89aca4f553f3e87baab632a5d45ad0329dd725060b3394dbabd992f8da117a3e_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_e0cbfbc1e1964ddc2c0294c1656667fe09b920c9f5de39a47f852cd911a31ee6 = $this->env->getExtension("native_profiler");
        $__internal_e0cbfbc1e1964ddc2c0294c1656667fe09b920c9f5de39a47f852cd911a31ee6->enter($__internal_e0cbfbc1e1964ddc2c0294c1656667fe09b920c9f5de39a47f852cd911a31ee6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        // line 4
        echo "    ";
        ob_start();
        // line 5
        echo "        ";
        echo twig_include($this->env, $context, "@WebProfiler/Icon/ajax.svg");
        echo "
        <span class=\"sf-toolbar-value sf-toolbar-ajax-requests\">0</span>
    ";
        $context["icon"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 8
        echo "
    ";
        // line 9
        $context["text"] = ('' === $tmp = "        <div class=\"sf-toolbar-info-piece\">
            <b class=\"sf-toolbar-ajax-info\"></b>
        </div>
        <div class=\"sf-toolbar-info-piece\">
            <table class=\"sf-toolbar-ajax-requests\">
                <thead>
                    <tr>
                        <th>Method</th>
                        <th>URL</th>
                        <th>Time</th>
                        <th>Profile</th>
                    </tr>
                </thead>
                <tbody class=\"sf-toolbar-ajax-request-list\"></tbody>
            </table>
        </div>
    ") ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 27
        echo "
    ";
        // line 28
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/toolbar_item.html.twig", array("link" => false));
        echo "
";
        
        $__internal_e0cbfbc1e1964ddc2c0294c1656667fe09b920c9f5de39a47f852cd911a31ee6->leave($__internal_e0cbfbc1e1964ddc2c0294c1656667fe09b920c9f5de39a47f852cd911a31ee6_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/ajax.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  74 => 28,  71 => 27,  53 => 9,  50 => 8,  43 => 5,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends '@WebProfiler/Profiler/layout.html.twig' %}*/
/* */
/* {% block toolbar %}*/
/*     {% set icon %}*/
/*         {{ include('@WebProfiler/Icon/ajax.svg') }}*/
/*         <span class="sf-toolbar-value sf-toolbar-ajax-requests">0</span>*/
/*     {% endset %}*/
/* */
/*     {% set text %}*/
/*         <div class="sf-toolbar-info-piece">*/
/*             <b class="sf-toolbar-ajax-info"></b>*/
/*         </div>*/
/*         <div class="sf-toolbar-info-piece">*/
/*             <table class="sf-toolbar-ajax-requests">*/
/*                 <thead>*/
/*                     <tr>*/
/*                         <th>Method</th>*/
/*                         <th>URL</th>*/
/*                         <th>Time</th>*/
/*                         <th>Profile</th>*/
/*                     </tr>*/
/*                 </thead>*/
/*                 <tbody class="sf-toolbar-ajax-request-list"></tbody>*/
/*             </table>*/
/*         </div>*/
/*     {% endset %}*/
/* */
/*     {{ include('@WebProfiler/Profiler/toolbar_item.html.twig', { link: false }) }}*/
/* {% endblock %}*/
/* */
