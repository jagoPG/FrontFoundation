<?php

/* node_modules/lodash/_baseIsArguments.js */
class __TwigTemplate_cf6f3d9c1b49888a144d9c050b4da74784339059ba3f2c0e87ce656d52c96627 extends Twig_Template
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
        $__internal_fa8c785656f66de73a2a36e57f0e1ec96b7b86aded9314d62d792d8aa49557cd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fa8c785656f66de73a2a36e57f0e1ec96b7b86aded9314d62d792d8aa49557cd->enter($__internal_fa8c785656f66de73a2a36e57f0e1ec96b7b86aded9314d62d792d8aa49557cd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/lodash/_baseIsArguments.js"));

        // line 1
        echo "var baseGetTag = require('./_baseGetTag'),
    isObjectLike = require('./isObjectLike');

/** `Object#toString` result references. */
var argsTag = '[object Arguments]';

/**
 * The base implementation of `_.isArguments`.
 *
 * @private
 * @param {*} value The value to check.
 * @returns {boolean} Returns `true` if `value` is an `arguments` object,
 */
function baseIsArguments(value) {
  return isObjectLike(value) && baseGetTag(value) == argsTag;
}

module.exports = baseIsArguments;
";
        
        $__internal_fa8c785656f66de73a2a36e57f0e1ec96b7b86aded9314d62d792d8aa49557cd->leave($__internal_fa8c785656f66de73a2a36e57f0e1ec96b7b86aded9314d62d792d8aa49557cd_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/lodash/_baseIsArguments.js";
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
var argsTag = '[object Arguments]';

/**
 * The base implementation of `_.isArguments`.
 *
 * @private
 * @param {*} value The value to check.
 * @returns {boolean} Returns `true` if `value` is an `arguments` object,
 */
function baseIsArguments(value) {
  return isObjectLike(value) && baseGetTag(value) == argsTag;
}

module.exports = baseIsArguments;
", "node_modules/lodash/_baseIsArguments.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/lodash/_baseIsArguments.js");
    }
}
