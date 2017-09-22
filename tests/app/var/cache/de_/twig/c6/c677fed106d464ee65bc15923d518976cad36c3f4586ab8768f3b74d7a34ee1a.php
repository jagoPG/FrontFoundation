<?php

/* node_modules/tape/test/default-messages.js */
class __TwigTemplate_ada86aaa2df6dfc01ec6eab4e65c3d79e8c1e618d1afe58ef60c241e4cdbb8c8 extends Twig_Template
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
        $__internal_aebe4440528e80e83ad10c9b445c332e0700efd4cdf0dd2c96fb00196e128d36 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_aebe4440528e80e83ad10c9b445c332e0700efd4cdf0dd2c96fb00196e128d36->enter($__internal_aebe4440528e80e83ad10c9b445c332e0700efd4cdf0dd2c96fb00196e128d36_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/tape/test/default-messages.js"));

        // line 1
        echo "var tap = require('tap');
var path = require('path');
var spawn = require('child_process').spawn;
var concat = require('concat-stream');

tap.test('default messages', function (t) {
    t.plan(1);

    var ps = spawn(process.execPath, [path.join(__dirname, 'messages', 'defaults.js')]);
    
    ps.stdout.pipe(concat(function (rows) {

        t.same(rows.toString('utf8'), [
            'TAP version 13',
            '# default messages',
            'ok 1 should be truthy',
            'ok 2 should be falsy',
            'ok 3 should be equal',
            'ok 4 should not be equal',
            'ok 5 should be equivalent',
            'ok 6 should be equivalent',
            'ok 7 should be equivalent',
            '',
            '1..7',
            '# tests 7',
            '# pass  7',
            '',
            '# ok'
        ].join('\\n') + '\\n\\n');
    }));
});
";
        
        $__internal_aebe4440528e80e83ad10c9b445c332e0700efd4cdf0dd2c96fb00196e128d36->leave($__internal_aebe4440528e80e83ad10c9b445c332e0700efd4cdf0dd2c96fb00196e128d36_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/tape/test/default-messages.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("var tap = require('tap');
var path = require('path');
var spawn = require('child_process').spawn;
var concat = require('concat-stream');

tap.test('default messages', function (t) {
    t.plan(1);

    var ps = spawn(process.execPath, [path.join(__dirname, 'messages', 'defaults.js')]);
    
    ps.stdout.pipe(concat(function (rows) {

        t.same(rows.toString('utf8'), [
            'TAP version 13',
            '# default messages',
            'ok 1 should be truthy',
            'ok 2 should be falsy',
            'ok 3 should be equal',
            'ok 4 should not be equal',
            'ok 5 should be equivalent',
            'ok 6 should be equivalent',
            'ok 7 should be equivalent',
            '',
            '1..7',
            '# tests 7',
            '# pass  7',
            '',
            '# ok'
        ].join('\\n') + '\\n\\n');
    }));
});
", "node_modules/tape/test/default-messages.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/tape/test/default-messages.js");
    }
}
