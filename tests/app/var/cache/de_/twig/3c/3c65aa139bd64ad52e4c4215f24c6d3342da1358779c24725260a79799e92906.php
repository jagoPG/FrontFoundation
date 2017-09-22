<?php

/* node_modules/core-js/library/fn/array/pop.js */
class __TwigTemplate_35da8acf606e792fea93bbcd351bba8f1c69243ccdea55adbf93fef2311bfd0f extends Twig_Template
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
        $__internal_963e14853b0952a6de6118d52515a992bec7439dc5677185ef2245b3add02cb8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_963e14853b0952a6de6118d52515a992bec7439dc5677185ef2245b3add02cb8->enter($__internal_963e14853b0952a6de6118d52515a992bec7439dc5677185ef2245b3add02cb8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/core-js/library/fn/array/pop.js"));

        // line 1
        echo "// for a legacy code and future fixes
module.exports = function () {
  return Function.call.apply(Array.prototype.pop, arguments);
};
";
        
        $__internal_963e14853b0952a6de6118d52515a992bec7439dc5677185ef2245b3add02cb8->leave($__internal_963e14853b0952a6de6118d52515a992bec7439dc5677185ef2245b3add02cb8_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/core-js/library/fn/array/pop.js";
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
", "node_modules/core-js/library/fn/array/pop.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/core-js/library/fn/array/pop.js");
    }
}
