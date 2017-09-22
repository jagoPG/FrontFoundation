<?php

/* node_modules/fsevents/node_modules/verror/examples/werror.js */
class __TwigTemplate_e68bee3b2b53b22ca526a2fd5d3c587f7460ca4419306e5a899485e1546e4760 extends Twig_Template
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
        $__internal_780aad6491547e6abeb69d567c82480a95c09c8fc6b3bab6da8e10f8ae50c79d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_780aad6491547e6abeb69d567c82480a95c09c8fc6b3bab6da8e10f8ae50c79d->enter($__internal_780aad6491547e6abeb69d567c82480a95c09c8fc6b3bab6da8e10f8ae50c79d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/fsevents/node_modules/verror/examples/werror.js"));

        // line 1
        echo "var mod_fs = require('fs');
var mod_verror = require('../lib/verror');

var filename = '/nonexistent';

mod_fs.stat(filename, function (err1) {
\tvar err2 = new mod_verror.WError(err1, 'failed to stat \"%s\"', filename);

\t/* The following would normally be higher up the stack. */
\tvar err3 = new mod_verror.WError(err2, 'failed to handle request');
\tconsole.log(err3.message);
\tconsole.log(err3.toString());
\tconsole.log(err3.stack);
});
";
        
        $__internal_780aad6491547e6abeb69d567c82480a95c09c8fc6b3bab6da8e10f8ae50c79d->leave($__internal_780aad6491547e6abeb69d567c82480a95c09c8fc6b3bab6da8e10f8ae50c79d_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/fsevents/node_modules/verror/examples/werror.js";
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
\tvar err2 = new mod_verror.WError(err1, 'failed to stat \"%s\"', filename);

\t/* The following would normally be higher up the stack. */
\tvar err3 = new mod_verror.WError(err2, 'failed to handle request');
\tconsole.log(err3.message);
\tconsole.log(err3.toString());
\tconsole.log(err3.stack);
});
", "node_modules/fsevents/node_modules/verror/examples/werror.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/fsevents/node_modules/verror/examples/werror.js");
    }
}
