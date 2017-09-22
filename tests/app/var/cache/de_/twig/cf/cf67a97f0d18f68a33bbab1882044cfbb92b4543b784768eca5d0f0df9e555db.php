<?php

/* node_modules/fsevents/node_modules/node-pre-gyp/lib/rebuild.js */
class __TwigTemplate_9b6c8155cbdc5b78f88487ff4cf80cbf7f6ee14348b09ad6059702f75774e192 extends Twig_Template
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
        $__internal_e7ea80e62ef6d2663430259bc5ff0ed881a7ef68726d2319c7fb0cc7ac162be8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e7ea80e62ef6d2663430259bc5ff0ed881a7ef68726d2319c7fb0cc7ac162be8->enter($__internal_e7ea80e62ef6d2663430259bc5ff0ed881a7ef68726d2319c7fb0cc7ac162be8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/fsevents/node_modules/node-pre-gyp/lib/rebuild.js"));

        // line 1
        echo "\"use strict\";

module.exports = exports = rebuild;

exports.usage = 'Runs \"clean\" and \"build\" at once';

function rebuild (gyp, argv, callback) {
  gyp.todo.unshift(
      { name: 'clean', args: [] },
      { name: 'build', args: ['rebuild'] }
  );
  process.nextTick(callback);
}
";
        
        $__internal_e7ea80e62ef6d2663430259bc5ff0ed881a7ef68726d2319c7fb0cc7ac162be8->leave($__internal_e7ea80e62ef6d2663430259bc5ff0ed881a7ef68726d2319c7fb0cc7ac162be8_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/fsevents/node_modules/node-pre-gyp/lib/rebuild.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("\"use strict\";

module.exports = exports = rebuild;

exports.usage = 'Runs \"clean\" and \"build\" at once';

function rebuild (gyp, argv, callback) {
  gyp.todo.unshift(
      { name: 'clean', args: [] },
      { name: 'build', args: ['rebuild'] }
  );
  process.nextTick(callback);
}
", "node_modules/fsevents/node_modules/node-pre-gyp/lib/rebuild.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/fsevents/node_modules/node-pre-gyp/lib/rebuild.js");
    }
}
