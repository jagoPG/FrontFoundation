<?php

/* node_modules/get-caller-file/index.js */
class __TwigTemplate_c5781bf656d1cc805cc52d783fcbf276c47e223bb92a90872a249f4f118762df extends Twig_Template
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
        $__internal_9c2647b79ac076a6f9f2bbd0b28438cdb11f24f8a993d67fd5efd2e2ab4f59ab = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9c2647b79ac076a6f9f2bbd0b28438cdb11f24f8a993d67fd5efd2e2ab4f59ab->enter($__internal_9c2647b79ac076a6f9f2bbd0b28438cdb11f24f8a993d67fd5efd2e2ab4f59ab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/get-caller-file/index.js"));

        // line 1
        echo "'use strict';

// Call this function in a another function to find out the file from
// which that function was called from. (Inspects the v8 stack trace)
//
// Inspired by http://stackoverflow.com/questions/13227489

module.exports = function getCallerFile(_position) {
  var oldPrepareStackTrace = Error.prepareStackTrace;
  Error.prepareStackTrace = function(err, stack) { return stack; };
  var stack = new Error().stack;
  Error.prepareStackTrace = oldPrepareStackTrace;

  var position = _position ? _position : 2;

  // stack[0] holds this file
  // stack[1] holds where this function was called
  // stack[2] holds the file we're interested in
  return stack[position] ? stack[position].getFileName() : undefined;
};
";
        
        $__internal_9c2647b79ac076a6f9f2bbd0b28438cdb11f24f8a993d67fd5efd2e2ab4f59ab->leave($__internal_9c2647b79ac076a6f9f2bbd0b28438cdb11f24f8a993d67fd5efd2e2ab4f59ab_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/get-caller-file/index.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("'use strict';

// Call this function in a another function to find out the file from
// which that function was called from. (Inspects the v8 stack trace)
//
// Inspired by http://stackoverflow.com/questions/13227489

module.exports = function getCallerFile(_position) {
  var oldPrepareStackTrace = Error.prepareStackTrace;
  Error.prepareStackTrace = function(err, stack) { return stack; };
  var stack = new Error().stack;
  Error.prepareStackTrace = oldPrepareStackTrace;

  var position = _position ? _position : 2;

  // stack[0] holds this file
  // stack[1] holds where this function was called
  // stack[2] holds the file we're interested in
  return stack[position] ? stack[position].getFileName() : undefined;
};
", "node_modules/get-caller-file/index.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/get-caller-file/index.js");
    }
}
