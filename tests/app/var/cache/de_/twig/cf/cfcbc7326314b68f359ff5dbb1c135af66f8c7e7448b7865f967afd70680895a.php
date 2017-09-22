<?php

/* node_modules/webpack/lib/APIPlugin.js */
class __TwigTemplate_25c6cd1d20f107248c3a0294df56dd389273babb77b26b70e02d06a2b4c82130 extends Twig_Template
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
        $__internal_177ca04038736e5ad22cdef69bf778355512f454326e36887c9328a08c0d1bf4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_177ca04038736e5ad22cdef69bf778355512f454326e36887c9328a08c0d1bf4->enter($__internal_177ca04038736e5ad22cdef69bf778355512f454326e36887c9328a08c0d1bf4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/webpack/lib/APIPlugin.js"));

        // line 1
        echo "/*
\tMIT License http://www.opensource.org/licenses/mit-license.php
\tAuthor Tobias Koppers @sokra
*/
\"use strict\";

const ConstDependency = require(\"./dependencies/ConstDependency\");
const ParserHelpers = require(\"./ParserHelpers\");

const NullFactory = require(\"./NullFactory\");

const REPLACEMENTS = {
\t__webpack_require__: \"__webpack_require__\", // eslint-disable-line camelcase
\t__webpack_public_path__: \"__webpack_require__.p\", // eslint-disable-line camelcase
\t__webpack_modules__: \"__webpack_require__.m\", // eslint-disable-line camelcase
\t__webpack_chunk_load__: \"__webpack_require__.e\", // eslint-disable-line camelcase
\t__non_webpack_require__: \"require\", // eslint-disable-line camelcase
\t__webpack_nonce__: \"__webpack_require__.nc\", // eslint-disable-line camelcase
\t\"require.onError\": \"__webpack_require__.oe\" // eslint-disable-line camelcase
};
const REPLACEMENT_TYPES = {
\t__webpack_public_path__: \"string\", // eslint-disable-line camelcase
\t__webpack_require__: \"function\", // eslint-disable-line camelcase
\t__webpack_modules__: \"object\", // eslint-disable-line camelcase
\t__webpack_chunk_load__: \"function\", // eslint-disable-line camelcase
\t__webpack_nonce__: \"string\" // eslint-disable-line camelcase
};

class APIPlugin {
\tapply(compiler) {
\t\tcompiler.plugin(\"compilation\", (compilation, params) => {
\t\t\tcompilation.dependencyFactories.set(ConstDependency, new NullFactory());
\t\t\tcompilation.dependencyTemplates.set(ConstDependency, new ConstDependency.Template());

\t\t\tparams.normalModuleFactory.plugin(\"parser\", parser => {
\t\t\t\tObject.keys(REPLACEMENTS).forEach(key => {
\t\t\t\t\tparser.plugin(`expression \${key}`, ParserHelpers.toConstantDependency(REPLACEMENTS[key]));
\t\t\t\t\tparser.plugin(`evaluate typeof \${key}`, ParserHelpers.evaluateToString(REPLACEMENT_TYPES[key]));
\t\t\t\t});
\t\t\t});
\t\t});
\t}
}

module.exports = APIPlugin;
";
        
        $__internal_177ca04038736e5ad22cdef69bf778355512f454326e36887c9328a08c0d1bf4->leave($__internal_177ca04038736e5ad22cdef69bf778355512f454326e36887c9328a08c0d1bf4_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/webpack/lib/APIPlugin.js";
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

const ConstDependency = require(\"./dependencies/ConstDependency\");
const ParserHelpers = require(\"./ParserHelpers\");

const NullFactory = require(\"./NullFactory\");

const REPLACEMENTS = {
\t__webpack_require__: \"__webpack_require__\", // eslint-disable-line camelcase
\t__webpack_public_path__: \"__webpack_require__.p\", // eslint-disable-line camelcase
\t__webpack_modules__: \"__webpack_require__.m\", // eslint-disable-line camelcase
\t__webpack_chunk_load__: \"__webpack_require__.e\", // eslint-disable-line camelcase
\t__non_webpack_require__: \"require\", // eslint-disable-line camelcase
\t__webpack_nonce__: \"__webpack_require__.nc\", // eslint-disable-line camelcase
\t\"require.onError\": \"__webpack_require__.oe\" // eslint-disable-line camelcase
};
const REPLACEMENT_TYPES = {
\t__webpack_public_path__: \"string\", // eslint-disable-line camelcase
\t__webpack_require__: \"function\", // eslint-disable-line camelcase
\t__webpack_modules__: \"object\", // eslint-disable-line camelcase
\t__webpack_chunk_load__: \"function\", // eslint-disable-line camelcase
\t__webpack_nonce__: \"string\" // eslint-disable-line camelcase
};

class APIPlugin {
\tapply(compiler) {
\t\tcompiler.plugin(\"compilation\", (compilation, params) => {
\t\t\tcompilation.dependencyFactories.set(ConstDependency, new NullFactory());
\t\t\tcompilation.dependencyTemplates.set(ConstDependency, new ConstDependency.Template());

\t\t\tparams.normalModuleFactory.plugin(\"parser\", parser => {
\t\t\t\tObject.keys(REPLACEMENTS).forEach(key => {
\t\t\t\t\tparser.plugin(`expression \${key}`, ParserHelpers.toConstantDependency(REPLACEMENTS[key]));
\t\t\t\t\tparser.plugin(`evaluate typeof \${key}`, ParserHelpers.evaluateToString(REPLACEMENT_TYPES[key]));
\t\t\t\t});
\t\t\t});
\t\t});
\t}
}

module.exports = APIPlugin;
", "node_modules/webpack/lib/APIPlugin.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/webpack/lib/APIPlugin.js");
    }
}
