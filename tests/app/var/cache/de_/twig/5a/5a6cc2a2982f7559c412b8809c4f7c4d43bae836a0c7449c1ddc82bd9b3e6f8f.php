<?php

/* node_modules/lodash/_baseInRange.js */
class __TwigTemplate_a7f14f929c0c5390571106490e51bd9a743d6e6bb7b59d3670cc687c9ff565fd extends Twig_Template
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
        $__internal_2569db30e5a964e77c1847e0710dfb3f0623b85bd6fca7bd67cdd315756a1fc4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2569db30e5a964e77c1847e0710dfb3f0623b85bd6fca7bd67cdd315756a1fc4->enter($__internal_2569db30e5a964e77c1847e0710dfb3f0623b85bd6fca7bd67cdd315756a1fc4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/lodash/_baseInRange.js"));

        // line 1
        echo "/* Built-in method references for those with the same name as other `lodash` methods. */
var nativeMax = Math.max,
    nativeMin = Math.min;

/**
 * The base implementation of `_.inRange` which doesn't coerce arguments.
 *
 * @private
 * @param {number} number The number to check.
 * @param {number} start The start of the range.
 * @param {number} end The end of the range.
 * @returns {boolean} Returns `true` if `number` is in the range, else `false`.
 */
function baseInRange(number, start, end) {
  return number >= nativeMin(start, end) && number < nativeMax(start, end);
}

module.exports = baseInRange;
";
        
        $__internal_2569db30e5a964e77c1847e0710dfb3f0623b85bd6fca7bd67cdd315756a1fc4->leave($__internal_2569db30e5a964e77c1847e0710dfb3f0623b85bd6fca7bd67cdd315756a1fc4_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/lodash/_baseInRange.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("/* Built-in method references for those with the same name as other `lodash` methods. */
var nativeMax = Math.max,
    nativeMin = Math.min;

/**
 * The base implementation of `_.inRange` which doesn't coerce arguments.
 *
 * @private
 * @param {number} number The number to check.
 * @param {number} start The start of the range.
 * @param {number} end The end of the range.
 * @returns {boolean} Returns `true` if `number` is in the range, else `false`.
 */
function baseInRange(number, start, end) {
  return number >= nativeMin(start, end) && number < nativeMax(start, end);
}

module.exports = baseInRange;
", "node_modules/lodash/_baseInRange.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/lodash/_baseInRange.js");
    }
}
