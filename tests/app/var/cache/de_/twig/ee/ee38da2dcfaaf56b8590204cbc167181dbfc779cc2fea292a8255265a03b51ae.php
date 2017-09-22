<?php

/* node_modules/domain-browser/index.js */
class __TwigTemplate_026d2726da6bfeaadc9f66694124340cd01a75e8c0ad596ff91fff2e03fadf22 extends Twig_Template
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
        $__internal_d4c5db659800dc760077f6993e00b40930cb2916dd17d973120caca852ec3948 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d4c5db659800dc760077f6993e00b40930cb2916dd17d973120caca852ec3948->enter($__internal_d4c5db659800dc760077f6993e00b40930cb2916dd17d973120caca852ec3948_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/domain-browser/index.js"));

        // line 1
        echo "// This file should be ES5 compatible
/* eslint prefer-spread:0, no-var:0, prefer-reflect:0, no-magic-numbers:0 */
'use strict'
module.exports = (function () {
\t// Import Events
\tvar events = require('events')

\t// Export Domain
\tvar domain = {}
\tdomain.createDomain = domain.create = function () {
\t\tvar d = new events.EventEmitter()

\t\tfunction emitError (e) {
\t\t\td.emit('error', e)
\t\t}

\t\td.add = function (emitter) {
\t\t\temitter.on('error', emitError)
\t\t}
\t\td.remove = function (emitter) {
\t\t\temitter.removeListener('error', emitError)
\t\t}
\t\td.bind = function (fn) {
\t\t\treturn function () {
\t\t\t\tvar args = Array.prototype.slice.call(arguments)
\t\t\t\ttry {
\t\t\t\t\tfn.apply(null, args)
\t\t\t\t}
\t\t\t\tcatch (err) {
\t\t\t\t\temitError(err)
\t\t\t\t}
\t\t\t}
\t\t}
\t\td.intercept = function (fn) {
\t\t\treturn function (err) {
\t\t\t\tif ( err ) {
\t\t\t\t\temitError(err)
\t\t\t\t}
\t\t\t\telse {
\t\t\t\t\tvar args = Array.prototype.slice.call(arguments, 1)
\t\t\t\t\ttry {
\t\t\t\t\t\tfn.apply(null, args)
\t\t\t\t\t}
\t\t\t\t\tcatch (err) {
\t\t\t\t\t\temitError(err)
\t\t\t\t\t}
\t\t\t\t}
\t\t\t}
\t\t}
\t\td.run = function (fn) {
\t\t\ttry {
\t\t\t\tfn()
\t\t\t}
\t\t\tcatch (err) {
\t\t\t\temitError(err)
\t\t\t}
\t\t\treturn this
\t\t}
\t\td.dispose = function () {
\t\t\tthis.removeAllListeners()
\t\t\treturn this
\t\t}
\t\td.enter = d.exit = function () {
\t\t\treturn this
\t\t}
\t\treturn d
\t}
\treturn domain
}).call(this)
";
        
        $__internal_d4c5db659800dc760077f6993e00b40930cb2916dd17d973120caca852ec3948->leave($__internal_d4c5db659800dc760077f6993e00b40930cb2916dd17d973120caca852ec3948_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/domain-browser/index.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("// This file should be ES5 compatible
/* eslint prefer-spread:0, no-var:0, prefer-reflect:0, no-magic-numbers:0 */
'use strict'
module.exports = (function () {
\t// Import Events
\tvar events = require('events')

\t// Export Domain
\tvar domain = {}
\tdomain.createDomain = domain.create = function () {
\t\tvar d = new events.EventEmitter()

\t\tfunction emitError (e) {
\t\t\td.emit('error', e)
\t\t}

\t\td.add = function (emitter) {
\t\t\temitter.on('error', emitError)
\t\t}
\t\td.remove = function (emitter) {
\t\t\temitter.removeListener('error', emitError)
\t\t}
\t\td.bind = function (fn) {
\t\t\treturn function () {
\t\t\t\tvar args = Array.prototype.slice.call(arguments)
\t\t\t\ttry {
\t\t\t\t\tfn.apply(null, args)
\t\t\t\t}
\t\t\t\tcatch (err) {
\t\t\t\t\temitError(err)
\t\t\t\t}
\t\t\t}
\t\t}
\t\td.intercept = function (fn) {
\t\t\treturn function (err) {
\t\t\t\tif ( err ) {
\t\t\t\t\temitError(err)
\t\t\t\t}
\t\t\t\telse {
\t\t\t\t\tvar args = Array.prototype.slice.call(arguments, 1)
\t\t\t\t\ttry {
\t\t\t\t\t\tfn.apply(null, args)
\t\t\t\t\t}
\t\t\t\t\tcatch (err) {
\t\t\t\t\t\temitError(err)
\t\t\t\t\t}
\t\t\t\t}
\t\t\t}
\t\t}
\t\td.run = function (fn) {
\t\t\ttry {
\t\t\t\tfn()
\t\t\t}
\t\t\tcatch (err) {
\t\t\t\temitError(err)
\t\t\t}
\t\t\treturn this
\t\t}
\t\td.dispose = function () {
\t\t\tthis.removeAllListeners()
\t\t\treturn this
\t\t}
\t\td.enter = d.exit = function () {
\t\t\treturn this
\t\t}
\t\treturn d
\t}
\treturn domain
}).call(this)
", "node_modules/domain-browser/index.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/domain-browser/index.js");
    }
}
