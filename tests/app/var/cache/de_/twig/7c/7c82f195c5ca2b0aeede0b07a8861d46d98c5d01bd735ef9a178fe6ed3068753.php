<?php

/* node_modules/core-js/library/modules/_invoke.js */
class __TwigTemplate_3aef7a0f2f16b35947310b9f169edf354eb169263ab7b5b4678458cfb0386440 extends Twig_Template
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
        $__internal_34ff8d71c3047d7c131358b4163c16ba3845b61c71c9983ecd7b851f79641ea1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_34ff8d71c3047d7c131358b4163c16ba3845b61c71c9983ecd7b851f79641ea1->enter($__internal_34ff8d71c3047d7c131358b4163c16ba3845b61c71c9983ecd7b851f79641ea1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/core-js/library/modules/_invoke.js"));

        // line 1
        echo "// fast apply, http://jsperf.lnkit.com/fast-apply/5
module.exports = function (fn, args, that) {
  var un = that === undefined;
  switch (args.length) {
    case 0: return un ? fn()
                      : fn.call(that);
    case 1: return un ? fn(args[0])
                      : fn.call(that, args[0]);
    case 2: return un ? fn(args[0], args[1])
                      : fn.call(that, args[0], args[1]);
    case 3: return un ? fn(args[0], args[1], args[2])
                      : fn.call(that, args[0], args[1], args[2]);
    case 4: return un ? fn(args[0], args[1], args[2], args[3])
                      : fn.call(that, args[0], args[1], args[2], args[3]);
  } return fn.apply(that, args);
};
";
        
        $__internal_34ff8d71c3047d7c131358b4163c16ba3845b61c71c9983ecd7b851f79641ea1->leave($__internal_34ff8d71c3047d7c131358b4163c16ba3845b61c71c9983ecd7b851f79641ea1_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/core-js/library/modules/_invoke.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("// fast apply, http://jsperf.lnkit.com/fast-apply/5
module.exports = function (fn, args, that) {
  var un = that === undefined;
  switch (args.length) {
    case 0: return un ? fn()
                      : fn.call(that);
    case 1: return un ? fn(args[0])
                      : fn.call(that, args[0]);
    case 2: return un ? fn(args[0], args[1])
                      : fn.call(that, args[0], args[1]);
    case 3: return un ? fn(args[0], args[1], args[2])
                      : fn.call(that, args[0], args[1], args[2]);
    case 4: return un ? fn(args[0], args[1], args[2], args[3])
                      : fn.call(that, args[0], args[1], args[2], args[3]);
  } return fn.apply(that, args);
};
", "node_modules/core-js/library/modules/_invoke.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/core-js/library/modules/_invoke.js");
    }
}
