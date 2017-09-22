<?php

/* node_modules/enhanced-resolve/lib/DescriptionFilePlugin.js */
class __TwigTemplate_45c6c84fa3730a308310c7cc378e761a40f3d4c3c960858db6a143c2a90f3c7a extends Twig_Template
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
        $__internal_07983f72ee3ae8b3ea1c8b0a6acb99ee608ae0849943af2941fef9262464c587 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_07983f72ee3ae8b3ea1c8b0a6acb99ee608ae0849943af2941fef9262464c587->enter($__internal_07983f72ee3ae8b3ea1c8b0a6acb99ee608ae0849943af2941fef9262464c587_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/enhanced-resolve/lib/DescriptionFilePlugin.js"));

        // line 1
        echo "\"use strict\";
/*
\tMIT License http://www.opensource.org/licenses/mit-license.php
\tAuthor Tobias Koppers @sokra
*/
const createInnerCallback = require(\"./createInnerCallback\");
const DescriptionFileUtils = require(\"./DescriptionFileUtils\");

class DescriptionFilePlugin {
\tconstructor(source, filenames, target) {
\t\tthis.source = source;
\t\tthis.filenames = [].concat(filenames);
\t\tthis.target = target;
\t}

\tapply(resolver) {
\t\tconst filenames = this.filenames;
\t\tconst target = this.target;
\t\tresolver.plugin(this.source, (request, callback) => {
\t\t\tconst directory = request.path;
\t\t\tDescriptionFileUtils.loadDescriptionFile(resolver, directory, filenames, ((err, result) => {
\t\t\t\tif(err) return callback(err);
\t\t\t\tif(!result) {
\t\t\t\t\tif(callback.missing) {
\t\t\t\t\t\tfilenames.forEach((filename) => {
\t\t\t\t\t\t\tcallback.missing.push(resolver.join(directory, filename));
\t\t\t\t\t\t});
\t\t\t\t\t}
\t\t\t\t\tif(callback.log) callback.log(\"No description file found\");
\t\t\t\t\treturn callback();
\t\t\t\t}
\t\t\t\tconst relativePath = \".\" + request.path.substr(result.directory.length).replace(/\\\\/g, \"/\");
\t\t\t\tconst obj = Object.assign({}, request, {
\t\t\t\t\tdescriptionFilePath: result.path,
\t\t\t\t\tdescriptionFileData: result.content,
\t\t\t\t\tdescriptionFileRoot: result.directory,
\t\t\t\t\trelativePath: relativePath
\t\t\t\t});
\t\t\t\tresolver.doResolve(target, obj, \"using description file: \" + result.path + \" (relative path: \" + relativePath + \")\", createInnerCallback((err, result) => {
\t\t\t\t\tif(err) return callback(err);
\t\t\t\t\tif(result) return callback(null, result);

\t\t\t\t\t// Don't allow other description files or none at all
\t\t\t\t\tcallback(null, null);
\t\t\t\t}, callback));
\t\t\t}));
\t\t});
\t}
}

module.exports = DescriptionFilePlugin;
";
        
        $__internal_07983f72ee3ae8b3ea1c8b0a6acb99ee608ae0849943af2941fef9262464c587->leave($__internal_07983f72ee3ae8b3ea1c8b0a6acb99ee608ae0849943af2941fef9262464c587_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/enhanced-resolve/lib/DescriptionFilePlugin.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("\"use strict\";
/*
\tMIT License http://www.opensource.org/licenses/mit-license.php
\tAuthor Tobias Koppers @sokra
*/
const createInnerCallback = require(\"./createInnerCallback\");
const DescriptionFileUtils = require(\"./DescriptionFileUtils\");

class DescriptionFilePlugin {
\tconstructor(source, filenames, target) {
\t\tthis.source = source;
\t\tthis.filenames = [].concat(filenames);
\t\tthis.target = target;
\t}

\tapply(resolver) {
\t\tconst filenames = this.filenames;
\t\tconst target = this.target;
\t\tresolver.plugin(this.source, (request, callback) => {
\t\t\tconst directory = request.path;
\t\t\tDescriptionFileUtils.loadDescriptionFile(resolver, directory, filenames, ((err, result) => {
\t\t\t\tif(err) return callback(err);
\t\t\t\tif(!result) {
\t\t\t\t\tif(callback.missing) {
\t\t\t\t\t\tfilenames.forEach((filename) => {
\t\t\t\t\t\t\tcallback.missing.push(resolver.join(directory, filename));
\t\t\t\t\t\t});
\t\t\t\t\t}
\t\t\t\t\tif(callback.log) callback.log(\"No description file found\");
\t\t\t\t\treturn callback();
\t\t\t\t}
\t\t\t\tconst relativePath = \".\" + request.path.substr(result.directory.length).replace(/\\\\/g, \"/\");
\t\t\t\tconst obj = Object.assign({}, request, {
\t\t\t\t\tdescriptionFilePath: result.path,
\t\t\t\t\tdescriptionFileData: result.content,
\t\t\t\t\tdescriptionFileRoot: result.directory,
\t\t\t\t\trelativePath: relativePath
\t\t\t\t});
\t\t\t\tresolver.doResolve(target, obj, \"using description file: \" + result.path + \" (relative path: \" + relativePath + \")\", createInnerCallback((err, result) => {
\t\t\t\t\tif(err) return callback(err);
\t\t\t\t\tif(result) return callback(null, result);

\t\t\t\t\t// Don't allow other description files or none at all
\t\t\t\t\tcallback(null, null);
\t\t\t\t}, callback));
\t\t\t}));
\t\t});
\t}
}

module.exports = DescriptionFilePlugin;
", "node_modules/enhanced-resolve/lib/DescriptionFilePlugin.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/enhanced-resolve/lib/DescriptionFilePlugin.js");
    }
}
