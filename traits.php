<?php declare(strict_types=1);

// PHP 8.1
trait VersionDependent {
  protected function ensureVersion(): void {
    if (self::CURRENT_VERSION < self::MIN_VERSION) {
      throw new Exception('Current version is too old');
    }
  }
}

class foo {
  use VersionDependent;
  const CURRENT_VERSION = 2.4;
}

// PHP 8.2
trait VersionDependentPhp82 {
  final public const CURRENT_VERSION = 2.6;
  protected const MIN_VERSION     = 2.5;

  protected function ensureVersion(): void {
    if (self::CURRENT_VERSION < self::MIN_VERSION) {
      throw new Exception('Current version is too old');
    }
  }
}

class Application {
  use VersionDependentPhp82;
}

class MockApplication extends Application {
  protected const CURRENT_VERSION = 2.7;
  protected const MIN_VERSION     = 2.6;
}
Application::CURRENT_VERSION;