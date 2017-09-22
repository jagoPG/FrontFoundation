<?php

/* node_modules/lodash/_baseForRight.js */
class __TwigTemplate_1bd813852e34f2186e6b042197a176ca159d817c4ab5b82eb0bc9767fe50243e extends Twig_Template
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
        $__internal_bf6c17e6abdfb0c600dbc34b94f33262b450e972c62f9cdb4012e7e24dc05652 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bf6c17e6abdfb0c600dbc34b94f33262b450e972c62f9cdb4012e7e24dc05652->enter($__internal_bf6c17e6abdfb0c600dbc34b94f33262b450e972c62f9cdb4012e7e24dc05652_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/lodash/_baseForRight.js"));

        // line 1
        echo "var createBaseFor = require('./_createBaseFor');

/**
 * This function is like `baseFor` except that it iterates over properties
 * in the opposite order.
 *
 * @private
 * @param {Object} object The object to iterate over.
 * @param {Function} iteratee The function invoked per iteration.
 * @param {Function} keysFunc The function to get the keys of `object`.
 * @returns {Object} Returns `object`.
 */
var baseForRight = createBaseFor(true);

module.exports = baseForRight;
";
        
        $__internal_bf6c17e6abdfb0c600dbc34b94f33262b450e972c62f9cdb4012e7e24dc05652->leave($__internal_bf6c17e6abdfb0c600dbc34b94f33262b450e972c62f9cdb4012e7e24dc05652_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/lodash/_baseForRight.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("var createBaseFor = require('./_createBaseFor');

/**
 * This function is like `baseFor` except that it iterates over properties
 * in the opposite order.
 *
 * @private
 * @param {Object} object The object to iterate over.
 * @param {Function} iteratee The function invoked per iteration.
 * @param {Function} keysFunc The function to get the keys of `object`.
 * @returns {Object} Returns `object`.
 */
var baseForRight = createBaseFor(true);

module.exports = baseForRight;
", "node_modules/lodash/_baseForRight.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/lodash/_baseForRight.js");
    }
}
