<?php

/* node_modules/har-validator/node_modules/ajv/lib/refs/json-schema-draft-04.json */
class __TwigTemplate_64ff56a63706a80610c954193beaa52b72d6843b085103028003d8776265799f extends Twig_Template
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
        $__internal_9ec41b290bd577fcc6f0678c6d2c6e587f67b35a2d23c4fced160657e7cb6a13 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9ec41b290bd577fcc6f0678c6d2c6e587f67b35a2d23c4fced160657e7cb6a13->enter($__internal_9ec41b290bd577fcc6f0678c6d2c6e587f67b35a2d23c4fced160657e7cb6a13_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/har-validator/node_modules/ajv/lib/refs/json-schema-draft-04.json"));

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
        
        $__internal_9ec41b290bd577fcc6f0678c6d2c6e587f67b35a2d23c4fced160657e7cb6a13->leave($__internal_9ec41b290bd577fcc6f0678c6d2c6e587f67b35a2d23c4fced160657e7cb6a13_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/har-validator/node_modules/ajv/lib/refs/json-schema-draft-04.json";
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
", "node_modules/har-validator/node_modules/ajv/lib/refs/json-schema-draft-04.json", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/har-validator/node_modules/ajv/lib/refs/json-schema-draft-04.json");
    }
}
