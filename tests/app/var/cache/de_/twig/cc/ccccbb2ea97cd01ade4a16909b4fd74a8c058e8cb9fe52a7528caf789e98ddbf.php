<?php

/* node_modules/fsevents/node_modules/har-schema/lib/response.json */
class __TwigTemplate_7017096f35de97e4ceb6e0f5434e8954e8097ee91855b9fcb213301e80d2020f extends Twig_Template
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
        $__internal_9f417cca57833bb9555cce12235779db9aa4f2cf871605915d401a7dbaec0fb2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9f417cca57833bb9555cce12235779db9aa4f2cf871605915d401a7dbaec0fb2->enter($__internal_9f417cca57833bb9555cce12235779db9aa4f2cf871605915d401a7dbaec0fb2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/fsevents/node_modules/har-schema/lib/response.json"));

        // line 1
        echo "{
  \"id\": \"response.json#\",
  \"type\": \"object\",
  \"required\": [
    \"status\",
    \"statusText\",
    \"httpVersion\",
    \"cookies\",
    \"headers\",
    \"content\",
    \"redirectURL\",
    \"headersSize\",
    \"bodySize\"
  ],
  \"properties\": {
    \"status\": {
      \"type\": \"integer\"
    },
    \"statusText\": {
      \"type\": \"string\"
    },
    \"httpVersion\": {
      \"type\": \"string\"
    },
    \"cookies\": {
      \"type\": \"array\",
      \"items\": {
        \"\$ref\": \"cookie.json#\"
      }
    },
    \"headers\": {
      \"type\": \"array\",
      \"items\": {
        \"\$ref\": \"header.json#\"
      }
    },
    \"content\": {
      \"\$ref\": \"content.json#\"
    },
    \"redirectURL\": {
      \"type\": \"string\"
    },
    \"headersSize\": {
      \"type\": \"integer\"
    },
    \"bodySize\": {
      \"type\": \"integer\"
    },
    \"comment\": {
      \"type\": \"string\"
    }
  }
}
";
        
        $__internal_9f417cca57833bb9555cce12235779db9aa4f2cf871605915d401a7dbaec0fb2->leave($__internal_9f417cca57833bb9555cce12235779db9aa4f2cf871605915d401a7dbaec0fb2_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/fsevents/node_modules/har-schema/lib/response.json";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{
  \"id\": \"response.json#\",
  \"type\": \"object\",
  \"required\": [
    \"status\",
    \"statusText\",
    \"httpVersion\",
    \"cookies\",
    \"headers\",
    \"content\",
    \"redirectURL\",
    \"headersSize\",
    \"bodySize\"
  ],
  \"properties\": {
    \"status\": {
      \"type\": \"integer\"
    },
    \"statusText\": {
      \"type\": \"string\"
    },
    \"httpVersion\": {
      \"type\": \"string\"
    },
    \"cookies\": {
      \"type\": \"array\",
      \"items\": {
        \"\$ref\": \"cookie.json#\"
      }
    },
    \"headers\": {
      \"type\": \"array\",
      \"items\": {
        \"\$ref\": \"header.json#\"
      }
    },
    \"content\": {
      \"\$ref\": \"content.json#\"
    },
    \"redirectURL\": {
      \"type\": \"string\"
    },
    \"headersSize\": {
      \"type\": \"integer\"
    },
    \"bodySize\": {
      \"type\": \"integer\"
    },
    \"comment\": {
      \"type\": \"string\"
    }
  }
}
", "node_modules/fsevents/node_modules/har-schema/lib/response.json", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/fsevents/node_modules/har-schema/lib/response.json");
    }
}
