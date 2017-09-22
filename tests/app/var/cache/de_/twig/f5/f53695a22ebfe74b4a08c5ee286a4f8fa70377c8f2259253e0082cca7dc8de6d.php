<?php

/* node_modules/lodash/findLastKey.js */
class __TwigTemplate_cd046e43ba26000559bb4a6eda011c1a33ea80a570805fafb63e9e5703eec901 extends Twig_Template
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
        $__internal_f7585dbe7dc16323def46eac22a874822054036a263f36497ace6e4f035e620d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f7585dbe7dc16323def46eac22a874822054036a263f36497ace6e4f035e620d->enter($__internal_f7585dbe7dc16323def46eac22a874822054036a263f36497ace6e4f035e620d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/lodash/findLastKey.js"));

        // line 1
        echo "var baseFindKey = require('./_baseFindKey'),
    baseForOwnRight = require('./_baseForOwnRight'),
    baseIteratee = require('./_baseIteratee');

/**
 * This method is like `_.findKey` except that it iterates over elements of
 * a collection in the opposite order.
 *
 * @static
 * @memberOf _
 * @since 2.0.0
 * @category Object
 * @param {Object} object The object to inspect.
 * @param {Function} [predicate=_.identity] The function invoked per iteration.
 * @returns {string|undefined} Returns the key of the matched element,
 *  else `undefined`.
 * @example
 *
 * var users = {
 *   'barney':  { 'age': 36, 'active': true },
 *   'fred':    { 'age': 40, 'active': false },
 *   'pebbles': { 'age': 1,  'active': true }
 * };
 *
 * _.findLastKey(users, function(o) { return o.age < 40; });
 * // => returns 'pebbles' assuming `_.findKey` returns 'barney'
 *
 * // The `_.matches` iteratee shorthand.
 * _.findLastKey(users, { 'age': 36, 'active': true });
 * // => 'barney'
 *
 * // The `_.matchesProperty` iteratee shorthand.
 * _.findLastKey(users, ['active', false]);
 * // => 'fred'
 *
 * // The `_.property` iteratee shorthand.
 * _.findLastKey(users, 'active');
 * // => 'pebbles'
 */
function findLastKey(object, predicate) {
  return baseFindKey(object, baseIteratee(predicate, 3), baseForOwnRight);
}

module.exports = findLastKey;
";
        
        $__internal_f7585dbe7dc16323def46eac22a874822054036a263f36497ace6e4f035e620d->leave($__internal_f7585dbe7dc16323def46eac22a874822054036a263f36497ace6e4f035e620d_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/lodash/findLastKey.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("var baseFindKey = require('./_baseFindKey'),
    baseForOwnRight = require('./_baseForOwnRight'),
    baseIteratee = require('./_baseIteratee');

/**
 * This method is like `_.findKey` except that it iterates over elements of
 * a collection in the opposite order.
 *
 * @static
 * @memberOf _
 * @since 2.0.0
 * @category Object
 * @param {Object} object The object to inspect.
 * @param {Function} [predicate=_.identity] The function invoked per iteration.
 * @returns {string|undefined} Returns the key of the matched element,
 *  else `undefined`.
 * @example
 *
 * var users = {
 *   'barney':  { 'age': 36, 'active': true },
 *   'fred':    { 'age': 40, 'active': false },
 *   'pebbles': { 'age': 1,  'active': true }
 * };
 *
 * _.findLastKey(users, function(o) { return o.age < 40; });
 * // => returns 'pebbles' assuming `_.findKey` returns 'barney'
 *
 * // The `_.matches` iteratee shorthand.
 * _.findLastKey(users, { 'age': 36, 'active': true });
 * // => 'barney'
 *
 * // The `_.matchesProperty` iteratee shorthand.
 * _.findLastKey(users, ['active', false]);
 * // => 'fred'
 *
 * // The `_.property` iteratee shorthand.
 * _.findLastKey(users, 'active');
 * // => 'pebbles'
 */
function findLastKey(object, predicate) {
  return baseFindKey(object, baseIteratee(predicate, 3), baseForOwnRight);
}

module.exports = findLastKey;
", "node_modules/lodash/findLastKey.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/lodash/findLastKey.js");
    }
}
