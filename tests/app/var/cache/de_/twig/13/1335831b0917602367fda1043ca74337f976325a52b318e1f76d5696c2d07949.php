<?php

/* node_modules/ajv/lib/refs/json-schema-v5.json */
class __TwigTemplate_8c3c502152e4c161e56afaaf49099914fad84577d2b70bcc1d6ecf2f63ecca24 extends Twig_Template
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
        $__internal_c75e6839a5efa40440e3d22a329966c62d0c8827bd2b890f640ca5a6e827d739 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c75e6839a5efa40440e3d22a329966c62d0c8827bd2b890f640ca5a6e827d739->enter($__internal_c75e6839a5efa40440e3d22a329966c62d0c8827bd2b890f640ca5a6e827d739_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/ajv/lib/refs/json-schema-v5.json"));

        // line 1
        echo "{
    \"id\": \"https://raw.githubusercontent.com/epoberezkin/ajv/master/lib/refs/json-schema-v5.json#\",
    \"\$schema\": \"http://json-schema.org/draft-04/schema#\",
    \"description\": \"Core schema meta-schema (v5 proposals - deprecated)\",
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
        },
        \"\$data\": {
            \"type\": \"object\",
            \"required\": [ \"\$data\" ],
            \"properties\": {
                \"\$data\": {
                    \"type\": \"string\",
                    \"anyOf\": [
                        { \"format\": \"relative-json-pointer\" }, 
                        { \"format\": \"json-pointer\" }
                    ]
                }
            },
            \"additionalProperties\": false
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
            \"anyOf\": [
                {
                    \"type\": \"number\",
                    \"minimum\": 0,
                    \"exclusiveMinimum\": true
                },
                { \"\$ref\": \"#/definitions/\$data\" }
            ]
        },
        \"maximum\": {
            \"anyOf\": [
                { \"type\": \"number\" },
                { \"\$ref\": \"#/definitions/\$data\" }
            ]
        },
        \"exclusiveMaximum\": {
            \"anyOf\": [
                {
                    \"type\": \"boolean\",
                    \"default\": false
                },
                { \"\$ref\": \"#/definitions/\$data\" }
            ]
        },
        \"minimum\": {
            \"anyOf\": [
                { \"type\": \"number\" },
                { \"\$ref\": \"#/definitions/\$data\" }
            ]
        },
        \"exclusiveMinimum\": {
            \"anyOf\": [
                {
                    \"type\": \"boolean\",
                    \"default\": false
                },
                { \"\$ref\": \"#/definitions/\$data\" }
            ]
        },
        \"maxLength\": {
            \"anyOf\": [
                { \"\$ref\": \"#/definitions/positiveInteger\" },
                { \"\$ref\": \"#/definitions/\$data\" }
            ]
        },
        \"minLength\": {
            \"anyOf\": [
                { \"\$ref\": \"#/definitions/positiveIntegerDefault0\" },
                { \"\$ref\": \"#/definitions/\$data\" }
            ]
        },
        \"pattern\": {
            \"anyOf\": [
                {
                    \"type\": \"string\",
                    \"format\": \"regex\"
                },
                { \"\$ref\": \"#/definitions/\$data\" }
            ]
        },
        \"additionalItems\": {
            \"anyOf\": [
                { \"type\": \"boolean\" },
                { \"\$ref\": \"#\" },
                { \"\$ref\": \"#/definitions/\$data\" }
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
        \"maxItems\": {
            \"anyOf\": [
                { \"\$ref\": \"#/definitions/positiveInteger\" },
                { \"\$ref\": \"#/definitions/\$data\" }
            ]
        },
        \"minItems\": {
            \"anyOf\": [
                { \"\$ref\": \"#/definitions/positiveIntegerDefault0\" },
                { \"\$ref\": \"#/definitions/\$data\" }
            ]
        },
        \"uniqueItems\": {
            \"anyOf\": [
                {
                    \"type\": \"boolean\",
                    \"default\": false
                },
                { \"\$ref\": \"#/definitions/\$data\" }
            ]
        },
        \"maxProperties\": {
            \"anyOf\": [
                { \"\$ref\": \"#/definitions/positiveInteger\" },
                { \"\$ref\": \"#/definitions/\$data\" }
            ]
        },
        \"minProperties\": {
            \"anyOf\": [
                { \"\$ref\": \"#/definitions/positiveIntegerDefault0\" },
                { \"\$ref\": \"#/definitions/\$data\" }
            ]
        },
        \"required\": {
            \"anyOf\": [
                { \"\$ref\": \"#/definitions/stringArray\" },
                { \"\$ref\": \"#/definitions/\$data\" }
            ]
        },
        \"additionalProperties\": {
            \"anyOf\": [
                { \"type\": \"boolean\" },
                { \"\$ref\": \"#\" },
                { \"\$ref\": \"#/definitions/\$data\" }
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
            \"anyOf\": [
                {
                    \"type\": \"array\",
                    \"minItems\": 1,
                    \"uniqueItems\": true
                },
                { \"\$ref\": \"#/definitions/\$data\" }
            ]
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
        \"not\": { \"\$ref\": \"#\" },
        \"format\": {
            \"anyOf\": [
                { \"type\": \"string\" },
                { \"\$ref\": \"#/definitions/\$data\" }
            ]
        },
        \"constant\": {
            \"anyOf\": [
                {},
                { \"\$ref\": \"#/definitions/\$data\" }
            ]
        },
        \"contains\": { \"\$ref\": \"#\" }
    },
    \"dependencies\": {
        \"exclusiveMaximum\": [ \"maximum\" ],
        \"exclusiveMinimum\": [ \"minimum\" ]
    },
    \"default\": {}
}
";
        
        $__internal_c75e6839a5efa40440e3d22a329966c62d0c8827bd2b890f640ca5a6e827d739->leave($__internal_c75e6839a5efa40440e3d22a329966c62d0c8827bd2b890f640ca5a6e827d739_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/ajv/lib/refs/json-schema-v5.json";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{
    \"id\": \"https://raw.githubusercontent.com/epoberezkin/ajv/master/lib/refs/json-schema-v5.json#\",
    \"\$schema\": \"http://json-schema.org/draft-04/schema#\",
    \"description\": \"Core schema meta-schema (v5 proposals - deprecated)\",
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
        },
        \"\$data\": {
            \"type\": \"object\",
            \"required\": [ \"\$data\" ],
            \"properties\": {
                \"\$data\": {
                    \"type\": \"string\",
                    \"anyOf\": [
                        { \"format\": \"relative-json-pointer\" }, 
                        { \"format\": \"json-pointer\" }
                    ]
                }
            },
            \"additionalProperties\": false
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
            \"anyOf\": [
                {
                    \"type\": \"number\",
                    \"minimum\": 0,
                    \"exclusiveMinimum\": true
                },
                { \"\$ref\": \"#/definitions/\$data\" }
            ]
        },
        \"maximum\": {
            \"anyOf\": [
                { \"type\": \"number\" },
                { \"\$ref\": \"#/definitions/\$data\" }
            ]
        },
        \"exclusiveMaximum\": {
            \"anyOf\": [
                {
                    \"type\": \"boolean\",
                    \"default\": false
                },
                { \"\$ref\": \"#/definitions/\$data\" }
            ]
        },
        \"minimum\": {
            \"anyOf\": [
                { \"type\": \"number\" },
                { \"\$ref\": \"#/definitions/\$data\" }
            ]
        },
        \"exclusiveMinimum\": {
            \"anyOf\": [
                {
                    \"type\": \"boolean\",
                    \"default\": false
                },
                { \"\$ref\": \"#/definitions/\$data\" }
            ]
        },
        \"maxLength\": {
            \"anyOf\": [
                { \"\$ref\": \"#/definitions/positiveInteger\" },
                { \"\$ref\": \"#/definitions/\$data\" }
            ]
        },
        \"minLength\": {
            \"anyOf\": [
                { \"\$ref\": \"#/definitions/positiveIntegerDefault0\" },
                { \"\$ref\": \"#/definitions/\$data\" }
            ]
        },
        \"pattern\": {
            \"anyOf\": [
                {
                    \"type\": \"string\",
                    \"format\": \"regex\"
                },
                { \"\$ref\": \"#/definitions/\$data\" }
            ]
        },
        \"additionalItems\": {
            \"anyOf\": [
                { \"type\": \"boolean\" },
                { \"\$ref\": \"#\" },
                { \"\$ref\": \"#/definitions/\$data\" }
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
        \"maxItems\": {
            \"anyOf\": [
                { \"\$ref\": \"#/definitions/positiveInteger\" },
                { \"\$ref\": \"#/definitions/\$data\" }
            ]
        },
        \"minItems\": {
            \"anyOf\": [
                { \"\$ref\": \"#/definitions/positiveIntegerDefault0\" },
                { \"\$ref\": \"#/definitions/\$data\" }
            ]
        },
        \"uniqueItems\": {
            \"anyOf\": [
                {
                    \"type\": \"boolean\",
                    \"default\": false
                },
                { \"\$ref\": \"#/definitions/\$data\" }
            ]
        },
        \"maxProperties\": {
            \"anyOf\": [
                { \"\$ref\": \"#/definitions/positiveInteger\" },
                { \"\$ref\": \"#/definitions/\$data\" }
            ]
        },
        \"minProperties\": {
            \"anyOf\": [
                { \"\$ref\": \"#/definitions/positiveIntegerDefault0\" },
                { \"\$ref\": \"#/definitions/\$data\" }
            ]
        },
        \"required\": {
            \"anyOf\": [
                { \"\$ref\": \"#/definitions/stringArray\" },
                { \"\$ref\": \"#/definitions/\$data\" }
            ]
        },
        \"additionalProperties\": {
            \"anyOf\": [
                { \"type\": \"boolean\" },
                { \"\$ref\": \"#\" },
                { \"\$ref\": \"#/definitions/\$data\" }
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
            \"anyOf\": [
                {
                    \"type\": \"array\",
                    \"minItems\": 1,
                    \"uniqueItems\": true
                },
                { \"\$ref\": \"#/definitions/\$data\" }
            ]
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
        \"not\": { \"\$ref\": \"#\" },
        \"format\": {
            \"anyOf\": [
                { \"type\": \"string\" },
                { \"\$ref\": \"#/definitions/\$data\" }
            ]
        },
        \"constant\": {
            \"anyOf\": [
                {},
                { \"\$ref\": \"#/definitions/\$data\" }
            ]
        },
        \"contains\": { \"\$ref\": \"#\" }
    },
    \"dependencies\": {
        \"exclusiveMaximum\": [ \"maximum\" ],
        \"exclusiveMinimum\": [ \"minimum\" ]
    },
    \"default\": {}
}
", "node_modules/ajv/lib/refs/json-schema-v5.json", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/ajv/lib/refs/json-schema-v5.json");
    }
}
