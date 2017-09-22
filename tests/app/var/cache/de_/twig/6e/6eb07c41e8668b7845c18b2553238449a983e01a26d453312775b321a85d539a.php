<?php

/* node_modules/fsevents/node_modules/har-schema/lib/har.json */
class __TwigTemplate_2e16dd20229d57094e240cb8615356c06b21d08cdc70a02f7958b99f521addf0 extends Twig_Template
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
        $__internal_91371a030ea86235a5b643b2df40cfca928b19ece0895b40d322d97bae1c0325 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_91371a030ea86235a5b643b2df40cfca928b19ece0895b40d322d97bae1c0325->enter($__internal_91371a030ea86235a5b643b2df40cfca928b19ece0895b40d322d97bae1c0325_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/fsevents/node_modules/har-schema/lib/har.json"));

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
        
        $__internal_91371a030ea86235a5b643b2df40cfca928b19ece0895b40d322d97bae1c0325->leave($__internal_91371a030ea86235a5b643b2df40cfca928b19ece0895b40d322d97bae1c0325_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/fsevents/node_modules/har-schema/lib/har.json";
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
", "node_modules/fsevents/node_modules/har-schema/lib/har.json", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/fsevents/node_modules/har-schema/lib/har.json");
    }
}
