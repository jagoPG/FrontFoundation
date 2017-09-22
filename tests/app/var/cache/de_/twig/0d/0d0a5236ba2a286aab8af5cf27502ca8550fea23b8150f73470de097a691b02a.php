<?php

/* node_modules/fsevents/node_modules/json-schema/draft-04/hyper-schema */
class __TwigTemplate_eb713e22718975121c2ceed1f9ef0339a3314e4031a84b37438fdfce721153ca extends Twig_Template
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
        $__internal_0fb459d12dea128625f360b693a536da06906a89068afc13a27deeb3d3f1afcb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0fb459d12dea128625f360b693a536da06906a89068afc13a27deeb3d3f1afcb->enter($__internal_0fb459d12dea128625f360b693a536da06906a89068afc13a27deeb3d3f1afcb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/fsevents/node_modules/json-schema/draft-04/hyper-schema"));

        // line 1
        echo "{
\t\"\$schema\" : \"http://json-schema.org/draft-04/hyper-schema#\",
\t\"extends\" : {\"\$ref\" : \"http://json-schema.org/draft-04/schema#\"},
\t\"id\" : \"http://json-schema.org/draft-04/hyper-schema#\",

\t\"properties\" : {
\t\t\"links\" : {
\t\t\t\"type\" : \"array\",
\t\t\t\"items\" : {\"\$ref\" : \"http://json-schema.org/draft-04/links#\"}
\t\t},

\t\t\"fragmentResolution\" : {
\t\t\t\"type\" : \"string\",
\t\t\t\"default\" : \"json-pointer\"
\t\t},

\t\t\"root\" : {
\t\t\t\"type\" : \"boolean\",
\t\t\t\"default\" : false
\t\t},

\t\t\"readonly\" : {
\t\t\t\"type\" : \"boolean\",
\t\t\t\"default\" : false
\t\t},

\t\t\"contentEncoding\" : {
\t\t\t\"type\" : \"string\"
\t\t},

\t\t\"pathStart\" : {
\t\t\t\"type\" : \"string\",
\t\t\t\"format\" : \"uri\"
\t\t},

\t\t\"mediaType\" : {
\t\t\t\"type\" : \"string\",
\t\t\t\"format\" : \"media-type\"
\t\t}
\t},

\t\"links\" : [
\t\t{
\t\t\t\"href\" : \"{id}\",
\t\t\t\"rel\" : \"self\"
\t\t},

\t\t{
\t\t\t\"href\" : \"{\$ref}\",
\t\t\t\"rel\" : \"full\"
\t\t},

\t\t{
\t\t\t\"href\" : \"{\$schema}\",
\t\t\t\"rel\" : \"describedby\"
\t\t}
\t],

\t\"fragmentResolution\" : \"json-pointer\"
}
";
        
        $__internal_0fb459d12dea128625f360b693a536da06906a89068afc13a27deeb3d3f1afcb->leave($__internal_0fb459d12dea128625f360b693a536da06906a89068afc13a27deeb3d3f1afcb_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/fsevents/node_modules/json-schema/draft-04/hyper-schema";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{
\t\"\$schema\" : \"http://json-schema.org/draft-04/hyper-schema#\",
\t\"extends\" : {\"\$ref\" : \"http://json-schema.org/draft-04/schema#\"},
\t\"id\" : \"http://json-schema.org/draft-04/hyper-schema#\",

\t\"properties\" : {
\t\t\"links\" : {
\t\t\t\"type\" : \"array\",
\t\t\t\"items\" : {\"\$ref\" : \"http://json-schema.org/draft-04/links#\"}
\t\t},

\t\t\"fragmentResolution\" : {
\t\t\t\"type\" : \"string\",
\t\t\t\"default\" : \"json-pointer\"
\t\t},

\t\t\"root\" : {
\t\t\t\"type\" : \"boolean\",
\t\t\t\"default\" : false
\t\t},

\t\t\"readonly\" : {
\t\t\t\"type\" : \"boolean\",
\t\t\t\"default\" : false
\t\t},

\t\t\"contentEncoding\" : {
\t\t\t\"type\" : \"string\"
\t\t},

\t\t\"pathStart\" : {
\t\t\t\"type\" : \"string\",
\t\t\t\"format\" : \"uri\"
\t\t},

\t\t\"mediaType\" : {
\t\t\t\"type\" : \"string\",
\t\t\t\"format\" : \"media-type\"
\t\t}
\t},

\t\"links\" : [
\t\t{
\t\t\t\"href\" : \"{id}\",
\t\t\t\"rel\" : \"self\"
\t\t},

\t\t{
\t\t\t\"href\" : \"{\$ref}\",
\t\t\t\"rel\" : \"full\"
\t\t},

\t\t{
\t\t\t\"href\" : \"{\$schema}\",
\t\t\t\"rel\" : \"describedby\"
\t\t}
\t],

\t\"fragmentResolution\" : \"json-pointer\"
}
", "node_modules/fsevents/node_modules/json-schema/draft-04/hyper-schema", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/fsevents/node_modules/json-schema/draft-04/hyper-schema");
    }
}
