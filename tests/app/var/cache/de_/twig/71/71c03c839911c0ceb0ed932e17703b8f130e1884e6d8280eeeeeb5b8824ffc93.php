<?php

/* node_modules/har-schema/lib/timings.json */
class __TwigTemplate_98fc3ed7d7014474a825e43173e570391e07492aae98734d92e7475ce8210939 extends Twig_Template
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
        $__internal_0a75d64cfc58c0031b44677d2f7cd33b83808888e4941e7279e2ec99fe6d3332 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0a75d64cfc58c0031b44677d2f7cd33b83808888e4941e7279e2ec99fe6d3332->enter($__internal_0a75d64cfc58c0031b44677d2f7cd33b83808888e4941e7279e2ec99fe6d3332_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/har-schema/lib/timings.json"));

        // line 1
        echo "{
  \"id\": \"timings.json#\",
  \"required\": [
    \"send\",
    \"wait\",
    \"receive\"
  ],
  \"properties\": {
    \"dns\": {
      \"type\": \"number\",
      \"min\": -1
    },
    \"connect\": {
      \"type\": \"number\",
      \"min\": -1
    },
    \"blocked\": {
      \"type\": \"number\",
      \"min\": -1
    },
    \"send\": {
      \"type\": \"number\",
      \"min\": -1
    },
    \"wait\": {
      \"type\": \"number\",
      \"min\": -1
    },
    \"receive\": {
      \"type\": \"number\",
      \"min\": -1
    },
    \"ssl\": {
      \"type\": \"number\",
      \"min\": -1
    },
    \"comment\": {
      \"type\": \"string\"
    }
  }
}
";
        
        $__internal_0a75d64cfc58c0031b44677d2f7cd33b83808888e4941e7279e2ec99fe6d3332->leave($__internal_0a75d64cfc58c0031b44677d2f7cd33b83808888e4941e7279e2ec99fe6d3332_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/har-schema/lib/timings.json";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{
  \"id\": \"timings.json#\",
  \"required\": [
    \"send\",
    \"wait\",
    \"receive\"
  ],
  \"properties\": {
    \"dns\": {
      \"type\": \"number\",
      \"min\": -1
    },
    \"connect\": {
      \"type\": \"number\",
      \"min\": -1
    },
    \"blocked\": {
      \"type\": \"number\",
      \"min\": -1
    },
    \"send\": {
      \"type\": \"number\",
      \"min\": -1
    },
    \"wait\": {
      \"type\": \"number\",
      \"min\": -1
    },
    \"receive\": {
      \"type\": \"number\",
      \"min\": -1
    },
    \"ssl\": {
      \"type\": \"number\",
      \"min\": -1
    },
    \"comment\": {
      \"type\": \"string\"
    }
  }
}
", "node_modules/har-schema/lib/timings.json", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/har-schema/lib/timings.json");
    }
}
