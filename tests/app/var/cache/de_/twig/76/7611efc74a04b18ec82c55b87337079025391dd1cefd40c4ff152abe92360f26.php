<?php

/* node_modules/buffer/test/node/test-buffer-iterator.js */
class __TwigTemplate_62661038f9dfa2781361875871956561dac2063c65d4032d67af1f43531a73ba extends Twig_Template
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
        $__internal_c3772aebc2df8983d906de489384eb8ec36ae0a1938d1419712955b83920061c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c3772aebc2df8983d906de489384eb8ec36ae0a1938d1419712955b83920061c->enter($__internal_c3772aebc2df8983d906de489384eb8ec36ae0a1938d1419712955b83920061c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/buffer/test/node/test-buffer-iterator.js"));

        // line 1
        echo "'use strict';
var Buffer = require('../../').Buffer;


var assert = require('assert');

var buffer = Buffer.from([1, 2, 3, 4, 5]);
var arr;
var b;

// buffers should be iterable

arr = [];

for (b of buffer)
  arr.push(b);

assert.deepStrictEqual(arr, [1, 2, 3, 4, 5]);


// buffer iterators should be iterable

arr = [];

for (b of buffer[Symbol.iterator]())
  arr.push(b);

assert.deepStrictEqual(arr, [1, 2, 3, 4, 5]);


// buffer#values() should return iterator for values

arr = [];

for (b of buffer.values())
  arr.push(b);

assert.deepStrictEqual(arr, [1, 2, 3, 4, 5]);


// buffer#keys() should return iterator for keys

arr = [];

for (b of buffer.keys())
  arr.push(b);

assert.deepStrictEqual(arr, [0, 1, 2, 3, 4]);


// buffer#entries() should return iterator for entries

arr = [];

for (b of buffer.entries())
  arr.push(b);

assert.deepStrictEqual(arr, [
  [0, 1],
  [1, 2],
  [2, 3],
  [3, 4],
  [4, 5]
]);

";
        
        $__internal_c3772aebc2df8983d906de489384eb8ec36ae0a1938d1419712955b83920061c->leave($__internal_c3772aebc2df8983d906de489384eb8ec36ae0a1938d1419712955b83920061c_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/buffer/test/node/test-buffer-iterator.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("'use strict';
var Buffer = require('../../').Buffer;


var assert = require('assert');

var buffer = Buffer.from([1, 2, 3, 4, 5]);
var arr;
var b;

// buffers should be iterable

arr = [];

for (b of buffer)
  arr.push(b);

assert.deepStrictEqual(arr, [1, 2, 3, 4, 5]);


// buffer iterators should be iterable

arr = [];

for (b of buffer[Symbol.iterator]())
  arr.push(b);

assert.deepStrictEqual(arr, [1, 2, 3, 4, 5]);


// buffer#values() should return iterator for values

arr = [];

for (b of buffer.values())
  arr.push(b);

assert.deepStrictEqual(arr, [1, 2, 3, 4, 5]);


// buffer#keys() should return iterator for keys

arr = [];

for (b of buffer.keys())
  arr.push(b);

assert.deepStrictEqual(arr, [0, 1, 2, 3, 4]);


// buffer#entries() should return iterator for entries

arr = [];

for (b of buffer.entries())
  arr.push(b);

assert.deepStrictEqual(arr, [
  [0, 1],
  [1, 2],
  [2, 3],
  [3, 4],
  [4, 5]
]);

", "node_modules/buffer/test/node/test-buffer-iterator.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/buffer/test/node/test-buffer-iterator.js");
    }
}
