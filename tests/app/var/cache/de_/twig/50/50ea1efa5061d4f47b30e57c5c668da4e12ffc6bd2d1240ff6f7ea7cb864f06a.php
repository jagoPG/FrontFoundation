<?php

/* node_modules/inherits/inherits_browser.js */
class __TwigTemplate_147d85f256e4da0fd91e8d46c0cf9f914946ab21295da5599a18d163d148bf9a extends Twig_Template
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
        $__internal_147c04d4fe16e896689bc1b0116b3c02126d0e3d5e0868fcefff6faa66f9e4f4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_147c04d4fe16e896689bc1b0116b3c02126d0e3d5e0868fcefff6faa66f9e4f4->enter($__internal_147c04d4fe16e896689bc1b0116b3c02126d0e3d5e0868fcefff6faa66f9e4f4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/inherits/inherits_browser.js"));

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
        
        $__internal_147c04d4fe16e896689bc1b0116b3c02126d0e3d5e0868fcefff6faa66f9e4f4->leave($__internal_147c04d4fe16e896689bc1b0116b3c02126d0e3d5e0868fcefff6faa66f9e4f4_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/inherits/inherits_browser.js";
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
", "node_modules/inherits/inherits_browser.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/inherits/inherits_browser.js");
    }
}
