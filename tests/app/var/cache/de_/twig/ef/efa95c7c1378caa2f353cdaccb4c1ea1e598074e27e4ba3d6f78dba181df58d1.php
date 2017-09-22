<?php

/* node_modules/foreach/test.js */
class __TwigTemplate_5d77312099616bd0cde7efaaead0c84134be1fd468d50f9eb4d20674ad95b8b6 extends Twig_Template
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
        $__internal_ce2aad5b280cb54eb335c707c3acc65fb4a9e3abc930b4a6f629a107202f3ee6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ce2aad5b280cb54eb335c707c3acc65fb4a9e3abc930b4a6f629a107202f3ee6->enter($__internal_ce2aad5b280cb54eb335c707c3acc65fb4a9e3abc930b4a6f629a107202f3ee6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/foreach/test.js"));

        // line 1
        echo "var test = require('tape');
var forEach = require('./index.js');


test('second argument: iterator', function (t) {
    var arr = [];
    t.throws(function () { forEach(arr); }, TypeError, 'undefined is not a function');
    t.throws(function () { forEach(arr, null); }, TypeError, 'null is not a function');
    t.throws(function () { forEach(arr, ''); }, TypeError, 'string is not a function');
    t.throws(function () { forEach(arr, /a/); }, TypeError, 'regex is not a function');
    t.throws(function () { forEach(arr, true); }, TypeError, 'true is not a function');
    t.throws(function () { forEach(arr, false); }, TypeError, 'false is not a function');
    t.throws(function () { forEach(arr, NaN); }, TypeError, 'NaN is not a function');
    t.throws(function () { forEach(arr, 42); }, TypeError, '42 is not a function');
    t.doesNotThrow(function () { forEach(arr, function () {}); }, 'function is a function');
    t.end();
});

test('array', function (t) {
    var arr = [1, 2, 3];

    t.test('iterates over every item', function (st) {
        var index = 0;
        forEach(arr, function () { index += 1; });
        st.equal(index, arr.length, 'iterates ' + arr.length + ' times');
        st.end();
    });

    t.test('first iterator argument', function (st) {
        var index = 0;
        st.plan(arr.length);
        forEach(arr, function (item) {
            st.equal(arr[index], item, 'item ' + index + ' is passed as first argument');
            index += 1;
        });
        st.end();
    });

    t.test('second iterator argument', function (st) {
        var counter = 0;
        st.plan(arr.length);
        forEach(arr, function (item, index) {
            st.equal(counter, index, 'index ' + index + ' is passed as second argument');
            counter += 1;
        });
        st.end();
    });

    t.test('third iterator argument', function (st) {
        st.plan(arr.length);
        forEach(arr, function (item, index, array) {
            st.deepEqual(arr, array, 'array is passed as third argument');
        });
        st.end();
    });

    t.test('context argument', function (st) {
        var context = {};
        st.plan(1);
        forEach([1], function () {
            st.equal(this, context, '\"this\" is the passed context');
        }, context);
        st.end();
    });

    t.end();
});

test('object', function (t) {
    var obj = {
        a: 1,
        b: 2,
        c: 3
    };
    var keys = ['a', 'b', 'c'];

    var F = function () {
        this.a = 1;
        this.b = 2;
    };
    F.prototype.c = 3;
    var fKeys = ['a', 'b'];

    t.test('iterates over every object literal key', function (st) {
        var counter = 0;
        forEach(obj, function () { counter += 1; });
        st.equal(counter, keys.length, 'iterated ' + counter + ' times');
        st.end();
    });

    t.test('iterates only over own keys', function (st) {
        var counter = 0;
        forEach(new F(), function () { counter += 1; });
        st.equal(counter, fKeys.length, 'iterated ' + fKeys.length + ' times');
        st.end();
    });

    t.test('first iterator argument', function (st) {
        var index = 0;
        st.plan(keys.length);
        forEach(obj, function (item) {
            st.equal(obj[keys[index]], item, 'item at key ' + keys[index] + ' is passed as first argument');
            index += 1;
        });
        st.end();
    });

    t.test('second iterator argument', function (st) {
        var counter = 0;
        st.plan(keys.length);
        forEach(obj, function (item, key) {
            st.equal(keys[counter], key, 'key ' + key + ' is passed as second argument');
            counter += 1;
        });
        st.end();
    });

    t.test('third iterator argument', function (st) {
        st.plan(keys.length);
        forEach(obj, function (item, key, object) {
            st.deepEqual(obj, object, 'object is passed as third argument');
        });
        st.end();
    });

    t.test('context argument', function (st) {
        var context = {};
        st.plan(1);
        forEach({ a: 1 }, function () {
            st.equal(this, context, '\"this\" is the passed context');
        }, context);
        st.end();
    });

    t.end();
});


test('string', function (t) {
    var str = 'str';
    t.test('second iterator argument', function (st) {
        var counter = 0;
        st.plan(str.length * 2 + 1);
        forEach(str, function (item, index) {
            st.equal(counter, index, 'index ' + index + ' is passed as second argument');
            st.equal(str.charAt(index), item);
            counter += 1;
        });
        st.equal(counter, str.length, 'iterates ' + str.length + ' times');
    });
    t.end();
});

";
        
        $__internal_ce2aad5b280cb54eb335c707c3acc65fb4a9e3abc930b4a6f629a107202f3ee6->leave($__internal_ce2aad5b280cb54eb335c707c3acc65fb4a9e3abc930b4a6f629a107202f3ee6_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/foreach/test.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("var test = require('tape');
var forEach = require('./index.js');


test('second argument: iterator', function (t) {
    var arr = [];
    t.throws(function () { forEach(arr); }, TypeError, 'undefined is not a function');
    t.throws(function () { forEach(arr, null); }, TypeError, 'null is not a function');
    t.throws(function () { forEach(arr, ''); }, TypeError, 'string is not a function');
    t.throws(function () { forEach(arr, /a/); }, TypeError, 'regex is not a function');
    t.throws(function () { forEach(arr, true); }, TypeError, 'true is not a function');
    t.throws(function () { forEach(arr, false); }, TypeError, 'false is not a function');
    t.throws(function () { forEach(arr, NaN); }, TypeError, 'NaN is not a function');
    t.throws(function () { forEach(arr, 42); }, TypeError, '42 is not a function');
    t.doesNotThrow(function () { forEach(arr, function () {}); }, 'function is a function');
    t.end();
});

test('array', function (t) {
    var arr = [1, 2, 3];

    t.test('iterates over every item', function (st) {
        var index = 0;
        forEach(arr, function () { index += 1; });
        st.equal(index, arr.length, 'iterates ' + arr.length + ' times');
        st.end();
    });

    t.test('first iterator argument', function (st) {
        var index = 0;
        st.plan(arr.length);
        forEach(arr, function (item) {
            st.equal(arr[index], item, 'item ' + index + ' is passed as first argument');
            index += 1;
        });
        st.end();
    });

    t.test('second iterator argument', function (st) {
        var counter = 0;
        st.plan(arr.length);
        forEach(arr, function (item, index) {
            st.equal(counter, index, 'index ' + index + ' is passed as second argument');
            counter += 1;
        });
        st.end();
    });

    t.test('third iterator argument', function (st) {
        st.plan(arr.length);
        forEach(arr, function (item, index, array) {
            st.deepEqual(arr, array, 'array is passed as third argument');
        });
        st.end();
    });

    t.test('context argument', function (st) {
        var context = {};
        st.plan(1);
        forEach([1], function () {
            st.equal(this, context, '\"this\" is the passed context');
        }, context);
        st.end();
    });

    t.end();
});

test('object', function (t) {
    var obj = {
        a: 1,
        b: 2,
        c: 3
    };
    var keys = ['a', 'b', 'c'];

    var F = function () {
        this.a = 1;
        this.b = 2;
    };
    F.prototype.c = 3;
    var fKeys = ['a', 'b'];

    t.test('iterates over every object literal key', function (st) {
        var counter = 0;
        forEach(obj, function () { counter += 1; });
        st.equal(counter, keys.length, 'iterated ' + counter + ' times');
        st.end();
    });

    t.test('iterates only over own keys', function (st) {
        var counter = 0;
        forEach(new F(), function () { counter += 1; });
        st.equal(counter, fKeys.length, 'iterated ' + fKeys.length + ' times');
        st.end();
    });

    t.test('first iterator argument', function (st) {
        var index = 0;
        st.plan(keys.length);
        forEach(obj, function (item) {
            st.equal(obj[keys[index]], item, 'item at key ' + keys[index] + ' is passed as first argument');
            index += 1;
        });
        st.end();
    });

    t.test('second iterator argument', function (st) {
        var counter = 0;
        st.plan(keys.length);
        forEach(obj, function (item, key) {
            st.equal(keys[counter], key, 'key ' + key + ' is passed as second argument');
            counter += 1;
        });
        st.end();
    });

    t.test('third iterator argument', function (st) {
        st.plan(keys.length);
        forEach(obj, function (item, key, object) {
            st.deepEqual(obj, object, 'object is passed as third argument');
        });
        st.end();
    });

    t.test('context argument', function (st) {
        var context = {};
        st.plan(1);
        forEach({ a: 1 }, function () {
            st.equal(this, context, '\"this\" is the passed context');
        }, context);
        st.end();
    });

    t.end();
});


test('string', function (t) {
    var str = 'str';
    t.test('second iterator argument', function (st) {
        var counter = 0;
        st.plan(str.length * 2 + 1);
        forEach(str, function (item, index) {
            st.equal(counter, index, 'index ' + index + ' is passed as second argument');
            st.equal(str.charAt(index), item);
            counter += 1;
        });
        st.equal(counter, str.length, 'iterates ' + str.length + ' times');
    });
    t.end();
});

", "node_modules/foreach/test.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/foreach/test.js");
    }
}
