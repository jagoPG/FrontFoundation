<?php

/* node_modules/ajv-keywords/package.json */
class __TwigTemplate_a29af686bbd262a9bc3df330c2ca892aabf406568b60638152ad43c5d0ea3cd0 extends Twig_Template
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
        $__internal_72244c06a0c94b08253b31a6d480e7051192777b3ca24b4cbc48d1ecca4b9b39 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_72244c06a0c94b08253b31a6d480e7051192777b3ca24b4cbc48d1ecca4b9b39->enter($__internal_72244c06a0c94b08253b31a6d480e7051192777b3ca24b4cbc48d1ecca4b9b39_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/ajv-keywords/package.json"));

        // line 1
        echo "{
  \"name\": \"ajv-keywords\",
  \"version\": \"2.1.0\",
  \"description\": \"Custom JSON-Schema keywords for Ajv validator\",
  \"main\": \"index.js\",
  \"scripts\": {
    \"build\": \"node node_modules/ajv/scripts/compile-dots.js node_modules/ajv/lib keywords\",
    \"prepublish\": \"npm run build\",
    \"test\": \"npm run build && npm run eslint && npm run test-cov\",
    \"eslint\": \"eslint index.js keywords/*.js\",
    \"test-spec\": \"mocha spec/*.spec.js -R spec\",
    \"test-cov\": \"istanbul cover -x 'spec/**' node_modules/mocha/bin/_mocha -- spec/*.spec.js -R spec\"
  },
  \"repository\": {
    \"type\": \"git\",
    \"url\": \"git+https://github.com/epoberezkin/ajv-keywords.git\"
  },
  \"keywords\": [
    \"JSON-Schema\",
    \"ajv\",
    \"keywords\"
  ],
  \"files\": [
    \"index.js\",
    \"keywords\"
  ],
  \"author\": \"Evgeny Poberezkin\",
  \"license\": \"MIT\",
  \"bugs\": {
    \"url\": \"https://github.com/epoberezkin/ajv-keywords/issues\"
  },
  \"homepage\": \"https://github.com/epoberezkin/ajv-keywords#readme\",
  \"peerDependencies\": {
    \"ajv\": \">=5.0.0\"
  },
  \"devDependencies\": {
    \"ajv\": \"^5.0.0\",
    \"ajv-pack\": \"^0.3.0\",
    \"chai\": \"^3.5.0\",
    \"coveralls\": \"^2.11.9\",
    \"dot\": \"^1.1.1\",
    \"eslint\": \"^3.6.0\",
    \"glob\": \"^7.1.1\",
    \"istanbul\": \"^0.4.3\",
    \"js-beautify\": \"^1.6.4\",
    \"json-schema-test\": \"^1.3.0\",
    \"mocha\": \"^3.0.2\",
    \"pre-commit\": \"^1.1.3\",
    \"uuid\": \"^3.0.1\"
  }
}
";
        
        $__internal_72244c06a0c94b08253b31a6d480e7051192777b3ca24b4cbc48d1ecca4b9b39->leave($__internal_72244c06a0c94b08253b31a6d480e7051192777b3ca24b4cbc48d1ecca4b9b39_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/ajv-keywords/package.json";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{
  \"name\": \"ajv-keywords\",
  \"version\": \"2.1.0\",
  \"description\": \"Custom JSON-Schema keywords for Ajv validator\",
  \"main\": \"index.js\",
  \"scripts\": {
    \"build\": \"node node_modules/ajv/scripts/compile-dots.js node_modules/ajv/lib keywords\",
    \"prepublish\": \"npm run build\",
    \"test\": \"npm run build && npm run eslint && npm run test-cov\",
    \"eslint\": \"eslint index.js keywords/*.js\",
    \"test-spec\": \"mocha spec/*.spec.js -R spec\",
    \"test-cov\": \"istanbul cover -x 'spec/**' node_modules/mocha/bin/_mocha -- spec/*.spec.js -R spec\"
  },
  \"repository\": {
    \"type\": \"git\",
    \"url\": \"git+https://github.com/epoberezkin/ajv-keywords.git\"
  },
  \"keywords\": [
    \"JSON-Schema\",
    \"ajv\",
    \"keywords\"
  ],
  \"files\": [
    \"index.js\",
    \"keywords\"
  ],
  \"author\": \"Evgeny Poberezkin\",
  \"license\": \"MIT\",
  \"bugs\": {
    \"url\": \"https://github.com/epoberezkin/ajv-keywords/issues\"
  },
  \"homepage\": \"https://github.com/epoberezkin/ajv-keywords#readme\",
  \"peerDependencies\": {
    \"ajv\": \">=5.0.0\"
  },
  \"devDependencies\": {
    \"ajv\": \"^5.0.0\",
    \"ajv-pack\": \"^0.3.0\",
    \"chai\": \"^3.5.0\",
    \"coveralls\": \"^2.11.9\",
    \"dot\": \"^1.1.1\",
    \"eslint\": \"^3.6.0\",
    \"glob\": \"^7.1.1\",
    \"istanbul\": \"^0.4.3\",
    \"js-beautify\": \"^1.6.4\",
    \"json-schema-test\": \"^1.3.0\",
    \"mocha\": \"^3.0.2\",
    \"pre-commit\": \"^1.1.3\",
    \"uuid\": \"^3.0.1\"
  }
}
", "node_modules/ajv-keywords/package.json", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/ajv-keywords/package.json");
    }
}
