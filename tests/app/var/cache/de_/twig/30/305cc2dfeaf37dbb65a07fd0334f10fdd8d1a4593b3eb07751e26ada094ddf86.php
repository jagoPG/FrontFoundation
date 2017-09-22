<?php

/* node_modules/webpack/lib/ConstPlugin.js */
class __TwigTemplate_5b180df5301a718fbec6a0a1191d6b9d2d7d2ac5870fd6e2d998473003188a2e extends Twig_Template
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
        $__internal_568551e02cd0b1f6f5e8ec075f115cb03e7ada6704b0750543b6d2074d21a7b7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_568551e02cd0b1f6f5e8ec075f115cb03e7ada6704b0750543b6d2074d21a7b7->enter($__internal_568551e02cd0b1f6f5e8ec075f115cb03e7ada6704b0750543b6d2074d21a7b7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/webpack/lib/ConstPlugin.js"));

        // line 1
        echo "/*
\tMIT License http://www.opensource.org/licenses/mit-license.php
\tAuthor Tobias Koppers @sokra
*/
\"use strict\";
const ConstDependency = require(\"./dependencies/ConstDependency\");
const NullFactory = require(\"./NullFactory\");
const ParserHelpers = require(\"./ParserHelpers\");

const getQuery = (request) => {
\tconst i = request.indexOf(\"?\");
\treturn request.indexOf(\"?\") < 0 ? \"\" : request.substr(i);
};

class ConstPlugin {
\tapply(compiler) {
\t\tcompiler.plugin(\"compilation\", (compilation, params) => {
\t\t\tcompilation.dependencyFactories.set(ConstDependency, new NullFactory());
\t\t\tcompilation.dependencyTemplates.set(ConstDependency, new ConstDependency.Template());

\t\t\tparams.normalModuleFactory.plugin(\"parser\", parser => {
\t\t\t\tparser.plugin(\"statement if\", function(statement) {
\t\t\t\t\tconst param = this.evaluateExpression(statement.test);
\t\t\t\t\tconst bool = param.asBool();
\t\t\t\t\tif(typeof bool === \"boolean\") {
\t\t\t\t\t\tif(statement.test.type !== \"Literal\") {
\t\t\t\t\t\t\tconst dep = new ConstDependency(`\${bool}`, param.range);
\t\t\t\t\t\t\tdep.loc = statement.loc;
\t\t\t\t\t\t\tthis.state.current.addDependency(dep);
\t\t\t\t\t\t}
\t\t\t\t\t\treturn bool;
\t\t\t\t\t}
\t\t\t\t});
\t\t\t\tparser.plugin(\"expression ?:\", function(expression) {
\t\t\t\t\tconst param = this.evaluateExpression(expression.test);
\t\t\t\t\tconst bool = param.asBool();
\t\t\t\t\tif(typeof bool === \"boolean\") {
\t\t\t\t\t\tif(expression.test.type !== \"Literal\") {
\t\t\t\t\t\t\tconst dep = new ConstDependency(` \${bool}`, param.range);
\t\t\t\t\t\t\tdep.loc = expression.loc;
\t\t\t\t\t\t\tthis.state.current.addDependency(dep);
\t\t\t\t\t\t}
\t\t\t\t\t\treturn bool;
\t\t\t\t\t}
\t\t\t\t});
\t\t\t\tparser.plugin(\"evaluate Identifier __resourceQuery\", function(expr) {
\t\t\t\t\tif(!this.state.module) return;
\t\t\t\t\treturn ParserHelpers.evaluateToString(getQuery(this.state.module.resource))(expr);
\t\t\t\t});
\t\t\t\tparser.plugin(\"expression __resourceQuery\", function() {
\t\t\t\t\tif(!this.state.module) return;
\t\t\t\t\tthis.state.current.addVariable(\"__resourceQuery\", JSON.stringify(getQuery(this.state.module.resource)));
\t\t\t\t\treturn true;
\t\t\t\t});
\t\t\t});
\t\t});
\t}
}

module.exports = ConstPlugin;
";
        
        $__internal_568551e02cd0b1f6f5e8ec075f115cb03e7ada6704b0750543b6d2074d21a7b7->leave($__internal_568551e02cd0b1f6f5e8ec075f115cb03e7ada6704b0750543b6d2074d21a7b7_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/webpack/lib/ConstPlugin.js";
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
const NullFactory = require(\"./NullFactory\");
const ParserHelpers = require(\"./ParserHelpers\");

const getQuery = (request) => {
\tconst i = request.indexOf(\"?\");
\treturn request.indexOf(\"?\") < 0 ? \"\" : request.substr(i);
};

class ConstPlugin {
\tapply(compiler) {
\t\tcompiler.plugin(\"compilation\", (compilation, params) => {
\t\t\tcompilation.dependencyFactories.set(ConstDependency, new NullFactory());
\t\t\tcompilation.dependencyTemplates.set(ConstDependency, new ConstDependency.Template());

\t\t\tparams.normalModuleFactory.plugin(\"parser\", parser => {
\t\t\t\tparser.plugin(\"statement if\", function(statement) {
\t\t\t\t\tconst param = this.evaluateExpression(statement.test);
\t\t\t\t\tconst bool = param.asBool();
\t\t\t\t\tif(typeof bool === \"boolean\") {
\t\t\t\t\t\tif(statement.test.type !== \"Literal\") {
\t\t\t\t\t\t\tconst dep = new ConstDependency(`\${bool}`, param.range);
\t\t\t\t\t\t\tdep.loc = statement.loc;
\t\t\t\t\t\t\tthis.state.current.addDependency(dep);
\t\t\t\t\t\t}
\t\t\t\t\t\treturn bool;
\t\t\t\t\t}
\t\t\t\t});
\t\t\t\tparser.plugin(\"expression ?:\", function(expression) {
\t\t\t\t\tconst param = this.evaluateExpression(expression.test);
\t\t\t\t\tconst bool = param.asBool();
\t\t\t\t\tif(typeof bool === \"boolean\") {
\t\t\t\t\t\tif(expression.test.type !== \"Literal\") {
\t\t\t\t\t\t\tconst dep = new ConstDependency(` \${bool}`, param.range);
\t\t\t\t\t\t\tdep.loc = expression.loc;
\t\t\t\t\t\t\tthis.state.current.addDependency(dep);
\t\t\t\t\t\t}
\t\t\t\t\t\treturn bool;
\t\t\t\t\t}
\t\t\t\t});
\t\t\t\tparser.plugin(\"evaluate Identifier __resourceQuery\", function(expr) {
\t\t\t\t\tif(!this.state.module) return;
\t\t\t\t\treturn ParserHelpers.evaluateToString(getQuery(this.state.module.resource))(expr);
\t\t\t\t});
\t\t\t\tparser.plugin(\"expression __resourceQuery\", function() {
\t\t\t\t\tif(!this.state.module) return;
\t\t\t\t\tthis.state.current.addVariable(\"__resourceQuery\", JSON.stringify(getQuery(this.state.module.resource)));
\t\t\t\t\treturn true;
\t\t\t\t});
\t\t\t});
\t\t});
\t}
}

module.exports = ConstPlugin;
", "node_modules/webpack/lib/ConstPlugin.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/webpack/lib/ConstPlugin.js");
    }
}
