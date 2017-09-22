<?php

/* node_modules/lodash/_createRelationalOperation.js */
class __TwigTemplate_c0a2e37225de22654dc72a8fdc4e51e39568cb0110dd696c980c724f0f594bb7 extends Twig_Template
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
        $__internal_0b572dc3b67d9971727cce6ca6f2a8a681bd9448553c439659d988e0e32087ce = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0b572dc3b67d9971727cce6ca6f2a8a681bd9448553c439659d988e0e32087ce->enter($__internal_0b572dc3b67d9971727cce6ca6f2a8a681bd9448553c439659d988e0e32087ce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/lodash/_createRelationalOperation.js"));

        // line 1
        echo "var toNumber = require('./toNumber');

/**
 * Creates a function that performs a relational operation on two values.
 *
 * @private
 * @param {Function} operator The function to perform the operation.
 * @returns {Function} Returns the new relational operation function.
 */
function createRelationalOperation(operator) {
  return function(value, other) {
    if (!(typeof value == 'string' && typeof other == 'string')) {
      value = toNumber(value);
      other = toNumber(other);
    }
    return operator(value, other);
  };
}

module.exports = createRelationalOperation;
";
        
        $__internal_0b572dc3b67d9971727cce6ca6f2a8a681bd9448553c439659d988e0e32087ce->leave($__internal_0b572dc3b67d9971727cce6ca6f2a8a681bd9448553c439659d988e0e32087ce_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/lodash/_createRelationalOperation.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("var toNumber = require('./toNumber');

/**
 * Creates a function that performs a relational operation on two values.
 *
 * @private
 * @param {Function} operator The function to perform the operation.
 * @returns {Function} Returns the new relational operation function.
 */
function createRelationalOperation(operator) {
  return function(value, other) {
    if (!(typeof value == 'string' && typeof other == 'string')) {
      value = toNumber(value);
      other = toNumber(other);
    }
    return operator(value, other);
  };
}

module.exports = createRelationalOperation;
", "node_modules/lodash/_createRelationalOperation.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/lodash/_createRelationalOperation.js");
    }
}
