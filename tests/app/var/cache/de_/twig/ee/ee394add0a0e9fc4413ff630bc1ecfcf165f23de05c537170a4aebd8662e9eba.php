<?php

/* node_modules/parsleyjs/test/setup/setup.js */
class __TwigTemplate_84585abb8eb9d74d8732e1a63d05431b47b35113ba29e5a98ddf425127e695ab extends Twig_Template
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
        $__internal_5452d3af0b731248b4e145c312c0223659f8eacd0b08b35cb04b58db8ad45127 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5452d3af0b731248b4e145c312c0223659f8eacd0b08b35cb04b58db8ad45127->enter($__internal_5452d3af0b731248b4e145c312c0223659f8eacd0b08b35cb04b58db8ad45127_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/parsleyjs/test/setup/setup.js"));

        // line 1
        echo "module.exports = function() {
  beforeEach(function() {
    this.sandbox = global.sinon.sandbox.create();
    global.stub = this.sandbox.stub.bind(this.sandbox);
    global.spy = this.sandbox.spy.bind(this.sandbox);
  });

  afterEach(function() {
    delete global.stub;
    delete global.spy;
    this.sandbox.restore();
  });

  require('./expect_warning')();
  require('./dom_leak_check');
};
";
        
        $__internal_5452d3af0b731248b4e145c312c0223659f8eacd0b08b35cb04b58db8ad45127->leave($__internal_5452d3af0b731248b4e145c312c0223659f8eacd0b08b35cb04b58db8ad45127_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/parsleyjs/test/setup/setup.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("module.exports = function() {
  beforeEach(function() {
    this.sandbox = global.sinon.sandbox.create();
    global.stub = this.sandbox.stub.bind(this.sandbox);
    global.spy = this.sandbox.spy.bind(this.sandbox);
  });

  afterEach(function() {
    delete global.stub;
    delete global.spy;
    this.sandbox.restore();
  });

  require('./expect_warning')();
  require('./dom_leak_check');
};
", "node_modules/parsleyjs/test/setup/setup.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/parsleyjs/test/setup/setup.js");
    }
}
