<?php

/* node_modules/lodash/pullAll.js */
class __TwigTemplate_5829d7dc8f95531156b667c63961d79a4c5ce6165ce5571e69b9a2d1c38e8fa1 extends Twig_Template
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
        $__internal_6fa9b020272db2342426b2df079e6ee490deb84f5d6b9c26042c52033e7c9c6c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6fa9b020272db2342426b2df079e6ee490deb84f5d6b9c26042c52033e7c9c6c->enter($__internal_6fa9b020272db2342426b2df079e6ee490deb84f5d6b9c26042c52033e7c9c6c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/lodash/pullAll.js"));

        // line 1
        echo "var basePullAll = require('./_basePullAll');

/**
 * This method is like `_.pull` except that it accepts an array of values to remove.
 *
 * **Note:** Unlike `_.difference`, this method mutates `array`.
 *
 * @static
 * @memberOf _
 * @since 4.0.0
 * @category Array
 * @param {Array} array The array to modify.
 * @param {Array} values The values to remove.
 * @returns {Array} Returns `array`.
 * @example
 *
 * var array = ['a', 'b', 'c', 'a', 'b', 'c'];
 *
 * _.pullAll(array, ['a', 'c']);
 * console.log(array);
 * // => ['b', 'b']
 */
function pullAll(array, values) {
  return (array && array.length && values && values.length)
    ? basePullAll(array, values)
    : array;
}

module.exports = pullAll;
";
        
        $__internal_6fa9b020272db2342426b2df079e6ee490deb84f5d6b9c26042c52033e7c9c6c->leave($__internal_6fa9b020272db2342426b2df079e6ee490deb84f5d6b9c26042c52033e7c9c6c_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/lodash/pullAll.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("var basePullAll = require('./_basePullAll');

/**
 * This method is like `_.pull` except that it accepts an array of values to remove.
 *
 * **Note:** Unlike `_.difference`, this method mutates `array`.
 *
 * @static
 * @memberOf _
 * @since 4.0.0
 * @category Array
 * @param {Array} array The array to modify.
 * @param {Array} values The values to remove.
 * @returns {Array} Returns `array`.
 * @example
 *
 * var array = ['a', 'b', 'c', 'a', 'b', 'c'];
 *
 * _.pullAll(array, ['a', 'c']);
 * console.log(array);
 * // => ['b', 'b']
 */
function pullAll(array, values) {
  return (array && array.length && values && values.length)
    ? basePullAll(array, values)
    : array;
}

module.exports = pullAll;
", "node_modules/lodash/pullAll.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/lodash/pullAll.js");
    }
}
