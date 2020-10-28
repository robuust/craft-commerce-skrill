<?php

namespace robuust\skrill;

use craft\commerce\services\Gateways;
use craft\events\RegisterComponentTypesEvent;
use robuust\skrill\gateways\Gateway;
use yii\base\Event;

/**
 * Skrill integration plugin.
 */
class Plugin extends \craft\base\Plugin
{
    /**
     * {@inheritdoc}
     */
    public function init()
    {
        parent::init();

        Event::on(Gateways::class, Gateways::EVENT_REGISTER_GATEWAY_TYPES, function (RegisterComponentTypesEvent $event) {
            $event->types[] = Gateway::class;
        });
    }
}
