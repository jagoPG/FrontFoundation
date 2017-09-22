<?php

/* node_modules/fsevents/node_modules/har-schema/lib/postData.json */
class __TwigTemplate_5871df5e383cf21825c1bc87150675d4bc6a5c9ab74ad8c0ed8b05afa8ec3391 extends Twig_Template
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
        $__internal_f3b2495097f6d2e28b8370b7577165219952a12a3a24c3bdc687b4ad37be1924 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f3b2495097f6d2e28b8370b7577165219952a12a3a24c3bdc687b4ad37be1924->enter($__internal_f3b2495097f6d2e28b8370b7577165219952a12a3a24c3bdc687b4ad37be1924_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/fsevents/node_modules/har-schema/lib/postData.json"));

        // line 1
        echo "{
  \"id\": \"postData.json#\",
  \"type\": \"object\",
  \"optional\": true,
  \"required\": [
    \"mimeType\"
  ],
  \"properties\": {
    \"mimeType\": {
      \"type\": \"string\"
    },
    \"text\": {
      \"type\": \"string\"
    },
    \"params\": {
      \"type\": \"array\",
      \"required\": [
        \"name\"
      ],
      \"properties\": {
        \"name\": {
          \"type\": \"string\"
        },
        \"value\": {
          \"type\": \"string\"
        },
        \"fileName\": {
          \"type\": \"string\"
        },
        \"contentType\": {
          \"type\": \"string\"
        },
        \"comment\": {
          \"type\": \"string\"
        }
      }
    },
    \"comment\": {
      \"type\": \"string\"
    }
  }
}
";
        
        $__internal_f3b2495097f6d2e28b8370b7577165219952a12a3a24c3bdc687b4ad37be1924->leave($__internal_f3b2495097f6d2e28b8370b7577165219952a12a3a24c3bdc687b4ad37be1924_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/fsevents/node_modules/har-schema/lib/postData.json";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{
  \"id\": \"postData.json#\",
  \"type\": \"object\",
  \"optional\": true,
  \"required\": [
    \"mimeType\"
  ],
  \"properties\": {
    \"mimeType\": {
      \"type\": \"string\"
    },
    \"text\": {
      \"type\": \"string\"
    },
    \"params\": {
      \"type\": \"array\",
      \"required\": [
        \"name\"
      ],
      \"properties\": {
        \"name\": {
          \"type\": \"string\"
        },
        \"value\": {
          \"type\": \"string\"
        },
        \"fileName\": {
          \"type\": \"string\"
        },
        \"contentType\": {
          \"type\": \"string\"
        },
        \"comment\": {
          \"type\": \"string\"
        }
      }
    },
    \"comment\": {
      \"type\": \"string\"
    }
  }
}
", "node_modules/fsevents/node_modules/har-schema/lib/postData.json", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/fsevents/node_modules/har-schema/lib/postData.json");
    }
}
