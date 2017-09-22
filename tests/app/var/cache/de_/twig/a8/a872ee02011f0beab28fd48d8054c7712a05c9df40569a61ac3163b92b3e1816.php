<?php

/* node_modules/lodash/_baseZipObject.js */
class __TwigTemplate_3feec2c318c7a0f2f19f50f18e47c956162c7af6c5a39254e3f87ae6ad485582 extends Twig_Template
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
        $__internal_aeda21ac68da6c6313ce6f92da68ea7b8f30018b4eb89c275e17751276c281a8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_aeda21ac68da6c6313ce6f92da68ea7b8f30018b4eb89c275e17751276c281a8->enter($__internal_aeda21ac68da6c6313ce6f92da68ea7b8f30018b4eb89c275e17751276c281a8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/lodash/_baseZipObject.js"));

        // line 1
        echo "/**
 * This base implementation of `_.zipObject` which assigns values using `assignFunc`.
 *
 * @private
 * @param {Array} props The property identifiers.
 * @param {Array} values The property values.
 * @param {Function} assignFunc The function to assign values.
 * @returns {Object} Returns the new object.
 */
function baseZipObject(props, values, assignFunc) {
  var index = -1,
      length = props.length,
      valsLength = values.length,
      result = {};

  while (++index < length) {
    var value = index < valsLength ? values[index] : undefined;
    assignFunc(result, props[index], value);
  }
  return result;
}

module.exports = baseZipObject;
";
        
        $__internal_aeda21ac68da6c6313ce6f92da68ea7b8f30018b4eb89c275e17751276c281a8->leave($__internal_aeda21ac68da6c6313ce6f92da68ea7b8f30018b4eb89c275e17751276c281a8_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/lodash/_baseZipObject.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("/**
 * This base implementation of `_.zipObject` which assigns values using `assignFunc`.
 *
 * @private
 * @param {Array} props The property identifiers.
 * @param {Array} values The property values.
 * @param {Function} assignFunc The function to assign values.
 * @returns {Object} Returns the new object.
 */
function baseZipObject(props, values, assignFunc) {
  var index = -1,
      length = props.length,
      valsLength = values.length,
      result = {};

  while (++index < length) {
    var value = index < valsLength ? values[index] : undefined;
    assignFunc(result, props[index], value);
  }
  return result;
}

module.exports = baseZipObject;
", "node_modules/lodash/_baseZipObject.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/lodash/_baseZipObject.js");
    }
}
