<?php

/* node_modules/buffer/test/is-buffer.js */
class __TwigTemplate_65f03abc2d72111e757868d9bd9249c38d75d4743c1da735c3c00b7bb8891808 extends Twig_Template
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
        $__internal_df008b91190977166e09ae918e92349f59f6615c88777bef75f34b0c6ccd5778 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_df008b91190977166e09ae918e92349f59f6615c88777bef75f34b0c6ccd5778->enter($__internal_df008b91190977166e09ae918e92349f59f6615c88777bef75f34b0c6ccd5778_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/buffer/test/is-buffer.js"));

        // line 1
        echo "if (process.env.OBJECT_IMPL) global.TYPED_ARRAY_SUPPORT = false
var B = require('../').Buffer
var isBuffer = require('is-buffer')
var test = require('tape')

test('is-buffer tests', function (t) {
  t.ok(isBuffer(new B(4)), 'new Buffer(4)')

  t.notOk(isBuffer(undefined), 'undefined')
  t.notOk(isBuffer(null), 'null')
  t.notOk(isBuffer(''), 'empty string')
  t.notOk(isBuffer(true), 'true')
  t.notOk(isBuffer(false), 'false')
  t.notOk(isBuffer(0), '0')
  t.notOk(isBuffer(1), '1')
  t.notOk(isBuffer(1.0), '1.0')
  t.notOk(isBuffer('string'), 'string')
  t.notOk(isBuffer({}), '{}')
  t.notOk(isBuffer(function foo () {}), 'function foo () {}')

  t.end()
})
";
        
        $__internal_df008b91190977166e09ae918e92349f59f6615c88777bef75f34b0c6ccd5778->leave($__internal_df008b91190977166e09ae918e92349f59f6615c88777bef75f34b0c6ccd5778_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/buffer/test/is-buffer.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("if (process.env.OBJECT_IMPL) global.TYPED_ARRAY_SUPPORT = false
var B = require('../').Buffer
var isBuffer = require('is-buffer')
var test = require('tape')

test('is-buffer tests', function (t) {
  t.ok(isBuffer(new B(4)), 'new Buffer(4)')

  t.notOk(isBuffer(undefined), 'undefined')
  t.notOk(isBuffer(null), 'null')
  t.notOk(isBuffer(''), 'empty string')
  t.notOk(isBuffer(true), 'true')
  t.notOk(isBuffer(false), 'false')
  t.notOk(isBuffer(0), '0')
  t.notOk(isBuffer(1), '1')
  t.notOk(isBuffer(1.0), '1.0')
  t.notOk(isBuffer('string'), 'string')
  t.notOk(isBuffer({}), '{}')
  t.notOk(isBuffer(function foo () {}), 'function foo () {}')

  t.end()
})
", "node_modules/buffer/test/is-buffer.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/buffer/test/is-buffer.js");
    }
}
