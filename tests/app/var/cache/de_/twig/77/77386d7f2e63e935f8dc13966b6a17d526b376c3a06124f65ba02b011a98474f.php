<?php

/* node_modules/lodash/chain.js */
class __TwigTemplate_727dbd9f71e74013bbc3a519d810568e50b51bb5ec3ba380986fc571a8a17620 extends Twig_Template
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
        $__internal_90be38b8022ab2f364bcabebe7a0520b9ed9424c264524e4b80c97b2e212b486 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_90be38b8022ab2f364bcabebe7a0520b9ed9424c264524e4b80c97b2e212b486->enter($__internal_90be38b8022ab2f364bcabebe7a0520b9ed9424c264524e4b80c97b2e212b486_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/lodash/chain.js"));

        // line 1
        echo "var lodash = require('./wrapperLodash');

/**
 * Creates a `lodash` wrapper instance that wraps `value` with explicit method
 * chain sequences enabled. The result of such sequences must be unwrapped
 * with `_#value`.
 *
 * @static
 * @memberOf _
 * @since 1.3.0
 * @category Seq
 * @param {*} value The value to wrap.
 * @returns {Object} Returns the new `lodash` wrapper instance.
 * @example
 *
 * var users = [
 *   { 'user': 'barney',  'age': 36 },
 *   { 'user': 'fred',    'age': 40 },
 *   { 'user': 'pebbles', 'age': 1 }
 * ];
 *
 * var youngest = _
 *   .chain(users)
 *   .sortBy('age')
 *   .map(function(o) {
 *     return o.user + ' is ' + o.age;
 *   })
 *   .head()
 *   .value();
 * // => 'pebbles is 1'
 */
function chain(value) {
  var result = lodash(value);
  result.__chain__ = true;
  return result;
}

module.exports = chain;
";
        
        $__internal_90be38b8022ab2f364bcabebe7a0520b9ed9424c264524e4b80c97b2e212b486->leave($__internal_90be38b8022ab2f364bcabebe7a0520b9ed9424c264524e4b80c97b2e212b486_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/lodash/chain.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("var lodash = require('./wrapperLodash');

/**
 * Creates a `lodash` wrapper instance that wraps `value` with explicit method
 * chain sequences enabled. The result of such sequences must be unwrapped
 * with `_#value`.
 *
 * @static
 * @memberOf _
 * @since 1.3.0
 * @category Seq
 * @param {*} value The value to wrap.
 * @returns {Object} Returns the new `lodash` wrapper instance.
 * @example
 *
 * var users = [
 *   { 'user': 'barney',  'age': 36 },
 *   { 'user': 'fred',    'age': 40 },
 *   { 'user': 'pebbles', 'age': 1 }
 * ];
 *
 * var youngest = _
 *   .chain(users)
 *   .sortBy('age')
 *   .map(function(o) {
 *     return o.user + ' is ' + o.age;
 *   })
 *   .head()
 *   .value();
 * // => 'pebbles is 1'
 */
function chain(value) {
  var result = lodash(value);
  result.__chain__ = true;
  return result;
}

module.exports = chain;
", "node_modules/lodash/chain.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/lodash/chain.js");
    }
}
