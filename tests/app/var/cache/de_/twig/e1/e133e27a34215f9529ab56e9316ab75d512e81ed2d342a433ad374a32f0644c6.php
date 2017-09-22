<?php

/* node_modules/webpack/hot/log-apply-result.js */
class __TwigTemplate_16826d8516a58331124b6108d0b3b15f2b8d4b957c1ec1b89c6e21eacf8596ab extends Twig_Template
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
        $__internal_cc9029accc120d56d87a042fd9404dd31046bd8ba7346238d0d282a8c5312823 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cc9029accc120d56d87a042fd9404dd31046bd8ba7346238d0d282a8c5312823->enter($__internal_cc9029accc120d56d87a042fd9404dd31046bd8ba7346238d0d282a8c5312823_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/webpack/hot/log-apply-result.js"));

        // line 1
        echo "/*
\tMIT License http://www.opensource.org/licenses/mit-license.php
\tAuthor Tobias Koppers @sokra
*/
module.exports = function(updatedModules, renewedModules) {
\tvar unacceptedModules = updatedModules.filter(function(moduleId) {
\t\treturn renewedModules && renewedModules.indexOf(moduleId) < 0;
\t});
\tvar log = require(\"./log\");

\tif(unacceptedModules.length > 0) {
\t\tlog(\"warning\", \"[HMR] The following modules couldn't be hot updated: (They would need a full reload!)\");
\t\tunacceptedModules.forEach(function(moduleId) {
\t\t\tlog(\"warning\", \"[HMR]  - \" + moduleId);
\t\t});
\t}

\tif(!renewedModules || renewedModules.length === 0) {
\t\tlog(\"info\", \"[HMR] Nothing hot updated.\");
\t} else {
\t\tlog(\"info\", \"[HMR] Updated modules:\");
\t\trenewedModules.forEach(function(moduleId) {
\t\t\tif(typeof moduleId === \"string\" && moduleId.indexOf(\"!\") !== -1) {
\t\t\t\tvar parts = moduleId.split(\"!\");
\t\t\t\tlog.groupCollapsed(\"info\", \"[HMR]  - \" + parts.pop());
\t\t\t\tlog(\"info\", \"[HMR]  - \" + moduleId);
\t\t\t\tlog.groupEnd(\"info\");
\t\t\t} else {
\t\t\t\tlog(\"info\", \"[HMR]  - \" + moduleId);
\t\t\t}
\t\t});
\t\tvar numberIds = renewedModules.every(function(moduleId) {
\t\t\treturn typeof moduleId === \"number\";
\t\t});
\t\tif(numberIds)
\t\t\tlog(\"info\", \"[HMR] Consider using the NamedModulesPlugin for module names.\");
\t}
};
";
        
        $__internal_cc9029accc120d56d87a042fd9404dd31046bd8ba7346238d0d282a8c5312823->leave($__internal_cc9029accc120d56d87a042fd9404dd31046bd8ba7346238d0d282a8c5312823_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/webpack/hot/log-apply-result.js";
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
module.exports = function(updatedModules, renewedModules) {
\tvar unacceptedModules = updatedModules.filter(function(moduleId) {
\t\treturn renewedModules && renewedModules.indexOf(moduleId) < 0;
\t});
\tvar log = require(\"./log\");

\tif(unacceptedModules.length > 0) {
\t\tlog(\"warning\", \"[HMR] The following modules couldn't be hot updated: (They would need a full reload!)\");
\t\tunacceptedModules.forEach(function(moduleId) {
\t\t\tlog(\"warning\", \"[HMR]  - \" + moduleId);
\t\t});
\t}

\tif(!renewedModules || renewedModules.length === 0) {
\t\tlog(\"info\", \"[HMR] Nothing hot updated.\");
\t} else {
\t\tlog(\"info\", \"[HMR] Updated modules:\");
\t\trenewedModules.forEach(function(moduleId) {
\t\t\tif(typeof moduleId === \"string\" && moduleId.indexOf(\"!\") !== -1) {
\t\t\t\tvar parts = moduleId.split(\"!\");
\t\t\t\tlog.groupCollapsed(\"info\", \"[HMR]  - \" + parts.pop());
\t\t\t\tlog(\"info\", \"[HMR]  - \" + moduleId);
\t\t\t\tlog.groupEnd(\"info\");
\t\t\t} else {
\t\t\t\tlog(\"info\", \"[HMR]  - \" + moduleId);
\t\t\t}
\t\t});
\t\tvar numberIds = renewedModules.every(function(moduleId) {
\t\t\treturn typeof moduleId === \"number\";
\t\t});
\t\tif(numberIds)
\t\t\tlog(\"info\", \"[HMR] Consider using the NamedModulesPlugin for module names.\");
\t}
};
", "node_modules/webpack/hot/log-apply-result.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/webpack/hot/log-apply-result.js");
    }
}
