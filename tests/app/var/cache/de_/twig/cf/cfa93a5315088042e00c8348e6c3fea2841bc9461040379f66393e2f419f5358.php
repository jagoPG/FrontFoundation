<?php

/* node_modules/webpack/lib/dependencies/AMDPlugin.js */
class __TwigTemplate_0b9485314a5ebcc72ba58539c5a1773a6c9cf63a78a99ffe0f95b517cf4d5a0b extends Twig_Template
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
        $__internal_2caef6655808598287175659ea86ec2c9d27be5d37a5ac39c53725cdb9d85f63 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2caef6655808598287175659ea86ec2c9d27be5d37a5ac39c53725cdb9d85f63->enter($__internal_2caef6655808598287175659ea86ec2c9d27be5d37a5ac39c53725cdb9d85f63_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/webpack/lib/dependencies/AMDPlugin.js"));

        // line 1
        echo "/*
\tMIT License http://www.opensource.org/licenses/mit-license.php
\tAuthor Tobias Koppers @sokra
*/
\"use strict\";

const path = require(\"path\");
const AMDRequireDependency = require(\"./AMDRequireDependency\");
const AMDRequireItemDependency = require(\"./AMDRequireItemDependency\");
const AMDRequireArrayDependency = require(\"./AMDRequireArrayDependency\");
const AMDRequireContextDependency = require(\"./AMDRequireContextDependency\");
const AMDDefineDependency = require(\"./AMDDefineDependency\");
const UnsupportedDependency = require(\"./UnsupportedDependency\");
const LocalModuleDependency = require(\"./LocalModuleDependency\");

const NullFactory = require(\"../NullFactory\");

const AMDRequireDependenciesBlockParserPlugin = require(\"./AMDRequireDependenciesBlockParserPlugin\");
const AMDDefineDependencyParserPlugin = require(\"./AMDDefineDependencyParserPlugin\");

const AliasPlugin = require(\"enhanced-resolve/lib/AliasPlugin\");

const ParserHelpers = require(\"../ParserHelpers\");

class AMDPlugin {
\tconstructor(options, amdOptions) {
\t\tthis.amdOptions = amdOptions;
\t\tthis.options = options;
\t}

\tapply(compiler) {
\t\tconst options = this.options;
\t\tconst amdOptions = this.amdOptions;
\t\tcompiler.plugin(\"compilation\", (compilation, params) => {
\t\t\tconst normalModuleFactory = params.normalModuleFactory;
\t\t\tconst contextModuleFactory = params.contextModuleFactory;

\t\t\tcompilation.dependencyFactories.set(AMDRequireDependency, new NullFactory());
\t\t\tcompilation.dependencyTemplates.set(AMDRequireDependency, new AMDRequireDependency.Template());

\t\t\tcompilation.dependencyFactories.set(AMDRequireItemDependency, normalModuleFactory);
\t\t\tcompilation.dependencyTemplates.set(AMDRequireItemDependency, new AMDRequireItemDependency.Template());

\t\t\tcompilation.dependencyFactories.set(AMDRequireArrayDependency, new NullFactory());
\t\t\tcompilation.dependencyTemplates.set(AMDRequireArrayDependency, new AMDRequireArrayDependency.Template());

\t\t\tcompilation.dependencyFactories.set(AMDRequireContextDependency, contextModuleFactory);
\t\t\tcompilation.dependencyTemplates.set(AMDRequireContextDependency, new AMDRequireContextDependency.Template());

\t\t\tcompilation.dependencyFactories.set(AMDDefineDependency, new NullFactory());
\t\t\tcompilation.dependencyTemplates.set(AMDDefineDependency, new AMDDefineDependency.Template());

\t\t\tcompilation.dependencyFactories.set(UnsupportedDependency, new NullFactory());
\t\t\tcompilation.dependencyTemplates.set(UnsupportedDependency, new UnsupportedDependency.Template());

\t\t\tcompilation.dependencyFactories.set(LocalModuleDependency, new NullFactory());
\t\t\tcompilation.dependencyTemplates.set(LocalModuleDependency, new LocalModuleDependency.Template());

\t\t\tparams.normalModuleFactory.plugin(\"parser\", (parser, parserOptions) => {

\t\t\t\tif(typeof parserOptions.amd !== \"undefined\" && !parserOptions.amd)
\t\t\t\t\treturn;

\t\t\t\tfunction setExpressionToModule(outerExpr, module) {
\t\t\t\t\tparser.plugin(\"expression \" + outerExpr, (expr) => {
\t\t\t\t\t\tconst dep = new AMDRequireItemDependency(module, expr.range);
\t\t\t\t\t\tdep.userRequest = outerExpr;
\t\t\t\t\t\tdep.loc = expr.loc;
\t\t\t\t\t\tparser.state.current.addDependency(dep);
\t\t\t\t\t\treturn true;
\t\t\t\t\t});
\t\t\t\t}

\t\t\t\tparser.apply(
\t\t\t\t\tnew AMDRequireDependenciesBlockParserPlugin(options),
\t\t\t\t\tnew AMDDefineDependencyParserPlugin(options)
\t\t\t\t);
\t\t\t\tsetExpressionToModule(\"require.amd\", \"!!webpack amd options\");
\t\t\t\tsetExpressionToModule(\"define.amd\", \"!!webpack amd options\");
\t\t\t\tsetExpressionToModule(\"define\", \"!!webpack amd define\");
\t\t\t\tparser.plugin(\"expression __webpack_amd_options__\", () =>
\t\t\t\t\tparser.state.current.addVariable(\"__webpack_amd_options__\", JSON.stringify(amdOptions)));
\t\t\t\tparser.plugin(\"evaluate typeof define.amd\", ParserHelpers.evaluateToString(typeof amdOptions));
\t\t\t\tparser.plugin(\"evaluate typeof require.amd\", ParserHelpers.evaluateToString(typeof amdOptions));
\t\t\t\tparser.plugin(\"evaluate Identifier define.amd\", ParserHelpers.evaluateToIdentifier(\"define.amd\", true));
\t\t\t\tparser.plugin(\"evaluate Identifier require.amd\", ParserHelpers.evaluateToIdentifier(\"require.amd\", true));
\t\t\t\tparser.plugin(\"typeof define\", ParserHelpers.toConstantDependency(JSON.stringify(\"function\")));
\t\t\t\tparser.plugin(\"evaluate typeof define\", ParserHelpers.evaluateToString(\"function\"));
\t\t\t\tparser.plugin(\"can-rename define\", ParserHelpers.approve);
\t\t\t\tparser.plugin(\"rename define\", (expr) => {
\t\t\t\t\tconst dep = new AMDRequireItemDependency(\"!!webpack amd define\", expr.range);
\t\t\t\t\tdep.userRequest = \"define\";
\t\t\t\t\tdep.loc = expr.loc;
\t\t\t\t\tparser.state.current.addDependency(dep);
\t\t\t\t\treturn false;
\t\t\t\t});
\t\t\t\tparser.plugin(\"typeof require\", ParserHelpers.toConstantDependency(JSON.stringify(\"function\")));
\t\t\t\tparser.plugin(\"evaluate typeof require\", ParserHelpers.evaluateToString(\"function\"));
\t\t\t});
\t\t});
\t\tcompiler.plugin(\"after-resolvers\", () => {
\t\t\tcompiler.resolvers.normal.apply(
\t\t\t\tnew AliasPlugin(\"described-resolve\", {
\t\t\t\t\tname: \"amdefine\",
\t\t\t\t\talias: path.join(__dirname, \"..\", \"..\", \"buildin\", \"amd-define.js\")
\t\t\t\t}, \"resolve\"),
\t\t\t\tnew AliasPlugin(\"described-resolve\", {
\t\t\t\t\tname: \"webpack amd options\",
\t\t\t\t\talias: path.join(__dirname, \"..\", \"..\", \"buildin\", \"amd-options.js\")
\t\t\t\t}, \"resolve\"),
\t\t\t\tnew AliasPlugin(\"described-resolve\", {
\t\t\t\t\tname: \"webpack amd define\",
\t\t\t\t\talias: path.join(__dirname, \"..\", \"..\", \"buildin\", \"amd-define.js\")
\t\t\t\t}, \"resolve\")
\t\t\t);
\t\t});
\t}
}
module.exports = AMDPlugin;
";
        
        $__internal_2caef6655808598287175659ea86ec2c9d27be5d37a5ac39c53725cdb9d85f63->leave($__internal_2caef6655808598287175659ea86ec2c9d27be5d37a5ac39c53725cdb9d85f63_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/webpack/lib/dependencies/AMDPlugin.js";
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

const path = require(\"path\");
const AMDRequireDependency = require(\"./AMDRequireDependency\");
const AMDRequireItemDependency = require(\"./AMDRequireItemDependency\");
const AMDRequireArrayDependency = require(\"./AMDRequireArrayDependency\");
const AMDRequireContextDependency = require(\"./AMDRequireContextDependency\");
const AMDDefineDependency = require(\"./AMDDefineDependency\");
const UnsupportedDependency = require(\"./UnsupportedDependency\");
const LocalModuleDependency = require(\"./LocalModuleDependency\");

const NullFactory = require(\"../NullFactory\");

const AMDRequireDependenciesBlockParserPlugin = require(\"./AMDRequireDependenciesBlockParserPlugin\");
const AMDDefineDependencyParserPlugin = require(\"./AMDDefineDependencyParserPlugin\");

const AliasPlugin = require(\"enhanced-resolve/lib/AliasPlugin\");

const ParserHelpers = require(\"../ParserHelpers\");

class AMDPlugin {
\tconstructor(options, amdOptions) {
\t\tthis.amdOptions = amdOptions;
\t\tthis.options = options;
\t}

\tapply(compiler) {
\t\tconst options = this.options;
\t\tconst amdOptions = this.amdOptions;
\t\tcompiler.plugin(\"compilation\", (compilation, params) => {
\t\t\tconst normalModuleFactory = params.normalModuleFactory;
\t\t\tconst contextModuleFactory = params.contextModuleFactory;

\t\t\tcompilation.dependencyFactories.set(AMDRequireDependency, new NullFactory());
\t\t\tcompilation.dependencyTemplates.set(AMDRequireDependency, new AMDRequireDependency.Template());

\t\t\tcompilation.dependencyFactories.set(AMDRequireItemDependency, normalModuleFactory);
\t\t\tcompilation.dependencyTemplates.set(AMDRequireItemDependency, new AMDRequireItemDependency.Template());

\t\t\tcompilation.dependencyFactories.set(AMDRequireArrayDependency, new NullFactory());
\t\t\tcompilation.dependencyTemplates.set(AMDRequireArrayDependency, new AMDRequireArrayDependency.Template());

\t\t\tcompilation.dependencyFactories.set(AMDRequireContextDependency, contextModuleFactory);
\t\t\tcompilation.dependencyTemplates.set(AMDRequireContextDependency, new AMDRequireContextDependency.Template());

\t\t\tcompilation.dependencyFactories.set(AMDDefineDependency, new NullFactory());
\t\t\tcompilation.dependencyTemplates.set(AMDDefineDependency, new AMDDefineDependency.Template());

\t\t\tcompilation.dependencyFactories.set(UnsupportedDependency, new NullFactory());
\t\t\tcompilation.dependencyTemplates.set(UnsupportedDependency, new UnsupportedDependency.Template());

\t\t\tcompilation.dependencyFactories.set(LocalModuleDependency, new NullFactory());
\t\t\tcompilation.dependencyTemplates.set(LocalModuleDependency, new LocalModuleDependency.Template());

\t\t\tparams.normalModuleFactory.plugin(\"parser\", (parser, parserOptions) => {

\t\t\t\tif(typeof parserOptions.amd !== \"undefined\" && !parserOptions.amd)
\t\t\t\t\treturn;

\t\t\t\tfunction setExpressionToModule(outerExpr, module) {
\t\t\t\t\tparser.plugin(\"expression \" + outerExpr, (expr) => {
\t\t\t\t\t\tconst dep = new AMDRequireItemDependency(module, expr.range);
\t\t\t\t\t\tdep.userRequest = outerExpr;
\t\t\t\t\t\tdep.loc = expr.loc;
\t\t\t\t\t\tparser.state.current.addDependency(dep);
\t\t\t\t\t\treturn true;
\t\t\t\t\t});
\t\t\t\t}

\t\t\t\tparser.apply(
\t\t\t\t\tnew AMDRequireDependenciesBlockParserPlugin(options),
\t\t\t\t\tnew AMDDefineDependencyParserPlugin(options)
\t\t\t\t);
\t\t\t\tsetExpressionToModule(\"require.amd\", \"!!webpack amd options\");
\t\t\t\tsetExpressionToModule(\"define.amd\", \"!!webpack amd options\");
\t\t\t\tsetExpressionToModule(\"define\", \"!!webpack amd define\");
\t\t\t\tparser.plugin(\"expression __webpack_amd_options__\", () =>
\t\t\t\t\tparser.state.current.addVariable(\"__webpack_amd_options__\", JSON.stringify(amdOptions)));
\t\t\t\tparser.plugin(\"evaluate typeof define.amd\", ParserHelpers.evaluateToString(typeof amdOptions));
\t\t\t\tparser.plugin(\"evaluate typeof require.amd\", ParserHelpers.evaluateToString(typeof amdOptions));
\t\t\t\tparser.plugin(\"evaluate Identifier define.amd\", ParserHelpers.evaluateToIdentifier(\"define.amd\", true));
\t\t\t\tparser.plugin(\"evaluate Identifier require.amd\", ParserHelpers.evaluateToIdentifier(\"require.amd\", true));
\t\t\t\tparser.plugin(\"typeof define\", ParserHelpers.toConstantDependency(JSON.stringify(\"function\")));
\t\t\t\tparser.plugin(\"evaluate typeof define\", ParserHelpers.evaluateToString(\"function\"));
\t\t\t\tparser.plugin(\"can-rename define\", ParserHelpers.approve);
\t\t\t\tparser.plugin(\"rename define\", (expr) => {
\t\t\t\t\tconst dep = new AMDRequireItemDependency(\"!!webpack amd define\", expr.range);
\t\t\t\t\tdep.userRequest = \"define\";
\t\t\t\t\tdep.loc = expr.loc;
\t\t\t\t\tparser.state.current.addDependency(dep);
\t\t\t\t\treturn false;
\t\t\t\t});
\t\t\t\tparser.plugin(\"typeof require\", ParserHelpers.toConstantDependency(JSON.stringify(\"function\")));
\t\t\t\tparser.plugin(\"evaluate typeof require\", ParserHelpers.evaluateToString(\"function\"));
\t\t\t});
\t\t});
\t\tcompiler.plugin(\"after-resolvers\", () => {
\t\t\tcompiler.resolvers.normal.apply(
\t\t\t\tnew AliasPlugin(\"described-resolve\", {
\t\t\t\t\tname: \"amdefine\",
\t\t\t\t\talias: path.join(__dirname, \"..\", \"..\", \"buildin\", \"amd-define.js\")
\t\t\t\t}, \"resolve\"),
\t\t\t\tnew AliasPlugin(\"described-resolve\", {
\t\t\t\t\tname: \"webpack amd options\",
\t\t\t\t\talias: path.join(__dirname, \"..\", \"..\", \"buildin\", \"amd-options.js\")
\t\t\t\t}, \"resolve\"),
\t\t\t\tnew AliasPlugin(\"described-resolve\", {
\t\t\t\t\tname: \"webpack amd define\",
\t\t\t\t\talias: path.join(__dirname, \"..\", \"..\", \"buildin\", \"amd-define.js\")
\t\t\t\t}, \"resolve\")
\t\t\t);
\t\t});
\t}
}
module.exports = AMDPlugin;
", "node_modules/webpack/lib/dependencies/AMDPlugin.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/webpack/lib/dependencies/AMDPlugin.js");
    }
}
