<?php

/* node_modules/webpack/bin/config-optimist.js */
class __TwigTemplate_bdc4cded9a3bde5f49be4608e614820222a9b0d060f43edea4f50c3ccfe712d7 extends Twig_Template
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
        $__internal_afd94d4e0593f0cbb826173cfec5c546c1873b66a7f98ab6c5a5d9e750159af8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_afd94d4e0593f0cbb826173cfec5c546c1873b66a7f98ab6c5a5d9e750159af8->enter($__internal_afd94d4e0593f0cbb826173cfec5c546c1873b66a7f98ab6c5a5d9e750159af8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/webpack/bin/config-optimist.js"));

        // line 1
        echo "module.exports = function(optimist) {
\toptimist
\t\t.boolean(\"help\").alias(\"help\", \"h\").alias(\"help\", \"?\").describe(\"help\")
\t\t.string(\"config\").describe(\"config\", \"Path to the config file\")
\t\t.string(\"config-name\").describe(\"config-name\", \"Name of the config to use\")
\t\t.string(\"env\").describe(\"env\", \"Environment passed to the config, when it is a function\")
\t\t.string(\"context\").describe(\"context\", \"The root directory for resolving entry point and stats\")
\t\t.string(\"entry\").describe(\"entry\", \"The entry point\")
\t\t.string(\"module-bind\").describe(\"module-bind\", \"Bind an extension to a loader\")
\t\t.string(\"module-bind-post\").describe(\"module-bind-post\")
\t\t.string(\"module-bind-pre\").describe(\"module-bind-pre\")
\t\t.string(\"output-path\").describe(\"output-path\", \"The output path for compilation assets\")
\t\t.string(\"output-filename\").describe(\"output-filename\", \"The output filename of the bundle\")
\t\t.string(\"output-chunk-filename\").describe(\"output-chunk-filename\", \"The output filename for additional chunks\")
\t\t.string(\"output-source-map-filename\").describe(\"output-source-map-filename\", \"The output filename for the SourceMap\")
\t\t.string(\"output-public-path\").describe(\"output-public-path\", \"The public path for the assets\")
\t\t.string(\"output-jsonp-function\").describe(\"output-jsonp-function\", \"The name of the jsonp function used for chunk loading\")
\t\t.boolean(\"output-pathinfo\").describe(\"output-pathinfo\", \"Include a comment with the request for every dependency\")
\t\t.string(\"output-library\").describe(\"output-library\", \"Expose the exports of the entry point as library\")
\t\t.string(\"output-library-target\").describe(\"output-library-target\", \"The type for exposing the exports of the entry point as library\")
\t\t.string(\"records-input-path\").describe(\"records-input-path\", \"Path to the records file (reading)\")
\t\t.string(\"records-output-path\").describe(\"records-output-path\", \"Path to the records file (writing)\")
\t\t.string(\"records-path\").describe(\"records-path\", \"Path to the records file\")
\t\t.string(\"define\").describe(\"define\", \"Define any free var in the bundle\")
\t\t.string(\"target\").describe(\"target\", \"The targeted execution environment\")
\t\t.boolean(\"cache\").describe(\"cache\", \"Enable in memory caching\").default(\"cache\", true)
\t\t.boolean(\"watch\").alias(\"watch\", \"w\").describe(\"watch\", \"Watch the filesystem for changes\")
\t\t.boolean(\"watch-stdin\").alias(\"watch-stdin\", \"stdin\").describe(\"Exit the process when stdin is closed\")
\t\t.describe(\"watch-aggregate-timeout\", \"Timeout for gathering changes while watching\")
\t\t.describe(\"watch-poll\", \"The polling interval for watching (also enable polling)\")
\t\t.boolean(\"hot\").describe(\"hot\", \"Enables Hot Module Replacement\")
\t\t.boolean(\"debug\").describe(\"debug\", \"Switch loaders to debug mode\")
\t\t.string(\"devtool\").describe(\"devtool\", \"Enable devtool for better debugging experience\")
\t\t.boolean(\"progress\").describe(\"progress\", \"Print compilation progress in percentage\")
\t\t.string(\"resolve-alias\").describe(\"resolve-alias\", \"Setup a module alias for resolving\")
\t\t.string(\"resolve-extensions\").describe(\"resolve-extensions\", \"Setup extensions that should be used to resolve modules\")
\t\t.string(\"resolve-loader-alias\").describe(\"resolve-loader-alias\", \"Setup a loader alias for resolving\")
\t\t.describe(\"optimize-max-chunks\", \"Try to keep the chunk count below a limit\")
\t\t.describe(\"optimize-min-chunk-size\", \"Try to keep the chunk size above a limit\")
\t\t.boolean(\"optimize-minimize\").describe(\"optimize-minimize\", \"Minimize javascript and switches loaders to minimizing\")
\t\t.string(\"prefetch\").describe(\"prefetch\", \"Prefetch this request\")
\t\t.string(\"provide\").describe(\"provide\", \"Provide these modules as free vars in all modules\")
\t\t.string(\"plugin\").describe(\"plugin\", \"Load this plugin\")
\t\t.boolean(\"bail\").describe(\"bail\", \"Abort the compilation on first error\")
\t\t.boolean(\"profile\").describe(\"profile\", \"Profile the compilation and include information in stats\")
\t\t.boolean(\"d\").describe(\"d\", \"shortcut for --debug --devtool eval-check-module-source-map --output-pathinfo\")
\t\t.boolean(\"p\").describe(\"p\", \"shortcut for --optimize-minimize --define process.env.NODE_ENV=\\\"production\\\"\");
};
";
        
        $__internal_afd94d4e0593f0cbb826173cfec5c546c1873b66a7f98ab6c5a5d9e750159af8->leave($__internal_afd94d4e0593f0cbb826173cfec5c546c1873b66a7f98ab6c5a5d9e750159af8_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/webpack/bin/config-optimist.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("module.exports = function(optimist) {
\toptimist
\t\t.boolean(\"help\").alias(\"help\", \"h\").alias(\"help\", \"?\").describe(\"help\")
\t\t.string(\"config\").describe(\"config\", \"Path to the config file\")
\t\t.string(\"config-name\").describe(\"config-name\", \"Name of the config to use\")
\t\t.string(\"env\").describe(\"env\", \"Environment passed to the config, when it is a function\")
\t\t.string(\"context\").describe(\"context\", \"The root directory for resolving entry point and stats\")
\t\t.string(\"entry\").describe(\"entry\", \"The entry point\")
\t\t.string(\"module-bind\").describe(\"module-bind\", \"Bind an extension to a loader\")
\t\t.string(\"module-bind-post\").describe(\"module-bind-post\")
\t\t.string(\"module-bind-pre\").describe(\"module-bind-pre\")
\t\t.string(\"output-path\").describe(\"output-path\", \"The output path for compilation assets\")
\t\t.string(\"output-filename\").describe(\"output-filename\", \"The output filename of the bundle\")
\t\t.string(\"output-chunk-filename\").describe(\"output-chunk-filename\", \"The output filename for additional chunks\")
\t\t.string(\"output-source-map-filename\").describe(\"output-source-map-filename\", \"The output filename for the SourceMap\")
\t\t.string(\"output-public-path\").describe(\"output-public-path\", \"The public path for the assets\")
\t\t.string(\"output-jsonp-function\").describe(\"output-jsonp-function\", \"The name of the jsonp function used for chunk loading\")
\t\t.boolean(\"output-pathinfo\").describe(\"output-pathinfo\", \"Include a comment with the request for every dependency\")
\t\t.string(\"output-library\").describe(\"output-library\", \"Expose the exports of the entry point as library\")
\t\t.string(\"output-library-target\").describe(\"output-library-target\", \"The type for exposing the exports of the entry point as library\")
\t\t.string(\"records-input-path\").describe(\"records-input-path\", \"Path to the records file (reading)\")
\t\t.string(\"records-output-path\").describe(\"records-output-path\", \"Path to the records file (writing)\")
\t\t.string(\"records-path\").describe(\"records-path\", \"Path to the records file\")
\t\t.string(\"define\").describe(\"define\", \"Define any free var in the bundle\")
\t\t.string(\"target\").describe(\"target\", \"The targeted execution environment\")
\t\t.boolean(\"cache\").describe(\"cache\", \"Enable in memory caching\").default(\"cache\", true)
\t\t.boolean(\"watch\").alias(\"watch\", \"w\").describe(\"watch\", \"Watch the filesystem for changes\")
\t\t.boolean(\"watch-stdin\").alias(\"watch-stdin\", \"stdin\").describe(\"Exit the process when stdin is closed\")
\t\t.describe(\"watch-aggregate-timeout\", \"Timeout for gathering changes while watching\")
\t\t.describe(\"watch-poll\", \"The polling interval for watching (also enable polling)\")
\t\t.boolean(\"hot\").describe(\"hot\", \"Enables Hot Module Replacement\")
\t\t.boolean(\"debug\").describe(\"debug\", \"Switch loaders to debug mode\")
\t\t.string(\"devtool\").describe(\"devtool\", \"Enable devtool for better debugging experience\")
\t\t.boolean(\"progress\").describe(\"progress\", \"Print compilation progress in percentage\")
\t\t.string(\"resolve-alias\").describe(\"resolve-alias\", \"Setup a module alias for resolving\")
\t\t.string(\"resolve-extensions\").describe(\"resolve-extensions\", \"Setup extensions that should be used to resolve modules\")
\t\t.string(\"resolve-loader-alias\").describe(\"resolve-loader-alias\", \"Setup a loader alias for resolving\")
\t\t.describe(\"optimize-max-chunks\", \"Try to keep the chunk count below a limit\")
\t\t.describe(\"optimize-min-chunk-size\", \"Try to keep the chunk size above a limit\")
\t\t.boolean(\"optimize-minimize\").describe(\"optimize-minimize\", \"Minimize javascript and switches loaders to minimizing\")
\t\t.string(\"prefetch\").describe(\"prefetch\", \"Prefetch this request\")
\t\t.string(\"provide\").describe(\"provide\", \"Provide these modules as free vars in all modules\")
\t\t.string(\"plugin\").describe(\"plugin\", \"Load this plugin\")
\t\t.boolean(\"bail\").describe(\"bail\", \"Abort the compilation on first error\")
\t\t.boolean(\"profile\").describe(\"profile\", \"Profile the compilation and include information in stats\")
\t\t.boolean(\"d\").describe(\"d\", \"shortcut for --debug --devtool eval-check-module-source-map --output-pathinfo\")
\t\t.boolean(\"p\").describe(\"p\", \"shortcut for --optimize-minimize --define process.env.NODE_ENV=\\\"production\\\"\");
};
", "node_modules/webpack/bin/config-optimist.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/webpack/bin/config-optimist.js");
    }
}
