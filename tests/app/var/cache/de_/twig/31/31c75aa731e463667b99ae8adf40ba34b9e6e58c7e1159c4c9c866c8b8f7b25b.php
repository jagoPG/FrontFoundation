<?php

/* node_modules/lodash/isArguments.js */
class __TwigTemplate_86ef3f4e0e72aa57b2dc97cf49e6671af3f0481a1f2f50eb6fa77580c5ae94e3 extends Twig_Template
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
        $__internal_3b64f2ca2e83a7ae53ead43ff83e284cccf2c09b14bfa05749770d19bf7ed085 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3b64f2ca2e83a7ae53ead43ff83e284cccf2c09b14bfa05749770d19bf7ed085->enter($__internal_3b64f2ca2e83a7ae53ead43ff83e284cccf2c09b14bfa05749770d19bf7ed085_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/lodash/isArguments.js"));

        // line 1
        echo "var baseIsArguments = require('./_baseIsArguments'),
    isObjectLike = require('./isObjectLike');

/** Used for built-in method references. */
var objectProto = Object.prototype;

/** Used to check objects for own properties. */
var hasOwnProperty = objectProto.hasOwnProperty;

/** Built-in value references. */
var propertyIsEnumerable = objectProto.propertyIsEnumerable;

/**
 * Checks if `value` is likely an `arguments` object.
 *
 * @static
 * @memberOf _
 * @since 0.1.0
 * @category Lang
 * @param {*} value The value to check.
 * @returns {boolean} Returns `true` if `value` is an `arguments` object,
 *  else `false`.
 * @example
 *
 * _.isArguments(function() { return arguments; }());
 * // => true
 *
 * _.isArguments([1, 2, 3]);
 * // => false
 */
var isArguments = baseIsArguments(function() { return arguments; }()) ? baseIsArguments : function(value) {
  return isObjectLike(value) && hasOwnProperty.call(value, 'callee') &&
    !propertyIsEnumerable.call(value, 'callee');
};

module.exports = isArguments;
";
        
        $__internal_3b64f2ca2e83a7ae53ead43ff83e284cccf2c09b14bfa05749770d19bf7ed085->leave($__internal_3b64f2ca2e83a7ae53ead43ff83e284cccf2c09b14bfa05749770d19bf7ed085_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/lodash/isArguments.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("var baseIsArguments = require('./_baseIsArguments'),
    isObjectLike = require('./isObjectLike');

/** Used for built-in method references. */
var objectProto = Object.prototype;

/** Used to check objects for own properties. */
var hasOwnProperty = objectProto.hasOwnProperty;

/** Built-in value references. */
var propertyIsEnumerable = objectProto.propertyIsEnumerable;

/**
 * Checks if `value` is likely an `arguments` object.
 *
 * @static
 * @memberOf _
 * @since 0.1.0
 * @category Lang
 * @param {*} value The value to check.
 * @returns {boolean} Returns `true` if `value` is an `arguments` object,
 *  else `false`.
 * @example
 *
 * _.isArguments(function() { return arguments; }());
 * // => true
 *
 * _.isArguments([1, 2, 3]);
 * // => false
 */
var isArguments = baseIsArguments(function() { return arguments; }()) ? baseIsArguments : function(value) {
  return isObjectLike(value) && hasOwnProperty.call(value, 'callee') &&
    !propertyIsEnumerable.call(value, 'callee');
};

module.exports = isArguments;
", "node_modules/lodash/isArguments.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/lodash/isArguments.js");
    }
}
