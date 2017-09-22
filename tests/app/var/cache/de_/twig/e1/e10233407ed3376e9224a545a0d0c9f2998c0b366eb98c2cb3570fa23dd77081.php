<?php

/* node_modules/fsevents/node_modules/inherits/inherits_browser.js */
class __TwigTemplate_997290ff0620fab32e17ddb979db85b5b743543bec8cdb291bfff580f1bd307c extends Twig_Template
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
        $__internal_c736f6a9434cec584ce423030adf7499d55995ee7621c6cf8f0e6a45301423a4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c736f6a9434cec584ce423030adf7499d55995ee7621c6cf8f0e6a45301423a4->enter($__internal_c736f6a9434cec584ce423030adf7499d55995ee7621c6cf8f0e6a45301423a4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/fsevents/node_modules/inherits/inherits_browser.js"));

        // line 1
        echo "if (typeof Object.create === 'function') {
  // implementation from standard node.js 'util' module
  module.exports = function inherits(ctor, superCtor) {
    ctor.super_ = superCtor
    ctor.prototype = Object.create(superCtor.prototype, {
      constructor: {
        value: ctor,
        enumerable: false,
        writable: true,
        configurable: true
      }
    });
  };
} else {
  // old school shim for old browsers
  module.exports = function inherits(ctor, superCtor) {
    ctor.super_ = superCtor
    var TempCtor = function () {}
    TempCtor.prototype = superCtor.prototype
    ctor.prototype = new TempCtor()
    ctor.prototype.constructor = ctor
  }
}
";
        
        $__internal_c736f6a9434cec584ce423030adf7499d55995ee7621c6cf8f0e6a45301423a4->leave($__internal_c736f6a9434cec584ce423030adf7499d55995ee7621c6cf8f0e6a45301423a4_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/fsevents/node_modules/inherits/inherits_browser.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("if (typeof Object.create === 'function') {
  // implementation from standard node.js 'util' module
  module.exports = function inherits(ctor, superCtor) {
    ctor.super_ = superCtor
    ctor.prototype = Object.create(superCtor.prototype, {
      constructor: {
        value: ctor,
        enumerable: false,
        writable: true,
        configurable: true
      }
    });
  };
} else {
  // old school shim for old browsers
  module.exports = function inherits(ctor, superCtor) {
    ctor.super_ = superCtor
    var TempCtor = function () {}
    TempCtor.prototype = superCtor.prototype
    ctor.prototype = new TempCtor()
    ctor.prototype.constructor = ctor
  }
}
", "node_modules/fsevents/node_modules/inherits/inherits_browser.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/fsevents/node_modules/inherits/inherits_browser.js");
    }
}
