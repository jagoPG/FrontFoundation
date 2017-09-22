<?php

/* node_modules/lodash/_arrayEvery.js */
class __TwigTemplate_9ec40921339f864aeb16c3dd3977d8a8e7e8e351908edc1dfa7fdc575d214618 extends Twig_Template
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
        $__internal_51470894dd6cf61ced13803ca3c28f195bf58586fbfc1b62c406c74320196ad0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_51470894dd6cf61ced13803ca3c28f195bf58586fbfc1b62c406c74320196ad0->enter($__internal_51470894dd6cf61ced13803ca3c28f195bf58586fbfc1b62c406c74320196ad0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/lodash/_arrayEvery.js"));

        // line 1
        echo "/**
 * A specialized version of `_.every` for arrays without support for
 * iteratee shorthands.
 *
 * @private
 * @param {Array} [array] The array to iterate over.
 * @param {Function} predicate The function invoked per iteration.
 * @returns {boolean} Returns `true` if all elements pass the predicate check,
 *  else `false`.
 */
function arrayEvery(array, predicate) {
  var index = -1,
      length = array == null ? 0 : array.length;

  while (++index < length) {
    if (!predicate(array[index], index, array)) {
      return false;
    }
  }
  return true;
}

module.exports = arrayEvery;
";
        
        $__internal_51470894dd6cf61ced13803ca3c28f195bf58586fbfc1b62c406c74320196ad0->leave($__internal_51470894dd6cf61ced13803ca3c28f195bf58586fbfc1b62c406c74320196ad0_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/lodash/_arrayEvery.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("/**
 * A specialized version of `_.every` for arrays without support for
 * iteratee shorthands.
 *
 * @private
 * @param {Array} [array] The array to iterate over.
 * @param {Function} predicate The function invoked per iteration.
 * @returns {boolean} Returns `true` if all elements pass the predicate check,
 *  else `false`.
 */
function arrayEvery(array, predicate) {
  var index = -1,
      length = array == null ? 0 : array.length;

  while (++index < length) {
    if (!predicate(array[index], index, array)) {
      return false;
    }
  }
  return true;
}

module.exports = arrayEvery;
", "node_modules/lodash/_arrayEvery.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/lodash/_arrayEvery.js");
    }
}
