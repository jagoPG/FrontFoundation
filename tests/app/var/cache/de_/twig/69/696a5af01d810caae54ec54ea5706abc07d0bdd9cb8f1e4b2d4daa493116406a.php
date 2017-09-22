<?php

/* node_modules/webpack/lib/DefinePlugin.js */
class __TwigTemplate_74df862f8932770a6b1cf0f0407dc310e4c1ecf8fbe1806d8da392e445281e28 extends Twig_Template
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
        $__internal_79ce346dd73363589ef257afa2260d891009a9fd60943c6976bb0ca9d8d97153 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_79ce346dd73363589ef257afa2260d891009a9fd60943c6976bb0ca9d8d97153->enter($__internal_79ce346dd73363589ef257afa2260d891009a9fd60943c6976bb0ca9d8d97153_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/webpack/lib/DefinePlugin.js"));

        // line 1
        echo "/*
\tMIT License http://www.opensource.org/licenses/mit-license.php
\tAuthor Tobias Koppers @sokra
*/
\"use strict\";

const ConstDependency = require(\"./dependencies/ConstDependency\");
const BasicEvaluatedExpression = require(\"./BasicEvaluatedExpression\");
const ParserHelpers = require(\"./ParserHelpers\");
const NullFactory = require(\"./NullFactory\");

class DefinePlugin {
\tconstructor(definitions) {
\t\tthis.definitions = definitions;
\t}

\tapply(compiler) {
\t\tconst definitions = this.definitions;
\t\tcompiler.plugin(\"compilation\", (compilation, params) => {
\t\t\tcompilation.dependencyFactories.set(ConstDependency, new NullFactory());
\t\t\tcompilation.dependencyTemplates.set(ConstDependency, new ConstDependency.Template());

\t\t\tparams.normalModuleFactory.plugin(\"parser\", (parser) => {
\t\t\t\t(function walkDefinitions(definitions, prefix) {
\t\t\t\t\tObject.keys(definitions).forEach((key) => {
\t\t\t\t\t\tconst code = definitions[key];
\t\t\t\t\t\tif(code && typeof code === \"object\" && !(code instanceof RegExp)) {
\t\t\t\t\t\t\twalkDefinitions(code, prefix + key + \".\");
\t\t\t\t\t\t\tapplyObjectDefine(prefix + key, code);
\t\t\t\t\t\t\treturn;
\t\t\t\t\t\t}
\t\t\t\t\t\tapplyDefineKey(prefix, key);
\t\t\t\t\t\tapplyDefine(prefix + key, code);
\t\t\t\t\t});
\t\t\t\t}(definitions, \"\"));

\t\t\t\tfunction stringifyObj(obj) {
\t\t\t\t\treturn \"Object({\" + Object.keys(obj).map((key) => {
\t\t\t\t\t\tconst code = obj[key];
\t\t\t\t\t\treturn JSON.stringify(key) + \":\" + toCode(code);
\t\t\t\t\t}).join(\",\") + \"})\";
\t\t\t\t}

\t\t\t\tfunction toCode(code) {
\t\t\t\t\tif(code === null) return \"null\";
\t\t\t\t\telse if(code === undefined) return \"undefined\";
\t\t\t\t\telse if(code instanceof RegExp && code.toString) return code.toString();
\t\t\t\t\telse if(typeof code === \"function\" && code.toString) return \"(\" + code.toString() + \")\";
\t\t\t\t\telse if(typeof code === \"object\") return stringifyObj(code);
\t\t\t\t\telse return code + \"\";
\t\t\t\t}

\t\t\t\tfunction applyDefineKey(prefix, key) {
\t\t\t\t\tconst splittedKey = key.split(\".\");
\t\t\t\t\tsplittedKey.slice(1).forEach((_, i) => {
\t\t\t\t\t\tconst fullKey = prefix + splittedKey.slice(0, i + 1).join(\".\");
\t\t\t\t\t\tparser.plugin(\"can-rename \" + fullKey, ParserHelpers.approve);
\t\t\t\t\t});
\t\t\t\t}

\t\t\t\tfunction applyDefine(key, code) {
\t\t\t\t\tconst isTypeof = /^typeof\\s+/.test(key);
\t\t\t\t\tif(isTypeof) key = key.replace(/^typeof\\s+/, \"\");
\t\t\t\t\tlet recurse = false;
\t\t\t\t\tlet recurseTypeof = false;
\t\t\t\t\tcode = toCode(code);
\t\t\t\t\tif(!isTypeof) {
\t\t\t\t\t\tparser.plugin(\"can-rename \" + key, ParserHelpers.approve);
\t\t\t\t\t\tparser.plugin(\"evaluate Identifier \" + key, (expr) => {
\t\t\t\t\t\t\t/**
\t\t\t\t\t\t\t * this is needed in case there is a recursion in the DefinePlugin
\t\t\t\t\t\t\t * to prevent an endless recursion
\t\t\t\t\t\t\t * e.g.: new DefinePlugin({
\t\t\t\t\t\t\t * \"a\": \"b\",
\t\t\t\t\t\t\t * \"b\": \"a\"
\t\t\t\t\t\t\t * });
\t\t\t\t\t\t\t */
\t\t\t\t\t\t\tif(recurse) return;
\t\t\t\t\t\t\trecurse = true;
\t\t\t\t\t\t\tconst res = parser.evaluate(code);
\t\t\t\t\t\t\trecurse = false;
\t\t\t\t\t\t\tres.setRange(expr.range);
\t\t\t\t\t\t\treturn res;
\t\t\t\t\t\t});
\t\t\t\t\t\tparser.plugin(\"expression \" + key, ParserHelpers.toConstantDependency(code));
\t\t\t\t\t}
\t\t\t\t\tconst typeofCode = isTypeof ? code : \"typeof (\" + code + \")\";
\t\t\t\t\tparser.plugin(\"evaluate typeof \" + key, (expr) => {
\t\t\t\t\t\t/**
\t\t\t\t\t\t * this is needed in case there is a recursion in the DefinePlugin
\t\t\t\t\t\t * to prevent an endless recursion
\t\t\t\t\t\t * e.g.: new DefinePlugin({
\t\t\t\t\t\t * \"typeof a\": \"tyepof b\",
\t\t\t\t\t\t * \"typeof b\": \"typeof a\"
\t\t\t\t\t\t * });
\t\t\t\t\t\t */
\t\t\t\t\t\tif(recurseTypeof) return;
\t\t\t\t\t\trecurseTypeof = true;
\t\t\t\t\t\tconst res = parser.evaluate(typeofCode);
\t\t\t\t\t\trecurseTypeof = false;
\t\t\t\t\t\tres.setRange(expr.range);
\t\t\t\t\t\treturn res;
\t\t\t\t\t});
\t\t\t\t\tparser.plugin(\"typeof \" + key, (expr) => {
\t\t\t\t\t\tconst res = parser.evaluate(typeofCode);
\t\t\t\t\t\tif(!res.isString()) return;
\t\t\t\t\t\treturn ParserHelpers.toConstantDependency(JSON.stringify(res.string)).bind(parser)(expr);
\t\t\t\t\t});
\t\t\t\t}

\t\t\t\tfunction applyObjectDefine(key, obj) {
\t\t\t\t\tconst code = stringifyObj(obj);
\t\t\t\t\tparser.plugin(\"can-rename \" + key, ParserHelpers.approve);
\t\t\t\t\tparser.plugin(\"evaluate Identifier \" + key, (expr) => new BasicEvaluatedExpression().setTruthy().setRange(expr.range));
\t\t\t\t\tparser.plugin(\"evaluate typeof \" + key, ParserHelpers.evaluateToString(\"object\"));
\t\t\t\t\tparser.plugin(\"expression \" + key, ParserHelpers.toConstantDependency(code));
\t\t\t\t\tparser.plugin(\"typeof \" + key, ParserHelpers.toConstantDependency(JSON.stringify(\"object\")));
\t\t\t\t}
\t\t\t});
\t\t});
\t}
}
module.exports = DefinePlugin;
";
        
        $__internal_79ce346dd73363589ef257afa2260d891009a9fd60943c6976bb0ca9d8d97153->leave($__internal_79ce346dd73363589ef257afa2260d891009a9fd60943c6976bb0ca9d8d97153_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/webpack/lib/DefinePlugin.js";
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
const BasicEvaluatedExpression = require(\"./BasicEvaluatedExpression\");
const ParserHelpers = require(\"./ParserHelpers\");
const NullFactory = require(\"./NullFactory\");

class DefinePlugin {
\tconstructor(definitions) {
\t\tthis.definitions = definitions;
\t}

\tapply(compiler) {
\t\tconst definitions = this.definitions;
\t\tcompiler.plugin(\"compilation\", (compilation, params) => {
\t\t\tcompilation.dependencyFactories.set(ConstDependency, new NullFactory());
\t\t\tcompilation.dependencyTemplates.set(ConstDependency, new ConstDependency.Template());

\t\t\tparams.normalModuleFactory.plugin(\"parser\", (parser) => {
\t\t\t\t(function walkDefinitions(definitions, prefix) {
\t\t\t\t\tObject.keys(definitions).forEach((key) => {
\t\t\t\t\t\tconst code = definitions[key];
\t\t\t\t\t\tif(code && typeof code === \"object\" && !(code instanceof RegExp)) {
\t\t\t\t\t\t\twalkDefinitions(code, prefix + key + \".\");
\t\t\t\t\t\t\tapplyObjectDefine(prefix + key, code);
\t\t\t\t\t\t\treturn;
\t\t\t\t\t\t}
\t\t\t\t\t\tapplyDefineKey(prefix, key);
\t\t\t\t\t\tapplyDefine(prefix + key, code);
\t\t\t\t\t});
\t\t\t\t}(definitions, \"\"));

\t\t\t\tfunction stringifyObj(obj) {
\t\t\t\t\treturn \"Object({\" + Object.keys(obj).map((key) => {
\t\t\t\t\t\tconst code = obj[key];
\t\t\t\t\t\treturn JSON.stringify(key) + \":\" + toCode(code);
\t\t\t\t\t}).join(\",\") + \"})\";
\t\t\t\t}

\t\t\t\tfunction toCode(code) {
\t\t\t\t\tif(code === null) return \"null\";
\t\t\t\t\telse if(code === undefined) return \"undefined\";
\t\t\t\t\telse if(code instanceof RegExp && code.toString) return code.toString();
\t\t\t\t\telse if(typeof code === \"function\" && code.toString) return \"(\" + code.toString() + \")\";
\t\t\t\t\telse if(typeof code === \"object\") return stringifyObj(code);
\t\t\t\t\telse return code + \"\";
\t\t\t\t}

\t\t\t\tfunction applyDefineKey(prefix, key) {
\t\t\t\t\tconst splittedKey = key.split(\".\");
\t\t\t\t\tsplittedKey.slice(1).forEach((_, i) => {
\t\t\t\t\t\tconst fullKey = prefix + splittedKey.slice(0, i + 1).join(\".\");
\t\t\t\t\t\tparser.plugin(\"can-rename \" + fullKey, ParserHelpers.approve);
\t\t\t\t\t});
\t\t\t\t}

\t\t\t\tfunction applyDefine(key, code) {
\t\t\t\t\tconst isTypeof = /^typeof\\s+/.test(key);
\t\t\t\t\tif(isTypeof) key = key.replace(/^typeof\\s+/, \"\");
\t\t\t\t\tlet recurse = false;
\t\t\t\t\tlet recurseTypeof = false;
\t\t\t\t\tcode = toCode(code);
\t\t\t\t\tif(!isTypeof) {
\t\t\t\t\t\tparser.plugin(\"can-rename \" + key, ParserHelpers.approve);
\t\t\t\t\t\tparser.plugin(\"evaluate Identifier \" + key, (expr) => {
\t\t\t\t\t\t\t/**
\t\t\t\t\t\t\t * this is needed in case there is a recursion in the DefinePlugin
\t\t\t\t\t\t\t * to prevent an endless recursion
\t\t\t\t\t\t\t * e.g.: new DefinePlugin({
\t\t\t\t\t\t\t * \"a\": \"b\",
\t\t\t\t\t\t\t * \"b\": \"a\"
\t\t\t\t\t\t\t * });
\t\t\t\t\t\t\t */
\t\t\t\t\t\t\tif(recurse) return;
\t\t\t\t\t\t\trecurse = true;
\t\t\t\t\t\t\tconst res = parser.evaluate(code);
\t\t\t\t\t\t\trecurse = false;
\t\t\t\t\t\t\tres.setRange(expr.range);
\t\t\t\t\t\t\treturn res;
\t\t\t\t\t\t});
\t\t\t\t\t\tparser.plugin(\"expression \" + key, ParserHelpers.toConstantDependency(code));
\t\t\t\t\t}
\t\t\t\t\tconst typeofCode = isTypeof ? code : \"typeof (\" + code + \")\";
\t\t\t\t\tparser.plugin(\"evaluate typeof \" + key, (expr) => {
\t\t\t\t\t\t/**
\t\t\t\t\t\t * this is needed in case there is a recursion in the DefinePlugin
\t\t\t\t\t\t * to prevent an endless recursion
\t\t\t\t\t\t * e.g.: new DefinePlugin({
\t\t\t\t\t\t * \"typeof a\": \"tyepof b\",
\t\t\t\t\t\t * \"typeof b\": \"typeof a\"
\t\t\t\t\t\t * });
\t\t\t\t\t\t */
\t\t\t\t\t\tif(recurseTypeof) return;
\t\t\t\t\t\trecurseTypeof = true;
\t\t\t\t\t\tconst res = parser.evaluate(typeofCode);
\t\t\t\t\t\trecurseTypeof = false;
\t\t\t\t\t\tres.setRange(expr.range);
\t\t\t\t\t\treturn res;
\t\t\t\t\t});
\t\t\t\t\tparser.plugin(\"typeof \" + key, (expr) => {
\t\t\t\t\t\tconst res = parser.evaluate(typeofCode);
\t\t\t\t\t\tif(!res.isString()) return;
\t\t\t\t\t\treturn ParserHelpers.toConstantDependency(JSON.stringify(res.string)).bind(parser)(expr);
\t\t\t\t\t});
\t\t\t\t}

\t\t\t\tfunction applyObjectDefine(key, obj) {
\t\t\t\t\tconst code = stringifyObj(obj);
\t\t\t\t\tparser.plugin(\"can-rename \" + key, ParserHelpers.approve);
\t\t\t\t\tparser.plugin(\"evaluate Identifier \" + key, (expr) => new BasicEvaluatedExpression().setTruthy().setRange(expr.range));
\t\t\t\t\tparser.plugin(\"evaluate typeof \" + key, ParserHelpers.evaluateToString(\"object\"));
\t\t\t\t\tparser.plugin(\"expression \" + key, ParserHelpers.toConstantDependency(code));
\t\t\t\t\tparser.plugin(\"typeof \" + key, ParserHelpers.toConstantDependency(JSON.stringify(\"object\")));
\t\t\t\t}
\t\t\t});
\t\t});
\t}
}
module.exports = DefinePlugin;
", "node_modules/webpack/lib/DefinePlugin.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/webpack/lib/DefinePlugin.js");
    }
}
