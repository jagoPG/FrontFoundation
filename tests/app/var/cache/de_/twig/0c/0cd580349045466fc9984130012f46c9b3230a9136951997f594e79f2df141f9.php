<?php

/* node_modules/os-homedir/index.js */
class __TwigTemplate_c367609243714332b6fe60db23033ae5a5af8769686e44802025721b53269071 extends Twig_Template
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
        $__internal_754b0504231a8335a1c6acf915a480169a5316fa93f07a96015504e8e1eef747 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_754b0504231a8335a1c6acf915a480169a5316fa93f07a96015504e8e1eef747->enter($__internal_754b0504231a8335a1c6acf915a480169a5316fa93f07a96015504e8e1eef747_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/os-homedir/index.js"));

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
        
        $__internal_754b0504231a8335a1c6acf915a480169a5316fa93f07a96015504e8e1eef747->leave($__internal_754b0504231a8335a1c6acf915a480169a5316fa93f07a96015504e8e1eef747_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/os-homedir/index.js";
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
", "node_modules/os-homedir/index.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/os-homedir/index.js");
    }
}
