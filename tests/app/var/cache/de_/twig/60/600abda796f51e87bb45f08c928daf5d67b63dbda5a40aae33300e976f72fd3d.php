<?php

/* node_modules/nan/doc/buffers.md */
class __TwigTemplate_ddf5e71fe8649e7040cd4eba168866bc8b92bebe58f8143b21ad98c2ba237ef0 extends Twig_Template
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
        $__internal_7e04d1d8bec0451135c91e50ed64d6750e236ce3e884b8c4b43305b4316c128a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7e04d1d8bec0451135c91e50ed64d6750e236ce3e884b8c4b43305b4316c128a->enter($__internal_7e04d1d8bec0451135c91e50ed64d6750e236ce3e884b8c4b43305b4316c128a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/nan/doc/buffers.md"));

        // line 1
        echo "## Buffers

NAN's `node::Buffer` helpers exist as the API has changed across supported Node versions. Use these methods to ensure compatibility.

 - <a href=\"#api_nan_new_buffer\"><b><code>Nan::NewBuffer()</code></b></a>
 - <a href=\"#api_nan_copy_buffer\"><b><code>Nan::CopyBuffer()</code></b></a>
 - <a href=\"#api_nan_free_callback\"><b><code>Nan::FreeCallback()</code></b></a>

<a name=\"api_nan_new_buffer\"></a>
### Nan::NewBuffer()

Allocate a new `node::Buffer` object with the specified size and optional data. Calls `node::Buffer::New()`.

Note that when creating a `Buffer` using `Nan::NewBuffer()` and an existing `char*`, it is assumed that the ownership of the pointer is being transferred to the new `Buffer` for management.
When a `node::Buffer` instance is garbage collected and a `FreeCallback` has not been specified, `data` will be disposed of via a call to `free()`.
You _must not_ free the memory space manually once you have created a `Buffer` in this way.

Signature:

```c++
Nan::MaybeLocal<v8::Object> Nan::NewBuffer(uint32_t size)
Nan::MaybeLocal<v8::Object> Nan::NewBuffer(char* data, uint32_t size)
Nan::MaybeLocal<v8::Object> Nan::NewBuffer(char *data,
                                           size_t length,
                                           Nan::FreeCallback callback,
                                           void *hint)
```


<a name=\"api_nan_copy_buffer\"></a>
### Nan::CopyBuffer()

Similar to [`Nan::NewBuffer()`](#api_nan_new_buffer) except that an implicit memcpy will occur within Node. Calls `node::Buffer::Copy()`.

Management of the `char*` is left to the user, you should manually free the memory space if necessary as the new `Buffer` will have its own copy.

Signature:

```c++
Nan::MaybeLocal<v8::Object> Nan::CopyBuffer(const char *data, uint32_t size)
```


<a name=\"api_nan_free_callback\"></a>
### Nan::FreeCallback()

A free callback that can be provided to [`Nan::NewBuffer()`](#api_nan_new_buffer).
The supplied callback will be invoked when the `Buffer` undergoes garbage collection.

Signature:

```c++
typedef void (*FreeCallback)(char *data, void *hint);
```
";
        
        $__internal_7e04d1d8bec0451135c91e50ed64d6750e236ce3e884b8c4b43305b4316c128a->leave($__internal_7e04d1d8bec0451135c91e50ed64d6750e236ce3e884b8c4b43305b4316c128a_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/nan/doc/buffers.md";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("## Buffers

NAN's `node::Buffer` helpers exist as the API has changed across supported Node versions. Use these methods to ensure compatibility.

 - <a href=\"#api_nan_new_buffer\"><b><code>Nan::NewBuffer()</code></b></a>
 - <a href=\"#api_nan_copy_buffer\"><b><code>Nan::CopyBuffer()</code></b></a>
 - <a href=\"#api_nan_free_callback\"><b><code>Nan::FreeCallback()</code></b></a>

<a name=\"api_nan_new_buffer\"></a>
### Nan::NewBuffer()

Allocate a new `node::Buffer` object with the specified size and optional data. Calls `node::Buffer::New()`.

Note that when creating a `Buffer` using `Nan::NewBuffer()` and an existing `char*`, it is assumed that the ownership of the pointer is being transferred to the new `Buffer` for management.
When a `node::Buffer` instance is garbage collected and a `FreeCallback` has not been specified, `data` will be disposed of via a call to `free()`.
You _must not_ free the memory space manually once you have created a `Buffer` in this way.

Signature:

```c++
Nan::MaybeLocal<v8::Object> Nan::NewBuffer(uint32_t size)
Nan::MaybeLocal<v8::Object> Nan::NewBuffer(char* data, uint32_t size)
Nan::MaybeLocal<v8::Object> Nan::NewBuffer(char *data,
                                           size_t length,
                                           Nan::FreeCallback callback,
                                           void *hint)
```


<a name=\"api_nan_copy_buffer\"></a>
### Nan::CopyBuffer()

Similar to [`Nan::NewBuffer()`](#api_nan_new_buffer) except that an implicit memcpy will occur within Node. Calls `node::Buffer::Copy()`.

Management of the `char*` is left to the user, you should manually free the memory space if necessary as the new `Buffer` will have its own copy.

Signature:

```c++
Nan::MaybeLocal<v8::Object> Nan::CopyBuffer(const char *data, uint32_t size)
```


<a name=\"api_nan_free_callback\"></a>
### Nan::FreeCallback()

A free callback that can be provided to [`Nan::NewBuffer()`](#api_nan_new_buffer).
The supplied callback will be invoked when the `Buffer` undergoes garbage collection.

Signature:

```c++
typedef void (*FreeCallback)(char *data, void *hint);
```
", "node_modules/nan/doc/buffers.md", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/nan/doc/buffers.md");
    }
}
