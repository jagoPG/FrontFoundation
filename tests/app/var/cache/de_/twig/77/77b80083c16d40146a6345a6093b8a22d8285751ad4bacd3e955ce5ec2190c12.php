<?php

/* node_modules/lodash/ceil.js */
class __TwigTemplate_8f765d0d4811825b6d010d5cba7752f17e5f188d2695825fbe035c0b18fcda99 extends Twig_Template
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
        $__internal_ccf27348c67e6128ffcac10769f6b71487bcafc6bf2734cb6bd6ab6bd330273c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ccf27348c67e6128ffcac10769f6b71487bcafc6bf2734cb6bd6ab6bd330273c->enter($__internal_ccf27348c67e6128ffcac10769f6b71487bcafc6bf2734cb6bd6ab6bd330273c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/lodash/ceil.js"));

        // line 1
        echo "var createRound = require('./_createRound');

/**
 * Computes `number` rounded up to `precision`.
 *
 * @static
 * @memberOf _
 * @since 3.10.0
 * @category Math
 * @param {number} number The number to round up.
 * @param {number} [precision=0] The precision to round up to.
 * @returns {number} Returns the rounded up number.
 * @example
 *
 * _.ceil(4.006);
 * // => 5
 *
 * _.ceil(6.004, 2);
 * // => 6.01
 *
 * _.ceil(6040, -2);
 * // => 6100
 */
var ceil = createRound('ceil');

module.exports = ceil;
";
        
        $__internal_ccf27348c67e6128ffcac10769f6b71487bcafc6bf2734cb6bd6ab6bd330273c->leave($__internal_ccf27348c67e6128ffcac10769f6b71487bcafc6bf2734cb6bd6ab6bd330273c_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/lodash/ceil.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("var createRound = require('./_createRound');

/**
 * Computes `number` rounded up to `precision`.
 *
 * @static
 * @memberOf _
 * @since 3.10.0
 * @category Math
 * @param {number} number The number to round up.
 * @param {number} [precision=0] The precision to round up to.
 * @returns {number} Returns the rounded up number.
 * @example
 *
 * _.ceil(4.006);
 * // => 5
 *
 * _.ceil(6.004, 2);
 * // => 6.01
 *
 * _.ceil(6040, -2);
 * // => 6100
 */
var ceil = createRound('ceil');

module.exports = ceil;
", "node_modules/lodash/ceil.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/lodash/ceil.js");
    }
}
