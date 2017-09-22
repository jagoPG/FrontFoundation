<?php

/* node_modules/har-validator/package.json */
class __TwigTemplate_a2a3f4bc4699d96f96c5ab2a5aa7e15d79e7f54b7d6d41ca6e341775f72182a4 extends Twig_Template
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
        $__internal_fcbc6e1d6f527d814f42b7de8cf466bdd8b19703c77cf49078990831ee67611a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fcbc6e1d6f527d814f42b7de8cf466bdd8b19703c77cf49078990831ee67611a->enter($__internal_fcbc6e1d6f527d814f42b7de8cf466bdd8b19703c77cf49078990831ee67611a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/har-validator/package.json"));

        // line 1
        echo "{
  \"version\": \"4.2.1\",
  \"name\": \"har-validator\",
  \"description\": \"Extremely fast HTTP Archive (HAR) validator using JSON Schema\",
  \"author\": \"Ahmad Nassri <ahmad@ahmadnassri.com> (https://www.ahmadnassri.com/)\",
  \"homepage\": \"https://github.com/ahmadnassri/har-validator\",
  \"repository\": {
    \"type\": \"git\",
    \"url\": \"https://github.com/ahmadnassri/har-validator.git\"
  },
  \"license\": \"ISC\",
  \"main\": \"lib/node4/promise.js\",
  \"keywords\": [
    \"har\",
    \"cli\",
    \"ajv\",
    \"http\",
    \"archive\",
    \"validate\",
    \"validator\"
  ],
  \"engines\": {
    \"node\": \">=4\"
  },
  \"files\": [
    \"lib\",
    \"src\"
  ],
  \"bugs\": {
    \"url\": \"https://github.com/ahmadnassri/har-validator/issues\"
  },
  \"scripts\": {
    \"compile\": \"babel -q src\",
    \"test\": \"BABEL_ENV=test tap test --reporter spec --node-arg=--require --node-arg=babel-register\",
    \"test-one\": \"BABEL_ENV=test tap --reporter spec --node-arg=--require --node-arg=babel-register\",
    \"pretest\": \"snazzy && echint\",
    \"coverage\": \"BABEL_ENV=test tap test --reporter silent --coverage --nyc-arg=--require --nyc-arg=babel-register\",
    \"codeclimate\": \"BABEL_ENV=test tap --coverage-report=text-lcov | codeclimate-test-reporter\",
    \"semantic-release\": \"semantic-release pre && npm publish && semantic-release post\"
  },
  \"standard\": {
    \"ignore\": [
      \"lib/**\"
    ]
  },
  \"echint\": {
    \"ignore\": [
      \"lib/**\"
    ]
  },
  \"config\": {
    \"commitizen\": {
      \"path\": \"./node_modules/cz-conventional-changelog\"
    }
  },
  \"devDependencies\": {
    \"babel-cli\": \"^6.18.0\",
    \"babel-plugin-add-module-exports\": \"^0.2.1\",
    \"babel-preset-env\": \"1.1.10\",
    \"babel-register\": \"^6.18.0\",
    \"codeclimate-test-reporter\": \"^0.4.0\",
    \"cz-conventional-changelog\": \"^1.2.0\",
    \"echint\": \"^4.0.1\",
    \"semantic-release\": \"^6.3.2\",
    \"snazzy\": \"^6.0.0\",
    \"tap\": \"^10.0.0\"
  },
  \"dependencies\": {
    \"ajv\": \"^4.9.1\",
    \"har-schema\": \"^1.0.5\"
  }
}";
        
        $__internal_fcbc6e1d6f527d814f42b7de8cf466bdd8b19703c77cf49078990831ee67611a->leave($__internal_fcbc6e1d6f527d814f42b7de8cf466bdd8b19703c77cf49078990831ee67611a_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/har-validator/package.json";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{
  \"version\": \"4.2.1\",
  \"name\": \"har-validator\",
  \"description\": \"Extremely fast HTTP Archive (HAR) validator using JSON Schema\",
  \"author\": \"Ahmad Nassri <ahmad@ahmadnassri.com> (https://www.ahmadnassri.com/)\",
  \"homepage\": \"https://github.com/ahmadnassri/har-validator\",
  \"repository\": {
    \"type\": \"git\",
    \"url\": \"https://github.com/ahmadnassri/har-validator.git\"
  },
  \"license\": \"ISC\",
  \"main\": \"lib/node4/promise.js\",
  \"keywords\": [
    \"har\",
    \"cli\",
    \"ajv\",
    \"http\",
    \"archive\",
    \"validate\",
    \"validator\"
  ],
  \"engines\": {
    \"node\": \">=4\"
  },
  \"files\": [
    \"lib\",
    \"src\"
  ],
  \"bugs\": {
    \"url\": \"https://github.com/ahmadnassri/har-validator/issues\"
  },
  \"scripts\": {
    \"compile\": \"babel -q src\",
    \"test\": \"BABEL_ENV=test tap test --reporter spec --node-arg=--require --node-arg=babel-register\",
    \"test-one\": \"BABEL_ENV=test tap --reporter spec --node-arg=--require --node-arg=babel-register\",
    \"pretest\": \"snazzy && echint\",
    \"coverage\": \"BABEL_ENV=test tap test --reporter silent --coverage --nyc-arg=--require --nyc-arg=babel-register\",
    \"codeclimate\": \"BABEL_ENV=test tap --coverage-report=text-lcov | codeclimate-test-reporter\",
    \"semantic-release\": \"semantic-release pre && npm publish && semantic-release post\"
  },
  \"standard\": {
    \"ignore\": [
      \"lib/**\"
    ]
  },
  \"echint\": {
    \"ignore\": [
      \"lib/**\"
    ]
  },
  \"config\": {
    \"commitizen\": {
      \"path\": \"./node_modules/cz-conventional-changelog\"
    }
  },
  \"devDependencies\": {
    \"babel-cli\": \"^6.18.0\",
    \"babel-plugin-add-module-exports\": \"^0.2.1\",
    \"babel-preset-env\": \"1.1.10\",
    \"babel-register\": \"^6.18.0\",
    \"codeclimate-test-reporter\": \"^0.4.0\",
    \"cz-conventional-changelog\": \"^1.2.0\",
    \"echint\": \"^4.0.1\",
    \"semantic-release\": \"^6.3.2\",
    \"snazzy\": \"^6.0.0\",
    \"tap\": \"^10.0.0\"
  },
  \"dependencies\": {
    \"ajv\": \"^4.9.1\",
    \"har-schema\": \"^1.0.5\"
  }
}", "node_modules/har-validator/package.json", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/har-validator/package.json");
    }
}
