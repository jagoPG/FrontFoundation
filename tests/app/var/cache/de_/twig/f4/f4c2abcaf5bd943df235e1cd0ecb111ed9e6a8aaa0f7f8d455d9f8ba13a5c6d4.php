<?php

/* node_modules/lodash/unary.js */
class __TwigTemplate_6d36bf3057841de649bb76237c413bb204731d091c055b9cf8ed26f2e8449aba extends Twig_Template
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
        $__internal_b6238389dd1e87705586ce690aaa1c912d1d266a4b8683188041ed1f70073b4f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b6238389dd1e87705586ce690aaa1c912d1d266a4b8683188041ed1f70073b4f->enter($__internal_b6238389dd1e87705586ce690aaa1c912d1d266a4b8683188041ed1f70073b4f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/lodash/unary.js"));

        // line 1
        echo "var ary = require('./ary');

/**
 * Creates a function that accepts up to one argument, ignoring any
 * additional arguments.
 *
 * @static
 * @memberOf _
 * @since 4.0.0
 * @category Function
 * @param {Function} func The function to cap arguments for.
 * @returns {Function} Returns the new capped function.
 * @example
 *
 * _.map(['6', '8', '10'], _.unary(parseInt));
 * // => [6, 8, 10]
 */
function unary(func) {
  return ary(func, 1);
}

module.exports = unary;
";
        
        $__internal_b6238389dd1e87705586ce690aaa1c912d1d266a4b8683188041ed1f70073b4f->leave($__internal_b6238389dd1e87705586ce690aaa1c912d1d266a4b8683188041ed1f70073b4f_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/lodash/unary.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("var ary = require('./ary');

/**
 * Creates a function that accepts up to one argument, ignoring any
 * additional arguments.
 *
 * @static
 * @memberOf _
 * @since 4.0.0
 * @category Function
 * @param {Function} func The function to cap arguments for.
 * @returns {Function} Returns the new capped function.
 * @example
 *
 * _.map(['6', '8', '10'], _.unary(parseInt));
 * // => [6, 8, 10]
 */
function unary(func) {
  return ary(func, 1);
}

module.exports = unary;
", "node_modules/lodash/unary.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/lodash/unary.js");
    }
}
