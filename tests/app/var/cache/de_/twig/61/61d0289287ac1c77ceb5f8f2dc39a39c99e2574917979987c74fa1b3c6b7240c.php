<?php

/* node_modules/npm-run-path/readme.md */
class __TwigTemplate_d0785ddd40b87807b544c4394e24a28b2f4b59cad926fca62e55912eaad10963 extends Twig_Template
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
        $__internal_6541e46b60abec1509fc9f46d40bd0476bec6cb7340a8835e62059f4e481f047 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6541e46b60abec1509fc9f46d40bd0476bec6cb7340a8835e62059f4e481f047->enter($__internal_6541e46b60abec1509fc9f46d40bd0476bec6cb7340a8835e62059f4e481f047_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/npm-run-path/readme.md"));

        // line 1
        echo "# npm-run-path [![Build Status](https://travis-ci.org/sindresorhus/npm-run-path.svg?branch=master)](https://travis-ci.org/sindresorhus/npm-run-path)

> Get your [PATH](https://en.wikipedia.org/wiki/PATH_(variable)) prepended with locally installed binaries

In [npm run scripts](https://docs.npmjs.com/cli/run-script) you can execute locally installed binaries by name. This enables the same outside npm.


## Install

```
\$ npm install --save npm-run-path
```


## Usage

```js
const childProcess = require('child_process');
const npmRunPath = require('npm-run-path');

console.log(process.env.PATH);
//=> '/usr/local/bin'

console.log(npmRunPath());
//=> '/Users/sindresorhus/dev/foo/node_modules/.bin:/Users/sindresorhus/dev/node_modules/.bin:/Users/sindresorhus/node_modules/.bin:/Users/node_modules/.bin:/node_modules/.bin:/usr/local/bin'

// `foo` is a locally installed binary
childProcess.execFileSync('foo', {
\tenv: npmRunPath.env()
});
```


## API

### npmRunPath([options])

#### options

##### cwd

Type: `string`<br>
Default: `process.cwd()`

Working directory.

##### path

Type: `string`<br>
Default: [`PATH`](https://github.com/sindresorhus/path-key)

PATH to be appended.<br>
Set it to an empty string to exclude the default PATH.

### npmRunPath.env([options])

#### options

##### cwd

Type: `string`<br>
Default: `process.cwd()`

Working directory.

##### env

Type: `Object`

Accepts an object of environment variables, like `process.env`, and modifies the PATH using the correct [PATH key](https://github.com/sindresorhus/path-key). Use this if you're modifying the PATH for use in the `child_process` options.


## Related

- [npm-run-path-cli](https://github.com/sindresorhus/npm-run-path-cli) - CLI for this module
- [execa](https://github.com/sindresorhus/execa) - Execute a locally installed binary


## License

MIT © [Sindre Sorhus](https://sindresorhus.com)
";
        
        $__internal_6541e46b60abec1509fc9f46d40bd0476bec6cb7340a8835e62059f4e481f047->leave($__internal_6541e46b60abec1509fc9f46d40bd0476bec6cb7340a8835e62059f4e481f047_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/npm-run-path/readme.md";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("# npm-run-path [![Build Status](https://travis-ci.org/sindresorhus/npm-run-path.svg?branch=master)](https://travis-ci.org/sindresorhus/npm-run-path)

> Get your [PATH](https://en.wikipedia.org/wiki/PATH_(variable)) prepended with locally installed binaries

In [npm run scripts](https://docs.npmjs.com/cli/run-script) you can execute locally installed binaries by name. This enables the same outside npm.


## Install

```
\$ npm install --save npm-run-path
```


## Usage

```js
const childProcess = require('child_process');
const npmRunPath = require('npm-run-path');

console.log(process.env.PATH);
//=> '/usr/local/bin'

console.log(npmRunPath());
//=> '/Users/sindresorhus/dev/foo/node_modules/.bin:/Users/sindresorhus/dev/node_modules/.bin:/Users/sindresorhus/node_modules/.bin:/Users/node_modules/.bin:/node_modules/.bin:/usr/local/bin'

// `foo` is a locally installed binary
childProcess.execFileSync('foo', {
\tenv: npmRunPath.env()
});
```


## API

### npmRunPath([options])

#### options

##### cwd

Type: `string`<br>
Default: `process.cwd()`

Working directory.

##### path

Type: `string`<br>
Default: [`PATH`](https://github.com/sindresorhus/path-key)

PATH to be appended.<br>
Set it to an empty string to exclude the default PATH.

### npmRunPath.env([options])

#### options

##### cwd

Type: `string`<br>
Default: `process.cwd()`

Working directory.

##### env

Type: `Object`

Accepts an object of environment variables, like `process.env`, and modifies the PATH using the correct [PATH key](https://github.com/sindresorhus/path-key). Use this if you're modifying the PATH for use in the `child_process` options.


## Related

- [npm-run-path-cli](https://github.com/sindresorhus/npm-run-path-cli) - CLI for this module
- [execa](https://github.com/sindresorhus/execa) - Execute a locally installed binary


## License

MIT © [Sindre Sorhus](https://sindresorhus.com)
", "node_modules/npm-run-path/readme.md", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/npm-run-path/readme.md");
    }
}
