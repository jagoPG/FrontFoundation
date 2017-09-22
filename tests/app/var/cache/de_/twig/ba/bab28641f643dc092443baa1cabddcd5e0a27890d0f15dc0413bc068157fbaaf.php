<?php

/* node_modules/lodash/_listCacheHas.js */
class __TwigTemplate_eb9baaeca1f5935678bba957faa25e059eb1992c09030c05b24231458f067592 extends Twig_Template
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
        $__internal_aaf973ed05a46c84d696518a714ae41d2eb77df6b5d91184dc24c577c0126760 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_aaf973ed05a46c84d696518a714ae41d2eb77df6b5d91184dc24c577c0126760->enter($__internal_aaf973ed05a46c84d696518a714ae41d2eb77df6b5d91184dc24c577c0126760_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/lodash/_listCacheHas.js"));

        // line 1
        echo "var assocIndexOf = require('./_assocIndexOf');

/**
 * Checks if a list cache value for `key` exists.
 *
 * @private
 * @name has
 * @memberOf ListCache
 * @param {string} key The key of the entry to check.
 * @returns {boolean} Returns `true` if an entry for `key` exists, else `false`.
 */
function listCacheHas(key) {
  return assocIndexOf(this.__data__, key) > -1;
}

module.exports = listCacheHas;
";
        
        $__internal_aaf973ed05a46c84d696518a714ae41d2eb77df6b5d91184dc24c577c0126760->leave($__internal_aaf973ed05a46c84d696518a714ae41d2eb77df6b5d91184dc24c577c0126760_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/lodash/_listCacheHas.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("var assocIndexOf = require('./_assocIndexOf');

/**
 * Checks if a list cache value for `key` exists.
 *
 * @private
 * @name has
 * @memberOf ListCache
 * @param {string} key The key of the entry to check.
 * @returns {boolean} Returns `true` if an entry for `key` exists, else `false`.
 */
function listCacheHas(key) {
  return assocIndexOf(this.__data__, key) > -1;
}

module.exports = listCacheHas;
", "node_modules/lodash/_listCacheHas.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/lodash/_listCacheHas.js");
    }
}
