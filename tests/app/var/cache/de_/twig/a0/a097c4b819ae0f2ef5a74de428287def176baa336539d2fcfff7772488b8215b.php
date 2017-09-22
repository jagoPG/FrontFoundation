<?php

/* node_modules/source-list-map/lib/CodeNode.js */
class __TwigTemplate_86352e8837e2aec5d996351db6a816140db0bd0b88a787012833699c9861aff8 extends Twig_Template
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
        $__internal_da53eddae3a44429acaf75b1dc1d509c414f55d216be7e65b8e8f27a8b585341 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_da53eddae3a44429acaf75b1dc1d509c414f55d216be7e65b8e8f27a8b585341->enter($__internal_da53eddae3a44429acaf75b1dc1d509c414f55d216be7e65b8e8f27a8b585341_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/source-list-map/lib/CodeNode.js"));

        // line 1
        echo "/*
\tMIT License http://www.opensource.org/licenses/mit-license.php
\tAuthor Tobias Koppers @sokra
*/
\"use strict\";

const getNumberOfLines = require(\"./helpers\").getNumberOfLines;
const getUnfinishedLine = require(\"./helpers\").getUnfinishedLine;

class CodeNode {
\tconstructor(generatedCode) {
\t\tthis.generatedCode = generatedCode;
\t}

\tclone() {
\t\treturn new CodeNode(this.generatedCode);
\t}

\tgetGeneratedCode() {
\t\treturn this.generatedCode;
\t}

\tgetMappings(mappingsContext) {
\t\tconst lines = getNumberOfLines(this.generatedCode);
\t\tconst mapping = Array(lines+1).join(\";\");
\t\tif(lines > 0) {
\t\t\tmappingsContext.unfinishedGeneratedLine = getUnfinishedLine(this.generatedCode);
\t\t\tif(mappingsContext.unfinishedGeneratedLine > 0) {
\t\t\t\treturn mapping + \"A\";
\t\t\t} else {
\t\t\t\treturn mapping;
\t\t\t}
\t\t} else {
\t\t\tconst prevUnfinished = mappingsContext.unfinishedGeneratedLine;
\t\t\tmappingsContext.unfinishedGeneratedLine += getUnfinishedLine(this.generatedCode);
\t\t\tif(prevUnfinished === 0 && mappingsContext.unfinishedGeneratedLine > 0) {
\t\t\t\treturn \"A\";
\t\t\t} else {
\t\t\t\treturn \"\";
\t\t\t}
\t\t}
\t}

\taddGeneratedCode(generatedCode) {
\t\tthis.generatedCode += generatedCode;
\t}

\tmapGeneratedCode(fn) {
\t\tconst generatedCode = fn(this.generatedCode);
\t\treturn new CodeNode(generatedCode);
\t}

\tgetNormalizedNodes() {
\t\treturn [this];
\t}

\tmerge(otherNode) {
\t\tif(otherNode instanceof CodeNode) {
\t\t\tthis.generatedCode += otherNode.generatedCode;
\t\t\treturn this;
\t\t}
\t\treturn false;
\t}
}

module.exports = CodeNode;
";
        
        $__internal_da53eddae3a44429acaf75b1dc1d509c414f55d216be7e65b8e8f27a8b585341->leave($__internal_da53eddae3a44429acaf75b1dc1d509c414f55d216be7e65b8e8f27a8b585341_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/source-list-map/lib/CodeNode.js";
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

const getNumberOfLines = require(\"./helpers\").getNumberOfLines;
const getUnfinishedLine = require(\"./helpers\").getUnfinishedLine;

class CodeNode {
\tconstructor(generatedCode) {
\t\tthis.generatedCode = generatedCode;
\t}

\tclone() {
\t\treturn new CodeNode(this.generatedCode);
\t}

\tgetGeneratedCode() {
\t\treturn this.generatedCode;
\t}

\tgetMappings(mappingsContext) {
\t\tconst lines = getNumberOfLines(this.generatedCode);
\t\tconst mapping = Array(lines+1).join(\";\");
\t\tif(lines > 0) {
\t\t\tmappingsContext.unfinishedGeneratedLine = getUnfinishedLine(this.generatedCode);
\t\t\tif(mappingsContext.unfinishedGeneratedLine > 0) {
\t\t\t\treturn mapping + \"A\";
\t\t\t} else {
\t\t\t\treturn mapping;
\t\t\t}
\t\t} else {
\t\t\tconst prevUnfinished = mappingsContext.unfinishedGeneratedLine;
\t\t\tmappingsContext.unfinishedGeneratedLine += getUnfinishedLine(this.generatedCode);
\t\t\tif(prevUnfinished === 0 && mappingsContext.unfinishedGeneratedLine > 0) {
\t\t\t\treturn \"A\";
\t\t\t} else {
\t\t\t\treturn \"\";
\t\t\t}
\t\t}
\t}

\taddGeneratedCode(generatedCode) {
\t\tthis.generatedCode += generatedCode;
\t}

\tmapGeneratedCode(fn) {
\t\tconst generatedCode = fn(this.generatedCode);
\t\treturn new CodeNode(generatedCode);
\t}

\tgetNormalizedNodes() {
\t\treturn [this];
\t}

\tmerge(otherNode) {
\t\tif(otherNode instanceof CodeNode) {
\t\t\tthis.generatedCode += otherNode.generatedCode;
\t\t\treturn this;
\t\t}
\t\treturn false;
\t}
}

module.exports = CodeNode;
", "node_modules/source-list-map/lib/CodeNode.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/source-list-map/lib/CodeNode.js");
    }
}
