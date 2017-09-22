<?php

/* node_modules/es6-set/ext/every.js */
class __TwigTemplate_34d3f4b422a5e185f1eae1ff5c9cb5f8ffde7282d4fb533e98c4a5ec43847ce6 extends Twig_Template
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
        $__internal_f2f94b1df756de2145e6cb0942e82899ac1d913701ffdeef42ab44089a07e5dd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f2f94b1df756de2145e6cb0942e82899ac1d913701ffdeef42ab44089a07e5dd->enter($__internal_f2f94b1df756de2145e6cb0942e82899ac1d913701ffdeef42ab44089a07e5dd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/es6-set/ext/every.js"));

        // line 1
        echo "'use strict';

var callable = require('es5-ext/object/valid-callable')
  , forOf    = require('es6-iterator/for-of')

  , call = Function.prototype.call;

module.exports = function (cb/*, thisArg*/) {
\tvar thisArg = arguments[1], result = true;
\tcallable(cb);
\tforOf(this, function (value, doBreak) {
\t\tif (!call.call(cb, thisArg, value)) {
\t\t\tresult = false;
\t\t\tdoBreak();
\t\t}
\t});
\treturn result;
};
";
        
        $__internal_f2f94b1df756de2145e6cb0942e82899ac1d913701ffdeef42ab44089a07e5dd->leave($__internal_f2f94b1df756de2145e6cb0942e82899ac1d913701ffdeef42ab44089a07e5dd_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/es6-set/ext/every.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("'use strict';

var callable = require('es5-ext/object/valid-callable')
  , forOf    = require('es6-iterator/for-of')

  , call = Function.prototype.call;

module.exports = function (cb/*, thisArg*/) {
\tvar thisArg = arguments[1], result = true;
\tcallable(cb);
\tforOf(this, function (value, doBreak) {
\t\tif (!call.call(cb, thisArg, value)) {
\t\t\tresult = false;
\t\t\tdoBreak();
\t\t}
\t});
\treturn result;
};
", "node_modules/es6-set/ext/every.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/es6-set/ext/every.js");
    }
}
