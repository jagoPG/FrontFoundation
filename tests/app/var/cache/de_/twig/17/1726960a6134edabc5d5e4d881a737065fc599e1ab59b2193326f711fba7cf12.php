<?php

/* node_modules/har-schema/lib/creator.json */
class __TwigTemplate_16f14635382f9b580ffb22b812a86b76846bd59180f8a4d62b69020055ca5118 extends Twig_Template
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
        $__internal_82ac2562ee38218d27ef5dfa42ef2f754c5bd3c22bb4da00d6fd473a5b7bdd6e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_82ac2562ee38218d27ef5dfa42ef2f754c5bd3c22bb4da00d6fd473a5b7bdd6e->enter($__internal_82ac2562ee38218d27ef5dfa42ef2f754c5bd3c22bb4da00d6fd473a5b7bdd6e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/har-schema/lib/creator.json"));

        // line 1
        echo "{
  \"id\": \"creator.json#\",
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
        
        $__internal_82ac2562ee38218d27ef5dfa42ef2f754c5bd3c22bb4da00d6fd473a5b7bdd6e->leave($__internal_82ac2562ee38218d27ef5dfa42ef2f754c5bd3c22bb4da00d6fd473a5b7bdd6e_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/har-schema/lib/creator.json";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{
  \"id\": \"creator.json#\",
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
", "node_modules/har-schema/lib/creator.json", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/har-schema/lib/creator.json");
    }
}
