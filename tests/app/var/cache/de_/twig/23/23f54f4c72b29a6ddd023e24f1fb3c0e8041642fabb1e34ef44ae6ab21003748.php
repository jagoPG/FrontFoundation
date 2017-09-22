<?php

/* node_modules/webpack/lib/dependencies/AMDRequireDependenciesBlock.js */
class __TwigTemplate_a0a7e633a0519f7ab00b9cd38d34c26d2e637f56c0f78631650bf93a2da56106 extends Twig_Template
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
        $__internal_e55e4f072bc52cc20f0df91fc00bab1aa8e90ff3e125df1b6b93fd246ce7a842 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e55e4f072bc52cc20f0df91fc00bab1aa8e90ff3e125df1b6b93fd246ce7a842->enter($__internal_e55e4f072bc52cc20f0df91fc00bab1aa8e90ff3e125df1b6b93fd246ce7a842_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/webpack/lib/dependencies/AMDRequireDependenciesBlock.js"));

        // line 1
        echo "/*
\tMIT License http://www.opensource.org/licenses/mit-license.php
\tAuthor Tobias Koppers @sokra
*/
\"use strict\";
const AsyncDependenciesBlock = require(\"../AsyncDependenciesBlock\");
const AMDRequireDependency = require(\"./AMDRequireDependency\");

module.exports = class AMDRequireDependenciesBlock extends AsyncDependenciesBlock {
\tconstructor(expr, arrayRange, functionRange, errorCallbackRange, module, loc) {
\t\tsuper(null, module, loc);
\t\tthis.expr = expr;
\t\tthis.outerRange = expr.range;
\t\tthis.arrayRange = arrayRange;
\t\tthis.functionRange = functionRange;
\t\tthis.errorCallbackRange = errorCallbackRange;
\t\tthis.bindThis = true;
\t\tif(arrayRange && functionRange && errorCallbackRange) {
\t\t\tthis.range = [arrayRange[0], errorCallbackRange[1]];
\t\t} else if(arrayRange && functionRange) {
\t\t\tthis.range = [arrayRange[0], functionRange[1]];
\t\t} else if(arrayRange) {
\t\t\tthis.range = arrayRange;
\t\t} else if(functionRange) {
\t\t\tthis.range = functionRange;
\t\t} else {
\t\t\tthis.range = expr.range;
\t\t}
\t\tconst dep = new AMDRequireDependency(this);
\t\tdep.loc = loc;
\t\tthis.addDependency(dep);
\t}
};
";
        
        $__internal_e55e4f072bc52cc20f0df91fc00bab1aa8e90ff3e125df1b6b93fd246ce7a842->leave($__internal_e55e4f072bc52cc20f0df91fc00bab1aa8e90ff3e125df1b6b93fd246ce7a842_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/webpack/lib/dependencies/AMDRequireDependenciesBlock.js";
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
const AsyncDependenciesBlock = require(\"../AsyncDependenciesBlock\");
const AMDRequireDependency = require(\"./AMDRequireDependency\");

module.exports = class AMDRequireDependenciesBlock extends AsyncDependenciesBlock {
\tconstructor(expr, arrayRange, functionRange, errorCallbackRange, module, loc) {
\t\tsuper(null, module, loc);
\t\tthis.expr = expr;
\t\tthis.outerRange = expr.range;
\t\tthis.arrayRange = arrayRange;
\t\tthis.functionRange = functionRange;
\t\tthis.errorCallbackRange = errorCallbackRange;
\t\tthis.bindThis = true;
\t\tif(arrayRange && functionRange && errorCallbackRange) {
\t\t\tthis.range = [arrayRange[0], errorCallbackRange[1]];
\t\t} else if(arrayRange && functionRange) {
\t\t\tthis.range = [arrayRange[0], functionRange[1]];
\t\t} else if(arrayRange) {
\t\t\tthis.range = arrayRange;
\t\t} else if(functionRange) {
\t\t\tthis.range = functionRange;
\t\t} else {
\t\t\tthis.range = expr.range;
\t\t}
\t\tconst dep = new AMDRequireDependency(this);
\t\tdep.loc = loc;
\t\tthis.addDependency(dep);
\t}
};
", "node_modules/webpack/lib/dependencies/AMDRequireDependenciesBlock.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/webpack/lib/dependencies/AMDRequireDependenciesBlock.js");
    }
}
