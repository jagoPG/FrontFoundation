<?php

/* node_modules/enhanced-resolve/lib/CloneBasenamePlugin.js */
class __TwigTemplate_334bdc02968d7cb49bfa8ae7110fc732f406cc5eca603c3f714d2cf1d63946c2 extends Twig_Template
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
        $__internal_6dd6c988bbf4ed9c98b7cb2652f6b62984b976ff371d6345c7d080c218d5fb43 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6dd6c988bbf4ed9c98b7cb2652f6b62984b976ff371d6345c7d080c218d5fb43->enter($__internal_6dd6c988bbf4ed9c98b7cb2652f6b62984b976ff371d6345c7d080c218d5fb43_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/enhanced-resolve/lib/CloneBasenamePlugin.js"));

        // line 1
        echo "/*
\tMIT License http://www.opensource.org/licenses/mit-license.php
\tAuthor Tobias Koppers @sokra
*/
var basename = require(\"./getPaths\").basename;

function CloneBasenamePlugin(source, target) {
\tthis.source = source;
\tthis.target = target;
}
module.exports = CloneBasenamePlugin;

CloneBasenamePlugin.prototype.apply = function(resolver) {
\tvar target = this.target;
\tresolver.plugin(this.source, function(request, callback) {
\t\tvar filename = basename(request.path);
\t\tvar filePath = resolver.join(request.path, filename);
\t\tvar obj = Object.assign({}, request, {
\t\t\tpath: filePath,
\t\t\trelativePath: request.relativePath && resolver.join(request.relativePath, filename)
\t\t});
\t\tresolver.doResolve(target, obj, \"using path: \" + filePath, callback);
\t});
};
";
        
        $__internal_6dd6c988bbf4ed9c98b7cb2652f6b62984b976ff371d6345c7d080c218d5fb43->leave($__internal_6dd6c988bbf4ed9c98b7cb2652f6b62984b976ff371d6345c7d080c218d5fb43_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/enhanced-resolve/lib/CloneBasenamePlugin.js";
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
var basename = require(\"./getPaths\").basename;

function CloneBasenamePlugin(source, target) {
\tthis.source = source;
\tthis.target = target;
}
module.exports = CloneBasenamePlugin;

CloneBasenamePlugin.prototype.apply = function(resolver) {
\tvar target = this.target;
\tresolver.plugin(this.source, function(request, callback) {
\t\tvar filename = basename(request.path);
\t\tvar filePath = resolver.join(request.path, filename);
\t\tvar obj = Object.assign({}, request, {
\t\t\tpath: filePath,
\t\t\trelativePath: request.relativePath && resolver.join(request.relativePath, filename)
\t\t});
\t\tresolver.doResolve(target, obj, \"using path: \" + filePath, callback);
\t});
};
", "node_modules/enhanced-resolve/lib/CloneBasenamePlugin.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/enhanced-resolve/lib/CloneBasenamePlugin.js");
    }
}
