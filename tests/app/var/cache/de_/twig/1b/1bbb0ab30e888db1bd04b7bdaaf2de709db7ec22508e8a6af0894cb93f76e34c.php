<?php

/* node_modules/lodash/_mapCacheDelete.js */
class __TwigTemplate_fc05612b1590743ede7d4fa9dd408ecd4d79bb6d66f44c76901d8a00eba1ae14 extends Twig_Template
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
        $__internal_953cb102252c8b67971ec0f712f7af32f7d703183ddb1416002914cefe852d80 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_953cb102252c8b67971ec0f712f7af32f7d703183ddb1416002914cefe852d80->enter($__internal_953cb102252c8b67971ec0f712f7af32f7d703183ddb1416002914cefe852d80_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/lodash/_mapCacheDelete.js"));

        // line 1
        echo "var getMapData = require('./_getMapData');

/**
 * Removes `key` and its value from the map.
 *
 * @private
 * @name delete
 * @memberOf MapCache
 * @param {string} key The key of the value to remove.
 * @returns {boolean} Returns `true` if the entry was removed, else `false`.
 */
function mapCacheDelete(key) {
  var result = getMapData(this, key)['delete'](key);
  this.size -= result ? 1 : 0;
  return result;
}

module.exports = mapCacheDelete;
";
        
        $__internal_953cb102252c8b67971ec0f712f7af32f7d703183ddb1416002914cefe852d80->leave($__internal_953cb102252c8b67971ec0f712f7af32f7d703183ddb1416002914cefe852d80_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/lodash/_mapCacheDelete.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("var getMapData = require('./_getMapData');

/**
 * Removes `key` and its value from the map.
 *
 * @private
 * @name delete
 * @memberOf MapCache
 * @param {string} key The key of the value to remove.
 * @returns {boolean} Returns `true` if the entry was removed, else `false`.
 */
function mapCacheDelete(key) {
  var result = getMapData(this, key)['delete'](key);
  this.size -= result ? 1 : 0;
  return result;
}

module.exports = mapCacheDelete;
", "node_modules/lodash/_mapCacheDelete.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/lodash/_mapCacheDelete.js");
    }
}
