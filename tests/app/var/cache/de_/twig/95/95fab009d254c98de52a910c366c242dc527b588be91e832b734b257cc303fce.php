<?php

/* node_modules/lodash/unzipWith.js */
class __TwigTemplate_bbd932aba48b14eace2c7ce639785ae917cb6e3f04a6c9246edd93eed2efd950 extends Twig_Template
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
        $__internal_3aef3ad43f6c2e57f68af77135db192a1222a20836c25485ec374262bb0c7489 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3aef3ad43f6c2e57f68af77135db192a1222a20836c25485ec374262bb0c7489->enter($__internal_3aef3ad43f6c2e57f68af77135db192a1222a20836c25485ec374262bb0c7489_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/lodash/unzipWith.js"));

        // line 1
        echo "var apply = require('./_apply'),
    arrayMap = require('./_arrayMap'),
    unzip = require('./unzip');

/**
 * This method is like `_.unzip` except that it accepts `iteratee` to specify
 * how regrouped values should be combined. The iteratee is invoked with the
 * elements of each group: (...group).
 *
 * @static
 * @memberOf _
 * @since 3.8.0
 * @category Array
 * @param {Array} array The array of grouped elements to process.
 * @param {Function} [iteratee=_.identity] The function to combine
 *  regrouped values.
 * @returns {Array} Returns the new array of regrouped elements.
 * @example
 *
 * var zipped = _.zip([1, 2], [10, 20], [100, 200]);
 * // => [[1, 10, 100], [2, 20, 200]]
 *
 * _.unzipWith(zipped, _.add);
 * // => [3, 30, 300]
 */
function unzipWith(array, iteratee) {
  if (!(array && array.length)) {
    return [];
  }
  var result = unzip(array);
  if (iteratee == null) {
    return result;
  }
  return arrayMap(result, function(group) {
    return apply(iteratee, undefined, group);
  });
}

module.exports = unzipWith;
";
        
        $__internal_3aef3ad43f6c2e57f68af77135db192a1222a20836c25485ec374262bb0c7489->leave($__internal_3aef3ad43f6c2e57f68af77135db192a1222a20836c25485ec374262bb0c7489_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/lodash/unzipWith.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("var apply = require('./_apply'),
    arrayMap = require('./_arrayMap'),
    unzip = require('./unzip');

/**
 * This method is like `_.unzip` except that it accepts `iteratee` to specify
 * how regrouped values should be combined. The iteratee is invoked with the
 * elements of each group: (...group).
 *
 * @static
 * @memberOf _
 * @since 3.8.0
 * @category Array
 * @param {Array} array The array of grouped elements to process.
 * @param {Function} [iteratee=_.identity] The function to combine
 *  regrouped values.
 * @returns {Array} Returns the new array of regrouped elements.
 * @example
 *
 * var zipped = _.zip([1, 2], [10, 20], [100, 200]);
 * // => [[1, 10, 100], [2, 20, 200]]
 *
 * _.unzipWith(zipped, _.add);
 * // => [3, 30, 300]
 */
function unzipWith(array, iteratee) {
  if (!(array && array.length)) {
    return [];
  }
  var result = unzip(array);
  if (iteratee == null) {
    return result;
  }
  return arrayMap(result, function(group) {
    return apply(iteratee, undefined, group);
  });
}

module.exports = unzipWith;
", "node_modules/lodash/unzipWith.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/lodash/unzipWith.js");
    }
}
