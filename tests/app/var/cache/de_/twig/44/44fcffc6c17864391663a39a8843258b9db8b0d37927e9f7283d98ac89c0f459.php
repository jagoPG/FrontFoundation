<?php

/* node_modules/core-js/library/modules/_wks.js */
class __TwigTemplate_c4fed2b022589bf86bdf00830a222c29eb1301c75266964751381ca349ac4401 extends Twig_Template
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
        $__internal_0159d1f203a0dd68f1ff5a033d4981bd5e02f92e6ed7b340eb190113b2a6ee0e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0159d1f203a0dd68f1ff5a033d4981bd5e02f92e6ed7b340eb190113b2a6ee0e->enter($__internal_0159d1f203a0dd68f1ff5a033d4981bd5e02f92e6ed7b340eb190113b2a6ee0e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/core-js/library/modules/_wks.js"));

        // line 1
        echo "var store = require('./_shared')('wks');
var uid = require('./_uid');
var Symbol = require('./_global').Symbol;
var USE_SYMBOL = typeof Symbol == 'function';

var \$exports = module.exports = function (name) {
  return store[name] || (store[name] =
    USE_SYMBOL && Symbol[name] || (USE_SYMBOL ? Symbol : uid)('Symbol.' + name));
};

\$exports.store = store;
";
        
        $__internal_0159d1f203a0dd68f1ff5a033d4981bd5e02f92e6ed7b340eb190113b2a6ee0e->leave($__internal_0159d1f203a0dd68f1ff5a033d4981bd5e02f92e6ed7b340eb190113b2a6ee0e_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/core-js/library/modules/_wks.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("var store = require('./_shared')('wks');
var uid = require('./_uid');
var Symbol = require('./_global').Symbol;
var USE_SYMBOL = typeof Symbol == 'function';

var \$exports = module.exports = function (name) {
  return store[name] || (store[name] =
    USE_SYMBOL && Symbol[name] || (USE_SYMBOL ? Symbol : uid)('Symbol.' + name));
};

\$exports.store = store;
", "node_modules/core-js/library/modules/_wks.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/core-js/library/modules/_wks.js");
    }
}
