<?php

/* node_modules/har-schema/lib/request.json */
class __TwigTemplate_7a9c55ed31b0b819a3df4a1dea33b8189899926d2875de3170847d1e3c420926 extends Twig_Template
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
        $__internal_435f5401f0fcf2146ed6bd17f5a5c99e8c79bcfd535e1cb43edf0058448cfe7e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_435f5401f0fcf2146ed6bd17f5a5c99e8c79bcfd535e1cb43edf0058448cfe7e->enter($__internal_435f5401f0fcf2146ed6bd17f5a5c99e8c79bcfd535e1cb43edf0058448cfe7e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/har-schema/lib/request.json"));

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
        
        $__internal_435f5401f0fcf2146ed6bd17f5a5c99e8c79bcfd535e1cb43edf0058448cfe7e->leave($__internal_435f5401f0fcf2146ed6bd17f5a5c99e8c79bcfd535e1cb43edf0058448cfe7e_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/har-schema/lib/request.json";
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
", "node_modules/har-schema/lib/request.json", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/har-schema/lib/request.json");
    }
}
