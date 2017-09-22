<?php

/* node_modules/es-abstract/test/index.js */
class __TwigTemplate_c59e341ad8ddd87368388aa2dde297e1693eb479d163ff02ca6ed5205a4591f2 extends Twig_Template
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
        $__internal_bf5fdf8c2ec15e39e521cbfd70db4f8fb8dee73cada1af997261639158f3e5cf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bf5fdf8c2ec15e39e521cbfd70db4f8fb8dee73cada1af997261639158f3e5cf->enter($__internal_bf5fdf8c2ec15e39e521cbfd70db4f8fb8dee73cada1af997261639158f3e5cf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/es-abstract/test/index.js"));

        // line 1
        echo "'use strict';

var ES = require('../');
var test = require('tape');

var ESkeys = Object.keys(ES).sort();
var ES6keys = Object.keys(ES.ES6).sort();

test('exposed properties', function (t) {
\tt.deepEqual(ESkeys, ES6keys.concat(['ES2017', 'ES7', 'ES2016', 'ES6', 'ES2015', 'ES5']).sort(), 'main ES object keys match ES6 keys');
\tt.end();
});

test('methods match', function (t) {
\tES6keys.forEach(function (key) {
\t\tt.equal(ES.ES6[key], ES[key], 'method ' + key + ' on main ES object is ES6 method');
\t});
\tt.end();
});

require('./es5');
require('./es6');
require('./es2015');
require('./es7');
require('./es2016');
require('./es2017');
";
        
        $__internal_bf5fdf8c2ec15e39e521cbfd70db4f8fb8dee73cada1af997261639158f3e5cf->leave($__internal_bf5fdf8c2ec15e39e521cbfd70db4f8fb8dee73cada1af997261639158f3e5cf_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/es-abstract/test/index.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("'use strict';

var ES = require('../');
var test = require('tape');

var ESkeys = Object.keys(ES).sort();
var ES6keys = Object.keys(ES.ES6).sort();

test('exposed properties', function (t) {
\tt.deepEqual(ESkeys, ES6keys.concat(['ES2017', 'ES7', 'ES2016', 'ES6', 'ES2015', 'ES5']).sort(), 'main ES object keys match ES6 keys');
\tt.end();
});

test('methods match', function (t) {
\tES6keys.forEach(function (key) {
\t\tt.equal(ES.ES6[key], ES[key], 'method ' + key + ' on main ES object is ES6 method');
\t});
\tt.end();
});

require('./es5');
require('./es6');
require('./es2015');
require('./es7');
require('./es2016');
require('./es2017');
", "node_modules/es-abstract/test/index.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/es-abstract/test/index.js");
    }
}
