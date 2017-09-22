<?php

/* node_modules/watchpack/README.md */
class __TwigTemplate_39f610125d3a2cc1be24cc74e16f2b76768587dfe804e4e41dbd08ce73593170 extends Twig_Template
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
        $__internal_d3fda7ab88cf99863da408841bba48c3352c2b67fcddd08760f5901421b2efb0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d3fda7ab88cf99863da408841bba48c3352c2b67fcddd08760f5901421b2efb0->enter($__internal_d3fda7ab88cf99863da408841bba48c3352c2b67fcddd08760f5901421b2efb0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/watchpack/README.md"));

        // line 1
        echo "# watchpack

Wrapper library for directory and file watching.

[![Build Status](https://travis-ci.org/webpack/watchpack.svg?branch=master)](https://travis-ci.org/webpack/watchpack) [![Build status](https://ci.appveyor.com/api/projects/status/e5u2qvmugtv0r647/branch/master?svg=true)](https://ci.appveyor.com/project/sokra/watchpack/branch/master) [![Test coverage][coveralls-image]][coveralls-url]

## Concept

watchpack high level API don't map directly to watchers. Instead a three level architecture ensures that for each directory only a single watcher exists.

* The high level API requests `DirectoryWatchers` from a `WatcherManager`, which ensures that only a single `DirectoryWatcher` per directory is created.
* A user-faced `Watcher` can be obtained from a `DirectoryWatcher` and provides a filtered view on the `DirectoryWatcher`.
* Reference-counting is used on the `DirectoryWatcher` and `Watcher` to decide when to close them.
* The real watchers (currently chokidar) are created by the `DirectoryWatcher`.
* Files are never watched directly. This should keep the watcher count low.
* Watching can be started in the past. This way watching can start after file reading.
* Symlinks are not followed, instead the symlink is watched.

## API

``` javascript
var Watchpack = require(\"watchpack\");

var wp = new Watchpack({
\t// options:
\taggregateTimeout: 1000
\t// fire \"aggregated\" event when after a change for 1000ms no additonal change occured
\t// aggregated defaults to undefined, which doesn't fire an \"aggregated\" event

\tpoll: true
\t// poll: true - use polling with the default interval
\t// poll: 10000 - use polling with an interval of 10s
\t// poll defaults to undefined, which prefer native watching methods
\t// Note: enable polling when watching on a network path

\tignored: /node_modules/,
\t// anymatch-compatible definition of files/paths to be ignored
\t// see https://github.com/paulmillr/chokidar#path-filtering
});

// Watchpack.prototype.watch(string[] files, string[] directories, [number startTime])
wp.watch(listOfFiles, listOfDirectories, Date.now() - 10000);
// starts watching these files and directories
// calling this again will override the files and directories

wp.on(\"change\", function(filePath, mtime) {
\t// filePath: the changed file
\t// mtime: last modified time for the changed file
});

wp.on(\"aggregated\", function(changes) {
\t// changes: an array of all changed files
});

// Watchpack.prototype.pause()
wp.pause();
// stops emitting events, but keeps watchers open
// next \"watch\" call can reuse the watchers

// Watchpack.prototype.close()
wp.close();
// stops emitting events and closes all watchers

// Watchpack.prototype.getTimes()
var fileTimes = wp.getTimes();
// returns an object with all know change times for files
// this include timestamps from files not directly watched
// key: absolute path, value: timestamp as number
```

[coveralls-url]: https://coveralls.io/r/webpack/watchpack/
[coveralls-image]: https://img.shields.io/coveralls/webpack/watchpack.svg
";
        
        $__internal_d3fda7ab88cf99863da408841bba48c3352c2b67fcddd08760f5901421b2efb0->leave($__internal_d3fda7ab88cf99863da408841bba48c3352c2b67fcddd08760f5901421b2efb0_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/watchpack/README.md";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("# watchpack

Wrapper library for directory and file watching.

[![Build Status](https://travis-ci.org/webpack/watchpack.svg?branch=master)](https://travis-ci.org/webpack/watchpack) [![Build status](https://ci.appveyor.com/api/projects/status/e5u2qvmugtv0r647/branch/master?svg=true)](https://ci.appveyor.com/project/sokra/watchpack/branch/master) [![Test coverage][coveralls-image]][coveralls-url]

## Concept

watchpack high level API don't map directly to watchers. Instead a three level architecture ensures that for each directory only a single watcher exists.

* The high level API requests `DirectoryWatchers` from a `WatcherManager`, which ensures that only a single `DirectoryWatcher` per directory is created.
* A user-faced `Watcher` can be obtained from a `DirectoryWatcher` and provides a filtered view on the `DirectoryWatcher`.
* Reference-counting is used on the `DirectoryWatcher` and `Watcher` to decide when to close them.
* The real watchers (currently chokidar) are created by the `DirectoryWatcher`.
* Files are never watched directly. This should keep the watcher count low.
* Watching can be started in the past. This way watching can start after file reading.
* Symlinks are not followed, instead the symlink is watched.

## API

``` javascript
var Watchpack = require(\"watchpack\");

var wp = new Watchpack({
\t// options:
\taggregateTimeout: 1000
\t// fire \"aggregated\" event when after a change for 1000ms no additonal change occured
\t// aggregated defaults to undefined, which doesn't fire an \"aggregated\" event

\tpoll: true
\t// poll: true - use polling with the default interval
\t// poll: 10000 - use polling with an interval of 10s
\t// poll defaults to undefined, which prefer native watching methods
\t// Note: enable polling when watching on a network path

\tignored: /node_modules/,
\t// anymatch-compatible definition of files/paths to be ignored
\t// see https://github.com/paulmillr/chokidar#path-filtering
});

// Watchpack.prototype.watch(string[] files, string[] directories, [number startTime])
wp.watch(listOfFiles, listOfDirectories, Date.now() - 10000);
// starts watching these files and directories
// calling this again will override the files and directories

wp.on(\"change\", function(filePath, mtime) {
\t// filePath: the changed file
\t// mtime: last modified time for the changed file
});

wp.on(\"aggregated\", function(changes) {
\t// changes: an array of all changed files
});

// Watchpack.prototype.pause()
wp.pause();
// stops emitting events, but keeps watchers open
// next \"watch\" call can reuse the watchers

// Watchpack.prototype.close()
wp.close();
// stops emitting events and closes all watchers

// Watchpack.prototype.getTimes()
var fileTimes = wp.getTimes();
// returns an object with all know change times for files
// this include timestamps from files not directly watched
// key: absolute path, value: timestamp as number
```

[coveralls-url]: https://coveralls.io/r/webpack/watchpack/
[coveralls-image]: https://img.shields.io/coveralls/webpack/watchpack.svg
", "node_modules/watchpack/README.md", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/watchpack/README.md");
    }
}
