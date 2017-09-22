<?php

/* node_modules/isarray/test.js */
class __TwigTemplate_fb2735b0d89396866b8272162daacd93f6aa9700a9aff653583a653d600fc34b extends Twig_Template
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
        $__internal_26ba3112d949bd9c5161ac9078b0131eaaff643b748961ec1710529f328ee394 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_26ba3112d949bd9c5161ac9078b0131eaaff643b748961ec1710529f328ee394->enter($__internal_26ba3112d949bd9c5161ac9078b0131eaaff643b748961ec1710529f328ee394_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/isarray/test.js"));

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
        
        $__internal_26ba3112d949bd9c5161ac9078b0131eaaff643b748961ec1710529f328ee394->leave($__internal_26ba3112d949bd9c5161ac9078b0131eaaff643b748961ec1710529f328ee394_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/isarray/test.js";
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

", "node_modules/isarray/test.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/isarray/test.js");
    }
}
