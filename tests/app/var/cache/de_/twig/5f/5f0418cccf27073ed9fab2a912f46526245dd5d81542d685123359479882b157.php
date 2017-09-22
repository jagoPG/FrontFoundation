<?php

/* node_modules/fsevents/node_modules/json-schema/draft-02/links */
class __TwigTemplate_7c0e1ab58e14805e5d16b12aafd481064fe8ccc0f6f72c21158ec0e443655def extends Twig_Template
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
        $__internal_4b8185610af4543cf0450bb0e132315b50f763ee1065cf3ddc1768f6a4cf2cbf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4b8185610af4543cf0450bb0e132315b50f763ee1065cf3ddc1768f6a4cf2cbf->enter($__internal_4b8185610af4543cf0450bb0e132315b50f763ee1065cf3ddc1768f6a4cf2cbf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/fsevents/node_modules/json-schema/draft-02/links"));

        // line 1
        echo "{
\t\"\$schema\" : \"http://json-schema.org/draft-02/hyper-schema#\",
\t\"id\" : \"http://json-schema.org/draft-02/links#\",
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
\t\t\"targetSchema\" : {\"\$ref\" : \"http://json-schema.org/draft-02/hyper-schema#\"},
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
\t\t\t\"additionalProperties\" : {\"\$ref\" : \"http://json-schema.org/draft-02/hyper-schema#\"},
\t\t\t\"optional\" : true
\t\t}
\t}
}";
        
        $__internal_4b8185610af4543cf0450bb0e132315b50f763ee1065cf3ddc1768f6a4cf2cbf->leave($__internal_4b8185610af4543cf0450bb0e132315b50f763ee1065cf3ddc1768f6a4cf2cbf_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/fsevents/node_modules/json-schema/draft-02/links";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{
\t\"\$schema\" : \"http://json-schema.org/draft-02/hyper-schema#\",
\t\"id\" : \"http://json-schema.org/draft-02/links#\",
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
\t\t\"targetSchema\" : {\"\$ref\" : \"http://json-schema.org/draft-02/hyper-schema#\"},
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
\t\t\t\"additionalProperties\" : {\"\$ref\" : \"http://json-schema.org/draft-02/hyper-schema#\"},
\t\t\t\"optional\" : true
\t\t}
\t}
}", "node_modules/fsevents/node_modules/json-schema/draft-02/links", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/fsevents/node_modules/json-schema/draft-02/links");
    }
}
