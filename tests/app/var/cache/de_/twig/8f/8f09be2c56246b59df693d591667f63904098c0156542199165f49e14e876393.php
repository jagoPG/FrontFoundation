<?php

/* node_modules/lodash/_cloneSymbol.js */
class __TwigTemplate_d1ed7e1b40bf6509208bf988196a0785160a67373ca5984dc8d5d32454d06590 extends Twig_Template
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
        $__internal_63b25c47f64618fd1dad5c77161b70a97f93a95246f08c34e2b40ac40b87b068 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_63b25c47f64618fd1dad5c77161b70a97f93a95246f08c34e2b40ac40b87b068->enter($__internal_63b25c47f64618fd1dad5c77161b70a97f93a95246f08c34e2b40ac40b87b068_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/lodash/_cloneSymbol.js"));

        // line 1
        echo "var Symbol = require('./_Symbol');

/** Used to convert symbols to primitives and strings. */
var symbolProto = Symbol ? Symbol.prototype : undefined,
    symbolValueOf = symbolProto ? symbolProto.valueOf : undefined;

/**
 * Creates a clone of the `symbol` object.
 *
 * @private
 * @param {Object} symbol The symbol object to clone.
 * @returns {Object} Returns the cloned symbol object.
 */
function cloneSymbol(symbol) {
  return symbolValueOf ? Object(symbolValueOf.call(symbol)) : {};
}

module.exports = cloneSymbol;
";
        
        $__internal_63b25c47f64618fd1dad5c77161b70a97f93a95246f08c34e2b40ac40b87b068->leave($__internal_63b25c47f64618fd1dad5c77161b70a97f93a95246f08c34e2b40ac40b87b068_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/lodash/_cloneSymbol.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("var Symbol = require('./_Symbol');

/** Used to convert symbols to primitives and strings. */
var symbolProto = Symbol ? Symbol.prototype : undefined,
    symbolValueOf = symbolProto ? symbolProto.valueOf : undefined;

/**
 * Creates a clone of the `symbol` object.
 *
 * @private
 * @param {Object} symbol The symbol object to clone.
 * @returns {Object} Returns the cloned symbol object.
 */
function cloneSymbol(symbol) {
  return symbolValueOf ? Object(symbolValueOf.call(symbol)) : {};
}

module.exports = cloneSymbol;
", "node_modules/lodash/_cloneSymbol.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/lodash/_cloneSymbol.js");
    }
}
