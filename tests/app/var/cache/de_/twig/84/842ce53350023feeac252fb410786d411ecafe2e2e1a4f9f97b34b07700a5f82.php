<?php

/* node_modules/har-schema/lib/cookie.json */
class __TwigTemplate_684ba4142dcd372bc3bb610e20537e6caec6f18feac0585d85736a1a4fd44488 extends Twig_Template
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
        $__internal_35d9104b61ac9e876e6d0936c1ed2470492d0d6e85344a82994d570a8a333420 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_35d9104b61ac9e876e6d0936c1ed2470492d0d6e85344a82994d570a8a333420->enter($__internal_35d9104b61ac9e876e6d0936c1ed2470492d0d6e85344a82994d570a8a333420_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/har-schema/lib/cookie.json"));

        // line 1
        echo "{
  \"id\": \"cookie.json#\",
  \"type\": \"object\",
  \"required\": [
    \"name\",
    \"value\"
  ],
  \"properties\": {
    \"name\": {
      \"type\": \"string\"
    },
    \"value\": {
      \"type\": \"string\"
    },
    \"path\": {
      \"type\": \"string\"
    },
    \"domain\": {
      \"type\": \"string\"
    },
    \"expires\": {
      \"type\": [\"string\", \"null\"],
      \"format\": \"date-time\"
    },
    \"httpOnly\": {
      \"type\": \"boolean\"
    },
    \"secure\": {
      \"type\": \"boolean\"
    },
    \"comment\": {
      \"type\": \"string\"
    }
  }
}
";
        
        $__internal_35d9104b61ac9e876e6d0936c1ed2470492d0d6e85344a82994d570a8a333420->leave($__internal_35d9104b61ac9e876e6d0936c1ed2470492d0d6e85344a82994d570a8a333420_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/har-schema/lib/cookie.json";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{
  \"id\": \"cookie.json#\",
  \"type\": \"object\",
  \"required\": [
    \"name\",
    \"value\"
  ],
  \"properties\": {
    \"name\": {
      \"type\": \"string\"
    },
    \"value\": {
      \"type\": \"string\"
    },
    \"path\": {
      \"type\": \"string\"
    },
    \"domain\": {
      \"type\": \"string\"
    },
    \"expires\": {
      \"type\": [\"string\", \"null\"],
      \"format\": \"date-time\"
    },
    \"httpOnly\": {
      \"type\": \"boolean\"
    },
    \"secure\": {
      \"type\": \"boolean\"
    },
    \"comment\": {
      \"type\": \"string\"
    }
  }
}
", "node_modules/har-schema/lib/cookie.json", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/har-schema/lib/cookie.json");
    }
}
