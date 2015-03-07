<?php

/* *****************************************************************************
 * Copyright (C) 2014 Emmanuel Papin <manupap01@gmail.com>
 *
 * Authors: Emmanuel Papin <manupap01@gmail.com>
 *
 * This program is free software; you can redistribute it and/or modify it
 * under the terms of the GNU Lesser General Public License as published by
 * the Free Software Foundation; either version 2.1 of the License, or
 * (at your option) any later version.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the
 * GNU Lesser General Public License for more details.
 *
 * You should have received a copy of the GNU Lesser General Public License
 * along with this program; if not, write to the Free Software Foundation,
 * Inc., 51 Franklin Street, Fifth Floor, Boston MA 02110-1301, USA.
 * ****************************************************************************/

$pluginOptions = array(
    'MinConfidence' => array(
        'Type' => 'integer',
        'Name' => 'MinConfidence',
        'Min' => '0',
        'Max' => '100',
        'Value' => '0'
    ),
    'MinCharacters' => array(
        'Type' => 'integer',
        'Name' => 'MinCharacters',
        'Min' => '1',
        'Max' => '20',
        'Value' => '1'
    ),
    'MaxCharacters' => array(
        'Type' => 'integer',
        'Name' => 'MaxCharacters',
        'Min' => '1',
        'Max' => '20',
        'Value' => '20'
    )
);

?>
