<?php

/* node_modules/fsevents/node_modules/ajv/lib/refs/json-schema-draft-04.json */
class __TwigTemplate_9de949bd93cd812a73b0540e9b8b15fc60ca4a788ba8150be2981750eea6389a extends Twig_Template
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
        $__internal_50b00b6e34966fe46f9daa2ab070530adef597380697859bda923a1262b6e134 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_50b00b6e34966fe46f9daa2ab070530adef597380697859bda923a1262b6e134->enter($__internal_50b00b6e34966fe46f9daa2ab070530adef597380697859bda923a1262b6e134_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/fsevents/node_modules/ajv/lib/refs/json-schema-draft-04.json"));

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
        
        $__internal_50b00b6e34966fe46f9daa2ab070530adef597380697859bda923a1262b6e134->leave($__internal_50b00b6e34966fe46f9daa2ab070530adef597380697859bda923a1262b6e134_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/fsevents/node_modules/ajv/lib/refs/json-schema-draft-04.json";
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
", "node_modules/fsevents/node_modules/ajv/lib/refs/json-schema-draft-04.json", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/fsevents/node_modules/ajv/lib/refs/json-schema-draft-04.json");
    }
}
