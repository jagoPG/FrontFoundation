<?php

/* node_modules/webpack/bin/convert-argv.js */
class __TwigTemplate_2f1e06f5c67e8c929df4a509b6e9dd7e4eabc798ca83f4377ee5287f0dd62831 extends Twig_Template
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
        $__internal_96b61effee3b8b77a51f2042ecf3b4893b6a762c177bbcc9d11bea8c1b26f345 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_96b61effee3b8b77a51f2042ecf3b4893b6a762c177bbcc9d11bea8c1b26f345->enter($__internal_96b61effee3b8b77a51f2042ecf3b4893b6a762c177bbcc9d11bea8c1b26f345_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/webpack/bin/convert-argv.js"));

        // line 1
        echo "var path = require(\"path\");
var fs = require(\"fs\");
fs.existsSync = fs.existsSync || path.existsSync;
var interpret = require(\"interpret\");
var prepareOptions = require(\"../lib/prepareOptions\");

module.exports = function(yargs, argv, convertOptions) {

\tvar options = [];

\t// Shortcuts
\tif(argv.d) {
\t\targv.debug = true;
\t\targv[\"output-pathinfo\"] = true;
\t\tif(!argv.devtool) {
\t\t\targv.devtool = \"eval-cheap-module-source-map\";
\t\t}
\t}
\tif(argv.p) {
\t\targv[\"optimize-minimize\"] = true;
\t\targv[\"define\"] = [].concat(argv[\"define\"] || []).concat(\"process.env.NODE_ENV=\\\"production\\\"\");
\t}

\tvar configFileLoaded = false;
\tvar configFiles = [];
\tvar extensions = Object.keys(interpret.extensions).sort(function(a, b) {
\t\treturn a === \".js\" ? -1 : b === \".js\" ? 1 : a.length - b.length;
\t});
\tvar defaultConfigFiles = [\"webpack.config\", \"webpackfile\"].map(function(filename) {
\t\treturn extensions.map(function(ext) {
\t\t\treturn {
\t\t\t\tpath: path.resolve(filename + ext),
\t\t\t\text: ext
\t\t\t};
\t\t});
\t}).reduce(function(a, i) {
\t\treturn a.concat(i);
\t}, []);

\tvar i;
\tif(argv.config) {
\t\tvar getConfigExtension = function getConfigExtension(configPath) {
\t\t\tfor(i = extensions.length - 1; i >= 0; i--) {
\t\t\t\tvar tmpExt = extensions[i];
\t\t\t\tif(configPath.indexOf(tmpExt, configPath.length - tmpExt.length) > -1) {
\t\t\t\t\treturn tmpExt;
\t\t\t\t}
\t\t\t}
\t\t\treturn path.extname(configPath);
\t\t};

\t\tvar mapConfigArg = function mapConfigArg(configArg) {
\t\t\tvar resolvedPath = path.resolve(configArg);
\t\t\tvar extension = getConfigExtension(resolvedPath);
\t\t\treturn {
\t\t\t\tpath: resolvedPath,
\t\t\t\text: extension
\t\t\t};
\t\t};

\t\tvar configArgList = Array.isArray(argv.config) ? argv.config : [argv.config];
\t\tconfigFiles = configArgList.map(mapConfigArg);
\t} else {
\t\tfor(i = 0; i < defaultConfigFiles.length; i++) {
\t\t\tvar webpackConfig = defaultConfigFiles[i].path;
\t\t\tif(fs.existsSync(webpackConfig)) {
\t\t\t\tconfigFiles.push({
\t\t\t\t\tpath: webpackConfig,
\t\t\t\t\text: defaultConfigFiles[i].ext
\t\t\t\t});
\t\t\t\tbreak;
\t\t\t}
\t\t}
\t}

\tif(configFiles.length > 0) {
\t\tvar registerCompiler = function registerCompiler(moduleDescriptor) {
\t\t\tif(moduleDescriptor) {
\t\t\t\tif(typeof moduleDescriptor === \"string\") {
\t\t\t\t\trequire(moduleDescriptor);
\t\t\t\t} else if(!Array.isArray(moduleDescriptor)) {
\t\t\t\t\tmoduleDescriptor.register(require(moduleDescriptor.module));
\t\t\t\t} else {
\t\t\t\t\tfor(var i = 0; i < moduleDescriptor.length; i++) {
\t\t\t\t\t\ttry {
\t\t\t\t\t\t\tregisterCompiler(moduleDescriptor[i]);
\t\t\t\t\t\t\tbreak;
\t\t\t\t\t\t} catch(e) {
\t\t\t\t\t\t\t// do nothing
\t\t\t\t\t\t}
\t\t\t\t\t}
\t\t\t\t}
\t\t\t}
\t\t};

\t\tvar requireConfig = function requireConfig(configPath) {
\t\t\tvar options = require(configPath);
\t\t\toptions = prepareOptions(options, argv);
\t\t\treturn options;
\t\t};

\t\tconfigFiles.forEach(function(file) {
\t\t\tregisterCompiler(interpret.extensions[file.ext]);
\t\t\toptions.push(requireConfig(file.path));
\t\t});
\t\tconfigFileLoaded = true;
\t}

\tif(!configFileLoaded) {
\t\treturn processConfiguredOptions({});
\t} else if(options.length === 1) {
\t\treturn processConfiguredOptions(options[0]);
\t} else {
\t\treturn processConfiguredOptions(options);
\t}

\tfunction processConfiguredOptions(options) {
\t\tif(options === null || typeof options !== \"object\") {
\t\t\tconsole.error(\"Config did not export an object or a function returning an object.\");
\t\t\tprocess.exit(-1); // eslint-disable-line
\t\t}

\t\t// process Promise
\t\tif(typeof options.then === \"function\") {
\t\t\treturn options.then(processConfiguredOptions);
\t\t}

\t\t// process ES6 default
\t\tif(typeof options === \"object\" && typeof options.default === \"object\") {
\t\t\treturn processConfiguredOptions(options.default);
\t\t}

\t\t// filter multi-config by name
\t\tif(Array.isArray(options) && argv[\"config-name\"]) {
\t\t\tvar namedOptions = options.filter(function(opt) {
\t\t\t\treturn opt.name === argv[\"config-name\"];
\t\t\t});
\t\t\tif(namedOptions.length === 0) {
\t\t\t\tconsole.error(\"Configuration with name '\" + argv[\"config-name\"] + \"' was not found.\");
\t\t\t\tprocess.exit(-1); // eslint-disable-line
\t\t\t} else if(namedOptions.length === 1) {
\t\t\t\treturn processConfiguredOptions(namedOptions[0]);
\t\t\t}
\t\t\toptions = namedOptions;
\t\t}

\t\tif(Array.isArray(options)) {
\t\t\toptions.forEach(processOptions);
\t\t} else {
\t\t\tprocessOptions(options);
\t\t}

\t\tif(argv.context) {
\t\t\toptions.context = path.resolve(argv.context);
\t\t}
\t\tif(!options.context) {
\t\t\toptions.context = process.cwd();
\t\t}

\t\tif(argv.watch) {
\t\t\toptions.watch = true;
\t\t}

\t\tif(argv[\"watch-aggregate-timeout\"]) {
\t\t\toptions.watchOptions = options.watchOptions || {};
\t\t\toptions.watchOptions.aggregateTimeout = +argv[\"watch-aggregate-timeout\"];
\t\t}

\t\tif(typeof argv[\"watch-poll\"] !== undefined) {
\t\t\toptions.watchOptions = options.watchOptions || {};
\t\t\tif(argv[\"watch-poll\"] === \"true\" || argv[\"watch-poll\"] === \"\")
\t\t\t\toptions.watchOptions.poll = true;
\t\t\telse if(!isNaN(argv[\"watch-poll\"]))
\t\t\t\toptions.watchOptions.poll = +argv[\"watch-poll\"];
\t\t}

\t\tif(argv[\"watch-stdin\"]) {
\t\t\toptions.watchOptions = options.watchOptions || {};
\t\t\toptions.watchOptions.stdin = true;
\t\t\toptions.watch = true;
\t\t}

\t\treturn options;
\t}

\tfunction processOptions(options) {
\t\tvar noOutputFilenameDefined = !options.output || !options.output.filename;

\t\tfunction ifArg(name, fn, init, finalize) {
\t\t\tif(Array.isArray(argv[name])) {
\t\t\t\tif(init) {
\t\t\t\t\tinit();
\t\t\t\t}
\t\t\t\targv[name].forEach(fn);
\t\t\t\tif(finalize) {
\t\t\t\t\tfinalize();
\t\t\t\t}
\t\t\t} else if(typeof argv[name] !== \"undefined\" && argv[name] !== null) {
\t\t\t\tif(init) {
\t\t\t\t\tinit();
\t\t\t\t}
\t\t\t\tfn(argv[name], -1);
\t\t\t\tif(finalize) {
\t\t\t\t\tfinalize();
\t\t\t\t}
\t\t\t}
\t\t}

\t\tfunction ifArgPair(name, fn, init, finalize) {
\t\t\tifArg(name, function(content, idx) {
\t\t\t\tvar i = content.indexOf(\"=\");
\t\t\t\tif(i < 0) {
\t\t\t\t\treturn fn(null, content, idx);
\t\t\t\t} else {
\t\t\t\t\treturn fn(content.substr(0, i), content.substr(i + 1), idx);
\t\t\t\t}
\t\t\t}, init, finalize);
\t\t}

\t\tfunction ifBooleanArg(name, fn) {
\t\t\tifArg(name, function(bool) {
\t\t\t\tif(bool) {
\t\t\t\t\tfn();
\t\t\t\t}
\t\t\t});
\t\t}

\t\tfunction mapArgToBoolean(name, optionName) {
\t\t\tifArg(name, function(bool) {
\t\t\t\tif(bool === true)
\t\t\t\t\toptions[optionName || name] = true;
\t\t\t\telse if(bool === false)
\t\t\t\t\toptions[optionName || name] = false;
\t\t\t});
\t\t}

\t\tfunction loadPlugin(name) {
\t\t\tvar loadUtils = require(\"loader-utils\");
\t\t\tvar args;
\t\t\ttry {
\t\t\t\tvar p = name && name.indexOf(\"?\");
\t\t\t\tif(p > -1) {
\t\t\t\t\targs = loadUtils.parseQuery(name.substring(p));
\t\t\t\t\tname = name.substring(0, p);
\t\t\t\t}
\t\t\t} catch(e) {
\t\t\t\tconsole.log(\"Invalid plugin arguments \" + name + \" (\" + e + \").\");
\t\t\t\tprocess.exit(-1); // eslint-disable-line
\t\t\t}

\t\t\tvar path;
\t\t\ttry {
\t\t\t\tvar resolve = require(\"enhanced-resolve\");
\t\t\t\tpath = resolve.sync(process.cwd(), name);
\t\t\t} catch(e) {
\t\t\t\tconsole.log(\"Cannot resolve plugin \" + name + \".\");
\t\t\t\tprocess.exit(-1); // eslint-disable-line
\t\t\t}
\t\t\tvar Plugin;
\t\t\ttry {
\t\t\t\tPlugin = require(path);
\t\t\t} catch(e) {
\t\t\t\tconsole.log(\"Cannot load plugin \" + name + \". (\" + path + \")\");
\t\t\t\tthrow e;
\t\t\t}
\t\t\ttry {
\t\t\t\treturn new Plugin(args);
\t\t\t} catch(e) {
\t\t\t\tconsole.log(\"Cannot instantiate plugin \" + name + \". (\" + path + \")\");
\t\t\t\tthrow e;
\t\t\t}
\t\t}

\t\tfunction ensureObject(parent, name) {
\t\t\tif(typeof parent[name] !== \"object\" || parent[name] === null) {
\t\t\t\tparent[name] = {};
\t\t\t}
\t\t}

\t\tfunction ensureArray(parent, name) {
\t\t\tif(!Array.isArray(parent[name])) {
\t\t\t\tparent[name] = [];
\t\t\t}
\t\t}

\t\tifArgPair(\"entry\", function(name, entry) {
\t\t\tif(typeof options.entry[name] !== \"undefined\" && options.entry[name] !== null) {
\t\t\t\toptions.entry[name] = [].concat(options.entry[name]).concat(entry);
\t\t\t} else {
\t\t\t\toptions.entry[name] = entry;
\t\t\t}
\t\t}, function() {
\t\t\tensureObject(options, \"entry\");
\t\t});

\t\tfunction bindRules(arg) {
\t\t\tifArgPair(arg, function(name, binding) {
\t\t\t\tif(name === null) {
\t\t\t\t\tname = binding;
\t\t\t\t\tbinding += \"-loader\";
\t\t\t\t}
\t\t\t\tvar rule = {
\t\t\t\t\ttest: new RegExp(\"\\\\.\" + name.replace(/[\\-\\[\\]\\/\\{\\}\\(\\)\\*\\+\\?\\.\\\\\\^\\\$\\|]/g, \"\\\\\$&\") + \"\$\"), // eslint-disable-line no-useless-escape
\t\t\t\t\tloader: binding
\t\t\t\t};
\t\t\t\tif(arg === \"module-bind-pre\") {
\t\t\t\t\trule.enforce = \"pre\";
\t\t\t\t} else if(arg === \"module-bind-post\") {
\t\t\t\t\trule.enforce = \"post\";
\t\t\t\t}
\t\t\t\toptions.module.rules.push(rule);
\t\t\t}, function() {
\t\t\t\tensureObject(options, \"module\");
\t\t\t\tensureArray(options.module, \"rules\");
\t\t\t});
\t\t}
\t\tbindRules(\"module-bind\");
\t\tbindRules(\"module-bind-pre\");
\t\tbindRules(\"module-bind-post\");

\t\tvar defineObject;
\t\tifArgPair(\"define\", function(name, value) {
\t\t\tif(name === null) {
\t\t\t\tname = value;
\t\t\t\tvalue = true;
\t\t\t}
\t\t\tdefineObject[name] = value;
\t\t}, function() {
\t\t\tdefineObject = {};
\t\t}, function() {
\t\t\tensureArray(options, \"plugins\");
\t\t\tvar DefinePlugin = require(\"../lib/DefinePlugin\");
\t\t\toptions.plugins.push(new DefinePlugin(defineObject));
\t\t});

\t\tifArg(\"output-path\", function(value) {
\t\t\tensureObject(options, \"output\");
\t\t\toptions.output.path = path.resolve(value);
\t\t});

\t\tifArg(\"output-filename\", function(value) {
\t\t\tensureObject(options, \"output\");
\t\t\toptions.output.filename = value;
\t\t\tnoOutputFilenameDefined = false;
\t\t});

\t\tifArg(\"output-chunk-filename\", function(value) {
\t\t\tensureObject(options, \"output\");
\t\t\toptions.output.chunkFilename = value;
\t\t});

\t\tifArg(\"output-source-map-filename\", function(value) {
\t\t\tensureObject(options, \"output\");
\t\t\toptions.output.sourceMapFilename = value;
\t\t});

\t\tifArg(\"output-public-path\", function(value) {
\t\t\tensureObject(options, \"output\");
\t\t\toptions.output.publicPath = value;
\t\t});

\t\tifArg(\"output-jsonp-function\", function(value) {
\t\t\tensureObject(options, \"output\");
\t\t\toptions.output.jsonpFunction = value;
\t\t});

\t\tifBooleanArg(\"output-pathinfo\", function() {
\t\t\tensureObject(options, \"output\");
\t\t\toptions.output.pathinfo = true;
\t\t});

\t\tifArg(\"output-library\", function(value) {
\t\t\tensureObject(options, \"output\");
\t\t\toptions.output.library = value;
\t\t});

\t\tifArg(\"output-library-target\", function(value) {
\t\t\tensureObject(options, \"output\");
\t\t\toptions.output.libraryTarget = value;
\t\t});

\t\tifArg(\"records-input-path\", function(value) {
\t\t\toptions.recordsInputPath = path.resolve(value);
\t\t});

\t\tifArg(\"records-output-path\", function(value) {
\t\t\toptions.recordsOutputPath = path.resolve(value);
\t\t});

\t\tifArg(\"records-path\", function(value) {
\t\t\toptions.recordsPath = path.resolve(value);
\t\t});

\t\tifArg(\"target\", function(value) {
\t\t\toptions.target = value;
\t\t});

\t\tmapArgToBoolean(\"cache\");

\t\tifBooleanArg(\"hot\", function() {
\t\t\tensureArray(options, \"plugins\");
\t\t\tvar HotModuleReplacementPlugin = require(\"../lib/HotModuleReplacementPlugin\");
\t\t\toptions.plugins.push(new HotModuleReplacementPlugin());
\t\t});

\t\tifBooleanArg(\"debug\", function() {
\t\t\tensureArray(options, \"plugins\");
\t\t\tvar LoaderOptionsPlugin = require(\"../lib/LoaderOptionsPlugin\");
\t\t\toptions.plugins.push(new LoaderOptionsPlugin({
\t\t\t\tdebug: true
\t\t\t}));
\t\t});

\t\tifArg(\"devtool\", function(value) {
\t\t\toptions.devtool = value;
\t\t});

\t\tfunction processResolveAlias(arg, key) {
\t\t\tifArgPair(arg, function(name, value) {
\t\t\t\tif(!name) {
\t\t\t\t\tthrow new Error(\"--\" + arg + \" <string>=<string>\");
\t\t\t\t}
\t\t\t\tensureObject(options, key);
\t\t\t\tensureObject(options[key], \"alias\");
\t\t\t\toptions[key].alias[name] = value;
\t\t\t});
\t\t}
\t\tprocessResolveAlias(\"resolve-alias\", \"resolve\");
\t\tprocessResolveAlias(\"resolve-loader-alias\", \"resolveLoader\");

\t\tifArg(\"resolve-extensions\", function(value) {
\t\t\tensureObject(options, \"resolve\");
\t\t\tif(Array.isArray(value)) {
\t\t\t\toptions.resolve.extensions = value;
\t\t\t} else {
\t\t\t\toptions.resolve.extensions = value.split(/,\\s*/);
\t\t\t}
\t\t});

\t\tifArg(\"optimize-max-chunks\", function(value) {
\t\t\tensureArray(options, \"plugins\");
\t\t\tvar LimitChunkCountPlugin = require(\"../lib/optimize/LimitChunkCountPlugin\");
\t\t\toptions.plugins.push(new LimitChunkCountPlugin({
\t\t\t\tmaxChunks: parseInt(value, 10)
\t\t\t}));
\t\t});

\t\tifArg(\"optimize-min-chunk-size\", function(value) {
\t\t\tensureArray(options, \"plugins\");
\t\t\tvar MinChunkSizePlugin = require(\"../lib/optimize/MinChunkSizePlugin\");
\t\t\toptions.plugins.push(new MinChunkSizePlugin({
\t\t\t\tminChunkSize: parseInt(value, 10)
\t\t\t}));
\t\t});

\t\tifBooleanArg(\"optimize-minimize\", function() {
\t\t\tensureArray(options, \"plugins\");
\t\t\tvar UglifyJsPlugin = require(\"../lib/optimize/UglifyJsPlugin\");
\t\t\tvar LoaderOptionsPlugin = require(\"../lib/LoaderOptionsPlugin\");
\t\t\toptions.plugins.push(new UglifyJsPlugin({
\t\t\t\tsourceMap: options.devtool && (options.devtool.indexOf(\"sourcemap\") >= 0 || options.devtool.indexOf(\"source-map\") >= 0)
\t\t\t}));
\t\t\toptions.plugins.push(new LoaderOptionsPlugin({
\t\t\t\tminimize: true
\t\t\t}));
\t\t});

\t\tifArg(\"prefetch\", function(request) {
\t\t\tensureArray(options, \"plugins\");
\t\t\tvar PrefetchPlugin = require(\"../lib/PrefetchPlugin\");
\t\t\toptions.plugins.push(new PrefetchPlugin(request));
\t\t});

\t\tifArg(\"provide\", function(value) {
\t\t\tensureArray(options, \"plugins\");
\t\t\tvar idx = value.indexOf(\"=\");
\t\t\tvar name;
\t\t\tif(idx >= 0) {
\t\t\t\tname = value.substr(0, idx);
\t\t\t\tvalue = value.substr(idx + 1);
\t\t\t} else {
\t\t\t\tname = value;
\t\t\t}
\t\t\tvar ProvidePlugin = require(\"../lib/ProvidePlugin\");
\t\t\toptions.plugins.push(new ProvidePlugin(name, value));
\t\t});

\t\tifArg(\"plugin\", function(value) {
\t\t\tensureArray(options, \"plugins\");
\t\t\toptions.plugins.push(loadPlugin(value));
\t\t});

\t\tmapArgToBoolean(\"bail\");

\t\tmapArgToBoolean(\"profile\");

\t\tif(noOutputFilenameDefined) {
\t\t\tensureObject(options, \"output\");
\t\t\tif(convertOptions && convertOptions.outputFilename) {
\t\t\t\toptions.output.path = path.resolve(path.dirname(convertOptions.outputFilename));
\t\t\t\toptions.output.filename = path.basename(convertOptions.outputFilename);
\t\t\t} else if(argv._.length > 0) {
\t\t\t\toptions.output.filename = argv._.pop();
\t\t\t\toptions.output.path = path.resolve(path.dirname(options.output.filename));
\t\t\t\toptions.output.filename = path.basename(options.output.filename);
\t\t\t} else if(configFileLoaded) {
\t\t\t\tthrow new Error(\"'output.filename' is required, either in config file or as --output-filename\");
\t\t\t} else {
\t\t\t\tconsole.error(\"No configuration file found and no output filename configured via CLI option.\");
\t\t\t\tconsole.error(\"A configuration file could be named 'webpack.config.js' in the current directory.\");
\t\t\t\tconsole.error(\"Use --help to display the CLI options.\");
\t\t\t\tprocess.exit(-1); // eslint-disable-line
\t\t\t}
\t\t}

\t\tif(argv._.length > 0) {
\t\t\tif(Array.isArray(options.entry) || typeof options.entry === \"string\") {
\t\t\t\toptions.entry = {
\t\t\t\t\tmain: options.entry
\t\t\t\t};
\t\t\t}
\t\t\tensureObject(options, \"entry\");

\t\t\tvar addTo = function addTo(name, entry) {
\t\t\t\tif(options.entry[name]) {
\t\t\t\t\tif(!Array.isArray(options.entry[name])) {
\t\t\t\t\t\toptions.entry[name] = [options.entry[name]];
\t\t\t\t\t}
\t\t\t\t\toptions.entry[name].push(entry);
\t\t\t\t} else {
\t\t\t\t\toptions.entry[name] = entry;
\t\t\t\t}
\t\t\t};
\t\t\targv._.forEach(function(content) {
\t\t\t\tvar i = content.indexOf(\"=\");
\t\t\t\tvar j = content.indexOf(\"?\");
\t\t\t\tif(i < 0 || (j >= 0 && j < i)) {
\t\t\t\t\tvar resolved = path.resolve(content);
\t\t\t\t\tif(fs.existsSync(resolved)) {
\t\t\t\t\t\taddTo(\"main\", resolved);
\t\t\t\t\t} else {
\t\t\t\t\t\taddTo(\"main\", content);
\t\t\t\t\t}
\t\t\t\t} else {
\t\t\t\t\taddTo(content.substr(0, i), content.substr(i + 1));
\t\t\t\t}
\t\t\t});
\t\t}

\t\tif(!options.entry) {
\t\t\tif(configFileLoaded) {
\t\t\t\tconsole.error(\"Configuration file found but no entry configured.\");
\t\t\t} else {
\t\t\t\tconsole.error(\"No configuration file found and no entry configured via CLI option.\");
\t\t\t\tconsole.error(\"When using the CLI you need to provide at least two arguments: entry and output.\");
\t\t\t\tconsole.error(\"A configuration file could be named 'webpack.config.js' in the current directory.\");
\t\t\t}
\t\t\tconsole.error(\"Use --help to display the CLI options.\");
\t\t\tprocess.exit(-1); // eslint-disable-line
\t\t}
\t}
};
";
        
        $__internal_96b61effee3b8b77a51f2042ecf3b4893b6a762c177bbcc9d11bea8c1b26f345->leave($__internal_96b61effee3b8b77a51f2042ecf3b4893b6a762c177bbcc9d11bea8c1b26f345_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/webpack/bin/convert-argv.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("var path = require(\"path\");
var fs = require(\"fs\");
fs.existsSync = fs.existsSync || path.existsSync;
var interpret = require(\"interpret\");
var prepareOptions = require(\"../lib/prepareOptions\");

module.exports = function(yargs, argv, convertOptions) {

\tvar options = [];

\t// Shortcuts
\tif(argv.d) {
\t\targv.debug = true;
\t\targv[\"output-pathinfo\"] = true;
\t\tif(!argv.devtool) {
\t\t\targv.devtool = \"eval-cheap-module-source-map\";
\t\t}
\t}
\tif(argv.p) {
\t\targv[\"optimize-minimize\"] = true;
\t\targv[\"define\"] = [].concat(argv[\"define\"] || []).concat(\"process.env.NODE_ENV=\\\"production\\\"\");
\t}

\tvar configFileLoaded = false;
\tvar configFiles = [];
\tvar extensions = Object.keys(interpret.extensions).sort(function(a, b) {
\t\treturn a === \".js\" ? -1 : b === \".js\" ? 1 : a.length - b.length;
\t});
\tvar defaultConfigFiles = [\"webpack.config\", \"webpackfile\"].map(function(filename) {
\t\treturn extensions.map(function(ext) {
\t\t\treturn {
\t\t\t\tpath: path.resolve(filename + ext),
\t\t\t\text: ext
\t\t\t};
\t\t});
\t}).reduce(function(a, i) {
\t\treturn a.concat(i);
\t}, []);

\tvar i;
\tif(argv.config) {
\t\tvar getConfigExtension = function getConfigExtension(configPath) {
\t\t\tfor(i = extensions.length - 1; i >= 0; i--) {
\t\t\t\tvar tmpExt = extensions[i];
\t\t\t\tif(configPath.indexOf(tmpExt, configPath.length - tmpExt.length) > -1) {
\t\t\t\t\treturn tmpExt;
\t\t\t\t}
\t\t\t}
\t\t\treturn path.extname(configPath);
\t\t};

\t\tvar mapConfigArg = function mapConfigArg(configArg) {
\t\t\tvar resolvedPath = path.resolve(configArg);
\t\t\tvar extension = getConfigExtension(resolvedPath);
\t\t\treturn {
\t\t\t\tpath: resolvedPath,
\t\t\t\text: extension
\t\t\t};
\t\t};

\t\tvar configArgList = Array.isArray(argv.config) ? argv.config : [argv.config];
\t\tconfigFiles = configArgList.map(mapConfigArg);
\t} else {
\t\tfor(i = 0; i < defaultConfigFiles.length; i++) {
\t\t\tvar webpackConfig = defaultConfigFiles[i].path;
\t\t\tif(fs.existsSync(webpackConfig)) {
\t\t\t\tconfigFiles.push({
\t\t\t\t\tpath: webpackConfig,
\t\t\t\t\text: defaultConfigFiles[i].ext
\t\t\t\t});
\t\t\t\tbreak;
\t\t\t}
\t\t}
\t}

\tif(configFiles.length > 0) {
\t\tvar registerCompiler = function registerCompiler(moduleDescriptor) {
\t\t\tif(moduleDescriptor) {
\t\t\t\tif(typeof moduleDescriptor === \"string\") {
\t\t\t\t\trequire(moduleDescriptor);
\t\t\t\t} else if(!Array.isArray(moduleDescriptor)) {
\t\t\t\t\tmoduleDescriptor.register(require(moduleDescriptor.module));
\t\t\t\t} else {
\t\t\t\t\tfor(var i = 0; i < moduleDescriptor.length; i++) {
\t\t\t\t\t\ttry {
\t\t\t\t\t\t\tregisterCompiler(moduleDescriptor[i]);
\t\t\t\t\t\t\tbreak;
\t\t\t\t\t\t} catch(e) {
\t\t\t\t\t\t\t// do nothing
\t\t\t\t\t\t}
\t\t\t\t\t}
\t\t\t\t}
\t\t\t}
\t\t};

\t\tvar requireConfig = function requireConfig(configPath) {
\t\t\tvar options = require(configPath);
\t\t\toptions = prepareOptions(options, argv);
\t\t\treturn options;
\t\t};

\t\tconfigFiles.forEach(function(file) {
\t\t\tregisterCompiler(interpret.extensions[file.ext]);
\t\t\toptions.push(requireConfig(file.path));
\t\t});
\t\tconfigFileLoaded = true;
\t}

\tif(!configFileLoaded) {
\t\treturn processConfiguredOptions({});
\t} else if(options.length === 1) {
\t\treturn processConfiguredOptions(options[0]);
\t} else {
\t\treturn processConfiguredOptions(options);
\t}

\tfunction processConfiguredOptions(options) {
\t\tif(options === null || typeof options !== \"object\") {
\t\t\tconsole.error(\"Config did not export an object or a function returning an object.\");
\t\t\tprocess.exit(-1); // eslint-disable-line
\t\t}

\t\t// process Promise
\t\tif(typeof options.then === \"function\") {
\t\t\treturn options.then(processConfiguredOptions);
\t\t}

\t\t// process ES6 default
\t\tif(typeof options === \"object\" && typeof options.default === \"object\") {
\t\t\treturn processConfiguredOptions(options.default);
\t\t}

\t\t// filter multi-config by name
\t\tif(Array.isArray(options) && argv[\"config-name\"]) {
\t\t\tvar namedOptions = options.filter(function(opt) {
\t\t\t\treturn opt.name === argv[\"config-name\"];
\t\t\t});
\t\t\tif(namedOptions.length === 0) {
\t\t\t\tconsole.error(\"Configuration with name '\" + argv[\"config-name\"] + \"' was not found.\");
\t\t\t\tprocess.exit(-1); // eslint-disable-line
\t\t\t} else if(namedOptions.length === 1) {
\t\t\t\treturn processConfiguredOptions(namedOptions[0]);
\t\t\t}
\t\t\toptions = namedOptions;
\t\t}

\t\tif(Array.isArray(options)) {
\t\t\toptions.forEach(processOptions);
\t\t} else {
\t\t\tprocessOptions(options);
\t\t}

\t\tif(argv.context) {
\t\t\toptions.context = path.resolve(argv.context);
\t\t}
\t\tif(!options.context) {
\t\t\toptions.context = process.cwd();
\t\t}

\t\tif(argv.watch) {
\t\t\toptions.watch = true;
\t\t}

\t\tif(argv[\"watch-aggregate-timeout\"]) {
\t\t\toptions.watchOptions = options.watchOptions || {};
\t\t\toptions.watchOptions.aggregateTimeout = +argv[\"watch-aggregate-timeout\"];
\t\t}

\t\tif(typeof argv[\"watch-poll\"] !== undefined) {
\t\t\toptions.watchOptions = options.watchOptions || {};
\t\t\tif(argv[\"watch-poll\"] === \"true\" || argv[\"watch-poll\"] === \"\")
\t\t\t\toptions.watchOptions.poll = true;
\t\t\telse if(!isNaN(argv[\"watch-poll\"]))
\t\t\t\toptions.watchOptions.poll = +argv[\"watch-poll\"];
\t\t}

\t\tif(argv[\"watch-stdin\"]) {
\t\t\toptions.watchOptions = options.watchOptions || {};
\t\t\toptions.watchOptions.stdin = true;
\t\t\toptions.watch = true;
\t\t}

\t\treturn options;
\t}

\tfunction processOptions(options) {
\t\tvar noOutputFilenameDefined = !options.output || !options.output.filename;

\t\tfunction ifArg(name, fn, init, finalize) {
\t\t\tif(Array.isArray(argv[name])) {
\t\t\t\tif(init) {
\t\t\t\t\tinit();
\t\t\t\t}
\t\t\t\targv[name].forEach(fn);
\t\t\t\tif(finalize) {
\t\t\t\t\tfinalize();
\t\t\t\t}
\t\t\t} else if(typeof argv[name] !== \"undefined\" && argv[name] !== null) {
\t\t\t\tif(init) {
\t\t\t\t\tinit();
\t\t\t\t}
\t\t\t\tfn(argv[name], -1);
\t\t\t\tif(finalize) {
\t\t\t\t\tfinalize();
\t\t\t\t}
\t\t\t}
\t\t}

\t\tfunction ifArgPair(name, fn, init, finalize) {
\t\t\tifArg(name, function(content, idx) {
\t\t\t\tvar i = content.indexOf(\"=\");
\t\t\t\tif(i < 0) {
\t\t\t\t\treturn fn(null, content, idx);
\t\t\t\t} else {
\t\t\t\t\treturn fn(content.substr(0, i), content.substr(i + 1), idx);
\t\t\t\t}
\t\t\t}, init, finalize);
\t\t}

\t\tfunction ifBooleanArg(name, fn) {
\t\t\tifArg(name, function(bool) {
\t\t\t\tif(bool) {
\t\t\t\t\tfn();
\t\t\t\t}
\t\t\t});
\t\t}

\t\tfunction mapArgToBoolean(name, optionName) {
\t\t\tifArg(name, function(bool) {
\t\t\t\tif(bool === true)
\t\t\t\t\toptions[optionName || name] = true;
\t\t\t\telse if(bool === false)
\t\t\t\t\toptions[optionName || name] = false;
\t\t\t});
\t\t}

\t\tfunction loadPlugin(name) {
\t\t\tvar loadUtils = require(\"loader-utils\");
\t\t\tvar args;
\t\t\ttry {
\t\t\t\tvar p = name && name.indexOf(\"?\");
\t\t\t\tif(p > -1) {
\t\t\t\t\targs = loadUtils.parseQuery(name.substring(p));
\t\t\t\t\tname = name.substring(0, p);
\t\t\t\t}
\t\t\t} catch(e) {
\t\t\t\tconsole.log(\"Invalid plugin arguments \" + name + \" (\" + e + \").\");
\t\t\t\tprocess.exit(-1); // eslint-disable-line
\t\t\t}

\t\t\tvar path;
\t\t\ttry {
\t\t\t\tvar resolve = require(\"enhanced-resolve\");
\t\t\t\tpath = resolve.sync(process.cwd(), name);
\t\t\t} catch(e) {
\t\t\t\tconsole.log(\"Cannot resolve plugin \" + name + \".\");
\t\t\t\tprocess.exit(-1); // eslint-disable-line
\t\t\t}
\t\t\tvar Plugin;
\t\t\ttry {
\t\t\t\tPlugin = require(path);
\t\t\t} catch(e) {
\t\t\t\tconsole.log(\"Cannot load plugin \" + name + \". (\" + path + \")\");
\t\t\t\tthrow e;
\t\t\t}
\t\t\ttry {
\t\t\t\treturn new Plugin(args);
\t\t\t} catch(e) {
\t\t\t\tconsole.log(\"Cannot instantiate plugin \" + name + \". (\" + path + \")\");
\t\t\t\tthrow e;
\t\t\t}
\t\t}

\t\tfunction ensureObject(parent, name) {
\t\t\tif(typeof parent[name] !== \"object\" || parent[name] === null) {
\t\t\t\tparent[name] = {};
\t\t\t}
\t\t}

\t\tfunction ensureArray(parent, name) {
\t\t\tif(!Array.isArray(parent[name])) {
\t\t\t\tparent[name] = [];
\t\t\t}
\t\t}

\t\tifArgPair(\"entry\", function(name, entry) {
\t\t\tif(typeof options.entry[name] !== \"undefined\" && options.entry[name] !== null) {
\t\t\t\toptions.entry[name] = [].concat(options.entry[name]).concat(entry);
\t\t\t} else {
\t\t\t\toptions.entry[name] = entry;
\t\t\t}
\t\t}, function() {
\t\t\tensureObject(options, \"entry\");
\t\t});

\t\tfunction bindRules(arg) {
\t\t\tifArgPair(arg, function(name, binding) {
\t\t\t\tif(name === null) {
\t\t\t\t\tname = binding;
\t\t\t\t\tbinding += \"-loader\";
\t\t\t\t}
\t\t\t\tvar rule = {
\t\t\t\t\ttest: new RegExp(\"\\\\.\" + name.replace(/[\\-\\[\\]\\/\\{\\}\\(\\)\\*\\+\\?\\.\\\\\\^\\\$\\|]/g, \"\\\\\$&\") + \"\$\"), // eslint-disable-line no-useless-escape
\t\t\t\t\tloader: binding
\t\t\t\t};
\t\t\t\tif(arg === \"module-bind-pre\") {
\t\t\t\t\trule.enforce = \"pre\";
\t\t\t\t} else if(arg === \"module-bind-post\") {
\t\t\t\t\trule.enforce = \"post\";
\t\t\t\t}
\t\t\t\toptions.module.rules.push(rule);
\t\t\t}, function() {
\t\t\t\tensureObject(options, \"module\");
\t\t\t\tensureArray(options.module, \"rules\");
\t\t\t});
\t\t}
\t\tbindRules(\"module-bind\");
\t\tbindRules(\"module-bind-pre\");
\t\tbindRules(\"module-bind-post\");

\t\tvar defineObject;
\t\tifArgPair(\"define\", function(name, value) {
\t\t\tif(name === null) {
\t\t\t\tname = value;
\t\t\t\tvalue = true;
\t\t\t}
\t\t\tdefineObject[name] = value;
\t\t}, function() {
\t\t\tdefineObject = {};
\t\t}, function() {
\t\t\tensureArray(options, \"plugins\");
\t\t\tvar DefinePlugin = require(\"../lib/DefinePlugin\");
\t\t\toptions.plugins.push(new DefinePlugin(defineObject));
\t\t});

\t\tifArg(\"output-path\", function(value) {
\t\t\tensureObject(options, \"output\");
\t\t\toptions.output.path = path.resolve(value);
\t\t});

\t\tifArg(\"output-filename\", function(value) {
\t\t\tensureObject(options, \"output\");
\t\t\toptions.output.filename = value;
\t\t\tnoOutputFilenameDefined = false;
\t\t});

\t\tifArg(\"output-chunk-filename\", function(value) {
\t\t\tensureObject(options, \"output\");
\t\t\toptions.output.chunkFilename = value;
\t\t});

\t\tifArg(\"output-source-map-filename\", function(value) {
\t\t\tensureObject(options, \"output\");
\t\t\toptions.output.sourceMapFilename = value;
\t\t});

\t\tifArg(\"output-public-path\", function(value) {
\t\t\tensureObject(options, \"output\");
\t\t\toptions.output.publicPath = value;
\t\t});

\t\tifArg(\"output-jsonp-function\", function(value) {
\t\t\tensureObject(options, \"output\");
\t\t\toptions.output.jsonpFunction = value;
\t\t});

\t\tifBooleanArg(\"output-pathinfo\", function() {
\t\t\tensureObject(options, \"output\");
\t\t\toptions.output.pathinfo = true;
\t\t});

\t\tifArg(\"output-library\", function(value) {
\t\t\tensureObject(options, \"output\");
\t\t\toptions.output.library = value;
\t\t});

\t\tifArg(\"output-library-target\", function(value) {
\t\t\tensureObject(options, \"output\");
\t\t\toptions.output.libraryTarget = value;
\t\t});

\t\tifArg(\"records-input-path\", function(value) {
\t\t\toptions.recordsInputPath = path.resolve(value);
\t\t});

\t\tifArg(\"records-output-path\", function(value) {
\t\t\toptions.recordsOutputPath = path.resolve(value);
\t\t});

\t\tifArg(\"records-path\", function(value) {
\t\t\toptions.recordsPath = path.resolve(value);
\t\t});

\t\tifArg(\"target\", function(value) {
\t\t\toptions.target = value;
\t\t});

\t\tmapArgToBoolean(\"cache\");

\t\tifBooleanArg(\"hot\", function() {
\t\t\tensureArray(options, \"plugins\");
\t\t\tvar HotModuleReplacementPlugin = require(\"../lib/HotModuleReplacementPlugin\");
\t\t\toptions.plugins.push(new HotModuleReplacementPlugin());
\t\t});

\t\tifBooleanArg(\"debug\", function() {
\t\t\tensureArray(options, \"plugins\");
\t\t\tvar LoaderOptionsPlugin = require(\"../lib/LoaderOptionsPlugin\");
\t\t\toptions.plugins.push(new LoaderOptionsPlugin({
\t\t\t\tdebug: true
\t\t\t}));
\t\t});

\t\tifArg(\"devtool\", function(value) {
\t\t\toptions.devtool = value;
\t\t});

\t\tfunction processResolveAlias(arg, key) {
\t\t\tifArgPair(arg, function(name, value) {
\t\t\t\tif(!name) {
\t\t\t\t\tthrow new Error(\"--\" + arg + \" <string>=<string>\");
\t\t\t\t}
\t\t\t\tensureObject(options, key);
\t\t\t\tensureObject(options[key], \"alias\");
\t\t\t\toptions[key].alias[name] = value;
\t\t\t});
\t\t}
\t\tprocessResolveAlias(\"resolve-alias\", \"resolve\");
\t\tprocessResolveAlias(\"resolve-loader-alias\", \"resolveLoader\");

\t\tifArg(\"resolve-extensions\", function(value) {
\t\t\tensureObject(options, \"resolve\");
\t\t\tif(Array.isArray(value)) {
\t\t\t\toptions.resolve.extensions = value;
\t\t\t} else {
\t\t\t\toptions.resolve.extensions = value.split(/,\\s*/);
\t\t\t}
\t\t});

\t\tifArg(\"optimize-max-chunks\", function(value) {
\t\t\tensureArray(options, \"plugins\");
\t\t\tvar LimitChunkCountPlugin = require(\"../lib/optimize/LimitChunkCountPlugin\");
\t\t\toptions.plugins.push(new LimitChunkCountPlugin({
\t\t\t\tmaxChunks: parseInt(value, 10)
\t\t\t}));
\t\t});

\t\tifArg(\"optimize-min-chunk-size\", function(value) {
\t\t\tensureArray(options, \"plugins\");
\t\t\tvar MinChunkSizePlugin = require(\"../lib/optimize/MinChunkSizePlugin\");
\t\t\toptions.plugins.push(new MinChunkSizePlugin({
\t\t\t\tminChunkSize: parseInt(value, 10)
\t\t\t}));
\t\t});

\t\tifBooleanArg(\"optimize-minimize\", function() {
\t\t\tensureArray(options, \"plugins\");
\t\t\tvar UglifyJsPlugin = require(\"../lib/optimize/UglifyJsPlugin\");
\t\t\tvar LoaderOptionsPlugin = require(\"../lib/LoaderOptionsPlugin\");
\t\t\toptions.plugins.push(new UglifyJsPlugin({
\t\t\t\tsourceMap: options.devtool && (options.devtool.indexOf(\"sourcemap\") >= 0 || options.devtool.indexOf(\"source-map\") >= 0)
\t\t\t}));
\t\t\toptions.plugins.push(new LoaderOptionsPlugin({
\t\t\t\tminimize: true
\t\t\t}));
\t\t});

\t\tifArg(\"prefetch\", function(request) {
\t\t\tensureArray(options, \"plugins\");
\t\t\tvar PrefetchPlugin = require(\"../lib/PrefetchPlugin\");
\t\t\toptions.plugins.push(new PrefetchPlugin(request));
\t\t});

\t\tifArg(\"provide\", function(value) {
\t\t\tensureArray(options, \"plugins\");
\t\t\tvar idx = value.indexOf(\"=\");
\t\t\tvar name;
\t\t\tif(idx >= 0) {
\t\t\t\tname = value.substr(0, idx);
\t\t\t\tvalue = value.substr(idx + 1);
\t\t\t} else {
\t\t\t\tname = value;
\t\t\t}
\t\t\tvar ProvidePlugin = require(\"../lib/ProvidePlugin\");
\t\t\toptions.plugins.push(new ProvidePlugin(name, value));
\t\t});

\t\tifArg(\"plugin\", function(value) {
\t\t\tensureArray(options, \"plugins\");
\t\t\toptions.plugins.push(loadPlugin(value));
\t\t});

\t\tmapArgToBoolean(\"bail\");

\t\tmapArgToBoolean(\"profile\");

\t\tif(noOutputFilenameDefined) {
\t\t\tensureObject(options, \"output\");
\t\t\tif(convertOptions && convertOptions.outputFilename) {
\t\t\t\toptions.output.path = path.resolve(path.dirname(convertOptions.outputFilename));
\t\t\t\toptions.output.filename = path.basename(convertOptions.outputFilename);
\t\t\t} else if(argv._.length > 0) {
\t\t\t\toptions.output.filename = argv._.pop();
\t\t\t\toptions.output.path = path.resolve(path.dirname(options.output.filename));
\t\t\t\toptions.output.filename = path.basename(options.output.filename);
\t\t\t} else if(configFileLoaded) {
\t\t\t\tthrow new Error(\"'output.filename' is required, either in config file or as --output-filename\");
\t\t\t} else {
\t\t\t\tconsole.error(\"No configuration file found and no output filename configured via CLI option.\");
\t\t\t\tconsole.error(\"A configuration file could be named 'webpack.config.js' in the current directory.\");
\t\t\t\tconsole.error(\"Use --help to display the CLI options.\");
\t\t\t\tprocess.exit(-1); // eslint-disable-line
\t\t\t}
\t\t}

\t\tif(argv._.length > 0) {
\t\t\tif(Array.isArray(options.entry) || typeof options.entry === \"string\") {
\t\t\t\toptions.entry = {
\t\t\t\t\tmain: options.entry
\t\t\t\t};
\t\t\t}
\t\t\tensureObject(options, \"entry\");

\t\t\tvar addTo = function addTo(name, entry) {
\t\t\t\tif(options.entry[name]) {
\t\t\t\t\tif(!Array.isArray(options.entry[name])) {
\t\t\t\t\t\toptions.entry[name] = [options.entry[name]];
\t\t\t\t\t}
\t\t\t\t\toptions.entry[name].push(entry);
\t\t\t\t} else {
\t\t\t\t\toptions.entry[name] = entry;
\t\t\t\t}
\t\t\t};
\t\t\targv._.forEach(function(content) {
\t\t\t\tvar i = content.indexOf(\"=\");
\t\t\t\tvar j = content.indexOf(\"?\");
\t\t\t\tif(i < 0 || (j >= 0 && j < i)) {
\t\t\t\t\tvar resolved = path.resolve(content);
\t\t\t\t\tif(fs.existsSync(resolved)) {
\t\t\t\t\t\taddTo(\"main\", resolved);
\t\t\t\t\t} else {
\t\t\t\t\t\taddTo(\"main\", content);
\t\t\t\t\t}
\t\t\t\t} else {
\t\t\t\t\taddTo(content.substr(0, i), content.substr(i + 1));
\t\t\t\t}
\t\t\t});
\t\t}

\t\tif(!options.entry) {
\t\t\tif(configFileLoaded) {
\t\t\t\tconsole.error(\"Configuration file found but no entry configured.\");
\t\t\t} else {
\t\t\t\tconsole.error(\"No configuration file found and no entry configured via CLI option.\");
\t\t\t\tconsole.error(\"When using the CLI you need to provide at least two arguments: entry and output.\");
\t\t\t\tconsole.error(\"A configuration file could be named 'webpack.config.js' in the current directory.\");
\t\t\t}
\t\t\tconsole.error(\"Use --help to display the CLI options.\");
\t\t\tprocess.exit(-1); // eslint-disable-line
\t\t}
\t}
};
", "node_modules/webpack/bin/convert-argv.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/webpack/bin/convert-argv.js");
    }
}
