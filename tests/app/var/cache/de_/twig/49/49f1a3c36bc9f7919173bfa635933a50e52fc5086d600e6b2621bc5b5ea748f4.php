<?php

/* node_modules/lodash/flip.js */
class __TwigTemplate_c7a644da180036445743cc4db24db274fc1edabf65f66f3d01e0eccc340d6171 extends Twig_Template
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
        $__internal_424a3ddff6813eb3a6655d4b012ce9fe83f8e1f56d462038df4f149911b63934 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_424a3ddff6813eb3a6655d4b012ce9fe83f8e1f56d462038df4f149911b63934->enter($__internal_424a3ddff6813eb3a6655d4b012ce9fe83f8e1f56d462038df4f149911b63934_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/lodash/flip.js"));

        // line 1
        echo "var createWrap = require('./_createWrap');

/** Used to compose bitmasks for function metadata. */
var WRAP_FLIP_FLAG = 512;

/**
 * Creates a function that invokes `func` with arguments reversed.
 *
 * @static
 * @memberOf _
 * @since 4.0.0
 * @category Function
 * @param {Function} func The function to flip arguments for.
 * @returns {Function} Returns the new flipped function.
 * @example
 *
 * var flipped = _.flip(function() {
 *   return _.toArray(arguments);
 * });
 *
 * flipped('a', 'b', 'c', 'd');
 * // => ['d', 'c', 'b', 'a']
 */
function flip(func) {
  return createWrap(func, WRAP_FLIP_FLAG);
}

module.exports = flip;
";
        
        $__internal_424a3ddff6813eb3a6655d4b012ce9fe83f8e1f56d462038df4f149911b63934->leave($__internal_424a3ddff6813eb3a6655d4b012ce9fe83f8e1f56d462038df4f149911b63934_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/lodash/flip.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("var createWrap = require('./_createWrap');

/** Used to compose bitmasks for function metadata. */
var WRAP_FLIP_FLAG = 512;

/**
 * Creates a function that invokes `func` with arguments reversed.
 *
 * @static
 * @memberOf _
 * @since 4.0.0
 * @category Function
 * @param {Function} func The function to flip arguments for.
 * @returns {Function} Returns the new flipped function.
 * @example
 *
 * var flipped = _.flip(function() {
 *   return _.toArray(arguments);
 * });
 *
 * flipped('a', 'b', 'c', 'd');
 * // => ['d', 'c', 'b', 'a']
 */
function flip(func) {
  return createWrap(func, WRAP_FLIP_FLAG);
}

module.exports = flip;
", "node_modules/lodash/flip.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/lodash/flip.js");
    }
}
