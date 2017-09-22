<?php

/* node_modules/fsevents/node_modules/asynckit/lib/abort.js */
class __TwigTemplate_e684e32eaa7b8af99dcf09b8ec195d90e98bcb4d4941358d826902a8db829ce0 extends Twig_Template
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
        $__internal_77207c1e183f106f05f4a67db0295daa9634903dacaffb380ac5ec96cc235d61 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_77207c1e183f106f05f4a67db0295daa9634903dacaffb380ac5ec96cc235d61->enter($__internal_77207c1e183f106f05f4a67db0295daa9634903dacaffb380ac5ec96cc235d61_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/fsevents/node_modules/asynckit/lib/abort.js"));

        // line 1
        echo "// API
module.exports = abort;

/**
 * Aborts leftover active jobs
 *
 * @param {object} state - current state object
 */
function abort(state)
{
  Object.keys(state.jobs).forEach(clean.bind(state));

  // reset leftover jobs
  state.jobs = {};
}

/**
 * Cleans up leftover job by invoking abort function for the provided job id
 *
 * @this  state
 * @param {string|number} key - job id to abort
 */
function clean(key)
{
  if (typeof this.jobs[key] == 'function')
  {
    this.jobs[key]();
  }
}
";
        
        $__internal_77207c1e183f106f05f4a67db0295daa9634903dacaffb380ac5ec96cc235d61->leave($__internal_77207c1e183f106f05f4a67db0295daa9634903dacaffb380ac5ec96cc235d61_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/fsevents/node_modules/asynckit/lib/abort.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("// API
module.exports = abort;

/**
 * Aborts leftover active jobs
 *
 * @param {object} state - current state object
 */
function abort(state)
{
  Object.keys(state.jobs).forEach(clean.bind(state));

  // reset leftover jobs
  state.jobs = {};
}

/**
 * Cleans up leftover job by invoking abort function for the provided job id
 *
 * @this  state
 * @param {string|number} key - job id to abort
 */
function clean(key)
{
  if (typeof this.jobs[key] == 'function')
  {
    this.jobs[key]();
  }
}
", "node_modules/fsevents/node_modules/asynckit/lib/abort.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/fsevents/node_modules/asynckit/lib/abort.js");
    }
}
