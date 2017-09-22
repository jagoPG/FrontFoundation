<?php

/* node_modules/buffer/test/static.js */
class __TwigTemplate_bb7c61e43b900b9bd334da0e080b4257b41587c8c16c74bf1433930538732552 extends Twig_Template
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
        $__internal_aadf09a49dd8608237c06a04f3423854edb61ee721768726a05ba1a338ce1079 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_aadf09a49dd8608237c06a04f3423854edb61ee721768726a05ba1a338ce1079->enter($__internal_aadf09a49dd8608237c06a04f3423854edb61ee721768726a05ba1a338ce1079_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/buffer/test/static.js"));

        // line 1
        echo "if (process.env.OBJECT_IMPL) global.TYPED_ARRAY_SUPPORT = false
var B = require('../').Buffer
var test = require('tape')

test('Buffer.isEncoding', function (t) {
  t.equal(B.isEncoding('HEX'), true)
  t.equal(B.isEncoding('hex'), true)
  t.equal(B.isEncoding('bad'), false)
  t.end()
})

test('Buffer.isBuffer', function (t) {
  t.equal(B.isBuffer(new B('hey', 'utf8')), true)
  t.equal(B.isBuffer(new B([1, 2, 3], 'utf8')), true)
  t.equal(B.isBuffer('hey'), false)
  t.end()
})
";
        
        $__internal_aadf09a49dd8608237c06a04f3423854edb61ee721768726a05ba1a338ce1079->leave($__internal_aadf09a49dd8608237c06a04f3423854edb61ee721768726a05ba1a338ce1079_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/buffer/test/static.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("if (process.env.OBJECT_IMPL) global.TYPED_ARRAY_SUPPORT = false
var B = require('../').Buffer
var test = require('tape')

test('Buffer.isEncoding', function (t) {
  t.equal(B.isEncoding('HEX'), true)
  t.equal(B.isEncoding('hex'), true)
  t.equal(B.isEncoding('bad'), false)
  t.end()
})

test('Buffer.isBuffer', function (t) {
  t.equal(B.isBuffer(new B('hey', 'utf8')), true)
  t.equal(B.isBuffer(new B([1, 2, 3], 'utf8')), true)
  t.equal(B.isBuffer('hey'), false)
  t.end()
})
", "node_modules/buffer/test/static.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/buffer/test/static.js");
    }
}
