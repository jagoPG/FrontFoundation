<?php

/* node_modules/lodash/_getFuncName.js */
class __TwigTemplate_d52c8a87f4598be865b2a5b15a1de2f9984492c2823e81c0370f32df4f9a8bc6 extends Twig_Template
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
        $__internal_66e00fd7d4c418565fd0cdbe37083868fce1b3f67e31b0ba2b214a2cf1ddb8b3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_66e00fd7d4c418565fd0cdbe37083868fce1b3f67e31b0ba2b214a2cf1ddb8b3->enter($__internal_66e00fd7d4c418565fd0cdbe37083868fce1b3f67e31b0ba2b214a2cf1ddb8b3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/lodash/_getFuncName.js"));

        // line 1
        echo "var realNames = require('./_realNames');

/** Used for built-in method references. */
var objectProto = Object.prototype;

/** Used to check objects for own properties. */
var hasOwnProperty = objectProto.hasOwnProperty;

/**
 * Gets the name of `func`.
 *
 * @private
 * @param {Function} func The function to query.
 * @returns {string} Returns the function name.
 */
function getFuncName(func) {
  var result = (func.name + ''),
      array = realNames[result],
      length = hasOwnProperty.call(realNames, result) ? array.length : 0;

  while (length--) {
    var data = array[length],
        otherFunc = data.func;
    if (otherFunc == null || otherFunc == func) {
      return data.name;
    }
  }
  return result;
}

module.exports = getFuncName;
";
        
        $__internal_66e00fd7d4c418565fd0cdbe37083868fce1b3f67e31b0ba2b214a2cf1ddb8b3->leave($__internal_66e00fd7d4c418565fd0cdbe37083868fce1b3f67e31b0ba2b214a2cf1ddb8b3_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/lodash/_getFuncName.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("var realNames = require('./_realNames');

/** Used for built-in method references. */
var objectProto = Object.prototype;

/** Used to check objects for own properties. */
var hasOwnProperty = objectProto.hasOwnProperty;

/**
 * Gets the name of `func`.
 *
 * @private
 * @param {Function} func The function to query.
 * @returns {string} Returns the function name.
 */
function getFuncName(func) {
  var result = (func.name + ''),
      array = realNames[result],
      length = hasOwnProperty.call(realNames, result) ? array.length : 0;

  while (length--) {
    var data = array[length],
        otherFunc = data.func;
    if (otherFunc == null || otherFunc == func) {
      return data.name;
    }
  }
  return result;
}

module.exports = getFuncName;
", "node_modules/lodash/_getFuncName.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/lodash/_getFuncName.js");
    }
}
