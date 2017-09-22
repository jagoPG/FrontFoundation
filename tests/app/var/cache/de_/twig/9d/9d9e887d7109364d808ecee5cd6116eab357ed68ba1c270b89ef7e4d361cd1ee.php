<?php

/* node_modules/har-schema/lib/content.json */
class __TwigTemplate_218da2620ba11fca51cbddac16e93f28542a19e31a0957486b294abdc5d1e58a extends Twig_Template
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
        $__internal_6b47651ead13c2875ab09eb925c8e05d0ed11f01863e58ef705d2f60ea400936 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6b47651ead13c2875ab09eb925c8e05d0ed11f01863e58ef705d2f60ea400936->enter($__internal_6b47651ead13c2875ab09eb925c8e05d0ed11f01863e58ef705d2f60ea400936_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/har-schema/lib/content.json"));

        // line 1
        echo "{
  \"id\": \"content.json#\",
  \"type\": \"object\",
  \"required\": [
    \"size\",
    \"mimeType\"
  ],
  \"properties\": {
    \"size\": {
      \"type\": \"integer\"
    },
    \"compression\": {
      \"type\": \"integer\"
    },
    \"mimeType\": {
      \"type\": \"string\"
    },
    \"text\": {
      \"type\": \"string\"
    },
    \"encoding\": {
      \"type\": \"string\"
    },
    \"comment\": {
      \"type\": \"string\"
    }
  }
}
";
        
        $__internal_6b47651ead13c2875ab09eb925c8e05d0ed11f01863e58ef705d2f60ea400936->leave($__internal_6b47651ead13c2875ab09eb925c8e05d0ed11f01863e58ef705d2f60ea400936_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/har-schema/lib/content.json";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{
  \"id\": \"content.json#\",
  \"type\": \"object\",
  \"required\": [
    \"size\",
    \"mimeType\"
  ],
  \"properties\": {
    \"size\": {
      \"type\": \"integer\"
    },
    \"compression\": {
      \"type\": \"integer\"
    },
    \"mimeType\": {
      \"type\": \"string\"
    },
    \"text\": {
      \"type\": \"string\"
    },
    \"encoding\": {
      \"type\": \"string\"
    },
    \"comment\": {
      \"type\": \"string\"
    }
  }
}
", "node_modules/har-schema/lib/content.json", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/har-schema/lib/content.json");
    }
}
