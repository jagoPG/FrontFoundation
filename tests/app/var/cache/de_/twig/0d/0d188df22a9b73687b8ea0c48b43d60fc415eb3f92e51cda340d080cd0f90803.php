<?php

/* node_modules/fsevents/node_modules/har-schema/lib/request.json */
class __TwigTemplate_2c2d03883cfc688d7f4da3cc55bee9ac6359080efb15c68378c5d3fe1935f371 extends Twig_Template
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
        $__internal_d804717f64f728aa63624d245c2d1c83412a1965b18a0b470ae74fa34d23be3d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d804717f64f728aa63624d245c2d1c83412a1965b18a0b470ae74fa34d23be3d->enter($__internal_d804717f64f728aa63624d245c2d1c83412a1965b18a0b470ae74fa34d23be3d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/fsevents/node_modules/har-schema/lib/request.json"));

        // line 1
        echo "{
  \"id\": \"request.json#\",
  \"type\": \"object\",
  \"required\": [
    \"method\",
    \"url\",
    \"httpVersion\",
    \"cookies\",
    \"headers\",
    \"queryString\",
    \"headersSize\",
    \"bodySize\"
  ],
  \"properties\": {
    \"method\": {
      \"type\": \"string\"
    },
    \"url\": {
      \"type\": \"string\",
      \"format\": \"uri\"
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
    \"queryString\": {
      \"type\": \"array\",
      \"items\": {
        \"\$ref\": \"query.json#\"
      }
    },
    \"postData\": {
      \"\$ref\": \"postData.json#\"
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
        
        $__internal_d804717f64f728aa63624d245c2d1c83412a1965b18a0b470ae74fa34d23be3d->leave($__internal_d804717f64f728aa63624d245c2d1c83412a1965b18a0b470ae74fa34d23be3d_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/fsevents/node_modules/har-schema/lib/request.json";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{
  \"id\": \"request.json#\",
  \"type\": \"object\",
  \"required\": [
    \"method\",
    \"url\",
    \"httpVersion\",
    \"cookies\",
    \"headers\",
    \"queryString\",
    \"headersSize\",
    \"bodySize\"
  ],
  \"properties\": {
    \"method\": {
      \"type\": \"string\"
    },
    \"url\": {
      \"type\": \"string\",
      \"format\": \"uri\"
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
    \"queryString\": {
      \"type\": \"array\",
      \"items\": {
        \"\$ref\": \"query.json#\"
      }
    },
    \"postData\": {
      \"\$ref\": \"postData.json#\"
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
", "node_modules/fsevents/node_modules/har-schema/lib/request.json", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/fsevents/node_modules/har-schema/lib/request.json");
    }
}
