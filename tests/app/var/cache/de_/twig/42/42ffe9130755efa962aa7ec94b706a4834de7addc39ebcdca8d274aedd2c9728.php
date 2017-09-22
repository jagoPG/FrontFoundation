<?php

/* node_modules/lodash/stubArray.js */
class __TwigTemplate_4aa1811116581f89b3e54385aac9fdd1503e80903884bcc857af7b080f6f1c95 extends Twig_Template
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
        $__internal_94f8d8bdc522ace3ef1379907bdeb4dab8a8be5d4be8cae9fdef0a700dde3285 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_94f8d8bdc522ace3ef1379907bdeb4dab8a8be5d4be8cae9fdef0a700dde3285->enter($__internal_94f8d8bdc522ace3ef1379907bdeb4dab8a8be5d4be8cae9fdef0a700dde3285_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/lodash/stubArray.js"));

        // line 1
        echo "/**
 * This method returns a new empty array.
 *
 * @static
 * @memberOf _
 * @since 4.13.0
 * @category Util
 * @returns {Array} Returns the new empty array.
 * @example
 *
 * var arrays = _.times(2, _.stubArray);
 *
 * console.log(arrays);
 * // => [[], []]
 *
 * console.log(arrays[0] === arrays[1]);
 * // => false
 */
function stubArray() {
  return [];
}

module.exports = stubArray;
";
        
        $__internal_94f8d8bdc522ace3ef1379907bdeb4dab8a8be5d4be8cae9fdef0a700dde3285->leave($__internal_94f8d8bdc522ace3ef1379907bdeb4dab8a8be5d4be8cae9fdef0a700dde3285_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/lodash/stubArray.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("/**
 * This method returns a new empty array.
 *
 * @static
 * @memberOf _
 * @since 4.13.0
 * @category Util
 * @returns {Array} Returns the new empty array.
 * @example
 *
 * var arrays = _.times(2, _.stubArray);
 *
 * console.log(arrays);
 * // => [[], []]
 *
 * console.log(arrays[0] === arrays[1]);
 * // => false
 */
function stubArray() {
  return [];
}

module.exports = stubArray;
", "node_modules/lodash/stubArray.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/lodash/stubArray.js");
    }
}
