<?php

/* node_modules/lodash/capitalize.js */
class __TwigTemplate_a7ff351d65deda6293ce4f714374294b0bf60d15ee11150f2c87ad5a5577ff13 extends Twig_Template
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
        $__internal_13c85ba6232a02ea45c4d4f071ab6dd7afc5d6538821071bd52f26d7ae85f403 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_13c85ba6232a02ea45c4d4f071ab6dd7afc5d6538821071bd52f26d7ae85f403->enter($__internal_13c85ba6232a02ea45c4d4f071ab6dd7afc5d6538821071bd52f26d7ae85f403_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/lodash/capitalize.js"));

        // line 1
        echo "var toString = require('./toString'),
    upperFirst = require('./upperFirst');

/**
 * Converts the first character of `string` to upper case and the remaining
 * to lower case.
 *
 * @static
 * @memberOf _
 * @since 3.0.0
 * @category String
 * @param {string} [string=''] The string to capitalize.
 * @returns {string} Returns the capitalized string.
 * @example
 *
 * _.capitalize('FRED');
 * // => 'Fred'
 */
function capitalize(string) {
  return upperFirst(toString(string).toLowerCase());
}

module.exports = capitalize;
";
        
        $__internal_13c85ba6232a02ea45c4d4f071ab6dd7afc5d6538821071bd52f26d7ae85f403->leave($__internal_13c85ba6232a02ea45c4d4f071ab6dd7afc5d6538821071bd52f26d7ae85f403_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/lodash/capitalize.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("var toString = require('./toString'),
    upperFirst = require('./upperFirst');

/**
 * Converts the first character of `string` to upper case and the remaining
 * to lower case.
 *
 * @static
 * @memberOf _
 * @since 3.0.0
 * @category String
 * @param {string} [string=''] The string to capitalize.
 * @returns {string} Returns the capitalized string.
 * @example
 *
 * _.capitalize('FRED');
 * // => 'Fred'
 */
function capitalize(string) {
  return upperFirst(toString(string).toLowerCase());
}

module.exports = capitalize;
", "node_modules/lodash/capitalize.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/lodash/capitalize.js");
    }
}
