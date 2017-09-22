<?php

/* node_modules/core-js/fn/date/to-string.js */
class __TwigTemplate_1af6aec4471ee6d898add5cd2ea0ebd9166208a67ac5eb97c39d086bbe662ce8 extends Twig_Template
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
        $__internal_ab5cf644992f00cf02d5e44e1664d333cb3aed99ef3a640fff8549f6269ac765 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ab5cf644992f00cf02d5e44e1664d333cb3aed99ef3a640fff8549f6269ac765->enter($__internal_ab5cf644992f00cf02d5e44e1664d333cb3aed99ef3a640fff8549f6269ac765_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/core-js/fn/date/to-string.js"));

        // line 1
        echo "require('../../modules/es6.date.to-string');
var \$toString = Date.prototype.toString;
module.exports = function toString(it) {
  return \$toString.call(it);
};
";
        
        $__internal_ab5cf644992f00cf02d5e44e1664d333cb3aed99ef3a640fff8549f6269ac765->leave($__internal_ab5cf644992f00cf02d5e44e1664d333cb3aed99ef3a640fff8549f6269ac765_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/core-js/fn/date/to-string.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("require('../../modules/es6.date.to-string');
var \$toString = Date.prototype.toString;
module.exports = function toString(it) {
  return \$toString.call(it);
};
", "node_modules/core-js/fn/date/to-string.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/core-js/fn/date/to-string.js");
    }
}
