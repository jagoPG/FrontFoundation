<?php

/* node_modules/lodash/matchesProperty.js */
class __TwigTemplate_aa2c65c7da63038c0eeba31bead74fbc80b4d7888c77f29d684d15d5a24f35aa extends Twig_Template
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
        $__internal_72576d541ba9164eec5de5fae060b142f4511eae702fe867598aec49ceaabefc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_72576d541ba9164eec5de5fae060b142f4511eae702fe867598aec49ceaabefc->enter($__internal_72576d541ba9164eec5de5fae060b142f4511eae702fe867598aec49ceaabefc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/lodash/matchesProperty.js"));

        // line 1
        echo "var baseClone = require('./_baseClone'),
    baseMatchesProperty = require('./_baseMatchesProperty');

/** Used to compose bitmasks for cloning. */
var CLONE_DEEP_FLAG = 1;

/**
 * Creates a function that performs a partial deep comparison between the
 * value at `path` of a given object to `srcValue`, returning `true` if the
 * object value is equivalent, else `false`.
 *
 * **Note:** Partial comparisons will match empty array and empty object
 * `srcValue` values against any array or object value, respectively. See
 * `_.isEqual` for a list of supported value comparisons.
 *
 * @static
 * @memberOf _
 * @since 3.2.0
 * @category Util
 * @param {Array|string} path The path of the property to get.
 * @param {*} srcValue The value to match.
 * @returns {Function} Returns the new spec function.
 * @example
 *
 * var objects = [
 *   { 'a': 1, 'b': 2, 'c': 3 },
 *   { 'a': 4, 'b': 5, 'c': 6 }
 * ];
 *
 * _.find(objects, _.matchesProperty('a', 4));
 * // => { 'a': 4, 'b': 5, 'c': 6 }
 */
function matchesProperty(path, srcValue) {
  return baseMatchesProperty(path, baseClone(srcValue, CLONE_DEEP_FLAG));
}

module.exports = matchesProperty;
";
        
        $__internal_72576d541ba9164eec5de5fae060b142f4511eae702fe867598aec49ceaabefc->leave($__internal_72576d541ba9164eec5de5fae060b142f4511eae702fe867598aec49ceaabefc_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/lodash/matchesProperty.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("var baseClone = require('./_baseClone'),
    baseMatchesProperty = require('./_baseMatchesProperty');

/** Used to compose bitmasks for cloning. */
var CLONE_DEEP_FLAG = 1;

/**
 * Creates a function that performs a partial deep comparison between the
 * value at `path` of a given object to `srcValue`, returning `true` if the
 * object value is equivalent, else `false`.
 *
 * **Note:** Partial comparisons will match empty array and empty object
 * `srcValue` values against any array or object value, respectively. See
 * `_.isEqual` for a list of supported value comparisons.
 *
 * @static
 * @memberOf _
 * @since 3.2.0
 * @category Util
 * @param {Array|string} path The path of the property to get.
 * @param {*} srcValue The value to match.
 * @returns {Function} Returns the new spec function.
 * @example
 *
 * var objects = [
 *   { 'a': 1, 'b': 2, 'c': 3 },
 *   { 'a': 4, 'b': 5, 'c': 6 }
 * ];
 *
 * _.find(objects, _.matchesProperty('a', 4));
 * // => { 'a': 4, 'b': 5, 'c': 6 }
 */
function matchesProperty(path, srcValue) {
  return baseMatchesProperty(path, baseClone(srcValue, CLONE_DEEP_FLAG));
}

module.exports = matchesProperty;
", "node_modules/lodash/matchesProperty.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/lodash/matchesProperty.js");
    }
}
