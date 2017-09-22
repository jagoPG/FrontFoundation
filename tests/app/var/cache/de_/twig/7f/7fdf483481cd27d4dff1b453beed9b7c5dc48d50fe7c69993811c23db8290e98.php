<?php

/* node_modules/fsevents/node_modules/osenv/README.md */
class __TwigTemplate_b5dd9f107a2cdd44cac913042ab00a5a59561fa4b8f13bc9edcfd9f52aff05a9 extends Twig_Template
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
        $__internal_99ebd5503b5d13b2d2f88fba13b47475c063a6e6fddf5e7de75b74090b9e169c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_99ebd5503b5d13b2d2f88fba13b47475c063a6e6fddf5e7de75b74090b9e169c->enter($__internal_99ebd5503b5d13b2d2f88fba13b47475c063a6e6fddf5e7de75b74090b9e169c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/fsevents/node_modules/osenv/README.md"));

        // line 1
        echo "# osenv

Look up environment settings specific to different operating systems.

## Usage

```javascript
var osenv = require('osenv')
var path = osenv.path()
var user = osenv.user()
// etc.

// Some things are not reliably in the env, and have a fallback command:
var h = osenv.hostname(function (er, hostname) {
  h = hostname
})
// This will still cause it to be memoized, so calling osenv.hostname()
// is now an immediate operation.

// You can always send a cb, which will get called in the nextTick
// if it's been memoized, or wait for the fallback data if it wasn't
// found in the environment.
osenv.hostname(function (er, hostname) {
  if (er) console.error('error looking up hostname')
  else console.log('this machine calls itself %s', hostname)
})
```

## osenv.hostname()

The machine name.  Calls `hostname` if not found.

## osenv.user()

The currently logged-in user.  Calls `whoami` if not found.

## osenv.prompt()

Either PS1 on unix, or PROMPT on Windows.

## osenv.tmpdir()

The place where temporary files should be created.

## osenv.home()

No place like it.

## osenv.path()

An array of the places that the operating system will search for
executables.

## osenv.editor() 

Return the executable name of the editor program.  This uses the EDITOR
and VISUAL environment variables, and falls back to `vi` on Unix, or
`notepad.exe` on Windows.

## osenv.shell()

The SHELL on Unix, which Windows calls the ComSpec.  Defaults to 'bash'
or 'cmd'.
";
        
        $__internal_99ebd5503b5d13b2d2f88fba13b47475c063a6e6fddf5e7de75b74090b9e169c->leave($__internal_99ebd5503b5d13b2d2f88fba13b47475c063a6e6fddf5e7de75b74090b9e169c_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/fsevents/node_modules/osenv/README.md";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("# osenv

Look up environment settings specific to different operating systems.

## Usage

```javascript
var osenv = require('osenv')
var path = osenv.path()
var user = osenv.user()
// etc.

// Some things are not reliably in the env, and have a fallback command:
var h = osenv.hostname(function (er, hostname) {
  h = hostname
})
// This will still cause it to be memoized, so calling osenv.hostname()
// is now an immediate operation.

// You can always send a cb, which will get called in the nextTick
// if it's been memoized, or wait for the fallback data if it wasn't
// found in the environment.
osenv.hostname(function (er, hostname) {
  if (er) console.error('error looking up hostname')
  else console.log('this machine calls itself %s', hostname)
})
```

## osenv.hostname()

The machine name.  Calls `hostname` if not found.

## osenv.user()

The currently logged-in user.  Calls `whoami` if not found.

## osenv.prompt()

Either PS1 on unix, or PROMPT on Windows.

## osenv.tmpdir()

The place where temporary files should be created.

## osenv.home()

No place like it.

## osenv.path()

An array of the places that the operating system will search for
executables.

## osenv.editor() 

Return the executable name of the editor program.  This uses the EDITOR
and VISUAL environment variables, and falls back to `vi` on Unix, or
`notepad.exe` on Windows.

## osenv.shell()

The SHELL on Unix, which Windows calls the ComSpec.  Defaults to 'bash'
or 'cmd'.
", "node_modules/fsevents/node_modules/osenv/README.md", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/fsevents/node_modules/osenv/README.md");
    }
}
