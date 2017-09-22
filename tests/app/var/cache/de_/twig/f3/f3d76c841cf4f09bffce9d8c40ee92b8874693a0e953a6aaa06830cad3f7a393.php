<?php

/* node_modules/errno/test.js */
class __TwigTemplate_22ead81bf95d841b05bd8393737c0151436c5dc6cb570acc877ee64e31be08e6 extends Twig_Template
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
        $__internal_f3a2866f850e84edbbfc5acb5b50c89a0b52837089f35a82408172fc20d70273 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f3a2866f850e84edbbfc5acb5b50c89a0b52837089f35a82408172fc20d70273->enter($__internal_f3a2866f850e84edbbfc5acb5b50c89a0b52837089f35a82408172fc20d70273_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/errno/test.js"));

        // line 1
        echo "#!/usr/bin/env node

var test  = require('tape')
  , errno = require('./')

test('sanity checks', function (t) {
  t.ok(errno.all, 'errno.all not found')
  t.ok(errno.errno, 'errno.errno not found')
  t.ok(errno.code, 'errno.code not found')

  t.equal(errno.all.length, 59, 'found ' + errno.all.length + ', expected 59')
  t.equal(errno.errno['-1'], errno.all[0], 'errno -1 not first element')

  t.equal(errno.code['UNKNOWN'], errno.all[0], 'code UNKNOWN not first element')

  t.equal(errno.errno[1], errno.all[2], 'errno 1 not third element')

  t.equal(errno.code['EOF'], errno.all[2], 'code EOF not third element')
  t.end()
})

test('custom errors', function (t) {
  var Cust = errno.create('FooNotBarError')
  var cust = new Cust('foo is not bar')

  t.equal(cust.name, 'FooNotBarError', 'correct custom name')
  t.equal(cust.type, 'FooNotBarError', 'correct custom type')
  t.equal(cust.message, 'foo is not bar', 'correct custom message')
  t.notOk(cust.cause, 'no cause')
  t.end()
})
";
        
        $__internal_f3a2866f850e84edbbfc5acb5b50c89a0b52837089f35a82408172fc20d70273->leave($__internal_f3a2866f850e84edbbfc5acb5b50c89a0b52837089f35a82408172fc20d70273_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/errno/test.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("#!/usr/bin/env node

var test  = require('tape')
  , errno = require('./')

test('sanity checks', function (t) {
  t.ok(errno.all, 'errno.all not found')
  t.ok(errno.errno, 'errno.errno not found')
  t.ok(errno.code, 'errno.code not found')

  t.equal(errno.all.length, 59, 'found ' + errno.all.length + ', expected 59')
  t.equal(errno.errno['-1'], errno.all[0], 'errno -1 not first element')

  t.equal(errno.code['UNKNOWN'], errno.all[0], 'code UNKNOWN not first element')

  t.equal(errno.errno[1], errno.all[2], 'errno 1 not third element')

  t.equal(errno.code['EOF'], errno.all[2], 'code EOF not third element')
  t.end()
})

test('custom errors', function (t) {
  var Cust = errno.create('FooNotBarError')
  var cust = new Cust('foo is not bar')

  t.equal(cust.name, 'FooNotBarError', 'correct custom name')
  t.equal(cust.type, 'FooNotBarError', 'correct custom type')
  t.equal(cust.message, 'foo is not bar', 'correct custom message')
  t.notOk(cust.cause, 'no cause')
  t.end()
})
", "node_modules/errno/test.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/errno/test.js");
    }
}
