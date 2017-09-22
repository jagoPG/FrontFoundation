<?php

/* node_modules/lodash/zip.js */
class __TwigTemplate_c1a1c1d5bfe71f3c736ded9c2f6ce4baa04bd7c84e489c4edb2910bae688ee99 extends Twig_Template
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
        $__internal_498118140a54f9ac090c4b4c8075a63c36b1c62584f4f473dae0116afb669c52 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_498118140a54f9ac090c4b4c8075a63c36b1c62584f4f473dae0116afb669c52->enter($__internal_498118140a54f9ac090c4b4c8075a63c36b1c62584f4f473dae0116afb669c52_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/lodash/zip.js"));

        // line 1
        echo "var baseRest = require('./_baseRest'),
    unzip = require('./unzip');

/**
 * Creates an array of grouped elements, the first of which contains the
 * first elements of the given arrays, the second of which contains the
 * second elements of the given arrays, and so on.
 *
 * @static
 * @memberOf _
 * @since 0.1.0
 * @category Array
 * @param {...Array} [arrays] The arrays to process.
 * @returns {Array} Returns the new array of grouped elements.
 * @example
 *
 * _.zip(['a', 'b'], [1, 2], [true, false]);
 * // => [['a', 1, true], ['b', 2, false]]
 */
var zip = baseRest(unzip);

module.exports = zip;
";
        
        $__internal_498118140a54f9ac090c4b4c8075a63c36b1c62584f4f473dae0116afb669c52->leave($__internal_498118140a54f9ac090c4b4c8075a63c36b1c62584f4f473dae0116afb669c52_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/lodash/zip.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("var baseRest = require('./_baseRest'),
    unzip = require('./unzip');

/**
 * Creates an array of grouped elements, the first of which contains the
 * first elements of the given arrays, the second of which contains the
 * second elements of the given arrays, and so on.
 *
 * @static
 * @memberOf _
 * @since 0.1.0
 * @category Array
 * @param {...Array} [arrays] The arrays to process.
 * @returns {Array} Returns the new array of grouped elements.
 * @example
 *
 * _.zip(['a', 'b'], [1, 2], [true, false]);
 * // => [['a', 1, true], ['b', 2, false]]
 */
var zip = baseRest(unzip);

module.exports = zip;
", "node_modules/lodash/zip.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/lodash/zip.js");
    }
}
