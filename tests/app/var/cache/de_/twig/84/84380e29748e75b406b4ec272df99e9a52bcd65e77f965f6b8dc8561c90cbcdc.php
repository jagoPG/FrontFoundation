<?php

/* node_modules/webpack/lib/ContextReplacementPlugin.js */
class __TwigTemplate_33afabd231abfc3870f917df9da2f4f3b5ee1c313803620d3111cfa7f7dd3fd2 extends Twig_Template
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
        $__internal_4306830af7d495c3a4da5293afd923e21a93c1bc3c798b8ad0ca16750cb1e851 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4306830af7d495c3a4da5293afd923e21a93c1bc3c798b8ad0ca16750cb1e851->enter($__internal_4306830af7d495c3a4da5293afd923e21a93c1bc3c798b8ad0ca16750cb1e851_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/webpack/lib/ContextReplacementPlugin.js"));

        // line 1
        echo "/*
\tMIT License http://www.opensource.org/licenses/mit-license.php
\tAuthor Tobias Koppers @sokra
*/
\"use strict\";

const path = require(\"path\");
const ContextElementDependency = require(\"./dependencies/ContextElementDependency\");

class ContextReplacementPlugin {
\tconstructor(resourceRegExp, newContentResource, newContentRecursive, newContentRegExp) {
\t\tthis.resourceRegExp = resourceRegExp;

\t\tif(typeof newContentResource === \"function\") {
\t\t\tthis.newContentCallback = newContentResource;
\t\t} else if(typeof newContentResource === \"string\" && typeof newContentRecursive === \"object\") {
\t\t\tthis.newContentResource = newContentResource;
\t\t\tthis.newContentCreateContextMap = (fs, callback) => {
\t\t\t\tcallback(null, newContentRecursive);
\t\t\t};
\t\t} else if(typeof newContentResource === \"string\" && typeof newContentRecursive === \"function\") {
\t\t\tthis.newContentResource = newContentResource;
\t\t\tthis.newContentCreateContextMap = newContentRecursive;
\t\t} else {
\t\t\tif(typeof newContentResource !== \"string\") {
\t\t\t\tnewContentRegExp = newContentRecursive;
\t\t\t\tnewContentRecursive = newContentResource;
\t\t\t\tnewContentResource = undefined;
\t\t\t}
\t\t\tif(typeof newContentRecursive !== \"boolean\") {
\t\t\t\tnewContentRegExp = newContentRecursive;
\t\t\t\tnewContentRecursive = undefined;
\t\t\t}
\t\t\tthis.newContentResource = newContentResource;
\t\t\tthis.newContentRecursive = newContentRecursive;
\t\t\tthis.newContentRegExp = newContentRegExp;
\t\t}
\t}

\tapply(compiler) {
\t\tconst resourceRegExp = this.resourceRegExp;
\t\tconst newContentCallback = this.newContentCallback;
\t\tconst newContentResource = this.newContentResource;
\t\tconst newContentRecursive = this.newContentRecursive;
\t\tconst newContentRegExp = this.newContentRegExp;
\t\tconst newContentCreateContextMap = this.newContentCreateContextMap;

\t\tcompiler.plugin(\"context-module-factory\", (cmf) => {
\t\t\tcmf.plugin(\"before-resolve\", (result, callback) => {
\t\t\t\tif(!result) return callback();
\t\t\t\tif(resourceRegExp.test(result.request)) {
\t\t\t\t\tif(typeof newContentResource !== \"undefined\")
\t\t\t\t\t\tresult.request = newContentResource;
\t\t\t\t\tif(typeof newContentRecursive !== \"undefined\")
\t\t\t\t\t\tresult.recursive = newContentRecursive;
\t\t\t\t\tif(typeof newContentRegExp !== \"undefined\")
\t\t\t\t\t\tresult.regExp = newContentRegExp;
\t\t\t\t\tif(typeof newContentCallback === \"function\") {
\t\t\t\t\t\tnewContentCallback(result);
\t\t\t\t\t} else {
\t\t\t\t\t\tresult.dependencies.forEach((d) => {
\t\t\t\t\t\t\tif(d.critical)
\t\t\t\t\t\t\t\td.critical = false;
\t\t\t\t\t\t});
\t\t\t\t\t}
\t\t\t\t}
\t\t\t\treturn callback(null, result);
\t\t\t});
\t\t\tcmf.plugin(\"after-resolve\", (result, callback) => {
\t\t\t\tif(!result) return callback();
\t\t\t\tif(resourceRegExp.test(result.resource)) {
\t\t\t\t\tif(typeof newContentResource !== \"undefined\")
\t\t\t\t\t\tresult.resource = path.resolve(result.resource, newContentResource);
\t\t\t\t\tif(typeof newContentRecursive !== \"undefined\")
\t\t\t\t\t\tresult.recursive = newContentRecursive;
\t\t\t\t\tif(typeof newContentRegExp !== \"undefined\")
\t\t\t\t\t\tresult.regExp = newContentRegExp;
\t\t\t\t\tif(typeof newContentCreateContextMap === \"function\")
\t\t\t\t\t\tresult.resolveDependencies = createResolveDependenciesFromContextMap(newContentCreateContextMap);
\t\t\t\t\tif(typeof newContentCallback === \"function\") {
\t\t\t\t\t\tconst origResource = result.resource;
\t\t\t\t\t\tnewContentCallback(result);
\t\t\t\t\t\tif(result.resource !== origResource) {
\t\t\t\t\t\t\tresult.resource = path.resolve(origResource, result.resource);
\t\t\t\t\t\t}
\t\t\t\t\t} else {
\t\t\t\t\t\tresult.dependencies.forEach((d) => {
\t\t\t\t\t\t\tif(d.critical)
\t\t\t\t\t\t\t\td.critical = false;
\t\t\t\t\t\t});
\t\t\t\t\t}
\t\t\t\t}
\t\t\t\treturn callback(null, result);
\t\t\t});
\t\t});
\t}
}

const createResolveDependenciesFromContextMap = (createContextMap) => {
\treturn function resolveDependenciesFromContextMap(fs, resource, recursive, regExp, callback) {
\t\tcreateContextMap(fs, (err, map) => {
\t\t\tif(err) return callback(err);
\t\t\tconst dependencies = Object.keys(map).map((key) => {
\t\t\t\treturn new ContextElementDependency(map[key], key);
\t\t\t});
\t\t\tcallback(null, dependencies);
\t\t});
\t};
};

module.exports = ContextReplacementPlugin;
";
        
        $__internal_4306830af7d495c3a4da5293afd923e21a93c1bc3c798b8ad0ca16750cb1e851->leave($__internal_4306830af7d495c3a4da5293afd923e21a93c1bc3c798b8ad0ca16750cb1e851_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/webpack/lib/ContextReplacementPlugin.js";
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
\"use strict\";

const path = require(\"path\");
const ContextElementDependency = require(\"./dependencies/ContextElementDependency\");

class ContextReplacementPlugin {
\tconstructor(resourceRegExp, newContentResource, newContentRecursive, newContentRegExp) {
\t\tthis.resourceRegExp = resourceRegExp;

\t\tif(typeof newContentResource === \"function\") {
\t\t\tthis.newContentCallback = newContentResource;
\t\t} else if(typeof newContentResource === \"string\" && typeof newContentRecursive === \"object\") {
\t\t\tthis.newContentResource = newContentResource;
\t\t\tthis.newContentCreateContextMap = (fs, callback) => {
\t\t\t\tcallback(null, newContentRecursive);
\t\t\t};
\t\t} else if(typeof newContentResource === \"string\" && typeof newContentRecursive === \"function\") {
\t\t\tthis.newContentResource = newContentResource;
\t\t\tthis.newContentCreateContextMap = newContentRecursive;
\t\t} else {
\t\t\tif(typeof newContentResource !== \"string\") {
\t\t\t\tnewContentRegExp = newContentRecursive;
\t\t\t\tnewContentRecursive = newContentResource;
\t\t\t\tnewContentResource = undefined;
\t\t\t}
\t\t\tif(typeof newContentRecursive !== \"boolean\") {
\t\t\t\tnewContentRegExp = newContentRecursive;
\t\t\t\tnewContentRecursive = undefined;
\t\t\t}
\t\t\tthis.newContentResource = newContentResource;
\t\t\tthis.newContentRecursive = newContentRecursive;
\t\t\tthis.newContentRegExp = newContentRegExp;
\t\t}
\t}

\tapply(compiler) {
\t\tconst resourceRegExp = this.resourceRegExp;
\t\tconst newContentCallback = this.newContentCallback;
\t\tconst newContentResource = this.newContentResource;
\t\tconst newContentRecursive = this.newContentRecursive;
\t\tconst newContentRegExp = this.newContentRegExp;
\t\tconst newContentCreateContextMap = this.newContentCreateContextMap;

\t\tcompiler.plugin(\"context-module-factory\", (cmf) => {
\t\t\tcmf.plugin(\"before-resolve\", (result, callback) => {
\t\t\t\tif(!result) return callback();
\t\t\t\tif(resourceRegExp.test(result.request)) {
\t\t\t\t\tif(typeof newContentResource !== \"undefined\")
\t\t\t\t\t\tresult.request = newContentResource;
\t\t\t\t\tif(typeof newContentRecursive !== \"undefined\")
\t\t\t\t\t\tresult.recursive = newContentRecursive;
\t\t\t\t\tif(typeof newContentRegExp !== \"undefined\")
\t\t\t\t\t\tresult.regExp = newContentRegExp;
\t\t\t\t\tif(typeof newContentCallback === \"function\") {
\t\t\t\t\t\tnewContentCallback(result);
\t\t\t\t\t} else {
\t\t\t\t\t\tresult.dependencies.forEach((d) => {
\t\t\t\t\t\t\tif(d.critical)
\t\t\t\t\t\t\t\td.critical = false;
\t\t\t\t\t\t});
\t\t\t\t\t}
\t\t\t\t}
\t\t\t\treturn callback(null, result);
\t\t\t});
\t\t\tcmf.plugin(\"after-resolve\", (result, callback) => {
\t\t\t\tif(!result) return callback();
\t\t\t\tif(resourceRegExp.test(result.resource)) {
\t\t\t\t\tif(typeof newContentResource !== \"undefined\")
\t\t\t\t\t\tresult.resource = path.resolve(result.resource, newContentResource);
\t\t\t\t\tif(typeof newContentRecursive !== \"undefined\")
\t\t\t\t\t\tresult.recursive = newContentRecursive;
\t\t\t\t\tif(typeof newContentRegExp !== \"undefined\")
\t\t\t\t\t\tresult.regExp = newContentRegExp;
\t\t\t\t\tif(typeof newContentCreateContextMap === \"function\")
\t\t\t\t\t\tresult.resolveDependencies = createResolveDependenciesFromContextMap(newContentCreateContextMap);
\t\t\t\t\tif(typeof newContentCallback === \"function\") {
\t\t\t\t\t\tconst origResource = result.resource;
\t\t\t\t\t\tnewContentCallback(result);
\t\t\t\t\t\tif(result.resource !== origResource) {
\t\t\t\t\t\t\tresult.resource = path.resolve(origResource, result.resource);
\t\t\t\t\t\t}
\t\t\t\t\t} else {
\t\t\t\t\t\tresult.dependencies.forEach((d) => {
\t\t\t\t\t\t\tif(d.critical)
\t\t\t\t\t\t\t\td.critical = false;
\t\t\t\t\t\t});
\t\t\t\t\t}
\t\t\t\t}
\t\t\t\treturn callback(null, result);
\t\t\t});
\t\t});
\t}
}

const createResolveDependenciesFromContextMap = (createContextMap) => {
\treturn function resolveDependenciesFromContextMap(fs, resource, recursive, regExp, callback) {
\t\tcreateContextMap(fs, (err, map) => {
\t\t\tif(err) return callback(err);
\t\t\tconst dependencies = Object.keys(map).map((key) => {
\t\t\t\treturn new ContextElementDependency(map[key], key);
\t\t\t});
\t\t\tcallback(null, dependencies);
\t\t});
\t};
};

module.exports = ContextReplacementPlugin;
", "node_modules/webpack/lib/ContextReplacementPlugin.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/webpack/lib/ContextReplacementPlugin.js");
    }
}
