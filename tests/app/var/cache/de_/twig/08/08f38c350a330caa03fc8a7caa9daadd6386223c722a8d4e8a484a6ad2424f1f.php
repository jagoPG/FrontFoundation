<?php

/* node_modules/fsevents/node_modules/osenv/test/unix.js */
class __TwigTemplate_c20a21115294ca40d8166e3c4e40e30e0a5b3c9f2bfa36ca7a46af3810ee07fe extends Twig_Template
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
        $__internal_6f1c3b7e7ce1b772650f0c8087804485a90250088a0bbbdcbcc2a88d5505e2dd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6f1c3b7e7ce1b772650f0c8087804485a90250088a0bbbdcbcc2a88d5505e2dd->enter($__internal_6f1c3b7e7ce1b772650f0c8087804485a90250088a0bbbdcbcc2a88d5505e2dd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/fsevents/node_modules/osenv/test/unix.js"));

        // line 1
        echo "// only run this test on windows
// pretending to be another platform is too hacky, since it breaks
// how the underlying system looks up module paths and runs
// child processes, and all that stuff is cached.
var tap = require('tap')


if (process.platform === 'win32') {
  tap.plan(0, 'Skip unix tests, this is not unix')
  process.exit(0)
}

// like unix, but funny
process.env.USER = 'sirUser'
process.env.HOME = '/home/sirUser'
process.env.HOSTNAME = 'my-machine'
process.env.TMPDIR = '/tmpdir'
process.env.TMP = '/tmp'
process.env.TEMP = '/temp'
process.env.PATH = '/opt/local/bin:/usr/local/bin:/usr/bin/:bin'
process.env.PS1 = '(o_o) \$ '
process.env.EDITOR = 'edit'
process.env.VISUAL = 'visualedit'
process.env.SHELL = 'zsh'

tap.test('basic unix sanity test', function (t) {
  var osenv = require('../osenv.js')

  t.equal(osenv.user(), process.env.USER)
  t.equal(osenv.home(), process.env.HOME)
  t.equal(osenv.hostname(), process.env.HOSTNAME)
  t.same(osenv.path(), process.env.PATH.split(':'))
  t.equal(osenv.prompt(), process.env.PS1)
  t.equal(osenv.tmpdir(), process.env.TMPDIR)

  // mildly evil, but it's for a test.
  process.env.TMPDIR = ''
  delete require.cache[require.resolve('../osenv.js')]
  var osenv = require('../osenv.js')
  t.equal(osenv.tmpdir(), process.env.TMP)

  process.env.TMP = ''
  delete require.cache[require.resolve('../osenv.js')]
  var osenv = require('../osenv.js')
  t.equal(osenv.tmpdir(), process.env.TEMP)

  process.env.TEMP = ''
  delete require.cache[require.resolve('../osenv.js')]
  var osenv = require('../osenv.js')
  osenv.home = function () { return null }
  t.equal(osenv.tmpdir(), '/tmp')

  t.equal(osenv.editor(), 'edit')
  process.env.EDITOR = ''
  delete require.cache[require.resolve('../osenv.js')]
  var osenv = require('../osenv.js')
  t.equal(osenv.editor(), 'visualedit')

  process.env.VISUAL = ''
  delete require.cache[require.resolve('../osenv.js')]
  var osenv = require('../osenv.js')
  t.equal(osenv.editor(), 'vi')

  t.equal(osenv.shell(), 'zsh')
  process.env.SHELL = ''
  delete require.cache[require.resolve('../osenv.js')]
  var osenv = require('../osenv.js')
  t.equal(osenv.shell(), 'bash')

  t.end()
})
";
        
        $__internal_6f1c3b7e7ce1b772650f0c8087804485a90250088a0bbbdcbcc2a88d5505e2dd->leave($__internal_6f1c3b7e7ce1b772650f0c8087804485a90250088a0bbbdcbcc2a88d5505e2dd_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/fsevents/node_modules/osenv/test/unix.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("// only run this test on windows
// pretending to be another platform is too hacky, since it breaks
// how the underlying system looks up module paths and runs
// child processes, and all that stuff is cached.
var tap = require('tap')


if (process.platform === 'win32') {
  tap.plan(0, 'Skip unix tests, this is not unix')
  process.exit(0)
}

// like unix, but funny
process.env.USER = 'sirUser'
process.env.HOME = '/home/sirUser'
process.env.HOSTNAME = 'my-machine'
process.env.TMPDIR = '/tmpdir'
process.env.TMP = '/tmp'
process.env.TEMP = '/temp'
process.env.PATH = '/opt/local/bin:/usr/local/bin:/usr/bin/:bin'
process.env.PS1 = '(o_o) \$ '
process.env.EDITOR = 'edit'
process.env.VISUAL = 'visualedit'
process.env.SHELL = 'zsh'

tap.test('basic unix sanity test', function (t) {
  var osenv = require('../osenv.js')

  t.equal(osenv.user(), process.env.USER)
  t.equal(osenv.home(), process.env.HOME)
  t.equal(osenv.hostname(), process.env.HOSTNAME)
  t.same(osenv.path(), process.env.PATH.split(':'))
  t.equal(osenv.prompt(), process.env.PS1)
  t.equal(osenv.tmpdir(), process.env.TMPDIR)

  // mildly evil, but it's for a test.
  process.env.TMPDIR = ''
  delete require.cache[require.resolve('../osenv.js')]
  var osenv = require('../osenv.js')
  t.equal(osenv.tmpdir(), process.env.TMP)

  process.env.TMP = ''
  delete require.cache[require.resolve('../osenv.js')]
  var osenv = require('../osenv.js')
  t.equal(osenv.tmpdir(), process.env.TEMP)

  process.env.TEMP = ''
  delete require.cache[require.resolve('../osenv.js')]
  var osenv = require('../osenv.js')
  osenv.home = function () { return null }
  t.equal(osenv.tmpdir(), '/tmp')

  t.equal(osenv.editor(), 'edit')
  process.env.EDITOR = ''
  delete require.cache[require.resolve('../osenv.js')]
  var osenv = require('../osenv.js')
  t.equal(osenv.editor(), 'visualedit')

  process.env.VISUAL = ''
  delete require.cache[require.resolve('../osenv.js')]
  var osenv = require('../osenv.js')
  t.equal(osenv.editor(), 'vi')

  t.equal(osenv.shell(), 'zsh')
  process.env.SHELL = ''
  delete require.cache[require.resolve('../osenv.js')]
  var osenv = require('../osenv.js')
  t.equal(osenv.shell(), 'bash')

  t.end()
})
", "node_modules/fsevents/node_modules/osenv/test/unix.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/fsevents/node_modules/osenv/test/unix.js");
    }
}
