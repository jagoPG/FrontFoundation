<?php

/* node_modules/lodash/isBoolean.js */
class __TwigTemplate_2f2bc8d1d35eec99839eba8914cbae3bb1609bb13fae80a3a5981bd258abce7a extends Twig_Template
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
        $__internal_e3aafe2fe44861d028c7b5a0cb5e2caed508ad23c1c7d2bc63baa727461cd625 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e3aafe2fe44861d028c7b5a0cb5e2caed508ad23c1c7d2bc63baa727461cd625->enter($__internal_e3aafe2fe44861d028c7b5a0cb5e2caed508ad23c1c7d2bc63baa727461cd625_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/lodash/isBoolean.js"));

        // line 1
        echo "var baseGetTag = require('./_baseGetTag'),
    isObjectLike = require('./isObjectLike');

/** `Object#toString` result references. */
var boolTag = '[object Boolean]';

/**
 * Checks if `value` is classified as a boolean primitive or object.
 *
 * @static
 * @memberOf _
 * @since 0.1.0
 * @category Lang
 * @param {*} value The value to check.
 * @returns {boolean} Returns `true` if `value` is a boolean, else `false`.
 * @example
 *
 * _.isBoolean(false);
 * // => true
 *
 * _.isBoolean(null);
 * // => false
 */
function isBoolean(value) {
  return value === true || value === false ||
    (isObjectLike(value) && baseGetTag(value) == boolTag);
}

module.exports = isBoolean;
";
        
        $__internal_e3aafe2fe44861d028c7b5a0cb5e2caed508ad23c1c7d2bc63baa727461cd625->leave($__internal_e3aafe2fe44861d028c7b5a0cb5e2caed508ad23c1c7d2bc63baa727461cd625_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/lodash/isBoolean.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("var baseGetTag = require('./_baseGetTag'),
    isObjectLike = require('./isObjectLike');

/** `Object#toString` result references. */
var boolTag = '[object Boolean]';

/**
 * Checks if `value` is classified as a boolean primitive or object.
 *
 * @static
 * @memberOf _
 * @since 0.1.0
 * @category Lang
 * @param {*} value The value to check.
 * @returns {boolean} Returns `true` if `value` is a boolean, else `false`.
 * @example
 *
 * _.isBoolean(false);
 * // => true
 *
 * _.isBoolean(null);
 * // => false
 */
function isBoolean(value) {
  return value === true || value === false ||
    (isObjectLike(value) && baseGetTag(value) == boolTag);
}

module.exports = isBoolean;
", "node_modules/lodash/isBoolean.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/lodash/isBoolean.js");
    }
}
