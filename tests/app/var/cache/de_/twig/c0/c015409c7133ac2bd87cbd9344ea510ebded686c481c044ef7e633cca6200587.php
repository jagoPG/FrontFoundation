<?php

/* node_modules/webpack/lib/dependencies/AMDDefineDependencyParserPlugin.js */
class __TwigTemplate_ca496d304a36f3888cc565cd0351b96cd824c474490f98a449cb9fefea455b74 extends Twig_Template
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
        $__internal_46db659a6317dde715daab764b0604c41195a33bd21520991e345a705346dbec = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_46db659a6317dde715daab764b0604c41195a33bd21520991e345a705346dbec->enter($__internal_46db659a6317dde715daab764b0604c41195a33bd21520991e345a705346dbec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/webpack/lib/dependencies/AMDDefineDependencyParserPlugin.js"));

        // line 1
        echo "/*
\tMIT License http://www.opensource.org/licenses/mit-license.php
\tAuthor Tobias Koppers @sokra
*/
\"use strict\";

const AMDRequireItemDependency = require(\"./AMDRequireItemDependency\");
const AMDRequireContextDependency = require(\"./AMDRequireContextDependency\");
const ConstDependency = require(\"./ConstDependency\");
const AMDDefineDependency = require(\"./AMDDefineDependency\");
const AMDRequireArrayDependency = require(\"./AMDRequireArrayDependency\");
const LocalModuleDependency = require(\"./LocalModuleDependency\");
const ContextDependencyHelpers = require(\"./ContextDependencyHelpers\");
const LocalModulesHelpers = require(\"./LocalModulesHelpers\");

function isBoundFunctionExpression(expr) {
\tif(expr.type !== \"CallExpression\") return false;
\tif(expr.callee.type !== \"MemberExpression\") return false;
\tif(expr.callee.computed) return false;
\tif(expr.callee.object.type !== \"FunctionExpression\") return false;
\tif(expr.callee.property.type !== \"Identifier\") return false;
\tif(expr.callee.property.name !== \"bind\") return false;
\treturn true;
}

class AMDDefineDependencyParserPlugin {
\tconstructor(options) {
\t\tthis.options = options;
\t}

\tapply(parser) {
\t\tconst options = this.options;
\t\tparser.plugin(\"call define\", (expr) => {
\t\t\tlet array, fn, obj, namedModule;
\t\t\tswitch(expr.arguments.length) {
\t\t\t\tcase 1:
\t\t\t\t\tif(expr.arguments[0].type === \"FunctionExpression\" || isBoundFunctionExpression(expr.arguments[0])) {
\t\t\t\t\t\t// define(f() {...})
\t\t\t\t\t\tfn = expr.arguments[0];
\t\t\t\t\t} else if(expr.arguments[0].type === \"ObjectExpression\") {
\t\t\t\t\t\t// define({...})
\t\t\t\t\t\tobj = expr.arguments[0];
\t\t\t\t\t} else {
\t\t\t\t\t\t// define(expr)
\t\t\t\t\t\t// unclear if function or object
\t\t\t\t\t\tobj = fn = expr.arguments[0];
\t\t\t\t\t}
\t\t\t\t\tbreak;
\t\t\t\tcase 2:
\t\t\t\t\tif(expr.arguments[0].type === \"Literal\") {
\t\t\t\t\t\tnamedModule = expr.arguments[0].value;
\t\t\t\t\t\t// define(\"...\", ...)
\t\t\t\t\t\tif(expr.arguments[1].type === \"FunctionExpression\" || isBoundFunctionExpression(expr.arguments[1])) {
\t\t\t\t\t\t\t// define(\"...\", f() {...})
\t\t\t\t\t\t\tfn = expr.arguments[1];
\t\t\t\t\t\t} else if(expr.arguments[1].type === \"ObjectExpression\") {
\t\t\t\t\t\t\t// define(\"...\", {...})
\t\t\t\t\t\t\tobj = expr.arguments[1];
\t\t\t\t\t\t} else {
\t\t\t\t\t\t\t// define(\"...\", expr)
\t\t\t\t\t\t\t// unclear if function or object
\t\t\t\t\t\t\tobj = fn = expr.arguments[1];
\t\t\t\t\t\t}
\t\t\t\t\t} else {
\t\t\t\t\t\tarray = expr.arguments[0];
\t\t\t\t\t\tif(expr.arguments[1].type === \"FunctionExpression\" || isBoundFunctionExpression(expr.arguments[1])) {
\t\t\t\t\t\t\t// define([...], f() {})
\t\t\t\t\t\t\tfn = expr.arguments[1];
\t\t\t\t\t\t} else if(expr.arguments[1].type === \"ObjectExpression\") {
\t\t\t\t\t\t\t// define([...], {...})
\t\t\t\t\t\t\tobj = expr.arguments[1];
\t\t\t\t\t\t} else {
\t\t\t\t\t\t\t// define([...], expr)
\t\t\t\t\t\t\t// unclear if function or object
\t\t\t\t\t\t\tobj = fn = expr.arguments[1];
\t\t\t\t\t\t}
\t\t\t\t\t}
\t\t\t\t\tbreak;
\t\t\t\tcase 3:
\t\t\t\t\t// define(\"...\", [...], f() {...})
\t\t\t\t\tnamedModule = expr.arguments[0].value;
\t\t\t\t\tarray = expr.arguments[1];
\t\t\t\t\tif(expr.arguments[2].type === \"FunctionExpression\" || isBoundFunctionExpression(expr.arguments[2])) {
\t\t\t\t\t\t// define(\"...\", [...], f() {})
\t\t\t\t\t\tfn = expr.arguments[2];
\t\t\t\t\t} else if(expr.arguments[2].type === \"ObjectExpression\") {
\t\t\t\t\t\t// define(\"...\", [...], {...})
\t\t\t\t\t\tobj = expr.arguments[2];
\t\t\t\t\t} else {
\t\t\t\t\t\t// define(\"...\", [...], expr)
\t\t\t\t\t\t// unclear if function or object
\t\t\t\t\t\tobj = fn = expr.arguments[2];
\t\t\t\t\t}
\t\t\t\t\tbreak;
\t\t\t\tdefault:
\t\t\t\t\treturn;
\t\t\t}
\t\t\tlet fnParams = null;
\t\t\tlet fnParamsOffset = 0;
\t\t\tif(fn) {
\t\t\t\tif(fn.type === \"FunctionExpression\") fnParams = fn.params;
\t\t\t\telse if(isBoundFunctionExpression(fn)) {
\t\t\t\t\tfnParams = fn.callee.object.params;
\t\t\t\t\tfnParamsOffset = fn.arguments.length - 1;
\t\t\t\t\tif(fnParamsOffset < 0) fnParamsOffset = 0;
\t\t\t\t}
\t\t\t}
\t\t\tlet fnRenames = Object.create(parser.scope.renames);
\t\t\tlet identifiers;
\t\t\tif(array) {
\t\t\t\tidentifiers = {};
\t\t\t\tconst param = parser.evaluateExpression(array);
\t\t\t\tconst result = parser.applyPluginsBailResult(\"call define:amd:array\", expr, param, identifiers, namedModule);
\t\t\t\tif(!result) return;
\t\t\t\tif(fnParams) fnParams = fnParams.slice(fnParamsOffset).filter((param, idx) => {
\t\t\t\t\tif(identifiers[idx]) {
\t\t\t\t\t\tfnRenames[\"\$\" + param.name] = identifiers[idx];
\t\t\t\t\t\treturn false;
\t\t\t\t\t}
\t\t\t\t\treturn true;
\t\t\t\t});
\t\t\t} else {
\t\t\t\tidentifiers = [\"require\", \"exports\", \"module\"];
\t\t\t\tif(fnParams) fnParams = fnParams.slice(fnParamsOffset).filter((param, idx) => {
\t\t\t\t\tif(identifiers[idx]) {
\t\t\t\t\t\tfnRenames[\"\$\" + param.name] = identifiers[idx];
\t\t\t\t\t\treturn false;
\t\t\t\t\t}
\t\t\t\t\treturn true;
\t\t\t\t});
\t\t\t}
\t\t\tlet inTry;
\t\t\tif(fn && fn.type === \"FunctionExpression\") {
\t\t\t\tinTry = parser.scope.inTry;
\t\t\t\tparser.inScope(fnParams, () => {
\t\t\t\t\tparser.scope.renames = fnRenames;
\t\t\t\t\tparser.scope.inTry = inTry;
\t\t\t\t\tif(fn.body.type === \"BlockStatement\")
\t\t\t\t\t\tparser.walkStatement(fn.body);
\t\t\t\t\telse
\t\t\t\t\t\tparser.walkExpression(fn.body);
\t\t\t\t});
\t\t\t} else if(fn && isBoundFunctionExpression(fn)) {
\t\t\t\tinTry = parser.scope.inTry;
\t\t\t\tparser.inScope(fn.callee.object.params.filter((i) => [\"require\", \"module\", \"exports\"].indexOf(i.name) < 0), () => {
\t\t\t\t\tparser.scope.renames = fnRenames;
\t\t\t\t\tparser.scope.inTry = inTry;
\t\t\t\t\tif(fn.callee.object.body.type === \"BlockStatement\")
\t\t\t\t\t\tparser.walkStatement(fn.callee.object.body);
\t\t\t\t\telse
\t\t\t\t\t\tparser.walkExpression(fn.callee.object.body);
\t\t\t\t});
\t\t\t\tif(fn.arguments)
\t\t\t\t\tparser.walkExpressions(fn.arguments);
\t\t\t} else if(fn || obj) {
\t\t\t\tparser.walkExpression(fn || obj);
\t\t\t}

\t\t\tconst dep = new AMDDefineDependency(
\t\t\t\texpr.range,
\t\t\t\tarray ? array.range : null,
\t\t\t\tfn ? fn.range : null,
\t\t\t\tobj ? obj.range : null,
\t\t\t\tnamedModule ? namedModule : null
\t\t\t);
\t\t\tdep.loc = expr.loc;
\t\t\tif(namedModule) {
\t\t\t\tdep.localModule = LocalModulesHelpers.addLocalModule(parser.state, namedModule);
\t\t\t}
\t\t\tparser.state.current.addDependency(dep);
\t\t\treturn true;
\t\t});
\t\tparser.plugin(\"call define:amd:array\", (expr, param, identifiers, namedModule) => {
\t\t\tif(param.isArray()) {
\t\t\t\tparam.items.forEach((param, idx) => {
\t\t\t\t\tif(param.isString() && [\"require\", \"module\", \"exports\"].indexOf(param.string) >= 0)
\t\t\t\t\t\tidentifiers[idx] = param.string;
\t\t\t\t\tconst result = parser.applyPluginsBailResult(\"call define:amd:item\", expr, param, namedModule);
\t\t\t\t\tif(result === undefined) {
\t\t\t\t\t\tparser.applyPluginsBailResult(\"call define:amd:context\", expr, param);
\t\t\t\t\t}
\t\t\t\t});
\t\t\t\treturn true;
\t\t\t} else if(param.isConstArray()) {
\t\t\t\tconst deps = [];
\t\t\t\tparam.array.forEach((request, idx) => {
\t\t\t\t\tlet dep;
\t\t\t\t\tlet localModule;
\t\t\t\t\tif(request === \"require\") {
\t\t\t\t\t\tidentifiers[idx] = request;
\t\t\t\t\t\tdep = \"__webpack_require__\";
\t\t\t\t\t} else if([\"exports\", \"module\"].indexOf(request) >= 0) {
\t\t\t\t\t\tidentifiers[idx] = request;
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
\t\tparser.plugin(\"call define:amd:item\", (expr, param, namedModule) => {
\t\t\tif(param.isConditional()) {
\t\t\t\tparam.options.forEach((param) => {
\t\t\t\t\tconst result = parser.applyPluginsBailResult(\"call define:amd:item\", expr, param);
\t\t\t\t\tif(result === undefined) {
\t\t\t\t\t\tparser.applyPluginsBailResult(\"call define:amd:context\", expr, param);
\t\t\t\t\t}
\t\t\t\t});
\t\t\t\treturn true;
\t\t\t} else if(param.isString()) {
\t\t\t\tlet dep, localModule;
\t\t\t\tif(param.string === \"require\") {
\t\t\t\t\tdep = new ConstDependency(\"__webpack_require__\", param.range);
\t\t\t\t} else if([\"require\", \"exports\", \"module\"].indexOf(param.string) >= 0) {
\t\t\t\t\tdep = new ConstDependency(param.string, param.range);
\t\t\t\t} else if(localModule = LocalModulesHelpers.getLocalModule(parser.state, param.string, namedModule)) { // eslint-disable-line no-cond-assign
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
\t\tparser.plugin(\"call define:amd:context\", (expr, param) => {
\t\t\tconst dep = ContextDependencyHelpers.create(AMDRequireContextDependency, param.range, param, expr, options);
\t\t\tif(!dep) return;
\t\t\tdep.loc = expr.loc;
\t\t\tdep.optional = !!parser.scope.inTry;
\t\t\tparser.state.current.addDependency(dep);
\t\t\treturn true;
\t\t});
\t}
}
module.exports = AMDDefineDependencyParserPlugin;
";
        
        $__internal_46db659a6317dde715daab764b0604c41195a33bd21520991e345a705346dbec->leave($__internal_46db659a6317dde715daab764b0604c41195a33bd21520991e345a705346dbec_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/webpack/lib/dependencies/AMDDefineDependencyParserPlugin.js";
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
const AMDRequireContextDependency = require(\"./AMDRequireContextDependency\");
const ConstDependency = require(\"./ConstDependency\");
const AMDDefineDependency = require(\"./AMDDefineDependency\");
const AMDRequireArrayDependency = require(\"./AMDRequireArrayDependency\");
const LocalModuleDependency = require(\"./LocalModuleDependency\");
const ContextDependencyHelpers = require(\"./ContextDependencyHelpers\");
const LocalModulesHelpers = require(\"./LocalModulesHelpers\");

function isBoundFunctionExpression(expr) {
\tif(expr.type !== \"CallExpression\") return false;
\tif(expr.callee.type !== \"MemberExpression\") return false;
\tif(expr.callee.computed) return false;
\tif(expr.callee.object.type !== \"FunctionExpression\") return false;
\tif(expr.callee.property.type !== \"Identifier\") return false;
\tif(expr.callee.property.name !== \"bind\") return false;
\treturn true;
}

class AMDDefineDependencyParserPlugin {
\tconstructor(options) {
\t\tthis.options = options;
\t}

\tapply(parser) {
\t\tconst options = this.options;
\t\tparser.plugin(\"call define\", (expr) => {
\t\t\tlet array, fn, obj, namedModule;
\t\t\tswitch(expr.arguments.length) {
\t\t\t\tcase 1:
\t\t\t\t\tif(expr.arguments[0].type === \"FunctionExpression\" || isBoundFunctionExpression(expr.arguments[0])) {
\t\t\t\t\t\t// define(f() {...})
\t\t\t\t\t\tfn = expr.arguments[0];
\t\t\t\t\t} else if(expr.arguments[0].type === \"ObjectExpression\") {
\t\t\t\t\t\t// define({...})
\t\t\t\t\t\tobj = expr.arguments[0];
\t\t\t\t\t} else {
\t\t\t\t\t\t// define(expr)
\t\t\t\t\t\t// unclear if function or object
\t\t\t\t\t\tobj = fn = expr.arguments[0];
\t\t\t\t\t}
\t\t\t\t\tbreak;
\t\t\t\tcase 2:
\t\t\t\t\tif(expr.arguments[0].type === \"Literal\") {
\t\t\t\t\t\tnamedModule = expr.arguments[0].value;
\t\t\t\t\t\t// define(\"...\", ...)
\t\t\t\t\t\tif(expr.arguments[1].type === \"FunctionExpression\" || isBoundFunctionExpression(expr.arguments[1])) {
\t\t\t\t\t\t\t// define(\"...\", f() {...})
\t\t\t\t\t\t\tfn = expr.arguments[1];
\t\t\t\t\t\t} else if(expr.arguments[1].type === \"ObjectExpression\") {
\t\t\t\t\t\t\t// define(\"...\", {...})
\t\t\t\t\t\t\tobj = expr.arguments[1];
\t\t\t\t\t\t} else {
\t\t\t\t\t\t\t// define(\"...\", expr)
\t\t\t\t\t\t\t// unclear if function or object
\t\t\t\t\t\t\tobj = fn = expr.arguments[1];
\t\t\t\t\t\t}
\t\t\t\t\t} else {
\t\t\t\t\t\tarray = expr.arguments[0];
\t\t\t\t\t\tif(expr.arguments[1].type === \"FunctionExpression\" || isBoundFunctionExpression(expr.arguments[1])) {
\t\t\t\t\t\t\t// define([...], f() {})
\t\t\t\t\t\t\tfn = expr.arguments[1];
\t\t\t\t\t\t} else if(expr.arguments[1].type === \"ObjectExpression\") {
\t\t\t\t\t\t\t// define([...], {...})
\t\t\t\t\t\t\tobj = expr.arguments[1];
\t\t\t\t\t\t} else {
\t\t\t\t\t\t\t// define([...], expr)
\t\t\t\t\t\t\t// unclear if function or object
\t\t\t\t\t\t\tobj = fn = expr.arguments[1];
\t\t\t\t\t\t}
\t\t\t\t\t}
\t\t\t\t\tbreak;
\t\t\t\tcase 3:
\t\t\t\t\t// define(\"...\", [...], f() {...})
\t\t\t\t\tnamedModule = expr.arguments[0].value;
\t\t\t\t\tarray = expr.arguments[1];
\t\t\t\t\tif(expr.arguments[2].type === \"FunctionExpression\" || isBoundFunctionExpression(expr.arguments[2])) {
\t\t\t\t\t\t// define(\"...\", [...], f() {})
\t\t\t\t\t\tfn = expr.arguments[2];
\t\t\t\t\t} else if(expr.arguments[2].type === \"ObjectExpression\") {
\t\t\t\t\t\t// define(\"...\", [...], {...})
\t\t\t\t\t\tobj = expr.arguments[2];
\t\t\t\t\t} else {
\t\t\t\t\t\t// define(\"...\", [...], expr)
\t\t\t\t\t\t// unclear if function or object
\t\t\t\t\t\tobj = fn = expr.arguments[2];
\t\t\t\t\t}
\t\t\t\t\tbreak;
\t\t\t\tdefault:
\t\t\t\t\treturn;
\t\t\t}
\t\t\tlet fnParams = null;
\t\t\tlet fnParamsOffset = 0;
\t\t\tif(fn) {
\t\t\t\tif(fn.type === \"FunctionExpression\") fnParams = fn.params;
\t\t\t\telse if(isBoundFunctionExpression(fn)) {
\t\t\t\t\tfnParams = fn.callee.object.params;
\t\t\t\t\tfnParamsOffset = fn.arguments.length - 1;
\t\t\t\t\tif(fnParamsOffset < 0) fnParamsOffset = 0;
\t\t\t\t}
\t\t\t}
\t\t\tlet fnRenames = Object.create(parser.scope.renames);
\t\t\tlet identifiers;
\t\t\tif(array) {
\t\t\t\tidentifiers = {};
\t\t\t\tconst param = parser.evaluateExpression(array);
\t\t\t\tconst result = parser.applyPluginsBailResult(\"call define:amd:array\", expr, param, identifiers, namedModule);
\t\t\t\tif(!result) return;
\t\t\t\tif(fnParams) fnParams = fnParams.slice(fnParamsOffset).filter((param, idx) => {
\t\t\t\t\tif(identifiers[idx]) {
\t\t\t\t\t\tfnRenames[\"\$\" + param.name] = identifiers[idx];
\t\t\t\t\t\treturn false;
\t\t\t\t\t}
\t\t\t\t\treturn true;
\t\t\t\t});
\t\t\t} else {
\t\t\t\tidentifiers = [\"require\", \"exports\", \"module\"];
\t\t\t\tif(fnParams) fnParams = fnParams.slice(fnParamsOffset).filter((param, idx) => {
\t\t\t\t\tif(identifiers[idx]) {
\t\t\t\t\t\tfnRenames[\"\$\" + param.name] = identifiers[idx];
\t\t\t\t\t\treturn false;
\t\t\t\t\t}
\t\t\t\t\treturn true;
\t\t\t\t});
\t\t\t}
\t\t\tlet inTry;
\t\t\tif(fn && fn.type === \"FunctionExpression\") {
\t\t\t\tinTry = parser.scope.inTry;
\t\t\t\tparser.inScope(fnParams, () => {
\t\t\t\t\tparser.scope.renames = fnRenames;
\t\t\t\t\tparser.scope.inTry = inTry;
\t\t\t\t\tif(fn.body.type === \"BlockStatement\")
\t\t\t\t\t\tparser.walkStatement(fn.body);
\t\t\t\t\telse
\t\t\t\t\t\tparser.walkExpression(fn.body);
\t\t\t\t});
\t\t\t} else if(fn && isBoundFunctionExpression(fn)) {
\t\t\t\tinTry = parser.scope.inTry;
\t\t\t\tparser.inScope(fn.callee.object.params.filter((i) => [\"require\", \"module\", \"exports\"].indexOf(i.name) < 0), () => {
\t\t\t\t\tparser.scope.renames = fnRenames;
\t\t\t\t\tparser.scope.inTry = inTry;
\t\t\t\t\tif(fn.callee.object.body.type === \"BlockStatement\")
\t\t\t\t\t\tparser.walkStatement(fn.callee.object.body);
\t\t\t\t\telse
\t\t\t\t\t\tparser.walkExpression(fn.callee.object.body);
\t\t\t\t});
\t\t\t\tif(fn.arguments)
\t\t\t\t\tparser.walkExpressions(fn.arguments);
\t\t\t} else if(fn || obj) {
\t\t\t\tparser.walkExpression(fn || obj);
\t\t\t}

\t\t\tconst dep = new AMDDefineDependency(
\t\t\t\texpr.range,
\t\t\t\tarray ? array.range : null,
\t\t\t\tfn ? fn.range : null,
\t\t\t\tobj ? obj.range : null,
\t\t\t\tnamedModule ? namedModule : null
\t\t\t);
\t\t\tdep.loc = expr.loc;
\t\t\tif(namedModule) {
\t\t\t\tdep.localModule = LocalModulesHelpers.addLocalModule(parser.state, namedModule);
\t\t\t}
\t\t\tparser.state.current.addDependency(dep);
\t\t\treturn true;
\t\t});
\t\tparser.plugin(\"call define:amd:array\", (expr, param, identifiers, namedModule) => {
\t\t\tif(param.isArray()) {
\t\t\t\tparam.items.forEach((param, idx) => {
\t\t\t\t\tif(param.isString() && [\"require\", \"module\", \"exports\"].indexOf(param.string) >= 0)
\t\t\t\t\t\tidentifiers[idx] = param.string;
\t\t\t\t\tconst result = parser.applyPluginsBailResult(\"call define:amd:item\", expr, param, namedModule);
\t\t\t\t\tif(result === undefined) {
\t\t\t\t\t\tparser.applyPluginsBailResult(\"call define:amd:context\", expr, param);
\t\t\t\t\t}
\t\t\t\t});
\t\t\t\treturn true;
\t\t\t} else if(param.isConstArray()) {
\t\t\t\tconst deps = [];
\t\t\t\tparam.array.forEach((request, idx) => {
\t\t\t\t\tlet dep;
\t\t\t\t\tlet localModule;
\t\t\t\t\tif(request === \"require\") {
\t\t\t\t\t\tidentifiers[idx] = request;
\t\t\t\t\t\tdep = \"__webpack_require__\";
\t\t\t\t\t} else if([\"exports\", \"module\"].indexOf(request) >= 0) {
\t\t\t\t\t\tidentifiers[idx] = request;
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
\t\tparser.plugin(\"call define:amd:item\", (expr, param, namedModule) => {
\t\t\tif(param.isConditional()) {
\t\t\t\tparam.options.forEach((param) => {
\t\t\t\t\tconst result = parser.applyPluginsBailResult(\"call define:amd:item\", expr, param);
\t\t\t\t\tif(result === undefined) {
\t\t\t\t\t\tparser.applyPluginsBailResult(\"call define:amd:context\", expr, param);
\t\t\t\t\t}
\t\t\t\t});
\t\t\t\treturn true;
\t\t\t} else if(param.isString()) {
\t\t\t\tlet dep, localModule;
\t\t\t\tif(param.string === \"require\") {
\t\t\t\t\tdep = new ConstDependency(\"__webpack_require__\", param.range);
\t\t\t\t} else if([\"require\", \"exports\", \"module\"].indexOf(param.string) >= 0) {
\t\t\t\t\tdep = new ConstDependency(param.string, param.range);
\t\t\t\t} else if(localModule = LocalModulesHelpers.getLocalModule(parser.state, param.string, namedModule)) { // eslint-disable-line no-cond-assign
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
\t\tparser.plugin(\"call define:amd:context\", (expr, param) => {
\t\t\tconst dep = ContextDependencyHelpers.create(AMDRequireContextDependency, param.range, param, expr, options);
\t\t\tif(!dep) return;
\t\t\tdep.loc = expr.loc;
\t\t\tdep.optional = !!parser.scope.inTry;
\t\t\tparser.state.current.addDependency(dep);
\t\t\treturn true;
\t\t});
\t}
}
module.exports = AMDDefineDependencyParserPlugin;
", "node_modules/webpack/lib/dependencies/AMDDefineDependencyParserPlugin.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/webpack/lib/dependencies/AMDDefineDependencyParserPlugin.js");
    }
}
