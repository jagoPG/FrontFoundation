<?php

/* node_modules/source-list-map/lib/SourceNode.js */
class __TwigTemplate_6e01d80c856fc74b4ca14038ae92e21269136bfa509dd9ea142f4114fdf557a2 extends Twig_Template
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
        $__internal_c4b8b6ae4d0888642613f61cce6be4ef80f8ef9db774542b87738b6dde52e4c6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c4b8b6ae4d0888642613f61cce6be4ef80f8ef9db774542b87738b6dde52e4c6->enter($__internal_c4b8b6ae4d0888642613f61cce6be4ef80f8ef9db774542b87738b6dde52e4c6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/source-list-map/lib/SourceNode.js"));

        // line 1
        echo "/*
\tMIT License http://www.opensource.org/licenses/mit-license.php
\tAuthor Tobias Koppers @sokra
*/
\"use strict\";

const base64VLQ = require(\"./base64-vlq\");
const getNumberOfLines = require(\"./helpers\").getNumberOfLines;
const getUnfinishedLine = require(\"./helpers\").getUnfinishedLine;

const LINE_MAPPING = \";AACA\";

class SourceNode {

\tconstructor(generatedCode, source, originalSource, startingLine) {
\t\tthis.generatedCode = generatedCode;
\t\tthis.originalSource = originalSource;
\t\tthis.source = source;
\t\tthis.startingLine = startingLine || 1;
\t\tthis._numberOfLines = getNumberOfLines(this.generatedCode);
\t\tthis._endsWithNewLine = generatedCode[generatedCode.length - 1] === \"\\n\";
\t}

\tclone() {
\t\treturn new SourceNode(this.generatedCode, this.source, this.originalSource, this.startingLine);
\t}

\tgetGeneratedCode() {
\t\treturn this.generatedCode;
\t}

\taddGeneratedCode(code) {
\t\tthis.generatedCode += code;
\t\tthis._numberOfLines += getNumberOfLines(code);
\t\tthis._endsWithNewLine = code[code.length - 1] === \"\\n\";
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
\t\tmappings += base64VLQ.encode(this.startingLine - mappingsContext.currentOriginalLine); // original line index
\t\tmappings += \"A\"; // original column 0
\t\tmappingsContext.currentSource = sourceIdx;
\t\tmappingsContext.currentOriginalLine = this.startingLine + lines - 1;
\t\tconst unfinishedGeneratedLine = mappingsContext.unfinishedGeneratedLine = getUnfinishedLine(this.generatedCode)
\t\tmappings += Array(lines).join(LINE_MAPPING);
\t\tif(unfinishedGeneratedLine === 0) {
\t\t\tmappings += \";\";
\t\t} else {
\t\t\tif(lines !== 0) {
\t\t\t\tmappings += LINE_MAPPING;
\t\t\t}
\t\t\tmappingsContext.currentOriginalLine++;
\t\t}
\t\treturn mappings;
\t}

\tmapGeneratedCode(fn) {
\t\tthrow new Error(\"Cannot map generated code on a SourceMap. Normalize to SingleLineNode first.\");
\t}

\tgetNormalizedNodes() {
\t\tvar results = [];
\t\tvar currentLine = this.startingLine;
\t\tvar generatedCode = this.generatedCode;
\t\tvar index = 0;
\t\tvar indexEnd = generatedCode.length;
\t\twhile(index < indexEnd) {
\t\t\t// get one generated line
\t\t\tvar nextLine = generatedCode.indexOf(\"\\n\", index) + 1;
\t\t\tif(nextLine === 0) nextLine = indexEnd;
\t\t\tvar lineGenerated = generatedCode.substr(index, nextLine - index);

\t\t\tresults.push(new SingleLineNode(lineGenerated, this.source, this.originalSource, currentLine));

\t\t\t// move cursors
\t\t\tindex = nextLine;
\t\t\tcurrentLine++;
\t\t}
\t\treturn results;
\t}

\tmerge(otherNode) {
\t\tif(otherNode instanceof SourceNode) {
\t\t\treturn this.mergeSourceNode(otherNode);
\t\t} else if(otherNode instanceof SingleLineNode) {
\t\t\treturn this.mergeSingleLineNode(otherNode);
\t\t}
\t\treturn false;
\t}

\tmergeSourceNode(otherNode) {
\t\tif(this.source === otherNode.source &&
\t\t\tthis._endsWithNewLine &&
\t\t\tthis.startingLine + this._numberOfLines === otherNode.startingLine) {
\t\t\tthis.generatedCode += otherNode.generatedCode;
\t\t\tthis._numberOfLines += otherNode._numberOfLines;
\t\t\tthis._endsWithNewLine = otherNode._endsWithNewLine;
\t\t\treturn this;
\t\t}
\t\treturn false;
\t}

\tmergeSingleLineNode(otherNode) {
\t\tif(this.source === otherNode.source &&
\t\t\tthis._endsWithNewLine &&
\t\t\tthis.startingLine + this._numberOfLines === otherNode.line &&
\t\t\totherNode._numberOfLines <= 1) {
\t\t\tthis.addSingleLineNode(otherNode);
\t\t\treturn this;
\t\t}
\t\treturn false;
\t}

\taddSingleLineNode(otherNode) {
\t\tthis.generatedCode += otherNode.generatedCode;
\t\tthis._numberOfLines += otherNode._numberOfLines
\t\tthis._endsWithNewLine = otherNode._endsWithNewLine;
\t}
}

module.exports = SourceNode;
const SingleLineNode = require(\"./SingleLineNode\"); // circular dependency
";
        
        $__internal_c4b8b6ae4d0888642613f61cce6be4ef80f8ef9db774542b87738b6dde52e4c6->leave($__internal_c4b8b6ae4d0888642613f61cce6be4ef80f8ef9db774542b87738b6dde52e4c6_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/source-list-map/lib/SourceNode.js";
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

const LINE_MAPPING = \";AACA\";

class SourceNode {

\tconstructor(generatedCode, source, originalSource, startingLine) {
\t\tthis.generatedCode = generatedCode;
\t\tthis.originalSource = originalSource;
\t\tthis.source = source;
\t\tthis.startingLine = startingLine || 1;
\t\tthis._numberOfLines = getNumberOfLines(this.generatedCode);
\t\tthis._endsWithNewLine = generatedCode[generatedCode.length - 1] === \"\\n\";
\t}

\tclone() {
\t\treturn new SourceNode(this.generatedCode, this.source, this.originalSource, this.startingLine);
\t}

\tgetGeneratedCode() {
\t\treturn this.generatedCode;
\t}

\taddGeneratedCode(code) {
\t\tthis.generatedCode += code;
\t\tthis._numberOfLines += getNumberOfLines(code);
\t\tthis._endsWithNewLine = code[code.length - 1] === \"\\n\";
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
\t\tmappings += base64VLQ.encode(this.startingLine - mappingsContext.currentOriginalLine); // original line index
\t\tmappings += \"A\"; // original column 0
\t\tmappingsContext.currentSource = sourceIdx;
\t\tmappingsContext.currentOriginalLine = this.startingLine + lines - 1;
\t\tconst unfinishedGeneratedLine = mappingsContext.unfinishedGeneratedLine = getUnfinishedLine(this.generatedCode)
\t\tmappings += Array(lines).join(LINE_MAPPING);
\t\tif(unfinishedGeneratedLine === 0) {
\t\t\tmappings += \";\";
\t\t} else {
\t\t\tif(lines !== 0) {
\t\t\t\tmappings += LINE_MAPPING;
\t\t\t}
\t\t\tmappingsContext.currentOriginalLine++;
\t\t}
\t\treturn mappings;
\t}

\tmapGeneratedCode(fn) {
\t\tthrow new Error(\"Cannot map generated code on a SourceMap. Normalize to SingleLineNode first.\");
\t}

\tgetNormalizedNodes() {
\t\tvar results = [];
\t\tvar currentLine = this.startingLine;
\t\tvar generatedCode = this.generatedCode;
\t\tvar index = 0;
\t\tvar indexEnd = generatedCode.length;
\t\twhile(index < indexEnd) {
\t\t\t// get one generated line
\t\t\tvar nextLine = generatedCode.indexOf(\"\\n\", index) + 1;
\t\t\tif(nextLine === 0) nextLine = indexEnd;
\t\t\tvar lineGenerated = generatedCode.substr(index, nextLine - index);

\t\t\tresults.push(new SingleLineNode(lineGenerated, this.source, this.originalSource, currentLine));

\t\t\t// move cursors
\t\t\tindex = nextLine;
\t\t\tcurrentLine++;
\t\t}
\t\treturn results;
\t}

\tmerge(otherNode) {
\t\tif(otherNode instanceof SourceNode) {
\t\t\treturn this.mergeSourceNode(otherNode);
\t\t} else if(otherNode instanceof SingleLineNode) {
\t\t\treturn this.mergeSingleLineNode(otherNode);
\t\t}
\t\treturn false;
\t}

\tmergeSourceNode(otherNode) {
\t\tif(this.source === otherNode.source &&
\t\t\tthis._endsWithNewLine &&
\t\t\tthis.startingLine + this._numberOfLines === otherNode.startingLine) {
\t\t\tthis.generatedCode += otherNode.generatedCode;
\t\t\tthis._numberOfLines += otherNode._numberOfLines;
\t\t\tthis._endsWithNewLine = otherNode._endsWithNewLine;
\t\t\treturn this;
\t\t}
\t\treturn false;
\t}

\tmergeSingleLineNode(otherNode) {
\t\tif(this.source === otherNode.source &&
\t\t\tthis._endsWithNewLine &&
\t\t\tthis.startingLine + this._numberOfLines === otherNode.line &&
\t\t\totherNode._numberOfLines <= 1) {
\t\t\tthis.addSingleLineNode(otherNode);
\t\t\treturn this;
\t\t}
\t\treturn false;
\t}

\taddSingleLineNode(otherNode) {
\t\tthis.generatedCode += otherNode.generatedCode;
\t\tthis._numberOfLines += otherNode._numberOfLines
\t\tthis._endsWithNewLine = otherNode._endsWithNewLine;
\t}
}

module.exports = SourceNode;
const SingleLineNode = require(\"./SingleLineNode\"); // circular dependency
", "node_modules/source-list-map/lib/SourceNode.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/source-list-map/lib/SourceNode.js");
    }
}
