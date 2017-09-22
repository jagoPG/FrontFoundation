<?php

/* node_modules/enhanced-resolve/lib/ParsePlugin.js */
class __TwigTemplate_f91e5550399cd25b0f161c1d2e60d7575fb6e3a01149febd692c98f0ee857027 extends Twig_Template
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
        $__internal_f0268f83acd3564fff97ff49ed53f2463d01d4f27cc3efb84d61cf1688c8bb60 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f0268f83acd3564fff97ff49ed53f2463d01d4f27cc3efb84d61cf1688c8bb60->enter($__internal_f0268f83acd3564fff97ff49ed53f2463d01d4f27cc3efb84d61cf1688c8bb60_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/enhanced-resolve/lib/ParsePlugin.js"));

        // line 1
        echo "/*
\tMIT License http://www.opensource.org/licenses/mit-license.php
\tAuthor Tobias Koppers @sokra
*/
function ParsePlugin(source, target) {
\tthis.source = source;
\tthis.target = target;
}
module.exports = ParsePlugin;

ParsePlugin.prototype.apply = function(resolver) {
\tvar target = this.target;
\tresolver.plugin(this.source, function(request, callback) {
\t\tvar parsed = resolver.parse(request.request);
\t\tvar obj = Object.assign({}, request, parsed);
\t\tif(request.query && !parsed.query) {
\t\t\tobj.query = request.query;
\t\t}
\t\tif(parsed && callback.log) {
\t\t\tif(parsed.module)
\t\t\t\tcallback.log(\"Parsed request is a module\");
\t\t\tif(parsed.directory)
\t\t\t\tcallback.log(\"Parsed request is a directory\");
\t\t}
\t\tresolver.doResolve(target, obj, null, callback);
\t});
};
";
        
        $__internal_f0268f83acd3564fff97ff49ed53f2463d01d4f27cc3efb84d61cf1688c8bb60->leave($__internal_f0268f83acd3564fff97ff49ed53f2463d01d4f27cc3efb84d61cf1688c8bb60_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/enhanced-resolve/lib/ParsePlugin.js";
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
function ParsePlugin(source, target) {
\tthis.source = source;
\tthis.target = target;
}
module.exports = ParsePlugin;

ParsePlugin.prototype.apply = function(resolver) {
\tvar target = this.target;
\tresolver.plugin(this.source, function(request, callback) {
\t\tvar parsed = resolver.parse(request.request);
\t\tvar obj = Object.assign({}, request, parsed);
\t\tif(request.query && !parsed.query) {
\t\t\tobj.query = request.query;
\t\t}
\t\tif(parsed && callback.log) {
\t\t\tif(parsed.module)
\t\t\t\tcallback.log(\"Parsed request is a module\");
\t\t\tif(parsed.directory)
\t\t\t\tcallback.log(\"Parsed request is a directory\");
\t\t}
\t\tresolver.doResolve(target, obj, null, callback);
\t});
};
", "node_modules/enhanced-resolve/lib/ParsePlugin.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/enhanced-resolve/lib/ParsePlugin.js");
    }
}
