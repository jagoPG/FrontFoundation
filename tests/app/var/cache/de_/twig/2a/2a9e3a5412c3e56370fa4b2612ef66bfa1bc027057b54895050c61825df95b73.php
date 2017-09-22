<?php

/* node_modules/core-js/library/modules/core.object.make.js */
class __TwigTemplate_67cb8140785788dc85a0607a1be81186bca8a1e231c55229207594da49e3d22b extends Twig_Template
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
        $__internal_09c08ec600968c50ee9b4a38842471bdb95fa72738251add078cee1f0880065f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_09c08ec600968c50ee9b4a38842471bdb95fa72738251add078cee1f0880065f->enter($__internal_09c08ec600968c50ee9b4a38842471bdb95fa72738251add078cee1f0880065f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/core-js/library/modules/core.object.make.js"));

        // line 1
        echo "var \$export = require('./_export');
var define = require('./_object-define');
var create = require('./_object-create');

\$export(\$export.S + \$export.F, 'Object', {
  make: function (proto, mixin) {
    return define(create(proto), mixin);
  }
});
";
        
        $__internal_09c08ec600968c50ee9b4a38842471bdb95fa72738251add078cee1f0880065f->leave($__internal_09c08ec600968c50ee9b4a38842471bdb95fa72738251add078cee1f0880065f_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/core-js/library/modules/core.object.make.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("var \$export = require('./_export');
var define = require('./_object-define');
var create = require('./_object-create');

\$export(\$export.S + \$export.F, 'Object', {
  make: function (proto, mixin) {
    return define(create(proto), mixin);
  }
});
", "node_modules/core-js/library/modules/core.object.make.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/core-js/library/modules/core.object.make.js");
    }
}
