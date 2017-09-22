<?php

/* node_modules/json-schema/draft-04/schema */
class __TwigTemplate_d3c9145db50a8e88f70185b23d25133b83d37dce18da1e8abf83aa2c5405129c extends Twig_Template
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
        $__internal_dda92ca71e7ccb0f9ce6d0cb93f4b795b0c344128cafd0b34eceae5b4ccb004a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dda92ca71e7ccb0f9ce6d0cb93f4b795b0c344128cafd0b34eceae5b4ccb004a->enter($__internal_dda92ca71e7ccb0f9ce6d0cb93f4b795b0c344128cafd0b34eceae5b4ccb004a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/json-schema/draft-04/schema"));

        // line 1
        echo "{
\t\"\$schema\" : \"http://json-schema.org/draft-04/schema#\",
\t\"id\" : \"http://json-schema.org/draft-04/schema#\",
\t\"type\" : \"object\",
\t
\t\"properties\" : {
\t\t\"type\" : {
\t\t\t\"type\" : [
\t\t\t\t{
\t\t\t\t\t\"id\" : \"#simple-type\",
\t\t\t\t\t\"type\" : \"string\",
\t\t\t\t\t\"enum\" : [\"object\", \"array\", \"string\", \"number\", \"boolean\", \"null\", \"any\"]
\t\t\t\t}, 
\t\t\t\t\"array\"
\t\t\t],
\t\t\t\"items\" : {
\t\t\t\t\"type\" : [
\t\t\t\t\t{\"\$ref\" : \"#simple-type\"}, 
\t\t\t\t\t{\"\$ref\" : \"#\"}
\t\t\t\t]
\t\t\t},
\t\t\t\"uniqueItems\" : true,
\t\t\t\"default\" : \"any\"
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

\t\t\"enum\" : {
\t\t\t\"type\" : \"array\",
\t\t\t\"minItems\" : 1,
\t\t\t\"uniqueItems\" : true
\t\t},
\t
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
\t\t\"divisibleBy\" : {
\t\t\t\"type\" : \"number\",
\t\t\t\"minimum\" : 0,
\t\t\t\"exclusiveMinimum\" : true,
\t\t\t\"default\" : 1
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
\t\t\"pattern\" : {
\t\t\t\"type\" : \"string\"
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
\t\t\"minProperties\" : {
\t\t\t\"type\" : \"integer\",
\t\t\t\"minimum\" : 0,
\t\t\t\"default\" : 0
\t\t},
\t\t
\t\t\"maxProperties\" : {
\t\t\t\"type\" : \"integer\",
\t\t\t\"minimum\" : 0
\t\t},
\t\t
\t\t\"required\" : {
\t\t\t\"type\" : \"array\",
\t\t\t\"items\" : {
\t\t\t\t\"type\" : \"string\"
\t\t\t}
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
\t\t\"id\" : {
\t\t\t\"type\" : \"string\"
\t\t},
\t\t
\t\t\"\$ref\" : {
\t\t\t\"type\" : \"string\"
\t\t},
\t\t
\t\t\"\$schema\" : {
\t\t\t\"type\" : \"string\"
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
\t\t\"default\" : {
\t\t\t\"type\" : \"any\"
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
        
        $__internal_dda92ca71e7ccb0f9ce6d0cb93f4b795b0c344128cafd0b34eceae5b4ccb004a->leave($__internal_dda92ca71e7ccb0f9ce6d0cb93f4b795b0c344128cafd0b34eceae5b4ccb004a_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/json-schema/draft-04/schema";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{
\t\"\$schema\" : \"http://json-schema.org/draft-04/schema#\",
\t\"id\" : \"http://json-schema.org/draft-04/schema#\",
\t\"type\" : \"object\",
\t
\t\"properties\" : {
\t\t\"type\" : {
\t\t\t\"type\" : [
\t\t\t\t{
\t\t\t\t\t\"id\" : \"#simple-type\",
\t\t\t\t\t\"type\" : \"string\",
\t\t\t\t\t\"enum\" : [\"object\", \"array\", \"string\", \"number\", \"boolean\", \"null\", \"any\"]
\t\t\t\t}, 
\t\t\t\t\"array\"
\t\t\t],
\t\t\t\"items\" : {
\t\t\t\t\"type\" : [
\t\t\t\t\t{\"\$ref\" : \"#simple-type\"}, 
\t\t\t\t\t{\"\$ref\" : \"#\"}
\t\t\t\t]
\t\t\t},
\t\t\t\"uniqueItems\" : true,
\t\t\t\"default\" : \"any\"
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

\t\t\"enum\" : {
\t\t\t\"type\" : \"array\",
\t\t\t\"minItems\" : 1,
\t\t\t\"uniqueItems\" : true
\t\t},
\t
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
\t\t\"divisibleBy\" : {
\t\t\t\"type\" : \"number\",
\t\t\t\"minimum\" : 0,
\t\t\t\"exclusiveMinimum\" : true,
\t\t\t\"default\" : 1
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
\t\t\"pattern\" : {
\t\t\t\"type\" : \"string\"
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
\t\t\"minProperties\" : {
\t\t\t\"type\" : \"integer\",
\t\t\t\"minimum\" : 0,
\t\t\t\"default\" : 0
\t\t},
\t\t
\t\t\"maxProperties\" : {
\t\t\t\"type\" : \"integer\",
\t\t\t\"minimum\" : 0
\t\t},
\t\t
\t\t\"required\" : {
\t\t\t\"type\" : \"array\",
\t\t\t\"items\" : {
\t\t\t\t\"type\" : \"string\"
\t\t\t}
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
\t\t\"id\" : {
\t\t\t\"type\" : \"string\"
\t\t},
\t\t
\t\t\"\$ref\" : {
\t\t\t\"type\" : \"string\"
\t\t},
\t\t
\t\t\"\$schema\" : {
\t\t\t\"type\" : \"string\"
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
\t\t\"default\" : {
\t\t\t\"type\" : \"any\"
\t\t}
\t},
\t
\t\"dependencies\" : {
\t\t\"exclusiveMinimum\" : \"minimum\",
\t\t\"exclusiveMaximum\" : \"maximum\"
\t},
\t
\t\"default\" : {}
}", "node_modules/json-schema/draft-04/schema", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/json-schema/draft-04/schema");
    }
}
