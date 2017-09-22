<?php

/* node_modules/fsevents/node_modules/node-pre-gyp/bin/node-pre-gyp */
class __TwigTemplate_9e5d51bf65ab297e4427375b8abf73155730e79020249b6822e46f5ed8b8ab91 extends Twig_Template
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
        $__internal_9727d6779ff1d55a50842d716e851eedfe70e991157f7cfaba7cca425133fe5b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9727d6779ff1d55a50842d716e851eedfe70e991157f7cfaba7cca425133fe5b->enter($__internal_9727d6779ff1d55a50842d716e851eedfe70e991157f7cfaba7cca425133fe5b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/fsevents/node_modules/node-pre-gyp/bin/node-pre-gyp"));

        // line 1
        echo "#!/usr/bin/env node

\"use strict\";

/**
 * Set the title.
 */

process.title = 'node-pre-gyp';

/**
 * Module dependencies.
 */

var node_pre_gyp = require('../');
var log = require('npmlog');

/**
 * Process and execute the selected commands.
 */

var prog = new node_pre_gyp.Run();
var completed = false;
prog.parseArgv(process.argv);

if (prog.todo.length === 0) {
  if (~process.argv.indexOf('-v') || ~process.argv.indexOf('--version')) {
    console.log('v%s', prog.version);
  } else {
    console.log('%s', prog.usage());
  }
  return process.exit(0);
}

// if --no-color is passed
if (prog.opts && prog.opts.hasOwnProperty('color') && !prog.opts.color) {
  log.disableColor();
}

log.info('it worked if it ends with', 'ok');
log.verbose('cli', process.argv);
log.info('using', process.title + '@%s', prog.version);
log.info('using', 'node@%s | %s | %s', process.versions.node, process.platform, process.arch);


/**
 * Change dir if -C/--directory was passed.
 */

var dir = prog.opts.directory;
if (dir) {
  var fs = require('fs');
  try {
    var stat = fs.statSync(dir);
    if (stat.isDirectory()) {
      log.info('chdir', dir);
      process.chdir(dir);
    } else {
      log.warn('chdir', dir + ' is not a directory');
    }
  } catch (e) {
    if (e.code === 'ENOENT') {
      log.warn('chdir', dir + ' is not a directory');
    } else {
      log.warn('chdir', 'error during chdir() \"%s\"', e.message);
    }
  }
}

function run () {
  var command = prog.todo.shift();
  if (!command) {
    // done!
    completed = true;
    log.info('ok');
    return;
  }

  prog.commands[command.name](command.args, function (err) {
    if (err) {
      log.error(command.name + ' error');
      log.error('stack', err.stack);
      errorMessage();
      log.error('not ok');
      console.log(err.message);
      return process.exit(1);
    }
    var args_array = [].slice.call(arguments, 1);
    if (args_array.length) {
      console.log.apply(console, args_array);
    }
    // now run the next command in the queue
    process.nextTick(run);
  });
}

process.on('exit', function (code) {
  if (!completed && !code) {
    log.error('Completion callback never invoked!');
    issueMessage();
    process.exit(6);
  }
});

process.on('uncaughtException', function (err) {
  log.error('UNCAUGHT EXCEPTION');
  log.error('stack', err.stack);
  issueMessage();
  process.exit(7);
});

function errorMessage () {
  // copied from npm's lib/util/error-handler.js
  var os = require('os');
  log.error('System', os.type() + ' ' + os.release());
  log.error('command', process.argv.map(JSON.stringify).join(' '));
  log.error('cwd', process.cwd());
  log.error('node -v', process.version);
  log.error(process.title+' -v', 'v' + prog.package.version);
}

function issueMessage () {
  errorMessage();
  log.error('', [ 'This is a bug in `'+process.title+'`.',
                  'Try to update '+process.title+' and file an issue if it does not help:',
                  '    <https://github.com/mapbox/'+process.title+'/issues>',
                ].join('\\n'));
}

// start running the given commands!
run();
";
        
        $__internal_9727d6779ff1d55a50842d716e851eedfe70e991157f7cfaba7cca425133fe5b->leave($__internal_9727d6779ff1d55a50842d716e851eedfe70e991157f7cfaba7cca425133fe5b_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/fsevents/node_modules/node-pre-gyp/bin/node-pre-gyp";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("#!/usr/bin/env node

\"use strict\";

/**
 * Set the title.
 */

process.title = 'node-pre-gyp';

/**
 * Module dependencies.
 */

var node_pre_gyp = require('../');
var log = require('npmlog');

/**
 * Process and execute the selected commands.
 */

var prog = new node_pre_gyp.Run();
var completed = false;
prog.parseArgv(process.argv);

if (prog.todo.length === 0) {
  if (~process.argv.indexOf('-v') || ~process.argv.indexOf('--version')) {
    console.log('v%s', prog.version);
  } else {
    console.log('%s', prog.usage());
  }
  return process.exit(0);
}

// if --no-color is passed
if (prog.opts && prog.opts.hasOwnProperty('color') && !prog.opts.color) {
  log.disableColor();
}

log.info('it worked if it ends with', 'ok');
log.verbose('cli', process.argv);
log.info('using', process.title + '@%s', prog.version);
log.info('using', 'node@%s | %s | %s', process.versions.node, process.platform, process.arch);


/**
 * Change dir if -C/--directory was passed.
 */

var dir = prog.opts.directory;
if (dir) {
  var fs = require('fs');
  try {
    var stat = fs.statSync(dir);
    if (stat.isDirectory()) {
      log.info('chdir', dir);
      process.chdir(dir);
    } else {
      log.warn('chdir', dir + ' is not a directory');
    }
  } catch (e) {
    if (e.code === 'ENOENT') {
      log.warn('chdir', dir + ' is not a directory');
    } else {
      log.warn('chdir', 'error during chdir() \"%s\"', e.message);
    }
  }
}

function run () {
  var command = prog.todo.shift();
  if (!command) {
    // done!
    completed = true;
    log.info('ok');
    return;
  }

  prog.commands[command.name](command.args, function (err) {
    if (err) {
      log.error(command.name + ' error');
      log.error('stack', err.stack);
      errorMessage();
      log.error('not ok');
      console.log(err.message);
      return process.exit(1);
    }
    var args_array = [].slice.call(arguments, 1);
    if (args_array.length) {
      console.log.apply(console, args_array);
    }
    // now run the next command in the queue
    process.nextTick(run);
  });
}

process.on('exit', function (code) {
  if (!completed && !code) {
    log.error('Completion callback never invoked!');
    issueMessage();
    process.exit(6);
  }
});

process.on('uncaughtException', function (err) {
  log.error('UNCAUGHT EXCEPTION');
  log.error('stack', err.stack);
  issueMessage();
  process.exit(7);
});

function errorMessage () {
  // copied from npm's lib/util/error-handler.js
  var os = require('os');
  log.error('System', os.type() + ' ' + os.release());
  log.error('command', process.argv.map(JSON.stringify).join(' '));
  log.error('cwd', process.cwd());
  log.error('node -v', process.version);
  log.error(process.title+' -v', 'v' + prog.package.version);
}

function issueMessage () {
  errorMessage();
  log.error('', [ 'This is a bug in `'+process.title+'`.',
                  'Try to update '+process.title+' and file an issue if it does not help:',
                  '    <https://github.com/mapbox/'+process.title+'/issues>',
                ].join('\\n'));
}

// start running the given commands!
run();
", "node_modules/fsevents/node_modules/node-pre-gyp/bin/node-pre-gyp", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/fsevents/node_modules/node-pre-gyp/bin/node-pre-gyp");
    }
}
