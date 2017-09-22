<?php

/* node_modules/jsesc/bin/jsesc */
class __TwigTemplate_28866c5371a8ca6b9e870f3e73b4c9ee818bca8e7b0975b3f38a75f49486ddc3 extends Twig_Template
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
        $__internal_8c70a4125f37fbd107ae03f085489eca316392aba2e94c13353b183a8fefd231 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8c70a4125f37fbd107ae03f085489eca316392aba2e94c13353b183a8fefd231->enter($__internal_8c70a4125f37fbd107ae03f085489eca316392aba2e94c13353b183a8fefd231_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/jsesc/bin/jsesc"));

        // line 1
        echo "#!/usr/bin/env node
(function() {

\tvar fs = require('fs');
\tvar stringEscape = require('../jsesc.js');
\tvar strings = process.argv.splice(2);
\tvar stdin = process.stdin;
\tvar data;
\tvar timeout;
\tvar isObject = false;
\tvar options = {};
\tvar log = console.log;

\tvar main = function() {
\t\tvar option = strings[0];

\t\tif (/^(?:-h|--help|undefined)\$/.test(option)) {
\t\t\tlog(
\t\t\t\t'jsesc v%s - http://mths.be/jsesc',
\t\t\t\tstringEscape.version
\t\t\t);
\t\t\tlog([
\t\t\t\t'\\nUsage:\\n',
\t\t\t\t'\\tjsesc [string]',
\t\t\t\t'\\tjsesc [-s | --single-quotes] [string]',
\t\t\t\t'\\tjsesc [-d | --double-quotes] [string]',
\t\t\t\t'\\tjsesc [-w | --wrap] [string]',
\t\t\t\t'\\tjsesc [-e | --escape-everything] [string]',
\t\t\t\t'\\tjsesc [-6 | --es6] [string]',
\t\t\t\t'\\tjsesc [-j | --json] [string]',
\t\t\t\t'\\tjsesc [-o | --object] [stringified_object]', // `JSON.parse()` the argument
\t\t\t\t'\\tjsesc [-p | --pretty] [string]', // `compact: false`
\t\t\t\t'\\tjsesc [-v | --version]',
\t\t\t\t'\\tjsesc [-h | --help]',
\t\t\t\t'\\nExamples:\\n',
\t\t\t\t'\\tjsesc \\'f\\xF6o \\u2665 b\\xE5r \\uD834\\uDF06 baz\\'',
\t\t\t\t'\\tjsesc --json \\'f\\xF6o \\u2665 b\\xE5r \\uD834\\uDF06 baz\\'',
\t\t\t\t'\\tjsesc --json --escape-everything \\'f\\xF6o \\u2665 b\\xE5r \\uD834\\uDF06 baz\\'',
\t\t\t\t'\\tjsesc --double-quotes --wrap \\'f\\xF6o \\u2665 b\\xE5r \\uD834\\uDF06 baz\\'',
\t\t\t\t'\\techo \\'f\\xF6o \\u2665 b\\xE5r \\uD834\\uDF06 baz\\' | jsesc'
\t\t\t].join('\\n'));
\t\t\treturn process.exit(1);
\t\t}

\t\tif (/^(?:-v|--version)\$/.test(option)) {
\t\t\tlog('v%s', stringEscape.version);
\t\t\treturn process.exit(1);
\t\t}

\t\tstrings.forEach(function(string) {
\t\t\t// Process options
\t\t\tif (/^(?:-s|--single-quotes)\$/.test(string)) {
\t\t\t\toptions.quotes = 'single';
\t\t\t\treturn;
\t\t\t}
\t\t\tif (/^(?:-d|--double-quotes)\$/.test(string)) {
\t\t\t\toptions.quotes = 'double';
\t\t\t\treturn;
\t\t\t}
\t\t\tif (/^(?:-w|--wrap)\$/.test(string)) {
\t\t\t\toptions.wrap = true;
\t\t\t\treturn;
\t\t\t}
\t\t\tif (/^(?:-6|--es6)\$/.test(string)) {
\t\t\t\toptions.es6 = true;
\t\t\t\treturn;
\t\t\t}
\t\t\tif (/^(?:-e|--escape-everything)\$/.test(string)) {
\t\t\t\toptions.escapeEverything = true;
\t\t\t\treturn;
\t\t\t}
\t\t\tif (/^(?:-j|--json)\$/.test(string)) {
\t\t\t\toptions.json = true;
\t\t\t\treturn;
\t\t\t}
\t\t\tif (/^(?:-o|--object)\$/.test(string)) {
\t\t\t\tisObject = true;
\t\t\t\treturn;
\t\t\t}
\t\t\tif (/^(?:-p|--pretty)\$/.test(string)) {
\t\t\t\tisObject = true;
\t\t\t\toptions.compact = false;
\t\t\t\treturn;
\t\t\t}

\t\t\t// Process string(s)
\t\t\tvar result;
\t\t\ttry {
\t\t\t\tif (isObject) {
\t\t\t\t\tstring = JSON.parse(string);
\t\t\t\t}
\t\t\t\tresult = stringEscape(string, options);
\t\t\t\tlog(result);
\t\t\t} catch(error) {
\t\t\t\tlog(error.message + '\\n');
\t\t\t\tlog('Error: failed to escape.');
\t\t\t\tlog('If you think this is a bug in jsesc, please report it:');
\t\t\t\tlog('https://github.com/mathiasbynens/jsesc/issues/new');
\t\t\t\tlog(
\t\t\t\t\t'\\nStack trace using jsesc@%s:\\n',
\t\t\t\t\tstringEscape.version
\t\t\t\t);
\t\t\t\tlog(error.stack);
\t\t\t\treturn process.exit(1);
\t\t\t}
\t\t});
\t\t// Return with exit status 0 outside of the `forEach` loop, in case
\t\t// multiple strings were passed in.
\t\treturn process.exit(0);

\t};

\tif (stdin.isTTY) {
\t\t// handle shell arguments
\t\tmain();
\t} else {
\t\t// Either the script is called from within a non-TTY context,
\t\t// or `stdin` content is being piped in.
\t\tif (!process.stdout.isTTY) { // called from a non-TTY context
\t\t\ttimeout = setTimeout(function() {
\t\t\t\t// if no piped data arrived after a while, handle shell arguments
\t\t\t\tmain();
\t\t\t}, 250);
\t\t}

\t\tdata = '';
\t\tstdin.on('data', function(chunk) {
\t\t\tclearTimeout(timeout);
\t\t\tdata += chunk;
\t\t});
\t\tstdin.on('end', function() {
\t\t\tstrings.push(data.trim());
\t\t\tmain();
\t\t});
\t\tstdin.resume();
\t}

}());
";
        
        $__internal_8c70a4125f37fbd107ae03f085489eca316392aba2e94c13353b183a8fefd231->leave($__internal_8c70a4125f37fbd107ae03f085489eca316392aba2e94c13353b183a8fefd231_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/jsesc/bin/jsesc";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("#!/usr/bin/env node
(function() {

\tvar fs = require('fs');
\tvar stringEscape = require('../jsesc.js');
\tvar strings = process.argv.splice(2);
\tvar stdin = process.stdin;
\tvar data;
\tvar timeout;
\tvar isObject = false;
\tvar options = {};
\tvar log = console.log;

\tvar main = function() {
\t\tvar option = strings[0];

\t\tif (/^(?:-h|--help|undefined)\$/.test(option)) {
\t\t\tlog(
\t\t\t\t'jsesc v%s - http://mths.be/jsesc',
\t\t\t\tstringEscape.version
\t\t\t);
\t\t\tlog([
\t\t\t\t'\\nUsage:\\n',
\t\t\t\t'\\tjsesc [string]',
\t\t\t\t'\\tjsesc [-s | --single-quotes] [string]',
\t\t\t\t'\\tjsesc [-d | --double-quotes] [string]',
\t\t\t\t'\\tjsesc [-w | --wrap] [string]',
\t\t\t\t'\\tjsesc [-e | --escape-everything] [string]',
\t\t\t\t'\\tjsesc [-6 | --es6] [string]',
\t\t\t\t'\\tjsesc [-j | --json] [string]',
\t\t\t\t'\\tjsesc [-o | --object] [stringified_object]', // `JSON.parse()` the argument
\t\t\t\t'\\tjsesc [-p | --pretty] [string]', // `compact: false`
\t\t\t\t'\\tjsesc [-v | --version]',
\t\t\t\t'\\tjsesc [-h | --help]',
\t\t\t\t'\\nExamples:\\n',
\t\t\t\t'\\tjsesc \\'f\\xF6o \\u2665 b\\xE5r \\uD834\\uDF06 baz\\'',
\t\t\t\t'\\tjsesc --json \\'f\\xF6o \\u2665 b\\xE5r \\uD834\\uDF06 baz\\'',
\t\t\t\t'\\tjsesc --json --escape-everything \\'f\\xF6o \\u2665 b\\xE5r \\uD834\\uDF06 baz\\'',
\t\t\t\t'\\tjsesc --double-quotes --wrap \\'f\\xF6o \\u2665 b\\xE5r \\uD834\\uDF06 baz\\'',
\t\t\t\t'\\techo \\'f\\xF6o \\u2665 b\\xE5r \\uD834\\uDF06 baz\\' | jsesc'
\t\t\t].join('\\n'));
\t\t\treturn process.exit(1);
\t\t}

\t\tif (/^(?:-v|--version)\$/.test(option)) {
\t\t\tlog('v%s', stringEscape.version);
\t\t\treturn process.exit(1);
\t\t}

\t\tstrings.forEach(function(string) {
\t\t\t// Process options
\t\t\tif (/^(?:-s|--single-quotes)\$/.test(string)) {
\t\t\t\toptions.quotes = 'single';
\t\t\t\treturn;
\t\t\t}
\t\t\tif (/^(?:-d|--double-quotes)\$/.test(string)) {
\t\t\t\toptions.quotes = 'double';
\t\t\t\treturn;
\t\t\t}
\t\t\tif (/^(?:-w|--wrap)\$/.test(string)) {
\t\t\t\toptions.wrap = true;
\t\t\t\treturn;
\t\t\t}
\t\t\tif (/^(?:-6|--es6)\$/.test(string)) {
\t\t\t\toptions.es6 = true;
\t\t\t\treturn;
\t\t\t}
\t\t\tif (/^(?:-e|--escape-everything)\$/.test(string)) {
\t\t\t\toptions.escapeEverything = true;
\t\t\t\treturn;
\t\t\t}
\t\t\tif (/^(?:-j|--json)\$/.test(string)) {
\t\t\t\toptions.json = true;
\t\t\t\treturn;
\t\t\t}
\t\t\tif (/^(?:-o|--object)\$/.test(string)) {
\t\t\t\tisObject = true;
\t\t\t\treturn;
\t\t\t}
\t\t\tif (/^(?:-p|--pretty)\$/.test(string)) {
\t\t\t\tisObject = true;
\t\t\t\toptions.compact = false;
\t\t\t\treturn;
\t\t\t}

\t\t\t// Process string(s)
\t\t\tvar result;
\t\t\ttry {
\t\t\t\tif (isObject) {
\t\t\t\t\tstring = JSON.parse(string);
\t\t\t\t}
\t\t\t\tresult = stringEscape(string, options);
\t\t\t\tlog(result);
\t\t\t} catch(error) {
\t\t\t\tlog(error.message + '\\n');
\t\t\t\tlog('Error: failed to escape.');
\t\t\t\tlog('If you think this is a bug in jsesc, please report it:');
\t\t\t\tlog('https://github.com/mathiasbynens/jsesc/issues/new');
\t\t\t\tlog(
\t\t\t\t\t'\\nStack trace using jsesc@%s:\\n',
\t\t\t\t\tstringEscape.version
\t\t\t\t);
\t\t\t\tlog(error.stack);
\t\t\t\treturn process.exit(1);
\t\t\t}
\t\t});
\t\t// Return with exit status 0 outside of the `forEach` loop, in case
\t\t// multiple strings were passed in.
\t\treturn process.exit(0);

\t};

\tif (stdin.isTTY) {
\t\t// handle shell arguments
\t\tmain();
\t} else {
\t\t// Either the script is called from within a non-TTY context,
\t\t// or `stdin` content is being piped in.
\t\tif (!process.stdout.isTTY) { // called from a non-TTY context
\t\t\ttimeout = setTimeout(function() {
\t\t\t\t// if no piped data arrived after a while, handle shell arguments
\t\t\t\tmain();
\t\t\t}, 250);
\t\t}

\t\tdata = '';
\t\tstdin.on('data', function(chunk) {
\t\t\tclearTimeout(timeout);
\t\t\tdata += chunk;
\t\t});
\t\tstdin.on('end', function() {
\t\t\tstrings.push(data.trim());
\t\t\tmain();
\t\t});
\t\tstdin.resume();
\t}

}());
", "node_modules/jsesc/bin/jsesc", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/jsesc/bin/jsesc");
    }
}
