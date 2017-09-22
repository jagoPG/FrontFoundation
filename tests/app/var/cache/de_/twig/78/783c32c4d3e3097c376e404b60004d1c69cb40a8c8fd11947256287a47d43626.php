<?php

/* node_modules/memory-fs/README.md */
class __TwigTemplate_6a24a2a53e77a1e92ea8af34aead56bdc23420ee77bd58c12c3a64229197f510 extends Twig_Template
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
        $__internal_9bef2d5528923507065b265c1827c59af4ea9c69e8c30c5fbab05097711da8bb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9bef2d5528923507065b265c1827c59af4ea9c69e8c30c5fbab05097711da8bb->enter($__internal_9bef2d5528923507065b265c1827c59af4ea9c69e8c30c5fbab05097711da8bb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/memory-fs/README.md"));

        // line 1
        echo "# memory-fs

A simple in-memory filesystem. Holds data in a javascript object.

``` javascript
var MemoryFileSystem = require(\"memory-fs\");
var fs = new MemoryFileSystem(); // Optionally pass a javascript object

fs.mkdirpSync(\"/a/test/dir\");
fs.writeFileSync(\"/a/test/dir/file.txt\", \"Hello World\");
fs.readFileSync(\"/a/test/dir/file.txt\"); // returns Buffer(\"Hello World\")

// Async variants too
fs.unlink(\"/a/test/dir/file.txt\", function(err) {
\t// ...
});

fs.readdirSync(\"/a/test\"); // returns [\"dir\"]
fs.statSync(\"/a/test/dir\").isDirectory(); // returns true
fs.rmdirSync(\"/a/test/dir\");

fs.mkdirpSync(\"C:\\\\use\\\\windows\\\\style\\\\paths\");
```

## License

Copyright (c) 2012-2014 Tobias Koppers

MIT (http://www.opensource.org/licenses/mit-license.php)
";
        
        $__internal_9bef2d5528923507065b265c1827c59af4ea9c69e8c30c5fbab05097711da8bb->leave($__internal_9bef2d5528923507065b265c1827c59af4ea9c69e8c30c5fbab05097711da8bb_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/memory-fs/README.md";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("# memory-fs

A simple in-memory filesystem. Holds data in a javascript object.

``` javascript
var MemoryFileSystem = require(\"memory-fs\");
var fs = new MemoryFileSystem(); // Optionally pass a javascript object

fs.mkdirpSync(\"/a/test/dir\");
fs.writeFileSync(\"/a/test/dir/file.txt\", \"Hello World\");
fs.readFileSync(\"/a/test/dir/file.txt\"); // returns Buffer(\"Hello World\")

// Async variants too
fs.unlink(\"/a/test/dir/file.txt\", function(err) {
\t// ...
});

fs.readdirSync(\"/a/test\"); // returns [\"dir\"]
fs.statSync(\"/a/test/dir\").isDirectory(); // returns true
fs.rmdirSync(\"/a/test/dir\");

fs.mkdirpSync(\"C:\\\\use\\\\windows\\\\style\\\\paths\");
```

## License

Copyright (c) 2012-2014 Tobias Koppers

MIT (http://www.opensource.org/licenses/mit-license.php)
", "node_modules/memory-fs/README.md", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/memory-fs/README.md");
    }
}
