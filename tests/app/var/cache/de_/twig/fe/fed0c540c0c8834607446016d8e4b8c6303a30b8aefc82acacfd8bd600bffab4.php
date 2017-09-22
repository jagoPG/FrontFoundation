<?php

/* node_modules/es5-ext/array/#/some-right.js */
class __TwigTemplate_a2cd2216eb8c56441c5adad85e2f9e947bf0766452e4dfd6965378a6041666e6 extends Twig_Template
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
        $__internal_61d534bc5e5d9c2d5fed35ad317a78e0ad5efc29a446398f8ffcbb3a294d311c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_61d534bc5e5d9c2d5fed35ad317a78e0ad5efc29a446398f8ffcbb3a294d311c->enter($__internal_61d534bc5e5d9c2d5fed35ad317a78e0ad5efc29a446398f8ffcbb3a294d311c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/es5-ext/array/#/some-right.js"));

        // line 1
        echo "\"use strict\";

var toPosInt          = require(\"../../number/to-pos-integer\")
  , callable          = require(\"../../object/valid-callable\")
  , value             = require(\"../../object/valid-value\")
  , objHasOwnProperty = Object.prototype.hasOwnProperty
  , call              = Function.prototype.call;

module.exports = function (cb /*, thisArg*/) {
\tvar i, self, thisArg;
\tself = Object(value(this));
\tcallable(cb);
\tthisArg = arguments[1];

\tfor (i = toPosInt(self.length) - 1; i >= 0; --i) {
\t\tif (objHasOwnProperty.call(self, i) && call.call(cb, thisArg, self[i], i, self)) {
\t\t\treturn true;
\t\t}
\t}
\treturn false;
};
";
        
        $__internal_61d534bc5e5d9c2d5fed35ad317a78e0ad5efc29a446398f8ffcbb3a294d311c->leave($__internal_61d534bc5e5d9c2d5fed35ad317a78e0ad5efc29a446398f8ffcbb3a294d311c_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/es5-ext/array/#/some-right.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("\"use strict\";

var toPosInt          = require(\"../../number/to-pos-integer\")
  , callable          = require(\"../../object/valid-callable\")
  , value             = require(\"../../object/valid-value\")
  , objHasOwnProperty = Object.prototype.hasOwnProperty
  , call              = Function.prototype.call;

module.exports = function (cb /*, thisArg*/) {
\tvar i, self, thisArg;
\tself = Object(value(this));
\tcallable(cb);
\tthisArg = arguments[1];

\tfor (i = toPosInt(self.length) - 1; i >= 0; --i) {
\t\tif (objHasOwnProperty.call(self, i) && call.call(cb, thisArg, self[i], i, self)) {
\t\t\treturn true;
\t\t}
\t}
\treturn false;
};
", "node_modules/es5-ext/array/#/some-right.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/es5-ext/array/#/some-right.js");
    }
}
