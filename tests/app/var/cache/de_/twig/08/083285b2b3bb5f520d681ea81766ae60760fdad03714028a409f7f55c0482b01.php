<?php

/* node_modules/es-to-primitive/test/index.js */
class __TwigTemplate_259b8b08eddee5021105641abf9e7b00ef94f5b5bd9285d2c19594a6b424fe9b extends Twig_Template
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
        $__internal_c2810466d94828e60f8b737d9f80a7d396a75e5fa426a5022b4f94d19c53e535 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c2810466d94828e60f8b737d9f80a7d396a75e5fa426a5022b4f94d19c53e535->enter($__internal_c2810466d94828e60f8b737d9f80a7d396a75e5fa426a5022b4f94d19c53e535_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/es-to-primitive/test/index.js"));

        // line 1
        echo "'use strict';

var toPrimitive = require('../');
var ES5 = require('../es5');
var ES6 = require('../es6');

var test = require('tape');

test('default export', function (t) {
\tt.equal(toPrimitive, ES6, 'default export is ES6');
\tt.equal(toPrimitive.ES5, ES5, 'ES5 property has ES5 method');
\tt.equal(toPrimitive.ES6, ES6, 'ES6 property has ES6 method');
\tt.end();
});

require('./es5');
require('./es6');
";
        
        $__internal_c2810466d94828e60f8b737d9f80a7d396a75e5fa426a5022b4f94d19c53e535->leave($__internal_c2810466d94828e60f8b737d9f80a7d396a75e5fa426a5022b4f94d19c53e535_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/es-to-primitive/test/index.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("'use strict';

var toPrimitive = require('../');
var ES5 = require('../es5');
var ES6 = require('../es6');

var test = require('tape');

test('default export', function (t) {
\tt.equal(toPrimitive, ES6, 'default export is ES6');
\tt.equal(toPrimitive.ES5, ES5, 'ES5 property has ES5 method');
\tt.equal(toPrimitive.ES6, ES6, 'ES6 property has ES6 method');
\tt.end();
});

require('./es5');
require('./es6');
", "node_modules/es-to-primitive/test/index.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/es-to-primitive/test/index.js");
    }
}
