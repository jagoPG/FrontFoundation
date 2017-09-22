<?php

/* node_modules/es5-ext/object/map-keys.js */
class __TwigTemplate_c92e2793c262077e634fedccc5226ed4cb9c983f35a73ec15ee5bcab2332f77a extends Twig_Template
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
        $__internal_b8e4591229a3081ab301dc9f083bd0f9b440fecc28eb65d711297b017e4e5480 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b8e4591229a3081ab301dc9f083bd0f9b440fecc28eb65d711297b017e4e5480->enter($__internal_b8e4591229a3081ab301dc9f083bd0f9b440fecc28eb65d711297b017e4e5480_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/es5-ext/object/map-keys.js"));

        // line 1
        echo "\"use strict\";

var callable = require(\"./valid-callable\")
  , forEach  = require(\"./for-each\")
  , call     = Function.prototype.call;

module.exports = function (obj, cb /*, thisArg*/) {
\tvar result = {}, thisArg = arguments[2];
\tcallable(cb);
\tforEach(
\t\tobj,
\t\tfunction (value, key, targetObj, index) {
\t\t\tresult[call.call(cb, thisArg, key, value, this, index)] = value;
\t\t},
\t\tobj
\t);
\treturn result;
};
";
        
        $__internal_b8e4591229a3081ab301dc9f083bd0f9b440fecc28eb65d711297b017e4e5480->leave($__internal_b8e4591229a3081ab301dc9f083bd0f9b440fecc28eb65d711297b017e4e5480_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/es5-ext/object/map-keys.js";
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
\tforEach(
\t\tobj,
\t\tfunction (value, key, targetObj, index) {
\t\t\tresult[call.call(cb, thisArg, key, value, this, index)] = value;
\t\t},
\t\tobj
\t);
\treturn result;
};
", "node_modules/es5-ext/object/map-keys.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/es5-ext/object/map-keys.js");
    }
}
