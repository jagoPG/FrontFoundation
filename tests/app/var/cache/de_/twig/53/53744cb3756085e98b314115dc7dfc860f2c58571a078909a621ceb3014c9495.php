<?php

/* node_modules/lodash/commit.js */
class __TwigTemplate_7d56aa937861c3c374d84f5cf346727c0251a5cfd3d7a0989245516f34dec5e7 extends Twig_Template
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
        $__internal_159a97918aac9e6acda3d2e49862f0fa693459d31e552247d13299636fd06c6a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_159a97918aac9e6acda3d2e49862f0fa693459d31e552247d13299636fd06c6a->enter($__internal_159a97918aac9e6acda3d2e49862f0fa693459d31e552247d13299636fd06c6a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/lodash/commit.js"));

        // line 1
        echo "var LodashWrapper = require('./_LodashWrapper');

/**
 * Executes the chain sequence and returns the wrapped result.
 *
 * @name commit
 * @memberOf _
 * @since 3.2.0
 * @category Seq
 * @returns {Object} Returns the new `lodash` wrapper instance.
 * @example
 *
 * var array = [1, 2];
 * var wrapped = _(array).push(3);
 *
 * console.log(array);
 * // => [1, 2]
 *
 * wrapped = wrapped.commit();
 * console.log(array);
 * // => [1, 2, 3]
 *
 * wrapped.last();
 * // => 3
 *
 * console.log(array);
 * // => [1, 2, 3]
 */
function wrapperCommit() {
  return new LodashWrapper(this.value(), this.__chain__);
}

module.exports = wrapperCommit;
";
        
        $__internal_159a97918aac9e6acda3d2e49862f0fa693459d31e552247d13299636fd06c6a->leave($__internal_159a97918aac9e6acda3d2e49862f0fa693459d31e552247d13299636fd06c6a_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/lodash/commit.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("var LodashWrapper = require('./_LodashWrapper');

/**
 * Executes the chain sequence and returns the wrapped result.
 *
 * @name commit
 * @memberOf _
 * @since 3.2.0
 * @category Seq
 * @returns {Object} Returns the new `lodash` wrapper instance.
 * @example
 *
 * var array = [1, 2];
 * var wrapped = _(array).push(3);
 *
 * console.log(array);
 * // => [1, 2]
 *
 * wrapped = wrapped.commit();
 * console.log(array);
 * // => [1, 2, 3]
 *
 * wrapped.last();
 * // => 3
 *
 * console.log(array);
 * // => [1, 2, 3]
 */
function wrapperCommit() {
  return new LodashWrapper(this.value(), this.__chain__);
}

module.exports = wrapperCommit;
", "node_modules/lodash/commit.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/lodash/commit.js");
    }
}
