<?php return unserialize('a:4:{i:0;O:27:"Doctrine\\ORM\\Mapping\\Column":9:{s:4:"name";s:5:"email";s:4:"type";s:6:"string";s:6:"length";i:255;s:9:"precision";i:0;s:5:"scale";i:0;s:6:"unique";b:0;s:8:"nullable";b:0;s:7:"options";a:0:{}s:16:"columnDefinition";N;}i:1;O:47:"Symfony\\Component\\Validator\\Constraints\\NotNull":2:{s:7:"message";s:38:"*Debe especificar un email de contacto";s:6:"groups";a:1:{i:0;s:7:"Default";}}i:2;O:45:"Symfony\\Component\\Validator\\Constraints\\Regex":5:{s:7:"message";s:35:"*El email introducido no es válido";s:7:"pattern";s:53:"/^([a-zA-Z0-9._%-]+@[a-zA-Z0-9.-]+\\.[a-zA-Z]{2,4})*$/";s:11:"htmlPattern";N;s:5:"match";b:1;s:6:"groups";a:1:{i:0;s:7:"Default";}}i:3;O:45:"Symfony\\Component\\Validator\\Constraints\\Email":5:{s:7:"message";s:53:"*El email \'{{ value }}\' no es una dirección válida.";s:7:"checkMX";b:1;s:9:"checkHost";b:0;s:6:"strict";N;s:6:"groups";a:1:{i:0;s:7:"Default";}}}');