<?php

/* node_modules/lodash/wrapperValue.js */
class __TwigTemplate_027070b08fe47a2273f11c03b3b4672b625f710d923a572d45fb3fa8868befd0 extends Twig_Template
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
        $__internal_0c69ae5a01f5404bf9b95862b0f54aae6d1a6660348c982405dc86c66c345a45 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0c69ae5a01f5404bf9b95862b0f54aae6d1a6660348c982405dc86c66c345a45->enter($__internal_0c69ae5a01f5404bf9b95862b0f54aae6d1a6660348c982405dc86c66c345a45_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/lodash/wrapperValue.js"));

        // line 1
        echo "var baseWrapperValue = require('./_baseWrapperValue');

/**
 * Executes the chain sequence to resolve the unwrapped value.
 *
 * @name value
 * @memberOf _
 * @since 0.1.0
 * @alias toJSON, valueOf
 * @category Seq
 * @returns {*} Returns the resolved unwrapped value.
 * @example
 *
 * _([1, 2, 3]).value();
 * // => [1, 2, 3]
 */
function wrapperValue() {
  return baseWrapperValue(this.__wrapped__, this.__actions__);
}

module.exports = wrapperValue;
";
        
        $__internal_0c69ae5a01f5404bf9b95862b0f54aae6d1a6660348c982405dc86c66c345a45->leave($__internal_0c69ae5a01f5404bf9b95862b0f54aae6d1a6660348c982405dc86c66c345a45_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/lodash/wrapperValue.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("var baseWrapperValue = require('./_baseWrapperValue');

/**
 * Executes the chain sequence to resolve the unwrapped value.
 *
 * @name value
 * @memberOf _
 * @since 0.1.0
 * @alias toJSON, valueOf
 * @category Seq
 * @returns {*} Returns the resolved unwrapped value.
 * @example
 *
 * _([1, 2, 3]).value();
 * // => [1, 2, 3]
 */
function wrapperValue() {
  return baseWrapperValue(this.__wrapped__, this.__actions__);
}

module.exports = wrapperValue;
", "node_modules/lodash/wrapperValue.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/lodash/wrapperValue.js");
    }
}
