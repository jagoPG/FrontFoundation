<?php

/* node_modules/webpack/buildin/harmony-module.js */
class __TwigTemplate_f4236ff622464b3f56eb6258e1371023712b3e1fcb0184a97be0bb204a62dcb6 extends Twig_Template
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
        $__internal_70127c534bd1abd2a9ba697bc1306974abf2dd7b46b17f052f4d6c8bf40f5c80 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_70127c534bd1abd2a9ba697bc1306974abf2dd7b46b17f052f4d6c8bf40f5c80->enter($__internal_70127c534bd1abd2a9ba697bc1306974abf2dd7b46b17f052f4d6c8bf40f5c80_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/webpack/buildin/harmony-module.js"));

        // line 1
        echo "module.exports = function(originalModule) {
\tif(!originalModule.webpackPolyfill) {
\t\tvar module = Object.create(originalModule);
\t\t// module.parent = undefined by default
\t\tif(!module.children) module.children = [];
\t\tObject.defineProperty(module, \"loaded\", {
\t\t\tenumerable: true,
\t\t\tget: function() {
\t\t\t\treturn module.l;
\t\t\t}
\t\t});
\t\tObject.defineProperty(module, \"id\", {
\t\t\tenumerable: true,
\t\t\tget: function() {
\t\t\t\treturn module.i;
\t\t\t}
\t\t});
\t\tObject.defineProperty(module, \"exports\", {
\t\t\tenumerable: true,
\t\t});
\t\tmodule.webpackPolyfill = 1;
\t}
\treturn module;
};
";
        
        $__internal_70127c534bd1abd2a9ba697bc1306974abf2dd7b46b17f052f4d6c8bf40f5c80->leave($__internal_70127c534bd1abd2a9ba697bc1306974abf2dd7b46b17f052f4d6c8bf40f5c80_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/webpack/buildin/harmony-module.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("module.exports = function(originalModule) {
\tif(!originalModule.webpackPolyfill) {
\t\tvar module = Object.create(originalModule);
\t\t// module.parent = undefined by default
\t\tif(!module.children) module.children = [];
\t\tObject.defineProperty(module, \"loaded\", {
\t\t\tenumerable: true,
\t\t\tget: function() {
\t\t\t\treturn module.l;
\t\t\t}
\t\t});
\t\tObject.defineProperty(module, \"id\", {
\t\t\tenumerable: true,
\t\t\tget: function() {
\t\t\t\treturn module.i;
\t\t\t}
\t\t});
\t\tObject.defineProperty(module, \"exports\", {
\t\t\tenumerable: true,
\t\t});
\t\tmodule.webpackPolyfill = 1;
\t}
\treturn module;
};
", "node_modules/webpack/buildin/harmony-module.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/webpack/buildin/harmony-module.js");
    }
}
