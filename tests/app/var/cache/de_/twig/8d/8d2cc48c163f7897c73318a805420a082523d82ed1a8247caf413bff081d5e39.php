<?php

/* node_modules/tape/test/deep-equal-failure.js */
class __TwigTemplate_2b8b1e9acc90b173932d5232b7fc2edf56d941f9ebce408e3b0198ae26d0dc8d extends Twig_Template
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
        $__internal_2b51e1ac4fffefdf95956b75e67bc4592f30bf5ce53f10e18ebb35011aaca70b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2b51e1ac4fffefdf95956b75e67bc4592f30bf5ce53f10e18ebb35011aaca70b->enter($__internal_2b51e1ac4fffefdf95956b75e67bc4592f30bf5ce53f10e18ebb35011aaca70b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/tape/test/deep-equal-failure.js"));

        // line 1
        echo "var tape = require('../');
var tap = require('tap');
var concat = require('concat-stream');
var tapParser = require('tap-parser');
var common = require('./common');

var getDiag = common.getDiag;
var stripFullStack = common.stripFullStack;

tap.test('deep equal failure', function (assert) {
    var test = tape.createHarness({ exit : false });
    var stream = test.createStream();
    var parser = tapParser();
    assert.plan(3);

    stream.pipe(parser);
    stream.pipe(concat(function (body) {
        assert.equal(
            stripFullStack(body.toString('utf8')),
            'TAP version 13\\n'
            + '# deep equal\\n'
            + 'not ok 1 should be equal\\n'
            + '  ---\\n'
            + '    operator: equal\\n'
            + '    expected: |-\\n'
            + '      { b: 2 }\\n'
            + '    actual: |-\\n'
            + '      { a: 1 }\\n'
            + '    stack: |-\\n'
            + '      Error: should be equal\\n'
            + '          [... stack stripped ...]\\n'
            + '          at Test.<anonymous> (\$TEST/deep-equal-failure.js:\$LINE:\$COL)\\n'
            + '          [... stack stripped ...]\\n'
            + '  ...\\n'
            + '\\n'
            + '1..1\\n'
            + '# tests 1\\n'
            + '# pass  0\\n'
            + '# fail  1\\n'
        );

        assert.deepEqual(getDiag(body), {
          operator: 'equal',
          expected: '{ b: 2 }',
          actual: '{ a: 1 }'
        });
    }));

    parser.once('assert', function (data) {
        delete data.diag.stack;
        assert.deepEqual(data, {
            ok: false,
            id: 1,
            name: 'should be equal',
            diag: {
              operator: 'equal',
              expected: '{ b: 2 }',
              actual: '{ a: 1 }'
            }
        });
    });

    test(\"deep equal\", function (t) {
        t.plan(1);
        t.equal({a: 1}, {b: 2});
    });
})

tap.test('deep equal failure, depth 6, with option', function (assert) {
    var test = tape.createHarness({ exit : false });
    var stream = test.createStream();
    var parser = tapParser();
    assert.plan(3);

    stream.pipe(parser);
    stream.pipe(concat(function (body) {
        assert.equal(
            stripFullStack(body.toString('utf8')),
            'TAP version 13\\n'
            + '# deep equal\\n'
            + 'not ok 1 should be equal\\n'
            + '  ---\\n'
            + '    operator: equal\\n'
            + '    expected: |-\\n'
            + '      { a: { a1: { a2: { a3: { a4: { a5: 2 } } } } } }\\n'
            + '    actual: |-\\n'
            + '      { a: { a1: { a2: { a3: { a4: { a5: 1 } } } } } }\\n'
            + '    stack: |-\\n'
            + '      Error: should be equal\\n'
            + '          [... stack stripped ...]\\n'
            + '          at Test.<anonymous> (\$TEST/deep-equal-failure.js:\$LINE:\$COL)\\n'
            + '          [... stack stripped ...]\\n'
            + '  ...\\n'
            + '\\n'
            + '1..1\\n'
            + '# tests 1\\n'
            + '# pass  0\\n'
            + '# fail  1\\n'
        );

        assert.deepEqual(getDiag(body), {
          operator: 'equal',
          expected: '{ a: { a1: { a2: { a3: { a4: { a5: 2 } } } } } }',
          actual: '{ a: { a1: { a2: { a3: { a4: { a5: 1 } } } } } }'
        });
    }));

    parser.once('assert', function (data) {
        delete data.diag.stack;
        assert.deepEqual(data, {
            ok: false,
            id: 1,
            name: 'should be equal',
            diag: {
              operator: 'equal',
              expected: '{ a: { a1: { a2: { a3: { a4: { a5: 2 } } } } } }',
              actual: '{ a: { a1: { a2: { a3: { a4: { a5: 1 } } } } } }'
            }
        });
    });

    test(\"deep equal\", {objectPrintDepth: 6}, function (t) {
        t.plan(1);
        t.equal({ a: { a1: { a2: { a3: { a4: { a5: 1 } } } } } }, { a: { a1: { a2: { a3: { a4: { a5: 2 } } } } } });
    });
})

tap.test('deep equal failure, depth 6, without option', function (assert) {
    var test = tape.createHarness({ exit : false });
    var stream = test.createStream();
    var parser = tapParser();
    assert.plan(3);

    stream.pipe(parser);
    stream.pipe(concat(function (body) {
        assert.equal(
            stripFullStack(body.toString('utf8')),
            'TAP version 13\\n'
            + '# deep equal\\n'
            + 'not ok 1 should be equal\\n'
            + '  ---\\n'
            + '    operator: equal\\n'
            + '    expected: |-\\n'
            + '      { a: { a1: { a2: { a3: { a4: [Object] } } } } }\\n'
            + '    actual: |-\\n'
            + '      { a: { a1: { a2: { a3: { a4: [Object] } } } } }\\n'
            + '    stack: |-\\n'
            + '      Error: should be equal\\n'
            + '          [... stack stripped ...]\\n'
            + '          at Test.<anonymous> (\$TEST/deep-equal-failure.js:\$LINE:\$COL)\\n'
            + '          [... stack stripped ...]\\n'
            + '  ...\\n'
            + '\\n'
            + '1..1\\n'
            + '# tests 1\\n'
            + '# pass  0\\n'
            + '# fail  1\\n'
        );

        assert.deepEqual(getDiag(body), {
          operator: 'equal',
          expected: '{ a: { a1: { a2: { a3: { a4: [Object] } } } } }',
          actual: '{ a: { a1: { a2: { a3: { a4: [Object] } } } } }'
        });
    }));

    parser.once('assert', function (data) {
        delete data.diag.stack;
        assert.deepEqual(data, {
            ok: false,
            id: 1,
            name: 'should be equal',
            diag: {
              operator: 'equal',
              expected: '{ a: { a1: { a2: { a3: { a4: [Object] } } } } }',
              actual: '{ a: { a1: { a2: { a3: { a4: [Object] } } } } }'
            }
        });
    });

    test(\"deep equal\", function (t) {
        t.plan(1);
        t.equal({ a: { a1: { a2: { a3: { a4: { a5: 1 } } } } } }, { a: { a1: { a2: { a3: { a4: { a5: 2 } } } } } });
    });
})
";
        
        $__internal_2b51e1ac4fffefdf95956b75e67bc4592f30bf5ce53f10e18ebb35011aaca70b->leave($__internal_2b51e1ac4fffefdf95956b75e67bc4592f30bf5ce53f10e18ebb35011aaca70b_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/tape/test/deep-equal-failure.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("var tape = require('../');
var tap = require('tap');
var concat = require('concat-stream');
var tapParser = require('tap-parser');
var common = require('./common');

var getDiag = common.getDiag;
var stripFullStack = common.stripFullStack;

tap.test('deep equal failure', function (assert) {
    var test = tape.createHarness({ exit : false });
    var stream = test.createStream();
    var parser = tapParser();
    assert.plan(3);

    stream.pipe(parser);
    stream.pipe(concat(function (body) {
        assert.equal(
            stripFullStack(body.toString('utf8')),
            'TAP version 13\\n'
            + '# deep equal\\n'
            + 'not ok 1 should be equal\\n'
            + '  ---\\n'
            + '    operator: equal\\n'
            + '    expected: |-\\n'
            + '      { b: 2 }\\n'
            + '    actual: |-\\n'
            + '      { a: 1 }\\n'
            + '    stack: |-\\n'
            + '      Error: should be equal\\n'
            + '          [... stack stripped ...]\\n'
            + '          at Test.<anonymous> (\$TEST/deep-equal-failure.js:\$LINE:\$COL)\\n'
            + '          [... stack stripped ...]\\n'
            + '  ...\\n'
            + '\\n'
            + '1..1\\n'
            + '# tests 1\\n'
            + '# pass  0\\n'
            + '# fail  1\\n'
        );

        assert.deepEqual(getDiag(body), {
          operator: 'equal',
          expected: '{ b: 2 }',
          actual: '{ a: 1 }'
        });
    }));

    parser.once('assert', function (data) {
        delete data.diag.stack;
        assert.deepEqual(data, {
            ok: false,
            id: 1,
            name: 'should be equal',
            diag: {
              operator: 'equal',
              expected: '{ b: 2 }',
              actual: '{ a: 1 }'
            }
        });
    });

    test(\"deep equal\", function (t) {
        t.plan(1);
        t.equal({a: 1}, {b: 2});
    });
})

tap.test('deep equal failure, depth 6, with option', function (assert) {
    var test = tape.createHarness({ exit : false });
    var stream = test.createStream();
    var parser = tapParser();
    assert.plan(3);

    stream.pipe(parser);
    stream.pipe(concat(function (body) {
        assert.equal(
            stripFullStack(body.toString('utf8')),
            'TAP version 13\\n'
            + '# deep equal\\n'
            + 'not ok 1 should be equal\\n'
            + '  ---\\n'
            + '    operator: equal\\n'
            + '    expected: |-\\n'
            + '      { a: { a1: { a2: { a3: { a4: { a5: 2 } } } } } }\\n'
            + '    actual: |-\\n'
            + '      { a: { a1: { a2: { a3: { a4: { a5: 1 } } } } } }\\n'
            + '    stack: |-\\n'
            + '      Error: should be equal\\n'
            + '          [... stack stripped ...]\\n'
            + '          at Test.<anonymous> (\$TEST/deep-equal-failure.js:\$LINE:\$COL)\\n'
            + '          [... stack stripped ...]\\n'
            + '  ...\\n'
            + '\\n'
            + '1..1\\n'
            + '# tests 1\\n'
            + '# pass  0\\n'
            + '# fail  1\\n'
        );

        assert.deepEqual(getDiag(body), {
          operator: 'equal',
          expected: '{ a: { a1: { a2: { a3: { a4: { a5: 2 } } } } } }',
          actual: '{ a: { a1: { a2: { a3: { a4: { a5: 1 } } } } } }'
        });
    }));

    parser.once('assert', function (data) {
        delete data.diag.stack;
        assert.deepEqual(data, {
            ok: false,
            id: 1,
            name: 'should be equal',
            diag: {
              operator: 'equal',
              expected: '{ a: { a1: { a2: { a3: { a4: { a5: 2 } } } } } }',
              actual: '{ a: { a1: { a2: { a3: { a4: { a5: 1 } } } } } }'
            }
        });
    });

    test(\"deep equal\", {objectPrintDepth: 6}, function (t) {
        t.plan(1);
        t.equal({ a: { a1: { a2: { a3: { a4: { a5: 1 } } } } } }, { a: { a1: { a2: { a3: { a4: { a5: 2 } } } } } });
    });
})

tap.test('deep equal failure, depth 6, without option', function (assert) {
    var test = tape.createHarness({ exit : false });
    var stream = test.createStream();
    var parser = tapParser();
    assert.plan(3);

    stream.pipe(parser);
    stream.pipe(concat(function (body) {
        assert.equal(
            stripFullStack(body.toString('utf8')),
            'TAP version 13\\n'
            + '# deep equal\\n'
            + 'not ok 1 should be equal\\n'
            + '  ---\\n'
            + '    operator: equal\\n'
            + '    expected: |-\\n'
            + '      { a: { a1: { a2: { a3: { a4: [Object] } } } } }\\n'
            + '    actual: |-\\n'
            + '      { a: { a1: { a2: { a3: { a4: [Object] } } } } }\\n'
            + '    stack: |-\\n'
            + '      Error: should be equal\\n'
            + '          [... stack stripped ...]\\n'
            + '          at Test.<anonymous> (\$TEST/deep-equal-failure.js:\$LINE:\$COL)\\n'
            + '          [... stack stripped ...]\\n'
            + '  ...\\n'
            + '\\n'
            + '1..1\\n'
            + '# tests 1\\n'
            + '# pass  0\\n'
            + '# fail  1\\n'
        );

        assert.deepEqual(getDiag(body), {
          operator: 'equal',
          expected: '{ a: { a1: { a2: { a3: { a4: [Object] } } } } }',
          actual: '{ a: { a1: { a2: { a3: { a4: [Object] } } } } }'
        });
    }));

    parser.once('assert', function (data) {
        delete data.diag.stack;
        assert.deepEqual(data, {
            ok: false,
            id: 1,
            name: 'should be equal',
            diag: {
              operator: 'equal',
              expected: '{ a: { a1: { a2: { a3: { a4: [Object] } } } } }',
              actual: '{ a: { a1: { a2: { a3: { a4: [Object] } } } } }'
            }
        });
    });

    test(\"deep equal\", function (t) {
        t.plan(1);
        t.equal({ a: { a1: { a2: { a3: { a4: { a5: 1 } } } } } }, { a: { a1: { a2: { a3: { a4: { a5: 2 } } } } } });
    });
})
", "node_modules/tape/test/deep-equal-failure.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/tape/test/deep-equal-failure.js");
    }
}
