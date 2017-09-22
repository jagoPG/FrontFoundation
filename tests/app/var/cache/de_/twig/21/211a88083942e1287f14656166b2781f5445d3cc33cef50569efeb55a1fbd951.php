<?php

/* node_modules/es5-ext/object/to-array.js */
class __TwigTemplate_9c6df4ff9b85d39acc68de781aa0131bf1a437dc0ca4f8067a7b33a4ee894325 extends Twig_Template
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
        $__internal_9c13fdfbef4bd5099d6d03e7dd4b9ba1332ad1a0df76992b18514c1c33213f15 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9c13fdfbef4bd5099d6d03e7dd4b9ba1332ad1a0df76992b18514c1c33213f15->enter($__internal_9c13fdfbef4bd5099d6d03e7dd4b9ba1332ad1a0df76992b18514c1c33213f15_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/es5-ext/object/to-array.js"));

        // line 1
        echo "\"use strict\";

var callable  = require(\"./valid-callable\")
  , isValue   = require(\"./is-value\")
  , forEach   = require(\"./for-each\")
  , call      = Function.prototype.call
  , defaultCb = function (value, key) {
\treturn [key, value];
};

module.exports = function (obj /*, cb, thisArg, compareFn*/) {
\tvar a = [], cb = arguments[1], thisArg = arguments[2];
\tcb = isValue(cb) ? callable(cb) : defaultCb;

\tforEach(
\t\tobj,
\t\tfunction (value, key, targetObj, index) {
\t\t\ta.push(call.call(cb, thisArg, value, key, this, index));
\t\t},
\t\tobj,
\t\targuments[3]
\t);
\treturn a;
};
";
        
        $__internal_9c13fdfbef4bd5099d6d03e7dd4b9ba1332ad1a0df76992b18514c1c33213f15->leave($__internal_9c13fdfbef4bd5099d6d03e7dd4b9ba1332ad1a0df76992b18514c1c33213f15_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/es5-ext/object/to-array.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("\"use strict\";

var callable  = require(\"./valid-callable\")
  , isValue   = require(\"./is-value\")
  , forEach   = require(\"./for-each\")
  , call      = Function.prototype.call
  , defaultCb = function (value, key) {
\treturn [key, value];
};

module.exports = function (obj /*, cb, thisArg, compareFn*/) {
\tvar a = [], cb = arguments[1], thisArg = arguments[2];
\tcb = isValue(cb) ? callable(cb) : defaultCb;

\tforEach(
\t\tobj,
\t\tfunction (value, key, targetObj, index) {
\t\t\ta.push(call.call(cb, thisArg, value, key, this, index));
\t\t},
\t\tobj,
\t\targuments[3]
\t);
\treturn a;
};
", "node_modules/es5-ext/object/to-array.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/es5-ext/object/to-array.js");
    }
}
