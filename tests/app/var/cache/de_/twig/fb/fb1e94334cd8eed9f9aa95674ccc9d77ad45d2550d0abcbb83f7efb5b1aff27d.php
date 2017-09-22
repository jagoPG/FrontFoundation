<?php

/* node_modules/lodash/constant.js */
class __TwigTemplate_4d071fb91f70173bf71a6ce7e040e2a3d4aa36d4f835401d05217a7695694f02 extends Twig_Template
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
        $__internal_80edb31a4680d6382a9168a07f91aca9db64a1d1de3fea6e0cbfd5ae0bc44eb6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_80edb31a4680d6382a9168a07f91aca9db64a1d1de3fea6e0cbfd5ae0bc44eb6->enter($__internal_80edb31a4680d6382a9168a07f91aca9db64a1d1de3fea6e0cbfd5ae0bc44eb6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/lodash/constant.js"));

        // line 1
        echo "/**
 * Creates a function that returns `value`.
 *
 * @static
 * @memberOf _
 * @since 2.4.0
 * @category Util
 * @param {*} value The value to return from the new function.
 * @returns {Function} Returns the new constant function.
 * @example
 *
 * var objects = _.times(2, _.constant({ 'a': 1 }));
 *
 * console.log(objects);
 * // => [{ 'a': 1 }, { 'a': 1 }]
 *
 * console.log(objects[0] === objects[1]);
 * // => true
 */
function constant(value) {
  return function() {
    return value;
  };
}

module.exports = constant;
";
        
        $__internal_80edb31a4680d6382a9168a07f91aca9db64a1d1de3fea6e0cbfd5ae0bc44eb6->leave($__internal_80edb31a4680d6382a9168a07f91aca9db64a1d1de3fea6e0cbfd5ae0bc44eb6_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/lodash/constant.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("/**
 * Creates a function that returns `value`.
 *
 * @static
 * @memberOf _
 * @since 2.4.0
 * @category Util
 * @param {*} value The value to return from the new function.
 * @returns {Function} Returns the new constant function.
 * @example
 *
 * var objects = _.times(2, _.constant({ 'a': 1 }));
 *
 * console.log(objects);
 * // => [{ 'a': 1 }, { 'a': 1 }]
 *
 * console.log(objects[0] === objects[1]);
 * // => true
 */
function constant(value) {
  return function() {
    return value;
  };
}

module.exports = constant;
", "node_modules/lodash/constant.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/lodash/constant.js");
    }
}
