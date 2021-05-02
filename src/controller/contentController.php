namespace Drupal\d8_custom\Controller;

use Drupal\Core\Controller\ControllerBase;

/**
 * An example controller.
 */
class contentController extends ControllerBase {

  /**
   * Returns a render-able array for a test page.
   */
  public function content() {
    $serializer = \Drupal::service('serializer');
	$node = Node::load(17);
	$data = $serializer->serialize($node, 'json', ['plugin_id' => 'entity']);
    $build = [
      '#markup' => $data,
    ];
    return $build;
  }

}