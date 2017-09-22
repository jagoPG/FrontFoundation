<?php

/* node_modules/source-list-map/lib/fromStringWithSourceMap.js */
class __TwigTemplate_174ce9ca405fc6374dbc4611284dab7c84f004f2aaa23bb07e967e38e9779aee extends Twig_Template
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
        $__internal_6cd5ec09e8c4c8781ec55f2793ce0c0ed72a789747d893916b37d443707dfd89 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6cd5ec09e8c4c8781ec55f2793ce0c0ed72a789747d893916b37d443707dfd89->enter($__internal_6cd5ec09e8c4c8781ec55f2793ce0c0ed72a789747d893916b37d443707dfd89_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/source-list-map/lib/fromStringWithSourceMap.js"));

        // line 1
        echo "/*
\tMIT License http://www.opensource.org/licenses/mit-license.php
\tAuthor Tobias Koppers @sokra
*/
\"use strict\";

const base64VLQ = require(\"./base64-vlq\");
const SourceNode = require(\"./SourceNode\");
const CodeNode = require(\"./CodeNode\");
const SourceListMap = require(\"./SourceListMap\");

module.exports = function fromStringWithSourceMap(code, map) {
\tconst sources = map.sources;
\tconst sourcesContent = map.sourcesContent;
\tconst mappings = map.mappings.split(\";\");
\tconst lines = code.split(\"\\n\");
\tconst nodes = [];
\tlet currentNode = null;
\tlet currentLine = 1;
\tlet currentSourceIdx = 0;
\tlet currentSourceNodeLine;
\tmappings.forEach(function(mapping, idx) {
\t\tlet line = lines[idx];
\t\tif(typeof line === 'undefined') return;
\t\tif(idx !== lines.length - 1) line += \"\\n\";
\t\tif(!mapping)
\t\t\treturn addCode(line);
\t\tmapping = { value: 0, rest: mapping };
\t\tlet lineAdded = false;
\t\twhile(mapping.rest)
\t\t\tlineAdded = processMapping(mapping, line, lineAdded) || lineAdded;
\t\tif(!lineAdded)
\t\t\taddCode(line);
\t});
\tif(mappings.length < lines.length) {
\t\tlet idx = mappings.length;
\t\twhile(!lines[idx].trim() && idx < lines.length-1) {
\t\t\taddCode(lines[idx] + \"\\n\");
\t\t\tidx++;
\t\t}
\t\taddCode(lines.slice(idx).join(\"\\n\"));
\t}
\treturn new SourceListMap(nodes);
\tfunction processMapping(mapping, line, ignore) {
\t\tif(mapping.rest && mapping.rest[0] !== \",\") {
\t\t\tbase64VLQ.decode(mapping.rest, mapping);
\t\t}
\t\tif(!mapping.rest)
\t\t\treturn false;
\t\tif(mapping.rest[0] === \",\") {
\t\t\tmapping.rest = mapping.rest.substr(1);
\t\t\treturn false;
\t\t}

\t\tbase64VLQ.decode(mapping.rest, mapping);
\t\tconst sourceIdx = mapping.value + currentSourceIdx;
\t\tcurrentSourceIdx = sourceIdx;

\t\tlet linePosition;
\t\tif(mapping.rest && mapping.rest[0] !== \",\") {
\t\t\tbase64VLQ.decode(mapping.rest, mapping);
\t\t\tlinePosition = mapping.value + currentLine;
\t\t\tcurrentLine = linePosition;
\t\t} else {
\t\t\tlinePosition = currentLine;
\t\t}

\t\tif(mapping.rest) {
\t\t\tconst next = mapping.rest.indexOf(\",\");
\t\t\tmapping.rest = next === -1 ? \"\" : mapping.rest.substr(next);
\t\t}

\t\tif(!ignore) {
\t\t\taddSource(line, sources ? sources[sourceIdx] : null, sourcesContent ? sourcesContent[sourceIdx] : null, linePosition)
\t\t\treturn true;
\t\t}
\t}
\tfunction addCode(generatedCode) {
\t\tif(currentNode && currentNode instanceof CodeNode) {
\t\t\tcurrentNode.addGeneratedCode(generatedCode);
\t\t} else if(currentNode && currentNode instanceof SourceNode && !generatedCode.trim()) {
\t\t\tcurrentNode.addGeneratedCode(generatedCode);
\t\t\tcurrentSourceNodeLine++;
\t\t} else {
\t\t\tcurrentNode = new CodeNode(generatedCode);
\t\t\tnodes.push(currentNode);
\t\t}
\t}
\tfunction addSource(generatedCode, source, originalSource, linePosition) {
\t\tif(currentNode && currentNode instanceof SourceNode &&
\t\t\tcurrentNode.source === source &&
\t\t\tcurrentSourceNodeLine === linePosition
\t\t) {
\t\t\tcurrentNode.addGeneratedCode(generatedCode);
\t\t\tcurrentSourceNodeLine++;
\t\t} else {
\t\t\tcurrentNode = new SourceNode(generatedCode, source, originalSource, linePosition);
\t\t\tcurrentSourceNodeLine = linePosition + 1;
\t\t\tnodes.push(currentNode);
\t\t}
\t}
};
";
        
        $__internal_6cd5ec09e8c4c8781ec55f2793ce0c0ed72a789747d893916b37d443707dfd89->leave($__internal_6cd5ec09e8c4c8781ec55f2793ce0c0ed72a789747d893916b37d443707dfd89_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/source-list-map/lib/fromStringWithSourceMap.js";
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
const SourceNode = require(\"./SourceNode\");
const CodeNode = require(\"./CodeNode\");
const SourceListMap = require(\"./SourceListMap\");

module.exports = function fromStringWithSourceMap(code, map) {
\tconst sources = map.sources;
\tconst sourcesContent = map.sourcesContent;
\tconst mappings = map.mappings.split(\";\");
\tconst lines = code.split(\"\\n\");
\tconst nodes = [];
\tlet currentNode = null;
\tlet currentLine = 1;
\tlet currentSourceIdx = 0;
\tlet currentSourceNodeLine;
\tmappings.forEach(function(mapping, idx) {
\t\tlet line = lines[idx];
\t\tif(typeof line === 'undefined') return;
\t\tif(idx !== lines.length - 1) line += \"\\n\";
\t\tif(!mapping)
\t\t\treturn addCode(line);
\t\tmapping = { value: 0, rest: mapping };
\t\tlet lineAdded = false;
\t\twhile(mapping.rest)
\t\t\tlineAdded = processMapping(mapping, line, lineAdded) || lineAdded;
\t\tif(!lineAdded)
\t\t\taddCode(line);
\t});
\tif(mappings.length < lines.length) {
\t\tlet idx = mappings.length;
\t\twhile(!lines[idx].trim() && idx < lines.length-1) {
\t\t\taddCode(lines[idx] + \"\\n\");
\t\t\tidx++;
\t\t}
\t\taddCode(lines.slice(idx).join(\"\\n\"));
\t}
\treturn new SourceListMap(nodes);
\tfunction processMapping(mapping, line, ignore) {
\t\tif(mapping.rest && mapping.rest[0] !== \",\") {
\t\t\tbase64VLQ.decode(mapping.rest, mapping);
\t\t}
\t\tif(!mapping.rest)
\t\t\treturn false;
\t\tif(mapping.rest[0] === \",\") {
\t\t\tmapping.rest = mapping.rest.substr(1);
\t\t\treturn false;
\t\t}

\t\tbase64VLQ.decode(mapping.rest, mapping);
\t\tconst sourceIdx = mapping.value + currentSourceIdx;
\t\tcurrentSourceIdx = sourceIdx;

\t\tlet linePosition;
\t\tif(mapping.rest && mapping.rest[0] !== \",\") {
\t\t\tbase64VLQ.decode(mapping.rest, mapping);
\t\t\tlinePosition = mapping.value + currentLine;
\t\t\tcurrentLine = linePosition;
\t\t} else {
\t\t\tlinePosition = currentLine;
\t\t}

\t\tif(mapping.rest) {
\t\t\tconst next = mapping.rest.indexOf(\",\");
\t\t\tmapping.rest = next === -1 ? \"\" : mapping.rest.substr(next);
\t\t}

\t\tif(!ignore) {
\t\t\taddSource(line, sources ? sources[sourceIdx] : null, sourcesContent ? sourcesContent[sourceIdx] : null, linePosition)
\t\t\treturn true;
\t\t}
\t}
\tfunction addCode(generatedCode) {
\t\tif(currentNode && currentNode instanceof CodeNode) {
\t\t\tcurrentNode.addGeneratedCode(generatedCode);
\t\t} else if(currentNode && currentNode instanceof SourceNode && !generatedCode.trim()) {
\t\t\tcurrentNode.addGeneratedCode(generatedCode);
\t\t\tcurrentSourceNodeLine++;
\t\t} else {
\t\t\tcurrentNode = new CodeNode(generatedCode);
\t\t\tnodes.push(currentNode);
\t\t}
\t}
\tfunction addSource(generatedCode, source, originalSource, linePosition) {
\t\tif(currentNode && currentNode instanceof SourceNode &&
\t\t\tcurrentNode.source === source &&
\t\t\tcurrentSourceNodeLine === linePosition
\t\t) {
\t\t\tcurrentNode.addGeneratedCode(generatedCode);
\t\t\tcurrentSourceNodeLine++;
\t\t} else {
\t\t\tcurrentNode = new SourceNode(generatedCode, source, originalSource, linePosition);
\t\t\tcurrentSourceNodeLine = linePosition + 1;
\t\t\tnodes.push(currentNode);
\t\t}
\t}
};
", "node_modules/source-list-map/lib/fromStringWithSourceMap.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/source-list-map/lib/fromStringWithSourceMap.js");
    }
}
