<?php

/* node_modules/es5-ext/string/from-code-point/shim.js */
class __TwigTemplate_c8a72371815bd65d87a32a5f74f9a53355f264661d77cbbf4456d9108b05d844 extends Twig_Template
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
        $__internal_3e0c23482e6dce15bc050a403126606690240dd6512a7ab81bd22d23830c1c1c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3e0c23482e6dce15bc050a403126606690240dd6512a7ab81bd22d23830c1c1c->enter($__internal_3e0c23482e6dce15bc050a403126606690240dd6512a7ab81bd22d23830c1c1c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/es5-ext/string/from-code-point/shim.js"));

        // line 1
        echo "// Based on:
// http://norbertlindenberg.com/2012/05/ecmascript-supplementary-characters/
// and:
// https://github.com/mathiasbynens/String.fromCodePoint/blob/master
// /fromcodepoint.js

\"use strict\";

var floor = Math.floor, fromCharCode = String.fromCharCode;

// eslint-disable-next-line no-unused-vars
module.exports = function (codePoint1 /*, …codePoints*/) {
\tvar chars = [], length = arguments.length, i, codePoint, result = \"\";
\tfor (i = 0; i < length; ++i) {
\t\tcodePoint = Number(arguments[i]);
\t\tif (
\t\t\t!isFinite(codePoint) ||
\t\t\tcodePoint < 0 ||
\t\t\tcodePoint > 0x10ffff ||
\t\t\tfloor(codePoint) !== codePoint
\t\t) {
\t\t\tthrow new RangeError(\"Invalid code point \" + codePoint);
\t\t}

\t\tif (codePoint < 0x10000) {
\t\t\tchars.push(codePoint);
\t\t} else {
\t\t\tcodePoint -= 0x10000;
\t\t\t// eslint-disable-next-line no-bitwise
\t\t\tchars.push((codePoint >> 10) + 0xd800, codePoint % 0x400 + 0xdc00);
\t\t}
\t\tif (i + 1 !== length && chars.length <= 0x4000) continue;
\t\tresult += fromCharCode.apply(null, chars);
\t\tchars.length = 0;
\t}
\treturn result;
};
";
        
        $__internal_3e0c23482e6dce15bc050a403126606690240dd6512a7ab81bd22d23830c1c1c->leave($__internal_3e0c23482e6dce15bc050a403126606690240dd6512a7ab81bd22d23830c1c1c_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/es5-ext/string/from-code-point/shim.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("// Based on:
// http://norbertlindenberg.com/2012/05/ecmascript-supplementary-characters/
// and:
// https://github.com/mathiasbynens/String.fromCodePoint/blob/master
// /fromcodepoint.js

\"use strict\";

var floor = Math.floor, fromCharCode = String.fromCharCode;

// eslint-disable-next-line no-unused-vars
module.exports = function (codePoint1 /*, …codePoints*/) {
\tvar chars = [], length = arguments.length, i, codePoint, result = \"\";
\tfor (i = 0; i < length; ++i) {
\t\tcodePoint = Number(arguments[i]);
\t\tif (
\t\t\t!isFinite(codePoint) ||
\t\t\tcodePoint < 0 ||
\t\t\tcodePoint > 0x10ffff ||
\t\t\tfloor(codePoint) !== codePoint
\t\t) {
\t\t\tthrow new RangeError(\"Invalid code point \" + codePoint);
\t\t}

\t\tif (codePoint < 0x10000) {
\t\t\tchars.push(codePoint);
\t\t} else {
\t\t\tcodePoint -= 0x10000;
\t\t\t// eslint-disable-next-line no-bitwise
\t\t\tchars.push((codePoint >> 10) + 0xd800, codePoint % 0x400 + 0xdc00);
\t\t}
\t\tif (i + 1 !== length && chars.length <= 0x4000) continue;
\t\tresult += fromCharCode.apply(null, chars);
\t\tchars.length = 0;
\t}
\treturn result;
};
", "node_modules/es5-ext/string/from-code-point/shim.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/es5-ext/string/from-code-point/shim.js");
    }
}
