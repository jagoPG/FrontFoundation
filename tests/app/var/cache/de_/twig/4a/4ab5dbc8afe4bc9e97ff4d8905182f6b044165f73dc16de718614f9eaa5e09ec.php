<?php

/* node_modules/core-js/modules/es6.reflect.define-property.js */
class __TwigTemplate_698e29cfa98b1f5466ade6aada530fd57da3e1cf5b3c0bdba52cdefa9e606379 extends Twig_Template
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
        $__internal_01f2e763b6b78efdf7cedc851353075e24654656f2c5ae528bc5ecd4179fb4c9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_01f2e763b6b78efdf7cedc851353075e24654656f2c5ae528bc5ecd4179fb4c9->enter($__internal_01f2e763b6b78efdf7cedc851353075e24654656f2c5ae528bc5ecd4179fb4c9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/core-js/modules/es6.reflect.define-property.js"));

        // line 1
        echo "// 26.1.3 Reflect.defineProperty(target, propertyKey, attributes)
var dP = require('./_object-dp');
var \$export = require('./_export');
var anObject = require('./_an-object');
var toPrimitive = require('./_to-primitive');

// MS Edge has broken Reflect.defineProperty - throwing instead of returning false
\$export(\$export.S + \$export.F * require('./_fails')(function () {
  // eslint-disable-next-line no-undef
  Reflect.defineProperty(dP.f({}, 1, { value: 1 }), 1, { value: 2 });
}), 'Reflect', {
  defineProperty: function defineProperty(target, propertyKey, attributes) {
    anObject(target);
    propertyKey = toPrimitive(propertyKey, true);
    anObject(attributes);
    try {
      dP.f(target, propertyKey, attributes);
      return true;
    } catch (e) {
      return false;
    }
  }
});
";
        
        $__internal_01f2e763b6b78efdf7cedc851353075e24654656f2c5ae528bc5ecd4179fb4c9->leave($__internal_01f2e763b6b78efdf7cedc851353075e24654656f2c5ae528bc5ecd4179fb4c9_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/core-js/modules/es6.reflect.define-property.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("// 26.1.3 Reflect.defineProperty(target, propertyKey, attributes)
var dP = require('./_object-dp');
var \$export = require('./_export');
var anObject = require('./_an-object');
var toPrimitive = require('./_to-primitive');

// MS Edge has broken Reflect.defineProperty - throwing instead of returning false
\$export(\$export.S + \$export.F * require('./_fails')(function () {
  // eslint-disable-next-line no-undef
  Reflect.defineProperty(dP.f({}, 1, { value: 1 }), 1, { value: 2 });
}), 'Reflect', {
  defineProperty: function defineProperty(target, propertyKey, attributes) {
    anObject(target);
    propertyKey = toPrimitive(propertyKey, true);
    anObject(attributes);
    try {
      dP.f(target, propertyKey, attributes);
      return true;
    } catch (e) {
      return false;
    }
  }
});
", "node_modules/core-js/modules/es6.reflect.define-property.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/core-js/modules/es6.reflect.define-property.js");
    }
}
