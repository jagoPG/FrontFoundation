<?php

/* node_modules/lodash/pullAllWith.js */
class __TwigTemplate_a2396702acbc3696a52aefac6959909cbf5dcba63e65966200f3f550fe33b285 extends Twig_Template
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
        $__internal_78eed8cf03f3b4da52be61939d2cdb1118c27bbf8cf36a42a62311d913d7fcd2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_78eed8cf03f3b4da52be61939d2cdb1118c27bbf8cf36a42a62311d913d7fcd2->enter($__internal_78eed8cf03f3b4da52be61939d2cdb1118c27bbf8cf36a42a62311d913d7fcd2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/lodash/pullAllWith.js"));

        // line 1
        echo "var basePullAll = require('./_basePullAll');

/**
 * This method is like `_.pullAll` except that it accepts `comparator` which
 * is invoked to compare elements of `array` to `values`. The comparator is
 * invoked with two arguments: (arrVal, othVal).
 *
 * **Note:** Unlike `_.differenceWith`, this method mutates `array`.
 *
 * @static
 * @memberOf _
 * @since 4.6.0
 * @category Array
 * @param {Array} array The array to modify.
 * @param {Array} values The values to remove.
 * @param {Function} [comparator] The comparator invoked per element.
 * @returns {Array} Returns `array`.
 * @example
 *
 * var array = [{ 'x': 1, 'y': 2 }, { 'x': 3, 'y': 4 }, { 'x': 5, 'y': 6 }];
 *
 * _.pullAllWith(array, [{ 'x': 3, 'y': 4 }], _.isEqual);
 * console.log(array);
 * // => [{ 'x': 1, 'y': 2 }, { 'x': 5, 'y': 6 }]
 */
function pullAllWith(array, values, comparator) {
  return (array && array.length && values && values.length)
    ? basePullAll(array, values, undefined, comparator)
    : array;
}

module.exports = pullAllWith;
";
        
        $__internal_78eed8cf03f3b4da52be61939d2cdb1118c27bbf8cf36a42a62311d913d7fcd2->leave($__internal_78eed8cf03f3b4da52be61939d2cdb1118c27bbf8cf36a42a62311d913d7fcd2_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/lodash/pullAllWith.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("var basePullAll = require('./_basePullAll');

/**
 * This method is like `_.pullAll` except that it accepts `comparator` which
 * is invoked to compare elements of `array` to `values`. The comparator is
 * invoked with two arguments: (arrVal, othVal).
 *
 * **Note:** Unlike `_.differenceWith`, this method mutates `array`.
 *
 * @static
 * @memberOf _
 * @since 4.6.0
 * @category Array
 * @param {Array} array The array to modify.
 * @param {Array} values The values to remove.
 * @param {Function} [comparator] The comparator invoked per element.
 * @returns {Array} Returns `array`.
 * @example
 *
 * var array = [{ 'x': 1, 'y': 2 }, { 'x': 3, 'y': 4 }, { 'x': 5, 'y': 6 }];
 *
 * _.pullAllWith(array, [{ 'x': 3, 'y': 4 }], _.isEqual);
 * console.log(array);
 * // => [{ 'x': 1, 'y': 2 }, { 'x': 5, 'y': 6 }]
 */
function pullAllWith(array, values, comparator) {
  return (array && array.length && values && values.length)
    ? basePullAll(array, values, undefined, comparator)
    : array;
}

module.exports = pullAllWith;
", "node_modules/lodash/pullAllWith.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/lodash/pullAllWith.js");
    }
}
