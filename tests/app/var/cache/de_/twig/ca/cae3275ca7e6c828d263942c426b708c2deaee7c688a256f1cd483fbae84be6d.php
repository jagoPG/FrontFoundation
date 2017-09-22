<?php

/* node_modules/har-schema/lib/har.json */
class __TwigTemplate_e4df977d023df53f5c7cef3de306fe03587565a896ca5dbc4116c18ea5a3ea1b extends Twig_Template
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
        $__internal_637d9a4b723e8804bd9582c13524012aac1d34f697c388cf620966013e1c3e77 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_637d9a4b723e8804bd9582c13524012aac1d34f697c388cf620966013e1c3e77->enter($__internal_637d9a4b723e8804bd9582c13524012aac1d34f697c388cf620966013e1c3e77_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/har-schema/lib/har.json"));

        // line 1
        echo "{
  \"id\": \"har.json#\",
  \"type\": \"object\",
  \"required\": [
    \"log\"
  ],
  \"properties\": {
    \"log\": {
      \"\$ref\": \"log.json#\"
    }
  }
}
";
        
        $__internal_637d9a4b723e8804bd9582c13524012aac1d34f697c388cf620966013e1c3e77->leave($__internal_637d9a4b723e8804bd9582c13524012aac1d34f697c388cf620966013e1c3e77_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/har-schema/lib/har.json";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{
  \"id\": \"har.json#\",
  \"type\": \"object\",
  \"required\": [
    \"log\"
  ],
  \"properties\": {
    \"log\": {
      \"\$ref\": \"log.json#\"
    }
  }
}
", "node_modules/har-schema/lib/har.json", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/har-schema/lib/har.json");
    }
}
