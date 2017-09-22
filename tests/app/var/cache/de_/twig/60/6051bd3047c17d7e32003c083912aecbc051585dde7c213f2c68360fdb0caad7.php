<?php

/* node_modules/webpack/lib/dependencies/CommonJsPlugin.js */
class __TwigTemplate_84cd7a0164c891a85e12a29afd7a158ade10d434e5b0e940b367173fa97df23e extends Twig_Template
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
        $__internal_0fdf69d82aa4df3235d49cebf5b718e7547cea4242cf64c496e8f512c136cc3e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0fdf69d82aa4df3235d49cebf5b718e7547cea4242cf64c496e8f512c136cc3e->enter($__internal_0fdf69d82aa4df3235d49cebf5b718e7547cea4242cf64c496e8f512c136cc3e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/webpack/lib/dependencies/CommonJsPlugin.js"));

        // line 1
        echo "/*
\tMIT License http://www.opensource.org/licenses/mit-license.php
\tAuthor Tobias Koppers @sokra
*/
\"use strict\";
const ConstDependency = require(\"./ConstDependency\");
const CommonJsRequireDependency = require(\"./CommonJsRequireDependency\");
const CommonJsRequireContextDependency = require(\"./CommonJsRequireContextDependency\");
const RequireResolveDependency = require(\"./RequireResolveDependency\");
const RequireResolveContextDependency = require(\"./RequireResolveContextDependency\");
const RequireResolveHeaderDependency = require(\"./RequireResolveHeaderDependency\");
const RequireHeaderDependency = require(\"./RequireHeaderDependency\");

const NullFactory = require(\"../NullFactory\");

const RequireResolveDependencyParserPlugin = require(\"./RequireResolveDependencyParserPlugin\");
const CommonJsRequireDependencyParserPlugin = require(\"./CommonJsRequireDependencyParserPlugin\");

const ParserHelpers = require(\"../ParserHelpers\");

class CommonJsPlugin {
\tconstructor(options) {
\t\tthis.options = options;
\t}

\tapply(compiler) {
\t\tconst options = this.options;
\t\tcompiler.plugin(\"compilation\", (compilation, params) => {
\t\t\tconst normalModuleFactory = params.normalModuleFactory;
\t\t\tconst contextModuleFactory = params.contextModuleFactory;

\t\t\tcompilation.dependencyFactories.set(CommonJsRequireDependency, normalModuleFactory);
\t\t\tcompilation.dependencyTemplates.set(CommonJsRequireDependency, new CommonJsRequireDependency.Template());

\t\t\tcompilation.dependencyFactories.set(CommonJsRequireContextDependency, contextModuleFactory);
\t\t\tcompilation.dependencyTemplates.set(CommonJsRequireContextDependency, new CommonJsRequireContextDependency.Template());

\t\t\tcompilation.dependencyFactories.set(RequireResolveDependency, normalModuleFactory);
\t\t\tcompilation.dependencyTemplates.set(RequireResolveDependency, new RequireResolveDependency.Template());

\t\t\tcompilation.dependencyFactories.set(RequireResolveContextDependency, contextModuleFactory);
\t\t\tcompilation.dependencyTemplates.set(RequireResolveContextDependency, new RequireResolveContextDependency.Template());

\t\t\tcompilation.dependencyFactories.set(RequireResolveHeaderDependency, new NullFactory());
\t\t\tcompilation.dependencyTemplates.set(RequireResolveHeaderDependency, new RequireResolveHeaderDependency.Template());

\t\t\tcompilation.dependencyFactories.set(RequireHeaderDependency, new NullFactory());
\t\t\tcompilation.dependencyTemplates.set(RequireHeaderDependency, new RequireHeaderDependency.Template());

\t\t\tparams.normalModuleFactory.plugin(\"parser\", (parser, parserOptions) => {

\t\t\t\tif(typeof parserOptions.commonjs !== \"undefined\" && !parserOptions.commonjs)
\t\t\t\t\treturn;

\t\t\t\tconst requireExpressions = [\"require\", \"require.resolve\", \"require.resolveWeak\"];
\t\t\t\tfor(let expression of requireExpressions) {
\t\t\t\t\tparser.plugin(`typeof \${expression}`, ParserHelpers.toConstantDependency(JSON.stringify(\"function\")));
\t\t\t\t\tparser.plugin(`evaluate typeof \${expression}`, ParserHelpers.evaluateToString(\"function\"));
\t\t\t\t\tparser.plugin(`evaluate Identifier \${expression}`, ParserHelpers.evaluateToIdentifier(expression, true));
\t\t\t\t}

\t\t\t\tparser.plugin(\"evaluate typeof module\", ParserHelpers.evaluateToString(\"object\"));
\t\t\t\tparser.plugin(\"assign require\", (expr) => {
\t\t\t\t\t// to not leak to global \"require\", we need to define a local require here.
\t\t\t\t\tconst dep = new ConstDependency(\"var require;\", 0);
\t\t\t\t\tdep.loc = expr.loc;
\t\t\t\t\tparser.state.current.addDependency(dep);
\t\t\t\t\tparser.scope.definitions.push(\"require\");
\t\t\t\t\treturn true;
\t\t\t\t});
\t\t\t\tparser.plugin(\"can-rename require\", () => true);
\t\t\t\tparser.plugin(\"rename require\", (expr) => {
\t\t\t\t\t// define the require variable. It's still undefined, but not \"not defined\".
\t\t\t\t\tconst dep = new ConstDependency(\"var require;\", 0);
\t\t\t\t\tdep.loc = expr.loc;
\t\t\t\t\tparser.state.current.addDependency(dep);
\t\t\t\t\treturn false;
\t\t\t\t});
\t\t\t\tparser.plugin(\"typeof module\", () => true);
\t\t\t\tparser.plugin(\"evaluate typeof exports\", ParserHelpers.evaluateToString(\"object\"));
\t\t\t\tparser.apply(
\t\t\t\t\tnew CommonJsRequireDependencyParserPlugin(options),
\t\t\t\t\tnew RequireResolveDependencyParserPlugin(options)
\t\t\t\t);
\t\t\t});
\t\t});
\t}
}
module.exports = CommonJsPlugin;
";
        
        $__internal_0fdf69d82aa4df3235d49cebf5b718e7547cea4242cf64c496e8f512c136cc3e->leave($__internal_0fdf69d82aa4df3235d49cebf5b718e7547cea4242cf64c496e8f512c136cc3e_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/webpack/lib/dependencies/CommonJsPlugin.js";
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
const ConstDependency = require(\"./ConstDependency\");
const CommonJsRequireDependency = require(\"./CommonJsRequireDependency\");
const CommonJsRequireContextDependency = require(\"./CommonJsRequireContextDependency\");
const RequireResolveDependency = require(\"./RequireResolveDependency\");
const RequireResolveContextDependency = require(\"./RequireResolveContextDependency\");
const RequireResolveHeaderDependency = require(\"./RequireResolveHeaderDependency\");
const RequireHeaderDependency = require(\"./RequireHeaderDependency\");

const NullFactory = require(\"../NullFactory\");

const RequireResolveDependencyParserPlugin = require(\"./RequireResolveDependencyParserPlugin\");
const CommonJsRequireDependencyParserPlugin = require(\"./CommonJsRequireDependencyParserPlugin\");

const ParserHelpers = require(\"../ParserHelpers\");

class CommonJsPlugin {
\tconstructor(options) {
\t\tthis.options = options;
\t}

\tapply(compiler) {
\t\tconst options = this.options;
\t\tcompiler.plugin(\"compilation\", (compilation, params) => {
\t\t\tconst normalModuleFactory = params.normalModuleFactory;
\t\t\tconst contextModuleFactory = params.contextModuleFactory;

\t\t\tcompilation.dependencyFactories.set(CommonJsRequireDependency, normalModuleFactory);
\t\t\tcompilation.dependencyTemplates.set(CommonJsRequireDependency, new CommonJsRequireDependency.Template());

\t\t\tcompilation.dependencyFactories.set(CommonJsRequireContextDependency, contextModuleFactory);
\t\t\tcompilation.dependencyTemplates.set(CommonJsRequireContextDependency, new CommonJsRequireContextDependency.Template());

\t\t\tcompilation.dependencyFactories.set(RequireResolveDependency, normalModuleFactory);
\t\t\tcompilation.dependencyTemplates.set(RequireResolveDependency, new RequireResolveDependency.Template());

\t\t\tcompilation.dependencyFactories.set(RequireResolveContextDependency, contextModuleFactory);
\t\t\tcompilation.dependencyTemplates.set(RequireResolveContextDependency, new RequireResolveContextDependency.Template());

\t\t\tcompilation.dependencyFactories.set(RequireResolveHeaderDependency, new NullFactory());
\t\t\tcompilation.dependencyTemplates.set(RequireResolveHeaderDependency, new RequireResolveHeaderDependency.Template());

\t\t\tcompilation.dependencyFactories.set(RequireHeaderDependency, new NullFactory());
\t\t\tcompilation.dependencyTemplates.set(RequireHeaderDependency, new RequireHeaderDependency.Template());

\t\t\tparams.normalModuleFactory.plugin(\"parser\", (parser, parserOptions) => {

\t\t\t\tif(typeof parserOptions.commonjs !== \"undefined\" && !parserOptions.commonjs)
\t\t\t\t\treturn;

\t\t\t\tconst requireExpressions = [\"require\", \"require.resolve\", \"require.resolveWeak\"];
\t\t\t\tfor(let expression of requireExpressions) {
\t\t\t\t\tparser.plugin(`typeof \${expression}`, ParserHelpers.toConstantDependency(JSON.stringify(\"function\")));
\t\t\t\t\tparser.plugin(`evaluate typeof \${expression}`, ParserHelpers.evaluateToString(\"function\"));
\t\t\t\t\tparser.plugin(`evaluate Identifier \${expression}`, ParserHelpers.evaluateToIdentifier(expression, true));
\t\t\t\t}

\t\t\t\tparser.plugin(\"evaluate typeof module\", ParserHelpers.evaluateToString(\"object\"));
\t\t\t\tparser.plugin(\"assign require\", (expr) => {
\t\t\t\t\t// to not leak to global \"require\", we need to define a local require here.
\t\t\t\t\tconst dep = new ConstDependency(\"var require;\", 0);
\t\t\t\t\tdep.loc = expr.loc;
\t\t\t\t\tparser.state.current.addDependency(dep);
\t\t\t\t\tparser.scope.definitions.push(\"require\");
\t\t\t\t\treturn true;
\t\t\t\t});
\t\t\t\tparser.plugin(\"can-rename require\", () => true);
\t\t\t\tparser.plugin(\"rename require\", (expr) => {
\t\t\t\t\t// define the require variable. It's still undefined, but not \"not defined\".
\t\t\t\t\tconst dep = new ConstDependency(\"var require;\", 0);
\t\t\t\t\tdep.loc = expr.loc;
\t\t\t\t\tparser.state.current.addDependency(dep);
\t\t\t\t\treturn false;
\t\t\t\t});
\t\t\t\tparser.plugin(\"typeof module\", () => true);
\t\t\t\tparser.plugin(\"evaluate typeof exports\", ParserHelpers.evaluateToString(\"object\"));
\t\t\t\tparser.apply(
\t\t\t\t\tnew CommonJsRequireDependencyParserPlugin(options),
\t\t\t\t\tnew RequireResolveDependencyParserPlugin(options)
\t\t\t\t);
\t\t\t});
\t\t});
\t}
}
module.exports = CommonJsPlugin;
", "node_modules/webpack/lib/dependencies/CommonJsPlugin.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/webpack/lib/dependencies/CommonJsPlugin.js");
    }
}
