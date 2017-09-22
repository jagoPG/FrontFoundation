<?php

/* node_modules/object-inspect/test/err.js */
class __TwigTemplate_fc97b0e87b9ce91e2e76e383bf30aac0855fdf2a713ac660675f30b4cdc6169a extends Twig_Template
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
        $__internal_001b0c2bf6a16146de6bb24d845368957d63b9671f31a22566f478fd6628d589 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_001b0c2bf6a16146de6bb24d845368957d63b9671f31a22566f478fd6628d589->enter($__internal_001b0c2bf6a16146de6bb24d845368957d63b9671f31a22566f478fd6628d589_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/object-inspect/test/err.js"));

        // line 1
        echo "var inspect = require('../');
var test = require('tape');

test('type error', function (t) {
    t.plan(1);
    var aerr = new TypeError;
    aerr.foo = 555;
    aerr.bar = [1,2,3];
    
    var berr = new TypeError('tuv');
    berr.baz = 555;
    
    var cerr = new SyntaxError;
    cerr.message = 'whoa';
    cerr['a-b'] = 5;
    
    var obj = [
        new TypeError,
        new TypeError('xxx'),
        aerr, berr, cerr
    ];
    t.equal(inspect(obj), '[ ' + [
        '[TypeError]',
        '[TypeError: xxx]',
        '{ [TypeError] foo: 555, bar: [ 1, 2, 3 ] }',
        '{ [TypeError: tuv] baz: 555 }',
        '{ [SyntaxError: whoa] message: \\'whoa\\', \\'a-b\\': 5 }'
    ].join(', ') + ' ]');
});
";
        
        $__internal_001b0c2bf6a16146de6bb24d845368957d63b9671f31a22566f478fd6628d589->leave($__internal_001b0c2bf6a16146de6bb24d845368957d63b9671f31a22566f478fd6628d589_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/object-inspect/test/err.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("var inspect = require('../');
var test = require('tape');

test('type error', function (t) {
    t.plan(1);
    var aerr = new TypeError;
    aerr.foo = 555;
    aerr.bar = [1,2,3];
    
    var berr = new TypeError('tuv');
    berr.baz = 555;
    
    var cerr = new SyntaxError;
    cerr.message = 'whoa';
    cerr['a-b'] = 5;
    
    var obj = [
        new TypeError,
        new TypeError('xxx'),
        aerr, berr, cerr
    ];
    t.equal(inspect(obj), '[ ' + [
        '[TypeError]',
        '[TypeError: xxx]',
        '{ [TypeError] foo: 555, bar: [ 1, 2, 3 ] }',
        '{ [TypeError: tuv] baz: 555 }',
        '{ [SyntaxError: whoa] message: \\'whoa\\', \\'a-b\\': 5 }'
    ].join(', ') + ' ]');
});
", "node_modules/object-inspect/test/err.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/object-inspect/test/err.js");
    }
}
