<?php

/* node_modules/prr/test.js */
class __TwigTemplate_283c993e2a9b3052a2de69082dcb44f83d0af3920cec2332524c0e7619c46cf0 extends Twig_Template
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
        $__internal_4ce32ebc68308dd8d1530bd759e86b759b41a0ca471d37faf28f7a7ac25f8ed3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4ce32ebc68308dd8d1530bd759e86b759b41a0ca471d37faf28f7a7ac25f8ed3->enter($__internal_4ce32ebc68308dd8d1530bd759e86b759b41a0ca471d37faf28f7a7ac25f8ed3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/prr/test.js"));

        // line 1
        echo "const test = require('tap').test
    , prr  = require('./')

test('test prr(o, key, value) form', function (t) {
  t.plan(2)

  var o = {}
  prr(o, 'foo', 'bar')
  t.equal(o.foo, 'bar', 'correct value')
  t.deepEqual(
      Object.getOwnPropertyDescriptor(o, 'foo')
    , {
          enumerable   : false
        , configurable : false
        , writable     : false
        , value        : 'bar'
      }
    , 'correct property descriptor'
  )
  t.end()
})

test('test prr(o, { key: value }) form', function (t) {
  t.plan(2)

  var o = {}
  prr(o, { foo: 'bar' })

  t.equal(o.foo, 'bar', 'correct value')
  t.deepEqual(
      Object.getOwnPropertyDescriptor(o, 'foo')
    , {
          enumerable   : false
        , configurable : false
        , writable     : false
        , value        : 'bar'
      }
    , 'correct property descriptor'
  )
  t.end()
})

test('test multiple key:value pairs', function (t) {
  var o = { foo: 'bar' }

  prr(o, { one: 'ONE', two: 'TWO', obj: { o: 'o' }})

  t.deepEqual(o, { foo: 'bar' }, 'properties are not enumerable')
  t.equal(o.one, 'ONE', 'correctly set property')
  t.equal(o.two, 'TWO', 'correctly set property')
  t.deepEqual(o.obj, { o: 'o' }, 'correctly set property')

  ;[ 'one', 'two', 'obj' ].forEach(function (p) {
    t.deepEqual(
        Object.getOwnPropertyDescriptor(o, p)
      , {
            enumerable   : false
          , configurable : false
          , writable     : false
          , value        : p == 'obj' ? { o: 'o' } : p.toUpperCase()
        }
      , 'correct property descriptor'
    )
  })

  t.end()
})

test('test descriptor options', function (t) {
  var o = {}

  prr(o, 'foo', 'bar', {
      enumerable   : true
    , configurable : false
  })
  t.equal(o.foo, 'bar', 'correct value')
  t.deepEqual(
      Object.getOwnPropertyDescriptor(o, 'foo')
    , {
          enumerable   : true
        , configurable : false
        , writable     : false
        , value        : 'bar'
      }
    , 'correct property descriptor'
  )

  prr(o, 'foo2', 'bar2', {
      enumerable   : true
    , configurable : true
    , writable     : false
  })
  t.equal(o.foo2, 'bar2', 'correct value')
  t.deepEqual(
      Object.getOwnPropertyDescriptor(o, 'foo2')
    , {
          enumerable   : true
        , configurable : true
        , writable     : false
        , value        : 'bar2'
      }
    , 'correct property descriptor'
  )

  prr(o, 'foo3', 'bar3', {
      enumerable   : true
    , configurable : true
    , writable     : true
  })
  t.equal(o.foo3, 'bar3', 'correct value')
  t.deepEqual(
      Object.getOwnPropertyDescriptor(o, 'foo3')
    , {
          enumerable   : true
        , configurable : true
        , writable     : true
        , value        : 'bar3'
      }
    , 'correct property descriptor'
  )

  t.end()
})


test('test descriptor options, string form', function (t) {
  var o = {}

  prr(o, 'foo', 'bar', 'e')
  t.equal(o.foo, 'bar', 'correct value')
  t.deepEqual(
      Object.getOwnPropertyDescriptor(o, 'foo')
    , {
          enumerable   : true
        , configurable : false
        , writable     : false
        , value        : 'bar'
      }
    , 'correct property descriptor'
  )

  prr(o, 'foo2', 'bar2', 'ec')
  t.equal(o.foo2, 'bar2', 'correct value')
  t.deepEqual(
      Object.getOwnPropertyDescriptor(o, 'foo2')
    , {
          enumerable   : true
        , configurable : true
        , writable     : false
        , value        : 'bar2'
      }
    , 'correct property descriptor'
  )

  prr(o, 'foo3', 'bar3', 'ecw')
  t.equal(o.foo3, 'bar3', 'correct value')
  t.deepEqual(
      Object.getOwnPropertyDescriptor(o, 'foo3')
    , {
          enumerable   : true
        , configurable : true
        , writable     : true
        , value        : 'bar3'
      }
    , 'correct property descriptor'
  )

  t.end()
})
";
        
        $__internal_4ce32ebc68308dd8d1530bd759e86b759b41a0ca471d37faf28f7a7ac25f8ed3->leave($__internal_4ce32ebc68308dd8d1530bd759e86b759b41a0ca471d37faf28f7a7ac25f8ed3_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/prr/test.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("const test = require('tap').test
    , prr  = require('./')

test('test prr(o, key, value) form', function (t) {
  t.plan(2)

  var o = {}
  prr(o, 'foo', 'bar')
  t.equal(o.foo, 'bar', 'correct value')
  t.deepEqual(
      Object.getOwnPropertyDescriptor(o, 'foo')
    , {
          enumerable   : false
        , configurable : false
        , writable     : false
        , value        : 'bar'
      }
    , 'correct property descriptor'
  )
  t.end()
})

test('test prr(o, { key: value }) form', function (t) {
  t.plan(2)

  var o = {}
  prr(o, { foo: 'bar' })

  t.equal(o.foo, 'bar', 'correct value')
  t.deepEqual(
      Object.getOwnPropertyDescriptor(o, 'foo')
    , {
          enumerable   : false
        , configurable : false
        , writable     : false
        , value        : 'bar'
      }
    , 'correct property descriptor'
  )
  t.end()
})

test('test multiple key:value pairs', function (t) {
  var o = { foo: 'bar' }

  prr(o, { one: 'ONE', two: 'TWO', obj: { o: 'o' }})

  t.deepEqual(o, { foo: 'bar' }, 'properties are not enumerable')
  t.equal(o.one, 'ONE', 'correctly set property')
  t.equal(o.two, 'TWO', 'correctly set property')
  t.deepEqual(o.obj, { o: 'o' }, 'correctly set property')

  ;[ 'one', 'two', 'obj' ].forEach(function (p) {
    t.deepEqual(
        Object.getOwnPropertyDescriptor(o, p)
      , {
            enumerable   : false
          , configurable : false
          , writable     : false
          , value        : p == 'obj' ? { o: 'o' } : p.toUpperCase()
        }
      , 'correct property descriptor'
    )
  })

  t.end()
})

test('test descriptor options', function (t) {
  var o = {}

  prr(o, 'foo', 'bar', {
      enumerable   : true
    , configurable : false
  })
  t.equal(o.foo, 'bar', 'correct value')
  t.deepEqual(
      Object.getOwnPropertyDescriptor(o, 'foo')
    , {
          enumerable   : true
        , configurable : false
        , writable     : false
        , value        : 'bar'
      }
    , 'correct property descriptor'
  )

  prr(o, 'foo2', 'bar2', {
      enumerable   : true
    , configurable : true
    , writable     : false
  })
  t.equal(o.foo2, 'bar2', 'correct value')
  t.deepEqual(
      Object.getOwnPropertyDescriptor(o, 'foo2')
    , {
          enumerable   : true
        , configurable : true
        , writable     : false
        , value        : 'bar2'
      }
    , 'correct property descriptor'
  )

  prr(o, 'foo3', 'bar3', {
      enumerable   : true
    , configurable : true
    , writable     : true
  })
  t.equal(o.foo3, 'bar3', 'correct value')
  t.deepEqual(
      Object.getOwnPropertyDescriptor(o, 'foo3')
    , {
          enumerable   : true
        , configurable : true
        , writable     : true
        , value        : 'bar3'
      }
    , 'correct property descriptor'
  )

  t.end()
})


test('test descriptor options, string form', function (t) {
  var o = {}

  prr(o, 'foo', 'bar', 'e')
  t.equal(o.foo, 'bar', 'correct value')
  t.deepEqual(
      Object.getOwnPropertyDescriptor(o, 'foo')
    , {
          enumerable   : true
        , configurable : false
        , writable     : false
        , value        : 'bar'
      }
    , 'correct property descriptor'
  )

  prr(o, 'foo2', 'bar2', 'ec')
  t.equal(o.foo2, 'bar2', 'correct value')
  t.deepEqual(
      Object.getOwnPropertyDescriptor(o, 'foo2')
    , {
          enumerable   : true
        , configurable : true
        , writable     : false
        , value        : 'bar2'
      }
    , 'correct property descriptor'
  )

  prr(o, 'foo3', 'bar3', 'ecw')
  t.equal(o.foo3, 'bar3', 'correct value')
  t.deepEqual(
      Object.getOwnPropertyDescriptor(o, 'foo3')
    , {
          enumerable   : true
        , configurable : true
        , writable     : true
        , value        : 'bar3'
      }
    , 'correct property descriptor'
  )

  t.end()
})
", "node_modules/prr/test.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/prr/test.js");
    }
}
