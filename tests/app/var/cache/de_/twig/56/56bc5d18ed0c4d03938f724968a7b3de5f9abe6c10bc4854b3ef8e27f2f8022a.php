<?php

/* node_modules/lodash/lowerFirst.js */
class __TwigTemplate_2785d4a6a269ad6c84bd1e4206cce2d097b08ea5227cf99dffe0c2f3956ddc74 extends Twig_Template
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
        $__internal_eb215377d268698ac98e1ca8d763be9b6efb2e81733a69554c08be38359bb299 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_eb215377d268698ac98e1ca8d763be9b6efb2e81733a69554c08be38359bb299->enter($__internal_eb215377d268698ac98e1ca8d763be9b6efb2e81733a69554c08be38359bb299_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/lodash/lowerFirst.js"));

        // line 1
        echo "var createCaseFirst = require('./_createCaseFirst');

/**
 * Converts the first character of `string` to lower case.
 *
 * @static
 * @memberOf _
 * @since 4.0.0
 * @category String
 * @param {string} [string=''] The string to convert.
 * @returns {string} Returns the converted string.
 * @example
 *
 * _.lowerFirst('Fred');
 * // => 'fred'
 *
 * _.lowerFirst('FRED');
 * // => 'fRED'
 */
var lowerFirst = createCaseFirst('toLowerCase');

module.exports = lowerFirst;
";
        
        $__internal_eb215377d268698ac98e1ca8d763be9b6efb2e81733a69554c08be38359bb299->leave($__internal_eb215377d268698ac98e1ca8d763be9b6efb2e81733a69554c08be38359bb299_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/lodash/lowerFirst.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("var createCaseFirst = require('./_createCaseFirst');

/**
 * Converts the first character of `string` to lower case.
 *
 * @static
 * @memberOf _
 * @since 4.0.0
 * @category String
 * @param {string} [string=''] The string to convert.
 * @returns {string} Returns the converted string.
 * @example
 *
 * _.lowerFirst('Fred');
 * // => 'fred'
 *
 * _.lowerFirst('FRED');
 * // => 'fRED'
 */
var lowerFirst = createCaseFirst('toLowerCase');

module.exports = lowerFirst;
", "node_modules/lodash/lowerFirst.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/lodash/lowerFirst.js");
    }
}
