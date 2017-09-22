<?php

/* node_modules/lodash/_setCacheHas.js */
class __TwigTemplate_f42f3becd7b2f877222d69b526b7cffa13ad05d9be1106d73a32956d54764912 extends Twig_Template
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
        $__internal_2569003019c779f86cefee5a7933b7ec04469acf3c018b22bb5cacf427a67aa4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2569003019c779f86cefee5a7933b7ec04469acf3c018b22bb5cacf427a67aa4->enter($__internal_2569003019c779f86cefee5a7933b7ec04469acf3c018b22bb5cacf427a67aa4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/lodash/_setCacheHas.js"));

        // line 1
        echo "/**
 * Checks if `value` is in the array cache.
 *
 * @private
 * @name has
 * @memberOf SetCache
 * @param {*} value The value to search for.
 * @returns {number} Returns `true` if `value` is found, else `false`.
 */
function setCacheHas(value) {
  return this.__data__.has(value);
}

module.exports = setCacheHas;
";
        
        $__internal_2569003019c779f86cefee5a7933b7ec04469acf3c018b22bb5cacf427a67aa4->leave($__internal_2569003019c779f86cefee5a7933b7ec04469acf3c018b22bb5cacf427a67aa4_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/lodash/_setCacheHas.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("/**
 * Checks if `value` is in the array cache.
 *
 * @private
 * @name has
 * @memberOf SetCache
 * @param {*} value The value to search for.
 * @returns {number} Returns `true` if `value` is found, else `false`.
 */
function setCacheHas(value) {
  return this.__data__.has(value);
}

module.exports = setCacheHas;
", "node_modules/lodash/_setCacheHas.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/lodash/_setCacheHas.js");
    }
}
