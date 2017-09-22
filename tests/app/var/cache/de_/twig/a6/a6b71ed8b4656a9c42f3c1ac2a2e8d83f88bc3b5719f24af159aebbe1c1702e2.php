<?php

/* node_modules/lodash/gt.js */
class __TwigTemplate_1c1edced08e4e93e5f8cd9a042ddb90f9def6fb1ba7bfaf95c3e7d695bfa4ca1 extends Twig_Template
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
        $__internal_1ba5716113ee255f00f54fbd28d681237dfbdc8df027ee47db8729e63efcada8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1ba5716113ee255f00f54fbd28d681237dfbdc8df027ee47db8729e63efcada8->enter($__internal_1ba5716113ee255f00f54fbd28d681237dfbdc8df027ee47db8729e63efcada8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/lodash/gt.js"));

        // line 1
        echo "var baseGt = require('./_baseGt'),
    createRelationalOperation = require('./_createRelationalOperation');

/**
 * Checks if `value` is greater than `other`.
 *
 * @static
 * @memberOf _
 * @since 3.9.0
 * @category Lang
 * @param {*} value The value to compare.
 * @param {*} other The other value to compare.
 * @returns {boolean} Returns `true` if `value` is greater than `other`,
 *  else `false`.
 * @see _.lt
 * @example
 *
 * _.gt(3, 1);
 * // => true
 *
 * _.gt(3, 3);
 * // => false
 *
 * _.gt(1, 3);
 * // => false
 */
var gt = createRelationalOperation(baseGt);

module.exports = gt;
";
        
        $__internal_1ba5716113ee255f00f54fbd28d681237dfbdc8df027ee47db8729e63efcada8->leave($__internal_1ba5716113ee255f00f54fbd28d681237dfbdc8df027ee47db8729e63efcada8_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/lodash/gt.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("var baseGt = require('./_baseGt'),
    createRelationalOperation = require('./_createRelationalOperation');

/**
 * Checks if `value` is greater than `other`.
 *
 * @static
 * @memberOf _
 * @since 3.9.0
 * @category Lang
 * @param {*} value The value to compare.
 * @param {*} other The other value to compare.
 * @returns {boolean} Returns `true` if `value` is greater than `other`,
 *  else `false`.
 * @see _.lt
 * @example
 *
 * _.gt(3, 1);
 * // => true
 *
 * _.gt(3, 3);
 * // => false
 *
 * _.gt(1, 3);
 * // => false
 */
var gt = createRelationalOperation(baseGt);

module.exports = gt;
", "node_modules/lodash/gt.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/lodash/gt.js");
    }
}
