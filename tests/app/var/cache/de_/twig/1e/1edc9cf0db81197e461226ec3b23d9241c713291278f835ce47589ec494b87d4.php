<?php

/* node_modules/lodash/updateWith.js */
class __TwigTemplate_7489ef93e8294716ff4383611c0b0fe24bbc8a1b771957f783f98089f035b9e9 extends Twig_Template
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
        $__internal_72687b089c1629f86ae8d997a0a92cc107198462fa09262f70905e03bc836c31 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_72687b089c1629f86ae8d997a0a92cc107198462fa09262f70905e03bc836c31->enter($__internal_72687b089c1629f86ae8d997a0a92cc107198462fa09262f70905e03bc836c31_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/lodash/updateWith.js"));

        // line 1
        echo "var baseUpdate = require('./_baseUpdate'),
    castFunction = require('./_castFunction');

/**
 * This method is like `_.update` except that it accepts `customizer` which is
 * invoked to produce the objects of `path`.  If `customizer` returns `undefined`
 * path creation is handled by the method instead. The `customizer` is invoked
 * with three arguments: (nsValue, key, nsObject).
 *
 * **Note:** This method mutates `object`.
 *
 * @static
 * @memberOf _
 * @since 4.6.0
 * @category Object
 * @param {Object} object The object to modify.
 * @param {Array|string} path The path of the property to set.
 * @param {Function} updater The function to produce the updated value.
 * @param {Function} [customizer] The function to customize assigned values.
 * @returns {Object} Returns `object`.
 * @example
 *
 * var object = {};
 *
 * _.updateWith(object, '[0][1]', _.constant('a'), Object);
 * // => { '0': { '1': 'a' } }
 */
function updateWith(object, path, updater, customizer) {
  customizer = typeof customizer == 'function' ? customizer : undefined;
  return object == null ? object : baseUpdate(object, path, castFunction(updater), customizer);
}

module.exports = updateWith;
";
        
        $__internal_72687b089c1629f86ae8d997a0a92cc107198462fa09262f70905e03bc836c31->leave($__internal_72687b089c1629f86ae8d997a0a92cc107198462fa09262f70905e03bc836c31_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/lodash/updateWith.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("var baseUpdate = require('./_baseUpdate'),
    castFunction = require('./_castFunction');

/**
 * This method is like `_.update` except that it accepts `customizer` which is
 * invoked to produce the objects of `path`.  If `customizer` returns `undefined`
 * path creation is handled by the method instead. The `customizer` is invoked
 * with three arguments: (nsValue, key, nsObject).
 *
 * **Note:** This method mutates `object`.
 *
 * @static
 * @memberOf _
 * @since 4.6.0
 * @category Object
 * @param {Object} object The object to modify.
 * @param {Array|string} path The path of the property to set.
 * @param {Function} updater The function to produce the updated value.
 * @param {Function} [customizer] The function to customize assigned values.
 * @returns {Object} Returns `object`.
 * @example
 *
 * var object = {};
 *
 * _.updateWith(object, '[0][1]', _.constant('a'), Object);
 * // => { '0': { '1': 'a' } }
 */
function updateWith(object, path, updater, customizer) {
  customizer = typeof customizer == 'function' ? customizer : undefined;
  return object == null ? object : baseUpdate(object, path, castFunction(updater), customizer);
}

module.exports = updateWith;
", "node_modules/lodash/updateWith.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/lodash/updateWith.js");
    }
}
