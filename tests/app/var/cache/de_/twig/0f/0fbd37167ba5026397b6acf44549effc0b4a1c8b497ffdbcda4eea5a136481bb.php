<?php

/* node_modules/fsevents/node_modules/jodid25519/almond.0 */
class __TwigTemplate_32446c45022a0e4775075f638df86f63c842108b618d1696225748e4cde39588 extends Twig_Template
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
        $__internal_e9bea1c982b9b5eced9d15d87eb1f8259d3f551a068629f17e11a1e618b90317 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e9bea1c982b9b5eced9d15d87eb1f8259d3f551a068629f17e11a1e618b90317->enter($__internal_e9bea1c982b9b5eced9d15d87eb1f8259d3f551a068629f17e11a1e618b90317_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/fsevents/node_modules/jodid25519/almond.0"));

        // line 1
        echo "/*
 * Curve 25519-based cryptography collection.
 *
 * EC Diffie-Hellman (ECDH) based on Curve25519 and digital signatures (EdDSA)
 * based on Ed25519.
 *
 * Copyright (c) 2012 Ron Garret
 * Copyright (c) 2007, 2013, 2014 Michele Bini
 * Copyright (c) 2014 Mega Limited
 * under the MIT License.
 *
 * You should have received a copy of the license along with this program.
 */
// See https://github.com/jrburke/almond#exporting-a-public-api
(function (root, factory) {
    if (typeof define === 'function' && define.amd) {
        // Allow using this built library as an AMD module
        // in another project. That other project will only
        // see this AMD call, not the internal modules in
        // the closure below.
        define([], factory);
    } else if (typeof module === 'object' && module.exports) {
        // Allow using this built library as a CommonJS module
        module.exports = factory();
    } else {
        // Browser globals case. Just assign the
        // result to a property on the global.
        root.jodid25519 = factory();
    }
}(this, function () {
    if (typeof module === 'object' && module.exports) {
        // If we're running under CommonJS, our dependencies get confused and
        // each clobber module.exports which leads to bad behaviour because
        // almond does asynchronous loading. So just pretend we're in the
        // browser globals case, and make them write to those values instead.
        // TODO: ditch requirejs/almond and use browserify or something.
        var __oldModule = module;
        var __oldExports = exports;
        var window = global;
        module = undefined;
        exports = undefined;
    }
";
        
        $__internal_e9bea1c982b9b5eced9d15d87eb1f8259d3f551a068629f17e11a1e618b90317->leave($__internal_e9bea1c982b9b5eced9d15d87eb1f8259d3f551a068629f17e11a1e618b90317_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/fsevents/node_modules/jodid25519/almond.0";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("/*
 * Curve 25519-based cryptography collection.
 *
 * EC Diffie-Hellman (ECDH) based on Curve25519 and digital signatures (EdDSA)
 * based on Ed25519.
 *
 * Copyright (c) 2012 Ron Garret
 * Copyright (c) 2007, 2013, 2014 Michele Bini
 * Copyright (c) 2014 Mega Limited
 * under the MIT License.
 *
 * You should have received a copy of the license along with this program.
 */
// See https://github.com/jrburke/almond#exporting-a-public-api
(function (root, factory) {
    if (typeof define === 'function' && define.amd) {
        // Allow using this built library as an AMD module
        // in another project. That other project will only
        // see this AMD call, not the internal modules in
        // the closure below.
        define([], factory);
    } else if (typeof module === 'object' && module.exports) {
        // Allow using this built library as a CommonJS module
        module.exports = factory();
    } else {
        // Browser globals case. Just assign the
        // result to a property on the global.
        root.jodid25519 = factory();
    }
}(this, function () {
    if (typeof module === 'object' && module.exports) {
        // If we're running under CommonJS, our dependencies get confused and
        // each clobber module.exports which leads to bad behaviour because
        // almond does asynchronous loading. So just pretend we're in the
        // browser globals case, and make them write to those values instead.
        // TODO: ditch requirejs/almond and use browserify or something.
        var __oldModule = module;
        var __oldExports = exports;
        var window = global;
        module = undefined;
        exports = undefined;
    }
", "node_modules/fsevents/node_modules/jodid25519/almond.0", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/fsevents/node_modules/jodid25519/almond.0");
    }
}
