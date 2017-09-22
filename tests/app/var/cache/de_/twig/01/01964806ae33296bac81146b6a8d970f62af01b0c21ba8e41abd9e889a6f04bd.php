<?php

/* node_modules/har-schema/lib/header.json */
class __TwigTemplate_f5f46ece3b9249f1949ce1ebb10fe98e1a94e98c0d0cf367227ec1ca415dea23 extends Twig_Template
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
        $__internal_7c90d7b86e69811aa22e1a924d07defe288007186ea4937f432847b9ec40143b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7c90d7b86e69811aa22e1a924d07defe288007186ea4937f432847b9ec40143b->enter($__internal_7c90d7b86e69811aa22e1a924d07defe288007186ea4937f432847b9ec40143b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/har-schema/lib/header.json"));

        // line 1
        echo "{
  \"id\": \"header.json#\",
  \"type\": \"object\",
  \"required\": [
    \"name\",
    \"value\"
  ],
  \"properties\": {
    \"name\": {
      \"type\": \"string\"
    },
    \"value\": {
      \"type\": \"string\"
    },
    \"comment\": {
      \"type\": \"string\"
    }
  }
}
";
        
        $__internal_7c90d7b86e69811aa22e1a924d07defe288007186ea4937f432847b9ec40143b->leave($__internal_7c90d7b86e69811aa22e1a924d07defe288007186ea4937f432847b9ec40143b_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/har-schema/lib/header.json";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{
  \"id\": \"header.json#\",
  \"type\": \"object\",
  \"required\": [
    \"name\",
    \"value\"
  ],
  \"properties\": {
    \"name\": {
      \"type\": \"string\"
    },
    \"value\": {
      \"type\": \"string\"
    },
    \"comment\": {
      \"type\": \"string\"
    }
  }
}
", "node_modules/har-schema/lib/header.json", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/har-schema/lib/header.json");
    }
}
