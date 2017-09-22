<?php

/* node_modules/util/node_modules/inherits/inherits_browser.js */
class __TwigTemplate_fb3d1962fc0bfd9f82dd98f9cc987b6add9f6e8ef3b9e6699cba57b0a9bc7995 extends Twig_Template
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
        $__internal_8cff29cca71f8ff6f5508e1292fd7f97c7dc9a43481e09b1cb958f58366f732d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8cff29cca71f8ff6f5508e1292fd7f97c7dc9a43481e09b1cb958f58366f732d->enter($__internal_8cff29cca71f8ff6f5508e1292fd7f97c7dc9a43481e09b1cb958f58366f732d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/util/node_modules/inherits/inherits_browser.js"));

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
        
        $__internal_8cff29cca71f8ff6f5508e1292fd7f97c7dc9a43481e09b1cb958f58366f732d->leave($__internal_8cff29cca71f8ff6f5508e1292fd7f97c7dc9a43481e09b1cb958f58366f732d_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/util/node_modules/inherits/inherits_browser.js";
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
", "node_modules/util/node_modules/inherits/inherits_browser.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/util/node_modules/inherits/inherits_browser.js");
    }
}
