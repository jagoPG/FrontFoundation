<?php

/* node_modules/har-schema/lib/entry.json */
class __TwigTemplate_78c9ea56318e2f9dcb7d33fe216050206dcfc74e197f43cfb74c489c576528ce extends Twig_Template
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
        $__internal_5e76231dce13ccbe3f6c7595405d7212c5c357ae5c3100bc349940a1f00e809d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5e76231dce13ccbe3f6c7595405d7212c5c357ae5c3100bc349940a1f00e809d->enter($__internal_5e76231dce13ccbe3f6c7595405d7212c5c357ae5c3100bc349940a1f00e809d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/har-schema/lib/entry.json"));

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
        
        $__internal_5e76231dce13ccbe3f6c7595405d7212c5c357ae5c3100bc349940a1f00e809d->leave($__internal_5e76231dce13ccbe3f6c7595405d7212c5c357ae5c3100bc349940a1f00e809d_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/har-schema/lib/entry.json";
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
", "node_modules/har-schema/lib/entry.json", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/har-schema/lib/entry.json");
    }
}
