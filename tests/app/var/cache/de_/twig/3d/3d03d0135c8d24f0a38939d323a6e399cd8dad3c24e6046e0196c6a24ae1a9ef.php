<?php

/* node_modules/core-js/fn/array/pop.js */
class __TwigTemplate_445ad0c9c3841d0476987ba7f17845bbb0cd621d482a4b5d072dc8cf8006b961 extends Twig_Template
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
        $__internal_b7d75ea487d0c1ef48df784d8fd83bf1625d55db84f2fb2eefbdd5fd9a30459e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b7d75ea487d0c1ef48df784d8fd83bf1625d55db84f2fb2eefbdd5fd9a30459e->enter($__internal_b7d75ea487d0c1ef48df784d8fd83bf1625d55db84f2fb2eefbdd5fd9a30459e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/core-js/fn/array/pop.js"));

        // line 1
        echo "// for a legacy code and future fixes
module.exports = function () {
  return Function.call.apply(Array.prototype.pop, arguments);
};
";
        
        $__internal_b7d75ea487d0c1ef48df784d8fd83bf1625d55db84f2fb2eefbdd5fd9a30459e->leave($__internal_b7d75ea487d0c1ef48df784d8fd83bf1625d55db84f2fb2eefbdd5fd9a30459e_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/core-js/fn/array/pop.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("// for a legacy code and future fixes
module.exports = function () {
  return Function.call.apply(Array.prototype.pop, arguments);
};
", "node_modules/core-js/fn/array/pop.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/core-js/fn/array/pop.js");
    }
}
