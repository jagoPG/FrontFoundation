<?php

/* node_modules/resolve/appveyor.yml */
class __TwigTemplate_857474268e570e9079a0f2a4eb1841d38d7bac1b16acc5bf26ff87c7dc95e946 extends Twig_Template
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
        $__internal_a9f2b6a4b32d094f1ed68a4e63280d28ca7c946800cd20a3423aebf9d18663fd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a9f2b6a4b32d094f1ed68a4e63280d28ca7c946800cd20a3423aebf9d18663fd->enter($__internal_a9f2b6a4b32d094f1ed68a4e63280d28ca7c946800cd20a3423aebf9d18663fd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/resolve/appveyor.yml"));

        // line 1
        echo "version: 1.0.{build}
skip_branch_with_pr: true
build: off

environment:
  matrix:
    - nodejs_version: \"7\"
    - nodejs_version: \"6\"
    - nodejs_version: \"5\"
    - nodejs_version: \"4\"
    - nodejs_version: \"3\"
    - nodejs_version: \"2\"
    - nodejs_version: \"1\"
    - nodejs_version: \"0.12\"
    - nodejs_version: \"0.10\"
    - nodejs_version: \"0.8\"
    - nodejs_version: \"0.6\"
matrix:
  # fast_finish: true
  allow_failures:
    - nodejs_version: \"0.6\"

platform:
  - x86
  - x64

# Install scripts. (runs after repo cloning)
install:
 # Get the latest stable version of Node.js or io.js
 - ps: Install-Product node \$env:nodejs_version \$env:platform
 - IF %nodejs_version% EQU 0.6 npm -g install npm@1.3
 - IF %nodejs_version% EQU 0.8 npm -g install npm@2
 - set PATH=%APPDATA%\\npm;%PATH%
 #- IF %nodejs_version% NEQ 0.6 AND %nodejs_version% NEQ 0.8 npm -g install npm
 # install modules
 - npm install

# Post-install test scripts.
test_script:
 # Output useful info for debugging.
 - node --version
 - npm --version
 # run tests
 - npm run tests-only
";
        
        $__internal_a9f2b6a4b32d094f1ed68a4e63280d28ca7c946800cd20a3423aebf9d18663fd->leave($__internal_a9f2b6a4b32d094f1ed68a4e63280d28ca7c946800cd20a3423aebf9d18663fd_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/resolve/appveyor.yml";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("version: 1.0.{build}
skip_branch_with_pr: true
build: off

environment:
  matrix:
    - nodejs_version: \"7\"
    - nodejs_version: \"6\"
    - nodejs_version: \"5\"
    - nodejs_version: \"4\"
    - nodejs_version: \"3\"
    - nodejs_version: \"2\"
    - nodejs_version: \"1\"
    - nodejs_version: \"0.12\"
    - nodejs_version: \"0.10\"
    - nodejs_version: \"0.8\"
    - nodejs_version: \"0.6\"
matrix:
  # fast_finish: true
  allow_failures:
    - nodejs_version: \"0.6\"

platform:
  - x86
  - x64

# Install scripts. (runs after repo cloning)
install:
 # Get the latest stable version of Node.js or io.js
 - ps: Install-Product node \$env:nodejs_version \$env:platform
 - IF %nodejs_version% EQU 0.6 npm -g install npm@1.3
 - IF %nodejs_version% EQU 0.8 npm -g install npm@2
 - set PATH=%APPDATA%\\npm;%PATH%
 #- IF %nodejs_version% NEQ 0.6 AND %nodejs_version% NEQ 0.8 npm -g install npm
 # install modules
 - npm install

# Post-install test scripts.
test_script:
 # Output useful info for debugging.
 - node --version
 - npm --version
 # run tests
 - npm run tests-only
", "node_modules/resolve/appveyor.yml", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/resolve/appveyor.yml");
    }
}
