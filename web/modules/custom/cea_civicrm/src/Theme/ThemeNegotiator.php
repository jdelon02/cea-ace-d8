<?php
/**
* @file
* Contains \Drupal\cea_civicrm\Theme\ThemeNegotiator
*/
namespace Drupal\cea_civicrm\Theme;

use Drupal\Core\Routing\RouteMatchInterface;
use Drupal\Core\Theme\ThemeNegotiatorInterface;

class ThemeNegotiator implements ThemeNegotiatorInterface {
  
  /**
  * @param RouteMatchInterface $route_match
  * @return bool
  */
  public function applies(RouteMatchInterface $route_match)
  {
    return $this->negotiateRoute($route_match) ? true : false;
  }
  
  /**
  * @param RouteMatchInterface $route_match
  * @return null|string
  */
  public function determineActiveTheme(RouteMatchInterface $route_match)
  {
    return $this->negotiateRoute($route_match) ?: null;
  }
  
  /**
  * Function that does all of the work in selecting a theme
  * @param RouteMatchInterface $route_match
  * @return bool|string
  */
  private function negotiateRoute(RouteMatchInterface $route_match)
  {
    if (strpos($route_match->getRouteName(), 'civicrm.') !== FALSE && $route_match->getRouteName() != 'civicrm.civicrm_event_register') {
      \Drupal::logger('cea_civicrm')->notice($route_match->getRouteName());
      return 'adminimal_bot';
    }
    
    return false;
  }
  
}