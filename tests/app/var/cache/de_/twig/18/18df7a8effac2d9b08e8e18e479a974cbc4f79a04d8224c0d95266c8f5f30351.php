<?php

/* node_modules/enhanced-resolve/lib/JoinRequestPlugin.js */
class __TwigTemplate_617ec2226b79b863acce504b10d421395f6049cab1abff5bc09356293ac15857 extends Twig_Template
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
        $__internal_8b680fdea87d26653ad23428c9d80690e655a5cd3d5cdacfb81722876cf4be3e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8b680fdea87d26653ad23428c9d80690e655a5cd3d5cdacfb81722876cf4be3e->enter($__internal_8b680fdea87d26653ad23428c9d80690e655a5cd3d5cdacfb81722876cf4be3e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/enhanced-resolve/lib/JoinRequestPlugin.js"));

        // line 1
        echo "/*
\tMIT License http://www.opensource.org/licenses/mit-license.php
\tAuthor Tobias Koppers @sokra
*/
function JoinRequestPlugin(source, target) {
\tthis.source = source;
\tthis.target = target;
}
module.exports = JoinRequestPlugin;

JoinRequestPlugin.prototype.apply = function(resolver) {
\tvar target = this.target;
\tresolver.plugin(this.source, function(request, callback) {
\t\tvar obj = Object.assign({}, request, {
\t\t\tpath: resolver.join(request.path, request.request),
\t\t\trelativePath: request.relativePath && resolver.join(request.relativePath, request.request),
\t\t\trequest: undefined
\t\t});
\t\tresolver.doResolve(target, obj, null, callback);
\t});
};
";
        
        $__internal_8b680fdea87d26653ad23428c9d80690e655a5cd3d5cdacfb81722876cf4be3e->leave($__internal_8b680fdea87d26653ad23428c9d80690e655a5cd3d5cdacfb81722876cf4be3e_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/enhanced-resolve/lib/JoinRequestPlugin.js";
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
function JoinRequestPlugin(source, target) {
\tthis.source = source;
\tthis.target = target;
}
module.exports = JoinRequestPlugin;

JoinRequestPlugin.prototype.apply = function(resolver) {
\tvar target = this.target;
\tresolver.plugin(this.source, function(request, callback) {
\t\tvar obj = Object.assign({}, request, {
\t\t\tpath: resolver.join(request.path, request.request),
\t\t\trelativePath: request.relativePath && resolver.join(request.relativePath, request.request),
\t\t\trequest: undefined
\t\t});
\t\tresolver.doResolve(target, obj, null, callback);
\t});
};
", "node_modules/enhanced-resolve/lib/JoinRequestPlugin.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/enhanced-resolve/lib/JoinRequestPlugin.js");
    }
}
