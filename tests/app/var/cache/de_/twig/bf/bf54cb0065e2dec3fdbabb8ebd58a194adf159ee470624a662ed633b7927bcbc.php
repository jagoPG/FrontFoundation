<?php

/* node_modules/lodash/_baseWhile.js */
class __TwigTemplate_ab3b7e34dfb1ad28cf7bccda0cede11c5073432018695e09bffb0132e55942cb extends Twig_Template
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
        $__internal_f84301da4f18336b884eeabcb5ac557b15aa2d1e9cd7f06639d87578d94c3a5d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f84301da4f18336b884eeabcb5ac557b15aa2d1e9cd7f06639d87578d94c3a5d->enter($__internal_f84301da4f18336b884eeabcb5ac557b15aa2d1e9cd7f06639d87578d94c3a5d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/lodash/_baseWhile.js"));

        // line 1
        echo "var baseSlice = require('./_baseSlice');

/**
 * The base implementation of methods like `_.dropWhile` and `_.takeWhile`
 * without support for iteratee shorthands.
 *
 * @private
 * @param {Array} array The array to query.
 * @param {Function} predicate The function invoked per iteration.
 * @param {boolean} [isDrop] Specify dropping elements instead of taking them.
 * @param {boolean} [fromRight] Specify iterating from right to left.
 * @returns {Array} Returns the slice of `array`.
 */
function baseWhile(array, predicate, isDrop, fromRight) {
  var length = array.length,
      index = fromRight ? length : -1;

  while ((fromRight ? index-- : ++index < length) &&
    predicate(array[index], index, array)) {}

  return isDrop
    ? baseSlice(array, (fromRight ? 0 : index), (fromRight ? index + 1 : length))
    : baseSlice(array, (fromRight ? index + 1 : 0), (fromRight ? length : index));
}

module.exports = baseWhile;
";
        
        $__internal_f84301da4f18336b884eeabcb5ac557b15aa2d1e9cd7f06639d87578d94c3a5d->leave($__internal_f84301da4f18336b884eeabcb5ac557b15aa2d1e9cd7f06639d87578d94c3a5d_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/lodash/_baseWhile.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("var baseSlice = require('./_baseSlice');

/**
 * The base implementation of methods like `_.dropWhile` and `_.takeWhile`
 * without support for iteratee shorthands.
 *
 * @private
 * @param {Array} array The array to query.
 * @param {Function} predicate The function invoked per iteration.
 * @param {boolean} [isDrop] Specify dropping elements instead of taking them.
 * @param {boolean} [fromRight] Specify iterating from right to left.
 * @returns {Array} Returns the slice of `array`.
 */
function baseWhile(array, predicate, isDrop, fromRight) {
  var length = array.length,
      index = fromRight ? length : -1;

  while ((fromRight ? index-- : ++index < length) &&
    predicate(array[index], index, array)) {}

  return isDrop
    ? baseSlice(array, (fromRight ? 0 : index), (fromRight ? index + 1 : length))
    : baseSlice(array, (fromRight ? index + 1 : 0), (fromRight ? length : index));
}

module.exports = baseWhile;
", "node_modules/lodash/_baseWhile.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/lodash/_baseWhile.js");
    }
}
