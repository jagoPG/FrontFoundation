<?php

/* node_modules/spdx-correct/package.json */
class __TwigTemplate_898c9be144d30bfed7ccace84d781803eecbb199e552483aed7967e6a9ffb122 extends Twig_Template
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
        $__internal_747d25013d767422be3af6d4fdd6213ac03e3479ed1e1bec3cb52b25b2a7b8b6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_747d25013d767422be3af6d4fdd6213ac03e3479ed1e1bec3cb52b25b2a7b8b6->enter($__internal_747d25013d767422be3af6d4fdd6213ac03e3479ed1e1bec3cb52b25b2a7b8b6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/spdx-correct/package.json"));

        // line 1
        echo "{
  \"name\": \"spdx-correct\",
  \"description\": \"correct invalid SPDX identifiers\",
  \"version\": \"1.0.2\",
  \"author\": \"Kyle E. Mitchell <kyle@kemitchell.com> (https://kemitchell.com)\",
  \"dependencies\": {
    \"spdx-license-ids\": \"^1.0.2\"
  },
  \"devDependencies\": {
    \"defence-cli\": \"^1.0.1\",
    \"replace-require-self\": \"^1.0.0\",
    \"spdx-expression-parse\": \"^1.0.0\",
    \"tape\": \"~4.0.0\"
  },
  \"keywords\": [
    \"SPDX\",
    \"law\",
    \"legal\",
    \"license\",
    \"metadata\"
  ],
  \"license\": \"Apache-2.0\",
  \"repository\": \"kemitchell/spdx-correct.js\",
  \"scripts\": {
    \"test\": \"defence README.md | replace-require-self | node && tape *.test.js\"
  }
}
";
        
        $__internal_747d25013d767422be3af6d4fdd6213ac03e3479ed1e1bec3cb52b25b2a7b8b6->leave($__internal_747d25013d767422be3af6d4fdd6213ac03e3479ed1e1bec3cb52b25b2a7b8b6_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/spdx-correct/package.json";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{
  \"name\": \"spdx-correct\",
  \"description\": \"correct invalid SPDX identifiers\",
  \"version\": \"1.0.2\",
  \"author\": \"Kyle E. Mitchell <kyle@kemitchell.com> (https://kemitchell.com)\",
  \"dependencies\": {
    \"spdx-license-ids\": \"^1.0.2\"
  },
  \"devDependencies\": {
    \"defence-cli\": \"^1.0.1\",
    \"replace-require-self\": \"^1.0.0\",
    \"spdx-expression-parse\": \"^1.0.0\",
    \"tape\": \"~4.0.0\"
  },
  \"keywords\": [
    \"SPDX\",
    \"law\",
    \"legal\",
    \"license\",
    \"metadata\"
  ],
  \"license\": \"Apache-2.0\",
  \"repository\": \"kemitchell/spdx-correct.js\",
  \"scripts\": {
    \"test\": \"defence README.md | replace-require-self | node && tape *.test.js\"
  }
}
", "node_modules/spdx-correct/package.json", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/spdx-correct/package.json");
    }
}
