<?php

/* node_modules/webpack/lib/ChunkTemplate.js */
class __TwigTemplate_7632a9a243d8fc3efb88f31d185aff34158c9734e4ac1bd48e773d064eab36ca extends Twig_Template
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
        $__internal_304f48a00e6665eeadab947f53024f6eda1306bbce4b2472a0648768a6033ba8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_304f48a00e6665eeadab947f53024f6eda1306bbce4b2472a0648768a6033ba8->enter($__internal_304f48a00e6665eeadab947f53024f6eda1306bbce4b2472a0648768a6033ba8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/webpack/lib/ChunkTemplate.js"));

        // line 1
        echo "/*
\tMIT License http://www.opensource.org/licenses/mit-license.php
\tAuthor Tobias Koppers @sokra
*/
\"use strict\";

const ConcatSource = require(\"webpack-sources\").ConcatSource;
const Template = require(\"./Template\");

module.exports = class ChunkTemplate extends Template {
\tconstructor(outputOptions) {
\t\tsuper(outputOptions);
\t}

\trender(chunk, moduleTemplate, dependencyTemplates) {
\t\tconst moduleSources = this.renderChunkModules(chunk, moduleTemplate, dependencyTemplates);
\t\tconst core = this.applyPluginsWaterfall(\"modules\", moduleSources, chunk, moduleTemplate, dependencyTemplates);
\t\tlet source = this.applyPluginsWaterfall(\"render\", core, chunk, moduleTemplate, dependencyTemplates);
\t\tif(chunk.hasEntryModule()) {
\t\t\tsource = this.applyPluginsWaterfall(\"render-with-entry\", source, chunk);
\t\t}
\t\tchunk.rendered = true;
\t\treturn new ConcatSource(source, \";\");
\t}

\tupdateHash(hash) {
\t\thash.update(\"ChunkTemplate\");
\t\thash.update(\"2\");
\t\tthis.applyPlugins(\"hash\", hash);
\t}

\tupdateHashForChunk(hash, chunk) {
\t\tthis.updateHash(hash);
\t\tthis.applyPlugins(\"hash-for-chunk\", hash, chunk);
\t}
};
";
        
        $__internal_304f48a00e6665eeadab947f53024f6eda1306bbce4b2472a0648768a6033ba8->leave($__internal_304f48a00e6665eeadab947f53024f6eda1306bbce4b2472a0648768a6033ba8_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/webpack/lib/ChunkTemplate.js";
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

const ConcatSource = require(\"webpack-sources\").ConcatSource;
const Template = require(\"./Template\");

module.exports = class ChunkTemplate extends Template {
\tconstructor(outputOptions) {
\t\tsuper(outputOptions);
\t}

\trender(chunk, moduleTemplate, dependencyTemplates) {
\t\tconst moduleSources = this.renderChunkModules(chunk, moduleTemplate, dependencyTemplates);
\t\tconst core = this.applyPluginsWaterfall(\"modules\", moduleSources, chunk, moduleTemplate, dependencyTemplates);
\t\tlet source = this.applyPluginsWaterfall(\"render\", core, chunk, moduleTemplate, dependencyTemplates);
\t\tif(chunk.hasEntryModule()) {
\t\t\tsource = this.applyPluginsWaterfall(\"render-with-entry\", source, chunk);
\t\t}
\t\tchunk.rendered = true;
\t\treturn new ConcatSource(source, \";\");
\t}

\tupdateHash(hash) {
\t\thash.update(\"ChunkTemplate\");
\t\thash.update(\"2\");
\t\tthis.applyPlugins(\"hash\", hash);
\t}

\tupdateHashForChunk(hash, chunk) {
\t\tthis.updateHash(hash);
\t\tthis.applyPlugins(\"hash-for-chunk\", hash, chunk);
\t}
};
", "node_modules/webpack/lib/ChunkTemplate.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/webpack/lib/ChunkTemplate.js");
    }
}
