<?php

/* node_modules/object-inspect/test/fn.js */
class __TwigTemplate_2e8c62135127ada0d66e755f7993962fbac72fed05bdc370c9a1fd5c1ee89e90 extends Twig_Template
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
        $__internal_b88b367b38b6bae3364e8981634b3412bd5a1ec51ff47930eafac1e31a9b254e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b88b367b38b6bae3364e8981634b3412bd5a1ec51ff47930eafac1e31a9b254e->enter($__internal_b88b367b38b6bae3364e8981634b3412bd5a1ec51ff47930eafac1e31a9b254e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/object-inspect/test/fn.js"));

        // line 1
        echo "var inspect = require('../');
var test = require('tape');

test('function', function (t) {
    t.plan(1);
    var obj = [ 1, 2, function f (n) {}, 4 ];
    t.equal(inspect(obj), '[ 1, 2, [Function: f], 4 ]');
});

test('function name', function (t) {
    t.plan(1);
    var f = (function () {
      return function () {};
    }());
    f.toString = function () { return 'function xxx () {}' };
    var obj = [ 1, 2, f, 4 ];
    t.equal(inspect(obj), '[ 1, 2, [Function: xxx], 4 ]');
});
";
        
        $__internal_b88b367b38b6bae3364e8981634b3412bd5a1ec51ff47930eafac1e31a9b254e->leave($__internal_b88b367b38b6bae3364e8981634b3412bd5a1ec51ff47930eafac1e31a9b254e_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/object-inspect/test/fn.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("var inspect = require('../');
var test = require('tape');

test('function', function (t) {
    t.plan(1);
    var obj = [ 1, 2, function f (n) {}, 4 ];
    t.equal(inspect(obj), '[ 1, 2, [Function: f], 4 ]');
});

test('function name', function (t) {
    t.plan(1);
    var f = (function () {
      return function () {};
    }());
    f.toString = function () { return 'function xxx () {}' };
    var obj = [ 1, 2, f, 4 ];
    t.equal(inspect(obj), '[ 1, 2, [Function: xxx], 4 ]');
});
", "node_modules/object-inspect/test/fn.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/object-inspect/test/fn.js");
    }
}
