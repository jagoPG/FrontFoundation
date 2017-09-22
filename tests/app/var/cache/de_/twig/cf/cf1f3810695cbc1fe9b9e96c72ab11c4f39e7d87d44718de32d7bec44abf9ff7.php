<?php

/* node_modules/lodash/wrapperChain.js */
class __TwigTemplate_c9d28612427ea01be734c07be42b5c1443aeaa41499399a609034e2b7d138a47 extends Twig_Template
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
        $__internal_0865a3c42e8ef5a8305fa315e48b172895e7bafee75582b5e758698288754c88 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0865a3c42e8ef5a8305fa315e48b172895e7bafee75582b5e758698288754c88->enter($__internal_0865a3c42e8ef5a8305fa315e48b172895e7bafee75582b5e758698288754c88_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/lodash/wrapperChain.js"));

        // line 1
        echo "var chain = require('./chain');

/**
 * Creates a `lodash` wrapper instance with explicit method chain sequences enabled.
 *
 * @name chain
 * @memberOf _
 * @since 0.1.0
 * @category Seq
 * @returns {Object} Returns the new `lodash` wrapper instance.
 * @example
 *
 * var users = [
 *   { 'user': 'barney', 'age': 36 },
 *   { 'user': 'fred',   'age': 40 }
 * ];
 *
 * // A sequence without explicit chaining.
 * _(users).head();
 * // => { 'user': 'barney', 'age': 36 }
 *
 * // A sequence with explicit chaining.
 * _(users)
 *   .chain()
 *   .head()
 *   .pick('user')
 *   .value();
 * // => { 'user': 'barney' }
 */
function wrapperChain() {
  return chain(this);
}

module.exports = wrapperChain;
";
        
        $__internal_0865a3c42e8ef5a8305fa315e48b172895e7bafee75582b5e758698288754c88->leave($__internal_0865a3c42e8ef5a8305fa315e48b172895e7bafee75582b5e758698288754c88_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/lodash/wrapperChain.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("var chain = require('./chain');

/**
 * Creates a `lodash` wrapper instance with explicit method chain sequences enabled.
 *
 * @name chain
 * @memberOf _
 * @since 0.1.0
 * @category Seq
 * @returns {Object} Returns the new `lodash` wrapper instance.
 * @example
 *
 * var users = [
 *   { 'user': 'barney', 'age': 36 },
 *   { 'user': 'fred',   'age': 40 }
 * ];
 *
 * // A sequence without explicit chaining.
 * _(users).head();
 * // => { 'user': 'barney', 'age': 36 }
 *
 * // A sequence with explicit chaining.
 * _(users)
 *   .chain()
 *   .head()
 *   .pick('user')
 *   .value();
 * // => { 'user': 'barney' }
 */
function wrapperChain() {
  return chain(this);
}

module.exports = wrapperChain;
", "node_modules/lodash/wrapperChain.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/lodash/wrapperChain.js");
    }
}
