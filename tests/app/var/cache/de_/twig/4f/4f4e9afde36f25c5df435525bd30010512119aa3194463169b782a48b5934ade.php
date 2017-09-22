<?php

/* node_modules/fsevents/node_modules/caseless/test.js */
class __TwigTemplate_b5c337d8c57111ad58eb163adc1718ac9d10c17053fcf7b1a740c7e867146d79 extends Twig_Template
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
        $__internal_20e7a932918707dcec15468c7d41b71e77e7896429f9e56cb89d220d0863d035 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_20e7a932918707dcec15468c7d41b71e77e7896429f9e56cb89d220d0863d035->enter($__internal_20e7a932918707dcec15468c7d41b71e77e7896429f9e56cb89d220d0863d035_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/fsevents/node_modules/caseless/test.js"));

        // line 1
        echo "var tape = require('tape')
  , caseless = require('./')
  ;

tape('set get has', function (t) {
  var headers = {}
    , c = caseless(headers)
    ;
  t.plan(17)
  c.set('a-Header', 'asdf')
  t.equal(c.get('a-header'), 'asdf')
  t.equal(c.has('a-header'), 'a-Header')
  t.ok(!c.has('nothing'))
  // old bug where we used the wrong regex
  t.ok(!c.has('a-hea'))
  c.set('a-header', 'fdsa')
  t.equal(c.get('a-header'), 'fdsa')
  t.equal(c.get('a-Header'), 'fdsa')
  c.set('a-HEADER', 'more', false)
  t.equal(c.get('a-header'), 'fdsa,more')

  t.deepEqual(headers, {'a-Header': 'fdsa,more'})
  c.swap('a-HEADER')
  t.deepEqual(headers, {'a-HEADER': 'fdsa,more'})

  c.set('deleteme', 'foobar')
  t.ok(c.has('deleteme'))
  t.ok(c.del('deleteme'))
  t.notOk(c.has('deleteme'))
  t.notOk(c.has('idonotexist'))
  t.ok(c.del('idonotexist'))

  c.set('tva', 'test1')
  c.set('tva-header', 'test2')
  t.equal(c.has('tva'), 'tva')
  t.notOk(c.has('header'))

  t.equal(c.get('tva'), 'test1')

})

tape('swap', function (t) {
  var headers = {}
    , c = caseless(headers)
    ;
  t.plan(4)
  // No Header to Swap.
  t.throws(function () {
    c.swap('content-type')
  })
  // Set Header.
  c.set('content-type', 'application/json')
  // Swap Header With Itself.
  c.swap('content-type')
  // Does Not Delete Itself.
  t.ok(c.has('content-type'))
  // Swap Header With a Different Header.
  c.swap('Content-Type')
  // Still Has Header.
  t.ok(c.has('Content-Type'))
  // Delete Header.
  c.del('Content-Type')
  // No Header to Swap.
  t.throws(function () {
    c.swap('content-type')
  })
})
";
        
        $__internal_20e7a932918707dcec15468c7d41b71e77e7896429f9e56cb89d220d0863d035->leave($__internal_20e7a932918707dcec15468c7d41b71e77e7896429f9e56cb89d220d0863d035_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/fsevents/node_modules/caseless/test.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("var tape = require('tape')
  , caseless = require('./')
  ;

tape('set get has', function (t) {
  var headers = {}
    , c = caseless(headers)
    ;
  t.plan(17)
  c.set('a-Header', 'asdf')
  t.equal(c.get('a-header'), 'asdf')
  t.equal(c.has('a-header'), 'a-Header')
  t.ok(!c.has('nothing'))
  // old bug where we used the wrong regex
  t.ok(!c.has('a-hea'))
  c.set('a-header', 'fdsa')
  t.equal(c.get('a-header'), 'fdsa')
  t.equal(c.get('a-Header'), 'fdsa')
  c.set('a-HEADER', 'more', false)
  t.equal(c.get('a-header'), 'fdsa,more')

  t.deepEqual(headers, {'a-Header': 'fdsa,more'})
  c.swap('a-HEADER')
  t.deepEqual(headers, {'a-HEADER': 'fdsa,more'})

  c.set('deleteme', 'foobar')
  t.ok(c.has('deleteme'))
  t.ok(c.del('deleteme'))
  t.notOk(c.has('deleteme'))
  t.notOk(c.has('idonotexist'))
  t.ok(c.del('idonotexist'))

  c.set('tva', 'test1')
  c.set('tva-header', 'test2')
  t.equal(c.has('tva'), 'tva')
  t.notOk(c.has('header'))

  t.equal(c.get('tva'), 'test1')

})

tape('swap', function (t) {
  var headers = {}
    , c = caseless(headers)
    ;
  t.plan(4)
  // No Header to Swap.
  t.throws(function () {
    c.swap('content-type')
  })
  // Set Header.
  c.set('content-type', 'application/json')
  // Swap Header With Itself.
  c.swap('content-type')
  // Does Not Delete Itself.
  t.ok(c.has('content-type'))
  // Swap Header With a Different Header.
  c.swap('Content-Type')
  // Still Has Header.
  t.ok(c.has('Content-Type'))
  // Delete Header.
  c.del('Content-Type')
  // No Header to Swap.
  t.throws(function () {
    c.swap('content-type')
  })
})
", "node_modules/fsevents/node_modules/caseless/test.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/fsevents/node_modules/caseless/test.js");
    }
}
