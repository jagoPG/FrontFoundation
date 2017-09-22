<?php

/* node_modules/is-date-object/test.js */
class __TwigTemplate_f081899d9d376058518d3c93afe8b7e87cf59c004166f8eca4a2f9ba9f5a5681 extends Twig_Template
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
        $__internal_170de5872386893b3303a61016a18e7930f1519bbb177306c97a1421d6624b5f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_170de5872386893b3303a61016a18e7930f1519bbb177306c97a1421d6624b5f->enter($__internal_170de5872386893b3303a61016a18e7930f1519bbb177306c97a1421d6624b5f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/is-date-object/test.js"));

        // line 1
        echo "'use strict';

var test = require('tape');
var isDate = require('./');
var hasSymbols = typeof Symbol === 'function' && typeof Symbol() === 'symbol';

test('not Dates', function (t) {
\tt.notOk(isDate(), 'undefined is not Date');
\tt.notOk(isDate(null), 'null is not Date');
\tt.notOk(isDate(false), 'false is not Date');
\tt.notOk(isDate(true), 'true is not Date');
\tt.notOk(isDate(42), 'number is not Date');
\tt.notOk(isDate('foo'), 'string is not Date');
\tt.notOk(isDate([]), 'array is not Date');
\tt.notOk(isDate({}), 'object is not Date');
\tt.notOk(isDate(function () {}), 'function is not Date');
\tt.notOk(isDate(/a/g), 'regex literal is not Date');
\tt.notOk(isDate(new RegExp('a', 'g')), 'regex object is not Date');
\tt.end();
});

test('@@toStringTag', { skip: !hasSymbols || !Symbol.toStringTag }, function (t) {
\tvar realDate = new Date();
\tvar fakeDate = { toString: function () { return String(realDate); }, valueOf: function () { return realDate.getTime(); } };
\tfakeDate[Symbol.toStringTag] = 'Date';
\tt.notOk(isDate(fakeDate), 'fake Date with @@toStringTag \"Date\" is not Date');
\tt.end();
});

test('Dates', function (t) {
\tt.ok(isDate(new Date()), 'new Date() is Date');
\tt.end();
});
";
        
        $__internal_170de5872386893b3303a61016a18e7930f1519bbb177306c97a1421d6624b5f->leave($__internal_170de5872386893b3303a61016a18e7930f1519bbb177306c97a1421d6624b5f_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/is-date-object/test.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("'use strict';

var test = require('tape');
var isDate = require('./');
var hasSymbols = typeof Symbol === 'function' && typeof Symbol() === 'symbol';

test('not Dates', function (t) {
\tt.notOk(isDate(), 'undefined is not Date');
\tt.notOk(isDate(null), 'null is not Date');
\tt.notOk(isDate(false), 'false is not Date');
\tt.notOk(isDate(true), 'true is not Date');
\tt.notOk(isDate(42), 'number is not Date');
\tt.notOk(isDate('foo'), 'string is not Date');
\tt.notOk(isDate([]), 'array is not Date');
\tt.notOk(isDate({}), 'object is not Date');
\tt.notOk(isDate(function () {}), 'function is not Date');
\tt.notOk(isDate(/a/g), 'regex literal is not Date');
\tt.notOk(isDate(new RegExp('a', 'g')), 'regex object is not Date');
\tt.end();
});

test('@@toStringTag', { skip: !hasSymbols || !Symbol.toStringTag }, function (t) {
\tvar realDate = new Date();
\tvar fakeDate = { toString: function () { return String(realDate); }, valueOf: function () { return realDate.getTime(); } };
\tfakeDate[Symbol.toStringTag] = 'Date';
\tt.notOk(isDate(fakeDate), 'fake Date with @@toStringTag \"Date\" is not Date');
\tt.end();
});

test('Dates', function (t) {
\tt.ok(isDate(new Date()), 'new Date() is Date');
\tt.end();
});
", "node_modules/is-date-object/test.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/is-date-object/test.js");
    }
}
