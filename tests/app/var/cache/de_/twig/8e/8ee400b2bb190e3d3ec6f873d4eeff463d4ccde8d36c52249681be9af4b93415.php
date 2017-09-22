<?php

/* node_modules/fsevents/node_modules/har-schema/lib/log.json */
class __TwigTemplate_8e37b3c41dc4a12009a3f13181edc77a136a08f71891e45fa0689b9625004641 extends Twig_Template
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
        $__internal_a80f2e33548cc456d49cd816288d86781fb50da577203a8bb612f6bfd3a29447 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a80f2e33548cc456d49cd816288d86781fb50da577203a8bb612f6bfd3a29447->enter($__internal_a80f2e33548cc456d49cd816288d86781fb50da577203a8bb612f6bfd3a29447_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/fsevents/node_modules/har-schema/lib/log.json"));

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
        
        $__internal_a80f2e33548cc456d49cd816288d86781fb50da577203a8bb612f6bfd3a29447->leave($__internal_a80f2e33548cc456d49cd816288d86781fb50da577203a8bb612f6bfd3a29447_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/fsevents/node_modules/har-schema/lib/log.json";
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
", "node_modules/fsevents/node_modules/har-schema/lib/log.json", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/fsevents/node_modules/har-schema/lib/log.json");
    }
}
