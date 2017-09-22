<?php

/* node_modules/parsleyjs/test/unit/extra/words.js */
class __TwigTemplate_954ff27246397044d161fec5468107d4b850d6d3ba0e07a5d024680b64880e4a extends Twig_Template
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
        $__internal_968bfbf434640cf1f1ccab83b48b4ed1a617fc13d43f850cbc5ba905e1634239 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_968bfbf434640cf1f1ccab83b48b4ed1a617fc13d43f850cbc5ba905e1634239->enter($__internal_968bfbf434640cf1f1ccab83b48b4ed1a617fc13d43f850cbc5ba905e1634239_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/parsleyjs/test/unit/extra/words.js"));

        // line 1
        echo "import \$ from 'jquery';

import Parsley from '../../../src/parsley';

import words from '../../../src/extra/validator/words';

describe('extra/validator/words', () => {
  it('should have a minwords validator', () => {
    \$('body').append('<input type=\"text\" id=\"element\" data-parsley-minwords=\"2\" required />');
    expect(\$('#element').psly().isValid()).to.be(false);
    \$('#element').val('foo');
    expect(\$('#element').psly().isValid()).to.be(false);
    \$('#element').val('foo bar');
    expect(\$('#element').psly().isValid()).to.be(true);
  });
  it('should have a maxwords validator', () => {
    \$('body').append('<input type=\"text\" id=\"element\" data-parsley-maxwords=\"2\" required />');
    expect(\$('#element').psly().isValid()).to.be(false);
    \$('#element').val('foo bar');
    expect(\$('#element').psly().isValid()).to.be(true);
    \$('#element').val('foo bar baz');
    expect(\$('#element').psly().isValid()).to.be(false);
  });
  it('should have a words validator', () => {
    \$('body').append('<input type=\"text\" id=\"element\" data-parsley-words=\"[2, 4]\" required />');
    expect(\$('#element').psly().isValid()).to.be(false);
    \$('#element').val('foo');
    expect(\$('#element').psly().isValid()).to.be(false);
    \$('#element').val('foo bar baz');
    expect(\$('#element').psly().isValid()).to.be(true);
    \$('#element').val('foo bar baz qux bux');
    expect(\$('#element').psly().isValid()).to.be(false);
  });
  afterEach(() => {
    \$('#element, .fixture, .parsley-errors-list').remove();
  });
});
";
        
        $__internal_968bfbf434640cf1f1ccab83b48b4ed1a617fc13d43f850cbc5ba905e1634239->leave($__internal_968bfbf434640cf1f1ccab83b48b4ed1a617fc13d43f850cbc5ba905e1634239_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/parsleyjs/test/unit/extra/words.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("import \$ from 'jquery';

import Parsley from '../../../src/parsley';

import words from '../../../src/extra/validator/words';

describe('extra/validator/words', () => {
  it('should have a minwords validator', () => {
    \$('body').append('<input type=\"text\" id=\"element\" data-parsley-minwords=\"2\" required />');
    expect(\$('#element').psly().isValid()).to.be(false);
    \$('#element').val('foo');
    expect(\$('#element').psly().isValid()).to.be(false);
    \$('#element').val('foo bar');
    expect(\$('#element').psly().isValid()).to.be(true);
  });
  it('should have a maxwords validator', () => {
    \$('body').append('<input type=\"text\" id=\"element\" data-parsley-maxwords=\"2\" required />');
    expect(\$('#element').psly().isValid()).to.be(false);
    \$('#element').val('foo bar');
    expect(\$('#element').psly().isValid()).to.be(true);
    \$('#element').val('foo bar baz');
    expect(\$('#element').psly().isValid()).to.be(false);
  });
  it('should have a words validator', () => {
    \$('body').append('<input type=\"text\" id=\"element\" data-parsley-words=\"[2, 4]\" required />');
    expect(\$('#element').psly().isValid()).to.be(false);
    \$('#element').val('foo');
    expect(\$('#element').psly().isValid()).to.be(false);
    \$('#element').val('foo bar baz');
    expect(\$('#element').psly().isValid()).to.be(true);
    \$('#element').val('foo bar baz qux bux');
    expect(\$('#element').psly().isValid()).to.be(false);
  });
  afterEach(() => {
    \$('#element, .fixture, .parsley-errors-list').remove();
  });
});
", "node_modules/parsleyjs/test/unit/extra/words.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/parsleyjs/test/unit/extra/words.js");
    }
}
