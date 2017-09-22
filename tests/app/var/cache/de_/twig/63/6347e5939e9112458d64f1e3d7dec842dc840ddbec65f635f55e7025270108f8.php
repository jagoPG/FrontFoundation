<?php

/* node_modules/enhanced-resolve/lib/NodeJsInputFileSystem.js */
class __TwigTemplate_254a9520d6eeae003fd5fcc0bfa88cd7daaec19ca7b88c79334cf3fb1390e78c extends Twig_Template
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
        $__internal_ad589370dd5764d137571d0fba551d5bff617740b727ebeedaafd95aa9e95235 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ad589370dd5764d137571d0fba551d5bff617740b727ebeedaafd95aa9e95235->enter($__internal_ad589370dd5764d137571d0fba551d5bff617740b727ebeedaafd95aa9e95235_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/enhanced-resolve/lib/NodeJsInputFileSystem.js"));

        // line 1
        echo "/*
\tMIT License http://www.opensource.org/licenses/mit-license.php
\tAuthor Tobias Koppers @sokra
*/
var fs = require(\"graceful-fs\");

function NodeJsInputFileSystem() {}
module.exports = NodeJsInputFileSystem;

NodeJsInputFileSystem.prototype.stat = fs.stat.bind(fs);
NodeJsInputFileSystem.prototype.readdir = function readdir(path, callback) {
\tfs.readdir(path, function(err, files) {
\t\tcallback(err, files && files.map(function(file) {
\t\t\treturn file.normalize ? file.normalize(\"NFC\") : file;
\t\t}));
\t});
};
NodeJsInputFileSystem.prototype.readFile = fs.readFile.bind(fs);
NodeJsInputFileSystem.prototype.readlink = fs.readlink.bind(fs);

NodeJsInputFileSystem.prototype.statSync = fs.statSync.bind(fs);
NodeJsInputFileSystem.prototype.readdirSync = function readdirSync(path) {
\tvar files = fs.readdirSync(path);
\treturn files && files.map(function(file) {
\t\treturn file.normalize ? file.normalize(\"NFC\") : file;
\t});
};
NodeJsInputFileSystem.prototype.readFileSync = fs.readFileSync.bind(fs);
NodeJsInputFileSystem.prototype.readlinkSync = fs.readlinkSync.bind(fs);
";
        
        $__internal_ad589370dd5764d137571d0fba551d5bff617740b727ebeedaafd95aa9e95235->leave($__internal_ad589370dd5764d137571d0fba551d5bff617740b727ebeedaafd95aa9e95235_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/enhanced-resolve/lib/NodeJsInputFileSystem.js";
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
var fs = require(\"graceful-fs\");

function NodeJsInputFileSystem() {}
module.exports = NodeJsInputFileSystem;

NodeJsInputFileSystem.prototype.stat = fs.stat.bind(fs);
NodeJsInputFileSystem.prototype.readdir = function readdir(path, callback) {
\tfs.readdir(path, function(err, files) {
\t\tcallback(err, files && files.map(function(file) {
\t\t\treturn file.normalize ? file.normalize(\"NFC\") : file;
\t\t}));
\t});
};
NodeJsInputFileSystem.prototype.readFile = fs.readFile.bind(fs);
NodeJsInputFileSystem.prototype.readlink = fs.readlink.bind(fs);

NodeJsInputFileSystem.prototype.statSync = fs.statSync.bind(fs);
NodeJsInputFileSystem.prototype.readdirSync = function readdirSync(path) {
\tvar files = fs.readdirSync(path);
\treturn files && files.map(function(file) {
\t\treturn file.normalize ? file.normalize(\"NFC\") : file;
\t});
};
NodeJsInputFileSystem.prototype.readFileSync = fs.readFileSync.bind(fs);
NodeJsInputFileSystem.prototype.readlinkSync = fs.readlinkSync.bind(fs);
", "node_modules/enhanced-resolve/lib/NodeJsInputFileSystem.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/enhanced-resolve/lib/NodeJsInputFileSystem.js");
    }
}
