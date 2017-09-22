<?php

/* node_modules/lodash/isArray.js */
class __TwigTemplate_5ae6e58375aebb39a2a583295762d56c1959a4f8b6661a5cc540e6f66efd314d extends Twig_Template
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
        $__internal_335e4140b386257c47339f7fcd0fe24fda0f936e0d3260a0dc10beb3f09bbaca = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_335e4140b386257c47339f7fcd0fe24fda0f936e0d3260a0dc10beb3f09bbaca->enter($__internal_335e4140b386257c47339f7fcd0fe24fda0f936e0d3260a0dc10beb3f09bbaca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/lodash/isArray.js"));

        // line 1
        echo "/**
 * Checks if `value` is classified as an `Array` object.
 *
 * @static
 * @memberOf _
 * @since 0.1.0
 * @category Lang
 * @param {*} value The value to check.
 * @returns {boolean} Returns `true` if `value` is an array, else `false`.
 * @example
 *
 * _.isArray([1, 2, 3]);
 * // => true
 *
 * _.isArray(document.body.children);
 * // => false
 *
 * _.isArray('abc');
 * // => false
 *
 * _.isArray(_.noop);
 * // => false
 */
var isArray = Array.isArray;

module.exports = isArray;
";
        
        $__internal_335e4140b386257c47339f7fcd0fe24fda0f936e0d3260a0dc10beb3f09bbaca->leave($__internal_335e4140b386257c47339f7fcd0fe24fda0f936e0d3260a0dc10beb3f09bbaca_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/lodash/isArray.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("/**
 * Checks if `value` is classified as an `Array` object.
 *
 * @static
 * @memberOf _
 * @since 0.1.0
 * @category Lang
 * @param {*} value The value to check.
 * @returns {boolean} Returns `true` if `value` is an array, else `false`.
 * @example
 *
 * _.isArray([1, 2, 3]);
 * // => true
 *
 * _.isArray(document.body.children);
 * // => false
 *
 * _.isArray('abc');
 * // => false
 *
 * _.isArray(_.noop);
 * // => false
 */
var isArray = Array.isArray;

module.exports = isArray;
", "node_modules/lodash/isArray.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/lodash/isArray.js");
    }
}
