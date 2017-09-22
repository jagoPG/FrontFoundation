<?php

/* node_modules/json-schema/draft-04/hyper-schema */
class __TwigTemplate_06bd92de44d58e6bd832a8860054e7ed4223a14335348282b659c7bd0897438b extends Twig_Template
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
        $__internal_3ec1930a35d65aaddb6d095868f938734a3e4a046a8f1b3d5fb198cf54fdff6f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3ec1930a35d65aaddb6d095868f938734a3e4a046a8f1b3d5fb198cf54fdff6f->enter($__internal_3ec1930a35d65aaddb6d095868f938734a3e4a046a8f1b3d5fb198cf54fdff6f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/json-schema/draft-04/hyper-schema"));

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
        
        $__internal_3ec1930a35d65aaddb6d095868f938734a3e4a046a8f1b3d5fb198cf54fdff6f->leave($__internal_3ec1930a35d65aaddb6d095868f938734a3e4a046a8f1b3d5fb198cf54fdff6f_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/json-schema/draft-04/hyper-schema";
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
", "node_modules/json-schema/draft-04/hyper-schema", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/json-schema/draft-04/hyper-schema");
    }
}
