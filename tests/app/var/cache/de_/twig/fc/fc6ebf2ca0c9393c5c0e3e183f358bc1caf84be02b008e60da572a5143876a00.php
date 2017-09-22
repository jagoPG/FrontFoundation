<?php

/* node_modules/normalize-package-data/lib/safe_format.js */
class __TwigTemplate_97a094460bae836c23b57ce2d15e9570723e2cb15625cf37b193ab31ee5693d8 extends Twig_Template
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
        $__internal_945e01912edc3a2bbaad39404661b869f4128ee1676e002e443c33ee35cefc4e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_945e01912edc3a2bbaad39404661b869f4128ee1676e002e443c33ee35cefc4e->enter($__internal_945e01912edc3a2bbaad39404661b869f4128ee1676e002e443c33ee35cefc4e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/normalize-package-data/lib/safe_format.js"));

        // line 1
        echo "var util = require('util')

module.exports = function() {
  var args = Array.prototype.slice.call(arguments, 0)
  args.forEach(function(arg) {
    if (!arg) throw new TypeError('Bad arguments.')
  })
  return util.format.apply(null, arguments)
}
";
        
        $__internal_945e01912edc3a2bbaad39404661b869f4128ee1676e002e443c33ee35cefc4e->leave($__internal_945e01912edc3a2bbaad39404661b869f4128ee1676e002e443c33ee35cefc4e_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/normalize-package-data/lib/safe_format.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("var util = require('util')

module.exports = function() {
  var args = Array.prototype.slice.call(arguments, 0)
  args.forEach(function(arg) {
    if (!arg) throw new TypeError('Bad arguments.')
  })
  return util.format.apply(null, arguments)
}
", "node_modules/normalize-package-data/lib/safe_format.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/normalize-package-data/lib/safe_format.js");
    }
}
