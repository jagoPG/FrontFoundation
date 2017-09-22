<?php

/* node_modules/parsleyjs/test/unit/validator.js */
class __TwigTemplate_85999ea6d6d84c6f26c606b3cb988f67dcc6d72d0d05b4397ddd903514a4f0de extends Twig_Template
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
        $__internal_210437d8b25b51d8e99d75c1b2db2f10a68992143466cf69fcd9369da0ee3c9a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_210437d8b25b51d8e99d75c1b2db2f10a68992143466cf69fcd9369da0ee3c9a->enter($__internal_210437d8b25b51d8e99d75c1b2db2f10a68992143466cf69fcd9369da0ee3c9a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/parsleyjs/test/unit/validator.js"));

        // line 1
        echo "import Validator from '../../src/parsley/validator';

describe('Validator', () => {
  var testParsing = function(type, input, output, extraOptions) {
    it(`parses \${type} requirements`, () => {
      var c = new Validator({requirementType: type});
      expect(c.parseRequirements(input, extraOptions)).to.eql(output);
    });
  };

  testParsing('integer', '42', [42]);
  testParsing('number', '4.2', [4.2]);
  testParsing('string', '42', ['42']);
  testParsing(['number', 'string'], '[4.2, 4.2]', [4.2, '4.2']);
  testParsing({
      '': 'number',
      'foo': 'string',
      'bar': 'string'
    }, '4.2',
    [4.2, {foo: 'FOO', bar: 'BAR'}],
    value => { return value.toUpperCase(); }
  );
});
";
        
        $__internal_210437d8b25b51d8e99d75c1b2db2f10a68992143466cf69fcd9369da0ee3c9a->leave($__internal_210437d8b25b51d8e99d75c1b2db2f10a68992143466cf69fcd9369da0ee3c9a_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/parsleyjs/test/unit/validator.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("import Validator from '../../src/parsley/validator';

describe('Validator', () => {
  var testParsing = function(type, input, output, extraOptions) {
    it(`parses \${type} requirements`, () => {
      var c = new Validator({requirementType: type});
      expect(c.parseRequirements(input, extraOptions)).to.eql(output);
    });
  };

  testParsing('integer', '42', [42]);
  testParsing('number', '4.2', [4.2]);
  testParsing('string', '42', ['42']);
  testParsing(['number', 'string'], '[4.2, 4.2]', [4.2, '4.2']);
  testParsing({
      '': 'number',
      'foo': 'string',
      'bar': 'string'
    }, '4.2',
    [4.2, {foo: 'FOO', bar: 'BAR'}],
    value => { return value.toUpperCase(); }
  );
});
", "node_modules/parsleyjs/test/unit/validator.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/parsleyjs/test/unit/validator.js");
    }
}
