<?php

/* node_modules/fsevents/node_modules/json-schema/draft-02/schema */
class __TwigTemplate_4df0851a803311a4cb73c718226ec338c0e84f0d71af1533536902c0f3d55567 extends Twig_Template
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
        $__internal_35a05db22524404701e6aff187c54fc5b07a160a5acc2e051e9131fe7c8523bf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_35a05db22524404701e6aff187c54fc5b07a160a5acc2e051e9131fe7c8523bf->enter($__internal_35a05db22524404701e6aff187c54fc5b07a160a5acc2e051e9131fe7c8523bf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/fsevents/node_modules/json-schema/draft-02/schema"));

        // line 1
        echo "{
\t\"\$schema\" : \"http://json-schema.org/draft-02/hyper-schema#\",
\t\"id\" : \"http://json-schema.org/draft-02/schema#\",
\t\"type\" : \"object\",
\t
\t\"properties\" : {
\t\t\"type\" : {
\t\t\t\"type\" : [\"string\", \"array\"],
\t\t\t\"items\" : {
\t\t\t\t\"type\" : [\"string\", {\"\$ref\" : \"#\"}]
\t\t\t},
\t\t\t\"optional\" : true,
\t\t\t\"uniqueItems\" : true,
\t\t\t\"default\" : \"any\"
\t\t},
\t\t
\t\t\"properties\" : {
\t\t\t\"type\" : \"object\",
\t\t\t\"additionalProperties\" : {\"\$ref\" : \"#\"},
\t\t\t\"optional\" : true,
\t\t\t\"default\" : {}
\t\t},
\t\t
\t\t\"items\" : {
\t\t\t\"type\" : [{\"\$ref\" : \"#\"}, \"array\"],
\t\t\t\"items\" : {\"\$ref\" : \"#\"},
\t\t\t\"optional\" : true,
\t\t\t\"default\" : {}
\t\t},
\t\t
\t\t\"optional\" : {
\t\t\t\"type\" : \"boolean\",
\t\t\t\"optional\" : true,
\t\t\t\"default\" : false
\t\t},
\t\t
\t\t\"additionalProperties\" : {
\t\t\t\"type\" : [{\"\$ref\" : \"#\"}, \"boolean\"],
\t\t\t\"optional\" : true,
\t\t\t\"default\" : {}
\t\t},
\t\t
\t\t\"requires\" : {
\t\t\t\"type\" : [\"string\", {\"\$ref\" : \"#\"}],
\t\t\t\"optional\" : true
\t\t},
\t\t
\t\t\"minimum\" : {
\t\t\t\"type\" : \"number\",
\t\t\t\"optional\" : true
\t\t},
\t\t
\t\t\"maximum\" : {
\t\t\t\"type\" : \"number\",
\t\t\t\"optional\" : true
\t\t},
\t\t
\t\t\"minimumCanEqual\" : {
\t\t\t\"type\" : \"boolean\",
\t\t\t\"optional\" : true,
\t\t\t\"requires\" : \"minimum\",
\t\t\t\"default\" : true
\t\t},
\t\t
\t\t\"maximumCanEqual\" : {
\t\t\t\"type\" : \"boolean\",
\t\t\t\"optional\" : true,
\t\t\t\"requires\" : \"maximum\",
\t\t\t\"default\" : true
\t\t},
\t\t
\t\t\"minItems\" : {
\t\t\t\"type\" : \"integer\",
\t\t\t\"optional\" : true,
\t\t\t\"minimum\" : 0,
\t\t\t\"default\" : 0
\t\t},
\t\t
\t\t\"maxItems\" : {
\t\t\t\"type\" : \"integer\",
\t\t\t\"optional\" : true,
\t\t\t\"minimum\" : 0
\t\t},
\t\t
\t\t\"uniqueItems\" : {
\t\t\t\"type\" : \"boolean\",
\t\t\t\"optional\" : true,
\t\t\t\"default\" : false
\t\t},
\t\t
\t\t\"pattern\" : {
\t\t\t\"type\" : \"string\",
\t\t\t\"optional\" : true,
\t\t\t\"format\" : \"regex\"
\t\t},
\t\t
\t\t\"minLength\" : {
\t\t\t\"type\" : \"integer\",
\t\t\t\"optional\" : true,
\t\t\t\"minimum\" : 0,
\t\t\t\"default\" : 0
\t\t},
\t\t
\t\t\"maxLength\" : {
\t\t\t\"type\" : \"integer\",
\t\t\t\"optional\" : true
\t\t},
\t\t
\t\t\"enum\" : {
\t\t\t\"type\" : \"array\",
\t\t\t\"optional\" : true,
\t\t\t\"minItems\" : 1,
\t\t\t\"uniqueItems\" : true
\t\t},
\t\t
\t\t\"title\" : {
\t\t\t\"type\" : \"string\",
\t\t\t\"optional\" : true
\t\t},
\t\t
\t\t\"description\" : {
\t\t\t\"type\" : \"string\",
\t\t\t\"optional\" : true
\t\t},
\t\t
\t\t\"format\" : {
\t\t\t\"type\" : \"string\",
\t\t\t\"optional\" : true
\t\t},
\t\t
\t\t\"contentEncoding\" : {
\t\t\t\"type\" : \"string\",
\t\t\t\"optional\" : true
\t\t},
\t\t
\t\t\"default\" : {
\t\t\t\"type\" : \"any\",
\t\t\t\"optional\" : true
\t\t},
\t\t
\t\t\"divisibleBy\" : {
\t\t\t\"type\" : \"number\",
\t\t\t\"minimum\" : 0,
\t\t\t\"minimumCanEqual\" : false,
\t\t\t\"optional\" : true,
\t\t\t\"default\" : 1
\t\t},
\t\t
\t\t\"disallow\" : {
\t\t\t\"type\" : [\"string\", \"array\"],
\t\t\t\"items\" : {\"type\" : \"string\"},
\t\t\t\"optional\" : true,
\t\t\t\"uniqueItems\" : true
\t\t},
\t\t
\t\t\"extends\" : {
\t\t\t\"type\" : [{\"\$ref\" : \"#\"}, \"array\"],
\t\t\t\"items\" : {\"\$ref\" : \"#\"},
\t\t\t\"optional\" : true,
\t\t\t\"default\" : {}
\t\t}
\t},
\t
\t\"optional\" : true,
\t\"default\" : {}
}";
        
        $__internal_35a05db22524404701e6aff187c54fc5b07a160a5acc2e051e9131fe7c8523bf->leave($__internal_35a05db22524404701e6aff187c54fc5b07a160a5acc2e051e9131fe7c8523bf_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/fsevents/node_modules/json-schema/draft-02/schema";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{
\t\"\$schema\" : \"http://json-schema.org/draft-02/hyper-schema#\",
\t\"id\" : \"http://json-schema.org/draft-02/schema#\",
\t\"type\" : \"object\",
\t
\t\"properties\" : {
\t\t\"type\" : {
\t\t\t\"type\" : [\"string\", \"array\"],
\t\t\t\"items\" : {
\t\t\t\t\"type\" : [\"string\", {\"\$ref\" : \"#\"}]
\t\t\t},
\t\t\t\"optional\" : true,
\t\t\t\"uniqueItems\" : true,
\t\t\t\"default\" : \"any\"
\t\t},
\t\t
\t\t\"properties\" : {
\t\t\t\"type\" : \"object\",
\t\t\t\"additionalProperties\" : {\"\$ref\" : \"#\"},
\t\t\t\"optional\" : true,
\t\t\t\"default\" : {}
\t\t},
\t\t
\t\t\"items\" : {
\t\t\t\"type\" : [{\"\$ref\" : \"#\"}, \"array\"],
\t\t\t\"items\" : {\"\$ref\" : \"#\"},
\t\t\t\"optional\" : true,
\t\t\t\"default\" : {}
\t\t},
\t\t
\t\t\"optional\" : {
\t\t\t\"type\" : \"boolean\",
\t\t\t\"optional\" : true,
\t\t\t\"default\" : false
\t\t},
\t\t
\t\t\"additionalProperties\" : {
\t\t\t\"type\" : [{\"\$ref\" : \"#\"}, \"boolean\"],
\t\t\t\"optional\" : true,
\t\t\t\"default\" : {}
\t\t},
\t\t
\t\t\"requires\" : {
\t\t\t\"type\" : [\"string\", {\"\$ref\" : \"#\"}],
\t\t\t\"optional\" : true
\t\t},
\t\t
\t\t\"minimum\" : {
\t\t\t\"type\" : \"number\",
\t\t\t\"optional\" : true
\t\t},
\t\t
\t\t\"maximum\" : {
\t\t\t\"type\" : \"number\",
\t\t\t\"optional\" : true
\t\t},
\t\t
\t\t\"minimumCanEqual\" : {
\t\t\t\"type\" : \"boolean\",
\t\t\t\"optional\" : true,
\t\t\t\"requires\" : \"minimum\",
\t\t\t\"default\" : true
\t\t},
\t\t
\t\t\"maximumCanEqual\" : {
\t\t\t\"type\" : \"boolean\",
\t\t\t\"optional\" : true,
\t\t\t\"requires\" : \"maximum\",
\t\t\t\"default\" : true
\t\t},
\t\t
\t\t\"minItems\" : {
\t\t\t\"type\" : \"integer\",
\t\t\t\"optional\" : true,
\t\t\t\"minimum\" : 0,
\t\t\t\"default\" : 0
\t\t},
\t\t
\t\t\"maxItems\" : {
\t\t\t\"type\" : \"integer\",
\t\t\t\"optional\" : true,
\t\t\t\"minimum\" : 0
\t\t},
\t\t
\t\t\"uniqueItems\" : {
\t\t\t\"type\" : \"boolean\",
\t\t\t\"optional\" : true,
\t\t\t\"default\" : false
\t\t},
\t\t
\t\t\"pattern\" : {
\t\t\t\"type\" : \"string\",
\t\t\t\"optional\" : true,
\t\t\t\"format\" : \"regex\"
\t\t},
\t\t
\t\t\"minLength\" : {
\t\t\t\"type\" : \"integer\",
\t\t\t\"optional\" : true,
\t\t\t\"minimum\" : 0,
\t\t\t\"default\" : 0
\t\t},
\t\t
\t\t\"maxLength\" : {
\t\t\t\"type\" : \"integer\",
\t\t\t\"optional\" : true
\t\t},
\t\t
\t\t\"enum\" : {
\t\t\t\"type\" : \"array\",
\t\t\t\"optional\" : true,
\t\t\t\"minItems\" : 1,
\t\t\t\"uniqueItems\" : true
\t\t},
\t\t
\t\t\"title\" : {
\t\t\t\"type\" : \"string\",
\t\t\t\"optional\" : true
\t\t},
\t\t
\t\t\"description\" : {
\t\t\t\"type\" : \"string\",
\t\t\t\"optional\" : true
\t\t},
\t\t
\t\t\"format\" : {
\t\t\t\"type\" : \"string\",
\t\t\t\"optional\" : true
\t\t},
\t\t
\t\t\"contentEncoding\" : {
\t\t\t\"type\" : \"string\",
\t\t\t\"optional\" : true
\t\t},
\t\t
\t\t\"default\" : {
\t\t\t\"type\" : \"any\",
\t\t\t\"optional\" : true
\t\t},
\t\t
\t\t\"divisibleBy\" : {
\t\t\t\"type\" : \"number\",
\t\t\t\"minimum\" : 0,
\t\t\t\"minimumCanEqual\" : false,
\t\t\t\"optional\" : true,
\t\t\t\"default\" : 1
\t\t},
\t\t
\t\t\"disallow\" : {
\t\t\t\"type\" : [\"string\", \"array\"],
\t\t\t\"items\" : {\"type\" : \"string\"},
\t\t\t\"optional\" : true,
\t\t\t\"uniqueItems\" : true
\t\t},
\t\t
\t\t\"extends\" : {
\t\t\t\"type\" : [{\"\$ref\" : \"#\"}, \"array\"],
\t\t\t\"items\" : {\"\$ref\" : \"#\"},
\t\t\t\"optional\" : true,
\t\t\t\"default\" : {}
\t\t}
\t},
\t
\t\"optional\" : true,
\t\"default\" : {}
}", "node_modules/fsevents/node_modules/json-schema/draft-02/schema", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/fsevents/node_modules/json-schema/draft-02/schema");
    }
}
