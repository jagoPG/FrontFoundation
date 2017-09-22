<?php

/* node_modules/lodash/_isPrototype.js */
class __TwigTemplate_d1513278c2d6a6440f79c2f1224cd3ee9a09e0fcce06af6a7e5192eec4c7ed48 extends Twig_Template
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
        $__internal_b2d1d1a406296c07fc872ce020f50353a20883a41d8abb8434db9bd9959fdeac = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b2d1d1a406296c07fc872ce020f50353a20883a41d8abb8434db9bd9959fdeac->enter($__internal_b2d1d1a406296c07fc872ce020f50353a20883a41d8abb8434db9bd9959fdeac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/lodash/_isPrototype.js"));

        // line 1
        echo "/** Used for built-in method references. */
var objectProto = Object.prototype;

/**
 * Checks if `value` is likely a prototype object.
 *
 * @private
 * @param {*} value The value to check.
 * @returns {boolean} Returns `true` if `value` is a prototype, else `false`.
 */
function isPrototype(value) {
  var Ctor = value && value.constructor,
      proto = (typeof Ctor == 'function' && Ctor.prototype) || objectProto;

  return value === proto;
}

module.exports = isPrototype;
";
        
        $__internal_b2d1d1a406296c07fc872ce020f50353a20883a41d8abb8434db9bd9959fdeac->leave($__internal_b2d1d1a406296c07fc872ce020f50353a20883a41d8abb8434db9bd9959fdeac_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/lodash/_isPrototype.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("/** Used for built-in method references. */
var objectProto = Object.prototype;

/**
 * Checks if `value` is likely a prototype object.
 *
 * @private
 * @param {*} value The value to check.
 * @returns {boolean} Returns `true` if `value` is a prototype, else `false`.
 */
function isPrototype(value) {
  var Ctor = value && value.constructor,
      proto = (typeof Ctor == 'function' && Ctor.prototype) || objectProto;

  return value === proto;
}

module.exports = isPrototype;
", "node_modules/lodash/_isPrototype.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/lodash/_isPrototype.js");
    }
}
