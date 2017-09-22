<?php

/* node_modules/har-validator/node_modules/ajv/package.json */
class __TwigTemplate_100e435f2a7b38b60c5ed6fac08b7fb06a95cd1a46847e1f7dcffc9bc816850f extends Twig_Template
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
        $__internal_afb9946a640b17dcc86f0f6de9d257ae6c9b3b2f5a0146c58ec9db80b0c14fd2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_afb9946a640b17dcc86f0f6de9d257ae6c9b3b2f5a0146c58ec9db80b0c14fd2->enter($__internal_afb9946a640b17dcc86f0f6de9d257ae6c9b3b2f5a0146c58ec9db80b0c14fd2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/har-validator/node_modules/ajv/package.json"));

        // line 1
        echo "{
  \"name\": \"ajv\",
  \"version\": \"4.11.8\",
  \"description\": \"Another JSON Schema Validator\",
  \"main\": \"lib/ajv.js\",
  \"webpack\": \"dist/ajv.bundle.js\",
  \"typings\": \"lib/ajv.d.ts\",
  \"files\": [
    \"lib/\",
    \"dist/\",
    \"scripts/\",
    \"LICENSE\",
    \".tonic_example.js\"
  ],
  \"publishConfig\": {
    \"tag\": \"4.x\"
  },
  \"scripts\": {
    \"jshint\": \"jshint lib/*.js lib/**/*.js --exclude lib/dotjs/**/*\",
    \"eslint\": \"if-node-version \\\">=4\\\" eslint lib/*.js lib/compile/*.js spec scripts\",
    \"test-spec\": \"mocha spec/*.spec.js -R spec\",
    \"test-fast\": \"AJV_FAST_TEST=true npm run test-spec\",
    \"test-debug\": \"mocha spec/*.spec.js --debug-brk -R spec\",
    \"test-cov\": \"nyc npm run test-spec\",
    \"test-ts\": \"tsc --target ES5 --noImplicitAny lib/ajv.d.ts\",
    \"bundle\": \"node ./scripts/bundle.js . Ajv pure_getters\",
    \"bundle-regenerator\": \"node ./scripts/bundle.js regenerator\",
    \"bundle-nodent\": \"node ./scripts/bundle.js nodent\",
    \"bundle-all\": \"del-cli dist && npm run bundle && npm run bundle-regenerator && npm run bundle-nodent\",
    \"bundle-beautify\": \"node ./scripts/bundle.js js-beautify\",
    \"build\": \"del-cli lib/dotjs/*.js && node scripts/compile-dots.js\",
    \"test-karma\": \"karma start --single-run --browsers PhantomJS\",
    \"test-browser\": \"del-cli .browser && npm run bundle-all && scripts/prepare-tests && npm run test-karma\",
    \"test\": \"npm run jshint && npm run eslint && npm run test-ts && npm run build && npm run test-cov && if-node-version 4 npm run test-browser\",
    \"prepublish\": \"npm run build && npm run bundle-all\",
    \"watch\": \"watch 'npm run build' ./lib/dot\"
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
  },
  \"repository\": {
    \"type\": \"git\",
    \"url\": \"https://github.com/epoberezkin/ajv.git\"
  },
  \"keywords\": [
    \"JSON\",
    \"schema\",
    \"validator\",
    \"validation\",
    \"jsonschema\",
    \"json-schema\",
    \"json-schema-validator\",
    \"json-schema-validation\"
  ],
  \"author\": \"Evgeny Poberezkin\",
  \"license\": \"MIT\",
  \"bugs\": {
    \"url\": \"https://github.com/epoberezkin/ajv/issues\"
  },
  \"homepage\": \"https://github.com/epoberezkin/ajv\",
  \"tonicExampleFilename\": \".tonic_example.js\",
  \"dependencies\": {
    \"co\": \"^4.6.0\",
    \"json-stable-stringify\": \"^1.0.1\"
  },
  \"devDependencies\": {
    \"bluebird\": \"^3.1.5\",
    \"brfs\": \"^1.4.3\",
    \"browserify\": \"^14.1.0\",
    \"chai\": \"^3.5.0\",
    \"coveralls\": \"^2.11.4\",
    \"del-cli\": \"^0.2.1\",
    \"dot\": \"^1.0.3\",
    \"eslint\": \"^3.2.2\",
    \"gh-pages-generator\": \"^0.2.0\",
    \"glob\": \"^7.0.0\",
    \"if-node-version\": \"^1.0.0\",
    \"js-beautify\": \"^1.5.6\",
    \"jshint\": \"^2.8.0\",
    \"json-schema-test\": \"^1.1.1\",
    \"karma\": \"^1.0.0\",
    \"karma-chrome-launcher\": \"^2.0.0\",
    \"karma-mocha\": \"^1.1.1\",
    \"karma-phantomjs-launcher\": \"^1.0.0\",
    \"karma-sauce-launcher\": \"^1.1.0\",
    \"mocha\": \"^3.0.0\",
    \"nodent\": \"^3.0.17\",
    \"nyc\": \"^10.0.0\",
    \"phantomjs-prebuilt\": \"^2.1.4\",
    \"pre-commit\": \"^1.1.1\",
    \"regenerator\": \"0.9.7\",
    \"require-globify\": \"^1.3.0\",
    \"typescript\": \"^2.0.3\",
    \"uglify-js\": \"^2.6.1\",
    \"watch\": \"^1.0.0\"
  }
}
";
        
        $__internal_afb9946a640b17dcc86f0f6de9d257ae6c9b3b2f5a0146c58ec9db80b0c14fd2->leave($__internal_afb9946a640b17dcc86f0f6de9d257ae6c9b3b2f5a0146c58ec9db80b0c14fd2_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/har-validator/node_modules/ajv/package.json";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{
  \"name\": \"ajv\",
  \"version\": \"4.11.8\",
  \"description\": \"Another JSON Schema Validator\",
  \"main\": \"lib/ajv.js\",
  \"webpack\": \"dist/ajv.bundle.js\",
  \"typings\": \"lib/ajv.d.ts\",
  \"files\": [
    \"lib/\",
    \"dist/\",
    \"scripts/\",
    \"LICENSE\",
    \".tonic_example.js\"
  ],
  \"publishConfig\": {
    \"tag\": \"4.x\"
  },
  \"scripts\": {
    \"jshint\": \"jshint lib/*.js lib/**/*.js --exclude lib/dotjs/**/*\",
    \"eslint\": \"if-node-version \\\">=4\\\" eslint lib/*.js lib/compile/*.js spec scripts\",
    \"test-spec\": \"mocha spec/*.spec.js -R spec\",
    \"test-fast\": \"AJV_FAST_TEST=true npm run test-spec\",
    \"test-debug\": \"mocha spec/*.spec.js --debug-brk -R spec\",
    \"test-cov\": \"nyc npm run test-spec\",
    \"test-ts\": \"tsc --target ES5 --noImplicitAny lib/ajv.d.ts\",
    \"bundle\": \"node ./scripts/bundle.js . Ajv pure_getters\",
    \"bundle-regenerator\": \"node ./scripts/bundle.js regenerator\",
    \"bundle-nodent\": \"node ./scripts/bundle.js nodent\",
    \"bundle-all\": \"del-cli dist && npm run bundle && npm run bundle-regenerator && npm run bundle-nodent\",
    \"bundle-beautify\": \"node ./scripts/bundle.js js-beautify\",
    \"build\": \"del-cli lib/dotjs/*.js && node scripts/compile-dots.js\",
    \"test-karma\": \"karma start --single-run --browsers PhantomJS\",
    \"test-browser\": \"del-cli .browser && npm run bundle-all && scripts/prepare-tests && npm run test-karma\",
    \"test\": \"npm run jshint && npm run eslint && npm run test-ts && npm run build && npm run test-cov && if-node-version 4 npm run test-browser\",
    \"prepublish\": \"npm run build && npm run bundle-all\",
    \"watch\": \"watch 'npm run build' ./lib/dot\"
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
  },
  \"repository\": {
    \"type\": \"git\",
    \"url\": \"https://github.com/epoberezkin/ajv.git\"
  },
  \"keywords\": [
    \"JSON\",
    \"schema\",
    \"validator\",
    \"validation\",
    \"jsonschema\",
    \"json-schema\",
    \"json-schema-validator\",
    \"json-schema-validation\"
  ],
  \"author\": \"Evgeny Poberezkin\",
  \"license\": \"MIT\",
  \"bugs\": {
    \"url\": \"https://github.com/epoberezkin/ajv/issues\"
  },
  \"homepage\": \"https://github.com/epoberezkin/ajv\",
  \"tonicExampleFilename\": \".tonic_example.js\",
  \"dependencies\": {
    \"co\": \"^4.6.0\",
    \"json-stable-stringify\": \"^1.0.1\"
  },
  \"devDependencies\": {
    \"bluebird\": \"^3.1.5\",
    \"brfs\": \"^1.4.3\",
    \"browserify\": \"^14.1.0\",
    \"chai\": \"^3.5.0\",
    \"coveralls\": \"^2.11.4\",
    \"del-cli\": \"^0.2.1\",
    \"dot\": \"^1.0.3\",
    \"eslint\": \"^3.2.2\",
    \"gh-pages-generator\": \"^0.2.0\",
    \"glob\": \"^7.0.0\",
    \"if-node-version\": \"^1.0.0\",
    \"js-beautify\": \"^1.5.6\",
    \"jshint\": \"^2.8.0\",
    \"json-schema-test\": \"^1.1.1\",
    \"karma\": \"^1.0.0\",
    \"karma-chrome-launcher\": \"^2.0.0\",
    \"karma-mocha\": \"^1.1.1\",
    \"karma-phantomjs-launcher\": \"^1.0.0\",
    \"karma-sauce-launcher\": \"^1.1.0\",
    \"mocha\": \"^3.0.0\",
    \"nodent\": \"^3.0.17\",
    \"nyc\": \"^10.0.0\",
    \"phantomjs-prebuilt\": \"^2.1.4\",
    \"pre-commit\": \"^1.1.1\",
    \"regenerator\": \"0.9.7\",
    \"require-globify\": \"^1.3.0\",
    \"typescript\": \"^2.0.3\",
    \"uglify-js\": \"^2.6.1\",
    \"watch\": \"^1.0.0\"
  }
}
", "node_modules/har-validator/node_modules/ajv/package.json", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/har-validator/node_modules/ajv/package.json");
    }
}
