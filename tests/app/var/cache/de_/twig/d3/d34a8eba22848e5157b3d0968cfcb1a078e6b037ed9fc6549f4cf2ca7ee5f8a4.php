<?php

/* node_modules/acorn-dynamic-import/node_modules/acorn/src/bin/acorn.js */
class __TwigTemplate_554bff74a03dbf73885a08840557e9137a0d2071f60ba73511615d94c21a3cd4 extends Twig_Template
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
        $__internal_42b6ae29e82b42b16d05ea7e7dccb387274debafb58760ed6c98124f17a0dac2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_42b6ae29e82b42b16d05ea7e7dccb387274debafb58760ed6c98124f17a0dac2->enter($__internal_42b6ae29e82b42b16d05ea7e7dccb387274debafb58760ed6c98124f17a0dac2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/acorn-dynamic-import/node_modules/acorn/src/bin/acorn.js"));

        // line 1
        echo "import {basename} from \"path\"
import {readFileSync as readFile} from \"fs\"
import * as acorn from \"acorn\"

let infile, forceFile, silent = false, compact = false, tokenize = false
const options = {}

function help(status) {
  const print = (status == 0) ? console.log : console.error
  print(\"usage: \" + basename(process.argv[1]) + \" [--ecma3|--ecma5|--ecma6|--ecma7|...|--ecma2015|--ecma2016|...]\")
  print(\"        [--tokenize] [--locations] [---allow-hash-bang] [--compact] [--silent] [--module] [--help] [--] [infile]\")
  process.exit(status)
}

for (let i = 2; i < process.argv.length; ++i) {
  const arg = process.argv[i]
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
    let match = arg.match(/^--ecma(\\d+)\$/)
    if (match)
      options.ecmaVersion = +match[1]
    else
      help(1)
  }
}

function run(code) {
  let result
  if (!tokenize) {
    try { result = acorn.parse(code, options) }
    catch(e) { console.error(e.message); process.exit(1) }
  } else {
    result = []
    let tokenizer = acorn.tokenizer(code, options), token
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
  run(readFile(infile, \"utf8\"))
} else {
  let code = \"\"
  process.stdin.resume()
  process.stdin.on(\"data\", chunk => code += chunk)
  process.stdin.on(\"end\", () => run(code))
}
";
        
        $__internal_42b6ae29e82b42b16d05ea7e7dccb387274debafb58760ed6c98124f17a0dac2->leave($__internal_42b6ae29e82b42b16d05ea7e7dccb387274debafb58760ed6c98124f17a0dac2_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/acorn-dynamic-import/node_modules/acorn/src/bin/acorn.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("import {basename} from \"path\"
import {readFileSync as readFile} from \"fs\"
import * as acorn from \"acorn\"

let infile, forceFile, silent = false, compact = false, tokenize = false
const options = {}

function help(status) {
  const print = (status == 0) ? console.log : console.error
  print(\"usage: \" + basename(process.argv[1]) + \" [--ecma3|--ecma5|--ecma6|--ecma7|...|--ecma2015|--ecma2016|...]\")
  print(\"        [--tokenize] [--locations] [---allow-hash-bang] [--compact] [--silent] [--module] [--help] [--] [infile]\")
  process.exit(status)
}

for (let i = 2; i < process.argv.length; ++i) {
  const arg = process.argv[i]
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
    let match = arg.match(/^--ecma(\\d+)\$/)
    if (match)
      options.ecmaVersion = +match[1]
    else
      help(1)
  }
}

function run(code) {
  let result
  if (!tokenize) {
    try { result = acorn.parse(code, options) }
    catch(e) { console.error(e.message); process.exit(1) }
  } else {
    result = []
    let tokenizer = acorn.tokenizer(code, options), token
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
  run(readFile(infile, \"utf8\"))
} else {
  let code = \"\"
  process.stdin.resume()
  process.stdin.on(\"data\", chunk => code += chunk)
  process.stdin.on(\"end\", () => run(code))
}
", "node_modules/acorn-dynamic-import/node_modules/acorn/src/bin/acorn.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/acorn-dynamic-import/node_modules/acorn/src/bin/acorn.js");
    }
}
