<?php

/* node_modules/es-abstract/test/es7.js */
class __TwigTemplate_998c5362468b694a5ed41cf0b1e83ad90752ef6189f5eb279cfe266f0c0c87a2 extends Twig_Template
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
        $__internal_3eaa0fa5220c3ed0532f1f0099d737b312e8a0a3841419940e5bdefac0fefb5d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3eaa0fa5220c3ed0532f1f0099d737b312e8a0a3841419940e5bdefac0fefb5d->enter($__internal_3eaa0fa5220c3ed0532f1f0099d737b312e8a0a3841419940e5bdefac0fefb5d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/es-abstract/test/es7.js"));

        // line 1
        echo "'use strict';

var test = require('tape');

var ES = require('../');
var ES7 = ES.ES7;
var ES2016 = ES.ES2016;
var ES7entry = require('../es7');

test('legacy es7 export', function (t) {
\tt.equal(ES7, ES2016, 'main ES7 === main ES2016');
\tt.end();
});

test('legacy es7 entry point', function (t) {
\tt.equal(ES7, ES7entry, 'main ES7 === ES7 entry point');
\tt.end();
});
";
        
        $__internal_3eaa0fa5220c3ed0532f1f0099d737b312e8a0a3841419940e5bdefac0fefb5d->leave($__internal_3eaa0fa5220c3ed0532f1f0099d737b312e8a0a3841419940e5bdefac0fefb5d_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/es-abstract/test/es7.js";
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
var ES7 = ES.ES7;
var ES2016 = ES.ES2016;
var ES7entry = require('../es7');

test('legacy es7 export', function (t) {
\tt.equal(ES7, ES2016, 'main ES7 === main ES2016');
\tt.end();
});

test('legacy es7 entry point', function (t) {
\tt.equal(ES7, ES7entry, 'main ES7 === ES7 entry point');
\tt.end();
});
", "node_modules/es-abstract/test/es7.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/es-abstract/test/es7.js");
    }
}
