<?php

/* node_modules/opener/README.md */
class __TwigTemplate_d47a0d6a3752c9f95ec5b7b9a36ee1064a3d7eeda2e5eaabaf44d1fffc1a6f6a extends Twig_Template
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
        $__internal_d067e7d11b1306342f261ed52207f1dd6e5af125634f817fedd43cae21b877b0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d067e7d11b1306342f261ed52207f1dd6e5af125634f817fedd43cae21b877b0->enter($__internal_d067e7d11b1306342f261ed52207f1dd6e5af125634f817fedd43cae21b877b0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/opener/README.md"));

        // line 1
        echo "# It Opens Stuff

That is, in your desktop environment. This will make *actual windows pop up*, with stuff in them:

```bash
npm install opener -g

opener http://google.com
opener ./my-file.txt
opener firefox
opener npm run lint
```

Also if you want to use it programmatically you can do that too:

```js
var opener = require(\"opener\");

opener(\"http://google.com\");
opener(\"./my-file.txt\");
opener(\"firefox\");
opener(\"npm run lint\");
```

Plus, it returns the child process created, so you can do things like let your script exit while the window stays open:

```js
var editor = opener(\"documentation.odt\");
editor.unref();
// These other unrefs may be necessary if your OS's opener process
// exits before the process it started is complete.
editor.stdin.unref();
editor.stdout.unref();
editor.stderr.unref();
```


## Use It for Good

Like opening the user's browser with a test harness in your package's test script:

```json
{
    \"scripts\": {
        \"test\": \"opener ./test/runner.html\"
    },
    \"devDependencies\": {
        \"opener\": \"*\"
    }
}
```

## Why

Because Windows has `start`, Macs have `open`, and *nix has `xdg-open`. At least
[according to some guy on StackOverflow](http://stackoverflow.com/q/1480971/3191). And I like things that work on all
three. Like Node.js. And Opener.
";
        
        $__internal_d067e7d11b1306342f261ed52207f1dd6e5af125634f817fedd43cae21b877b0->leave($__internal_d067e7d11b1306342f261ed52207f1dd6e5af125634f817fedd43cae21b877b0_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/opener/README.md";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("# It Opens Stuff

That is, in your desktop environment. This will make *actual windows pop up*, with stuff in them:

```bash
npm install opener -g

opener http://google.com
opener ./my-file.txt
opener firefox
opener npm run lint
```

Also if you want to use it programmatically you can do that too:

```js
var opener = require(\"opener\");

opener(\"http://google.com\");
opener(\"./my-file.txt\");
opener(\"firefox\");
opener(\"npm run lint\");
```

Plus, it returns the child process created, so you can do things like let your script exit while the window stays open:

```js
var editor = opener(\"documentation.odt\");
editor.unref();
// These other unrefs may be necessary if your OS's opener process
// exits before the process it started is complete.
editor.stdin.unref();
editor.stdout.unref();
editor.stderr.unref();
```


## Use It for Good

Like opening the user's browser with a test harness in your package's test script:

```json
{
    \"scripts\": {
        \"test\": \"opener ./test/runner.html\"
    },
    \"devDependencies\": {
        \"opener\": \"*\"
    }
}
```

## Why

Because Windows has `start`, Macs have `open`, and *nix has `xdg-open`. At least
[according to some guy on StackOverflow](http://stackoverflow.com/q/1480971/3191). And I like things that work on all
three. Like Node.js. And Opener.
", "node_modules/opener/README.md", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/opener/README.md");
    }
}
