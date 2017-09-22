<?php

/* node_modules/lodash/stubTrue.js */
class __TwigTemplate_a466963d1dfb1dab66be78b0952a7ef1bef03a714bddacef9abe5c6d4af32c67 extends Twig_Template
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
        $__internal_fec7737ef354ed01f9fca226a01454b6103d2c1ce6679a58bec2ce8c9b10e213 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fec7737ef354ed01f9fca226a01454b6103d2c1ce6679a58bec2ce8c9b10e213->enter($__internal_fec7737ef354ed01f9fca226a01454b6103d2c1ce6679a58bec2ce8c9b10e213_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/lodash/stubTrue.js"));

        // line 1
        echo "/**
 * This method returns `true`.
 *
 * @static
 * @memberOf _
 * @since 4.13.0
 * @category Util
 * @returns {boolean} Returns `true`.
 * @example
 *
 * _.times(2, _.stubTrue);
 * // => [true, true]
 */
function stubTrue() {
  return true;
}

module.exports = stubTrue;
";
        
        $__internal_fec7737ef354ed01f9fca226a01454b6103d2c1ce6679a58bec2ce8c9b10e213->leave($__internal_fec7737ef354ed01f9fca226a01454b6103d2c1ce6679a58bec2ce8c9b10e213_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/lodash/stubTrue.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("/**
 * This method returns `true`.
 *
 * @static
 * @memberOf _
 * @since 4.13.0
 * @category Util
 * @returns {boolean} Returns `true`.
 * @example
 *
 * _.times(2, _.stubTrue);
 * // => [true, true]
 */
function stubTrue() {
  return true;
}

module.exports = stubTrue;
", "node_modules/lodash/stubTrue.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/lodash/stubTrue.js");
    }
}
