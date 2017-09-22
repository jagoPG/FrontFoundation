<?php

/* node_modules/enhanced-resolve/lib/ModuleKindPlugin.js */
class __TwigTemplate_7127feed48fe820d5883bd21ff4fa15469319713ec6fc22e745ca6633df969c2 extends Twig_Template
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
        $__internal_dea736b471590f0cd5949a5084b15ce5e8c5b985b8dd7420547489781d2feed0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dea736b471590f0cd5949a5084b15ce5e8c5b985b8dd7420547489781d2feed0->enter($__internal_dea736b471590f0cd5949a5084b15ce5e8c5b985b8dd7420547489781d2feed0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/enhanced-resolve/lib/ModuleKindPlugin.js"));

        // line 1
        echo "/*
\tMIT License http://www.opensource.org/licenses/mit-license.php
\tAuthor Tobias Koppers @sokra
*/
var createInnerCallback = require(\"./createInnerCallback\");

function ModuleKindPlugin(source, target) {
\tthis.source = source;
\tthis.target = target;
}
module.exports = ModuleKindPlugin;

ModuleKindPlugin.prototype.apply = function(resolver) {
\tvar target = this.target;
\tresolver.plugin(this.source, function(request, callback) {
\t\tif(!request.module) return callback();
\t\tvar obj = Object.assign({}, request);
\t\tdelete obj.module;
\t\tresolver.doResolve(target, obj, \"resolve as module\", createInnerCallback(function(err, result) {
\t\t\tif(arguments.length > 0) return callback(err, result);

\t\t\t// Don't allow other alternatives
\t\t\tcallback(null, null);
\t\t}, callback));
\t});
};
";
        
        $__internal_dea736b471590f0cd5949a5084b15ce5e8c5b985b8dd7420547489781d2feed0->leave($__internal_dea736b471590f0cd5949a5084b15ce5e8c5b985b8dd7420547489781d2feed0_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/enhanced-resolve/lib/ModuleKindPlugin.js";
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
var createInnerCallback = require(\"./createInnerCallback\");

function ModuleKindPlugin(source, target) {
\tthis.source = source;
\tthis.target = target;
}
module.exports = ModuleKindPlugin;

ModuleKindPlugin.prototype.apply = function(resolver) {
\tvar target = this.target;
\tresolver.plugin(this.source, function(request, callback) {
\t\tif(!request.module) return callback();
\t\tvar obj = Object.assign({}, request);
\t\tdelete obj.module;
\t\tresolver.doResolve(target, obj, \"resolve as module\", createInnerCallback(function(err, result) {
\t\t\tif(arguments.length > 0) return callback(err, result);

\t\t\t// Don't allow other alternatives
\t\t\tcallback(null, null);
\t\t}, callback));
\t});
};
", "node_modules/enhanced-resolve/lib/ModuleKindPlugin.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/enhanced-resolve/lib/ModuleKindPlugin.js");
    }
}
