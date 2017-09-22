<?php

/* node_modules/webpack/lib/AmdMainTemplatePlugin.js */
class __TwigTemplate_9b59d974fd24a83289afc2b756b9ffe9c98a5da07c7ab38da9afc9c6abd4b906 extends Twig_Template
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
        $__internal_2b3712c281b79c49fd4e5d05ed95b834490065a41d03e9ef6b0f3c7be20c81d6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2b3712c281b79c49fd4e5d05ed95b834490065a41d03e9ef6b0f3c7be20c81d6->enter($__internal_2b3712c281b79c49fd4e5d05ed95b834490065a41d03e9ef6b0f3c7be20c81d6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/webpack/lib/AmdMainTemplatePlugin.js"));

        // line 1
        echo "/*
 MIT License http://www.opensource.org/licenses/mit-license.php
 Author Tobias Koppers @sokra
 */

\"use strict\";

const ConcatSource = require(\"webpack-sources\").ConcatSource;
const Template = require(\"./Template\");

class AmdMainTemplatePlugin {
\tconstructor(name) {
\t\tthis.name = name;
\t}

\tapply(compilation) {
\t\tconst mainTemplate = compilation.mainTemplate;

\t\tcompilation.templatesPlugin(\"render-with-entry\", (source, chunk, hash) => {
\t\t\tconst externals = chunk.getModules().filter((m) => m.external);
\t\t\tconst externalsDepsArray = JSON.stringify(externals.map((m) =>
\t\t\t\ttypeof m.request === \"object\" ? m.request.amd : m.request
\t\t\t));
\t\t\tconst externalsArguments = externals.map((m) =>
\t\t\t\tTemplate.toIdentifier(`__WEBPACK_EXTERNAL_MODULE_\${m.id}__`)
\t\t\t).join(\", \");

\t\t\tif(this.name) {
\t\t\t\tconst name = mainTemplate.applyPluginsWaterfall(\"asset-path\", this.name, {
\t\t\t\t\thash,
\t\t\t\t\tchunk
\t\t\t\t});

\t\t\t\treturn new ConcatSource(
\t\t\t\t\t`define(\${JSON.stringify(name)}, \${externalsDepsArray}, function(\${externalsArguments}) { return `, source, \"});\"
\t\t\t\t);
\t\t\t} else if(externalsArguments) {
\t\t\t\treturn new ConcatSource(`define(\${externalsDepsArray}, function(\${externalsArguments}) { return `, source, \"});\");
\t\t\t} else {
\t\t\t\treturn new ConcatSource(\"define(function() { return \", source, \"});\");
\t\t\t}
\t\t});

\t\tmainTemplate.plugin(\"global-hash-paths\", (paths) => {
\t\t\tif(this.name) paths.push(this.name);
\t\t\treturn paths;
\t\t});

\t\tmainTemplate.plugin(\"hash\", (hash) => {
\t\t\thash.update(\"exports amd\");
\t\t\thash.update(this.name);
\t\t});
\t}
}

module.exports = AmdMainTemplatePlugin;
";
        
        $__internal_2b3712c281b79c49fd4e5d05ed95b834490065a41d03e9ef6b0f3c7be20c81d6->leave($__internal_2b3712c281b79c49fd4e5d05ed95b834490065a41d03e9ef6b0f3c7be20c81d6_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/webpack/lib/AmdMainTemplatePlugin.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("/*
 MIT License http://www.opensource.org/licenses/mit-license.php
 Author Tobias Koppers @sokra
 */

\"use strict\";

const ConcatSource = require(\"webpack-sources\").ConcatSource;
const Template = require(\"./Template\");

class AmdMainTemplatePlugin {
\tconstructor(name) {
\t\tthis.name = name;
\t}

\tapply(compilation) {
\t\tconst mainTemplate = compilation.mainTemplate;

\t\tcompilation.templatesPlugin(\"render-with-entry\", (source, chunk, hash) => {
\t\t\tconst externals = chunk.getModules().filter((m) => m.external);
\t\t\tconst externalsDepsArray = JSON.stringify(externals.map((m) =>
\t\t\t\ttypeof m.request === \"object\" ? m.request.amd : m.request
\t\t\t));
\t\t\tconst externalsArguments = externals.map((m) =>
\t\t\t\tTemplate.toIdentifier(`__WEBPACK_EXTERNAL_MODULE_\${m.id}__`)
\t\t\t).join(\", \");

\t\t\tif(this.name) {
\t\t\t\tconst name = mainTemplate.applyPluginsWaterfall(\"asset-path\", this.name, {
\t\t\t\t\thash,
\t\t\t\t\tchunk
\t\t\t\t});

\t\t\t\treturn new ConcatSource(
\t\t\t\t\t`define(\${JSON.stringify(name)}, \${externalsDepsArray}, function(\${externalsArguments}) { return `, source, \"});\"
\t\t\t\t);
\t\t\t} else if(externalsArguments) {
\t\t\t\treturn new ConcatSource(`define(\${externalsDepsArray}, function(\${externalsArguments}) { return `, source, \"});\");
\t\t\t} else {
\t\t\t\treturn new ConcatSource(\"define(function() { return \", source, \"});\");
\t\t\t}
\t\t});

\t\tmainTemplate.plugin(\"global-hash-paths\", (paths) => {
\t\t\tif(this.name) paths.push(this.name);
\t\t\treturn paths;
\t\t});

\t\tmainTemplate.plugin(\"hash\", (hash) => {
\t\t\thash.update(\"exports amd\");
\t\t\thash.update(this.name);
\t\t});
\t}
}

module.exports = AmdMainTemplatePlugin;
", "node_modules/webpack/lib/AmdMainTemplatePlugin.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/webpack/lib/AmdMainTemplatePlugin.js");
    }
}
