<?php

/* node_modules/lodash/fp/convert.js */
class __TwigTemplate_dcf9542cfead8344d98c2694041e481a474fdbf5ae743c05cc8054d01c5ba9bd extends Twig_Template
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
        $__internal_f75150947f277b8598db975eff38986f6f837c0d9294cbd774188d13a8eac8bd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f75150947f277b8598db975eff38986f6f837c0d9294cbd774188d13a8eac8bd->enter($__internal_f75150947f277b8598db975eff38986f6f837c0d9294cbd774188d13a8eac8bd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/lodash/fp/convert.js"));

        // line 1
        echo "var baseConvert = require('./_baseConvert'),
    util = require('./_util');

/**
 * Converts `func` of `name` to an immutable auto-curried iteratee-first data-last
 * version with conversion `options` applied. If `name` is an object its methods
 * will be converted.
 *
 * @param {string} name The name of the function to wrap.
 * @param {Function} [func] The function to wrap.
 * @param {Object} [options] The options object. See `baseConvert` for more details.
 * @returns {Function|Object} Returns the converted function or object.
 */
function convert(name, func, options) {
  return baseConvert(util, name, func, options);
}

module.exports = convert;
";
        
        $__internal_f75150947f277b8598db975eff38986f6f837c0d9294cbd774188d13a8eac8bd->leave($__internal_f75150947f277b8598db975eff38986f6f837c0d9294cbd774188d13a8eac8bd_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/lodash/fp/convert.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("var baseConvert = require('./_baseConvert'),
    util = require('./_util');

/**
 * Converts `func` of `name` to an immutable auto-curried iteratee-first data-last
 * version with conversion `options` applied. If `name` is an object its methods
 * will be converted.
 *
 * @param {string} name The name of the function to wrap.
 * @param {Function} [func] The function to wrap.
 * @param {Object} [options] The options object. See `baseConvert` for more details.
 * @returns {Function|Object} Returns the converted function or object.
 */
function convert(name, func, options) {
  return baseConvert(util, name, func, options);
}

module.exports = convert;
", "node_modules/lodash/fp/convert.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/lodash/fp/convert.js");
    }
}
