<?php

/* node_modules/parsleyjs/test/unit/extra/bind.js */
class __TwigTemplate_8841800474c7700555d55022c1240443906cc82cc41ee73c54492430398324e7 extends Twig_Template
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
        $__internal_b76804a5e544bcc6aaeff093b2de94188094b457e373c5015f09a11d7c31f911 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b76804a5e544bcc6aaeff093b2de94188094b457e373c5015f09a11d7c31f911->enter($__internal_b76804a5e544bcc6aaeff093b2de94188094b457e373c5015f09a11d7c31f911_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/parsleyjs/test/unit/extra/bind.js"));

        // line 1
        echo "import \$ from 'jquery';

import Parsley from '../../../src/parsley';

describe('extra/plugin/bind', () => {
  // Hack to load and undo the loading of the plugin:
  before(() => {
    require('../../../src/extra/plugin/bind');
  });
  after(() => {
    window.ParsleyExtend = {}; // Undo the plugin...
  });

  it('should have a bind.js plugin allowing to give pure json validation config to parsley constructor', () => {
    \$('body').append(
      '<form id=\"element\" >' +
        '<input type=\"text\" name=\"name\" />' +
        '<input type=\"text\" name=\"email\" id=\"email\" />' +
        '<input type=\"checkbox\" name=\"sexe\" id=\"sexe\" value=\"male\" />' +
        '<input type=\"checkbox\" name=\"sexe\" value=\"female\" />' +
      '</form>');

    var parsleyInstance;
    expectWarning(() => {
      parsleyInstance = \$('#element').parsley({
        fields: {
          '[name=\"name\"]': {
            required: true,
            length: [4, 20]
          },
          '#email': {
            type: 'email'
          },
          '#sexe': {
            required: true
          }
        }
      });
    });
    expect(\$('[name=\"name\"]').parsley().constraints.length).to.be(2);
    expect(\$('#email').parsley().constraints.length).to.be(1);
    expect(\$('#sexe').parsley().constraints.length).to.be(1);
    expect(\$('#sexe').parsley().constraints[0].name).to.be('required');
  });

  afterEach(() => {
    \$('#element, .fixture, .parsley-errors-list').remove();
  });
});
";
        
        $__internal_b76804a5e544bcc6aaeff093b2de94188094b457e373c5015f09a11d7c31f911->leave($__internal_b76804a5e544bcc6aaeff093b2de94188094b457e373c5015f09a11d7c31f911_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/parsleyjs/test/unit/extra/bind.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("import \$ from 'jquery';

import Parsley from '../../../src/parsley';

describe('extra/plugin/bind', () => {
  // Hack to load and undo the loading of the plugin:
  before(() => {
    require('../../../src/extra/plugin/bind');
  });
  after(() => {
    window.ParsleyExtend = {}; // Undo the plugin...
  });

  it('should have a bind.js plugin allowing to give pure json validation config to parsley constructor', () => {
    \$('body').append(
      '<form id=\"element\" >' +
        '<input type=\"text\" name=\"name\" />' +
        '<input type=\"text\" name=\"email\" id=\"email\" />' +
        '<input type=\"checkbox\" name=\"sexe\" id=\"sexe\" value=\"male\" />' +
        '<input type=\"checkbox\" name=\"sexe\" value=\"female\" />' +
      '</form>');

    var parsleyInstance;
    expectWarning(() => {
      parsleyInstance = \$('#element').parsley({
        fields: {
          '[name=\"name\"]': {
            required: true,
            length: [4, 20]
          },
          '#email': {
            type: 'email'
          },
          '#sexe': {
            required: true
          }
        }
      });
    });
    expect(\$('[name=\"name\"]').parsley().constraints.length).to.be(2);
    expect(\$('#email').parsley().constraints.length).to.be(1);
    expect(\$('#sexe').parsley().constraints.length).to.be(1);
    expect(\$('#sexe').parsley().constraints[0].name).to.be('required');
  });

  afterEach(() => {
    \$('#element, .fixture, .parsley-errors-list').remove();
  });
});
", "node_modules/parsleyjs/test/unit/extra/bind.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/parsleyjs/test/unit/extra/bind.js");
    }
}
