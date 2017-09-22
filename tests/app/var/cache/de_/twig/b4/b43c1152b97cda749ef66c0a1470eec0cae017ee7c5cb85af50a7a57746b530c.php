<?php

/* node_modules/es5-ext/function/invoke.js */
class __TwigTemplate_b0d927c6192903e64aa1ebb376cafea63d6bc91d97abf7c9cf5105405f2db3af extends Twig_Template
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
        $__internal_4041c90532af869960948a7874fca7c212f7eec13d9fc503ebd6a163177e0239 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4041c90532af869960948a7874fca7c212f7eec13d9fc503ebd6a163177e0239->enter($__internal_4041c90532af869960948a7874fca7c212f7eec13d9fc503ebd6a163177e0239_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/es5-ext/function/invoke.js"));

        // line 1
        echo "\"use strict\";

var isCallable = require(\"../object/is-callable\")
  , value      = require(\"../object/valid-value\")

  , slice = Array.prototype.slice, apply = Function.prototype.apply;

module.exports = function (name/*, …args*/) {
\tvar args = slice.call(arguments, 1), isFn = isCallable(name);
\treturn function (obj) {
\t\tvalue(obj);
\t\treturn apply.call(isFn ? name : obj[name], obj,
\t\t\targs.concat(slice.call(arguments, 1)));
\t};
};
";
        
        $__internal_4041c90532af869960948a7874fca7c212f7eec13d9fc503ebd6a163177e0239->leave($__internal_4041c90532af869960948a7874fca7c212f7eec13d9fc503ebd6a163177e0239_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/es5-ext/function/invoke.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("\"use strict\";

var isCallable = require(\"../object/is-callable\")
  , value      = require(\"../object/valid-value\")

  , slice = Array.prototype.slice, apply = Function.prototype.apply;

module.exports = function (name/*, …args*/) {
\tvar args = slice.call(arguments, 1), isFn = isCallable(name);
\treturn function (obj) {
\t\tvalue(obj);
\t\treturn apply.call(isFn ? name : obj[name], obj,
\t\t\targs.concat(slice.call(arguments, 1)));
\t};
};
", "node_modules/es5-ext/function/invoke.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/es5-ext/function/invoke.js");
    }
}
