<?php

/* node_modules/lodash/endsWith.js */
class __TwigTemplate_1812854df7b1ec15b35f5a6bc974e1e185d840c061c1279e93a98641b0e94484 extends Twig_Template
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
        $__internal_956699fbe53934e6c3579c0d2d77e592542cb987fffb0fb45b8c2211b2c78559 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_956699fbe53934e6c3579c0d2d77e592542cb987fffb0fb45b8c2211b2c78559->enter($__internal_956699fbe53934e6c3579c0d2d77e592542cb987fffb0fb45b8c2211b2c78559_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/lodash/endsWith.js"));

        // line 1
        echo "var baseClamp = require('./_baseClamp'),
    baseToString = require('./_baseToString'),
    toInteger = require('./toInteger'),
    toString = require('./toString');

/**
 * Checks if `string` ends with the given target string.
 *
 * @static
 * @memberOf _
 * @since 3.0.0
 * @category String
 * @param {string} [string=''] The string to inspect.
 * @param {string} [target] The string to search for.
 * @param {number} [position=string.length] The position to search up to.
 * @returns {boolean} Returns `true` if `string` ends with `target`,
 *  else `false`.
 * @example
 *
 * _.endsWith('abc', 'c');
 * // => true
 *
 * _.endsWith('abc', 'b');
 * // => false
 *
 * _.endsWith('abc', 'b', 2);
 * // => true
 */
function endsWith(string, target, position) {
  string = toString(string);
  target = baseToString(target);

  var length = string.length;
  position = position === undefined
    ? length
    : baseClamp(toInteger(position), 0, length);

  var end = position;
  position -= target.length;
  return position >= 0 && string.slice(position, end) == target;
}

module.exports = endsWith;
";
        
        $__internal_956699fbe53934e6c3579c0d2d77e592542cb987fffb0fb45b8c2211b2c78559->leave($__internal_956699fbe53934e6c3579c0d2d77e592542cb987fffb0fb45b8c2211b2c78559_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/lodash/endsWith.js";
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
 * Checks if `string` ends with the given target string.
 *
 * @static
 * @memberOf _
 * @since 3.0.0
 * @category String
 * @param {string} [string=''] The string to inspect.
 * @param {string} [target] The string to search for.
 * @param {number} [position=string.length] The position to search up to.
 * @returns {boolean} Returns `true` if `string` ends with `target`,
 *  else `false`.
 * @example
 *
 * _.endsWith('abc', 'c');
 * // => true
 *
 * _.endsWith('abc', 'b');
 * // => false
 *
 * _.endsWith('abc', 'b', 2);
 * // => true
 */
function endsWith(string, target, position) {
  string = toString(string);
  target = baseToString(target);

  var length = string.length;
  position = position === undefined
    ? length
    : baseClamp(toInteger(position), 0, length);

  var end = position;
  position -= target.length;
  return position >= 0 && string.slice(position, end) == target;
}

module.exports = endsWith;
", "node_modules/lodash/endsWith.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/lodash/endsWith.js");
    }
}
