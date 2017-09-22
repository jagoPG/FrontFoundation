<?php

/* node_modules/enhanced-resolve/lib/UnsafeCachePlugin.js */
class __TwigTemplate_4fece1c77b2c96ed1b87ed2e51a973583fba4d7dc953b9e1cae494202ed60d4b extends Twig_Template
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
        $__internal_b0117d545d0cf9ff3b76af896e1e1e254e3220d8b5f89ed78baeb054f3209ad9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b0117d545d0cf9ff3b76af896e1e1e254e3220d8b5f89ed78baeb054f3209ad9->enter($__internal_b0117d545d0cf9ff3b76af896e1e1e254e3220d8b5f89ed78baeb054f3209ad9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/enhanced-resolve/lib/UnsafeCachePlugin.js"));

        // line 1
        echo "/*
\tMIT License http://www.opensource.org/licenses/mit-license.php
\tAuthor Tobias Koppers @sokra
*/
var createInnerCallback = require(\"./createInnerCallback\");

function UnsafeCachePlugin(source, filterPredicate, cache, withContext, target) {
\tthis.source = source;
\tthis.filterPredicate = filterPredicate;
\tthis.withContext = withContext;
\tthis.cache = cache || {};
\tthis.target = target;
}
module.exports = UnsafeCachePlugin;

function getCacheId(request, withContext) {
\treturn JSON.stringify({
\t\tcontext: withContext ? request.context : \"\",
\t\tpath: request.path,
\t\tquery: request.query,
\t\trequest: request.request
\t});
}

UnsafeCachePlugin.prototype.apply = function(resolver) {
\tvar filterPredicate = this.filterPredicate;
\tvar cache = this.cache;
\tvar target = this.target;
\tvar withContext = this.withContext;
\tresolver.plugin(this.source, function(request, callback) {
\t\tif(!filterPredicate(request)) return callback();
\t\tvar cacheId = getCacheId(request, withContext);
\t\tvar cacheEntry = cache[cacheId];
\t\tif(cacheEntry) {
\t\t\treturn callback(null, cacheEntry);
\t\t}
\t\tresolver.doResolve(target, request, null, createInnerCallback(function(err, result) {
\t\t\tif(err) return callback(err);
\t\t\tif(result) return callback(null, cache[cacheId] = result);
\t\t\tcallback();
\t\t}, callback));
\t});
};
";
        
        $__internal_b0117d545d0cf9ff3b76af896e1e1e254e3220d8b5f89ed78baeb054f3209ad9->leave($__internal_b0117d545d0cf9ff3b76af896e1e1e254e3220d8b5f89ed78baeb054f3209ad9_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/enhanced-resolve/lib/UnsafeCachePlugin.js";
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

function UnsafeCachePlugin(source, filterPredicate, cache, withContext, target) {
\tthis.source = source;
\tthis.filterPredicate = filterPredicate;
\tthis.withContext = withContext;
\tthis.cache = cache || {};
\tthis.target = target;
}
module.exports = UnsafeCachePlugin;

function getCacheId(request, withContext) {
\treturn JSON.stringify({
\t\tcontext: withContext ? request.context : \"\",
\t\tpath: request.path,
\t\tquery: request.query,
\t\trequest: request.request
\t});
}

UnsafeCachePlugin.prototype.apply = function(resolver) {
\tvar filterPredicate = this.filterPredicate;
\tvar cache = this.cache;
\tvar target = this.target;
\tvar withContext = this.withContext;
\tresolver.plugin(this.source, function(request, callback) {
\t\tif(!filterPredicate(request)) return callback();
\t\tvar cacheId = getCacheId(request, withContext);
\t\tvar cacheEntry = cache[cacheId];
\t\tif(cacheEntry) {
\t\t\treturn callback(null, cacheEntry);
\t\t}
\t\tresolver.doResolve(target, request, null, createInnerCallback(function(err, result) {
\t\t\tif(err) return callback(err);
\t\t\tif(result) return callback(null, cache[cacheId] = result);
\t\t\tcallback();
\t\t}, callback));
\t});
};
", "node_modules/enhanced-resolve/lib/UnsafeCachePlugin.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/enhanced-resolve/lib/UnsafeCachePlugin.js");
    }
}
