<?php

/* node_modules/es5-ext/string/format-method.js */
class __TwigTemplate_5cb58618414e00359f7dae8e220ca23360a35e9040c254838c958e118f427853 extends Twig_Template
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
        $__internal_349755ab18a7fe80cc6e27daaf2fe945d45f0a87a4da6dfbb26b614fa04c1638 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_349755ab18a7fe80cc6e27daaf2fe945d45f0a87a4da6dfbb26b614fa04c1638->enter($__internal_349755ab18a7fe80cc6e27daaf2fe945d45f0a87a4da6dfbb26b614fa04c1638_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/es5-ext/string/format-method.js"));

        // line 1
        echo "\"use strict\";

var isCallable = require(\"../object/is-callable\")
  , value      = require(\"../object/valid-value\")
  , call       = Function.prototype.call;

module.exports = function (fmap) {
\tfmap = Object(value(fmap));
\treturn function (pattern) {
\t\tvar context = this;
\t\tvalue(context);
\t\tpattern = String(pattern);
\t\treturn pattern.replace(/%([a-zA-Z]+)|\\\\([\\u0000-\\uffff])/g, function (
\t\t\tmatch,
\t\t\ttoken,
\t\t\tescapeChar
\t\t) {
\t\t\tvar t, result;
\t\t\tif (escapeChar) return escapeChar;
\t\t\tt = token;
\t\t\twhile (t && !(result = fmap[t])) t = t.slice(0, -1);
\t\t\tif (!result) return match;
\t\t\tif (isCallable(result)) result = call.call(result, context);
\t\t\treturn result + token.slice(t.length);
\t\t});
\t};
};
";
        
        $__internal_349755ab18a7fe80cc6e27daaf2fe945d45f0a87a4da6dfbb26b614fa04c1638->leave($__internal_349755ab18a7fe80cc6e27daaf2fe945d45f0a87a4da6dfbb26b614fa04c1638_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/es5-ext/string/format-method.js";
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
  , call       = Function.prototype.call;

module.exports = function (fmap) {
\tfmap = Object(value(fmap));
\treturn function (pattern) {
\t\tvar context = this;
\t\tvalue(context);
\t\tpattern = String(pattern);
\t\treturn pattern.replace(/%([a-zA-Z]+)|\\\\([\\u0000-\\uffff])/g, function (
\t\t\tmatch,
\t\t\ttoken,
\t\t\tescapeChar
\t\t) {
\t\t\tvar t, result;
\t\t\tif (escapeChar) return escapeChar;
\t\t\tt = token;
\t\t\twhile (t && !(result = fmap[t])) t = t.slice(0, -1);
\t\t\tif (!result) return match;
\t\t\tif (isCallable(result)) result = call.call(result, context);
\t\t\treturn result + token.slice(t.length);
\t\t});
\t};
};
", "node_modules/es5-ext/string/format-method.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/es5-ext/string/format-method.js");
    }
}
