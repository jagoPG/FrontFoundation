<?php

/* node_modules/fsevents/node_modules/ajv/lib/refs/json-schema-v5.json */
class __TwigTemplate_4c15ca5e100e84b55c9c2cff6c88a2efb9a3c903721575090a42371242cf4108 extends Twig_Template
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
        $__internal_557f19d71ca6cbf9585c9a690167d9bc285322e6203cfed1206cd9ae8ababedf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_557f19d71ca6cbf9585c9a690167d9bc285322e6203cfed1206cd9ae8ababedf->enter($__internal_557f19d71ca6cbf9585c9a690167d9bc285322e6203cfed1206cd9ae8ababedf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/fsevents/node_modules/ajv/lib/refs/json-schema-v5.json"));

        // line 1
        echo "{
    \"id\": \"https://raw.githubusercontent.com/epoberezkin/ajv/master/lib/refs/json-schema-v5.json#\",
    \"\$schema\": \"http://json-schema.org/draft-04/schema#\",
    \"description\": \"Core schema meta-schema (v5 proposals)\",
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
        \"formatMaximum\": {
            \"anyOf\": [
                { \"type\": \"string\" },
                { \"\$ref\": \"#/definitions/\$data\" }
            ]
        },
        \"formatMinimum\": {
            \"anyOf\": [
                { \"type\": \"string\" },
                { \"\$ref\": \"#/definitions/\$data\" }
            ]
        },
        \"formatExclusiveMaximum\": {
            \"anyOf\": [
                {
                    \"type\": \"boolean\",
                    \"default\": false
                },
                { \"\$ref\": \"#/definitions/\$data\" }
            ]
        },
        \"formatExclusiveMinimum\": {
            \"anyOf\": [
                {
                    \"type\": \"boolean\",
                    \"default\": false
                },
                { \"\$ref\": \"#/definitions/\$data\" }
            ]
        },
        \"constant\": {
            \"anyOf\": [
                {},
                { \"\$ref\": \"#/definitions/\$data\" }
            ]
        },
        \"contains\": { \"\$ref\": \"#\" },
        \"patternGroups\": {
            \"type\": \"object\",
            \"additionalProperties\": {
                \"type\": \"object\",
                \"required\": [ \"schema\" ],
                \"properties\": {
                    \"maximum\": {
                        \"anyOf\": [
                            { \"\$ref\": \"#/definitions/positiveInteger\" },
                            { \"\$ref\": \"#/definitions/\$data\" }
                        ]
                    },
                    \"minimum\": {
                        \"anyOf\": [
                            { \"\$ref\": \"#/definitions/positiveIntegerDefault0\" },
                            { \"\$ref\": \"#/definitions/\$data\" }
                        ]
                    },
                    \"schema\": { \"\$ref\": \"#\" }
                },
                \"additionalProperties\": false
            },
            \"default\": {}
        },
        \"switch\": {
            \"type\": \"array\",
            \"items\": {
                \"required\": [ \"then\" ],
                \"properties\": {
                    \"if\": { \"\$ref\": \"#\" },
                    \"then\": {
                        \"anyOf\": [
                            { \"type\": \"boolean\" },
                            { \"\$ref\": \"#\" }
                        ]
                    },
                    \"continue\": { \"type\": \"boolean\" }
                },
                \"additionalProperties\": false,
                \"dependencies\": {
                    \"continue\": [ \"if\" ]
                }
            }
        }
    },
    \"dependencies\": {
        \"exclusiveMaximum\": [ \"maximum\" ],
        \"exclusiveMinimum\": [ \"minimum\" ],
        \"formatMaximum\": [ \"format\" ],
        \"formatMinimum\": [ \"format\" ],
        \"formatExclusiveMaximum\": [ \"formatMaximum\" ],
        \"formatExclusiveMinimum\": [ \"formatMinimum\" ]
    },
    \"default\": {}
}
";
        
        $__internal_557f19d71ca6cbf9585c9a690167d9bc285322e6203cfed1206cd9ae8ababedf->leave($__internal_557f19d71ca6cbf9585c9a690167d9bc285322e6203cfed1206cd9ae8ababedf_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/fsevents/node_modules/ajv/lib/refs/json-schema-v5.json";
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
    \"description\": \"Core schema meta-schema (v5 proposals)\",
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
        \"formatMaximum\": {
            \"anyOf\": [
                { \"type\": \"string\" },
                { \"\$ref\": \"#/definitions/\$data\" }
            ]
        },
        \"formatMinimum\": {
            \"anyOf\": [
                { \"type\": \"string\" },
                { \"\$ref\": \"#/definitions/\$data\" }
            ]
        },
        \"formatExclusiveMaximum\": {
            \"anyOf\": [
                {
                    \"type\": \"boolean\",
                    \"default\": false
                },
                { \"\$ref\": \"#/definitions/\$data\" }
            ]
        },
        \"formatExclusiveMinimum\": {
            \"anyOf\": [
                {
                    \"type\": \"boolean\",
                    \"default\": false
                },
                { \"\$ref\": \"#/definitions/\$data\" }
            ]
        },
        \"constant\": {
            \"anyOf\": [
                {},
                { \"\$ref\": \"#/definitions/\$data\" }
            ]
        },
        \"contains\": { \"\$ref\": \"#\" },
        \"patternGroups\": {
            \"type\": \"object\",
            \"additionalProperties\": {
                \"type\": \"object\",
                \"required\": [ \"schema\" ],
                \"properties\": {
                    \"maximum\": {
                        \"anyOf\": [
                            { \"\$ref\": \"#/definitions/positiveInteger\" },
                            { \"\$ref\": \"#/definitions/\$data\" }
                        ]
                    },
                    \"minimum\": {
                        \"anyOf\": [
                            { \"\$ref\": \"#/definitions/positiveIntegerDefault0\" },
                            { \"\$ref\": \"#/definitions/\$data\" }
                        ]
                    },
                    \"schema\": { \"\$ref\": \"#\" }
                },
                \"additionalProperties\": false
            },
            \"default\": {}
        },
        \"switch\": {
            \"type\": \"array\",
            \"items\": {
                \"required\": [ \"then\" ],
                \"properties\": {
                    \"if\": { \"\$ref\": \"#\" },
                    \"then\": {
                        \"anyOf\": [
                            { \"type\": \"boolean\" },
                            { \"\$ref\": \"#\" }
                        ]
                    },
                    \"continue\": { \"type\": \"boolean\" }
                },
                \"additionalProperties\": false,
                \"dependencies\": {
                    \"continue\": [ \"if\" ]
                }
            }
        }
    },
    \"dependencies\": {
        \"exclusiveMaximum\": [ \"maximum\" ],
        \"exclusiveMinimum\": [ \"minimum\" ],
        \"formatMaximum\": [ \"format\" ],
        \"formatMinimum\": [ \"format\" ],
        \"formatExclusiveMaximum\": [ \"formatMaximum\" ],
        \"formatExclusiveMinimum\": [ \"formatMinimum\" ]
    },
    \"default\": {}
}
", "node_modules/fsevents/node_modules/ajv/lib/refs/json-schema-v5.json", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/fsevents/node_modules/ajv/lib/refs/json-schema-v5.json");
    }
}