<?php

/* node_modules/lodash/isError.js */
class __TwigTemplate_10342a494379a2a7e9193b613ff1aaf8ff7d4dc768954770db6d6d0599552394 extends Twig_Template
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
        $__internal_6ed1423b45066e919763a4ce7dafc176dd3aab205c32dd494cb68425d13bd66c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6ed1423b45066e919763a4ce7dafc176dd3aab205c32dd494cb68425d13bd66c->enter($__internal_6ed1423b45066e919763a4ce7dafc176dd3aab205c32dd494cb68425d13bd66c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/lodash/isError.js"));

        // line 1
        echo "var baseGetTag = require('./_baseGetTag'),
    isObjectLike = require('./isObjectLike'),
    isPlainObject = require('./isPlainObject');

/** `Object#toString` result references. */
var domExcTag = '[object DOMException]',
    errorTag = '[object Error]';

/**
 * Checks if `value` is an `Error`, `EvalError`, `RangeError`, `ReferenceError`,
 * `SyntaxError`, `TypeError`, or `URIError` object.
 *
 * @static
 * @memberOf _
 * @since 3.0.0
 * @category Lang
 * @param {*} value The value to check.
 * @returns {boolean} Returns `true` if `value` is an error object, else `false`.
 * @example
 *
 * _.isError(new Error);
 * // => true
 *
 * _.isError(Error);
 * // => false
 */
function isError(value) {
  if (!isObjectLike(value)) {
    return false;
  }
  var tag = baseGetTag(value);
  return tag == errorTag || tag == domExcTag ||
    (typeof value.message == 'string' && typeof value.name == 'string' && !isPlainObject(value));
}

module.exports = isError;
";
        
        $__internal_6ed1423b45066e919763a4ce7dafc176dd3aab205c32dd494cb68425d13bd66c->leave($__internal_6ed1423b45066e919763a4ce7dafc176dd3aab205c32dd494cb68425d13bd66c_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/lodash/isError.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("var baseGetTag = require('./_baseGetTag'),
    isObjectLike = require('./isObjectLike'),
    isPlainObject = require('./isPlainObject');

/** `Object#toString` result references. */
var domExcTag = '[object DOMException]',
    errorTag = '[object Error]';

/**
 * Checks if `value` is an `Error`, `EvalError`, `RangeError`, `ReferenceError`,
 * `SyntaxError`, `TypeError`, or `URIError` object.
 *
 * @static
 * @memberOf _
 * @since 3.0.0
 * @category Lang
 * @param {*} value The value to check.
 * @returns {boolean} Returns `true` if `value` is an error object, else `false`.
 * @example
 *
 * _.isError(new Error);
 * // => true
 *
 * _.isError(Error);
 * // => false
 */
function isError(value) {
  if (!isObjectLike(value)) {
    return false;
  }
  var tag = baseGetTag(value);
  return tag == errorTag || tag == domExcTag ||
    (typeof value.message == 'string' && typeof value.name == 'string' && !isPlainObject(value));
}

module.exports = isError;
", "node_modules/lodash/isError.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/lodash/isError.js");
    }
}
