<?php

/* node_modules/lodash/_setData.js */
class __TwigTemplate_43e1611e4e1b65324149e84acf13a391448aa03ba4311461873b494558b7c711 extends Twig_Template
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
        $__internal_d624def86a7f9bb85bf7ac6ea807fe658552a86b93238ed43e9a3c934f1bc441 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d624def86a7f9bb85bf7ac6ea807fe658552a86b93238ed43e9a3c934f1bc441->enter($__internal_d624def86a7f9bb85bf7ac6ea807fe658552a86b93238ed43e9a3c934f1bc441_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/lodash/_setData.js"));

        // line 1
        echo "var baseSetData = require('./_baseSetData'),
    shortOut = require('./_shortOut');

/**
 * Sets metadata for `func`.
 *
 * **Note:** If this function becomes hot, i.e. is invoked a lot in a short
 * period of time, it will trip its breaker and transition to an identity
 * function to avoid garbage collection pauses in V8. See
 * [V8 issue 2070](https://bugs.chromium.org/p/v8/issues/detail?id=2070)
 * for more details.
 *
 * @private
 * @param {Function} func The function to associate metadata with.
 * @param {*} data The metadata.
 * @returns {Function} Returns `func`.
 */
var setData = shortOut(baseSetData);

module.exports = setData;
";
        
        $__internal_d624def86a7f9bb85bf7ac6ea807fe658552a86b93238ed43e9a3c934f1bc441->leave($__internal_d624def86a7f9bb85bf7ac6ea807fe658552a86b93238ed43e9a3c934f1bc441_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/lodash/_setData.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("var baseSetData = require('./_baseSetData'),
    shortOut = require('./_shortOut');

/**
 * Sets metadata for `func`.
 *
 * **Note:** If this function becomes hot, i.e. is invoked a lot in a short
 * period of time, it will trip its breaker and transition to an identity
 * function to avoid garbage collection pauses in V8. See
 * [V8 issue 2070](https://bugs.chromium.org/p/v8/issues/detail?id=2070)
 * for more details.
 *
 * @private
 * @param {Function} func The function to associate metadata with.
 * @param {*} data The metadata.
 * @returns {Function} Returns `func`.
 */
var setData = shortOut(baseSetData);

module.exports = setData;
", "node_modules/lodash/_setData.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/lodash/_setData.js");
    }
}
