<?php

/* node_modules/webpack/lib/dependencies/AMDRequireItemDependency.js */
class __TwigTemplate_20564c90693fa028a25c691146cd8adfbefffafaf176d3dc29fc75ea671aedaa extends Twig_Template
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
        $__internal_26e4af19bf3e29251d46132c5fd646b4cf91a09f5a104329f993ec143bb129a4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_26e4af19bf3e29251d46132c5fd646b4cf91a09f5a104329f993ec143bb129a4->enter($__internal_26e4af19bf3e29251d46132c5fd646b4cf91a09f5a104329f993ec143bb129a4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/webpack/lib/dependencies/AMDRequireItemDependency.js"));

        // line 1
        echo "/*
\tMIT License http://www.opensource.org/licenses/mit-license.php
\tAuthor Tobias Koppers @sokra
*/
\"use strict\";
const ModuleDependency = require(\"./ModuleDependency\");
const ModuleDependencyTemplateAsRequireId = require(\"./ModuleDependencyTemplateAsRequireId\");

class AMDRequireItemDependency extends ModuleDependency {
\tconstructor(request, range) {
\t\tsuper(request);
\t\tthis.range = range;
\t}

\tget type() {
\t\treturn \"amd require\";
\t}
}

AMDRequireItemDependency.Template = ModuleDependencyTemplateAsRequireId;

module.exports = AMDRequireItemDependency;
";
        
        $__internal_26e4af19bf3e29251d46132c5fd646b4cf91a09f5a104329f993ec143bb129a4->leave($__internal_26e4af19bf3e29251d46132c5fd646b4cf91a09f5a104329f993ec143bb129a4_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/webpack/lib/dependencies/AMDRequireItemDependency.js";
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
const ModuleDependency = require(\"./ModuleDependency\");
const ModuleDependencyTemplateAsRequireId = require(\"./ModuleDependencyTemplateAsRequireId\");

class AMDRequireItemDependency extends ModuleDependency {
\tconstructor(request, range) {
\t\tsuper(request);
\t\tthis.range = range;
\t}

\tget type() {
\t\treturn \"amd require\";
\t}
}

AMDRequireItemDependency.Template = ModuleDependencyTemplateAsRequireId;

module.exports = AMDRequireItemDependency;
", "node_modules/webpack/lib/dependencies/AMDRequireItemDependency.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/webpack/lib/dependencies/AMDRequireItemDependency.js");
    }
}
