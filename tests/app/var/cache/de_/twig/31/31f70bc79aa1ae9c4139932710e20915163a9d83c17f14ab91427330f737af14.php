<?php

/* node_modules/fast-deep-equal/package.json */
class __TwigTemplate_528b72c3311fccd56dae7f23098c7b97b65934c9348b9ee19c7e68fbe75290ce extends Twig_Template
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
        $__internal_8d9669b07612032c626b39e38366052bba05ef226ed226a1d0f0f17dae65be47 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8d9669b07612032c626b39e38366052bba05ef226ed226a1d0f0f17dae65be47->enter($__internal_8d9669b07612032c626b39e38366052bba05ef226ed226a1d0f0f17dae65be47_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/fast-deep-equal/package.json"));

        // line 1
        echo "{
  \"name\": \"fast-deep-equal\",
  \"version\": \"1.0.0\",
  \"description\": \"Fast deep equal\",
  \"main\": \"index.js\",
  \"scripts\": {
    \"eslint\": \"eslint *.js benchmark spec\",
    \"test-spec\": \"mocha spec/*.spec.js -R spec\",
    \"test-cov\": \"nyc npm run test-spec\",
    \"test\": \"npm run eslint && npm run test-cov\"
  },
  \"repository\": {
    \"type\": \"git\",
    \"url\": \"git+https://github.com/epoberezkin/fast-deep-equal.git\"
  },
  \"keywords\": [
    \"fast\",
    \"equal\",
    \"deep-equal\"
  ],
  \"author\": \"Evgeny Poberezkin\",
  \"license\": \"MIT\",
  \"bugs\": {
    \"url\": \"https://github.com/epoberezkin/fast-deep-equal/issues\"
  },
  \"homepage\": \"https://github.com/epoberezkin/fast-deep-equal#readme\",
  \"devDependencies\": {
    \"benchmark\": \"^2.1.4\",
    \"coveralls\": \"^2.13.1\",
    \"deep-eql\": \"^2.0.2\",
    \"deep-equal\": \"^1.0.1\",
    \"eslint\": \"^4.0.0\",
    \"lodash\": \"^4.17.4\",
    \"mocha\": \"^3.4.2\",
    \"nano-equal\": \"^1.0.1\",
    \"nyc\": \"^11.0.2\",
    \"pre-commit\": \"^1.2.2\",
    \"shallow-equal-fuzzy\": \"0.0.2\",
    \"underscore\": \"^1.8.3\"
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
        
        $__internal_8d9669b07612032c626b39e38366052bba05ef226ed226a1d0f0f17dae65be47->leave($__internal_8d9669b07612032c626b39e38366052bba05ef226ed226a1d0f0f17dae65be47_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/fast-deep-equal/package.json";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{
  \"name\": \"fast-deep-equal\",
  \"version\": \"1.0.0\",
  \"description\": \"Fast deep equal\",
  \"main\": \"index.js\",
  \"scripts\": {
    \"eslint\": \"eslint *.js benchmark spec\",
    \"test-spec\": \"mocha spec/*.spec.js -R spec\",
    \"test-cov\": \"nyc npm run test-spec\",
    \"test\": \"npm run eslint && npm run test-cov\"
  },
  \"repository\": {
    \"type\": \"git\",
    \"url\": \"git+https://github.com/epoberezkin/fast-deep-equal.git\"
  },
  \"keywords\": [
    \"fast\",
    \"equal\",
    \"deep-equal\"
  ],
  \"author\": \"Evgeny Poberezkin\",
  \"license\": \"MIT\",
  \"bugs\": {
    \"url\": \"https://github.com/epoberezkin/fast-deep-equal/issues\"
  },
  \"homepage\": \"https://github.com/epoberezkin/fast-deep-equal#readme\",
  \"devDependencies\": {
    \"benchmark\": \"^2.1.4\",
    \"coveralls\": \"^2.13.1\",
    \"deep-eql\": \"^2.0.2\",
    \"deep-equal\": \"^1.0.1\",
    \"eslint\": \"^4.0.0\",
    \"lodash\": \"^4.17.4\",
    \"mocha\": \"^3.4.2\",
    \"nano-equal\": \"^1.0.1\",
    \"nyc\": \"^11.0.2\",
    \"pre-commit\": \"^1.2.2\",
    \"shallow-equal-fuzzy\": \"0.0.2\",
    \"underscore\": \"^1.8.3\"
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
", "node_modules/fast-deep-equal/package.json", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/fast-deep-equal/package.json");
    }
}
