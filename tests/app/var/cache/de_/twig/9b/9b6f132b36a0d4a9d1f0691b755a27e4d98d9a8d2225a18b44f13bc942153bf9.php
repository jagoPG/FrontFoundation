<?php

/* node_modules/webpack/lib/dependencies/AMDRequireDependenciesBlockParserPlugin.js */
class __TwigTemplate_a921ea53a82d7ef4d3a39bc38f32000b10a627c50ea184090532439067851031 extends Twig_Template
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
        $__internal_596562c527fd6242c7a42a01753272289043dd8a66454537c8061f4bec29e86e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_596562c527fd6242c7a42a01753272289043dd8a66454537c8061f4bec29e86e->enter($__internal_596562c527fd6242c7a42a01753272289043dd8a66454537c8061f4bec29e86e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/webpack/lib/dependencies/AMDRequireDependenciesBlockParserPlugin.js"));

        // line 1
        echo "/*
\tMIT License http://www.opensource.org/licenses/mit-license.php
\tAuthor Tobias Koppers @sokra
*/
\"use strict\";

const AMDRequireItemDependency = require(\"./AMDRequireItemDependency\");
const AMDRequireArrayDependency = require(\"./AMDRequireArrayDependency\");
const AMDRequireContextDependency = require(\"./AMDRequireContextDependency\");
const AMDRequireDependenciesBlock = require(\"./AMDRequireDependenciesBlock\");
const UnsupportedDependency = require(\"./UnsupportedDependency\");
const LocalModuleDependency = require(\"./LocalModuleDependency\");
const ContextDependencyHelpers = require(\"./ContextDependencyHelpers\");
const LocalModulesHelpers = require(\"./LocalModulesHelpers\");
const ConstDependency = require(\"./ConstDependency\");
const getFunctionExpression = require(\"./getFunctionExpression\");
const UnsupportedFeatureWarning = require(\"../UnsupportedFeatureWarning\");

class AMDRequireDependenciesBlockParserPlugin {
\tconstructor(options) {
\t\tthis.options = options;
\t}

\tprocessFunctionArgument(parser, expression) {
\t\tlet bindThis = true;
\t\tconst fnData = getFunctionExpression(expression);
\t\tif(fnData) {
\t\t\tparser.inScope(fnData.fn.params.filter((i) => {
\t\t\t\treturn [\"require\", \"module\", \"exports\"].indexOf(i.name) < 0;
\t\t\t}), () => {
\t\t\t\tif(fnData.fn.body.type === \"BlockStatement\")
\t\t\t\t\tparser.walkStatement(fnData.fn.body);
\t\t\t\telse
\t\t\t\t\tparser.walkExpression(fnData.fn.body);
\t\t\t});
\t\t\tparser.walkExpressions(fnData.expressions);
\t\t\tif(fnData.needThis === false) {
\t\t\t\tbindThis = false;
\t\t\t}
\t\t} else {
\t\t\tparser.walkExpression(expression);
\t\t}
\t\treturn bindThis;
\t}

\tapply(parser) {
\t\tconst options = this.options;
\t\tparser.plugin(\"call require\", (expr) => {
\t\t\tlet param;
\t\t\tlet dep;
\t\t\tlet result;

\t\t\tconst old = parser.state.current;

\t\t\tif(expr.arguments.length >= 1) {
\t\t\t\tparam = parser.evaluateExpression(expr.arguments[0]);
\t\t\t\tdep = new AMDRequireDependenciesBlock(
\t\t\t\t\texpr,
\t\t\t\t\tparam.range,
\t\t\t\t\t(expr.arguments.length > 1) ? expr.arguments[1].range : null,
\t\t\t\t\t(expr.arguments.length > 2) ? expr.arguments[2].range : null,
\t\t\t\t\tparser.state.module,
\t\t\t\t\texpr.loc
\t\t\t\t);
\t\t\t\tparser.state.current = dep;
\t\t\t}

\t\t\tif(expr.arguments.length === 1) {
\t\t\t\tparser.inScope([], () => {
\t\t\t\t\tresult = parser.applyPluginsBailResult(\"call require:amd:array\", expr, param);
\t\t\t\t});
\t\t\t\tparser.state.current = old;
\t\t\t\tif(!result) return;
\t\t\t\tparser.state.current.addBlock(dep);
\t\t\t\treturn true;
\t\t\t}

\t\t\tif(expr.arguments.length === 2 || expr.arguments.length === 3) {
\t\t\t\ttry {
\t\t\t\t\tparser.inScope([], () => {
\t\t\t\t\t\tresult = parser.applyPluginsBailResult(\"call require:amd:array\", expr, param);
\t\t\t\t\t});
\t\t\t\t\tif(!result) {
\t\t\t\t\t\tdep = new UnsupportedDependency(\"unsupported\", expr.range);
\t\t\t\t\t\told.addDependency(dep);
\t\t\t\t\t\tif(parser.state.module)
\t\t\t\t\t\t\tparser.state.module.errors.push(new UnsupportedFeatureWarning(parser.state.module, \"Cannot statically analyse 'require(..., ...)' in line \" + expr.loc.start.line));
\t\t\t\t\t\tdep = null;
\t\t\t\t\t\treturn true;
\t\t\t\t\t}
\t\t\t\t\tdep.functionBindThis = this.processFunctionArgument(parser, expr.arguments[1]);
\t\t\t\t\tif(expr.arguments.length === 3) {
\t\t\t\t\t\tdep.errorCallbackBindThis = this.processFunctionArgument(parser, expr.arguments[2]);
\t\t\t\t\t}
\t\t\t\t} finally {
\t\t\t\t\tparser.state.current = old;
\t\t\t\t\tif(dep)
\t\t\t\t\t\tparser.state.current.addBlock(dep);
\t\t\t\t}
\t\t\t\treturn true;
\t\t\t}
\t\t});
\t\tparser.plugin(\"call require:amd:array\", (expr, param) => {
\t\t\tif(param.isArray()) {
\t\t\t\tparam.items.forEach((param) => {
\t\t\t\t\tconst result = parser.applyPluginsBailResult(\"call require:amd:item\", expr, param);
\t\t\t\t\tif(result === undefined) {
\t\t\t\t\t\tparser.applyPluginsBailResult(\"call require:amd:context\", expr, param);
\t\t\t\t\t}
\t\t\t\t});
\t\t\t\treturn true;
\t\t\t} else if(param.isConstArray()) {
\t\t\t\tconst deps = [];
\t\t\t\tparam.array.forEach((request) => {
\t\t\t\t\tlet dep, localModule;
\t\t\t\t\tif(request === \"require\") {
\t\t\t\t\t\tdep = \"__webpack_require__\";
\t\t\t\t\t} else if([\"exports\", \"module\"].indexOf(request) >= 0) {
\t\t\t\t\t\tdep = request;
\t\t\t\t\t} else if(localModule = LocalModulesHelpers.getLocalModule(parser.state, request)) { // eslint-disable-line no-cond-assign
\t\t\t\t\t\tdep = new LocalModuleDependency(localModule);
\t\t\t\t\t\tdep.loc = expr.loc;
\t\t\t\t\t\tparser.state.current.addDependency(dep);
\t\t\t\t\t} else {
\t\t\t\t\t\tdep = new AMDRequireItemDependency(request);
\t\t\t\t\t\tdep.loc = expr.loc;
\t\t\t\t\t\tdep.optional = !!parser.scope.inTry;
\t\t\t\t\t\tparser.state.current.addDependency(dep);
\t\t\t\t\t}
\t\t\t\t\tdeps.push(dep);
\t\t\t\t});
\t\t\t\tconst dep = new AMDRequireArrayDependency(deps, param.range);
\t\t\t\tdep.loc = expr.loc;
\t\t\t\tdep.optional = !!parser.scope.inTry;
\t\t\t\tparser.state.current.addDependency(dep);
\t\t\t\treturn true;
\t\t\t}
\t\t});
\t\tparser.plugin(\"call require:amd:item\", (expr, param) => {
\t\t\tif(param.isConditional()) {
\t\t\t\tparam.options.forEach((param) => {
\t\t\t\t\tconst result = parser.applyPluginsBailResult(\"call require:amd:item\", expr, param);
\t\t\t\t\tif(result === undefined) {
\t\t\t\t\t\tparser.applyPluginsBailResult(\"call require:amd:context\", expr, param);
\t\t\t\t\t}
\t\t\t\t});
\t\t\t\treturn true;
\t\t\t} else if(param.isString()) {
\t\t\t\tlet dep, localModule;
\t\t\t\tif(param.string === \"require\") {
\t\t\t\t\tdep = new ConstDependency(\"__webpack_require__\", param.string);
\t\t\t\t} else if(param.string === \"module\") {
\t\t\t\t\tdep = new ConstDependency(parser.state.module.moduleArgument || \"module\", param.range);
\t\t\t\t} else if(param.string === \"exports\") {
\t\t\t\t\tdep = new ConstDependency(parser.state.module.exportsArgument || \"exports\", param.range);
\t\t\t\t} else if(localModule = LocalModulesHelpers.getLocalModule(parser.state, param.string)) { // eslint-disable-line no-cond-assign
\t\t\t\t\tdep = new LocalModuleDependency(localModule, param.range);
\t\t\t\t} else {
\t\t\t\t\tdep = new AMDRequireItemDependency(param.string, param.range);
\t\t\t\t}
\t\t\t\tdep.loc = expr.loc;
\t\t\t\tdep.optional = !!parser.scope.inTry;
\t\t\t\tparser.state.current.addDependency(dep);
\t\t\t\treturn true;
\t\t\t}
\t\t});
\t\tparser.plugin(\"call require:amd:context\", (expr, param) => {
\t\t\tconst dep = ContextDependencyHelpers.create(AMDRequireContextDependency, param.range, param, expr, options);
\t\t\tif(!dep) return;
\t\t\tdep.loc = expr.loc;
\t\t\tdep.optional = !!parser.scope.inTry;
\t\t\tparser.state.current.addDependency(dep);
\t\t\treturn true;
\t\t});
\t}
}
module.exports = AMDRequireDependenciesBlockParserPlugin;
";
        
        $__internal_596562c527fd6242c7a42a01753272289043dd8a66454537c8061f4bec29e86e->leave($__internal_596562c527fd6242c7a42a01753272289043dd8a66454537c8061f4bec29e86e_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/webpack/lib/dependencies/AMDRequireDependenciesBlockParserPlugin.js";
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

const AMDRequireItemDependency = require(\"./AMDRequireItemDependency\");
const AMDRequireArrayDependency = require(\"./AMDRequireArrayDependency\");
const AMDRequireContextDependency = require(\"./AMDRequireContextDependency\");
const AMDRequireDependenciesBlock = require(\"./AMDRequireDependenciesBlock\");
const UnsupportedDependency = require(\"./UnsupportedDependency\");
const LocalModuleDependency = require(\"./LocalModuleDependency\");
const ContextDependencyHelpers = require(\"./ContextDependencyHelpers\");
const LocalModulesHelpers = require(\"./LocalModulesHelpers\");
const ConstDependency = require(\"./ConstDependency\");
const getFunctionExpression = require(\"./getFunctionExpression\");
const UnsupportedFeatureWarning = require(\"../UnsupportedFeatureWarning\");

class AMDRequireDependenciesBlockParserPlugin {
\tconstructor(options) {
\t\tthis.options = options;
\t}

\tprocessFunctionArgument(parser, expression) {
\t\tlet bindThis = true;
\t\tconst fnData = getFunctionExpression(expression);
\t\tif(fnData) {
\t\t\tparser.inScope(fnData.fn.params.filter((i) => {
\t\t\t\treturn [\"require\", \"module\", \"exports\"].indexOf(i.name) < 0;
\t\t\t}), () => {
\t\t\t\tif(fnData.fn.body.type === \"BlockStatement\")
\t\t\t\t\tparser.walkStatement(fnData.fn.body);
\t\t\t\telse
\t\t\t\t\tparser.walkExpression(fnData.fn.body);
\t\t\t});
\t\t\tparser.walkExpressions(fnData.expressions);
\t\t\tif(fnData.needThis === false) {
\t\t\t\tbindThis = false;
\t\t\t}
\t\t} else {
\t\t\tparser.walkExpression(expression);
\t\t}
\t\treturn bindThis;
\t}

\tapply(parser) {
\t\tconst options = this.options;
\t\tparser.plugin(\"call require\", (expr) => {
\t\t\tlet param;
\t\t\tlet dep;
\t\t\tlet result;

\t\t\tconst old = parser.state.current;

\t\t\tif(expr.arguments.length >= 1) {
\t\t\t\tparam = parser.evaluateExpression(expr.arguments[0]);
\t\t\t\tdep = new AMDRequireDependenciesBlock(
\t\t\t\t\texpr,
\t\t\t\t\tparam.range,
\t\t\t\t\t(expr.arguments.length > 1) ? expr.arguments[1].range : null,
\t\t\t\t\t(expr.arguments.length > 2) ? expr.arguments[2].range : null,
\t\t\t\t\tparser.state.module,
\t\t\t\t\texpr.loc
\t\t\t\t);
\t\t\t\tparser.state.current = dep;
\t\t\t}

\t\t\tif(expr.arguments.length === 1) {
\t\t\t\tparser.inScope([], () => {
\t\t\t\t\tresult = parser.applyPluginsBailResult(\"call require:amd:array\", expr, param);
\t\t\t\t});
\t\t\t\tparser.state.current = old;
\t\t\t\tif(!result) return;
\t\t\t\tparser.state.current.addBlock(dep);
\t\t\t\treturn true;
\t\t\t}

\t\t\tif(expr.arguments.length === 2 || expr.arguments.length === 3) {
\t\t\t\ttry {
\t\t\t\t\tparser.inScope([], () => {
\t\t\t\t\t\tresult = parser.applyPluginsBailResult(\"call require:amd:array\", expr, param);
\t\t\t\t\t});
\t\t\t\t\tif(!result) {
\t\t\t\t\t\tdep = new UnsupportedDependency(\"unsupported\", expr.range);
\t\t\t\t\t\told.addDependency(dep);
\t\t\t\t\t\tif(parser.state.module)
\t\t\t\t\t\t\tparser.state.module.errors.push(new UnsupportedFeatureWarning(parser.state.module, \"Cannot statically analyse 'require(..., ...)' in line \" + expr.loc.start.line));
\t\t\t\t\t\tdep = null;
\t\t\t\t\t\treturn true;
\t\t\t\t\t}
\t\t\t\t\tdep.functionBindThis = this.processFunctionArgument(parser, expr.arguments[1]);
\t\t\t\t\tif(expr.arguments.length === 3) {
\t\t\t\t\t\tdep.errorCallbackBindThis = this.processFunctionArgument(parser, expr.arguments[2]);
\t\t\t\t\t}
\t\t\t\t} finally {
\t\t\t\t\tparser.state.current = old;
\t\t\t\t\tif(dep)
\t\t\t\t\t\tparser.state.current.addBlock(dep);
\t\t\t\t}
\t\t\t\treturn true;
\t\t\t}
\t\t});
\t\tparser.plugin(\"call require:amd:array\", (expr, param) => {
\t\t\tif(param.isArray()) {
\t\t\t\tparam.items.forEach((param) => {
\t\t\t\t\tconst result = parser.applyPluginsBailResult(\"call require:amd:item\", expr, param);
\t\t\t\t\tif(result === undefined) {
\t\t\t\t\t\tparser.applyPluginsBailResult(\"call require:amd:context\", expr, param);
\t\t\t\t\t}
\t\t\t\t});
\t\t\t\treturn true;
\t\t\t} else if(param.isConstArray()) {
\t\t\t\tconst deps = [];
\t\t\t\tparam.array.forEach((request) => {
\t\t\t\t\tlet dep, localModule;
\t\t\t\t\tif(request === \"require\") {
\t\t\t\t\t\tdep = \"__webpack_require__\";
\t\t\t\t\t} else if([\"exports\", \"module\"].indexOf(request) >= 0) {
\t\t\t\t\t\tdep = request;
\t\t\t\t\t} else if(localModule = LocalModulesHelpers.getLocalModule(parser.state, request)) { // eslint-disable-line no-cond-assign
\t\t\t\t\t\tdep = new LocalModuleDependency(localModule);
\t\t\t\t\t\tdep.loc = expr.loc;
\t\t\t\t\t\tparser.state.current.addDependency(dep);
\t\t\t\t\t} else {
\t\t\t\t\t\tdep = new AMDRequireItemDependency(request);
\t\t\t\t\t\tdep.loc = expr.loc;
\t\t\t\t\t\tdep.optional = !!parser.scope.inTry;
\t\t\t\t\t\tparser.state.current.addDependency(dep);
\t\t\t\t\t}
\t\t\t\t\tdeps.push(dep);
\t\t\t\t});
\t\t\t\tconst dep = new AMDRequireArrayDependency(deps, param.range);
\t\t\t\tdep.loc = expr.loc;
\t\t\t\tdep.optional = !!parser.scope.inTry;
\t\t\t\tparser.state.current.addDependency(dep);
\t\t\t\treturn true;
\t\t\t}
\t\t});
\t\tparser.plugin(\"call require:amd:item\", (expr, param) => {
\t\t\tif(param.isConditional()) {
\t\t\t\tparam.options.forEach((param) => {
\t\t\t\t\tconst result = parser.applyPluginsBailResult(\"call require:amd:item\", expr, param);
\t\t\t\t\tif(result === undefined) {
\t\t\t\t\t\tparser.applyPluginsBailResult(\"call require:amd:context\", expr, param);
\t\t\t\t\t}
\t\t\t\t});
\t\t\t\treturn true;
\t\t\t} else if(param.isString()) {
\t\t\t\tlet dep, localModule;
\t\t\t\tif(param.string === \"require\") {
\t\t\t\t\tdep = new ConstDependency(\"__webpack_require__\", param.string);
\t\t\t\t} else if(param.string === \"module\") {
\t\t\t\t\tdep = new ConstDependency(parser.state.module.moduleArgument || \"module\", param.range);
\t\t\t\t} else if(param.string === \"exports\") {
\t\t\t\t\tdep = new ConstDependency(parser.state.module.exportsArgument || \"exports\", param.range);
\t\t\t\t} else if(localModule = LocalModulesHelpers.getLocalModule(parser.state, param.string)) { // eslint-disable-line no-cond-assign
\t\t\t\t\tdep = new LocalModuleDependency(localModule, param.range);
\t\t\t\t} else {
\t\t\t\t\tdep = new AMDRequireItemDependency(param.string, param.range);
\t\t\t\t}
\t\t\t\tdep.loc = expr.loc;
\t\t\t\tdep.optional = !!parser.scope.inTry;
\t\t\t\tparser.state.current.addDependency(dep);
\t\t\t\treturn true;
\t\t\t}
\t\t});
\t\tparser.plugin(\"call require:amd:context\", (expr, param) => {
\t\t\tconst dep = ContextDependencyHelpers.create(AMDRequireContextDependency, param.range, param, expr, options);
\t\t\tif(!dep) return;
\t\t\tdep.loc = expr.loc;
\t\t\tdep.optional = !!parser.scope.inTry;
\t\t\tparser.state.current.addDependency(dep);
\t\t\treturn true;
\t\t});
\t}
}
module.exports = AMDRequireDependenciesBlockParserPlugin;
", "node_modules/webpack/lib/dependencies/AMDRequireDependenciesBlockParserPlugin.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/webpack/lib/dependencies/AMDRequireDependenciesBlockParserPlugin.js");
    }
}
