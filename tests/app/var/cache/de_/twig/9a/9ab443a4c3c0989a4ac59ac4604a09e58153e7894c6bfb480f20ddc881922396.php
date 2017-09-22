<?php

/* node_modules/events/tests/index.js */
class __TwigTemplate_e2c5553027d1c78f90681448ffe7fea86328aee9202b455660e6d835f514dabf extends Twig_Template
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
        $__internal_e4f6bae1e6985364e67b8f8ef132faebe5bfa04139c8e8253f6737d65086246d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e4f6bae1e6985364e67b8f8ef132faebe5bfa04139c8e8253f6737d65086246d->enter($__internal_e4f6bae1e6985364e67b8f8ef132faebe5bfa04139c8e8253f6737d65086246d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/events/tests/index.js"));

        // line 1
        echo "
require('./legacy-compat');

// we do this to easily wrap each file in a mocha test
// and also have browserify be able to statically analyze this file
var orig_require = require;
var require = function(file) {
    test(file, function() {
        orig_require(file);
    });
}

require('./add-listeners.js');
require('./check-listener-leaks.js');
require('./listener-count.js');
require('./listeners-side-effects.js');
require('./listeners.js');
require('./max-listeners.js');
require('./modify-in-emit.js');
require('./num-args.js');
require('./once.js');
require('./set-max-listeners-side-effects.js');
require('./subclass.js');
require('./remove-all-listeners.js');
require('./remove-listeners.js');
";
        
        $__internal_e4f6bae1e6985364e67b8f8ef132faebe5bfa04139c8e8253f6737d65086246d->leave($__internal_e4f6bae1e6985364e67b8f8ef132faebe5bfa04139c8e8253f6737d65086246d_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/events/tests/index.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("
require('./legacy-compat');

// we do this to easily wrap each file in a mocha test
// and also have browserify be able to statically analyze this file
var orig_require = require;
var require = function(file) {
    test(file, function() {
        orig_require(file);
    });
}

require('./add-listeners.js');
require('./check-listener-leaks.js');
require('./listener-count.js');
require('./listeners-side-effects.js');
require('./listeners.js');
require('./max-listeners.js');
require('./modify-in-emit.js');
require('./num-args.js');
require('./once.js');
require('./set-max-listeners-side-effects.js');
require('./subclass.js');
require('./remove-all-listeners.js');
require('./remove-listeners.js');
", "node_modules/events/tests/index.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/events/tests/index.js");
    }
}
