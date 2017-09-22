<?php

/* node_modules/lodash/_toSource.js */
class __TwigTemplate_60758309d114b36969bcc08c917e0f5c3062519f5534e08a2c2c97d9fc64ca02 extends Twig_Template
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
        $__internal_e23aea98237c7577edd2c1750d01c07c506cc7043cce066f064bba1d20460e89 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e23aea98237c7577edd2c1750d01c07c506cc7043cce066f064bba1d20460e89->enter($__internal_e23aea98237c7577edd2c1750d01c07c506cc7043cce066f064bba1d20460e89_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/lodash/_toSource.js"));

        // line 1
        echo "/** Used for built-in method references. */
var funcProto = Function.prototype;

/** Used to resolve the decompiled source of functions. */
var funcToString = funcProto.toString;

/**
 * Converts `func` to its source code.
 *
 * @private
 * @param {Function} func The function to convert.
 * @returns {string} Returns the source code.
 */
function toSource(func) {
  if (func != null) {
    try {
      return funcToString.call(func);
    } catch (e) {}
    try {
      return (func + '');
    } catch (e) {}
  }
  return '';
}

module.exports = toSource;
";
        
        $__internal_e23aea98237c7577edd2c1750d01c07c506cc7043cce066f064bba1d20460e89->leave($__internal_e23aea98237c7577edd2c1750d01c07c506cc7043cce066f064bba1d20460e89_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/lodash/_toSource.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("/** Used for built-in method references. */
var funcProto = Function.prototype;

/** Used to resolve the decompiled source of functions. */
var funcToString = funcProto.toString;

/**
 * Converts `func` to its source code.
 *
 * @private
 * @param {Function} func The function to convert.
 * @returns {string} Returns the source code.
 */
function toSource(func) {
  if (func != null) {
    try {
      return funcToString.call(func);
    } catch (e) {}
    try {
      return (func + '');
    } catch (e) {}
  }
  return '';
}

module.exports = toSource;
", "node_modules/lodash/_toSource.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/lodash/_toSource.js");
    }
}
