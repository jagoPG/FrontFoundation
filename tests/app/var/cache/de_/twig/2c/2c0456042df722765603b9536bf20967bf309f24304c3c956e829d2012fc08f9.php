<?php

/* node_modules/tar/examples/reader.js */
class __TwigTemplate_ef9e1e1e859701a87b2654d84bbb0e408215e140c3043d98f96b0b16e57ad510 extends Twig_Template
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
        $__internal_cfd3c15d0e3e3e0772dd2fbd641a58fabc37ba6effda0adcaef951c6301d38e2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cfd3c15d0e3e3e0772dd2fbd641a58fabc37ba6effda0adcaef951c6301d38e2->enter($__internal_cfd3c15d0e3e3e0772dd2fbd641a58fabc37ba6effda0adcaef951c6301d38e2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/tar/examples/reader.js"));

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
        
        $__internal_cfd3c15d0e3e3e0772dd2fbd641a58fabc37ba6effda0adcaef951c6301d38e2->leave($__internal_cfd3c15d0e3e3e0772dd2fbd641a58fabc37ba6effda0adcaef951c6301d38e2_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/tar/examples/reader.js";
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

", "node_modules/tar/examples/reader.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/tar/examples/reader.js");
    }
}
