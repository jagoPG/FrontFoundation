<?php

/* node_modules/enhanced-resolve/lib/ResultPlugin.js */
class __TwigTemplate_3ad409e7bd710726c71e62225c127bd2bdbdd64eff644a4e1e789a9aa17403d7 extends Twig_Template
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
        $__internal_0a17a47c20c88fd550eff7f3d0af5e7eeb53432ca556b71f08b8f2a69541919f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0a17a47c20c88fd550eff7f3d0af5e7eeb53432ca556b71f08b8f2a69541919f->enter($__internal_0a17a47c20c88fd550eff7f3d0af5e7eeb53432ca556b71f08b8f2a69541919f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/enhanced-resolve/lib/ResultPlugin.js"));

        // line 1
        echo "/*
\tMIT License http://www.opensource.org/licenses/mit-license.php
\tAuthor Tobias Koppers @sokra
*/
function ResultPlugin(source) {
\tthis.source = source;
}
module.exports = ResultPlugin;

ResultPlugin.prototype.apply = function(resolver) {
\tresolver.plugin(this.source, function(request, callback) {
\t\tvar obj = Object.assign({}, request);
\t\tresolver.applyPluginsAsyncSeries1(\"result\", obj, function(err) {
\t\t\tif(err) return callback(err);
\t\t\tcallback(null, obj);
\t\t});
\t});
};
";
        
        $__internal_0a17a47c20c88fd550eff7f3d0af5e7eeb53432ca556b71f08b8f2a69541919f->leave($__internal_0a17a47c20c88fd550eff7f3d0af5e7eeb53432ca556b71f08b8f2a69541919f_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/enhanced-resolve/lib/ResultPlugin.js";
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
function ResultPlugin(source) {
\tthis.source = source;
}
module.exports = ResultPlugin;

ResultPlugin.prototype.apply = function(resolver) {
\tresolver.plugin(this.source, function(request, callback) {
\t\tvar obj = Object.assign({}, request);
\t\tresolver.applyPluginsAsyncSeries1(\"result\", obj, function(err) {
\t\t\tif(err) return callback(err);
\t\t\tcallback(null, obj);
\t\t});
\t});
};
", "node_modules/enhanced-resolve/lib/ResultPlugin.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/enhanced-resolve/lib/ResultPlugin.js");
    }
}
