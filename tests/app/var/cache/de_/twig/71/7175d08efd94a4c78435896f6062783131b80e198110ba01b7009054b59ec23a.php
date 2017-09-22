<?php

/* node_modules/fsevents/node_modules/har-schema/lib/creator.json */
class __TwigTemplate_5898a9017b964e4180c41343b848e7dd7e02a9ba7b0358ee5df04276cae52a3c extends Twig_Template
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
        $__internal_7542f0bef66e3d66da4ac0de33bd120adbb7e7e3aa348cf5a07f1f45d427b67b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7542f0bef66e3d66da4ac0de33bd120adbb7e7e3aa348cf5a07f1f45d427b67b->enter($__internal_7542f0bef66e3d66da4ac0de33bd120adbb7e7e3aa348cf5a07f1f45d427b67b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/fsevents/node_modules/har-schema/lib/creator.json"));

        // line 1
        echo "{
  \"id\": \"creator.json#\",
  \"type\": \"object\",
  \"required\": [
    \"name\",
    \"version\"
  ],
  \"properties\": {
    \"name\": {
      \"type\": \"string\"
    },
    \"version\": {
      \"type\": \"string\"
    },
    \"comment\": {
      \"type\": \"string\"
    }
  }
}
";
        
        $__internal_7542f0bef66e3d66da4ac0de33bd120adbb7e7e3aa348cf5a07f1f45d427b67b->leave($__internal_7542f0bef66e3d66da4ac0de33bd120adbb7e7e3aa348cf5a07f1f45d427b67b_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/fsevents/node_modules/har-schema/lib/creator.json";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{
  \"id\": \"creator.json#\",
  \"type\": \"object\",
  \"required\": [
    \"name\",
    \"version\"
  ],
  \"properties\": {
    \"name\": {
      \"type\": \"string\"
    },
    \"version\": {
      \"type\": \"string\"
    },
    \"comment\": {
      \"type\": \"string\"
    }
  }
}
", "node_modules/fsevents/node_modules/har-schema/lib/creator.json", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/fsevents/node_modules/har-schema/lib/creator.json");
    }
}
