<?php

/* node_modules/es5-ext/array/#/group.js */
class __TwigTemplate_ba6c65190d789ac1d5f044435d07b0dca13310c0f6bf58c1f629276f5fe00acb extends Twig_Template
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
        $__internal_71ea5f64591be97ca4ccd19241a6a31faad7dcb0d58c65f0bc22729a3ea546a5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_71ea5f64591be97ca4ccd19241a6a31faad7dcb0d58c65f0bc22729a3ea546a5->enter($__internal_71ea5f64591be97ca4ccd19241a6a31faad7dcb0d58c65f0bc22729a3ea546a5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/es5-ext/array/#/group.js"));

        // line 1
        echo "// Inspired by Underscore's groupBy:
// http://documentcloud.github.com/underscore/#groupBy

\"use strict\";

var callable = require(\"../../object/valid-callable\")
  , value    = require(\"../../object/valid-value\")
  , forEach  = Array.prototype.forEach
  , apply    = Function.prototype.apply;

module.exports = function (cb /*, thisArg*/) {
\tvar result;

\tvalue(this);
\tcallable(cb);

\tresult = Object.create(null);
\tforEach.call(
\t\tthis,
\t\tfunction (item) {
\t\t\tvar key = apply.call(cb, this, arguments);
\t\t\tif (!result[key]) result[key] = [];
\t\t\tresult[key].push(item);
\t\t},
\t\targuments[1]
\t);
\treturn result;
};
";
        
        $__internal_71ea5f64591be97ca4ccd19241a6a31faad7dcb0d58c65f0bc22729a3ea546a5->leave($__internal_71ea5f64591be97ca4ccd19241a6a31faad7dcb0d58c65f0bc22729a3ea546a5_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/es5-ext/array/#/group.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("// Inspired by Underscore's groupBy:
// http://documentcloud.github.com/underscore/#groupBy

\"use strict\";

var callable = require(\"../../object/valid-callable\")
  , value    = require(\"../../object/valid-value\")
  , forEach  = Array.prototype.forEach
  , apply    = Function.prototype.apply;

module.exports = function (cb /*, thisArg*/) {
\tvar result;

\tvalue(this);
\tcallable(cb);

\tresult = Object.create(null);
\tforEach.call(
\t\tthis,
\t\tfunction (item) {
\t\t\tvar key = apply.call(cb, this, arguments);
\t\t\tif (!result[key]) result[key] = [];
\t\t\tresult[key].push(item);
\t\t},
\t\targuments[1]
\t);
\treturn result;
};
", "node_modules/es5-ext/array/#/group.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/es5-ext/array/#/group.js");
    }
}
