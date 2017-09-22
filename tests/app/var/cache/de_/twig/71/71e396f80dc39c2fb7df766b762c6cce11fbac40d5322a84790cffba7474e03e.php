<?php

/* node_modules/lodash/stubString.js */
class __TwigTemplate_a162a41540ed4480620e2adc070df5702515e72703bda23b7bed8ee17d481105 extends Twig_Template
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
        $__internal_15b439c3ae0acb585d1cc338d195ad0dd30c249a82812f3c7e08a5d10d1c8058 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_15b439c3ae0acb585d1cc338d195ad0dd30c249a82812f3c7e08a5d10d1c8058->enter($__internal_15b439c3ae0acb585d1cc338d195ad0dd30c249a82812f3c7e08a5d10d1c8058_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/lodash/stubString.js"));

        // line 1
        echo "/**
 * This method returns an empty string.
 *
 * @static
 * @memberOf _
 * @since 4.13.0
 * @category Util
 * @returns {string} Returns the empty string.
 * @example
 *
 * _.times(2, _.stubString);
 * // => ['', '']
 */
function stubString() {
  return '';
}

module.exports = stubString;
";
        
        $__internal_15b439c3ae0acb585d1cc338d195ad0dd30c249a82812f3c7e08a5d10d1c8058->leave($__internal_15b439c3ae0acb585d1cc338d195ad0dd30c249a82812f3c7e08a5d10d1c8058_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/lodash/stubString.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("/**
 * This method returns an empty string.
 *
 * @static
 * @memberOf _
 * @since 4.13.0
 * @category Util
 * @returns {string} Returns the empty string.
 * @example
 *
 * _.times(2, _.stubString);
 * // => ['', '']
 */
function stubString() {
  return '';
}

module.exports = stubString;
", "node_modules/lodash/stubString.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/lodash/stubString.js");
    }
}
