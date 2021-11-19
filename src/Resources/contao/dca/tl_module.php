<?php

/**
 * This file is part of richardhj/contao-email-token-login.
 *
 * Copyright (c) 2018-2018 Richard Henkenjohann
 *
 * @package   richardhj/contao-email-token-login
 * @author    Richard Henkenjohann <richardhenkenjohann@googlemail.com>
 * @copyright 2018-2018 Richard Henkenjohann
 * @license   https://github.com/richardhj/contao-email-token-login/blob/master/LICENSE
 */


$GLOBALS['TL_DCA']['tl_module']['palettes']['token_login'] = str_replace('autologin','nc_notification,login_token_expires', $GLOBALS['TL_DCA']['tl_module']['palettes']['login']);

$GLOBALS['TL_DCA']['tl_module']['fields']['login_token_expires'] = [
    'inputType' => 'text',
    'exclude' => true,
    'eval' => ['tl_class' => 'w50 clr', 'placeholder' => '+2 hours'],
    'sql' => "varchar(16) NOT NULL default ''"
];
