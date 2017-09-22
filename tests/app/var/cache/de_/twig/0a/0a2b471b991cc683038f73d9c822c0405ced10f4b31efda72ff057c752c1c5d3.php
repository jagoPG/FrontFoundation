<?php

/* node_modules/fsevents/node_modules/rc/README.md */
class __TwigTemplate_5c85230b1a6d114acd28e29ee7b51727267b6c4fc788ae4fb1df9c3fbc218a0a extends Twig_Template
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
        $__internal_b009f7cd114e781a87a4a262f34e17bece039f36322a3dccb2f35b5ae00e3bde = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b009f7cd114e781a87a4a262f34e17bece039f36322a3dccb2f35b5ae00e3bde->enter($__internal_b009f7cd114e781a87a4a262f34e17bece039f36322a3dccb2f35b5ae00e3bde_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/fsevents/node_modules/rc/README.md"));

        // line 1
        echo "# rc

The non-configurable configuration loader for lazy people.

## Usage

The only option is to pass rc the name of your app, and your default configuration.

```javascript
var conf = require('rc')(appname, {
  //defaults go here.
  port: 2468,

  //defaults which are objects will be merged, not replaced
  views: {
    engine: 'jade'
  }
});
```

`rc` will return your configuration options merged with the defaults you specify.
If you pass in a predefined defaults object, it will be mutated:

```javascript
var conf = {};
require('rc')(appname, conf);
```

If `rc` finds any config files for your app, the returned config object will have
a `configs` array containing their paths:

```javascript
var appCfg = require('rc')(appname, conf);
appCfg.configs[0] // /etc/appnamerc
appCfg.configs[1] // /home/dominictarr/.config/appname
appCfg.config // same as appCfg.configs[appCfg.configs.length - 1]
```

## Standards

Given your application name (`appname`), rc will look in all the obvious places for configuration.

  * command line arguments (parsed by minimist)
  * environment variables prefixed with `\${appname}_`
    * or use \"\\_\\_\" to indicate nested properties <br/> _(e.g. `appname_foo__bar__baz` => `foo.bar.baz`)_
  * if you passed an option `--config file` then from that file
  * a local `.\${appname}rc` or the first found looking in `./ ../ ../../ ../../../` etc.
  * `\$HOME/.\${appname}rc`
  * `\$HOME/.\${appname}/config`
  * `\$HOME/.config/\${appname}`
  * `\$HOME/.config/\${appname}/config`
  * `/etc/\${appname}rc`
  * `/etc/\${appname}/config`
  * the defaults object you passed in.

All configuration sources that were found will be flattened into one object,
so that sources **earlier** in this list override later ones.


## Configuration File Formats

Configuration files (e.g. `.appnamerc`) may be in either [json](http://json.org/example) or [ini](http://en.wikipedia.org/wiki/INI_file) format. The example configurations below are equivalent:


#### Formatted as `ini`

```
; You can include comments in `ini` format if you want.

dependsOn=0.10.0


; `rc` has built-in support for ini sections, see?

[commands]
  www     = ./commands/www
  console = ./commands/repl


; You can even do nested sections

[generators.options]
  engine  = ejs

[generators.modules]
  new     = generate-new
  engine  = generate-backend

```

#### Formatted as `json`

```javascript
{
  // You can even comment your JSON, if you want
  \"dependsOn\": \"0.10.0\",
  \"commands\": {
    \"www\": \"./commands/www\",
    \"console\": \"./commands/repl\"
  },
  \"generators\": {
    \"options\": {
      \"engine\": \"ejs\"
    },
    \"modules\": {
      \"new\": \"generate-new\",
      \"backend\": \"generate-backend\"
    }
  }
}
```

Comments are stripped from JSON config via [strip-json-comments](https://github.com/sindresorhus/strip-json-comments).

> Since ini, and env variables do not have a standard for types, your application needs be prepared for strings.



## Advanced Usage

#### Pass in your own `argv`

You may pass in your own `argv` as the third argument to `rc`.  This is in case you want to [use your own command-line opts parser](https://github.com/dominictarr/rc/pull/12).

```javascript
require('rc')(appname, defaults, customArgvParser);
```

## Pass in your own parser

If you have a special need to use a non-standard parser,
you can do so by passing in the parser as the 4th argument.
(leave the 3rd as null to get the default args parser)

```javascript
require('rc')(appname, defaults, null, parser);
```

This may also be used to force a more strict format,
such as strict, valid JSON only.

## Note on Performance

`rc` is running `fs.statSync`-- so make sure you don't use it in a hot code path (e.g. a request handler) 


## License

Multi-licensed under the two-clause BSD License, MIT License, or Apache License, version 2.0
";
        
        $__internal_b009f7cd114e781a87a4a262f34e17bece039f36322a3dccb2f35b5ae00e3bde->leave($__internal_b009f7cd114e781a87a4a262f34e17bece039f36322a3dccb2f35b5ae00e3bde_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/fsevents/node_modules/rc/README.md";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("# rc

The non-configurable configuration loader for lazy people.

## Usage

The only option is to pass rc the name of your app, and your default configuration.

```javascript
var conf = require('rc')(appname, {
  //defaults go here.
  port: 2468,

  //defaults which are objects will be merged, not replaced
  views: {
    engine: 'jade'
  }
});
```

`rc` will return your configuration options merged with the defaults you specify.
If you pass in a predefined defaults object, it will be mutated:

```javascript
var conf = {};
require('rc')(appname, conf);
```

If `rc` finds any config files for your app, the returned config object will have
a `configs` array containing their paths:

```javascript
var appCfg = require('rc')(appname, conf);
appCfg.configs[0] // /etc/appnamerc
appCfg.configs[1] // /home/dominictarr/.config/appname
appCfg.config // same as appCfg.configs[appCfg.configs.length - 1]
```

## Standards

Given your application name (`appname`), rc will look in all the obvious places for configuration.

  * command line arguments (parsed by minimist)
  * environment variables prefixed with `\${appname}_`
    * or use \"\\_\\_\" to indicate nested properties <br/> _(e.g. `appname_foo__bar__baz` => `foo.bar.baz`)_
  * if you passed an option `--config file` then from that file
  * a local `.\${appname}rc` or the first found looking in `./ ../ ../../ ../../../` etc.
  * `\$HOME/.\${appname}rc`
  * `\$HOME/.\${appname}/config`
  * `\$HOME/.config/\${appname}`
  * `\$HOME/.config/\${appname}/config`
  * `/etc/\${appname}rc`
  * `/etc/\${appname}/config`
  * the defaults object you passed in.

All configuration sources that were found will be flattened into one object,
so that sources **earlier** in this list override later ones.


## Configuration File Formats

Configuration files (e.g. `.appnamerc`) may be in either [json](http://json.org/example) or [ini](http://en.wikipedia.org/wiki/INI_file) format. The example configurations below are equivalent:


#### Formatted as `ini`

```
; You can include comments in `ini` format if you want.

dependsOn=0.10.0


; `rc` has built-in support for ini sections, see?

[commands]
  www     = ./commands/www
  console = ./commands/repl


; You can even do nested sections

[generators.options]
  engine  = ejs

[generators.modules]
  new     = generate-new
  engine  = generate-backend

```

#### Formatted as `json`

```javascript
{
  // You can even comment your JSON, if you want
  \"dependsOn\": \"0.10.0\",
  \"commands\": {
    \"www\": \"./commands/www\",
    \"console\": \"./commands/repl\"
  },
  \"generators\": {
    \"options\": {
      \"engine\": \"ejs\"
    },
    \"modules\": {
      \"new\": \"generate-new\",
      \"backend\": \"generate-backend\"
    }
  }
}
```

Comments are stripped from JSON config via [strip-json-comments](https://github.com/sindresorhus/strip-json-comments).

> Since ini, and env variables do not have a standard for types, your application needs be prepared for strings.



## Advanced Usage

#### Pass in your own `argv`

You may pass in your own `argv` as the third argument to `rc`.  This is in case you want to [use your own command-line opts parser](https://github.com/dominictarr/rc/pull/12).

```javascript
require('rc')(appname, defaults, customArgvParser);
```

## Pass in your own parser

If you have a special need to use a non-standard parser,
you can do so by passing in the parser as the 4th argument.
(leave the 3rd as null to get the default args parser)

```javascript
require('rc')(appname, defaults, null, parser);
```

This may also be used to force a more strict format,
such as strict, valid JSON only.

## Note on Performance

`rc` is running `fs.statSync`-- so make sure you don't use it in a hot code path (e.g. a request handler) 


## License

Multi-licensed under the two-clause BSD License, MIT License, or Apache License, version 2.0
", "node_modules/fsevents/node_modules/rc/README.md", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/fsevents/node_modules/rc/README.md");
    }
}
