<?php

/* node_modules/webpack/lib/BannerPlugin.js */
class __TwigTemplate_0e5428c1ddf4a30753a59b4038d85333b90670aa214b62820b057a2b9785bf88 extends Twig_Template
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
        $__internal_624287b02edd6d9d530cfbac9537f94280d7d4b704dc63bf515c9fc9955bf5f5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_624287b02edd6d9d530cfbac9537f94280d7d4b704dc63bf515c9fc9955bf5f5->enter($__internal_624287b02edd6d9d530cfbac9537f94280d7d4b704dc63bf515c9fc9955bf5f5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/webpack/lib/BannerPlugin.js"));

        // line 1
        echo "/*
 MIT License http://www.opensource.org/licenses/mit-license.php
 Author Tobias Koppers @sokra
 */

\"use strict\";

const ConcatSource = require(\"webpack-sources\").ConcatSource;
const ModuleFilenameHelpers = require(\"./ModuleFilenameHelpers\");

const wrapComment = (str) => {
\tif(!str.includes(\"\\n\")) return `/*! \${str} */`;
\treturn `/*!\\n * \${str.split(\"\\n\").join(\"\\n * \")}\\n */`;
};

class BannerPlugin {
\tconstructor(options) {
\t\tif(arguments.length > 1)
\t\t\tthrow new Error(\"BannerPlugin only takes one argument (pass an options object)\");
\t\tif(typeof options === \"string\")
\t\t\toptions = {
\t\t\t\tbanner: options
\t\t\t};
\t\tthis.options = options || {};
\t\tthis.banner = this.options.raw ? options.banner : wrapComment(options.banner);
\t}

\tapply(compiler) {
\t\tconst options = this.options;
\t\tconst banner = this.banner;

\t\tcompiler.plugin(\"compilation\", (compilation) => {
\t\t\tcompilation.plugin(\"optimize-chunk-assets\", (chunks, callback) => {
\t\t\t\tchunks.forEach((chunk) => {
\t\t\t\t\tif(options.entryOnly && !chunk.isInitial()) return;
\t\t\t\t\tchunk.files
\t\t\t\t\t\t.filter(ModuleFilenameHelpers.matchObject.bind(undefined, options))
\t\t\t\t\t\t.forEach((file) => {
\t\t\t\t\t\t\tlet basename;
\t\t\t\t\t\t\tlet query = \"\";
\t\t\t\t\t\t\tlet filename = file;
\t\t\t\t\t\t\tconst hash = compilation.hash;
\t\t\t\t\t\t\tconst querySplit = filename.indexOf(\"?\");

\t\t\t\t\t\t\tif(querySplit >= 0) {
\t\t\t\t\t\t\t\tquery = filename.substr(querySplit);
\t\t\t\t\t\t\t\tfilename = filename.substr(0, querySplit);
\t\t\t\t\t\t\t}

\t\t\t\t\t\t\tif(filename.indexOf(\"/\") < 0) {
\t\t\t\t\t\t\t\tbasename = filename;
\t\t\t\t\t\t\t} else {
\t\t\t\t\t\t\t\tbasename = filename.substr(filename.lastIndexOf(\"/\") + 1);
\t\t\t\t\t\t\t}

\t\t\t\t\t\t\tconst comment = compilation.getPath(banner, {
\t\t\t\t\t\t\t\thash,
\t\t\t\t\t\t\t\tchunk,
\t\t\t\t\t\t\t\tfilename,
\t\t\t\t\t\t\t\tbasename,
\t\t\t\t\t\t\t\tquery,
\t\t\t\t\t\t\t});

\t\t\t\t\t\t\treturn compilation.assets[file] = new ConcatSource(comment, \"\\n\", compilation.assets[file]);
\t\t\t\t\t\t});
\t\t\t\t});
\t\t\t\tcallback();
\t\t\t});
\t\t});
\t}
}

module.exports = BannerPlugin;
";
        
        $__internal_624287b02edd6d9d530cfbac9537f94280d7d4b704dc63bf515c9fc9955bf5f5->leave($__internal_624287b02edd6d9d530cfbac9537f94280d7d4b704dc63bf515c9fc9955bf5f5_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/webpack/lib/BannerPlugin.js";
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
const ModuleFilenameHelpers = require(\"./ModuleFilenameHelpers\");

const wrapComment = (str) => {
\tif(!str.includes(\"\\n\")) return `/*! \${str} */`;
\treturn `/*!\\n * \${str.split(\"\\n\").join(\"\\n * \")}\\n */`;
};

class BannerPlugin {
\tconstructor(options) {
\t\tif(arguments.length > 1)
\t\t\tthrow new Error(\"BannerPlugin only takes one argument (pass an options object)\");
\t\tif(typeof options === \"string\")
\t\t\toptions = {
\t\t\t\tbanner: options
\t\t\t};
\t\tthis.options = options || {};
\t\tthis.banner = this.options.raw ? options.banner : wrapComment(options.banner);
\t}

\tapply(compiler) {
\t\tconst options = this.options;
\t\tconst banner = this.banner;

\t\tcompiler.plugin(\"compilation\", (compilation) => {
\t\t\tcompilation.plugin(\"optimize-chunk-assets\", (chunks, callback) => {
\t\t\t\tchunks.forEach((chunk) => {
\t\t\t\t\tif(options.entryOnly && !chunk.isInitial()) return;
\t\t\t\t\tchunk.files
\t\t\t\t\t\t.filter(ModuleFilenameHelpers.matchObject.bind(undefined, options))
\t\t\t\t\t\t.forEach((file) => {
\t\t\t\t\t\t\tlet basename;
\t\t\t\t\t\t\tlet query = \"\";
\t\t\t\t\t\t\tlet filename = file;
\t\t\t\t\t\t\tconst hash = compilation.hash;
\t\t\t\t\t\t\tconst querySplit = filename.indexOf(\"?\");

\t\t\t\t\t\t\tif(querySplit >= 0) {
\t\t\t\t\t\t\t\tquery = filename.substr(querySplit);
\t\t\t\t\t\t\t\tfilename = filename.substr(0, querySplit);
\t\t\t\t\t\t\t}

\t\t\t\t\t\t\tif(filename.indexOf(\"/\") < 0) {
\t\t\t\t\t\t\t\tbasename = filename;
\t\t\t\t\t\t\t} else {
\t\t\t\t\t\t\t\tbasename = filename.substr(filename.lastIndexOf(\"/\") + 1);
\t\t\t\t\t\t\t}

\t\t\t\t\t\t\tconst comment = compilation.getPath(banner, {
\t\t\t\t\t\t\t\thash,
\t\t\t\t\t\t\t\tchunk,
\t\t\t\t\t\t\t\tfilename,
\t\t\t\t\t\t\t\tbasename,
\t\t\t\t\t\t\t\tquery,
\t\t\t\t\t\t\t});

\t\t\t\t\t\t\treturn compilation.assets[file] = new ConcatSource(comment, \"\\n\", compilation.assets[file]);
\t\t\t\t\t\t});
\t\t\t\t});
\t\t\t\tcallback();
\t\t\t});
\t\t});
\t}
}

module.exports = BannerPlugin;
", "node_modules/webpack/lib/BannerPlugin.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/webpack/lib/BannerPlugin.js");
    }
}
