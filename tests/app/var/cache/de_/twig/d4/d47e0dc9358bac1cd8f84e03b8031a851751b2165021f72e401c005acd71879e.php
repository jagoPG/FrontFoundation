<?php

/* node_modules/lodash/_mapCacheHas.js */
class __TwigTemplate_79395a89df168eb23bfba5893868c78144fac67088b4ef1347eb02ec2d38be61 extends Twig_Template
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
        $__internal_ba693d40b0792414496eb947c0140d6da1d3562f0cc1925d6b147189705266f4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ba693d40b0792414496eb947c0140d6da1d3562f0cc1925d6b147189705266f4->enter($__internal_ba693d40b0792414496eb947c0140d6da1d3562f0cc1925d6b147189705266f4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/lodash/_mapCacheHas.js"));

        // line 1
        echo "var getMapData = require('./_getMapData');

/**
 * Checks if a map value for `key` exists.
 *
 * @private
 * @name has
 * @memberOf MapCache
 * @param {string} key The key of the entry to check.
 * @returns {boolean} Returns `true` if an entry for `key` exists, else `false`.
 */
function mapCacheHas(key) {
  return getMapData(this, key).has(key);
}

module.exports = mapCacheHas;
";
        
        $__internal_ba693d40b0792414496eb947c0140d6da1d3562f0cc1925d6b147189705266f4->leave($__internal_ba693d40b0792414496eb947c0140d6da1d3562f0cc1925d6b147189705266f4_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/lodash/_mapCacheHas.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("var getMapData = require('./_getMapData');

/**
 * Checks if a map value for `key` exists.
 *
 * @private
 * @name has
 * @memberOf MapCache
 * @param {string} key The key of the entry to check.
 * @returns {boolean} Returns `true` if an entry for `key` exists, else `false`.
 */
function mapCacheHas(key) {
  return getMapData(this, key).has(key);
}

module.exports = mapCacheHas;
", "node_modules/lodash/_mapCacheHas.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/lodash/_mapCacheHas.js");
    }
}
