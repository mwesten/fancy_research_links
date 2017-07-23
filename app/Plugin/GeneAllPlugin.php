<?php
/**
 * webtrees: online genealogy
 * Copyright (C) 2017 webtrees development team
 * Copyright (C) 2017 JustCarmen
 * This program is free software: you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation, either version 3 of the License, or
 * (at your option) any later version.
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the
 * GNU General Public License for more details.
 * You should have received a copy of the GNU General Public License
 * along with this program. If not, see <http://www.gnu.org/licenses/>.
 */
namespace JustCarmen\WebtreesAddOns\FancyResearchLinks\Plugin;

use JustCarmen\WebtreesAddOns\FancyResearchLinks\FancyResearchLinksClass;

class GeneAllPlugin extends FancyResearchLinksClass {

  static function getPluginName() {
    return 'Geneall($)';
  }

  static function getSearchArea() {
    return 'INT';
  }

  static function createLink($name) {
    $languages = [
        'de'    => 'de',
        'en_GB' => 'en',
        'en_US' => 'en',
        'fr'    => 'fr',
        'it'    => 'it',
        'es'    => 'es',
        'pt'    => 'pt',
        'pt_BR' => 'pt',
    ];

    if (isset($languages[WT_LOCALE])) {
      $language = $languages[WT_LOCALE];
    } else {
      $language = $languages['en_US'];
    }

    return 'http://www.geneall.net/' . $language . '/search/?s=' . $name['fullname'] . '&t=p';
  }

  static function encodePlus() {
    return true;
  }

}
