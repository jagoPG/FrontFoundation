<?php

/* node_modules/nan/doc/string_bytes.md */
class __TwigTemplate_ca43594a8b52e2cd4fc339ff89582b3a9b148e77d6100445187fff05cc8035d2 extends Twig_Template
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
        $__internal_112d9d78c8db9c521a3de893e8a0dca6f9a4ce62abbfdf6c1fdb2cc37d55fe30 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_112d9d78c8db9c521a3de893e8a0dca6f9a4ce62abbfdf6c1fdb2cc37d55fe30->enter($__internal_112d9d78c8db9c521a3de893e8a0dca6f9a4ce62abbfdf6c1fdb2cc37d55fe30_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/nan/doc/string_bytes.md"));

        // line 1
        echo "## Strings & Bytes

Miscellaneous string & byte encoding and decoding functionality provided for compatibility across supported versions of V8 and Node. Implemented by NAN to ensure that all encoding types are supported, even for older versions of Node where they are missing.

 - <a href=\"#api_nan_encoding\"><b><code>Nan::Encoding</code></b></a>
 - <a href=\"#api_nan_encode\"><b><code>Nan::Encode()</code></b></a>
 - <a href=\"#api_nan_decode_bytes\"><b><code>Nan::DecodeBytes()</code></b></a>
 - <a href=\"#api_nan_decode_write\"><b><code>Nan::DecodeWrite()</code></b></a>


<a name=\"api_nan_encoding\"></a>
### Nan::Encoding

An enum representing the supported encoding types. A copy of `node::encoding` that is consistent across versions of Node.

Definition:

```c++
enum Nan::Encoding { ASCII, UTF8, BASE64, UCS2, BINARY, HEX, BUFFER }
```


<a name=\"api_nan_encode\"></a>
### Nan::Encode()

A wrapper around `node::Encode()` that provides a consistent implementation across supported versions of Node.

Signature:

```c++
v8::Local<v8::Value> Nan::Encode(const void *buf,
                                 size_t len,
                                 enum Nan::Encoding encoding = BINARY);
```


<a name=\"api_nan_decode_bytes\"></a>
### Nan::DecodeBytes()

A wrapper around `node::DecodeBytes()` that provides a consistent implementation across supported versions of Node.

Signature:

```c++
ssize_t Nan::DecodeBytes(v8::Local<v8::Value> val,
                         enum Nan::Encoding encoding = BINARY);
```


<a name=\"api_nan_decode_write\"></a>
### Nan::DecodeWrite()

A wrapper around `node::DecodeWrite()` that provides a consistent implementation across supported versions of Node.

Signature:

```c++
ssize_t Nan::DecodeWrite(char *buf,
                         size_t len,
                         v8::Local<v8::Value> val,
                         enum Nan::Encoding encoding = BINARY);
```
";
        
        $__internal_112d9d78c8db9c521a3de893e8a0dca6f9a4ce62abbfdf6c1fdb2cc37d55fe30->leave($__internal_112d9d78c8db9c521a3de893e8a0dca6f9a4ce62abbfdf6c1fdb2cc37d55fe30_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/nan/doc/string_bytes.md";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("## Strings & Bytes

Miscellaneous string & byte encoding and decoding functionality provided for compatibility across supported versions of V8 and Node. Implemented by NAN to ensure that all encoding types are supported, even for older versions of Node where they are missing.

 - <a href=\"#api_nan_encoding\"><b><code>Nan::Encoding</code></b></a>
 - <a href=\"#api_nan_encode\"><b><code>Nan::Encode()</code></b></a>
 - <a href=\"#api_nan_decode_bytes\"><b><code>Nan::DecodeBytes()</code></b></a>
 - <a href=\"#api_nan_decode_write\"><b><code>Nan::DecodeWrite()</code></b></a>


<a name=\"api_nan_encoding\"></a>
### Nan::Encoding

An enum representing the supported encoding types. A copy of `node::encoding` that is consistent across versions of Node.

Definition:

```c++
enum Nan::Encoding { ASCII, UTF8, BASE64, UCS2, BINARY, HEX, BUFFER }
```


<a name=\"api_nan_encode\"></a>
### Nan::Encode()

A wrapper around `node::Encode()` that provides a consistent implementation across supported versions of Node.

Signature:

```c++
v8::Local<v8::Value> Nan::Encode(const void *buf,
                                 size_t len,
                                 enum Nan::Encoding encoding = BINARY);
```


<a name=\"api_nan_decode_bytes\"></a>
### Nan::DecodeBytes()

A wrapper around `node::DecodeBytes()` that provides a consistent implementation across supported versions of Node.

Signature:

```c++
ssize_t Nan::DecodeBytes(v8::Local<v8::Value> val,
                         enum Nan::Encoding encoding = BINARY);
```


<a name=\"api_nan_decode_write\"></a>
### Nan::DecodeWrite()

A wrapper around `node::DecodeWrite()` that provides a consistent implementation across supported versions of Node.

Signature:

```c++
ssize_t Nan::DecodeWrite(char *buf,
                         size_t len,
                         v8::Local<v8::Value> val,
                         enum Nan::Encoding encoding = BINARY);
```
", "node_modules/nan/doc/string_bytes.md", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/nan/doc/string_bytes.md");
    }
}
