<?php

/* node_modules/lodash/hasIn.js */
class __TwigTemplate_5e387517872df20e8d8c4156045d3bf60f9b18f170c25dff04e83debe5bffb5b extends Twig_Template
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
        $__internal_596da8296715e5e37a6cd21bb7f8531c6bced67ee6a4ea530d05d63734eec142 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_596da8296715e5e37a6cd21bb7f8531c6bced67ee6a4ea530d05d63734eec142->enter($__internal_596da8296715e5e37a6cd21bb7f8531c6bced67ee6a4ea530d05d63734eec142_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/lodash/hasIn.js"));

        // line 1
        echo "var baseHasIn = require('./_baseHasIn'),
    hasPath = require('./_hasPath');

/**
 * Checks if `path` is a direct or inherited property of `object`.
 *
 * @static
 * @memberOf _
 * @since 4.0.0
 * @category Object
 * @param {Object} object The object to query.
 * @param {Array|string} path The path to check.
 * @returns {boolean} Returns `true` if `path` exists, else `false`.
 * @example
 *
 * var object = _.create({ 'a': _.create({ 'b': 2 }) });
 *
 * _.hasIn(object, 'a');
 * // => true
 *
 * _.hasIn(object, 'a.b');
 * // => true
 *
 * _.hasIn(object, ['a', 'b']);
 * // => true
 *
 * _.hasIn(object, 'b');
 * // => false
 */
function hasIn(object, path) {
  return object != null && hasPath(object, path, baseHasIn);
}

module.exports = hasIn;
";
        
        $__internal_596da8296715e5e37a6cd21bb7f8531c6bced67ee6a4ea530d05d63734eec142->leave($__internal_596da8296715e5e37a6cd21bb7f8531c6bced67ee6a4ea530d05d63734eec142_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/lodash/hasIn.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("var baseHasIn = require('./_baseHasIn'),
    hasPath = require('./_hasPath');

/**
 * Checks if `path` is a direct or inherited property of `object`.
 *
 * @static
 * @memberOf _
 * @since 4.0.0
 * @category Object
 * @param {Object} object The object to query.
 * @param {Array|string} path The path to check.
 * @returns {boolean} Returns `true` if `path` exists, else `false`.
 * @example
 *
 * var object = _.create({ 'a': _.create({ 'b': 2 }) });
 *
 * _.hasIn(object, 'a');
 * // => true
 *
 * _.hasIn(object, 'a.b');
 * // => true
 *
 * _.hasIn(object, ['a', 'b']);
 * // => true
 *
 * _.hasIn(object, 'b');
 * // => false
 */
function hasIn(object, path) {
  return object != null && hasPath(object, path, baseHasIn);
}

module.exports = hasIn;
", "node_modules/lodash/hasIn.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/lodash/hasIn.js");
    }
}
