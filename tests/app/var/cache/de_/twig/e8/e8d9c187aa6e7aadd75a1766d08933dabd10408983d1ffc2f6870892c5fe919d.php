<?php

/* node_modules/ajv/lib/refs/$data.json */
class __TwigTemplate_bba8681c2d1e98c61e41dae9c435fdf9e9b6b38c2d525d45160ea495c9023715 extends Twig_Template
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
        $__internal_bb47120d9b13654d119952ab59817a822139b4c59e9e34b143367642f723138e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bb47120d9b13654d119952ab59817a822139b4c59e9e34b143367642f723138e->enter($__internal_bb47120d9b13654d119952ab59817a822139b4c59e9e34b143367642f723138e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/ajv/lib/refs/\$data.json"));

        // line 1
        echo "{
    \"\$schema\": \"http://json-schema.org/draft-06/schema#\",
    \"\$id\": \"https://raw.githubusercontent.com/epoberezkin/ajv/master/lib/refs/\$data.json#\",
    \"description\": \"Meta-schema for \$data reference (JSON-schema extension proposal)\",
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
";
        
        $__internal_bb47120d9b13654d119952ab59817a822139b4c59e9e34b143367642f723138e->leave($__internal_bb47120d9b13654d119952ab59817a822139b4c59e9e34b143367642f723138e_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/ajv/lib/refs/\$data.json";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{
    \"\$schema\": \"http://json-schema.org/draft-06/schema#\",
    \"\$id\": \"https://raw.githubusercontent.com/epoberezkin/ajv/master/lib/refs/\$data.json#\",
    \"description\": \"Meta-schema for \$data reference (JSON-schema extension proposal)\",
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
", "node_modules/ajv/lib/refs/\$data.json", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/ajv/lib/refs/\$data.json");
    }
}
