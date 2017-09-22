<?php

/* node_modules/acorn/bin/acorn */
class __TwigTemplate_14542b5beb8f63cfe8a9fe1e51abae29bb00f9e76123c689293024911f43755d extends Twig_Template
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
        $__internal_1989baaa469e2449dd2224f501f43d16015e19094ca04e128c77bc8509701418 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1989baaa469e2449dd2224f501f43d16015e19094ca04e128c77bc8509701418->enter($__internal_1989baaa469e2449dd2224f501f43d16015e19094ca04e128c77bc8509701418_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/acorn/bin/acorn"));

        // line 1
        echo "#!/usr/bin/env node
'use strict';

var path = require('path');
var fs = require('fs');
var acorn = require('../dist/acorn.js');

var infile;
var forceFile;
var silent = false;
var compact = false;
var tokenize = false;
var options = {};

function help(status) {
  var print = (status == 0) ? console.log : console.error;
  print(\"usage: \" + path.basename(process.argv[1]) + \" [--ecma3|--ecma5|--ecma6|--ecma7|...|--ecma2015|--ecma2016|...]\");
  print(\"        [--tokenize] [--locations] [---allow-hash-bang] [--compact] [--silent] [--module] [--help] [--] [infile]\");
  process.exit(status);
}

for (var i = 2; i < process.argv.length; ++i) {
  var arg = process.argv[i];
  if ((arg == \"-\" || arg[0] != \"-\") && !infile) { infile = arg; }
  else if (arg == \"--\" && !infile && i + 2 == process.argv.length) { forceFile = infile = process.argv[++i]; }
  else if (arg == \"--locations\") { options.locations = true; }
  else if (arg == \"--allow-hash-bang\") { options.allowHashBang = true; }
  else if (arg == \"--silent\") { silent = true; }
  else if (arg == \"--compact\") { compact = true; }
  else if (arg == \"--help\") { help(0); }
  else if (arg == \"--tokenize\") { tokenize = true; }
  else if (arg == \"--module\") { options.sourceType = \"module\"; }
  else {
    var match = arg.match(/^--ecma(\\d+)\$/);
    if (match)
      { options.ecmaVersion = +match[1]; }
    else
      { help(1); }
  }
}

function run(code) {
  var result;
  try {
    if (!tokenize) {
      result = acorn.parse(code, options);
    } else {
      result = [];
      var tokenizer\$\$1 = acorn.tokenizer(code, options), token;
      do {
        token = tokenizer\$\$1.getToken();
        result.push(token);
      } while (token.type != acorn.tokTypes.eof)
    }
  } catch (e) {
    console.error(e.message);
    process.exit(1);
  }
  if (!silent) { console.log(JSON.stringify(result, null, compact ? null : 2)); }
}

if (forceFile || infile && infile != \"-\") {
  run(fs.readFileSync(infile, \"utf8\"));
} else {
  var code = \"\";
  process.stdin.resume();
  process.stdin.on(\"data\", function (chunk) { return code += chunk; });
  process.stdin.on(\"end\", function () { return run(code); });
}
";
        
        $__internal_1989baaa469e2449dd2224f501f43d16015e19094ca04e128c77bc8509701418->leave($__internal_1989baaa469e2449dd2224f501f43d16015e19094ca04e128c77bc8509701418_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/acorn/bin/acorn";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("#!/usr/bin/env node
'use strict';

var path = require('path');
var fs = require('fs');
var acorn = require('../dist/acorn.js');

var infile;
var forceFile;
var silent = false;
var compact = false;
var tokenize = false;
var options = {};

function help(status) {
  var print = (status == 0) ? console.log : console.error;
  print(\"usage: \" + path.basename(process.argv[1]) + \" [--ecma3|--ecma5|--ecma6|--ecma7|...|--ecma2015|--ecma2016|...]\");
  print(\"        [--tokenize] [--locations] [---allow-hash-bang] [--compact] [--silent] [--module] [--help] [--] [infile]\");
  process.exit(status);
}

for (var i = 2; i < process.argv.length; ++i) {
  var arg = process.argv[i];
  if ((arg == \"-\" || arg[0] != \"-\") && !infile) { infile = arg; }
  else if (arg == \"--\" && !infile && i + 2 == process.argv.length) { forceFile = infile = process.argv[++i]; }
  else if (arg == \"--locations\") { options.locations = true; }
  else if (arg == \"--allow-hash-bang\") { options.allowHashBang = true; }
  else if (arg == \"--silent\") { silent = true; }
  else if (arg == \"--compact\") { compact = true; }
  else if (arg == \"--help\") { help(0); }
  else if (arg == \"--tokenize\") { tokenize = true; }
  else if (arg == \"--module\") { options.sourceType = \"module\"; }
  else {
    var match = arg.match(/^--ecma(\\d+)\$/);
    if (match)
      { options.ecmaVersion = +match[1]; }
    else
      { help(1); }
  }
}

function run(code) {
  var result;
  try {
    if (!tokenize) {
      result = acorn.parse(code, options);
    } else {
      result = [];
      var tokenizer\$\$1 = acorn.tokenizer(code, options), token;
      do {
        token = tokenizer\$\$1.getToken();
        result.push(token);
      } while (token.type != acorn.tokTypes.eof)
    }
  } catch (e) {
    console.error(e.message);
    process.exit(1);
  }
  if (!silent) { console.log(JSON.stringify(result, null, compact ? null : 2)); }
}

if (forceFile || infile && infile != \"-\") {
  run(fs.readFileSync(infile, \"utf8\"));
} else {
  var code = \"\";
  process.stdin.resume();
  process.stdin.on(\"data\", function (chunk) { return code += chunk; });
  process.stdin.on(\"end\", function () { return run(code); });
}
", "node_modules/acorn/bin/acorn", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/acorn/bin/acorn");
    }
}
