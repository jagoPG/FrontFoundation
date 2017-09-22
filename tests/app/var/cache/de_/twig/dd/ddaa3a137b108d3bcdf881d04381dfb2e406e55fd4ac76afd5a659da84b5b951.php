<?php

/* node_modules/har-schema/lib/cache.json */
class __TwigTemplate_07e8952b24f3e190f1cf6cbee9b1d7dff53f557e2931e6005786f8ad6ec57071 extends Twig_Template
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
        $__internal_f5902d3b07cdbbd86357f22a8806b20ff036d16d42816fb9513d4f4a1a5e17c1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f5902d3b07cdbbd86357f22a8806b20ff036d16d42816fb9513d4f4a1a5e17c1->enter($__internal_f5902d3b07cdbbd86357f22a8806b20ff036d16d42816fb9513d4f4a1a5e17c1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/har-schema/lib/cache.json"));

        // line 1
        echo "{
  \"id\": \"cache.json#\",
  \"properties\": {
    \"beforeRequest\": {
      \"oneOf\": [
        { \"type\": \"null\" },
        { \"\$ref\": \"beforeRequest.json#\" }
      ]
    },
    \"afterRequest\": {
      \"oneOf\": [
        { \"type\": \"null\" },
        { \"\$ref\": \"afterRequest.json#\" }
      ]
    },
    \"comment\": {
      \"type\": \"string\"
    }
  }
}
";
        
        $__internal_f5902d3b07cdbbd86357f22a8806b20ff036d16d42816fb9513d4f4a1a5e17c1->leave($__internal_f5902d3b07cdbbd86357f22a8806b20ff036d16d42816fb9513d4f4a1a5e17c1_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/har-schema/lib/cache.json";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{
  \"id\": \"cache.json#\",
  \"properties\": {
    \"beforeRequest\": {
      \"oneOf\": [
        { \"type\": \"null\" },
        { \"\$ref\": \"beforeRequest.json#\" }
      ]
    },
    \"afterRequest\": {
      \"oneOf\": [
        { \"type\": \"null\" },
        { \"\$ref\": \"afterRequest.json#\" }
      ]
    },
    \"comment\": {
      \"type\": \"string\"
    }
  }
}
", "node_modules/har-schema/lib/cache.json", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/har-schema/lib/cache.json");
    }
}
