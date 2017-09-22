<?php

/* node_modules/asynckit/lib/defer.js */
class __TwigTemplate_974975c92463c28ecdb93d1709e6bb4953da56af5bf2ba62c20446087c2cf5ab extends Twig_Template
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
        $__internal_29eb54afccf91141502962d42d05c6fc255f5c9ed28ee65ec924554fa80b850d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_29eb54afccf91141502962d42d05c6fc255f5c9ed28ee65ec924554fa80b850d->enter($__internal_29eb54afccf91141502962d42d05c6fc255f5c9ed28ee65ec924554fa80b850d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/asynckit/lib/defer.js"));

        // line 1
        echo "module.exports = defer;

/**
 * Runs provided function on next iteration of the event loop
 *
 * @param {function} fn - function to run
 */
function defer(fn)
{
  var nextTick = typeof setImmediate == 'function'
    ? setImmediate
    : (
      typeof process == 'object' && typeof process.nextTick == 'function'
      ? process.nextTick
      : null
    );

  if (nextTick)
  {
    nextTick(fn);
  }
  else
  {
    setTimeout(fn, 0);
  }
}
";
        
        $__internal_29eb54afccf91141502962d42d05c6fc255f5c9ed28ee65ec924554fa80b850d->leave($__internal_29eb54afccf91141502962d42d05c6fc255f5c9ed28ee65ec924554fa80b850d_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/asynckit/lib/defer.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("module.exports = defer;

/**
 * Runs provided function on next iteration of the event loop
 *
 * @param {function} fn - function to run
 */
function defer(fn)
{
  var nextTick = typeof setImmediate == 'function'
    ? setImmediate
    : (
      typeof process == 'object' && typeof process.nextTick == 'function'
      ? process.nextTick
      : null
    );

  if (nextTick)
  {
    nextTick(fn);
  }
  else
  {
    setTimeout(fn, 0);
  }
}
", "node_modules/asynckit/lib/defer.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/asynckit/lib/defer.js");
    }
}
