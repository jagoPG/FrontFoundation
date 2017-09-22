<?php

/* node_modules/loader-runner/lib/loadLoader.js */
class __TwigTemplate_e7e6c22c87b3770920e8205044b2552815d6736dc98066d3c35cf853f9cefa38 extends Twig_Template
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
        $__internal_b64c26ad8e94c44559931cf85ae3b38402e53aae04385128fcdc5d3960546273 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b64c26ad8e94c44559931cf85ae3b38402e53aae04385128fcdc5d3960546273->enter($__internal_b64c26ad8e94c44559931cf85ae3b38402e53aae04385128fcdc5d3960546273_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/loader-runner/lib/loadLoader.js"));

        // line 1
        echo "module.exports = function loadLoader(loader, callback) {
\tif(typeof System === \"object\" && typeof System.import === \"function\") {
\t\tSystem.import(loader.path).catch(callback).then(function(module) {
\t\t\tloader.normal = typeof module === \"function\" ? module : module.default;
\t\t\tloader.pitch = module.pitch;
\t\t\tloader.raw = module.raw;
\t\t\tif(typeof loader.normal !== \"function\" && typeof loader.pitch !== \"function\")
\t\t\t\tthrow new Error(\"Module '\" + loader.path + \"' is not a loader (must have normal or pitch function)\");
\t\t\tcallback();
\t\t});
\t} else {
\t\ttry {
\t\t\tvar module = require(loader.path);
\t\t} catch(e) {
\t\t\t// it is possible for node to choke on a require if the FD descriptor
\t\t\t// limit has been reached. give it a chance to recover.
\t\t\tif(e instanceof Error && e.code === \"EMFILE\") {
\t\t\t\tvar retry = loadLoader.bind(null, loader, callback);
\t\t\t\tif(typeof setImmediate === \"function\") {
\t\t\t\t\t// node >= 0.9.0
\t\t\t\t\treturn setImmediate(retry);
\t\t\t\t} else {
\t\t\t\t\t// node < 0.9.0
\t\t\t\t\treturn process.nextTick(retry);
\t\t\t\t}
\t\t\t}
\t\t\treturn callback(e);
\t\t}
\t\tif(typeof loader !== \"function\" && typeof loader !== \"object\")
\t\t\tthrow new Error(\"Module '\" + loader.path + \"' is not a loader (export function or es6 module))\");
\t\tloader.normal = typeof module === \"function\" ? module : module.default;
\t\tloader.pitch = module.pitch;
\t\tloader.raw = module.raw;
\t\tif(typeof loader.normal !== \"function\" && typeof loader.pitch !== \"function\")
\t\t\tthrow new Error(\"Module '\" + loader.path + \"' is not a loader (must have normal or pitch function)\");
\t\tcallback();
\t}
};
";
        
        $__internal_b64c26ad8e94c44559931cf85ae3b38402e53aae04385128fcdc5d3960546273->leave($__internal_b64c26ad8e94c44559931cf85ae3b38402e53aae04385128fcdc5d3960546273_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/loader-runner/lib/loadLoader.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("module.exports = function loadLoader(loader, callback) {
\tif(typeof System === \"object\" && typeof System.import === \"function\") {
\t\tSystem.import(loader.path).catch(callback).then(function(module) {
\t\t\tloader.normal = typeof module === \"function\" ? module : module.default;
\t\t\tloader.pitch = module.pitch;
\t\t\tloader.raw = module.raw;
\t\t\tif(typeof loader.normal !== \"function\" && typeof loader.pitch !== \"function\")
\t\t\t\tthrow new Error(\"Module '\" + loader.path + \"' is not a loader (must have normal or pitch function)\");
\t\t\tcallback();
\t\t});
\t} else {
\t\ttry {
\t\t\tvar module = require(loader.path);
\t\t} catch(e) {
\t\t\t// it is possible for node to choke on a require if the FD descriptor
\t\t\t// limit has been reached. give it a chance to recover.
\t\t\tif(e instanceof Error && e.code === \"EMFILE\") {
\t\t\t\tvar retry = loadLoader.bind(null, loader, callback);
\t\t\t\tif(typeof setImmediate === \"function\") {
\t\t\t\t\t// node >= 0.9.0
\t\t\t\t\treturn setImmediate(retry);
\t\t\t\t} else {
\t\t\t\t\t// node < 0.9.0
\t\t\t\t\treturn process.nextTick(retry);
\t\t\t\t}
\t\t\t}
\t\t\treturn callback(e);
\t\t}
\t\tif(typeof loader !== \"function\" && typeof loader !== \"object\")
\t\t\tthrow new Error(\"Module '\" + loader.path + \"' is not a loader (export function or es6 module))\");
\t\tloader.normal = typeof module === \"function\" ? module : module.default;
\t\tloader.pitch = module.pitch;
\t\tloader.raw = module.raw;
\t\tif(typeof loader.normal !== \"function\" && typeof loader.pitch !== \"function\")
\t\t\tthrow new Error(\"Module '\" + loader.path + \"' is not a loader (must have normal or pitch function)\");
\t\tcallback();
\t}
};
", "node_modules/loader-runner/lib/loadLoader.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/loader-runner/lib/loadLoader.js");
    }
}
