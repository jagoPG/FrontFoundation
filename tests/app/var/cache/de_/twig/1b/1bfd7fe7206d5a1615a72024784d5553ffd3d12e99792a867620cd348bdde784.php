<?php

/* node_modules/lodash/wrapperAt.js */
class __TwigTemplate_c64a1334f5578c8f989146695a69672715babf1aaefb1ba6dba87762b93e88a9 extends Twig_Template
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
        $__internal_95590a633ed77f83bcd126850d5addb1d72d8b1ae7ce4deee588c9c140ade8fc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_95590a633ed77f83bcd126850d5addb1d72d8b1ae7ce4deee588c9c140ade8fc->enter($__internal_95590a633ed77f83bcd126850d5addb1d72d8b1ae7ce4deee588c9c140ade8fc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/lodash/wrapperAt.js"));

        // line 1
        echo "var LazyWrapper = require('./_LazyWrapper'),
    LodashWrapper = require('./_LodashWrapper'),
    baseAt = require('./_baseAt'),
    flatRest = require('./_flatRest'),
    isIndex = require('./_isIndex'),
    thru = require('./thru');

/**
 * This method is the wrapper version of `_.at`.
 *
 * @name at
 * @memberOf _
 * @since 1.0.0
 * @category Seq
 * @param {...(string|string[])} [paths] The property paths to pick.
 * @returns {Object} Returns the new `lodash` wrapper instance.
 * @example
 *
 * var object = { 'a': [{ 'b': { 'c': 3 } }, 4] };
 *
 * _(object).at(['a[0].b.c', 'a[1]']).value();
 * // => [3, 4]
 */
var wrapperAt = flatRest(function(paths) {
  var length = paths.length,
      start = length ? paths[0] : 0,
      value = this.__wrapped__,
      interceptor = function(object) { return baseAt(object, paths); };

  if (length > 1 || this.__actions__.length ||
      !(value instanceof LazyWrapper) || !isIndex(start)) {
    return this.thru(interceptor);
  }
  value = value.slice(start, +start + (length ? 1 : 0));
  value.__actions__.push({
    'func': thru,
    'args': [interceptor],
    'thisArg': undefined
  });
  return new LodashWrapper(value, this.__chain__).thru(function(array) {
    if (length && !array.length) {
      array.push(undefined);
    }
    return array;
  });
});

module.exports = wrapperAt;
";
        
        $__internal_95590a633ed77f83bcd126850d5addb1d72d8b1ae7ce4deee588c9c140ade8fc->leave($__internal_95590a633ed77f83bcd126850d5addb1d72d8b1ae7ce4deee588c9c140ade8fc_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/lodash/wrapperAt.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("var LazyWrapper = require('./_LazyWrapper'),
    LodashWrapper = require('./_LodashWrapper'),
    baseAt = require('./_baseAt'),
    flatRest = require('./_flatRest'),
    isIndex = require('./_isIndex'),
    thru = require('./thru');

/**
 * This method is the wrapper version of `_.at`.
 *
 * @name at
 * @memberOf _
 * @since 1.0.0
 * @category Seq
 * @param {...(string|string[])} [paths] The property paths to pick.
 * @returns {Object} Returns the new `lodash` wrapper instance.
 * @example
 *
 * var object = { 'a': [{ 'b': { 'c': 3 } }, 4] };
 *
 * _(object).at(['a[0].b.c', 'a[1]']).value();
 * // => [3, 4]
 */
var wrapperAt = flatRest(function(paths) {
  var length = paths.length,
      start = length ? paths[0] : 0,
      value = this.__wrapped__,
      interceptor = function(object) { return baseAt(object, paths); };

  if (length > 1 || this.__actions__.length ||
      !(value instanceof LazyWrapper) || !isIndex(start)) {
    return this.thru(interceptor);
  }
  value = value.slice(start, +start + (length ? 1 : 0));
  value.__actions__.push({
    'func': thru,
    'args': [interceptor],
    'thisArg': undefined
  });
  return new LodashWrapper(value, this.__chain__).thru(function(array) {
    if (length && !array.length) {
      array.push(undefined);
    }
    return array;
  });
});

module.exports = wrapperAt;
", "node_modules/lodash/wrapperAt.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/lodash/wrapperAt.js");
    }
}
