<?php

/* node_modules/enhanced-resolve/lib/FileExistsPlugin.js */
class __TwigTemplate_e7f7a7bfff7f2a381d517f1b0b14be2a2746c8a2539a7d345a782b0a7348d878 extends Twig_Template
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
        $__internal_b4004ecc4863abe837d70d7b02f9c738f5f21d24634cb252818e89a309286956 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b4004ecc4863abe837d70d7b02f9c738f5f21d24634cb252818e89a309286956->enter($__internal_b4004ecc4863abe837d70d7b02f9c738f5f21d24634cb252818e89a309286956_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/enhanced-resolve/lib/FileExistsPlugin.js"));

        // line 1
        echo "/*
\tMIT License http://www.opensource.org/licenses/mit-license.php
\tAuthor Tobias Koppers @sokra
*/
function FileExistsPlugin(source, target) {
\tthis.source = source;
\tthis.target = target;
}
module.exports = FileExistsPlugin;

FileExistsPlugin.prototype.apply = function(resolver) {
\tvar target = this.target;
\tresolver.plugin(this.source, function(request, callback) {
\t\tvar fs = this.fileSystem;
\t\tvar file = request.path;
\t\tfs.stat(file, function(err, stat) {
\t\t\tif(err || !stat) {
\t\t\t\tif(callback.missing) callback.missing.push(file);
\t\t\t\tif(callback.log) callback.log(file + \" doesn't exist\");
\t\t\t\treturn callback();
\t\t\t}
\t\t\tif(!stat.isFile()) {
\t\t\t\tif(callback.missing) callback.missing.push(file);
\t\t\t\tif(callback.log) callback.log(file + \" is not a file\");
\t\t\t\treturn callback();
\t\t\t}
\t\t\tthis.doResolve(target, request, \"existing file: \" + file, callback, true);
\t\t}.bind(this));
\t});
};
";
        
        $__internal_b4004ecc4863abe837d70d7b02f9c738f5f21d24634cb252818e89a309286956->leave($__internal_b4004ecc4863abe837d70d7b02f9c738f5f21d24634cb252818e89a309286956_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/enhanced-resolve/lib/FileExistsPlugin.js";
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
function FileExistsPlugin(source, target) {
\tthis.source = source;
\tthis.target = target;
}
module.exports = FileExistsPlugin;

FileExistsPlugin.prototype.apply = function(resolver) {
\tvar target = this.target;
\tresolver.plugin(this.source, function(request, callback) {
\t\tvar fs = this.fileSystem;
\t\tvar file = request.path;
\t\tfs.stat(file, function(err, stat) {
\t\t\tif(err || !stat) {
\t\t\t\tif(callback.missing) callback.missing.push(file);
\t\t\t\tif(callback.log) callback.log(file + \" doesn't exist\");
\t\t\t\treturn callback();
\t\t\t}
\t\t\tif(!stat.isFile()) {
\t\t\t\tif(callback.missing) callback.missing.push(file);
\t\t\t\tif(callback.log) callback.log(file + \" is not a file\");
\t\t\t\treturn callback();
\t\t\t}
\t\t\tthis.doResolve(target, request, \"existing file: \" + file, callback, true);
\t\t}.bind(this));
\t});
};
", "node_modules/enhanced-resolve/lib/FileExistsPlugin.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/enhanced-resolve/lib/FileExistsPlugin.js");
    }
}
