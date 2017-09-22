<?php

/* node_modules/fsevents/node_modules/isarray/test.js */
class __TwigTemplate_c6a49fddcb4dd0b0e02ce72668d1bc86e1b010798d797abdb65b95a16b059dd6 extends Twig_Template
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
        $__internal_c6b0aeaa9985d380cce99b60d2bc6975bc634beb8bb6984403105667c4a16a94 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c6b0aeaa9985d380cce99b60d2bc6975bc634beb8bb6984403105667c4a16a94->enter($__internal_c6b0aeaa9985d380cce99b60d2bc6975bc634beb8bb6984403105667c4a16a94_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/fsevents/node_modules/isarray/test.js"));

        // line 1
        echo "var isArray = require('./');
var test = require('tape');

test('is array', function(t){
  t.ok(isArray([]));
  t.notOk(isArray({}));
  t.notOk(isArray(null));
  t.notOk(isArray(false));

  var obj = {};
  obj[0] = true;
  t.notOk(isArray(obj));

  var arr = [];
  arr.foo = 'bar';
  t.ok(isArray(arr));

  t.end();
});

";
        
        $__internal_c6b0aeaa9985d380cce99b60d2bc6975bc634beb8bb6984403105667c4a16a94->leave($__internal_c6b0aeaa9985d380cce99b60d2bc6975bc634beb8bb6984403105667c4a16a94_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/fsevents/node_modules/isarray/test.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("var isArray = require('./');
var test = require('tape');

test('is array', function(t){
  t.ok(isArray([]));
  t.notOk(isArray({}));
  t.notOk(isArray(null));
  t.notOk(isArray(false));

  var obj = {};
  obj[0] = true;
  t.notOk(isArray(obj));

  var arr = [];
  arr.foo = 'bar';
  t.ok(isArray(arr));

  t.end();
});

", "node_modules/fsevents/node_modules/isarray/test.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/fsevents/node_modules/isarray/test.js");
    }
}
