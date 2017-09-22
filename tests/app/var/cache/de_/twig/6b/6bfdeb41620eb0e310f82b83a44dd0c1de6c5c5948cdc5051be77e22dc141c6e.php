<?php

/* node_modules/es5-ext/array/#/fill/shim.js */
class __TwigTemplate_8c236e220d25667fff3d0a22c3f439f4356b1cd81e3adb4ea9443c627e82dfbb extends Twig_Template
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
        $__internal_af3c5b9b8346113a093056d7e94fddd2fff8c106cb8e64c9260289ba7c25ebb8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_af3c5b9b8346113a093056d7e94fddd2fff8c106cb8e64c9260289ba7c25ebb8->enter($__internal_af3c5b9b8346113a093056d7e94fddd2fff8c106cb8e64c9260289ba7c25ebb8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/es5-ext/array/#/fill/shim.js"));

        // line 1
        echo "// Taken from: https://github.com/paulmillr/es6-shim/

\"use strict\";

var toInteger  = require(\"../../../number/to-integer\")
  , toPosInt   = require(\"../../../number/to-pos-integer\")
  , validValue = require(\"../../../object/valid-value\")
  , max        = Math.max
  , min        = Math.min;

module.exports = function (value /*, start, end*/) {
\tvar arr = validValue(this)
\t  , start = arguments[1]
\t  , end = arguments[2]
\t  , length = toPosInt(arr.length)
\t  , relativeStart
\t  , i;

\tstart = start === undefined ? 0 : toInteger(start);
\tend = end === undefined ? length : toInteger(end);

\trelativeStart = start < 0 ? max(length + start, 0) : min(start, length);
\tfor (i = relativeStart; i < length && i < end; ++i) arr[i] = value;
\treturn arr;
};
";
        
        $__internal_af3c5b9b8346113a093056d7e94fddd2fff8c106cb8e64c9260289ba7c25ebb8->leave($__internal_af3c5b9b8346113a093056d7e94fddd2fff8c106cb8e64c9260289ba7c25ebb8_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/es5-ext/array/#/fill/shim.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("// Taken from: https://github.com/paulmillr/es6-shim/

\"use strict\";

var toInteger  = require(\"../../../number/to-integer\")
  , toPosInt   = require(\"../../../number/to-pos-integer\")
  , validValue = require(\"../../../object/valid-value\")
  , max        = Math.max
  , min        = Math.min;

module.exports = function (value /*, start, end*/) {
\tvar arr = validValue(this)
\t  , start = arguments[1]
\t  , end = arguments[2]
\t  , length = toPosInt(arr.length)
\t  , relativeStart
\t  , i;

\tstart = start === undefined ? 0 : toInteger(start);
\tend = end === undefined ? length : toInteger(end);

\trelativeStart = start < 0 ? max(length + start, 0) : min(start, length);
\tfor (i = relativeStart; i < length && i < end; ++i) arr[i] = value;
\treturn arr;
};
", "node_modules/es5-ext/array/#/fill/shim.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/es5-ext/array/#/fill/shim.js");
    }
}
