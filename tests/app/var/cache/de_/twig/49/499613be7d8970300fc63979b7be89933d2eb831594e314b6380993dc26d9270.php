<?php

/* node_modules/core-js/modules/es7.object.define-setter.js */
class __TwigTemplate_54cfe2435946e9e59ebdece0c7286608ee3b50370812a15c67d6d73e7eceab60 extends Twig_Template
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
        $__internal_064f6c05d14e318215ff6f310bf6d6d41b591a5501c00804ffe48d4a3bea5e33 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_064f6c05d14e318215ff6f310bf6d6d41b591a5501c00804ffe48d4a3bea5e33->enter($__internal_064f6c05d14e318215ff6f310bf6d6d41b591a5501c00804ffe48d4a3bea5e33_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/core-js/modules/es7.object.define-setter.js"));

        // line 1
        echo "'use strict';
var \$export = require('./_export');
var toObject = require('./_to-object');
var aFunction = require('./_a-function');
var \$defineProperty = require('./_object-dp');

// B.2.2.3 Object.prototype.__defineSetter__(P, setter)
require('./_descriptors') && \$export(\$export.P + require('./_object-forced-pam'), 'Object', {
  __defineSetter__: function __defineSetter__(P, setter) {
    \$defineProperty.f(toObject(this), P, { set: aFunction(setter), enumerable: true, configurable: true });
  }
});
";
        
        $__internal_064f6c05d14e318215ff6f310bf6d6d41b591a5501c00804ffe48d4a3bea5e33->leave($__internal_064f6c05d14e318215ff6f310bf6d6d41b591a5501c00804ffe48d4a3bea5e33_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/core-js/modules/es7.object.define-setter.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("'use strict';
var \$export = require('./_export');
var toObject = require('./_to-object');
var aFunction = require('./_a-function');
var \$defineProperty = require('./_object-dp');

// B.2.2.3 Object.prototype.__defineSetter__(P, setter)
require('./_descriptors') && \$export(\$export.P + require('./_object-forced-pam'), 'Object', {
  __defineSetter__: function __defineSetter__(P, setter) {
    \$defineProperty.f(toObject(this), P, { set: aFunction(setter), enumerable: true, configurable: true });
  }
});
", "node_modules/core-js/modules/es7.object.define-setter.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/core-js/modules/es7.object.define-setter.js");
    }
}
