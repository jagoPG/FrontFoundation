<?php

/* node_modules/enhanced-resolve/lib/AppendPlugin.js */
class __TwigTemplate_55fc8125403f6343b4bd75287c4c3a12ad6d7cd022fe3d424d07c31c6bc5f815 extends Twig_Template
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
        $__internal_f1630034d1496d7207fe1b04f0846534d81ccd83ff7b85e47eec647cfd7bdb3b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f1630034d1496d7207fe1b04f0846534d81ccd83ff7b85e47eec647cfd7bdb3b->enter($__internal_f1630034d1496d7207fe1b04f0846534d81ccd83ff7b85e47eec647cfd7bdb3b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/enhanced-resolve/lib/AppendPlugin.js"));

        // line 1
        echo "/*
\tMIT License http://www.opensource.org/licenses/mit-license.php
\tAuthor Tobias Koppers @sokra
*/
function AppendPlugin(source, appending, target) {
\tthis.source = source;
\tthis.appending = appending;
\tthis.target = target;
}
module.exports = AppendPlugin;

AppendPlugin.prototype.apply = function(resolver) {
\tvar target = this.target;
\tvar appending = this.appending;
\tresolver.plugin(this.source, function(request, callback) {
\t\tvar obj = Object.assign({}, request, {
\t\t\tpath: request.path + appending,
\t\t\trelativePath: request.relativePath && (request.relativePath + appending)
\t\t});
\t\tresolver.doResolve(target, obj, appending, callback);
\t});
};
";
        
        $__internal_f1630034d1496d7207fe1b04f0846534d81ccd83ff7b85e47eec647cfd7bdb3b->leave($__internal_f1630034d1496d7207fe1b04f0846534d81ccd83ff7b85e47eec647cfd7bdb3b_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/enhanced-resolve/lib/AppendPlugin.js";
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
function AppendPlugin(source, appending, target) {
\tthis.source = source;
\tthis.appending = appending;
\tthis.target = target;
}
module.exports = AppendPlugin;

AppendPlugin.prototype.apply = function(resolver) {
\tvar target = this.target;
\tvar appending = this.appending;
\tresolver.plugin(this.source, function(request, callback) {
\t\tvar obj = Object.assign({}, request, {
\t\t\tpath: request.path + appending,
\t\t\trelativePath: request.relativePath && (request.relativePath + appending)
\t\t});
\t\tresolver.doResolve(target, obj, appending, callback);
\t});
};
", "node_modules/enhanced-resolve/lib/AppendPlugin.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/enhanced-resolve/lib/AppendPlugin.js");
    }
}
