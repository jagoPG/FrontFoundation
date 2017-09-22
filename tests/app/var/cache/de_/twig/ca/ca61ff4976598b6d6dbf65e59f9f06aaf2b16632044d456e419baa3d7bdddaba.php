<?php

/* node_modules/webpack/lib/DelegatedPlugin.js */
class __TwigTemplate_5d9c6a9d6e995ed4e94f2dd7c7d9cfbd46c84a5c910200b8cd86d06e81799d5f extends Twig_Template
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
        $__internal_2ca2237186802396cc1f033641c476cc669259275f97dedfa9e27fbbc0dcbecd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2ca2237186802396cc1f033641c476cc669259275f97dedfa9e27fbbc0dcbecd->enter($__internal_2ca2237186802396cc1f033641c476cc669259275f97dedfa9e27fbbc0dcbecd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/webpack/lib/DelegatedPlugin.js"));

        // line 1
        echo "/*
\tMIT License http://www.opensource.org/licenses/mit-license.php
\tAuthor Tobias Koppers @sokra
*/

\"use strict\";

const DelegatedModuleFactoryPlugin = require(\"./DelegatedModuleFactoryPlugin\");
const DelegatedSourceDependency = require(\"./dependencies/DelegatedSourceDependency\");
const DelegatedExportsDependency = require(\"./dependencies/DelegatedExportsDependency\");
const NullFactory = require(\"./NullFactory\");

class DelegatedPlugin {
\tconstructor(options) {
\t\tthis.options = options;
\t}

\tapply(compiler) {
\t\tcompiler.plugin(\"compilation\", (compilation, params) => {
\t\t\tcompilation.dependencyFactories.set(DelegatedSourceDependency, params.normalModuleFactory);
\t\t\tcompilation.dependencyFactories.set(DelegatedExportsDependency, new NullFactory());
\t\t});

\t\tcompiler.plugin(\"compile\", (params) => {
\t\t\tparams.normalModuleFactory.apply(new DelegatedModuleFactoryPlugin(this.options));
\t\t});
\t}
}

module.exports = DelegatedPlugin;
";
        
        $__internal_2ca2237186802396cc1f033641c476cc669259275f97dedfa9e27fbbc0dcbecd->leave($__internal_2ca2237186802396cc1f033641c476cc669259275f97dedfa9e27fbbc0dcbecd_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/webpack/lib/DelegatedPlugin.js";
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

const DelegatedModuleFactoryPlugin = require(\"./DelegatedModuleFactoryPlugin\");
const DelegatedSourceDependency = require(\"./dependencies/DelegatedSourceDependency\");
const DelegatedExportsDependency = require(\"./dependencies/DelegatedExportsDependency\");
const NullFactory = require(\"./NullFactory\");

class DelegatedPlugin {
\tconstructor(options) {
\t\tthis.options = options;
\t}

\tapply(compiler) {
\t\tcompiler.plugin(\"compilation\", (compilation, params) => {
\t\t\tcompilation.dependencyFactories.set(DelegatedSourceDependency, params.normalModuleFactory);
\t\t\tcompilation.dependencyFactories.set(DelegatedExportsDependency, new NullFactory());
\t\t});

\t\tcompiler.plugin(\"compile\", (params) => {
\t\t\tparams.normalModuleFactory.apply(new DelegatedModuleFactoryPlugin(this.options));
\t\t});
\t}
}

module.exports = DelegatedPlugin;
", "node_modules/webpack/lib/DelegatedPlugin.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/webpack/lib/DelegatedPlugin.js");
    }
}
