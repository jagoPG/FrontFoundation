<?php

/* node_modules/util/test/node/log.js */
class __TwigTemplate_87ac902337502642fb0993ca54aa2b16e56d7244b66261c7342d2a5c94d028a4 extends Twig_Template
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
        $__internal_48c05d60e7d60b6e1c8fbbf2ddf80bc0f54086eb12d46027764977da564f9b0a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_48c05d60e7d60b6e1c8fbbf2ddf80bc0f54086eb12d46027764977da564f9b0a->enter($__internal_48c05d60e7d60b6e1c8fbbf2ddf80bc0f54086eb12d46027764977da564f9b0a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/util/test/node/log.js"));

        // line 1
        echo "// Copyright Joyent, Inc. and other Node contributors.
//
// Permission is hereby granted, free of charge, to any person obtaining a
// copy of this software and associated documentation files (the
// \"Software\"), to deal in the Software without restriction, including
// without limitation the rights to use, copy, modify, merge, publish,
// distribute, sublicense, and/or sell copies of the Software, and to permit
// persons to whom the Software is furnished to do so, subject to the
// following conditions:
//
// The above copyright notice and this permission notice shall be included
// in all copies or substantial portions of the Software.
//
// THE SOFTWARE IS PROVIDED \"AS IS\", WITHOUT WARRANTY OF ANY KIND, EXPRESS
// OR IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF
// MERCHANTABILITY, FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN
// NO EVENT SHALL THE AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM,
// DAMAGES OR OTHER LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR
// OTHERWISE, ARISING FROM, OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE
// USE OR OTHER DEALINGS IN THE SOFTWARE.


var assert = require('assert');
var util = require('../../');

assert.ok(process.stdout.writable);
assert.ok(process.stderr.writable);

var stdout_write = global.process.stdout.write;
var strings = [];
global.process.stdout.write = function(string) {
  strings.push(string);
};
console._stderr = process.stdout;

var tests = [
  {input: 'foo', output: 'foo'},
  {input: undefined, output: 'undefined'},
  {input: null, output: 'null'},
  {input: false, output: 'false'},
  {input: 42, output: '42'},
  {input: function(){}, output: '[Function]'},
  {input: parseInt('not a number', 10), output: 'NaN'},
  {input: {answer: 42}, output: '{ answer: 42 }'},
  {input: [1,2,3], output: '[ 1, 2, 3 ]'}
];

// test util.log()
tests.forEach(function(test) {
  util.log(test.input);
  var result = strings.shift().trim(),
      re = (/[0-9]{1,2} [A-Z][a-z]{2} [0-9]{2}:[0-9]{2}:[0-9]{2} - (.+)\$/),
      match = re.exec(result);
  assert.ok(match);
  assert.equal(match[1], test.output);
});

global.process.stdout.write = stdout_write;
";
        
        $__internal_48c05d60e7d60b6e1c8fbbf2ddf80bc0f54086eb12d46027764977da564f9b0a->leave($__internal_48c05d60e7d60b6e1c8fbbf2ddf80bc0f54086eb12d46027764977da564f9b0a_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/util/test/node/log.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("// Copyright Joyent, Inc. and other Node contributors.
//
// Permission is hereby granted, free of charge, to any person obtaining a
// copy of this software and associated documentation files (the
// \"Software\"), to deal in the Software without restriction, including
// without limitation the rights to use, copy, modify, merge, publish,
// distribute, sublicense, and/or sell copies of the Software, and to permit
// persons to whom the Software is furnished to do so, subject to the
// following conditions:
//
// The above copyright notice and this permission notice shall be included
// in all copies or substantial portions of the Software.
//
// THE SOFTWARE IS PROVIDED \"AS IS\", WITHOUT WARRANTY OF ANY KIND, EXPRESS
// OR IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF
// MERCHANTABILITY, FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN
// NO EVENT SHALL THE AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM,
// DAMAGES OR OTHER LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR
// OTHERWISE, ARISING FROM, OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE
// USE OR OTHER DEALINGS IN THE SOFTWARE.


var assert = require('assert');
var util = require('../../');

assert.ok(process.stdout.writable);
assert.ok(process.stderr.writable);

var stdout_write = global.process.stdout.write;
var strings = [];
global.process.stdout.write = function(string) {
  strings.push(string);
};
console._stderr = process.stdout;

var tests = [
  {input: 'foo', output: 'foo'},
  {input: undefined, output: 'undefined'},
  {input: null, output: 'null'},
  {input: false, output: 'false'},
  {input: 42, output: '42'},
  {input: function(){}, output: '[Function]'},
  {input: parseInt('not a number', 10), output: 'NaN'},
  {input: {answer: 42}, output: '{ answer: 42 }'},
  {input: [1,2,3], output: '[ 1, 2, 3 ]'}
];

// test util.log()
tests.forEach(function(test) {
  util.log(test.input);
  var result = strings.shift().trim(),
      re = (/[0-9]{1,2} [A-Z][a-z]{2} [0-9]{2}:[0-9]{2}:[0-9]{2} - (.+)\$/),
      match = re.exec(result);
  assert.ok(match);
  assert.equal(match[1], test.output);
});

global.process.stdout.write = stdout_write;
", "node_modules/util/test/node/log.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/util/test/node/log.js");
    }
}