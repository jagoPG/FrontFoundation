<?php

/* node_modules/fsevents/node_modules/har-schema/lib/afterRequest.json */
class __TwigTemplate_26b87782a655c0ec2d342087b3291317905535301b7f4b309b4aecf1c14d7951 extends Twig_Template
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
        $__internal_a2936fe64ceafb1898d8fd3653d167c044ccc0faa4eeff526787a1332b0789c8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a2936fe64ceafb1898d8fd3653d167c044ccc0faa4eeff526787a1332b0789c8->enter($__internal_a2936fe64ceafb1898d8fd3653d167c044ccc0faa4eeff526787a1332b0789c8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/fsevents/node_modules/har-schema/lib/afterRequest.json"));

        // line 1
        echo "{
  \"id\": \"afterRequest.json#\",
  \"type\": \"object\",
  \"optional\": true,
  \"required\": [
    \"lastAccess\",
    \"eTag\",
    \"hitCount\"
  ],
  \"properties\": {
    \"expires\": {
      \"type\": \"string\",
      \"pattern\": \"^(\\\\d{4})(-)?(\\\\d\\\\d)(-)?(\\\\d\\\\d)(T)?(\\\\d\\\\d)(:)?(\\\\d\\\\d)(:)?(\\\\d\\\\d)(\\\\.\\\\d+)?(Z|([+-])(\\\\d\\\\d)(:)?(\\\\d\\\\d))?\"
    },
    \"lastAccess\": {
      \"type\": \"string\",
      \"pattern\": \"^(\\\\d{4})(-)?(\\\\d\\\\d)(-)?(\\\\d\\\\d)(T)?(\\\\d\\\\d)(:)?(\\\\d\\\\d)(:)?(\\\\d\\\\d)(\\\\.\\\\d+)?(Z|([+-])(\\\\d\\\\d)(:)?(\\\\d\\\\d))?\"
    },
    \"eTag\": {
      \"type\": \"string\"
    },
    \"hitCount\": {
      \"type\": \"integer\"
    },
    \"comment\": {
      \"type\": \"string\"
    }
  }
}
";
        
        $__internal_a2936fe64ceafb1898d8fd3653d167c044ccc0faa4eeff526787a1332b0789c8->leave($__internal_a2936fe64ceafb1898d8fd3653d167c044ccc0faa4eeff526787a1332b0789c8_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/fsevents/node_modules/har-schema/lib/afterRequest.json";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{
  \"id\": \"afterRequest.json#\",
  \"type\": \"object\",
  \"optional\": true,
  \"required\": [
    \"lastAccess\",
    \"eTag\",
    \"hitCount\"
  ],
  \"properties\": {
    \"expires\": {
      \"type\": \"string\",
      \"pattern\": \"^(\\\\d{4})(-)?(\\\\d\\\\d)(-)?(\\\\d\\\\d)(T)?(\\\\d\\\\d)(:)?(\\\\d\\\\d)(:)?(\\\\d\\\\d)(\\\\.\\\\d+)?(Z|([+-])(\\\\d\\\\d)(:)?(\\\\d\\\\d))?\"
    },
    \"lastAccess\": {
      \"type\": \"string\",
      \"pattern\": \"^(\\\\d{4})(-)?(\\\\d\\\\d)(-)?(\\\\d\\\\d)(T)?(\\\\d\\\\d)(:)?(\\\\d\\\\d)(:)?(\\\\d\\\\d)(\\\\.\\\\d+)?(Z|([+-])(\\\\d\\\\d)(:)?(\\\\d\\\\d))?\"
    },
    \"eTag\": {
      \"type\": \"string\"
    },
    \"hitCount\": {
      \"type\": \"integer\"
    },
    \"comment\": {
      \"type\": \"string\"
    }
  }
}
", "node_modules/fsevents/node_modules/har-schema/lib/afterRequest.json", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/fsevents/node_modules/har-schema/lib/afterRequest.json");
    }
}
