<?php

/* node_modules/buffer/test/base64.js */
class __TwigTemplate_225d606d5818ee038da0d9f59e895e57d33d45eaa5e72044bcf9470663669811 extends Twig_Template
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
        $__internal_5c1fd50f7c16f5874d46586e8bc18c3449aef2b7f13080a75c6ac6c618afa4bd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5c1fd50f7c16f5874d46586e8bc18c3449aef2b7f13080a75c6ac6c618afa4bd->enter($__internal_5c1fd50f7c16f5874d46586e8bc18c3449aef2b7f13080a75c6ac6c618afa4bd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/buffer/test/base64.js"));

        // line 1
        echo "if (process.env.OBJECT_IMPL) global.TYPED_ARRAY_SUPPORT = false
var B = require('../').Buffer
var test = require('tape')

test('base64: ignore whitespace', function (t) {
  var text = '\\n   YW9ldQ==  '
  var buf = new B(text, 'base64')
  t.equal(buf.toString(), 'aoeu')
  t.end()
})

test('base64: strings without padding', function (t) {
  t.equal((new B('YW9ldQ', 'base64').toString()), 'aoeu')
  t.end()
})

test('base64: newline in utf8 -- should not be an issue', function (t) {
  t.equal(
    new B('LS0tCnRpdGxlOiBUaHJlZSBkYXNoZXMgbWFya3MgdGhlIHNwb3QKdGFnczoK', 'base64').toString('utf8'),
    '---\\ntitle: Three dashes marks the spot\\ntags:\\n'
  )
  t.end()
})

test('base64: newline in base64 -- should get stripped', function (t) {
  t.equal(
    new B('LS0tCnRpdGxlOiBUaHJlZSBkYXNoZXMgbWFya3MgdGhlIHNwb3QKdGFnczoK\\nICAtIHlhbWwKICAtIGZyb250LW1hdHRlcgogIC0gZGFzaGVzCmV4cGFuZWQt', 'base64').toString('utf8'),
    '---\\ntitle: Three dashes marks the spot\\ntags:\\n  - yaml\\n  - front-matter\\n  - dashes\\nexpaned-'
  )
  t.end()
})

test('base64: tab characters in base64 - should get stripped', function (t) {
  t.equal(
    new B('LS0tCnRpdGxlOiBUaHJlZSBkYXNoZXMgbWFya3MgdGhlIHNwb3QKdGFnczoK\\t\\t\\t\\tICAtIHlhbWwKICAtIGZyb250LW1hdHRlcgogIC0gZGFzaGVzCmV4cGFuZWQt', 'base64').toString('utf8'),
    '---\\ntitle: Three dashes marks the spot\\ntags:\\n  - yaml\\n  - front-matter\\n  - dashes\\nexpaned-'
  )
  t.end()
})

test('base64: invalid non-alphanumeric characters -- should be stripped', function (t) {
  t.equal(
    new B('!\"#\$%&\\'()*,.:;<=>?@[\\\\]^`{|}~', 'base64').toString('utf8'),
    ''
  )
  t.end()
})
";
        
        $__internal_5c1fd50f7c16f5874d46586e8bc18c3449aef2b7f13080a75c6ac6c618afa4bd->leave($__internal_5c1fd50f7c16f5874d46586e8bc18c3449aef2b7f13080a75c6ac6c618afa4bd_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/buffer/test/base64.js";
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

test('base64: ignore whitespace', function (t) {
  var text = '\\n   YW9ldQ==  '
  var buf = new B(text, 'base64')
  t.equal(buf.toString(), 'aoeu')
  t.end()
})

test('base64: strings without padding', function (t) {
  t.equal((new B('YW9ldQ', 'base64').toString()), 'aoeu')
  t.end()
})

test('base64: newline in utf8 -- should not be an issue', function (t) {
  t.equal(
    new B('LS0tCnRpdGxlOiBUaHJlZSBkYXNoZXMgbWFya3MgdGhlIHNwb3QKdGFnczoK', 'base64').toString('utf8'),
    '---\\ntitle: Three dashes marks the spot\\ntags:\\n'
  )
  t.end()
})

test('base64: newline in base64 -- should get stripped', function (t) {
  t.equal(
    new B('LS0tCnRpdGxlOiBUaHJlZSBkYXNoZXMgbWFya3MgdGhlIHNwb3QKdGFnczoK\\nICAtIHlhbWwKICAtIGZyb250LW1hdHRlcgogIC0gZGFzaGVzCmV4cGFuZWQt', 'base64').toString('utf8'),
    '---\\ntitle: Three dashes marks the spot\\ntags:\\n  - yaml\\n  - front-matter\\n  - dashes\\nexpaned-'
  )
  t.end()
})

test('base64: tab characters in base64 - should get stripped', function (t) {
  t.equal(
    new B('LS0tCnRpdGxlOiBUaHJlZSBkYXNoZXMgbWFya3MgdGhlIHNwb3QKdGFnczoK\\t\\t\\t\\tICAtIHlhbWwKICAtIGZyb250LW1hdHRlcgogIC0gZGFzaGVzCmV4cGFuZWQt', 'base64').toString('utf8'),
    '---\\ntitle: Three dashes marks the spot\\ntags:\\n  - yaml\\n  - front-matter\\n  - dashes\\nexpaned-'
  )
  t.end()
})

test('base64: invalid non-alphanumeric characters -- should be stripped', function (t) {
  t.equal(
    new B('!\"#\$%&\\'()*,.:;<=>?@[\\\\]^`{|}~', 'base64').toString('utf8'),
    ''
  )
  t.end()
})
", "node_modules/buffer/test/base64.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/buffer/test/base64.js");
    }
}
