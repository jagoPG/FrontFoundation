<?php

/* node_modules/es5-ext/string/#/code-point-at/shim.js */
class __TwigTemplate_23892bb48c13ea8c364582e0a3474c7e5b2592c7af67a4fe1f96bf0289bf3986 extends Twig_Template
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
        $__internal_0404601201b7ea7dd7dbbd7a8f40a1c4e804eb34be47b5de28aa1c322f74ecde = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0404601201b7ea7dd7dbbd7a8f40a1c4e804eb34be47b5de28aa1c322f74ecde->enter($__internal_0404601201b7ea7dd7dbbd7a8f40a1c4e804eb34be47b5de28aa1c322f74ecde_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/es5-ext/string/#/code-point-at/shim.js"));

        // line 1
        echo "// Based on: https://github.com/mathiasbynens/String.prototype.codePointAt
// Thanks @mathiasbynens !

\"use strict\";

var toInteger  = require(\"../../../number/to-integer\")
  , validValue = require(\"../../../object/valid-value\");

module.exports = function (pos) {
\tvar str = String(validValue(this)), length = str.length, first, second;
\tpos = toInteger(pos);

\t// Account for out-of-bounds indices:
\tif (pos < 0 || pos >= length) return undefined;

\t// Get the first code unit
\tfirst = str.charCodeAt(pos);
\tif (first >= 0xd800 && first <= 0xdbff && length > pos + 1) {
\t\tsecond = str.charCodeAt(pos + 1);
\t\tif (second >= 0xdc00 && second <= 0xdfff) {
\t\t\t// http://mathiasbynens.be/notes/javascript-encoding#surrogate-formulae
\t\t\treturn (first - 0xd800) * 0x400 + second - 0xdc00 + 0x10000;
\t\t}
\t}
\treturn first;
};
";
        
        $__internal_0404601201b7ea7dd7dbbd7a8f40a1c4e804eb34be47b5de28aa1c322f74ecde->leave($__internal_0404601201b7ea7dd7dbbd7a8f40a1c4e804eb34be47b5de28aa1c322f74ecde_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/es5-ext/string/#/code-point-at/shim.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("// Based on: https://github.com/mathiasbynens/String.prototype.codePointAt
// Thanks @mathiasbynens !

\"use strict\";

var toInteger  = require(\"../../../number/to-integer\")
  , validValue = require(\"../../../object/valid-value\");

module.exports = function (pos) {
\tvar str = String(validValue(this)), length = str.length, first, second;
\tpos = toInteger(pos);

\t// Account for out-of-bounds indices:
\tif (pos < 0 || pos >= length) return undefined;

\t// Get the first code unit
\tfirst = str.charCodeAt(pos);
\tif (first >= 0xd800 && first <= 0xdbff && length > pos + 1) {
\t\tsecond = str.charCodeAt(pos + 1);
\t\tif (second >= 0xdc00 && second <= 0xdfff) {
\t\t\t// http://mathiasbynens.be/notes/javascript-encoding#surrogate-formulae
\t\t\treturn (first - 0xd800) * 0x400 + second - 0xdc00 + 0x10000;
\t\t}
\t}
\treturn first;
};
", "node_modules/es5-ext/string/#/code-point-at/shim.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/es5-ext/string/#/code-point-at/shim.js");
    }
}
