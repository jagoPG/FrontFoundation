<?php

/* node_modules/webpack/hot/signal.js */
class __TwigTemplate_ebc3b5dbee6569b2ba18008a15d04e35032d7426acef78e4252675eb0f5fb9b3 extends Twig_Template
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
        $__internal_2edada96b9ae7e212a1c84879036e596469c620512b2e0c5a9150a3e93cdc0f1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2edada96b9ae7e212a1c84879036e596469c620512b2e0c5a9150a3e93cdc0f1->enter($__internal_2edada96b9ae7e212a1c84879036e596469c620512b2e0c5a9150a3e93cdc0f1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/webpack/hot/signal.js"));

        // line 1
        echo "/*
\tMIT License http://www.opensource.org/licenses/mit-license.php
\tAuthor Tobias Koppers @sokra
*/
/*globals __resourceQuery */
if(module.hot) {
\tvar log = require(\"./log\");
\tvar checkForUpdate = function checkForUpdate(fromUpdate) {
\t\tmodule.hot.check().then(function(updatedModules) {
\t\t\tif(!updatedModules) {
\t\t\t\tif(fromUpdate)
\t\t\t\t\tlog(\"info\", \"[HMR] Update applied.\");
\t\t\t\telse
\t\t\t\t\tlog(\"warning\", \"[HMR] Cannot find update.\");
\t\t\t\treturn;
\t\t\t}

\t\t\treturn module.hot.apply({
\t\t\t\tignoreUnaccepted: true,
\t\t\t\tonUnaccepted: function(data) {
\t\t\t\t\tlog(\"warning\", \"Ignored an update to unaccepted module \" + data.chain.join(\" -> \"));
\t\t\t\t},
\t\t\t}).then(function(renewedModules) {
\t\t\t\trequire(\"./log-apply-result\")(updatedModules, renewedModules);

\t\t\t\tcheckForUpdate(true);
\t\t\t});
\t\t}).catch(function(err) {
\t\t\tvar status = module.hot.status();
\t\t\tif([\"abort\", \"fail\"].indexOf(status) >= 0) {
\t\t\t\tlog(\"warning\", \"[HMR] Cannot apply update.\");
\t\t\t\tlog(\"warning\", \"[HMR] \" + err.stack || err.message);
\t\t\t\tlog(\"warning\", \"[HMR] You need to restart the application!\");
\t\t\t} else {
\t\t\t\tlog(\"warning\", \"[HMR] Update failed: \" + err.stack || err.message);
\t\t\t}
\t\t});
\t};

\tprocess.on(__resourceQuery.substr(1) || \"SIGUSR2\", function() {
\t\tif(module.hot.status() !== \"idle\") {
\t\t\tlog(\"warning\", \"[HMR] Got signal but currently in \" + module.hot.status() + \" state.\");
\t\t\tlog(\"warning\", \"[HMR] Need to be in idle state to start hot update.\");
\t\t\treturn;
\t\t}

\t\tcheckForUpdate();
\t});
} else {
\tthrow new Error(\"[HMR] Hot Module Replacement is disabled.\");
}
";
        
        $__internal_2edada96b9ae7e212a1c84879036e596469c620512b2e0c5a9150a3e93cdc0f1->leave($__internal_2edada96b9ae7e212a1c84879036e596469c620512b2e0c5a9150a3e93cdc0f1_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/webpack/hot/signal.js";
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
\tvar log = require(\"./log\");
\tvar checkForUpdate = function checkForUpdate(fromUpdate) {
\t\tmodule.hot.check().then(function(updatedModules) {
\t\t\tif(!updatedModules) {
\t\t\t\tif(fromUpdate)
\t\t\t\t\tlog(\"info\", \"[HMR] Update applied.\");
\t\t\t\telse
\t\t\t\t\tlog(\"warning\", \"[HMR] Cannot find update.\");
\t\t\t\treturn;
\t\t\t}

\t\t\treturn module.hot.apply({
\t\t\t\tignoreUnaccepted: true,
\t\t\t\tonUnaccepted: function(data) {
\t\t\t\t\tlog(\"warning\", \"Ignored an update to unaccepted module \" + data.chain.join(\" -> \"));
\t\t\t\t},
\t\t\t}).then(function(renewedModules) {
\t\t\t\trequire(\"./log-apply-result\")(updatedModules, renewedModules);

\t\t\t\tcheckForUpdate(true);
\t\t\t});
\t\t}).catch(function(err) {
\t\t\tvar status = module.hot.status();
\t\t\tif([\"abort\", \"fail\"].indexOf(status) >= 0) {
\t\t\t\tlog(\"warning\", \"[HMR] Cannot apply update.\");
\t\t\t\tlog(\"warning\", \"[HMR] \" + err.stack || err.message);
\t\t\t\tlog(\"warning\", \"[HMR] You need to restart the application!\");
\t\t\t} else {
\t\t\t\tlog(\"warning\", \"[HMR] Update failed: \" + err.stack || err.message);
\t\t\t}
\t\t});
\t};

\tprocess.on(__resourceQuery.substr(1) || \"SIGUSR2\", function() {
\t\tif(module.hot.status() !== \"idle\") {
\t\t\tlog(\"warning\", \"[HMR] Got signal but currently in \" + module.hot.status() + \" state.\");
\t\t\tlog(\"warning\", \"[HMR] Need to be in idle state to start hot update.\");
\t\t\treturn;
\t\t}

\t\tcheckForUpdate();
\t});
} else {
\tthrow new Error(\"[HMR] Hot Module Replacement is disabled.\");
}
", "node_modules/webpack/hot/signal.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/webpack/hot/signal.js");
    }
}
