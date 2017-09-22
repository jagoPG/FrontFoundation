<?php

/* node_modules/ajv/lib/refs/json-schema-draft-06.json */
class __TwigTemplate_a798cab06de444cf9f78221ee325b01e8029ac9c6cc3c3b2b79720dbbf4d7f62 extends Twig_Template
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
        $__internal_7f935ff1cc0b60d683504da0d97f7b935db0caf89dc92cff27087009f7dd6913 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7f935ff1cc0b60d683504da0d97f7b935db0caf89dc92cff27087009f7dd6913->enter($__internal_7f935ff1cc0b60d683504da0d97f7b935db0caf89dc92cff27087009f7dd6913_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/ajv/lib/refs/json-schema-draft-06.json"));

        // line 1
        echo "{
    \"\$schema\": \"http://json-schema.org/draft-06/schema#\",
    \"\$id\": \"http://json-schema.org/draft-06/schema#\",
    \"title\": \"Core schema meta-schema\",
    \"definitions\": {
        \"schemaArray\": {
            \"type\": \"array\",
            \"minItems\": 1,
            \"items\": { \"\$ref\": \"#\" }
        },
        \"nonNegativeInteger\": {
            \"type\": \"integer\",
            \"minimum\": 0
        },
        \"nonNegativeIntegerDefault0\": {
            \"allOf\": [
                { \"\$ref\": \"#/definitions/nonNegativeInteger\" },
                { \"default\": 0 }
            ]
        },
        \"simpleTypes\": {
            \"enum\": [
                \"array\",
                \"boolean\",
                \"integer\",
                \"null\",
                \"number\",
                \"object\",
                \"string\"
            ]
        },
        \"stringArray\": {
            \"type\": \"array\",
            \"items\": { \"type\": \"string\" },
            \"uniqueItems\": true,
            \"default\": []
        }
    },
    \"type\": [\"object\", \"boolean\"],
    \"properties\": {
        \"\$id\": {
            \"type\": \"string\",
            \"format\": \"uri-reference\"
        },
        \"\$schema\": {
            \"type\": \"string\",
            \"format\": \"uri\"
        },
        \"\$ref\": {
            \"type\": \"string\",
            \"format\": \"uri-reference\"
        },
        \"title\": {
            \"type\": \"string\"
        },
        \"description\": {
            \"type\": \"string\"
        },
        \"default\": {},
        \"multipleOf\": {
            \"type\": \"number\",
            \"exclusiveMinimum\": 0
        },
        \"maximum\": {
            \"type\": \"number\"
        },
        \"exclusiveMaximum\": {
            \"type\": \"number\"
        },
        \"minimum\": {
            \"type\": \"number\"
        },
        \"exclusiveMinimum\": {
            \"type\": \"number\"
        },
        \"maxLength\": { \"\$ref\": \"#/definitions/nonNegativeInteger\" },
        \"minLength\": { \"\$ref\": \"#/definitions/nonNegativeIntegerDefault0\" },
        \"pattern\": {
            \"type\": \"string\",
            \"format\": \"regex\"
        },
        \"additionalItems\": { \"\$ref\": \"#\" },
        \"items\": {
            \"anyOf\": [
                { \"\$ref\": \"#\" },
                { \"\$ref\": \"#/definitions/schemaArray\" }
            ],
            \"default\": {}
        },
        \"maxItems\": { \"\$ref\": \"#/definitions/nonNegativeInteger\" },
        \"minItems\": { \"\$ref\": \"#/definitions/nonNegativeIntegerDefault0\" },
        \"uniqueItems\": {
            \"type\": \"boolean\",
            \"default\": false
        },
        \"contains\": { \"\$ref\": \"#\" },
        \"maxProperties\": { \"\$ref\": \"#/definitions/nonNegativeInteger\" },
        \"minProperties\": { \"\$ref\": \"#/definitions/nonNegativeIntegerDefault0\" },
        \"required\": { \"\$ref\": \"#/definitions/stringArray\" },
        \"additionalProperties\": { \"\$ref\": \"#\" },
        \"definitions\": {
            \"type\": \"object\",
            \"additionalProperties\": { \"\$ref\": \"#\" },
            \"default\": {}
        },
        \"properties\": {
            \"type\": \"object\",
            \"additionalProperties\": { \"\$ref\": \"#\" },
            \"default\": {}
        },
        \"patternProperties\": {
            \"type\": \"object\",
            \"additionalProperties\": { \"\$ref\": \"#\" },
            \"default\": {}
        },
        \"dependencies\": {
            \"type\": \"object\",
            \"additionalProperties\": {
                \"anyOf\": [
                    { \"\$ref\": \"#\" },
                    { \"\$ref\": \"#/definitions/stringArray\" }
                ]
            }
        },
        \"propertyNames\": { \"\$ref\": \"#\" },
        \"const\": {},
        \"enum\": {
            \"type\": \"array\",
            \"minItems\": 1,
            \"uniqueItems\": true
        },
        \"type\": {
            \"anyOf\": [
                { \"\$ref\": \"#/definitions/simpleTypes\" },
                {
                    \"type\": \"array\",
                    \"items\": { \"\$ref\": \"#/definitions/simpleTypes\" },
                    \"minItems\": 1,
                    \"uniqueItems\": true
                }
            ]
        },
        \"format\": { \"type\": \"string\" },
        \"allOf\": { \"\$ref\": \"#/definitions/schemaArray\" },
        \"anyOf\": { \"\$ref\": \"#/definitions/schemaArray\" },
        \"oneOf\": { \"\$ref\": \"#/definitions/schemaArray\" },
        \"not\": { \"\$ref\": \"#\" }
    },
    \"default\": {}
}
";
        
        $__internal_7f935ff1cc0b60d683504da0d97f7b935db0caf89dc92cff27087009f7dd6913->leave($__internal_7f935ff1cc0b60d683504da0d97f7b935db0caf89dc92cff27087009f7dd6913_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/ajv/lib/refs/json-schema-draft-06.json";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{
    \"\$schema\": \"http://json-schema.org/draft-06/schema#\",
    \"\$id\": \"http://json-schema.org/draft-06/schema#\",
    \"title\": \"Core schema meta-schema\",
    \"definitions\": {
        \"schemaArray\": {
            \"type\": \"array\",
            \"minItems\": 1,
            \"items\": { \"\$ref\": \"#\" }
        },
        \"nonNegativeInteger\": {
            \"type\": \"integer\",
            \"minimum\": 0
        },
        \"nonNegativeIntegerDefault0\": {
            \"allOf\": [
                { \"\$ref\": \"#/definitions/nonNegativeInteger\" },
                { \"default\": 0 }
            ]
        },
        \"simpleTypes\": {
            \"enum\": [
                \"array\",
                \"boolean\",
                \"integer\",
                \"null\",
                \"number\",
                \"object\",
                \"string\"
            ]
        },
        \"stringArray\": {
            \"type\": \"array\",
            \"items\": { \"type\": \"string\" },
            \"uniqueItems\": true,
            \"default\": []
        }
    },
    \"type\": [\"object\", \"boolean\"],
    \"properties\": {
        \"\$id\": {
            \"type\": \"string\",
            \"format\": \"uri-reference\"
        },
        \"\$schema\": {
            \"type\": \"string\",
            \"format\": \"uri\"
        },
        \"\$ref\": {
            \"type\": \"string\",
            \"format\": \"uri-reference\"
        },
        \"title\": {
            \"type\": \"string\"
        },
        \"description\": {
            \"type\": \"string\"
        },
        \"default\": {},
        \"multipleOf\": {
            \"type\": \"number\",
            \"exclusiveMinimum\": 0
        },
        \"maximum\": {
            \"type\": \"number\"
        },
        \"exclusiveMaximum\": {
            \"type\": \"number\"
        },
        \"minimum\": {
            \"type\": \"number\"
        },
        \"exclusiveMinimum\": {
            \"type\": \"number\"
        },
        \"maxLength\": { \"\$ref\": \"#/definitions/nonNegativeInteger\" },
        \"minLength\": { \"\$ref\": \"#/definitions/nonNegativeIntegerDefault0\" },
        \"pattern\": {
            \"type\": \"string\",
            \"format\": \"regex\"
        },
        \"additionalItems\": { \"\$ref\": \"#\" },
        \"items\": {
            \"anyOf\": [
                { \"\$ref\": \"#\" },
                { \"\$ref\": \"#/definitions/schemaArray\" }
            ],
            \"default\": {}
        },
        \"maxItems\": { \"\$ref\": \"#/definitions/nonNegativeInteger\" },
        \"minItems\": { \"\$ref\": \"#/definitions/nonNegativeIntegerDefault0\" },
        \"uniqueItems\": {
            \"type\": \"boolean\",
            \"default\": false
        },
        \"contains\": { \"\$ref\": \"#\" },
        \"maxProperties\": { \"\$ref\": \"#/definitions/nonNegativeInteger\" },
        \"minProperties\": { \"\$ref\": \"#/definitions/nonNegativeIntegerDefault0\" },
        \"required\": { \"\$ref\": \"#/definitions/stringArray\" },
        \"additionalProperties\": { \"\$ref\": \"#\" },
        \"definitions\": {
            \"type\": \"object\",
            \"additionalProperties\": { \"\$ref\": \"#\" },
            \"default\": {}
        },
        \"properties\": {
            \"type\": \"object\",
            \"additionalProperties\": { \"\$ref\": \"#\" },
            \"default\": {}
        },
        \"patternProperties\": {
            \"type\": \"object\",
            \"additionalProperties\": { \"\$ref\": \"#\" },
            \"default\": {}
        },
        \"dependencies\": {
            \"type\": \"object\",
            \"additionalProperties\": {
                \"anyOf\": [
                    { \"\$ref\": \"#\" },
                    { \"\$ref\": \"#/definitions/stringArray\" }
                ]
            }
        },
        \"propertyNames\": { \"\$ref\": \"#\" },
        \"const\": {},
        \"enum\": {
            \"type\": \"array\",
            \"minItems\": 1,
            \"uniqueItems\": true
        },
        \"type\": {
            \"anyOf\": [
                { \"\$ref\": \"#/definitions/simpleTypes\" },
                {
                    \"type\": \"array\",
                    \"items\": { \"\$ref\": \"#/definitions/simpleTypes\" },
                    \"minItems\": 1,
                    \"uniqueItems\": true
                }
            ]
        },
        \"format\": { \"type\": \"string\" },
        \"allOf\": { \"\$ref\": \"#/definitions/schemaArray\" },
        \"anyOf\": { \"\$ref\": \"#/definitions/schemaArray\" },
        \"oneOf\": { \"\$ref\": \"#/definitions/schemaArray\" },
        \"not\": { \"\$ref\": \"#\" }
    },
    \"default\": {}
}
", "node_modules/ajv/lib/refs/json-schema-draft-06.json", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/ajv/lib/refs/json-schema-draft-06.json");
    }
}
