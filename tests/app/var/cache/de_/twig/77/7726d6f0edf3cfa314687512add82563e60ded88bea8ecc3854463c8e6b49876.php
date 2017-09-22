<?php

/* node_modules/core-js/modules/core.delay.js */
class __TwigTemplate_085a3c8faca9f21125f427b96459b89b2037dfd94aee01ba16488f017a6843ff extends Twig_Template
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
        $__internal_d64fa59c1055bd63e417649dc93014c1b77c63b69b9bc482d32a129a36bfc1de = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d64fa59c1055bd63e417649dc93014c1b77c63b69b9bc482d32a129a36bfc1de->enter($__internal_d64fa59c1055bd63e417649dc93014c1b77c63b69b9bc482d32a129a36bfc1de_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/core-js/modules/core.delay.js"));

        // line 1
        echo "var global = require('./_global');
var core = require('./_core');
var \$export = require('./_export');
var partial = require('./_partial');
// https://esdiscuss.org/topic/promise-returning-delay-function
\$export(\$export.G + \$export.F, {
  delay: function delay(time) {
    return new (core.Promise || global.Promise)(function (resolve) {
      setTimeout(partial.call(resolve, true), time);
    });
  }
});
";
        
        $__internal_d64fa59c1055bd63e417649dc93014c1b77c63b69b9bc482d32a129a36bfc1de->leave($__internal_d64fa59c1055bd63e417649dc93014c1b77c63b69b9bc482d32a129a36bfc1de_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/core-js/modules/core.delay.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("var global = require('./_global');
var core = require('./_core');
var \$export = require('./_export');
var partial = require('./_partial');
// https://esdiscuss.org/topic/promise-returning-delay-function
\$export(\$export.G + \$export.F, {
  delay: function delay(time) {
    return new (core.Promise || global.Promise)(function (resolve) {
      setTimeout(partial.call(resolve, true), time);
    });
  }
});
", "node_modules/core-js/modules/core.delay.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/core-js/modules/core.delay.js");
    }
}
