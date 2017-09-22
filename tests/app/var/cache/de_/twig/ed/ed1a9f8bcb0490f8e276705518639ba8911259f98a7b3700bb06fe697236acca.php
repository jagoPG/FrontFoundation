<?php

/* node_modules/lodash/identity.js */
class __TwigTemplate_000131d70fba3b859ff45649c475bb8bed5fec29b12d1b2d997c183e69ed9172 extends Twig_Template
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
        $__internal_e7a16a299fda4fc6e01255a60432bfa91128ca3694f99923b1c4caed5def3a2d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e7a16a299fda4fc6e01255a60432bfa91128ca3694f99923b1c4caed5def3a2d->enter($__internal_e7a16a299fda4fc6e01255a60432bfa91128ca3694f99923b1c4caed5def3a2d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/lodash/identity.js"));

        // line 1
        echo "/**
 * This method returns the first argument it receives.
 *
 * @static
 * @since 0.1.0
 * @memberOf _
 * @category Util
 * @param {*} value Any value.
 * @returns {*} Returns `value`.
 * @example
 *
 * var object = { 'a': 1 };
 *
 * console.log(_.identity(object) === object);
 * // => true
 */
function identity(value) {
  return value;
}

module.exports = identity;
";
        
        $__internal_e7a16a299fda4fc6e01255a60432bfa91128ca3694f99923b1c4caed5def3a2d->leave($__internal_e7a16a299fda4fc6e01255a60432bfa91128ca3694f99923b1c4caed5def3a2d_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/lodash/identity.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("/**
 * This method returns the first argument it receives.
 *
 * @static
 * @since 0.1.0
 * @memberOf _
 * @category Util
 * @param {*} value Any value.
 * @returns {*} Returns `value`.
 * @example
 *
 * var object = { 'a': 1 };
 *
 * console.log(_.identity(object) === object);
 * // => true
 */
function identity(value) {
  return value;
}

module.exports = identity;
", "node_modules/lodash/identity.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/lodash/identity.js");
    }
}
