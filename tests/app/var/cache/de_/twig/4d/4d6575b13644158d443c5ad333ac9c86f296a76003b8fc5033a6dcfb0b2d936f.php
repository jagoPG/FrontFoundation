<?php

/* node_modules/lodash/zipObject.js */
class __TwigTemplate_c758a542bb630a453c4ef2e305936dc2db306d011dd56d72113909e3d902c85e extends Twig_Template
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
        $__internal_4bc401b03843523cefd25d3762b314ba08da95ab1585649e9a51dd3e117570af = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4bc401b03843523cefd25d3762b314ba08da95ab1585649e9a51dd3e117570af->enter($__internal_4bc401b03843523cefd25d3762b314ba08da95ab1585649e9a51dd3e117570af_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/lodash/zipObject.js"));

        // line 1
        echo "var assignValue = require('./_assignValue'),
    baseZipObject = require('./_baseZipObject');

/**
 * This method is like `_.fromPairs` except that it accepts two arrays,
 * one of property identifiers and one of corresponding values.
 *
 * @static
 * @memberOf _
 * @since 0.4.0
 * @category Array
 * @param {Array} [props=[]] The property identifiers.
 * @param {Array} [values=[]] The property values.
 * @returns {Object} Returns the new object.
 * @example
 *
 * _.zipObject(['a', 'b'], [1, 2]);
 * // => { 'a': 1, 'b': 2 }
 */
function zipObject(props, values) {
  return baseZipObject(props || [], values || [], assignValue);
}

module.exports = zipObject;
";
        
        $__internal_4bc401b03843523cefd25d3762b314ba08da95ab1585649e9a51dd3e117570af->leave($__internal_4bc401b03843523cefd25d3762b314ba08da95ab1585649e9a51dd3e117570af_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/lodash/zipObject.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("var assignValue = require('./_assignValue'),
    baseZipObject = require('./_baseZipObject');

/**
 * This method is like `_.fromPairs` except that it accepts two arrays,
 * one of property identifiers and one of corresponding values.
 *
 * @static
 * @memberOf _
 * @since 0.4.0
 * @category Array
 * @param {Array} [props=[]] The property identifiers.
 * @param {Array} [values=[]] The property values.
 * @returns {Object} Returns the new object.
 * @example
 *
 * _.zipObject(['a', 'b'], [1, 2]);
 * // => { 'a': 1, 'b': 2 }
 */
function zipObject(props, values) {
  return baseZipObject(props || [], values || [], assignValue);
}

module.exports = zipObject;
", "node_modules/lodash/zipObject.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/lodash/zipObject.js");
    }
}
