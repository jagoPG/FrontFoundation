<?php

/* node_modules/webpack/bin/webpack.js */
class __TwigTemplate_ad9df08317de335a7ecd561dcedeb242956b49ee48c02f75de345748d2ec403e extends Twig_Template
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
        $__internal_a42e909e463fbe5cae6ab9be3a271bc4fd108d5d5a3d3ea9f43ed5e5d729304e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a42e909e463fbe5cae6ab9be3a271bc4fd108d5d5a3d3ea9f43ed5e5d729304e->enter($__internal_a42e909e463fbe5cae6ab9be3a271bc4fd108d5d5a3d3ea9f43ed5e5d729304e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/webpack/bin/webpack.js"));

        // line 1
        echo "#!/usr/bin/env node

/*
\tMIT License http://www.opensource.org/licenses/mit-license.php
\tAuthor Tobias Koppers @sokra
*/
var path = require(\"path\");

// Local version replace global one
try {
\tvar localWebpack = require.resolve(path.join(process.cwd(), \"node_modules\", \"webpack\", \"bin\", \"webpack.js\"));
\tif(__filename !== localWebpack) {
\t\treturn require(localWebpack);
\t}
} catch(e) {}
var yargs = require(\"yargs\")
\t.usage(\"webpack \" + require(\"../package.json\").version + \"\\n\" +
\t\t\"Usage: https://webpack.js.org/api/cli/\\n\" +
\t\t\"Usage without config file: webpack <entry> [<entry>] <output>\\n\" +
\t\t\"Usage with config file: webpack\");

require(\"./config-yargs\")(yargs);

var DISPLAY_GROUP = \"Stats options:\";
var BASIC_GROUP = \"Basic options:\";

yargs.options({
\t\"json\": {
\t\ttype: \"boolean\",
\t\talias: \"j\",
\t\tdescribe: \"Prints the result as JSON.\"
\t},
\t\"progress\": {
\t\ttype: \"boolean\",
\t\tdescribe: \"Print compilation progress in percentage\",
\t\tgroup: BASIC_GROUP
\t},
\t\"color\": {
\t\ttype: \"boolean\",
\t\talias: \"colors\",
\t\tdefault: function supportsColor() {
\t\t\treturn require(\"supports-color\");
\t\t},
\t\tgroup: DISPLAY_GROUP,
\t\tdescribe: \"Enables/Disables colors on the console\"
\t},
\t\"sort-modules-by\": {
\t\ttype: \"string\",
\t\tgroup: DISPLAY_GROUP,
\t\tdescribe: \"Sorts the modules list by property in module\"
\t},
\t\"sort-chunks-by\": {
\t\ttype: \"string\",
\t\tgroup: DISPLAY_GROUP,
\t\tdescribe: \"Sorts the chunks list by property in chunk\"
\t},
\t\"sort-assets-by\": {
\t\ttype: \"string\",
\t\tgroup: DISPLAY_GROUP,
\t\tdescribe: \"Sorts the assets list by property in asset\"
\t},
\t\"hide-modules\": {
\t\ttype: \"boolean\",
\t\tgroup: DISPLAY_GROUP,
\t\tdescribe: \"Hides info about modules\"
\t},
\t\"display-exclude\": {
\t\ttype: \"string\",
\t\tgroup: DISPLAY_GROUP,
\t\tdescribe: \"Exclude modules in the output\"
\t},
\t\"display-modules\": {
\t\ttype: \"boolean\",
\t\tgroup: DISPLAY_GROUP,
\t\tdescribe: \"Display even excluded modules in the output\"
\t},
\t\"display-max-modules\": {
\t\ttype: \"number\",
\t\tgroup: DISPLAY_GROUP,
\t\tdescribe: \"Sets the maximum number of visible modules in output\"
\t},
\t\"display-chunks\": {
\t\ttype: \"boolean\",
\t\tgroup: DISPLAY_GROUP,
\t\tdescribe: \"Display chunks in the output\"
\t},
\t\"display-entrypoints\": {
\t\ttype: \"boolean\",
\t\tgroup: DISPLAY_GROUP,
\t\tdescribe: \"Display entry points in the output\"
\t},
\t\"display-origins\": {
\t\ttype: \"boolean\",
\t\tgroup: DISPLAY_GROUP,
\t\tdescribe: \"Display origins of chunks in the output\"
\t},
\t\"display-cached\": {
\t\ttype: \"boolean\",
\t\tgroup: DISPLAY_GROUP,
\t\tdescribe: \"Display also cached modules in the output\"
\t},
\t\"display-cached-assets\": {
\t\ttype: \"boolean\",
\t\tgroup: DISPLAY_GROUP,
\t\tdescribe: \"Display also cached assets in the output\"
\t},
\t\"display-reasons\": {
\t\ttype: \"boolean\",
\t\tgroup: DISPLAY_GROUP,
\t\tdescribe: \"Display reasons about module inclusion in the output\"
\t},
\t\"display-depth\": {
\t\ttype: \"boolean\",
\t\tgroup: DISPLAY_GROUP,
\t\tdescribe: \"Display distance from entry point for each module\"
\t},
\t\"display-used-exports\": {
\t\ttype: \"boolean\",
\t\tgroup: DISPLAY_GROUP,
\t\tdescribe: \"Display information about used exports in modules (Tree Shaking)\"
\t},
\t\"display-provided-exports\": {
\t\ttype: \"boolean\",
\t\tgroup: DISPLAY_GROUP,
\t\tdescribe: \"Display information about exports provided from modules\"
\t},
\t\"display-optimization-bailout\": {
\t\ttype: \"boolean\",
\t\tgroup: DISPLAY_GROUP,
\t\tdescribe: \"Display information about why optimization bailed out for modules\"
\t},
\t\"display-error-details\": {
\t\ttype: \"boolean\",
\t\tgroup: DISPLAY_GROUP,
\t\tdescribe: \"Display details about errors\"
\t},
\t\"display\": {
\t\ttype: \"string\",
\t\tgroup: DISPLAY_GROUP,
\t\tdescribe: \"Select display preset (verbose, detailed, normal, minimal, errors-only, none)\"
\t},
\t\"verbose\": {
\t\ttype: \"boolean\",
\t\tgroup: DISPLAY_GROUP,
\t\tdescribe: \"Show more details\"
\t}
});

// yargs will terminate the process early when the user uses help or version.
// This causes large help outputs to be cut short (https://github.com/nodejs/node/wiki/API-changes-between-v0.10-and-v4#process).
// To prevent this we use the yargs.parse API and exit the process normally
yargs.parse(process.argv.slice(2), (err, argv, output) => {

\t// arguments validation failed
\tif(err && output) {
\t\tconsole.error(output);
\t\tprocess.exitCode = 1;
\t\treturn;
\t}

\t// help or version info
\tif(output) {
\t\tconsole.log(output);
\t\treturn;
\t}

\tif(argv.verbose) {
\t\targv[\"display\"] = \"verbose\";
\t}

\tvar options = require(\"./convert-argv\")(yargs, argv);

\tfunction ifArg(name, fn, init) {
\t\tif(Array.isArray(argv[name])) {
\t\t\tif(init) init();
\t\t\targv[name].forEach(fn);
\t\t} else if(typeof argv[name] !== \"undefined\") {
\t\t\tif(init) init();
\t\t\tfn(argv[name], -1);
\t\t}
\t}

\tfunction processOptions(options) {
\t\t// process Promise
\t\tif(typeof options.then === \"function\") {
\t\t\toptions.then(processOptions).catch(function(err) {
\t\t\t\tconsole.error(err.stack || err);
\t\t\t\tprocess.exit(1); // eslint-disable-line
\t\t\t});
\t\t\treturn;
\t\t}

\t\tvar firstOptions = [].concat(options)[0];
\t\tvar statsPresetToOptions = require(\"../lib/Stats.js\").presetToOptions;

\t\tvar outputOptions = options.stats;
\t\tif(typeof outputOptions === \"boolean\" || typeof outputOptions === \"string\") {
\t\t\toutputOptions = statsPresetToOptions(outputOptions);
\t\t} else if(!outputOptions) {
\t\t\toutputOptions = {};
\t\t}

\t\tifArg(\"display\", function(preset) {
\t\t\toutputOptions = statsPresetToOptions(preset);
\t\t});

\t\toutputOptions = Object.create(outputOptions);
\t\tif(Array.isArray(options) && !outputOptions.children) {
\t\t\toutputOptions.children = options.map(o => o.stats);
\t\t}
\t\tif(typeof outputOptions.context === \"undefined\")
\t\t\toutputOptions.context = firstOptions.context;

\t\tifArg(\"json\", function(bool) {
\t\t\tif(bool)
\t\t\t\toutputOptions.json = bool;
\t\t});

\t\tif(typeof outputOptions.colors === \"undefined\")
\t\t\toutputOptions.colors = require(\"supports-color\");

\t\tifArg(\"sort-modules-by\", function(value) {
\t\t\toutputOptions.modulesSort = value;
\t\t});

\t\tifArg(\"sort-chunks-by\", function(value) {
\t\t\toutputOptions.chunksSort = value;
\t\t});

\t\tifArg(\"sort-assets-by\", function(value) {
\t\t\toutputOptions.assetsSort = value;
\t\t});

\t\tifArg(\"display-exclude\", function(value) {
\t\t\toutputOptions.exclude = value;
\t\t});

\t\tif(!outputOptions.json) {
\t\t\tif(typeof outputOptions.cached === \"undefined\")
\t\t\t\toutputOptions.cached = false;
\t\t\tif(typeof outputOptions.cachedAssets === \"undefined\")
\t\t\t\toutputOptions.cachedAssets = false;

\t\t\tifArg(\"display-chunks\", function(bool) {
\t\t\t\tif(bool) {
\t\t\t\t\toutputOptions.modules = false;
\t\t\t\t\toutputOptions.chunks = true;
\t\t\t\t\toutputOptions.chunkModules = true;
\t\t\t\t}
\t\t\t});

\t\t\tifArg(\"display-entrypoints\", function(bool) {
\t\t\t\tif(bool)
\t\t\t\t\toutputOptions.entrypoints = true;
\t\t\t});

\t\t\tifArg(\"display-reasons\", function(bool) {
\t\t\t\tif(bool)
\t\t\t\t\toutputOptions.reasons = true;
\t\t\t});

\t\t\tifArg(\"display-depth\", function(bool) {
\t\t\t\tif(bool)
\t\t\t\t\toutputOptions.depth = true;
\t\t\t});

\t\t\tifArg(\"display-used-exports\", function(bool) {
\t\t\t\tif(bool)
\t\t\t\t\toutputOptions.usedExports = true;
\t\t\t});

\t\t\tifArg(\"display-provided-exports\", function(bool) {
\t\t\t\tif(bool)
\t\t\t\t\toutputOptions.providedExports = true;
\t\t\t});

\t\t\tifArg(\"display-optimization-bailout\", function(bool) {
\t\t\t\tif(bool)
\t\t\t\t\toutputOptions.optimizationBailout = bool;
\t\t\t});

\t\t\tifArg(\"display-error-details\", function(bool) {
\t\t\t\tif(bool)
\t\t\t\t\toutputOptions.errorDetails = true;
\t\t\t});

\t\t\tifArg(\"display-origins\", function(bool) {
\t\t\t\tif(bool)
\t\t\t\t\toutputOptions.chunkOrigins = true;
\t\t\t});

\t\t\tifArg(\"display-max-modules\", function(value) {
\t\t\t\toutputOptions.maxModules = +value;
\t\t\t});

\t\t\tifArg(\"display-cached\", function(bool) {
\t\t\t\tif(bool)
\t\t\t\t\toutputOptions.cached = true;
\t\t\t});

\t\t\tifArg(\"display-cached-assets\", function(bool) {
\t\t\t\tif(bool)
\t\t\t\t\toutputOptions.cachedAssets = true;
\t\t\t});

\t\t\tif(!outputOptions.exclude)
\t\t\t\toutputOptions.exclude = [\"node_modules\", \"bower_components\", \"components\"];

\t\t\tif(argv[\"display-modules\"]) {
\t\t\t\toutputOptions.maxModules = Infinity;
\t\t\t\toutputOptions.exclude = undefined;
\t\t\t\toutputOptions.modules = true;
\t\t\t}
\t\t}

\t\tifArg(\"hide-modules\", function(bool) {
\t\t\tif(bool) {
\t\t\t\toutputOptions.modules = false;
\t\t\t\toutputOptions.chunkModules = false;
\t\t\t}
\t\t});

\t\tvar webpack = require(\"../lib/webpack.js\");

\t\tError.stackTraceLimit = 30;
\t\tvar lastHash = null;
\t\tvar compiler;
\t\ttry {
\t\t\tcompiler = webpack(options);
\t\t} catch(e) {
\t\t\tvar WebpackOptionsValidationError = require(\"../lib/WebpackOptionsValidationError\");
\t\t\tif(e instanceof WebpackOptionsValidationError) {
\t\t\t\tif(argv.color)
\t\t\t\t\tconsole.error(\"\\u001b[1m\\u001b[31m\" + e.message + \"\\u001b[39m\\u001b[22m\");
\t\t\t\telse
\t\t\t\t\tconsole.error(e.message);
\t\t\t\tprocess.exit(1); // eslint-disable-line no-process-exit
\t\t\t}
\t\t\tthrow e;
\t\t}

\t\tif(argv.progress) {
\t\t\tvar ProgressPlugin = require(\"../lib/ProgressPlugin\");
\t\t\tcompiler.apply(new ProgressPlugin({
\t\t\t\tprofile: argv.profile
\t\t\t}));
\t\t}

\t\tfunction compilerCallback(err, stats) {
\t\t\tif(!options.watch || err) {
\t\t\t\t// Do not keep cache anymore
\t\t\t\tcompiler.purgeInputFileSystem();
\t\t\t}
\t\t\tif(err) {
\t\t\t\tlastHash = null;
\t\t\t\tconsole.error(err.stack || err);
\t\t\t\tif(err.details) console.error(err.details);
\t\t\t\tprocess.exit(1); // eslint-disable-line
\t\t\t}
\t\t\tif(outputOptions.json) {
\t\t\t\tprocess.stdout.write(JSON.stringify(stats.toJson(outputOptions), null, 2) + \"\\n\");
\t\t\t} else if(stats.hash !== lastHash) {
\t\t\t\tlastHash = stats.hash;
\t\t\t\tvar statsString = stats.toString(outputOptions);
\t\t\t\tif(statsString)
\t\t\t\t\tprocess.stdout.write(statsString + \"\\n\");
\t\t\t}
\t\t\tif(!options.watch && stats.hasErrors()) {
\t\t\t\tprocess.exitCode = 2;
\t\t\t}
\t\t}
\t\tif(firstOptions.watch || options.watch) {
\t\t\tvar watchOptions = firstOptions.watchOptions || firstOptions.watch || options.watch || {};
\t\t\tif(watchOptions.stdin) {
\t\t\t\tprocess.stdin.on(\"end\", function() {
\t\t\t\t\tprocess.exit(); // eslint-disable-line
\t\t\t\t});
\t\t\t\tprocess.stdin.resume();
\t\t\t}
\t\t\tcompiler.watch(watchOptions, compilerCallback);
\t\t\tconsole.log(\"\\nWebpack is watching the files…\\n\");
\t\t} else
\t\t\tcompiler.run(compilerCallback);

\t}

\tprocessOptions(options);

});
";
        
        $__internal_a42e909e463fbe5cae6ab9be3a271bc4fd108d5d5a3d3ea9f43ed5e5d729304e->leave($__internal_a42e909e463fbe5cae6ab9be3a271bc4fd108d5d5a3d3ea9f43ed5e5d729304e_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/webpack/bin/webpack.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("#!/usr/bin/env node

/*
\tMIT License http://www.opensource.org/licenses/mit-license.php
\tAuthor Tobias Koppers @sokra
*/
var path = require(\"path\");

// Local version replace global one
try {
\tvar localWebpack = require.resolve(path.join(process.cwd(), \"node_modules\", \"webpack\", \"bin\", \"webpack.js\"));
\tif(__filename !== localWebpack) {
\t\treturn require(localWebpack);
\t}
} catch(e) {}
var yargs = require(\"yargs\")
\t.usage(\"webpack \" + require(\"../package.json\").version + \"\\n\" +
\t\t\"Usage: https://webpack.js.org/api/cli/\\n\" +
\t\t\"Usage without config file: webpack <entry> [<entry>] <output>\\n\" +
\t\t\"Usage with config file: webpack\");

require(\"./config-yargs\")(yargs);

var DISPLAY_GROUP = \"Stats options:\";
var BASIC_GROUP = \"Basic options:\";

yargs.options({
\t\"json\": {
\t\ttype: \"boolean\",
\t\talias: \"j\",
\t\tdescribe: \"Prints the result as JSON.\"
\t},
\t\"progress\": {
\t\ttype: \"boolean\",
\t\tdescribe: \"Print compilation progress in percentage\",
\t\tgroup: BASIC_GROUP
\t},
\t\"color\": {
\t\ttype: \"boolean\",
\t\talias: \"colors\",
\t\tdefault: function supportsColor() {
\t\t\treturn require(\"supports-color\");
\t\t},
\t\tgroup: DISPLAY_GROUP,
\t\tdescribe: \"Enables/Disables colors on the console\"
\t},
\t\"sort-modules-by\": {
\t\ttype: \"string\",
\t\tgroup: DISPLAY_GROUP,
\t\tdescribe: \"Sorts the modules list by property in module\"
\t},
\t\"sort-chunks-by\": {
\t\ttype: \"string\",
\t\tgroup: DISPLAY_GROUP,
\t\tdescribe: \"Sorts the chunks list by property in chunk\"
\t},
\t\"sort-assets-by\": {
\t\ttype: \"string\",
\t\tgroup: DISPLAY_GROUP,
\t\tdescribe: \"Sorts the assets list by property in asset\"
\t},
\t\"hide-modules\": {
\t\ttype: \"boolean\",
\t\tgroup: DISPLAY_GROUP,
\t\tdescribe: \"Hides info about modules\"
\t},
\t\"display-exclude\": {
\t\ttype: \"string\",
\t\tgroup: DISPLAY_GROUP,
\t\tdescribe: \"Exclude modules in the output\"
\t},
\t\"display-modules\": {
\t\ttype: \"boolean\",
\t\tgroup: DISPLAY_GROUP,
\t\tdescribe: \"Display even excluded modules in the output\"
\t},
\t\"display-max-modules\": {
\t\ttype: \"number\",
\t\tgroup: DISPLAY_GROUP,
\t\tdescribe: \"Sets the maximum number of visible modules in output\"
\t},
\t\"display-chunks\": {
\t\ttype: \"boolean\",
\t\tgroup: DISPLAY_GROUP,
\t\tdescribe: \"Display chunks in the output\"
\t},
\t\"display-entrypoints\": {
\t\ttype: \"boolean\",
\t\tgroup: DISPLAY_GROUP,
\t\tdescribe: \"Display entry points in the output\"
\t},
\t\"display-origins\": {
\t\ttype: \"boolean\",
\t\tgroup: DISPLAY_GROUP,
\t\tdescribe: \"Display origins of chunks in the output\"
\t},
\t\"display-cached\": {
\t\ttype: \"boolean\",
\t\tgroup: DISPLAY_GROUP,
\t\tdescribe: \"Display also cached modules in the output\"
\t},
\t\"display-cached-assets\": {
\t\ttype: \"boolean\",
\t\tgroup: DISPLAY_GROUP,
\t\tdescribe: \"Display also cached assets in the output\"
\t},
\t\"display-reasons\": {
\t\ttype: \"boolean\",
\t\tgroup: DISPLAY_GROUP,
\t\tdescribe: \"Display reasons about module inclusion in the output\"
\t},
\t\"display-depth\": {
\t\ttype: \"boolean\",
\t\tgroup: DISPLAY_GROUP,
\t\tdescribe: \"Display distance from entry point for each module\"
\t},
\t\"display-used-exports\": {
\t\ttype: \"boolean\",
\t\tgroup: DISPLAY_GROUP,
\t\tdescribe: \"Display information about used exports in modules (Tree Shaking)\"
\t},
\t\"display-provided-exports\": {
\t\ttype: \"boolean\",
\t\tgroup: DISPLAY_GROUP,
\t\tdescribe: \"Display information about exports provided from modules\"
\t},
\t\"display-optimization-bailout\": {
\t\ttype: \"boolean\",
\t\tgroup: DISPLAY_GROUP,
\t\tdescribe: \"Display information about why optimization bailed out for modules\"
\t},
\t\"display-error-details\": {
\t\ttype: \"boolean\",
\t\tgroup: DISPLAY_GROUP,
\t\tdescribe: \"Display details about errors\"
\t},
\t\"display\": {
\t\ttype: \"string\",
\t\tgroup: DISPLAY_GROUP,
\t\tdescribe: \"Select display preset (verbose, detailed, normal, minimal, errors-only, none)\"
\t},
\t\"verbose\": {
\t\ttype: \"boolean\",
\t\tgroup: DISPLAY_GROUP,
\t\tdescribe: \"Show more details\"
\t}
});

// yargs will terminate the process early when the user uses help or version.
// This causes large help outputs to be cut short (https://github.com/nodejs/node/wiki/API-changes-between-v0.10-and-v4#process).
// To prevent this we use the yargs.parse API and exit the process normally
yargs.parse(process.argv.slice(2), (err, argv, output) => {

\t// arguments validation failed
\tif(err && output) {
\t\tconsole.error(output);
\t\tprocess.exitCode = 1;
\t\treturn;
\t}

\t// help or version info
\tif(output) {
\t\tconsole.log(output);
\t\treturn;
\t}

\tif(argv.verbose) {
\t\targv[\"display\"] = \"verbose\";
\t}

\tvar options = require(\"./convert-argv\")(yargs, argv);

\tfunction ifArg(name, fn, init) {
\t\tif(Array.isArray(argv[name])) {
\t\t\tif(init) init();
\t\t\targv[name].forEach(fn);
\t\t} else if(typeof argv[name] !== \"undefined\") {
\t\t\tif(init) init();
\t\t\tfn(argv[name], -1);
\t\t}
\t}

\tfunction processOptions(options) {
\t\t// process Promise
\t\tif(typeof options.then === \"function\") {
\t\t\toptions.then(processOptions).catch(function(err) {
\t\t\t\tconsole.error(err.stack || err);
\t\t\t\tprocess.exit(1); // eslint-disable-line
\t\t\t});
\t\t\treturn;
\t\t}

\t\tvar firstOptions = [].concat(options)[0];
\t\tvar statsPresetToOptions = require(\"../lib/Stats.js\").presetToOptions;

\t\tvar outputOptions = options.stats;
\t\tif(typeof outputOptions === \"boolean\" || typeof outputOptions === \"string\") {
\t\t\toutputOptions = statsPresetToOptions(outputOptions);
\t\t} else if(!outputOptions) {
\t\t\toutputOptions = {};
\t\t}

\t\tifArg(\"display\", function(preset) {
\t\t\toutputOptions = statsPresetToOptions(preset);
\t\t});

\t\toutputOptions = Object.create(outputOptions);
\t\tif(Array.isArray(options) && !outputOptions.children) {
\t\t\toutputOptions.children = options.map(o => o.stats);
\t\t}
\t\tif(typeof outputOptions.context === \"undefined\")
\t\t\toutputOptions.context = firstOptions.context;

\t\tifArg(\"json\", function(bool) {
\t\t\tif(bool)
\t\t\t\toutputOptions.json = bool;
\t\t});

\t\tif(typeof outputOptions.colors === \"undefined\")
\t\t\toutputOptions.colors = require(\"supports-color\");

\t\tifArg(\"sort-modules-by\", function(value) {
\t\t\toutputOptions.modulesSort = value;
\t\t});

\t\tifArg(\"sort-chunks-by\", function(value) {
\t\t\toutputOptions.chunksSort = value;
\t\t});

\t\tifArg(\"sort-assets-by\", function(value) {
\t\t\toutputOptions.assetsSort = value;
\t\t});

\t\tifArg(\"display-exclude\", function(value) {
\t\t\toutputOptions.exclude = value;
\t\t});

\t\tif(!outputOptions.json) {
\t\t\tif(typeof outputOptions.cached === \"undefined\")
\t\t\t\toutputOptions.cached = false;
\t\t\tif(typeof outputOptions.cachedAssets === \"undefined\")
\t\t\t\toutputOptions.cachedAssets = false;

\t\t\tifArg(\"display-chunks\", function(bool) {
\t\t\t\tif(bool) {
\t\t\t\t\toutputOptions.modules = false;
\t\t\t\t\toutputOptions.chunks = true;
\t\t\t\t\toutputOptions.chunkModules = true;
\t\t\t\t}
\t\t\t});

\t\t\tifArg(\"display-entrypoints\", function(bool) {
\t\t\t\tif(bool)
\t\t\t\t\toutputOptions.entrypoints = true;
\t\t\t});

\t\t\tifArg(\"display-reasons\", function(bool) {
\t\t\t\tif(bool)
\t\t\t\t\toutputOptions.reasons = true;
\t\t\t});

\t\t\tifArg(\"display-depth\", function(bool) {
\t\t\t\tif(bool)
\t\t\t\t\toutputOptions.depth = true;
\t\t\t});

\t\t\tifArg(\"display-used-exports\", function(bool) {
\t\t\t\tif(bool)
\t\t\t\t\toutputOptions.usedExports = true;
\t\t\t});

\t\t\tifArg(\"display-provided-exports\", function(bool) {
\t\t\t\tif(bool)
\t\t\t\t\toutputOptions.providedExports = true;
\t\t\t});

\t\t\tifArg(\"display-optimization-bailout\", function(bool) {
\t\t\t\tif(bool)
\t\t\t\t\toutputOptions.optimizationBailout = bool;
\t\t\t});

\t\t\tifArg(\"display-error-details\", function(bool) {
\t\t\t\tif(bool)
\t\t\t\t\toutputOptions.errorDetails = true;
\t\t\t});

\t\t\tifArg(\"display-origins\", function(bool) {
\t\t\t\tif(bool)
\t\t\t\t\toutputOptions.chunkOrigins = true;
\t\t\t});

\t\t\tifArg(\"display-max-modules\", function(value) {
\t\t\t\toutputOptions.maxModules = +value;
\t\t\t});

\t\t\tifArg(\"display-cached\", function(bool) {
\t\t\t\tif(bool)
\t\t\t\t\toutputOptions.cached = true;
\t\t\t});

\t\t\tifArg(\"display-cached-assets\", function(bool) {
\t\t\t\tif(bool)
\t\t\t\t\toutputOptions.cachedAssets = true;
\t\t\t});

\t\t\tif(!outputOptions.exclude)
\t\t\t\toutputOptions.exclude = [\"node_modules\", \"bower_components\", \"components\"];

\t\t\tif(argv[\"display-modules\"]) {
\t\t\t\toutputOptions.maxModules = Infinity;
\t\t\t\toutputOptions.exclude = undefined;
\t\t\t\toutputOptions.modules = true;
\t\t\t}
\t\t}

\t\tifArg(\"hide-modules\", function(bool) {
\t\t\tif(bool) {
\t\t\t\toutputOptions.modules = false;
\t\t\t\toutputOptions.chunkModules = false;
\t\t\t}
\t\t});

\t\tvar webpack = require(\"../lib/webpack.js\");

\t\tError.stackTraceLimit = 30;
\t\tvar lastHash = null;
\t\tvar compiler;
\t\ttry {
\t\t\tcompiler = webpack(options);
\t\t} catch(e) {
\t\t\tvar WebpackOptionsValidationError = require(\"../lib/WebpackOptionsValidationError\");
\t\t\tif(e instanceof WebpackOptionsValidationError) {
\t\t\t\tif(argv.color)
\t\t\t\t\tconsole.error(\"\\u001b[1m\\u001b[31m\" + e.message + \"\\u001b[39m\\u001b[22m\");
\t\t\t\telse
\t\t\t\t\tconsole.error(e.message);
\t\t\t\tprocess.exit(1); // eslint-disable-line no-process-exit
\t\t\t}
\t\t\tthrow e;
\t\t}

\t\tif(argv.progress) {
\t\t\tvar ProgressPlugin = require(\"../lib/ProgressPlugin\");
\t\t\tcompiler.apply(new ProgressPlugin({
\t\t\t\tprofile: argv.profile
\t\t\t}));
\t\t}

\t\tfunction compilerCallback(err, stats) {
\t\t\tif(!options.watch || err) {
\t\t\t\t// Do not keep cache anymore
\t\t\t\tcompiler.purgeInputFileSystem();
\t\t\t}
\t\t\tif(err) {
\t\t\t\tlastHash = null;
\t\t\t\tconsole.error(err.stack || err);
\t\t\t\tif(err.details) console.error(err.details);
\t\t\t\tprocess.exit(1); // eslint-disable-line
\t\t\t}
\t\t\tif(outputOptions.json) {
\t\t\t\tprocess.stdout.write(JSON.stringify(stats.toJson(outputOptions), null, 2) + \"\\n\");
\t\t\t} else if(stats.hash !== lastHash) {
\t\t\t\tlastHash = stats.hash;
\t\t\t\tvar statsString = stats.toString(outputOptions);
\t\t\t\tif(statsString)
\t\t\t\t\tprocess.stdout.write(statsString + \"\\n\");
\t\t\t}
\t\t\tif(!options.watch && stats.hasErrors()) {
\t\t\t\tprocess.exitCode = 2;
\t\t\t}
\t\t}
\t\tif(firstOptions.watch || options.watch) {
\t\t\tvar watchOptions = firstOptions.watchOptions || firstOptions.watch || options.watch || {};
\t\t\tif(watchOptions.stdin) {
\t\t\t\tprocess.stdin.on(\"end\", function() {
\t\t\t\t\tprocess.exit(); // eslint-disable-line
\t\t\t\t});
\t\t\t\tprocess.stdin.resume();
\t\t\t}
\t\t\tcompiler.watch(watchOptions, compilerCallback);
\t\t\tconsole.log(\"\\nWebpack is watching the files…\\n\");
\t\t} else
\t\t\tcompiler.run(compilerCallback);

\t}

\tprocessOptions(options);

});
", "node_modules/webpack/bin/webpack.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/webpack/bin/webpack.js");
    }
}
