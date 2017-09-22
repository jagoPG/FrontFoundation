<?php

/* node_modules/enhanced-resolve/lib/globToRegExp.js */
class __TwigTemplate_300671a5819a050f7c870d14bd60f3eba408c4c26c384da60afae8e12569937c extends Twig_Template
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
        $__internal_6d243fe0804c15219c1d39ed067bd967cafe59bca01bad41aa64a18647d875f0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6d243fe0804c15219c1d39ed067bd967cafe59bca01bad41aa64a18647d875f0->enter($__internal_6d243fe0804c15219c1d39ed067bd967cafe59bca01bad41aa64a18647d875f0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/enhanced-resolve/lib/globToRegExp.js"));

        // line 1
        echo "/*
\tMIT License http://www.opensource.org/licenses/mit-license.php
\tAuthor Tobias Koppers @sokra
*/
function globToRegExp(glob) {
\t// * [^\\\\\\/]*
\t// /**/ /.+/
\t// ^* \\./.+ (concord special)
\t// ? [^\\\\\\/]
\t// [!...] [^...]
\t// [^...] [^...]
\t// / [\\\\\\/]
\t// {...,...} (...|...)
\t// ?(...|...) (...|...)?
\t// +(...|...) (...|...)+
\t// *(...|...) (...|...)*
\t// @(...|...) (...|...)
\tif(/^\\(.+\\)\$/.test(glob)) {
\t\t// allow to pass an RegExp in brackets
\t\treturn new RegExp(glob.substr(1, glob.length - 2));
\t}
\tvar tokens = tokenize(glob);
\tvar process = createRoot();
\tvar regExpStr = tokens.map(process).join(\"\");
\treturn new RegExp(\"^\" + regExpStr + \"\$\");
}

var SIMPLE_TOKENS = {
\t\"@(\": \"one\",
\t\"?(\": \"zero-one\",
\t\"+(\": \"one-many\",
\t\"*(\": \"zero-many\",
\t\"|\": \"segment-sep\",
\t\"/**/\": \"any-path-segments\",
\t\"**\": \"any-path\",
\t\"*\": \"any-path-segment\",
\t\"?\": \"any-char\",
\t\"{\": \"or\",
\t\"/\": \"path-sep\",
\t\",\": \"comma\",
\t\")\": \"closing-segment\",
\t\"}\": \"closing-or\"
};

function tokenize(glob) {
\treturn glob.split(/([@?+*]\\(|\\/\\*\\*\\/|\\*\\*|[?*]|\\[[\\!\\^]?(?:[^\\]\\\\]|\\\\.)+\\]|\\{|,|\\/|[|)}])/g).map(function(item) {
\t\tif(!item)
\t\t\treturn null;
\t\tvar t = SIMPLE_TOKENS[item];
\t\tif(t) {
\t\t\treturn {
\t\t\t\ttype: t
\t\t\t};
\t\t}
\t\tif(item[0] === \"[\") {
\t\t\tif(item[1] === \"^\" || item[1] === \"!\") {
\t\t\t\treturn {
\t\t\t\t\ttype: \"inverted-char-set\",
\t\t\t\t\tvalue: item.substr(2, item.length - 3)
\t\t\t\t};
\t\t\t} else {
\t\t\t\treturn {
\t\t\t\t\ttype: \"char-set\",
\t\t\t\t\tvalue: item.substr(1, item.length - 2)
\t\t\t\t};
\t\t\t}
\t\t}
\t\treturn {
\t\t\ttype: \"string\",
\t\t\tvalue: item
\t\t};
\t}).filter(Boolean).concat({
\t\ttype: \"end\"
\t});
}

function createRoot() {
\tvar inOr = [];
\tvar process = createSeqment();
\tvar initial = true;
\treturn function(token) {
\t\tswitch(token.type) {
\t\t\tcase \"or\":
\t\t\t\tinOr.push(initial);
\t\t\t\treturn \"(\";
\t\t\tcase \"comma\":
\t\t\t\tif(inOr.length) {
\t\t\t\t\tinitial = inOr[inOr.length - 1];
\t\t\t\t\treturn \"|\";
\t\t\t\t} else {
\t\t\t\t\treturn process({
\t\t\t\t\t\ttype: \"string\",
\t\t\t\t\t\tvalue: \",\"
\t\t\t\t\t}, initial);
\t\t\t\t}
\t\t\tcase \"closing-or\":
\t\t\t\tif(inOr.length === 0)
\t\t\t\t\tthrow new Error(\"Unmatched '}'\");
\t\t\t\tinOr.pop();
\t\t\t\treturn \")\";
\t\t\tcase \"end\":
\t\t\t\tif(inOr.length)
\t\t\t\t\tthrow new Error(\"Unmatched '{'\");
\t\t\t\treturn process(token, initial);
\t\t\tdefault:
\t\t\t\tvar result = process(token, initial);
\t\t\t\tinitial = false;
\t\t\t\treturn result;
\t\t}
\t};
}

function createSeqment() {
\tvar inSeqment = [];
\tvar process = createSimple();
\treturn function(token, initial) {
\t\tswitch(token.type) {
\t\t\tcase \"one\":
\t\t\tcase \"one-many\":
\t\t\tcase \"zero-many\":
\t\t\tcase \"zero-one\":
\t\t\t\tinSeqment.push(token.type);
\t\t\t\treturn \"(\";
\t\t\tcase \"segment-sep\":
\t\t\t\tif(inSeqment.length) {
\t\t\t\t\treturn \"|\";
\t\t\t\t} else {
\t\t\t\t\treturn process({
\t\t\t\t\t\ttype: \"string\",
\t\t\t\t\t\tvalue: \"|\"
\t\t\t\t\t}, initial);
\t\t\t\t}
\t\t\tcase \"closing-segment\":
\t\t\t\tvar segment = inSeqment.pop();
\t\t\t\tswitch(segment) {
\t\t\t\t\tcase \"one\":
\t\t\t\t\t\treturn \")\";
\t\t\t\t\tcase \"one-many\":
\t\t\t\t\t\treturn \")+\";
\t\t\t\t\tcase \"zero-many\":
\t\t\t\t\t\treturn \")*\";
\t\t\t\t\tcase \"zero-one\":
\t\t\t\t\t\treturn \")?\";
\t\t\t\t}
\t\t\t\tthrow new Error(\"Unexcepted segment \" + segment);
\t\t\tcase \"end\":
\t\t\t\tif(inSeqment.length > 0) {
\t\t\t\t\tthrow new Error(\"Unmatched segment, missing ')'\");
\t\t\t\t}
\t\t\t\treturn process(token, initial);
\t\t\tdefault:
\t\t\t\treturn process(token, initial);
\t\t}
\t};
}

function createSimple() {
\treturn function(token, initial) {
\t\tswitch(token.type) {
\t\t\tcase \"path-sep\":
\t\t\t\treturn \"[\\\\\\\\/]+\";
\t\t\tcase \"any-path-segments\":
\t\t\t\treturn \"[\\\\\\\\/]+(?:(.+)[\\\\\\\\/]+)?\";
\t\t\tcase \"any-path\":
\t\t\t\treturn \"(.*)\";
\t\t\tcase \"any-path-segment\":
\t\t\t\tif(initial) {
\t\t\t\t\treturn \"\\\\.[\\\\\\\\/]+(?:.*[\\\\\\\\/]+)?([^\\\\\\\\/]+)\";
\t\t\t\t} else {
\t\t\t\t\treturn \"([^\\\\\\\\/]*)\";
\t\t\t\t}
\t\t\tcase \"any-char\":
\t\t\t\treturn \"[^\\\\\\\\/]\";
\t\t\tcase \"inverted-char-set\":
\t\t\t\treturn \"[^\" + token.value + \"]\";
\t\t\tcase \"char-set\":
\t\t\t\treturn \"[\" + token.value + \"]\";
\t\t\tcase \"string\":
\t\t\t\treturn token.value.replace(/[-[\\]{}()*+?.,\\\\^\$|#\\s]/g, \"\\\\\$&\");
\t\t\tcase \"end\":
\t\t\t\treturn \"\";
\t\t\tdefault:
\t\t\t\tthrow new Error(\"Unsupported token '\" + token.type + \"'\");
\t\t}
\t};
}

exports.globToRegExp = globToRegExp;
";
        
        $__internal_6d243fe0804c15219c1d39ed067bd967cafe59bca01bad41aa64a18647d875f0->leave($__internal_6d243fe0804c15219c1d39ed067bd967cafe59bca01bad41aa64a18647d875f0_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/enhanced-resolve/lib/globToRegExp.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("/*
\tMIT License http://www.opensource.org/licenses/mit-license.php
\tAuthor Tobias Koppers @sokra
*/
function globToRegExp(glob) {
\t// * [^\\\\\\/]*
\t// /**/ /.+/
\t// ^* \\./.+ (concord special)
\t// ? [^\\\\\\/]
\t// [!...] [^...]
\t// [^...] [^...]
\t// / [\\\\\\/]
\t// {...,...} (...|...)
\t// ?(...|...) (...|...)?
\t// +(...|...) (...|...)+
\t// *(...|...) (...|...)*
\t// @(...|...) (...|...)
\tif(/^\\(.+\\)\$/.test(glob)) {
\t\t// allow to pass an RegExp in brackets
\t\treturn new RegExp(glob.substr(1, glob.length - 2));
\t}
\tvar tokens = tokenize(glob);
\tvar process = createRoot();
\tvar regExpStr = tokens.map(process).join(\"\");
\treturn new RegExp(\"^\" + regExpStr + \"\$\");
}

var SIMPLE_TOKENS = {
\t\"@(\": \"one\",
\t\"?(\": \"zero-one\",
\t\"+(\": \"one-many\",
\t\"*(\": \"zero-many\",
\t\"|\": \"segment-sep\",
\t\"/**/\": \"any-path-segments\",
\t\"**\": \"any-path\",
\t\"*\": \"any-path-segment\",
\t\"?\": \"any-char\",
\t\"{\": \"or\",
\t\"/\": \"path-sep\",
\t\",\": \"comma\",
\t\")\": \"closing-segment\",
\t\"}\": \"closing-or\"
};

function tokenize(glob) {
\treturn glob.split(/([@?+*]\\(|\\/\\*\\*\\/|\\*\\*|[?*]|\\[[\\!\\^]?(?:[^\\]\\\\]|\\\\.)+\\]|\\{|,|\\/|[|)}])/g).map(function(item) {
\t\tif(!item)
\t\t\treturn null;
\t\tvar t = SIMPLE_TOKENS[item];
\t\tif(t) {
\t\t\treturn {
\t\t\t\ttype: t
\t\t\t};
\t\t}
\t\tif(item[0] === \"[\") {
\t\t\tif(item[1] === \"^\" || item[1] === \"!\") {
\t\t\t\treturn {
\t\t\t\t\ttype: \"inverted-char-set\",
\t\t\t\t\tvalue: item.substr(2, item.length - 3)
\t\t\t\t};
\t\t\t} else {
\t\t\t\treturn {
\t\t\t\t\ttype: \"char-set\",
\t\t\t\t\tvalue: item.substr(1, item.length - 2)
\t\t\t\t};
\t\t\t}
\t\t}
\t\treturn {
\t\t\ttype: \"string\",
\t\t\tvalue: item
\t\t};
\t}).filter(Boolean).concat({
\t\ttype: \"end\"
\t});
}

function createRoot() {
\tvar inOr = [];
\tvar process = createSeqment();
\tvar initial = true;
\treturn function(token) {
\t\tswitch(token.type) {
\t\t\tcase \"or\":
\t\t\t\tinOr.push(initial);
\t\t\t\treturn \"(\";
\t\t\tcase \"comma\":
\t\t\t\tif(inOr.length) {
\t\t\t\t\tinitial = inOr[inOr.length - 1];
\t\t\t\t\treturn \"|\";
\t\t\t\t} else {
\t\t\t\t\treturn process({
\t\t\t\t\t\ttype: \"string\",
\t\t\t\t\t\tvalue: \",\"
\t\t\t\t\t}, initial);
\t\t\t\t}
\t\t\tcase \"closing-or\":
\t\t\t\tif(inOr.length === 0)
\t\t\t\t\tthrow new Error(\"Unmatched '}'\");
\t\t\t\tinOr.pop();
\t\t\t\treturn \")\";
\t\t\tcase \"end\":
\t\t\t\tif(inOr.length)
\t\t\t\t\tthrow new Error(\"Unmatched '{'\");
\t\t\t\treturn process(token, initial);
\t\t\tdefault:
\t\t\t\tvar result = process(token, initial);
\t\t\t\tinitial = false;
\t\t\t\treturn result;
\t\t}
\t};
}

function createSeqment() {
\tvar inSeqment = [];
\tvar process = createSimple();
\treturn function(token, initial) {
\t\tswitch(token.type) {
\t\t\tcase \"one\":
\t\t\tcase \"one-many\":
\t\t\tcase \"zero-many\":
\t\t\tcase \"zero-one\":
\t\t\t\tinSeqment.push(token.type);
\t\t\t\treturn \"(\";
\t\t\tcase \"segment-sep\":
\t\t\t\tif(inSeqment.length) {
\t\t\t\t\treturn \"|\";
\t\t\t\t} else {
\t\t\t\t\treturn process({
\t\t\t\t\t\ttype: \"string\",
\t\t\t\t\t\tvalue: \"|\"
\t\t\t\t\t}, initial);
\t\t\t\t}
\t\t\tcase \"closing-segment\":
\t\t\t\tvar segment = inSeqment.pop();
\t\t\t\tswitch(segment) {
\t\t\t\t\tcase \"one\":
\t\t\t\t\t\treturn \")\";
\t\t\t\t\tcase \"one-many\":
\t\t\t\t\t\treturn \")+\";
\t\t\t\t\tcase \"zero-many\":
\t\t\t\t\t\treturn \")*\";
\t\t\t\t\tcase \"zero-one\":
\t\t\t\t\t\treturn \")?\";
\t\t\t\t}
\t\t\t\tthrow new Error(\"Unexcepted segment \" + segment);
\t\t\tcase \"end\":
\t\t\t\tif(inSeqment.length > 0) {
\t\t\t\t\tthrow new Error(\"Unmatched segment, missing ')'\");
\t\t\t\t}
\t\t\t\treturn process(token, initial);
\t\t\tdefault:
\t\t\t\treturn process(token, initial);
\t\t}
\t};
}

function createSimple() {
\treturn function(token, initial) {
\t\tswitch(token.type) {
\t\t\tcase \"path-sep\":
\t\t\t\treturn \"[\\\\\\\\/]+\";
\t\t\tcase \"any-path-segments\":
\t\t\t\treturn \"[\\\\\\\\/]+(?:(.+)[\\\\\\\\/]+)?\";
\t\t\tcase \"any-path\":
\t\t\t\treturn \"(.*)\";
\t\t\tcase \"any-path-segment\":
\t\t\t\tif(initial) {
\t\t\t\t\treturn \"\\\\.[\\\\\\\\/]+(?:.*[\\\\\\\\/]+)?([^\\\\\\\\/]+)\";
\t\t\t\t} else {
\t\t\t\t\treturn \"([^\\\\\\\\/]*)\";
\t\t\t\t}
\t\t\tcase \"any-char\":
\t\t\t\treturn \"[^\\\\\\\\/]\";
\t\t\tcase \"inverted-char-set\":
\t\t\t\treturn \"[^\" + token.value + \"]\";
\t\t\tcase \"char-set\":
\t\t\t\treturn \"[\" + token.value + \"]\";
\t\t\tcase \"string\":
\t\t\t\treturn token.value.replace(/[-[\\]{}()*+?.,\\\\^\$|#\\s]/g, \"\\\\\$&\");
\t\t\tcase \"end\":
\t\t\t\treturn \"\";
\t\t\tdefault:
\t\t\t\tthrow new Error(\"Unsupported token '\" + token.type + \"'\");
\t\t}
\t};
}

exports.globToRegExp = globToRegExp;
", "node_modules/enhanced-resolve/lib/globToRegExp.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/enhanced-resolve/lib/globToRegExp.js");
    }
}
