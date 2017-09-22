<?php

/* node_modules/fsevents/node_modules/tar/examples/reader.js */
class __TwigTemplate_cb8f74e5f6fbf34f95a6e26ce0d0c27967e2763f3fd8f854ed65b21610701c42 extends Twig_Template
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
        $__internal_5d4dcc5a133c8fef98beed321a850d52e0709629cf3fff8c0ff95ab8f1b13bca = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5d4dcc5a133c8fef98beed321a850d52e0709629cf3fff8c0ff95ab8f1b13bca->enter($__internal_5d4dcc5a133c8fef98beed321a850d52e0709629cf3fff8c0ff95ab8f1b13bca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/fsevents/node_modules/tar/examples/reader.js"));

        // line 1
        echo "var tar = require(\"../tar.js\")
  , fs = require(\"fs\")

fs.createReadStream(__dirname + \"/../test/fixtures/c.tar\")
  .pipe(tar.Parse())
  .on(\"extendedHeader\", function (e) {
    console.error(\"extended pax header\", e.props)
    e.on(\"end\", function () {
      console.error(\"extended pax fields:\", e.fields)
    })
  })
  .on(\"ignoredEntry\", function (e) {
    console.error(\"ignoredEntry?!?\", e.props)
  })
  .on(\"longLinkpath\", function (e) {
    console.error(\"longLinkpath entry\", e.props)
    e.on(\"end\", function () {
      console.error(\"value=%j\", e.body.toString())
    })
  })
  .on(\"longPath\", function (e) {
    console.error(\"longPath entry\", e.props)
    e.on(\"end\", function () {
      console.error(\"value=%j\", e.body.toString())
    })
  })
  .on(\"entry\", function (e) {
    console.error(\"entry\", e.props)
    e.on(\"data\", function (c) {
      console.error(\"  >>>\" + c.toString().replace(/\\n/g, \"\\\\n\"))
    })
    e.on(\"end\", function () {
      console.error(\"  <<<EOF\")
    })
  })

";
        
        $__internal_5d4dcc5a133c8fef98beed321a850d52e0709629cf3fff8c0ff95ab8f1b13bca->leave($__internal_5d4dcc5a133c8fef98beed321a850d52e0709629cf3fff8c0ff95ab8f1b13bca_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/fsevents/node_modules/tar/examples/reader.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("var tar = require(\"../tar.js\")
  , fs = require(\"fs\")

fs.createReadStream(__dirname + \"/../test/fixtures/c.tar\")
  .pipe(tar.Parse())
  .on(\"extendedHeader\", function (e) {
    console.error(\"extended pax header\", e.props)
    e.on(\"end\", function () {
      console.error(\"extended pax fields:\", e.fields)
    })
  })
  .on(\"ignoredEntry\", function (e) {
    console.error(\"ignoredEntry?!?\", e.props)
  })
  .on(\"longLinkpath\", function (e) {
    console.error(\"longLinkpath entry\", e.props)
    e.on(\"end\", function () {
      console.error(\"value=%j\", e.body.toString())
    })
  })
  .on(\"longPath\", function (e) {
    console.error(\"longPath entry\", e.props)
    e.on(\"end\", function () {
      console.error(\"value=%j\", e.body.toString())
    })
  })
  .on(\"entry\", function (e) {
    console.error(\"entry\", e.props)
    e.on(\"data\", function (c) {
      console.error(\"  >>>\" + c.toString().replace(/\\n/g, \"\\\\n\"))
    })
    e.on(\"end\", function () {
      console.error(\"  <<<EOF\")
    })
  })

", "node_modules/fsevents/node_modules/tar/examples/reader.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/fsevents/node_modules/tar/examples/reader.js");
    }
}
