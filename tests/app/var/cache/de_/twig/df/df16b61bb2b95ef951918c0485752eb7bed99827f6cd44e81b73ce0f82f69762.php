<?php

/* node_modules/har-schema/lib/log.json */
class __TwigTemplate_fabb6c33402b78ad133c30343e4bc85f91e314ba445a9aff3f2049d1b2550348 extends Twig_Template
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
        $__internal_51a3adb769aa56d5ddc8fd73288005822ad3e8d05b0a773fe9340b36f1829ddd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_51a3adb769aa56d5ddc8fd73288005822ad3e8d05b0a773fe9340b36f1829ddd->enter($__internal_51a3adb769aa56d5ddc8fd73288005822ad3e8d05b0a773fe9340b36f1829ddd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/har-schema/lib/log.json"));

        // line 1
        echo "{
  \"id\": \"log.json#\",
  \"type\": \"object\",
  \"required\": [
    \"version\",
    \"creator\",
    \"entries\"
  ],
  \"properties\": {
    \"version\": {
      \"type\": \"string\"
    },
    \"creator\": {
      \"\$ref\": \"creator.json#\"
    },
    \"browser\": {
      \"\$ref\": \"browser.json#\"
    },
    \"pages\": {
      \"type\": \"array\",
      \"items\": {
        \"\$ref\": \"page.json#\"
      }
    },
    \"entries\": {
      \"type\": \"array\",
      \"items\": {
        \"\$ref\": \"entry.json#\"
      }
    },
    \"comment\": {
      \"type\": \"string\"
    }
  }
}
";
        
        $__internal_51a3adb769aa56d5ddc8fd73288005822ad3e8d05b0a773fe9340b36f1829ddd->leave($__internal_51a3adb769aa56d5ddc8fd73288005822ad3e8d05b0a773fe9340b36f1829ddd_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/har-schema/lib/log.json";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{
  \"id\": \"log.json#\",
  \"type\": \"object\",
  \"required\": [
    \"version\",
    \"creator\",
    \"entries\"
  ],
  \"properties\": {
    \"version\": {
      \"type\": \"string\"
    },
    \"creator\": {
      \"\$ref\": \"creator.json#\"
    },
    \"browser\": {
      \"\$ref\": \"browser.json#\"
    },
    \"pages\": {
      \"type\": \"array\",
      \"items\": {
        \"\$ref\": \"page.json#\"
      }
    },
    \"entries\": {
      \"type\": \"array\",
      \"items\": {
        \"\$ref\": \"entry.json#\"
      }
    },
    \"comment\": {
      \"type\": \"string\"
    }
  }
}
", "node_modules/har-schema/lib/log.json", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/har-schema/lib/log.json");
    }
}
