<?php

/* node_modules/enhanced-resolve/lib/ModuleAppendPlugin.js */
class __TwigTemplate_d0810493bd525e1fd2b95e26e1e53c5c63123532a39b43625071cee2617342d9 extends Twig_Template
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
        $__internal_3438bcce040cf725130be8c258d4da0a292b8d6545b1e98d27d95febdb974044 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3438bcce040cf725130be8c258d4da0a292b8d6545b1e98d27d95febdb974044->enter($__internal_3438bcce040cf725130be8c258d4da0a292b8d6545b1e98d27d95febdb974044_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/enhanced-resolve/lib/ModuleAppendPlugin.js"));

        // line 1
        echo "/*
\tMIT License http://www.opensource.org/licenses/mit-license.php
\tAuthor Tobias Koppers @sokra
*/
function ModuleAppendPlugin(source, appending, target) {
\tthis.source = source;
\tthis.appending = appending;
\tthis.target = target;
}
module.exports = ModuleAppendPlugin;

ModuleAppendPlugin.prototype.apply = function(resolver) {
\tvar appending = this.appending;
\tvar target = this.target;
\tresolver.plugin(this.source, function(request, callback) {
\t\tvar i = request.request.indexOf(\"/\"),
\t\t\tj = request.request.indexOf(\"\\\\\");
\t\tvar p = i < 0 ? j : j < 0 ? i : i < j ? i : j;
\t\tvar moduleName, remainingRequest;
\t\tif(p < 0) {
\t\t\tmoduleName = request.request;
\t\t\tremainingRequest = \"\";
\t\t} else {
\t\t\tmoduleName = request.request.substr(0, p);
\t\t\tremainingRequest = request.request.substr(p);
\t\t}
\t\tif(moduleName === \".\" || moduleName === \"..\")
\t\t\treturn callback();
\t\tvar moduleFinalName = moduleName + appending;
\t\tvar obj = Object.assign({}, request, {
\t\t\trequest: moduleFinalName + remainingRequest
\t\t});
\t\tresolver.doResolve(target, obj, \"module variation \" + moduleFinalName, callback);
\t});
};
";
        
        $__internal_3438bcce040cf725130be8c258d4da0a292b8d6545b1e98d27d95febdb974044->leave($__internal_3438bcce040cf725130be8c258d4da0a292b8d6545b1e98d27d95febdb974044_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/enhanced-resolve/lib/ModuleAppendPlugin.js";
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
function ModuleAppendPlugin(source, appending, target) {
\tthis.source = source;
\tthis.appending = appending;
\tthis.target = target;
}
module.exports = ModuleAppendPlugin;

ModuleAppendPlugin.prototype.apply = function(resolver) {
\tvar appending = this.appending;
\tvar target = this.target;
\tresolver.plugin(this.source, function(request, callback) {
\t\tvar i = request.request.indexOf(\"/\"),
\t\t\tj = request.request.indexOf(\"\\\\\");
\t\tvar p = i < 0 ? j : j < 0 ? i : i < j ? i : j;
\t\tvar moduleName, remainingRequest;
\t\tif(p < 0) {
\t\t\tmoduleName = request.request;
\t\t\tremainingRequest = \"\";
\t\t} else {
\t\t\tmoduleName = request.request.substr(0, p);
\t\t\tremainingRequest = request.request.substr(p);
\t\t}
\t\tif(moduleName === \".\" || moduleName === \"..\")
\t\t\treturn callback();
\t\tvar moduleFinalName = moduleName + appending;
\t\tvar obj = Object.assign({}, request, {
\t\t\trequest: moduleFinalName + remainingRequest
\t\t});
\t\tresolver.doResolve(target, obj, \"module variation \" + moduleFinalName, callback);
\t});
};
", "node_modules/enhanced-resolve/lib/ModuleAppendPlugin.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/enhanced-resolve/lib/ModuleAppendPlugin.js");
    }
}
