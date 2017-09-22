<?php

/* node_modules/find-up/readme.md */
class __TwigTemplate_6b6e3333cb3b153f09a029200d499bc56bf6c116150b00ef8df78f94ef1b3588 extends Twig_Template
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
        $__internal_b3d57b764f29b53b8f34469e62e0da57bd43ff8cc1b35143d386fad0bc181491 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b3d57b764f29b53b8f34469e62e0da57bd43ff8cc1b35143d386fad0bc181491->enter($__internal_b3d57b764f29b53b8f34469e62e0da57bd43ff8cc1b35143d386fad0bc181491_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/find-up/readme.md"));

        // line 1
        echo "# find-up [![Build Status: Linux and macOS](https://travis-ci.org/sindresorhus/find-up.svg?branch=master)](https://travis-ci.org/sindresorhus/find-up) [![Build Status: Windows](https://ci.appveyor.com/api/projects/status/l0cyjmvh5lq72vq2/branch/master?svg=true)](https://ci.appveyor.com/project/sindresorhus/find-up/branch/master)

> Find a file by walking up parent directories


## Install

```
\$ npm install --save find-up
```


## Usage

```
/
└── Users
\t\t└── sindresorhus
\t\t\t\t├── unicorn.png
\t\t\t\t└── foo
\t\t\t\t\t\t└── bar
\t\t\t\t\t\t\t\t├── baz
\t\t\t\t\t\t\t\t└── example.js
```

```js
// example.js
const findUp = require('find-up');

findUp('unicorn.png').then(filepath => {
\tconsole.log(filepath);
\t//=> '/Users/sindresorhus/unicorn.png'
});

findUp(['rainbow.png', 'unicorn.png']).then(filepath => {
\tconsole.log(filepath);
\t//=> '/Users/sindresorhus/unicorn.png'
});
```


## API

### findUp(filename, [options])

Returns a `Promise` for the filepath or `null`.

### findUp([filenameA, filenameB], [options])

Returns a `Promise` for the first filepath found (by respecting the order) or `null`.

### findUp.sync(filename, [options])

Returns a filepath or `null`.

### findUp.sync([filenameA, filenameB], [options])

Returns the first filepath found (by respecting the order) or `null`.

#### filename

Type: `string`

Filename of the file to find.

#### options

##### cwd

Type: `string`<br>
Default: `process.cwd()`

Directory to start from.


## Related

- [find-up-cli](https://github.com/sindresorhus/find-up-cli) - CLI for this module
- [pkg-up](https://github.com/sindresorhus/pkg-up) - Find the closest package.json file
- [pkg-dir](https://github.com/sindresorhus/pkg-dir) - Find the root directory of an npm package


## License

MIT © [Sindre Sorhus](https://sindresorhus.com)
";
        
        $__internal_b3d57b764f29b53b8f34469e62e0da57bd43ff8cc1b35143d386fad0bc181491->leave($__internal_b3d57b764f29b53b8f34469e62e0da57bd43ff8cc1b35143d386fad0bc181491_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/find-up/readme.md";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("# find-up [![Build Status: Linux and macOS](https://travis-ci.org/sindresorhus/find-up.svg?branch=master)](https://travis-ci.org/sindresorhus/find-up) [![Build Status: Windows](https://ci.appveyor.com/api/projects/status/l0cyjmvh5lq72vq2/branch/master?svg=true)](https://ci.appveyor.com/project/sindresorhus/find-up/branch/master)

> Find a file by walking up parent directories


## Install

```
\$ npm install --save find-up
```


## Usage

```
/
└── Users
\t\t└── sindresorhus
\t\t\t\t├── unicorn.png
\t\t\t\t└── foo
\t\t\t\t\t\t└── bar
\t\t\t\t\t\t\t\t├── baz
\t\t\t\t\t\t\t\t└── example.js
```

```js
// example.js
const findUp = require('find-up');

findUp('unicorn.png').then(filepath => {
\tconsole.log(filepath);
\t//=> '/Users/sindresorhus/unicorn.png'
});

findUp(['rainbow.png', 'unicorn.png']).then(filepath => {
\tconsole.log(filepath);
\t//=> '/Users/sindresorhus/unicorn.png'
});
```


## API

### findUp(filename, [options])

Returns a `Promise` for the filepath or `null`.

### findUp([filenameA, filenameB], [options])

Returns a `Promise` for the first filepath found (by respecting the order) or `null`.

### findUp.sync(filename, [options])

Returns a filepath or `null`.

### findUp.sync([filenameA, filenameB], [options])

Returns the first filepath found (by respecting the order) or `null`.

#### filename

Type: `string`

Filename of the file to find.

#### options

##### cwd

Type: `string`<br>
Default: `process.cwd()`

Directory to start from.


## Related

- [find-up-cli](https://github.com/sindresorhus/find-up-cli) - CLI for this module
- [pkg-up](https://github.com/sindresorhus/pkg-up) - Find the closest package.json file
- [pkg-dir](https://github.com/sindresorhus/pkg-dir) - Find the root directory of an npm package


## License

MIT © [Sindre Sorhus](https://sindresorhus.com)
", "node_modules/find-up/readme.md", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/find-up/readme.md");
    }
}
