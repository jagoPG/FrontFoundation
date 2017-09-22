<?php

/* node_modules/lodash/_arraySome.js */
class __TwigTemplate_820ceb5258138263c081277ae94d9b0fdc2a6f51cfb21fa45b24bac6578a5e80 extends Twig_Template
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
        $__internal_8b25ed5790b0e326e1a92d41a0abb9890f7a850c1b62540e5d26ccb9ea0cbfe1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8b25ed5790b0e326e1a92d41a0abb9890f7a850c1b62540e5d26ccb9ea0cbfe1->enter($__internal_8b25ed5790b0e326e1a92d41a0abb9890f7a850c1b62540e5d26ccb9ea0cbfe1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/lodash/_arraySome.js"));

        // line 1
        echo "/**
 * A specialized version of `_.some` for arrays without support for iteratee
 * shorthands.
 *
 * @private
 * @param {Array} [array] The array to iterate over.
 * @param {Function} predicate The function invoked per iteration.
 * @returns {boolean} Returns `true` if any element passes the predicate check,
 *  else `false`.
 */
function arraySome(array, predicate) {
  var index = -1,
      length = array == null ? 0 : array.length;

  while (++index < length) {
    if (predicate(array[index], index, array)) {
      return true;
    }
  }
  return false;
}

module.exports = arraySome;
";
        
        $__internal_8b25ed5790b0e326e1a92d41a0abb9890f7a850c1b62540e5d26ccb9ea0cbfe1->leave($__internal_8b25ed5790b0e326e1a92d41a0abb9890f7a850c1b62540e5d26ccb9ea0cbfe1_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/lodash/_arraySome.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("/**
 * A specialized version of `_.some` for arrays without support for iteratee
 * shorthands.
 *
 * @private
 * @param {Array} [array] The array to iterate over.
 * @param {Function} predicate The function invoked per iteration.
 * @returns {boolean} Returns `true` if any element passes the predicate check,
 *  else `false`.
 */
function arraySome(array, predicate) {
  var index = -1,
      length = array == null ? 0 : array.length;

  while (++index < length) {
    if (predicate(array[index], index, array)) {
      return true;
    }
  }
  return false;
}

module.exports = arraySome;
", "node_modules/lodash/_arraySome.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/lodash/_arraySome.js");
    }
}
