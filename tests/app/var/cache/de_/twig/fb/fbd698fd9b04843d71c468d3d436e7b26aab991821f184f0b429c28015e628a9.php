<?php

/* node_modules/fsevents/node_modules/har-schema/lib/browser.json */
class __TwigTemplate_050c9dcc711e40597a03d468e29cb9d116df6e6f84e1cabc3cc3370437954dbb extends Twig_Template
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
        $__internal_4f577bd212f187183855da837b9bc4328b6075a0187b21381d31161ba52f2a24 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4f577bd212f187183855da837b9bc4328b6075a0187b21381d31161ba52f2a24->enter($__internal_4f577bd212f187183855da837b9bc4328b6075a0187b21381d31161ba52f2a24_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/fsevents/node_modules/har-schema/lib/browser.json"));

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
        
        $__internal_4f577bd212f187183855da837b9bc4328b6075a0187b21381d31161ba52f2a24->leave($__internal_4f577bd212f187183855da837b9bc4328b6075a0187b21381d31161ba52f2a24_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/fsevents/node_modules/har-schema/lib/browser.json";
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
", "node_modules/fsevents/node_modules/har-schema/lib/browser.json", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/fsevents/node_modules/har-schema/lib/browser.json");
    }
}
