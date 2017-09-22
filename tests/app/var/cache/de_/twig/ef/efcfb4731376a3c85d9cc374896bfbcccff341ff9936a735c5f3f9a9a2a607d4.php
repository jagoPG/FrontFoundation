<?php

/* node_modules/fsevents/node_modules/json-schema/draft-03/json-ref */
class __TwigTemplate_546a5fca4a24be8abaa47cb6a6fe610a7055ac4dc9971be4c76748dd2afddfd4 extends Twig_Template
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
        $__internal_d01fdb7637ccf2a2aef8e9f926188339ca1de191c3e969fb039f2c60fbbdfc7a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d01fdb7637ccf2a2aef8e9f926188339ca1de191c3e969fb039f2c60fbbdfc7a->enter($__internal_d01fdb7637ccf2a2aef8e9f926188339ca1de191c3e969fb039f2c60fbbdfc7a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/fsevents/node_modules/json-schema/draft-03/json-ref"));

        // line 1
        echo "{
\t\"\$schema\" : \"http://json-schema.org/draft-03/hyper-schema#\",
\t\"id\" : \"http://json-schema.org/draft-03/json-ref#\",
\t
\t\"additionalItems\" : {\"\$ref\" : \"#\"},
\t\"additionalProperties\" : {\"\$ref\" : \"#\"},
\t
\t\"links\" : [
\t\t{
\t\t\t\"href\" : \"{id}\",
\t\t\t\"rel\" : \"self\"
\t\t},
\t\t
\t\t{
\t\t\t\"href\" : \"{\$ref}\",
\t\t\t\"rel\" : \"full\"
\t\t},
\t\t
\t\t{
\t\t\t\"href\" : \"{\$schema}\",
\t\t\t\"rel\" : \"describedby\"
\t\t}
\t],
\t
\t\"fragmentResolution\" : \"dot-delimited\"
}";
        
        $__internal_d01fdb7637ccf2a2aef8e9f926188339ca1de191c3e969fb039f2c60fbbdfc7a->leave($__internal_d01fdb7637ccf2a2aef8e9f926188339ca1de191c3e969fb039f2c60fbbdfc7a_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/fsevents/node_modules/json-schema/draft-03/json-ref";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{
\t\"\$schema\" : \"http://json-schema.org/draft-03/hyper-schema#\",
\t\"id\" : \"http://json-schema.org/draft-03/json-ref#\",
\t
\t\"additionalItems\" : {\"\$ref\" : \"#\"},
\t\"additionalProperties\" : {\"\$ref\" : \"#\"},
\t
\t\"links\" : [
\t\t{
\t\t\t\"href\" : \"{id}\",
\t\t\t\"rel\" : \"self\"
\t\t},
\t\t
\t\t{
\t\t\t\"href\" : \"{\$ref}\",
\t\t\t\"rel\" : \"full\"
\t\t},
\t\t
\t\t{
\t\t\t\"href\" : \"{\$schema}\",
\t\t\t\"rel\" : \"describedby\"
\t\t}
\t],
\t
\t\"fragmentResolution\" : \"dot-delimited\"
}", "node_modules/fsevents/node_modules/json-schema/draft-03/json-ref", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/fsevents/node_modules/json-schema/draft-03/json-ref");
    }
}
