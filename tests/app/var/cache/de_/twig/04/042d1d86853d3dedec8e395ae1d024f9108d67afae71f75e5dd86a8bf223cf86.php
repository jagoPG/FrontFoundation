<?php

/* node_modules/lodash/sortedUniqBy.js */
class __TwigTemplate_60da6ebfa5ae00eb9e53b53eafb46b8140d67fa9b6c117ebc0824b5b733cfa3c extends Twig_Template
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
        $__internal_6a0427f0c077c4165c67c4602af6a0a1217bd4ab1d967dd85dd78688230255f9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6a0427f0c077c4165c67c4602af6a0a1217bd4ab1d967dd85dd78688230255f9->enter($__internal_6a0427f0c077c4165c67c4602af6a0a1217bd4ab1d967dd85dd78688230255f9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/lodash/sortedUniqBy.js"));

        // line 1
        echo "var baseIteratee = require('./_baseIteratee'),
    baseSortedUniq = require('./_baseSortedUniq');

/**
 * This method is like `_.uniqBy` except that it's designed and optimized
 * for sorted arrays.
 *
 * @static
 * @memberOf _
 * @since 4.0.0
 * @category Array
 * @param {Array} array The array to inspect.
 * @param {Function} [iteratee] The iteratee invoked per element.
 * @returns {Array} Returns the new duplicate free array.
 * @example
 *
 * _.sortedUniqBy([1.1, 1.2, 2.3, 2.4], Math.floor);
 * // => [1.1, 2.3]
 */
function sortedUniqBy(array, iteratee) {
  return (array && array.length)
    ? baseSortedUniq(array, baseIteratee(iteratee, 2))
    : [];
}

module.exports = sortedUniqBy;
";
        
        $__internal_6a0427f0c077c4165c67c4602af6a0a1217bd4ab1d967dd85dd78688230255f9->leave($__internal_6a0427f0c077c4165c67c4602af6a0a1217bd4ab1d967dd85dd78688230255f9_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/lodash/sortedUniqBy.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("var baseIteratee = require('./_baseIteratee'),
    baseSortedUniq = require('./_baseSortedUniq');

/**
 * This method is like `_.uniqBy` except that it's designed and optimized
 * for sorted arrays.
 *
 * @static
 * @memberOf _
 * @since 4.0.0
 * @category Array
 * @param {Array} array The array to inspect.
 * @param {Function} [iteratee] The iteratee invoked per element.
 * @returns {Array} Returns the new duplicate free array.
 * @example
 *
 * _.sortedUniqBy([1.1, 1.2, 2.3, 2.4], Math.floor);
 * // => [1.1, 2.3]
 */
function sortedUniqBy(array, iteratee) {
  return (array && array.length)
    ? baseSortedUniq(array, baseIteratee(iteratee, 2))
    : [];
}

module.exports = sortedUniqBy;
", "node_modules/lodash/sortedUniqBy.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/lodash/sortedUniqBy.js");
    }
}
