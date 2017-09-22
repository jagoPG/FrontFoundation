<?php

/* node_modules/events/tests/common.js */
class __TwigTemplate_0561cc5fff1bc7ef14dee0f7f2b31c52634d4240ba033215661ee19c834c13bc extends Twig_Template
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
        $__internal_e6e2c40f01251f5c150b025fa3f66b5ec6e6a86a1d51afa189aacb63d5c94f3a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e6e2c40f01251f5c150b025fa3f66b5ec6e6a86a1d51afa189aacb63d5c94f3a->enter($__internal_e6e2c40f01251f5c150b025fa3f66b5ec6e6a86a1d51afa189aacb63d5c94f3a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/events/tests/common.js"));

        // line 1
        echo "var assert = require('assert');

var mustCallChecks = [];

function runCallChecks() {
  var failed_count = 0;
  for (var i=0 ; i< mustCallChecks.length; ++i) {
    var context = mustCallChecks[i];
    if (context.actual === context.expected) {
      continue;
    }

    failed_count++;
    console.log('Mismatched %s function calls. Expected %d, actual %d.',
                context.name,
                context.expected,
                context.actual);
    console.log(context.stack.split('\\n').slice(2).join('\\n'));
  }

  assert(failed_count === 0);
}

after(runCallChecks);

exports.mustCall = function(fn, expected) {
  if (typeof expected !== 'number') expected = 1;

  var context = {
    expected: expected,
    actual: 0,
    stack: (new Error).stack,
    name: fn.name || '<anonymous>'
  };

  mustCallChecks.push(context);

  return function() {
    context.actual++;
    return fn.apply(this, arguments);
  };
};
";
        
        $__internal_e6e2c40f01251f5c150b025fa3f66b5ec6e6a86a1d51afa189aacb63d5c94f3a->leave($__internal_e6e2c40f01251f5c150b025fa3f66b5ec6e6a86a1d51afa189aacb63d5c94f3a_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/events/tests/common.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("var assert = require('assert');

var mustCallChecks = [];

function runCallChecks() {
  var failed_count = 0;
  for (var i=0 ; i< mustCallChecks.length; ++i) {
    var context = mustCallChecks[i];
    if (context.actual === context.expected) {
      continue;
    }

    failed_count++;
    console.log('Mismatched %s function calls. Expected %d, actual %d.',
                context.name,
                context.expected,
                context.actual);
    console.log(context.stack.split('\\n').slice(2).join('\\n'));
  }

  assert(failed_count === 0);
}

after(runCallChecks);

exports.mustCall = function(fn, expected) {
  if (typeof expected !== 'number') expected = 1;

  var context = {
    expected: expected,
    actual: 0,
    stack: (new Error).stack,
    name: fn.name || '<anonymous>'
  };

  mustCallChecks.push(context);

  return function() {
    context.actual++;
    return fn.apply(this, arguments);
  };
};
", "node_modules/events/tests/common.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/events/tests/common.js");
    }
}
