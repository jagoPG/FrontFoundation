<?php

/* node_modules/lodash/_baseIsNaN.js */
class __TwigTemplate_2bee4d05dbdc7d1f83f059d3a29f7bf1cc6b3f2fd3aaabae3cee742c038d3b52 extends Twig_Template
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
        $__internal_07bf5a2075dd49d6a37a843c8065f4a4f27ed4133403007a8f9fa59b3140c532 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_07bf5a2075dd49d6a37a843c8065f4a4f27ed4133403007a8f9fa59b3140c532->enter($__internal_07bf5a2075dd49d6a37a843c8065f4a4f27ed4133403007a8f9fa59b3140c532_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/lodash/_baseIsNaN.js"));

        // line 1
        echo "/**
 * The base implementation of `_.isNaN` without support for number objects.
 *
 * @private
 * @param {*} value The value to check.
 * @returns {boolean} Returns `true` if `value` is `NaN`, else `false`.
 */
function baseIsNaN(value) {
  return value !== value;
}

module.exports = baseIsNaN;
";
        
        $__internal_07bf5a2075dd49d6a37a843c8065f4a4f27ed4133403007a8f9fa59b3140c532->leave($__internal_07bf5a2075dd49d6a37a843c8065f4a4f27ed4133403007a8f9fa59b3140c532_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/lodash/_baseIsNaN.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("/**
 * The base implementation of `_.isNaN` without support for number objects.
 *
 * @private
 * @param {*} value The value to check.
 * @returns {boolean} Returns `true` if `value` is `NaN`, else `false`.
 */
function baseIsNaN(value) {
  return value !== value;
}

module.exports = baseIsNaN;
", "node_modules/lodash/_baseIsNaN.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/lodash/_baseIsNaN.js");
    }
}
