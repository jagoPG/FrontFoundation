<?php

/* node_modules/tape/test/subtest_and_async.js */
class __TwigTemplate_5df86edda1b51331d615e4e6a44a7beb4b2f741f8f6ad04275dd74ed7d64fdb3 extends Twig_Template
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
        $__internal_0a59461cebc0ccb9e66fec72f5037437dfd3648d6f24940570c372c99af2235a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0a59461cebc0ccb9e66fec72f5037437dfd3648d6f24940570c372c99af2235a->enter($__internal_0a59461cebc0ccb9e66fec72f5037437dfd3648d6f24940570c372c99af2235a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/tape/test/subtest_and_async.js"));

        // line 1
        echo "var test = require('../');

var asyncFunction = function (callback) {
  setTimeout(callback, Math.random * 50);
};

test('master test', function (t) {
  t.test('subtest 1', function (t) {
    t.pass('subtest 1 before async call');
    asyncFunction(function () {
      t.pass('subtest 1 in async callback');
      t.end();
    })
  });

  t.test('subtest 2', function (t) {
    t.pass('subtest 2 before async call');
    asyncFunction(function () {
      t.pass('subtest 2 in async callback');
      t.end();
    })
  });
});
";
        
        $__internal_0a59461cebc0ccb9e66fec72f5037437dfd3648d6f24940570c372c99af2235a->leave($__internal_0a59461cebc0ccb9e66fec72f5037437dfd3648d6f24940570c372c99af2235a_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/tape/test/subtest_and_async.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("var test = require('../');

var asyncFunction = function (callback) {
  setTimeout(callback, Math.random * 50);
};

test('master test', function (t) {
  t.test('subtest 1', function (t) {
    t.pass('subtest 1 before async call');
    asyncFunction(function () {
      t.pass('subtest 1 in async callback');
      t.end();
    })
  });

  t.test('subtest 2', function (t) {
    t.pass('subtest 2 before async call');
    asyncFunction(function () {
      t.pass('subtest 2 in async callback');
      t.end();
    })
  });
});
", "node_modules/tape/test/subtest_and_async.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/tape/test/subtest_and_async.js");
    }
}
