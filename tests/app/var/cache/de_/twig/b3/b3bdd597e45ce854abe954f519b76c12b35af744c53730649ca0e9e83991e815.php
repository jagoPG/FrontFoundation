<?php

/* node_modules/es5-ext/object/is-copy.js */
class __TwigTemplate_7d25ccef7a450a0dd6551f2fd7475aaa8522fcf453c6fb413acd9094639ee80a extends Twig_Template
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
        $__internal_e18d175a03184e0fe8cda25f8e283b9cd66a46d15d43accff1e213e241ebbe40 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e18d175a03184e0fe8cda25f8e283b9cd66a46d15d43accff1e213e241ebbe40->enter($__internal_e18d175a03184e0fe8cda25f8e283b9cd66a46d15d43accff1e213e241ebbe40_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/es5-ext/object/is-copy.js"));

        // line 1
        echo "\"use strict\";

var eq                      = require(\"./eq\")
  , value                   = require(\"./valid-value\")
  , keys                    = Object.keys
  , objPropertyIsEnumerable = Object.prototype.propertyIsEnumerable;

module.exports = function (val1, val2) {
\tvar k1, k2;

\tif (eq(value(val1), value(val2))) return true;

\tval1 = Object(val1);
\tval2 = Object(val2);

\tk1 = keys(val1);
\tk2 = keys(val2);
\tif (k1.length !== k2.length) return false;
\treturn k1.every(function (key) {
\t\tif (!objPropertyIsEnumerable.call(val2, key)) return false;
\t\treturn eq(val1[key], val2[key]);
\t});
};
";
        
        $__internal_e18d175a03184e0fe8cda25f8e283b9cd66a46d15d43accff1e213e241ebbe40->leave($__internal_e18d175a03184e0fe8cda25f8e283b9cd66a46d15d43accff1e213e241ebbe40_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/es5-ext/object/is-copy.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("\"use strict\";

var eq                      = require(\"./eq\")
  , value                   = require(\"./valid-value\")
  , keys                    = Object.keys
  , objPropertyIsEnumerable = Object.prototype.propertyIsEnumerable;

module.exports = function (val1, val2) {
\tvar k1, k2;

\tif (eq(value(val1), value(val2))) return true;

\tval1 = Object(val1);
\tval2 = Object(val2);

\tk1 = keys(val1);
\tk2 = keys(val2);
\tif (k1.length !== k2.length) return false;
\treturn k1.every(function (key) {
\t\tif (!objPropertyIsEnumerable.call(val2, key)) return false;
\t\treturn eq(val1[key], val2[key]);
\t});
};
", "node_modules/es5-ext/object/is-copy.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/es5-ext/object/is-copy.js");
    }
}
