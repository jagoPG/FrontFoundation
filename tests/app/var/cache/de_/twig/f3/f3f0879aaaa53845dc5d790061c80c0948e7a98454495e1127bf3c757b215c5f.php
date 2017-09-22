<?php

/* node_modules/core-js/library/modules/es6.reflect.prevent-extensions.js */
class __TwigTemplate_fc13593d7036052826dce1f1165618ed5d993e623e860e4def4c26fb2b7001ab extends Twig_Template
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
        $__internal_e1d883e58b77ffdfd6a16bb499deb7eaa11554ffd8f3266a450aabf815cd9496 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e1d883e58b77ffdfd6a16bb499deb7eaa11554ffd8f3266a450aabf815cd9496->enter($__internal_e1d883e58b77ffdfd6a16bb499deb7eaa11554ffd8f3266a450aabf815cd9496_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/core-js/library/modules/es6.reflect.prevent-extensions.js"));

        // line 1
        echo "// 26.1.12 Reflect.preventExtensions(target)
var \$export = require('./_export');
var anObject = require('./_an-object');
var \$preventExtensions = Object.preventExtensions;

\$export(\$export.S, 'Reflect', {
  preventExtensions: function preventExtensions(target) {
    anObject(target);
    try {
      if (\$preventExtensions) \$preventExtensions(target);
      return true;
    } catch (e) {
      return false;
    }
  }
});
";
        
        $__internal_e1d883e58b77ffdfd6a16bb499deb7eaa11554ffd8f3266a450aabf815cd9496->leave($__internal_e1d883e58b77ffdfd6a16bb499deb7eaa11554ffd8f3266a450aabf815cd9496_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/core-js/library/modules/es6.reflect.prevent-extensions.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("// 26.1.12 Reflect.preventExtensions(target)
var \$export = require('./_export');
var anObject = require('./_an-object');
var \$preventExtensions = Object.preventExtensions;

\$export(\$export.S, 'Reflect', {
  preventExtensions: function preventExtensions(target) {
    anObject(target);
    try {
      if (\$preventExtensions) \$preventExtensions(target);
      return true;
    } catch (e) {
      return false;
    }
  }
});
", "node_modules/core-js/library/modules/es6.reflect.prevent-extensions.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/core-js/library/modules/es6.reflect.prevent-extensions.js");
    }
}
