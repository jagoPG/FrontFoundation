<?php

/* node_modules/webpack/lib/AutomaticPrefetchPlugin.js */
class __TwigTemplate_3544fb21a5e12238cdd14f437bbb6a86db02ce9cdbd5c05fdbad9a52855b6113 extends Twig_Template
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
        $__internal_aad2bfb5f4b67ffc96d18feb35636ce66291d2286a617cf5b057fcdc358f98cc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_aad2bfb5f4b67ffc96d18feb35636ce66291d2286a617cf5b057fcdc358f98cc->enter($__internal_aad2bfb5f4b67ffc96d18feb35636ce66291d2286a617cf5b057fcdc358f98cc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/webpack/lib/AutomaticPrefetchPlugin.js"));

        // line 1
        echo "/*
\tMIT License http://www.opensource.org/licenses/mit-license.php
\tAuthor Tobias Koppers @sokra
*/
\"use strict\";

const asyncLib = require(\"async\");
const PrefetchDependency = require(\"./dependencies/PrefetchDependency\");
const NormalModule = require(\"./NormalModule\");

class AutomaticPrefetchPlugin {
\tapply(compiler) {
\t\tcompiler.plugin(\"compilation\", (compilation, params) => {
\t\t\tconst normalModuleFactory = params.normalModuleFactory;

\t\t\tcompilation.dependencyFactories.set(PrefetchDependency, normalModuleFactory);
\t\t});
\t\tlet lastModules = null;
\t\tcompiler.plugin(\"after-compile\", (compilation, callback) => {
\t\t\tlastModules = compilation.modules
\t\t\t\t.filter(m => m instanceof NormalModule)
\t\t\t\t.map(m => ({
\t\t\t\t\tcontext: m.context,
\t\t\t\t\trequest: m.request
\t\t\t\t}));
\t\t\tcallback();
\t\t});
\t\tcompiler.plugin(\"make\", (compilation, callback) => {
\t\t\tif(!lastModules) return callback();
\t\t\tasyncLib.forEach(lastModules, (m, callback) => {
\t\t\t\tcompilation.prefetch(m.context || compiler.context, new PrefetchDependency(m.request), callback);
\t\t\t}, callback);
\t\t});
\t}
}
module.exports = AutomaticPrefetchPlugin;
";
        
        $__internal_aad2bfb5f4b67ffc96d18feb35636ce66291d2286a617cf5b057fcdc358f98cc->leave($__internal_aad2bfb5f4b67ffc96d18feb35636ce66291d2286a617cf5b057fcdc358f98cc_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/webpack/lib/AutomaticPrefetchPlugin.js";
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
\"use strict\";

const asyncLib = require(\"async\");
const PrefetchDependency = require(\"./dependencies/PrefetchDependency\");
const NormalModule = require(\"./NormalModule\");

class AutomaticPrefetchPlugin {
\tapply(compiler) {
\t\tcompiler.plugin(\"compilation\", (compilation, params) => {
\t\t\tconst normalModuleFactory = params.normalModuleFactory;

\t\t\tcompilation.dependencyFactories.set(PrefetchDependency, normalModuleFactory);
\t\t});
\t\tlet lastModules = null;
\t\tcompiler.plugin(\"after-compile\", (compilation, callback) => {
\t\t\tlastModules = compilation.modules
\t\t\t\t.filter(m => m instanceof NormalModule)
\t\t\t\t.map(m => ({
\t\t\t\t\tcontext: m.context,
\t\t\t\t\trequest: m.request
\t\t\t\t}));
\t\t\tcallback();
\t\t});
\t\tcompiler.plugin(\"make\", (compilation, callback) => {
\t\t\tif(!lastModules) return callback();
\t\t\tasyncLib.forEach(lastModules, (m, callback) => {
\t\t\t\tcompilation.prefetch(m.context || compiler.context, new PrefetchDependency(m.request), callback);
\t\t\t}, callback);
\t\t});
\t}
}
module.exports = AutomaticPrefetchPlugin;
", "node_modules/webpack/lib/AutomaticPrefetchPlugin.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/webpack/lib/AutomaticPrefetchPlugin.js");
    }
}
