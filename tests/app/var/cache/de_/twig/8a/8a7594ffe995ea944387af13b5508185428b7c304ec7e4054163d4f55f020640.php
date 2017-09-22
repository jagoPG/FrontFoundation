<?php

/* node_modules/lodash/_arrayIncludesWith.js */
class __TwigTemplate_e1d99e39b5fd4b61b9ea973fef6704a1cdd5b6e1f170ad294fe08ed9cdd9aa07 extends Twig_Template
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
        $__internal_a4be3495349610a82e90452ece4a93dce6f4842645b3dc7c54fc256bfe6810dd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a4be3495349610a82e90452ece4a93dce6f4842645b3dc7c54fc256bfe6810dd->enter($__internal_a4be3495349610a82e90452ece4a93dce6f4842645b3dc7c54fc256bfe6810dd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/lodash/_arrayIncludesWith.js"));

        // line 1
        echo "/**
 * This function is like `arrayIncludes` except that it accepts a comparator.
 *
 * @private
 * @param {Array} [array] The array to inspect.
 * @param {*} target The value to search for.
 * @param {Function} comparator The comparator invoked per element.
 * @returns {boolean} Returns `true` if `target` is found, else `false`.
 */
function arrayIncludesWith(array, value, comparator) {
  var index = -1,
      length = array == null ? 0 : array.length;

  while (++index < length) {
    if (comparator(value, array[index])) {
      return true;
    }
  }
  return false;
}

module.exports = arrayIncludesWith;
";
        
        $__internal_a4be3495349610a82e90452ece4a93dce6f4842645b3dc7c54fc256bfe6810dd->leave($__internal_a4be3495349610a82e90452ece4a93dce6f4842645b3dc7c54fc256bfe6810dd_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/lodash/_arrayIncludesWith.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("/**
 * This function is like `arrayIncludes` except that it accepts a comparator.
 *
 * @private
 * @param {Array} [array] The array to inspect.
 * @param {*} target The value to search for.
 * @param {Function} comparator The comparator invoked per element.
 * @returns {boolean} Returns `true` if `target` is found, else `false`.
 */
function arrayIncludesWith(array, value, comparator) {
  var index = -1,
      length = array == null ? 0 : array.length;

  while (++index < length) {
    if (comparator(value, array[index])) {
      return true;
    }
  }
  return false;
}

module.exports = arrayIncludesWith;
", "node_modules/lodash/_arrayIncludesWith.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/lodash/_arrayIncludesWith.js");
    }
}
