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

class ArchievenPlugin extends FancyResearchLinksClass {

  static function getPluginName() {
    return 'Archieven.nl';
  }

  static function getSearchArea() {
    return 'NLD';
  }

  static function createLink($name) {
    return 'http://www.archieven.nl/nl/zoeken?mivast=0&mizig=310&miadt=0&milang=nl&misort=dt|asc&miview=tbl&mip3=' . $name['surn'] . '&mip2=' . $name['prefix'] . '&mip1=' . $name['givn'];
  }

}
