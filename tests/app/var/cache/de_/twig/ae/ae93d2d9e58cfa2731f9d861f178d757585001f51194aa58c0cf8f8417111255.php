<?php

/* node_modules/nan/nan_converters.h */
class __TwigTemplate_de29fa68e4daa16d1a32ee8ef7b77ac89871659095b66a77822e77f57eb62aaf extends Twig_Template
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
        $__internal_01ed21540577a1a506bfe53b4c435af8fc07df92064a8755ab88cfad3e365b83 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_01ed21540577a1a506bfe53b4c435af8fc07df92064a8755ab88cfad3e365b83->enter($__internal_01ed21540577a1a506bfe53b4c435af8fc07df92064a8755ab88cfad3e365b83_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/nan/nan_converters.h"));

        // line 1
        echo "/*********************************************************************
 * NAN - Native Abstractions for Node.js
 *
 * Copyright (c) 2017 NAN contributors
 *
 * MIT License <https://github.com/nodejs/nan/blob/master/LICENSE.md>
 ********************************************************************/

#ifndef NAN_CONVERTERS_H_
#define NAN_CONVERTERS_H_

namespace imp {
template<typename T> struct ToFactoryBase {
  typedef MaybeLocal<T> return_t;
};
template<typename T> struct ValueFactoryBase { typedef Maybe<T> return_t; };

template<typename T> struct ToFactory;

template<>
struct ToFactory<v8::Function> : ToFactoryBase<v8::Function> {
  static inline return_t convert(v8::Local<v8::Value> val) {
    if (val.IsEmpty() || !val->IsFunction()) return MaybeLocal<v8::Function>();
    return MaybeLocal<v8::Function>(val.As<v8::Function>());
  }
};

#define X(TYPE)                                                                \\
    template<>                                                                 \\
    struct ToFactory<v8::TYPE> : ToFactoryBase<v8::TYPE> {                     \\
      static inline return_t convert(v8::Local<v8::Value> val);                \\
    };

X(Boolean)
X(Number)
X(String)
X(Object)
X(Integer)
X(Uint32)
X(Int32)

#undef X

#define X(TYPE)                                                                \\
    template<>                                                                 \\
    struct ToFactory<TYPE> : ValueFactoryBase<TYPE> {                          \\
      static inline return_t convert(v8::Local<v8::Value> val);                \\
    };

X(bool)
X(double)
X(int64_t)
X(uint32_t)
X(int32_t)

#undef X
}  // end of namespace imp

template<typename T>
inline
typename imp::ToFactory<T>::return_t To(v8::Local<v8::Value> val) {
  return imp::ToFactory<T>::convert(val);
}

#if defined(V8_MAJOR_VERSION) && (V8_MAJOR_VERSION > 4 ||                      \\
  (V8_MAJOR_VERSION == 4 && defined(V8_MINOR_VERSION) && V8_MINOR_VERSION >= 3))
# include \"nan_converters_43_inl.h\"
#else
# include \"nan_converters_pre_43_inl.h\"
#endif

#endif  // NAN_CONVERTERS_H_
";
        
        $__internal_01ed21540577a1a506bfe53b4c435af8fc07df92064a8755ab88cfad3e365b83->leave($__internal_01ed21540577a1a506bfe53b4c435af8fc07df92064a8755ab88cfad3e365b83_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/nan/nan_converters.h";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("/*********************************************************************
 * NAN - Native Abstractions for Node.js
 *
 * Copyright (c) 2017 NAN contributors
 *
 * MIT License <https://github.com/nodejs/nan/blob/master/LICENSE.md>
 ********************************************************************/

#ifndef NAN_CONVERTERS_H_
#define NAN_CONVERTERS_H_

namespace imp {
template<typename T> struct ToFactoryBase {
  typedef MaybeLocal<T> return_t;
};
template<typename T> struct ValueFactoryBase { typedef Maybe<T> return_t; };

template<typename T> struct ToFactory;

template<>
struct ToFactory<v8::Function> : ToFactoryBase<v8::Function> {
  static inline return_t convert(v8::Local<v8::Value> val) {
    if (val.IsEmpty() || !val->IsFunction()) return MaybeLocal<v8::Function>();
    return MaybeLocal<v8::Function>(val.As<v8::Function>());
  }
};

#define X(TYPE)                                                                \\
    template<>                                                                 \\
    struct ToFactory<v8::TYPE> : ToFactoryBase<v8::TYPE> {                     \\
      static inline return_t convert(v8::Local<v8::Value> val);                \\
    };

X(Boolean)
X(Number)
X(String)
X(Object)
X(Integer)
X(Uint32)
X(Int32)

#undef X

#define X(TYPE)                                                                \\
    template<>                                                                 \\
    struct ToFactory<TYPE> : ValueFactoryBase<TYPE> {                          \\
      static inline return_t convert(v8::Local<v8::Value> val);                \\
    };

X(bool)
X(double)
X(int64_t)
X(uint32_t)
X(int32_t)

#undef X
}  // end of namespace imp

template<typename T>
inline
typename imp::ToFactory<T>::return_t To(v8::Local<v8::Value> val) {
  return imp::ToFactory<T>::convert(val);
}

#if defined(V8_MAJOR_VERSION) && (V8_MAJOR_VERSION > 4 ||                      \\
  (V8_MAJOR_VERSION == 4 && defined(V8_MINOR_VERSION) && V8_MINOR_VERSION >= 3))
# include \"nan_converters_43_inl.h\"
#else
# include \"nan_converters_pre_43_inl.h\"
#endif

#endif  // NAN_CONVERTERS_H_
", "node_modules/nan/nan_converters.h", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/nan/nan_converters.h");
    }
}
