<?php

/* node_modules/lodash/_hashClear.js */
class __TwigTemplate_194b094f676e0380ddeae1d266a932cd8f30b29adf6c13036b602993216c15cf extends Twig_Template
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
        $__internal_a5606e6774f6b73dedeab42141e2007b041d2249f26d9c516cc77fbcf882af50 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a5606e6774f6b73dedeab42141e2007b041d2249f26d9c516cc77fbcf882af50->enter($__internal_a5606e6774f6b73dedeab42141e2007b041d2249f26d9c516cc77fbcf882af50_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/lodash/_hashClear.js"));

        // line 1
        echo "var nativeCreate = require('./_nativeCreate');

/**
 * Removes all key-value entries from the hash.
 *
 * @private
 * @name clear
 * @memberOf Hash
 */
function hashClear() {
  this.__data__ = nativeCreate ? nativeCreate(null) : {};
  this.size = 0;
}

module.exports = hashClear;
";
        
        $__internal_a5606e6774f6b73dedeab42141e2007b041d2249f26d9c516cc77fbcf882af50->leave($__internal_a5606e6774f6b73dedeab42141e2007b041d2249f26d9c516cc77fbcf882af50_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/lodash/_hashClear.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("var nativeCreate = require('./_nativeCreate');

/**
 * Removes all key-value entries from the hash.
 *
 * @private
 * @name clear
 * @memberOf Hash
 */
function hashClear() {
  this.__data__ = nativeCreate ? nativeCreate(null) : {};
  this.size = 0;
}

module.exports = hashClear;
", "node_modules/lodash/_hashClear.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/lodash/_hashClear.js");
    }
}
