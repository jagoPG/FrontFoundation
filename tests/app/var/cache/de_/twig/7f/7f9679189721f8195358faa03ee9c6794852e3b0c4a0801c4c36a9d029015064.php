<?php

/* node_modules/lodash/tail.js */
class __TwigTemplate_978a964f577e42b3b35f32199f37483f2f842223600b975850641ec6adc1d5e0 extends Twig_Template
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
        $__internal_554781127047ad9fee25d1bed760450638877f081ba280e491e24086929e5f7c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_554781127047ad9fee25d1bed760450638877f081ba280e491e24086929e5f7c->enter($__internal_554781127047ad9fee25d1bed760450638877f081ba280e491e24086929e5f7c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/lodash/tail.js"));

        // line 1
        echo "var baseSlice = require('./_baseSlice');

/**
 * Gets all but the first element of `array`.
 *
 * @static
 * @memberOf _
 * @since 4.0.0
 * @category Array
 * @param {Array} array The array to query.
 * @returns {Array} Returns the slice of `array`.
 * @example
 *
 * _.tail([1, 2, 3]);
 * // => [2, 3]
 */
function tail(array) {
  var length = array == null ? 0 : array.length;
  return length ? baseSlice(array, 1, length) : [];
}

module.exports = tail;
";
        
        $__internal_554781127047ad9fee25d1bed760450638877f081ba280e491e24086929e5f7c->leave($__internal_554781127047ad9fee25d1bed760450638877f081ba280e491e24086929e5f7c_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/lodash/tail.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("var baseSlice = require('./_baseSlice');

/**
 * Gets all but the first element of `array`.
 *
 * @static
 * @memberOf _
 * @since 4.0.0
 * @category Array
 * @param {Array} array The array to query.
 * @returns {Array} Returns the slice of `array`.
 * @example
 *
 * _.tail([1, 2, 3]);
 * // => [2, 3]
 */
function tail(array) {
  var length = array == null ? 0 : array.length;
  return length ? baseSlice(array, 1, length) : [];
}

module.exports = tail;
", "node_modules/lodash/tail.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/lodash/tail.js");
    }
}
