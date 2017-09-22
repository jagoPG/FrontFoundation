<?php

/* node_modules/lodash/_stackGet.js */
class __TwigTemplate_893dc6e15c6052b2e21b1d68db399fcbc51f5c9946479be859631d4d90e8d08c extends Twig_Template
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
        $__internal_134414ea086489a2f8e3a4de8755b1f4f3caf819169b9f7b18ec3f562cc66fb1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_134414ea086489a2f8e3a4de8755b1f4f3caf819169b9f7b18ec3f562cc66fb1->enter($__internal_134414ea086489a2f8e3a4de8755b1f4f3caf819169b9f7b18ec3f562cc66fb1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/lodash/_stackGet.js"));

        // line 1
        echo "/**
 * Gets the stack value for `key`.
 *
 * @private
 * @name get
 * @memberOf Stack
 * @param {string} key The key of the value to get.
 * @returns {*} Returns the entry value.
 */
function stackGet(key) {
  return this.__data__.get(key);
}

module.exports = stackGet;
";
        
        $__internal_134414ea086489a2f8e3a4de8755b1f4f3caf819169b9f7b18ec3f562cc66fb1->leave($__internal_134414ea086489a2f8e3a4de8755b1f4f3caf819169b9f7b18ec3f562cc66fb1_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/lodash/_stackGet.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("/**
 * Gets the stack value for `key`.
 *
 * @private
 * @name get
 * @memberOf Stack
 * @param {string} key The key of the value to get.
 * @returns {*} Returns the entry value.
 */
function stackGet(key) {
  return this.__data__.get(key);
}

module.exports = stackGet;
", "node_modules/lodash/_stackGet.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/lodash/_stackGet.js");
    }
}
