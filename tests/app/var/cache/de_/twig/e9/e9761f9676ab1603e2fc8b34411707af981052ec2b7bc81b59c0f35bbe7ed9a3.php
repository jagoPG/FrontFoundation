<?php

/* node_modules/ajv/package.json */
class __TwigTemplate_ed66f553e565271d37b750f584e44461018c7fbd586ac91e3b047a21298db90d extends Twig_Template
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
        $__internal_99e012a49fe2da20f08f8ff298ab2b9643e8407678899c9847b63e534a756e6c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_99e012a49fe2da20f08f8ff298ab2b9643e8407678899c9847b63e534a756e6c->enter($__internal_99e012a49fe2da20f08f8ff298ab2b9643e8407678899c9847b63e534a756e6c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/ajv/package.json"));

        // line 1
        echo "{
  \"name\": \"ajv\",
  \"version\": \"5.2.2\",
  \"description\": \"Another JSON Schema Validator\",
  \"main\": \"lib/ajv.js\",
  \"typings\": \"lib/ajv.d.ts\",
  \"files\": [
    \"lib/\",
    \"dist/\",
    \"scripts/\",
    \"LICENSE\",
    \".tonic_example.js\"
  ],
  \"scripts\": {
    \"eslint\": \"if-node-version \\\">=4\\\" eslint lib/*.js lib/compile/*.js spec scripts\",
    \"jshint\": \"jshint lib/*.js lib/**/*.js --exclude lib/dotjs/**/*\",
    \"test-spec\": \"mocha spec/*.spec.js -R spec \$(if-node-version 7 echo --harmony-async-await)\",
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
    \"fast-deep-equal\": \"^1.0.0\",
    \"json-schema-traverse\": \"^0.3.0\",
    \"json-stable-stringify\": \"^1.0.1\"
  },
  \"devDependencies\": {
    \"ajv-async\": \"^0.1.0\",
    \"bluebird\": \"^3.1.5\",
    \"brfs\": \"^1.4.3\",
    \"browserify\": \"^14.1.0\",
    \"chai\": \"^4.0.1\",
    \"coveralls\": \"^2.11.4\",
    \"del-cli\": \"^1.1.0\",
    \"dot\": \"^1.0.3\",
    \"eslint\": \"^4.1.0\",
    \"gh-pages-generator\": \"^0.2.0\",
    \"glob\": \"^7.0.0\",
    \"if-node-version\": \"^1.0.0\",
    \"js-beautify\": \"^1.5.6\",
    \"jshint\": \"^2.9.4\",
    \"json-schema-test\": \"^1.3.0\",
    \"karma\": \"^1.0.0\",
    \"karma-chrome-launcher\": \"^2.0.0\",
    \"karma-mocha\": \"^1.1.1\",
    \"karma-phantomjs-launcher\": \"^1.0.0\",
    \"karma-sauce-launcher\": \"^1.1.0\",
    \"mocha\": \"^3.0.0\",
    \"nodent\": \"^3.0.17\",
    \"nyc\": \"^11.0.2\",
    \"phantomjs-prebuilt\": \"^2.1.4\",
    \"pre-commit\": \"^1.1.1\",
    \"regenerator\": \"0.9.7\",
    \"require-globify\": \"^1.3.0\",
    \"typescript\": \"^2.0.3\",
    \"uglify-js\": \"^3.0.8\",
    \"watch\": \"^1.0.0\"
  }
}
";
        
        $__internal_99e012a49fe2da20f08f8ff298ab2b9643e8407678899c9847b63e534a756e6c->leave($__internal_99e012a49fe2da20f08f8ff298ab2b9643e8407678899c9847b63e534a756e6c_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/ajv/package.json";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{
  \"name\": \"ajv\",
  \"version\": \"5.2.2\",
  \"description\": \"Another JSON Schema Validator\",
  \"main\": \"lib/ajv.js\",
  \"typings\": \"lib/ajv.d.ts\",
  \"files\": [
    \"lib/\",
    \"dist/\",
    \"scripts/\",
    \"LICENSE\",
    \".tonic_example.js\"
  ],
  \"scripts\": {
    \"eslint\": \"if-node-version \\\">=4\\\" eslint lib/*.js lib/compile/*.js spec scripts\",
    \"jshint\": \"jshint lib/*.js lib/**/*.js --exclude lib/dotjs/**/*\",
    \"test-spec\": \"mocha spec/*.spec.js -R spec \$(if-node-version 7 echo --harmony-async-await)\",
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
    \"fast-deep-equal\": \"^1.0.0\",
    \"json-schema-traverse\": \"^0.3.0\",
    \"json-stable-stringify\": \"^1.0.1\"
  },
  \"devDependencies\": {
    \"ajv-async\": \"^0.1.0\",
    \"bluebird\": \"^3.1.5\",
    \"brfs\": \"^1.4.3\",
    \"browserify\": \"^14.1.0\",
    \"chai\": \"^4.0.1\",
    \"coveralls\": \"^2.11.4\",
    \"del-cli\": \"^1.1.0\",
    \"dot\": \"^1.0.3\",
    \"eslint\": \"^4.1.0\",
    \"gh-pages-generator\": \"^0.2.0\",
    \"glob\": \"^7.0.0\",
    \"if-node-version\": \"^1.0.0\",
    \"js-beautify\": \"^1.5.6\",
    \"jshint\": \"^2.9.4\",
    \"json-schema-test\": \"^1.3.0\",
    \"karma\": \"^1.0.0\",
    \"karma-chrome-launcher\": \"^2.0.0\",
    \"karma-mocha\": \"^1.1.1\",
    \"karma-phantomjs-launcher\": \"^1.0.0\",
    \"karma-sauce-launcher\": \"^1.1.0\",
    \"mocha\": \"^3.0.0\",
    \"nodent\": \"^3.0.17\",
    \"nyc\": \"^11.0.2\",
    \"phantomjs-prebuilt\": \"^2.1.4\",
    \"pre-commit\": \"^1.1.1\",
    \"regenerator\": \"0.9.7\",
    \"require-globify\": \"^1.3.0\",
    \"typescript\": \"^2.0.3\",
    \"uglify-js\": \"^3.0.8\",
    \"watch\": \"^1.0.0\"
  }
}
", "node_modules/ajv/package.json", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/ajv/package.json");
    }
}
