<?php

/* node_modules/core-js/modules/es7.asap.js */
class __TwigTemplate_8d40834213b3655fdcde4493982732404499056cf50f52d9d7c41cdf86480fc7 extends Twig_Template
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
        $__internal_5bed22295c8c95eb9fd7e9dce37890dc2a2f621f0061804caf6e8a2944c18ed8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5bed22295c8c95eb9fd7e9dce37890dc2a2f621f0061804caf6e8a2944c18ed8->enter($__internal_5bed22295c8c95eb9fd7e9dce37890dc2a2f621f0061804caf6e8a2944c18ed8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/core-js/modules/es7.asap.js"));

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
        
        $__internal_5bed22295c8c95eb9fd7e9dce37890dc2a2f621f0061804caf6e8a2944c18ed8->leave($__internal_5bed22295c8c95eb9fd7e9dce37890dc2a2f621f0061804caf6e8a2944c18ed8_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/core-js/modules/es7.asap.js";
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
", "node_modules/core-js/modules/es7.asap.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/core-js/modules/es7.asap.js");
    }
}
