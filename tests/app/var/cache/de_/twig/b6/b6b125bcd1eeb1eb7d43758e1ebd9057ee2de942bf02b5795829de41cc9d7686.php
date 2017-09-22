<?php

/* node_modules/fsevents/node_modules/har-schema/lib/page.json */
class __TwigTemplate_7538f61ab306fbfc4293fbddaa3610e0e4499133d086ab5f95e10812465292ab extends Twig_Template
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
        $__internal_b4686e7668c012632644675c51c8aea3de473127b2cc30062c69082270268cf3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b4686e7668c012632644675c51c8aea3de473127b2cc30062c69082270268cf3->enter($__internal_b4686e7668c012632644675c51c8aea3de473127b2cc30062c69082270268cf3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/fsevents/node_modules/har-schema/lib/page.json"));

        // line 1
        echo "{
  \"id\": \"page.json#\",
  \"type\": \"object\",
  \"optional\": true,
  \"required\": [
    \"startedDateTime\",
    \"id\",
    \"title\",
    \"pageTimings\"
  ],
  \"properties\": {
    \"startedDateTime\": {
      \"type\": \"string\",
      \"format\": \"date-time\",
      \"pattern\": \"^(\\\\d{4})(-)?(\\\\d\\\\d)(-)?(\\\\d\\\\d)(T)?(\\\\d\\\\d)(:)?(\\\\d\\\\d)(:)?(\\\\d\\\\d)(\\\\.\\\\d+)?(Z|([+-])(\\\\d\\\\d)(:)?(\\\\d\\\\d))\"
    },
    \"id\": {
      \"type\": \"string\",
      \"unique\": true
    },
    \"title\": {
      \"type\": \"string\"
    },
    \"pageTimings\": {
      \"\$ref\": \"pageTimings.json#\"
    },
    \"comment\": {
      \"type\": \"string\"
    }
  }
}
";
        
        $__internal_b4686e7668c012632644675c51c8aea3de473127b2cc30062c69082270268cf3->leave($__internal_b4686e7668c012632644675c51c8aea3de473127b2cc30062c69082270268cf3_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/fsevents/node_modules/har-schema/lib/page.json";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{
  \"id\": \"page.json#\",
  \"type\": \"object\",
  \"optional\": true,
  \"required\": [
    \"startedDateTime\",
    \"id\",
    \"title\",
    \"pageTimings\"
  ],
  \"properties\": {
    \"startedDateTime\": {
      \"type\": \"string\",
      \"format\": \"date-time\",
      \"pattern\": \"^(\\\\d{4})(-)?(\\\\d\\\\d)(-)?(\\\\d\\\\d)(T)?(\\\\d\\\\d)(:)?(\\\\d\\\\d)(:)?(\\\\d\\\\d)(\\\\.\\\\d+)?(Z|([+-])(\\\\d\\\\d)(:)?(\\\\d\\\\d))\"
    },
    \"id\": {
      \"type\": \"string\",
      \"unique\": true
    },
    \"title\": {
      \"type\": \"string\"
    },
    \"pageTimings\": {
      \"\$ref\": \"pageTimings.json#\"
    },
    \"comment\": {
      \"type\": \"string\"
    }
  }
}
", "node_modules/fsevents/node_modules/har-schema/lib/page.json", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/fsevents/node_modules/har-schema/lib/page.json");
    }
}
