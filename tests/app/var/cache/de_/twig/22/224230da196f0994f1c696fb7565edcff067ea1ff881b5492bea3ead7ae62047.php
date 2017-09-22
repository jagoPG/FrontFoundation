<?php

/* node_modules/mime/build/test.js */
class __TwigTemplate_287e70fa001118ffea2f4da18306092820c05a790767552c35f13a95ff148b0b extends Twig_Template
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
        $__internal_3520947ac0ebb12233b88b0bfd059eb00ba14ff4ef8ae352170d537c1aa11e09 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3520947ac0ebb12233b88b0bfd059eb00ba14ff4ef8ae352170d537c1aa11e09->enter($__internal_3520947ac0ebb12233b88b0bfd059eb00ba14ff4ef8ae352170d537c1aa11e09_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/mime/build/test.js"));

        // line 1
        echo "/**
 * Usage: node test.js
 */

var mime = require('../mime');
var assert = require('assert');
var path = require('path');

//
// Test mime lookups
//

assert.equal('text/plain', mime.lookup('text.txt'));     // normal file
assert.equal('text/plain', mime.lookup('TEXT.TXT'));     // uppercase
assert.equal('text/plain', mime.lookup('dir/text.txt')); // dir + file
assert.equal('text/plain', mime.lookup('.text.txt'));    // hidden file
assert.equal('text/plain', mime.lookup('.txt'));         // nameless
assert.equal('text/plain', mime.lookup('txt'));          // extension-only
assert.equal('text/plain', mime.lookup('/txt'));         // extension-less ()
assert.equal('text/plain', mime.lookup('\\\\txt'));        // Windows, extension-less
assert.equal('application/octet-stream', mime.lookup('text.nope')); // unrecognized
assert.equal('fallback', mime.lookup('text.fallback', 'fallback')); // alternate default

//
// Test extensions
//

assert.equal('txt', mime.extension(mime.types.text));
assert.equal('html', mime.extension(mime.types.htm));
assert.equal('bin', mime.extension('application/octet-stream'));
assert.equal('bin', mime.extension('application/octet-stream '));
assert.equal('html', mime.extension(' text/html; charset=UTF-8'));
assert.equal('html', mime.extension('text/html; charset=UTF-8 '));
assert.equal('html', mime.extension('text/html; charset=UTF-8'));
assert.equal('html', mime.extension('text/html ; charset=UTF-8'));
assert.equal('html', mime.extension('text/html;charset=UTF-8'));
assert.equal('html', mime.extension('text/Html;charset=UTF-8'));
assert.equal(undefined, mime.extension('unrecognized'));

//
// Test node.types lookups
//

assert.equal('application/font-woff', mime.lookup('file.woff'));
assert.equal('application/octet-stream', mime.lookup('file.buffer'));
assert.equal('audio/mp4', mime.lookup('file.m4a'));
assert.equal('font/opentype', mime.lookup('file.otf'));

//
// Test charsets
//

assert.equal('UTF-8', mime.charsets.lookup('text/plain'));
assert.equal(undefined, mime.charsets.lookup(mime.types.js));
assert.equal('fallback', mime.charsets.lookup('application/octet-stream', 'fallback'));

console.log('\\nAll tests passed');
";
        
        $__internal_3520947ac0ebb12233b88b0bfd059eb00ba14ff4ef8ae352170d537c1aa11e09->leave($__internal_3520947ac0ebb12233b88b0bfd059eb00ba14ff4ef8ae352170d537c1aa11e09_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/mime/build/test.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("/**
 * Usage: node test.js
 */

var mime = require('../mime');
var assert = require('assert');
var path = require('path');

//
// Test mime lookups
//

assert.equal('text/plain', mime.lookup('text.txt'));     // normal file
assert.equal('text/plain', mime.lookup('TEXT.TXT'));     // uppercase
assert.equal('text/plain', mime.lookup('dir/text.txt')); // dir + file
assert.equal('text/plain', mime.lookup('.text.txt'));    // hidden file
assert.equal('text/plain', mime.lookup('.txt'));         // nameless
assert.equal('text/plain', mime.lookup('txt'));          // extension-only
assert.equal('text/plain', mime.lookup('/txt'));         // extension-less ()
assert.equal('text/plain', mime.lookup('\\\\txt'));        // Windows, extension-less
assert.equal('application/octet-stream', mime.lookup('text.nope')); // unrecognized
assert.equal('fallback', mime.lookup('text.fallback', 'fallback')); // alternate default

//
// Test extensions
//

assert.equal('txt', mime.extension(mime.types.text));
assert.equal('html', mime.extension(mime.types.htm));
assert.equal('bin', mime.extension('application/octet-stream'));
assert.equal('bin', mime.extension('application/octet-stream '));
assert.equal('html', mime.extension(' text/html; charset=UTF-8'));
assert.equal('html', mime.extension('text/html; charset=UTF-8 '));
assert.equal('html', mime.extension('text/html; charset=UTF-8'));
assert.equal('html', mime.extension('text/html ; charset=UTF-8'));
assert.equal('html', mime.extension('text/html;charset=UTF-8'));
assert.equal('html', mime.extension('text/Html;charset=UTF-8'));
assert.equal(undefined, mime.extension('unrecognized'));

//
// Test node.types lookups
//

assert.equal('application/font-woff', mime.lookup('file.woff'));
assert.equal('application/octet-stream', mime.lookup('file.buffer'));
assert.equal('audio/mp4', mime.lookup('file.m4a'));
assert.equal('font/opentype', mime.lookup('file.otf'));

//
// Test charsets
//

assert.equal('UTF-8', mime.charsets.lookup('text/plain'));
assert.equal(undefined, mime.charsets.lookup(mime.types.js));
assert.equal('fallback', mime.charsets.lookup('application/octet-stream', 'fallback'));

console.log('\\nAll tests passed');
", "node_modules/mime/build/test.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/mime/build/test.js");
    }
}
