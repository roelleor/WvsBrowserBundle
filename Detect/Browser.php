<?php

namespace Wvs\BrowserBundle\Detect;

class Browser extends \Browser
{
    const DEVICE_TYPE_DESKTOP = 'Desktop';
    const DEVICE_TYPE_MOBILE = 'Mobile';
    const DEVICE_TYPE_TABLET = 'Tablet';

    public function getDeviceType()
    {
        if ($this->isMobile()) {
            return self::DEVICE_TYPE_MOBILE;
        } elseif ($this->isTablet()) {
            return self::DEVICE_TYPE_TABLET;
        }

        return self::DEVICE_TYPE_DESKTOP;
    }

    public function isTouchDevice()
    {
        return ($this->isMobile() || $this->isTablet());
    }
}
