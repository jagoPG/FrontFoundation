<?php

/* node_modules/fsevents/node_modules/verror/examples/verror.js */
class __TwigTemplate_d30e636be7b4745b06bc59e93261ece705b5e832274002d76cf504e682eedcc0 extends Twig_Template
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
        $__internal_243dbeb47721a64ad139e37ebf1520b2e43003f9f803a82ad88e6303035cf534 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_243dbeb47721a64ad139e37ebf1520b2e43003f9f803a82ad88e6303035cf534->enter($__internal_243dbeb47721a64ad139e37ebf1520b2e43003f9f803a82ad88e6303035cf534_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/fsevents/node_modules/verror/examples/verror.js"));

        // line 1
        echo "var mod_fs = require('fs');
var mod_verror = require('../lib/verror');

var filename = '/nonexistent';

mod_fs.stat(filename, function (err1) {
\tvar err2 = new mod_verror.VError(err1, 'failed to stat \"%s\"', filename);

\t/* The following would normally be higher up the stack. */
\tvar err3 = new mod_verror.VError(err2, 'failed to handle request');
\tconsole.log(err3.message);
\tconsole.log(err3.stack);
});
";
        
        $__internal_243dbeb47721a64ad139e37ebf1520b2e43003f9f803a82ad88e6303035cf534->leave($__internal_243dbeb47721a64ad139e37ebf1520b2e43003f9f803a82ad88e6303035cf534_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/fsevents/node_modules/verror/examples/verror.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("var mod_fs = require('fs');
var mod_verror = require('../lib/verror');

var filename = '/nonexistent';

mod_fs.stat(filename, function (err1) {
\tvar err2 = new mod_verror.VError(err1, 'failed to stat \"%s\"', filename);

\t/* The following would normally be higher up the stack. */
\tvar err3 = new mod_verror.VError(err2, 'failed to handle request');
\tconsole.log(err3.message);
\tconsole.log(err3.stack);
});
", "node_modules/fsevents/node_modules/verror/examples/verror.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/fsevents/node_modules/verror/examples/verror.js");
    }
}
