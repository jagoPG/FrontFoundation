<?php

/* node_modules/har-schema/lib/postData.json */
class __TwigTemplate_6e7f5606e3ccf9e62324c20096811a81689eb2bce2c92ca874f4e41816e5a62a extends Twig_Template
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
        $__internal_91429cef50272227c3a6f13adda2e4e8511c7d73333c7f1d13e1791cac9951e3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_91429cef50272227c3a6f13adda2e4e8511c7d73333c7f1d13e1791cac9951e3->enter($__internal_91429cef50272227c3a6f13adda2e4e8511c7d73333c7f1d13e1791cac9951e3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/har-schema/lib/postData.json"));

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
        
        $__internal_91429cef50272227c3a6f13adda2e4e8511c7d73333c7f1d13e1791cac9951e3->leave($__internal_91429cef50272227c3a6f13adda2e4e8511c7d73333c7f1d13e1791cac9951e3_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/har-schema/lib/postData.json";
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
", "node_modules/har-schema/lib/postData.json", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/har-schema/lib/postData.json");
    }
}
