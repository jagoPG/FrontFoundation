<?php

/* node_modules/lodash/_shuffleSelf.js */
class __TwigTemplate_06cfc4b278e01ce79ac677b81e80a5338f6f0ee05c4c8291100763b2fc74674b extends Twig_Template
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
        $__internal_4e1d218d7d9a4463e6b9eab333bf59cf0d591fa62f6a44a32544bd9c472b3ca5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4e1d218d7d9a4463e6b9eab333bf59cf0d591fa62f6a44a32544bd9c472b3ca5->enter($__internal_4e1d218d7d9a4463e6b9eab333bf59cf0d591fa62f6a44a32544bd9c472b3ca5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/lodash/_shuffleSelf.js"));

        // line 1
        echo "var baseRandom = require('./_baseRandom');

/**
 * A specialized version of `_.shuffle` which mutates and sets the size of `array`.
 *
 * @private
 * @param {Array} array The array to shuffle.
 * @param {number} [size=array.length] The size of `array`.
 * @returns {Array} Returns `array`.
 */
function shuffleSelf(array, size) {
  var index = -1,
      length = array.length,
      lastIndex = length - 1;

  size = size === undefined ? length : size;
  while (++index < size) {
    var rand = baseRandom(index, lastIndex),
        value = array[rand];

    array[rand] = array[index];
    array[index] = value;
  }
  array.length = size;
  return array;
}

module.exports = shuffleSelf;
";
        
        $__internal_4e1d218d7d9a4463e6b9eab333bf59cf0d591fa62f6a44a32544bd9c472b3ca5->leave($__internal_4e1d218d7d9a4463e6b9eab333bf59cf0d591fa62f6a44a32544bd9c472b3ca5_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/lodash/_shuffleSelf.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("var baseRandom = require('./_baseRandom');

/**
 * A specialized version of `_.shuffle` which mutates and sets the size of `array`.
 *
 * @private
 * @param {Array} array The array to shuffle.
 * @param {number} [size=array.length] The size of `array`.
 * @returns {Array} Returns `array`.
 */
function shuffleSelf(array, size) {
  var index = -1,
      length = array.length,
      lastIndex = length - 1;

  size = size === undefined ? length : size;
  while (++index < size) {
    var rand = baseRandom(index, lastIndex),
        value = array[rand];

    array[rand] = array[index];
    array[index] = value;
  }
  array.length = size;
  return array;
}

module.exports = shuffleSelf;
", "node_modules/lodash/_shuffleSelf.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/lodash/_shuffleSelf.js");
    }
}
