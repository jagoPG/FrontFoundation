<?php

/* node_modules/lodash/once.js */
class __TwigTemplate_63196597100d3240729d80bdcfa0e5ea29e3bfdd35e56fc6ba9491b3f2b68a12 extends Twig_Template
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
        $__internal_c4e98c000940edbade61d7eca7369cddbf0b199d385ca722f1f4645af98648c1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c4e98c000940edbade61d7eca7369cddbf0b199d385ca722f1f4645af98648c1->enter($__internal_c4e98c000940edbade61d7eca7369cddbf0b199d385ca722f1f4645af98648c1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/lodash/once.js"));

        // line 1
        echo "var before = require('./before');

/**
 * Creates a function that is restricted to invoking `func` once. Repeat calls
 * to the function return the value of the first invocation. The `func` is
 * invoked with the `this` binding and arguments of the created function.
 *
 * @static
 * @memberOf _
 * @since 0.1.0
 * @category Function
 * @param {Function} func The function to restrict.
 * @returns {Function} Returns the new restricted function.
 * @example
 *
 * var initialize = _.once(createApplication);
 * initialize();
 * initialize();
 * // => `createApplication` is invoked once
 */
function once(func) {
  return before(2, func);
}

module.exports = once;
";
        
        $__internal_c4e98c000940edbade61d7eca7369cddbf0b199d385ca722f1f4645af98648c1->leave($__internal_c4e98c000940edbade61d7eca7369cddbf0b199d385ca722f1f4645af98648c1_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/lodash/once.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("var before = require('./before');

/**
 * Creates a function that is restricted to invoking `func` once. Repeat calls
 * to the function return the value of the first invocation. The `func` is
 * invoked with the `this` binding and arguments of the created function.
 *
 * @static
 * @memberOf _
 * @since 0.1.0
 * @category Function
 * @param {Function} func The function to restrict.
 * @returns {Function} Returns the new restricted function.
 * @example
 *
 * var initialize = _.once(createApplication);
 * initialize();
 * initialize();
 * // => `createApplication` is invoked once
 */
function once(func) {
  return before(2, func);
}

module.exports = once;
", "node_modules/lodash/once.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/lodash/once.js");
    }
}
