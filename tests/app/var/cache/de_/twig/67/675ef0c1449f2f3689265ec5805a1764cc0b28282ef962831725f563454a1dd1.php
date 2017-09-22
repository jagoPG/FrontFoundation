<?php

/* node_modules/fsevents/node_modules/block-stream/README.md */
class __TwigTemplate_9db409bb6c7fda061806ddbdecd1eb56b8d2cc63ce79a457e534844d7c30daba extends Twig_Template
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
        $__internal_c9c1e3b83ec576217b9aaa6877c4ac13fe4ab78332b2b92d6ac59e22bf402398 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c9c1e3b83ec576217b9aaa6877c4ac13fe4ab78332b2b92d6ac59e22bf402398->enter($__internal_c9c1e3b83ec576217b9aaa6877c4ac13fe4ab78332b2b92d6ac59e22bf402398_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/fsevents/node_modules/block-stream/README.md"));

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
        
        $__internal_c9c1e3b83ec576217b9aaa6877c4ac13fe4ab78332b2b92d6ac59e22bf402398->leave($__internal_c9c1e3b83ec576217b9aaa6877c4ac13fe4ab78332b2b92d6ac59e22bf402398_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/fsevents/node_modules/block-stream/README.md";
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
", "node_modules/fsevents/node_modules/block-stream/README.md", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/fsevents/node_modules/block-stream/README.md");
    }
}
