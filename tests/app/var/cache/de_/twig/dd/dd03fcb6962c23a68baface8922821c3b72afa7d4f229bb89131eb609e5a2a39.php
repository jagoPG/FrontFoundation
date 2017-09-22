<?php

/* node_modules/fsevents/node_modules/har-schema/lib/beforeRequest.json */
class __TwigTemplate_8266eae49096565f4b011921df978e84fce62eb4df5d4a8681c19161f6b5eae6 extends Twig_Template
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
        $__internal_6bc63265e88af49f7423edda17620327d87910357496261d7796ad477cd073ba = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6bc63265e88af49f7423edda17620327d87910357496261d7796ad477cd073ba->enter($__internal_6bc63265e88af49f7423edda17620327d87910357496261d7796ad477cd073ba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/fsevents/node_modules/har-schema/lib/beforeRequest.json"));

        // line 1
        echo "{
  \"id\": \"beforeRequest.json#\",
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
        
        $__internal_6bc63265e88af49f7423edda17620327d87910357496261d7796ad477cd073ba->leave($__internal_6bc63265e88af49f7423edda17620327d87910357496261d7796ad477cd073ba_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/fsevents/node_modules/har-schema/lib/beforeRequest.json";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{
  \"id\": \"beforeRequest.json#\",
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
", "node_modules/fsevents/node_modules/har-schema/lib/beforeRequest.json", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/fsevents/node_modules/har-schema/lib/beforeRequest.json");
    }
}
