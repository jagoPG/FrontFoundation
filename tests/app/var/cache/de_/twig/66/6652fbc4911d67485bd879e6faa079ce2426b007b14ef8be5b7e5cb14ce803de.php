<?php

/* node_modules/har-schema/lib/browser.json */
class __TwigTemplate_6f89ec541914994f3cec69f59689ba3950c0e4e645e288d08573f8db029a1f62 extends Twig_Template
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
        $__internal_4b12b71501876191a7401c0d3db4d37a4f59d9b6bc4d936574a0f7033e17c513 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4b12b71501876191a7401c0d3db4d37a4f59d9b6bc4d936574a0f7033e17c513->enter($__internal_4b12b71501876191a7401c0d3db4d37a4f59d9b6bc4d936574a0f7033e17c513_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/har-schema/lib/browser.json"));

        // line 1
        echo "{
  \"id\": \"browser.json#\",
  \"type\": \"object\",
  \"required\": [
    \"name\",
    \"version\"
  ],
  \"properties\": {
    \"name\": {
      \"type\": \"string\"
    },
    \"version\": {
      \"type\": \"string\"
    },
    \"comment\": {
      \"type\": \"string\"
    }
  }
}
";
        
        $__internal_4b12b71501876191a7401c0d3db4d37a4f59d9b6bc4d936574a0f7033e17c513->leave($__internal_4b12b71501876191a7401c0d3db4d37a4f59d9b6bc4d936574a0f7033e17c513_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/har-schema/lib/browser.json";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{
  \"id\": \"browser.json#\",
  \"type\": \"object\",
  \"required\": [
    \"name\",
    \"version\"
  ],
  \"properties\": {
    \"name\": {
      \"type\": \"string\"
    },
    \"version\": {
      \"type\": \"string\"
    },
    \"comment\": {
      \"type\": \"string\"
    }
  }
}
", "node_modules/har-schema/lib/browser.json", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/har-schema/lib/browser.json");
    }
}
