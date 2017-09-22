<?php

/* node_modules/acorn-dynamic-import/node_modules/acorn/bin/acorn */
class __TwigTemplate_4282c5e54c3c927e1c5a3df401a0d07c9afbdec74e64211abb78ee56bab303c9 extends Twig_Template
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
        $__internal_b396344e8bb3055a924195555a327fe0ec17d95b12c23048c3b4455803032e2c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b396344e8bb3055a924195555a327fe0ec17d95b12c23048c3b4455803032e2c->enter($__internal_b396344e8bb3055a924195555a327fe0ec17d95b12c23048c3b4455803032e2c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/acorn-dynamic-import/node_modules/acorn/bin/acorn"));

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
var options = {}

function help(status) {
  var print = (status == 0) ? console.log : console.error
  print(\"usage: \" + path.basename(process.argv[1]) + \" [--ecma3|--ecma5|--ecma6|--ecma7|...|--ecma2015|--ecma2016|...]\")
  print(\"        [--tokenize] [--locations] [---allow-hash-bang] [--compact] [--silent] [--module] [--help] [--] [infile]\")
  process.exit(status)
}

for (var i = 2; i < process.argv.length; ++i) {
  var arg = process.argv[i]
  if ((arg == \"-\" || arg[0] != \"-\") && !infile) infile = arg
  else if (arg == \"--\" && !infile && i + 2 == process.argv.length) forceFile = infile = process.argv[++i]
  else if (arg == \"--locations\") options.locations = true
  else if (arg == \"--allow-hash-bang\") options.allowHashBang = true
  else if (arg == \"--silent\") silent = true
  else if (arg == \"--compact\") compact = true
  else if (arg == \"--help\") help(0)
  else if (arg == \"--tokenize\") tokenize = true
  else if (arg == \"--module\") options.sourceType = 'module'
  else {
    var match = arg.match(/^--ecma(\\d+)\$/)
    if (match)
      options.ecmaVersion = +match[1]
    else
      help(1)
  }
}

function run(code) {
  var result
  if (!tokenize) {
    try { result = acorn.parse(code, options) }
    catch(e) { console.error(e.message); process.exit(1) }
  } else {
    result = []
    var tokenizer = acorn.tokenizer(code, options), token
    while (true) {
      try { token = tokenizer.getToken() }
      catch(e) { console.error(e.message); process.exit(1) }
      result.push(token)
      if (token.type == acorn.tokTypes.eof) break
    }
  }
  if (!silent) console.log(JSON.stringify(result, null, compact ? null : 2))
}

if (forceFile || infile && infile != \"-\") {
  run(fs.readFileSync(infile, \"utf8\"))
} else {
  var code = \"\"
  process.stdin.resume()
  process.stdin.on(\"data\", function (chunk) { return code += chunk; })
  process.stdin.on(\"end\", function () { return run(code); })
}";
        
        $__internal_b396344e8bb3055a924195555a327fe0ec17d95b12c23048c3b4455803032e2c->leave($__internal_b396344e8bb3055a924195555a327fe0ec17d95b12c23048c3b4455803032e2c_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/acorn-dynamic-import/node_modules/acorn/bin/acorn";
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
var options = {}

function help(status) {
  var print = (status == 0) ? console.log : console.error
  print(\"usage: \" + path.basename(process.argv[1]) + \" [--ecma3|--ecma5|--ecma6|--ecma7|...|--ecma2015|--ecma2016|...]\")
  print(\"        [--tokenize] [--locations] [---allow-hash-bang] [--compact] [--silent] [--module] [--help] [--] [infile]\")
  process.exit(status)
}

for (var i = 2; i < process.argv.length; ++i) {
  var arg = process.argv[i]
  if ((arg == \"-\" || arg[0] != \"-\") && !infile) infile = arg
  else if (arg == \"--\" && !infile && i + 2 == process.argv.length) forceFile = infile = process.argv[++i]
  else if (arg == \"--locations\") options.locations = true
  else if (arg == \"--allow-hash-bang\") options.allowHashBang = true
  else if (arg == \"--silent\") silent = true
  else if (arg == \"--compact\") compact = true
  else if (arg == \"--help\") help(0)
  else if (arg == \"--tokenize\") tokenize = true
  else if (arg == \"--module\") options.sourceType = 'module'
  else {
    var match = arg.match(/^--ecma(\\d+)\$/)
    if (match)
      options.ecmaVersion = +match[1]
    else
      help(1)
  }
}

function run(code) {
  var result
  if (!tokenize) {
    try { result = acorn.parse(code, options) }
    catch(e) { console.error(e.message); process.exit(1) }
  } else {
    result = []
    var tokenizer = acorn.tokenizer(code, options), token
    while (true) {
      try { token = tokenizer.getToken() }
      catch(e) { console.error(e.message); process.exit(1) }
      result.push(token)
      if (token.type == acorn.tokTypes.eof) break
    }
  }
  if (!silent) console.log(JSON.stringify(result, null, compact ? null : 2))
}

if (forceFile || infile && infile != \"-\") {
  run(fs.readFileSync(infile, \"utf8\"))
} else {
  var code = \"\"
  process.stdin.resume()
  process.stdin.on(\"data\", function (chunk) { return code += chunk; })
  process.stdin.on(\"end\", function () { return run(code); })
}", "node_modules/acorn-dynamic-import/node_modules/acorn/bin/acorn", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/acorn-dynamic-import/node_modules/acorn/bin/acorn");
    }
}
