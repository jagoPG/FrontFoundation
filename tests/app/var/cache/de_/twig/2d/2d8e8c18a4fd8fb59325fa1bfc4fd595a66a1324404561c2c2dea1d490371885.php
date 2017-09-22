<?php

/* node_modules/rimraf/bin.js */
class __TwigTemplate_8f47c5edb00e294209c1871fdcc261629ebc0f4968c0fd23162b6fef021415b6 extends Twig_Template
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
        $__internal_5e06e197f36dd326fd5e88774c58f56cb0bdce316aa5fd4b6b19ccd036caf33a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5e06e197f36dd326fd5e88774c58f56cb0bdce316aa5fd4b6b19ccd036caf33a->enter($__internal_5e06e197f36dd326fd5e88774c58f56cb0bdce316aa5fd4b6b19ccd036caf33a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/rimraf/bin.js"));

        // line 1
        echo "#!/usr/bin/env node

var rimraf = require('./')

var help = false
var dashdash = false
var noglob = false
var args = process.argv.slice(2).filter(function(arg) {
  if (dashdash)
    return !!arg
  else if (arg === '--')
    dashdash = true
  else if (arg === '--no-glob' || arg === '-G')
    noglob = true
  else if (arg === '--glob' || arg === '-g')
    noglob = false
  else if (arg.match(/^(-+|\\/)(h(elp)?|\\?)\$/))
    help = true
  else
    return !!arg
})

if (help || args.length === 0) {
  // If they didn't ask for help, then this is not a \"success\"
  var log = help ? console.log : console.error
  log('Usage: rimraf <path> [<path> ...]')
  log('')
  log('  Deletes all files and folders at \"path\" recursively.')
  log('')
  log('Options:')
  log('')
  log('  -h, --help     Display this usage info')
  log('  -G, --no-glob  Do not expand glob patterns in arguments')
  log('  -g, --glob     Expand glob patterns in arguments (default)')
  process.exit(help ? 0 : 1)
} else
  go(0)

function go (n) {
  if (n >= args.length)
    return
  var options = {}
  if (noglob)
    options = { glob: false }
  rimraf(args[n], options, function (er) {
    if (er)
      throw er
    go(n+1)
  })
}
";
        
        $__internal_5e06e197f36dd326fd5e88774c58f56cb0bdce316aa5fd4b6b19ccd036caf33a->leave($__internal_5e06e197f36dd326fd5e88774c58f56cb0bdce316aa5fd4b6b19ccd036caf33a_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/rimraf/bin.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("#!/usr/bin/env node

var rimraf = require('./')

var help = false
var dashdash = false
var noglob = false
var args = process.argv.slice(2).filter(function(arg) {
  if (dashdash)
    return !!arg
  else if (arg === '--')
    dashdash = true
  else if (arg === '--no-glob' || arg === '-G')
    noglob = true
  else if (arg === '--glob' || arg === '-g')
    noglob = false
  else if (arg.match(/^(-+|\\/)(h(elp)?|\\?)\$/))
    help = true
  else
    return !!arg
})

if (help || args.length === 0) {
  // If they didn't ask for help, then this is not a \"success\"
  var log = help ? console.log : console.error
  log('Usage: rimraf <path> [<path> ...]')
  log('')
  log('  Deletes all files and folders at \"path\" recursively.')
  log('')
  log('Options:')
  log('')
  log('  -h, --help     Display this usage info')
  log('  -G, --no-glob  Do not expand glob patterns in arguments')
  log('  -g, --glob     Expand glob patterns in arguments (default)')
  process.exit(help ? 0 : 1)
} else
  go(0)

function go (n) {
  if (n >= args.length)
    return
  var options = {}
  if (noglob)
    options = { glob: false }
  rimraf(args[n], options, function (er) {
    if (er)
      throw er
    go(n+1)
  })
}
", "node_modules/rimraf/bin.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/rimraf/bin.js");
    }
}
