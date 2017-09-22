<?php

/* node_modules/fsevents/node_modules/os-homedir/index.js */
class __TwigTemplate_ccab0d50333d88d0f978e9321b00e4808109043ff35f9a918b27c3db9f0472fd extends Twig_Template
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
        $__internal_80779d87ec2d548d451c3122d70f3b015380b6e61ba846b00b299bea90f8215d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_80779d87ec2d548d451c3122d70f3b015380b6e61ba846b00b299bea90f8215d->enter($__internal_80779d87ec2d548d451c3122d70f3b015380b6e61ba846b00b299bea90f8215d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/fsevents/node_modules/os-homedir/index.js"));

        // line 1
        echo "'use strict';
var os = require('os');

function homedir() {
\tvar env = process.env;
\tvar home = env.HOME;
\tvar user = env.LOGNAME || env.USER || env.LNAME || env.USERNAME;

\tif (process.platform === 'win32') {
\t\treturn env.USERPROFILE || env.HOMEDRIVE + env.HOMEPATH || home || null;
\t}

\tif (process.platform === 'darwin') {
\t\treturn home || (user ? '/Users/' + user : null);
\t}

\tif (process.platform === 'linux') {
\t\treturn home || (process.getuid() === 0 ? '/root' : (user ? '/home/' + user : null));
\t}

\treturn home || null;
}

module.exports = typeof os.homedir === 'function' ? os.homedir : homedir;
";
        
        $__internal_80779d87ec2d548d451c3122d70f3b015380b6e61ba846b00b299bea90f8215d->leave($__internal_80779d87ec2d548d451c3122d70f3b015380b6e61ba846b00b299bea90f8215d_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/fsevents/node_modules/os-homedir/index.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("'use strict';
var os = require('os');

function homedir() {
\tvar env = process.env;
\tvar home = env.HOME;
\tvar user = env.LOGNAME || env.USER || env.LNAME || env.USERNAME;

\tif (process.platform === 'win32') {
\t\treturn env.USERPROFILE || env.HOMEDRIVE + env.HOMEPATH || home || null;
\t}

\tif (process.platform === 'darwin') {
\t\treturn home || (user ? '/Users/' + user : null);
\t}

\tif (process.platform === 'linux') {
\t\treturn home || (process.getuid() === 0 ? '/root' : (user ? '/home/' + user : null));
\t}

\treturn home || null;
}

module.exports = typeof os.homedir === 'function' ? os.homedir : homedir;
", "node_modules/fsevents/node_modules/os-homedir/index.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/fsevents/node_modules/os-homedir/index.js");
    }
}
