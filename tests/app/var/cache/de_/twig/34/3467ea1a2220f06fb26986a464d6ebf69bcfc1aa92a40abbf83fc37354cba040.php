<?php

/* node_modules/core-js/modules/es6.reflect.get-prototype-of.js */
class __TwigTemplate_7fa9178deefd194a1700f9050981f8f54f4068da0c26e009a2ced06c75acc4c8 extends Twig_Template
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
        $__internal_41aa2147465dc51fa93ee151036561f71d939acf71a1e8a379df75b3b7a80c7d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_41aa2147465dc51fa93ee151036561f71d939acf71a1e8a379df75b3b7a80c7d->enter($__internal_41aa2147465dc51fa93ee151036561f71d939acf71a1e8a379df75b3b7a80c7d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/core-js/modules/es6.reflect.get-prototype-of.js"));

        // line 1
        echo "// 26.1.8 Reflect.getPrototypeOf(target)
var \$export = require('./_export');
var getProto = require('./_object-gpo');
var anObject = require('./_an-object');

\$export(\$export.S, 'Reflect', {
  getPrototypeOf: function getPrototypeOf(target) {
    return getProto(anObject(target));
  }
});
";
        
        $__internal_41aa2147465dc51fa93ee151036561f71d939acf71a1e8a379df75b3b7a80c7d->leave($__internal_41aa2147465dc51fa93ee151036561f71d939acf71a1e8a379df75b3b7a80c7d_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/core-js/modules/es6.reflect.get-prototype-of.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("// 26.1.8 Reflect.getPrototypeOf(target)
var \$export = require('./_export');
var getProto = require('./_object-gpo');
var anObject = require('./_an-object');

\$export(\$export.S, 'Reflect', {
  getPrototypeOf: function getPrototypeOf(target) {
    return getProto(anObject(target));
  }
});
", "node_modules/core-js/modules/es6.reflect.get-prototype-of.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/core-js/modules/es6.reflect.get-prototype-of.js");
    }
}
