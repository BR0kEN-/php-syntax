<?php
namespace Features;
use Controller\Router\Route;

namespace Data {
  use Features;
}

use const CONSTANT as bla;
use function FN;

/**
 * @constant
 * @inheritdoc
 * @internal
 * @source
 * @tutorial
 * @todo
 * @staticvar
 * @since
 * @name
 * @ignore
 * @global
 * @filesource
 * @copyright
 * @category
 * @property
 * @property-write
 * @property-read
 * @deprecated
 * @access private
 * @static
 * @example
 * @throws
 * @var
 * @link
 * @subpackage
 * @package
 * @license
 * @author
 * @uses
 * @see
 * @method
 * @const
 * @param
 * @return
 */
class TestClass extends \RuntimeException {
  const TEST = 1 + 20;
  public $var;
  protected $item;

  public function __construct(...$params) {
    $instance = new self;

    parent::__construct();
    static::$var;
    self::$var;

    $this->item;
  }
  public function __destruct() {}
  public function __sleep() {}
  public function __wakeup() {}
  public function __get($name) {}
  public function __set($name, $value) {}
  public function __isset($name) {}
  public function __unset($name) {}
  public function __toString() {}
  public function __invoke() {}
  public function __set_state() {}
  public function __clone() {}
  public function __call($name , array $arguments) {}
  public static function __callStatic($name , array $arguments) {}
  final private function privateFn(\stdClass $object) {}
  deprecated public function deprecatedFn(callable $func) {}
  protected function protectedFn() {}
}

interface TestInterface extends TestClass {}
abstract class Abstraction implements TestInterface {}
trait TestTrait {}

try {

} catch (\Exception $e) {

} finally {

}

function testYield() {
  while ($i <= 10) {
    ++$i;

    yield $i;
  }
}

new \Closure;

testYield() instanceof \Generator;