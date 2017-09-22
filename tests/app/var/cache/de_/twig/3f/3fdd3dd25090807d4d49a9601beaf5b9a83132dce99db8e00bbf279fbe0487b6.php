<?php

/* node_modules/fstream/fstream.js */
class __TwigTemplate_0448a17ef84627c950a04aa3f92079003b0ee150cdee9ad3a09de1a35ffc0d16 extends Twig_Template
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
        $__internal_558d665486c14d73377db80addcc4072641e0b1279b9c5e151bff2ef1ff59294 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_558d665486c14d73377db80addcc4072641e0b1279b9c5e151bff2ef1ff59294->enter($__internal_558d665486c14d73377db80addcc4072641e0b1279b9c5e151bff2ef1ff59294_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/fstream/fstream.js"));

        // line 1
        echo "exports.Abstract = require('./lib/abstract.js')
exports.Reader = require('./lib/reader.js')
exports.Writer = require('./lib/writer.js')

exports.File = {
  Reader: require('./lib/file-reader.js'),
  Writer: require('./lib/file-writer.js')
}

exports.Dir = {
  Reader: require('./lib/dir-reader.js'),
  Writer: require('./lib/dir-writer.js')
}

exports.Link = {
  Reader: require('./lib/link-reader.js'),
  Writer: require('./lib/link-writer.js')
}

exports.Proxy = {
  Reader: require('./lib/proxy-reader.js'),
  Writer: require('./lib/proxy-writer.js')
}

exports.Reader.Dir = exports.DirReader = exports.Dir.Reader
exports.Reader.File = exports.FileReader = exports.File.Reader
exports.Reader.Link = exports.LinkReader = exports.Link.Reader
exports.Reader.Proxy = exports.ProxyReader = exports.Proxy.Reader

exports.Writer.Dir = exports.DirWriter = exports.Dir.Writer
exports.Writer.File = exports.FileWriter = exports.File.Writer
exports.Writer.Link = exports.LinkWriter = exports.Link.Writer
exports.Writer.Proxy = exports.ProxyWriter = exports.Proxy.Writer

exports.collect = require('./lib/collect.js')
";
        
        $__internal_558d665486c14d73377db80addcc4072641e0b1279b9c5e151bff2ef1ff59294->leave($__internal_558d665486c14d73377db80addcc4072641e0b1279b9c5e151bff2ef1ff59294_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/fstream/fstream.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("exports.Abstract = require('./lib/abstract.js')
exports.Reader = require('./lib/reader.js')
exports.Writer = require('./lib/writer.js')

exports.File = {
  Reader: require('./lib/file-reader.js'),
  Writer: require('./lib/file-writer.js')
}

exports.Dir = {
  Reader: require('./lib/dir-reader.js'),
  Writer: require('./lib/dir-writer.js')
}

exports.Link = {
  Reader: require('./lib/link-reader.js'),
  Writer: require('./lib/link-writer.js')
}

exports.Proxy = {
  Reader: require('./lib/proxy-reader.js'),
  Writer: require('./lib/proxy-writer.js')
}

exports.Reader.Dir = exports.DirReader = exports.Dir.Reader
exports.Reader.File = exports.FileReader = exports.File.Reader
exports.Reader.Link = exports.LinkReader = exports.Link.Reader
exports.Reader.Proxy = exports.ProxyReader = exports.Proxy.Reader

exports.Writer.Dir = exports.DirWriter = exports.Dir.Writer
exports.Writer.File = exports.FileWriter = exports.File.Writer
exports.Writer.Link = exports.LinkWriter = exports.Link.Writer
exports.Writer.Proxy = exports.ProxyWriter = exports.Proxy.Writer

exports.collect = require('./lib/collect.js')
", "node_modules/fstream/fstream.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/fstream/fstream.js");
    }
}
