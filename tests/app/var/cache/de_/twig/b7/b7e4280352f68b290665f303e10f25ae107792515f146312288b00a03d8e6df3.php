<?php

/* node_modules/lodash/startsWith.js */
class __TwigTemplate_978e450cf03e7e32011e6ace69b4f3ab65e9162e99409a9bbe55022933ec8994 extends Twig_Template
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
        $__internal_3d576a447157df42171a2bffb99b758807c5219df25183f5efcd9f76a450fe2c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3d576a447157df42171a2bffb99b758807c5219df25183f5efcd9f76a450fe2c->enter($__internal_3d576a447157df42171a2bffb99b758807c5219df25183f5efcd9f76a450fe2c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/lodash/startsWith.js"));

        // line 1
        echo "var baseClamp = require('./_baseClamp'),
    baseToString = require('./_baseToString'),
    toInteger = require('./toInteger'),
    toString = require('./toString');

/**
 * Checks if `string` starts with the given target string.
 *
 * @static
 * @memberOf _
 * @since 3.0.0
 * @category String
 * @param {string} [string=''] The string to inspect.
 * @param {string} [target] The string to search for.
 * @param {number} [position=0] The position to search from.
 * @returns {boolean} Returns `true` if `string` starts with `target`,
 *  else `false`.
 * @example
 *
 * _.startsWith('abc', 'a');
 * // => true
 *
 * _.startsWith('abc', 'b');
 * // => false
 *
 * _.startsWith('abc', 'b', 1);
 * // => true
 */
function startsWith(string, target, position) {
  string = toString(string);
  position = position == null
    ? 0
    : baseClamp(toInteger(position), 0, string.length);

  target = baseToString(target);
  return string.slice(position, position + target.length) == target;
}

module.exports = startsWith;
";
        
        $__internal_3d576a447157df42171a2bffb99b758807c5219df25183f5efcd9f76a450fe2c->leave($__internal_3d576a447157df42171a2bffb99b758807c5219df25183f5efcd9f76a450fe2c_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/lodash/startsWith.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("var baseClamp = require('./_baseClamp'),
    baseToString = require('./_baseToString'),
    toInteger = require('./toInteger'),
    toString = require('./toString');

/**
 * Checks if `string` starts with the given target string.
 *
 * @static
 * @memberOf _
 * @since 3.0.0
 * @category String
 * @param {string} [string=''] The string to inspect.
 * @param {string} [target] The string to search for.
 * @param {number} [position=0] The position to search from.
 * @returns {boolean} Returns `true` if `string` starts with `target`,
 *  else `false`.
 * @example
 *
 * _.startsWith('abc', 'a');
 * // => true
 *
 * _.startsWith('abc', 'b');
 * // => false
 *
 * _.startsWith('abc', 'b', 1);
 * // => true
 */
function startsWith(string, target, position) {
  string = toString(string);
  position = position == null
    ? 0
    : baseClamp(toInteger(position), 0, string.length);

  target = baseToString(target);
  return string.slice(position, position + target.length) == target;
}

module.exports = startsWith;
", "node_modules/lodash/startsWith.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/lodash/startsWith.js");
    }
}
