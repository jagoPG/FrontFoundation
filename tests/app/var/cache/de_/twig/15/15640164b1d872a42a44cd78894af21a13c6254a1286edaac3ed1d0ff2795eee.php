<?php

/* node_modules/lodash/_baseSetData.js */
class __TwigTemplate_c460e8a37025a522cef0f583335b5af053b69215e1c5da48430b4c1489c7cf18 extends Twig_Template
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
        $__internal_643b78f6a54db3552e1d691367f6c9e698f3aaa26795ac585eaf3427b2302a6b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_643b78f6a54db3552e1d691367f6c9e698f3aaa26795ac585eaf3427b2302a6b->enter($__internal_643b78f6a54db3552e1d691367f6c9e698f3aaa26795ac585eaf3427b2302a6b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/lodash/_baseSetData.js"));

        // line 1
        echo "var identity = require('./identity'),
    metaMap = require('./_metaMap');

/**
 * The base implementation of `setData` without support for hot loop shorting.
 *
 * @private
 * @param {Function} func The function to associate metadata with.
 * @param {*} data The metadata.
 * @returns {Function} Returns `func`.
 */
var baseSetData = !metaMap ? identity : function(func, data) {
  metaMap.set(func, data);
  return func;
};

module.exports = baseSetData;
";
        
        $__internal_643b78f6a54db3552e1d691367f6c9e698f3aaa26795ac585eaf3427b2302a6b->leave($__internal_643b78f6a54db3552e1d691367f6c9e698f3aaa26795ac585eaf3427b2302a6b_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/lodash/_baseSetData.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("var identity = require('./identity'),
    metaMap = require('./_metaMap');

/**
 * The base implementation of `setData` without support for hot loop shorting.
 *
 * @private
 * @param {Function} func The function to associate metadata with.
 * @param {*} data The metadata.
 * @returns {Function} Returns `func`.
 */
var baseSetData = !metaMap ? identity : function(func, data) {
  metaMap.set(func, data);
  return func;
};

module.exports = baseSetData;
", "node_modules/lodash/_baseSetData.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/lodash/_baseSetData.js");
    }
}
