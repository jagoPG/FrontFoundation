<?php

/* node_modules/es5-ext/string/#/at.js */
class __TwigTemplate_79dafc66cba9030314232829e9f8333a77439a4db6cfc60aa5a4ac95979b7115 extends Twig_Template
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
        $__internal_10282d3c669aa26456bbc06447947608deb9ff9297d6047745911082a8612427 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_10282d3c669aa26456bbc06447947608deb9ff9297d6047745911082a8612427->enter($__internal_10282d3c669aa26456bbc06447947608deb9ff9297d6047745911082a8612427_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/es5-ext/string/#/at.js"));

        // line 1
        echo "// Based on: https://github.com/mathiasbynens/String.prototype.at
// Thanks @mathiasbynens !

\"use strict\";

var toInteger  = require(\"../../number/to-integer\")
  , validValue = require(\"../../object/valid-value\");

module.exports = function (pos) {
\tvar str = String(validValue(this)), size = str.length, cuFirst, cuSecond, nextPos, len;
\tpos = toInteger(pos);

\t// Account for out-of-bounds indices
\t// The odd lower bound is because the ToInteger operation is
\t// going to round `n` to `0` for `-1 < n <= 0`.
\tif (pos <= -1 || pos >= size) return \"\";

\t// Second half of `ToInteger`
\t// eslint-disable-next-line no-bitwise
\tpos |= 0;
\t// Get the first code unit and code unit value
\tcuFirst = str.charCodeAt(pos);
\tnextPos = pos + 1;
\tlen = 1;
\tif (
\t\t// Check if it’s the start of a surrogate pair
\t\tcuFirst >= 0xd800 &&
\t\tcuFirst <= 0xdbff && // High surrogate
\t\tsize > nextPos // There is a next code unit
\t) {
\t\tcuSecond = str.charCodeAt(nextPos);
\t\tif (cuSecond >= 0xdc00 && cuSecond <= 0xdfff) len = 2; // Low surrogate
\t}
\treturn str.slice(pos, pos + len);
};
";
        
        $__internal_10282d3c669aa26456bbc06447947608deb9ff9297d6047745911082a8612427->leave($__internal_10282d3c669aa26456bbc06447947608deb9ff9297d6047745911082a8612427_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/es5-ext/string/#/at.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("// Based on: https://github.com/mathiasbynens/String.prototype.at
// Thanks @mathiasbynens !

\"use strict\";

var toInteger  = require(\"../../number/to-integer\")
  , validValue = require(\"../../object/valid-value\");

module.exports = function (pos) {
\tvar str = String(validValue(this)), size = str.length, cuFirst, cuSecond, nextPos, len;
\tpos = toInteger(pos);

\t// Account for out-of-bounds indices
\t// The odd lower bound is because the ToInteger operation is
\t// going to round `n` to `0` for `-1 < n <= 0`.
\tif (pos <= -1 || pos >= size) return \"\";

\t// Second half of `ToInteger`
\t// eslint-disable-next-line no-bitwise
\tpos |= 0;
\t// Get the first code unit and code unit value
\tcuFirst = str.charCodeAt(pos);
\tnextPos = pos + 1;
\tlen = 1;
\tif (
\t\t// Check if it’s the start of a surrogate pair
\t\tcuFirst >= 0xd800 &&
\t\tcuFirst <= 0xdbff && // High surrogate
\t\tsize > nextPos // There is a next code unit
\t) {
\t\tcuSecond = str.charCodeAt(nextPos);
\t\tif (cuSecond >= 0xdc00 && cuSecond <= 0xdfff) len = 2; // Low surrogate
\t}
\treturn str.slice(pos, pos + len);
};
", "node_modules/es5-ext/string/#/at.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/es5-ext/string/#/at.js");
    }
}
