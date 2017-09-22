<?php

/* node_modules/core-js/library/modules/_new-promise-capability.js */
class __TwigTemplate_197a1e324ba7a490279dfd61a6bc7ea63e366cab56b93841277cd35f68189e8e extends Twig_Template
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
        $__internal_b2961e684ad4b659758d15f0c84b8572e578601748ca86d73a736363b10f7ca3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b2961e684ad4b659758d15f0c84b8572e578601748ca86d73a736363b10f7ca3->enter($__internal_b2961e684ad4b659758d15f0c84b8572e578601748ca86d73a736363b10f7ca3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/core-js/library/modules/_new-promise-capability.js"));

        // line 1
        echo "'use strict';
// 25.4.1.5 NewPromiseCapability(C)
var aFunction = require('./_a-function');

function PromiseCapability(C) {
  var resolve, reject;
  this.promise = new C(function (\$\$resolve, \$\$reject) {
    if (resolve !== undefined || reject !== undefined) throw TypeError('Bad Promise constructor');
    resolve = \$\$resolve;
    reject = \$\$reject;
  });
  this.resolve = aFunction(resolve);
  this.reject = aFunction(reject);
}

module.exports.f = function (C) {
  return new PromiseCapability(C);
};
";
        
        $__internal_b2961e684ad4b659758d15f0c84b8572e578601748ca86d73a736363b10f7ca3->leave($__internal_b2961e684ad4b659758d15f0c84b8572e578601748ca86d73a736363b10f7ca3_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/core-js/library/modules/_new-promise-capability.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("'use strict';
// 25.4.1.5 NewPromiseCapability(C)
var aFunction = require('./_a-function');

function PromiseCapability(C) {
  var resolve, reject;
  this.promise = new C(function (\$\$resolve, \$\$reject) {
    if (resolve !== undefined || reject !== undefined) throw TypeError('Bad Promise constructor');
    resolve = \$\$resolve;
    reject = \$\$reject;
  });
  this.resolve = aFunction(resolve);
  this.reject = aFunction(reject);
}

module.exports.f = function (C) {
  return new PromiseCapability(C);
};
", "node_modules/core-js/library/modules/_new-promise-capability.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/core-js/library/modules/_new-promise-capability.js");
    }
}
