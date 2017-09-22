<?php

/* node_modules/enhanced-resolve/lib/DescriptionFileUtils.js */
class __TwigTemplate_988e46d494795773ab9ad1f6d9893b464db09cce0a6f7610d190411a0dce179d extends Twig_Template
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
        $__internal_bc28dadae43d9a8e01597e69f6e96f392ac364044076cc9d5641066b5e2842fa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bc28dadae43d9a8e01597e69f6e96f392ac364044076cc9d5641066b5e2842fa->enter($__internal_bc28dadae43d9a8e01597e69f6e96f392ac364044076cc9d5641066b5e2842fa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/enhanced-resolve/lib/DescriptionFileUtils.js"));

        // line 1
        echo "/*
\tMIT License http://www.opensource.org/licenses/mit-license.php
\tAuthor Tobias Koppers @sokra
*/
var forEachBail = require(\"./forEachBail\");

function loadDescriptionFile(resolver, directory, filenames, callback) {
\t(function findDescriptionFile() {
\t\tforEachBail(filenames, function(filename, callback) {
\t\t\tvar descriptionFilePath = resolver.join(directory, filename);
\t\t\tif(resolver.fileSystem.readJson) {
\t\t\t\tresolver.fileSystem.readJson(descriptionFilePath, function(err, content) {
\t\t\t\t\tif(err) {
\t\t\t\t\t\tif(typeof err.code !== \"undefined\") return callback();
\t\t\t\t\t\treturn onJson(err);
\t\t\t\t\t}
\t\t\t\t\tonJson(null, content);
\t\t\t\t});
\t\t\t} else {
\t\t\t\tresolver.fileSystem.readFile(descriptionFilePath, function(err, content) {
\t\t\t\t\tif(err) return callback();
\t\t\t\t\ttry {
\t\t\t\t\t\tvar json = JSON.parse(content);
\t\t\t\t\t} catch(e) {
\t\t\t\t\t\tonJson(e);
\t\t\t\t\t}
\t\t\t\t\tonJson(null, json);
\t\t\t\t});
\t\t\t}

\t\t\tfunction onJson(err, content) {
\t\t\t\tif(err) {
\t\t\t\t\tif(callback.log)
\t\t\t\t\t\tcallback.log(descriptionFilePath + \" (directory description file): \" + err);
\t\t\t\t\telse
\t\t\t\t\t\terr.message = descriptionFilePath + \" (directory description file): \" + err;
\t\t\t\t\treturn callback(err);
\t\t\t\t}
\t\t\t\tcallback(null, {
\t\t\t\t\tcontent: content,
\t\t\t\t\tdirectory: directory,
\t\t\t\t\tpath: descriptionFilePath
\t\t\t\t});
\t\t\t}
\t\t}, function(err, result) {
\t\t\tif(err) return callback(err);
\t\t\tif(result) {
\t\t\t\treturn callback(null, result);
\t\t\t} else {
\t\t\t\tdirectory = cdUp(directory);
\t\t\t\tif(!directory) {
\t\t\t\t\treturn callback();
\t\t\t\t} else {
\t\t\t\t\treturn findDescriptionFile();
\t\t\t\t}
\t\t\t}
\t\t});
\t}());
}

function getField(content, field) {
\tif(!content) return undefined;
\tif(Array.isArray(field)) {
\t\tvar current = content;
\t\tfor(var j = 0; j < field.length; j++) {
\t\t\tif(current === null || typeof current !== \"object\") {
\t\t\t\tcurrent = null;
\t\t\t\tbreak;
\t\t\t}
\t\t\tcurrent = current[field[j]];
\t\t}
\t\tif(typeof current === \"object\") {
\t\t\treturn current;
\t\t}
\t} else {
\t\tif(typeof content[field] === \"object\") {
\t\t\treturn content[field];
\t\t}
\t}
}

function cdUp(directory) {
\tif(directory === \"/\") return null;
\tvar i = directory.lastIndexOf(\"/\"),
\t\tj = directory.lastIndexOf(\"\\\\\");
\tvar p = i < 0 ? j : j < 0 ? i : i < j ? j : i;
\tif(p < 0) return null;
\treturn directory.substr(0, p || 1);
}

exports.loadDescriptionFile = loadDescriptionFile;
exports.getField = getField;
exports.cdUp = cdUp;
";
        
        $__internal_bc28dadae43d9a8e01597e69f6e96f392ac364044076cc9d5641066b5e2842fa->leave($__internal_bc28dadae43d9a8e01597e69f6e96f392ac364044076cc9d5641066b5e2842fa_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/enhanced-resolve/lib/DescriptionFileUtils.js";
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
var forEachBail = require(\"./forEachBail\");

function loadDescriptionFile(resolver, directory, filenames, callback) {
\t(function findDescriptionFile() {
\t\tforEachBail(filenames, function(filename, callback) {
\t\t\tvar descriptionFilePath = resolver.join(directory, filename);
\t\t\tif(resolver.fileSystem.readJson) {
\t\t\t\tresolver.fileSystem.readJson(descriptionFilePath, function(err, content) {
\t\t\t\t\tif(err) {
\t\t\t\t\t\tif(typeof err.code !== \"undefined\") return callback();
\t\t\t\t\t\treturn onJson(err);
\t\t\t\t\t}
\t\t\t\t\tonJson(null, content);
\t\t\t\t});
\t\t\t} else {
\t\t\t\tresolver.fileSystem.readFile(descriptionFilePath, function(err, content) {
\t\t\t\t\tif(err) return callback();
\t\t\t\t\ttry {
\t\t\t\t\t\tvar json = JSON.parse(content);
\t\t\t\t\t} catch(e) {
\t\t\t\t\t\tonJson(e);
\t\t\t\t\t}
\t\t\t\t\tonJson(null, json);
\t\t\t\t});
\t\t\t}

\t\t\tfunction onJson(err, content) {
\t\t\t\tif(err) {
\t\t\t\t\tif(callback.log)
\t\t\t\t\t\tcallback.log(descriptionFilePath + \" (directory description file): \" + err);
\t\t\t\t\telse
\t\t\t\t\t\terr.message = descriptionFilePath + \" (directory description file): \" + err;
\t\t\t\t\treturn callback(err);
\t\t\t\t}
\t\t\t\tcallback(null, {
\t\t\t\t\tcontent: content,
\t\t\t\t\tdirectory: directory,
\t\t\t\t\tpath: descriptionFilePath
\t\t\t\t});
\t\t\t}
\t\t}, function(err, result) {
\t\t\tif(err) return callback(err);
\t\t\tif(result) {
\t\t\t\treturn callback(null, result);
\t\t\t} else {
\t\t\t\tdirectory = cdUp(directory);
\t\t\t\tif(!directory) {
\t\t\t\t\treturn callback();
\t\t\t\t} else {
\t\t\t\t\treturn findDescriptionFile();
\t\t\t\t}
\t\t\t}
\t\t});
\t}());
}

function getField(content, field) {
\tif(!content) return undefined;
\tif(Array.isArray(field)) {
\t\tvar current = content;
\t\tfor(var j = 0; j < field.length; j++) {
\t\t\tif(current === null || typeof current !== \"object\") {
\t\t\t\tcurrent = null;
\t\t\t\tbreak;
\t\t\t}
\t\t\tcurrent = current[field[j]];
\t\t}
\t\tif(typeof current === \"object\") {
\t\t\treturn current;
\t\t}
\t} else {
\t\tif(typeof content[field] === \"object\") {
\t\t\treturn content[field];
\t\t}
\t}
}

function cdUp(directory) {
\tif(directory === \"/\") return null;
\tvar i = directory.lastIndexOf(\"/\"),
\t\tj = directory.lastIndexOf(\"\\\\\");
\tvar p = i < 0 ? j : j < 0 ? i : i < j ? j : i;
\tif(p < 0) return null;
\treturn directory.substr(0, p || 1);
}

exports.loadDescriptionFile = loadDescriptionFile;
exports.getField = getField;
exports.cdUp = cdUp;
", "node_modules/enhanced-resolve/lib/DescriptionFileUtils.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/enhanced-resolve/lib/DescriptionFileUtils.js");
    }
}
