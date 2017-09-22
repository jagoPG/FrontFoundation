<?php

/* node_modules/lodash/_cacheHas.js */
class __TwigTemplate_71ab1c1280ea1e31cf3ab217e5aa9455f0b90ee85e69d4dad07187ce8091c599 extends Twig_Template
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
        $__internal_2f821f2fa4fa2a7c86dee0ae0c74c70a80cca771fd45d9dd30f342610db6a486 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2f821f2fa4fa2a7c86dee0ae0c74c70a80cca771fd45d9dd30f342610db6a486->enter($__internal_2f821f2fa4fa2a7c86dee0ae0c74c70a80cca771fd45d9dd30f342610db6a486_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/lodash/_cacheHas.js"));

        // line 1
        echo "/**
 * Checks if a `cache` value for `key` exists.
 *
 * @private
 * @param {Object} cache The cache to query.
 * @param {string} key The key of the entry to check.
 * @returns {boolean} Returns `true` if an entry for `key` exists, else `false`.
 */
function cacheHas(cache, key) {
  return cache.has(key);
}

module.exports = cacheHas;
";
        
        $__internal_2f821f2fa4fa2a7c86dee0ae0c74c70a80cca771fd45d9dd30f342610db6a486->leave($__internal_2f821f2fa4fa2a7c86dee0ae0c74c70a80cca771fd45d9dd30f342610db6a486_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/lodash/_cacheHas.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("/**
 * Checks if a `cache` value for `key` exists.
 *
 * @private
 * @param {Object} cache The cache to query.
 * @param {string} key The key of the entry to check.
 * @returns {boolean} Returns `true` if an entry for `key` exists, else `false`.
 */
function cacheHas(cache, key) {
  return cache.has(key);
}

module.exports = cacheHas;
", "node_modules/lodash/_cacheHas.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/lodash/_cacheHas.js");
    }
}
