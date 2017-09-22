<?php

/* node_modules/lodash/stubObject.js */
class __TwigTemplate_eb15551a5dbda26afaf79dfa9d24135b4b526528adbffb4b21ee8d7266c6e252 extends Twig_Template
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
        $__internal_4e9f9f411c0f0498bab52dddfb47b91fffa13be486d8ab295d88fdebbb82f4e3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4e9f9f411c0f0498bab52dddfb47b91fffa13be486d8ab295d88fdebbb82f4e3->enter($__internal_4e9f9f411c0f0498bab52dddfb47b91fffa13be486d8ab295d88fdebbb82f4e3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/lodash/stubObject.js"));

        // line 1
        echo "/**
 * This method returns a new empty object.
 *
 * @static
 * @memberOf _
 * @since 4.13.0
 * @category Util
 * @returns {Object} Returns the new empty object.
 * @example
 *
 * var objects = _.times(2, _.stubObject);
 *
 * console.log(objects);
 * // => [{}, {}]
 *
 * console.log(objects[0] === objects[1]);
 * // => false
 */
function stubObject() {
  return {};
}

module.exports = stubObject;
";
        
        $__internal_4e9f9f411c0f0498bab52dddfb47b91fffa13be486d8ab295d88fdebbb82f4e3->leave($__internal_4e9f9f411c0f0498bab52dddfb47b91fffa13be486d8ab295d88fdebbb82f4e3_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/lodash/stubObject.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("/**
 * This method returns a new empty object.
 *
 * @static
 * @memberOf _
 * @since 4.13.0
 * @category Util
 * @returns {Object} Returns the new empty object.
 * @example
 *
 * var objects = _.times(2, _.stubObject);
 *
 * console.log(objects);
 * // => [{}, {}]
 *
 * console.log(objects[0] === objects[1]);
 * // => false
 */
function stubObject() {
  return {};
}

module.exports = stubObject;
", "node_modules/lodash/stubObject.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/lodash/stubObject.js");
    }
}
