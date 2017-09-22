<?php

/* node_modules/cryptiles/lib/index.js */
class __TwigTemplate_1b21e86286cac560112497c17796f067a193966dad95d5cf7409567075c01833 extends Twig_Template
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
        $__internal_ade7214cd7d3110cbd827126546559630e67c4026573dab9895cefe581ccb7aa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ade7214cd7d3110cbd827126546559630e67c4026573dab9895cefe581ccb7aa->enter($__internal_ade7214cd7d3110cbd827126546559630e67c4026573dab9895cefe581ccb7aa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/cryptiles/lib/index.js"));

        // line 1
        echo "// Load modules

var Crypto = require('crypto');
var Boom = require('boom');


// Declare internals

var internals = {};


// Generate a cryptographically strong pseudo-random data

exports.randomString = function (size) {

    var buffer = exports.randomBits((size + 1) * 6);
    if (buffer instanceof Error) {
        return buffer;
    }

    var string = buffer.toString('base64').replace(/\\+/g, '-').replace(/\\//g, '_').replace(/\\=/g, '');
    return string.slice(0, size);
};


exports.randomBits = function (bits) {

    if (!bits ||
        bits < 0) {

        return Boom.internal('Invalid random bits count');
    }

    var bytes = Math.ceil(bits / 8);
    try {
        return Crypto.randomBytes(bytes);
    }
    catch (err) {
        return Boom.internal('Failed generating random bits: ' + err.message);
    }
};


// Compare two strings using fixed time algorithm (to prevent time-based analysis of MAC digest match)

exports.fixedTimeComparison = function (a, b) {

    if (typeof a !== 'string' ||
        typeof b !== 'string') {

        return false;
    }

    var mismatch = (a.length === b.length ? 0 : 1);
    if (mismatch) {
        b = a;
    }

    for (var i = 0, il = a.length; i < il; ++i) {
        var ac = a.charCodeAt(i);
        var bc = b.charCodeAt(i);
        mismatch |= (ac ^ bc);
    }

    return (mismatch === 0);
};


";
        
        $__internal_ade7214cd7d3110cbd827126546559630e67c4026573dab9895cefe581ccb7aa->leave($__internal_ade7214cd7d3110cbd827126546559630e67c4026573dab9895cefe581ccb7aa_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/cryptiles/lib/index.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("// Load modules

var Crypto = require('crypto');
var Boom = require('boom');


// Declare internals

var internals = {};


// Generate a cryptographically strong pseudo-random data

exports.randomString = function (size) {

    var buffer = exports.randomBits((size + 1) * 6);
    if (buffer instanceof Error) {
        return buffer;
    }

    var string = buffer.toString('base64').replace(/\\+/g, '-').replace(/\\//g, '_').replace(/\\=/g, '');
    return string.slice(0, size);
};


exports.randomBits = function (bits) {

    if (!bits ||
        bits < 0) {

        return Boom.internal('Invalid random bits count');
    }

    var bytes = Math.ceil(bits / 8);
    try {
        return Crypto.randomBytes(bytes);
    }
    catch (err) {
        return Boom.internal('Failed generating random bits: ' + err.message);
    }
};


// Compare two strings using fixed time algorithm (to prevent time-based analysis of MAC digest match)

exports.fixedTimeComparison = function (a, b) {

    if (typeof a !== 'string' ||
        typeof b !== 'string') {

        return false;
    }

    var mismatch = (a.length === b.length ? 0 : 1);
    if (mismatch) {
        b = a;
    }

    for (var i = 0, il = a.length; i < il; ++i) {
        var ac = a.charCodeAt(i);
        var bc = b.charCodeAt(i);
        mismatch |= (ac ^ bc);
    }

    return (mismatch === 0);
};


", "node_modules/cryptiles/lib/index.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/cryptiles/lib/index.js");
    }
}
