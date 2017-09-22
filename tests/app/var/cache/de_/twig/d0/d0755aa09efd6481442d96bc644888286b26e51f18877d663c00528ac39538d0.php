<?php

/* node_modules/fsevents/node_modules/json-schema/draft-01/links */
class __TwigTemplate_5329b12e8073768cfe8510f17068e740ed1cae85f5b3eef16fc74e86213a4c3c extends Twig_Template
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
        $__internal_af65758d93bed383ced8c11748be9ae796d52cc2f0af1f259e99ed729cf4e796 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_af65758d93bed383ced8c11748be9ae796d52cc2f0af1f259e99ed729cf4e796->enter($__internal_af65758d93bed383ced8c11748be9ae796d52cc2f0af1f259e99ed729cf4e796_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/fsevents/node_modules/json-schema/draft-01/links"));

        // line 1
        echo "{
\t\"\$schema\" : \"http://json-schema.org/draft-01/hyper-schema#\",
\t\"id\" : \"http://json-schema.org/draft-01/links#\",
\t\"type\" : \"object\",
\t
\t\"properties\" : {
\t\t\"href\" : {
\t\t\t\"type\" : \"string\"
\t\t},
\t\t
\t\t\"rel\" : {
\t\t\t\"type\" : \"string\"
\t\t},
\t\t
\t\t\"method\" : {
\t\t\t\"type\" : \"string\",
\t\t\t\"default\" : \"GET\",
\t\t\t\"optional\" : true
\t\t},
\t\t
\t\t\"enctype\" : {
\t\t\t\"type\" : \"string\",
\t\t\t\"requires\" : \"method\",
\t\t\t\"optional\" : true
\t\t},
\t\t
\t\t\"properties\" : {
\t\t\t\"type\" : \"object\",
\t\t\t\"additionalProperties\" : {\"\$ref\" : \"http://json-schema.org/draft-01/hyper-schema#\"},
\t\t\t\"optional\" : true
\t\t}
\t}
}";
        
        $__internal_af65758d93bed383ced8c11748be9ae796d52cc2f0af1f259e99ed729cf4e796->leave($__internal_af65758d93bed383ced8c11748be9ae796d52cc2f0af1f259e99ed729cf4e796_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/fsevents/node_modules/json-schema/draft-01/links";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{
\t\"\$schema\" : \"http://json-schema.org/draft-01/hyper-schema#\",
\t\"id\" : \"http://json-schema.org/draft-01/links#\",
\t\"type\" : \"object\",
\t
\t\"properties\" : {
\t\t\"href\" : {
\t\t\t\"type\" : \"string\"
\t\t},
\t\t
\t\t\"rel\" : {
\t\t\t\"type\" : \"string\"
\t\t},
\t\t
\t\t\"method\" : {
\t\t\t\"type\" : \"string\",
\t\t\t\"default\" : \"GET\",
\t\t\t\"optional\" : true
\t\t},
\t\t
\t\t\"enctype\" : {
\t\t\t\"type\" : \"string\",
\t\t\t\"requires\" : \"method\",
\t\t\t\"optional\" : true
\t\t},
\t\t
\t\t\"properties\" : {
\t\t\t\"type\" : \"object\",
\t\t\t\"additionalProperties\" : {\"\$ref\" : \"http://json-schema.org/draft-01/hyper-schema#\"},
\t\t\t\"optional\" : true
\t\t}
\t}
}", "node_modules/fsevents/node_modules/json-schema/draft-01/links", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/fsevents/node_modules/json-schema/draft-01/links");
    }
}
