<?php

/* node_modules/lodash/_castSlice.js */
class __TwigTemplate_41705b997554e8391a294cd3f98ba43991b84c5dbc1b08e78458e45da74043e6 extends Twig_Template
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
        $__internal_8afbe624fa3a86990b2f2ba57a05d454e71f95b272f9f87153dc0c7586a38076 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8afbe624fa3a86990b2f2ba57a05d454e71f95b272f9f87153dc0c7586a38076->enter($__internal_8afbe624fa3a86990b2f2ba57a05d454e71f95b272f9f87153dc0c7586a38076_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/lodash/_castSlice.js"));

        // line 1
        echo "var baseSlice = require('./_baseSlice');

/**
 * Casts `array` to a slice if it's needed.
 *
 * @private
 * @param {Array} array The array to inspect.
 * @param {number} start The start position.
 * @param {number} [end=array.length] The end position.
 * @returns {Array} Returns the cast slice.
 */
function castSlice(array, start, end) {
  var length = array.length;
  end = end === undefined ? length : end;
  return (!start && end >= length) ? array : baseSlice(array, start, end);
}

module.exports = castSlice;
";
        
        $__internal_8afbe624fa3a86990b2f2ba57a05d454e71f95b272f9f87153dc0c7586a38076->leave($__internal_8afbe624fa3a86990b2f2ba57a05d454e71f95b272f9f87153dc0c7586a38076_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/lodash/_castSlice.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("var baseSlice = require('./_baseSlice');

/**
 * Casts `array` to a slice if it's needed.
 *
 * @private
 * @param {Array} array The array to inspect.
 * @param {number} start The start position.
 * @param {number} [end=array.length] The end position.
 * @returns {Array} Returns the cast slice.
 */
function castSlice(array, start, end) {
  var length = array.length;
  end = end === undefined ? length : end;
  return (!start && end >= length) ? array : baseSlice(array, start, end);
}

module.exports = castSlice;
", "node_modules/lodash/_castSlice.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/lodash/_castSlice.js");
    }
}
