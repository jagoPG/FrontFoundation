<?php

/* node_modules/es5-ext/math/_unpack-ieee754.js */
class __TwigTemplate_a95a977b7fce867df34c21e28e655e614b072b9f0e058f6fb54ca48c594c7325 extends Twig_Template
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
        $__internal_e0c525c13be9b42c160740e0634efff95595132ce109209a003185022099767d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e0c525c13be9b42c160740e0634efff95595132ce109209a003185022099767d->enter($__internal_e0c525c13be9b42c160740e0634efff95595132ce109209a003185022099767d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/es5-ext/math/_unpack-ieee754.js"));

        // line 1
        echo "/* eslint no-bitwise: \"off\" */
// Credit: https://github.com/paulmillr/es6-shim/

\"use strict\";

var pow = Math.pow;

module.exports = function (bytes, ebits, fbits) {
\t// Bytes to bits
\tvar bits = [], i, j, bit, str, bias, sign, e, fraction;

\tfor (i = bytes.length; i; i -= 1) {
\t\tbit = bytes[i - 1];
\t\tfor (j = 8; j; j -= 1) {
\t\t\tbits.push(bit % 2 ? 1 : 0);
\t\t\tbit >>= 1;
\t\t}
\t}
\tbits.reverse();
\tstr = bits.join(\"\");

\t// Unpack sign, exponent, fraction
\tbias = (1 << (ebits - 1)) - 1;
\tsign = parseInt(str.substring(0, 1), 2) ? -1 : 1;
\te = parseInt(str.substring(1, 1 + ebits), 2);
\tfraction = parseInt(str.substring(1 + ebits), 2);

\t// Produce number
\tif (e === (1 << ebits) - 1) return fraction === 0 ? sign * Infinity : NaN;
\tif (e > 0) return sign * pow(2, e - bias) * (1 + fraction / pow(2, fbits));
\tif (fraction !== 0) return sign * pow(2, -(bias - 1)) * (fraction / pow(2, fbits));
\treturn sign < 0 ? -0 : 0;
};
";
        
        $__internal_e0c525c13be9b42c160740e0634efff95595132ce109209a003185022099767d->leave($__internal_e0c525c13be9b42c160740e0634efff95595132ce109209a003185022099767d_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/es5-ext/math/_unpack-ieee754.js";
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

var pow = Math.pow;

module.exports = function (bytes, ebits, fbits) {
\t// Bytes to bits
\tvar bits = [], i, j, bit, str, bias, sign, e, fraction;

\tfor (i = bytes.length; i; i -= 1) {
\t\tbit = bytes[i - 1];
\t\tfor (j = 8; j; j -= 1) {
\t\t\tbits.push(bit % 2 ? 1 : 0);
\t\t\tbit >>= 1;
\t\t}
\t}
\tbits.reverse();
\tstr = bits.join(\"\");

\t// Unpack sign, exponent, fraction
\tbias = (1 << (ebits - 1)) - 1;
\tsign = parseInt(str.substring(0, 1), 2) ? -1 : 1;
\te = parseInt(str.substring(1, 1 + ebits), 2);
\tfraction = parseInt(str.substring(1 + ebits), 2);

\t// Produce number
\tif (e === (1 << ebits) - 1) return fraction === 0 ? sign * Infinity : NaN;
\tif (e > 0) return sign * pow(2, e - bias) * (1 + fraction / pow(2, fbits));
\tif (fraction !== 0) return sign * pow(2, -(bias - 1)) * (fraction / pow(2, fbits));
\treturn sign < 0 ? -0 : 0;
};
", "node_modules/es5-ext/math/_unpack-ieee754.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/es5-ext/math/_unpack-ieee754.js");
    }
}
