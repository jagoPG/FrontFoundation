<?php

/* node_modules/fsevents/node_modules/har-schema/lib/timings.json */
class __TwigTemplate_d26bb907966fdebd54a42de11e314e30201a9062aaa69033c753e73ff0ad9b7b extends Twig_Template
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
        $__internal_cb983e1445f812dc7a60a4565a58f30a1fb64d8300373fa2c13109d7f14e50d4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cb983e1445f812dc7a60a4565a58f30a1fb64d8300373fa2c13109d7f14e50d4->enter($__internal_cb983e1445f812dc7a60a4565a58f30a1fb64d8300373fa2c13109d7f14e50d4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/fsevents/node_modules/har-schema/lib/timings.json"));

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
        
        $__internal_cb983e1445f812dc7a60a4565a58f30a1fb64d8300373fa2c13109d7f14e50d4->leave($__internal_cb983e1445f812dc7a60a4565a58f30a1fb64d8300373fa2c13109d7f14e50d4_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/fsevents/node_modules/har-schema/lib/timings.json";
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
", "node_modules/fsevents/node_modules/har-schema/lib/timings.json", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/fsevents/node_modules/har-schema/lib/timings.json");
    }
}
