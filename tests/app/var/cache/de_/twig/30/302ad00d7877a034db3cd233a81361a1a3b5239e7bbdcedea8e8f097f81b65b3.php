<?php

/* node_modules/fsevents/node_modules/tar/test/00-setup-fixtures.js */
class __TwigTemplate_0bb51639dda0dbc7c501eaa2b55120cfc7ba1fcc9a6e595afbea5a14051a6a87 extends Twig_Template
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
        $__internal_46e3ed4d4739ba141827510285fa818fb2eea4f7657529cd15ed011a962333a1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_46e3ed4d4739ba141827510285fa818fb2eea4f7657529cd15ed011a962333a1->enter($__internal_46e3ed4d4739ba141827510285fa818fb2eea4f7657529cd15ed011a962333a1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/fsevents/node_modules/tar/test/00-setup-fixtures.js"));

        // line 1
        echo "// the fixtures have some weird stuff that is painful
// to include directly in the repo for various reasons.
//
// So, unpack the fixtures with the system tar first.
//
// This means, of course, that it'll only work if you
// already have a tar implementation, and some of them
// will not properly unpack the fixtures anyway.
//
// But, since usually those tests will fail on Windows
// and other systems with less capable filesystems anyway,
// at least this way we don't cause inconveniences by
// merely cloning the repo or installing the package.

var tap = require(\"tap\")
, child_process = require(\"child_process\")
, rimraf = require(\"rimraf\")
, test = tap.test
, path = require(\"path\")

test(\"clean fixtures\", function (t) {
  rimraf(path.resolve(__dirname, \"fixtures\"), function (er) {
    t.ifError(er, \"rimraf ./fixtures/\")
    t.end()
  })
})

test(\"clean tmp\", function (t) {
  rimraf(path.resolve(__dirname, \"tmp\"), function (er) {
    t.ifError(er, \"rimraf ./tmp/\")
    t.end()
  })
})

test(\"extract fixtures\", function (t) {
  var c = child_process.spawn(\"tar\"
                             ,[\"xzvf\", \"fixtures.tgz\"]
                             ,{ cwd: __dirname })

  c.stdout.on(\"data\", errwrite)
  c.stderr.on(\"data\", errwrite)
  function errwrite (chunk) {
    process.stderr.write(chunk)
  }

  c.on(\"exit\", function (code) {
    t.equal(code, 0, \"extract fixtures should exit with 0\")
    if (code) {
      t.comment(\"Note, all tests from here on out will fail because of this.\")
    }
    t.end()
  })
})
";
        
        $__internal_46e3ed4d4739ba141827510285fa818fb2eea4f7657529cd15ed011a962333a1->leave($__internal_46e3ed4d4739ba141827510285fa818fb2eea4f7657529cd15ed011a962333a1_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/fsevents/node_modules/tar/test/00-setup-fixtures.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("// the fixtures have some weird stuff that is painful
// to include directly in the repo for various reasons.
//
// So, unpack the fixtures with the system tar first.
//
// This means, of course, that it'll only work if you
// already have a tar implementation, and some of them
// will not properly unpack the fixtures anyway.
//
// But, since usually those tests will fail on Windows
// and other systems with less capable filesystems anyway,
// at least this way we don't cause inconveniences by
// merely cloning the repo or installing the package.

var tap = require(\"tap\")
, child_process = require(\"child_process\")
, rimraf = require(\"rimraf\")
, test = tap.test
, path = require(\"path\")

test(\"clean fixtures\", function (t) {
  rimraf(path.resolve(__dirname, \"fixtures\"), function (er) {
    t.ifError(er, \"rimraf ./fixtures/\")
    t.end()
  })
})

test(\"clean tmp\", function (t) {
  rimraf(path.resolve(__dirname, \"tmp\"), function (er) {
    t.ifError(er, \"rimraf ./tmp/\")
    t.end()
  })
})

test(\"extract fixtures\", function (t) {
  var c = child_process.spawn(\"tar\"
                             ,[\"xzvf\", \"fixtures.tgz\"]
                             ,{ cwd: __dirname })

  c.stdout.on(\"data\", errwrite)
  c.stderr.on(\"data\", errwrite)
  function errwrite (chunk) {
    process.stderr.write(chunk)
  }

  c.on(\"exit\", function (code) {
    t.equal(code, 0, \"extract fixtures should exit with 0\")
    if (code) {
      t.comment(\"Note, all tests from here on out will fail because of this.\")
    }
    t.end()
  })
})
", "node_modules/fsevents/node_modules/tar/test/00-setup-fixtures.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/fsevents/node_modules/tar/test/00-setup-fixtures.js");
    }
}
