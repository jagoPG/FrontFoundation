<?php

/* node_modules/json-schema/draft-01/hyper-schema */
class __TwigTemplate_1abf10c701f843dd810dd9598d535a5580df5dd7a1bbaa8a920ba1b9e1d814c5 extends Twig_Template
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
        $__internal_b7d8fbb211ef6fd7d0d1dae0d8d0d1ae4bc7bf6369afac3c658fad67437af9f6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b7d8fbb211ef6fd7d0d1dae0d8d0d1ae4bc7bf6369afac3c658fad67437af9f6->enter($__internal_b7d8fbb211ef6fd7d0d1dae0d8d0d1ae4bc7bf6369afac3c658fad67437af9f6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/json-schema/draft-01/hyper-schema"));

        // line 1
        echo "{
\t\"\$schema\" : \"http://json-schema.org/draft-01/hyper-schema#\",
\t\"id\" : \"http://json-schema.org/draft-01/hyper-schema#\",

\t\"properties\" : {
\t\t\"links\" : {
\t\t\t\"type\" : \"array\",
\t\t\t\"items\" : {\"\$ref\" : \"http://json-schema.org/draft-01/links#\"},
\t\t\t\"optional\" : true
\t\t},
\t\t
\t\t\"fragmentResolution\" : {
\t\t\t\"type\" : \"string\",
\t\t\t\"optional\" : true,
\t\t\t\"default\" : \"dot-delimited\"
\t\t},
\t\t
\t\t\"root\" : {
\t\t\t\"type\" : \"boolean\",
\t\t\t\"optional\" : true,
\t\t\t\"default\" : false
\t\t},
\t\t
\t\t\"readonly\" : {
\t\t\t\"type\" : \"boolean\",
\t\t\t\"optional\" : true,
\t\t\t\"default\" : false
\t\t},
\t\t
\t\t\"pathStart\" : {
\t\t\t\"type\" : \"string\",
\t\t\t\"optional\" : true,
\t\t\t\"format\" : \"uri\"
\t\t},
\t\t
\t\t\"mediaType\" : {
\t\t\t\"type\" : \"string\",
\t\t\t\"optional\" : true,
\t\t\t\"format\" : \"media-type\"
\t\t},
\t\t
\t\t\"alternate\" : {
\t\t\t\"type\" : \"array\",
\t\t\t\"items\" : {\"\$ref\" : \"#\"},
\t\t\t\"optional\" : true
\t\t}
\t},
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
\t\"fragmentResolution\" : \"dot-delimited\",
\t\"extends\" : {\"\$ref\" : \"http://json-schema.org/draft-01/schema#\"}
}";
        
        $__internal_b7d8fbb211ef6fd7d0d1dae0d8d0d1ae4bc7bf6369afac3c658fad67437af9f6->leave($__internal_b7d8fbb211ef6fd7d0d1dae0d8d0d1ae4bc7bf6369afac3c658fad67437af9f6_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/json-schema/draft-01/hyper-schema";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{
\t\"\$schema\" : \"http://json-schema.org/draft-01/hyper-schema#\",
\t\"id\" : \"http://json-schema.org/draft-01/hyper-schema#\",

\t\"properties\" : {
\t\t\"links\" : {
\t\t\t\"type\" : \"array\",
\t\t\t\"items\" : {\"\$ref\" : \"http://json-schema.org/draft-01/links#\"},
\t\t\t\"optional\" : true
\t\t},
\t\t
\t\t\"fragmentResolution\" : {
\t\t\t\"type\" : \"string\",
\t\t\t\"optional\" : true,
\t\t\t\"default\" : \"dot-delimited\"
\t\t},
\t\t
\t\t\"root\" : {
\t\t\t\"type\" : \"boolean\",
\t\t\t\"optional\" : true,
\t\t\t\"default\" : false
\t\t},
\t\t
\t\t\"readonly\" : {
\t\t\t\"type\" : \"boolean\",
\t\t\t\"optional\" : true,
\t\t\t\"default\" : false
\t\t},
\t\t
\t\t\"pathStart\" : {
\t\t\t\"type\" : \"string\",
\t\t\t\"optional\" : true,
\t\t\t\"format\" : \"uri\"
\t\t},
\t\t
\t\t\"mediaType\" : {
\t\t\t\"type\" : \"string\",
\t\t\t\"optional\" : true,
\t\t\t\"format\" : \"media-type\"
\t\t},
\t\t
\t\t\"alternate\" : {
\t\t\t\"type\" : \"array\",
\t\t\t\"items\" : {\"\$ref\" : \"#\"},
\t\t\t\"optional\" : true
\t\t}
\t},
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
\t\"fragmentResolution\" : \"dot-delimited\",
\t\"extends\" : {\"\$ref\" : \"http://json-schema.org/draft-01/schema#\"}
}", "node_modules/json-schema/draft-01/hyper-schema", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/json-schema/draft-01/hyper-schema");
    }
}
