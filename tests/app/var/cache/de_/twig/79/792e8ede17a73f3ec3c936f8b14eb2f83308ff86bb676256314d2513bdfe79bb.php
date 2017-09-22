<?php

/* node_modules/lodash/_baseUnary.js */
class __TwigTemplate_ea9863278382c9a04bdeeaa2847be5e2baa8c18fcf1f124b161bca9433509850 extends Twig_Template
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
        $__internal_0dc1cc33f19e0dc6a3c100589bc67cc1c2a7bf45447c44f94482618cede78134 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0dc1cc33f19e0dc6a3c100589bc67cc1c2a7bf45447c44f94482618cede78134->enter($__internal_0dc1cc33f19e0dc6a3c100589bc67cc1c2a7bf45447c44f94482618cede78134_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/lodash/_baseUnary.js"));

        // line 1
        echo "/**
 * The base implementation of `_.unary` without support for storing metadata.
 *
 * @private
 * @param {Function} func The function to cap arguments for.
 * @returns {Function} Returns the new capped function.
 */
function baseUnary(func) {
  return function(value) {
    return func(value);
  };
}

module.exports = baseUnary;
";
        
        $__internal_0dc1cc33f19e0dc6a3c100589bc67cc1c2a7bf45447c44f94482618cede78134->leave($__internal_0dc1cc33f19e0dc6a3c100589bc67cc1c2a7bf45447c44f94482618cede78134_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/lodash/_baseUnary.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("/**
 * The base implementation of `_.unary` without support for storing metadata.
 *
 * @private
 * @param {Function} func The function to cap arguments for.
 * @returns {Function} Returns the new capped function.
 */
function baseUnary(func) {
  return function(value) {
    return func(value);
  };
}

module.exports = baseUnary;
", "node_modules/lodash/_baseUnary.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/lodash/_baseUnary.js");
    }
}
