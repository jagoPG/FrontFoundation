<?php

/* node_modules/webpack/hot/poll.js */
class __TwigTemplate_508a0b535fc3fd54787a6a62b552589d935922fdee8163619c3c49582b5c24b0 extends Twig_Template
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
        $__internal_d6c8ab8db054fc7f009a689ef688bf453b5466c59548e642ebab6bf26adec57c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d6c8ab8db054fc7f009a689ef688bf453b5466c59548e642ebab6bf26adec57c->enter($__internal_d6c8ab8db054fc7f009a689ef688bf453b5466c59548e642ebab6bf26adec57c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/webpack/hot/poll.js"));

        // line 1
        echo "/*
\tMIT License http://www.opensource.org/licenses/mit-license.php
\tAuthor Tobias Koppers @sokra
*/
/*globals __resourceQuery */
if(module.hot) {
\tvar hotPollInterval = +(__resourceQuery.substr(1)) || (10 * 60 * 1000);
\tvar log = require(\"./log\");

\tvar checkForUpdate = function checkForUpdate(fromUpdate) {
\t\tif(module.hot.status() === \"idle\") {
\t\t\tmodule.hot.check(true).then(function(updatedModules) {
\t\t\t\tif(!updatedModules) {
\t\t\t\t\tif(fromUpdate) log(\"info\", \"[HMR] Update applied.\");
\t\t\t\t\treturn;
\t\t\t\t}
\t\t\t\trequire(\"./log-apply-result\")(updatedModules, updatedModules);
\t\t\t\tcheckForUpdate(true);
\t\t\t}).catch(function(err) {
\t\t\t\tvar status = module.hot.status();
\t\t\t\tif([\"abort\", \"fail\"].indexOf(status) >= 0) {
\t\t\t\t\tlog(\"warning\", \"[HMR] Cannot apply update.\");
\t\t\t\t\tlog(\"warning\", \"[HMR] \" + err.stack || err.message);
\t\t\t\t\tlog(\"warning\", \"[HMR] You need to restart the application!\");
\t\t\t\t} else {
\t\t\t\t\tlog(\"warning\", \"[HMR] Update failed: \" + err.stack || err.message);
\t\t\t\t}
\t\t\t});
\t\t}
\t};
\tsetInterval(checkForUpdate, hotPollInterval);
} else {
\tthrow new Error(\"[HMR] Hot Module Replacement is disabled.\");
}
";
        
        $__internal_d6c8ab8db054fc7f009a689ef688bf453b5466c59548e642ebab6bf26adec57c->leave($__internal_d6c8ab8db054fc7f009a689ef688bf453b5466c59548e642ebab6bf26adec57c_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/webpack/hot/poll.js";
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
/*globals __resourceQuery */
if(module.hot) {
\tvar hotPollInterval = +(__resourceQuery.substr(1)) || (10 * 60 * 1000);
\tvar log = require(\"./log\");

\tvar checkForUpdate = function checkForUpdate(fromUpdate) {
\t\tif(module.hot.status() === \"idle\") {
\t\t\tmodule.hot.check(true).then(function(updatedModules) {
\t\t\t\tif(!updatedModules) {
\t\t\t\t\tif(fromUpdate) log(\"info\", \"[HMR] Update applied.\");
\t\t\t\t\treturn;
\t\t\t\t}
\t\t\t\trequire(\"./log-apply-result\")(updatedModules, updatedModules);
\t\t\t\tcheckForUpdate(true);
\t\t\t}).catch(function(err) {
\t\t\t\tvar status = module.hot.status();
\t\t\t\tif([\"abort\", \"fail\"].indexOf(status) >= 0) {
\t\t\t\t\tlog(\"warning\", \"[HMR] Cannot apply update.\");
\t\t\t\t\tlog(\"warning\", \"[HMR] \" + err.stack || err.message);
\t\t\t\t\tlog(\"warning\", \"[HMR] You need to restart the application!\");
\t\t\t\t} else {
\t\t\t\t\tlog(\"warning\", \"[HMR] Update failed: \" + err.stack || err.message);
\t\t\t\t}
\t\t\t});
\t\t}
\t};
\tsetInterval(checkForUpdate, hotPollInterval);
} else {
\tthrow new Error(\"[HMR] Hot Module Replacement is disabled.\");
}
", "node_modules/webpack/hot/poll.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/webpack/hot/poll.js");
    }
}
