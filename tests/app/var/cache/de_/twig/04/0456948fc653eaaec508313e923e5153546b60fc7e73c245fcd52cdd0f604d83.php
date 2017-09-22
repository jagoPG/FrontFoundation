<?php

/* node_modules/lodash/_baseSetToString.js */
class __TwigTemplate_1b82293c271286e893d166c93c356e9be911f00d1baa1562662c37c548d023b1 extends Twig_Template
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
        $__internal_18a13436e8dccef36cd37179232abe8d4615270e534d1b6e16069ed6d94e954a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_18a13436e8dccef36cd37179232abe8d4615270e534d1b6e16069ed6d94e954a->enter($__internal_18a13436e8dccef36cd37179232abe8d4615270e534d1b6e16069ed6d94e954a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/lodash/_baseSetToString.js"));

        // line 1
        echo "var constant = require('./constant'),
    defineProperty = require('./_defineProperty'),
    identity = require('./identity');

/**
 * The base implementation of `setToString` without support for hot loop shorting.
 *
 * @private
 * @param {Function} func The function to modify.
 * @param {Function} string The `toString` result.
 * @returns {Function} Returns `func`.
 */
var baseSetToString = !defineProperty ? identity : function(func, string) {
  return defineProperty(func, 'toString', {
    'configurable': true,
    'enumerable': false,
    'value': constant(string),
    'writable': true
  });
};

module.exports = baseSetToString;
";
        
        $__internal_18a13436e8dccef36cd37179232abe8d4615270e534d1b6e16069ed6d94e954a->leave($__internal_18a13436e8dccef36cd37179232abe8d4615270e534d1b6e16069ed6d94e954a_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/lodash/_baseSetToString.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("var constant = require('./constant'),
    defineProperty = require('./_defineProperty'),
    identity = require('./identity');

/**
 * The base implementation of `setToString` without support for hot loop shorting.
 *
 * @private
 * @param {Function} func The function to modify.
 * @param {Function} string The `toString` result.
 * @returns {Function} Returns `func`.
 */
var baseSetToString = !defineProperty ? identity : function(func, string) {
  return defineProperty(func, 'toString', {
    'configurable': true,
    'enumerable': false,
    'value': constant(string),
    'writable': true
  });
};

module.exports = baseSetToString;
", "node_modules/lodash/_baseSetToString.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/lodash/_baseSetToString.js");
    }
}
