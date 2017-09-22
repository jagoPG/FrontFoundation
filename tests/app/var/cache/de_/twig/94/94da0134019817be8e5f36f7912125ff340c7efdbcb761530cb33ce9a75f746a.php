<?php

/* node_modules/enhanced-resolve/lib/createInnerCallback.js */
class __TwigTemplate_7a9e925bf9840515b177e777fc561e1b410cddbab50631f84351313dd9af6b24 extends Twig_Template
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
        $__internal_b35b3bbdb45d8e083603329202599eb74f38981ac864edc2589115854995b107 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b35b3bbdb45d8e083603329202599eb74f38981ac864edc2589115854995b107->enter($__internal_b35b3bbdb45d8e083603329202599eb74f38981ac864edc2589115854995b107_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/enhanced-resolve/lib/createInnerCallback.js"));

        // line 1
        echo "/*
\tMIT License http://www.opensource.org/licenses/mit-license.php
\tAuthor Tobias Koppers @sokra
*/
module.exports = function createInnerCallback(callback, options, message, messageOptional) {
\tvar log = options.log;
\tif(!log) {
\t\tif(options.stack !== callback.stack) {
\t\t\tvar callbackWrapper = function callbackWrapper() {
\t\t\t\treturn callback.apply(this, arguments);
\t\t\t};
\t\t\tcallbackWrapper.stack = options.stack;
\t\t\tcallbackWrapper.missing = options.missing;
\t\t\treturn callbackWrapper;
\t\t}
\t\treturn callback;
\t}

\tfunction loggingCallbackWrapper() {
\t\tvar i;
\t\tif(message) {
\t\t\tif(!messageOptional || theLog.length > 0) {
\t\t\t\tlog(message);
\t\t\t\tfor(i = 0; i < theLog.length; i++)
\t\t\t\t\tlog(\"  \" + theLog[i]);
\t\t\t}
\t\t} else {
\t\t\tfor(i = 0; i < theLog.length; i++)
\t\t\t\tlog(theLog[i]);
\t\t}
\t\treturn callback.apply(this, arguments);

\t}
\tvar theLog = [];
\tloggingCallbackWrapper.log = function writeLog(msg) {
\t\ttheLog.push(msg);
\t};
\tloggingCallbackWrapper.stack = options.stack;
\tloggingCallbackWrapper.missing = options.missing;
\treturn loggingCallbackWrapper;
};
";
        
        $__internal_b35b3bbdb45d8e083603329202599eb74f38981ac864edc2589115854995b107->leave($__internal_b35b3bbdb45d8e083603329202599eb74f38981ac864edc2589115854995b107_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/enhanced-resolve/lib/createInnerCallback.js";
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
module.exports = function createInnerCallback(callback, options, message, messageOptional) {
\tvar log = options.log;
\tif(!log) {
\t\tif(options.stack !== callback.stack) {
\t\t\tvar callbackWrapper = function callbackWrapper() {
\t\t\t\treturn callback.apply(this, arguments);
\t\t\t};
\t\t\tcallbackWrapper.stack = options.stack;
\t\t\tcallbackWrapper.missing = options.missing;
\t\t\treturn callbackWrapper;
\t\t}
\t\treturn callback;
\t}

\tfunction loggingCallbackWrapper() {
\t\tvar i;
\t\tif(message) {
\t\t\tif(!messageOptional || theLog.length > 0) {
\t\t\t\tlog(message);
\t\t\t\tfor(i = 0; i < theLog.length; i++)
\t\t\t\t\tlog(\"  \" + theLog[i]);
\t\t\t}
\t\t} else {
\t\t\tfor(i = 0; i < theLog.length; i++)
\t\t\t\tlog(theLog[i]);
\t\t}
\t\treturn callback.apply(this, arguments);

\t}
\tvar theLog = [];
\tloggingCallbackWrapper.log = function writeLog(msg) {
\t\ttheLog.push(msg);
\t};
\tloggingCallbackWrapper.stack = options.stack;
\tloggingCallbackWrapper.missing = options.missing;
\treturn loggingCallbackWrapper;
};
", "node_modules/enhanced-resolve/lib/createInnerCallback.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/enhanced-resolve/lib/createInnerCallback.js");
    }
}
