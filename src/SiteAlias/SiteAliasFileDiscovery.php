<?php
namespace Drush\SiteAlias;

/**
 * Discover alias files named:
 *
 * - sitename.site.yml: contains multiple aliases, one for each of the
 *     environments of 'sitename'.
 *
 * Drush aliases that contain both a site name and an environment
 * (e.g. @site.env) will cause Drush to find the file named after
 * the respective site name and retrieve the specified environment
 * record.
 *
 * Sites may also define a special alias file self.site.yml, which
 * may be stored in the drush/sites directory relative to either
 * the Drupal root or the Composer root of the site. The environments
 * in this file will be merged with the available environments for
 * the element @self, however it is defined.
 */
class SiteAliasFileDiscovery extends \Consolidation\SiteAlias\SiteAliasFileDiscovery
{
}
