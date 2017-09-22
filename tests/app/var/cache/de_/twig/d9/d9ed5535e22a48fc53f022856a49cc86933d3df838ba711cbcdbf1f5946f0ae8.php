<?php

/* node_modules/osenv/test/unix.js */
class __TwigTemplate_8fcb001d956513675c44cdd99e12e69940361e428c7c249a8114ebf28d981587 extends Twig_Template
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
        $__internal_78aa41cb3035cad34e8209a0792f1c51e55b90c6a7001a5e70e8f09fcf74deed = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_78aa41cb3035cad34e8209a0792f1c51e55b90c6a7001a5e70e8f09fcf74deed->enter($__internal_78aa41cb3035cad34e8209a0792f1c51e55b90c6a7001a5e70e8f09fcf74deed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/osenv/test/unix.js"));

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
        
        $__internal_78aa41cb3035cad34e8209a0792f1c51e55b90c6a7001a5e70e8f09fcf74deed->leave($__internal_78aa41cb3035cad34e8209a0792f1c51e55b90c6a7001a5e70e8f09fcf74deed_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/osenv/test/unix.js";
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
", "node_modules/osenv/test/unix.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/osenv/test/unix.js");
    }
}
