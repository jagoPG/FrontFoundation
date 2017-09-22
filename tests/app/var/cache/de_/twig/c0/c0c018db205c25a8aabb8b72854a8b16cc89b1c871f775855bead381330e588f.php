<?php

/* node_modules/fsevents/node_modules/json-schema/draft-03/examples/interfaces */
class __TwigTemplate_1d6434243d4fd0082cef0b2ffab45248f65f8d315a38e1f2186d7c3f273f8e51 extends Twig_Template
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
        $__internal_3cd5aa3e89335551dd5f858d7cd2e70a4eeda2df7afa67ccd05571109d2459f1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3cd5aa3e89335551dd5f858d7cd2e70a4eeda2df7afa67ccd05571109d2459f1->enter($__internal_3cd5aa3e89335551dd5f858d7cd2e70a4eeda2df7afa67ccd05571109d2459f1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/fsevents/node_modules/json-schema/draft-03/examples/interfaces"));

        // line 1
        echo "{
    \"extends\":\"http://json-schema.org/hyper-schema\",
    \"description\":\"A schema for schema interface definitions that describe programmatic class structures using JSON schema syntax\",
    \"properties\":{
        \"methods\":{
            \"type\":\"object\",
            \"description\":\"This defines the set of methods available to the class instances\",
            \"additionalProperties\":{
            \t\"type\":\"object\",
            \t\"description\":\"The definition of the method\",
            \t\"properties\":{
            \t\t\"parameters\":{
            \t\t\t\"type\":\"array\",
            \t\t\t\"description\":\"The set of parameters that should be passed to the method when it is called\",
            \t\t\t\"items\":{\"\$ref\":\"#\"},
            \t\t\t\"required\": true
            \t\t},
            \t\t\"returns\":{\"\$ref\":\"#\"}
            \t}
            }
        }    
    }
}
";
        
        $__internal_3cd5aa3e89335551dd5f858d7cd2e70a4eeda2df7afa67ccd05571109d2459f1->leave($__internal_3cd5aa3e89335551dd5f858d7cd2e70a4eeda2df7afa67ccd05571109d2459f1_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/fsevents/node_modules/json-schema/draft-03/examples/interfaces";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{
    \"extends\":\"http://json-schema.org/hyper-schema\",
    \"description\":\"A schema for schema interface definitions that describe programmatic class structures using JSON schema syntax\",
    \"properties\":{
        \"methods\":{
            \"type\":\"object\",
            \"description\":\"This defines the set of methods available to the class instances\",
            \"additionalProperties\":{
            \t\"type\":\"object\",
            \t\"description\":\"The definition of the method\",
            \t\"properties\":{
            \t\t\"parameters\":{
            \t\t\t\"type\":\"array\",
            \t\t\t\"description\":\"The set of parameters that should be passed to the method when it is called\",
            \t\t\t\"items\":{\"\$ref\":\"#\"},
            \t\t\t\"required\": true
            \t\t},
            \t\t\"returns\":{\"\$ref\":\"#\"}
            \t}
            }
        }    
    }
}
", "node_modules/fsevents/node_modules/json-schema/draft-03/examples/interfaces", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/fsevents/node_modules/json-schema/draft-03/examples/interfaces");
    }
}
