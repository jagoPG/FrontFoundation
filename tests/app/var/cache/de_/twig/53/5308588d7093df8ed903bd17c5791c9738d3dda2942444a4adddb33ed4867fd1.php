<?php

/* node_modules/parsleyjs/test/setup/expect_warning.js */
class __TwigTemplate_b57923ac33ea06523183cb57336c70a9e34f1de3dd2715816fd58d296280c5d6 extends Twig_Template
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
        $__internal_c3e9d43fa4d8bfad5403f4ebd893ae545e87565107189d60481d59e36755df70 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c3e9d43fa4d8bfad5403f4ebd893ae545e87565107189d60481d59e36755df70->enter($__internal_c3e9d43fa4d8bfad5403f4ebd893ae545e87565107189d60481d59e36755df70_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/parsleyjs/test/setup/expect_warning.js"));

        // line 1
        echo "module.exports = function() {
  beforeEach(function() {
    sinon.spy(window.console, 'warn');
    window.console.warn.expectedCallCount = 0;
  });
  afterEach(function() {
    expect(window.console.warn.callCount).to.be(window.console.warn.expectedCallCount);
    window.console.warn.restore();
  });

  global.expectWarning = function(fn) {
    var w = window.console.warn;
    expect(w.callCount).to.be(w.expectedCallCount);
    var result = fn.call();
    w.expectedCallCount++;
    expect(w.callCount).to.be(w.expectedCallCount);
    return result;
  };
};
";
        
        $__internal_c3e9d43fa4d8bfad5403f4ebd893ae545e87565107189d60481d59e36755df70->leave($__internal_c3e9d43fa4d8bfad5403f4ebd893ae545e87565107189d60481d59e36755df70_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/parsleyjs/test/setup/expect_warning.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("module.exports = function() {
  beforeEach(function() {
    sinon.spy(window.console, 'warn');
    window.console.warn.expectedCallCount = 0;
  });
  afterEach(function() {
    expect(window.console.warn.callCount).to.be(window.console.warn.expectedCallCount);
    window.console.warn.restore();
  });

  global.expectWarning = function(fn) {
    var w = window.console.warn;
    expect(w.callCount).to.be(w.expectedCallCount);
    var result = fn.call();
    w.expectedCallCount++;
    expect(w.callCount).to.be(w.expectedCallCount);
    return result;
  };
};
", "node_modules/parsleyjs/test/setup/expect_warning.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/parsleyjs/test/setup/expect_warning.js");
    }
}
