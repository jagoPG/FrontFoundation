<?php

/* node_modules/har-schema/lib/beforeRequest.json */
class __TwigTemplate_ee0f88096543432f89126f058d934654da724125df5a46599b77c9b83dc663cd extends Twig_Template
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
        $__internal_6cc10206c73ad0b7bad4d3dd50ae02997a280cc6615a8c09189b6376822fc460 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6cc10206c73ad0b7bad4d3dd50ae02997a280cc6615a8c09189b6376822fc460->enter($__internal_6cc10206c73ad0b7bad4d3dd50ae02997a280cc6615a8c09189b6376822fc460_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/har-schema/lib/beforeRequest.json"));

        // line 1
        echo "{
  \"id\": \"beforeRequest.json#\",
  \"type\": \"object\",
  \"optional\": true,
  \"required\": [
    \"lastAccess\",
    \"eTag\",
    \"hitCount\"
  ],
  \"properties\": {
    \"expires\": {
      \"type\": \"string\",
      \"pattern\": \"^(\\\\d{4})(-)?(\\\\d\\\\d)(-)?(\\\\d\\\\d)(T)?(\\\\d\\\\d)(:)?(\\\\d\\\\d)(:)?(\\\\d\\\\d)(\\\\.\\\\d+)?(Z|([+-])(\\\\d\\\\d)(:)?(\\\\d\\\\d))?\"
    },
    \"lastAccess\": {
      \"type\": \"string\",
      \"pattern\": \"^(\\\\d{4})(-)?(\\\\d\\\\d)(-)?(\\\\d\\\\d)(T)?(\\\\d\\\\d)(:)?(\\\\d\\\\d)(:)?(\\\\d\\\\d)(\\\\.\\\\d+)?(Z|([+-])(\\\\d\\\\d)(:)?(\\\\d\\\\d))?\"
    },
    \"eTag\": {
      \"type\": \"string\"
    },
    \"hitCount\": {
      \"type\": \"integer\"
    },
    \"comment\": {
      \"type\": \"string\"
    }
  }
}
";
        
        $__internal_6cc10206c73ad0b7bad4d3dd50ae02997a280cc6615a8c09189b6376822fc460->leave($__internal_6cc10206c73ad0b7bad4d3dd50ae02997a280cc6615a8c09189b6376822fc460_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/har-schema/lib/beforeRequest.json";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{
  \"id\": \"beforeRequest.json#\",
  \"type\": \"object\",
  \"optional\": true,
  \"required\": [
    \"lastAccess\",
    \"eTag\",
    \"hitCount\"
  ],
  \"properties\": {
    \"expires\": {
      \"type\": \"string\",
      \"pattern\": \"^(\\\\d{4})(-)?(\\\\d\\\\d)(-)?(\\\\d\\\\d)(T)?(\\\\d\\\\d)(:)?(\\\\d\\\\d)(:)?(\\\\d\\\\d)(\\\\.\\\\d+)?(Z|([+-])(\\\\d\\\\d)(:)?(\\\\d\\\\d))?\"
    },
    \"lastAccess\": {
      \"type\": \"string\",
      \"pattern\": \"^(\\\\d{4})(-)?(\\\\d\\\\d)(-)?(\\\\d\\\\d)(T)?(\\\\d\\\\d)(:)?(\\\\d\\\\d)(:)?(\\\\d\\\\d)(\\\\.\\\\d+)?(Z|([+-])(\\\\d\\\\d)(:)?(\\\\d\\\\d))?\"
    },
    \"eTag\": {
      \"type\": \"string\"
    },
    \"hitCount\": {
      \"type\": \"integer\"
    },
    \"comment\": {
      \"type\": \"string\"
    }
  }
}
", "node_modules/har-schema/lib/beforeRequest.json", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/har-schema/lib/beforeRequest.json");
    }
}
