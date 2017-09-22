<?php

/* node_modules/lodash/defaultsDeep.js */
class __TwigTemplate_be4711218e72a334a98355f8edec34a9ca4818309fa3ffb52c45dc86fbe50fab extends Twig_Template
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
        $__internal_2edc01af93cb951ca7892474d7dc26fcc4437c41d360efaf865888a304f939f8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2edc01af93cb951ca7892474d7dc26fcc4437c41d360efaf865888a304f939f8->enter($__internal_2edc01af93cb951ca7892474d7dc26fcc4437c41d360efaf865888a304f939f8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/lodash/defaultsDeep.js"));

        // line 1
        echo "var apply = require('./_apply'),
    baseRest = require('./_baseRest'),
    customDefaultsMerge = require('./_customDefaultsMerge'),
    mergeWith = require('./mergeWith');

/**
 * This method is like `_.defaults` except that it recursively assigns
 * default properties.
 *
 * **Note:** This method mutates `object`.
 *
 * @static
 * @memberOf _
 * @since 3.10.0
 * @category Object
 * @param {Object} object The destination object.
 * @param {...Object} [sources] The source objects.
 * @returns {Object} Returns `object`.
 * @see _.defaults
 * @example
 *
 * _.defaultsDeep({ 'a': { 'b': 2 } }, { 'a': { 'b': 1, 'c': 3 } });
 * // => { 'a': { 'b': 2, 'c': 3 } }
 */
var defaultsDeep = baseRest(function(args) {
  args.push(undefined, customDefaultsMerge);
  return apply(mergeWith, undefined, args);
});

module.exports = defaultsDeep;
";
        
        $__internal_2edc01af93cb951ca7892474d7dc26fcc4437c41d360efaf865888a304f939f8->leave($__internal_2edc01af93cb951ca7892474d7dc26fcc4437c41d360efaf865888a304f939f8_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/lodash/defaultsDeep.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("var apply = require('./_apply'),
    baseRest = require('./_baseRest'),
    customDefaultsMerge = require('./_customDefaultsMerge'),
    mergeWith = require('./mergeWith');

/**
 * This method is like `_.defaults` except that it recursively assigns
 * default properties.
 *
 * **Note:** This method mutates `object`.
 *
 * @static
 * @memberOf _
 * @since 3.10.0
 * @category Object
 * @param {Object} object The destination object.
 * @param {...Object} [sources] The source objects.
 * @returns {Object} Returns `object`.
 * @see _.defaults
 * @example
 *
 * _.defaultsDeep({ 'a': { 'b': 2 } }, { 'a': { 'b': 1, 'c': 3 } });
 * // => { 'a': { 'b': 2, 'c': 3 } }
 */
var defaultsDeep = baseRest(function(args) {
  args.push(undefined, customDefaultsMerge);
  return apply(mergeWith, undefined, args);
});

module.exports = defaultsDeep;
", "node_modules/lodash/defaultsDeep.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/lodash/defaultsDeep.js");
    }
}
