<?php

/* node_modules/lodash/thru.js */
class __TwigTemplate_739280fcf19cc6f64093048812321b032a996cc53f6a5253eb1724ccd8eb1599 extends Twig_Template
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
        $__internal_e6ee39e21c9de45a4e2f1bde55b94ae256650c74fe1a3ab8d99cb4a200fefce3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e6ee39e21c9de45a4e2f1bde55b94ae256650c74fe1a3ab8d99cb4a200fefce3->enter($__internal_e6ee39e21c9de45a4e2f1bde55b94ae256650c74fe1a3ab8d99cb4a200fefce3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/lodash/thru.js"));

        // line 1
        echo "/**
 * This method is like `_.tap` except that it returns the result of `interceptor`.
 * The purpose of this method is to \"pass thru\" values replacing intermediate
 * results in a method chain sequence.
 *
 * @static
 * @memberOf _
 * @since 3.0.0
 * @category Seq
 * @param {*} value The value to provide to `interceptor`.
 * @param {Function} interceptor The function to invoke.
 * @returns {*} Returns the result of `interceptor`.
 * @example
 *
 * _('  abc  ')
 *  .chain()
 *  .trim()
 *  .thru(function(value) {
 *    return [value];
 *  })
 *  .value();
 * // => ['abc']
 */
function thru(value, interceptor) {
  return interceptor(value);
}

module.exports = thru;
";
        
        $__internal_e6ee39e21c9de45a4e2f1bde55b94ae256650c74fe1a3ab8d99cb4a200fefce3->leave($__internal_e6ee39e21c9de45a4e2f1bde55b94ae256650c74fe1a3ab8d99cb4a200fefce3_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/lodash/thru.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("/**
 * This method is like `_.tap` except that it returns the result of `interceptor`.
 * The purpose of this method is to \"pass thru\" values replacing intermediate
 * results in a method chain sequence.
 *
 * @static
 * @memberOf _
 * @since 3.0.0
 * @category Seq
 * @param {*} value The value to provide to `interceptor`.
 * @param {Function} interceptor The function to invoke.
 * @returns {*} Returns the result of `interceptor`.
 * @example
 *
 * _('  abc  ')
 *  .chain()
 *  .trim()
 *  .thru(function(value) {
 *    return [value];
 *  })
 *  .value();
 * // => ['abc']
 */
function thru(value, interceptor) {
  return interceptor(value);
}

module.exports = thru;
", "node_modules/lodash/thru.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/lodash/thru.js");
    }
}
