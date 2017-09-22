<?php

/* node_modules/lodash/compact.js */
class __TwigTemplate_281949ed8cedabe5b8a6a7e69c9831673ea3498b9dd9cbd719b4501b4070bf7a extends Twig_Template
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
        $__internal_e6fbb216478ce5b8f18b7adefdee4add60133eb92f55ecd68376c64f670a8744 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e6fbb216478ce5b8f18b7adefdee4add60133eb92f55ecd68376c64f670a8744->enter($__internal_e6fbb216478ce5b8f18b7adefdee4add60133eb92f55ecd68376c64f670a8744_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/lodash/compact.js"));

        // line 1
        echo "/**
 * Creates an array with all falsey values removed. The values `false`, `null`,
 * `0`, `\"\"`, `undefined`, and `NaN` are falsey.
 *
 * @static
 * @memberOf _
 * @since 0.1.0
 * @category Array
 * @param {Array} array The array to compact.
 * @returns {Array} Returns the new array of filtered values.
 * @example
 *
 * _.compact([0, 1, false, 2, '', 3]);
 * // => [1, 2, 3]
 */
function compact(array) {
  var index = -1,
      length = array == null ? 0 : array.length,
      resIndex = 0,
      result = [];

  while (++index < length) {
    var value = array[index];
    if (value) {
      result[resIndex++] = value;
    }
  }
  return result;
}

module.exports = compact;
";
        
        $__internal_e6fbb216478ce5b8f18b7adefdee4add60133eb92f55ecd68376c64f670a8744->leave($__internal_e6fbb216478ce5b8f18b7adefdee4add60133eb92f55ecd68376c64f670a8744_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/lodash/compact.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("/**
 * Creates an array with all falsey values removed. The values `false`, `null`,
 * `0`, `\"\"`, `undefined`, and `NaN` are falsey.
 *
 * @static
 * @memberOf _
 * @since 0.1.0
 * @category Array
 * @param {Array} array The array to compact.
 * @returns {Array} Returns the new array of filtered values.
 * @example
 *
 * _.compact([0, 1, false, 2, '', 3]);
 * // => [1, 2, 3]
 */
function compact(array) {
  var index = -1,
      length = array == null ? 0 : array.length,
      resIndex = 0,
      result = [];

  while (++index < length) {
    var value = array[index];
    if (value) {
      result[resIndex++] = value;
    }
  }
  return result;
}

module.exports = compact;
", "node_modules/lodash/compact.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/lodash/compact.js");
    }
}
