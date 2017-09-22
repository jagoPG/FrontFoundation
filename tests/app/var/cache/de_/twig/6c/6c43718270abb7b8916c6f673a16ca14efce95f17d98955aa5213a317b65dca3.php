<?php

/* node_modules/har-schema/lib/pageTimings.json */
class __TwigTemplate_3d83bfe7e44a1bcd4a0b1877e80bf4a06c00ac862f345d1ba82aa2fac12c7660 extends Twig_Template
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
        $__internal_9096e8e29149e7e0118bc3e7b1170f7914d41a46cedcf1c8658dd2c61ac7454f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9096e8e29149e7e0118bc3e7b1170f7914d41a46cedcf1c8658dd2c61ac7454f->enter($__internal_9096e8e29149e7e0118bc3e7b1170f7914d41a46cedcf1c8658dd2c61ac7454f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/har-schema/lib/pageTimings.json"));

        // line 1
        echo "{
  \"id\": \"pageTimings.json#\",
  \"type\": \"object\",
  \"properties\": {
    \"onContentLoad\": {
      \"type\": \"number\",
      \"min\": -1
    },
    \"onLoad\": {
      \"type\": \"number\",
      \"min\": -1
    },
    \"comment\": {
      \"type\": \"string\"
    }
  }
}
";
        
        $__internal_9096e8e29149e7e0118bc3e7b1170f7914d41a46cedcf1c8658dd2c61ac7454f->leave($__internal_9096e8e29149e7e0118bc3e7b1170f7914d41a46cedcf1c8658dd2c61ac7454f_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/har-schema/lib/pageTimings.json";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{
  \"id\": \"pageTimings.json#\",
  \"type\": \"object\",
  \"properties\": {
    \"onContentLoad\": {
      \"type\": \"number\",
      \"min\": -1
    },
    \"onLoad\": {
      \"type\": \"number\",
      \"min\": -1
    },
    \"comment\": {
      \"type\": \"string\"
    }
  }
}
", "node_modules/har-schema/lib/pageTimings.json", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/har-schema/lib/pageTimings.json");
    }
}
