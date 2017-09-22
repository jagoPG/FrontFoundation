<?php

/* node_modules/core-js/modules/_new-promise-capability.js */
class __TwigTemplate_1bdf3527a9f1bc5ea596a6138e6119d22006e4ebddd0f88beb079a3f0ae869c7 extends Twig_Template
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
        $__internal_6b38c350af3780d2fdce22cbb6c7882d32b5acb318ad5e1512f8e9118884cc91 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6b38c350af3780d2fdce22cbb6c7882d32b5acb318ad5e1512f8e9118884cc91->enter($__internal_6b38c350af3780d2fdce22cbb6c7882d32b5acb318ad5e1512f8e9118884cc91_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/core-js/modules/_new-promise-capability.js"));

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
        
        $__internal_6b38c350af3780d2fdce22cbb6c7882d32b5acb318ad5e1512f8e9118884cc91->leave($__internal_6b38c350af3780d2fdce22cbb6c7882d32b5acb318ad5e1512f8e9118884cc91_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/core-js/modules/_new-promise-capability.js";
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
", "node_modules/core-js/modules/_new-promise-capability.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/core-js/modules/_new-promise-capability.js");
    }
}
