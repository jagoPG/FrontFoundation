<?php

/* node_modules/mkdirp/bin/usage.txt */
class __TwigTemplate_e079baf27797b15695a4698ed5b96572f087fb4c26455422a04c0c084e44985c extends Twig_Template
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
        $__internal_456538bf19975f4cba8f698ad3e58cc985e3137ae70881b4cd42d827fdd077b5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_456538bf19975f4cba8f698ad3e58cc985e3137ae70881b4cd42d827fdd077b5->enter($__internal_456538bf19975f4cba8f698ad3e58cc985e3137ae70881b4cd42d827fdd077b5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/mkdirp/bin/usage.txt"));

        // line 1
        echo "usage: mkdirp [DIR1,DIR2..] {OPTIONS}

  Create each supplied directory including any necessary parent directories that
  don't yet exist.
  
  If the directory already exists, do nothing.

OPTIONS are:

  -m, --mode   If a directory needs to be created, set the mode as an octal
               permission string.

";
        
        $__internal_456538bf19975f4cba8f698ad3e58cc985e3137ae70881b4cd42d827fdd077b5->leave($__internal_456538bf19975f4cba8f698ad3e58cc985e3137ae70881b4cd42d827fdd077b5_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/mkdirp/bin/usage.txt";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("usage: mkdirp [DIR1,DIR2..] {OPTIONS}

  Create each supplied directory including any necessary parent directories that
  don't yet exist.
  
  If the directory already exists, do nothing.

OPTIONS are:

  -m, --mode   If a directory needs to be created, set the mode as an octal
               permission string.

", "node_modules/mkdirp/bin/usage.txt", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/mkdirp/bin/usage.txt");
    }
}
