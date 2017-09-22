<?php

/* node_modules/is-typedarray/test.js */
class __TwigTemplate_5b80340f9aa745a81419cabfe17901f2ed8132461378a1cb5c36cbe3ad09b7c9 extends Twig_Template
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
        $__internal_9e1d4add96aa02e9814910aa7bf8e291ae5e9b768329abfd862c386c16e7b751 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9e1d4add96aa02e9814910aa7bf8e291ae5e9b768329abfd862c386c16e7b751->enter($__internal_9e1d4add96aa02e9814910aa7bf8e291ae5e9b768329abfd862c386c16e7b751_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/is-typedarray/test.js"));

        // line 1
        echo "var test = require('tape')
var ista = require('./')

test('strict', function(t) {
  t.ok(ista.strict(new Int8Array), 'Int8Array')
  t.ok(ista.strict(new Int16Array), 'Int16Array')
  t.ok(ista.strict(new Int32Array), 'Int32Array')
  t.ok(ista.strict(new Uint8Array), 'Uint8Array')
  t.ok(ista.strict(new Uint16Array), 'Uint16Array')
  t.ok(ista.strict(new Uint32Array), 'Uint32Array')
  t.ok(ista.strict(new Float32Array), 'Float32Array')
  t.ok(ista.strict(new Float64Array), 'Float64Array')

  t.ok(!ista.strict(new Array), 'Array')
  t.ok(!ista.strict([]), '[]')

  t.end()
})

test('loose', function(t) {
  t.ok(ista.loose(new Int8Array), 'Int8Array')
  t.ok(ista.loose(new Int16Array), 'Int16Array')
  t.ok(ista.loose(new Int32Array), 'Int32Array')
  t.ok(ista.loose(new Uint8Array), 'Uint8Array')
  t.ok(ista.loose(new Uint16Array), 'Uint16Array')
  t.ok(ista.loose(new Uint32Array), 'Uint32Array')
  t.ok(ista.loose(new Float32Array), 'Float32Array')
  t.ok(ista.loose(new Float64Array), 'Float64Array')

  t.ok(!ista.loose(new Array), 'Array')
  t.ok(!ista.loose([]), '[]')

  t.end()
})
";
        
        $__internal_9e1d4add96aa02e9814910aa7bf8e291ae5e9b768329abfd862c386c16e7b751->leave($__internal_9e1d4add96aa02e9814910aa7bf8e291ae5e9b768329abfd862c386c16e7b751_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/is-typedarray/test.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("var test = require('tape')
var ista = require('./')

test('strict', function(t) {
  t.ok(ista.strict(new Int8Array), 'Int8Array')
  t.ok(ista.strict(new Int16Array), 'Int16Array')
  t.ok(ista.strict(new Int32Array), 'Int32Array')
  t.ok(ista.strict(new Uint8Array), 'Uint8Array')
  t.ok(ista.strict(new Uint16Array), 'Uint16Array')
  t.ok(ista.strict(new Uint32Array), 'Uint32Array')
  t.ok(ista.strict(new Float32Array), 'Float32Array')
  t.ok(ista.strict(new Float64Array), 'Float64Array')

  t.ok(!ista.strict(new Array), 'Array')
  t.ok(!ista.strict([]), '[]')

  t.end()
})

test('loose', function(t) {
  t.ok(ista.loose(new Int8Array), 'Int8Array')
  t.ok(ista.loose(new Int16Array), 'Int16Array')
  t.ok(ista.loose(new Int32Array), 'Int32Array')
  t.ok(ista.loose(new Uint8Array), 'Uint8Array')
  t.ok(ista.loose(new Uint16Array), 'Uint16Array')
  t.ok(ista.loose(new Uint32Array), 'Uint32Array')
  t.ok(ista.loose(new Float32Array), 'Float32Array')
  t.ok(ista.loose(new Float64Array), 'Float64Array')

  t.ok(!ista.loose(new Array), 'Array')
  t.ok(!ista.loose([]), '[]')

  t.end()
})
", "node_modules/is-typedarray/test.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/is-typedarray/test.js");
    }
}
