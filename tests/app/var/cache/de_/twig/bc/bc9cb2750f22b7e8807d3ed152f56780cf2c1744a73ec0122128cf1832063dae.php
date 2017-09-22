<?php

/* node_modules/ms/package.json */
class __TwigTemplate_ece6ef51a719a28fe59ed02ff1dbbc6099c1516517bb97894a40b6d5c9d0ef1b extends Twig_Template
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
        $__internal_d0982cf6b5c60f717487745aa198f2ec9b6ffb4b7a41fd17a273eadf201182c8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d0982cf6b5c60f717487745aa198f2ec9b6ffb4b7a41fd17a273eadf201182c8->enter($__internal_d0982cf6b5c60f717487745aa198f2ec9b6ffb4b7a41fd17a273eadf201182c8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/ms/package.json"));

        // line 1
        echo "{
  \"name\": \"ms\",
  \"version\": \"2.0.0\",
  \"description\": \"Tiny milisecond conversion utility\",
  \"repository\": \"zeit/ms\",
  \"main\": \"./index\",
  \"files\": [
    \"index.js\"
  ],
  \"scripts\": {
    \"precommit\": \"lint-staged\",
    \"lint\": \"eslint lib/* bin/*\",
    \"test\": \"mocha tests.js\"
  },
  \"eslintConfig\": {
    \"extends\": \"eslint:recommended\",
    \"env\": {
      \"node\": true,
      \"es6\": true
    }
  },
  \"lint-staged\": {
    \"*.js\": [
      \"npm run lint\",
      \"prettier --single-quote --write\",
      \"git add\"
    ]
  },
  \"license\": \"MIT\",
  \"devDependencies\": {
    \"eslint\": \"3.19.0\",
    \"expect.js\": \"0.3.1\",
    \"husky\": \"0.13.3\",
    \"lint-staged\": \"3.4.1\",
    \"mocha\": \"3.4.1\"
  }
}
";
        
        $__internal_d0982cf6b5c60f717487745aa198f2ec9b6ffb4b7a41fd17a273eadf201182c8->leave($__internal_d0982cf6b5c60f717487745aa198f2ec9b6ffb4b7a41fd17a273eadf201182c8_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/ms/package.json";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{
  \"name\": \"ms\",
  \"version\": \"2.0.0\",
  \"description\": \"Tiny milisecond conversion utility\",
  \"repository\": \"zeit/ms\",
  \"main\": \"./index\",
  \"files\": [
    \"index.js\"
  ],
  \"scripts\": {
    \"precommit\": \"lint-staged\",
    \"lint\": \"eslint lib/* bin/*\",
    \"test\": \"mocha tests.js\"
  },
  \"eslintConfig\": {
    \"extends\": \"eslint:recommended\",
    \"env\": {
      \"node\": true,
      \"es6\": true
    }
  },
  \"lint-staged\": {
    \"*.js\": [
      \"npm run lint\",
      \"prettier --single-quote --write\",
      \"git add\"
    ]
  },
  \"license\": \"MIT\",
  \"devDependencies\": {
    \"eslint\": \"3.19.0\",
    \"expect.js\": \"0.3.1\",
    \"husky\": \"0.13.3\",
    \"lint-staged\": \"3.4.1\",
    \"mocha\": \"3.4.1\"
  }
}
", "node_modules/ms/package.json", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/ms/package.json");
    }
}
