<?php

/* node_modules/buffer/test/node/test-buffer-ascii.js */
class __TwigTemplate_59e823b094c3df3a92fb474d81c2f00e801a32b583863165fe2c4726f433af57 extends Twig_Template
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
        $__internal_d5a217cbb1ee50d292e6f471d7d7893ca95aa6ae1aea874e962a56971b51beb8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d5a217cbb1ee50d292e6f471d7d7893ca95aa6ae1aea874e962a56971b51beb8->enter($__internal_d5a217cbb1ee50d292e6f471d7d7893ca95aa6ae1aea874e962a56971b51beb8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/buffer/test/node/test-buffer-ascii.js"));

        // line 1
        echo "'use strict';
var Buffer = require('../../').Buffer;


var assert = require('assert');

// ASCII conversion in node.js simply masks off the high bits,
// it doesn't do transliteration.
assert.equal(Buffer.from('hérité').toString('ascii'), 'hC)ritC)');

// 71 characters, 78 bytes. The ’ character is a triple-byte sequence.
var input = 'C’est, graphiquement, la réunion d’un accent aigu ' +
            'et d’un accent grave.';

var expected = 'Cb\\u0000\\u0019est, graphiquement, la rC)union ' +
               'db\\u0000\\u0019un accent aigu et db\\u0000\\u0019un ' +
               'accent grave.';

var buf = Buffer.from(input);

for (var i = 0; i < expected.length; ++i) {
  assert.equal(buf.slice(i).toString('ascii'), expected.slice(i));

  // Skip remainder of multi-byte sequence.
  if (input.charCodeAt(i) > 65535) ++i;
  if (input.charCodeAt(i) > 127) ++i;
}

";
        
        $__internal_d5a217cbb1ee50d292e6f471d7d7893ca95aa6ae1aea874e962a56971b51beb8->leave($__internal_d5a217cbb1ee50d292e6f471d7d7893ca95aa6ae1aea874e962a56971b51beb8_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/buffer/test/node/test-buffer-ascii.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("'use strict';
var Buffer = require('../../').Buffer;


var assert = require('assert');

// ASCII conversion in node.js simply masks off the high bits,
// it doesn't do transliteration.
assert.equal(Buffer.from('hérité').toString('ascii'), 'hC)ritC)');

// 71 characters, 78 bytes. The ’ character is a triple-byte sequence.
var input = 'C’est, graphiquement, la réunion d’un accent aigu ' +
            'et d’un accent grave.';

var expected = 'Cb\\u0000\\u0019est, graphiquement, la rC)union ' +
               'db\\u0000\\u0019un accent aigu et db\\u0000\\u0019un ' +
               'accent grave.';

var buf = Buffer.from(input);

for (var i = 0; i < expected.length; ++i) {
  assert.equal(buf.slice(i).toString('ascii'), expected.slice(i));

  // Skip remainder of multi-byte sequence.
  if (input.charCodeAt(i) > 65535) ++i;
  if (input.charCodeAt(i) > 127) ++i;
}

", "node_modules/buffer/test/node/test-buffer-ascii.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/buffer/test/node/test-buffer-ascii.js");
    }
}
