<?php

namespace JMPC\PetFriends\ProtectorsBundle;

use Symfony\Component\HttpKernel\Bundle\Bundle;

class JMPCPetFriendsProtectorsBundle extends Bundle
{
    
	//En esta llamada asociamos FOSUserBundle con nuestro bundle
	//para poder extender/sobreescribir
	//vistas, controladores y entidades de FOSUserBundle
    public function getParent() {
        return 'FOSUserBundle';
    }
}
