<?php

/* node_modules/ajv/lib/refs/json-schema-draft-04.json */
class __TwigTemplate_aa550e8a639915e893221a0edd701f6bcd2df334d9966e0c2bee81f292cdd39c extends Twig_Template
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
        $__internal_75b5b72715bfda1d73e63ba71f672836274f82a11afd945ede063dcba5f2565a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_75b5b72715bfda1d73e63ba71f672836274f82a11afd945ede063dcba5f2565a->enter($__internal_75b5b72715bfda1d73e63ba71f672836274f82a11afd945ede063dcba5f2565a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/ajv/lib/refs/json-schema-draft-04.json"));

        // line 1
        echo "{
    \"id\": \"http://json-schema.org/draft-04/schema#\",
    \"\$schema\": \"http://json-schema.org/draft-04/schema#\",
    \"description\": \"Core schema meta-schema\",
    \"definitions\": {
        \"schemaArray\": {
            \"type\": \"array\",
            \"minItems\": 1,
            \"items\": { \"\$ref\": \"#\" }
        },
        \"positiveInteger\": {
            \"type\": \"integer\",
            \"minimum\": 0
        },
        \"positiveIntegerDefault0\": {
            \"allOf\": [ { \"\$ref\": \"#/definitions/positiveInteger\" }, { \"default\": 0 } ]
        },
        \"simpleTypes\": {
            \"enum\": [ \"array\", \"boolean\", \"integer\", \"null\", \"number\", \"object\", \"string\" ]
        },
        \"stringArray\": {
            \"type\": \"array\",
            \"items\": { \"type\": \"string\" },
            \"minItems\": 1,
            \"uniqueItems\": true
        }
    },
    \"type\": \"object\",
    \"properties\": {
        \"id\": {
            \"type\": \"string\",
            \"format\": \"uri\"
        },
        \"\$schema\": {
            \"type\": \"string\",
            \"format\": \"uri\"
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
            \"minimum\": 0,
            \"exclusiveMinimum\": true
        },
        \"maximum\": {
            \"type\": \"number\"
        },
        \"exclusiveMaximum\": {
            \"type\": \"boolean\",
            \"default\": false
        },
        \"minimum\": {
            \"type\": \"number\"
        },
        \"exclusiveMinimum\": {
            \"type\": \"boolean\",
            \"default\": false
        },
        \"maxLength\": { \"\$ref\": \"#/definitions/positiveInteger\" },
        \"minLength\": { \"\$ref\": \"#/definitions/positiveIntegerDefault0\" },
        \"pattern\": {
            \"type\": \"string\",
            \"format\": \"regex\"
        },
        \"additionalItems\": {
            \"anyOf\": [
                { \"type\": \"boolean\" },
                { \"\$ref\": \"#\" }
            ],
            \"default\": {}
        },
        \"items\": {
            \"anyOf\": [
                { \"\$ref\": \"#\" },
                { \"\$ref\": \"#/definitions/schemaArray\" }
            ],
            \"default\": {}
        },
        \"maxItems\": { \"\$ref\": \"#/definitions/positiveInteger\" },
        \"minItems\": { \"\$ref\": \"#/definitions/positiveIntegerDefault0\" },
        \"uniqueItems\": {
            \"type\": \"boolean\",
            \"default\": false
        },
        \"maxProperties\": { \"\$ref\": \"#/definitions/positiveInteger\" },
        \"minProperties\": { \"\$ref\": \"#/definitions/positiveIntegerDefault0\" },
        \"required\": { \"\$ref\": \"#/definitions/stringArray\" },
        \"additionalProperties\": {
            \"anyOf\": [
                { \"type\": \"boolean\" },
                { \"\$ref\": \"#\" }
            ],
            \"default\": {}
        },
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
        \"allOf\": { \"\$ref\": \"#/definitions/schemaArray\" },
        \"anyOf\": { \"\$ref\": \"#/definitions/schemaArray\" },
        \"oneOf\": { \"\$ref\": \"#/definitions/schemaArray\" },
        \"not\": { \"\$ref\": \"#\" }
    },
    \"dependencies\": {
        \"exclusiveMaximum\": [ \"maximum\" ],
        \"exclusiveMinimum\": [ \"minimum\" ]
    },
    \"default\": {}
}
";
        
        $__internal_75b5b72715bfda1d73e63ba71f672836274f82a11afd945ede063dcba5f2565a->leave($__internal_75b5b72715bfda1d73e63ba71f672836274f82a11afd945ede063dcba5f2565a_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/ajv/lib/refs/json-schema-draft-04.json";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{
    \"id\": \"http://json-schema.org/draft-04/schema#\",
    \"\$schema\": \"http://json-schema.org/draft-04/schema#\",
    \"description\": \"Core schema meta-schema\",
    \"definitions\": {
        \"schemaArray\": {
            \"type\": \"array\",
            \"minItems\": 1,
            \"items\": { \"\$ref\": \"#\" }
        },
        \"positiveInteger\": {
            \"type\": \"integer\",
            \"minimum\": 0
        },
        \"positiveIntegerDefault0\": {
            \"allOf\": [ { \"\$ref\": \"#/definitions/positiveInteger\" }, { \"default\": 0 } ]
        },
        \"simpleTypes\": {
            \"enum\": [ \"array\", \"boolean\", \"integer\", \"null\", \"number\", \"object\", \"string\" ]
        },
        \"stringArray\": {
            \"type\": \"array\",
            \"items\": { \"type\": \"string\" },
            \"minItems\": 1,
            \"uniqueItems\": true
        }
    },
    \"type\": \"object\",
    \"properties\": {
        \"id\": {
            \"type\": \"string\",
            \"format\": \"uri\"
        },
        \"\$schema\": {
            \"type\": \"string\",
            \"format\": \"uri\"
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
            \"minimum\": 0,
            \"exclusiveMinimum\": true
        },
        \"maximum\": {
            \"type\": \"number\"
        },
        \"exclusiveMaximum\": {
            \"type\": \"boolean\",
            \"default\": false
        },
        \"minimum\": {
            \"type\": \"number\"
        },
        \"exclusiveMinimum\": {
            \"type\": \"boolean\",
            \"default\": false
        },
        \"maxLength\": { \"\$ref\": \"#/definitions/positiveInteger\" },
        \"minLength\": { \"\$ref\": \"#/definitions/positiveIntegerDefault0\" },
        \"pattern\": {
            \"type\": \"string\",
            \"format\": \"regex\"
        },
        \"additionalItems\": {
            \"anyOf\": [
                { \"type\": \"boolean\" },
                { \"\$ref\": \"#\" }
            ],
            \"default\": {}
        },
        \"items\": {
            \"anyOf\": [
                { \"\$ref\": \"#\" },
                { \"\$ref\": \"#/definitions/schemaArray\" }
            ],
            \"default\": {}
        },
        \"maxItems\": { \"\$ref\": \"#/definitions/positiveInteger\" },
        \"minItems\": { \"\$ref\": \"#/definitions/positiveIntegerDefault0\" },
        \"uniqueItems\": {
            \"type\": \"boolean\",
            \"default\": false
        },
        \"maxProperties\": { \"\$ref\": \"#/definitions/positiveInteger\" },
        \"minProperties\": { \"\$ref\": \"#/definitions/positiveIntegerDefault0\" },
        \"required\": { \"\$ref\": \"#/definitions/stringArray\" },
        \"additionalProperties\": {
            \"anyOf\": [
                { \"type\": \"boolean\" },
                { \"\$ref\": \"#\" }
            ],
            \"default\": {}
        },
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
        \"allOf\": { \"\$ref\": \"#/definitions/schemaArray\" },
        \"anyOf\": { \"\$ref\": \"#/definitions/schemaArray\" },
        \"oneOf\": { \"\$ref\": \"#/definitions/schemaArray\" },
        \"not\": { \"\$ref\": \"#\" }
    },
    \"dependencies\": {
        \"exclusiveMaximum\": [ \"maximum\" ],
        \"exclusiveMinimum\": [ \"minimum\" ]
    },
    \"default\": {}
}
", "node_modules/ajv/lib/refs/json-schema-draft-04.json", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/ajv/lib/refs/json-schema-draft-04.json");
    }
}
