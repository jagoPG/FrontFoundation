<?php

/* node_modules/lodash/sortedUniq.js */
class __TwigTemplate_8df1389f5ee2f937d3c4e1476d888df92cdbfaa96bbea9147799a03abfcc38dd extends Twig_Template
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
        $__internal_97ff518ec5ff0e78c0a1f52b014c4c5781e386dd32fe61e78b9a26f754eb586e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_97ff518ec5ff0e78c0a1f52b014c4c5781e386dd32fe61e78b9a26f754eb586e->enter($__internal_97ff518ec5ff0e78c0a1f52b014c4c5781e386dd32fe61e78b9a26f754eb586e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/lodash/sortedUniq.js"));

        // line 1
        echo "var baseSortedUniq = require('./_baseSortedUniq');

/**
 * This method is like `_.uniq` except that it's designed and optimized
 * for sorted arrays.
 *
 * @static
 * @memberOf _
 * @since 4.0.0
 * @category Array
 * @param {Array} array The array to inspect.
 * @returns {Array} Returns the new duplicate free array.
 * @example
 *
 * _.sortedUniq([1, 1, 2]);
 * // => [1, 2]
 */
function sortedUniq(array) {
  return (array && array.length)
    ? baseSortedUniq(array)
    : [];
}

module.exports = sortedUniq;
";
        
        $__internal_97ff518ec5ff0e78c0a1f52b014c4c5781e386dd32fe61e78b9a26f754eb586e->leave($__internal_97ff518ec5ff0e78c0a1f52b014c4c5781e386dd32fe61e78b9a26f754eb586e_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/lodash/sortedUniq.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("var baseSortedUniq = require('./_baseSortedUniq');

/**
 * This method is like `_.uniq` except that it's designed and optimized
 * for sorted arrays.
 *
 * @static
 * @memberOf _
 * @since 4.0.0
 * @category Array
 * @param {Array} array The array to inspect.
 * @returns {Array} Returns the new duplicate free array.
 * @example
 *
 * _.sortedUniq([1, 1, 2]);
 * // => [1, 2]
 */
function sortedUniq(array) {
  return (array && array.length)
    ? baseSortedUniq(array)
    : [];
}

module.exports = sortedUniq;
", "node_modules/lodash/sortedUniq.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/lodash/sortedUniq.js");
    }
}
