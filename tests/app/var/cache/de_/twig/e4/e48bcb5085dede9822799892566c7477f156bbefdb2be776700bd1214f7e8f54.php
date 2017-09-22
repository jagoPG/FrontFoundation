<?php

/* node_modules/fsevents/node_modules/har-schema/lib/entry.json */
class __TwigTemplate_ebfd00b554673f9e58fd2e5d5166f5420aa3ac6330cfa0d9b7c969d33291414b extends Twig_Template
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
        $__internal_7dc0cdc9747c53d18e7c736a37c2351dd84def26b02c73424f482d1a57523290 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7dc0cdc9747c53d18e7c736a37c2351dd84def26b02c73424f482d1a57523290->enter($__internal_7dc0cdc9747c53d18e7c736a37c2351dd84def26b02c73424f482d1a57523290_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/fsevents/node_modules/har-schema/lib/entry.json"));

        // line 1
        echo "{
  \"id\": \"entry.json#\",
  \"type\": \"object\",
  \"optional\": true,
  \"required\": [
    \"startedDateTime\",
    \"time\",
    \"request\",
    \"response\",
    \"cache\",
    \"timings\"
  ],
  \"properties\": {
    \"pageref\": {
      \"type\": \"string\"
    },
    \"startedDateTime\": {
      \"type\": \"string\",
      \"format\": \"date-time\",
      \"pattern\": \"^(\\\\d{4})(-)?(\\\\d\\\\d)(-)?(\\\\d\\\\d)(T)?(\\\\d\\\\d)(:)?(\\\\d\\\\d)(:)?(\\\\d\\\\d)(\\\\.\\\\d+)?(Z|([+-])(\\\\d\\\\d)(:)?(\\\\d\\\\d))\"
    },
    \"time\": {
      \"type\": \"number\",
      \"min\": 0
    },
    \"request\": {
      \"\$ref\": \"request.json#\"
    },
    \"response\": {
      \"\$ref\": \"response.json#\"
    },
    \"cache\": {
      \"\$ref\": \"cache.json#\"
    },
    \"timings\": {
      \"\$ref\": \"timings.json#\"
    },
    \"serverIPAddress\": {
      \"type\": \"string\",
      \"oneOf\": [
        { \"format\": \"ipv4\" },
        { \"format\": \"ipv6\" }
      ]
    },
    \"connection\": {
      \"type\": \"string\"
    },
    \"comment\": {
      \"type\": \"string\"
    }
  }
}
";
        
        $__internal_7dc0cdc9747c53d18e7c736a37c2351dd84def26b02c73424f482d1a57523290->leave($__internal_7dc0cdc9747c53d18e7c736a37c2351dd84def26b02c73424f482d1a57523290_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/fsevents/node_modules/har-schema/lib/entry.json";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{
  \"id\": \"entry.json#\",
  \"type\": \"object\",
  \"optional\": true,
  \"required\": [
    \"startedDateTime\",
    \"time\",
    \"request\",
    \"response\",
    \"cache\",
    \"timings\"
  ],
  \"properties\": {
    \"pageref\": {
      \"type\": \"string\"
    },
    \"startedDateTime\": {
      \"type\": \"string\",
      \"format\": \"date-time\",
      \"pattern\": \"^(\\\\d{4})(-)?(\\\\d\\\\d)(-)?(\\\\d\\\\d)(T)?(\\\\d\\\\d)(:)?(\\\\d\\\\d)(:)?(\\\\d\\\\d)(\\\\.\\\\d+)?(Z|([+-])(\\\\d\\\\d)(:)?(\\\\d\\\\d))\"
    },
    \"time\": {
      \"type\": \"number\",
      \"min\": 0
    },
    \"request\": {
      \"\$ref\": \"request.json#\"
    },
    \"response\": {
      \"\$ref\": \"response.json#\"
    },
    \"cache\": {
      \"\$ref\": \"cache.json#\"
    },
    \"timings\": {
      \"\$ref\": \"timings.json#\"
    },
    \"serverIPAddress\": {
      \"type\": \"string\",
      \"oneOf\": [
        { \"format\": \"ipv4\" },
        { \"format\": \"ipv6\" }
      ]
    },
    \"connection\": {
      \"type\": \"string\"
    },
    \"comment\": {
      \"type\": \"string\"
    }
  }
}
", "node_modules/fsevents/node_modules/har-schema/lib/entry.json", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/fsevents/node_modules/har-schema/lib/entry.json");
    }
}
