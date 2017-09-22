<?php

/* node_modules/es5-ext/string/raw/shim.js */
class __TwigTemplate_155e31a2fd579c367019475a4b25edf9c862f94eef99c5d921f88a501e857eb2 extends Twig_Template
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
        $__internal_59ba8dca74cc82b34f10c586b27727c09830c23b8dac4ca3522b7817b7534bae = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_59ba8dca74cc82b34f10c586b27727c09830c23b8dac4ca3522b7817b7534bae->enter($__internal_59ba8dca74cc82b34f10c586b27727c09830c23b8dac4ca3522b7817b7534bae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/es5-ext/string/raw/shim.js"));

        // line 1
        echo "\"use strict\";

var toPosInt   = require(\"../../number/to-pos-integer\")
  , validValue = require(\"../../object/valid-value\")
  , reduce     = Array.prototype.reduce;

module.exports = function (callSite /*,  …substitutions*/) {
\tvar args, rawValue = Object(validValue(Object(validValue(callSite)).raw));
\tif (!toPosInt(rawValue.length)) return \"\";
\targs = arguments;
\treturn reduce.call(rawValue, function (str1, str2, i) {
\t\treturn str1 + String(args[i]) + str2;
\t});
};
";
        
        $__internal_59ba8dca74cc82b34f10c586b27727c09830c23b8dac4ca3522b7817b7534bae->leave($__internal_59ba8dca74cc82b34f10c586b27727c09830c23b8dac4ca3522b7817b7534bae_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/es5-ext/string/raw/shim.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("\"use strict\";

var toPosInt   = require(\"../../number/to-pos-integer\")
  , validValue = require(\"../../object/valid-value\")
  , reduce     = Array.prototype.reduce;

module.exports = function (callSite /*,  …substitutions*/) {
\tvar args, rawValue = Object(validValue(Object(validValue(callSite)).raw));
\tif (!toPosInt(rawValue.length)) return \"\";
\targs = arguments;
\treturn reduce.call(rawValue, function (str1, str2, i) {
\t\treturn str1 + String(args[i]) + str2;
\t});
};
", "node_modules/es5-ext/string/raw/shim.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/es5-ext/string/raw/shim.js");
    }
}
