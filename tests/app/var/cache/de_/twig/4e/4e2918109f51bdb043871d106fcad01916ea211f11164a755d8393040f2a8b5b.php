<?php

/* node_modules/node-pre-gyp/lib/rebuild.js */
class __TwigTemplate_48f8dbd12b6e35e1d77f67497f6c5df5fcdbe0c1255c29007393073e36db3f5e extends Twig_Template
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
        $__internal_3d35323fa8f464d5ef35a4760036a95e56236cfba3bd2ae34c56923a2c326d59 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3d35323fa8f464d5ef35a4760036a95e56236cfba3bd2ae34c56923a2c326d59->enter($__internal_3d35323fa8f464d5ef35a4760036a95e56236cfba3bd2ae34c56923a2c326d59_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/node-pre-gyp/lib/rebuild.js"));

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
        
        $__internal_3d35323fa8f464d5ef35a4760036a95e56236cfba3bd2ae34c56923a2c326d59->leave($__internal_3d35323fa8f464d5ef35a4760036a95e56236cfba3bd2ae34c56923a2c326d59_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/node-pre-gyp/lib/rebuild.js";
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
", "node_modules/node-pre-gyp/lib/rebuild.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/node-pre-gyp/lib/rebuild.js");
    }
}
