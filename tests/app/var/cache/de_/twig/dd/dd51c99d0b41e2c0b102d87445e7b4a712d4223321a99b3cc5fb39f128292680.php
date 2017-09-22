<?php

/* node_modules/pkg-dir/readme.md */
class __TwigTemplate_3cb693061bfe315c1e23e734631769ee578807cf9285804296ef6ecf5e9f078b extends Twig_Template
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
        $__internal_dad2fcb26d8e15619be75c0e578f9d002e17dd84a00cd688c327813b79f1df44 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dad2fcb26d8e15619be75c0e578f9d002e17dd84a00cd688c327813b79f1df44->enter($__internal_dad2fcb26d8e15619be75c0e578f9d002e17dd84a00cd688c327813b79f1df44_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/pkg-dir/readme.md"));

        // line 1
        echo "# pkg-dir [![Build Status](https://travis-ci.org/sindresorhus/pkg-dir.svg?branch=master)](https://travis-ci.org/sindresorhus/pkg-dir)

> Find the root directory of a Node.js project or npm package


## Install

```
\$ npm install --save pkg-dir
```


## Usage

```
/
└── Users
    └── sindresorhus
        └── foo
            ├── package.json
            └── bar
                ├── baz
                └── example.js
```

```js
// example.js
const pkgDir = require('pkg-dir');

pkgDir(__dirname).then(rootDir => {
\tconsole.log(rootDir);
\t//=> '/Users/sindresorhus/foo'
});
```


## API

### pkgDir([cwd])

Returns a `Promise` for either the project root path or `null` if it couldn't be found.

### pkgDir.sync([cwd])

Returns the project root path or `null`.

#### cwd

Type: `string`<br>
Default: `process.cwd()`

Directory to start from.


## Related

- [pkg-dir-cli](https://github.com/sindresorhus/pkg-dir-cli) - CLI for this module
- [pkg-up](https://github.com/sindresorhus/pkg-up) - Find the closest package.json file
- [find-up](https://github.com/sindresorhus/find-up) - Find a file by walking up parent directories


## License

MIT © [Sindre Sorhus](https://sindresorhus.com)
";
        
        $__internal_dad2fcb26d8e15619be75c0e578f9d002e17dd84a00cd688c327813b79f1df44->leave($__internal_dad2fcb26d8e15619be75c0e578f9d002e17dd84a00cd688c327813b79f1df44_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/pkg-dir/readme.md";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("# pkg-dir [![Build Status](https://travis-ci.org/sindresorhus/pkg-dir.svg?branch=master)](https://travis-ci.org/sindresorhus/pkg-dir)

> Find the root directory of a Node.js project or npm package


## Install

```
\$ npm install --save pkg-dir
```


## Usage

```
/
└── Users
    └── sindresorhus
        └── foo
            ├── package.json
            └── bar
                ├── baz
                └── example.js
```

```js
// example.js
const pkgDir = require('pkg-dir');

pkgDir(__dirname).then(rootDir => {
\tconsole.log(rootDir);
\t//=> '/Users/sindresorhus/foo'
});
```


## API

### pkgDir([cwd])

Returns a `Promise` for either the project root path or `null` if it couldn't be found.

### pkgDir.sync([cwd])

Returns the project root path or `null`.

#### cwd

Type: `string`<br>
Default: `process.cwd()`

Directory to start from.


## Related

- [pkg-dir-cli](https://github.com/sindresorhus/pkg-dir-cli) - CLI for this module
- [pkg-up](https://github.com/sindresorhus/pkg-up) - Find the closest package.json file
- [find-up](https://github.com/sindresorhus/find-up) - Find a file by walking up parent directories


## License

MIT © [Sindre Sorhus](https://sindresorhus.com)
", "node_modules/pkg-dir/readme.md", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/pkg-dir/readme.md");
    }
}
