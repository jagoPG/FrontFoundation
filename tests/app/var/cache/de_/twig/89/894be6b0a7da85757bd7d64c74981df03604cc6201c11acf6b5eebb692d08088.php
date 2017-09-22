<?php

/* node_modules/interpret/README.md */
class __TwigTemplate_8d04e5b0577d824f64e8c9f44339f746515f6dfd2caad0ba11ca0d78f461e0f3 extends Twig_Template
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
        $__internal_6ac72bb16f9fce6739dc3c41e2fce424e163167eb776b6d17e6086e0da7b28fc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6ac72bb16f9fce6739dc3c41e2fce424e163167eb776b6d17e6086e0da7b28fc->enter($__internal_6ac72bb16f9fce6739dc3c41e2fce424e163167eb776b6d17e6086e0da7b28fc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/interpret/README.md"));

        // line 1
        echo "# interpret
> A dictionary of file extensions and associated module loaders.

[![NPM](https://nodei.co/npm/interpret.png)](https://nodei.co/npm/interpret/)

## What is it
This is used by [Liftoff](http://github.com/tkellen/node-liftoff) to automatically require dependencies for configuration files, and by [rechoir](http://github.com/tkellen/node-rechoir) for registering module loaders.

## API

### extensions
Map file types to modules which provide a [require.extensions] loader.

```js
{
  '.babel.js': [
    {
      module: 'babel-register',
      register: function (module) {
        module({
          // register on .js extension due to https://github.com/joyent/node/blob/v0.12.0/lib/module.js#L353
          // which only captures the final extension (.babel.js -> .js)
          extensions: '.js'
        });
      }
    },
    {
      module: 'babel-core/register',
      register: function (module) {
        module({
          extensions: '.js'
        });
      }
    },
    {
      module: 'babel/register',
      register: function (module) {
        module({
          extensions: '.js'
        });
      }
    }
  ],
  '.buble.js': 'buble/register',
  '.cirru': 'cirru-script/lib/register',
  '.cjsx': 'node-cjsx/register',
  '.co': 'coco',
  '.coffee': ['coffee-script/register', 'coffee-script'],
  '.coffee.md': ['coffee-script/register', 'coffee-script'],
  '.csv': 'require-csv',
  '.eg': 'earlgrey/register',
  '.iced': ['iced-coffee-script/register', 'iced-coffee-script'],
  '.iced.md': 'iced-coffee-script/register',
  '.ini': 'require-ini',
  '.js': null,
  '.json': null,
  '.json5': 'json5/lib/require',
  '.jsx': [
    {
      module: 'babel-register',
      register: function (module) {
        module({
          extensions: '.jsx'
        });
      }
    },
    {
      module: 'babel-core/register',
      register: function (module) {
        module({
          extensions: '.jsx'
        });
      }
    },
    {
      module: 'babel/register',
      register: function (module) {
        module({
          extensions: '.jsx'
        });
      },
    },
    {
      module: 'node-jsx',
      register: function (module) {
        module.install({
          extension: '.jsx',
          harmony: true
        });
      }
    }
  ],
  '.litcoffee': ['coffee-script/register', 'coffee-script'],
  '.liticed': 'iced-coffee-script/register',
  '.ls': ['livescript', 'LiveScript'],
  '.node': null,
  '.toml': {
    module: 'toml-require',
    register: function (module) {
      module.install();
    }
  },
  '.ts': ['ts-node/register', 'typescript-node/register', 'typescript-register', 'typescript-require'],
  '.tsx': ['ts-node/register', 'typescript-node/register'],
  '.wisp': 'wisp/engine/node',
  '.xml': 'require-xml',
  '.yaml': 'require-yaml',
  '.yml': 'require-yaml'
};
```

### jsVariants
Same as above, but only include the extensions which are javascript variants.

## How to use it

Consumers should use the exported `extensions` or `jsVariants` object to determine which module should be loaded for a given extension. If a matching extension is found, consumers should do the following:

1. If the value is null, do nothing.

2. If the value is a string, try to require it.

3. If the value is an object, try to require the `module` property. If successful, the `register` property (a function) should be called with the module passed as the first argument.

4. If the value is an array, iterate over it, attempting step #2 or #3 until one of the attempts does not throw.

[require.extensions]: http://nodejs.org/api/globals.html#globals_require_extensions
";
        
        $__internal_6ac72bb16f9fce6739dc3c41e2fce424e163167eb776b6d17e6086e0da7b28fc->leave($__internal_6ac72bb16f9fce6739dc3c41e2fce424e163167eb776b6d17e6086e0da7b28fc_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/interpret/README.md";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("# interpret
> A dictionary of file extensions and associated module loaders.

[![NPM](https://nodei.co/npm/interpret.png)](https://nodei.co/npm/interpret/)

## What is it
This is used by [Liftoff](http://github.com/tkellen/node-liftoff) to automatically require dependencies for configuration files, and by [rechoir](http://github.com/tkellen/node-rechoir) for registering module loaders.

## API

### extensions
Map file types to modules which provide a [require.extensions] loader.

```js
{
  '.babel.js': [
    {
      module: 'babel-register',
      register: function (module) {
        module({
          // register on .js extension due to https://github.com/joyent/node/blob/v0.12.0/lib/module.js#L353
          // which only captures the final extension (.babel.js -> .js)
          extensions: '.js'
        });
      }
    },
    {
      module: 'babel-core/register',
      register: function (module) {
        module({
          extensions: '.js'
        });
      }
    },
    {
      module: 'babel/register',
      register: function (module) {
        module({
          extensions: '.js'
        });
      }
    }
  ],
  '.buble.js': 'buble/register',
  '.cirru': 'cirru-script/lib/register',
  '.cjsx': 'node-cjsx/register',
  '.co': 'coco',
  '.coffee': ['coffee-script/register', 'coffee-script'],
  '.coffee.md': ['coffee-script/register', 'coffee-script'],
  '.csv': 'require-csv',
  '.eg': 'earlgrey/register',
  '.iced': ['iced-coffee-script/register', 'iced-coffee-script'],
  '.iced.md': 'iced-coffee-script/register',
  '.ini': 'require-ini',
  '.js': null,
  '.json': null,
  '.json5': 'json5/lib/require',
  '.jsx': [
    {
      module: 'babel-register',
      register: function (module) {
        module({
          extensions: '.jsx'
        });
      }
    },
    {
      module: 'babel-core/register',
      register: function (module) {
        module({
          extensions: '.jsx'
        });
      }
    },
    {
      module: 'babel/register',
      register: function (module) {
        module({
          extensions: '.jsx'
        });
      },
    },
    {
      module: 'node-jsx',
      register: function (module) {
        module.install({
          extension: '.jsx',
          harmony: true
        });
      }
    }
  ],
  '.litcoffee': ['coffee-script/register', 'coffee-script'],
  '.liticed': 'iced-coffee-script/register',
  '.ls': ['livescript', 'LiveScript'],
  '.node': null,
  '.toml': {
    module: 'toml-require',
    register: function (module) {
      module.install();
    }
  },
  '.ts': ['ts-node/register', 'typescript-node/register', 'typescript-register', 'typescript-require'],
  '.tsx': ['ts-node/register', 'typescript-node/register'],
  '.wisp': 'wisp/engine/node',
  '.xml': 'require-xml',
  '.yaml': 'require-yaml',
  '.yml': 'require-yaml'
};
```

### jsVariants
Same as above, but only include the extensions which are javascript variants.

## How to use it

Consumers should use the exported `extensions` or `jsVariants` object to determine which module should be loaded for a given extension. If a matching extension is found, consumers should do the following:

1. If the value is null, do nothing.

2. If the value is a string, try to require it.

3. If the value is an object, try to require the `module` property. If successful, the `register` property (a function) should be called with the module passed as the first argument.

4. If the value is an array, iterate over it, attempting step #2 or #3 until one of the attempts does not throw.

[require.extensions]: http://nodejs.org/api/globals.html#globals_require_extensions
", "node_modules/interpret/README.md", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/interpret/README.md");
    }
}
