<?php

/* node_modules/loader-runner/package.json */
class __TwigTemplate_3050209f9e4578fd12fa118e6b97d70dec43d796cacdd737fee6a269e95c14a6 extends Twig_Template
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
        $__internal_8d9f2231d345bc1447bc72d16745cb8f2ead9bcb19469c300040b73dd854c7f0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8d9f2231d345bc1447bc72d16745cb8f2ead9bcb19469c300040b73dd854c7f0->enter($__internal_8d9f2231d345bc1447bc72d16745cb8f2ead9bcb19469c300040b73dd854c7f0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/loader-runner/package.json"));

        // line 1
        echo "{
  \"name\": \"loader-runner\",
  \"version\": \"2.3.0\",
  \"description\": \"Runs (webpack) loaders\",
  \"main\": \"lib/LoaderRunner.js\",
  \"scripts\": {
    \"beautify-lint\": \"beautify-lint lib/**.js test/*.js\",
    \"beautify\": \"beautify-rewrite lib/**.js test/*.js\",
    \"lint\": \"eslint lib test\",
    \"pretest\": \"npm run lint && npm run beautify-lint\",
    \"test\": \"mocha --reporter spec\",
    \"precover\": \"npm run lint && npm run beautify-lint\",
    \"cover\": \"istanbul cover node_modules/mocha/bin/_mocha\",
    \"travis\": \"npm run cover -- --report lcovonly\"
  },
  \"repository\": {
    \"type\": \"git\",
    \"url\": \"git+https://github.com/webpack/loader-runner.git\"
  },
  \"keywords\": [
    \"webpack\",
    \"loader\"
  ],
  \"author\": \"Tobias Koppers @sokra\",
  \"license\": \"MIT\",
  \"bugs\": {
    \"url\": \"https://github.com/webpack/loader-runner/issues\"
  },
  \"homepage\": \"https://github.com/webpack/loader-runner#readme\",
  \"engines\": {
    \"node\": \">=4.3.0 <5.0.0 || >=5.10\"
  },
  \"files\": [
    \"lib/\",
    \"bin/\",
    \"hot/\",
    \"web_modules/\",
    \"schemas/\"
  ],
  \"devDependencies\": {
    \"beautify-lint\": \"^1.0.4\",
    \"codecov.io\": \"^0.1.6\",
    \"coveralls\": \"^2.11.6\",
    \"eslint\": \"^3.12.2\",
    \"eslint-plugin-node\": \"^3.0.5\",
    \"eslint-plugin-nodeca\": \"^1.0.3\",
    \"istanbul\": \"^0.4.1\",
    \"mocha\": \"^3.2.0\",
    \"should\": \"^8.0.2\"
  }
}
";
        
        $__internal_8d9f2231d345bc1447bc72d16745cb8f2ead9bcb19469c300040b73dd854c7f0->leave($__internal_8d9f2231d345bc1447bc72d16745cb8f2ead9bcb19469c300040b73dd854c7f0_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/loader-runner/package.json";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{
  \"name\": \"loader-runner\",
  \"version\": \"2.3.0\",
  \"description\": \"Runs (webpack) loaders\",
  \"main\": \"lib/LoaderRunner.js\",
  \"scripts\": {
    \"beautify-lint\": \"beautify-lint lib/**.js test/*.js\",
    \"beautify\": \"beautify-rewrite lib/**.js test/*.js\",
    \"lint\": \"eslint lib test\",
    \"pretest\": \"npm run lint && npm run beautify-lint\",
    \"test\": \"mocha --reporter spec\",
    \"precover\": \"npm run lint && npm run beautify-lint\",
    \"cover\": \"istanbul cover node_modules/mocha/bin/_mocha\",
    \"travis\": \"npm run cover -- --report lcovonly\"
  },
  \"repository\": {
    \"type\": \"git\",
    \"url\": \"git+https://github.com/webpack/loader-runner.git\"
  },
  \"keywords\": [
    \"webpack\",
    \"loader\"
  ],
  \"author\": \"Tobias Koppers @sokra\",
  \"license\": \"MIT\",
  \"bugs\": {
    \"url\": \"https://github.com/webpack/loader-runner/issues\"
  },
  \"homepage\": \"https://github.com/webpack/loader-runner#readme\",
  \"engines\": {
    \"node\": \">=4.3.0 <5.0.0 || >=5.10\"
  },
  \"files\": [
    \"lib/\",
    \"bin/\",
    \"hot/\",
    \"web_modules/\",
    \"schemas/\"
  ],
  \"devDependencies\": {
    \"beautify-lint\": \"^1.0.4\",
    \"codecov.io\": \"^0.1.6\",
    \"coveralls\": \"^2.11.6\",
    \"eslint\": \"^3.12.2\",
    \"eslint-plugin-node\": \"^3.0.5\",
    \"eslint-plugin-nodeca\": \"^1.0.3\",
    \"istanbul\": \"^0.4.1\",
    \"mocha\": \"^3.2.0\",
    \"should\": \"^8.0.2\"
  }
}
", "node_modules/loader-runner/package.json", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/loader-runner/package.json");
    }
}
