<?php

/* node_modules/fstream/README.md */
class __TwigTemplate_354043aa04a2afe9f08eb9c936c12b9d731033ec5f070f647c66fe9acb04a67b extends Twig_Template
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
        $__internal_c31a1d25066d642926ac80257ccb180ede4517a7c8859899872ed3b32f0f26c7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c31a1d25066d642926ac80257ccb180ede4517a7c8859899872ed3b32f0f26c7->enter($__internal_c31a1d25066d642926ac80257ccb180ede4517a7c8859899872ed3b32f0f26c7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/fstream/README.md"));

        // line 1
        echo "Like FS streams, but with stat on them, and supporting directories and
symbolic links, as well as normal files.  Also, you can use this to set
the stats on a file, even if you don't change its contents, or to create
a symlink, etc.

So, for example, you can \"write\" a directory, and it'll call `mkdir`.  You
can specify a uid and gid, and it'll call `chown`.  You can specify a
`mtime` and `atime`, and it'll call `utimes`.  You can call it a symlink
and provide a `linkpath` and it'll call `symlink`.

Note that it won't automatically resolve symbolic links.  So, if you
call `fstream.Reader('/some/symlink')` then you'll get an object
that stats and then ends immediately (since it has no data).  To follow
symbolic links, do this: `fstream.Reader({path:'/some/symlink', follow:
true })`.

There are various checks to make sure that the bytes emitted are the
same as the intended size, if the size is set.

## Examples

```javascript
fstream
  .Writer({ path: \"path/to/file\"
          , mode: 0755
          , size: 6
          })
  .write(\"hello\\n\")
  .end()
```

This will create the directories if they're missing, and then write
`hello\\n` into the file, chmod it to 0755, and assert that 6 bytes have
been written when it's done.

```javascript
fstream
  .Writer({ path: \"path/to/file\"
          , mode: 0755
          , size: 6
          , flags: \"a\"
          })
  .write(\"hello\\n\")
  .end()
```

You can pass flags in, if you want to append to a file.

```javascript
fstream
  .Writer({ path: \"path/to/symlink\"
          , linkpath: \"./file\"
          , SymbolicLink: true
          , mode: \"0755\" // octal strings supported
          })
  .end()
```

If isSymbolicLink is a function, it'll be called, and if it returns
true, then it'll treat it as a symlink.  If it's not a function, then
any truish value will make a symlink, or you can set `type:
'SymbolicLink'`, which does the same thing.

Note that the linkpath is relative to the symbolic link location, not
the parent dir or cwd.

```javascript
fstream
  .Reader(\"path/to/dir\")
  .pipe(fstream.Writer(\"path/to/other/dir\"))
```

This will do like `cp -Rp path/to/dir path/to/other/dir`.  If the other
dir exists and isn't a directory, then it'll emit an error.  It'll also
set the uid, gid, mode, etc. to be identical.  In this way, it's more
like `rsync -a` than simply a copy.
";
        
        $__internal_c31a1d25066d642926ac80257ccb180ede4517a7c8859899872ed3b32f0f26c7->leave($__internal_c31a1d25066d642926ac80257ccb180ede4517a7c8859899872ed3b32f0f26c7_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/fstream/README.md";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("Like FS streams, but with stat on them, and supporting directories and
symbolic links, as well as normal files.  Also, you can use this to set
the stats on a file, even if you don't change its contents, or to create
a symlink, etc.

So, for example, you can \"write\" a directory, and it'll call `mkdir`.  You
can specify a uid and gid, and it'll call `chown`.  You can specify a
`mtime` and `atime`, and it'll call `utimes`.  You can call it a symlink
and provide a `linkpath` and it'll call `symlink`.

Note that it won't automatically resolve symbolic links.  So, if you
call `fstream.Reader('/some/symlink')` then you'll get an object
that stats and then ends immediately (since it has no data).  To follow
symbolic links, do this: `fstream.Reader({path:'/some/symlink', follow:
true })`.

There are various checks to make sure that the bytes emitted are the
same as the intended size, if the size is set.

## Examples

```javascript
fstream
  .Writer({ path: \"path/to/file\"
          , mode: 0755
          , size: 6
          })
  .write(\"hello\\n\")
  .end()
```

This will create the directories if they're missing, and then write
`hello\\n` into the file, chmod it to 0755, and assert that 6 bytes have
been written when it's done.

```javascript
fstream
  .Writer({ path: \"path/to/file\"
          , mode: 0755
          , size: 6
          , flags: \"a\"
          })
  .write(\"hello\\n\")
  .end()
```

You can pass flags in, if you want to append to a file.

```javascript
fstream
  .Writer({ path: \"path/to/symlink\"
          , linkpath: \"./file\"
          , SymbolicLink: true
          , mode: \"0755\" // octal strings supported
          })
  .end()
```

If isSymbolicLink is a function, it'll be called, and if it returns
true, then it'll treat it as a symlink.  If it's not a function, then
any truish value will make a symlink, or you can set `type:
'SymbolicLink'`, which does the same thing.

Note that the linkpath is relative to the symbolic link location, not
the parent dir or cwd.

```javascript
fstream
  .Reader(\"path/to/dir\")
  .pipe(fstream.Writer(\"path/to/other/dir\"))
```

This will do like `cp -Rp path/to/dir path/to/other/dir`.  If the other
dir exists and isn't a directory, then it'll emit an error.  It'll also
set the uid, gid, mode, etc. to be identical.  In this way, it's more
like `rsync -a` than simply a copy.
", "node_modules/fstream/README.md", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/fstream/README.md");
    }
}
