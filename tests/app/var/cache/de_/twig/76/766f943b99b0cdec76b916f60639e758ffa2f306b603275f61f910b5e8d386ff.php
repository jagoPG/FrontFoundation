<?php

/* node_modules/json-schema/draft-03/examples/interfaces */
class __TwigTemplate_cc0b3165371f7a296437e585a46b52a195510b5e9dc48b82bd8e269b2a4a870b extends Twig_Template
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
        $__internal_fa745c98df74290bc0dd6867f4d210df99e763842c7b792b12bfb21952cce87d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fa745c98df74290bc0dd6867f4d210df99e763842c7b792b12bfb21952cce87d->enter($__internal_fa745c98df74290bc0dd6867f4d210df99e763842c7b792b12bfb21952cce87d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/json-schema/draft-03/examples/interfaces"));

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
        
        $__internal_fa745c98df74290bc0dd6867f4d210df99e763842c7b792b12bfb21952cce87d->leave($__internal_fa745c98df74290bc0dd6867f4d210df99e763842c7b792b12bfb21952cce87d_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/json-schema/draft-03/examples/interfaces";
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
", "node_modules/json-schema/draft-03/examples/interfaces", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/json-schema/draft-03/examples/interfaces");
    }
}
