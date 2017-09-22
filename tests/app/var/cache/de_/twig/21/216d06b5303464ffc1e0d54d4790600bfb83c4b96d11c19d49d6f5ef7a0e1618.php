<?php

/* node_modules/webpack/lib/dependencies/AMDDefineDependency.js */
class __TwigTemplate_47e88361e160667928380f79b168723c041bb6254d33c6d5506fc69028896388 extends Twig_Template
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
        $__internal_eac5214b17098bae02e3fe1dfd0a9950fb66202af7fdb8a9e8717e746aa85606 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_eac5214b17098bae02e3fe1dfd0a9950fb66202af7fdb8a9e8717e746aa85606->enter($__internal_eac5214b17098bae02e3fe1dfd0a9950fb66202af7fdb8a9e8717e746aa85606_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/webpack/lib/dependencies/AMDDefineDependency.js"));

        // line 1
        echo "/*
\tMIT License http://www.opensource.org/licenses/mit-license.php
\tAuthor Tobias Koppers @sokra
*/
\"use strict\";
const NullDependency = require(\"./NullDependency\");

class AMDDefineDependency extends NullDependency {
\tconstructor(range, arrayRange, functionRange, objectRange, namedModule) {
\t\tsuper();
\t\tthis.range = range;
\t\tthis.arrayRange = arrayRange;
\t\tthis.functionRange = functionRange;
\t\tthis.objectRange = objectRange;
\t\tthis.namedModule = namedModule;
\t}

\tget type() {
\t\treturn \"amd define\";
\t}
}

AMDDefineDependency.Template = class AMDDefineDependencyTemplate {
\tget definitions() {
\t\treturn {
\t\t\tf: [
\t\t\t\t\"var __WEBPACK_AMD_DEFINE_RESULT__;\",
\t\t\t\t`!(__WEBPACK_AMD_DEFINE_RESULT__ = #.call(exports, __webpack_require__, exports, module),
\t\t\t\t__WEBPACK_AMD_DEFINE_RESULT__ !== undefined && (module.exports = __WEBPACK_AMD_DEFINE_RESULT__))`
\t\t\t],
\t\t\to: [
\t\t\t\t\"\",
\t\t\t\t\"!(module.exports = #)\"
\t\t\t],
\t\t\tof: [
\t\t\t\t\"var __WEBPACK_AMD_DEFINE_FACTORY__, __WEBPACK_AMD_DEFINE_RESULT__;\",
\t\t\t\t`!(__WEBPACK_AMD_DEFINE_FACTORY__ = (#),
\t\t\t\t__WEBPACK_AMD_DEFINE_RESULT__ = (typeof __WEBPACK_AMD_DEFINE_FACTORY__ === 'function' ?
\t\t\t\t(__WEBPACK_AMD_DEFINE_FACTORY__.call(exports, __webpack_require__, exports, module)) :
\t\t\t\t__WEBPACK_AMD_DEFINE_FACTORY__),
\t\t\t\t__WEBPACK_AMD_DEFINE_RESULT__ !== undefined && (module.exports = __WEBPACK_AMD_DEFINE_RESULT__))`
\t\t\t],
\t\t\taf: [
\t\t\t\t\"var __WEBPACK_AMD_DEFINE_ARRAY__, __WEBPACK_AMD_DEFINE_RESULT__;\",
\t\t\t\t`!(__WEBPACK_AMD_DEFINE_ARRAY__ = #, __WEBPACK_AMD_DEFINE_RESULT__ = #.apply(exports, __WEBPACK_AMD_DEFINE_ARRAY__),
\t\t\t\t__WEBPACK_AMD_DEFINE_RESULT__ !== undefined && (module.exports = __WEBPACK_AMD_DEFINE_RESULT__))`
\t\t\t],
\t\t\tao: [
\t\t\t\t\"\",
\t\t\t\t\"!(#, module.exports = #)\"
\t\t\t],
\t\t\taof: [
\t\t\t\t\"var __WEBPACK_AMD_DEFINE_FACTORY__, __WEBPACK_AMD_DEFINE_ARRAY__, __WEBPACK_AMD_DEFINE_RESULT__;\",
\t\t\t\t`!(__WEBPACK_AMD_DEFINE_ARRAY__ = #, __WEBPACK_AMD_DEFINE_FACTORY__ = (#),
\t\t\t\t__WEBPACK_AMD_DEFINE_RESULT__ = (typeof __WEBPACK_AMD_DEFINE_FACTORY__ === 'function' ?
\t\t\t\t(__WEBPACK_AMD_DEFINE_FACTORY__.apply(exports, __WEBPACK_AMD_DEFINE_ARRAY__)) : __WEBPACK_AMD_DEFINE_FACTORY__),
\t\t\t\t__WEBPACK_AMD_DEFINE_RESULT__ !== undefined && (module.exports = __WEBPACK_AMD_DEFINE_RESULT__))`
\t\t\t],
\t\t\tlf: [
\t\t\t\t\"var XXX, XXXmodule;\",
\t\t\t\t\"!(XXXmodule = { id: YYY, exports: {}, loaded: false }, XXX = #.call(XXXmodule.exports, __webpack_require__, XXXmodule.exports, XXXmodule), XXXmodule.loaded = true, XXX === undefined && (XXX = XXXmodule.exports))\"
\t\t\t],
\t\t\tlo: [
\t\t\t\t\"var XXX;\",
\t\t\t\t\"!(XXX = #)\"
\t\t\t],
\t\t\tlof: [
\t\t\t\t\"var XXX, XXXfactory, XXXmodule;\",
\t\t\t\t\"!(XXXfactory = (#), (XXXmodule = { id: YYY, exports: {}, loaded: false }), XXX = (typeof XXXfactory === 'function' ? (XXXfactory.call(XXXmodule.exports, __webpack_require__, XXXmodule.exports, XXXmodule)) : XXXfactory), (XXXmodule.loaded = true), XXX === undefined && (XXX = XXXmodule.exports))\"
\t\t\t],
\t\t\tlaf: [
\t\t\t\t\"var __WEBPACK_AMD_DEFINE_ARRAY__, XXX;\",
\t\t\t\t\"!(__WEBPACK_AMD_DEFINE_ARRAY__ = #, XXX = (#.apply(exports, __WEBPACK_AMD_DEFINE_ARRAY__)))\"
\t\t\t],
\t\t\tlao: [
\t\t\t\t\"var XXX;\",
\t\t\t\t\"!(#, XXX = #)\"
\t\t\t],
\t\t\tlaof: [
\t\t\t\t\"var __WEBPACK_AMD_DEFINE_ARRAY__, __WEBPACK_AMD_DEFINE_FACTORY__, XXX;\",
\t\t\t\t`!(__WEBPACK_AMD_DEFINE_ARRAY__ = #, __WEBPACK_AMD_DEFINE_FACTORY__ = (#),
\t\t\t\tXXX = (typeof __WEBPACK_AMD_DEFINE_FACTORY__ === 'function' ?
\t\t\t\t(__WEBPACK_AMD_DEFINE_FACTORY__.apply(exports, __WEBPACK_AMD_DEFINE_ARRAY__)) : __WEBPACK_AMD_DEFINE_FACTORY__))`
\t\t\t]
\t\t};
\t}

\tapply(dependency, source) {
\t\tconst branch = this.branch(dependency);
\t\tconst defAndText = this.definitions[branch];
\t\tconst definitions = defAndText[0];
\t\tconst text = defAndText[1];
\t\tthis.replace(dependency, source, definitions, text);
\t}

\tlocalModuleVar(dependency) {
\t\treturn dependency.localModule && dependency.localModule.used && dependency.localModule.variableName();
\t}

\tbranch(dependency) {
\t\tconst localModuleVar = this.localModuleVar(dependency) ? \"l\" : \"\";
\t\tconst arrayRange = dependency.arrayRange ? \"a\" : \"\";
\t\tconst objectRange = dependency.objectRange ? \"o\" : \"\";
\t\tconst functionRange = dependency.functionRange ? \"f\" : \"\";
\t\treturn localModuleVar + arrayRange + objectRange + functionRange;
\t}

\treplace(dependency, source, definition, text) {
\t\tconst localModuleVar = this.localModuleVar(dependency);
\t\tif(localModuleVar) {
\t\t\ttext = text.replace(/XXX/g, localModuleVar.replace(/\\\$/g, \"\$\$\$\$\"));
\t\t\tdefinition = definition.replace(/XXX/g, localModuleVar.replace(/\\\$/g, \"\$\$\$\$\"));
\t\t}

\t\tif(dependency.namedModule) {
\t\t\ttext = text.replace(/YYY/g, JSON.stringify(dependency.namedModule));
\t\t}

\t\tconst texts = text.split(\"#\");

\t\tif(definition) source.insert(0, definition);

\t\tlet current = dependency.range[0];
\t\tif(dependency.arrayRange) {
\t\t\tsource.replace(current, dependency.arrayRange[0] - 1, texts.shift());
\t\t\tcurrent = dependency.arrayRange[1];
\t\t}

\t\tif(dependency.objectRange) {
\t\t\tsource.replace(current, dependency.objectRange[0] - 1, texts.shift());
\t\t\tcurrent = dependency.objectRange[1];
\t\t} else if(dependency.functionRange) {
\t\t\tsource.replace(current, dependency.functionRange[0] - 1, texts.shift());
\t\t\tcurrent = dependency.functionRange[1];
\t\t}
\t\tsource.replace(current, dependency.range[1] - 1, texts.shift());
\t\tif(texts.length > 0)
\t\t\tthrow new Error(\"Implementation error\");
\t}
};

module.exports = AMDDefineDependency;
";
        
        $__internal_eac5214b17098bae02e3fe1dfd0a9950fb66202af7fdb8a9e8717e746aa85606->leave($__internal_eac5214b17098bae02e3fe1dfd0a9950fb66202af7fdb8a9e8717e746aa85606_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/webpack/lib/dependencies/AMDDefineDependency.js";
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
const NullDependency = require(\"./NullDependency\");

class AMDDefineDependency extends NullDependency {
\tconstructor(range, arrayRange, functionRange, objectRange, namedModule) {
\t\tsuper();
\t\tthis.range = range;
\t\tthis.arrayRange = arrayRange;
\t\tthis.functionRange = functionRange;
\t\tthis.objectRange = objectRange;
\t\tthis.namedModule = namedModule;
\t}

\tget type() {
\t\treturn \"amd define\";
\t}
}

AMDDefineDependency.Template = class AMDDefineDependencyTemplate {
\tget definitions() {
\t\treturn {
\t\t\tf: [
\t\t\t\t\"var __WEBPACK_AMD_DEFINE_RESULT__;\",
\t\t\t\t`!(__WEBPACK_AMD_DEFINE_RESULT__ = #.call(exports, __webpack_require__, exports, module),
\t\t\t\t__WEBPACK_AMD_DEFINE_RESULT__ !== undefined && (module.exports = __WEBPACK_AMD_DEFINE_RESULT__))`
\t\t\t],
\t\t\to: [
\t\t\t\t\"\",
\t\t\t\t\"!(module.exports = #)\"
\t\t\t],
\t\t\tof: [
\t\t\t\t\"var __WEBPACK_AMD_DEFINE_FACTORY__, __WEBPACK_AMD_DEFINE_RESULT__;\",
\t\t\t\t`!(__WEBPACK_AMD_DEFINE_FACTORY__ = (#),
\t\t\t\t__WEBPACK_AMD_DEFINE_RESULT__ = (typeof __WEBPACK_AMD_DEFINE_FACTORY__ === 'function' ?
\t\t\t\t(__WEBPACK_AMD_DEFINE_FACTORY__.call(exports, __webpack_require__, exports, module)) :
\t\t\t\t__WEBPACK_AMD_DEFINE_FACTORY__),
\t\t\t\t__WEBPACK_AMD_DEFINE_RESULT__ !== undefined && (module.exports = __WEBPACK_AMD_DEFINE_RESULT__))`
\t\t\t],
\t\t\taf: [
\t\t\t\t\"var __WEBPACK_AMD_DEFINE_ARRAY__, __WEBPACK_AMD_DEFINE_RESULT__;\",
\t\t\t\t`!(__WEBPACK_AMD_DEFINE_ARRAY__ = #, __WEBPACK_AMD_DEFINE_RESULT__ = #.apply(exports, __WEBPACK_AMD_DEFINE_ARRAY__),
\t\t\t\t__WEBPACK_AMD_DEFINE_RESULT__ !== undefined && (module.exports = __WEBPACK_AMD_DEFINE_RESULT__))`
\t\t\t],
\t\t\tao: [
\t\t\t\t\"\",
\t\t\t\t\"!(#, module.exports = #)\"
\t\t\t],
\t\t\taof: [
\t\t\t\t\"var __WEBPACK_AMD_DEFINE_FACTORY__, __WEBPACK_AMD_DEFINE_ARRAY__, __WEBPACK_AMD_DEFINE_RESULT__;\",
\t\t\t\t`!(__WEBPACK_AMD_DEFINE_ARRAY__ = #, __WEBPACK_AMD_DEFINE_FACTORY__ = (#),
\t\t\t\t__WEBPACK_AMD_DEFINE_RESULT__ = (typeof __WEBPACK_AMD_DEFINE_FACTORY__ === 'function' ?
\t\t\t\t(__WEBPACK_AMD_DEFINE_FACTORY__.apply(exports, __WEBPACK_AMD_DEFINE_ARRAY__)) : __WEBPACK_AMD_DEFINE_FACTORY__),
\t\t\t\t__WEBPACK_AMD_DEFINE_RESULT__ !== undefined && (module.exports = __WEBPACK_AMD_DEFINE_RESULT__))`
\t\t\t],
\t\t\tlf: [
\t\t\t\t\"var XXX, XXXmodule;\",
\t\t\t\t\"!(XXXmodule = { id: YYY, exports: {}, loaded: false }, XXX = #.call(XXXmodule.exports, __webpack_require__, XXXmodule.exports, XXXmodule), XXXmodule.loaded = true, XXX === undefined && (XXX = XXXmodule.exports))\"
\t\t\t],
\t\t\tlo: [
\t\t\t\t\"var XXX;\",
\t\t\t\t\"!(XXX = #)\"
\t\t\t],
\t\t\tlof: [
\t\t\t\t\"var XXX, XXXfactory, XXXmodule;\",
\t\t\t\t\"!(XXXfactory = (#), (XXXmodule = { id: YYY, exports: {}, loaded: false }), XXX = (typeof XXXfactory === 'function' ? (XXXfactory.call(XXXmodule.exports, __webpack_require__, XXXmodule.exports, XXXmodule)) : XXXfactory), (XXXmodule.loaded = true), XXX === undefined && (XXX = XXXmodule.exports))\"
\t\t\t],
\t\t\tlaf: [
\t\t\t\t\"var __WEBPACK_AMD_DEFINE_ARRAY__, XXX;\",
\t\t\t\t\"!(__WEBPACK_AMD_DEFINE_ARRAY__ = #, XXX = (#.apply(exports, __WEBPACK_AMD_DEFINE_ARRAY__)))\"
\t\t\t],
\t\t\tlao: [
\t\t\t\t\"var XXX;\",
\t\t\t\t\"!(#, XXX = #)\"
\t\t\t],
\t\t\tlaof: [
\t\t\t\t\"var __WEBPACK_AMD_DEFINE_ARRAY__, __WEBPACK_AMD_DEFINE_FACTORY__, XXX;\",
\t\t\t\t`!(__WEBPACK_AMD_DEFINE_ARRAY__ = #, __WEBPACK_AMD_DEFINE_FACTORY__ = (#),
\t\t\t\tXXX = (typeof __WEBPACK_AMD_DEFINE_FACTORY__ === 'function' ?
\t\t\t\t(__WEBPACK_AMD_DEFINE_FACTORY__.apply(exports, __WEBPACK_AMD_DEFINE_ARRAY__)) : __WEBPACK_AMD_DEFINE_FACTORY__))`
\t\t\t]
\t\t};
\t}

\tapply(dependency, source) {
\t\tconst branch = this.branch(dependency);
\t\tconst defAndText = this.definitions[branch];
\t\tconst definitions = defAndText[0];
\t\tconst text = defAndText[1];
\t\tthis.replace(dependency, source, definitions, text);
\t}

\tlocalModuleVar(dependency) {
\t\treturn dependency.localModule && dependency.localModule.used && dependency.localModule.variableName();
\t}

\tbranch(dependency) {
\t\tconst localModuleVar = this.localModuleVar(dependency) ? \"l\" : \"\";
\t\tconst arrayRange = dependency.arrayRange ? \"a\" : \"\";
\t\tconst objectRange = dependency.objectRange ? \"o\" : \"\";
\t\tconst functionRange = dependency.functionRange ? \"f\" : \"\";
\t\treturn localModuleVar + arrayRange + objectRange + functionRange;
\t}

\treplace(dependency, source, definition, text) {
\t\tconst localModuleVar = this.localModuleVar(dependency);
\t\tif(localModuleVar) {
\t\t\ttext = text.replace(/XXX/g, localModuleVar.replace(/\\\$/g, \"\$\$\$\$\"));
\t\t\tdefinition = definition.replace(/XXX/g, localModuleVar.replace(/\\\$/g, \"\$\$\$\$\"));
\t\t}

\t\tif(dependency.namedModule) {
\t\t\ttext = text.replace(/YYY/g, JSON.stringify(dependency.namedModule));
\t\t}

\t\tconst texts = text.split(\"#\");

\t\tif(definition) source.insert(0, definition);

\t\tlet current = dependency.range[0];
\t\tif(dependency.arrayRange) {
\t\t\tsource.replace(current, dependency.arrayRange[0] - 1, texts.shift());
\t\t\tcurrent = dependency.arrayRange[1];
\t\t}

\t\tif(dependency.objectRange) {
\t\t\tsource.replace(current, dependency.objectRange[0] - 1, texts.shift());
\t\t\tcurrent = dependency.objectRange[1];
\t\t} else if(dependency.functionRange) {
\t\t\tsource.replace(current, dependency.functionRange[0] - 1, texts.shift());
\t\t\tcurrent = dependency.functionRange[1];
\t\t}
\t\tsource.replace(current, dependency.range[1] - 1, texts.shift());
\t\tif(texts.length > 0)
\t\t\tthrow new Error(\"Implementation error\");
\t}
};

module.exports = AMDDefineDependency;
", "node_modules/webpack/lib/dependencies/AMDDefineDependency.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/webpack/lib/dependencies/AMDDefineDependency.js");
    }
}
