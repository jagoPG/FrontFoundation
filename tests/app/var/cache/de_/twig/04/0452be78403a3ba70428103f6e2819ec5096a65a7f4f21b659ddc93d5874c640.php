<?php

/* node_modules/lodash/_Hash.js */
class __TwigTemplate_1706abb0a6b3aac2208cc099726f712232e32b956879dc875b911d551f34225d extends Twig_Template
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
        $__internal_113bd7df5a6dcb2ec7a582e8039a1486aaeb5623d120efad63fcaa29b977b107 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_113bd7df5a6dcb2ec7a582e8039a1486aaeb5623d120efad63fcaa29b977b107->enter($__internal_113bd7df5a6dcb2ec7a582e8039a1486aaeb5623d120efad63fcaa29b977b107_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/lodash/_Hash.js"));

        // line 1
        echo "var hashClear = require('./_hashClear'),
    hashDelete = require('./_hashDelete'),
    hashGet = require('./_hashGet'),
    hashHas = require('./_hashHas'),
    hashSet = require('./_hashSet');

/**
 * Creates a hash object.
 *
 * @private
 * @constructor
 * @param {Array} [entries] The key-value pairs to cache.
 */
function Hash(entries) {
  var index = -1,
      length = entries == null ? 0 : entries.length;

  this.clear();
  while (++index < length) {
    var entry = entries[index];
    this.set(entry[0], entry[1]);
  }
}

// Add methods to `Hash`.
Hash.prototype.clear = hashClear;
Hash.prototype['delete'] = hashDelete;
Hash.prototype.get = hashGet;
Hash.prototype.has = hashHas;
Hash.prototype.set = hashSet;

module.exports = Hash;
";
        
        $__internal_113bd7df5a6dcb2ec7a582e8039a1486aaeb5623d120efad63fcaa29b977b107->leave($__internal_113bd7df5a6dcb2ec7a582e8039a1486aaeb5623d120efad63fcaa29b977b107_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/lodash/_Hash.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("var hashClear = require('./_hashClear'),
    hashDelete = require('./_hashDelete'),
    hashGet = require('./_hashGet'),
    hashHas = require('./_hashHas'),
    hashSet = require('./_hashSet');

/**
 * Creates a hash object.
 *
 * @private
 * @constructor
 * @param {Array} [entries] The key-value pairs to cache.
 */
function Hash(entries) {
  var index = -1,
      length = entries == null ? 0 : entries.length;

  this.clear();
  while (++index < length) {
    var entry = entries[index];
    this.set(entry[0], entry[1]);
  }
}

// Add methods to `Hash`.
Hash.prototype.clear = hashClear;
Hash.prototype['delete'] = hashDelete;
Hash.prototype.get = hashGet;
Hash.prototype.has = hashHas;
Hash.prototype.set = hashSet;

module.exports = Hash;
", "node_modules/lodash/_Hash.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/lodash/_Hash.js");
    }
}
