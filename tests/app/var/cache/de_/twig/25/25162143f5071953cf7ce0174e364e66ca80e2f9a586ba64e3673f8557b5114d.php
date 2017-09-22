<?php

/* node_modules/lodash/_createBaseFor.js */
class __TwigTemplate_411dea1c3a71b5b842c241e9e16139839e775b8479b3eefac0d00762c4855ef9 extends Twig_Template
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
        $__internal_c22761f6c4793aa2801f1857a9b6e0d8d7b5981bc84193813c9c2935436caafd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c22761f6c4793aa2801f1857a9b6e0d8d7b5981bc84193813c9c2935436caafd->enter($__internal_c22761f6c4793aa2801f1857a9b6e0d8d7b5981bc84193813c9c2935436caafd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/lodash/_createBaseFor.js"));

        // line 1
        echo "/**
 * Creates a base function for methods like `_.forIn` and `_.forOwn`.
 *
 * @private
 * @param {boolean} [fromRight] Specify iterating from right to left.
 * @returns {Function} Returns the new base function.
 */
function createBaseFor(fromRight) {
  return function(object, iteratee, keysFunc) {
    var index = -1,
        iterable = Object(object),
        props = keysFunc(object),
        length = props.length;

    while (length--) {
      var key = props[fromRight ? length : ++index];
      if (iteratee(iterable[key], key, iterable) === false) {
        break;
      }
    }
    return object;
  };
}

module.exports = createBaseFor;
";
        
        $__internal_c22761f6c4793aa2801f1857a9b6e0d8d7b5981bc84193813c9c2935436caafd->leave($__internal_c22761f6c4793aa2801f1857a9b6e0d8d7b5981bc84193813c9c2935436caafd_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/lodash/_createBaseFor.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("/**
 * Creates a base function for methods like `_.forIn` and `_.forOwn`.
 *
 * @private
 * @param {boolean} [fromRight] Specify iterating from right to left.
 * @returns {Function} Returns the new base function.
 */
function createBaseFor(fromRight) {
  return function(object, iteratee, keysFunc) {
    var index = -1,
        iterable = Object(object),
        props = keysFunc(object),
        length = props.length;

    while (length--) {
      var key = props[fromRight ? length : ++index];
      if (iteratee(iterable[key], key, iterable) === false) {
        break;
      }
    }
    return object;
  };
}

module.exports = createBaseFor;
", "node_modules/lodash/_createBaseFor.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/lodash/_createBaseFor.js");
    }
}
