<?php

/* node_modules/core-js/package.json */
class __TwigTemplate_e94996f3e72e89ef6606e6cc7e9b7b2dc658121ceb336c10d98830bff477ce5d extends Twig_Template
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
        $__internal_60452f9bea8ce497d2d4aba89159568e45f175d5841197a7046d87f0c9722ca7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_60452f9bea8ce497d2d4aba89159568e45f175d5841197a7046d87f0c9722ca7->enter($__internal_60452f9bea8ce497d2d4aba89159568e45f175d5841197a7046d87f0c9722ca7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/core-js/package.json"));

        // line 1
        echo "{
  \"name\": \"core-js\",
  \"description\": \"Standard library\",
  \"version\": \"2.5.1\",
  \"repository\": {
    \"type\": \"git\",
    \"url\": \"https://github.com/zloirock/core-js.git\"
  },
  \"main\": \"index.js\",
  \"devDependencies\": {
    \"webpack\": \"3.5.x\",
    \"LiveScript\": \"1.3.x\",
    \"grunt\": \"1.0.x\",
    \"grunt-cli\": \"1.2.x\",
    \"grunt-livescript\": \"0.6.x\",
    \"grunt-contrib-uglify\": \"3.0.x\",
    \"grunt-contrib-watch\": \"1.0.x\",
    \"grunt-contrib-clean\": \"1.1.x\",
    \"grunt-contrib-copy\": \"1.0.x\",
    \"grunt-karma\": \"2.0.x\",
    \"karma\": \"1.7.x\",
    \"karma-qunit\": \"1.2.x\",
    \"karma-chrome-launcher\": \"2.2.x\",
    \"karma-ie-launcher\": \"1.0.x\",
    \"karma-firefox-launcher\": \"1.0.x\",
    \"karma-phantomjs-launcher\": \"1.0.x\",
    \"qunitjs\": \"2.4.x\",
    \"phantomjs-prebuilt\": \"2.1.x\",
    \"promises-aplus-tests\": \"2.1.x\",
    \"es-observable-tests\": \"0.2.x\",
    \"eslint\": \"4.5.x\",
    \"eslint-plugin-import\": \"2.7.x\",
    \"temp\": \"0.8.x\"
  },
  \"scripts\": {
    \"grunt\": \"grunt\",
    \"lint\": \"eslint ./\",
    \"promises-tests\": \"promises-aplus-tests tests/promises-aplus/adapter\",
    \"observables-tests\": \"node tests/observables/adapter && node tests/observables/adapter-library\",
    \"test\": \"npm run grunt clean copy && npm run lint && npm run grunt livescript client karma:default && npm run grunt library karma:library && npm run promises-tests && npm run observables-tests && lsc tests/commonjs\"
  },
  \"license\": \"MIT\",
  \"keywords\": [
    \"ES3\",
    \"ES5\",
    \"ES6\",
    \"ES7\",
    \"ES2015\",
    \"ES2016\",
    \"ES2017\",
    \"ECMAScript 3\",
    \"ECMAScript 5\",
    \"ECMAScript 6\",
    \"ECMAScript 7\",
    \"ECMAScript 2015\",
    \"ECMAScript 2016\",
    \"ECMAScript 2017\",
    \"Harmony\",
    \"Strawman\",
    \"Map\",
    \"Set\",
    \"WeakMap\",
    \"WeakSet\",
    \"Promise\",
    \"Symbol\",
    \"TypedArray\",
    \"setImmediate\",
    \"Dict\",
    \"polyfill\",
    \"shim\"
  ]
}";
        
        $__internal_60452f9bea8ce497d2d4aba89159568e45f175d5841197a7046d87f0c9722ca7->leave($__internal_60452f9bea8ce497d2d4aba89159568e45f175d5841197a7046d87f0c9722ca7_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/core-js/package.json";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{
  \"name\": \"core-js\",
  \"description\": \"Standard library\",
  \"version\": \"2.5.1\",
  \"repository\": {
    \"type\": \"git\",
    \"url\": \"https://github.com/zloirock/core-js.git\"
  },
  \"main\": \"index.js\",
  \"devDependencies\": {
    \"webpack\": \"3.5.x\",
    \"LiveScript\": \"1.3.x\",
    \"grunt\": \"1.0.x\",
    \"grunt-cli\": \"1.2.x\",
    \"grunt-livescript\": \"0.6.x\",
    \"grunt-contrib-uglify\": \"3.0.x\",
    \"grunt-contrib-watch\": \"1.0.x\",
    \"grunt-contrib-clean\": \"1.1.x\",
    \"grunt-contrib-copy\": \"1.0.x\",
    \"grunt-karma\": \"2.0.x\",
    \"karma\": \"1.7.x\",
    \"karma-qunit\": \"1.2.x\",
    \"karma-chrome-launcher\": \"2.2.x\",
    \"karma-ie-launcher\": \"1.0.x\",
    \"karma-firefox-launcher\": \"1.0.x\",
    \"karma-phantomjs-launcher\": \"1.0.x\",
    \"qunitjs\": \"2.4.x\",
    \"phantomjs-prebuilt\": \"2.1.x\",
    \"promises-aplus-tests\": \"2.1.x\",
    \"es-observable-tests\": \"0.2.x\",
    \"eslint\": \"4.5.x\",
    \"eslint-plugin-import\": \"2.7.x\",
    \"temp\": \"0.8.x\"
  },
  \"scripts\": {
    \"grunt\": \"grunt\",
    \"lint\": \"eslint ./\",
    \"promises-tests\": \"promises-aplus-tests tests/promises-aplus/adapter\",
    \"observables-tests\": \"node tests/observables/adapter && node tests/observables/adapter-library\",
    \"test\": \"npm run grunt clean copy && npm run lint && npm run grunt livescript client karma:default && npm run grunt library karma:library && npm run promises-tests && npm run observables-tests && lsc tests/commonjs\"
  },
  \"license\": \"MIT\",
  \"keywords\": [
    \"ES3\",
    \"ES5\",
    \"ES6\",
    \"ES7\",
    \"ES2015\",
    \"ES2016\",
    \"ES2017\",
    \"ECMAScript 3\",
    \"ECMAScript 5\",
    \"ECMAScript 6\",
    \"ECMAScript 7\",
    \"ECMAScript 2015\",
    \"ECMAScript 2016\",
    \"ECMAScript 2017\",
    \"Harmony\",
    \"Strawman\",
    \"Map\",
    \"Set\",
    \"WeakMap\",
    \"WeakSet\",
    \"Promise\",
    \"Symbol\",
    \"TypedArray\",
    \"setImmediate\",
    \"Dict\",
    \"polyfill\",
    \"shim\"
  ]
}", "node_modules/core-js/package.json", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/core-js/package.json");
    }
}