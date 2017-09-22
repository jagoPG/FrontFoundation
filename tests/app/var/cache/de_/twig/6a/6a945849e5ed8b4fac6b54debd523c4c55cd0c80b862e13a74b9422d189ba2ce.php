<?php

/* node_modules/lodash/_baseClamp.js */
class __TwigTemplate_ee79b625782a148376ff11f1f85e112f67b90237106be7ec66522218462e500b extends Twig_Template
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
        $__internal_2f680193f3030d0fa2c515b36bfb3643672a30f859be5f08858ba680e349d51d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2f680193f3030d0fa2c515b36bfb3643672a30f859be5f08858ba680e349d51d->enter($__internal_2f680193f3030d0fa2c515b36bfb3643672a30f859be5f08858ba680e349d51d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/lodash/_baseClamp.js"));

        // line 1
        echo "/**
 * The base implementation of `_.clamp` which doesn't coerce arguments.
 *
 * @private
 * @param {number} number The number to clamp.
 * @param {number} [lower] The lower bound.
 * @param {number} upper The upper bound.
 * @returns {number} Returns the clamped number.
 */
function baseClamp(number, lower, upper) {
  if (number === number) {
    if (upper !== undefined) {
      number = number <= upper ? number : upper;
    }
    if (lower !== undefined) {
      number = number >= lower ? number : lower;
    }
  }
  return number;
}

module.exports = baseClamp;
";
        
        $__internal_2f680193f3030d0fa2c515b36bfb3643672a30f859be5f08858ba680e349d51d->leave($__internal_2f680193f3030d0fa2c515b36bfb3643672a30f859be5f08858ba680e349d51d_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/lodash/_baseClamp.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("/**
 * The base implementation of `_.clamp` which doesn't coerce arguments.
 *
 * @private
 * @param {number} number The number to clamp.
 * @param {number} [lower] The lower bound.
 * @param {number} upper The upper bound.
 * @returns {number} Returns the clamped number.
 */
function baseClamp(number, lower, upper) {
  if (number === number) {
    if (upper !== undefined) {
      number = number <= upper ? number : upper;
    }
    if (lower !== undefined) {
      number = number >= lower ? number : lower;
    }
  }
  return number;
}

module.exports = baseClamp;
", "node_modules/lodash/_baseClamp.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/lodash/_baseClamp.js");
    }
}
