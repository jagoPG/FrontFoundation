<?php

/* node_modules/har-schema/lib/response.json */
class __TwigTemplate_cee14e6058d99f5edbb2b474e50f3b3788febfe5e47c232da2533c099b8aa92c extends Twig_Template
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
        $__internal_6db1847ac572fe08781e364ddcc29c519cdfc60154ffe2c28beb1d799aee9005 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6db1847ac572fe08781e364ddcc29c519cdfc60154ffe2c28beb1d799aee9005->enter($__internal_6db1847ac572fe08781e364ddcc29c519cdfc60154ffe2c28beb1d799aee9005_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/har-schema/lib/response.json"));

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
        
        $__internal_6db1847ac572fe08781e364ddcc29c519cdfc60154ffe2c28beb1d799aee9005->leave($__internal_6db1847ac572fe08781e364ddcc29c519cdfc60154ffe2c28beb1d799aee9005_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/har-schema/lib/response.json";
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
", "node_modules/har-schema/lib/response.json", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/har-schema/lib/response.json");
    }
}
