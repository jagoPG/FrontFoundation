<?php

/* node_modules/loader-utils/lib/urlToRequest.js */
class __TwigTemplate_0206f88e8cf79dab91ac292040eed59a240921f52213352b72ecde4164b4cfc4 extends Twig_Template
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
        $__internal_20a716c33d685100f78a3b442977497251779b4d918436a1524c5e74cfcecd79 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_20a716c33d685100f78a3b442977497251779b4d918436a1524c5e74cfcecd79->enter($__internal_20a716c33d685100f78a3b442977497251779b4d918436a1524c5e74cfcecd79_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/loader-utils/lib/urlToRequest.js"));

        // line 1
        echo "\"use strict\";

// we can't use path.win32.isAbsolute because it also matches paths starting with a forward slash
const matchNativeWin32Path = /^[A-Z]:[/\\\\]|^\\\\\\\\/i;

function urlToRequest(url, root) {
\tconst moduleRequestRegex = /^[^?]*~/;
\tlet request;

\tif(matchNativeWin32Path.test(url)) {
\t\t// absolute windows path, keep it
\t\trequest = url;
\t} else if(root !== undefined && root !== false && /^\\//.test(url)) {
\t\t// if root is set and the url is root-relative
\t\tswitch(typeof root) {
\t\t\t// 1. root is a string: root is prefixed to the url
\t\t\tcase \"string\":
\t\t\t\t// special case: `~` roots convert to module request
\t\t\t\tif(moduleRequestRegex.test(root)) {
\t\t\t\t\trequest = root.replace(/([^~\\/])\$/, \"\$1/\") + url.slice(1);
\t\t\t\t} else {
\t\t\t\t\trequest = root + url;
\t\t\t\t}
\t\t\t\tbreak;
\t\t\t// 2. root is `true`: absolute paths are allowed
\t\t\t//    *nix only, windows-style absolute paths are always allowed as they doesn't start with a `/`
\t\t\tcase \"boolean\":
\t\t\t\trequest = url;
\t\t\t\tbreak;
\t\t\tdefault:
\t\t\t\tthrow new Error(\"Unexpected parameters to loader-utils 'urlToRequest': url = \" + url + \", root = \" + root + \".\");
\t\t}
\t} else if(/^\\.\\.?\\//.test(url)) {
\t\t// A relative url stays
\t\trequest = url;
\t} else {
\t\t// every other url is threaded like a relative url
\t\trequest = \"./\" + url;
\t}

\t// A `~` makes the url an module
\tif(moduleRequestRegex.test(request)) {
\t\trequest = request.replace(moduleRequestRegex, \"\");
\t}

\treturn request;
}

module.exports = urlToRequest;
";
        
        $__internal_20a716c33d685100f78a3b442977497251779b4d918436a1524c5e74cfcecd79->leave($__internal_20a716c33d685100f78a3b442977497251779b4d918436a1524c5e74cfcecd79_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/loader-utils/lib/urlToRequest.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("\"use strict\";

// we can't use path.win32.isAbsolute because it also matches paths starting with a forward slash
const matchNativeWin32Path = /^[A-Z]:[/\\\\]|^\\\\\\\\/i;

function urlToRequest(url, root) {
\tconst moduleRequestRegex = /^[^?]*~/;
\tlet request;

\tif(matchNativeWin32Path.test(url)) {
\t\t// absolute windows path, keep it
\t\trequest = url;
\t} else if(root !== undefined && root !== false && /^\\//.test(url)) {
\t\t// if root is set and the url is root-relative
\t\tswitch(typeof root) {
\t\t\t// 1. root is a string: root is prefixed to the url
\t\t\tcase \"string\":
\t\t\t\t// special case: `~` roots convert to module request
\t\t\t\tif(moduleRequestRegex.test(root)) {
\t\t\t\t\trequest = root.replace(/([^~\\/])\$/, \"\$1/\") + url.slice(1);
\t\t\t\t} else {
\t\t\t\t\trequest = root + url;
\t\t\t\t}
\t\t\t\tbreak;
\t\t\t// 2. root is `true`: absolute paths are allowed
\t\t\t//    *nix only, windows-style absolute paths are always allowed as they doesn't start with a `/`
\t\t\tcase \"boolean\":
\t\t\t\trequest = url;
\t\t\t\tbreak;
\t\t\tdefault:
\t\t\t\tthrow new Error(\"Unexpected parameters to loader-utils 'urlToRequest': url = \" + url + \", root = \" + root + \".\");
\t\t}
\t} else if(/^\\.\\.?\\//.test(url)) {
\t\t// A relative url stays
\t\trequest = url;
\t} else {
\t\t// every other url is threaded like a relative url
\t\trequest = \"./\" + url;
\t}

\t// A `~` makes the url an module
\tif(moduleRequestRegex.test(request)) {
\t\trequest = request.replace(moduleRequestRegex, \"\");
\t}

\treturn request;
}

module.exports = urlToRequest;
", "node_modules/loader-utils/lib/urlToRequest.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/loader-utils/lib/urlToRequest.js");
    }
}
