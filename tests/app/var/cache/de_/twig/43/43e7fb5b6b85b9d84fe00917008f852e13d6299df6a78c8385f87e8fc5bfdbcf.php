<?php

/* node_modules/webpack/lib/DelegatedModule.js */
class __TwigTemplate_e9072b32ee1f97d504265c3edcfe13da90040688a993f9ad92a6af4522c268f5 extends Twig_Template
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
        $__internal_19de3c95b2f237b6a48919540adf9f70723a3eda424834bf194c85493eb83e86 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_19de3c95b2f237b6a48919540adf9f70723a3eda424834bf194c85493eb83e86->enter($__internal_19de3c95b2f237b6a48919540adf9f70723a3eda424834bf194c85493eb83e86_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/webpack/lib/DelegatedModule.js"));

        // line 1
        echo "/*
\tMIT License http://www.opensource.org/licenses/mit-license.php
\tAuthor Tobias Koppers @sokra
*/
\"use strict\";

const Module = require(\"./Module\");
const OriginalSource = require(\"webpack-sources\").OriginalSource;
const RawSource = require(\"webpack-sources\").RawSource;
const WebpackMissingModule = require(\"./dependencies/WebpackMissingModule\");
const DelegatedSourceDependency = require(\"./dependencies/DelegatedSourceDependency\");
const DelegatedExportsDependency = require(\"./dependencies/DelegatedExportsDependency\");

class DelegatedModule extends Module {
\tconstructor(sourceRequest, data, type, userRequest, originalRequest) {
\t\tsuper();
\t\tthis.sourceRequest = sourceRequest;
\t\tthis.request = data.id;
\t\tthis.meta = data.meta;
\t\tthis.type = type;
\t\tthis.originalRequest = originalRequest;
\t\tthis.userRequest = userRequest;
\t\tthis.built = false;
\t\tthis.delegated = true;
\t\tthis.delegateData = data;
\t}

\tlibIdent(options) {
\t\treturn typeof this.originalRequest === \"string\" ? this.originalRequest : this.originalRequest.libIdent(options);
\t}

\tidentifier() {
\t\treturn `delegated \${JSON.stringify(this.request)} from \${this.sourceRequest}`;
\t}

\treadableIdentifier() {
\t\treturn `delegated \${this.userRequest} from \${this.sourceRequest}`;
\t}

\tneedRebuild() {
\t\treturn false;
\t}

\tbuild(options, compilation, resolver, fs, callback) {
\t\tthis.built = true;
\t\tthis.builtTime = Date.now();
\t\tthis.cacheable = true;
\t\tthis.dependencies.length = 0;
\t\tthis.addDependency(new DelegatedSourceDependency(this.sourceRequest));
\t\tthis.addDependency(new DelegatedExportsDependency(this, this.delegateData.exports || true));
\t\tcallback();
\t}

\tunbuild() {
\t\tthis.built = false;
\t\tsuper.unbuild();
\t}

\tsource() {
\t\tconst sourceModule = this.dependencies[0].module;
\t\tlet str;

\t\tif(!sourceModule) {
\t\t\tstr = WebpackMissingModule.moduleCode(this.sourceRequest);
\t\t} else {
\t\t\tstr = `module.exports = (__webpack_require__(\${JSON.stringify(sourceModule.id)}))`;

\t\t\tswitch(this.type) {
\t\t\t\tcase \"require\":
\t\t\t\t\tstr += `(\${JSON.stringify(this.request)})`;
\t\t\t\t\tbreak;
\t\t\t\tcase \"object\":
\t\t\t\t\tstr += `[\${JSON.stringify(this.request)}]`;
\t\t\t\t\tbreak;
\t\t\t}

\t\t\tstr += \";\";
\t\t}

\t\tif(this.useSourceMap) {
\t\t\treturn new OriginalSource(str, this.identifier());
\t\t} else {
\t\t\treturn new RawSource(str);
\t\t}
\t}

\tsize() {
\t\treturn 42;
\t}
}

module.exports = DelegatedModule;
";
        
        $__internal_19de3c95b2f237b6a48919540adf9f70723a3eda424834bf194c85493eb83e86->leave($__internal_19de3c95b2f237b6a48919540adf9f70723a3eda424834bf194c85493eb83e86_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/webpack/lib/DelegatedModule.js";
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

const Module = require(\"./Module\");
const OriginalSource = require(\"webpack-sources\").OriginalSource;
const RawSource = require(\"webpack-sources\").RawSource;
const WebpackMissingModule = require(\"./dependencies/WebpackMissingModule\");
const DelegatedSourceDependency = require(\"./dependencies/DelegatedSourceDependency\");
const DelegatedExportsDependency = require(\"./dependencies/DelegatedExportsDependency\");

class DelegatedModule extends Module {
\tconstructor(sourceRequest, data, type, userRequest, originalRequest) {
\t\tsuper();
\t\tthis.sourceRequest = sourceRequest;
\t\tthis.request = data.id;
\t\tthis.meta = data.meta;
\t\tthis.type = type;
\t\tthis.originalRequest = originalRequest;
\t\tthis.userRequest = userRequest;
\t\tthis.built = false;
\t\tthis.delegated = true;
\t\tthis.delegateData = data;
\t}

\tlibIdent(options) {
\t\treturn typeof this.originalRequest === \"string\" ? this.originalRequest : this.originalRequest.libIdent(options);
\t}

\tidentifier() {
\t\treturn `delegated \${JSON.stringify(this.request)} from \${this.sourceRequest}`;
\t}

\treadableIdentifier() {
\t\treturn `delegated \${this.userRequest} from \${this.sourceRequest}`;
\t}

\tneedRebuild() {
\t\treturn false;
\t}

\tbuild(options, compilation, resolver, fs, callback) {
\t\tthis.built = true;
\t\tthis.builtTime = Date.now();
\t\tthis.cacheable = true;
\t\tthis.dependencies.length = 0;
\t\tthis.addDependency(new DelegatedSourceDependency(this.sourceRequest));
\t\tthis.addDependency(new DelegatedExportsDependency(this, this.delegateData.exports || true));
\t\tcallback();
\t}

\tunbuild() {
\t\tthis.built = false;
\t\tsuper.unbuild();
\t}

\tsource() {
\t\tconst sourceModule = this.dependencies[0].module;
\t\tlet str;

\t\tif(!sourceModule) {
\t\t\tstr = WebpackMissingModule.moduleCode(this.sourceRequest);
\t\t} else {
\t\t\tstr = `module.exports = (__webpack_require__(\${JSON.stringify(sourceModule.id)}))`;

\t\t\tswitch(this.type) {
\t\t\t\tcase \"require\":
\t\t\t\t\tstr += `(\${JSON.stringify(this.request)})`;
\t\t\t\t\tbreak;
\t\t\t\tcase \"object\":
\t\t\t\t\tstr += `[\${JSON.stringify(this.request)}]`;
\t\t\t\t\tbreak;
\t\t\t}

\t\t\tstr += \";\";
\t\t}

\t\tif(this.useSourceMap) {
\t\t\treturn new OriginalSource(str, this.identifier());
\t\t} else {
\t\t\treturn new RawSource(str);
\t\t}
\t}

\tsize() {
\t\treturn 42;
\t}
}

module.exports = DelegatedModule;
", "node_modules/webpack/lib/DelegatedModule.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/webpack/lib/DelegatedModule.js");
    }
}
