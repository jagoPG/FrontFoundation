<?php

/* node_modules/lodash/_createRound.js */
class __TwigTemplate_0f72b81eea4f76e6466ed893107201dbb92d8c0ed3c6e930d20ba4646ddc003b extends Twig_Template
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
        $__internal_d4b71d4ad82a106ca523a75e0178c65a86103f0f1ff3f1018fa5ca7448286a0c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d4b71d4ad82a106ca523a75e0178c65a86103f0f1ff3f1018fa5ca7448286a0c->enter($__internal_d4b71d4ad82a106ca523a75e0178c65a86103f0f1ff3f1018fa5ca7448286a0c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/lodash/_createRound.js"));

        // line 1
        echo "var toInteger = require('./toInteger'),
    toNumber = require('./toNumber'),
    toString = require('./toString');

/* Built-in method references for those with the same name as other `lodash` methods. */
var nativeMin = Math.min;

/**
 * Creates a function like `_.round`.
 *
 * @private
 * @param {string} methodName The name of the `Math` method to use when rounding.
 * @returns {Function} Returns the new round function.
 */
function createRound(methodName) {
  var func = Math[methodName];
  return function(number, precision) {
    number = toNumber(number);
    precision = precision == null ? 0 : nativeMin(toInteger(precision), 292);
    if (precision) {
      // Shift with exponential notation to avoid floating-point issues.
      // See [MDN](https://mdn.io/round#Examples) for more details.
      var pair = (toString(number) + 'e').split('e'),
          value = func(pair[0] + 'e' + (+pair[1] + precision));

      pair = (toString(value) + 'e').split('e');
      return +(pair[0] + 'e' + (+pair[1] - precision));
    }
    return func(number);
  };
}

module.exports = createRound;
";
        
        $__internal_d4b71d4ad82a106ca523a75e0178c65a86103f0f1ff3f1018fa5ca7448286a0c->leave($__internal_d4b71d4ad82a106ca523a75e0178c65a86103f0f1ff3f1018fa5ca7448286a0c_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/lodash/_createRound.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("var toInteger = require('./toInteger'),
    toNumber = require('./toNumber'),
    toString = require('./toString');

/* Built-in method references for those with the same name as other `lodash` methods. */
var nativeMin = Math.min;

/**
 * Creates a function like `_.round`.
 *
 * @private
 * @param {string} methodName The name of the `Math` method to use when rounding.
 * @returns {Function} Returns the new round function.
 */
function createRound(methodName) {
  var func = Math[methodName];
  return function(number, precision) {
    number = toNumber(number);
    precision = precision == null ? 0 : nativeMin(toInteger(precision), 292);
    if (precision) {
      // Shift with exponential notation to avoid floating-point issues.
      // See [MDN](https://mdn.io/round#Examples) for more details.
      var pair = (toString(number) + 'e').split('e'),
          value = func(pair[0] + 'e' + (+pair[1] + precision));

      pair = (toString(value) + 'e').split('e');
      return +(pair[0] + 'e' + (+pair[1] - precision));
    }
    return func(number);
  };
}

module.exports = createRound;
", "node_modules/lodash/_createRound.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/lodash/_createRound.js");
    }
}
