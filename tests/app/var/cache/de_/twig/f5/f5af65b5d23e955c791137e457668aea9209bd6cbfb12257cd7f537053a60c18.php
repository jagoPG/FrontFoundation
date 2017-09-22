<?php

/* node_modules/core-js/modules/es6.reflect.is-extensible.js */
class __TwigTemplate_ae7925059501df0d2dbc28cfb9d876013df09c1e968f0ce3b36bc5b1fcabfb0b extends Twig_Template
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
        $__internal_360f835dc9671e9c56e95a0f513ca3db45461a43d7efd4bb6e8583aca9b176ad = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_360f835dc9671e9c56e95a0f513ca3db45461a43d7efd4bb6e8583aca9b176ad->enter($__internal_360f835dc9671e9c56e95a0f513ca3db45461a43d7efd4bb6e8583aca9b176ad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/core-js/modules/es6.reflect.is-extensible.js"));

        // line 1
        echo "// 26.1.10 Reflect.isExtensible(target)
var \$export = require('./_export');
var anObject = require('./_an-object');
var \$isExtensible = Object.isExtensible;

\$export(\$export.S, 'Reflect', {
  isExtensible: function isExtensible(target) {
    anObject(target);
    return \$isExtensible ? \$isExtensible(target) : true;
  }
});
";
        
        $__internal_360f835dc9671e9c56e95a0f513ca3db45461a43d7efd4bb6e8583aca9b176ad->leave($__internal_360f835dc9671e9c56e95a0f513ca3db45461a43d7efd4bb6e8583aca9b176ad_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/core-js/modules/es6.reflect.is-extensible.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("// 26.1.10 Reflect.isExtensible(target)
var \$export = require('./_export');
var anObject = require('./_an-object');
var \$isExtensible = Object.isExtensible;

\$export(\$export.S, 'Reflect', {
  isExtensible: function isExtensible(target) {
    anObject(target);
    return \$isExtensible ? \$isExtensible(target) : true;
  }
});
", "node_modules/core-js/modules/es6.reflect.is-extensible.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/core-js/modules/es6.reflect.is-extensible.js");
    }
}
