<?php

/* node_modules/core-js/modules/core.object.make.js */
class __TwigTemplate_56592c0920585b98a3458d5d0f847f02691557b16b590fa4719d066417ccebec extends Twig_Template
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
        $__internal_420c47e5dd3dc10613b41cbacd2c5b9ed4594cc02a60527d7dcc1b473a4be00d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_420c47e5dd3dc10613b41cbacd2c5b9ed4594cc02a60527d7dcc1b473a4be00d->enter($__internal_420c47e5dd3dc10613b41cbacd2c5b9ed4594cc02a60527d7dcc1b473a4be00d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/core-js/modules/core.object.make.js"));

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
        
        $__internal_420c47e5dd3dc10613b41cbacd2c5b9ed4594cc02a60527d7dcc1b473a4be00d->leave($__internal_420c47e5dd3dc10613b41cbacd2c5b9ed4594cc02a60527d7dcc1b473a4be00d_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/core-js/modules/core.object.make.js";
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
", "node_modules/core-js/modules/core.object.make.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/core-js/modules/core.object.make.js");
    }
}
