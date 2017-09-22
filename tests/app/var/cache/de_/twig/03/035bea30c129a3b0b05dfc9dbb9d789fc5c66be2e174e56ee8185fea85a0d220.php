<?php

/* node_modules/core-js/library/fn/array/splice.js */
class __TwigTemplate_78c4994f2dd7d59e73c2eed59d241cc461af3c28876357348e4e115a2096c324 extends Twig_Template
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
        $__internal_62924f4a6adf048c763e95a7f8408115c7edb9628ed7aaf17373e209b4b2b419 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_62924f4a6adf048c763e95a7f8408115c7edb9628ed7aaf17373e209b4b2b419->enter($__internal_62924f4a6adf048c763e95a7f8408115c7edb9628ed7aaf17373e209b4b2b419_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/core-js/library/fn/array/splice.js"));

        // line 1
        echo "// for a legacy code and future fixes
module.exports = function () {
  return Function.call.apply(Array.prototype.splice, arguments);
};
";
        
        $__internal_62924f4a6adf048c763e95a7f8408115c7edb9628ed7aaf17373e209b4b2b419->leave($__internal_62924f4a6adf048c763e95a7f8408115c7edb9628ed7aaf17373e209b4b2b419_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/core-js/library/fn/array/splice.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("// for a legacy code and future fixes
module.exports = function () {
  return Function.call.apply(Array.prototype.splice, arguments);
};
", "node_modules/core-js/library/fn/array/splice.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/core-js/library/fn/array/splice.js");
    }
}
