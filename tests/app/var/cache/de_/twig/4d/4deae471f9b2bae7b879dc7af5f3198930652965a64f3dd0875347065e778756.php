<?php

/* node_modules/lodash/zipObjectDeep.js */
class __TwigTemplate_6769725e65584c2af0877d90618f6e3d3eeb432b36708b0f790b411111581848 extends Twig_Template
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
        $__internal_60f6ee9bbfb4cf66aa52f02ea165702238de72f53bd566b3b15e70f8e5821ff9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_60f6ee9bbfb4cf66aa52f02ea165702238de72f53bd566b3b15e70f8e5821ff9->enter($__internal_60f6ee9bbfb4cf66aa52f02ea165702238de72f53bd566b3b15e70f8e5821ff9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/lodash/zipObjectDeep.js"));

        // line 1
        echo "var baseSet = require('./_baseSet'),
    baseZipObject = require('./_baseZipObject');

/**
 * This method is like `_.zipObject` except that it supports property paths.
 *
 * @static
 * @memberOf _
 * @since 4.1.0
 * @category Array
 * @param {Array} [props=[]] The property identifiers.
 * @param {Array} [values=[]] The property values.
 * @returns {Object} Returns the new object.
 * @example
 *
 * _.zipObjectDeep(['a.b[0].c', 'a.b[1].d'], [1, 2]);
 * // => { 'a': { 'b': [{ 'c': 1 }, { 'd': 2 }] } }
 */
function zipObjectDeep(props, values) {
  return baseZipObject(props || [], values || [], baseSet);
}

module.exports = zipObjectDeep;
";
        
        $__internal_60f6ee9bbfb4cf66aa52f02ea165702238de72f53bd566b3b15e70f8e5821ff9->leave($__internal_60f6ee9bbfb4cf66aa52f02ea165702238de72f53bd566b3b15e70f8e5821ff9_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/lodash/zipObjectDeep.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("var baseSet = require('./_baseSet'),
    baseZipObject = require('./_baseZipObject');

/**
 * This method is like `_.zipObject` except that it supports property paths.
 *
 * @static
 * @memberOf _
 * @since 4.1.0
 * @category Array
 * @param {Array} [props=[]] The property identifiers.
 * @param {Array} [values=[]] The property values.
 * @returns {Object} Returns the new object.
 * @example
 *
 * _.zipObjectDeep(['a.b[0].c', 'a.b[1].d'], [1, 2]);
 * // => { 'a': { 'b': [{ 'c': 1 }, { 'd': 2 }] } }
 */
function zipObjectDeep(props, values) {
  return baseZipObject(props || [], values || [], baseSet);
}

module.exports = zipObjectDeep;
", "node_modules/lodash/zipObjectDeep.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/lodash/zipObjectDeep.js");
    }
}
