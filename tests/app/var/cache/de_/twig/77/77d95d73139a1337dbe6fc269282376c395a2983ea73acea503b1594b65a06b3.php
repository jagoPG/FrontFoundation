<?php

/* node_modules/es-abstract/test/es6.js */
class __TwigTemplate_665b418b85d071015c07f8caa5786b207bc124be28de29e3e7273e0b1826d1df extends Twig_Template
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
        $__internal_3dbe7b6ad76faf745c8e1fdfc602944741bf426873cb2385346342c86b799929 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3dbe7b6ad76faf745c8e1fdfc602944741bf426873cb2385346342c86b799929->enter($__internal_3dbe7b6ad76faf745c8e1fdfc602944741bf426873cb2385346342c86b799929_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/es-abstract/test/es6.js"));

        // line 1
        echo "'use strict';

var test = require('tape');

var ES = require('../');
var ES6 = ES.ES6;
var ES2015 = ES.ES2015;
var ES6entry = require('../es6');

test('legacy es6 export', function (t) {
\tt.equal(ES6, ES2015, 'main ES6 === main ES2015');
\tt.end();
});

test('legacy es6 entry point', function (t) {
\tt.equal(ES6, ES6entry, 'main ES6 === ES6 entry point');
\tt.end();
});
";
        
        $__internal_3dbe7b6ad76faf745c8e1fdfc602944741bf426873cb2385346342c86b799929->leave($__internal_3dbe7b6ad76faf745c8e1fdfc602944741bf426873cb2385346342c86b799929_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/es-abstract/test/es6.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("'use strict';

var test = require('tape');

var ES = require('../');
var ES6 = ES.ES6;
var ES2015 = ES.ES2015;
var ES6entry = require('../es6');

test('legacy es6 export', function (t) {
\tt.equal(ES6, ES2015, 'main ES6 === main ES2015');
\tt.end();
});

test('legacy es6 entry point', function (t) {
\tt.equal(ES6, ES6entry, 'main ES6 === ES6 entry point');
\tt.end();
});
", "node_modules/es-abstract/test/es6.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/es-abstract/test/es6.js");
    }
}
