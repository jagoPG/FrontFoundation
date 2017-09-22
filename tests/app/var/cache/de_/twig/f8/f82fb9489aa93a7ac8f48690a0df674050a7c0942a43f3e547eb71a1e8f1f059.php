<?php

/* node_modules/es5-ext/string/#/repeat/shim.js */
class __TwigTemplate_f426ef3f27c5160c2687ca9aeb81765b0f2771f598e95102d36bad804d8985a6 extends Twig_Template
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
        $__internal_049ff62a5d06f48e613f2fbb56fcd7801968f55aae64b0ade042b48773df970a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_049ff62a5d06f48e613f2fbb56fcd7801968f55aae64b0ade042b48773df970a->enter($__internal_049ff62a5d06f48e613f2fbb56fcd7801968f55aae64b0ade042b48773df970a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/es5-ext/string/#/repeat/shim.js"));

        // line 1
        echo "// Thanks
// @rauchma http://www.2ality.com/2014/01/efficient-string-repeat.html
// @mathiasbynens https://github.com/mathiasbynens/String.prototype.repeat/blob/4a4b567def/repeat.js

\"use strict\";

var value     = require(\"../../../object/valid-value\")
  , toInteger = require(\"../../../number/to-integer\");

module.exports = function (count) {
\tvar str = String(value(this)), result;
\tcount = toInteger(count);
\tif (count < 0) throw new RangeError(\"Count must be >= 0\");
\tif (!isFinite(count)) throw new RangeError(\"Count must be < ∞\");

\tresult = \"\";
\twhile (count) {
\t\tif (count % 2) result += str;
\t\tif (count > 1) str += str;
\t\t// eslint-disable-next-line no-bitwise
\t\tcount >>= 1;
\t}
\treturn result;
};
";
        
        $__internal_049ff62a5d06f48e613f2fbb56fcd7801968f55aae64b0ade042b48773df970a->leave($__internal_049ff62a5d06f48e613f2fbb56fcd7801968f55aae64b0ade042b48773df970a_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/es5-ext/string/#/repeat/shim.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("// Thanks
// @rauchma http://www.2ality.com/2014/01/efficient-string-repeat.html
// @mathiasbynens https://github.com/mathiasbynens/String.prototype.repeat/blob/4a4b567def/repeat.js

\"use strict\";

var value     = require(\"../../../object/valid-value\")
  , toInteger = require(\"../../../number/to-integer\");

module.exports = function (count) {
\tvar str = String(value(this)), result;
\tcount = toInteger(count);
\tif (count < 0) throw new RangeError(\"Count must be >= 0\");
\tif (!isFinite(count)) throw new RangeError(\"Count must be < ∞\");

\tresult = \"\";
\twhile (count) {
\t\tif (count % 2) result += str;
\t\tif (count > 1) str += str;
\t\t// eslint-disable-next-line no-bitwise
\t\tcount >>= 1;
\t}
\treturn result;
};
", "node_modules/es5-ext/string/#/repeat/shim.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/es5-ext/string/#/repeat/shim.js");
    }
}
