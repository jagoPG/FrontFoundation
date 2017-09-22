<?php

/* node_modules/lodash/_nodeUtil.js */
class __TwigTemplate_8f9e3e1eedd0409955d6a1e36374a031e72c2385967598d5e8de3985f8fdc75d extends Twig_Template
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
        $__internal_6711369c9faf51ab357d988c2042100491ebcf8f167ca60160a72d00758147bc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6711369c9faf51ab357d988c2042100491ebcf8f167ca60160a72d00758147bc->enter($__internal_6711369c9faf51ab357d988c2042100491ebcf8f167ca60160a72d00758147bc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/lodash/_nodeUtil.js"));

        // line 1
        echo "var freeGlobal = require('./_freeGlobal');

/** Detect free variable `exports`. */
var freeExports = typeof exports == 'object' && exports && !exports.nodeType && exports;

/** Detect free variable `module`. */
var freeModule = freeExports && typeof module == 'object' && module && !module.nodeType && module;

/** Detect the popular CommonJS extension `module.exports`. */
var moduleExports = freeModule && freeModule.exports === freeExports;

/** Detect free variable `process` from Node.js. */
var freeProcess = moduleExports && freeGlobal.process;

/** Used to access faster Node.js helpers. */
var nodeUtil = (function() {
  try {
    return freeProcess && freeProcess.binding && freeProcess.binding('util');
  } catch (e) {}
}());

module.exports = nodeUtil;
";
        
        $__internal_6711369c9faf51ab357d988c2042100491ebcf8f167ca60160a72d00758147bc->leave($__internal_6711369c9faf51ab357d988c2042100491ebcf8f167ca60160a72d00758147bc_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/lodash/_nodeUtil.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("var freeGlobal = require('./_freeGlobal');

/** Detect free variable `exports`. */
var freeExports = typeof exports == 'object' && exports && !exports.nodeType && exports;

/** Detect free variable `module`. */
var freeModule = freeExports && typeof module == 'object' && module && !module.nodeType && module;

/** Detect the popular CommonJS extension `module.exports`. */
var moduleExports = freeModule && freeModule.exports === freeExports;

/** Detect free variable `process` from Node.js. */
var freeProcess = moduleExports && freeGlobal.process;

/** Used to access faster Node.js helpers. */
var nodeUtil = (function() {
  try {
    return freeProcess && freeProcess.binding && freeProcess.binding('util');
  } catch (e) {}
}());

module.exports = nodeUtil;
", "node_modules/lodash/_nodeUtil.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/lodash/_nodeUtil.js");
    }
}
