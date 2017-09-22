<?php

/* node_modules/lodash/castArray.js */
class __TwigTemplate_4fadccc68cfb77d55fdca0f87278ab337169c4618d989b2d5d9c8749e9897c9f extends Twig_Template
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
        $__internal_eda6ade19ff04545d382af49ac4df842c23fae702d7d7de237facb5a8b44a268 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_eda6ade19ff04545d382af49ac4df842c23fae702d7d7de237facb5a8b44a268->enter($__internal_eda6ade19ff04545d382af49ac4df842c23fae702d7d7de237facb5a8b44a268_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/lodash/castArray.js"));

        // line 1
        echo "var isArray = require('./isArray');

/**
 * Casts `value` as an array if it's not one.
 *
 * @static
 * @memberOf _
 * @since 4.4.0
 * @category Lang
 * @param {*} value The value to inspect.
 * @returns {Array} Returns the cast array.
 * @example
 *
 * _.castArray(1);
 * // => [1]
 *
 * _.castArray({ 'a': 1 });
 * // => [{ 'a': 1 }]
 *
 * _.castArray('abc');
 * // => ['abc']
 *
 * _.castArray(null);
 * // => [null]
 *
 * _.castArray(undefined);
 * // => [undefined]
 *
 * _.castArray();
 * // => []
 *
 * var array = [1, 2, 3];
 * console.log(_.castArray(array) === array);
 * // => true
 */
function castArray() {
  if (!arguments.length) {
    return [];
  }
  var value = arguments[0];
  return isArray(value) ? value : [value];
}

module.exports = castArray;
";
        
        $__internal_eda6ade19ff04545d382af49ac4df842c23fae702d7d7de237facb5a8b44a268->leave($__internal_eda6ade19ff04545d382af49ac4df842c23fae702d7d7de237facb5a8b44a268_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/lodash/castArray.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("var isArray = require('./isArray');

/**
 * Casts `value` as an array if it's not one.
 *
 * @static
 * @memberOf _
 * @since 4.4.0
 * @category Lang
 * @param {*} value The value to inspect.
 * @returns {Array} Returns the cast array.
 * @example
 *
 * _.castArray(1);
 * // => [1]
 *
 * _.castArray({ 'a': 1 });
 * // => [{ 'a': 1 }]
 *
 * _.castArray('abc');
 * // => ['abc']
 *
 * _.castArray(null);
 * // => [null]
 *
 * _.castArray(undefined);
 * // => [undefined]
 *
 * _.castArray();
 * // => []
 *
 * var array = [1, 2, 3];
 * console.log(_.castArray(array) === array);
 * // => true
 */
function castArray() {
  if (!arguments.length) {
    return [];
  }
  var value = arguments[0];
  return isArray(value) ? value : [value];
}

module.exports = castArray;
", "node_modules/lodash/castArray.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/lodash/castArray.js");
    }
}
