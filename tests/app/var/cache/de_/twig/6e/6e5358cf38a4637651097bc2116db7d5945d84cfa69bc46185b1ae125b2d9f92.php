<?php

/* node_modules/fsevents/node_modules/json-schema/draft-00/json-ref */
class __TwigTemplate_107377f6ebc33bcf720ab028a03c2240a2a2c191b70262dfa2716a20cbd1b83a extends Twig_Template
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
        $__internal_68f1d0246736c0c1aa39cabf6e20d84a77f393f1d34d3b84c1b2d3a2180ed6fb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_68f1d0246736c0c1aa39cabf6e20d84a77f393f1d34d3b84c1b2d3a2180ed6fb->enter($__internal_68f1d0246736c0c1aa39cabf6e20d84a77f393f1d34d3b84c1b2d3a2180ed6fb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/fsevents/node_modules/json-schema/draft-00/json-ref"));

        // line 1
        echo "{
\t\"\$schema\" : \"http://json-schema.org/draft-00/hyper-schema#\",
\t\"id\" : \"http://json-schema.org/draft-00/json-ref#\",
\t
\t\"items\" : {\"\$ref\" : \"#\"},
\t\"additionalProperties\" : {\"\$ref\" : \"#\"},
\t
\t\"links\" : [
\t\t{
\t\t\t\"href\" : \"{\$ref}\",
\t\t\t\"rel\" : \"full\"
\t\t},
\t\t
\t\t{
\t\t\t\"href\" : \"{\$schema}\",
\t\t\t\"rel\" : \"describedby\"
\t\t},
\t\t
\t\t{
\t\t\t\"href\" : \"{id}\",
\t\t\t\"rel\" : \"self\"
\t\t}
\t],
\t
\t\"fragmentResolution\" : \"dot-delimited\"
}";
        
        $__internal_68f1d0246736c0c1aa39cabf6e20d84a77f393f1d34d3b84c1b2d3a2180ed6fb->leave($__internal_68f1d0246736c0c1aa39cabf6e20d84a77f393f1d34d3b84c1b2d3a2180ed6fb_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/fsevents/node_modules/json-schema/draft-00/json-ref";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{
\t\"\$schema\" : \"http://json-schema.org/draft-00/hyper-schema#\",
\t\"id\" : \"http://json-schema.org/draft-00/json-ref#\",
\t
\t\"items\" : {\"\$ref\" : \"#\"},
\t\"additionalProperties\" : {\"\$ref\" : \"#\"},
\t
\t\"links\" : [
\t\t{
\t\t\t\"href\" : \"{\$ref}\",
\t\t\t\"rel\" : \"full\"
\t\t},
\t\t
\t\t{
\t\t\t\"href\" : \"{\$schema}\",
\t\t\t\"rel\" : \"describedby\"
\t\t},
\t\t
\t\t{
\t\t\t\"href\" : \"{id}\",
\t\t\t\"rel\" : \"self\"
\t\t}
\t],
\t
\t\"fragmentResolution\" : \"dot-delimited\"
}", "node_modules/fsevents/node_modules/json-schema/draft-00/json-ref", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/fsevents/node_modules/json-schema/draft-00/json-ref");
    }
}
