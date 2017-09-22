<?php

/* node_modules/watchpack/lib/watcherManager.js */
class __TwigTemplate_2278a7480894bbea42fddc67b83e84859cba01b2fc9066ed9f227ca191f250d4 extends Twig_Template
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
        $__internal_2cf63b04da7471963cab765cc1cf611d90576a82f3c45da3cb827e86016131bf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2cf63b04da7471963cab765cc1cf611d90576a82f3c45da3cb827e86016131bf->enter($__internal_2cf63b04da7471963cab765cc1cf611d90576a82f3c45da3cb827e86016131bf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/watchpack/lib/watcherManager.js"));

        // line 1
        echo "/*
\tMIT License http://www.opensource.org/licenses/mit-license.php
\tAuthor Tobias Koppers @sokra
*/
var path = require(\"path\");

function WatcherManager() {
\tthis.directoryWatchers = {};
}

WatcherManager.prototype.getDirectoryWatcher = function(directory, options) {
\tvar DirectoryWatcher = require(\"./DirectoryWatcher\");
\toptions = options || {};
\tvar key = directory + \" \" + JSON.stringify(options);
\tif(!this.directoryWatchers[key]) {
\t\tthis.directoryWatchers[key] = new DirectoryWatcher(directory, options);
\t\tthis.directoryWatchers[key].on(\"closed\", function() {
\t\t\tdelete this.directoryWatchers[key];
\t\t}.bind(this));
\t}
\treturn this.directoryWatchers[key];
};

WatcherManager.prototype.watchFile = function watchFile(p, options, startTime) {
\tvar directory = path.dirname(p);
\treturn this.getDirectoryWatcher(directory, options).watch(p, startTime);
};

WatcherManager.prototype.watchDirectory = function watchDirectory(directory, options, startTime) {
\treturn this.getDirectoryWatcher(directory, options).watch(directory, startTime);
};

module.exports = new WatcherManager();
";
        
        $__internal_2cf63b04da7471963cab765cc1cf611d90576a82f3c45da3cb827e86016131bf->leave($__internal_2cf63b04da7471963cab765cc1cf611d90576a82f3c45da3cb827e86016131bf_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/watchpack/lib/watcherManager.js";
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
var path = require(\"path\");

function WatcherManager() {
\tthis.directoryWatchers = {};
}

WatcherManager.prototype.getDirectoryWatcher = function(directory, options) {
\tvar DirectoryWatcher = require(\"./DirectoryWatcher\");
\toptions = options || {};
\tvar key = directory + \" \" + JSON.stringify(options);
\tif(!this.directoryWatchers[key]) {
\t\tthis.directoryWatchers[key] = new DirectoryWatcher(directory, options);
\t\tthis.directoryWatchers[key].on(\"closed\", function() {
\t\t\tdelete this.directoryWatchers[key];
\t\t}.bind(this));
\t}
\treturn this.directoryWatchers[key];
};

WatcherManager.prototype.watchFile = function watchFile(p, options, startTime) {
\tvar directory = path.dirname(p);
\treturn this.getDirectoryWatcher(directory, options).watch(p, startTime);
};

WatcherManager.prototype.watchDirectory = function watchDirectory(directory, options, startTime) {
\treturn this.getDirectoryWatcher(directory, options).watch(directory, startTime);
};

module.exports = new WatcherManager();
", "node_modules/watchpack/lib/watcherManager.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/watchpack/lib/watcherManager.js");
    }
}
