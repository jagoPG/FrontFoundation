<?php

/* node_modules/parsleyjs/src/extra/validator/luhn.js */
class __TwigTemplate_c7c7af2b793eb416d74121ee4916d6a9880f3f51c5f0da1cb1622c73a84ee9b6 extends Twig_Template
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
        $__internal_e4393a41697d22819cc5fe16da05844f9e1bdd3dac1dac7a2a0ba1091548d5c7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e4393a41697d22819cc5fe16da05844f9e1bdd3dac1dac7a2a0ba1091548d5c7->enter($__internal_e4393a41697d22819cc5fe16da05844f9e1bdd3dac1dac7a2a0ba1091548d5c7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/parsleyjs/src/extra/validator/luhn.js"));

        // line 1
        echo "// luhn extra validators
window.ParsleyConfig = window.ParsleyConfig || {};
window.ParsleyConfig.validators = window.ParsleyConfig.validators || {};

window.ParsleyConfig.validators.luhn = {
  fn: function (value) {
    value = value.replace(/[ -]/g, '');
    var digit;
    var n;
    var _j;
    var _len1;
    var _ref2;
    var sum = 0;
    _ref2 = value.split('').reverse();
    for (n = _j = 0, _len1 = _ref2.length; _j < _len1; n = ++_j) {
      digit = _ref2[n];
      digit = +digit;
      if (n % 2) {
        digit *= 2;
        if (digit < 10) {
          sum += digit;
        } else {
          sum += digit - 9;
        }
      } else {
        sum += digit;
      }
    }
    return sum % 10 === 0;
  },
  priority: 32
};
";
        
        $__internal_e4393a41697d22819cc5fe16da05844f9e1bdd3dac1dac7a2a0ba1091548d5c7->leave($__internal_e4393a41697d22819cc5fe16da05844f9e1bdd3dac1dac7a2a0ba1091548d5c7_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/parsleyjs/src/extra/validator/luhn.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("// luhn extra validators
window.ParsleyConfig = window.ParsleyConfig || {};
window.ParsleyConfig.validators = window.ParsleyConfig.validators || {};

window.ParsleyConfig.validators.luhn = {
  fn: function (value) {
    value = value.replace(/[ -]/g, '');
    var digit;
    var n;
    var _j;
    var _len1;
    var _ref2;
    var sum = 0;
    _ref2 = value.split('').reverse();
    for (n = _j = 0, _len1 = _ref2.length; _j < _len1; n = ++_j) {
      digit = _ref2[n];
      digit = +digit;
      if (n % 2) {
        digit *= 2;
        if (digit < 10) {
          sum += digit;
        } else {
          sum += digit - 9;
        }
      } else {
        sum += digit;
      }
    }
    return sum % 10 === 0;
  },
  priority: 32
};
", "node_modules/parsleyjs/src/extra/validator/luhn.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/parsleyjs/src/extra/validator/luhn.js");
    }
}
