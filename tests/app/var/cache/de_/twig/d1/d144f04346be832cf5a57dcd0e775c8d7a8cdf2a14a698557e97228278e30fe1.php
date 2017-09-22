<?php

/* node_modules/lodash/_mapCacheClear.js */
class __TwigTemplate_8d02779fe17dabf81ca2af90543ea4d388fb08d37c7b94c81e65c257ea04a073 extends Twig_Template
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
        $__internal_a180e3c3c1bdb235f774fbe3f767dad2c492e05a17108c5fd326939ff6694b61 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a180e3c3c1bdb235f774fbe3f767dad2c492e05a17108c5fd326939ff6694b61->enter($__internal_a180e3c3c1bdb235f774fbe3f767dad2c492e05a17108c5fd326939ff6694b61_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/lodash/_mapCacheClear.js"));

        // line 1
        echo "var Hash = require('./_Hash'),
    ListCache = require('./_ListCache'),
    Map = require('./_Map');

/**
 * Removes all key-value entries from the map.
 *
 * @private
 * @name clear
 * @memberOf MapCache
 */
function mapCacheClear() {
  this.size = 0;
  this.__data__ = {
    'hash': new Hash,
    'map': new (Map || ListCache),
    'string': new Hash
  };
}

module.exports = mapCacheClear;
";
        
        $__internal_a180e3c3c1bdb235f774fbe3f767dad2c492e05a17108c5fd326939ff6694b61->leave($__internal_a180e3c3c1bdb235f774fbe3f767dad2c492e05a17108c5fd326939ff6694b61_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/lodash/_mapCacheClear.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("var Hash = require('./_Hash'),
    ListCache = require('./_ListCache'),
    Map = require('./_Map');

/**
 * Removes all key-value entries from the map.
 *
 * @private
 * @name clear
 * @memberOf MapCache
 */
function mapCacheClear() {
  this.size = 0;
  this.__data__ = {
    'hash': new Hash,
    'map': new (Map || ListCache),
    'string': new Hash
  };
}

module.exports = mapCacheClear;
", "node_modules/lodash/_mapCacheClear.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/lodash/_mapCacheClear.js");
    }
}
