<?php

/* node_modules/fsevents/node_modules/node-pre-gyp/lib/reinstall.js */
class __TwigTemplate_c6b950bed7f2e99b2193a97bb7242676030bbd604ffcef0e2d38b663782c89ac extends Twig_Template
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
        $__internal_ff53c846a8eac4d0a3f8d22da7ac187b42af9a3a8a96d2e4b9a05ae7bbccb5da = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ff53c846a8eac4d0a3f8d22da7ac187b42af9a3a8a96d2e4b9a05ae7bbccb5da->enter($__internal_ff53c846a8eac4d0a3f8d22da7ac187b42af9a3a8a96d2e4b9a05ae7bbccb5da_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/fsevents/node_modules/node-pre-gyp/lib/reinstall.js"));

        // line 1
        echo "\"use strict\";

module.exports = exports = rebuild;

exports.usage = 'Runs \"clean\" and \"install\" at once';

function rebuild (gyp, argv, callback) {
  gyp.todo.unshift(
      { name: 'clean', args: [] },
      { name: 'install', args: [] }
  );
  process.nextTick(callback);
}
";
        
        $__internal_ff53c846a8eac4d0a3f8d22da7ac187b42af9a3a8a96d2e4b9a05ae7bbccb5da->leave($__internal_ff53c846a8eac4d0a3f8d22da7ac187b42af9a3a8a96d2e4b9a05ae7bbccb5da_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/fsevents/node_modules/node-pre-gyp/lib/reinstall.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("\"use strict\";

module.exports = exports = rebuild;

exports.usage = 'Runs \"clean\" and \"install\" at once';

function rebuild (gyp, argv, callback) {
  gyp.todo.unshift(
      { name: 'clean', args: [] },
      { name: 'install', args: [] }
  );
  process.nextTick(callback);
}
", "node_modules/fsevents/node_modules/node-pre-gyp/lib/reinstall.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/fsevents/node_modules/node-pre-gyp/lib/reinstall.js");
    }
}
