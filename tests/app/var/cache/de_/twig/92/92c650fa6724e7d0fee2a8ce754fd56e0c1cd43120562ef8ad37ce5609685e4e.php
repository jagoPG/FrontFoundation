<?php

/* node_modules/es5-ext/math/_pack-ieee754.js */
class __TwigTemplate_d663b5e8bdeb980da3e9272ff9d99be105f18971169e5866c1e342a2e2b44012 extends Twig_Template
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
        $__internal_3d2d3fbed55473dd7185743a444d9b64cbcea6134f4a8fc87b86e74a9ce02f9d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3d2d3fbed55473dd7185743a444d9b64cbcea6134f4a8fc87b86e74a9ce02f9d->enter($__internal_3d2d3fbed55473dd7185743a444d9b64cbcea6134f4a8fc87b86e74a9ce02f9d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/es5-ext/math/_pack-ieee754.js"));

        // line 1
        echo "/* eslint no-bitwise: \"off\" */
// Credit: https://github.com/paulmillr/es6-shim/

\"use strict\";

var abs = Math.abs
  , floor = Math.floor
  , log = Math.log
  , min = Math.min
  , pow = Math.pow
  , LN2 = Math.LN2
  , roundToEven;

roundToEven = function (num) {
\tvar whole = floor(num), fraction = num - whole;
\tif (fraction < 0.5) return whole;
\tif (fraction > 0.5) return whole + 1;
\treturn whole % 2 ? whole + 1 : whole;
};

// eslint-disable-next-line max-statements
module.exports = function (value, ebits, fbits) {
\tvar bias = (1 << (ebits - 1)) - 1, sign, e, fraction, i, bits, str, bytes;

\t// Compute sign, exponent, fraction
\tif (isNaN(value)) {
\t\t// NaN
\t\t// http://dev.w3.org/2006/webapi/WebIDL/#es-type-mapping
\t\te = (1 << ebits) - 1;
\t\tfraction = pow(2, fbits - 1);
\t\tsign = 0;
\t} else if (value === Infinity || value === -Infinity) {
\t\te = (1 << ebits) - 1;
\t\tfraction = 0;
\t\tsign = value < 0 ? 1 : 0;
\t} else if (value === 0) {
\t\te = 0;
\t\tfraction = 0;
\t\tsign = 1 / value === -Infinity ? 1 : 0;
\t} else {
\t\tsign = value < 0;
\t\tvalue = abs(value);

\t\tif (value >= pow(2, 1 - bias)) {
\t\t\te = min(floor(log(value) / LN2), 1023);
\t\t\tfraction = roundToEven(value / pow(2, e) * pow(2, fbits));
\t\t\tif (fraction / pow(2, fbits) >= 2) {
\t\t\t\te += 1;
\t\t\t\tfraction = 1;
\t\t\t}
\t\t\tif (e > bias) {
\t\t\t\t// Overflow
\t\t\t\te = (1 << ebits) - 1;
\t\t\t\tfraction = 0;
\t\t\t} else {
\t\t\t\t// Normal
\t\t\t\te += bias;
\t\t\t\tfraction -= pow(2, fbits);
\t\t\t}
\t\t} else {
\t\t\t// Subnormal
\t\t\te = 0;
\t\t\tfraction = roundToEven(value / pow(2, 1 - bias - fbits));
\t\t}
\t}

\t// Pack sign, exponent, fraction
\tbits = [];
\tfor (i = fbits; i; i -= 1) {
\t\tbits.push(fraction % 2 ? 1 : 0);
\t\tfraction = floor(fraction / 2);
\t}
\tfor (i = ebits; i; i -= 1) {
\t\tbits.push(e % 2 ? 1 : 0);
\t\te = floor(e / 2);
\t}
\tbits.push(sign ? 1 : 0);
\tbits.reverse();
\tstr = bits.join(\"\");

\t// Bits to bytes
\tbytes = [];
\twhile (str.length) {
\t\tbytes.push(parseInt(str.substring(0, 8), 2));
\t\tstr = str.substring(8);
\t}
\treturn bytes;
};
";
        
        $__internal_3d2d3fbed55473dd7185743a444d9b64cbcea6134f4a8fc87b86e74a9ce02f9d->leave($__internal_3d2d3fbed55473dd7185743a444d9b64cbcea6134f4a8fc87b86e74a9ce02f9d_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/es5-ext/math/_pack-ieee754.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("/* eslint no-bitwise: \"off\" */
// Credit: https://github.com/paulmillr/es6-shim/

\"use strict\";

var abs = Math.abs
  , floor = Math.floor
  , log = Math.log
  , min = Math.min
  , pow = Math.pow
  , LN2 = Math.LN2
  , roundToEven;

roundToEven = function (num) {
\tvar whole = floor(num), fraction = num - whole;
\tif (fraction < 0.5) return whole;
\tif (fraction > 0.5) return whole + 1;
\treturn whole % 2 ? whole + 1 : whole;
};

// eslint-disable-next-line max-statements
module.exports = function (value, ebits, fbits) {
\tvar bias = (1 << (ebits - 1)) - 1, sign, e, fraction, i, bits, str, bytes;

\t// Compute sign, exponent, fraction
\tif (isNaN(value)) {
\t\t// NaN
\t\t// http://dev.w3.org/2006/webapi/WebIDL/#es-type-mapping
\t\te = (1 << ebits) - 1;
\t\tfraction = pow(2, fbits - 1);
\t\tsign = 0;
\t} else if (value === Infinity || value === -Infinity) {
\t\te = (1 << ebits) - 1;
\t\tfraction = 0;
\t\tsign = value < 0 ? 1 : 0;
\t} else if (value === 0) {
\t\te = 0;
\t\tfraction = 0;
\t\tsign = 1 / value === -Infinity ? 1 : 0;
\t} else {
\t\tsign = value < 0;
\t\tvalue = abs(value);

\t\tif (value >= pow(2, 1 - bias)) {
\t\t\te = min(floor(log(value) / LN2), 1023);
\t\t\tfraction = roundToEven(value / pow(2, e) * pow(2, fbits));
\t\t\tif (fraction / pow(2, fbits) >= 2) {
\t\t\t\te += 1;
\t\t\t\tfraction = 1;
\t\t\t}
\t\t\tif (e > bias) {
\t\t\t\t// Overflow
\t\t\t\te = (1 << ebits) - 1;
\t\t\t\tfraction = 0;
\t\t\t} else {
\t\t\t\t// Normal
\t\t\t\te += bias;
\t\t\t\tfraction -= pow(2, fbits);
\t\t\t}
\t\t} else {
\t\t\t// Subnormal
\t\t\te = 0;
\t\t\tfraction = roundToEven(value / pow(2, 1 - bias - fbits));
\t\t}
\t}

\t// Pack sign, exponent, fraction
\tbits = [];
\tfor (i = fbits; i; i -= 1) {
\t\tbits.push(fraction % 2 ? 1 : 0);
\t\tfraction = floor(fraction / 2);
\t}
\tfor (i = ebits; i; i -= 1) {
\t\tbits.push(e % 2 ? 1 : 0);
\t\te = floor(e / 2);
\t}
\tbits.push(sign ? 1 : 0);
\tbits.reverse();
\tstr = bits.join(\"\");

\t// Bits to bytes
\tbytes = [];
\twhile (str.length) {
\t\tbytes.push(parseInt(str.substring(0, 8), 2));
\t\tstr = str.substring(8);
\t}
\treturn bytes;
};
", "node_modules/es5-ext/math/_pack-ieee754.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/es5-ext/math/_pack-ieee754.js");
    }
}
