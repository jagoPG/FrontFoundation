<?php

/* node_modules/lodash/_setCacheAdd.js */
class __TwigTemplate_dab63f305db0d8e8b6c670c1131dd2c3889d01ff63617ce7c3dac7539017d59a extends Twig_Template
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
        $__internal_e8735b54681b6f36f4593cdd1350128210e6a5d51d9b32e41f062cdfd966197a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e8735b54681b6f36f4593cdd1350128210e6a5d51d9b32e41f062cdfd966197a->enter($__internal_e8735b54681b6f36f4593cdd1350128210e6a5d51d9b32e41f062cdfd966197a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/lodash/_setCacheAdd.js"));

        // line 1
        echo "/** Used to stand-in for `undefined` hash values. */
var HASH_UNDEFINED = '__lodash_hash_undefined__';

/**
 * Adds `value` to the array cache.
 *
 * @private
 * @name add
 * @memberOf SetCache
 * @alias push
 * @param {*} value The value to cache.
 * @returns {Object} Returns the cache instance.
 */
function setCacheAdd(value) {
  this.__data__.set(value, HASH_UNDEFINED);
  return this;
}

module.exports = setCacheAdd;
";
        
        $__internal_e8735b54681b6f36f4593cdd1350128210e6a5d51d9b32e41f062cdfd966197a->leave($__internal_e8735b54681b6f36f4593cdd1350128210e6a5d51d9b32e41f062cdfd966197a_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/lodash/_setCacheAdd.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("/** Used to stand-in for `undefined` hash values. */
var HASH_UNDEFINED = '__lodash_hash_undefined__';

/**
 * Adds `value` to the array cache.
 *
 * @private
 * @name add
 * @memberOf SetCache
 * @alias push
 * @param {*} value The value to cache.
 * @returns {Object} Returns the cache instance.
 */
function setCacheAdd(value) {
  this.__data__.set(value, HASH_UNDEFINED);
  return this;
}

module.exports = setCacheAdd;
", "node_modules/lodash/_setCacheAdd.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/lodash/_setCacheAdd.js");
    }
}
