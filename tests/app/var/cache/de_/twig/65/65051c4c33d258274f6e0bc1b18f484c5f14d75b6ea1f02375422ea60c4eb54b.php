<?php

/* node_modules/nan/doc/callback.md */
class __TwigTemplate_3d5b472f5e7f714fe95c2d18e19e17b01a967d8bc97b0a26b03d28d05fefa584 extends Twig_Template
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
        $__internal_2147ce3d80f7a7ea47a98214b2e06b396eee26ec2bf2e08616a47269efedd133 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2147ce3d80f7a7ea47a98214b2e06b396eee26ec2bf2e08616a47269efedd133->enter($__internal_2147ce3d80f7a7ea47a98214b2e06b396eee26ec2bf2e08616a47269efedd133_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/nan/doc/callback.md"));

        // line 1
        echo "## Nan::Callback

`Nan::Callback` makes it easier to use `v8::Function` handles as callbacks. A class that wraps a `v8::Function` handle, protecting it from garbage collection and making it particularly useful for storage and use across asynchronous execution.

 - <a href=\"#api_nan_callback\"><b><code>Nan::Callback</code></b></a>

<a name=\"api_nan_callback\"></a>
### Nan::Callback

```c++
class Callback {
 public:
  Callback();

  explicit Callback(const v8::Local<v8::Function> &fn);

  ~Callback();

  bool operator==(const Callback &other) const;

  bool operator!=(const Callback &other) const;

  v8::Local<v8::Function> operator*() const;

  v8::Local<v8::Value> operator()(v8::Local<v8::Object> target,
                                  int argc = 0,
                                  v8::Local<v8::Value> argv[] = 0) const;

  v8::Local<v8::Value> operator()(int argc = 0,
                                  v8::Local<v8::Value> argv[] = 0) const;

  void SetFunction(const v8::Local<v8::Function> &fn);

  v8::Local<v8::Function> GetFunction() const;

  bool IsEmpty() const;

  void Reset(const v8::Local<v8::Function> &fn);

  void Reset();

  v8::Local<v8::Value> Call(v8::Local<v8::Object> target,
                            int argc,
                            v8::Local<v8::Value> argv[]) const;

  v8::Local<v8::Value> Call(int argc, v8::Local<v8::Value> argv[]) const;
};
```

Example usage:

```c++
v8::Local<v8::Function> function;
Nan::Callback callback(function);
callback.Call(0, 0);
```
";
        
        $__internal_2147ce3d80f7a7ea47a98214b2e06b396eee26ec2bf2e08616a47269efedd133->leave($__internal_2147ce3d80f7a7ea47a98214b2e06b396eee26ec2bf2e08616a47269efedd133_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/nan/doc/callback.md";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("## Nan::Callback

`Nan::Callback` makes it easier to use `v8::Function` handles as callbacks. A class that wraps a `v8::Function` handle, protecting it from garbage collection and making it particularly useful for storage and use across asynchronous execution.

 - <a href=\"#api_nan_callback\"><b><code>Nan::Callback</code></b></a>

<a name=\"api_nan_callback\"></a>
### Nan::Callback

```c++
class Callback {
 public:
  Callback();

  explicit Callback(const v8::Local<v8::Function> &fn);

  ~Callback();

  bool operator==(const Callback &other) const;

  bool operator!=(const Callback &other) const;

  v8::Local<v8::Function> operator*() const;

  v8::Local<v8::Value> operator()(v8::Local<v8::Object> target,
                                  int argc = 0,
                                  v8::Local<v8::Value> argv[] = 0) const;

  v8::Local<v8::Value> operator()(int argc = 0,
                                  v8::Local<v8::Value> argv[] = 0) const;

  void SetFunction(const v8::Local<v8::Function> &fn);

  v8::Local<v8::Function> GetFunction() const;

  bool IsEmpty() const;

  void Reset(const v8::Local<v8::Function> &fn);

  void Reset();

  v8::Local<v8::Value> Call(v8::Local<v8::Object> target,
                            int argc,
                            v8::Local<v8::Value> argv[]) const;

  v8::Local<v8::Value> Call(int argc, v8::Local<v8::Value> argv[]) const;
};
```

Example usage:

```c++
v8::Local<v8::Function> function;
Nan::Callback callback(function);
callback.Call(0, 0);
```
", "node_modules/nan/doc/callback.md", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/nan/doc/callback.md");
    }
}
