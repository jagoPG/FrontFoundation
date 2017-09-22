<?php

/* node_modules/parsleyjs/test/unit/extra/dateiso.js */
class __TwigTemplate_57b6daee590ed5ca6e3e77ab3984238c3cf399d1a890c6063b432092d2c7f6df extends Twig_Template
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
        $__internal_a248588c508fe75df1ede3e1d16c7410031bb8a973f6dbca1349da9db95a6f62 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a248588c508fe75df1ede3e1d16c7410031bb8a973f6dbca1349da9db95a6f62->enter($__internal_a248588c508fe75df1ede3e1d16c7410031bb8a973f6dbca1349da9db95a6f62_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/parsleyjs/test/unit/extra/dateiso.js"));

        // line 1
        echo "import \$ from 'jquery';

import Parsley from '../../../src/parsley';

import dateiso from '../../../src/extra/validator/dateiso';

describe('extra/validator/dateiso', () => {

  it('should have dateiso validator', () => {
    var expectValidation = function(value, name, requirements) {
      var field = \$('<input>').parsley();
      field.options[name] = requirements;
      return expect(field.isValid({force: true, value: value}));
    };

    expectValidation('',           'dateiso').not.to.be(true);
    expectValidation('foo',        'dateiso').not.to.be(true);
    expectValidation('1986-30-01', 'dateiso').not.to.be(true);
    expectValidation('1986-12-45', 'dateiso').not.to.be(true);
    expectValidation('1986-12-01', 'dateiso').to.be(true);
  });
});
";
        
        $__internal_a248588c508fe75df1ede3e1d16c7410031bb8a973f6dbca1349da9db95a6f62->leave($__internal_a248588c508fe75df1ede3e1d16c7410031bb8a973f6dbca1349da9db95a6f62_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/parsleyjs/test/unit/extra/dateiso.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("import \$ from 'jquery';

import Parsley from '../../../src/parsley';

import dateiso from '../../../src/extra/validator/dateiso';

describe('extra/validator/dateiso', () => {

  it('should have dateiso validator', () => {
    var expectValidation = function(value, name, requirements) {
      var field = \$('<input>').parsley();
      field.options[name] = requirements;
      return expect(field.isValid({force: true, value: value}));
    };

    expectValidation('',           'dateiso').not.to.be(true);
    expectValidation('foo',        'dateiso').not.to.be(true);
    expectValidation('1986-30-01', 'dateiso').not.to.be(true);
    expectValidation('1986-12-45', 'dateiso').not.to.be(true);
    expectValidation('1986-12-01', 'dateiso').to.be(true);
  });
});
", "node_modules/parsleyjs/test/unit/extra/dateiso.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/parsleyjs/test/unit/extra/dateiso.js");
    }
}
