<?php

/* node_modules/source-list-map/lib/SingleLineNode.js */
class __TwigTemplate_fc458fc5fa7e20eaa912c39d82a16cd41efb1a2d7c3a8aae862652db38e061ed extends Twig_Template
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
        $__internal_0cf2b21cbaaac539ad72cfe4eee939adf275cce971ae372792edb006f32ca1f7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0cf2b21cbaaac539ad72cfe4eee939adf275cce971ae372792edb006f32ca1f7->enter($__internal_0cf2b21cbaaac539ad72cfe4eee939adf275cce971ae372792edb006f32ca1f7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/source-list-map/lib/SingleLineNode.js"));

        // line 1
        echo "/*
\tMIT License http://www.opensource.org/licenses/mit-license.php
\tAuthor Tobias Koppers @sokra
*/
\"use strict\";

const base64VLQ = require(\"./base64-vlq\");
const getNumberOfLines = require(\"./helpers\").getNumberOfLines;
const getUnfinishedLine = require(\"./helpers\").getUnfinishedLine;

const LINE_MAPPING = \";AAAA\";

class SingleLineNode {

\tconstructor(generatedCode, source, originalSource, line) {
\t\tthis.generatedCode = generatedCode;
\t\tthis.originalSource = originalSource;
\t\tthis.source = source;
\t\tthis.line = line || 1;
\t\tthis._numberOfLines = getNumberOfLines(this.generatedCode);
\t\tthis._endsWithNewLine = generatedCode[generatedCode.length - 1] === \"\\n\";
\t}

\tclone() {
\t\treturn new SingleLineNode(this.generatedCode, this.source, this.originalSource, this.line);
\t}

\tgetGeneratedCode() {
\t\treturn this.generatedCode;
\t}

\tgetMappings(mappingsContext) {
\t\tif(!this.generatedCode)
\t\t\treturn \"\";
\t\tconst lines = this._numberOfLines;
\t\tconst sourceIdx = mappingsContext.ensureSource(this.source, this.originalSource);
\t\tlet mappings = \"A\"; // generated column 0
\t\tif(mappingsContext.unfinishedGeneratedLine)
\t\t\tmappings = \",\" + base64VLQ.encode(mappingsContext.unfinishedGeneratedLine);
\t\tmappings += base64VLQ.encode(sourceIdx - mappingsContext.currentSource); // source index
\t\tmappings += base64VLQ.encode(this.line - mappingsContext.currentOriginalLine); // original line index
\t\tmappings += \"A\"; // original column 0
\t\tmappingsContext.currentSource = sourceIdx;
\t\tmappingsContext.currentOriginalLine = this.line;
\t\tconst unfinishedGeneratedLine = mappingsContext.unfinishedGeneratedLine = getUnfinishedLine(this.generatedCode)
\t\tmappings += Array(lines).join(LINE_MAPPING);
\t\tif(unfinishedGeneratedLine === 0) {
\t\t\tmappings += \";\";
\t\t} else {
\t\t\tif(lines !== 0)
\t\t\t\tmappings += LINE_MAPPING;
\t\t}
\t\treturn mappings;
\t}

\tgetNormalizedNodes() {
\t\treturn [this];
\t}

\tmapGeneratedCode(fn) {
\t\tconst generatedCode = fn(this.generatedCode);
\t\treturn new SingleLineNode(generatedCode, this.source, this.originalSource, this.line);
\t}

\tmerge(otherNode) {
\t\tif(otherNode instanceof SingleLineNode) {
\t\t\treturn this.mergeSingleLineNode(otherNode);
\t\t}
\t\treturn false;
\t}

\tmergeSingleLineNode(otherNode) {
\t\tif(this.source === otherNode.source &&
\t\t\tthis.originalSource === otherNode.originalSource) {
\t\t\tif(this.line === otherNode.line) {
\t\t\t\tthis.generatedCode += otherNode.generatedCode;
\t\t\t\tthis._numberOfLines += otherNode._numberOfLines;
\t\t\t\tthis._endsWithNewLine = otherNode._endsWithNewLine;
\t\t\t\treturn this;
\t\t\t} else if(this.line + 1 === otherNode.line && 
\t\t\t\tthis._endsWithNewLine &&
\t\t\t\tthis._numberOfLines === 1 && 
\t\t\t\totherNode._numberOfLines <= 1) {
\t\t\t\treturn new SourceNode(this.generatedCode + otherNode.generatedCode, this.source, this.originalSource, this.line);
\t\t\t}
\t\t}
\t\treturn false;
\t}
}

module.exports = SingleLineNode;

const SourceNode = require(\"./SourceNode\"); // circular dependency
";
        
        $__internal_0cf2b21cbaaac539ad72cfe4eee939adf275cce971ae372792edb006f32ca1f7->leave($__internal_0cf2b21cbaaac539ad72cfe4eee939adf275cce971ae372792edb006f32ca1f7_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/source-list-map/lib/SingleLineNode.js";
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

const base64VLQ = require(\"./base64-vlq\");
const getNumberOfLines = require(\"./helpers\").getNumberOfLines;
const getUnfinishedLine = require(\"./helpers\").getUnfinishedLine;

const LINE_MAPPING = \";AAAA\";

class SingleLineNode {

\tconstructor(generatedCode, source, originalSource, line) {
\t\tthis.generatedCode = generatedCode;
\t\tthis.originalSource = originalSource;
\t\tthis.source = source;
\t\tthis.line = line || 1;
\t\tthis._numberOfLines = getNumberOfLines(this.generatedCode);
\t\tthis._endsWithNewLine = generatedCode[generatedCode.length - 1] === \"\\n\";
\t}

\tclone() {
\t\treturn new SingleLineNode(this.generatedCode, this.source, this.originalSource, this.line);
\t}

\tgetGeneratedCode() {
\t\treturn this.generatedCode;
\t}

\tgetMappings(mappingsContext) {
\t\tif(!this.generatedCode)
\t\t\treturn \"\";
\t\tconst lines = this._numberOfLines;
\t\tconst sourceIdx = mappingsContext.ensureSource(this.source, this.originalSource);
\t\tlet mappings = \"A\"; // generated column 0
\t\tif(mappingsContext.unfinishedGeneratedLine)
\t\t\tmappings = \",\" + base64VLQ.encode(mappingsContext.unfinishedGeneratedLine);
\t\tmappings += base64VLQ.encode(sourceIdx - mappingsContext.currentSource); // source index
\t\tmappings += base64VLQ.encode(this.line - mappingsContext.currentOriginalLine); // original line index
\t\tmappings += \"A\"; // original column 0
\t\tmappingsContext.currentSource = sourceIdx;
\t\tmappingsContext.currentOriginalLine = this.line;
\t\tconst unfinishedGeneratedLine = mappingsContext.unfinishedGeneratedLine = getUnfinishedLine(this.generatedCode)
\t\tmappings += Array(lines).join(LINE_MAPPING);
\t\tif(unfinishedGeneratedLine === 0) {
\t\t\tmappings += \";\";
\t\t} else {
\t\t\tif(lines !== 0)
\t\t\t\tmappings += LINE_MAPPING;
\t\t}
\t\treturn mappings;
\t}

\tgetNormalizedNodes() {
\t\treturn [this];
\t}

\tmapGeneratedCode(fn) {
\t\tconst generatedCode = fn(this.generatedCode);
\t\treturn new SingleLineNode(generatedCode, this.source, this.originalSource, this.line);
\t}

\tmerge(otherNode) {
\t\tif(otherNode instanceof SingleLineNode) {
\t\t\treturn this.mergeSingleLineNode(otherNode);
\t\t}
\t\treturn false;
\t}

\tmergeSingleLineNode(otherNode) {
\t\tif(this.source === otherNode.source &&
\t\t\tthis.originalSource === otherNode.originalSource) {
\t\t\tif(this.line === otherNode.line) {
\t\t\t\tthis.generatedCode += otherNode.generatedCode;
\t\t\t\tthis._numberOfLines += otherNode._numberOfLines;
\t\t\t\tthis._endsWithNewLine = otherNode._endsWithNewLine;
\t\t\t\treturn this;
\t\t\t} else if(this.line + 1 === otherNode.line && 
\t\t\t\tthis._endsWithNewLine &&
\t\t\t\tthis._numberOfLines === 1 && 
\t\t\t\totherNode._numberOfLines <= 1) {
\t\t\t\treturn new SourceNode(this.generatedCode + otherNode.generatedCode, this.source, this.originalSource, this.line);
\t\t\t}
\t\t}
\t\treturn false;
\t}
}

module.exports = SingleLineNode;

const SourceNode = require(\"./SourceNode\"); // circular dependency
", "node_modules/source-list-map/lib/SingleLineNode.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/source-list-map/lib/SingleLineNode.js");
    }
}
