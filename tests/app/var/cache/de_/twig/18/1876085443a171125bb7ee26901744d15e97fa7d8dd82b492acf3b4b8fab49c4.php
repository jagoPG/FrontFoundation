<?php

/* node_modules/is-fullwidth-code-point/index.js */
class __TwigTemplate_5da8c2953008a7bdb8398f3749223a4bbfa528ef6b69f9e7e4fab90064043227 extends Twig_Template
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
        $__internal_4c98421c7f783df454d609f93d2bdbf26fff78f1d16a3b185108f8d112332850 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4c98421c7f783df454d609f93d2bdbf26fff78f1d16a3b185108f8d112332850->enter($__internal_4c98421c7f783df454d609f93d2bdbf26fff78f1d16a3b185108f8d112332850_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/is-fullwidth-code-point/index.js"));

        // line 1
        echo "'use strict';
var numberIsNan = require('number-is-nan');

module.exports = function (x) {
\tif (numberIsNan(x)) {
\t\treturn false;
\t}

\t// https://github.com/nodejs/io.js/blob/cff7300a578be1b10001f2d967aaedc88aee6402/lib/readline.js#L1369

\t// code points are derived from:
\t// http://www.unix.org/Public/UNIDATA/EastAsianWidth.txt
\tif (x >= 0x1100 && (
\t\tx <= 0x115f ||  // Hangul Jamo
\t\t0x2329 === x || // LEFT-POINTING ANGLE BRACKET
\t\t0x232a === x || // RIGHT-POINTING ANGLE BRACKET
\t\t// CJK Radicals Supplement .. Enclosed CJK Letters and Months
\t\t(0x2e80 <= x && x <= 0x3247 && x !== 0x303f) ||
\t\t// Enclosed CJK Letters and Months .. CJK Unified Ideographs Extension A
\t\t0x3250 <= x && x <= 0x4dbf ||
\t\t// CJK Unified Ideographs .. Yi Radicals
\t\t0x4e00 <= x && x <= 0xa4c6 ||
\t\t// Hangul Jamo Extended-A
\t\t0xa960 <= x && x <= 0xa97c ||
\t\t// Hangul Syllables
\t\t0xac00 <= x && x <= 0xd7a3 ||
\t\t// CJK Compatibility Ideographs
\t\t0xf900 <= x && x <= 0xfaff ||
\t\t// Vertical Forms
\t\t0xfe10 <= x && x <= 0xfe19 ||
\t\t// CJK Compatibility Forms .. Small Form Variants
\t\t0xfe30 <= x && x <= 0xfe6b ||
\t\t// Halfwidth and Fullwidth Forms
\t\t0xff01 <= x && x <= 0xff60 ||
\t\t0xffe0 <= x && x <= 0xffe6 ||
\t\t// Kana Supplement
\t\t0x1b000 <= x && x <= 0x1b001 ||
\t\t// Enclosed Ideographic Supplement
\t\t0x1f200 <= x && x <= 0x1f251 ||
\t\t// CJK Unified Ideographs Extension B .. Tertiary Ideographic Plane
\t\t0x20000 <= x && x <= 0x3fffd)) {
\t\treturn true;
\t}

\treturn false;
}
";
        
        $__internal_4c98421c7f783df454d609f93d2bdbf26fff78f1d16a3b185108f8d112332850->leave($__internal_4c98421c7f783df454d609f93d2bdbf26fff78f1d16a3b185108f8d112332850_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/is-fullwidth-code-point/index.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("'use strict';
var numberIsNan = require('number-is-nan');

module.exports = function (x) {
\tif (numberIsNan(x)) {
\t\treturn false;
\t}

\t// https://github.com/nodejs/io.js/blob/cff7300a578be1b10001f2d967aaedc88aee6402/lib/readline.js#L1369

\t// code points are derived from:
\t// http://www.unix.org/Public/UNIDATA/EastAsianWidth.txt
\tif (x >= 0x1100 && (
\t\tx <= 0x115f ||  // Hangul Jamo
\t\t0x2329 === x || // LEFT-POINTING ANGLE BRACKET
\t\t0x232a === x || // RIGHT-POINTING ANGLE BRACKET
\t\t// CJK Radicals Supplement .. Enclosed CJK Letters and Months
\t\t(0x2e80 <= x && x <= 0x3247 && x !== 0x303f) ||
\t\t// Enclosed CJK Letters and Months .. CJK Unified Ideographs Extension A
\t\t0x3250 <= x && x <= 0x4dbf ||
\t\t// CJK Unified Ideographs .. Yi Radicals
\t\t0x4e00 <= x && x <= 0xa4c6 ||
\t\t// Hangul Jamo Extended-A
\t\t0xa960 <= x && x <= 0xa97c ||
\t\t// Hangul Syllables
\t\t0xac00 <= x && x <= 0xd7a3 ||
\t\t// CJK Compatibility Ideographs
\t\t0xf900 <= x && x <= 0xfaff ||
\t\t// Vertical Forms
\t\t0xfe10 <= x && x <= 0xfe19 ||
\t\t// CJK Compatibility Forms .. Small Form Variants
\t\t0xfe30 <= x && x <= 0xfe6b ||
\t\t// Halfwidth and Fullwidth Forms
\t\t0xff01 <= x && x <= 0xff60 ||
\t\t0xffe0 <= x && x <= 0xffe6 ||
\t\t// Kana Supplement
\t\t0x1b000 <= x && x <= 0x1b001 ||
\t\t// Enclosed Ideographic Supplement
\t\t0x1f200 <= x && x <= 0x1f251 ||
\t\t// CJK Unified Ideographs Extension B .. Tertiary Ideographic Plane
\t\t0x20000 <= x && x <= 0x3fffd)) {
\t\treturn true;
\t}

\treturn false;
}
", "node_modules/is-fullwidth-code-point/index.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/is-fullwidth-code-point/index.js");
    }
}
