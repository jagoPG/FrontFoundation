<?php

/* node_modules/webpack/lib/dependencies/AMDRequireContextDependency.js */
class __TwigTemplate_800eb8e8a8fb8265f746e58f742678e9d12d167aad142ffd94b6c2a33022223c extends Twig_Template
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
        $__internal_efcad5fce8e550ecb0bcd48b46296db7735cae446297880f3cf9580d4ade6d3a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_efcad5fce8e550ecb0bcd48b46296db7735cae446297880f3cf9580d4ade6d3a->enter($__internal_efcad5fce8e550ecb0bcd48b46296db7735cae446297880f3cf9580d4ade6d3a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/webpack/lib/dependencies/AMDRequireContextDependency.js"));

        // line 1
        echo "/*
\tMIT License http://www.opensource.org/licenses/mit-license.php
\tAuthor Tobias Koppers @sokra
*/
\"use strict\";

const ContextDependency = require(\"./ContextDependency\");
const CriticalDependencyWarning = require(\"./CriticalDependencyWarning\");
class AMDRequireContextDependency extends ContextDependency {
\tconstructor(request, recursive, regExp, range, valueRange) {
\t\tsuper(request, recursive, regExp);
\t\tthis.range = range;
\t\tthis.valueRange = valueRange;
\t}

\tget type() {
\t\treturn \"amd require context\";
\t}

\tgetWarnings() {
\t\tif(this.critical) {
\t\t\treturn [
\t\t\t\tnew CriticalDependencyWarning(this.critical)
\t\t\t];
\t\t}
\t}
}
AMDRequireContextDependency.Template = require(\"./ContextDependencyTemplateAsRequireCall\");
module.exports = AMDRequireContextDependency;
";
        
        $__internal_efcad5fce8e550ecb0bcd48b46296db7735cae446297880f3cf9580d4ade6d3a->leave($__internal_efcad5fce8e550ecb0bcd48b46296db7735cae446297880f3cf9580d4ade6d3a_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/webpack/lib/dependencies/AMDRequireContextDependency.js";
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

const ContextDependency = require(\"./ContextDependency\");
const CriticalDependencyWarning = require(\"./CriticalDependencyWarning\");
class AMDRequireContextDependency extends ContextDependency {
\tconstructor(request, recursive, regExp, range, valueRange) {
\t\tsuper(request, recursive, regExp);
\t\tthis.range = range;
\t\tthis.valueRange = valueRange;
\t}

\tget type() {
\t\treturn \"amd require context\";
\t}

\tgetWarnings() {
\t\tif(this.critical) {
\t\t\treturn [
\t\t\t\tnew CriticalDependencyWarning(this.critical)
\t\t\t];
\t\t}
\t}
}
AMDRequireContextDependency.Template = require(\"./ContextDependencyTemplateAsRequireCall\");
module.exports = AMDRequireContextDependency;
", "node_modules/webpack/lib/dependencies/AMDRequireContextDependency.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/webpack/lib/dependencies/AMDRequireContextDependency.js");
    }
}
