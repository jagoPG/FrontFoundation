<?php

/* node_modules/source-list-map/lib/SourceListMap.js */
class __TwigTemplate_7defb279efc0af0cdf93e32ae9890674dfe491440a08740794b5b5fb1f35da95 extends Twig_Template
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
        $__internal_3ca0218817d3dd8a9392dc9b22786a50ce96c3cd5850a1835fface5853f25407 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3ca0218817d3dd8a9392dc9b22786a50ce96c3cd5850a1835fface5853f25407->enter($__internal_3ca0218817d3dd8a9392dc9b22786a50ce96c3cd5850a1835fface5853f25407_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/source-list-map/lib/SourceListMap.js"));

        // line 1
        echo "/*
\tMIT License http://www.opensource.org/licenses/mit-license.php
\tAuthor Tobias Koppers @sokra
*/
\"use strict\";

const CodeNode = require(\"./CodeNode\");
const SourceNode = require(\"./SourceNode\");
const MappingsContext = require(\"./MappingsContext\");
const getNumberOfLines = require(\"./helpers\").getNumberOfLines;

class SourceListMap {

\tconstructor(generatedCode, source, originalSource) {
\t\tif(Array.isArray(generatedCode)) {
\t\t\tthis.children = generatedCode;
\t\t} else {
\t\t\tthis.children = [];
\t\t\tif(generatedCode || source)
\t\t\t\tthis.add(generatedCode, source, originalSource);
\t\t}
\t}

\tadd(generatedCode, source, originalSource) {
\t\tif(typeof generatedCode === \"string\") {
\t\t\tif(source) {
\t\t\t\tthis.children.push(new SourceNode(generatedCode, source, originalSource));
\t\t\t} else if(this.children.length > 0 && this.children[this.children.length - 1] instanceof CodeNode) {
\t\t\t\tthis.children[this.children.length - 1].addGeneratedCode(generatedCode);
\t\t\t} else {
\t\t\t\tthis.children.push(new CodeNode(generatedCode));
\t\t\t}
\t\t} else if(generatedCode.getMappings && generatedCode.getGeneratedCode) {
\t\t\tthis.children.push(generatedCode);
\t\t} else if(generatedCode.children) {
\t\t\tgeneratedCode.children.forEach(function(sln) {
\t\t\t\tthis.children.push(sln);
\t\t\t}, this);
\t\t} else {
\t\t\tthrow new Error(\"Invalid arguments to SourceListMap.protfotype.add: Expected string, Node or SourceListMap\");
\t\t}
\t};

\tpreprend(generatedCode, source, originalSource) {
\t\tif(typeof generatedCode === \"string\") {
\t\t\tif(source) {
\t\t\t\tthis.children.unshift(new SourceNode(generatedCode, source, originalSource));
\t\t\t} else if(this.children.length > 0 && this.children[this.children.length - 1].preprendGeneratedCode) {
\t\t\t\tthis.children[this.children.length - 1].preprendGeneratedCode(generatedCode);
\t\t\t} else {
\t\t\t\tthis.children.unshift(new CodeNode(generatedCode));
\t\t\t}
\t\t} else if(generatedCode.getMappings && generatedCode.getGeneratedCode) {
\t\t\tthis.children.unshift(generatedCode);
\t\t} else if(generatedCode.children) {
\t\t\tgeneratedCode.children.slice().reverse().forEach(function(sln) {
\t\t\t\tthis.children.unshift(sln);
\t\t\t}, this);
\t\t} else {
\t\t\tthrow new Error(\"Invalid arguments to SourceListMap.protfotype.prerend: Expected string, Node or SourceListMap\");
\t\t}
\t};

\tmapGeneratedCode(fn) {
\t\tconst normalizedNodes = [];
\t\tthis.children.forEach(function(sln) {
\t\t\tsln.getNormalizedNodes().forEach(function(newNode) {
\t\t\t\tnormalizedNodes.push(newNode);
\t\t\t});
\t\t});
\t\tconst optimizedNodes = [];
\t\tnormalizedNodes.forEach(function(sln) {
\t\t\tsln = sln.mapGeneratedCode(fn);
\t\t\tif(optimizedNodes.length === 0) {
\t\t\t\toptimizedNodes.push(sln);
\t\t\t} else {
\t\t\t\tconst last = optimizedNodes[optimizedNodes.length - 1];
\t\t\t\tconst mergedNode = last.merge(sln);
\t\t\t\tif(mergedNode) {
\t\t\t\t\toptimizedNodes[optimizedNodes.length - 1] = mergedNode;
\t\t\t\t} else {
\t\t\t\t\toptimizedNodes.push(sln);
\t\t\t\t}
\t\t\t}
\t\t});
\t\treturn new SourceListMap(optimizedNodes);
\t};

\ttoString() {
\t\treturn this.children.map(function(sln) {
\t\t\treturn sln.getGeneratedCode();
\t\t}).join(\"\");
\t};

\ttoStringWithSourceMap(options) {
\t\tconst mappingsContext = new MappingsContext();
\t\tconst source = this.children.map(function(sln) {
\t\t\treturn sln.getGeneratedCode();
\t\t}).join(\"\");
\t\tconst mappings = this.children.map(function(sln) {
\t\t\treturn sln.getMappings(mappingsContext);
\t\t}).join(\"\");
\t\tconst arrays = mappingsContext.getArrays();
\t\treturn {
\t\t\tsource: source,
\t\t\tmap: {
\t\t\t\tversion: 3,
\t\t\t\tfile: options && options.file,
\t\t\t\tsources: arrays.sources,
\t\t\t\tsourcesContent: mappingsContext.hasSourceContent ? arrays.sourcesContent : undefined,
\t\t\t\tmappings: mappings
\t\t\t}
\t\t};
\t}
}

module.exports = SourceListMap;
";
        
        $__internal_3ca0218817d3dd8a9392dc9b22786a50ce96c3cd5850a1835fface5853f25407->leave($__internal_3ca0218817d3dd8a9392dc9b22786a50ce96c3cd5850a1835fface5853f25407_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/source-list-map/lib/SourceListMap.js";
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

const CodeNode = require(\"./CodeNode\");
const SourceNode = require(\"./SourceNode\");
const MappingsContext = require(\"./MappingsContext\");
const getNumberOfLines = require(\"./helpers\").getNumberOfLines;

class SourceListMap {

\tconstructor(generatedCode, source, originalSource) {
\t\tif(Array.isArray(generatedCode)) {
\t\t\tthis.children = generatedCode;
\t\t} else {
\t\t\tthis.children = [];
\t\t\tif(generatedCode || source)
\t\t\t\tthis.add(generatedCode, source, originalSource);
\t\t}
\t}

\tadd(generatedCode, source, originalSource) {
\t\tif(typeof generatedCode === \"string\") {
\t\t\tif(source) {
\t\t\t\tthis.children.push(new SourceNode(generatedCode, source, originalSource));
\t\t\t} else if(this.children.length > 0 && this.children[this.children.length - 1] instanceof CodeNode) {
\t\t\t\tthis.children[this.children.length - 1].addGeneratedCode(generatedCode);
\t\t\t} else {
\t\t\t\tthis.children.push(new CodeNode(generatedCode));
\t\t\t}
\t\t} else if(generatedCode.getMappings && generatedCode.getGeneratedCode) {
\t\t\tthis.children.push(generatedCode);
\t\t} else if(generatedCode.children) {
\t\t\tgeneratedCode.children.forEach(function(sln) {
\t\t\t\tthis.children.push(sln);
\t\t\t}, this);
\t\t} else {
\t\t\tthrow new Error(\"Invalid arguments to SourceListMap.protfotype.add: Expected string, Node or SourceListMap\");
\t\t}
\t};

\tpreprend(generatedCode, source, originalSource) {
\t\tif(typeof generatedCode === \"string\") {
\t\t\tif(source) {
\t\t\t\tthis.children.unshift(new SourceNode(generatedCode, source, originalSource));
\t\t\t} else if(this.children.length > 0 && this.children[this.children.length - 1].preprendGeneratedCode) {
\t\t\t\tthis.children[this.children.length - 1].preprendGeneratedCode(generatedCode);
\t\t\t} else {
\t\t\t\tthis.children.unshift(new CodeNode(generatedCode));
\t\t\t}
\t\t} else if(generatedCode.getMappings && generatedCode.getGeneratedCode) {
\t\t\tthis.children.unshift(generatedCode);
\t\t} else if(generatedCode.children) {
\t\t\tgeneratedCode.children.slice().reverse().forEach(function(sln) {
\t\t\t\tthis.children.unshift(sln);
\t\t\t}, this);
\t\t} else {
\t\t\tthrow new Error(\"Invalid arguments to SourceListMap.protfotype.prerend: Expected string, Node or SourceListMap\");
\t\t}
\t};

\tmapGeneratedCode(fn) {
\t\tconst normalizedNodes = [];
\t\tthis.children.forEach(function(sln) {
\t\t\tsln.getNormalizedNodes().forEach(function(newNode) {
\t\t\t\tnormalizedNodes.push(newNode);
\t\t\t});
\t\t});
\t\tconst optimizedNodes = [];
\t\tnormalizedNodes.forEach(function(sln) {
\t\t\tsln = sln.mapGeneratedCode(fn);
\t\t\tif(optimizedNodes.length === 0) {
\t\t\t\toptimizedNodes.push(sln);
\t\t\t} else {
\t\t\t\tconst last = optimizedNodes[optimizedNodes.length - 1];
\t\t\t\tconst mergedNode = last.merge(sln);
\t\t\t\tif(mergedNode) {
\t\t\t\t\toptimizedNodes[optimizedNodes.length - 1] = mergedNode;
\t\t\t\t} else {
\t\t\t\t\toptimizedNodes.push(sln);
\t\t\t\t}
\t\t\t}
\t\t});
\t\treturn new SourceListMap(optimizedNodes);
\t};

\ttoString() {
\t\treturn this.children.map(function(sln) {
\t\t\treturn sln.getGeneratedCode();
\t\t}).join(\"\");
\t};

\ttoStringWithSourceMap(options) {
\t\tconst mappingsContext = new MappingsContext();
\t\tconst source = this.children.map(function(sln) {
\t\t\treturn sln.getGeneratedCode();
\t\t}).join(\"\");
\t\tconst mappings = this.children.map(function(sln) {
\t\t\treturn sln.getMappings(mappingsContext);
\t\t}).join(\"\");
\t\tconst arrays = mappingsContext.getArrays();
\t\treturn {
\t\t\tsource: source,
\t\t\tmap: {
\t\t\t\tversion: 3,
\t\t\t\tfile: options && options.file,
\t\t\t\tsources: arrays.sources,
\t\t\t\tsourcesContent: mappingsContext.hasSourceContent ? arrays.sourcesContent : undefined,
\t\t\t\tmappings: mappings
\t\t\t}
\t\t};
\t}
}

module.exports = SourceListMap;
", "node_modules/source-list-map/lib/SourceListMap.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/source-list-map/lib/SourceListMap.js");
    }
}
