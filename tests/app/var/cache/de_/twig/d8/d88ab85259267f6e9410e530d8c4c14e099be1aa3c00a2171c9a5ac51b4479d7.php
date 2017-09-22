<?php

/* node_modules/enhanced-resolve/lib/SyncAsyncFileSystemDecorator.js */
class __TwigTemplate_f858a02b733ca3870774ef4e3aaa3808e5acb66ca65ce27ef0082fa92ce3b30e extends Twig_Template
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
        $__internal_6ba6f470dee2462a8f402ca974d423e5082dc1c979076bfe9a5278ba5581f1e6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6ba6f470dee2462a8f402ca974d423e5082dc1c979076bfe9a5278ba5581f1e6->enter($__internal_6ba6f470dee2462a8f402ca974d423e5082dc1c979076bfe9a5278ba5581f1e6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/enhanced-resolve/lib/SyncAsyncFileSystemDecorator.js"));

        // line 1
        echo "/*
\tMIT License http://www.opensource.org/licenses/mit-license.php
\tAuthor Tobias Koppers @sokra
*/
function SyncAsyncFileSystemDecorator(fs) {
\tthis.fs = fs;
\tif(fs.statSync) {
\t\tthis.stat = function(arg, callback) {
\t\t\ttry {
\t\t\t\tvar result = fs.statSync(arg);
\t\t\t} catch(e) {
\t\t\t\treturn callback(e);
\t\t\t}
\t\t\tcallback(null, result);
\t\t};
\t}
\tif(fs.readdirSync) {
\t\tthis.readdir = function(arg, callback) {
\t\t\ttry {
\t\t\t\tvar result = fs.readdirSync(arg);
\t\t\t} catch(e) {
\t\t\t\treturn callback(e);
\t\t\t}
\t\t\tcallback(null, result);
\t\t};
\t}
\tif(fs.readFileSync) {
\t\tthis.readFile = function(arg, callback) {
\t\t\ttry {
\t\t\t\tvar result = fs.readFileSync(arg);
\t\t\t} catch(e) {
\t\t\t\treturn callback(e);
\t\t\t}
\t\t\tcallback(null, result);
\t\t};
\t}
\tif(fs.readlinkSync) {
\t\tthis.readlink = function(arg, callback) {
\t\t\ttry {
\t\t\t\tvar result = fs.readlinkSync(arg);
\t\t\t} catch(e) {
\t\t\t\treturn callback(e);
\t\t\t}
\t\t\tcallback(null, result);
\t\t};
\t}
\tif(fs.readJsonSync) {
\t\tthis.readJson = function(arg, callback) {
\t\t\ttry {
\t\t\t\tvar result = fs.readJsonSync(arg);
\t\t\t} catch(e) {
\t\t\t\treturn callback(e);
\t\t\t}
\t\t\tcallback(null, result);
\t\t};
\t}
}
module.exports = SyncAsyncFileSystemDecorator;
";
        
        $__internal_6ba6f470dee2462a8f402ca974d423e5082dc1c979076bfe9a5278ba5581f1e6->leave($__internal_6ba6f470dee2462a8f402ca974d423e5082dc1c979076bfe9a5278ba5581f1e6_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/enhanced-resolve/lib/SyncAsyncFileSystemDecorator.js";
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
function SyncAsyncFileSystemDecorator(fs) {
\tthis.fs = fs;
\tif(fs.statSync) {
\t\tthis.stat = function(arg, callback) {
\t\t\ttry {
\t\t\t\tvar result = fs.statSync(arg);
\t\t\t} catch(e) {
\t\t\t\treturn callback(e);
\t\t\t}
\t\t\tcallback(null, result);
\t\t};
\t}
\tif(fs.readdirSync) {
\t\tthis.readdir = function(arg, callback) {
\t\t\ttry {
\t\t\t\tvar result = fs.readdirSync(arg);
\t\t\t} catch(e) {
\t\t\t\treturn callback(e);
\t\t\t}
\t\t\tcallback(null, result);
\t\t};
\t}
\tif(fs.readFileSync) {
\t\tthis.readFile = function(arg, callback) {
\t\t\ttry {
\t\t\t\tvar result = fs.readFileSync(arg);
\t\t\t} catch(e) {
\t\t\t\treturn callback(e);
\t\t\t}
\t\t\tcallback(null, result);
\t\t};
\t}
\tif(fs.readlinkSync) {
\t\tthis.readlink = function(arg, callback) {
\t\t\ttry {
\t\t\t\tvar result = fs.readlinkSync(arg);
\t\t\t} catch(e) {
\t\t\t\treturn callback(e);
\t\t\t}
\t\t\tcallback(null, result);
\t\t};
\t}
\tif(fs.readJsonSync) {
\t\tthis.readJson = function(arg, callback) {
\t\t\ttry {
\t\t\t\tvar result = fs.readJsonSync(arg);
\t\t\t} catch(e) {
\t\t\t\treturn callback(e);
\t\t\t}
\t\t\tcallback(null, result);
\t\t};
\t}
}
module.exports = SyncAsyncFileSystemDecorator;
", "node_modules/enhanced-resolve/lib/SyncAsyncFileSystemDecorator.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/enhanced-resolve/lib/SyncAsyncFileSystemDecorator.js");
    }
}
