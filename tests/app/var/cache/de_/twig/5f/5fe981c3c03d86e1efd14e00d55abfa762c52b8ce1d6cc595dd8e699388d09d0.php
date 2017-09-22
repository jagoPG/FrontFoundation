<?php

/* node_modules/lodash/_createRange.js */
class __TwigTemplate_0ea1e1181a7947d15fffa65e4b6ee3e6cdc623f42a5fbcfbbedaaa0d4b496397 extends Twig_Template
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
        $__internal_0f53dd5a5448feb96264745385ba134f89e5396ecf3dfc44c9ebfd0a805b03fe = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0f53dd5a5448feb96264745385ba134f89e5396ecf3dfc44c9ebfd0a805b03fe->enter($__internal_0f53dd5a5448feb96264745385ba134f89e5396ecf3dfc44c9ebfd0a805b03fe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/lodash/_createRange.js"));

        // line 1
        echo "var baseRange = require('./_baseRange'),
    isIterateeCall = require('./_isIterateeCall'),
    toFinite = require('./toFinite');

/**
 * Creates a `_.range` or `_.rangeRight` function.
 *
 * @private
 * @param {boolean} [fromRight] Specify iterating from right to left.
 * @returns {Function} Returns the new range function.
 */
function createRange(fromRight) {
  return function(start, end, step) {
    if (step && typeof step != 'number' && isIterateeCall(start, end, step)) {
      end = step = undefined;
    }
    // Ensure the sign of `-0` is preserved.
    start = toFinite(start);
    if (end === undefined) {
      end = start;
      start = 0;
    } else {
      end = toFinite(end);
    }
    step = step === undefined ? (start < end ? 1 : -1) : toFinite(step);
    return baseRange(start, end, step, fromRight);
  };
}

module.exports = createRange;
";
        
        $__internal_0f53dd5a5448feb96264745385ba134f89e5396ecf3dfc44c9ebfd0a805b03fe->leave($__internal_0f53dd5a5448feb96264745385ba134f89e5396ecf3dfc44c9ebfd0a805b03fe_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/lodash/_createRange.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("var baseRange = require('./_baseRange'),
    isIterateeCall = require('./_isIterateeCall'),
    toFinite = require('./toFinite');

/**
 * Creates a `_.range` or `_.rangeRight` function.
 *
 * @private
 * @param {boolean} [fromRight] Specify iterating from right to left.
 * @returns {Function} Returns the new range function.
 */
function createRange(fromRight) {
  return function(start, end, step) {
    if (step && typeof step != 'number' && isIterateeCall(start, end, step)) {
      end = step = undefined;
    }
    // Ensure the sign of `-0` is preserved.
    start = toFinite(start);
    if (end === undefined) {
      end = start;
      start = 0;
    } else {
      end = toFinite(end);
    }
    step = step === undefined ? (start < end ? 1 : -1) : toFinite(step);
    return baseRange(start, end, step, fromRight);
  };
}

module.exports = createRange;
", "node_modules/lodash/_createRange.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/lodash/_createRange.js");
    }
}
