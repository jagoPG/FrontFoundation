<?php

/* node_modules/json-schema/draft-03/hyper-schema */
class __TwigTemplate_df163238a278215fc409621b965a0ccadc548ebdc3860428f0b32f7c74f1b4e3 extends Twig_Template
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
        $__internal_c92230c0801d9fcf915e9b432fec93cc9a110fd9db8b34c3bd1ed69c26d2a523 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c92230c0801d9fcf915e9b432fec93cc9a110fd9db8b34c3bd1ed69c26d2a523->enter($__internal_c92230c0801d9fcf915e9b432fec93cc9a110fd9db8b34c3bd1ed69c26d2a523_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/json-schema/draft-03/hyper-schema"));

        // line 1
        echo "{
\t\"\$schema\" : \"http://json-schema.org/draft-03/hyper-schema#\",
\t\"extends\" : {\"\$ref\" : \"http://json-schema.org/draft-03/schema#\"},
\t\"id\" : \"http://json-schema.org/draft-03/hyper-schema#\",

\t\"properties\" : {
\t\t\"links\" : {
\t\t\t\"type\" : \"array\",
\t\t\t\"items\" : {\"\$ref\" : \"http://json-schema.org/draft-03/links#\"}
\t\t},

\t\t\"fragmentResolution\" : {
\t\t\t\"type\" : \"string\",
\t\t\t\"default\" : \"slash-delimited\"
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

\t\"fragmentResolution\" : \"slash-delimited\"
}
";
        
        $__internal_c92230c0801d9fcf915e9b432fec93cc9a110fd9db8b34c3bd1ed69c26d2a523->leave($__internal_c92230c0801d9fcf915e9b432fec93cc9a110fd9db8b34c3bd1ed69c26d2a523_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/json-schema/draft-03/hyper-schema";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{
\t\"\$schema\" : \"http://json-schema.org/draft-03/hyper-schema#\",
\t\"extends\" : {\"\$ref\" : \"http://json-schema.org/draft-03/schema#\"},
\t\"id\" : \"http://json-schema.org/draft-03/hyper-schema#\",

\t\"properties\" : {
\t\t\"links\" : {
\t\t\t\"type\" : \"array\",
\t\t\t\"items\" : {\"\$ref\" : \"http://json-schema.org/draft-03/links#\"}
\t\t},

\t\t\"fragmentResolution\" : {
\t\t\t\"type\" : \"string\",
\t\t\t\"default\" : \"slash-delimited\"
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

\t\"fragmentResolution\" : \"slash-delimited\"
}
", "node_modules/json-schema/draft-03/hyper-schema", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/json-schema/draft-03/hyper-schema");
    }
}
