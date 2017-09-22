<?php

/* node_modules/webpack/bin/config-yargs.js */
class __TwigTemplate_dcdbd34f4bc9d35c1a058a2075c9eb38d226b21cb43e372f2bec28c20256d0ae extends Twig_Template
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
        $__internal_2cce00981beeae10453e40c9ef35f14254f8eccc9c13ccf34717006e584d0c2d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2cce00981beeae10453e40c9ef35f14254f8eccc9c13ccf34717006e584d0c2d->enter($__internal_2cce00981beeae10453e40c9ef35f14254f8eccc9c13ccf34717006e584d0c2d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/webpack/bin/config-yargs.js"));

        // line 1
        echo "var CONFIG_GROUP = \"Config options:\";
var BASIC_GROUP = \"Basic options:\";
var MODULE_GROUP = \"Module options:\";
var OUTPUT_GROUP = \"Output options:\";
var ADVANCED_GROUP = \"Advanced options:\";
var RESOLVE_GROUP = \"Resolving options:\";
var OPTIMIZE_GROUP = \"Optimizing options:\";

module.exports = function(yargs) {
\tyargs
\t\t.help(\"help\")
\t\t.alias(\"help\", \"h\")
\t\t.version()
\t\t.alias(\"version\", \"v\")
\t\t.options({
\t\t\t\"config\": {
\t\t\t\ttype: \"string\",
\t\t\t\tdescribe: \"Path to the config file\",
\t\t\t\tgroup: CONFIG_GROUP,
\t\t\t\tdefaultDescription: \"webpack.config.js or webpackfile.js\",
\t\t\t\trequiresArg: true
\t\t\t},
\t\t\t\"config-name\": {
\t\t\t\ttype: \"string\",
\t\t\t\tdescribe: \"Name of the config to use\",
\t\t\t\tgroup: CONFIG_GROUP,
\t\t\t\trequiresArg: true
\t\t\t},
\t\t\t\"env\": {
\t\t\t\tdescribe: \"Environment passed to the config, when it is a function\",
\t\t\t\tgroup: CONFIG_GROUP
\t\t\t},
\t\t\t\"context\": {
\t\t\t\ttype: \"string\",
\t\t\t\tdescribe: \"The root directory for resolving entry point and stats\",
\t\t\t\tgroup: BASIC_GROUP,
\t\t\t\tdefaultDescription: \"The current directory\",
\t\t\t\trequiresArg: true
\t\t\t},
\t\t\t\"entry\": {
\t\t\t\ttype: \"string\",
\t\t\t\tdescribe: \"The entry point\",
\t\t\t\tgroup: BASIC_GROUP,
\t\t\t\trequiresArg: true
\t\t\t},
\t\t\t\"module-bind\": {
\t\t\t\ttype: \"string\",
\t\t\t\tdescribe: \"Bind an extension to a loader\",
\t\t\t\tgroup: MODULE_GROUP,
\t\t\t\trequiresArg: true
\t\t\t},
\t\t\t\"module-bind-post\": {
\t\t\t\ttype: \"string\",
\t\t\t\tdescribe: \"\",
\t\t\t\tgroup: MODULE_GROUP,
\t\t\t\trequiresArg: true
\t\t\t},
\t\t\t\"module-bind-pre\": {
\t\t\t\ttype: \"string\",
\t\t\t\tdescribe: \"\",
\t\t\t\tgroup: MODULE_GROUP,
\t\t\t\trequiresArg: true
\t\t\t},
\t\t\t\"output-path\": {
\t\t\t\ttype: \"string\",
\t\t\t\tdescribe: \"The output path for compilation assets\",
\t\t\t\tgroup: OUTPUT_GROUP,
\t\t\t\tdefaultDescription: \"The current directory\",
\t\t\t\trequiresArg: true
\t\t\t},
\t\t\t\"output-filename\": {
\t\t\t\ttype: \"string\",
\t\t\t\tdescribe: \"The output filename of the bundle\",
\t\t\t\tgroup: OUTPUT_GROUP,
\t\t\t\tdefaultDescription: \"[name].js\",
\t\t\t\trequiresArg: true
\t\t\t},
\t\t\t\"output-chunk-filename\": {
\t\t\t\ttype: \"string\",
\t\t\t\tdescribe: \"The output filename for additional chunks\",
\t\t\t\tgroup: OUTPUT_GROUP,
\t\t\t\tdefaultDescription: \"filename with [id] instead of [name] or [id] prefixed\",
\t\t\t\trequiresArg: true
\t\t\t},
\t\t\t\"output-source-map-filename\": {
\t\t\t\ttype: \"string\",
\t\t\t\tdescribe: \"The output filename for the SourceMap\",
\t\t\t\tgroup: OUTPUT_GROUP,
\t\t\t\trequiresArg: true
\t\t\t},
\t\t\t\"output-public-path\": {
\t\t\t\ttype: \"string\",
\t\t\t\tdescribe: \"The public path for the assets\",
\t\t\t\tgroup: OUTPUT_GROUP,
\t\t\t\trequiresArg: true
\t\t\t},
\t\t\t\"output-jsonp-function\": {
\t\t\t\ttype: \"string\",
\t\t\t\tdescribe: \"The name of the jsonp function used for chunk loading\",
\t\t\t\tgroup: OUTPUT_GROUP,
\t\t\t\trequiresArg: true
\t\t\t},
\t\t\t\"output-pathinfo\": {
\t\t\t\ttype: \"boolean\",
\t\t\t\tdescribe: \"Include a comment with the request for every dependency (require, import, etc.)\",
\t\t\t\tgroup: OUTPUT_GROUP
\t\t\t},
\t\t\t\"output-library\": {
\t\t\t\ttype: \"string\",
\t\t\t\tdescribe: \"Expose the exports of the entry point as library\",
\t\t\t\tgroup: OUTPUT_GROUP,
\t\t\t\trequiresArg: true
\t\t\t},
\t\t\t\"output-library-target\": {
\t\t\t\ttype: \"string\",
\t\t\t\tdescribe: \"The type for exposing the exports of the entry point as library\",
\t\t\t\tgroup: OUTPUT_GROUP,
\t\t\t\trequiresArg: true
\t\t\t},
\t\t\t\"records-input-path\": {
\t\t\t\ttype: \"string\",
\t\t\t\tdescribe: \"Path to the records file (reading)\",
\t\t\t\tgroup: ADVANCED_GROUP,
\t\t\t\trequiresArg: true
\t\t\t},
\t\t\t\"records-output-path\": {
\t\t\t\ttype: \"string\",
\t\t\t\tdescribe: \"Path to the records file (writing)\",
\t\t\t\tgroup: ADVANCED_GROUP,
\t\t\t\trequiresArg: true
\t\t\t},
\t\t\t\"records-path\": {
\t\t\t\ttype: \"string\",
\t\t\t\tdescribe: \"Path to the records file\",
\t\t\t\tgroup: ADVANCED_GROUP,
\t\t\t\trequiresArg: true
\t\t\t},
\t\t\t\"define\": {
\t\t\t\ttype: \"string\",
\t\t\t\tdescribe: \"Define any free var in the bundle\",
\t\t\t\tgroup: ADVANCED_GROUP,
\t\t\t\trequiresArg: true
\t\t\t},
\t\t\t\"target\": {
\t\t\t\ttype: \"string\",
\t\t\t\tdescribe: \"The targeted execution environment\",
\t\t\t\tgroup: ADVANCED_GROUP,
\t\t\t\trequiresArg: true
\t\t\t},
\t\t\t\"cache\": {
\t\t\t\ttype: \"boolean\",
\t\t\t\tdescribe: \"Enable in memory caching\",
\t\t\t\tdefault: null,
\t\t\t\tgroup: ADVANCED_GROUP,
\t\t\t\tdefaultDescription: \"It's enabled by default when watching\"
\t\t\t},
\t\t\t\"watch\": {
\t\t\t\ttype: \"boolean\",
\t\t\t\talias: \"w\",
\t\t\t\tdescribe: \"Watch the filesystem for changes\",
\t\t\t\tgroup: BASIC_GROUP
\t\t\t},
\t\t\t\"watch-stdin\": {
\t\t\t\ttype: \"boolean\",
\t\t\t\talias: \"stdin\",
\t\t\t\tdescribe: \"Exit the process when stdin is closed\",
\t\t\t\tgroup: ADVANCED_GROUP
\t\t\t},
\t\t\t\"watch-aggregate-timeout\": {
\t\t\t\tdescribe: \"Timeout for gathering changes while watching\",
\t\t\t\tgroup: ADVANCED_GROUP,
\t\t\t\trequiresArg: true
\t\t\t},
\t\t\t\"watch-poll\": {
\t\t\t\ttype: \"string\",
\t\t\t\tdescribe: \"The polling interval for watching (also enable polling)\",
\t\t\t\tgroup: ADVANCED_GROUP
\t\t\t},
\t\t\t\"hot\": {
\t\t\t\ttype: \"boolean\",
\t\t\t\tdescribe: \"Enables Hot Module Replacement\",
\t\t\t\tgroup: ADVANCED_GROUP
\t\t\t},
\t\t\t\"debug\": {
\t\t\t\ttype: \"boolean\",
\t\t\t\tdescribe: \"Switch loaders to debug mode\",
\t\t\t\tgroup: BASIC_GROUP
\t\t\t},
\t\t\t\"devtool\": {
\t\t\t\ttype: \"string\",
\t\t\t\tdescribe: \"Enable devtool for better debugging experience (Example: --devtool eval-cheap-module-source-map)\",
\t\t\t\tgroup: BASIC_GROUP,
\t\t\t\trequiresArg: true
\t\t\t},
\t\t\t\"resolve-alias\": {
\t\t\t\ttype: \"string\",
\t\t\t\tdescribe: \"Setup a module alias for resolving (Example: jquery-plugin=jquery.plugin)\",
\t\t\t\tgroup: RESOLVE_GROUP,
\t\t\t\trequiresArg: true
\t\t\t},
\t\t\t\"resolve-extensions\": {
\t\t\t\t\"type\": \"array\",
\t\t\t\tdescribe: \"Setup extensions that should be used to resolve modules (Example: --resolve-extensions .es6,.js)\",
\t\t\t\tgroup: RESOLVE_GROUP,
\t\t\t\trequiresArg: true
\t\t\t},
\t\t\t\"resolve-loader-alias\": {
\t\t\t\ttype: \"string\",
\t\t\t\tdescribe: \"Setup a loader alias for resolving\",
\t\t\t\tgroup: RESOLVE_GROUP,
\t\t\t\trequiresArg: true
\t\t\t},
\t\t\t\"optimize-max-chunks\": {
\t\t\t\tdescribe: \"Try to keep the chunk count below a limit\",
\t\t\t\tgroup: OPTIMIZE_GROUP,
\t\t\t\trequiresArg: true
\t\t\t},
\t\t\t\"optimize-min-chunk-size\": {
\t\t\t\tdescribe: \"Try to keep the chunk size above a limit\",
\t\t\t\tgroup: OPTIMIZE_GROUP,
\t\t\t\trequiresArg: true
\t\t\t},
\t\t\t\"optimize-minimize\": {
\t\t\t\ttype: \"boolean\",
\t\t\t\tdescribe: \"Minimize javascript and switches loaders to minimizing\",
\t\t\t\tgroup: OPTIMIZE_GROUP
\t\t\t},
\t\t\t\"prefetch\": {
\t\t\t\ttype: \"string\",
\t\t\t\tdescribe: \"Prefetch this request (Example: --prefetch ./file.js)\",
\t\t\t\tgroup: ADVANCED_GROUP,
\t\t\t\trequiresArg: true
\t\t\t},
\t\t\t\"provide\": {
\t\t\t\ttype: \"string\",
\t\t\t\tdescribe: \"Provide these modules as free vars in all modules (Example: --provide jQuery=jquery)\",
\t\t\t\tgroup: ADVANCED_GROUP,
\t\t\t\trequiresArg: true
\t\t\t},
\t\t\t\"labeled-modules\": {
\t\t\t\ttype: \"boolean\",
\t\t\t\tdescribe: \"Enables labeled modules\",
\t\t\t\tgroup: ADVANCED_GROUP
\t\t\t},
\t\t\t\"plugin\": {
\t\t\t\ttype: \"string\",
\t\t\t\tdescribe: \"Load this plugin\",
\t\t\t\tgroup: ADVANCED_GROUP,
\t\t\t\trequiresArg: true
\t\t\t},
\t\t\t\"bail\": {
\t\t\t\ttype: \"boolean\",
\t\t\t\tdescribe: \"Abort the compilation on first error\",
\t\t\t\tgroup: ADVANCED_GROUP,
\t\t\t\tdefault: null
\t\t\t},
\t\t\t\"profile\": {
\t\t\t\ttype: \"boolean\",
\t\t\t\tdescribe: \"Profile the compilation and include information in stats\",
\t\t\t\tgroup: ADVANCED_GROUP,
\t\t\t\tdefault: null
\t\t\t},
\t\t\t\"d\": {
\t\t\t\ttype: \"boolean\",
\t\t\t\tdescribe: \"shortcut for --debug --devtool eval-cheap-module-source-map --output-pathinfo\",
\t\t\t\tgroup: BASIC_GROUP
\t\t\t},
\t\t\t\"p\": {
\t\t\t\ttype: \"boolean\",
\t\t\t\tdescribe: \"shortcut for --optimize-minimize --define process.env.NODE_ENV=\\\"production\\\"\",
\t\t\t\tgroup: BASIC_GROUP
\t\t\t}
\t\t}).strict();
};
";
        
        $__internal_2cce00981beeae10453e40c9ef35f14254f8eccc9c13ccf34717006e584d0c2d->leave($__internal_2cce00981beeae10453e40c9ef35f14254f8eccc9c13ccf34717006e584d0c2d_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/webpack/bin/config-yargs.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("var CONFIG_GROUP = \"Config options:\";
var BASIC_GROUP = \"Basic options:\";
var MODULE_GROUP = \"Module options:\";
var OUTPUT_GROUP = \"Output options:\";
var ADVANCED_GROUP = \"Advanced options:\";
var RESOLVE_GROUP = \"Resolving options:\";
var OPTIMIZE_GROUP = \"Optimizing options:\";

module.exports = function(yargs) {
\tyargs
\t\t.help(\"help\")
\t\t.alias(\"help\", \"h\")
\t\t.version()
\t\t.alias(\"version\", \"v\")
\t\t.options({
\t\t\t\"config\": {
\t\t\t\ttype: \"string\",
\t\t\t\tdescribe: \"Path to the config file\",
\t\t\t\tgroup: CONFIG_GROUP,
\t\t\t\tdefaultDescription: \"webpack.config.js or webpackfile.js\",
\t\t\t\trequiresArg: true
\t\t\t},
\t\t\t\"config-name\": {
\t\t\t\ttype: \"string\",
\t\t\t\tdescribe: \"Name of the config to use\",
\t\t\t\tgroup: CONFIG_GROUP,
\t\t\t\trequiresArg: true
\t\t\t},
\t\t\t\"env\": {
\t\t\t\tdescribe: \"Environment passed to the config, when it is a function\",
\t\t\t\tgroup: CONFIG_GROUP
\t\t\t},
\t\t\t\"context\": {
\t\t\t\ttype: \"string\",
\t\t\t\tdescribe: \"The root directory for resolving entry point and stats\",
\t\t\t\tgroup: BASIC_GROUP,
\t\t\t\tdefaultDescription: \"The current directory\",
\t\t\t\trequiresArg: true
\t\t\t},
\t\t\t\"entry\": {
\t\t\t\ttype: \"string\",
\t\t\t\tdescribe: \"The entry point\",
\t\t\t\tgroup: BASIC_GROUP,
\t\t\t\trequiresArg: true
\t\t\t},
\t\t\t\"module-bind\": {
\t\t\t\ttype: \"string\",
\t\t\t\tdescribe: \"Bind an extension to a loader\",
\t\t\t\tgroup: MODULE_GROUP,
\t\t\t\trequiresArg: true
\t\t\t},
\t\t\t\"module-bind-post\": {
\t\t\t\ttype: \"string\",
\t\t\t\tdescribe: \"\",
\t\t\t\tgroup: MODULE_GROUP,
\t\t\t\trequiresArg: true
\t\t\t},
\t\t\t\"module-bind-pre\": {
\t\t\t\ttype: \"string\",
\t\t\t\tdescribe: \"\",
\t\t\t\tgroup: MODULE_GROUP,
\t\t\t\trequiresArg: true
\t\t\t},
\t\t\t\"output-path\": {
\t\t\t\ttype: \"string\",
\t\t\t\tdescribe: \"The output path for compilation assets\",
\t\t\t\tgroup: OUTPUT_GROUP,
\t\t\t\tdefaultDescription: \"The current directory\",
\t\t\t\trequiresArg: true
\t\t\t},
\t\t\t\"output-filename\": {
\t\t\t\ttype: \"string\",
\t\t\t\tdescribe: \"The output filename of the bundle\",
\t\t\t\tgroup: OUTPUT_GROUP,
\t\t\t\tdefaultDescription: \"[name].js\",
\t\t\t\trequiresArg: true
\t\t\t},
\t\t\t\"output-chunk-filename\": {
\t\t\t\ttype: \"string\",
\t\t\t\tdescribe: \"The output filename for additional chunks\",
\t\t\t\tgroup: OUTPUT_GROUP,
\t\t\t\tdefaultDescription: \"filename with [id] instead of [name] or [id] prefixed\",
\t\t\t\trequiresArg: true
\t\t\t},
\t\t\t\"output-source-map-filename\": {
\t\t\t\ttype: \"string\",
\t\t\t\tdescribe: \"The output filename for the SourceMap\",
\t\t\t\tgroup: OUTPUT_GROUP,
\t\t\t\trequiresArg: true
\t\t\t},
\t\t\t\"output-public-path\": {
\t\t\t\ttype: \"string\",
\t\t\t\tdescribe: \"The public path for the assets\",
\t\t\t\tgroup: OUTPUT_GROUP,
\t\t\t\trequiresArg: true
\t\t\t},
\t\t\t\"output-jsonp-function\": {
\t\t\t\ttype: \"string\",
\t\t\t\tdescribe: \"The name of the jsonp function used for chunk loading\",
\t\t\t\tgroup: OUTPUT_GROUP,
\t\t\t\trequiresArg: true
\t\t\t},
\t\t\t\"output-pathinfo\": {
\t\t\t\ttype: \"boolean\",
\t\t\t\tdescribe: \"Include a comment with the request for every dependency (require, import, etc.)\",
\t\t\t\tgroup: OUTPUT_GROUP
\t\t\t},
\t\t\t\"output-library\": {
\t\t\t\ttype: \"string\",
\t\t\t\tdescribe: \"Expose the exports of the entry point as library\",
\t\t\t\tgroup: OUTPUT_GROUP,
\t\t\t\trequiresArg: true
\t\t\t},
\t\t\t\"output-library-target\": {
\t\t\t\ttype: \"string\",
\t\t\t\tdescribe: \"The type for exposing the exports of the entry point as library\",
\t\t\t\tgroup: OUTPUT_GROUP,
\t\t\t\trequiresArg: true
\t\t\t},
\t\t\t\"records-input-path\": {
\t\t\t\ttype: \"string\",
\t\t\t\tdescribe: \"Path to the records file (reading)\",
\t\t\t\tgroup: ADVANCED_GROUP,
\t\t\t\trequiresArg: true
\t\t\t},
\t\t\t\"records-output-path\": {
\t\t\t\ttype: \"string\",
\t\t\t\tdescribe: \"Path to the records file (writing)\",
\t\t\t\tgroup: ADVANCED_GROUP,
\t\t\t\trequiresArg: true
\t\t\t},
\t\t\t\"records-path\": {
\t\t\t\ttype: \"string\",
\t\t\t\tdescribe: \"Path to the records file\",
\t\t\t\tgroup: ADVANCED_GROUP,
\t\t\t\trequiresArg: true
\t\t\t},
\t\t\t\"define\": {
\t\t\t\ttype: \"string\",
\t\t\t\tdescribe: \"Define any free var in the bundle\",
\t\t\t\tgroup: ADVANCED_GROUP,
\t\t\t\trequiresArg: true
\t\t\t},
\t\t\t\"target\": {
\t\t\t\ttype: \"string\",
\t\t\t\tdescribe: \"The targeted execution environment\",
\t\t\t\tgroup: ADVANCED_GROUP,
\t\t\t\trequiresArg: true
\t\t\t},
\t\t\t\"cache\": {
\t\t\t\ttype: \"boolean\",
\t\t\t\tdescribe: \"Enable in memory caching\",
\t\t\t\tdefault: null,
\t\t\t\tgroup: ADVANCED_GROUP,
\t\t\t\tdefaultDescription: \"It's enabled by default when watching\"
\t\t\t},
\t\t\t\"watch\": {
\t\t\t\ttype: \"boolean\",
\t\t\t\talias: \"w\",
\t\t\t\tdescribe: \"Watch the filesystem for changes\",
\t\t\t\tgroup: BASIC_GROUP
\t\t\t},
\t\t\t\"watch-stdin\": {
\t\t\t\ttype: \"boolean\",
\t\t\t\talias: \"stdin\",
\t\t\t\tdescribe: \"Exit the process when stdin is closed\",
\t\t\t\tgroup: ADVANCED_GROUP
\t\t\t},
\t\t\t\"watch-aggregate-timeout\": {
\t\t\t\tdescribe: \"Timeout for gathering changes while watching\",
\t\t\t\tgroup: ADVANCED_GROUP,
\t\t\t\trequiresArg: true
\t\t\t},
\t\t\t\"watch-poll\": {
\t\t\t\ttype: \"string\",
\t\t\t\tdescribe: \"The polling interval for watching (also enable polling)\",
\t\t\t\tgroup: ADVANCED_GROUP
\t\t\t},
\t\t\t\"hot\": {
\t\t\t\ttype: \"boolean\",
\t\t\t\tdescribe: \"Enables Hot Module Replacement\",
\t\t\t\tgroup: ADVANCED_GROUP
\t\t\t},
\t\t\t\"debug\": {
\t\t\t\ttype: \"boolean\",
\t\t\t\tdescribe: \"Switch loaders to debug mode\",
\t\t\t\tgroup: BASIC_GROUP
\t\t\t},
\t\t\t\"devtool\": {
\t\t\t\ttype: \"string\",
\t\t\t\tdescribe: \"Enable devtool for better debugging experience (Example: --devtool eval-cheap-module-source-map)\",
\t\t\t\tgroup: BASIC_GROUP,
\t\t\t\trequiresArg: true
\t\t\t},
\t\t\t\"resolve-alias\": {
\t\t\t\ttype: \"string\",
\t\t\t\tdescribe: \"Setup a module alias for resolving (Example: jquery-plugin=jquery.plugin)\",
\t\t\t\tgroup: RESOLVE_GROUP,
\t\t\t\trequiresArg: true
\t\t\t},
\t\t\t\"resolve-extensions\": {
\t\t\t\t\"type\": \"array\",
\t\t\t\tdescribe: \"Setup extensions that should be used to resolve modules (Example: --resolve-extensions .es6,.js)\",
\t\t\t\tgroup: RESOLVE_GROUP,
\t\t\t\trequiresArg: true
\t\t\t},
\t\t\t\"resolve-loader-alias\": {
\t\t\t\ttype: \"string\",
\t\t\t\tdescribe: \"Setup a loader alias for resolving\",
\t\t\t\tgroup: RESOLVE_GROUP,
\t\t\t\trequiresArg: true
\t\t\t},
\t\t\t\"optimize-max-chunks\": {
\t\t\t\tdescribe: \"Try to keep the chunk count below a limit\",
\t\t\t\tgroup: OPTIMIZE_GROUP,
\t\t\t\trequiresArg: true
\t\t\t},
\t\t\t\"optimize-min-chunk-size\": {
\t\t\t\tdescribe: \"Try to keep the chunk size above a limit\",
\t\t\t\tgroup: OPTIMIZE_GROUP,
\t\t\t\trequiresArg: true
\t\t\t},
\t\t\t\"optimize-minimize\": {
\t\t\t\ttype: \"boolean\",
\t\t\t\tdescribe: \"Minimize javascript and switches loaders to minimizing\",
\t\t\t\tgroup: OPTIMIZE_GROUP
\t\t\t},
\t\t\t\"prefetch\": {
\t\t\t\ttype: \"string\",
\t\t\t\tdescribe: \"Prefetch this request (Example: --prefetch ./file.js)\",
\t\t\t\tgroup: ADVANCED_GROUP,
\t\t\t\trequiresArg: true
\t\t\t},
\t\t\t\"provide\": {
\t\t\t\ttype: \"string\",
\t\t\t\tdescribe: \"Provide these modules as free vars in all modules (Example: --provide jQuery=jquery)\",
\t\t\t\tgroup: ADVANCED_GROUP,
\t\t\t\trequiresArg: true
\t\t\t},
\t\t\t\"labeled-modules\": {
\t\t\t\ttype: \"boolean\",
\t\t\t\tdescribe: \"Enables labeled modules\",
\t\t\t\tgroup: ADVANCED_GROUP
\t\t\t},
\t\t\t\"plugin\": {
\t\t\t\ttype: \"string\",
\t\t\t\tdescribe: \"Load this plugin\",
\t\t\t\tgroup: ADVANCED_GROUP,
\t\t\t\trequiresArg: true
\t\t\t},
\t\t\t\"bail\": {
\t\t\t\ttype: \"boolean\",
\t\t\t\tdescribe: \"Abort the compilation on first error\",
\t\t\t\tgroup: ADVANCED_GROUP,
\t\t\t\tdefault: null
\t\t\t},
\t\t\t\"profile\": {
\t\t\t\ttype: \"boolean\",
\t\t\t\tdescribe: \"Profile the compilation and include information in stats\",
\t\t\t\tgroup: ADVANCED_GROUP,
\t\t\t\tdefault: null
\t\t\t},
\t\t\t\"d\": {
\t\t\t\ttype: \"boolean\",
\t\t\t\tdescribe: \"shortcut for --debug --devtool eval-cheap-module-source-map --output-pathinfo\",
\t\t\t\tgroup: BASIC_GROUP
\t\t\t},
\t\t\t\"p\": {
\t\t\t\ttype: \"boolean\",
\t\t\t\tdescribe: \"shortcut for --optimize-minimize --define process.env.NODE_ENV=\\\"production\\\"\",
\t\t\t\tgroup: BASIC_GROUP
\t\t\t}
\t\t}).strict();
};
", "node_modules/webpack/bin/config-yargs.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/webpack/bin/config-yargs.js");
    }
}
