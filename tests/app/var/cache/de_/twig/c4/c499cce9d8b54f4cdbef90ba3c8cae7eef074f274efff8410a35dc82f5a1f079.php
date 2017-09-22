<?php

/* node_modules/lodash/overSome.js */
class __TwigTemplate_7645e344eaca96654e12fa10d11df4acebbe11268c7e908598a4b06a93b5d6b0 extends Twig_Template
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
        $__internal_2dfc67cb55a115bb9ea6845bbfb551c45c0bdd2d65e385cf730b0bae769b9d94 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2dfc67cb55a115bb9ea6845bbfb551c45c0bdd2d65e385cf730b0bae769b9d94->enter($__internal_2dfc67cb55a115bb9ea6845bbfb551c45c0bdd2d65e385cf730b0bae769b9d94_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/lodash/overSome.js"));

        // line 1
        echo "var arraySome = require('./_arraySome'),
    createOver = require('./_createOver');

/**
 * Creates a function that checks if **any** of the `predicates` return
 * truthy when invoked with the arguments it receives.
 *
 * @static
 * @memberOf _
 * @since 4.0.0
 * @category Util
 * @param {...(Function|Function[])} [predicates=[_.identity]]
 *  The predicates to check.
 * @returns {Function} Returns the new function.
 * @example
 *
 * var func = _.overSome([Boolean, isFinite]);
 *
 * func('1');
 * // => true
 *
 * func(null);
 * // => true
 *
 * func(NaN);
 * // => false
 */
var overSome = createOver(arraySome);

module.exports = overSome;
";
        
        $__internal_2dfc67cb55a115bb9ea6845bbfb551c45c0bdd2d65e385cf730b0bae769b9d94->leave($__internal_2dfc67cb55a115bb9ea6845bbfb551c45c0bdd2d65e385cf730b0bae769b9d94_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/lodash/overSome.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("var arraySome = require('./_arraySome'),
    createOver = require('./_createOver');

/**
 * Creates a function that checks if **any** of the `predicates` return
 * truthy when invoked with the arguments it receives.
 *
 * @static
 * @memberOf _
 * @since 4.0.0
 * @category Util
 * @param {...(Function|Function[])} [predicates=[_.identity]]
 *  The predicates to check.
 * @returns {Function} Returns the new function.
 * @example
 *
 * var func = _.overSome([Boolean, isFinite]);
 *
 * func('1');
 * // => true
 *
 * func(null);
 * // => true
 *
 * func(NaN);
 * // => false
 */
var overSome = createOver(arraySome);

module.exports = overSome;
", "node_modules/lodash/overSome.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/lodash/overSome.js");
    }
}
