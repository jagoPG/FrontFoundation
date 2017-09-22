<?php

/* node_modules/har-schema/lib/query.json */
class __TwigTemplate_7839b43bdd5b3c0d99273d075114ef50e1bf15cdfe684d6b49de0b480c75c8bb extends Twig_Template
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
        $__internal_4ee4a1977374cf690b9a730759857c7916eaf4557ac86d52c743a9c8e52282a2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4ee4a1977374cf690b9a730759857c7916eaf4557ac86d52c743a9c8e52282a2->enter($__internal_4ee4a1977374cf690b9a730759857c7916eaf4557ac86d52c743a9c8e52282a2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/har-schema/lib/query.json"));

        // line 1
        echo "{
  \"id\": \"query.json#\",
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
    \"comment\": {
      \"type\": \"string\"
    }
  }
}
";
        
        $__internal_4ee4a1977374cf690b9a730759857c7916eaf4557ac86d52c743a9c8e52282a2->leave($__internal_4ee4a1977374cf690b9a730759857c7916eaf4557ac86d52c743a9c8e52282a2_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/har-schema/lib/query.json";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{
  \"id\": \"query.json#\",
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
    \"comment\": {
      \"type\": \"string\"
    }
  }
}
", "node_modules/har-schema/lib/query.json", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/har-schema/lib/query.json");
    }
}
