<?php

/* node_modules/core-js/library/modules/_object-forced-pam.js */
class __TwigTemplate_1effa74a8b816f34f00ee15c344987e98d1784f1047b29af918c8b39c6971dbb extends Twig_Template
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
        $__internal_9c0d141e908e7a9c475be3210c95c89d103386250341baabcd901104b4bdc04d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9c0d141e908e7a9c475be3210c95c89d103386250341baabcd901104b4bdc04d->enter($__internal_9c0d141e908e7a9c475be3210c95c89d103386250341baabcd901104b4bdc04d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/core-js/library/modules/_object-forced-pam.js"));

        // line 1
        echo "'use strict';
// Forced replacement prototype accessors methods
module.exports = require('./_library') || !require('./_fails')(function () {
  var K = Math.random();
  // In FF throws only define methods
  // eslint-disable-next-line no-undef, no-useless-call
  __defineSetter__.call(null, K, function () { /* empty */ });
  delete require('./_global')[K];
});
";
        
        $__internal_9c0d141e908e7a9c475be3210c95c89d103386250341baabcd901104b4bdc04d->leave($__internal_9c0d141e908e7a9c475be3210c95c89d103386250341baabcd901104b4bdc04d_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/core-js/library/modules/_object-forced-pam.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("'use strict';
// Forced replacement prototype accessors methods
module.exports = require('./_library') || !require('./_fails')(function () {
  var K = Math.random();
  // In FF throws only define methods
  // eslint-disable-next-line no-undef, no-useless-call
  __defineSetter__.call(null, K, function () { /* empty */ });
  delete require('./_global')[K];
});
", "node_modules/core-js/library/modules/_object-forced-pam.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/core-js/library/modules/_object-forced-pam.js");
    }
}
