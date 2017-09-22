<?php

/* node_modules/lodash/_listCacheClear.js */
class __TwigTemplate_697d619584261023e65496f7772606b0f4e66283efd486f76e9ef9c2aa6a9811 extends Twig_Template
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
        $__internal_33e8530e481469cb1896eda98779c7e3991a6a8f49da049701b192644c71815b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_33e8530e481469cb1896eda98779c7e3991a6a8f49da049701b192644c71815b->enter($__internal_33e8530e481469cb1896eda98779c7e3991a6a8f49da049701b192644c71815b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/lodash/_listCacheClear.js"));

        // line 1
        echo "/**
 * Removes all key-value entries from the list cache.
 *
 * @private
 * @name clear
 * @memberOf ListCache
 */
function listCacheClear() {
  this.__data__ = [];
  this.size = 0;
}

module.exports = listCacheClear;
";
        
        $__internal_33e8530e481469cb1896eda98779c7e3991a6a8f49da049701b192644c71815b->leave($__internal_33e8530e481469cb1896eda98779c7e3991a6a8f49da049701b192644c71815b_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/lodash/_listCacheClear.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("/**
 * Removes all key-value entries from the list cache.
 *
 * @private
 * @name clear
 * @memberOf ListCache
 */
function listCacheClear() {
  this.__data__ = [];
  this.size = 0;
}

module.exports = listCacheClear;
", "node_modules/lodash/_listCacheClear.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/lodash/_listCacheClear.js");
    }
}
