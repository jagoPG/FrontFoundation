<?php

/* node_modules/webpack/lib/dependencies/AMDRequireDependency.js */
class __TwigTemplate_760f4845488a86e07e5b26a28561a8e878e9624a9aef0072cdc5d1816561db36 extends Twig_Template
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
        $__internal_8a6cf4d52cacbda1e94591698cefc305404efdc37d6e96ec9326b2dfbe7fa386 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8a6cf4d52cacbda1e94591698cefc305404efdc37d6e96ec9326b2dfbe7fa386->enter($__internal_8a6cf4d52cacbda1e94591698cefc305404efdc37d6e96ec9326b2dfbe7fa386_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/webpack/lib/dependencies/AMDRequireDependency.js"));

        // line 1
        echo "/*
\tMIT License http://www.opensource.org/licenses/mit-license.php
\tAuthor Tobias Koppers @sokra
*/
\"use strict\";
const NullDependency = require(\"./NullDependency\");
const DepBlockHelpers = require(\"./DepBlockHelpers\");

class AMDRequireDependency extends NullDependency {
\tconstructor(block) {
\t\tsuper();
\t\tthis.block = block;
\t}
}

AMDRequireDependency.Template = class AMDRequireDependencyTemplate {
\tapply(dep, source, outputOptions, requestShortener) {
\t\tconst depBlock = dep.block;
\t\tconst wrapper = DepBlockHelpers.getLoadDepBlockWrapper(depBlock, outputOptions, requestShortener, \"require\");

\t\t// has array range but no function range
\t\tif(depBlock.arrayRange && !depBlock.functionRange) {
\t\t\tconst startBlock = wrapper[0] + \"function() {\";
\t\t\tconst endBlock = `;}\${wrapper[1]}__webpack_require__.oe\${wrapper[2]}`;
\t\t\tsource.replace(depBlock.outerRange[0], depBlock.arrayRange[0] - 1, startBlock);
\t\t\tsource.replace(depBlock.arrayRange[1], depBlock.outerRange[1] - 1, endBlock);
\t\t\treturn;
\t\t}

\t\t// has function range but no array range
\t\tif(depBlock.functionRange && !depBlock.arrayRange) {
\t\t\tconst startBlock = wrapper[0] + \"function() {(\";
\t\t\tconst endBlock = `.call(exports, __webpack_require__, exports, module));}\${wrapper[1]}__webpack_require__.oe\${wrapper[2]}`;
\t\t\tsource.replace(depBlock.outerRange[0], depBlock.functionRange[0] - 1, startBlock);
\t\t\tsource.replace(depBlock.functionRange[1], depBlock.outerRange[1] - 1, endBlock);
\t\t\treturn;
\t\t}

\t\t// has array range, function range, and errorCallbackRange
\t\tif(depBlock.arrayRange && depBlock.functionRange && depBlock.errorCallbackRange) {
\t\t\tconst startBlock = wrapper[0] + \"function() { \";
\t\t\tconst errorRangeBlock = `}\${depBlock.functionBindThis ? \".bind(this)\" : \"\"}\${wrapper[1]}`;
\t\t\tconst endBlock = `\${depBlock.errorCallbackBindThis ? \".bind(this)\" : \"\"}\${wrapper[2]}`;

\t\t\tsource.replace(depBlock.outerRange[0], depBlock.arrayRange[0] - 1, startBlock);
\t\t\tsource.insert(depBlock.arrayRange[0] + 0.9, \"var __WEBPACK_AMD_REQUIRE_ARRAY__ = \");
\t\t\tsource.replace(depBlock.arrayRange[1], depBlock.functionRange[0] - 1, \"; (\");
\t\t\tsource.insert(depBlock.functionRange[1], \".apply(null, __WEBPACK_AMD_REQUIRE_ARRAY__));\");
\t\t\tsource.replace(depBlock.functionRange[1], depBlock.errorCallbackRange[0] - 1, errorRangeBlock);
\t\t\tsource.replace(depBlock.errorCallbackRange[1], depBlock.outerRange[1] - 1, endBlock);
\t\t\treturn;
\t\t}

\t\t// has array range, function range, but no errorCallbackRange
\t\tif(depBlock.arrayRange && depBlock.functionRange) {
\t\t\tconst startBlock = wrapper[0] + \"function() { \";
\t\t\tconst endBlock = `}\${depBlock.functionBindThis ? \".bind(this)\" : \"\"}\${wrapper[1]}__webpack_require__.oe\${wrapper[2]}`;
\t\t\tsource.replace(depBlock.outerRange[0], depBlock.arrayRange[0] - 1, startBlock);
\t\t\tsource.insert(depBlock.arrayRange[0] + 0.9, \"var __WEBPACK_AMD_REQUIRE_ARRAY__ = \");
\t\t\tsource.replace(depBlock.arrayRange[1], depBlock.functionRange[0] - 1, \"; (\");
\t\t\tsource.insert(depBlock.functionRange[1], \".apply(null, __WEBPACK_AMD_REQUIRE_ARRAY__));\");
\t\t\tsource.replace(depBlock.functionRange[1], depBlock.outerRange[1] - 1, endBlock);
\t\t}
\t}
};

module.exports = AMDRequireDependency;
";
        
        $__internal_8a6cf4d52cacbda1e94591698cefc305404efdc37d6e96ec9326b2dfbe7fa386->leave($__internal_8a6cf4d52cacbda1e94591698cefc305404efdc37d6e96ec9326b2dfbe7fa386_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/webpack/lib/dependencies/AMDRequireDependency.js";
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
const DepBlockHelpers = require(\"./DepBlockHelpers\");

class AMDRequireDependency extends NullDependency {
\tconstructor(block) {
\t\tsuper();
\t\tthis.block = block;
\t}
}

AMDRequireDependency.Template = class AMDRequireDependencyTemplate {
\tapply(dep, source, outputOptions, requestShortener) {
\t\tconst depBlock = dep.block;
\t\tconst wrapper = DepBlockHelpers.getLoadDepBlockWrapper(depBlock, outputOptions, requestShortener, \"require\");

\t\t// has array range but no function range
\t\tif(depBlock.arrayRange && !depBlock.functionRange) {
\t\t\tconst startBlock = wrapper[0] + \"function() {\";
\t\t\tconst endBlock = `;}\${wrapper[1]}__webpack_require__.oe\${wrapper[2]}`;
\t\t\tsource.replace(depBlock.outerRange[0], depBlock.arrayRange[0] - 1, startBlock);
\t\t\tsource.replace(depBlock.arrayRange[1], depBlock.outerRange[1] - 1, endBlock);
\t\t\treturn;
\t\t}

\t\t// has function range but no array range
\t\tif(depBlock.functionRange && !depBlock.arrayRange) {
\t\t\tconst startBlock = wrapper[0] + \"function() {(\";
\t\t\tconst endBlock = `.call(exports, __webpack_require__, exports, module));}\${wrapper[1]}__webpack_require__.oe\${wrapper[2]}`;
\t\t\tsource.replace(depBlock.outerRange[0], depBlock.functionRange[0] - 1, startBlock);
\t\t\tsource.replace(depBlock.functionRange[1], depBlock.outerRange[1] - 1, endBlock);
\t\t\treturn;
\t\t}

\t\t// has array range, function range, and errorCallbackRange
\t\tif(depBlock.arrayRange && depBlock.functionRange && depBlock.errorCallbackRange) {
\t\t\tconst startBlock = wrapper[0] + \"function() { \";
\t\t\tconst errorRangeBlock = `}\${depBlock.functionBindThis ? \".bind(this)\" : \"\"}\${wrapper[1]}`;
\t\t\tconst endBlock = `\${depBlock.errorCallbackBindThis ? \".bind(this)\" : \"\"}\${wrapper[2]}`;

\t\t\tsource.replace(depBlock.outerRange[0], depBlock.arrayRange[0] - 1, startBlock);
\t\t\tsource.insert(depBlock.arrayRange[0] + 0.9, \"var __WEBPACK_AMD_REQUIRE_ARRAY__ = \");
\t\t\tsource.replace(depBlock.arrayRange[1], depBlock.functionRange[0] - 1, \"; (\");
\t\t\tsource.insert(depBlock.functionRange[1], \".apply(null, __WEBPACK_AMD_REQUIRE_ARRAY__));\");
\t\t\tsource.replace(depBlock.functionRange[1], depBlock.errorCallbackRange[0] - 1, errorRangeBlock);
\t\t\tsource.replace(depBlock.errorCallbackRange[1], depBlock.outerRange[1] - 1, endBlock);
\t\t\treturn;
\t\t}

\t\t// has array range, function range, but no errorCallbackRange
\t\tif(depBlock.arrayRange && depBlock.functionRange) {
\t\t\tconst startBlock = wrapper[0] + \"function() { \";
\t\t\tconst endBlock = `}\${depBlock.functionBindThis ? \".bind(this)\" : \"\"}\${wrapper[1]}__webpack_require__.oe\${wrapper[2]}`;
\t\t\tsource.replace(depBlock.outerRange[0], depBlock.arrayRange[0] - 1, startBlock);
\t\t\tsource.insert(depBlock.arrayRange[0] + 0.9, \"var __WEBPACK_AMD_REQUIRE_ARRAY__ = \");
\t\t\tsource.replace(depBlock.arrayRange[1], depBlock.functionRange[0] - 1, \"; (\");
\t\t\tsource.insert(depBlock.functionRange[1], \".apply(null, __WEBPACK_AMD_REQUIRE_ARRAY__));\");
\t\t\tsource.replace(depBlock.functionRange[1], depBlock.outerRange[1] - 1, endBlock);
\t\t}
\t}
};

module.exports = AMDRequireDependency;
", "node_modules/webpack/lib/dependencies/AMDRequireDependency.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/webpack/lib/dependencies/AMDRequireDependency.js");
    }
}
