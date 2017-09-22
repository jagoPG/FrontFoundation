<?php

/* node_modules/osenv/test/windows.js */
class __TwigTemplate_6ea63db6f3d1cf0f3b8c0cc4d9bba1a4853b7c10e1d3d35a4c744747b83dd0a1 extends Twig_Template
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
        $__internal_d793880bfd533ce3a221c397d021c311f57090a94d102f8732b0253a110e02a0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d793880bfd533ce3a221c397d021c311f57090a94d102f8732b0253a110e02a0->enter($__internal_d793880bfd533ce3a221c397d021c311f57090a94d102f8732b0253a110e02a0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/osenv/test/windows.js"));

        // line 1
        echo "// only run this test on windows
// pretending to be another platform is too hacky, since it breaks
// how the underlying system looks up module paths and runs
// child processes, and all that stuff is cached.
if (process.platform !== 'win32') {
  console.log('TAP version 13\\n' +
              '1..0 # Skip windows tests, this is not windows\\n')
  return
}

// load this before clubbing the platform name.
var tap = require('tap')

process.env.windir = 'c:\\\\windows'
process.env.USERDOMAIN = 'some-domain'
process.env.USERNAME = 'sirUser'
process.env.USERPROFILE = 'C:\\\\Users\\\\sirUser'
process.env.COMPUTERNAME = 'my-machine'
process.env.TMPDIR = 'C:\\\\tmpdir'
process.env.TMP = 'C:\\\\tmp'
process.env.TEMP = 'C:\\\\temp'
process.env.Path = 'C:\\\\Program Files\\\\;C:\\\\Binary Stuff\\\\bin'
process.env.PROMPT = '(o_o) \$ '
process.env.EDITOR = 'edit'
process.env.VISUAL = 'visualedit'
process.env.ComSpec = 'some-com'

tap.test('basic windows sanity test', function (t) {
  var osenv = require('../osenv.js')

  t.equal(osenv.user(),
          process.env.USERDOMAIN + '\\\\' + process.env.USERNAME)
  t.equal(osenv.home(), process.env.USERPROFILE)
  t.equal(osenv.hostname(), process.env.COMPUTERNAME)
  t.same(osenv.path(), process.env.Path.split(';'))
  t.equal(osenv.prompt(), process.env.PROMPT)
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
  t.equal(osenv.tmpdir(), 'c:\\\\windows\\\\temp')

  t.equal(osenv.editor(), 'edit')
  process.env.EDITOR = ''
  delete require.cache[require.resolve('../osenv.js')]
  var osenv = require('../osenv.js')
  t.equal(osenv.editor(), 'visualedit')

  process.env.VISUAL = ''
  delete require.cache[require.resolve('../osenv.js')]
  var osenv = require('../osenv.js')
  t.equal(osenv.editor(), 'notepad.exe')

  t.equal(osenv.shell(), 'some-com')
  process.env.ComSpec = ''
  delete require.cache[require.resolve('../osenv.js')]
  var osenv = require('../osenv.js')
  t.equal(osenv.shell(), 'cmd')

  t.end()
})
";
        
        $__internal_d793880bfd533ce3a221c397d021c311f57090a94d102f8732b0253a110e02a0->leave($__internal_d793880bfd533ce3a221c397d021c311f57090a94d102f8732b0253a110e02a0_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/osenv/test/windows.js";
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
if (process.platform !== 'win32') {
  console.log('TAP version 13\\n' +
              '1..0 # Skip windows tests, this is not windows\\n')
  return
}

// load this before clubbing the platform name.
var tap = require('tap')

process.env.windir = 'c:\\\\windows'
process.env.USERDOMAIN = 'some-domain'
process.env.USERNAME = 'sirUser'
process.env.USERPROFILE = 'C:\\\\Users\\\\sirUser'
process.env.COMPUTERNAME = 'my-machine'
process.env.TMPDIR = 'C:\\\\tmpdir'
process.env.TMP = 'C:\\\\tmp'
process.env.TEMP = 'C:\\\\temp'
process.env.Path = 'C:\\\\Program Files\\\\;C:\\\\Binary Stuff\\\\bin'
process.env.PROMPT = '(o_o) \$ '
process.env.EDITOR = 'edit'
process.env.VISUAL = 'visualedit'
process.env.ComSpec = 'some-com'

tap.test('basic windows sanity test', function (t) {
  var osenv = require('../osenv.js')

  t.equal(osenv.user(),
          process.env.USERDOMAIN + '\\\\' + process.env.USERNAME)
  t.equal(osenv.home(), process.env.USERPROFILE)
  t.equal(osenv.hostname(), process.env.COMPUTERNAME)
  t.same(osenv.path(), process.env.Path.split(';'))
  t.equal(osenv.prompt(), process.env.PROMPT)
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
  t.equal(osenv.tmpdir(), 'c:\\\\windows\\\\temp')

  t.equal(osenv.editor(), 'edit')
  process.env.EDITOR = ''
  delete require.cache[require.resolve('../osenv.js')]
  var osenv = require('../osenv.js')
  t.equal(osenv.editor(), 'visualedit')

  process.env.VISUAL = ''
  delete require.cache[require.resolve('../osenv.js')]
  var osenv = require('../osenv.js')
  t.equal(osenv.editor(), 'notepad.exe')

  t.equal(osenv.shell(), 'some-com')
  process.env.ComSpec = ''
  delete require.cache[require.resolve('../osenv.js')]
  var osenv = require('../osenv.js')
  t.equal(osenv.shell(), 'cmd')

  t.end()
})
", "node_modules/osenv/test/windows.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/osenv/test/windows.js");
    }
}
