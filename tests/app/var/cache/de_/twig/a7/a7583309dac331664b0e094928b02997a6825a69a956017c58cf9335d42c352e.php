<?php

/* node_modules/stringstream/example.js */
class __TwigTemplate_796ac1f35845e49ae7a0116302632e9aaf73a1bb6c2695c7015cb791e5f42b72 extends Twig_Template
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
        $__internal_d05ad20a3c2bd186ac6d552cbef9bc7b0499e65ae233d5355004307ef2f59cc2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d05ad20a3c2bd186ac6d552cbef9bc7b0499e65ae233d5355004307ef2f59cc2->enter($__internal_d05ad20a3c2bd186ac6d552cbef9bc7b0499e65ae233d5355004307ef2f59cc2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/stringstream/example.js"));

        // line 1
        echo "var fs   = require('fs')
var zlib = require('zlib')
var strs = require('stringstream')

var utf8Stream = fs.createReadStream('massiveLogFile.gz')
  .pipe(zlib.createGunzip())
  .pipe(strs('utf8'))

utf8Stream.pipe(process.stdout)

// Stream from utf8 to hex to base64... Why not, ay.
var hex64Stream = fs.createReadStream('myFile')
  .pipe(strs('utf8', 'hex'))
  .pipe(strs('hex', 'base64'))

hex64Stream.pipe(process.stdout)

// Deals with base64 correctly by aligning chunks
var stream = fs.createReadStream('myFile').pipe(strs('base64'))

var base64Str = ''

stream.on('data', function(data) { base64Str += data })
stream.on('end', function() {
  console.log('My base64 encoded file is: ' + base64Str) // Wouldn't work with setEncoding()
  console.log('Original file is: ' + new Buffer(base64Str, 'base64'))
})
";
        
        $__internal_d05ad20a3c2bd186ac6d552cbef9bc7b0499e65ae233d5355004307ef2f59cc2->leave($__internal_d05ad20a3c2bd186ac6d552cbef9bc7b0499e65ae233d5355004307ef2f59cc2_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/stringstream/example.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("var fs   = require('fs')
var zlib = require('zlib')
var strs = require('stringstream')

var utf8Stream = fs.createReadStream('massiveLogFile.gz')
  .pipe(zlib.createGunzip())
  .pipe(strs('utf8'))

utf8Stream.pipe(process.stdout)

// Stream from utf8 to hex to base64... Why not, ay.
var hex64Stream = fs.createReadStream('myFile')
  .pipe(strs('utf8', 'hex'))
  .pipe(strs('hex', 'base64'))

hex64Stream.pipe(process.stdout)

// Deals with base64 correctly by aligning chunks
var stream = fs.createReadStream('myFile').pipe(strs('base64'))

var base64Str = ''

stream.on('data', function(data) { base64Str += data })
stream.on('end', function() {
  console.log('My base64 encoded file is: ' + base64Str) // Wouldn't work with setEncoding()
  console.log('Original file is: ' + new Buffer(base64Str, 'base64'))
})
", "node_modules/stringstream/example.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/stringstream/example.js");
    }
}
