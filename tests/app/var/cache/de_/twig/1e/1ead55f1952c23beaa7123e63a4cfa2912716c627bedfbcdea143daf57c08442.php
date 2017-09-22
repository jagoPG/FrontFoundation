<?php

/* node_modules/lodash/_flatRest.js */
class __TwigTemplate_8129954137946fe8e65eb3ed1293da9cadb9cffbea4950ff72d5e1ea7b7ce2a1 extends Twig_Template
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
        $__internal_ed4de90fd75ffb756abd4abf7121054c76db68e3378096dafabe9f77e01fdbea = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ed4de90fd75ffb756abd4abf7121054c76db68e3378096dafabe9f77e01fdbea->enter($__internal_ed4de90fd75ffb756abd4abf7121054c76db68e3378096dafabe9f77e01fdbea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/lodash/_flatRest.js"));

        // line 1
        echo "var flatten = require('./flatten'),
    overRest = require('./_overRest'),
    setToString = require('./_setToString');

/**
 * A specialized version of `baseRest` which flattens the rest array.
 *
 * @private
 * @param {Function} func The function to apply a rest parameter to.
 * @returns {Function} Returns the new function.
 */
function flatRest(func) {
  return setToString(overRest(func, undefined, flatten), func + '');
}

module.exports = flatRest;
";
        
        $__internal_ed4de90fd75ffb756abd4abf7121054c76db68e3378096dafabe9f77e01fdbea->leave($__internal_ed4de90fd75ffb756abd4abf7121054c76db68e3378096dafabe9f77e01fdbea_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/lodash/_flatRest.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("var flatten = require('./flatten'),
    overRest = require('./_overRest'),
    setToString = require('./_setToString');

/**
 * A specialized version of `baseRest` which flattens the rest array.
 *
 * @private
 * @param {Function} func The function to apply a rest parameter to.
 * @returns {Function} Returns the new function.
 */
function flatRest(func) {
  return setToString(overRest(func, undefined, flatten), func + '');
}

module.exports = flatRest;
", "node_modules/lodash/_flatRest.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/lodash/_flatRest.js");
    }
}
