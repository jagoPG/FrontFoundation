<?php

/* node_modules/webpack/hot/only-dev-server.js */
class __TwigTemplate_19f31e5f48e15a7d853c6d47ead72ea20f73d3e873794d52f1f595d5db4083f9 extends Twig_Template
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
        $__internal_bdf22d695e9efeae69f3ed93dc0d72827bc536c8bbb45969f40312e58aa1805d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bdf22d695e9efeae69f3ed93dc0d72827bc536c8bbb45969f40312e58aa1805d->enter($__internal_bdf22d695e9efeae69f3ed93dc0d72827bc536c8bbb45969f40312e58aa1805d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/webpack/hot/only-dev-server.js"));

        // line 1
        echo "/*
\tMIT License http://www.opensource.org/licenses/mit-license.php
\tAuthor Tobias Koppers @sokra
*/
/*globals __webpack_hash__ */
if(module.hot) {
\tvar lastHash;
\tvar upToDate = function upToDate() {
\t\treturn lastHash.indexOf(__webpack_hash__) >= 0;
\t};
\tvar log = require(\"./log\");
\tvar check = function check() {
\t\tmodule.hot.check().then(function(updatedModules) {
\t\t\tif(!updatedModules) {
\t\t\t\tlog(\"warning\", \"[HMR] Cannot find update. Need to do a full reload!\");
\t\t\t\tlog(\"warning\", \"[HMR] (Probably because of restarting the webpack-dev-server)\");
\t\t\t\treturn;
\t\t\t}

\t\t\treturn module.hot.apply({
\t\t\t\tignoreUnaccepted: true,
\t\t\t\tignoreDeclined: true,
\t\t\t\tignoreErrored: true,
\t\t\t\tonUnaccepted: function(data) {
\t\t\t\t\tlog(\"warning\", \"Ignored an update to unaccepted module \" + data.chain.join(\" -> \"));
\t\t\t\t},
\t\t\t\tonDeclined: function(data) {
\t\t\t\t\tlog(\"warning\", \"Ignored an update to declined module \" + data.chain.join(\" -> \"));
\t\t\t\t},
\t\t\t\tonErrored: function(data) {
\t\t\t\t\tlog(\"error\", data.error);
\t\t\t\t\tlog(\"warning\", \"Ignored an error while updating module \" + data.moduleId + \" (\" + data.type + \")\");
\t\t\t\t}
\t\t\t}).then(function(renewedModules) {
\t\t\t\tif(!upToDate()) {
\t\t\t\t\tcheck();
\t\t\t\t}

\t\t\t\trequire(\"./log-apply-result\")(updatedModules, renewedModules);

\t\t\t\tif(upToDate()) {
\t\t\t\t\tlog(\"info\", \"[HMR] App is up to date.\");
\t\t\t\t}
\t\t\t});
\t\t}).catch(function(err) {
\t\t\tvar status = module.hot.status();
\t\t\tif([\"abort\", \"fail\"].indexOf(status) >= 0) {
\t\t\t\tlog(\"warning\", \"[HMR] Cannot check for update. Need to do a full reload!\");
\t\t\t\tlog(\"warning\", \"[HMR] \" + err.stack || err.message);
\t\t\t} else {
\t\t\t\tlog(\"warning\", \"[HMR] Update check failed: \" + err.stack || err.message);
\t\t\t}
\t\t});
\t};
\tvar hotEmitter = require(\"./emitter\");
\thotEmitter.on(\"webpackHotUpdate\", function(currentHash) {
\t\tlastHash = currentHash;
\t\tif(!upToDate()) {
\t\t\tvar status = module.hot.status();
\t\t\tif(status === \"idle\") {
\t\t\t\tlog(\"info\", \"[HMR] Checking for updates on the server...\");
\t\t\t\tcheck();
\t\t\t} else if([\"abort\", \"fail\"].indexOf(status) >= 0) {
\t\t\t\tlog(\"warning\", \"[HMR] Cannot apply update as a previous update \" + status + \"ed. Need to do a full reload!\");
\t\t\t}
\t\t}
\t});
\tlog(\"info\", \"[HMR] Waiting for update signal from WDS...\");
} else {
\tthrow new Error(\"[HMR] Hot Module Replacement is disabled.\");
}
";
        
        $__internal_bdf22d695e9efeae69f3ed93dc0d72827bc536c8bbb45969f40312e58aa1805d->leave($__internal_bdf22d695e9efeae69f3ed93dc0d72827bc536c8bbb45969f40312e58aa1805d_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/webpack/hot/only-dev-server.js";
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
/*globals __webpack_hash__ */
if(module.hot) {
\tvar lastHash;
\tvar upToDate = function upToDate() {
\t\treturn lastHash.indexOf(__webpack_hash__) >= 0;
\t};
\tvar log = require(\"./log\");
\tvar check = function check() {
\t\tmodule.hot.check().then(function(updatedModules) {
\t\t\tif(!updatedModules) {
\t\t\t\tlog(\"warning\", \"[HMR] Cannot find update. Need to do a full reload!\");
\t\t\t\tlog(\"warning\", \"[HMR] (Probably because of restarting the webpack-dev-server)\");
\t\t\t\treturn;
\t\t\t}

\t\t\treturn module.hot.apply({
\t\t\t\tignoreUnaccepted: true,
\t\t\t\tignoreDeclined: true,
\t\t\t\tignoreErrored: true,
\t\t\t\tonUnaccepted: function(data) {
\t\t\t\t\tlog(\"warning\", \"Ignored an update to unaccepted module \" + data.chain.join(\" -> \"));
\t\t\t\t},
\t\t\t\tonDeclined: function(data) {
\t\t\t\t\tlog(\"warning\", \"Ignored an update to declined module \" + data.chain.join(\" -> \"));
\t\t\t\t},
\t\t\t\tonErrored: function(data) {
\t\t\t\t\tlog(\"error\", data.error);
\t\t\t\t\tlog(\"warning\", \"Ignored an error while updating module \" + data.moduleId + \" (\" + data.type + \")\");
\t\t\t\t}
\t\t\t}).then(function(renewedModules) {
\t\t\t\tif(!upToDate()) {
\t\t\t\t\tcheck();
\t\t\t\t}

\t\t\t\trequire(\"./log-apply-result\")(updatedModules, renewedModules);

\t\t\t\tif(upToDate()) {
\t\t\t\t\tlog(\"info\", \"[HMR] App is up to date.\");
\t\t\t\t}
\t\t\t});
\t\t}).catch(function(err) {
\t\t\tvar status = module.hot.status();
\t\t\tif([\"abort\", \"fail\"].indexOf(status) >= 0) {
\t\t\t\tlog(\"warning\", \"[HMR] Cannot check for update. Need to do a full reload!\");
\t\t\t\tlog(\"warning\", \"[HMR] \" + err.stack || err.message);
\t\t\t} else {
\t\t\t\tlog(\"warning\", \"[HMR] Update check failed: \" + err.stack || err.message);
\t\t\t}
\t\t});
\t};
\tvar hotEmitter = require(\"./emitter\");
\thotEmitter.on(\"webpackHotUpdate\", function(currentHash) {
\t\tlastHash = currentHash;
\t\tif(!upToDate()) {
\t\t\tvar status = module.hot.status();
\t\t\tif(status === \"idle\") {
\t\t\t\tlog(\"info\", \"[HMR] Checking for updates on the server...\");
\t\t\t\tcheck();
\t\t\t} else if([\"abort\", \"fail\"].indexOf(status) >= 0) {
\t\t\t\tlog(\"warning\", \"[HMR] Cannot apply update as a previous update \" + status + \"ed. Need to do a full reload!\");
\t\t\t}
\t\t}
\t});
\tlog(\"info\", \"[HMR] Waiting for update signal from WDS...\");
} else {
\tthrow new Error(\"[HMR] Hot Module Replacement is disabled.\");
}
", "node_modules/webpack/hot/only-dev-server.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/webpack/hot/only-dev-server.js");
    }
}
