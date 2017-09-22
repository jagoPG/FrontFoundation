<?php

/* node_modules/json-schema/draft-01/links */
class __TwigTemplate_c858b266cc503c4fc80f89450363da985079b82564d35c37535d9153313f7666 extends Twig_Template
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
        $__internal_44f919db64be651ca844a865280a922e2be6f6c6dfcb57c2c5987a3100f5cbed = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_44f919db64be651ca844a865280a922e2be6f6c6dfcb57c2c5987a3100f5cbed->enter($__internal_44f919db64be651ca844a865280a922e2be6f6c6dfcb57c2c5987a3100f5cbed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/json-schema/draft-01/links"));

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
        
        $__internal_44f919db64be651ca844a865280a922e2be6f6c6dfcb57c2c5987a3100f5cbed->leave($__internal_44f919db64be651ca844a865280a922e2be6f6c6dfcb57c2c5987a3100f5cbed_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/json-schema/draft-01/links";
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
}", "node_modules/json-schema/draft-01/links", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/json-schema/draft-01/links");
    }
}
