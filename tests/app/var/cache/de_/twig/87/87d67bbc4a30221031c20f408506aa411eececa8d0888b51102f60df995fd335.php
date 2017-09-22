<?php

/* node_modules/fsevents/node_modules/node-pre-gyp/template-name.diff */
class __TwigTemplate_359e6098f88e80391d9c1a03801e2a9cf838fae1340b50bc6d259d641f5b5db7 extends Twig_Template
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
        $__internal_a7784106c64116a78dc110e365224b656a2fa4c6c61a05a891790b4f50a09fb8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a7784106c64116a78dc110e365224b656a2fa4c6c61a05a891790b4f50a09fb8->enter($__internal_a7784106c64116a78dc110e365224b656a2fa4c6c61a05a891790b4f50a09fb8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/fsevents/node_modules/node-pre-gyp/template-name.diff"));

        // line 1
        echo "diff --git a/lib/util/versioning.js b/lib/util/versioning.js
index 8ebbe3a..13e1e0b 100644
--- a/lib/util/versioning.js
+++ b/lib/util/versioning.js
@@ -283,6 +283,7 @@ module.exports.evaluate = function(package_json,options) {
         module_main: package_json.main,
         toolset : options.toolset || '' // address https://github.com/mapbox/node-pre-gyp/issues/119
     };
+    opts.module_name = eval_template(opts.module_name,opts);
     // support host mirror with npm config `--{module_name}_binary_host_mirror`
     // e.g.: https://github.com/node-inspector/v8-profiler/blob/master/package.json#L25
     // > npm install v8-profiler --profiler_binary_host_mirror=https://npm.taobao.org/mirrors/node-inspector/
";
        
        $__internal_a7784106c64116a78dc110e365224b656a2fa4c6c61a05a891790b4f50a09fb8->leave($__internal_a7784106c64116a78dc110e365224b656a2fa4c6c61a05a891790b4f50a09fb8_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/fsevents/node_modules/node-pre-gyp/template-name.diff";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("diff --git a/lib/util/versioning.js b/lib/util/versioning.js
index 8ebbe3a..13e1e0b 100644
--- a/lib/util/versioning.js
+++ b/lib/util/versioning.js
@@ -283,6 +283,7 @@ module.exports.evaluate = function(package_json,options) {
         module_main: package_json.main,
         toolset : options.toolset || '' // address https://github.com/mapbox/node-pre-gyp/issues/119
     };
+    opts.module_name = eval_template(opts.module_name,opts);
     // support host mirror with npm config `--{module_name}_binary_host_mirror`
     // e.g.: https://github.com/node-inspector/v8-profiler/blob/master/package.json#L25
     // > npm install v8-profiler --profiler_binary_host_mirror=https://npm.taobao.org/mirrors/node-inspector/
", "node_modules/fsevents/node_modules/node-pre-gyp/template-name.diff", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/fsevents/node_modules/node-pre-gyp/template-name.diff");
    }
}
