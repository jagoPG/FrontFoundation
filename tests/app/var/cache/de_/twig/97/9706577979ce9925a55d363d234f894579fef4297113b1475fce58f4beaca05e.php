<?php

/* node_modules/lodash/concat.js */
class __TwigTemplate_2f377d2b266ec17fff22aca4018f75fe374429aaa14af19e1a747378a9d3357c extends Twig_Template
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
        $__internal_e5c8ef62c98c05f16304bbb2fcb7eddc24d995883ad3affc978e2431b4a6ccc9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e5c8ef62c98c05f16304bbb2fcb7eddc24d995883ad3affc978e2431b4a6ccc9->enter($__internal_e5c8ef62c98c05f16304bbb2fcb7eddc24d995883ad3affc978e2431b4a6ccc9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/lodash/concat.js"));

        // line 1
        echo "var arrayPush = require('./_arrayPush'),
    baseFlatten = require('./_baseFlatten'),
    copyArray = require('./_copyArray'),
    isArray = require('./isArray');

/**
 * Creates a new array concatenating `array` with any additional arrays
 * and/or values.
 *
 * @static
 * @memberOf _
 * @since 4.0.0
 * @category Array
 * @param {Array} array The array to concatenate.
 * @param {...*} [values] The values to concatenate.
 * @returns {Array} Returns the new concatenated array.
 * @example
 *
 * var array = [1];
 * var other = _.concat(array, 2, [3], [[4]]);
 *
 * console.log(other);
 * // => [1, 2, 3, [4]]
 *
 * console.log(array);
 * // => [1]
 */
function concat() {
  var length = arguments.length;
  if (!length) {
    return [];
  }
  var args = Array(length - 1),
      array = arguments[0],
      index = length;

  while (index--) {
    args[index - 1] = arguments[index];
  }
  return arrayPush(isArray(array) ? copyArray(array) : [array], baseFlatten(args, 1));
}

module.exports = concat;
";
        
        $__internal_e5c8ef62c98c05f16304bbb2fcb7eddc24d995883ad3affc978e2431b4a6ccc9->leave($__internal_e5c8ef62c98c05f16304bbb2fcb7eddc24d995883ad3affc978e2431b4a6ccc9_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/lodash/concat.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("var arrayPush = require('./_arrayPush'),
    baseFlatten = require('./_baseFlatten'),
    copyArray = require('./_copyArray'),
    isArray = require('./isArray');

/**
 * Creates a new array concatenating `array` with any additional arrays
 * and/or values.
 *
 * @static
 * @memberOf _
 * @since 4.0.0
 * @category Array
 * @param {Array} array The array to concatenate.
 * @param {...*} [values] The values to concatenate.
 * @returns {Array} Returns the new concatenated array.
 * @example
 *
 * var array = [1];
 * var other = _.concat(array, 2, [3], [[4]]);
 *
 * console.log(other);
 * // => [1, 2, 3, [4]]
 *
 * console.log(array);
 * // => [1]
 */
function concat() {
  var length = arguments.length;
  if (!length) {
    return [];
  }
  var args = Array(length - 1),
      array = arguments[0],
      index = length;

  while (index--) {
    args[index - 1] = arguments[index];
  }
  return arrayPush(isArray(array) ? copyArray(array) : [array], baseFlatten(args, 1));
}

module.exports = concat;
", "node_modules/lodash/concat.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/lodash/concat.js");
    }
}
