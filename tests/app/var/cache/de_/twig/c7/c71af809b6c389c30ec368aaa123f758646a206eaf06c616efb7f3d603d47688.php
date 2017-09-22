<?php

/* node_modules/json-schema/draft-03/examples/card */
class __TwigTemplate_4c7e29352cb821da013f97042fbc795ffdf765c7d40464165ecccca5ecdf0f36 extends Twig_Template
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
        $__internal_3a8c739a8f120751974d7beebf2ee773bb7f9603dd8f9d9273dba46b64efdb7a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3a8c739a8f120751974d7beebf2ee773bb7f9603dd8f9d9273dba46b64efdb7a->enter($__internal_3a8c739a8f120751974d7beebf2ee773bb7f9603dd8f9d9273dba46b64efdb7a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/json-schema/draft-03/examples/card"));

        // line 1
        echo "{
   \"description\":\"A representation of a person, company, organization, or place\",
   \"type\":\"object\",
   \"properties\":{
      \"fn\":{
         \"description\":\"Formatted Name\",
         \"type\":\"string\"
      },
      \"familyName\":{
         \"type\":\"string\",
         \"required\":true
      },
      \"givenName\":{
         \"type\":\"string\",
         \"required\":true
      },
      \"additionalName\":{
         \"type\":\"array\",
         \"items\":{
            \"type\":\"string\"
         }
      },
      \"honorificPrefix\":{
         \"type\":\"array\",
         \"items\":{
            \"type\":\"string\"
         }
      },
      \"honorificSuffix\":{
         \"type\":\"array\",
         \"items\":{
            \"type\":\"string\"
         }
      },
      \"nickname\":{
         \"type\":\"string\"
      },
      \"url\":{
         \"type\":\"string\",
         \"format\":\"url\"
      },
      \"email\":{
         \"type\":\"object\",
         \"properties\":{
            \"type\":{
               \"type\":\"string\"
            },
            \"value\":{
               \"type\":\"string\",
               \"format\":\"email\"
            }
         }
      },
      \"tel\":{
         \"type\":\"object\",
         \"properties\":{
            \"type\":{
               \"type\":\"string\"
            },
            \"value\":{
               \"type\":\"string\",
               \"format\":\"phone\"
            }
         }
      },
      \"adr\":{\"\$ref\" : \"http://json-schema.org/address\"},
      \"geo\":{\"\$ref\" : \"http://json-schema.org/geo\"},
      \"tz\":{
         \"type\":\"string\"
      },
      \"photo\":{
         \"format\":\"image\",
         \"type\":\"string\"
      },
      \"logo\":{
         \"format\":\"image\",
         \"type\":\"string\"
      },
      \"sound\":{
         \"format\":\"attachment\",
         \"type\":\"string\"
      },
      \"bday\":{
         \"type\":\"string\",
         \"format\":\"date\"
      },
      \"title\":{
         \"type\":\"string\"
      },
      \"role\":{
         \"type\":\"string\"
      },
      \"org\":{
         \"type\":\"object\",
         \"properties\":{
            \"organizationName\":{
               \"type\":\"string\"
            },
            \"organizationUnit\":{
               \"type\":\"string\"
            }
         }
      }
   }
}";
        
        $__internal_3a8c739a8f120751974d7beebf2ee773bb7f9603dd8f9d9273dba46b64efdb7a->leave($__internal_3a8c739a8f120751974d7beebf2ee773bb7f9603dd8f9d9273dba46b64efdb7a_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/json-schema/draft-03/examples/card";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{
   \"description\":\"A representation of a person, company, organization, or place\",
   \"type\":\"object\",
   \"properties\":{
      \"fn\":{
         \"description\":\"Formatted Name\",
         \"type\":\"string\"
      },
      \"familyName\":{
         \"type\":\"string\",
         \"required\":true
      },
      \"givenName\":{
         \"type\":\"string\",
         \"required\":true
      },
      \"additionalName\":{
         \"type\":\"array\",
         \"items\":{
            \"type\":\"string\"
         }
      },
      \"honorificPrefix\":{
         \"type\":\"array\",
         \"items\":{
            \"type\":\"string\"
         }
      },
      \"honorificSuffix\":{
         \"type\":\"array\",
         \"items\":{
            \"type\":\"string\"
         }
      },
      \"nickname\":{
         \"type\":\"string\"
      },
      \"url\":{
         \"type\":\"string\",
         \"format\":\"url\"
      },
      \"email\":{
         \"type\":\"object\",
         \"properties\":{
            \"type\":{
               \"type\":\"string\"
            },
            \"value\":{
               \"type\":\"string\",
               \"format\":\"email\"
            }
         }
      },
      \"tel\":{
         \"type\":\"object\",
         \"properties\":{
            \"type\":{
               \"type\":\"string\"
            },
            \"value\":{
               \"type\":\"string\",
               \"format\":\"phone\"
            }
         }
      },
      \"adr\":{\"\$ref\" : \"http://json-schema.org/address\"},
      \"geo\":{\"\$ref\" : \"http://json-schema.org/geo\"},
      \"tz\":{
         \"type\":\"string\"
      },
      \"photo\":{
         \"format\":\"image\",
         \"type\":\"string\"
      },
      \"logo\":{
         \"format\":\"image\",
         \"type\":\"string\"
      },
      \"sound\":{
         \"format\":\"attachment\",
         \"type\":\"string\"
      },
      \"bday\":{
         \"type\":\"string\",
         \"format\":\"date\"
      },
      \"title\":{
         \"type\":\"string\"
      },
      \"role\":{
         \"type\":\"string\"
      },
      \"org\":{
         \"type\":\"object\",
         \"properties\":{
            \"organizationName\":{
               \"type\":\"string\"
            },
            \"organizationUnit\":{
               \"type\":\"string\"
            }
         }
      }
   }
}", "node_modules/json-schema/draft-03/examples/card", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/json-schema/draft-03/examples/card");
    }
}
