<?php

/* node_modules/nan/doc/node_misc.md */
class __TwigTemplate_dd63d3726f554fd347afe37ff5d1da7a7eecd38ed2e77e8d0fa6336e38c7c773 extends Twig_Template
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
        $__internal_8e2c011ad121eff9aa65410be1041443f409f1628022a82897772eba777f5a5b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8e2c011ad121eff9aa65410be1041443f409f1628022a82897772eba777f5a5b->enter($__internal_8e2c011ad121eff9aa65410be1041443f409f1628022a82897772eba777f5a5b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/nan/doc/node_misc.md"));

        // line 1
        echo "## Miscellaneous Node Helpers

 - <a href=\"#api_nan_make_callback\"><b><code>Nan::MakeCallback()</code></b></a>
 - <a href=\"#api_nan_module_init\"><b><code>NAN_MODULE_INIT()</code></b></a>
 - <a href=\"#api_nan_export\"><b><code>Nan::Export()</code></b></a>


<a name=\"api_nan_make_callback\"></a>
### Nan::MakeCallback()

Wrappers around `node::MakeCallback()` providing a consistent API across all supported versions of Node.

Use `MakeCallback()` rather than using `v8::Function#Call()` directly in order to properly process internal Node functionality including domains, async hooks, the microtask queue, and other debugging functionality.

Signatures:

```c++
v8::Local<v8::Value> Nan::MakeCallback(v8::Local<v8::Object> target,
                                       v8::Local<v8::Function> func,
                                       int argc,
                                       v8::Local<v8::Value>* argv);
v8::Local<v8::Value> Nan::MakeCallback(v8::Local<v8::Object> target,
                                       v8::Local<v8::String> symbol,
                                       int argc,
                                       v8::Local<v8::Value>* argv);
v8::Local<v8::Value> Nan::MakeCallback(v8::Local<v8::Object> target,
                                       const char* method,
                                       int argc,
                                       v8::Local<v8::Value>* argv);
```


<a name=\"api_nan_module_init\"></a>
### NAN_MODULE_INIT()

Used to define the entry point function to a Node add-on. Creates a function with a given `name` that receives a `target` object representing the equivalent of the JavaScript `exports` object.

See example below.

<a name=\"api_nan_export\"></a>
### Nan::Export()

A simple helper to register a `v8::FunctionTemplate` from a JavaScript-accessible method (see [Methods](./methods.md)) as a property on an object. Can be used in a way similar to assigning properties to `module.exports` in JavaScript.

Signature:

```c++
void Export(v8::Local<v8::Object> target, const char *name, Nan::FunctionCallback f)
```

Also available as the shortcut `NAN_EXPORT` macro.

Example:

```c++
NAN_METHOD(Foo) {
  ...
}

NAN_MODULE_INIT(Init) {
  NAN_EXPORT(target, Foo);
}
```
";
        
        $__internal_8e2c011ad121eff9aa65410be1041443f409f1628022a82897772eba777f5a5b->leave($__internal_8e2c011ad121eff9aa65410be1041443f409f1628022a82897772eba777f5a5b_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/nan/doc/node_misc.md";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("## Miscellaneous Node Helpers

 - <a href=\"#api_nan_make_callback\"><b><code>Nan::MakeCallback()</code></b></a>
 - <a href=\"#api_nan_module_init\"><b><code>NAN_MODULE_INIT()</code></b></a>
 - <a href=\"#api_nan_export\"><b><code>Nan::Export()</code></b></a>


<a name=\"api_nan_make_callback\"></a>
### Nan::MakeCallback()

Wrappers around `node::MakeCallback()` providing a consistent API across all supported versions of Node.

Use `MakeCallback()` rather than using `v8::Function#Call()` directly in order to properly process internal Node functionality including domains, async hooks, the microtask queue, and other debugging functionality.

Signatures:

```c++
v8::Local<v8::Value> Nan::MakeCallback(v8::Local<v8::Object> target,
                                       v8::Local<v8::Function> func,
                                       int argc,
                                       v8::Local<v8::Value>* argv);
v8::Local<v8::Value> Nan::MakeCallback(v8::Local<v8::Object> target,
                                       v8::Local<v8::String> symbol,
                                       int argc,
                                       v8::Local<v8::Value>* argv);
v8::Local<v8::Value> Nan::MakeCallback(v8::Local<v8::Object> target,
                                       const char* method,
                                       int argc,
                                       v8::Local<v8::Value>* argv);
```


<a name=\"api_nan_module_init\"></a>
### NAN_MODULE_INIT()

Used to define the entry point function to a Node add-on. Creates a function with a given `name` that receives a `target` object representing the equivalent of the JavaScript `exports` object.

See example below.

<a name=\"api_nan_export\"></a>
### Nan::Export()

A simple helper to register a `v8::FunctionTemplate` from a JavaScript-accessible method (see [Methods](./methods.md)) as a property on an object. Can be used in a way similar to assigning properties to `module.exports` in JavaScript.

Signature:

```c++
void Export(v8::Local<v8::Object> target, const char *name, Nan::FunctionCallback f)
```

Also available as the shortcut `NAN_EXPORT` macro.

Example:

```c++
NAN_METHOD(Foo) {
  ...
}

NAN_MODULE_INIT(Init) {
  NAN_EXPORT(target, Foo);
}
```
", "node_modules/nan/doc/node_misc.md", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/nan/doc/node_misc.md");
    }
}
