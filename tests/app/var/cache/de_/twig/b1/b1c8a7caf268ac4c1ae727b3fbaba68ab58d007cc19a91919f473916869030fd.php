<?php

/* node_modules/fsevents/node_modules/har-schema/lib/query.json */
class __TwigTemplate_4e591a0a729942e0fef9a9a433da017f1236dd8ba390e570c85c7de6f1564f4b extends Twig_Template
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
        $__internal_198b761d3bb547b365906662d2ad2af6ea41b71e400135a4c8e4ce91037c67ad = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_198b761d3bb547b365906662d2ad2af6ea41b71e400135a4c8e4ce91037c67ad->enter($__internal_198b761d3bb547b365906662d2ad2af6ea41b71e400135a4c8e4ce91037c67ad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/fsevents/node_modules/har-schema/lib/query.json"));

        // line 1
        echo "{
  \"id\": \"query.json#\",
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
        
        $__internal_198b761d3bb547b365906662d2ad2af6ea41b71e400135a4c8e4ce91037c67ad->leave($__internal_198b761d3bb547b365906662d2ad2af6ea41b71e400135a4c8e4ce91037c67ad_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/fsevents/node_modules/har-schema/lib/query.json";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{
  \"id\": \"query.json#\",
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
", "node_modules/fsevents/node_modules/har-schema/lib/query.json", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/fsevents/node_modules/har-schema/lib/query.json");
    }
}
