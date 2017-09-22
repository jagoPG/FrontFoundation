<?php

/* node_modules/core-js/modules/_invoke.js */
class __TwigTemplate_d76b815cc00fa7b010f147375c0f9fee551a2b4517bc3fa923b26ca95cc3f482 extends Twig_Template
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
        $__internal_676755bba4cd8efbaee04777b6bf5a27497ba63c510a4f2074a2e6443e7e2aef = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_676755bba4cd8efbaee04777b6bf5a27497ba63c510a4f2074a2e6443e7e2aef->enter($__internal_676755bba4cd8efbaee04777b6bf5a27497ba63c510a4f2074a2e6443e7e2aef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/core-js/modules/_invoke.js"));

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
        
        $__internal_676755bba4cd8efbaee04777b6bf5a27497ba63c510a4f2074a2e6443e7e2aef->leave($__internal_676755bba4cd8efbaee04777b6bf5a27497ba63c510a4f2074a2e6443e7e2aef_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/core-js/modules/_invoke.js";
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
", "node_modules/core-js/modules/_invoke.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/core-js/modules/_invoke.js");
    }
}
