<?php

/* node_modules/resolve/readme.markdown */
class __TwigTemplate_c54f705658a8664b1a8e6fcba4c1d3065b408ea1dd6d975fc7001ea5395a9a3e extends Twig_Template
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
        $__internal_3d0df714931ebf0351c0eb4478b2500a0350d71c0b64a40690787704a68a93ef = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3d0df714931ebf0351c0eb4478b2500a0350d71c0b64a40690787704a68a93ef->enter($__internal_3d0df714931ebf0351c0eb4478b2500a0350d71c0b64a40690787704a68a93ef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/resolve/readme.markdown"));

        // line 1
        echo "# resolve

implements the [node `require.resolve()`
algorithm](https://nodejs.org/api/modules.html#modules_all_together)
such that you can `require.resolve()` on behalf of a file asynchronously and
synchronously

[![build status](https://secure.travis-ci.org/substack/node-resolve.png)](http://travis-ci.org/substack/node-resolve)

# example

asynchronously resolve:

``` js
var resolve = require('resolve');
resolve('tap', { basedir: __dirname }, function (err, res) {
    if (err) console.error(err)
    else console.log(res)
});
```

```
\$ node example/async.js
/home/substack/projects/node-resolve/node_modules/tap/lib/main.js
```

synchronously resolve:

``` js
var resolve = require('resolve');
var res = resolve.sync('tap', { basedir: __dirname });
console.log(res);
```

```
\$ node example/sync.js
/home/substack/projects/node-resolve/node_modules/tap/lib/main.js
```

# methods

``` js
var resolve = require('resolve')
```

## resolve(id, opts={}, cb)

Asynchronously resolve the module path string `id` into `cb(err, res [, pkg])`, where `pkg` (if defined) is the data from `package.json`.

options are:

* opts.basedir - directory to begin resolving from

* opts.package - `package.json` data applicable to the module being loaded

* opts.extensions - array of file extensions to search in order

* opts.readFile - how to read files asynchronously

* opts.isFile - function to asynchronously test whether a file exists

* opts.packageFilter - transform the parsed package.json contents before looking
at the \"main\" field

* opts.pathFilter(pkg, path, relativePath) - transform a path within a package
  * pkg - package data
  * path - the path being resolved
  * relativePath - the path relative from the package.json location
  * returns - a relative path that will be joined from the package.json location

* opts.paths - require.paths array to use if nothing is found on the normal
node_modules recursive walk (probably don't use this)

* opts.moduleDirectory - directory (or directories) in which to recursively look for modules. default: `\"node_modules\"`

* opts.preserveSymlinks - if true, doesn't resolve `basedir` to real path before resolving.
This is the way Node resolves dependencies when executed with the [--preserve-symlinks](https://nodejs.org/api/all.html#cli_preserve_symlinks) flag.
**Note:** this property is currently `true` by default but it will be changed to
`false` in the next major version because *Node's resolution algorithm does not preserve symlinks by default*.

default `opts` values:

``` javascript
{
    paths: [],
    basedir: __dirname,
    extensions: [ '.js' ],
    readFile: fs.readFile,
    isFile: function (file, cb) {
        fs.stat(file, function (err, stat) {
            if (err && err.code === 'ENOENT') cb(null, false)
            else if (err) cb(err)
            else cb(null, stat.isFile())
        });
    },
    moduleDirectory: 'node_modules',
    preserveSymlinks: true
}
```

## resolve.sync(id, opts)

Synchronously resolve the module path string `id`, returning the result and
throwing an error when `id` can't be resolved.

options are:

* opts.basedir - directory to begin resolving from

* opts.extensions - array of file extensions to search in order

* opts.readFile - how to read files synchronously

* opts.isFile - function to synchronously test whether a file exists

* `opts.packageFilter(pkg, pkgfile)` - transform the parsed package.json
* contents before looking at the \"main\" field

* opts.paths - require.paths array to use if nothing is found on the normal
node_modules recursive walk (probably don't use this)

* opts.moduleDirectory - directory (or directories) in which to recursively look for modules. default: `\"node_modules\"`

* opts.preserveSymlinks - if true, doesn't resolve `basedir` to real path before resolving.
This is the way Node resolves dependencies when executed with the [--preserve-symlinks](https://nodejs.org/api/all.html#cli_preserve_symlinks) flag.
**Note:** this property is currently `true` by default but it will be changed to
`false` in the next major version because *Node's resolution algorithm does not preserve symlinks by default*.

default `opts` values:

``` javascript
{
    paths: [],
    basedir: __dirname,
    extensions: [ '.js' ],
    readFileSync: fs.readFileSync,
    isFile: function (file) {
        try { return fs.statSync(file).isFile() }
        catch (e) { return false }
    },
    moduleDirectory: 'node_modules',
    preserveSymlinks: true
}
````

## resolve.isCore(pkg)

Return whether a package is in core.

# install

With [npm](https://npmjs.org) do:

```
npm install resolve
```

# license

MIT
";
        
        $__internal_3d0df714931ebf0351c0eb4478b2500a0350d71c0b64a40690787704a68a93ef->leave($__internal_3d0df714931ebf0351c0eb4478b2500a0350d71c0b64a40690787704a68a93ef_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/resolve/readme.markdown";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("# resolve

implements the [node `require.resolve()`
algorithm](https://nodejs.org/api/modules.html#modules_all_together)
such that you can `require.resolve()` on behalf of a file asynchronously and
synchronously

[![build status](https://secure.travis-ci.org/substack/node-resolve.png)](http://travis-ci.org/substack/node-resolve)

# example

asynchronously resolve:

``` js
var resolve = require('resolve');
resolve('tap', { basedir: __dirname }, function (err, res) {
    if (err) console.error(err)
    else console.log(res)
});
```

```
\$ node example/async.js
/home/substack/projects/node-resolve/node_modules/tap/lib/main.js
```

synchronously resolve:

``` js
var resolve = require('resolve');
var res = resolve.sync('tap', { basedir: __dirname });
console.log(res);
```

```
\$ node example/sync.js
/home/substack/projects/node-resolve/node_modules/tap/lib/main.js
```

# methods

``` js
var resolve = require('resolve')
```

## resolve(id, opts={}, cb)

Asynchronously resolve the module path string `id` into `cb(err, res [, pkg])`, where `pkg` (if defined) is the data from `package.json`.

options are:

* opts.basedir - directory to begin resolving from

* opts.package - `package.json` data applicable to the module being loaded

* opts.extensions - array of file extensions to search in order

* opts.readFile - how to read files asynchronously

* opts.isFile - function to asynchronously test whether a file exists

* opts.packageFilter - transform the parsed package.json contents before looking
at the \"main\" field

* opts.pathFilter(pkg, path, relativePath) - transform a path within a package
  * pkg - package data
  * path - the path being resolved
  * relativePath - the path relative from the package.json location
  * returns - a relative path that will be joined from the package.json location

* opts.paths - require.paths array to use if nothing is found on the normal
node_modules recursive walk (probably don't use this)

* opts.moduleDirectory - directory (or directories) in which to recursively look for modules. default: `\"node_modules\"`

* opts.preserveSymlinks - if true, doesn't resolve `basedir` to real path before resolving.
This is the way Node resolves dependencies when executed with the [--preserve-symlinks](https://nodejs.org/api/all.html#cli_preserve_symlinks) flag.
**Note:** this property is currently `true` by default but it will be changed to
`false` in the next major version because *Node's resolution algorithm does not preserve symlinks by default*.

default `opts` values:

``` javascript
{
    paths: [],
    basedir: __dirname,
    extensions: [ '.js' ],
    readFile: fs.readFile,
    isFile: function (file, cb) {
        fs.stat(file, function (err, stat) {
            if (err && err.code === 'ENOENT') cb(null, false)
            else if (err) cb(err)
            else cb(null, stat.isFile())
        });
    },
    moduleDirectory: 'node_modules',
    preserveSymlinks: true
}
```

## resolve.sync(id, opts)

Synchronously resolve the module path string `id`, returning the result and
throwing an error when `id` can't be resolved.

options are:

* opts.basedir - directory to begin resolving from

* opts.extensions - array of file extensions to search in order

* opts.readFile - how to read files synchronously

* opts.isFile - function to synchronously test whether a file exists

* `opts.packageFilter(pkg, pkgfile)` - transform the parsed package.json
* contents before looking at the \"main\" field

* opts.paths - require.paths array to use if nothing is found on the normal
node_modules recursive walk (probably don't use this)

* opts.moduleDirectory - directory (or directories) in which to recursively look for modules. default: `\"node_modules\"`

* opts.preserveSymlinks - if true, doesn't resolve `basedir` to real path before resolving.
This is the way Node resolves dependencies when executed with the [--preserve-symlinks](https://nodejs.org/api/all.html#cli_preserve_symlinks) flag.
**Note:** this property is currently `true` by default but it will be changed to
`false` in the next major version because *Node's resolution algorithm does not preserve symlinks by default*.

default `opts` values:

``` javascript
{
    paths: [],
    basedir: __dirname,
    extensions: [ '.js' ],
    readFileSync: fs.readFileSync,
    isFile: function (file) {
        try { return fs.statSync(file).isFile() }
        catch (e) { return false }
    },
    moduleDirectory: 'node_modules',
    preserveSymlinks: true
}
````

## resolve.isCore(pkg)

Return whether a package is in core.

# install

With [npm](https://npmjs.org) do:

```
npm install resolve
```

# license

MIT
", "node_modules/resolve/readme.markdown", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/resolve/readme.markdown");
    }
}
