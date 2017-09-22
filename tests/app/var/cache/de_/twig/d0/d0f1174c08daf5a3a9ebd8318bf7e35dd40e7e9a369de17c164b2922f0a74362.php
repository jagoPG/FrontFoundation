<?php

/* node_modules/loader-utils/lib/stringifyRequest.js */
class __TwigTemplate_49069fd80826950f1ade736053213a5a2d70b65fc1df6aeceb2ba8c08522878a extends Twig_Template
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
        $__internal_c542228f622b34e3bf511778a7c626cf06d734253478d6d1e34cc6149e16e79d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c542228f622b34e3bf511778a7c626cf06d734253478d6d1e34cc6149e16e79d->enter($__internal_c542228f622b34e3bf511778a7c626cf06d734253478d6d1e34cc6149e16e79d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/loader-utils/lib/stringifyRequest.js"));

        // line 1
        echo "\"use strict\";

const path = require(\"path\");

const matchRelativePath = /^\\.\\.?[/\\\\]/;

function isAbsolutePath(str) {
\treturn path.posix.isAbsolute(str) || path.win32.isAbsolute(str);
}

function isRelativePath(str) {
\treturn matchRelativePath.test(str);
}

function stringifyRequest(loaderContext, request) {
\tconst splitted = request.split(\"!\");
\tconst context = loaderContext.context || (loaderContext.options && loaderContext.options.context);
\treturn JSON.stringify(splitted.map(part => {
\t\t// First, separate singlePath from query, because the query might contain paths again
\t\tconst splittedPart = part.match(/^(.*?)(\\?.*)/);
\t\tlet singlePath = splittedPart ? splittedPart[1] : part;
\t\tconst query = splittedPart ? splittedPart[2] : \"\";
\t\tif(isAbsolutePath(singlePath) && context) {
\t\t\tsinglePath = path.relative(context, singlePath);
\t\t\tif(isAbsolutePath(singlePath)) {
\t\t\t\t// If singlePath still matches an absolute path, singlePath was on a different drive than context.
\t\t\t\t// In this case, we leave the path platform-specific without replacing any separators.
\t\t\t\t// @see https://github.com/webpack/loader-utils/pull/14
\t\t\t\treturn singlePath + query;
\t\t\t}
\t\t\tif(isRelativePath(singlePath) === false) {
\t\t\t\t// Ensure that the relative path starts at least with ./ otherwise it would be a request into the modules directory (like node_modules).
\t\t\t\tsinglePath = \"./\" + singlePath;
\t\t\t}
\t\t}
\t\treturn singlePath.replace(/\\\\/g, \"/\") + query;
\t}).join(\"!\"));
}

module.exports = stringifyRequest;
";
        
        $__internal_c542228f622b34e3bf511778a7c626cf06d734253478d6d1e34cc6149e16e79d->leave($__internal_c542228f622b34e3bf511778a7c626cf06d734253478d6d1e34cc6149e16e79d_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/loader-utils/lib/stringifyRequest.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("\"use strict\";

const path = require(\"path\");

const matchRelativePath = /^\\.\\.?[/\\\\]/;

function isAbsolutePath(str) {
\treturn path.posix.isAbsolute(str) || path.win32.isAbsolute(str);
}

function isRelativePath(str) {
\treturn matchRelativePath.test(str);
}

function stringifyRequest(loaderContext, request) {
\tconst splitted = request.split(\"!\");
\tconst context = loaderContext.context || (loaderContext.options && loaderContext.options.context);
\treturn JSON.stringify(splitted.map(part => {
\t\t// First, separate singlePath from query, because the query might contain paths again
\t\tconst splittedPart = part.match(/^(.*?)(\\?.*)/);
\t\tlet singlePath = splittedPart ? splittedPart[1] : part;
\t\tconst query = splittedPart ? splittedPart[2] : \"\";
\t\tif(isAbsolutePath(singlePath) && context) {
\t\t\tsinglePath = path.relative(context, singlePath);
\t\t\tif(isAbsolutePath(singlePath)) {
\t\t\t\t// If singlePath still matches an absolute path, singlePath was on a different drive than context.
\t\t\t\t// In this case, we leave the path platform-specific without replacing any separators.
\t\t\t\t// @see https://github.com/webpack/loader-utils/pull/14
\t\t\t\treturn singlePath + query;
\t\t\t}
\t\t\tif(isRelativePath(singlePath) === false) {
\t\t\t\t// Ensure that the relative path starts at least with ./ otherwise it would be a request into the modules directory (like node_modules).
\t\t\t\tsinglePath = \"./\" + singlePath;
\t\t\t}
\t\t}
\t\treturn singlePath.replace(/\\\\/g, \"/\") + query;
\t}).join(\"!\"));
}

module.exports = stringifyRequest;
", "node_modules/loader-utils/lib/stringifyRequest.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/loader-utils/lib/stringifyRequest.js");
    }
}
