<?php

/* node_modules/lodash/nthArg.js */
class __TwigTemplate_1a84a2a578328a0dc7e0bf5316adb0853ee3619cd6a2b35a1561f55a8c2aa816 extends Twig_Template
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
        $__internal_6650be62e2ae76a3bc10bed5fa83e5cd6c62322f4a05b0d4f8991212e5b82ea7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6650be62e2ae76a3bc10bed5fa83e5cd6c62322f4a05b0d4f8991212e5b82ea7->enter($__internal_6650be62e2ae76a3bc10bed5fa83e5cd6c62322f4a05b0d4f8991212e5b82ea7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/lodash/nthArg.js"));

        // line 1
        echo "var baseNth = require('./_baseNth'),
    baseRest = require('./_baseRest'),
    toInteger = require('./toInteger');

/**
 * Creates a function that gets the argument at index `n`. If `n` is negative,
 * the nth argument from the end is returned.
 *
 * @static
 * @memberOf _
 * @since 4.0.0
 * @category Util
 * @param {number} [n=0] The index of the argument to return.
 * @returns {Function} Returns the new pass-thru function.
 * @example
 *
 * var func = _.nthArg(1);
 * func('a', 'b', 'c', 'd');
 * // => 'b'
 *
 * var func = _.nthArg(-2);
 * func('a', 'b', 'c', 'd');
 * // => 'c'
 */
function nthArg(n) {
  n = toInteger(n);
  return baseRest(function(args) {
    return baseNth(args, n);
  });
}

module.exports = nthArg;
";
        
        $__internal_6650be62e2ae76a3bc10bed5fa83e5cd6c62322f4a05b0d4f8991212e5b82ea7->leave($__internal_6650be62e2ae76a3bc10bed5fa83e5cd6c62322f4a05b0d4f8991212e5b82ea7_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/lodash/nthArg.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("var baseNth = require('./_baseNth'),
    baseRest = require('./_baseRest'),
    toInteger = require('./toInteger');

/**
 * Creates a function that gets the argument at index `n`. If `n` is negative,
 * the nth argument from the end is returned.
 *
 * @static
 * @memberOf _
 * @since 4.0.0
 * @category Util
 * @param {number} [n=0] The index of the argument to return.
 * @returns {Function} Returns the new pass-thru function.
 * @example
 *
 * var func = _.nthArg(1);
 * func('a', 'b', 'c', 'd');
 * // => 'b'
 *
 * var func = _.nthArg(-2);
 * func('a', 'b', 'c', 'd');
 * // => 'c'
 */
function nthArg(n) {
  n = toInteger(n);
  return baseRest(function(args) {
    return baseNth(args, n);
  });
}

module.exports = nthArg;
", "node_modules/lodash/nthArg.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/lodash/nthArg.js");
    }
}
