<?php

/* node_modules/lodash/upperFirst.js */
class __TwigTemplate_ee772d03bf138291d5f6b53dcd023ce487ba9858e05e7a9679e6682f7b7ca3cc extends Twig_Template
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
        $__internal_78e8deb5b023428da8261008ef24ec5aa8d00affe17efc3aa899d6590ec98127 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_78e8deb5b023428da8261008ef24ec5aa8d00affe17efc3aa899d6590ec98127->enter($__internal_78e8deb5b023428da8261008ef24ec5aa8d00affe17efc3aa899d6590ec98127_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/lodash/upperFirst.js"));

        // line 1
        echo "var createCaseFirst = require('./_createCaseFirst');

/**
 * Converts the first character of `string` to upper case.
 *
 * @static
 * @memberOf _
 * @since 4.0.0
 * @category String
 * @param {string} [string=''] The string to convert.
 * @returns {string} Returns the converted string.
 * @example
 *
 * _.upperFirst('fred');
 * // => 'Fred'
 *
 * _.upperFirst('FRED');
 * // => 'FRED'
 */
var upperFirst = createCaseFirst('toUpperCase');

module.exports = upperFirst;
";
        
        $__internal_78e8deb5b023428da8261008ef24ec5aa8d00affe17efc3aa899d6590ec98127->leave($__internal_78e8deb5b023428da8261008ef24ec5aa8d00affe17efc3aa899d6590ec98127_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/lodash/upperFirst.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("var createCaseFirst = require('./_createCaseFirst');

/**
 * Converts the first character of `string` to upper case.
 *
 * @static
 * @memberOf _
 * @since 4.0.0
 * @category String
 * @param {string} [string=''] The string to convert.
 * @returns {string} Returns the converted string.
 * @example
 *
 * _.upperFirst('fred');
 * // => 'Fred'
 *
 * _.upperFirst('FRED');
 * // => 'FRED'
 */
var upperFirst = createCaseFirst('toUpperCase');

module.exports = upperFirst;
", "node_modules/lodash/upperFirst.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/lodash/upperFirst.js");
    }
}
