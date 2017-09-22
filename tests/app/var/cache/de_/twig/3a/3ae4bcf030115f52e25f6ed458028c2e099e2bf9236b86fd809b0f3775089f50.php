<?php

/* node_modules/core-js/library/modules/es7.asap.js */
class __TwigTemplate_fa261833626003a6d932e8c3d106315b6d9bd677242f41d1b7b400c3f6053f20 extends Twig_Template
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
        $__internal_25348ff18f8c9fb137111440565e9a9f9cc6d083dfe87a888d684ec4f1287082 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_25348ff18f8c9fb137111440565e9a9f9cc6d083dfe87a888d684ec4f1287082->enter($__internal_25348ff18f8c9fb137111440565e9a9f9cc6d083dfe87a888d684ec4f1287082_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/core-js/library/modules/es7.asap.js"));

        // line 1
        echo "// https://github.com/rwaldron/tc39-notes/blob/master/es6/2014-09/sept-25.md#510-globalasap-for-enqueuing-a-microtask
var \$export = require('./_export');
var microtask = require('./_microtask')();
var process = require('./_global').process;
var isNode = require('./_cof')(process) == 'process';

\$export(\$export.G, {
  asap: function asap(fn) {
    var domain = isNode && process.domain;
    microtask(domain ? domain.bind(fn) : fn);
  }
});
";
        
        $__internal_25348ff18f8c9fb137111440565e9a9f9cc6d083dfe87a888d684ec4f1287082->leave($__internal_25348ff18f8c9fb137111440565e9a9f9cc6d083dfe87a888d684ec4f1287082_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/core-js/library/modules/es7.asap.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("// https://github.com/rwaldron/tc39-notes/blob/master/es6/2014-09/sept-25.md#510-globalasap-for-enqueuing-a-microtask
var \$export = require('./_export');
var microtask = require('./_microtask')();
var process = require('./_global').process;
var isNode = require('./_cof')(process) == 'process';

\$export(\$export.G, {
  asap: function asap(fn) {
    var domain = isNode && process.domain;
    microtask(domain ? domain.bind(fn) : fn);
  }
});
", "node_modules/core-js/library/modules/es7.asap.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/core-js/library/modules/es7.asap.js");
    }
}
