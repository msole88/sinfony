<?php

/* @WebProfiler/Profiler/header.html.twig */
class __TwigTemplate_374d69447d23d57d8822f945fcbab9f186d8d09011fff9a387c9a0b69bb0e5e5 extends Twig_Template
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
        $__internal_3353fa4b9a0d6c1d2171c767714426f5c0c171f3570412248cca43ffcf19f461 = $this->env->getExtension("native_profiler");
        $__internal_3353fa4b9a0d6c1d2171c767714426f5c0c171f3570412248cca43ffcf19f461->enter($__internal_3353fa4b9a0d6c1d2171c767714426f5c0c171f3570412248cca43ffcf19f461_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/header.html.twig"));

        // line 1
        echo "<div id=\"header\">
    <div class=\"container\">
        <h1>";
        // line 3
        echo twig_include($this->env, $context, "@WebProfiler/Icon/symfony.svg");
        echo " Symfony <span>Profiler</span></h1>

        <div class=\"search\">
            <form method=\"get\" action=\"https://symfony.com/search\" target=\"_blank\">
                <div class=\"form-row\">
                    <input name=\"q\" id=\"search-id\" type=\"search\" placeholder=\"search on symfony.com\">
                    <button type=\"submit\" class=\"btn\">Search</button>
                </div>
           </form>
        </div>
    </div>
</div>
";
        
        $__internal_3353fa4b9a0d6c1d2171c767714426f5c0c171f3570412248cca43ffcf19f461->leave($__internal_3353fa4b9a0d6c1d2171c767714426f5c0c171f3570412248cca43ffcf19f461_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/header.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  26 => 3,  22 => 1,);
    }
}
/* <div id="header">*/
/*     <div class="container">*/
/*         <h1>{{ include('@WebProfiler/Icon/symfony.svg') }} Symfony <span>Profiler</span></h1>*/
/* */
/*         <div class="search">*/
/*             <form method="get" action="https://symfony.com/search" target="_blank">*/
/*                 <div class="form-row">*/
/*                     <input name="q" id="search-id" type="search" placeholder="search on symfony.com">*/
/*                     <button type="submit" class="btn">Search</button>*/
/*                 </div>*/
/*            </form>*/
/*         </div>*/
/*     </div>*/
/* </div>*/
/* */
