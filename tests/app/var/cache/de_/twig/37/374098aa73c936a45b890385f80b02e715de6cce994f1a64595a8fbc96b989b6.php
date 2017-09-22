<?php

/* node_modules/enhanced-resolve/lib/MainFieldPlugin.js */
class __TwigTemplate_47dc0c62c8cc55612b26909a43d6ab0d47401176b1e08cdce879881a482983ca extends Twig_Template
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
        $__internal_301822ecbcee12d75b1dfc4405c8daaf16ac4a0edeee156fbe71155d86602531 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_301822ecbcee12d75b1dfc4405c8daaf16ac4a0edeee156fbe71155d86602531->enter($__internal_301822ecbcee12d75b1dfc4405c8daaf16ac4a0edeee156fbe71155d86602531_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/enhanced-resolve/lib/MainFieldPlugin.js"));

        // line 1
        echo "/*
\tMIT License http://www.opensource.org/licenses/mit-license.php
\tAuthor Tobias Koppers @sokra
*/
var path = require(\"path\");

function MainFieldPlugin(source, options, target) {
\tthis.source = source;
\tthis.options = options;
\tthis.target = target;
}
module.exports = MainFieldPlugin;

MainFieldPlugin.prototype.apply = function(resolver) {
\tvar target = this.target;
\tvar options = this.options;
\tresolver.plugin(this.source, function mainField(request, callback) {
\t\tif(request.path !== request.descriptionFileRoot) return callback();
\t\tvar content = request.descriptionFileData;
\t\tvar filename = path.basename(request.descriptionFilePath);
\t\tvar mainModule;
\t\tvar field = options.name;
\t\tif(Array.isArray(field)) {
\t\t\tvar current = content;
\t\t\tfor(var j = 0; j < field.length; j++) {
\t\t\t\tif(current === null || typeof current !== \"object\") {
\t\t\t\t\tcurrent = null;
\t\t\t\t\tbreak;
\t\t\t\t}
\t\t\t\tcurrent = current[field[j]];
\t\t\t}
\t\t\tif(typeof current === \"string\") {
\t\t\t\tmainModule = current;
\t\t\t}
\t\t} else {
\t\t\tif(typeof content[field] === \"string\") {
\t\t\t\tmainModule = content[field];
\t\t\t}
\t\t}
\t\tif(!mainModule) return callback();
\t\tif(options.forceRelative && !/^\\.\\.?\\//.test(mainModule))
\t\t\tmainModule = \"./\" + mainModule;
\t\tvar obj = Object.assign({}, request, {
\t\t\trequest: mainModule
\t\t});
\t\treturn resolver.doResolve(target, obj, \"use \" + mainModule + \" from \" + options.name + \" in \" + filename, callback);
\t});
};
";
        
        $__internal_301822ecbcee12d75b1dfc4405c8daaf16ac4a0edeee156fbe71155d86602531->leave($__internal_301822ecbcee12d75b1dfc4405c8daaf16ac4a0edeee156fbe71155d86602531_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/enhanced-resolve/lib/MainFieldPlugin.js";
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
var path = require(\"path\");

function MainFieldPlugin(source, options, target) {
\tthis.source = source;
\tthis.options = options;
\tthis.target = target;
}
module.exports = MainFieldPlugin;

MainFieldPlugin.prototype.apply = function(resolver) {
\tvar target = this.target;
\tvar options = this.options;
\tresolver.plugin(this.source, function mainField(request, callback) {
\t\tif(request.path !== request.descriptionFileRoot) return callback();
\t\tvar content = request.descriptionFileData;
\t\tvar filename = path.basename(request.descriptionFilePath);
\t\tvar mainModule;
\t\tvar field = options.name;
\t\tif(Array.isArray(field)) {
\t\t\tvar current = content;
\t\t\tfor(var j = 0; j < field.length; j++) {
\t\t\t\tif(current === null || typeof current !== \"object\") {
\t\t\t\t\tcurrent = null;
\t\t\t\t\tbreak;
\t\t\t\t}
\t\t\t\tcurrent = current[field[j]];
\t\t\t}
\t\t\tif(typeof current === \"string\") {
\t\t\t\tmainModule = current;
\t\t\t}
\t\t} else {
\t\t\tif(typeof content[field] === \"string\") {
\t\t\t\tmainModule = content[field];
\t\t\t}
\t\t}
\t\tif(!mainModule) return callback();
\t\tif(options.forceRelative && !/^\\.\\.?\\//.test(mainModule))
\t\t\tmainModule = \"./\" + mainModule;
\t\tvar obj = Object.assign({}, request, {
\t\t\trequest: mainModule
\t\t});
\t\treturn resolver.doResolve(target, obj, \"use \" + mainModule + \" from \" + options.name + \" in \" + filename, callback);
\t});
};
", "node_modules/enhanced-resolve/lib/MainFieldPlugin.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/enhanced-resolve/lib/MainFieldPlugin.js");
    }
}
