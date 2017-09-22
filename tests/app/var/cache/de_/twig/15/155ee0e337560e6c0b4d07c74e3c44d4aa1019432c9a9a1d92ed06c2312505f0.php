<?php

/* node_modules/minimist/test/kv_short.js */
class __TwigTemplate_b688ddd0f3f00b9e19bf51adcc2b678ab43f640b6d5666e4b36287f103840f25 extends Twig_Template
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
        $__internal_cb6882e2cf8579f7d5fa4e85bf1c9d082fde35d4a8c80ef7187c470803382818 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cb6882e2cf8579f7d5fa4e85bf1c9d082fde35d4a8c80ef7187c470803382818->enter($__internal_cb6882e2cf8579f7d5fa4e85bf1c9d082fde35d4a8c80ef7187c470803382818_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/minimist/test/kv_short.js"));

        // line 1
        echo "var parse = require('../');
var test = require('tape');

test('short -k=v' , function (t) {
    t.plan(1);
    
    var argv = parse([ '-b=123' ]);
    t.deepEqual(argv, { b: 123, _: [] });
});

test('multi short -k=v' , function (t) {
    t.plan(1);
    
    var argv = parse([ '-a=whatever', '-b=robots' ]);
    t.deepEqual(argv, { a: 'whatever', b: 'robots', _: [] });
});
";
        
        $__internal_cb6882e2cf8579f7d5fa4e85bf1c9d082fde35d4a8c80ef7187c470803382818->leave($__internal_cb6882e2cf8579f7d5fa4e85bf1c9d082fde35d4a8c80ef7187c470803382818_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/minimist/test/kv_short.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("var parse = require('../');
var test = require('tape');

test('short -k=v' , function (t) {
    t.plan(1);
    
    var argv = parse([ '-b=123' ]);
    t.deepEqual(argv, { b: 123, _: [] });
});

test('multi short -k=v' , function (t) {
    t.plan(1);
    
    var argv = parse([ '-a=whatever', '-b=robots' ]);
    t.deepEqual(argv, { a: 'whatever', b: 'robots', _: [] });
});
", "node_modules/minimist/test/kv_short.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/minimist/test/kv_short.js");
    }
}
