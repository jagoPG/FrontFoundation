<?php

/* node_modules/lodash/_copyArray.js */
class __TwigTemplate_ec9c7155f0acbafb109a7751a04d326fa178d2a52c0b15b4b9afffbe5cb7cab3 extends Twig_Template
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
        $__internal_b1e87374616054506e2ac208bbca83ebd57adb0f6ae372f681879d4c76f78584 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b1e87374616054506e2ac208bbca83ebd57adb0f6ae372f681879d4c76f78584->enter($__internal_b1e87374616054506e2ac208bbca83ebd57adb0f6ae372f681879d4c76f78584_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/lodash/_copyArray.js"));

        // line 1
        echo "/**
 * Copies the values of `source` to `array`.
 *
 * @private
 * @param {Array} source The array to copy values from.
 * @param {Array} [array=[]] The array to copy values to.
 * @returns {Array} Returns `array`.
 */
function copyArray(source, array) {
  var index = -1,
      length = source.length;

  array || (array = Array(length));
  while (++index < length) {
    array[index] = source[index];
  }
  return array;
}

module.exports = copyArray;
";
        
        $__internal_b1e87374616054506e2ac208bbca83ebd57adb0f6ae372f681879d4c76f78584->leave($__internal_b1e87374616054506e2ac208bbca83ebd57adb0f6ae372f681879d4c76f78584_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/lodash/_copyArray.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("/**
 * Copies the values of `source` to `array`.
 *
 * @private
 * @param {Array} source The array to copy values from.
 * @param {Array} [array=[]] The array to copy values to.
 * @returns {Array} Returns `array`.
 */
function copyArray(source, array) {
  var index = -1,
      length = source.length;

  array || (array = Array(length));
  while (++index < length) {
    array[index] = source[index];
  }
  return array;
}

module.exports = copyArray;
", "node_modules/lodash/_copyArray.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/lodash/_copyArray.js");
    }
}
