<?php

/* node_modules/es5-ext/object/map.js */
class __TwigTemplate_d4316d95c2cab0b1addbc260199cb8016feb2fd5277aa6f8c254789dd9248f7c extends Twig_Template
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
        $__internal_2418ac440b40799c1eeb1f2fbf00a7666bcccf9509c4a7203f3c275ea3899cac = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2418ac440b40799c1eeb1f2fbf00a7666bcccf9509c4a7203f3c275ea3899cac->enter($__internal_2418ac440b40799c1eeb1f2fbf00a7666bcccf9509c4a7203f3c275ea3899cac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/es5-ext/object/map.js"));

        // line 1
        echo "\"use strict\";

var callable = require(\"./valid-callable\")
  , forEach  = require(\"./for-each\")
  , call     = Function.prototype.call;

module.exports = function (obj, cb /*, thisArg*/) {
\tvar result = {}, thisArg = arguments[2];
\tcallable(cb);
\tforEach(obj, function (value, key, targetObj, index) {
\t\tresult[key] = call.call(cb, thisArg, value, key, targetObj, index);
\t});
\treturn result;
};
";
        
        $__internal_2418ac440b40799c1eeb1f2fbf00a7666bcccf9509c4a7203f3c275ea3899cac->leave($__internal_2418ac440b40799c1eeb1f2fbf00a7666bcccf9509c4a7203f3c275ea3899cac_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/es5-ext/object/map.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("\"use strict\";

var callable = require(\"./valid-callable\")
  , forEach  = require(\"./for-each\")
  , call     = Function.prototype.call;

module.exports = function (obj, cb /*, thisArg*/) {
\tvar result = {}, thisArg = arguments[2];
\tcallable(cb);
\tforEach(obj, function (value, key, targetObj, index) {
\t\tresult[key] = call.call(cb, thisArg, value, key, targetObj, index);
\t});
\treturn result;
};
", "node_modules/es5-ext/object/map.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/es5-ext/object/map.js");
    }
}
