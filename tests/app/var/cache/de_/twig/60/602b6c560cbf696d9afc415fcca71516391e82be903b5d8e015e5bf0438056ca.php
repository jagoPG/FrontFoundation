<?php

/* node_modules/tape/test/require.js */
class __TwigTemplate_12af92673a52be1b3b481b169dd460dc852689dffa34a623b30cda9ca0927380 extends Twig_Template
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
        $__internal_2856a071f0e1ec14e018389ddf0ea85c85276b132a3f5a9e7106493518457953 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2856a071f0e1ec14e018389ddf0ea85c85276b132a3f5a9e7106493518457953->enter($__internal_2856a071f0e1ec14e018389ddf0ea85c85276b132a3f5a9e7106493518457953_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/tape/test/require.js"));

        // line 1
        echo "var tap = require('tap');
var spawn = require('child_process').spawn;
var concat = require('concat-stream');

tap.test('requiring a single module', function (t) {
    t.plan(2);
    
    var tc = function (rows) {
        t.same(rows.toString('utf8'), [
            'TAP version 13',
            '# module-a',
            'ok 1 loaded module a',
            '# test-a',
            'ok 2 module-a loaded in same context',
            'ok 3 test ran after module-a was loaded',
            '',
            '1..3',
            '# tests 3',
            '# pass  3',
            '',
            '# ok'
        ].join('\\n') + '\\n\\n');
    };
    
    var ps = tape('-r ./require/a require/test-a.js');
    ps.stdout.pipe(concat(tc));
    ps.on('exit', function (code) {
        t.equal(code, 0);
    });
});

tap.test('requiring multiple modules', function (t) {
    t.plan(2);
    
    var tc = function (rows) {
        t.same(rows.toString('utf8'), [
            'TAP version 13',
            '# module-a',
            'ok 1 loaded module a',
            '# module-b',
            'ok 2 loaded module b',
            '# test-a',
            'ok 3 module-a loaded in same context',
            'ok 4 test ran after module-a was loaded',
            '# test-b',
            'ok 5 module-b loaded in same context',
            'ok 6 test ran after module-b was loaded',
            '',
            '1..6',
            '# tests 6',
            '# pass  6',
            '',
            '# ok'
        ].join('\\n') + '\\n\\n');
    };
    
    var ps = tape('-r ./require/a -r ./require/b require/test-a.js require/test-b.js');
    ps.stdout.pipe(concat(tc));
    ps.on('exit', function (code) {
        t.equal(code, 0);
    });
});

function tape(args) {
  var proc = require('child_process')
  var bin = __dirname + '/../bin/tape'

  return proc.spawn('node', [bin].concat(args.split(' ')), { cwd: __dirname })
}";
        
        $__internal_2856a071f0e1ec14e018389ddf0ea85c85276b132a3f5a9e7106493518457953->leave($__internal_2856a071f0e1ec14e018389ddf0ea85c85276b132a3f5a9e7106493518457953_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/tape/test/require.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("var tap = require('tap');
var spawn = require('child_process').spawn;
var concat = require('concat-stream');

tap.test('requiring a single module', function (t) {
    t.plan(2);
    
    var tc = function (rows) {
        t.same(rows.toString('utf8'), [
            'TAP version 13',
            '# module-a',
            'ok 1 loaded module a',
            '# test-a',
            'ok 2 module-a loaded in same context',
            'ok 3 test ran after module-a was loaded',
            '',
            '1..3',
            '# tests 3',
            '# pass  3',
            '',
            '# ok'
        ].join('\\n') + '\\n\\n');
    };
    
    var ps = tape('-r ./require/a require/test-a.js');
    ps.stdout.pipe(concat(tc));
    ps.on('exit', function (code) {
        t.equal(code, 0);
    });
});

tap.test('requiring multiple modules', function (t) {
    t.plan(2);
    
    var tc = function (rows) {
        t.same(rows.toString('utf8'), [
            'TAP version 13',
            '# module-a',
            'ok 1 loaded module a',
            '# module-b',
            'ok 2 loaded module b',
            '# test-a',
            'ok 3 module-a loaded in same context',
            'ok 4 test ran after module-a was loaded',
            '# test-b',
            'ok 5 module-b loaded in same context',
            'ok 6 test ran after module-b was loaded',
            '',
            '1..6',
            '# tests 6',
            '# pass  6',
            '',
            '# ok'
        ].join('\\n') + '\\n\\n');
    };
    
    var ps = tape('-r ./require/a -r ./require/b require/test-a.js require/test-b.js');
    ps.stdout.pipe(concat(tc));
    ps.on('exit', function (code) {
        t.equal(code, 0);
    });
});

function tape(args) {
  var proc = require('child_process')
  var bin = __dirname + '/../bin/tape'

  return proc.spawn('node', [bin].concat(args.split(' ')), { cwd: __dirname })
}", "node_modules/tape/test/require.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/tape/test/require.js");
    }
}
