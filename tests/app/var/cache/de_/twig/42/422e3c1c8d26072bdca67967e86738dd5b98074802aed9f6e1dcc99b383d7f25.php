<?php

/* node_modules/lodash/_getHolder.js */
class __TwigTemplate_de3bde456c2cfaab9a359f9bae3cfd338f045a617d5b1917c8a57cd476b7de4d extends Twig_Template
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
        $__internal_607b9282ad15075b2b93e67b557cfcf1efcfa31dd8abc2a6241a1021a21cd485 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_607b9282ad15075b2b93e67b557cfcf1efcfa31dd8abc2a6241a1021a21cd485->enter($__internal_607b9282ad15075b2b93e67b557cfcf1efcfa31dd8abc2a6241a1021a21cd485_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/lodash/_getHolder.js"));

        // line 1
        echo "/**
 * Gets the argument placeholder value for `func`.
 *
 * @private
 * @param {Function} func The function to inspect.
 * @returns {*} Returns the placeholder value.
 */
function getHolder(func) {
  var object = func;
  return object.placeholder;
}

module.exports = getHolder;
";
        
        $__internal_607b9282ad15075b2b93e67b557cfcf1efcfa31dd8abc2a6241a1021a21cd485->leave($__internal_607b9282ad15075b2b93e67b557cfcf1efcfa31dd8abc2a6241a1021a21cd485_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/lodash/_getHolder.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("/**
 * Gets the argument placeholder value for `func`.
 *
 * @private
 * @param {Function} func The function to inspect.
 * @returns {*} Returns the placeholder value.
 */
function getHolder(func) {
  var object = func;
  return object.placeholder;
}

module.exports = getHolder;
", "node_modules/lodash/_getHolder.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/lodash/_getHolder.js");
    }
}
