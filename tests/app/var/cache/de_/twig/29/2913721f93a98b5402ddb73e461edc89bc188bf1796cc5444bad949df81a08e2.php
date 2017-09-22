<?php

/* node_modules/core-js/fn/array/reverse.js */
class __TwigTemplate_6c64bd191ffecbe3187ed02c4e2e67554138b43e62e596233d6de397c10178c2 extends Twig_Template
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
        $__internal_e4a270822d72ac006afa8222c1d2ffdf9d5fa5cbda0aba74e20ff9ca6e654ae1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e4a270822d72ac006afa8222c1d2ffdf9d5fa5cbda0aba74e20ff9ca6e654ae1->enter($__internal_e4a270822d72ac006afa8222c1d2ffdf9d5fa5cbda0aba74e20ff9ca6e654ae1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/core-js/fn/array/reverse.js"));

        // line 1
        echo "// for a legacy code and future fixes
module.exports = function () {
  return Function.call.apply(Array.prototype.reverse, arguments);
};
";
        
        $__internal_e4a270822d72ac006afa8222c1d2ffdf9d5fa5cbda0aba74e20ff9ca6e654ae1->leave($__internal_e4a270822d72ac006afa8222c1d2ffdf9d5fa5cbda0aba74e20ff9ca6e654ae1_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/core-js/fn/array/reverse.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("// for a legacy code and future fixes
module.exports = function () {
  return Function.call.apply(Array.prototype.reverse, arguments);
};
", "node_modules/core-js/fn/array/reverse.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/core-js/fn/array/reverse.js");
    }
}
