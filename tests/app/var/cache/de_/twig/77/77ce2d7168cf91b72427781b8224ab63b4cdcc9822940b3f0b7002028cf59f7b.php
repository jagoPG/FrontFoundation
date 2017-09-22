<?php

/* node_modules/lodash/_SetCache.js */
class __TwigTemplate_a24c07ec2aaaf3b8f6d59f8f9d0324e51683032198385453548431767e73c9cd extends Twig_Template
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
        $__internal_8b480a9dd0596b4b624448bd366a3f44e1d333e9c1130fa524a3518cb44c9f1f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8b480a9dd0596b4b624448bd366a3f44e1d333e9c1130fa524a3518cb44c9f1f->enter($__internal_8b480a9dd0596b4b624448bd366a3f44e1d333e9c1130fa524a3518cb44c9f1f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/lodash/_SetCache.js"));

        // line 1
        echo "var MapCache = require('./_MapCache'),
    setCacheAdd = require('./_setCacheAdd'),
    setCacheHas = require('./_setCacheHas');

/**
 *
 * Creates an array cache object to store unique values.
 *
 * @private
 * @constructor
 * @param {Array} [values] The values to cache.
 */
function SetCache(values) {
  var index = -1,
      length = values == null ? 0 : values.length;

  this.__data__ = new MapCache;
  while (++index < length) {
    this.add(values[index]);
  }
}

// Add methods to `SetCache`.
SetCache.prototype.add = SetCache.prototype.push = setCacheAdd;
SetCache.prototype.has = setCacheHas;

module.exports = SetCache;
";
        
        $__internal_8b480a9dd0596b4b624448bd366a3f44e1d333e9c1130fa524a3518cb44c9f1f->leave($__internal_8b480a9dd0596b4b624448bd366a3f44e1d333e9c1130fa524a3518cb44c9f1f_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/lodash/_SetCache.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("var MapCache = require('./_MapCache'),
    setCacheAdd = require('./_setCacheAdd'),
    setCacheHas = require('./_setCacheHas');

/**
 *
 * Creates an array cache object to store unique values.
 *
 * @private
 * @constructor
 * @param {Array} [values] The values to cache.
 */
function SetCache(values) {
  var index = -1,
      length = values == null ? 0 : values.length;

  this.__data__ = new MapCache;
  while (++index < length) {
    this.add(values[index]);
  }
}

// Add methods to `SetCache`.
SetCache.prototype.add = SetCache.prototype.push = setCacheAdd;
SetCache.prototype.has = setCacheHas;

module.exports = SetCache;
", "node_modules/lodash/_SetCache.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/lodash/_SetCache.js");
    }
}
