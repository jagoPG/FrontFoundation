<?php

/* node_modules/domain-browser/test.js */
class __TwigTemplate_396c7c09deaea3c4422649adf8adc0c0ec0823e7b9bc3d70d48e2ef1b97a86fb extends Twig_Template
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
        $__internal_e9af9c1dd2761d23468ebc96ddec51265e79c82ab95d49e85f8922a172a54d6f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e9af9c1dd2761d23468ebc96ddec51265e79c82ab95d49e85f8922a172a54d6f->enter($__internal_e9af9c1dd2761d23468ebc96ddec51265e79c82ab95d49e85f8922a172a54d6f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/domain-browser/test.js"));

        // line 1
        echo "/* eslint handle-callback-err:0, no-magic-numbers:0, no-unused-vars:0 */
'use strict'

// Import
const events = require('events')
const equal = require('assert-helpers').equal
const joe = require('joe')
const domain = require('./')

// =====================================
// Tests

joe.describe('domain-browser', function (describe, it) {
\tit('should work on throws', function (done) {
\t\tconst d = domain.create()
\t\td.on('error', function (err) {
\t\t\tequal(err && err.message, 'a thrown error', 'error message')
\t\t\tdone()
\t\t})
\t\td.run(function () {
\t\t\tthrow new Error('a thrown error')
\t\t})
\t})

\tit('should be able to add emitters', function (done) {
\t\tconst d = domain.create()
\t\tconst emitter = new events.EventEmitter()

\t\td.add(emitter)
\t\td.on('error', function (err) {
\t\t\tequal(err && err.message, 'an emitted error', 'error message')
\t\t\tdone()
\t\t})

\t\temitter.emit('error', new Error('an emitted error'))
\t})

\tit('should be able to remove emitters', function (done) {
\t\tconst emitter = new events.EventEmitter()
\t\tconst d = domain.create()
\t\tlet domainGotError = false

\t\td.add(emitter)
\t\td.on('error', function (err) {
\t\t\tdomainGotError = true
\t\t})

\t\temitter.on('error', function (err) {
\t\t\tequal(err && err.message, 'This error should not go to the domain', 'error message')

\t\t\t// Make sure nothing race condition-y is happening
\t\t\tsetTimeout(function () {
\t\t\t\tequal(domainGotError, false, 'no domain error')
\t\t\t\tdone()
\t\t\t}, 0)
\t\t})

\t\td.remove(emitter)
\t\temitter.emit('error', new Error('This error should not go to the domain'))
\t})

\tit('bind should work', function (done) {
\t\tconst d = domain.create()
\t\td.on('error', function (err) {
\t\t\tequal(err && err.message, 'a thrown error', 'error message')
\t\t\tdone()
\t\t})
\t\td.bind(function (err, a, b) {
\t\t\tequal(err && err.message, 'a passed error', 'error message')
\t\t\tequal(a, 2, 'value of a')
\t\t\tequal(b, 3, 'value of b')
\t\t\tthrow new Error('a thrown error')
\t\t})(new Error('a passed error'), 2, 3)
\t})

\tit('intercept should work', function (done) {
\t\tconst d = domain.create()
\t\tlet count = 0
\t\td.on('error', function (err) {
\t\t\tif ( count === 0 ) {
\t\t\t\tequal(err && err.message, 'a thrown error', 'error message')
\t\t\t}
\t\t\telse if ( count === 1 ) {
\t\t\t\tequal(err && err.message, 'a passed error', 'error message')
\t\t\t\tdone()
\t\t\t}
\t\t\tcount++
\t\t})

\t\td.intercept(function (a, b) {
\t\t\tequal(a, 2, 'value of a')
\t\t\tequal(b, 3, 'value of b')
\t\t\tthrow new Error('a thrown error')
\t\t})(null, 2, 3)

\t\td.intercept(function (a, b) {
\t\t\tthrow new Error('should never reach here')
\t\t})(new Error('a passed error'), 2, 3)
\t})
})
";
        
        $__internal_e9af9c1dd2761d23468ebc96ddec51265e79c82ab95d49e85f8922a172a54d6f->leave($__internal_e9af9c1dd2761d23468ebc96ddec51265e79c82ab95d49e85f8922a172a54d6f_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/domain-browser/test.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("/* eslint handle-callback-err:0, no-magic-numbers:0, no-unused-vars:0 */
'use strict'

// Import
const events = require('events')
const equal = require('assert-helpers').equal
const joe = require('joe')
const domain = require('./')

// =====================================
// Tests

joe.describe('domain-browser', function (describe, it) {
\tit('should work on throws', function (done) {
\t\tconst d = domain.create()
\t\td.on('error', function (err) {
\t\t\tequal(err && err.message, 'a thrown error', 'error message')
\t\t\tdone()
\t\t})
\t\td.run(function () {
\t\t\tthrow new Error('a thrown error')
\t\t})
\t})

\tit('should be able to add emitters', function (done) {
\t\tconst d = domain.create()
\t\tconst emitter = new events.EventEmitter()

\t\td.add(emitter)
\t\td.on('error', function (err) {
\t\t\tequal(err && err.message, 'an emitted error', 'error message')
\t\t\tdone()
\t\t})

\t\temitter.emit('error', new Error('an emitted error'))
\t})

\tit('should be able to remove emitters', function (done) {
\t\tconst emitter = new events.EventEmitter()
\t\tconst d = domain.create()
\t\tlet domainGotError = false

\t\td.add(emitter)
\t\td.on('error', function (err) {
\t\t\tdomainGotError = true
\t\t})

\t\temitter.on('error', function (err) {
\t\t\tequal(err && err.message, 'This error should not go to the domain', 'error message')

\t\t\t// Make sure nothing race condition-y is happening
\t\t\tsetTimeout(function () {
\t\t\t\tequal(domainGotError, false, 'no domain error')
\t\t\t\tdone()
\t\t\t}, 0)
\t\t})

\t\td.remove(emitter)
\t\temitter.emit('error', new Error('This error should not go to the domain'))
\t})

\tit('bind should work', function (done) {
\t\tconst d = domain.create()
\t\td.on('error', function (err) {
\t\t\tequal(err && err.message, 'a thrown error', 'error message')
\t\t\tdone()
\t\t})
\t\td.bind(function (err, a, b) {
\t\t\tequal(err && err.message, 'a passed error', 'error message')
\t\t\tequal(a, 2, 'value of a')
\t\t\tequal(b, 3, 'value of b')
\t\t\tthrow new Error('a thrown error')
\t\t})(new Error('a passed error'), 2, 3)
\t})

\tit('intercept should work', function (done) {
\t\tconst d = domain.create()
\t\tlet count = 0
\t\td.on('error', function (err) {
\t\t\tif ( count === 0 ) {
\t\t\t\tequal(err && err.message, 'a thrown error', 'error message')
\t\t\t}
\t\t\telse if ( count === 1 ) {
\t\t\t\tequal(err && err.message, 'a passed error', 'error message')
\t\t\t\tdone()
\t\t\t}
\t\t\tcount++
\t\t})

\t\td.intercept(function (a, b) {
\t\t\tequal(a, 2, 'value of a')
\t\t\tequal(b, 3, 'value of b')
\t\t\tthrow new Error('a thrown error')
\t\t})(null, 2, 3)

\t\td.intercept(function (a, b) {
\t\t\tthrow new Error('should never reach here')
\t\t})(new Error('a passed error'), 2, 3)
\t})
})
", "node_modules/domain-browser/test.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/domain-browser/test.js");
    }
}
