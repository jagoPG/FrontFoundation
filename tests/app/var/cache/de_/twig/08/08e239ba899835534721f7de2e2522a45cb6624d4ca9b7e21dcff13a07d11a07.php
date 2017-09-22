<?php

/* node_modules/lodash/_objectToString.js */
class __TwigTemplate_8852e3ee4528544993f8e649a6592122210e6da39152a350aae1969d2bcce0a2 extends Twig_Template
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
        $__internal_1f97108696c83f58b71ea03f79dd52535b24494b4a6d5613c925546f55cec308 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1f97108696c83f58b71ea03f79dd52535b24494b4a6d5613c925546f55cec308->enter($__internal_1f97108696c83f58b71ea03f79dd52535b24494b4a6d5613c925546f55cec308_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/lodash/_objectToString.js"));

        // line 1
        echo "/** Used for built-in method references. */
var objectProto = Object.prototype;

/**
 * Used to resolve the
 * [`toStringTag`](http://ecma-international.org/ecma-262/7.0/#sec-object.prototype.tostring)
 * of values.
 */
var nativeObjectToString = objectProto.toString;

/**
 * Converts `value` to a string using `Object.prototype.toString`.
 *
 * @private
 * @param {*} value The value to convert.
 * @returns {string} Returns the converted string.
 */
function objectToString(value) {
  return nativeObjectToString.call(value);
}

module.exports = objectToString;
";
        
        $__internal_1f97108696c83f58b71ea03f79dd52535b24494b4a6d5613c925546f55cec308->leave($__internal_1f97108696c83f58b71ea03f79dd52535b24494b4a6d5613c925546f55cec308_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/lodash/_objectToString.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("/** Used for built-in method references. */
var objectProto = Object.prototype;

/**
 * Used to resolve the
 * [`toStringTag`](http://ecma-international.org/ecma-262/7.0/#sec-object.prototype.tostring)
 * of values.
 */
var nativeObjectToString = objectProto.toString;

/**
 * Converts `value` to a string using `Object.prototype.toString`.
 *
 * @private
 * @param {*} value The value to convert.
 * @returns {string} Returns the converted string.
 */
function objectToString(value) {
  return nativeObjectToString.call(value);
}

module.exports = objectToString;
", "node_modules/lodash/_objectToString.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/lodash/_objectToString.js");
    }
}
