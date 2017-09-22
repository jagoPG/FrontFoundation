<?php

/* node_modules/node-pre-gyp/appveyor.yml */
class __TwigTemplate_e88bc08bac64039a0955048b68784d6f711348ccd595077fe3f342506acf11a7 extends Twig_Template
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
        $__internal_3c37d1c9c25131bf626d46024824c6c3bbcb9f100a55655ee190ccf4c096c40e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3c37d1c9c25131bf626d46024824c6c3bbcb9f100a55655ee190ccf4c096c40e->enter($__internal_3c37d1c9c25131bf626d46024824c6c3bbcb9f100a55655ee190ccf4c096c40e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/node-pre-gyp/appveyor.yml"));

        // line 1
        echo "os: Visual Studio 2015

environment:
  matrix:
    - nodejs_version: 0.10
    - nodejs_version: 4
    - nodejs_version: 6
    - nodejs_version: 8

platform:
  - x64
  - x86

shallow_clone: true

install:
  - ps: Install-Product node \$env:nodejs_version \$env:Platform
  - ps: Set-ExecutionPolicy Unrestricted -Scope CurrentUser -Force
  - npm config get
  # upgrade node-gyp to dodge 2013 compile issue present in the node gyp bundled with node v0.10
  # https://github.com/nodejs/node-gyp/issues/972#issuecomment-231055109
  - IF \"%nodejs_version:~0,1%\"==\"0\" npm install node-gyp@3.x
  # upgrade node-gyp to dodge https://github.com/mapbox/node-pre-gyp/issues/209#issuecomment-307641388
  # and allow make node 4.x x86 builds work
  # https://github.com/mapbox/node-pre-gyp/issues/209#issuecomment-217690537
  - IF \"%nodejs_version:~0,1%\"==\"4\" npm install node-gyp@3.x
  # downgrade npm to avoid multiple npm bugs:
  # for node v6 this dodges npm 3.10.10 bug whereby --nodedir/--dist-url is not passed to node-gyp (https://github.com/mapbox/node-pre-gyp/issues/300)
  # for all node x86 versions this dodges a mysterious ELIFECYCLE error: https://ci.appveyor.com/project/Mapbox/node-pre-gyp/build/1.0.582/job/b8q2nud6vkj0s6qo#L233
  # for node v8 this dodges https://github.com/mapbox/node-pre-gyp/issues/302
  - npm install npm@2.x -g
  - node --version
  - npm --version
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
        
        $__internal_3c37d1c9c25131bf626d46024824c6c3bbcb9f100a55655ee190ccf4c096c40e->leave($__internal_3c37d1c9c25131bf626d46024824c6c3bbcb9f100a55655ee190ccf4c096c40e_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/node-pre-gyp/appveyor.yml";
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
    - nodejs_version: 8

platform:
  - x64
  - x86

shallow_clone: true

install:
  - ps: Install-Product node \$env:nodejs_version \$env:Platform
  - ps: Set-ExecutionPolicy Unrestricted -Scope CurrentUser -Force
  - npm config get
  # upgrade node-gyp to dodge 2013 compile issue present in the node gyp bundled with node v0.10
  # https://github.com/nodejs/node-gyp/issues/972#issuecomment-231055109
  - IF \"%nodejs_version:~0,1%\"==\"0\" npm install node-gyp@3.x
  # upgrade node-gyp to dodge https://github.com/mapbox/node-pre-gyp/issues/209#issuecomment-307641388
  # and allow make node 4.x x86 builds work
  # https://github.com/mapbox/node-pre-gyp/issues/209#issuecomment-217690537
  - IF \"%nodejs_version:~0,1%\"==\"4\" npm install node-gyp@3.x
  # downgrade npm to avoid multiple npm bugs:
  # for node v6 this dodges npm 3.10.10 bug whereby --nodedir/--dist-url is not passed to node-gyp (https://github.com/mapbox/node-pre-gyp/issues/300)
  # for all node x86 versions this dodges a mysterious ELIFECYCLE error: https://ci.appveyor.com/project/Mapbox/node-pre-gyp/build/1.0.582/job/b8q2nud6vkj0s6qo#L233
  # for node v8 this dodges https://github.com/mapbox/node-pre-gyp/issues/302
  - npm install npm@2.x -g
  - node --version
  - npm --version
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
", "node_modules/node-pre-gyp/appveyor.yml", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/node-pre-gyp/appveyor.yml");
    }
}