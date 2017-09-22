<?php

/* node_modules/lodash/_replaceHolders.js */
class __TwigTemplate_5ea4719425608e1b6ebe83e8eddcdecebc83a1558ce142d05f97cf7e68982bc3 extends Twig_Template
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
        $__internal_009358f5d06c102218710e4501d69fa1c2c35728273033161e56bce0f46bc160 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_009358f5d06c102218710e4501d69fa1c2c35728273033161e56bce0f46bc160->enter($__internal_009358f5d06c102218710e4501d69fa1c2c35728273033161e56bce0f46bc160_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/lodash/_replaceHolders.js"));

        // line 1
        echo "/** Used as the internal argument placeholder. */
var PLACEHOLDER = '__lodash_placeholder__';

/**
 * Replaces all `placeholder` elements in `array` with an internal placeholder
 * and returns an array of their indexes.
 *
 * @private
 * @param {Array} array The array to modify.
 * @param {*} placeholder The placeholder to replace.
 * @returns {Array} Returns the new array of placeholder indexes.
 */
function replaceHolders(array, placeholder) {
  var index = -1,
      length = array.length,
      resIndex = 0,
      result = [];

  while (++index < length) {
    var value = array[index];
    if (value === placeholder || value === PLACEHOLDER) {
      array[index] = PLACEHOLDER;
      result[resIndex++] = index;
    }
  }
  return result;
}

module.exports = replaceHolders;
";
        
        $__internal_009358f5d06c102218710e4501d69fa1c2c35728273033161e56bce0f46bc160->leave($__internal_009358f5d06c102218710e4501d69fa1c2c35728273033161e56bce0f46bc160_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/lodash/_replaceHolders.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("/** Used as the internal argument placeholder. */
var PLACEHOLDER = '__lodash_placeholder__';

/**
 * Replaces all `placeholder` elements in `array` with an internal placeholder
 * and returns an array of their indexes.
 *
 * @private
 * @param {Array} array The array to modify.
 * @param {*} placeholder The placeholder to replace.
 * @returns {Array} Returns the new array of placeholder indexes.
 */
function replaceHolders(array, placeholder) {
  var index = -1,
      length = array.length,
      resIndex = 0,
      result = [];

  while (++index < length) {
    var value = array[index];
    if (value === placeholder || value === PLACEHOLDER) {
      array[index] = PLACEHOLDER;
      result[resIndex++] = index;
    }
  }
  return result;
}

module.exports = replaceHolders;
", "node_modules/lodash/_replaceHolders.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/lodash/_replaceHolders.js");
    }
}
