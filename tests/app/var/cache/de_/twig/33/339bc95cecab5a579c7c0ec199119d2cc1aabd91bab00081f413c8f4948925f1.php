<?php

/* node_modules/node-pre-gyp/lib/reinstall.js */
class __TwigTemplate_a55e1d99c0e86ef01cc387cdeafa098864fe705a3e66e8166d63307bf2cd06ad extends Twig_Template
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
        $__internal_7786f4a59134abf3448ed9c39c6e9dd2b4af5dcfc1e1395554d8a25bc2ebd492 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7786f4a59134abf3448ed9c39c6e9dd2b4af5dcfc1e1395554d8a25bc2ebd492->enter($__internal_7786f4a59134abf3448ed9c39c6e9dd2b4af5dcfc1e1395554d8a25bc2ebd492_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/node-pre-gyp/lib/reinstall.js"));

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
        
        $__internal_7786f4a59134abf3448ed9c39c6e9dd2b4af5dcfc1e1395554d8a25bc2ebd492->leave($__internal_7786f4a59134abf3448ed9c39c6e9dd2b4af5dcfc1e1395554d8a25bc2ebd492_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/node-pre-gyp/lib/reinstall.js";
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
", "node_modules/node-pre-gyp/lib/reinstall.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/node-pre-gyp/lib/reinstall.js");
    }
}
