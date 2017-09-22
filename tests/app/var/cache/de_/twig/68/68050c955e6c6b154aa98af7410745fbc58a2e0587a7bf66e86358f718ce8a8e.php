<?php

/* node_modules/tar/README.md */
class __TwigTemplate_ed3eef013b7fac486319c9c895bbc5b28348affe342ffe51ebc4b3b9b8c4fc41 extends Twig_Template
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
        $__internal_057b485dfd660d8c204339bfd9805e746383a85dc69a519f93ecda9521ccfb7d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_057b485dfd660d8c204339bfd9805e746383a85dc69a519f93ecda9521ccfb7d->enter($__internal_057b485dfd660d8c204339bfd9805e746383a85dc69a519f93ecda9521ccfb7d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/tar/README.md"));

        // line 1
        echo "# node-tar

Tar for Node.js.

[![NPM](https://nodei.co/npm/tar.png)](https://nodei.co/npm/tar/)

## API

See `examples/` for usage examples.

### var tar = require('tar')

Returns an object with `.Pack`, `.Extract` and `.Parse` methods.

### tar.Pack([properties])

Returns a through stream. Use
[fstream](https://npmjs.org/package/fstream) to write files into the
pack stream and you will receive tar archive data from the pack
stream.

This only works with directories, it does not work with individual files.

The optional `properties` object are used to set properties in the tar
'Global Extended Header'. If the `fromBase` property is set to true,
the tar will contain files relative to the path passed, and not with
the path included.

### tar.Extract([options])

Returns a through stream. Write tar data to the stream and the files
in the tarball will be extracted onto the filesystem.

`options` can be:

```js
{
  path: '/path/to/extract/tar/into',
  strip: 0, // how many path segments to strip from the root when extracting
}
```

`options` also get passed to the `fstream.Writer` instance that `tar`
uses internally.

### tar.Parse()

Returns a writable stream. Write tar data to it and it will emit
`entry` events for each entry parsed from the tarball. This is used by
`tar.Extract`.
";
        
        $__internal_057b485dfd660d8c204339bfd9805e746383a85dc69a519f93ecda9521ccfb7d->leave($__internal_057b485dfd660d8c204339bfd9805e746383a85dc69a519f93ecda9521ccfb7d_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/tar/README.md";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("# node-tar

Tar for Node.js.

[![NPM](https://nodei.co/npm/tar.png)](https://nodei.co/npm/tar/)

## API

See `examples/` for usage examples.

### var tar = require('tar')

Returns an object with `.Pack`, `.Extract` and `.Parse` methods.

### tar.Pack([properties])

Returns a through stream. Use
[fstream](https://npmjs.org/package/fstream) to write files into the
pack stream and you will receive tar archive data from the pack
stream.

This only works with directories, it does not work with individual files.

The optional `properties` object are used to set properties in the tar
'Global Extended Header'. If the `fromBase` property is set to true,
the tar will contain files relative to the path passed, and not with
the path included.

### tar.Extract([options])

Returns a through stream. Write tar data to the stream and the files
in the tarball will be extracted onto the filesystem.

`options` can be:

```js
{
  path: '/path/to/extract/tar/into',
  strip: 0, // how many path segments to strip from the root when extracting
}
```

`options` also get passed to the `fstream.Writer` instance that `tar`
uses internally.

### tar.Parse()

Returns a writable stream. Write tar data to it and it will emit
`entry` events for each entry parsed from the tarball. This is used by
`tar.Extract`.
", "node_modules/tar/README.md", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/tar/README.md");
    }
}
