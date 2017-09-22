<?php

/* node_modules/uglifyjs-webpack-plugin/dist/index.js */
class __TwigTemplate_c64e59fde4df25f82834527dd531baf705d332dda48c24b45e8203b7b463f89b extends Twig_Template
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
        $__internal_f68fb241951e9043632ab73f16c0e96f0b376bc29dcbf58398667c3a97387828 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f68fb241951e9043632ab73f16c0e96f0b376bc29dcbf58398667c3a97387828->enter($__internal_f68fb241951e9043632ab73f16c0e96f0b376bc29dcbf58398667c3a97387828_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/uglifyjs-webpack-plugin/dist/index.js"));

        // line 1
        echo "/*
\tMIT License http://www.opensource.org/licenses/mit-license.php
\tAuthor Tobias Koppers @sokra
*/
\"use strict\";

var _typeof = typeof Symbol === \"function\" && typeof Symbol.iterator === \"symbol\" ? function (obj) { return typeof obj; } : function (obj) { return obj && typeof Symbol === \"function\" && obj.constructor === Symbol && obj !== Symbol.prototype ? \"symbol\" : typeof obj; };

var _createClass = function () { function defineProperties(target, props) { for (var i = 0; i < props.length; i++) { var descriptor = props[i]; descriptor.enumerable = descriptor.enumerable || false; descriptor.configurable = true; if (\"value\" in descriptor) descriptor.writable = true; Object.defineProperty(target, descriptor.key, descriptor); } } return function (Constructor, protoProps, staticProps) { if (protoProps) defineProperties(Constructor.prototype, protoProps); if (staticProps) defineProperties(Constructor, staticProps); return Constructor; }; }();

function _classCallCheck(instance, Constructor) { if (!(instance instanceof Constructor)) { throw new TypeError(\"Cannot call a class as a function\"); } }

var SourceMapConsumer = require(\"source-map\").SourceMapConsumer;
var SourceMapSource = require(\"webpack-sources\").SourceMapSource;
var RawSource = require(\"webpack-sources\").RawSource;
var ConcatSource = require(\"webpack-sources\").ConcatSource;
var RequestShortener = require(\"webpack/lib/RequestShortener\");
var ModuleFilenameHelpers = require(\"webpack/lib/ModuleFilenameHelpers\");
var uglify = require(\"uglify-js\");

var UglifyJsPlugin = function () {
\tfunction UglifyJsPlugin(options) {
\t\t_classCallCheck(this, UglifyJsPlugin);

\t\tif ((typeof options === \"undefined\" ? \"undefined\" : _typeof(options)) !== \"object\" || Array.isArray(options)) options = {};
\t\tif (typeof options.compressor !== \"undefined\") options.compress = options.compressor;
\t\tthis.options = options;
\t}

\t_createClass(UglifyJsPlugin, [{
\t\tkey: \"apply\",
\t\tvalue: function apply(compiler) {
\t\t\tvar options = this.options;
\t\t\toptions.test = options.test || /\\.js(\$|\\?)/i;
\t\t\tvar warningsFilter = options.warningsFilter || function () {
\t\t\t\treturn true;
\t\t\t};

\t\t\tvar requestShortener = new RequestShortener(compiler.context);
\t\t\tcompiler.plugin(\"compilation\", function (compilation) {
\t\t\t\tif (options.sourceMap) {
\t\t\t\t\tcompilation.plugin(\"build-module\", function (module) {
\t\t\t\t\t\t// to get detailed location info about errors
\t\t\t\t\t\tmodule.useSourceMap = true;
\t\t\t\t\t});
\t\t\t\t}
\t\t\t\tcompilation.plugin(\"optimize-chunk-assets\", function (chunks, callback) {
\t\t\t\t\tvar files = [];
\t\t\t\t\tchunks.forEach(function (chunk) {
\t\t\t\t\t\treturn files.push.apply(files, chunk.files);
\t\t\t\t\t});
\t\t\t\t\tfiles.push.apply(files, compilation.additionalChunkAssets);
\t\t\t\t\tvar filteredFiles = files.filter(ModuleFilenameHelpers.matchObject.bind(undefined, options));
\t\t\t\t\tfilteredFiles.forEach(function (file) {
\t\t\t\t\t\tvar oldWarnFunction = uglify.AST_Node.warn_function;
\t\t\t\t\t\tvar warnings = [];
\t\t\t\t\t\tvar sourceMap = void 0;
\t\t\t\t\t\ttry {
\t\t\t\t\t\t\tvar asset = compilation.assets[file];
\t\t\t\t\t\t\tif (asset.__UglifyJsPlugin) {
\t\t\t\t\t\t\t\tcompilation.assets[file] = asset.__UglifyJsPlugin;
\t\t\t\t\t\t\t\treturn;
\t\t\t\t\t\t\t}
\t\t\t\t\t\t\tvar input = void 0;
\t\t\t\t\t\t\tvar inputSourceMap = void 0;
\t\t\t\t\t\t\tif (options.sourceMap) {
\t\t\t\t\t\t\t\tif (asset.sourceAndMap) {
\t\t\t\t\t\t\t\t\tvar sourceAndMap = asset.sourceAndMap();
\t\t\t\t\t\t\t\t\tinputSourceMap = sourceAndMap.map;
\t\t\t\t\t\t\t\t\tinput = sourceAndMap.source;
\t\t\t\t\t\t\t\t} else {
\t\t\t\t\t\t\t\t\tinputSourceMap = asset.map();
\t\t\t\t\t\t\t\t\tinput = asset.source();
\t\t\t\t\t\t\t\t}
\t\t\t\t\t\t\t\tsourceMap = new SourceMapConsumer(inputSourceMap);
\t\t\t\t\t\t\t\tuglify.AST_Node.warn_function = function (warning) {
\t\t\t\t\t\t\t\t\t// eslint-disable-line camelcase
\t\t\t\t\t\t\t\t\tvar match = /\\[.+:([0-9]+),([0-9]+)\\]/.exec(warning);
\t\t\t\t\t\t\t\t\tvar line = +match[1];
\t\t\t\t\t\t\t\t\tvar column = +match[2];
\t\t\t\t\t\t\t\t\tvar original = sourceMap.originalPositionFor({
\t\t\t\t\t\t\t\t\t\tline: line,
\t\t\t\t\t\t\t\t\t\tcolumn: column
\t\t\t\t\t\t\t\t\t});
\t\t\t\t\t\t\t\t\tif (!original || !original.source || original.source === file) return;
\t\t\t\t\t\t\t\t\tif (!warningsFilter(original.source)) return;
\t\t\t\t\t\t\t\t\twarnings.push(warning.replace(/\\[.+:([0-9]+),([0-9]+)\\]/, \"\") + \"[\" + requestShortener.shorten(original.source) + \":\" + original.line + \",\" + original.column + \"]\");
\t\t\t\t\t\t\t\t};
\t\t\t\t\t\t\t} else {
\t\t\t\t\t\t\t\tinput = asset.source();
\t\t\t\t\t\t\t\tuglify.AST_Node.warn_function = function (warning) {
\t\t\t\t\t\t\t\t\t// eslint-disable-line camelcase
\t\t\t\t\t\t\t\t\twarnings.push(warning);
\t\t\t\t\t\t\t\t};
\t\t\t\t\t\t\t}
\t\t\t\t\t\t\tuglify.base54.reset();
\t\t\t\t\t\t\tvar ast = uglify.parse(input, {
\t\t\t\t\t\t\t\tfilename: file
\t\t\t\t\t\t\t});
\t\t\t\t\t\t\tif (options.compress !== false) {
\t\t\t\t\t\t\t\tast.figure_out_scope();
\t\t\t\t\t\t\t\tvar compress = uglify.Compressor(options.compress || {
\t\t\t\t\t\t\t\t\twarnings: false
\t\t\t\t\t\t\t\t}); // eslint-disable-line new-cap
\t\t\t\t\t\t\t\tast = compress.compress(ast);
\t\t\t\t\t\t\t}
\t\t\t\t\t\t\tif (options.mangle !== false) {
\t\t\t\t\t\t\t\tast.figure_out_scope(options.mangle || {});
\t\t\t\t\t\t\t\tast.compute_char_frequency(options.mangle || {});
\t\t\t\t\t\t\t\tast.mangle_names(options.mangle || {});
\t\t\t\t\t\t\t\tif (options.mangle && options.mangle.props) {
\t\t\t\t\t\t\t\t\tuglify.mangle_properties(ast, options.mangle.props);
\t\t\t\t\t\t\t\t}
\t\t\t\t\t\t\t}
\t\t\t\t\t\t\tvar output = {};
\t\t\t\t\t\t\toutput.comments = Object.prototype.hasOwnProperty.call(options, \"comments\") ? options.comments : /^\\**!|@preserve|@license/;
\t\t\t\t\t\t\toutput.beautify = options.beautify;
\t\t\t\t\t\t\tfor (var k in options.output) {
\t\t\t\t\t\t\t\toutput[k] = options.output[k];
\t\t\t\t\t\t\t}
\t\t\t\t\t\t\tvar extractedComments = [];
\t\t\t\t\t\t\tif (options.extractComments) {
\t\t\t\t\t\t\t\tvar condition = {};
\t\t\t\t\t\t\t\tif (typeof options.extractComments === \"string\" || options.extractComments instanceof RegExp) {
\t\t\t\t\t\t\t\t\t// extractComments specifies the extract condition and output.comments specifies the preserve condition
\t\t\t\t\t\t\t\t\tcondition.preserve = output.comments;
\t\t\t\t\t\t\t\t\tcondition.extract = options.extractComments;
\t\t\t\t\t\t\t\t} else if (Object.prototype.hasOwnProperty.call(options.extractComments, \"condition\")) {
\t\t\t\t\t\t\t\t\t// Extract condition is given in extractComments.condition
\t\t\t\t\t\t\t\t\tcondition.preserve = output.comments;
\t\t\t\t\t\t\t\t\tcondition.extract = options.extractComments.condition;
\t\t\t\t\t\t\t\t} else {
\t\t\t\t\t\t\t\t\t// No extract condition is given. Extract comments that match output.comments instead of preserving them
\t\t\t\t\t\t\t\t\tcondition.preserve = false;
\t\t\t\t\t\t\t\t\tcondition.extract = output.comments;
\t\t\t\t\t\t\t\t}

\t\t\t\t\t\t\t\t// Ensure that both conditions are functions
\t\t\t\t\t\t\t\t[\"preserve\", \"extract\"].forEach(function (key) {
\t\t\t\t\t\t\t\t\tswitch (_typeof(condition[key])) {
\t\t\t\t\t\t\t\t\t\tcase \"boolean\":
\t\t\t\t\t\t\t\t\t\t\tvar b = condition[key];
\t\t\t\t\t\t\t\t\t\t\tcondition[key] = function () {
\t\t\t\t\t\t\t\t\t\t\t\treturn b;
\t\t\t\t\t\t\t\t\t\t\t};
\t\t\t\t\t\t\t\t\t\t\tbreak;
\t\t\t\t\t\t\t\t\t\tcase \"function\":
\t\t\t\t\t\t\t\t\t\t\tbreak;
\t\t\t\t\t\t\t\t\t\tcase \"string\":
\t\t\t\t\t\t\t\t\t\t\tif (condition[key] === \"all\") {
\t\t\t\t\t\t\t\t\t\t\t\tcondition[key] = function () {
\t\t\t\t\t\t\t\t\t\t\t\t\treturn true;
\t\t\t\t\t\t\t\t\t\t\t\t};
\t\t\t\t\t\t\t\t\t\t\t\tbreak;
\t\t\t\t\t\t\t\t\t\t\t}
\t\t\t\t\t\t\t\t\t\t\tvar regex = new RegExp(condition[key]);
\t\t\t\t\t\t\t\t\t\t\tcondition[key] = function (astNode, comment) {
\t\t\t\t\t\t\t\t\t\t\t\treturn regex.test(comment.value);
\t\t\t\t\t\t\t\t\t\t\t};
\t\t\t\t\t\t\t\t\t\t\tbreak;
\t\t\t\t\t\t\t\t\t\tdefault:
\t\t\t\t\t\t\t\t\t\t\tregex = condition[key];
\t\t\t\t\t\t\t\t\t\t\tcondition[key] = function (astNode, comment) {
\t\t\t\t\t\t\t\t\t\t\t\treturn regex.test(comment.value);
\t\t\t\t\t\t\t\t\t\t\t};
\t\t\t\t\t\t\t\t\t}
\t\t\t\t\t\t\t\t});

\t\t\t\t\t\t\t\t// Redefine the comments function to extract and preserve
\t\t\t\t\t\t\t\t// comments according to the two conditions
\t\t\t\t\t\t\t\toutput.comments = function (astNode, comment) {
\t\t\t\t\t\t\t\t\tif (condition.extract(astNode, comment)) {
\t\t\t\t\t\t\t\t\t\textractedComments.push(comment.type === \"comment2\" ? \"/*\" + comment.value + \"*/\" : \"//\" + comment.value);
\t\t\t\t\t\t\t\t\t}
\t\t\t\t\t\t\t\t\treturn condition.preserve(astNode, comment);
\t\t\t\t\t\t\t\t};
\t\t\t\t\t\t\t}
\t\t\t\t\t\t\tvar map = void 0;
\t\t\t\t\t\t\tif (options.sourceMap) {
\t\t\t\t\t\t\t\tmap = uglify.SourceMap({ // eslint-disable-line new-cap
\t\t\t\t\t\t\t\t\tfile: file,
\t\t\t\t\t\t\t\t\troot: \"\"
\t\t\t\t\t\t\t\t});
\t\t\t\t\t\t\t\toutput.source_map = map; // eslint-disable-line camelcase
\t\t\t\t\t\t\t}
\t\t\t\t\t\t\tvar stream = uglify.OutputStream(output); // eslint-disable-line new-cap
\t\t\t\t\t\t\tast.print(stream);
\t\t\t\t\t\t\tif (map) map = map + \"\";
\t\t\t\t\t\t\tvar stringifiedStream = stream + \"\";
\t\t\t\t\t\t\tvar outputSource = map ? new SourceMapSource(stringifiedStream, file, JSON.parse(map), input, inputSourceMap) : new RawSource(stringifiedStream);
\t\t\t\t\t\t\tif (extractedComments.length > 0) {
\t\t\t\t\t\t\t\tvar commentsFile = options.extractComments.filename || file + \".LICENSE\";
\t\t\t\t\t\t\t\tif (typeof commentsFile === \"function\") {
\t\t\t\t\t\t\t\t\tcommentsFile = commentsFile(file);
\t\t\t\t\t\t\t\t}

\t\t\t\t\t\t\t\t// Write extracted comments to commentsFile
\t\t\t\t\t\t\t\tvar commentsSource = new RawSource(extractedComments.join(\"\\n\\n\") + \"\\n\");
\t\t\t\t\t\t\t\tif (commentsFile in compilation.assets) {
\t\t\t\t\t\t\t\t\t// commentsFile already exists, append new comments...
\t\t\t\t\t\t\t\t\tif (compilation.assets[commentsFile] instanceof ConcatSource) {
\t\t\t\t\t\t\t\t\t\tcompilation.assets[commentsFile].add(\"\\n\");
\t\t\t\t\t\t\t\t\t\tcompilation.assets[commentsFile].add(commentsSource);
\t\t\t\t\t\t\t\t\t} else {
\t\t\t\t\t\t\t\t\t\tcompilation.assets[commentsFile] = new ConcatSource(compilation.assets[commentsFile], \"\\n\", commentsSource);
\t\t\t\t\t\t\t\t\t}
\t\t\t\t\t\t\t\t} else {
\t\t\t\t\t\t\t\t\tcompilation.assets[commentsFile] = commentsSource;
\t\t\t\t\t\t\t\t}

\t\t\t\t\t\t\t\t// Add a banner to the original file
\t\t\t\t\t\t\t\tif (options.extractComments.banner !== false) {
\t\t\t\t\t\t\t\t\tvar banner = options.extractComments.banner || \"For license information please see \" + commentsFile;
\t\t\t\t\t\t\t\t\tif (typeof banner === \"function\") {
\t\t\t\t\t\t\t\t\t\tbanner = banner(commentsFile);
\t\t\t\t\t\t\t\t\t}
\t\t\t\t\t\t\t\t\tif (banner) {
\t\t\t\t\t\t\t\t\t\toutputSource = new ConcatSource(\"/*! \" + banner + \" */\\n\", outputSource);
\t\t\t\t\t\t\t\t\t}
\t\t\t\t\t\t\t\t}
\t\t\t\t\t\t\t}
\t\t\t\t\t\t\tasset.__UglifyJsPlugin = compilation.assets[file] = outputSource;
\t\t\t\t\t\t\tif (warnings.length > 0) {
\t\t\t\t\t\t\t\tcompilation.warnings.push(new Error(file + \" from UglifyJs\\n\" + warnings.join(\"\\n\")));
\t\t\t\t\t\t\t}
\t\t\t\t\t\t} catch (err) {
\t\t\t\t\t\t\tif (err.line) {
\t\t\t\t\t\t\t\tvar original = sourceMap && sourceMap.originalPositionFor({
\t\t\t\t\t\t\t\t\tline: err.line,
\t\t\t\t\t\t\t\t\tcolumn: err.col
\t\t\t\t\t\t\t\t});
\t\t\t\t\t\t\t\tif (original && original.source) {
\t\t\t\t\t\t\t\t\tcompilation.errors.push(new Error(file + \" from UglifyJs\\n\" + err.message + \" [\" + requestShortener.shorten(original.source) + \":\" + original.line + \",\" + original.column + \"][\" + file + \":\" + err.line + \",\" + err.col + \"]\"));
\t\t\t\t\t\t\t\t} else {
\t\t\t\t\t\t\t\t\tcompilation.errors.push(new Error(file + \" from UglifyJs\\n\" + err.message + \" [\" + file + \":\" + err.line + \",\" + err.col + \"]\"));
\t\t\t\t\t\t\t\t}
\t\t\t\t\t\t\t} else if (err.msg) {
\t\t\t\t\t\t\t\tcompilation.errors.push(new Error(file + \" from UglifyJs\\n\" + err.msg));
\t\t\t\t\t\t\t} else compilation.errors.push(new Error(file + \" from UglifyJs\\n\" + err.stack));
\t\t\t\t\t\t} finally {
\t\t\t\t\t\t\tuglify.AST_Node.warn_function = oldWarnFunction; // eslint-disable-line camelcase
\t\t\t\t\t\t}
\t\t\t\t\t});
\t\t\t\t\tcallback();
\t\t\t\t});
\t\t\t});
\t\t}
\t}]);

\treturn UglifyJsPlugin;
}();

module.exports = UglifyJsPlugin;";
        
        $__internal_f68fb241951e9043632ab73f16c0e96f0b376bc29dcbf58398667c3a97387828->leave($__internal_f68fb241951e9043632ab73f16c0e96f0b376bc29dcbf58398667c3a97387828_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/uglifyjs-webpack-plugin/dist/index.js";
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

var _typeof = typeof Symbol === \"function\" && typeof Symbol.iterator === \"symbol\" ? function (obj) { return typeof obj; } : function (obj) { return obj && typeof Symbol === \"function\" && obj.constructor === Symbol && obj !== Symbol.prototype ? \"symbol\" : typeof obj; };

var _createClass = function () { function defineProperties(target, props) { for (var i = 0; i < props.length; i++) { var descriptor = props[i]; descriptor.enumerable = descriptor.enumerable || false; descriptor.configurable = true; if (\"value\" in descriptor) descriptor.writable = true; Object.defineProperty(target, descriptor.key, descriptor); } } return function (Constructor, protoProps, staticProps) { if (protoProps) defineProperties(Constructor.prototype, protoProps); if (staticProps) defineProperties(Constructor, staticProps); return Constructor; }; }();

function _classCallCheck(instance, Constructor) { if (!(instance instanceof Constructor)) { throw new TypeError(\"Cannot call a class as a function\"); } }

var SourceMapConsumer = require(\"source-map\").SourceMapConsumer;
var SourceMapSource = require(\"webpack-sources\").SourceMapSource;
var RawSource = require(\"webpack-sources\").RawSource;
var ConcatSource = require(\"webpack-sources\").ConcatSource;
var RequestShortener = require(\"webpack/lib/RequestShortener\");
var ModuleFilenameHelpers = require(\"webpack/lib/ModuleFilenameHelpers\");
var uglify = require(\"uglify-js\");

var UglifyJsPlugin = function () {
\tfunction UglifyJsPlugin(options) {
\t\t_classCallCheck(this, UglifyJsPlugin);

\t\tif ((typeof options === \"undefined\" ? \"undefined\" : _typeof(options)) !== \"object\" || Array.isArray(options)) options = {};
\t\tif (typeof options.compressor !== \"undefined\") options.compress = options.compressor;
\t\tthis.options = options;
\t}

\t_createClass(UglifyJsPlugin, [{
\t\tkey: \"apply\",
\t\tvalue: function apply(compiler) {
\t\t\tvar options = this.options;
\t\t\toptions.test = options.test || /\\.js(\$|\\?)/i;
\t\t\tvar warningsFilter = options.warningsFilter || function () {
\t\t\t\treturn true;
\t\t\t};

\t\t\tvar requestShortener = new RequestShortener(compiler.context);
\t\t\tcompiler.plugin(\"compilation\", function (compilation) {
\t\t\t\tif (options.sourceMap) {
\t\t\t\t\tcompilation.plugin(\"build-module\", function (module) {
\t\t\t\t\t\t// to get detailed location info about errors
\t\t\t\t\t\tmodule.useSourceMap = true;
\t\t\t\t\t});
\t\t\t\t}
\t\t\t\tcompilation.plugin(\"optimize-chunk-assets\", function (chunks, callback) {
\t\t\t\t\tvar files = [];
\t\t\t\t\tchunks.forEach(function (chunk) {
\t\t\t\t\t\treturn files.push.apply(files, chunk.files);
\t\t\t\t\t});
\t\t\t\t\tfiles.push.apply(files, compilation.additionalChunkAssets);
\t\t\t\t\tvar filteredFiles = files.filter(ModuleFilenameHelpers.matchObject.bind(undefined, options));
\t\t\t\t\tfilteredFiles.forEach(function (file) {
\t\t\t\t\t\tvar oldWarnFunction = uglify.AST_Node.warn_function;
\t\t\t\t\t\tvar warnings = [];
\t\t\t\t\t\tvar sourceMap = void 0;
\t\t\t\t\t\ttry {
\t\t\t\t\t\t\tvar asset = compilation.assets[file];
\t\t\t\t\t\t\tif (asset.__UglifyJsPlugin) {
\t\t\t\t\t\t\t\tcompilation.assets[file] = asset.__UglifyJsPlugin;
\t\t\t\t\t\t\t\treturn;
\t\t\t\t\t\t\t}
\t\t\t\t\t\t\tvar input = void 0;
\t\t\t\t\t\t\tvar inputSourceMap = void 0;
\t\t\t\t\t\t\tif (options.sourceMap) {
\t\t\t\t\t\t\t\tif (asset.sourceAndMap) {
\t\t\t\t\t\t\t\t\tvar sourceAndMap = asset.sourceAndMap();
\t\t\t\t\t\t\t\t\tinputSourceMap = sourceAndMap.map;
\t\t\t\t\t\t\t\t\tinput = sourceAndMap.source;
\t\t\t\t\t\t\t\t} else {
\t\t\t\t\t\t\t\t\tinputSourceMap = asset.map();
\t\t\t\t\t\t\t\t\tinput = asset.source();
\t\t\t\t\t\t\t\t}
\t\t\t\t\t\t\t\tsourceMap = new SourceMapConsumer(inputSourceMap);
\t\t\t\t\t\t\t\tuglify.AST_Node.warn_function = function (warning) {
\t\t\t\t\t\t\t\t\t// eslint-disable-line camelcase
\t\t\t\t\t\t\t\t\tvar match = /\\[.+:([0-9]+),([0-9]+)\\]/.exec(warning);
\t\t\t\t\t\t\t\t\tvar line = +match[1];
\t\t\t\t\t\t\t\t\tvar column = +match[2];
\t\t\t\t\t\t\t\t\tvar original = sourceMap.originalPositionFor({
\t\t\t\t\t\t\t\t\t\tline: line,
\t\t\t\t\t\t\t\t\t\tcolumn: column
\t\t\t\t\t\t\t\t\t});
\t\t\t\t\t\t\t\t\tif (!original || !original.source || original.source === file) return;
\t\t\t\t\t\t\t\t\tif (!warningsFilter(original.source)) return;
\t\t\t\t\t\t\t\t\twarnings.push(warning.replace(/\\[.+:([0-9]+),([0-9]+)\\]/, \"\") + \"[\" + requestShortener.shorten(original.source) + \":\" + original.line + \",\" + original.column + \"]\");
\t\t\t\t\t\t\t\t};
\t\t\t\t\t\t\t} else {
\t\t\t\t\t\t\t\tinput = asset.source();
\t\t\t\t\t\t\t\tuglify.AST_Node.warn_function = function (warning) {
\t\t\t\t\t\t\t\t\t// eslint-disable-line camelcase
\t\t\t\t\t\t\t\t\twarnings.push(warning);
\t\t\t\t\t\t\t\t};
\t\t\t\t\t\t\t}
\t\t\t\t\t\t\tuglify.base54.reset();
\t\t\t\t\t\t\tvar ast = uglify.parse(input, {
\t\t\t\t\t\t\t\tfilename: file
\t\t\t\t\t\t\t});
\t\t\t\t\t\t\tif (options.compress !== false) {
\t\t\t\t\t\t\t\tast.figure_out_scope();
\t\t\t\t\t\t\t\tvar compress = uglify.Compressor(options.compress || {
\t\t\t\t\t\t\t\t\twarnings: false
\t\t\t\t\t\t\t\t}); // eslint-disable-line new-cap
\t\t\t\t\t\t\t\tast = compress.compress(ast);
\t\t\t\t\t\t\t}
\t\t\t\t\t\t\tif (options.mangle !== false) {
\t\t\t\t\t\t\t\tast.figure_out_scope(options.mangle || {});
\t\t\t\t\t\t\t\tast.compute_char_frequency(options.mangle || {});
\t\t\t\t\t\t\t\tast.mangle_names(options.mangle || {});
\t\t\t\t\t\t\t\tif (options.mangle && options.mangle.props) {
\t\t\t\t\t\t\t\t\tuglify.mangle_properties(ast, options.mangle.props);
\t\t\t\t\t\t\t\t}
\t\t\t\t\t\t\t}
\t\t\t\t\t\t\tvar output = {};
\t\t\t\t\t\t\toutput.comments = Object.prototype.hasOwnProperty.call(options, \"comments\") ? options.comments : /^\\**!|@preserve|@license/;
\t\t\t\t\t\t\toutput.beautify = options.beautify;
\t\t\t\t\t\t\tfor (var k in options.output) {
\t\t\t\t\t\t\t\toutput[k] = options.output[k];
\t\t\t\t\t\t\t}
\t\t\t\t\t\t\tvar extractedComments = [];
\t\t\t\t\t\t\tif (options.extractComments) {
\t\t\t\t\t\t\t\tvar condition = {};
\t\t\t\t\t\t\t\tif (typeof options.extractComments === \"string\" || options.extractComments instanceof RegExp) {
\t\t\t\t\t\t\t\t\t// extractComments specifies the extract condition and output.comments specifies the preserve condition
\t\t\t\t\t\t\t\t\tcondition.preserve = output.comments;
\t\t\t\t\t\t\t\t\tcondition.extract = options.extractComments;
\t\t\t\t\t\t\t\t} else if (Object.prototype.hasOwnProperty.call(options.extractComments, \"condition\")) {
\t\t\t\t\t\t\t\t\t// Extract condition is given in extractComments.condition
\t\t\t\t\t\t\t\t\tcondition.preserve = output.comments;
\t\t\t\t\t\t\t\t\tcondition.extract = options.extractComments.condition;
\t\t\t\t\t\t\t\t} else {
\t\t\t\t\t\t\t\t\t// No extract condition is given. Extract comments that match output.comments instead of preserving them
\t\t\t\t\t\t\t\t\tcondition.preserve = false;
\t\t\t\t\t\t\t\t\tcondition.extract = output.comments;
\t\t\t\t\t\t\t\t}

\t\t\t\t\t\t\t\t// Ensure that both conditions are functions
\t\t\t\t\t\t\t\t[\"preserve\", \"extract\"].forEach(function (key) {
\t\t\t\t\t\t\t\t\tswitch (_typeof(condition[key])) {
\t\t\t\t\t\t\t\t\t\tcase \"boolean\":
\t\t\t\t\t\t\t\t\t\t\tvar b = condition[key];
\t\t\t\t\t\t\t\t\t\t\tcondition[key] = function () {
\t\t\t\t\t\t\t\t\t\t\t\treturn b;
\t\t\t\t\t\t\t\t\t\t\t};
\t\t\t\t\t\t\t\t\t\t\tbreak;
\t\t\t\t\t\t\t\t\t\tcase \"function\":
\t\t\t\t\t\t\t\t\t\t\tbreak;
\t\t\t\t\t\t\t\t\t\tcase \"string\":
\t\t\t\t\t\t\t\t\t\t\tif (condition[key] === \"all\") {
\t\t\t\t\t\t\t\t\t\t\t\tcondition[key] = function () {
\t\t\t\t\t\t\t\t\t\t\t\t\treturn true;
\t\t\t\t\t\t\t\t\t\t\t\t};
\t\t\t\t\t\t\t\t\t\t\t\tbreak;
\t\t\t\t\t\t\t\t\t\t\t}
\t\t\t\t\t\t\t\t\t\t\tvar regex = new RegExp(condition[key]);
\t\t\t\t\t\t\t\t\t\t\tcondition[key] = function (astNode, comment) {
\t\t\t\t\t\t\t\t\t\t\t\treturn regex.test(comment.value);
\t\t\t\t\t\t\t\t\t\t\t};
\t\t\t\t\t\t\t\t\t\t\tbreak;
\t\t\t\t\t\t\t\t\t\tdefault:
\t\t\t\t\t\t\t\t\t\t\tregex = condition[key];
\t\t\t\t\t\t\t\t\t\t\tcondition[key] = function (astNode, comment) {
\t\t\t\t\t\t\t\t\t\t\t\treturn regex.test(comment.value);
\t\t\t\t\t\t\t\t\t\t\t};
\t\t\t\t\t\t\t\t\t}
\t\t\t\t\t\t\t\t});

\t\t\t\t\t\t\t\t// Redefine the comments function to extract and preserve
\t\t\t\t\t\t\t\t// comments according to the two conditions
\t\t\t\t\t\t\t\toutput.comments = function (astNode, comment) {
\t\t\t\t\t\t\t\t\tif (condition.extract(astNode, comment)) {
\t\t\t\t\t\t\t\t\t\textractedComments.push(comment.type === \"comment2\" ? \"/*\" + comment.value + \"*/\" : \"//\" + comment.value);
\t\t\t\t\t\t\t\t\t}
\t\t\t\t\t\t\t\t\treturn condition.preserve(astNode, comment);
\t\t\t\t\t\t\t\t};
\t\t\t\t\t\t\t}
\t\t\t\t\t\t\tvar map = void 0;
\t\t\t\t\t\t\tif (options.sourceMap) {
\t\t\t\t\t\t\t\tmap = uglify.SourceMap({ // eslint-disable-line new-cap
\t\t\t\t\t\t\t\t\tfile: file,
\t\t\t\t\t\t\t\t\troot: \"\"
\t\t\t\t\t\t\t\t});
\t\t\t\t\t\t\t\toutput.source_map = map; // eslint-disable-line camelcase
\t\t\t\t\t\t\t}
\t\t\t\t\t\t\tvar stream = uglify.OutputStream(output); // eslint-disable-line new-cap
\t\t\t\t\t\t\tast.print(stream);
\t\t\t\t\t\t\tif (map) map = map + \"\";
\t\t\t\t\t\t\tvar stringifiedStream = stream + \"\";
\t\t\t\t\t\t\tvar outputSource = map ? new SourceMapSource(stringifiedStream, file, JSON.parse(map), input, inputSourceMap) : new RawSource(stringifiedStream);
\t\t\t\t\t\t\tif (extractedComments.length > 0) {
\t\t\t\t\t\t\t\tvar commentsFile = options.extractComments.filename || file + \".LICENSE\";
\t\t\t\t\t\t\t\tif (typeof commentsFile === \"function\") {
\t\t\t\t\t\t\t\t\tcommentsFile = commentsFile(file);
\t\t\t\t\t\t\t\t}

\t\t\t\t\t\t\t\t// Write extracted comments to commentsFile
\t\t\t\t\t\t\t\tvar commentsSource = new RawSource(extractedComments.join(\"\\n\\n\") + \"\\n\");
\t\t\t\t\t\t\t\tif (commentsFile in compilation.assets) {
\t\t\t\t\t\t\t\t\t// commentsFile already exists, append new comments...
\t\t\t\t\t\t\t\t\tif (compilation.assets[commentsFile] instanceof ConcatSource) {
\t\t\t\t\t\t\t\t\t\tcompilation.assets[commentsFile].add(\"\\n\");
\t\t\t\t\t\t\t\t\t\tcompilation.assets[commentsFile].add(commentsSource);
\t\t\t\t\t\t\t\t\t} else {
\t\t\t\t\t\t\t\t\t\tcompilation.assets[commentsFile] = new ConcatSource(compilation.assets[commentsFile], \"\\n\", commentsSource);
\t\t\t\t\t\t\t\t\t}
\t\t\t\t\t\t\t\t} else {
\t\t\t\t\t\t\t\t\tcompilation.assets[commentsFile] = commentsSource;
\t\t\t\t\t\t\t\t}

\t\t\t\t\t\t\t\t// Add a banner to the original file
\t\t\t\t\t\t\t\tif (options.extractComments.banner !== false) {
\t\t\t\t\t\t\t\t\tvar banner = options.extractComments.banner || \"For license information please see \" + commentsFile;
\t\t\t\t\t\t\t\t\tif (typeof banner === \"function\") {
\t\t\t\t\t\t\t\t\t\tbanner = banner(commentsFile);
\t\t\t\t\t\t\t\t\t}
\t\t\t\t\t\t\t\t\tif (banner) {
\t\t\t\t\t\t\t\t\t\toutputSource = new ConcatSource(\"/*! \" + banner + \" */\\n\", outputSource);
\t\t\t\t\t\t\t\t\t}
\t\t\t\t\t\t\t\t}
\t\t\t\t\t\t\t}
\t\t\t\t\t\t\tasset.__UglifyJsPlugin = compilation.assets[file] = outputSource;
\t\t\t\t\t\t\tif (warnings.length > 0) {
\t\t\t\t\t\t\t\tcompilation.warnings.push(new Error(file + \" from UglifyJs\\n\" + warnings.join(\"\\n\")));
\t\t\t\t\t\t\t}
\t\t\t\t\t\t} catch (err) {
\t\t\t\t\t\t\tif (err.line) {
\t\t\t\t\t\t\t\tvar original = sourceMap && sourceMap.originalPositionFor({
\t\t\t\t\t\t\t\t\tline: err.line,
\t\t\t\t\t\t\t\t\tcolumn: err.col
\t\t\t\t\t\t\t\t});
\t\t\t\t\t\t\t\tif (original && original.source) {
\t\t\t\t\t\t\t\t\tcompilation.errors.push(new Error(file + \" from UglifyJs\\n\" + err.message + \" [\" + requestShortener.shorten(original.source) + \":\" + original.line + \",\" + original.column + \"][\" + file + \":\" + err.line + \",\" + err.col + \"]\"));
\t\t\t\t\t\t\t\t} else {
\t\t\t\t\t\t\t\t\tcompilation.errors.push(new Error(file + \" from UglifyJs\\n\" + err.message + \" [\" + file + \":\" + err.line + \",\" + err.col + \"]\"));
\t\t\t\t\t\t\t\t}
\t\t\t\t\t\t\t} else if (err.msg) {
\t\t\t\t\t\t\t\tcompilation.errors.push(new Error(file + \" from UglifyJs\\n\" + err.msg));
\t\t\t\t\t\t\t} else compilation.errors.push(new Error(file + \" from UglifyJs\\n\" + err.stack));
\t\t\t\t\t\t} finally {
\t\t\t\t\t\t\tuglify.AST_Node.warn_function = oldWarnFunction; // eslint-disable-line camelcase
\t\t\t\t\t\t}
\t\t\t\t\t});
\t\t\t\t\tcallback();
\t\t\t\t});
\t\t\t});
\t\t}
\t}]);

\treturn UglifyJsPlugin;
}();

module.exports = UglifyJsPlugin;", "node_modules/uglifyjs-webpack-plugin/dist/index.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/uglifyjs-webpack-plugin/dist/index.js");
    }
}
