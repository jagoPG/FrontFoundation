<?php

/* node_modules/webpack/lib/CompatibilityPlugin.js */
class __TwigTemplate_cf88f8cfa7d9a0e0a4e8c114e3e35ffb3b4c90cfa3a636c6192fcc97f5e482fd extends Twig_Template
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
        $__internal_03dcbb1e0d9f3bd79cfd8648d6e23a6fe951ab4bf607b3d97f5a1b6361613fed = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_03dcbb1e0d9f3bd79cfd8648d6e23a6fe951ab4bf607b3d97f5a1b6361613fed->enter($__internal_03dcbb1e0d9f3bd79cfd8648d6e23a6fe951ab4bf607b3d97f5a1b6361613fed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/webpack/lib/CompatibilityPlugin.js"));

        // line 1
        echo "/*
\tMIT License http://www.opensource.org/licenses/mit-license.php
\tAuthor Tobias Koppers @sokra
*/
\"use strict\";

const ConstDependency = require(\"./dependencies/ConstDependency\");

const NullFactory = require(\"./NullFactory\");

const jsonLoaderPath = require.resolve(\"json-loader\");
const matchJson = /\\.json\$/i;

class CompatibilityPlugin {

\tapply(compiler) {
\t\tcompiler.plugin(\"compilation\", (compilation, params) => {
\t\t\tcompilation.dependencyFactories.set(ConstDependency, new NullFactory());
\t\t\tcompilation.dependencyTemplates.set(ConstDependency, new ConstDependency.Template());

\t\t\tparams.normalModuleFactory.plugin(\"parser\", (parser, parserOptions) => {

\t\t\t\tif(typeof parserOptions.browserify !== \"undefined\" && !parserOptions.browserify)
\t\t\t\t\treturn;

\t\t\t\tparser.plugin(\"call require\", (expr) => {
\t\t\t\t\t// support for browserify style require delegator: \"require(o, !0)\"
\t\t\t\t\tif(expr.arguments.length !== 2) return;
\t\t\t\t\tconst second = parser.evaluateExpression(expr.arguments[1]);
\t\t\t\t\tif(!second.isBoolean()) return;
\t\t\t\t\tif(second.asBool() !== true) return;
\t\t\t\t\tconst dep = new ConstDependency(\"require\", expr.callee.range);
\t\t\t\t\tdep.loc = expr.loc;
\t\t\t\t\tif(parser.state.current.dependencies.length > 1) {
\t\t\t\t\t\tconst last = parser.state.current.dependencies[parser.state.current.dependencies.length - 1];
\t\t\t\t\t\tif(last.critical && last.request === \".\" && last.userRequest === \".\" && last.recursive)
\t\t\t\t\t\t\tparser.state.current.dependencies.pop();
\t\t\t\t\t}
\t\t\t\t\tparser.state.current.addDependency(dep);
\t\t\t\t\treturn true;
\t\t\t\t});
\t\t\t});

\t\t\tparams.normalModuleFactory.plugin(\"after-resolve\", (data, done) => {
\t\t\t\t// if this is a json file and there are no loaders active, we use the json-loader in order to avoid parse errors
\t\t\t\t// @see https://github.com/webpack/webpack/issues/3363
\t\t\t\tif(matchJson.test(data.request) && data.loaders.length === 0) {
\t\t\t\t\tdata.loaders.push({
\t\t\t\t\t\tloader: jsonLoaderPath
\t\t\t\t\t});
\t\t\t\t}
\t\t\t\tdone(null, data);
\t\t\t});
\t\t});
\t}
}
module.exports = CompatibilityPlugin;
";
        
        $__internal_03dcbb1e0d9f3bd79cfd8648d6e23a6fe951ab4bf607b3d97f5a1b6361613fed->leave($__internal_03dcbb1e0d9f3bd79cfd8648d6e23a6fe951ab4bf607b3d97f5a1b6361613fed_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/webpack/lib/CompatibilityPlugin.js";
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

const ConstDependency = require(\"./dependencies/ConstDependency\");

const NullFactory = require(\"./NullFactory\");

const jsonLoaderPath = require.resolve(\"json-loader\");
const matchJson = /\\.json\$/i;

class CompatibilityPlugin {

\tapply(compiler) {
\t\tcompiler.plugin(\"compilation\", (compilation, params) => {
\t\t\tcompilation.dependencyFactories.set(ConstDependency, new NullFactory());
\t\t\tcompilation.dependencyTemplates.set(ConstDependency, new ConstDependency.Template());

\t\t\tparams.normalModuleFactory.plugin(\"parser\", (parser, parserOptions) => {

\t\t\t\tif(typeof parserOptions.browserify !== \"undefined\" && !parserOptions.browserify)
\t\t\t\t\treturn;

\t\t\t\tparser.plugin(\"call require\", (expr) => {
\t\t\t\t\t// support for browserify style require delegator: \"require(o, !0)\"
\t\t\t\t\tif(expr.arguments.length !== 2) return;
\t\t\t\t\tconst second = parser.evaluateExpression(expr.arguments[1]);
\t\t\t\t\tif(!second.isBoolean()) return;
\t\t\t\t\tif(second.asBool() !== true) return;
\t\t\t\t\tconst dep = new ConstDependency(\"require\", expr.callee.range);
\t\t\t\t\tdep.loc = expr.loc;
\t\t\t\t\tif(parser.state.current.dependencies.length > 1) {
\t\t\t\t\t\tconst last = parser.state.current.dependencies[parser.state.current.dependencies.length - 1];
\t\t\t\t\t\tif(last.critical && last.request === \".\" && last.userRequest === \".\" && last.recursive)
\t\t\t\t\t\t\tparser.state.current.dependencies.pop();
\t\t\t\t\t}
\t\t\t\t\tparser.state.current.addDependency(dep);
\t\t\t\t\treturn true;
\t\t\t\t});
\t\t\t});

\t\t\tparams.normalModuleFactory.plugin(\"after-resolve\", (data, done) => {
\t\t\t\t// if this is a json file and there are no loaders active, we use the json-loader in order to avoid parse errors
\t\t\t\t// @see https://github.com/webpack/webpack/issues/3363
\t\t\t\tif(matchJson.test(data.request) && data.loaders.length === 0) {
\t\t\t\t\tdata.loaders.push({
\t\t\t\t\t\tloader: jsonLoaderPath
\t\t\t\t\t});
\t\t\t\t}
\t\t\t\tdone(null, data);
\t\t\t});
\t\t});
\t}
}
module.exports = CompatibilityPlugin;
", "node_modules/webpack/lib/CompatibilityPlugin.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/webpack/lib/CompatibilityPlugin.js");
    }
}
