<?php

/* node_modules/webpack/hot/dev-server.js */
class __TwigTemplate_afd0637866c58c98109c793a390e784912ef793364be474a3d9762725722a66d extends Twig_Template
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
        $__internal_e639cada5c5c106da79ad103df7b0d57dbc396379de0b4f8aa50c0a334d8261b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e639cada5c5c106da79ad103df7b0d57dbc396379de0b4f8aa50c0a334d8261b->enter($__internal_e639cada5c5c106da79ad103df7b0d57dbc396379de0b4f8aa50c0a334d8261b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/webpack/hot/dev-server.js"));

        // line 1
        echo "/*
\tMIT License http://www.opensource.org/licenses/mit-license.php
\tAuthor Tobias Koppers @sokra
*/
/*globals window __webpack_hash__ */
if(module.hot) {
\tvar lastHash;
\tvar upToDate = function upToDate() {
\t\treturn lastHash.indexOf(__webpack_hash__) >= 0;
\t};
\tvar log = require(\"./log\");
\tvar check = function check() {
\t\tmodule.hot.check(true).then(function(updatedModules) {
\t\t\tif(!updatedModules) {
\t\t\t\tlog(\"warning\", \"[HMR] Cannot find update. Need to do a full reload!\");
\t\t\t\tlog(\"warning\", \"[HMR] (Probably because of restarting the webpack-dev-server)\");
\t\t\t\twindow.location.reload();
\t\t\t\treturn;
\t\t\t}

\t\t\tif(!upToDate()) {
\t\t\t\tcheck();
\t\t\t}

\t\t\trequire(\"./log-apply-result\")(updatedModules, updatedModules);

\t\t\tif(upToDate()) {
\t\t\t\tlog(\"info\", \"[HMR] App is up to date.\");
\t\t\t}

\t\t}).catch(function(err) {
\t\t\tvar status = module.hot.status();
\t\t\tif([\"abort\", \"fail\"].indexOf(status) >= 0) {
\t\t\t\tlog(\"warning\", \"[HMR] Cannot apply update. Need to do a full reload!\");
\t\t\t\tlog(\"warning\", \"[HMR] \" + err.stack || err.message);
\t\t\t\twindow.location.reload();
\t\t\t} else {
\t\t\t\tlog(\"warning\", \"[HMR] Update failed: \" + err.stack || err.message);
\t\t\t}
\t\t});
\t};
\tvar hotEmitter = require(\"./emitter\");
\thotEmitter.on(\"webpackHotUpdate\", function(currentHash) {
\t\tlastHash = currentHash;
\t\tif(!upToDate() && module.hot.status() === \"idle\") {
\t\t\tlog(\"info\", \"[HMR] Checking for updates on the server...\");
\t\t\tcheck();
\t\t}
\t});
\tlog(\"info\", \"[HMR] Waiting for update signal from WDS...\");
} else {
\tthrow new Error(\"[HMR] Hot Module Replacement is disabled.\");
}
";
        
        $__internal_e639cada5c5c106da79ad103df7b0d57dbc396379de0b4f8aa50c0a334d8261b->leave($__internal_e639cada5c5c106da79ad103df7b0d57dbc396379de0b4f8aa50c0a334d8261b_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/webpack/hot/dev-server.js";
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
/*globals window __webpack_hash__ */
if(module.hot) {
\tvar lastHash;
\tvar upToDate = function upToDate() {
\t\treturn lastHash.indexOf(__webpack_hash__) >= 0;
\t};
\tvar log = require(\"./log\");
\tvar check = function check() {
\t\tmodule.hot.check(true).then(function(updatedModules) {
\t\t\tif(!updatedModules) {
\t\t\t\tlog(\"warning\", \"[HMR] Cannot find update. Need to do a full reload!\");
\t\t\t\tlog(\"warning\", \"[HMR] (Probably because of restarting the webpack-dev-server)\");
\t\t\t\twindow.location.reload();
\t\t\t\treturn;
\t\t\t}

\t\t\tif(!upToDate()) {
\t\t\t\tcheck();
\t\t\t}

\t\t\trequire(\"./log-apply-result\")(updatedModules, updatedModules);

\t\t\tif(upToDate()) {
\t\t\t\tlog(\"info\", \"[HMR] App is up to date.\");
\t\t\t}

\t\t}).catch(function(err) {
\t\t\tvar status = module.hot.status();
\t\t\tif([\"abort\", \"fail\"].indexOf(status) >= 0) {
\t\t\t\tlog(\"warning\", \"[HMR] Cannot apply update. Need to do a full reload!\");
\t\t\t\tlog(\"warning\", \"[HMR] \" + err.stack || err.message);
\t\t\t\twindow.location.reload();
\t\t\t} else {
\t\t\t\tlog(\"warning\", \"[HMR] Update failed: \" + err.stack || err.message);
\t\t\t}
\t\t});
\t};
\tvar hotEmitter = require(\"./emitter\");
\thotEmitter.on(\"webpackHotUpdate\", function(currentHash) {
\t\tlastHash = currentHash;
\t\tif(!upToDate() && module.hot.status() === \"idle\") {
\t\t\tlog(\"info\", \"[HMR] Checking for updates on the server...\");
\t\t\tcheck();
\t\t}
\t});
\tlog(\"info\", \"[HMR] Waiting for update signal from WDS...\");
} else {
\tthrow new Error(\"[HMR] Hot Module Replacement is disabled.\");
}
", "node_modules/webpack/hot/dev-server.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/webpack/hot/dev-server.js");
    }
}
