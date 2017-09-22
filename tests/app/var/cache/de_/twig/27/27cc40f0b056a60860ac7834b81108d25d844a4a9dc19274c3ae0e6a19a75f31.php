<?php

/* node_modules/fsevents/node_modules/har-schema/lib/cookie.json */
class __TwigTemplate_9ddcafca29b7aa3f61cb4d209db2f8f66c75e40e7af760fc97d3004d9ed80e18 extends Twig_Template
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
        $__internal_00b833e0bcc3cbec510c3a225dba20b26448ae34c568e7c48d3851e3791411ea = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_00b833e0bcc3cbec510c3a225dba20b26448ae34c568e7c48d3851e3791411ea->enter($__internal_00b833e0bcc3cbec510c3a225dba20b26448ae34c568e7c48d3851e3791411ea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/fsevents/node_modules/har-schema/lib/cookie.json"));

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
        
        $__internal_00b833e0bcc3cbec510c3a225dba20b26448ae34c568e7c48d3851e3791411ea->leave($__internal_00b833e0bcc3cbec510c3a225dba20b26448ae34c568e7c48d3851e3791411ea_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/fsevents/node_modules/har-schema/lib/cookie.json";
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
", "node_modules/fsevents/node_modules/har-schema/lib/cookie.json", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/fsevents/node_modules/har-schema/lib/cookie.json");
    }
}
