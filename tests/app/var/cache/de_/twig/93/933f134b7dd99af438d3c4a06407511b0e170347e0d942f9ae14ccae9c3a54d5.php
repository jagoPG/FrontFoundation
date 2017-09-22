<?php

/* node_modules/json-schema-traverse/package.json */
class __TwigTemplate_a2a6b4ba3166dba7e43e68a251458cc2ce591603c332fe574fb81d882fc2e3a8 extends Twig_Template
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
        $__internal_a76baee859f1483bf2b225609b3bb4ebec6cb55595881986c379048ce5d83852 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a76baee859f1483bf2b225609b3bb4ebec6cb55595881986c379048ce5d83852->enter($__internal_a76baee859f1483bf2b225609b3bb4ebec6cb55595881986c379048ce5d83852_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/json-schema-traverse/package.json"));

        // line 1
        echo "{
  \"name\": \"json-schema-traverse\",
  \"version\": \"0.3.1\",
  \"description\": \"Traverse JSON Schema passing each schema object to callback\",
  \"main\": \"index.js\",
  \"scripts\": {
    \"eslint\": \"eslint index.js spec\",
    \"test-spec\": \"mocha spec -R spec\",
    \"test\": \"npm run eslint && nyc npm run test-spec\"
  },
  \"repository\": {
    \"type\": \"git\",
    \"url\": \"git+https://github.com/epoberezkin/json-schema-traverse.git\"
  },
  \"keywords\": [
    \"JSON-Schema\",
    \"traverse\",
    \"iterate\"
  ],
  \"author\": \"Evgeny Poberezkin\",
  \"license\": \"MIT\",
  \"bugs\": {
    \"url\": \"https://github.com/epoberezkin/json-schema-traverse/issues\"
  },
  \"homepage\": \"https://github.com/epoberezkin/json-schema-traverse#readme\",
  \"devDependencies\": {
    \"coveralls\": \"^2.13.1\",
    \"eslint\": \"^3.19.0\",
    \"mocha\": \"^3.4.2\",
    \"nyc\": \"^11.0.2\",
    \"pre-commit\": \"^1.2.2\"
  },
  \"nyc\": {
    \"exclude\": [
      \"**/spec/**\",
      \"node_modules\"
    ],
    \"reporter\": [
      \"lcov\",
      \"text-summary\"
    ]
  }
}
";
        
        $__internal_a76baee859f1483bf2b225609b3bb4ebec6cb55595881986c379048ce5d83852->leave($__internal_a76baee859f1483bf2b225609b3bb4ebec6cb55595881986c379048ce5d83852_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/json-schema-traverse/package.json";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{
  \"name\": \"json-schema-traverse\",
  \"version\": \"0.3.1\",
  \"description\": \"Traverse JSON Schema passing each schema object to callback\",
  \"main\": \"index.js\",
  \"scripts\": {
    \"eslint\": \"eslint index.js spec\",
    \"test-spec\": \"mocha spec -R spec\",
    \"test\": \"npm run eslint && nyc npm run test-spec\"
  },
  \"repository\": {
    \"type\": \"git\",
    \"url\": \"git+https://github.com/epoberezkin/json-schema-traverse.git\"
  },
  \"keywords\": [
    \"JSON-Schema\",
    \"traverse\",
    \"iterate\"
  ],
  \"author\": \"Evgeny Poberezkin\",
  \"license\": \"MIT\",
  \"bugs\": {
    \"url\": \"https://github.com/epoberezkin/json-schema-traverse/issues\"
  },
  \"homepage\": \"https://github.com/epoberezkin/json-schema-traverse#readme\",
  \"devDependencies\": {
    \"coveralls\": \"^2.13.1\",
    \"eslint\": \"^3.19.0\",
    \"mocha\": \"^3.4.2\",
    \"nyc\": \"^11.0.2\",
    \"pre-commit\": \"^1.2.2\"
  },
  \"nyc\": {
    \"exclude\": [
      \"**/spec/**\",
      \"node_modules\"
    ],
    \"reporter\": [
      \"lcov\",
      \"text-summary\"
    ]
  }
}
", "node_modules/json-schema-traverse/package.json", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/json-schema-traverse/package.json");
    }
}
