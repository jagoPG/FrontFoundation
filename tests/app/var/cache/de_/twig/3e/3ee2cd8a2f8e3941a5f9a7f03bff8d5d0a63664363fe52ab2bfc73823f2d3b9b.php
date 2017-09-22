<?php

/* node_modules/fsevents/node_modules/node-pre-gyp/appveyor.yml */
class __TwigTemplate_2b0f265140aca680dfd26ff05f793b4f670c3c2e006840f752575f5a73c2536a extends Twig_Template
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
        $__internal_1c6821c0487e0ab442767313e433a8f72a4a4100486ca3353c11c4a7b0c0ac9c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1c6821c0487e0ab442767313e433a8f72a4a4100486ca3353c11c4a7b0c0ac9c->enter($__internal_1c6821c0487e0ab442767313e433a8f72a4a4100486ca3353c11c4a7b0c0ac9c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/fsevents/node_modules/node-pre-gyp/appveyor.yml"));

        // line 1
        echo "os: Visual Studio 2015

environment:
  matrix:
    - nodejs_version: 0.10
    - nodejs_version: 4
    - nodejs_version: 6

platform:
  - x64
  - x86

shallow_clone: true

install:
  - ps: Install-Product node \$env:nodejs_version \$env:Platform
  - ps: Set-ExecutionPolicy Unrestricted -Scope CurrentUser -Force
  # https://github.com/nodejs/node-gyp/issues/972#issuecomment-231055109
  - npm install --production node-gyp
  - node --version
  - npm --version
  #- SET PATH=%APPDATA%\\npm;%PATH%
  #- npm install -g node-gyp
  - npm install -g node-gyp@3.2.1
  - node -e \"console.log(process.arch);\"
  - IF /I \"%PLATFORM%\" == \"x64\" set PATH=C:\\Python27-x64;%PATH%
  - IF /I \"%PLATFORM%\" == \"x86\" SET PATH=C:\\python27;%PATH%
  - IF /I \"%PLATFORM%\" == \"x64\" CALL \"C:\\Program Files (x86)\\Microsoft Visual Studio 14.0\\VC\\vcvarsall.bat\" amd64
  - IF /I \"%PLATFORM%\" == \"x86\" CALL \"C:\\Program Files (x86)\\Microsoft Visual Studio 14.0\\VC\\vcvarsall.bat\" x86
  - npm install
  - npm test

build: off
test: off
deploy: off
";
        
        $__internal_1c6821c0487e0ab442767313e433a8f72a4a4100486ca3353c11c4a7b0c0ac9c->leave($__internal_1c6821c0487e0ab442767313e433a8f72a4a4100486ca3353c11c4a7b0c0ac9c_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/fsevents/node_modules/node-pre-gyp/appveyor.yml";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("os: Visual Studio 2015

environment:
  matrix:
    - nodejs_version: 0.10
    - nodejs_version: 4
    - nodejs_version: 6

platform:
  - x64
  - x86

shallow_clone: true

install:
  - ps: Install-Product node \$env:nodejs_version \$env:Platform
  - ps: Set-ExecutionPolicy Unrestricted -Scope CurrentUser -Force
  # https://github.com/nodejs/node-gyp/issues/972#issuecomment-231055109
  - npm install --production node-gyp
  - node --version
  - npm --version
  #- SET PATH=%APPDATA%\\npm;%PATH%
  #- npm install -g node-gyp
  - npm install -g node-gyp@3.2.1
  - node -e \"console.log(process.arch);\"
  - IF /I \"%PLATFORM%\" == \"x64\" set PATH=C:\\Python27-x64;%PATH%
  - IF /I \"%PLATFORM%\" == \"x86\" SET PATH=C:\\python27;%PATH%
  - IF /I \"%PLATFORM%\" == \"x64\" CALL \"C:\\Program Files (x86)\\Microsoft Visual Studio 14.0\\VC\\vcvarsall.bat\" amd64
  - IF /I \"%PLATFORM%\" == \"x86\" CALL \"C:\\Program Files (x86)\\Microsoft Visual Studio 14.0\\VC\\vcvarsall.bat\" x86
  - npm install
  - npm test

build: off
test: off
deploy: off
", "node_modules/fsevents/node_modules/node-pre-gyp/appveyor.yml", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/fsevents/node_modules/node-pre-gyp/appveyor.yml");
    }
}
