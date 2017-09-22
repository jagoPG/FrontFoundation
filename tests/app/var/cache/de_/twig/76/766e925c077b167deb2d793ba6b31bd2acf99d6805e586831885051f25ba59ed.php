<?php

/* node_modules/lodash/_isStrictComparable.js */
class __TwigTemplate_6d7f1833312240f1e29183e0892ba3653b0a9074b43b2ad7cb33912b8e909e6d extends Twig_Template
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
        $__internal_1e36eaaef61bf885bc1a051d026109ca1a283c9196fcb4f582d9a53fd699418f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1e36eaaef61bf885bc1a051d026109ca1a283c9196fcb4f582d9a53fd699418f->enter($__internal_1e36eaaef61bf885bc1a051d026109ca1a283c9196fcb4f582d9a53fd699418f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/lodash/_isStrictComparable.js"));

        // line 1
        echo "var isObject = require('./isObject');

/**
 * Checks if `value` is suitable for strict equality comparisons, i.e. `===`.
 *
 * @private
 * @param {*} value The value to check.
 * @returns {boolean} Returns `true` if `value` if suitable for strict
 *  equality comparisons, else `false`.
 */
function isStrictComparable(value) {
  return value === value && !isObject(value);
}

module.exports = isStrictComparable;
";
        
        $__internal_1e36eaaef61bf885bc1a051d026109ca1a283c9196fcb4f582d9a53fd699418f->leave($__internal_1e36eaaef61bf885bc1a051d026109ca1a283c9196fcb4f582d9a53fd699418f_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/lodash/_isStrictComparable.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("var isObject = require('./isObject');

/**
 * Checks if `value` is suitable for strict equality comparisons, i.e. `===`.
 *
 * @private
 * @param {*} value The value to check.
 * @returns {boolean} Returns `true` if `value` if suitable for strict
 *  equality comparisons, else `false`.
 */
function isStrictComparable(value) {
  return value === value && !isObject(value);
}

module.exports = isStrictComparable;
", "node_modules/lodash/_isStrictComparable.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/lodash/_isStrictComparable.js");
    }
}
