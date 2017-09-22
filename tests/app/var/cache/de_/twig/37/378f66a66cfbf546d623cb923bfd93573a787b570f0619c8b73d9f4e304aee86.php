<?php

/* node_modules/enhanced-resolve/lib/DirectoryExistsPlugin.js */
class __TwigTemplate_c83b5395b2e2740eae9f79d01773ac046ccfd5e724d4e99dab6fd9eb1bcab262 extends Twig_Template
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
        $__internal_787c46d7bb3643bdeda828153c45f7a39a1167399a58d4a6794b4bacf05afd89 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_787c46d7bb3643bdeda828153c45f7a39a1167399a58d4a6794b4bacf05afd89->enter($__internal_787c46d7bb3643bdeda828153c45f7a39a1167399a58d4a6794b4bacf05afd89_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/enhanced-resolve/lib/DirectoryExistsPlugin.js"));

        // line 1
        echo "/*
\tMIT License http://www.opensource.org/licenses/mit-license.php
\tAuthor Tobias Koppers @sokra
*/
function DirectoryExistsPlugin(source, target) {
\tthis.source = source;
\tthis.target = target;
}
module.exports = DirectoryExistsPlugin;

DirectoryExistsPlugin.prototype.apply = function(resolver) {
\tvar target = this.target;
\tresolver.plugin(this.source, function(request, callback) {
\t\tvar fs = this.fileSystem;
\t\tvar directory = request.path;
\t\tfs.stat(directory, function(err, stat) {
\t\t\tif(err || !stat) {
\t\t\t\tif(callback.missing) callback.missing.push(directory);
\t\t\t\tif(callback.log) callback.log(directory + \" doesn't exist\");
\t\t\t\treturn callback();
\t\t\t}
\t\t\tif(!stat.isDirectory()) {
\t\t\t\tif(callback.missing) callback.missing.push(directory);
\t\t\t\tif(callback.log) callback.log(directory + \" is not a directory\");
\t\t\t\treturn callback();
\t\t\t}
\t\t\tthis.doResolve(target, request, \"existing directory\", callback);
\t\t}.bind(this));
\t});
};
";
        
        $__internal_787c46d7bb3643bdeda828153c45f7a39a1167399a58d4a6794b4bacf05afd89->leave($__internal_787c46d7bb3643bdeda828153c45f7a39a1167399a58d4a6794b4bacf05afd89_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/enhanced-resolve/lib/DirectoryExistsPlugin.js";
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
function DirectoryExistsPlugin(source, target) {
\tthis.source = source;
\tthis.target = target;
}
module.exports = DirectoryExistsPlugin;

DirectoryExistsPlugin.prototype.apply = function(resolver) {
\tvar target = this.target;
\tresolver.plugin(this.source, function(request, callback) {
\t\tvar fs = this.fileSystem;
\t\tvar directory = request.path;
\t\tfs.stat(directory, function(err, stat) {
\t\t\tif(err || !stat) {
\t\t\t\tif(callback.missing) callback.missing.push(directory);
\t\t\t\tif(callback.log) callback.log(directory + \" doesn't exist\");
\t\t\t\treturn callback();
\t\t\t}
\t\t\tif(!stat.isDirectory()) {
\t\t\t\tif(callback.missing) callback.missing.push(directory);
\t\t\t\tif(callback.log) callback.log(directory + \" is not a directory\");
\t\t\t\treturn callback();
\t\t\t}
\t\t\tthis.doResolve(target, request, \"existing directory\", callback);
\t\t}.bind(this));
\t});
};
", "node_modules/enhanced-resolve/lib/DirectoryExistsPlugin.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/enhanced-resolve/lib/DirectoryExistsPlugin.js");
    }
}
