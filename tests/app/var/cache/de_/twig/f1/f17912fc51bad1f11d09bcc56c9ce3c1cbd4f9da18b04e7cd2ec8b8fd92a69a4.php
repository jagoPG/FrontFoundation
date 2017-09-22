<?php

/* node_modules/block-stream/README.md */
class __TwigTemplate_3ce1c5954cc1a895bd4176956c7a3dbc5eb77bc8b95a9087a073b076d70f5227 extends Twig_Template
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
        $__internal_a63f419255e80e50a572d42dfc2ee96158a71150b64e24944e8f5d7bc1cced4a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a63f419255e80e50a572d42dfc2ee96158a71150b64e24944e8f5d7bc1cced4a->enter($__internal_a63f419255e80e50a572d42dfc2ee96158a71150b64e24944e8f5d7bc1cced4a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/block-stream/README.md"));

        // line 1
        echo "# block-stream

A stream of blocks.

Write data into it, and it'll output data in buffer blocks the size you
specify, padding with zeroes if necessary.

```javascript
var block = new BlockStream(512)
fs.createReadStream(\"some-file\").pipe(block)
block.pipe(fs.createWriteStream(\"block-file\"))
```

When `.end()` or `.flush()` is called, it'll pad the block with zeroes.
";
        
        $__internal_a63f419255e80e50a572d42dfc2ee96158a71150b64e24944e8f5d7bc1cced4a->leave($__internal_a63f419255e80e50a572d42dfc2ee96158a71150b64e24944e8f5d7bc1cced4a_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/block-stream/README.md";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("# block-stream

A stream of blocks.

Write data into it, and it'll output data in buffer blocks the size you
specify, padding with zeroes if necessary.

```javascript
var block = new BlockStream(512)
fs.createReadStream(\"some-file\").pipe(block)
block.pipe(fs.createWriteStream(\"block-file\"))
```

When `.end()` or `.flush()` is called, it'll pad the block with zeroes.
", "node_modules/block-stream/README.md", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/block-stream/README.md");
    }
}
