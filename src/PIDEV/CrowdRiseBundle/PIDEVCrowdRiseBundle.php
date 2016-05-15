<?php

namespace PIDEV\CrowdRiseBundle;

use Symfony\Component\HttpKernel\Bundle\Bundle;

class PIDEVCrowdRiseBundle extends Bundle {

    public function getParent() {
        return 'FOSUserBundle';
    }

}
