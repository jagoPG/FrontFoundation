<?php

/* node_modules/memory-fs/lib/normalize.js */
class __TwigTemplate_6345caf619dc94cd03e9d7b94d917cc3b7e453d76264a8f53b975ea4c064e0b2 extends Twig_Template
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
        $__internal_5c9461220d2f3416b66767e93e8744c97181dc108c7570c4d9909f82790eb3bc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5c9461220d2f3416b66767e93e8744c97181dc108c7570c4d9909f82790eb3bc->enter($__internal_5c9461220d2f3416b66767e93e8744c97181dc108c7570c4d9909f82790eb3bc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/memory-fs/lib/normalize.js"));

        // line 1
        echo "module.exports = function normalize(path) {
\tvar parts = path.split(/(\\\\+|\\/+)/);
\tif(parts.length === 1)
\t\treturn path;
\tvar result = [];
\tvar absolutePathStart = 0;
\tfor(var i = 0, sep = false; i < parts.length; i++, sep = !sep) {
\t\tvar part = parts[i];
\t\tif(i === 0 && /^([A-Z]:)?\$/i.test(part)) {
\t\t\tresult.push(part);
\t\t\tabsolutePathStart = 2;
\t\t} else if(sep) {
\t\t\tresult.push(part[0]);
\t\t} else if(part === \"..\") {
\t\t\tswitch(result.length) {
\t\t\t\tcase 0:
\t\t\t\t\t// i. e. \"..\" => \"..\"
\t\t\t\t\t// i. e. \"../a/b/c\" => \"../a/b/c\"
\t\t\t\t\tresult.push(part);
\t\t\t\t\tbreak;
\t\t\t\tcase 2:
\t\t\t\t\t// i. e. \"a/..\" => \"\"
\t\t\t\t\t// i. e. \"/..\" => \"/\"
\t\t\t\t\t// i. e. \"C:\\..\" => \"C:\\\"
\t\t\t\t\t// i. e. \"a/../b/c\" => \"b/c\"
\t\t\t\t\t// i. e. \"/../b/c\" => \"/b/c\"
\t\t\t\t\t// i. e. \"C:\\..\\a\\b\\c\" => \"C:\\a\\b\\c\"
\t\t\t\t\ti++;
\t\t\t\t\tsep = !sep;
\t\t\t\t\tresult.length = absolutePathStart;
\t\t\t\t\tbreak;
\t\t\t\tcase 4:
\t\t\t\t\t// i. e. \"a/b/..\" => \"a\"
\t\t\t\t\t// i. e. \"/a/..\" => \"/\"
\t\t\t\t\t// i. e. \"C:\\a\\..\" => \"C:\\\"
\t\t\t\t\t// i. e. \"/a/../b/c\" => \"/b/c\"
\t\t\t\t\tif(absolutePathStart === 0) {
\t\t\t\t\t\tresult.length -= 3;
\t\t\t\t\t} else {
\t\t\t\t\t\ti++;
\t\t\t\t\t\tsep = !sep;
\t\t\t\t\t\tresult.length = 2;
\t\t\t\t\t}
\t\t\t\t\tbreak;
\t\t\t\tdefault:
\t\t\t\t\t// i. e. \"/a/b/..\" => \"/a\"
\t\t\t\t\t// i. e. \"/a/b/../c\" => \"/a/c\"
\t\t\t\t\tresult.length -= 3;
\t\t\t\t\tbreak;
\t\t\t}
\t\t} else if(part === \".\") {
\t\t\tswitch(result.length) {
\t\t\t\tcase 0:
\t\t\t\t\t// i. e. \".\" => \".\"
\t\t\t\t\t// i. e. \"./a/b/c\" => \"./a/b/c\"
\t\t\t\t\tresult.push(part);
\t\t\t\t\tbreak;
\t\t\t\tcase 2:
\t\t\t\t\t// i. e. \"a/.\" => \"a\"
\t\t\t\t\t// i. e. \"/.\" => \"/\"
\t\t\t\t\t// i. e. \"C:\\.\" => \"C:\\\"
\t\t\t\t\t// i. e. \"C:\\.\\a\\b\\c\" => \"C:\\a\\b\\c\"
\t\t\t\t\tif(absolutePathStart === 0) {
\t\t\t\t\t\tresult.length--;
\t\t\t\t\t} else {
\t\t\t\t\t\ti++;
\t\t\t\t\t\tsep = !sep;
\t\t\t\t\t}
\t\t\t\t\tbreak;
\t\t\t\tdefault:
\t\t\t\t\t// i. e. \"a/b/.\" => \"a/b\"
\t\t\t\t\t// i. e. \"/a/.\" => \"/\"
\t\t\t\t\t// i. e. \"C:\\a\\.\" => \"C:\\\"
\t\t\t\t\t// i. e. \"a/./b/c\" => \"a/b/c\"
\t\t\t\t\t// i. e. \"/a/./b/c\" => \"/a/b/c\"
\t\t\t\t\tresult.length--;
\t\t\t\t\tbreak;
\t\t\t}
\t\t} else if(part) {
\t\t\tresult.push(part);
\t\t}
\t}
\tif(result.length === 1 && /^[A-Za-z]:\$/.test(result))
\t\treturn result[0] + \"\\\\\";
\treturn result.join(\"\");
};
";
        
        $__internal_5c9461220d2f3416b66767e93e8744c97181dc108c7570c4d9909f82790eb3bc->leave($__internal_5c9461220d2f3416b66767e93e8744c97181dc108c7570c4d9909f82790eb3bc_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/memory-fs/lib/normalize.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("module.exports = function normalize(path) {
\tvar parts = path.split(/(\\\\+|\\/+)/);
\tif(parts.length === 1)
\t\treturn path;
\tvar result = [];
\tvar absolutePathStart = 0;
\tfor(var i = 0, sep = false; i < parts.length; i++, sep = !sep) {
\t\tvar part = parts[i];
\t\tif(i === 0 && /^([A-Z]:)?\$/i.test(part)) {
\t\t\tresult.push(part);
\t\t\tabsolutePathStart = 2;
\t\t} else if(sep) {
\t\t\tresult.push(part[0]);
\t\t} else if(part === \"..\") {
\t\t\tswitch(result.length) {
\t\t\t\tcase 0:
\t\t\t\t\t// i. e. \"..\" => \"..\"
\t\t\t\t\t// i. e. \"../a/b/c\" => \"../a/b/c\"
\t\t\t\t\tresult.push(part);
\t\t\t\t\tbreak;
\t\t\t\tcase 2:
\t\t\t\t\t// i. e. \"a/..\" => \"\"
\t\t\t\t\t// i. e. \"/..\" => \"/\"
\t\t\t\t\t// i. e. \"C:\\..\" => \"C:\\\"
\t\t\t\t\t// i. e. \"a/../b/c\" => \"b/c\"
\t\t\t\t\t// i. e. \"/../b/c\" => \"/b/c\"
\t\t\t\t\t// i. e. \"C:\\..\\a\\b\\c\" => \"C:\\a\\b\\c\"
\t\t\t\t\ti++;
\t\t\t\t\tsep = !sep;
\t\t\t\t\tresult.length = absolutePathStart;
\t\t\t\t\tbreak;
\t\t\t\tcase 4:
\t\t\t\t\t// i. e. \"a/b/..\" => \"a\"
\t\t\t\t\t// i. e. \"/a/..\" => \"/\"
\t\t\t\t\t// i. e. \"C:\\a\\..\" => \"C:\\\"
\t\t\t\t\t// i. e. \"/a/../b/c\" => \"/b/c\"
\t\t\t\t\tif(absolutePathStart === 0) {
\t\t\t\t\t\tresult.length -= 3;
\t\t\t\t\t} else {
\t\t\t\t\t\ti++;
\t\t\t\t\t\tsep = !sep;
\t\t\t\t\t\tresult.length = 2;
\t\t\t\t\t}
\t\t\t\t\tbreak;
\t\t\t\tdefault:
\t\t\t\t\t// i. e. \"/a/b/..\" => \"/a\"
\t\t\t\t\t// i. e. \"/a/b/../c\" => \"/a/c\"
\t\t\t\t\tresult.length -= 3;
\t\t\t\t\tbreak;
\t\t\t}
\t\t} else if(part === \".\") {
\t\t\tswitch(result.length) {
\t\t\t\tcase 0:
\t\t\t\t\t// i. e. \".\" => \".\"
\t\t\t\t\t// i. e. \"./a/b/c\" => \"./a/b/c\"
\t\t\t\t\tresult.push(part);
\t\t\t\t\tbreak;
\t\t\t\tcase 2:
\t\t\t\t\t// i. e. \"a/.\" => \"a\"
\t\t\t\t\t// i. e. \"/.\" => \"/\"
\t\t\t\t\t// i. e. \"C:\\.\" => \"C:\\\"
\t\t\t\t\t// i. e. \"C:\\.\\a\\b\\c\" => \"C:\\a\\b\\c\"
\t\t\t\t\tif(absolutePathStart === 0) {
\t\t\t\t\t\tresult.length--;
\t\t\t\t\t} else {
\t\t\t\t\t\ti++;
\t\t\t\t\t\tsep = !sep;
\t\t\t\t\t}
\t\t\t\t\tbreak;
\t\t\t\tdefault:
\t\t\t\t\t// i. e. \"a/b/.\" => \"a/b\"
\t\t\t\t\t// i. e. \"/a/.\" => \"/\"
\t\t\t\t\t// i. e. \"C:\\a\\.\" => \"C:\\\"
\t\t\t\t\t// i. e. \"a/./b/c\" => \"a/b/c\"
\t\t\t\t\t// i. e. \"/a/./b/c\" => \"/a/b/c\"
\t\t\t\t\tresult.length--;
\t\t\t\t\tbreak;
\t\t\t}
\t\t} else if(part) {
\t\t\tresult.push(part);
\t\t}
\t}
\tif(result.length === 1 && /^[A-Za-z]:\$/.test(result))
\t\treturn result[0] + \"\\\\\";
\treturn result.join(\"\");
};
", "node_modules/memory-fs/lib/normalize.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/memory-fs/lib/normalize.js");
    }
}
