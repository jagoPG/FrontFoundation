<?php

/* node_modules/webpack/buildin/module.js */
class __TwigTemplate_8462aeae5930f1b8c1bab62c502000d7ea8e90bc4752ac16074fac64556620d2 extends Twig_Template
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
        $__internal_a168e3d4406532b86de11182dab8221af28292ea2630aea6dc4fa867158d5a71 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a168e3d4406532b86de11182dab8221af28292ea2630aea6dc4fa867158d5a71->enter($__internal_a168e3d4406532b86de11182dab8221af28292ea2630aea6dc4fa867158d5a71_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/webpack/buildin/module.js"));

        // line 1
        echo "module.exports = function(module) {
\tif(!module.webpackPolyfill) {
\t\tmodule.deprecate = function() {};
\t\tmodule.paths = [];
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
\t\tmodule.webpackPolyfill = 1;
\t}
\treturn module;
};
";
        
        $__internal_a168e3d4406532b86de11182dab8221af28292ea2630aea6dc4fa867158d5a71->leave($__internal_a168e3d4406532b86de11182dab8221af28292ea2630aea6dc4fa867158d5a71_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/webpack/buildin/module.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("module.exports = function(module) {
\tif(!module.webpackPolyfill) {
\t\tmodule.deprecate = function() {};
\t\tmodule.paths = [];
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
\t\tmodule.webpackPolyfill = 1;
\t}
\treturn module;
};
", "node_modules/webpack/buildin/module.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/webpack/buildin/module.js");
    }
}
