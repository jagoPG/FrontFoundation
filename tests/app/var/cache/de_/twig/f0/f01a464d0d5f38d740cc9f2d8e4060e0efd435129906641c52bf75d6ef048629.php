<?php

/* node_modules/enhanced-resolve/lib/ModulesInRootPlugin.js */
class __TwigTemplate_070935c370d5e573beddae4e4757081d0b44b2f6d229f673704e51957b720345 extends Twig_Template
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
        $__internal_8707febadc432d4acd5a7bb1d611f12dada1b802fbdcb4b711ee00cd6d9dfc9d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8707febadc432d4acd5a7bb1d611f12dada1b802fbdcb4b711ee00cd6d9dfc9d->enter($__internal_8707febadc432d4acd5a7bb1d611f12dada1b802fbdcb4b711ee00cd6d9dfc9d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/enhanced-resolve/lib/ModulesInRootPlugin.js"));

        // line 1
        echo "/*
\tMIT License http://www.opensource.org/licenses/mit-license.php
\tAuthor Tobias Koppers @sokra
*/
function ModulesInRootPlugin(source, path, target) {
\tthis.source = source;
\tthis.path = path;
\tthis.target = target;
}
module.exports = ModulesInRootPlugin;

ModulesInRootPlugin.prototype.apply = function(resolver) {
\tvar target = this.target;
\tvar path = this.path;
\tresolver.plugin(this.source, function(request, callback) {
\t\tvar obj = Object.assign({}, request, {
\t\t\tpath: path,
\t\t\trequest: \"./\" + request.request
\t\t});
\t\tresolver.doResolve(target, obj, \"looking for modules in \" + path, callback, true);
\t});
};
";
        
        $__internal_8707febadc432d4acd5a7bb1d611f12dada1b802fbdcb4b711ee00cd6d9dfc9d->leave($__internal_8707febadc432d4acd5a7bb1d611f12dada1b802fbdcb4b711ee00cd6d9dfc9d_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/enhanced-resolve/lib/ModulesInRootPlugin.js";
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
function ModulesInRootPlugin(source, path, target) {
\tthis.source = source;
\tthis.path = path;
\tthis.target = target;
}
module.exports = ModulesInRootPlugin;

ModulesInRootPlugin.prototype.apply = function(resolver) {
\tvar target = this.target;
\tvar path = this.path;
\tresolver.plugin(this.source, function(request, callback) {
\t\tvar obj = Object.assign({}, request, {
\t\t\tpath: path,
\t\t\trequest: \"./\" + request.request
\t\t});
\t\tresolver.doResolve(target, obj, \"looking for modules in \" + path, callback, true);
\t});
};
", "node_modules/enhanced-resolve/lib/ModulesInRootPlugin.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/enhanced-resolve/lib/ModulesInRootPlugin.js");
    }
}
