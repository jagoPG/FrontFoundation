<?php

/* node_modules/fsevents/node_modules/json-schema/draft-03/schema */
class __TwigTemplate_97e1d9ba89e0cb3d304623512ca8f495a9dd70983b05dbdf3362db3899aaae93 extends Twig_Template
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
        $__internal_c1699d3d183c99081e996abef8420bba0071dd3ffa3d36d4673421846d454c30 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c1699d3d183c99081e996abef8420bba0071dd3ffa3d36d4673421846d454c30->enter($__internal_c1699d3d183c99081e996abef8420bba0071dd3ffa3d36d4673421846d454c30_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/fsevents/node_modules/json-schema/draft-03/schema"));

        // line 1
        echo "{
\t\"\$schema\" : \"http://json-schema.org/draft-03/schema#\",
\t\"id\" : \"http://json-schema.org/draft-03/schema#\",
\t\"type\" : \"object\",
\t
\t\"properties\" : {
\t\t\"type\" : {
\t\t\t\"type\" : [\"string\", \"array\"],
\t\t\t\"items\" : {
\t\t\t\t\"type\" : [\"string\", {\"\$ref\" : \"#\"}]
\t\t\t},
\t\t\t\"uniqueItems\" : true,
\t\t\t\"default\" : \"any\"
\t\t},
\t\t
\t\t\"properties\" : {
\t\t\t\"type\" : \"object\",
\t\t\t\"additionalProperties\" : {\"\$ref\" : \"#\"},
\t\t\t\"default\" : {}
\t\t},
\t\t
\t\t\"patternProperties\" : {
\t\t\t\"type\" : \"object\",
\t\t\t\"additionalProperties\" : {\"\$ref\" : \"#\"},
\t\t\t\"default\" : {}
\t\t},
\t\t
\t\t\"additionalProperties\" : {
\t\t\t\"type\" : [{\"\$ref\" : \"#\"}, \"boolean\"],
\t\t\t\"default\" : {}
\t\t},
\t\t
\t\t\"items\" : {
\t\t\t\"type\" : [{\"\$ref\" : \"#\"}, \"array\"],
\t\t\t\"items\" : {\"\$ref\" : \"#\"},
\t\t\t\"default\" : {}
\t\t},
\t\t
\t\t\"additionalItems\" : {
\t\t\t\"type\" : [{\"\$ref\" : \"#\"}, \"boolean\"],
\t\t\t\"default\" : {}
\t\t},
\t\t
\t\t\"required\" : {
\t\t\t\"type\" : \"boolean\",
\t\t\t\"default\" : false
\t\t},
\t\t
\t\t\"dependencies\" : {
\t\t\t\"type\" : \"object\",
\t\t\t\"additionalProperties\" : {
\t\t\t\t\"type\" : [\"string\", \"array\", {\"\$ref\" : \"#\"}],
\t\t\t\t\"items\" : {
\t\t\t\t\t\"type\" : \"string\"
\t\t\t\t}
\t\t\t},
\t\t\t\"default\" : {}
\t\t},
\t\t
\t\t\"minimum\" : {
\t\t\t\"type\" : \"number\"
\t\t},
\t\t
\t\t\"maximum\" : {
\t\t\t\"type\" : \"number\"
\t\t},
\t\t
\t\t\"exclusiveMinimum\" : {
\t\t\t\"type\" : \"boolean\",
\t\t\t\"default\" : false
\t\t},
\t\t
\t\t\"exclusiveMaximum\" : {
\t\t\t\"type\" : \"boolean\",
\t\t\t\"default\" : false
\t\t},
\t\t
\t\t\"minItems\" : {
\t\t\t\"type\" : \"integer\",
\t\t\t\"minimum\" : 0,
\t\t\t\"default\" : 0
\t\t},
\t\t
\t\t\"maxItems\" : {
\t\t\t\"type\" : \"integer\",
\t\t\t\"minimum\" : 0
\t\t},
\t\t
\t\t\"uniqueItems\" : {
\t\t\t\"type\" : \"boolean\",
\t\t\t\"default\" : false
\t\t},
\t\t
\t\t\"pattern\" : {
\t\t\t\"type\" : \"string\",
\t\t\t\"format\" : \"regex\"
\t\t},
\t\t
\t\t\"minLength\" : {
\t\t\t\"type\" : \"integer\",
\t\t\t\"minimum\" : 0,
\t\t\t\"default\" : 0
\t\t},
\t\t
\t\t\"maxLength\" : {
\t\t\t\"type\" : \"integer\"
\t\t},
\t\t
\t\t\"enum\" : {
\t\t\t\"type\" : \"array\",
\t\t\t\"minItems\" : 1,
\t\t\t\"uniqueItems\" : true
\t\t},
\t\t
\t\t\"default\" : {
\t\t\t\"type\" : \"any\"
\t\t},
\t\t
\t\t\"title\" : {
\t\t\t\"type\" : \"string\"
\t\t},
\t\t
\t\t\"description\" : {
\t\t\t\"type\" : \"string\"
\t\t},
\t\t
\t\t\"format\" : {
\t\t\t\"type\" : \"string\"
\t\t},
\t\t
\t\t\"divisibleBy\" : {
\t\t\t\"type\" : \"number\",
\t\t\t\"minimum\" : 0,
\t\t\t\"exclusiveMinimum\" : true,
\t\t\t\"default\" : 1
\t\t},
\t\t
\t\t\"disallow\" : {
\t\t\t\"type\" : [\"string\", \"array\"],
\t\t\t\"items\" : {
\t\t\t\t\"type\" : [\"string\", {\"\$ref\" : \"#\"}]
\t\t\t},
\t\t\t\"uniqueItems\" : true
\t\t},
\t\t
\t\t\"extends\" : {
\t\t\t\"type\" : [{\"\$ref\" : \"#\"}, \"array\"],
\t\t\t\"items\" : {\"\$ref\" : \"#\"},
\t\t\t\"default\" : {}
\t\t},
\t\t
\t\t\"id\" : {
\t\t\t\"type\" : \"string\",
\t\t\t\"format\" : \"uri\"
\t\t},
\t\t
\t\t\"\$ref\" : {
\t\t\t\"type\" : \"string\",
\t\t\t\"format\" : \"uri\"
\t\t},
\t\t
\t\t\"\$schema\" : {
\t\t\t\"type\" : \"string\",
\t\t\t\"format\" : \"uri\"
\t\t}
\t},
\t
\t\"dependencies\" : {
\t\t\"exclusiveMinimum\" : \"minimum\",
\t\t\"exclusiveMaximum\" : \"maximum\"
\t},
\t
\t\"default\" : {}
}";
        
        $__internal_c1699d3d183c99081e996abef8420bba0071dd3ffa3d36d4673421846d454c30->leave($__internal_c1699d3d183c99081e996abef8420bba0071dd3ffa3d36d4673421846d454c30_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/fsevents/node_modules/json-schema/draft-03/schema";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{
\t\"\$schema\" : \"http://json-schema.org/draft-03/schema#\",
\t\"id\" : \"http://json-schema.org/draft-03/schema#\",
\t\"type\" : \"object\",
\t
\t\"properties\" : {
\t\t\"type\" : {
\t\t\t\"type\" : [\"string\", \"array\"],
\t\t\t\"items\" : {
\t\t\t\t\"type\" : [\"string\", {\"\$ref\" : \"#\"}]
\t\t\t},
\t\t\t\"uniqueItems\" : true,
\t\t\t\"default\" : \"any\"
\t\t},
\t\t
\t\t\"properties\" : {
\t\t\t\"type\" : \"object\",
\t\t\t\"additionalProperties\" : {\"\$ref\" : \"#\"},
\t\t\t\"default\" : {}
\t\t},
\t\t
\t\t\"patternProperties\" : {
\t\t\t\"type\" : \"object\",
\t\t\t\"additionalProperties\" : {\"\$ref\" : \"#\"},
\t\t\t\"default\" : {}
\t\t},
\t\t
\t\t\"additionalProperties\" : {
\t\t\t\"type\" : [{\"\$ref\" : \"#\"}, \"boolean\"],
\t\t\t\"default\" : {}
\t\t},
\t\t
\t\t\"items\" : {
\t\t\t\"type\" : [{\"\$ref\" : \"#\"}, \"array\"],
\t\t\t\"items\" : {\"\$ref\" : \"#\"},
\t\t\t\"default\" : {}
\t\t},
\t\t
\t\t\"additionalItems\" : {
\t\t\t\"type\" : [{\"\$ref\" : \"#\"}, \"boolean\"],
\t\t\t\"default\" : {}
\t\t},
\t\t
\t\t\"required\" : {
\t\t\t\"type\" : \"boolean\",
\t\t\t\"default\" : false
\t\t},
\t\t
\t\t\"dependencies\" : {
\t\t\t\"type\" : \"object\",
\t\t\t\"additionalProperties\" : {
\t\t\t\t\"type\" : [\"string\", \"array\", {\"\$ref\" : \"#\"}],
\t\t\t\t\"items\" : {
\t\t\t\t\t\"type\" : \"string\"
\t\t\t\t}
\t\t\t},
\t\t\t\"default\" : {}
\t\t},
\t\t
\t\t\"minimum\" : {
\t\t\t\"type\" : \"number\"
\t\t},
\t\t
\t\t\"maximum\" : {
\t\t\t\"type\" : \"number\"
\t\t},
\t\t
\t\t\"exclusiveMinimum\" : {
\t\t\t\"type\" : \"boolean\",
\t\t\t\"default\" : false
\t\t},
\t\t
\t\t\"exclusiveMaximum\" : {
\t\t\t\"type\" : \"boolean\",
\t\t\t\"default\" : false
\t\t},
\t\t
\t\t\"minItems\" : {
\t\t\t\"type\" : \"integer\",
\t\t\t\"minimum\" : 0,
\t\t\t\"default\" : 0
\t\t},
\t\t
\t\t\"maxItems\" : {
\t\t\t\"type\" : \"integer\",
\t\t\t\"minimum\" : 0
\t\t},
\t\t
\t\t\"uniqueItems\" : {
\t\t\t\"type\" : \"boolean\",
\t\t\t\"default\" : false
\t\t},
\t\t
\t\t\"pattern\" : {
\t\t\t\"type\" : \"string\",
\t\t\t\"format\" : \"regex\"
\t\t},
\t\t
\t\t\"minLength\" : {
\t\t\t\"type\" : \"integer\",
\t\t\t\"minimum\" : 0,
\t\t\t\"default\" : 0
\t\t},
\t\t
\t\t\"maxLength\" : {
\t\t\t\"type\" : \"integer\"
\t\t},
\t\t
\t\t\"enum\" : {
\t\t\t\"type\" : \"array\",
\t\t\t\"minItems\" : 1,
\t\t\t\"uniqueItems\" : true
\t\t},
\t\t
\t\t\"default\" : {
\t\t\t\"type\" : \"any\"
\t\t},
\t\t
\t\t\"title\" : {
\t\t\t\"type\" : \"string\"
\t\t},
\t\t
\t\t\"description\" : {
\t\t\t\"type\" : \"string\"
\t\t},
\t\t
\t\t\"format\" : {
\t\t\t\"type\" : \"string\"
\t\t},
\t\t
\t\t\"divisibleBy\" : {
\t\t\t\"type\" : \"number\",
\t\t\t\"minimum\" : 0,
\t\t\t\"exclusiveMinimum\" : true,
\t\t\t\"default\" : 1
\t\t},
\t\t
\t\t\"disallow\" : {
\t\t\t\"type\" : [\"string\", \"array\"],
\t\t\t\"items\" : {
\t\t\t\t\"type\" : [\"string\", {\"\$ref\" : \"#\"}]
\t\t\t},
\t\t\t\"uniqueItems\" : true
\t\t},
\t\t
\t\t\"extends\" : {
\t\t\t\"type\" : [{\"\$ref\" : \"#\"}, \"array\"],
\t\t\t\"items\" : {\"\$ref\" : \"#\"},
\t\t\t\"default\" : {}
\t\t},
\t\t
\t\t\"id\" : {
\t\t\t\"type\" : \"string\",
\t\t\t\"format\" : \"uri\"
\t\t},
\t\t
\t\t\"\$ref\" : {
\t\t\t\"type\" : \"string\",
\t\t\t\"format\" : \"uri\"
\t\t},
\t\t
\t\t\"\$schema\" : {
\t\t\t\"type\" : \"string\",
\t\t\t\"format\" : \"uri\"
\t\t}
\t},
\t
\t\"dependencies\" : {
\t\t\"exclusiveMinimum\" : \"minimum\",
\t\t\"exclusiveMaximum\" : \"maximum\"
\t},
\t
\t\"default\" : {}
}", "node_modules/fsevents/node_modules/json-schema/draft-03/schema", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/fsevents/node_modules/json-schema/draft-03/schema");
    }
}
