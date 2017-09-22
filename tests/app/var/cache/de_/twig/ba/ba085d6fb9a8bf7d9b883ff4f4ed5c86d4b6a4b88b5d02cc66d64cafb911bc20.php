<?php

/* node_modules/uglify-js/node_modules/yargs/lib/completion.js */
class __TwigTemplate_1218f96fb0124df286bd6842f6837f4c43f7ebde0852af87e24a2a977f226cb7 extends Twig_Template
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
        $__internal_947f3206eca28524297cfdf25e63345f32d755843144bf7fad4d6a4d85803d0c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_947f3206eca28524297cfdf25e63345f32d755843144bf7fad4d6a4d85803d0c->enter($__internal_947f3206eca28524297cfdf25e63345f32d755843144bf7fad4d6a4d85803d0c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/uglify-js/node_modules/yargs/lib/completion.js"));

        // line 1
        echo "var fs = require('fs'),
  path = require('path')

// add bash completions to your
//  yargs-powered applications.
module.exports = function (yargs, usage) {
  var self = {
    completionKey: 'get-yargs-completions'
  }

  // get a list of completion commands.
  self.getCompletion = function (done) {
    var completions = [],
    current = process.argv[process.argv.length - 1],
    previous = process.argv.slice(process.argv.indexOf('--' + self.completionKey) + 1),
    argv = yargs.parse(previous)

    // a custom completion function can be provided
    // to completion().
    if (completionFunction) {
      if (completionFunction.length < 3) {
        // synchronous completion function.
        return done(completionFunction(current, argv))
      } else {
        // asynchronous completion function
        return completionFunction(current, argv, function (completions) {
          done(completions)
        })
      }
    }

    if (!current.match(/^-/)) {
      usage.getCommands().forEach(function (command) {
        completions.push(command[0])
      })
    }

    if (current.match(/^-/)) {
      Object.keys(yargs.getOptions().key).forEach(function (key) {
        completions.push('--' + key)
      })
    }

    done(completions)
  }

  // generate the completion script to add to your .bashrc.
  self.generateCompletionScript = function (\$0) {
    var script = fs.readFileSync(
      path.resolve(__dirname, '../completion.sh.hbs'),
      'utf-8'
    ),
    name = path.basename(\$0)

    // add ./to applications not yet installed as bin.
    if (\$0.match(/\\.js\$/)) \$0 = './' + \$0

    script = script.replace(/";
        // line 58
        echo twig_escape_filter($this->env, ($context["app_name"] ?? null), "js", null, true);
        echo "/g, name)
    return script.replace(/";
        // line 59
        echo twig_escape_filter($this->env, ($context["app_path"] ?? null), "js", null, true);
        echo "/g, \$0)
  }

  // register a function to perform your own custom
  // completions., this function can be either
  // synchrnous or asynchronous.
  var completionFunction = null
  self.registerFunction = function (fn) {
    completionFunction = fn
  }

  return self
}
";
        
        $__internal_947f3206eca28524297cfdf25e63345f32d755843144bf7fad4d6a4d85803d0c->leave($__internal_947f3206eca28524297cfdf25e63345f32d755843144bf7fad4d6a4d85803d0c_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/uglify-js/node_modules/yargs/lib/completion.js";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  85 => 59,  81 => 58,  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("var fs = require('fs'),
  path = require('path')

// add bash completions to your
//  yargs-powered applications.
module.exports = function (yargs, usage) {
  var self = {
    completionKey: 'get-yargs-completions'
  }

  // get a list of completion commands.
  self.getCompletion = function (done) {
    var completions = [],
    current = process.argv[process.argv.length - 1],
    previous = process.argv.slice(process.argv.indexOf('--' + self.completionKey) + 1),
    argv = yargs.parse(previous)

    // a custom completion function can be provided
    // to completion().
    if (completionFunction) {
      if (completionFunction.length < 3) {
        // synchronous completion function.
        return done(completionFunction(current, argv))
      } else {
        // asynchronous completion function
        return completionFunction(current, argv, function (completions) {
          done(completions)
        })
      }
    }

    if (!current.match(/^-/)) {
      usage.getCommands().forEach(function (command) {
        completions.push(command[0])
      })
    }

    if (current.match(/^-/)) {
      Object.keys(yargs.getOptions().key).forEach(function (key) {
        completions.push('--' + key)
      })
    }

    done(completions)
  }

  // generate the completion script to add to your .bashrc.
  self.generateCompletionScript = function (\$0) {
    var script = fs.readFileSync(
      path.resolve(__dirname, '../completion.sh.hbs'),
      'utf-8'
    ),
    name = path.basename(\$0)

    // add ./to applications not yet installed as bin.
    if (\$0.match(/\\.js\$/)) \$0 = './' + \$0

    script = script.replace(/{{app_name}}/g, name)
    return script.replace(/{{app_path}}/g, \$0)
  }

  // register a function to perform your own custom
  // completions., this function can be either
  // synchrnous or asynchronous.
  var completionFunction = null
  self.registerFunction = function (fn) {
    completionFunction = fn
  }

  return self
}
", "node_modules/uglify-js/node_modules/yargs/lib/completion.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/uglify-js/node_modules/yargs/lib/completion.js");
    }
}
