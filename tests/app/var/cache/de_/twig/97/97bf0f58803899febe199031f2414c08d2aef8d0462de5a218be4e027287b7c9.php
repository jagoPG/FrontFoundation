<?php

/* node_modules/lodash/_stackHas.js */
class __TwigTemplate_e3bbba731cc1591f2f5bd577de530da4c8d09f6102d9eae05fc74c371f6e38cf extends Twig_Template
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
        $__internal_78628f0da0a9766d01459096a18370ad14c9601c0f9db9e8610596fc08c15418 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_78628f0da0a9766d01459096a18370ad14c9601c0f9db9e8610596fc08c15418->enter($__internal_78628f0da0a9766d01459096a18370ad14c9601c0f9db9e8610596fc08c15418_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/lodash/_stackHas.js"));

        // line 1
        echo "/**
 * Checks if a stack value for `key` exists.
 *
 * @private
 * @name has
 * @memberOf Stack
 * @param {string} key The key of the entry to check.
 * @returns {boolean} Returns `true` if an entry for `key` exists, else `false`.
 */
function stackHas(key) {
  return this.__data__.has(key);
}

module.exports = stackHas;
";
        
        $__internal_78628f0da0a9766d01459096a18370ad14c9601c0f9db9e8610596fc08c15418->leave($__internal_78628f0da0a9766d01459096a18370ad14c9601c0f9db9e8610596fc08c15418_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/lodash/_stackHas.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("/**
 * Checks if a stack value for `key` exists.
 *
 * @private
 * @name has
 * @memberOf Stack
 * @param {string} key The key of the entry to check.
 * @returns {boolean} Returns `true` if an entry for `key` exists, else `false`.
 */
function stackHas(key) {
  return this.__data__.has(key);
}

module.exports = stackHas;
", "node_modules/lodash/_stackHas.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/lodash/_stackHas.js");
    }
}
