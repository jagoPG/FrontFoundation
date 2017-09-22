<?php

/* node_modules/source-list-map/lib/MappingsContext.js */
class __TwigTemplate_5b31f3d290b80117f329fcda402252e309dd903f849dc1d314f056e6aa4f49f5 extends Twig_Template
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
        $__internal_d790295f04111e7529687f93b7f810bf5e4669bc21d4e4de5331bf0e0b9b8546 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d790295f04111e7529687f93b7f810bf5e4669bc21d4e4de5331bf0e0b9b8546->enter($__internal_d790295f04111e7529687f93b7f810bf5e4669bc21d4e4de5331bf0e0b9b8546_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/source-list-map/lib/MappingsContext.js"));

        // line 1
        echo "/*
\tMIT License http://www.opensource.org/licenses/mit-license.php
\tAuthor Tobias Koppers @sokra
*/
\"use strict\";

class MappingsContext {
\tconstructor() {
\t\tthis.sourcesIndices = new Map();
\t\tthis.sourcesContent = new Map();
\t\tthis.hasSourceContent = false;
\t\tthis.currentOriginalLine = 1;
\t\tthis.currentSource = 0;
\t\tthis.unfinishedGeneratedLine = false;
\t}

\tensureSource(source, originalSource) {
\t\tlet idx = this.sourcesIndices.get(source);
\t\tif(typeof idx === \"number\") {
\t\t\treturn idx;
\t\t}
\t\tidx = this.sourcesIndices.size;
\t\tthis.sourcesIndices.set(source, idx);
\t\tthis.sourcesContent.set(source, originalSource)
\t\tif(typeof originalSource === \"string\")
\t\t\tthis.hasSourceContent = true;
\t\treturn idx;
\t}

\tgetArrays() {
\t\tconst sources = [];
\t\tconst sourcesContent = [];

\t\tfor(const pair of this.sourcesContent) {
\t\t\tsources.push(pair[0]);
\t\t\tsourcesContent.push(pair[1]);
\t\t}

\t\treturn {
\t\t\tsources,
\t\t\tsourcesContent
\t\t};
\t}
}
module.exports = MappingsContext;
";
        
        $__internal_d790295f04111e7529687f93b7f810bf5e4669bc21d4e4de5331bf0e0b9b8546->leave($__internal_d790295f04111e7529687f93b7f810bf5e4669bc21d4e4de5331bf0e0b9b8546_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/source-list-map/lib/MappingsContext.js";
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

class MappingsContext {
\tconstructor() {
\t\tthis.sourcesIndices = new Map();
\t\tthis.sourcesContent = new Map();
\t\tthis.hasSourceContent = false;
\t\tthis.currentOriginalLine = 1;
\t\tthis.currentSource = 0;
\t\tthis.unfinishedGeneratedLine = false;
\t}

\tensureSource(source, originalSource) {
\t\tlet idx = this.sourcesIndices.get(source);
\t\tif(typeof idx === \"number\") {
\t\t\treturn idx;
\t\t}
\t\tidx = this.sourcesIndices.size;
\t\tthis.sourcesIndices.set(source, idx);
\t\tthis.sourcesContent.set(source, originalSource)
\t\tif(typeof originalSource === \"string\")
\t\t\tthis.hasSourceContent = true;
\t\treturn idx;
\t}

\tgetArrays() {
\t\tconst sources = [];
\t\tconst sourcesContent = [];

\t\tfor(const pair of this.sourcesContent) {
\t\t\tsources.push(pair[0]);
\t\t\tsourcesContent.push(pair[1]);
\t\t}

\t\treturn {
\t\t\tsources,
\t\t\tsourcesContent
\t\t};
\t}
}
module.exports = MappingsContext;
", "node_modules/source-list-map/lib/MappingsContext.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/source-list-map/lib/MappingsContext.js");
    }
}
