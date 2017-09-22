<?php

/* node_modules/lodash/initial.js */
class __TwigTemplate_adc42a62e6362aae1ecdab9077042761b59bc2251e8fe393a312742fdbbd3f9e extends Twig_Template
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
        $__internal_f2d2a1850c95e7abb0450e736422bf47674906e464e7c47e463f5e13fd90da8d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f2d2a1850c95e7abb0450e736422bf47674906e464e7c47e463f5e13fd90da8d->enter($__internal_f2d2a1850c95e7abb0450e736422bf47674906e464e7c47e463f5e13fd90da8d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/lodash/initial.js"));

        // line 1
        echo "var baseSlice = require('./_baseSlice');

/**
 * Gets all but the last element of `array`.
 *
 * @static
 * @memberOf _
 * @since 0.1.0
 * @category Array
 * @param {Array} array The array to query.
 * @returns {Array} Returns the slice of `array`.
 * @example
 *
 * _.initial([1, 2, 3]);
 * // => [1, 2]
 */
function initial(array) {
  var length = array == null ? 0 : array.length;
  return length ? baseSlice(array, 0, -1) : [];
}

module.exports = initial;
";
        
        $__internal_f2d2a1850c95e7abb0450e736422bf47674906e464e7c47e463f5e13fd90da8d->leave($__internal_f2d2a1850c95e7abb0450e736422bf47674906e464e7c47e463f5e13fd90da8d_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/lodash/initial.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("var baseSlice = require('./_baseSlice');

/**
 * Gets all but the last element of `array`.
 *
 * @static
 * @memberOf _
 * @since 0.1.0
 * @category Array
 * @param {Array} array The array to query.
 * @returns {Array} Returns the slice of `array`.
 * @example
 *
 * _.initial([1, 2, 3]);
 * // => [1, 2]
 */
function initial(array) {
  var length = array == null ? 0 : array.length;
  return length ? baseSlice(array, 0, -1) : [];
}

module.exports = initial;
", "node_modules/lodash/initial.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/lodash/initial.js");
    }
}
