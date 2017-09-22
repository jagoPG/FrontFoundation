<?php

/* node_modules/webpack/lib/dependencies/AMDRequireArrayDependency.js */
class __TwigTemplate_3165d7cde44062923317b5051db3335ef3a39e3c41d9f697f1751238e1397282 extends Twig_Template
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
        $__internal_3b16989f9d3ce2c89f8a1be2dee7ad81a73da2c49dae992df9a5cc625dd3c63e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3b16989f9d3ce2c89f8a1be2dee7ad81a73da2c49dae992df9a5cc625dd3c63e->enter($__internal_3b16989f9d3ce2c89f8a1be2dee7ad81a73da2c49dae992df9a5cc625dd3c63e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/webpack/lib/dependencies/AMDRequireArrayDependency.js"));

        // line 1
        echo "/*
\tMIT License http://www.opensource.org/licenses/mit-license.php
\tAuthor Tobias Koppers @sokra
*/
\"use strict\";
const Dependency = require(\"../Dependency\");
const webpackMissingModuleModule = require(\"./WebpackMissingModule\").module;

class AMDRequireArrayDependency extends Dependency {
\tconstructor(depsArray, range) {
\t\tsuper();
\t\tthis.depsArray = depsArray;
\t\tthis.range = range;
\t}

\tget type() {
\t\treturn \"amd require array\";
\t}
}

AMDRequireArrayDependency.Template = class AMDRequireArrayDependencyTemplate {
\tapply(dep, source, outputOptions, requestShortener) {
\t\tconst content = this.getContent(dep, outputOptions, requestShortener);
\t\tsource.replace(dep.range[0], dep.range[1] - 1, content);
\t}

\tgetContent(dep, outputOptions, requestShortener) {
\t\tconst requires = dep.depsArray.map((dependency) => {
\t\t\tconst optionalComment = this.optionalComment(outputOptions.pathinfo, requestShortener.shorten(dependency.request));
\t\t\treturn this.contentForDependency(dependency, optionalComment);
\t\t});
\t\treturn `[\${requires.join(\", \")}]`;
\t}

\toptionalComment(pathInfo, shortenedRequest) {
\t\tif(!pathInfo) {
\t\t\treturn \"\";
\t\t}
\t\treturn `/*! \${shortenedRequest} */ `;
\t}

\tcontentForDependency(dep, comment) {
\t\tif(typeof dep === \"string\") {
\t\t\treturn dep;
\t\t}

\t\tif(dep.module) {
\t\t\tconst stringifiedId = JSON.stringify(dep.module.id);
\t\t\treturn `__webpack_require__(\${comment}\${stringifiedId})`;
\t\t}

\t\treturn webpackMissingModuleModule(dep.request);
\t}
};

module.exports = AMDRequireArrayDependency;
";
        
        $__internal_3b16989f9d3ce2c89f8a1be2dee7ad81a73da2c49dae992df9a5cc625dd3c63e->leave($__internal_3b16989f9d3ce2c89f8a1be2dee7ad81a73da2c49dae992df9a5cc625dd3c63e_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/webpack/lib/dependencies/AMDRequireArrayDependency.js";
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
const Dependency = require(\"../Dependency\");
const webpackMissingModuleModule = require(\"./WebpackMissingModule\").module;

class AMDRequireArrayDependency extends Dependency {
\tconstructor(depsArray, range) {
\t\tsuper();
\t\tthis.depsArray = depsArray;
\t\tthis.range = range;
\t}

\tget type() {
\t\treturn \"amd require array\";
\t}
}

AMDRequireArrayDependency.Template = class AMDRequireArrayDependencyTemplate {
\tapply(dep, source, outputOptions, requestShortener) {
\t\tconst content = this.getContent(dep, outputOptions, requestShortener);
\t\tsource.replace(dep.range[0], dep.range[1] - 1, content);
\t}

\tgetContent(dep, outputOptions, requestShortener) {
\t\tconst requires = dep.depsArray.map((dependency) => {
\t\t\tconst optionalComment = this.optionalComment(outputOptions.pathinfo, requestShortener.shorten(dependency.request));
\t\t\treturn this.contentForDependency(dependency, optionalComment);
\t\t});
\t\treturn `[\${requires.join(\", \")}]`;
\t}

\toptionalComment(pathInfo, shortenedRequest) {
\t\tif(!pathInfo) {
\t\t\treturn \"\";
\t\t}
\t\treturn `/*! \${shortenedRequest} */ `;
\t}

\tcontentForDependency(dep, comment) {
\t\tif(typeof dep === \"string\") {
\t\t\treturn dep;
\t\t}

\t\tif(dep.module) {
\t\t\tconst stringifiedId = JSON.stringify(dep.module.id);
\t\t\treturn `__webpack_require__(\${comment}\${stringifiedId})`;
\t\t}

\t\treturn webpackMissingModuleModule(dep.request);
\t}
};

module.exports = AMDRequireArrayDependency;
", "node_modules/webpack/lib/dependencies/AMDRequireArrayDependency.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/webpack/lib/dependencies/AMDRequireArrayDependency.js");
    }
}
