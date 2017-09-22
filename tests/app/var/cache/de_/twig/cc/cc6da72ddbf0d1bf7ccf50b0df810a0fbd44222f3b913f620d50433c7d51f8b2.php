<?php

/* node_modules/lodash/cloneDeep.js */
class __TwigTemplate_58cf49f545f65e65522f974e0a3455793e3703d2ce0d7afe197c20c18c664e4c extends Twig_Template
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
        $__internal_5a0f111e9bef897c644d34db589e897f69173bb86add447a6e531d367e2efcf0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5a0f111e9bef897c644d34db589e897f69173bb86add447a6e531d367e2efcf0->enter($__internal_5a0f111e9bef897c644d34db589e897f69173bb86add447a6e531d367e2efcf0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/lodash/cloneDeep.js"));

        // line 1
        echo "var baseClone = require('./_baseClone');

/** Used to compose bitmasks for cloning. */
var CLONE_DEEP_FLAG = 1,
    CLONE_SYMBOLS_FLAG = 4;

/**
 * This method is like `_.clone` except that it recursively clones `value`.
 *
 * @static
 * @memberOf _
 * @since 1.0.0
 * @category Lang
 * @param {*} value The value to recursively clone.
 * @returns {*} Returns the deep cloned value.
 * @see _.clone
 * @example
 *
 * var objects = [{ 'a': 1 }, { 'b': 2 }];
 *
 * var deep = _.cloneDeep(objects);
 * console.log(deep[0] === objects[0]);
 * // => false
 */
function cloneDeep(value) {
  return baseClone(value, CLONE_DEEP_FLAG | CLONE_SYMBOLS_FLAG);
}

module.exports = cloneDeep;
";
        
        $__internal_5a0f111e9bef897c644d34db589e897f69173bb86add447a6e531d367e2efcf0->leave($__internal_5a0f111e9bef897c644d34db589e897f69173bb86add447a6e531d367e2efcf0_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/lodash/cloneDeep.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("var baseClone = require('./_baseClone');

/** Used to compose bitmasks for cloning. */
var CLONE_DEEP_FLAG = 1,
    CLONE_SYMBOLS_FLAG = 4;

/**
 * This method is like `_.clone` except that it recursively clones `value`.
 *
 * @static
 * @memberOf _
 * @since 1.0.0
 * @category Lang
 * @param {*} value The value to recursively clone.
 * @returns {*} Returns the deep cloned value.
 * @see _.clone
 * @example
 *
 * var objects = [{ 'a': 1 }, { 'b': 2 }];
 *
 * var deep = _.cloneDeep(objects);
 * console.log(deep[0] === objects[0]);
 * // => false
 */
function cloneDeep(value) {
  return baseClone(value, CLONE_DEEP_FLAG | CLONE_SYMBOLS_FLAG);
}

module.exports = cloneDeep;
", "node_modules/lodash/cloneDeep.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/lodash/cloneDeep.js");
    }
}
