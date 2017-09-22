<?php

/* node_modules/lodash/matches.js */
class __TwigTemplate_af86b4b92a5c263b6026b588a040c2ce7982fa3eab6d0daa8debe97c5bd4096e extends Twig_Template
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
        $__internal_bc3e917915048a9d4e668cbcbd90ccd4a736fa1fefe04d37bf250599baf6623b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bc3e917915048a9d4e668cbcbd90ccd4a736fa1fefe04d37bf250599baf6623b->enter($__internal_bc3e917915048a9d4e668cbcbd90ccd4a736fa1fefe04d37bf250599baf6623b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/lodash/matches.js"));

        // line 1
        echo "var baseClone = require('./_baseClone'),
    baseMatches = require('./_baseMatches');

/** Used to compose bitmasks for cloning. */
var CLONE_DEEP_FLAG = 1;

/**
 * Creates a function that performs a partial deep comparison between a given
 * object and `source`, returning `true` if the given object has equivalent
 * property values, else `false`.
 *
 * **Note:** The created function is equivalent to `_.isMatch` with `source`
 * partially applied.
 *
 * Partial comparisons will match empty array and empty object `source`
 * values against any array or object value, respectively. See `_.isEqual`
 * for a list of supported value comparisons.
 *
 * @static
 * @memberOf _
 * @since 3.0.0
 * @category Util
 * @param {Object} source The object of property values to match.
 * @returns {Function} Returns the new spec function.
 * @example
 *
 * var objects = [
 *   { 'a': 1, 'b': 2, 'c': 3 },
 *   { 'a': 4, 'b': 5, 'c': 6 }
 * ];
 *
 * _.filter(objects, _.matches({ 'a': 4, 'c': 6 }));
 * // => [{ 'a': 4, 'b': 5, 'c': 6 }]
 */
function matches(source) {
  return baseMatches(baseClone(source, CLONE_DEEP_FLAG));
}

module.exports = matches;
";
        
        $__internal_bc3e917915048a9d4e668cbcbd90ccd4a736fa1fefe04d37bf250599baf6623b->leave($__internal_bc3e917915048a9d4e668cbcbd90ccd4a736fa1fefe04d37bf250599baf6623b_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/lodash/matches.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("var baseClone = require('./_baseClone'),
    baseMatches = require('./_baseMatches');

/** Used to compose bitmasks for cloning. */
var CLONE_DEEP_FLAG = 1;

/**
 * Creates a function that performs a partial deep comparison between a given
 * object and `source`, returning `true` if the given object has equivalent
 * property values, else `false`.
 *
 * **Note:** The created function is equivalent to `_.isMatch` with `source`
 * partially applied.
 *
 * Partial comparisons will match empty array and empty object `source`
 * values against any array or object value, respectively. See `_.isEqual`
 * for a list of supported value comparisons.
 *
 * @static
 * @memberOf _
 * @since 3.0.0
 * @category Util
 * @param {Object} source The object of property values to match.
 * @returns {Function} Returns the new spec function.
 * @example
 *
 * var objects = [
 *   { 'a': 1, 'b': 2, 'c': 3 },
 *   { 'a': 4, 'b': 5, 'c': 6 }
 * ];
 *
 * _.filter(objects, _.matches({ 'a': 4, 'c': 6 }));
 * // => [{ 'a': 4, 'b': 5, 'c': 6 }]
 */
function matches(source) {
  return baseMatches(baseClone(source, CLONE_DEEP_FLAG));
}

module.exports = matches;
", "node_modules/lodash/matches.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/lodash/matches.js");
    }
}
