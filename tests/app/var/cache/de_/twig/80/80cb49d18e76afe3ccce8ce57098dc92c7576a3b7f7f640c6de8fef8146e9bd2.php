<?php

/* node_modules/asynckit/lib/abort.js */
class __TwigTemplate_fd55d8ab5f2a591d03b99eb714174b1f70e4eb64fdc51941f3f8db4ec0c89ad9 extends Twig_Template
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
        $__internal_f7bbbe358812b0b1183f53e7ba606abd58a8259ab37ab7ad26d18c854b79d486 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f7bbbe358812b0b1183f53e7ba606abd58a8259ab37ab7ad26d18c854b79d486->enter($__internal_f7bbbe358812b0b1183f53e7ba606abd58a8259ab37ab7ad26d18c854b79d486_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/asynckit/lib/abort.js"));

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
        
        $__internal_f7bbbe358812b0b1183f53e7ba606abd58a8259ab37ab7ad26d18c854b79d486->leave($__internal_f7bbbe358812b0b1183f53e7ba606abd58a8259ab37ab7ad26d18c854b79d486_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/asynckit/lib/abort.js";
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
", "node_modules/asynckit/lib/abort.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/asynckit/lib/abort.js");
    }
}
