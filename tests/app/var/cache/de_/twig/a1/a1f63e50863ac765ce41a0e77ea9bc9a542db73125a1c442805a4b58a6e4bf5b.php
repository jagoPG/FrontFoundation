<?php

/* node_modules/fsevents/node_modules/rc/node_modules/minimist/test/parse_modified.js */
class __TwigTemplate_b551ca78c30a1464cfbbdd822183109dfa93d6205507392c84c14869fe799bd9 extends Twig_Template
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
        $__internal_c91e8b3b3fcd9a9cf0b803c453d00c5a2ad9ea282d02c4c851f995f0d7c4eb27 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c91e8b3b3fcd9a9cf0b803c453d00c5a2ad9ea282d02c4c851f995f0d7c4eb27->enter($__internal_c91e8b3b3fcd9a9cf0b803c453d00c5a2ad9ea282d02c4c851f995f0d7c4eb27_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/fsevents/node_modules/rc/node_modules/minimist/test/parse_modified.js"));

        // line 1
        echo "var parse = require('../');
var test = require('tape');

test('parse with modifier functions' , function (t) {
    t.plan(1);
    
    var argv = parse([ '-b', '123' ], { boolean: 'b' });
    t.deepEqual(argv, { b: true, _: [123] });
});
";
        
        $__internal_c91e8b3b3fcd9a9cf0b803c453d00c5a2ad9ea282d02c4c851f995f0d7c4eb27->leave($__internal_c91e8b3b3fcd9a9cf0b803c453d00c5a2ad9ea282d02c4c851f995f0d7c4eb27_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/fsevents/node_modules/rc/node_modules/minimist/test/parse_modified.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("var parse = require('../');
var test = require('tape');

test('parse with modifier functions' , function (t) {
    t.plan(1);
    
    var argv = parse([ '-b', '123' ], { boolean: 'b' });
    t.deepEqual(argv, { b: true, _: [123] });
});
", "node_modules/fsevents/node_modules/rc/node_modules/minimist/test/parse_modified.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/fsevents/node_modules/rc/node_modules/minimist/test/parse_modified.js");
    }
}
